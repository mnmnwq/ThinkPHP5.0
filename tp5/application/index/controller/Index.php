<?php
namespace app\index\controller;
use think\View;
use think\Controller;

class Index extends Controller
{
    public function index()
    {
        $view = new view();
        return $view->fetch('Index/index');
    }
}
