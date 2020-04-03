<?php

namespace app\admin\validate;

use think\Validate;

class Admin extends Validate{

    protected $rule = [
        ['account' ,  'require|max:30|unique:admin','登录账号不能为空|登录账号最多30字符|登录账号已经存在'],
        ['name' ,  'max:60','用户名称最多60字符'],
        ['password' , 'require|alphaDash','密码不能为空|密码只能是字母和数字，下划线_及破折号-'],
        ['status' ,  'in:0,1|number','是否禁用参数错误|是否禁用参数异常']
    ];


    protected  $scene =[

        'add' => ['account','name','password','status'],
        'edit' => ['account','name','password'=>['alphaDash'],'status'],

    ];

}
