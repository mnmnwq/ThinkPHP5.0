<?php
namespace app\admin\model;
/**
 * Created by PhpStorm.
 * User: baiwei
 * Date: 16/9/22
 * Time: 上午9:44
 */
use \Think\Model;
class User extends Model{
    protected $table = 'user';  //表名
    protected $pk = 'id';    //主键
}