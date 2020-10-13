<?php

namespace App\Http\Controllers\Admin;

use App\Http\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * 后台用户列表页
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
          $userList = DB::table("admin")
              ->orderBy('admin_id','desc')
              ->where(function ($queue) use($request){
                  $username=$request->input('username');
                    if(!empty($username)){
                        $queue->where('admin_name','like','%'.$username.'%');
                    }
                })
              ->paginate($request->input('page_num')??4);
      return  view("admin.user.member-list",compact('userList','request'));
    }

    /**
     * 后台用户添加页
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roleInfo = DB::table('');

        return view("admin.user.member-add");
    }

    /**
     * 用户添加方法
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fromData=$request->all()['data'];
        $inData['admin_name'] = $fromData['username'];
        $inData['admin_pass'] = Hash::make($fromData['pass']);
        $inData['admin_email'] = $fromData['email'];
        $res =  DB::table("admin")->insert($inData);
        $data=['status'=>1,'msg'=>'添加成功'];
        if(!$res){
            $data=['status'=>0,'msg'=>'添加失败，请检查原因！！'];
        }
        return $data;
    }

    /**
     * 用户详情展示页
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $userInfo=DB::table('admin')->where('admin_id',$id)->first();
        return  view("admin.user.member-edit");
    }

    /**
     *  用户详情修改页
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $userInfo=DB::table('admin')->where('admin_id',$id)->first();
        return  view("admin.user.member-edit",compact('userInfo'));
    }

    /**
     * 用户信息修改方法
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $upData=$request->all()['data'];
        $upData['admin_pass'] =  Hash::make($upData['admin_pass']);
        $res=DB::table("admin")->where('admin_id',$id)->update($upData);
        $data=['status'=>1,'msg'=>'更改成功'];
        if(!$res){
            $data=['status'=>0,'msg'=>'更改失败，请检查原因！！'];
        }
        return $data;
    }

    /**
     * 用户信息删除方法
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res=DB::table("admin")->where('admin_id',$id)->delete();
        $data=['status'=>1,'msg'=>'删除成功'];
        if(!$res){
            $data=['status'=>0,'msg'=>'删除失败，请检查原因！！'];
        }
        return $data;
    }
}
