<?php
/**
 * Created by PhpStorm.
 * User: yaoyuan
 * Date: 17/1/3
 * Time: 下午1:31
 */
namespace app\ctrl;
use core\lib\model;

class indexCtrl extends \core\yy
{

    public function index(){

        //$temp=\core\lib\conf::get('CTRL','route');

        $model=new \app\model\indexModel();
        $res=$model->userList();
        $this->assign('res',$res);
        $this->display('index.html');

    }
    public function test(){
        $data='hhhhhhh';
        $this->assign('data',$data);
        $this->display('test.html');

    }
}