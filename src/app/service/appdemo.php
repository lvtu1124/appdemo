<?php
namespace lvtu\appdemo\service;

class Appdemo extends \think\Service
{
    public function boot()
    {
        $this->loadRoutesFrom(app()->getBasePath().'vendor'.DIRECTORY_SEPARATOR.'lvtu1124'.DIRECTORY_SEPARATOR.'appdemo'.DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.'route'.DIRECTORY_SEPARATOR.'Route.php');
    }
}
