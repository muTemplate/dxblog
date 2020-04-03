<?php


namespace app\admin\model;

use traits\model\SoftDelete;
use think\Model;

class Admin extends Model
{
    //开启软删除
    use SoftDelete;
    protected $deleteTime = 'delete_time';

    protected $resultSetType = 'collection';
    protected $autoWriteTimestamp = true;




}