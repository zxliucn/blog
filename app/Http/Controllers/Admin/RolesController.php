<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RolesController extends Controller
{
    /**
     * 角色管理首页
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.roles.role-list");
    }

    /**
     * 添加角色
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.roles.role-add");
    }

    /**
     *
     *
     *
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * 查看角色详情
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * 修改角色信息
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 更新角色信息
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 删除角色信息
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
