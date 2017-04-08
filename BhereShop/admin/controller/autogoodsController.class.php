<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/3
 * Time: 20:50
 */
require "./controller/Controller.php";
require "./model/autogoodsModel.class.php";

class AutogoodsController extends Controller{

    //下面是select方法，是牵引到前台brand.html;
    public function select(){       //设置一个方法
        $am = new AutogoodsModel();     //实例化BrandModel，也就是连接到模型
        $arr = $am->selectPage();   //调用BrandModel模型里面的selectPage方法<-它返回是是一个二维数组，
        $page = $am->page();//调用autogoodsModeldModel模型里面的Page方法
        $dateTime = date("Y-m-d H:m:s");

      //判断查询的数组是否为空

            $GLOBALS['smarty']->assign('page', $page);//assgin函数表示传值，前面的page就是在前台使用的对象或者叫数组，后面的$page就是上面一行代码实例化出来的对象
            $GLOBALS['smarty']->assign('arr', $arr);
            $GLOBALS['smarty']->assign('dateTime', $dateTime);
            $GLOBALS['smarty']->display('autogoods/autogoods.html');//调用brand里面的brand.html模板
    }


    public function deleteAll(){    //设置一个方法
        if(!empty($_REQUEST['id'])){    //判断
           $arr = $_REQUEST['id'];
            $obj = new AutogoodsModel();
           foreach($arr as $value){
              $sql = "delete from bhs_auto_goods where id={$value}";
              $bool = $obj->delete($sql);
            if($bool){
                 echo 1;
            }else{
                echo 0;
            }
           }
        }
    }

    public function grounding(){
    if(!empty($_REQUEST)){
        $addtime = date("Y-m-d H:m:s");
        $isshelve = 1;
        $id = $_REQUEST['id'];
        $am = new AutogoodsModel();
        $arr=$am->update($addtime,$isshelve,$id);
        if($arr){
            echo "1";
        }else{
            echo "0";
        }
    }
}
    public function undercarriage(){

        if(!empty($_REQUEST)){

            $isshelve = 0;
            $id = $_REQUEST['id'];
            $am = new AutogoodsModel();
            $arr=$am->update1($isshelve,$id);
            if($arr){
                echo "1";
            }else{
                echo "0";
            }
        }
    }

}