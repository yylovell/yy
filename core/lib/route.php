<?php
/**
 * Created by PhpStorm.
 * User: yaoyuan
 * Date: 16/12/30
 * Time: 下午5:30
 */
namespace core\lib;
use core\lib\conf;
class route{
    public $ctrl;//controller
    public $act;//method

    public function __construct()
    {
        /*
         * 1.隐藏index.php 重写模式
         * 2、获取URL 参数部分
         * 3、返回对应得控制器和方法
         */

        if(isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI']!='/'){
            $path = $_SERVER['REQUEST_URI'];
            $pathArr=explode('/',trim($path,'/'));
            /*
             * 下面的，控制器 、方法获取
             * 由于存在子目录，例如：127.0.0.1/yy/index/index
             * 所以 $pathArr 数组有三个值
             */

            if(isset($pathArr[1])){
                $this->ctrl = $pathArr[1];
            }
            unset($pathArr[0]);
            unset($pathArr[1]);
            if(isset($pathArr[2])){
                $this->act=$pathArr[2];
                unset($pathArr[2]);
            }else{
                $this->act=conf::get('ACT','route');
            }
            //url多余部分转换成GET
            //例如：127.0.0.1/yy/index/index/p/1/test/2

            $count=count($pathArr)+3;
            $i=3;

            while ($i<$count){
                if(isset($pathArr[$i+1])){
                    $_GET[$pathArr[$i]]=$pathArr[$i+1];
                }
                $i=$i+2;
            }
            //print_r($_GET);



        }else{
            $this->ctrl = conf::get('CTRL','route');
            $this->act = conf::get('ACT','route');
        }

    }


























}