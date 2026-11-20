<?php

use Illuminate\Support\Facades\Route;

$namespace = "App\Laravel\Controllers\Backoffice";

Route::group([
    'prefix' => 'user-management',
    'as' => 'user-management.',
], function () {
    Route::get('/', ['as' => 'index', 'uses' => 'UserManagementController@index']);
    Route::get('{id}', ['as' => 'show', 'uses' => 'UserManagementController@show']);
    Route::get('{id}/edit', ['as' => 'edit', 'uses' => 'UserManagementController@edit']);
    Route::post('{id}/edit', ['as' => 'update', 'uses' => 'UserManagementController@update']);
    Route::get('{id}/delete', ['as' => 'destroy', 'uses' => 'UserManagementController@destroy']);
});
