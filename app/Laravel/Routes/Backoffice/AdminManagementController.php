<?php

use Illuminate\Support\Facades\Route;

$namespace = "App\Laravel\Controllers\Backoffice";

Route::group([
    'prefix' => 'admin-management',
    'as' => 'admin-management.',
], function () {
    Route::get('/', ['as' => 'index', 'uses' => 'AdminManagementController@index']);
    Route::get('{id}', ['as' => 'show', 'uses' => 'AdminManagementController@show']);
    Route::get('{id}/edit', ['as' => 'edit', 'uses' => 'AdminManagementController@edit']);
    Route::post('{id}/edit', ['as' => 'update', 'uses' => 'AdminManagementController@update']);
    Route::get('{id}/delete', ['as' => 'destroy', 'uses' => 'AdminManagementController@destroy']);
});
