<?php
/**
 * Created by PhpStorm.
 * User: yaoyuan
 * Date: 17/1/3
 * Time: 下午3:20
 */
namespace core\lib;
use core\lib\conf;
class log
{
    static public $class;
    static public function init(){
        //确定存储方式
        $drive = conf::get('DRIVE','log');
        $class ='\core\lib\drive\log\\'.$drive;
        self::$class= new $class;
    }

    static public function log($message,$file='log'){
        self::$class->log($message,$file);
    }
















}