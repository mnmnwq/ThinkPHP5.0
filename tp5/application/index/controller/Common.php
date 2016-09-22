<?php
namespace app\index\controller;
/**
 * Created by PhpStorm.
 * User: baiwei
 * Date: 16/9/21
 * Time: 上午9:38
 */
use think\Controller;
use think\Session;

class Common extends Controller{
    public function _initialize(){
        //设置session
        Session::set('is_login',true);
        Session::set('user_info',['user_id'=>1,'user_name'=>'1111']);
        //清空session
        Session::clear();
        //var_dump(session('user_info'));
        $this->is_login();
    }

    public function is_login(){
        if(Session::get('is_login')){
            //echo "yes";
        }else{
            //echo "no";
        }
    }

    /**
     * 登录
     */
    public function login(){

    }

    /**
     * 登出
     */
    public function quit(){

    }
}