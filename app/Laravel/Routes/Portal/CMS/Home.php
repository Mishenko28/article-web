<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'as' => 'home.',
    'prefix' => 'home',
], function () {
    Route::get('/', ['as' => 'index', 'uses' => 'HomeController@index']);
});
