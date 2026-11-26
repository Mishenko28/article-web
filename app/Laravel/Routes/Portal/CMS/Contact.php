<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'as' => 'contact.',
    'prefix' => 'contact',
], function () {
    Route::get('/', ['as' => 'index', 'uses' => 'CMS\ContactController@index']);
    Route::post('/', ['uses' => 'CMS\ContactController@update']);
});
