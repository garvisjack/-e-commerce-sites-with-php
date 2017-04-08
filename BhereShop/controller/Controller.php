<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/03/12 0012
 * Time: 18:51
 */
header('content-type:text/html;charset=utf-8');
class Controller{

    public function __construct(){
                if(empty($_COOKIE['username'])){
                    echo "<script>alert('请先登录!');location.href='?c=index&a=index'</script>";
                    exit;
                }

    }
}