<?php
/**
 * Created by PhpStorm.
 * User: yaoyuan
 * Date: 17/1/3
 * Time: 下午3:22
 */
namespace core\lib\drive\log;
use core\lib\conf;

class file
{
    public $path;
    public function __construct()
    {
        $conf=conf::get('OPTION','log');
        $this->path=$conf['PATH'];
    }

    public function log($message,$file='log'){
        /*
         * 1 确定文件存储位置，不存在则新建
         * 2 写入日志
         *
         */
        if(!is_dir($this->path.date('YmdH'))){
            mkdir($this->path.date('YmdH'),0777,true);
        }

        return file_put_contents($this->path.date('YmdH').'/'.$file.'.php',date('Y-m-d H:i:s').json_encode($message).PHP_EOL,FILE_APPEND);
    }
























}