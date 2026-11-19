<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'as' => 'profile.',
    'prefix' => 'profile',
], function () {
    Route::get('/', ['as' => 'index', 'uses' => 'ProfileController@index']);

    Route::get('edit', ['as' => 'edit', 'uses' => 'ProfileController@edit']);
    Route::post('edit', ['uses' => 'ProfileController@update']);
});
