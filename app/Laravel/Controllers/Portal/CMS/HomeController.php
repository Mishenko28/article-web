<?php

namespace App\Laravel\Controllers\Portal\CMS;

use App\Laravel\Controllers\Portal\Controller;
use App\Laravel\Models\CMS\Homepage;
use App\Laravel\Requests\PageRequest;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function __construct() {}

    public function index(PageRequest $request)
    {
        $auth = $request->user('web');

        $this->data['title_page'] = 'Home';
        $this->data['variables'] = Homepage::where('user_id', $auth->id)->get();

        return view('portal.cms.home', $this->data);
    }

    public function update(PageRequest $request)
    {
        $auth = $request->user('web');

        DB::beginTransaction();

        try {
            foreach ($request->all() as $key => $value) {
                if ($key === "_token") continue;

                $cms_homepage = Homepage::where('section', $key)->first();

                if (!$cms_homepage) {
                    $cms_homepage = new Homepage;
                    $cms_homepage->user_id = $auth->id;
                    $cms_homepage->section = $key;
                }

                $cms_homepage->content = $value;
                $cms_homepage->save();
            }

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();

            session()->flash('notification-status', "failed");
            session()->flash('notification-msg', "Server error. Please try again later.");
            return redirect()->back();
        }

        session()->flash('notification-status', "success");
        session()->flash('notification-msg', "Successfully updated.");
        return redirect()->route('portal.home.index');
    }
}
