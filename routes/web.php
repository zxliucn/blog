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
    //后台首页
    Route::get('index', 'Admin\LoginController@index');

    //验证登录
    Route::post('loginAuth', 'Admin\LoginController@loginAuth');

    Route::any('home', 'Admin\LoginController@home');

    Route::get('welcome', 'Admin\LoginController@welcome');

    Route::get('loginOut', 'Admin\LoginController@loginOut');
});

/**
 * 博客登录前台统一路由配置
 */
