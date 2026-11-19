<?php

use Illuminate\Support\Facades\Route;

$namespace = "App\Laravel\Controllers\Portal";

Route::group([
    'as' => 'portal.',
    'namespace' => $namespace,
    'prefix' => 'user',
    'middleware' => ['web'],
], function () {
    include_once app_path('Laravel/Routes/Portal/Auth.php');

    Route::group(['middleware' => 'portal.auth'], function () {
        Route::get('logout', ['as' => 'logout', 'uses' => 'AuthenticationController@logout']);
        include_once app_path('Laravel/Routes/Portal/CMS/Home.php');
        include_once app_path('Laravel/Routes/Portal/CMS/About.php');
        include_once app_path('Laravel/Routes/Portal/CMS/Contact.php');
        include_once app_path('Laravel/Routes/Portal/CMS/Articles.php');
        include_once app_path('Laravel/Routes/Portal/Profile.php');
    });
});
