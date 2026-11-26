<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'as' => 'articles.',
    'prefix' => 'articles',
], function () {
    Route::get('/', ['as' => 'index', 'uses' => 'CMS\ArticlesController@index']);
    Route::post('/', ['uses' => 'CMS\ArticlesController@update']);
});
