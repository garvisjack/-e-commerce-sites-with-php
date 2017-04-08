<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 17-3-4
 * Time: 上午9:52
 */
require "./controller/Controller.php";
require './model/categoryModel.class.php';
class CategoryController extends Controller{

    public function select(){
           $cm = new CategoryModel();
           $arr = $cm->selectPage();
           $page = $cm->page();
           $GLOBALS['smarty']->assign("arr",$arr);
           $GLOBALS['smarty']->assign("page",$page);
           $GLOBALS['smarty']->display('./category/category.html');

}
    public function add(){
        if(!empty($_POST)){
            $cm = new CategoryModel();
            if($cm->add()){
                $this->skip('?c=category&a=select',1);
            }else{
                $this->skip('?c=category&a=select',0);
            }
        }else{
            $cm = new CategoryModel();
            $arr = $cm->select("select * from bhs_category");
            $GLOBALS['smarty']->assign("arr",$arr);
            $GLOBALS['smarty']->display('./category/category_add.html');
        }
    }
    public function delete(){
            $cm= new CategoryModel();
        if($cm->delete($_GET['id'])){
            $this->skip('?c=category&a=select',1);
        }else{
            $this->skip('?c=category&a=select',0);
        }
    }
    public function editor(){
        $cm= new CategoryModel();
        $arr = $cm->select("select * from bhs_category");
        $arrx = $cm->select("select * from bhs_category where id={$_GET['id']}");
        $GLOBALS['smarty']->assign("arr",$arr);
        $GLOBALS['smarty']->assign("arrx",$arrx);
        $GLOBALS['smarty']->display('./category/category_editor.html');
    }
    public function update(){
        $cm = new CategoryModel();
        if($cm->update()){
            $this->skip('?c=category&a=select',1);
        }else{
            $this->skip('?c=category&a=select',0);
        }
    }
    public function  deleteAll(){
        if(!empty($_REQUEST)){
            $am = new CategoryModel();
            foreach ($_REQUEST['id'] as $val){
                if($am->deleteall("delete from bhs_category where id='{$val}'")){
                    echo 1;
                }else{
                    echo 0;
                }
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
    public function like(){

  if(!empty($_POST)){

    $ppo = $_POST['search'];
        $cm = new CategoryModel();
        $arr = $cm->selectPage1($ppo);
        $page = $cm->page();
        $GLOBALS['smarty']->assign("arr",$arr);
        $GLOBALS['smarty']->assign("page",$page);
        $GLOBALS['smarty']->display('./category/category.html');
    }

    }
}