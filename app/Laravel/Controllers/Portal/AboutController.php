<?php

namespace App\Laravel\Controllers\Portal;

use App\Laravel\Requests\PageRequest;

class AboutController extends Controller
{
    public function __construct() {}

    public function index(PageRequest $request)
    {
        $this->data['title_page'] = 'About';

        return view('portal.cms.about', $this->data);
    }
}
