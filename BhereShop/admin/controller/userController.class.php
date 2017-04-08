<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/5
 * Time: 11:19
 */
require "./controller/Controller.php";
require './model/userModel.class.php';
 class userController extends Controller{
     //会员表查询
     public function select()
     {
         $obj = new userModel();
         $sql1 = "select count(*) sum  from bhs_user where level>0";//会员人数
         $total = $obj->select($sql1)[0]['sum'];//总记录数
         $show = 5;//限制条数
         $obj1 = new Page($total, $show);//分页类
         $nowpage = $obj1->limitpage;
         $sql = "select * from bhs_user where level>0 limit {$nowpage},{$show}";
         $obj->select($sql);
         $url = "&c=user&a=select";
         $str = $obj1->showPage($url);
         $arr = $obj->select($sql);//转化为数组
         $GLOBALS['smarty']->assign("str", $str);
         $GLOBALS['smarty']->assign("arr", $arr);
         $GLOBALS['smarty']->display("user/user.html");

     }

     //修改会员等级到期时间
     public function usereditor()
     {
         if (!empty($_GET['id'])) {
             $obj = new userModel();
             $arr = $obj->editor();
             $str = $arr[0]['exptime'];
             $arr[0]['year'] = substr($str, 0, 4);//年
             $arr[0]['month'] = substr($str, 5, 2);//月
             $arr[0]['day'] = substr($str, 8, 2);//日
             $arr[0]['hour'] = substr($str, 11, 2);//时
             $arr[0]['min'] = substr($str, 14, 2);//分
             $arr[0]['sec'] = substr($str, 17, 2);//秒
             //年数组
             $arry = range(2017, 2030);
             //月数组
             $arrm = range(1, 12);
             //日数组
             $arrd = range(1, 31);
             //时数组
             $arrh = range(0, 23);
             //分数组
             $arrn = range(0, 59);
             //秒数组
             $arrs = range(0, 59);
             //等级数组
             $arrl = range(0, 3);
             $GLOBALS['smarty']->assign("arrl", $arrl);
             $GLOBALS['smarty']->assign("arrs", $arrs);
             $GLOBALS['smarty']->assign("arrn", $arrn);
             $GLOBALS['smarty']->assign("arrh", $arrh);
             $GLOBALS['smarty']->assign("arrd", $arrd);
             $GLOBALS['smarty']->assign("arrm", $arrm);
             $GLOBALS['smarty']->assign("arry", $arry);
             $GLOBALS['smarty']->assign("arr", $arr);
             $GLOBALS['smarty']->display("user/user_editor.html");
             if (!empty($_POST)) {
                 $bool = $obj->editorvipdate();
                 if ($bool) {
                     $this->skip('?c=user&a=select',1);
                 } else {
                     $this->skip('?c=user&a=select',0);
                 }

             }
         }

     }

     public function userdelete()
     {
         if (!empty($_GET['id'])) {
             $obj = new userModel();
             $bool = $obj->delete();
             if ($bool) {
                 $this->skip('?c=user&a=select',1);
             }else{
                 $this->skip('?c=user&a=select',0);
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