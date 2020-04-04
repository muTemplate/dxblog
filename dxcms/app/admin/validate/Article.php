<?php

namespace app\admin\validate;

use think\Validate;

class Article extends Validate{

    protected $rule = [
        ['title' ,  'require|max:500','文章标题不能为空|文章标题最多500字符'],
        ['info' ,  'max:500','文章摘要最多500字符'],
    ];


    protected  $scene =[

        'add' => ['title','info'],
        'edit' => ['title','info'],

    ];

}
