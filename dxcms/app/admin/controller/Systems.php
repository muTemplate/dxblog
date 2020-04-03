<?php

namespace app\admin\controller;

use app\admin\common\Base;
use app\admin\model\Systems;
use think\Request;

class SetUp extends Base
{

    /**
     * 系统设置首页
     * 渲染页面
     **/


    public function index()
    {

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
        $moder = new Systems();
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
            ];

            $validate = validate('systems');

            if ($validate->scene('add')->check($setup) === false) {
                $this->error($validate->getError());
            } else {

                if ($moder->save($data)) {
                    $this->success('执行操作成功');
                } else {

                    $this->error('执行操作失败');
                }
            }

        } else {
            $this->error('异常操作');
        }


    }


}
