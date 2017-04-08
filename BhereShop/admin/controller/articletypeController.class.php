<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 17-3-7
 * Time: 上午11:15
 */
require "./controller/Controller.php";
require './model/articletypeModel.class.php';
class ArticletypeController extends Controller{

    public function select(){
        $am = new ArticletypeModel();
        $arr = $am->selectPage();
        $page = $am->page();
        $GLOBALS['smarty']->assign("arr",$arr);
        $GLOBALS['smarty']->assign("page",$page);
        $GLOBALS['smarty']->display('../template/articletype/articletype.html');
    }
    public function add(){
        if(!empty($_POST)){
            $am = new  ArticletypeModel();
            if($am->add()){
                $this->skip('?c=articletype&a=select',1);
            }else{
                $this->skip('?c=articletype&a=select',0);
            }
        }else{
           /* $am = new  ArticletypeModel();
            $GLOBALS['smarty']->assign("arr",$am->select("select * from bhs_article_type"));*/
            $GLOBALS['smarty']->display('../template/articletype/articletype_add.html');
        }

    }
    public function editor(){
        $am= new ArticletypeModel();
        $arr = $am->select("select * from bhs_article_type where id={$_GET['id']}");//取出对应id的值
        $GLOBALS['smarty']->assign("arr",$arr);
        $GLOBALS['smarty']->display('../template/articletype/articletype_editor.html');
    }
    public function update(){
        $am= new ArticletypeModel();
        if($am->update()){
            $this->skip('?c=articletype&a=select',1);
        }else{
            $this->skip('?c=articletype&a=select',0);
        }
    }
    public function delete(){
        $am= new ArticletypeModel();
        if($am->delete($_GET['id'])){
            $this->skip('?c=articletype&a=select',1);
        }else{
            $this->skip('?c=articletype&a=select',0);
        }
    }
    public function  deleteall(){
        if(!empty($_REQUEST)){
            $am = new ArticletypeModel();
            foreach ($_REQUEST['id'] as $val){
                if($am->deleteall("delete from bhs_article_type where id='{$val}'")){
                    echo '1';
                }else{
                    echo '0';
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


}