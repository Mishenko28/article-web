<?php

namespace App\Laravel\Controllers\Web;

use App\Laravel\Models\CMS;
use App\Laravel\Requests\PageRequest;

class MainController extends Controller
{
    public function __construct() {}

    public function index(PageRequest $request)
    {
        $auth = $request->user('web');

        $this->data['title_page'] = 'Home';

        if (!$auth) {
            return view('web.default-pages.home', $this->data);
        }

        $this->data['variables'] = CMS::where('user_id', $auth->id)
            ->where('page', 'home')
            ->get();

        return view('web.home', $this->data);
    }

    public function about(PageRequest $request)
    {
        $auth = $request->user('web');

        $this->data['title_page'] = 'About';

        if (!$auth) {
            return view('web.default-pages.about', $this->data);
        }

        $this->data['variables'] = CMS::where('user_id', $auth->id)
            ->where('page', 'about')
            ->get();

        return view('web.about', $this->data);
    }

    public function contact(PageRequest $request)
    {
        $auth = $request->user('web');

        $this->data['title_page'] = 'Contact';

        if (!$auth) {
            return view('web.default-pages.contact', $this->data);
        }

        $this->data['variables'] = CMS::where('user_id', $auth->id)
            ->where('page', 'contact')
            ->get();

        return view('web.contact', $this->data);
    }

    public function articles(PageRequest $request)
    {
        $auth = $request->user('web');

        $this->data['title_page'] = 'Articles';

        if (!$auth) {
            return view('web.default-pages.articles', $this->data);
        }

        $this->data['variables'] = CMS::where('user_id', $auth->id)
            ->where('page', 'articles')
            ->get();

        return view('web.articles', $this->data);
    }

    public function article(PageRequest $request)
    {
        $auth = $request->user('web');

        $this->data['title_page'] = 'Article';

        if (!$auth) {
            return view('web.default-pages.article', $this->data);
        }

        $this->data['variables'] = CMS::where('user_id', $auth->id)
            ->where('page', 'articles')
            ->get();

        return view('web.article', $this->data);
    }
}
