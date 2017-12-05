<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::any('/about','GoodsController@getAbout'); //路由
Route::any('/add','GoodsController@add'); //路由
Route::any('/show','GoodsController@show'); //路由
Route::any('/deletes','GoodsController@deletes'); //路由
Route::any('/updates','GoodsController@updates'); //路由
Route::any('/update_do','GoodsController@update_do'); //路由

Route::any('/login','LoginController@setlogin'); //路由
Route::any('/login_do','LoginController@login_do'); //路由

Route::any('/addtime','DuilieController@getadd'); //路由
Route::any('/add_do','DuilieController@add_do'); //路由
Route::any('/showtime','DuilieController@show'); //路由

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
