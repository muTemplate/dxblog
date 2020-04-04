<?php


namespace app\admin\controller;


use app\admin\common\Base;
use think\Request;

class Login extends Base
{
    public function index(){


        return $this->fetch('login');
    }



    public function checkLogin(Request $req){
        $model = new \app\admin\model\Admin();
        $data = $req->param();
        $account = trim($data['account']);
        $pwd = !empty($data['password'])?substr(md5(trim($data['password'])),10,16):"";
        $captcha = $data['captcha'];

        if (empty($account)){
            return Message(0,'用户名不能为空');
        }
        if (empty($pwd)){
            return Message(0,'密码不能为空');
        }

        $user = $model->where('account',$account)->find();

        if (!$user){
            return Message(0,'用户不存在');
        }

        if ($pwd != $user['password']){
            return Message(0,'密码错误');
        }

        halt($data);


    }
}