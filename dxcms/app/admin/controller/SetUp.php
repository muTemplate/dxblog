<?php
namespace app\admin\controller;

use app\admin\common\Base;

class SetUp extends Base
{
    public function index()
    {
         
        return  $this->fetch('system');
    } 
}
