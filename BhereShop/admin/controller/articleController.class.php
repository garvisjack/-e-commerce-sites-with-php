<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 17-3-7
 * Time: 上午11:24
 */
require "./controller/Controller.php";
require './model/articleModel.class.php';
class ArticleController extends Controller{

    public function select(){
        $am = new ArticleModel();
        $arr = $am->selectPage();
        $page = $am->page();
        $arrx = $am->select("select * from bhs_article_type");
        $GLOBALS['smarty']->assign("arr",$arr);
        $GLOBALS['smarty']->assign("arrx",$arrx);
        $GLOBALS['smarty']->assign("page",$page);
        $GLOBALS['smarty']->display('article/article.html');
    }
    public function add(){
        $am = new ArticleModel();
        $arr = $am->select("select * from bhs_article");
        if(!empty($_POST)){
            if($am->add()){
                $this->skip('?c=article&a=select',1);

            }else{
                $this->skip('?c=article&a=select',0);
            }
        }else{
            $arrX = $am->select("select * from bhs_article_type");
            $GLOBALS['smarty']->assign("arrX",$arrX);
            $GLOBALS['smarty']->assign("arr",$arr);
            $GLOBALS['smarty']->display('../template/article/article_add.html');
        }
    }
    public function editor(){
        $am= new ArticleModel();
        $arrX = $am->select("select * from bhs_article_type");
        $arr = $am->select("select * from bhs_article where id={$_GET['id']}");//取出对应id的值
        $GLOBALS['smarty']->assign("arrX",$arrX);
        $GLOBALS['smarty']->assign("arr",$arr);
        $GLOBALS['smarty']->display('../template/article/article_editor.html');
    }
    public function update(){
        $am= new ArticleModel();
        if($am->update()){
            $this->skip('?c=article&a=select',1);
        }else{
            $this->skip('?c=article&a=select',0);
        }

    }
    public function delete(){
        $am= new ArticleModel();
        if($am->delete($_GET['id'])){
            $this->skip('?c=article&a=select',1);
        }else{
            $this->skip('?c=article&a=select',0);
        }
    }

public function  deleteall(){
    if(!empty($_REQUEST)){
        $am = new ArticleModel();
        foreach ($_REQUEST['id'] as $val){
            if($am->deleteall("delete from bhs_article where id='{$val}'")){
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