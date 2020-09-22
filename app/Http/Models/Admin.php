<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //模型名称
    public $table='admin';

    //主键
    public $primaryKey="admin_id";

    //允许批量操作的字段

    //不允许批量操作的字段
    public $guarded=[];

    //是否维护相关时间字段
    public $timestamps=false;

    //
}
