<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/03/12 0012
 * Time: 18:51
 */

class Controller{

    public function __construct(){
                if(empty($_SESSION['admin'])){
                    echo "<script>location.href='?c=login&a=index'</script>";
                    exit;
                }
                if($_SESSION['role_id']==1){

                }else{
                    $c = strtolower($_GET['c']);
                    $a = strtolower($_GET['a']);
                    //权限检测
                    isset($_SESSION['access'][$c][$a])?"":exit("<script>location.href='?c=login&a=nojurisdiction'</script>");
                }

    }
}