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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('リクエスト', 'コントローラ名@メソッド名');
// リクエストに対応するメソッドを指定する
Route::get('/', 'WelcomeController@index');
Route::get('/contact', 'WelcomeController@contact');
























