<?php
/**
 * Created by PhpStorm.
 * User: yaoyuan
 * Date: 17/1/3
 * Time: 下午5:32
 */
namespace app\model;
use core\lib\model;

class indexModel extends model
{
    public $table='user';
    public function userList()
    {
        $res=$this->select($this->table,'*');
        return $res;
    }
}