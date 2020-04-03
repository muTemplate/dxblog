<?php
namespace app\admin\controller;

use app\admin\common\Base;
use think\Request;

class SetUp extends Base
{

    /**
     * 系统设置首页
     * 渲染页面
     **/


    public function index()
    {
         
        return  $this->fetch('system');
    } 

    /**
     * 系统设置添加页
     * @ 渲染模板
     * */

    public function add()
    {
         
        return  $this->fetch('add');
    } 


    /**
     * 数据库操作项
     *  @ 添加数据
     **/
    public function save(Request $req){
        
        /**
         * - 判断数据是否POST方式 -
         * 不是返回错误提示
         * */


    }


}
