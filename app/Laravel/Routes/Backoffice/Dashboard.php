<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'as' => 'dashboard.',
], function () {
    Route::get('/', ['as' => 'index', 'uses' => 'DashboardController@index']);
});
