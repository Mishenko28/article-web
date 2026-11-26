<?php

namespace App\Laravel\Controllers\Api;

/*
 * Request Validator
 */

use App\Laravel\Controllers\Api\Controller;
use App\Laravel\Models\CMS;
use App\Laravel\Requests\Api\CMSRequest;
use App\Laravel\Requests\PageRequest;
use App\Laravel\Traits\ResponseGenerator;
use App\Laravel\Transformers\CMSTransformer;
use App\Laravel\Transformers\TransformerManager;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

/* App Classes
 */

class CMSController extends Controller
{
    use ResponseGenerator;

    protected $data, $guard, $response, $response_code, $transformer;

    public function __construct()
    {
        parent::__construct();
        $this->transformer = new TransformerManager;
        $this->guard = "api";
    }

    public function index(PageRequest  $request)
    {
        $auth = $request->user($this->guard);

        $cms = CMS::where("user_id", $auth->id)->get();

        $this->response['status'] = TRUE;
        $this->response['status_code'] = "CMS_HOMEPAGE_LIST";
        $this->response['msg'] = "CMS Homepage list.";
        $this->response['data'] = $this->transformer->transform($cms, new CMSTransformer(), 'collection');
        $this->response_code = 200;

        callback:
        return response()->json($this->api_response($this->response), $this->response_code);
    }

    public function show(PageRequest $request, $id = null)
    {
        $auth = $request->user($this->guard);

        $cms = CMS::where("user_id", $auth->id)
            ->where("id", $id)
            ->first();

        if (!$cms) {
            $this->response['status'] = FALSE;
            $this->response['status_code'] = "CMS_HOMEPAGE_NOT_FOUND";
            $this->response['msg'] = "CMS Homepage not found.";
            $this->response_code = 404;

            goto callback;
        }

        $this->response['status'] = TRUE;
        $this->response['status_code'] = "CMS_HOMEPAGE_DETAIL";
        $this->response['msg'] = "CMS Homepage detail.";
        $this->response['data'] = $this->transformer->transform($cms, new CMSTransformer(), 'item');
        $this->response_code = 200;

        callback:
        return response()->json($this->api_response($this->response), $this->response_code);
    }

    public function store(CMSRequest $request)
    {
        $auth = $request->user($this->guard);

        DB::beginTransaction();
        try {

            $cms = new CMS;
            $cms->user_id = $auth->id;
            $cms->section = $request->input('section');
            $cms->content = $request->input('content');
            $cms->page = $request->input('page');

            $cms->save();

            DB::commit();

            $this->response['status'] = TRUE;
            $this->response['status_code'] = "CMS_HOMEPAGE_CREATED";
            $this->response['msg'] = "CMS Homepage was successfully created.";
            $this->response_code = 201;
        } catch (\Exception $e) {
            DB::rollback();

            Log::info("ERROR: ", array($e));

            $this->response['status'] = FALSE;
            $this->response['status_code'] = "SERVER_ERROR";
            $this->response['msg'] = "Server Error: Code #{$e->getMessage()}";
            $this->response_code = 500;
        }

        callback:
        return response()->json($this->api_response($this->response), $this->response_code);
    }

    public function update(CMSRequest $request, $id = null)
    {
        $auth = $request->user($this->guard);

        $cms = CMS::where("user_id", $auth->id)
            ->where("id", $id)
            ->first();

        if (!$cms) {
            $this->response['status'] = FALSE;
            $this->response['status_code'] = "CMS_HOMEPAGE_NOT_FOUND";
            $this->response['msg'] = "CMS Homepage not found.";
            $this->response_code = 404;

            goto callback;
        }

        DB::beginTransaction();
        try {
            $cms->section = $request->input('section');
            $cms->content = $request->input('content');
            $cms->page = $request->input('page');

            $cms->save();

            DB::commit();

            $this->response['status'] = TRUE;
            $this->response['status_code'] = "CMS_HOMEPAGE_UPDATED";
            $this->response['msg'] = "CMS Homepage was successfully updated.";
            $this->response['data'] = $this->transformer->transform($cms, new CMSTransformer(), 'item');
            $this->response_code = 200;
        } catch (\Exception $e) {
            DB::rollback();

            Log::info("ERROR: ", array($e));

            $this->response['status'] = FALSE;
            $this->response['status_code'] = "SERVER_ERROR";
            $this->response['msg'] = "Server Error: Code #{$e->getMessage()}";
            $this->response_code = 500;
        }

        callback:
        return response()->json($this->api_response($this->response), $this->response_code);
    }

    public function destroy(PageRequest $request, $id = null)
    {
        $auth = $request->user($this->guard);

        $cms = CMS::where("user_id", $auth->id)
            ->where("id", $id)
            ->first();

        if (!$cms) {
            $this->response['status'] = FALSE;
            $this->response['status_code'] = "CMS_HOMEPAGE_NOT_FOUND";
            $this->response['msg'] = "CMS Homepage not found.";
            $this->response_code = 404;

            goto callback;
        }

        DB::beginTransaction();
        try {
            $cms->delete();

            DB::commit();

            $this->response['status'] = TRUE;
            $this->response['status_code'] = "CMS_HOMEPAGE_DELETED";
            $this->response['msg'] = "CMS Homepage was successfully deleted.";
            $this->response_code = 200;
        } catch (\Exception $e) {
            DB::rollback();

            Log::info("ERROR: ", array($e));

            $this->response['status'] = FALSE;
            $this->response['status_code'] = "SERVER_ERROR";
            $this->response['msg'] = "Server Error: Code #{$e->getMessage()}";
            $this->response_code = 500;
        }

        callback:
        return response()->json($this->api_response($this->response), $this->response_code);
    }
}
