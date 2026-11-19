<?php

namespace App\Laravel\Controllers\Portal;

use App\Laravel\Requests\PageRequest;

class ArticlesController extends Controller
{
    public function __construct() {}

    public function index(PageRequest $request)
    {
        $this->data['title_page'] = 'Articles';

        return view('portal.cms.articles', $this->data);
    }
}
