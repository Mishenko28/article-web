<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => "cms", 'as' => 'cms.'], function () {
    Route::get('/', ['uses' => 'CMSController@index']);
    Route::get('info/{id?}', ['uses' => 'CMSController@show']);
    Route::post('create', ['uses' => 'CMSController@store']);
    Route::patch('edit/{id?}', ['uses' => 'CMSController@update']);
    Route::delete('delete/{id?}', ['uses' => 'CMSController@destroy']);
    Route::patch('restore/{id?}', ['uses' => 'CMSController@restore']);
});
