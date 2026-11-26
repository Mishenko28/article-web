<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'as' => 'home.',
], function () {
    Route::get('/', ['as' => 'index', 'uses' => 'CMS\HomeController@index']);
    Route::post('/', ['uses' => 'CMS\HomeController@update']);
});
