<?php

namespace app\admin\validate;

use think\Validate;

class systems extends Validate{

    protected $rule = [
        ['title' ,  'require|max:60|chsAlpha|unique:systems','设置说明不能为空|设置说明最多60字符|设置说明只能是汉字和字母|设置说明已经存在'],
        ['name' ,  'require|max:60|alphaDash|unique:systems','设置参数不能为空|设置参数最多60字符|设置参数只能是字母和数字，下划线_|设置参数已经存在'],
        ['value' , 'max:200','设置默认值最多200字符'],
        ['input_type' ,  'in:1,2|number','设置类型参数错误|设置类型参数异常']
    ];


    protected  $scene =[

        'add' => ['title','name','value','input_type'],
        'edit' => ['title','name','value','input_type'],

    ];

}
