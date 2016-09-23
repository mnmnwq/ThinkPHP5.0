<?php
namespace app\index\controller;
use think\Request;
use think\View;

class Index extends Common
{
    protected $view;
    public function _initialize(){
        parent::_initialize(); // TODO: Change the autogenerated stub
        $this->view = new View();
    }

    public function index(){
        //$request = Request::instance();
        return $this->view->fetch('index');
    }

    public function about_us(){
        return $this->fetch('about-us');
    }
}
