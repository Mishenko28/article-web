<?php

namespace App\Laravel\Controllers\Portal;

use App\Laravel\Requests\PageRequest;

class HomeController extends Controller
{
    public function __construct() {}

    public function index(PageRequest $request)
    {
        $this->data['title_page'] = 'Home';

        return view('portal.cms.home', $this->data);
    }
}
