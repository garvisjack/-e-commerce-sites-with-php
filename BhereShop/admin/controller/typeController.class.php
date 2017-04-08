<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/4
 * Time: 10:48
 */
require "./controller/Controller.php";
require './model/typeModel.class.php';
 class TypeController extends Controller{
     //商品类型模板展示
     //如果数据库没数据 就显示没有
      public function like(){
         if(!empty($_POST)){
             $ppo = $_POST['search'];
             $obj =  new TypeModel();
             $sql1="select count(*) sum  from bhs_type";
             $total=$obj->select($sql1)[0]['sum'];//总记录数
             $show=6;//限制条数
             $obj1=new Page($total,$show);//分页类
             $nowpage=$obj1->limitpage;
             $url="&c=type&a=select";
             $str=$obj1->showPage($url);
             $GLOBALS['smarty']->assign("str",$str);
             $sql = "select * from bhs_type  where concat(type) LIKE '%$ppo%'/*{$nowpage},{$show}*/";//商品类型表
             $arr = $obj->select($sql);
             $arrx = $obj->countattr();
             $arry = array_slice($arrx,$nowpage,$show);
             if(!empty($arr)) {
                 $GLOBALS['smarty']->assign("arrx", $arry);
                 $GLOBALS['smarty']->assign("str", $str);
                 $GLOBALS['smarty']->assign("arr", $arr);
                 $GLOBALS['smarty']->display("type/type.html");
             }else{
               
             }
         }else{
         	      
         	}
         }

     public function select(){
         //分页
         $obj = new TypeModel();
         $sql1="select count(*) sum  from bhs_type";
         $total=$obj->select($sql1)[0]['sum'];//总记录数
         $show=6;//限制条数
         $obj1=new Page($total,$show);//分页类
         $nowpage=$obj1->limitpage;
         $url="&c=type&a=select";
         $str=$obj1->showPage($url);
         $GLOBALS['smarty']->assign("str",$str);
         $sql = "select * from bhs_type order by id desc limit {$nowpage},{$show}";//商品类型表
         $arr = $obj->select($sql);
         $arrx = $obj->countattr();
         $arry = array_slice($arrx,$nowpage,$show);
         if(!empty($arr)) {
             $GLOBALS['smarty']->assign("arrx", $arry);
             $GLOBALS['smarty']->assign("str", $str);
             $GLOBALS['smarty']->assign("arr", $arr);
             $GLOBALS['smarty']->display("type/type.html");
         }else{
             $GLOBALS['smarty']->display("type/type.html");
         }
     }

    //添加商品类型
     public function addtype(){
         $GLOBALS['smarty']->display("type/type_add.html");
         if(!empty($_POST)){
            $obj = new TypeModel();
             $bool = $obj->addtype();
             if($bool){
                 $this->skip('?c=type&a=select',1);

             }else{
                 $this->skip('?c=type&a=select',0);
             }
         }

     }
    //编辑商品类型
    public function editortype(){
        if(!empty($_GET['id'])){
            $obj = new TypeModel();
            $sql = "select * from bhs_type where id ={$_GET['id']}";
            $arr = $obj->select($sql);//获取商品类型数组
            $GLOBALS['smarty']->assign("arr",$arr);
            $GLOBALS['smarty']->display("type/type_editor.html");
           if(!empty($_POST)){
              $obj= new TypeModel();
              $bool = $obj->editor();
               if($bool){
                   $this->skip('?c=type&a=select',1);
               }else{
                   $this->skip('?c=type&a=select',0);
               }
           }
        }

    }
    //删除商品类型
     public function deletetype(){
           if(!empty($_GET['id'])){
               $obj= new TypeModel();
               $bool = $obj->delete();
               if($bool){
                   $this->skip('?c=type&a=select',1);

               }else{
                   $this->skip('?c=type&a=select',0);
               }
           }
     }
     public function deletes(){
         if(!empty($_REQUEST['id'])){
             $idarr = $_REQUEST['id'];
             $obj = new TypeModel();
             foreach($idarr as $value){
                 $sql2 = "select count(a.attr) sum from bhs_type t inner join bhs_attr a on a.type_id=t.id where t.id ={$value}";//属性数
                 $sql="delete from bhs_type where id={$value}";
                  $bool =   $obj->deleteall($sql,$sql2);

             }
             if($bool){
                 echo 1;
             }else{
                 echo 0;
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