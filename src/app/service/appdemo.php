<?php


namespace lvtu\appdemo\service;


class Appdemo extends \think\Service
{
    public function boot()
    {
        $this->loadRoutesFrom(app().'vendor'.DIRECTORY_SEPARATOR.'lvtu1124'.DIRECTORY_SEPARATOR.'appdemo'.DIRECTORY_SEPARATOR.'route'.DIRECTORY_SEPARATOR.'Route.php');
    }
}
