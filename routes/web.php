<?php
use Illuminate\Support\Facades\Route;

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
/**
 * 博客登录后台统一路由配置
 */
Route::prefix('admin')->group(function () {
    Route::get('login/index', 'Admin\LoginController@index');
    Route::post('login/userLogin', 'Admin\LoginController@userLogin');
});


/**
 * 博客登录前台统一路由配置
 */
