<?php
/**
 * Created by PhpStorm.
 * User: yaoyuan
 * Date: 17/1/3
 * Time: 下午2:02
 */
namespace core\lib;
use core\lib\conf;
class model extends  \medoo
{
    public function __construct()
    {
        /*$db=conf::all('db');
        try {
            parent::__construct($db['DSN'], $db['DBUSER'], $db['DBPASS']);
        }catch (\PDOException $e){
            echo ($e->getMessage());
        }*/
        $option=conf::all('db');
        parent::__construct($option);
    }


























}