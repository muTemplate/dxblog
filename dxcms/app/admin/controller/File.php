<?php


namespace app\admin\controller;


use app\admin\common\Base;
use think\Request;

class File extends Base
{

    /**
     * 头像上传
     * */
    public function face(){

        /**
         * @ 系统设置项 读取数据库
         */
        $imgSize = 1*1024*1024; //默认最大1M
        $imgExt = array("image/jpg","image/gif","image/jpeg","image/png");
        $w = "400";
        $h = "400";
        $filePath = $this->setSystem()['cfg_upload_path'].'/admin/face';

        //halt($filePath);

        /**
         * 获取上传文件
         * */
        $file = request()->file('file');
        $fileArray = (array)$file;
        $imgInfo[] =  "";
        foreach ($fileArray as $key=>$val){
            $imgInfo[] = $val;
        }

        /**
         * 验证图片的宽高是否符合尺寸
         */
        $width = getimagesize($imgInfo[7]['tmp_name'])[0];
        $height = getimagesize($imgInfo[7]['tmp_name'])[1];
        if ($width != $w || $height != $h){
            return Message(0,'头像图片尺寸只能是400*400');
        }

        /**
         * 验证图片后缀是否符合
         */
        if (in_array($imgInfo[7]['type'],$imgExt)===false){
            return Message(0,'不支持的图片类型');
        }

        /**
         * 验证图片大小是否符合设置
         */

        if ($imgSize<$imgInfo[7]['size']){
            return Message(0,'头像图片不能超过1M');
        }

        /**
         *  通过验证 移动图片到指定文件夹，并返回存储地址
         *      $imagePath
         **/
        $info = $file->rule('uniqid')->move($filePath);

        if ($info){

            $imagePath = str_replace('\\','/','/'.$filePath.'/'.$info->getFilename());

            return Message(1,'上传成功',$imagePath);
        }else{

            return Message(0,$file->getError());
        }

    }





}