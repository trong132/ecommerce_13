<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('', [
    'as' => 'public.index.index',
    'uses' => 'IndexController@index'
]);

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function() {
    Route::get('', [
        'as' => 'admin.index.index',
        'uses' => 'IndexController@index'
    ]);
});
