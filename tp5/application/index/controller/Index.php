<?php
namespace app\index\controller;
use think\Request;
use think\View;

class Index extends Common
{
    public function _initialize()
    {
        parent::_initialize(); // TODO: Change the autogenerated stub
    }

    public function index()
    {
        $request = Request::instance();
        $view = new view();
        return $view->fetch('index');
    }
}
