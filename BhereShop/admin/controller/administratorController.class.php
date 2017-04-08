<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/9
 * Time: 12:59
 */

require "./controller/Controller.php";
require './model/administratorModel.class.php';
class AdministratorController extends Controller{

       public function select(){
           $am = new AdministratorModel();
           $arrx = $am->selectPage();   //调用BrandModel模型里面的selectPage方法<-它返回是是一个二维数组，
           $page = $am->page();//调用BrandModel模型里面的Page方法
           $GLOBALS['smarty']->assign('page', $page);
             //  $arrx = $obj->select("select r.name,a.id,a.username,a.lastip,a.lasttime,a.`status` from bhs_role r inner join bhs_admin_role ar on r.id=ar.role_id inner join bhs_admin a on ar.admin_id=a.id");
               $GLOBALS['smarty']->assign("arrx",$arrx);
               $GLOBALS['smarty']->display("admin/administrator.html");

       }

      //管理员添加
      public function add(){
          if(empty($_POST)){
              $am = new AdministratorModel();
              $arr = $am->addselect();
              $GLOBALS['smarty']->assign("arr",$arr);
              $GLOBALS['smarty']->display('admin/admin_add.html');
          }else{
              $am = new AdministratorModel();
              $arr = $am->add();
              if($arr){
                  $this->skip('?c=administrator&a=select',1);
              }else{
                  $this->skip('?c=administrator&a=select',0);
              }
          }
      }


      //修改管理员密码及权限
      public function editor(){
          if(!empty($_GET['id'])){
              $am = new AdministratorModel();
              $arr = $am->addselect();
              $sql="select * from bhs_admin where id= {$_GET['id']}";
              $arrx = $am->handle($sql);
              $GLOBALS['smarty']->assign("arr",$arr);
              $GLOBALS['smarty']->assign("arrx",$arrx);
              $GLOBALS['smarty']->display("admin/admin_editor.html");
          }
          if(!empty($_POST)){
              $am = new AdministratorModel();
              if($am->editor()){
                  $this->skip('?c=administrator&a=select',1);
              }else{
                  $this->skip('?c=administrator&a=select',0);
              }

          }
      }

     /* //修改管理员权限 及状态
     public function editor(){
         if(!empty($_GET['id'])){
             $obj=new AdministratorModel();
             $sql="select * from bhs_admin where id= {$_GET['id']}";
             $arr = $obj->handle($sql);
             $GLOBALS['smarty']->assign("arr",$arr);
             $GLOBALS['smarty']->display("admin/admineditor.html");
             if(!empty($_POST)){
              if($obj->editor()){
                  echo "<script>alert('修改成功');location.href='?c=administrator&a=select';</script>";
              }else{
                  echo "<script>alert('修改失败');location.href='?c=administrator&a=select';</script>";
              }

             }
         }
     }*/

		//search搜索
    public function search(){
        if(!empty($_REQUEST)) {
            $str = $_REQUEST['ordercode'];
            $am = new AdministratorModel();
            $arrx = $am->select("select r.name,a.id,a.username,a.lastip,a.lasttime,a.`status` from bhs_role r inner join bhs_admin_role ar on r.id=ar.role_id inner join bhs_admin a on ar.admin_id=a.id  where a.username like '%$str%' order by id desc limit 0,5");
            $page = $am->page();
            $GLOBALS['smarty']->assign('page', $page);
            $GLOBALS['smarty']->assign('arrx', $arrx);
            $GLOBALS['smarty']->display('admin/administrator.html');
        }
    }


			//删除
      public function deleteadmin(){
          if(!empty($_GET['id'])){
              $obj=new AdministratorModel();
              if($obj->delete()){
                  $this->skip('?c=administrator&a=select',1);

              }else{
                  $this->skip('?c=administrator&a=select',0);
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