<?php

namespace app\admin\validate;

use think\Validate;

class Category extends Validate{

    protected $rule = [
        ['title' ,  'require|max:60|unique:category','栏目名称不能为空|栏目名称最多60字符|栏目名称已经存在'],
        ['name' ,  'max:100|alpha','英文名称最多100字符|英文名称不支持当前格式,只能是英文'],
        ['type' , 'require|number','栏目类型必选|栏目类型参数错误'],
        ['cate_folder' ,  'max:100','栏目文件名称最多100字符'],
        ['readauth' ,  'require|number','浏览权限必选|浏览权限参数异常'],
        ['isread' ,   'require|in:0,1|number','隐藏栏目必选|隐藏栏目参数错误|隐藏栏目参数异常'],
        ['meta_title' ,  'max:150','SEO标题最多150字符'],
        ['meta_key' ,  'max:200','SEO关键词最多200字符'],
        ['meta_desc' ,  'max:200','SEO描述最多200字符'],
    ];


    protected  $scene =[

        'add' => ['title','name','type','cate_folder','readauth','isread','meta_title','meta_key','meta_desc'],
        'edit' => ['title','name','type','cate_folder','readauth','isread','meta_title','meta_key','meta_desc'],

    ];

}
