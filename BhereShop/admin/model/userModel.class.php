<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/5
 * Time: 12:28
 */
   class userModel{
       //查询会员表
       public  function select($sql){
           $obj=Db::getInstance();
           $res=$obj->query($sql);
           $arr = $obj->fetchAll($res);
           return $arr;
       }
      //编辑会员
        public function editor(){
            $obj=Db::getInstance();
            $sql="select id,level,exptime from bhs_user where level>0 and id={$_GET['id']}";
            $res=$obj->query($sql);
            $arr = $obj->fetchAll($res);
            return $arr;
        }
       //修改会员等级及到期时间
       public function editorvipdate(){
           $obj=Db::getInstance();
           //过期时间
           $str = $_POST['expyear']."-".$_POST['expmonth']."-".$_POST['expday']." ".$_POST['exphour'].":".$_POST['expmin'].":".$_POST['expsec'];
           $sql="update bhs_user set level={$_POST['level']},exptime='{$str}' where id={$_POST['id']}";
           return $obj->query($sql);

       }
       //删除会员信息
      public function delete(){
          $obj=Db::getInstance();
          $sql="delete from bhs_user where id={$_GET['id']}";
          return $obj->query($sql);
      }
   }