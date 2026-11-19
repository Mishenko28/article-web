<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'as' => 'home.',
], function () {
    Route::get('/', ['as' => 'index', 'uses' => 'HomeController@index']);
});
