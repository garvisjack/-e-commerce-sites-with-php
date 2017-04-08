<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/4
 * Time: 13:41
 */
class AttrModel{
    //查出属性及其所属类型
    public function select($sql){
        $obj=Db::getInstance();
        $res = $obj->query($sql);
        $arr = $obj->fetchAll($res);
        return $arr;
    }
  //属性添加
    public function add(){
        $obj=Db::getInstance();
        $attr = htmlentities(addslashes($_POST['attr']));
        $sql="insert into bhs_attr (`id`, `attr`, `type_id`) VALUES (NULL, '{$attr}', '{$_POST['type_id']}')";
        return $obj->query($sql);
    }
  //属性编辑
    public function editor(){
        $obj=Db::getInstance();
        $attr = htmlentities(addslashes($_POST['attr']));
        $sql = "update bhs_attr set attr='{$attr}',type_id = '{$_POST['typeid']}' where id={$_POST['id']}";
        return $obj->query($sql);

    }
 //属性删除
  public function delete(){
      $obj=Db::getInstance();
      //删除属性 连属性值的外键
      //检查该属性是否有值
      $res=$obj->query("select attr_id from bhs_value where attr_id={$_GET['id']}");
      $arr=$obj->fetchAll($res);
      //SET FOREIGN_KEY_CHECKS = 0;
       if(empty($arr)){//如果该属性没有属性值
           $sql1="delete from bhs_attr where id={$_GET['id']}";//删除属性值
           return $obj->query($sql1);
       }else{//如果有就连同属性外键一起删除
           $sql="delete from bhs_value where attr_id={$_GET['id']}";//删除属性值外键
           $bool=$obj->query($sql);
           $sql1="delete from bhs_attr where id={$_GET['id']}";//删除属性值
           $bool1=$obj->query($sql1);
           return $bool&&$bool1;
       }



  }
}