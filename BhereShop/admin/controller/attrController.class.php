<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/4
 * Time: 0:09
 */
require "./controller/Controller.php";
require './model/attrModel.class.php';
 class AttrController extends Controller{
     //属性列表
     public function select(){
         if(!empty($_GET['id'])) {
             $obj = new AttrModel();
             $sql1="select count(*) sum  from bhs_attr where type_id={$_GET['id']}";
             $total=$obj->select($sql1)[0]['sum'];//总记录数
             $show=5;//限制条数
             $obj1=new Page($total,$show);//分页类
             $nowpage=$obj1->limitpage;
             $url="&c=attr&a=select&id={$_GET['id']}";
             $str=$obj1->showPage($url);
             $sql = "select t.type,a.attr,a.type_id,a.id from bhs_type t inner join bhs_attr a on t.id=a.type_id where t.id = {$_GET['id']} limit {$nowpage},{$show}";
             $arr = $obj->select($sql);
             if(!empty($arr)) {
                 $GLOBALS['smarty']->assign("arr", $arr);
                 $GLOBALS['smarty']->assign("str", $str);
                 $GLOBALS['smarty']->display("attr/attr.html");
                 //分页
             }else{
                 $GLOBALS['smarty']->display("attr/attr0.html");
             }
         }
     }
     //属性添加
     public function attradd(){
         $obj = new AttrModel();
         if(isset($_GET['typeid'])) {
             $sql = "select * from bhs_type";
             $arr = $obj->select($sql);
             $typeid = $_GET['typeid'];//将属性所属的类型ID传过去
             $GLOBALS['smarty']->assign("typeid", $typeid);
             $GLOBALS['smarty']->assign("arr", $arr);
             $GLOBALS['smarty']->display("attr/attr_add.html");
         }
             //添加属性
             if(!empty($_POST)){
                 $bool =  $obj->add();
                 if($bool){
                     $this->skip('?c=type&a=select',1);
                 }else{
                     $this->skip('?c=type&a=select',0);
                 }
             }


     }
   //属性修改
    public function attreditor(){
         if(!empty($_GET['id'])){
             $obj = new AttrModel();
             $sql = "select * from bhs_type";
             $arrx = $obj ->select($sql);//获取类型的下拉表框
             $sql1 = "select * from bhs_attr where id={$_GET['id']}";
             $arr =  $obj ->select($sql1);
             $GLOBALS['smarty']->assign("arr", $arr);
             $GLOBALS['smarty']->assign("arrx", $arrx);

             if(!empty($_POST)) {
                 $bool = $obj->editor();
                if ($bool) {
                    $this->skip('?c=type&a=select',1);
                 } else {
                    $this->skip('?c=type&a=select',0);
                 }
             }
             $GLOBALS['smarty']->display("attr/attr_editor.html");
         }
    }
     //属性删除
    public function attrdelete(){
        if(!empty($_GET['id'])){
           $obj=new AttrModel();
            $bool=$obj->delete();
            if ($bool) {
                $this->skip('?c=type&a=select',1);
            } else {
                $this->skip('?c=type&a=select',0);
            }
        }
    }
     public function skip($url,$bool){
         if($bool){
             $skip = array(
                 'result'=>'成功!',
                 'url'=>$url
             );
         }
         else{
             $skip = array(
                 'result'=>'失败!',
                 'url'=>$url
             );
         }
         $GLOBALS['smarty']->assign("skip",$skip);
         $GLOBALS['smarty']->display("skip/skip.html");
     }
 }
?>