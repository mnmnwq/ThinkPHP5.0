<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
        return $view->fetch('Index/index');
    }
}
