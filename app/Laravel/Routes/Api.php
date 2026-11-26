<?php

use Illuminate\Support\Facades\Route;

$namespace = "App\Laravel\Controllers\Api";

Route::group([
    'as' => "api.",
    'namespace' => $namespace,
    'middleware' => ["api"]
], function () {
    Route::get('/health', ['uses' => 'SettingController@health']);

    include_once app_path('Laravel/Routes/API/Auth.php');

    Route::group(['middleware' => "api.auth"], function () {
        Route::group(['prefix' => "profile", 'as' => 'profile.'], function () {
            Route::post('info', ['uses' => 'ProfileController@show']);
        });

        include_once app_path('Laravel/Routes/API/Articles.php');
        include_once app_path('Laravel/Routes/API/CMS.php');
    });
});
