<?php

namespace App\Laravel\Controllers\Portal\CMS;

use App\Laravel\Controllers\Portal\Controller;
use App\Laravel\Models\CMS;
use App\Laravel\Requests\PageRequest;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    public function __construct() {}

    public function index(PageRequest $request)
    {
        $auth = $request->user('web');

        $this->data['title_page'] = 'About';
        $this->data['variables'] = CMS::where('user_id', $auth->id)
            ->where('page', 'about')
            ->get();

        return view('portal.cms.about', $this->data);
    }

    public function update(PageRequest $request)
    {
        $auth = $request->user('web');

        DB::beginTransaction();

        try {
            foreach ($request->all() as $key => $value) {
                if ($key === "_token") continue;

                $cms_about = CMS::where('section', $key)
                    ->where('page', 'about')
                    ->first();

                if (!$cms_about) {
                    $cms_about = new CMS;
                    $cms_about->user_id = $auth->id;
                    $cms_about->section = $key;
                    $cms_about->page = 'about';
                }

                $cms_about->content = $value;
                $cms_about->save();
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
        return redirect()->route('portal.about.index');
    }
}
