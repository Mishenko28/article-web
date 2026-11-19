<?php

namespace App\Laravel\Controllers\Backoffice;

use App\Laravel\Requests\PageRequest;

class DashboardController extends Controller
{
    public function __construct() {}

    public function index(PageRequest $request)
    {
        $this->data['title_page'] = 'Dashboard';

        return view('backoffice.dashboard', $this->data);
    }
}
