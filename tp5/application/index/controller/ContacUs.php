<?php
namespace app\index\controller;
/**
 * Created by PhpStorm.
 * User: baiwei
 * Date: 16/9/26
 * Time: 下午2:23
 */
class ContacUs extends Common {
    public function _initialize(){
        parent::_initialize();
    }

    /**
     * 导航栏上面的联系我们
     * Time:
     */
    public function contac_us(){
        return $this->view->fetch('contact-us');
    }
}