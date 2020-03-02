<?php
namespace lvtu\appdemo\controller;

use app\BaseController;

class Index extends BaseController
{
    public function index($name)
    {
        return 'appdemo2222模块|'.$name;
    }

}
