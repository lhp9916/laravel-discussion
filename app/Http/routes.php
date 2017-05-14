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
//首页
Route::get('/', 'PostsController@index');
Route::post('/post/upload', 'PostsController@upload');

//用户
Route::get('/user/register', 'UsersController@register');
Route::post('/user/register', 'UsersController@store');
Route::get('/user/login', 'UsersController@login');
Route::post('/user/login', 'UsersController@sign');
Route::get('/user/avatar', 'UsersController@avatar');
Route::post('/avatar', 'UsersController@changeAvatar');
Route::get('/logout', 'UsersController@logout');
//验证邮箱
Route::get('/verify/{confirm_code}', 'UsersController@confirmEmail');

//帖子
Route::resource('discussions', 'PostsController');

//评论
Route::resource('comments', 'CommentsController');

Route::post('/deploy', 'DeploymentController@deploy');