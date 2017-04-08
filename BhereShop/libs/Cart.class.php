<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/22
 * Time: 10:12
 */

class Cart{

    /**
     * 把商品添加到购物车
     */
    public function addItem($arr){
        if(is_array($arr)){
            if(!empty($_SESSION['shopcar'])){
                if($this->checkItem($arr['id'])){//检查是否添加过
                    if($this->changeNum($arr['id'])){
                        return true;
                    }else{
                        return false;
                    }
                }else{
                    $_SESSION['shopcar'][] = $arr;
                    return true;
                }
            }else{
                $_SESSION['shopcar'][] = $arr;
                return true;
            }
        }
    }

    /**
     * 检查商品是否添加过
     */
    public function checkItem($id){
         foreach($_SESSION['shopcar'] as $value){
              if($id==$value['id']){
                  return true;
                  break;
              }
         }
         return false;
    }

    /**
     * 改变数量
     */
    public function changeNum($id,$boolData=true){
        if($boolData){//加数量
            foreach($_SESSION['shopcar'] as $key=>$value){
                if($id==$value['id']){
                    $_SESSION['shopcar'][$key]['num']+=1;
                    return true;
                }
            }
            return false;
        }else{//减数量
            foreach($_SESSION['shopcar'] as $key=>$value){
                if($id==$value['id']){
                    $_SESSION['shopcar'][$key]['num']-=1;
                    if($_SESSION['shopcar'][$key]['num']<1){
                        $_SESSION['shopcar'][$key]['num']=1;
                    }
                    return true;
                }
            }
            return false;
        }
    }

    /**
     * 删除购物车中的商品
     */
    public function deleteItem($id){
        foreach($_SESSION['shopcar'] as $key=>$value){
            if($id==$value['id']){
                unset($_SESSION['shopcar'][$key]);
                return true;
            }
        }
        return false;
    }
}
