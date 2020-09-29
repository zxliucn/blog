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
//不需要登录验证
Route::group(['prefix'=>'admin','namespace'=>'Admin'],function (){
    //后台登录页
    Route::get('index', 'LoginController@index');
    //验证登录
    Route::post('loginAuth', 'LoginController@loginAuth');
});
//需要登录验证
Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>'isLogin'],function (){
    //后台首页
    Route::any('home', 'LoginController@home');
    //后台欢迎页
    Route::get('welcome', 'LoginController@welcome');
    //退出登录
    Route::get('loginOut', 'LoginController@loginOut');
    Route::resource('user','UserController');
});
/**
 * 博客登录前台统一路由配置
 */
