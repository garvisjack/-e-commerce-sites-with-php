<?php
/**
 * 单一入口机制初步设置
 */
session_start();
define('BASE',__DIR__);
require './config/config.php';
//对于模版数据部分的引用，灵活使用，当类不存在时候，自动载入，提升效率
require './libs/Db.class.php';
require'./libs/Cart.class.php';
require './libs/Upload.class.php';

//对于模版数据部分的引用，灵活使用，当类不存在时候，自动载入，提升效率
spl_autoload_register(function($class){
    require ("./model/".$class.".class.php");
});

$controller = isset($_GET['c'])?$_GET['c']:"index";
$action = isset($_GET['a'])?$_GET['a']:"index";
//判断控制器文件是否存在，存在才载入
if(file_exists('./controller/'.$controller.'Controller.class.php')) {
    require('./controller/'.$controller .'Controller.class.php');
}
$class = ucfirst($controller).'Controller';
//实例化由url地址获得名字的对象和方法
$obj = new $class();
$obj->$action();


