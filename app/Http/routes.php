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

Route::get('/', 'PostsController@index');
Route::get('/user/register', 'UsersController@register');
Route::post('/user/register', 'UsersController@store');
Route::get('/verify/{confirm_code}', 'UsersController@confirmEmail');

Route::resource('discussions', 'PostsController');