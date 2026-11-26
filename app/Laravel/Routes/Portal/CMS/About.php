<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'as' => 'about.',
    'prefix' => 'about',
], function () {
    Route::get('/', ['as' => 'index', 'uses' => 'CMS\AboutController@index']);
    Route::post('/', ['uses' => 'CMS\AboutController@update']);
});
