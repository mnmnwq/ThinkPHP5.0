<?php
namespace app\index\controller;
/**
 * Created by PhpStorm.
 * User: baiwei
 * Date: 16/9/26
 * Time: 下午2:10
 */
class Question extends Common {
    public function _initialize(){
        parent::_initialize();
    }
    public function question_info(){
        return $this->view->fetch('faq');
    }
}