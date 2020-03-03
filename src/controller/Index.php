<?php
namespace lvtu\appdemo\controller;

use app\BaseController;

class Index extends BaseController
{
    public function index($name)
    {
        return 'appdemo模块'.$name;
    }

}
