<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    /**
     * Notes: 后台登录首页
     * User: Depp
     * Date: 2020/9/21
     * Time: 16:43
     */
    public function index(){
        return view("admin/login");
    }

    /**
     * Notes:用户登录方法
     * User: Depp
     * Date: 2020/9/21
     * Time: 16:58
     */
    public function  userLogin(Request $request){
        $request = $request->except('_token');

    }
}
