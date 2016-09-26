<?php
namespace app\index\controller;
/**
 * Created by PhpStorm.
 * User: baiwei
 * Date: 16/9/26
 * Time: 下午3:02
 */
class Blog extends Common {
    public function _initialize(){
        parent::_initialize();
    }

    public function blog(){
        return $this->view->fetch('blog');
    }

    public function blog_detail(){
        return $this->view->fetch('blog-details');
    }
}