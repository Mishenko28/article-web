<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => "articles", 'as' => 'article.'], function () {
    Route::get('/', ['uses' => 'ArticleController@index']);
    Route::get('info/{id?}', ['uses' => 'ArticleController@show']);
    Route::post('create', ['uses' => 'ArticleController@store']);
    Route::patch('edit/{id?}', ['uses' => 'ArticleController@update']);
    Route::delete('delete/{id?}', ['uses' => 'ArticleController@destroy']);
    Route::patch('restore/{id?}', ['uses' => 'ArticleController@restore']);
});
