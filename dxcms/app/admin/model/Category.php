<?php


namespace app\admin\model;

use traits\model\SoftDelete;
use think\Model;

class Category extends Model
{
    //开启软删除
    use SoftDelete;
    protected $deleteTime = 'delete_time';

    protected $resultSetType = 'collection';
    protected $autoWriteTimestamp = true;

    /**
    * 递归查栏目
    **/

    static function getList()
    {

        $list = self::all()->toArray();
        return self::getCategory($list);
    }


    static function getCategory($count,$pid=0,$level=0)
    {
        static $arr=array();
        foreach($count as $k => $v){
            if($v['pid'] == $pid){
                $v['level']=$level;
                $arr[] = $v;
                self::getCategory($count,$v['id'],$level+1);
            }
        }
        return $arr;
    }

}