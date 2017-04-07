<?php
/**
 * Created by PhpStorm.
 * User: yaoyuan
 * Date: 16/12/30
 * Time: 下午5:17
 */
namespace core;

class yy{

    public static $classMap = array();//检查是否已经引入类库
    public $assign;

    public static function run(){

        $route=new \core\lib\route();
        $ctrlClass=$route->ctrl;
        $action=$route->act;
        $ctrlFile=APP.'/ctrl/'.$ctrlClass.'Ctrl.php';
        $ctrlClass='\\'.MODULE.'\ctrl\\'.$ctrlClass.'Ctrl';
        if(is_file($ctrlFile)){
            include $ctrlFile;
            $ctrl=new $ctrlClass();
            $ctrl->$action();
        }
    }

    public static function load($class){
        //自动加载类库
        //$class = '\core\route'
        //$class => YY.'/core/route.php'
        if(isset($classMap[$class])){//已经加载
            return true;
        }else{
            $class = str_replace('\\','/',$class);

            $file=YY.'/'.$class.'.php';

            if(is_file($file)){
                include $file;
                self::$classMap[$class]=$class;
            }else{
                return false;
            }
        }
    }

    //模板加入变量
    public function assign($name,$value){
        $this->assign[$name]=$value;
    }

    //显示模板
    public function display($file){
        $filepath=APP.'/view/'.$file;
        if(is_file($filepath)){
            /*extract($this->assign);
            include $file;*/
            //换成twig
            \Twig_Autoloader::register();
            $loader=new \Twig_Loader_Filesystem(APP.'/view');
            $twig=new \Twig_Environment($loader,array(
                'cache'=>YY.'/log/twig',
                'debug'=>DEBUG
            ));
            $template=$twig->loadTemplate($file);
            $template->display($this->assign?$this->assign:array());
        }
    }

























}

































