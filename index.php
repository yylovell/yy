<?php
/**
 * Created by PhpStorm.
 * User: yaoyuan
 * Date: 16/12/30
 * Time: 下午5:07
 */
//+---------------------------------------
//|入口文件
//+---------------------------------------
//|1、定义常量
//+---------------------------------------
//|2、加载函数库
//+---------------------------------------
//|3、启动框架
//+---------------------------------------
define('YY',dirname(realpath(__FILE__)));
//define('CORE',YY.'/core');
//define('APP',YY.'/app');
define('CORE','./core');
define('APP','./app');
define('MODULE','app');
define('DEBUG',true);

include "vendor/autoload.php";
if(DEBUG){
    $whoops = new \Whoops\Run;
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();
    ini_set('display_errors','On');
}else{
    ini_set('display_errors','Off');
}

include CORE.'/common/function.php';
include CORE.'/yy.php';
//new one func,  if can not find , load func 'load' auto
spl_autoload_register('\core\yy::load');

\core\yy::run();
























