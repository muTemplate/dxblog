<?php


namespace app\admin\controller;


use app\admin\common\Base;
use think\Request;

class Captcha extends Base
{
    public function index(){
        /* 验证码配置 */
        $config =    [
            // 验证码字体大小
            'fontSize'    =>    22,
            // 验证码位数
            'length'      =>    4,
            // 关闭验证码杂点
            'useNoise'    =>    true,
            //混淆曲线
            'useCurve'    =>    false,
            //z中文验证码
            'useZh'     =>  false,
//            //中文验证码字符串
//            'zhSet'     =>     "",
//            // 英文验证码字符串
//            'codeSet'   => '',
            //验证码高度
            'imageH'    =>  60,
            //验证宽度
            'imageW'    => 200,
        ];

        $captcha = new \think\captcha\Captcha($config);
        return $captcha->entry();

    }

}