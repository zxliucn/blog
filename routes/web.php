<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
////    return view('welcome');
//    echo "hello word";
//
//});
//Route::any('/', function () {
//    echo "any hello word";
//});
//Route::match(['get', 'post'],'/', function () { return '你好, World!'; });

//Route::get('/{id}', function ($id) { return 'Hello, World!'.$id; });
//Route::get('task', 'TaskController@index');
Route::get('task/read/{id}', 'TaskController@read');

