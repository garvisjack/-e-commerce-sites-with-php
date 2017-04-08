<?php



require './model/goodsModel.class.php';
class IndexController{

    public function index(){
        if(!isset($_SESSION['shopcar'])||empty($_SESSION['shopcar'])){
        	$GLOBALS['smarty']->assign("shopcar","");
        }else{
        		$GLOBALS['smarty']->assign("shopcar",$_SESSION['shopcar']);
        }
    		
    			  @$GLOBALS['smarty']->assign("user", $_COOKIE['username']);	
    
			
        $gm = new GoodsModel();
        /*$GLOBALS['smarty']->caching = true;
        $GLOBALS['smarty']->cache_lifetime = 600;*/
				$url=md5($_SERVER['REQUEST_URI']);//将当前页面的URL(包含?后面的所有参数)进行md5加密
        /**
        redis查询缓存设置
        **/
        $rs = new Redis();
        $res = $rs->connect('localhost');
        $cateR = $rs->get('cate');
        $secondR = $rs->get('second');
        $articleR = $rs->get('article');
        $issaleR = $rs->get('issale');
        $digitR = $rs->get('digit');
        if(empty($cateR)){
        //主页无限分类导航部分
        $cate = $gm->select("SELECT GROUP_CONCAT(id) as cate_id,GROUP_CONCAT(name) as cate FROM `bhs_category` WHERE pid=0 GROUP BY type_name");
      	$strCate = serialize($cate);
      	$rs->setex('cate',666,$strCate);
      }else{
      	$cate = unserialize($cateR);
      }
        $GLOBALS['smarty']->assign("cate",$cate);

        //二级菜单导航内容
				if(empty($secondR)){
        $second = $gm->select("SELECT id,name,type_name from bhs_category where pid!=0 ");
        $strSecond = serialize($second);
      	$rs->setex('second',666,$strSecond);
      }else{
      	$second = unserialize($secondR);
      }
        $GLOBALS['smarty']->assign("second",$second);

        //折扣商品主页wrap栏展示
        if(empty($issaleR)){
        $issale = $gm->select("select id,price,mpic,short_descr,keyword from bhs_goods where issale=1 limit 0,18");
      	$strIssale = serialize($issale);
      	$rs->setex('issale',655,$strIssale);
      }else{
      	$issale = unserialize($issaleR);
      }
        $GLOBALS['smarty']->assign("issale",$issale);
        
        //数码商品wrap栏展示
        if(empty($digitR)){
        	$digit = $gm->select("select id,keyword,short_descr,mpic from bhs_goods where isshelve=1 and cate_id=248 limit 0,8");
        	$strDigit = serialize($digit);
        	$rs->setex('digit',655,$strDigit);
        }else{
      		$digit = unserialize($digitR);
      }
				$GLOBALS['smarty']->assign("digit",$digit);
        //主页底部文章展示
        if(empty($articleR)){
        $article = $gm->select("select a.*,ar.type from bhs_article a INNER JOIN bhs_article_type ar on a.type_id=ar.id");
        $article = $gm->article($article);
        $strArt = serialize($article);
      	$rs->setex('article',60000,$strArt);
      }else{
      	$article = unserialize($articleR);
      }
        $GLOBALS['smarty']->assign("article",$article);
        
      if(isset($_SESSION['num'])){
                    $GLOBALS['smarty']->assign('num',$_SESSION['num']);
                }else{
                    $GLOBALS['smarty']->assign('num',0);
                }
				
        if($GLOBALS['smarty']->isCached("index/index.html")){
            $GLOBALS['smarty']->display("index/index.html");
        }else{
            //数据库取数据
           
            $GLOBALS['smarty']->display("index/index.html");
        }

    }
}