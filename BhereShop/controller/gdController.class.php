<?php



require './model/goodsModel.class.php';
class GdController{
		/**
		*  商品详情页面展示
		**/
    public function index(){
        //smarty页面缓存
        /*$GLOBALS['smarty']->caching = true;
        $GLOBALS['smarty']->cache_lifetime = 600;
				$url=md5($_SERVER['REQUEST_URI']);//将当前页面的URL(包含?后面的所有参数)进行md5加密*/
        //商品详情页基础的信息
        $gm = new GoodsModel();
        if(!empty($_GET['id'])) {
								$gid = $_GET['id'];
								/*打开详情页时增加点击量存入redis*/
								
								$rs = new Redis();
								$rs->connect('localhost');
								$spot = 1; //商品点击数
							
								//点击量的每次递增统计
								$spottime = date('Y/m/d');
								$spotname = 'spotnum'.'-'.$spottime;
						
								//以哈希值方式存入到缓存中
								$check = $rs->hget('goods'.'-'.$gid,$spotname);
								if(empty($check)){
									$rs->hmset('goods'.'-'.$gid,array($spotname=>$spot));
							
								}else{
									$rs->hincrby('goods'.'-'.$gid,$spotname,1);
				
								  
								}
								$spotnum = $rs->hgetall('goods'.'-'.$gid);
								
	
								$GLOBALS['smarty']->assign('spotnum',$spotnum[$spotname]);
								
			
								
                //商品详情属性和特殊的属性值
                $gd = $gm->select("select id,price,vip_price,sale_price,title,num,cate_id,bpic,short_descr,keyword,remark,descr,weight,isship,album_descr from bhs_goods where id=".$_GET['id']);

                $attr = $gm->select("SELECT g.id,g.title,type,attr FROM bhs_goods g
    INNER JOIN bhs_type t on g.type_id=t.id
    INNER JOIN bhs_attr a on a.type_id=t.id
    where g.id=".$_GET['id']);

                $value = $gm->select("SELECT v.id,value from bhs_goods g
            RIGHT JOIN bhs_value v
            on g.id=v.goods_id
            WHERE g.id=" . $_GET['id']);

            //左侧猜你喜欢
            $random = mt_rand(0,6);
            $maylike = $gm->select("SELECT id,title,tpic FROM `bhs_goods` WHERE isrcm=1 limit {$random},3");

            $rcm = $gm->select("SELECT id,title,price,mpic,keyword,mkt_price FROM `bhs_goods` WHERE isrcm=1 limit {$random},4");
                if(isset($_SESSION['num'])){
                    $GLOBALS['smarty']->assign('num',$_SESSION['num']);
                }else{
                    $GLOBALS['smarty']->assign('num',0);
                }

            //商品评论内容
            $comment = $gm->select("select c.id,title,user_name,content,image,comment_rank,c.addtime,parent_id FROM bhs_comment c INNER JOIN bhs_goods g on c.goods_id=g.id
INNER JOIN bhs_user u on c.user_name=u.username where user_id=1 and status=1 and goods_id={$_GET['id']} order by id desc");
            //评论总数
            $comTotal = count($comment);
            //好评中评差评
            $goods = $gm->select("select id from bhs_comment where user_id=1 and status=1 and comment_rank=5 and goods_id=". $_GET['id']);
            $good = count($goods);
            $bads = $gm->select("select id from bhs_comment where user_id=1 and status=1 and comment_rank<=2 and goods_id=". $_GET['id']);
            $bad = count($bads);
            $soso = $comTotal-$good-$bad;
            //好评度
            if(empty($comTotal)){
            	$per = 0;
            }else{
            	$per = round($good/$comTotal,2)*100;
            }

          //购物车
          if(!isset($_SESSION['shopcar'])||empty($_SESSION['shopcar'])){
        	$GLOBALS['smarty']->assign("shopcar","");
        }else{
        		$GLOBALS['smarty']->assign("shopcar",$_SESSION['shopcar']);
        }
        //购物车商品数量
        if(isset($_SESSION['num'])){
                    $GLOBALS['smarty']->assign('num',$_SESSION['num']);
                }else{
                    $GLOBALS['smarty']->assign('num',0);
                }
            
            @$GLOBALS['smarty']->assign("user", $_COOKIE['username']);
            $GLOBALS['smarty']->assign('id',$_GET['id']);
            $GLOBALS['smarty']->assign('comment',$comment);
            $GLOBALS['smarty']->assign('comTotal',$comTotal);
            $GLOBALS['smarty']->assign('per',$per);
            $GLOBALS['smarty']->assign('good',$good);
            $GLOBALS['smarty']->assign('bad',$bad);
            $GLOBALS['smarty']->assign('soso',$soso);
            $GLOBALS['smarty']->assign('maylike',$maylike);
            $GLOBALS['smarty']->assign('rcm',$rcm);
            $GLOBALS['smarty']->assign('attr',$attr);
            $GLOBALS['smarty']->assign('value',$value);
            $GLOBALS['smarty']->assign('gd',$gd);
        }
        
        //主页底部文章展示
        $article = $gm->select("select a.*,ar.type from bhs_article a INNER JOIN bhs_article_type ar on a.type_id=ar.id");
        $article = $gm->article($article);
        $GLOBALS['smarty']->assign("article",$article);


	      @$GLOBALS['smarty']->assign("user", $_COOKIE['username']);
	      
        if($GLOBALS['smarty']->isCached("goods-detail/goods-detail.html")){
            $GLOBALS['smarty']->display("goods-detail/goods-detail.html",$url);
        }else{
            //数据库取数据
            $GLOBALS['smarty']->display("goods-detail/goods-detail.html");
        }

    }

    /**
    *   评论区的内容展示，结合ajax
    **/
    public function com(){
        if(!empty($_REQUEST)){
            $rank = $_REQUEST['rank'];
            $id = $_REQUEST['id'];
            $ranks = "";
            switch ($rank){
                case 0:
                    $ranks = ">0";
                    break;
                case 1:
                    $ranks = "=1";
                    break;
                case 2:
                    $ranks = "=1";
                    break;    
                case 3:
                    $ranks = "=3";
                    break;
                case 4:
                    $ranks = "=5";
                    break;      
                case 5:
                    $ranks = "=5";
                    break;
            }
            $gm = new GoodsModel();
            $comment = $gm->select("select c.id,title,user_name,content,image,comment_rank,c.addtime,parent_id FROM bhs_comment c INNER JOIN bhs_goods g on c.goods_id=g.id
INNER JOIN bhs_user u on c.user_name=u.username where status=1 and comment_rank".$ranks." and goods_id=".$id);
            //用来转换时间戳
                foreach($comment as $key=>$val){
                    $comment[$key]['addtime'] = date('Y-m-d H:m:s',$val['addtime']);
                }
            echo json_encode($comment,JSON_UNESCAPED_UNICODE);

        }else{
            echo 0;
        }

    }
}