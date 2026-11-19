<?php

namespace App\Laravel\Controllers\Web;

use App\Laravel\Requests\PageRequest;

class MainController extends Controller
{
    public function __construct() {}

    public function index()
    {
        $this->data['title_page'] = 'Home';

        return view('web.home', $this->data);
    }

    public function about()
    {
        $this->data['title_page'] = 'About';

        return view('web.about', $this->data);
    }

    public function contact()
    {
        $this->data['title_page'] = 'Contact';

        return view('web.contact', $this->data);
    }

    public function articles()
    {
        $this->data['title_page'] = 'Articles';

        return view('web.articles', $this->data);
    }

    public function article()
    {
        $this->data['title_page'] = 'Article';

        return view('web.article', $this->data);
    }
}
