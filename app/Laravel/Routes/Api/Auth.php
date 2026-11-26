<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => "auth", 'as' => 'auth.'], function () {
    Route::post('register', ['uses' => 'AuthenticationController@register']);
    Route::post('login', ['uses' => 'AuthenticationController@login']);

    Route::post('logout', ['uses' => 'AuthenticationController@logout'])->middleware(["api.auth"]);
    Route::post('refresh-token', ['uses' => 'AuthenticationController@refresh_token'])->middleware(["api.auth"]);
    Route::post('check-login', ['uses' => 'AuthenticationController@check_login'])->middleware(["api.auth"]);
});
