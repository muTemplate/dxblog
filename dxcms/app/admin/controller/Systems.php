<?php

namespace app\admin\controller;

use app\admin\common\Base;
use think\Request;

class Systems extends Base
{

    /**
     * 系统设置首页
     * 渲染页面
     **/
    public function index()
    {
        $system = \app\admin\model\Systems::all()->toArray();

       $this->assign([
           'list'   =>  $system,
       ]);
        return $this->fetch('system');
    }

    /**
     * 系统设置添加页
     * @ 渲染模板
     * */

    public function add()
    {

        return $this->fetch('add');
    }


    /**
     * 数据库操作项
     *  @ 添加数据
     **/
    public function save(Request $req)
    {

        /**
         * - 判断数据是否POST方式 -
         * 不是返回错误提示
         * */
        if ($req->isPost()) {
            $data = $req->param();
            $setup = [
                'title' => trim($data['title']),
                'name' => trim($data['name']),
                'value' => trim($data['value']),
                'input_type' => (int)trim($data['input_type']),
                'pid'   =>  (int)trim($data['pid']),
            ];

            $validate = validate('systems');

            if ($validate->scene('add')->check($setup) === false) {
                $this->error($validate->getError());
            } else {

                if (\app\admin\model\Systems::create($setup)) {
                    $this->success('执行操作成功');
                } else {

                    $this->error('执行操作失败');
                }
            }

        } else {
            $this->error('异常操作');
        }

    }

    /**
    * 更新设置
    **/
    public function update(){
        if(   $this->request->isPost() ){
            $data = $this->request->param();

            foreach ($data as $k => $v){

               \app\admin\model\Systems::update(['value'=>$v],['name'=>$k]);
            }

             $this->success('执行操作成功','systems/index');
        }


    }

    //
   public function __construct(Request $request = null)
   {
       parent::__construct($request);
   }


}
