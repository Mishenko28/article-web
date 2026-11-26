<?php

namespace App\Laravel\Controllers\Portal\CMS;

use App\Laravel\Controllers\Portal\Controller;
use App\Laravel\Models\CMS\Articles;
use App\Laravel\Requests\PageRequest;
use Illuminate\Support\Facades\DB;

class ArticlesController extends Controller
{
    public function __construct() {}

    public function index(PageRequest $request)
    {
        $auth = $request->user('web');

        $this->data['title_page'] = 'Articles';
        $this->data['variables'] = Articles::where('user_id', $auth->id)->get();

        return view('portal.cms.articles', $this->data);
    }

    public function update(PageRequest $request)
    {
        $auth = $request->user('web');

        DB::beginTransaction();

        try {
            foreach ($request->all() as $key => $value) {
                if ($key === "_token") continue;

                $cms_articles = Articles::where('section', $key)->first();

                if (!$cms_articles) {
                    $cms_articles = new Articles;
                    $cms_articles->user_id = $auth->id;
                    $cms_articles->section = $key;
                }

                $cms_articles->content = $value;
                $cms_articles->save();
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
        return redirect()->route('portal.articles.index');
    }
}
