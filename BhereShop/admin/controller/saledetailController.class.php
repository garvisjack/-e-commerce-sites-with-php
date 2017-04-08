<?php
/**
 * Created by PhpStorm.
 * User: EDUASK
 * Date: 2017/3/19
 * Time: 14:00
 */
require "./controller/Controller.php";
require './model/saledetailModel.class.php';
class SaledetailController extends Controller{
    public function select(){
        $sm = new SaledetailModel();
        $arr = $sm->selectPage();
        $page = $sm->page();
        $arrx = $sm->select("select id,title,num from bhs_goods where isshelve=1");
        $GLOBALS['smarty']->assign("arr",$arr);
        $GLOBALS['smarty']->assign("arrx",$arrx);
        $GLOBALS['smarty']->assign("page",$page);
        $GLOBALS['smarty']->display('saledetail/saledetail.html');
    }

    /*商品销售额展示*/
    public function amount($data2y,$xdata){
			ob_clean();/* 清空（擦掉）输出缓冲区，不加此行可能无法显示图像*/
      header('content-type:image/png'); //画布正确显示的header头
			require_once ('./controller/jpgraph/jpgraph.php');
			require_once ('./controller/jpgraph/jpgraph_bar.php');
			//创建图表的数据，可以自定义



				//$data2y=array(66,2,1,7,5,4);              //销售数据
				//$xdata = array(3.23,3.24,3.26,3.12,3.14,3.23);   //日期

				// Create the graph. These two calls are always required
				$graph = new Graph(700,452);
				$graph->SetScale("textlin");

				$graph->SetShadow();
				$graph->img->SetMargin(40,30,20,40);

				// Create the bar plots


				$b2plot = new BarPlot($data2y);
				$b2plot->SetFillColor("orange");
				$b2plot->value->Show();

				// Create the grouped bar plot
				$gbplot = new AccBarPlot(array($b2plot));

				// ...and add it to the graPH
				$graph->Add($gbplot);

				$graph->title->Set(iconv("UTF-8","GB2312//IGNORE","2017年周销售额统计"));
				$graph->xaxis->title->Set(iconv("UTF-8","GB2312//IGNORE","月份/天"));
				$graph->yaxis->title->Set(iconv("UTF-8","GB2312//IGNORE","销售额/元"));
				$graph->xaxis->title->SetMargin(0);
				$graph->xaxis->SetTickLabels($xdata);

				$graph->title->SetFont(FF_SIMSUN,FS_BOLD);
				$graph->yaxis->title->SetFont(FF_SIMSUN,FS_BOLD);
				$graph->xaxis->title->SetFont(FF_SIMSUN,FS_BOLD);

				//生成本地图表，黙认留空，生成在当前目录，可以Stroke(“路径/文件名.png”)这样指定路径
				$graph->Stroke();



    }
    public function toAmount(){
    		if(!empty($_GET['id'])){
				$id = $_GET['id'];
				$sm = new SaledetailModel();
				$rs = new Redis();
				$rs->connect('localhost');
				//首先我们先准备好该商品的单价
				$arr = $sm->select("select price from bhs_goods where id={$_GET['id']}");
				$price = $arr[0]['price'];
				//从redis里取出它的当天销售量,奇数字段
				$catch = $rs->hgetall('goods-'.$id);

				$salenum = array();  //得到最终的一日销售额
				$saletime = array(); //7天的时间数
				//做处理取出包含今天前6天的销售量,存入新数组
				$key7 = 'salenum-'.date('Y/m/d');
				$key6 = 'salenum-'.date("Y/m/d",time()-86400*1);
				$key5 = 'salenum-'.date("Y/m/d",time()-86400*2);
				$key4 = 'salenum-'.date("Y/m/d",time()-86400*3);
				$key3 = 'salenum-'.date("Y/m/d",time()-86400*4);
				$key2 = 'salenum-'.date("Y/m/d",time()-86400*5);
				$key1 = 'salenum-'.date("Y/m/d",time()-86400*6);
				$yestime = date("Y/m/d",time()-86400*1);

				$salenum[] = $catch[$key1]*$price;
				$salenum[] = $catch[$key2]*$price;
				$salenum[] = $catch[$key3]*$price;
				$salenum[] = $catch[$key4]*$price;
				$salenum[] = $catch[$key5]*$price;
				$salenum[] = $catch[$key6]*$price;
				//如果该商品当天没有销售额的话，在此要做个判断
			  if(!array_key_exists($key7,$catch)){
			  	$salenum[] = 0;
			  }else{
			  	$salenum[] = $catch[$key7];
			  }

				  for($i=6;$i>=1;$i--){
				 	$saletime[] = date('m/d',time()-86400*$i);
					}
					$saletime[] = date('m/d');
			
        
				//销量入库操作，入库前一天的数据
				$getYes = $sm->select("select id from bhs_sale_detail where goods_id={$id} and addtime='{$yestime}'");
				
				if(empty($getYes)){
				$bool1 = $sm->query("insert into bhs_sale_detail(id,goods_id,salenum,addtime) values(null,{$id},{$catch[$key6]},'{$yestime}')");
				
			}else{
				$bool2 = $sm->query("update bhs_sale_detail set salenum=$catch[$key6] where goods_id={$id} and addtime='{$yestime}'");
			}
			
					//去往销售量的jgraph图
					$this->amount($salenum,$saletime);

				}

    }
    /**商品成交量分析**/
    public function deal($datay1,$datay2,$tick){
    	ob_clean();/* 清空（擦掉）输出缓冲区，不加此行可能无法显示图像*/
      header('content-type:image/png'); //画布正确显示的header头
			require_once ('jpgraph/jpgraph.php');
			require_once ('jpgraph/jpgraph_line.php');

			/*$datay1 = array(20,15,23,15);
			$datay2 = array(12,9,42,8);*/


			// Setup the graph
			$graph = new Graph(700,452);
			$graph->SetScale("textlin");

			$theme_class=new UniversalTheme;

			$graph->SetTheme($theme_class);
			$graph->img->SetAntiAliasing(false);
			$graph->title->Set(iconv("UTF-8","GB2312//IGNORE","2017年周成交量分析"));
			$graph->xaxis->title->Set(iconv("UTF-8","GB2312//IGNORE","月份/天"));
			$graph->yaxis->title->Set(iconv("UTF-8","GB2312//IGNORE","浏览量/次"));
			$graph->yaxis->title->SetMargin(3);
			$graph->SetBox(false);

			$graph->img->SetAntiAliasing();

			$graph->yaxis->HideZeroLabel();
			$graph->yaxis->HideLine(false);
			$graph->yaxis->HideTicks(false,false);
			$graph->yaxis->SetTickLabels(range(1,98));
			$graph->xgrid->Show();
			$graph->xgrid->SetLineStyle("solid");
			$graph->xaxis->SetTickLabels($tick);
			$graph->xgrid->SetColor('#E3E3E3');
			/* $graph->SetBackgroundImage("tiger_bkg.png",BGIMG_FILLPLOT); */

			// Create the first line
			$p1 = new LinePlot($datay1);
			$graph->Add($p1);
			$p1->SetColor("#6495ED");
			$p1->SetLegend(iconv("UTF-8","GB2312//IGNORE","商品浏览次数"));

			// Create the second line
			$p2 = new LinePlot($datay2);
			$graph->Add($p2);
			$p2->SetColor("#B22222");
			$p2->SetLegend(iconv("UTF-8","GB2312//IGNORE","商品成交量"));

			$graph->legend->SetFont(FF_SIMSUN,FS_BOLD);
			$graph->title->SetFont(FF_SIMSUN,FS_BOLD);
			$graph->yaxis->title->SetFont(FF_SIMSUN,FS_BOLD);
			$graph->xaxis->title->SetFont(FF_SIMSUN,FS_BOLD);
			$graph->legend->SetFrameWeight(1);

			// Output line
			$graph->Stroke();
    }


  public function toDeal(){
  	if(!empty($_GET['id'])){
				$id = $_GET['id'];
				$sm = new SaledetailModel();
				$rs = new Redis();
				$rs->connect('localhost');

				$catch = $rs->hgetall('goods-'.$id);
			  $spotnum = array();  //准备一个数组放7天的商品点击量
				$salenum = array();  //准备一个数组放7天的销售量
				$saletime = array(); //7天的时间数
				//做处理取出包含今天前6天的销售量,存入新数组
				$key7 = 'salenum-'.date('Y/m/d');
				$key6 = 'salenum-'.date("Y/m/d",time()-86400*1);
				$key5 = 'salenum-'.date("Y/m/d",time()-86400*2);
				$key4 = 'salenum-'.date("Y/m/d",time()-86400*3);
				$key3 = 'salenum-'.date("Y/m/d",time()-86400*4);
				$key2 = 'salenum-'.date("Y/m/d",time()-86400*5);
				$key1 = 'salenum-'.date("Y/m/d",time()-86400*6);

				$salenum[] = $catch[$key1];
				$salenum[] = $catch[$key2];
				$salenum[] = $catch[$key3];
				$salenum[] = $catch[$key4];
				$salenum[] = $catch[$key5];
				$salenum[] = $catch[$key6];
				//如果该商品当天没有销售额的话，在此要做个判断
			  if(!array_key_exists($key7,$catch)){
			  	$salenum[] = 0;
			  }else{
			  	$salenum[] = $catch[$key7];
			  }

				//点击量存入准备的数组
				$key7 = 'spotnum-'.date('Y/m/d');
				$key6 = 'spotnum-'.date("Y/m/d",time()-86400*1);
				$key5 = 'spotnum-'.date("Y/m/d",time()-86400*2);
				$key4 = 'spotnum-'.date("Y/m/d",time()-86400*3);
				$key3 = 'spotnum-'.date("Y/m/d",time()-86400*4);
				$key2 = 'spotnum-'.date("Y/m/d",time()-86400*5);
				$key1 = 'spotnum-'.date("Y/m/d",time()-86400*6);
				$yestime = date("Y/m/d",time()-86400*1);

				$spotnum[] = $catch[$key1];
				$spotnum[] = $catch[$key2];
				$spotnum[] = $catch[$key3];
				$spotnum[] = $catch[$key4];
				$spotnum[] = $catch[$key5];
				$spotnum[] = $catch[$key6];
				
				$yesnum = $catch[$key6];
				 if(!array_key_exists($key7,$catch)){
			  	$spotnum[] = 0;
			  }else{
			  	$spotnum[] = $catch[$key7];
			  }



				  for($i=6;$i>=1;$i--){
				 	$saletime[] = date('m/d',time()-86400*$i);
					}
					$saletime[] = date('m/d');
					
					
				//销量入库操作，入库前一天的数据
				$getYes = $sm->select("select id from bhs_sale_detail where goods_id={$id} and addtime='{$yestime}'");
				
			if(empty($getYes)){
				$bool1 = $sm->query("insert into bhs_sale_detail(id,goods_id,spotnum,addtime) values(null,{$id},{$yesnum},'{$yestime}')");
				
			}else{
				$bool2 = $sm->query("update bhs_sale_detail set spotnum={$yesnum} where goods_id={$id} and addtime='{$yestime}'");
			}

					//去往成交量的jgraph图
					$this->deal($spotnum,$salenum,$saletime);

				}
  }
  /**用于展示商品的好评率统计*/
  	public function perfect($data){
	  	ob_clean();/* 清空（擦掉）输出缓冲区，不加此行可能无法显示图像*/
		header('content-type:image/png'); //画布正确显示的header头
		require_once ('jpgraph/jpgraph.php');
		require_once ('jpgraph/jpgraph_pie.php');
		// Some data
		//$data = array(40,21,17);

		// Create the Pie Graph.
		$graph = new PieGraph(700,452);
		$graph->SetScale("textlin");

		$theme_class="DefaultTheme";
		//$graph->SetTheme(new $theme_class());

		// Set A title for the plot
		$graph->title->Set(iconv("UTF-8","GB2312//IGNORE","用户评论分布"));
		$graph->SetBox(true);

		// Create
		$p1 = new PiePlot($data);
		$graph->Add($p1);
		$p1->SetColor("#6495ED");
		$department = array(iconv("UTF-8","GB2312//IGNORE","好评率"), iconv("UTF-8","GB2312//IGNORE","中评率"), iconv("UTF-8","GB2312//IGNORE","差评率"));//设置文字框对应的内容
		$p1->SetLegends($department); //设置图例
		$graph->legend->SetFont(FF_SIMSUN, FS_BOLD);//设置字体
		$graph->legend->SetLayout(LEGEND_HOR);
		$graph->legend->Pos(0.51, 0.88, 'center', 'bottom');//图例文字框的位置

		$p1->ShowBorder();
		$p1->SetColor('black');
		$p1->SetSliceColors(array('#e44341','#1E90FF','#ADFF2F'));

		$graph->legend->SetFont(FF_SIMSUN,FS_BOLD);
		$graph->title->SetFont(FF_SIMSUN,FS_BOLD);
		$graph->yaxis->title->SetFont(FF_SIMSUN,FS_BOLD);
		$graph->xaxis->title->SetFont(FF_SIMSUN,FS_BOLD);
		$graph->legend->SetFrameWeight(1);
		$graph->Stroke();
		}

		public function toPer(){
			if(!empty($_GET['id'])){
				$id = $_GET['id'];
				$sm = new SaledetailModel();
        //评论总数
        $comTotal = $sm->select("select count(id) num from bhs_comment where goods_id=".$id);
        //好评中评差评
        $goods = $sm->select("select count(id) num from bhs_comment where comment_rank=5 and goods_id=".$id);

        $bads = $sm->select("select count(id) num from bhs_comment where comment_rank<=2 and goods_id=".$id);
        $soso = 0;
        $good = intval($goods[0]['num']);
        $bad = intval($bads[0]['num']);
        $total =intval($comTotal[0]['num']);

        if($total==0){
        	$good=0;
        	$bad=0;
        }
        $soso = $total-$good-$bad;

        $comment = array($good,$soso,$bad);

        //去往成交量的jgraph图
					$this->perfect($comment);

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