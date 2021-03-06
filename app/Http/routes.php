<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

Route::auth();
Route::get('images/{fileName}', 'User\ImageController@index');

Route::group(['middleware' => 'auth'], function () {
    Route::get('pdf/{fileName}', 'HomeController@pdf');
    Route::get('edit', 'User\UserController@edit');
});
