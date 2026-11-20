<?php

use Illuminate\Support\Facades\Route;

$namespace = "App\Laravel\Controllers\Backoffice";

Route::group([
    'as' => 'backoffice.',
    'namespace' => $namespace,
    'prefix' => 'admin',
    'middleware' => ['web'],
], function () {
    include_once app_path('Laravel/Routes/Backoffice/Auth.php');

    Route::group(['middleware' => 'backoffice.auth'], function () {
        Route::get('logout', ['as' => 'logout', 'uses' => 'AuthenticationController@logout']);
        include_once app_path('Laravel/Routes/Backoffice/Dashboard.php');
        include_once app_path('Laravel/Routes/Backoffice/Profile.php');
        include_once app_path('Laravel/Routes/Backoffice/UserManagementController.php');
        include_once app_path('Laravel/Routes/Backoffice/AdminManagementController.php');
    });
});
