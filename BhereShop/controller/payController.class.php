<?php


header('content-type:text/html;charset=utf-8');
require './model/orderModel.class.php';
require "./controller/Controller.php";
class PayController {
    /**
     * 显示数据
     */
    public function index()
    {
        if(empty($_SESSION['shopcar'])){
            header('Location:?c=car&a=show');
        }
        //先判断用户是否登录
        if (empty($_COOKIE['username'])) {
            echo "<script>alert('请先登录');location.href='?c=car&a=show';</script>";
        } else {
            $om = new OrderModel();
            if(isset($_SESSION)) {
                //购物车的数据，通过SEESION取到,是个二维数组
                $cart = $_SESSION['shopcar'];
                $sum = $this->sum(1);
                $mkt_sum = $this->sum(0);
                $GLOBALS['smarty']->assign("cart", $cart);
                $GLOBALS['smarty']->assign("sum", $sum); //总价
                $GLOBALS['smarty']->assign("mkt_sum", $mkt_sum); //市场总价
            }

            //利用用户登录的cookie用户名，取出用户的其他信息
            $username = $_COOKIE['username'];
            $user = $om->select("select id,username,email,address,phone,mobile,postcode from bhs_user where username='{$username}'");
            
            //默认地址的展示
            $default = $om->select("select * from bhs_address where user_id={$user[0]['id']} order by id desc");
            
            $GLOBALS['smarty']->assign("default",$default);
            $GLOBALS['smarty']->assign("user", $user);
            $GLOBALS['smarty']->assign("username", $username);
            $GLOBALS['smarty']->display("pay/pay.html");
        }
    }

    /**
     * @param $bool
     * @return number
     */
    public function sum($bool){
        if($bool){
            foreach($_SESSION['shopcar'] as $value){
                $arr[]=$value['price']*$value['num'];//拿到所有小计

            }
        }else{
            foreach ($_SESSION['shopcar'] as $value) {
                $arr[] = $value['mkt_price']*$value['num'];//拿到所有小计

            }
        }
        $sum = array_sum($arr);
        return $sum;

    }
    /**
    修改收货地址
    **/
    public function addAddr(){
    			if(!empty($_REQUEST)&&!empty($_REQUEST['receiver'])&&!empty($_REQUEST['address'])&&!empty($_REQUEST['postcode'])&&!empty($_REQUEST['mobile'])){
    	
    	 	  $user_id = $_REQUEST['userid'];
    	 	  $receiver = addslashes($_REQUEST['receiver']);
    	 	  $province = $_REQUEST['province'];
          $city = $_REQUEST['city'];
          $region = $_REQUEST['region'];
          $address = addslashes($_REQUEST['address']);
          $postcode = addslashes($_REQUEST['postcode']);
          $mobile = addslashes($_REQUEST['mobile']);
          $om = new OrderModel();
          $bool = $om->query("insert into bhs_address values(null,'{$province}','{$city}','{$region}',
          '{$address}','{$receiver}','{$mobile}','{$postcode}','{$user_id}',0)");
          if($bool){
          	$default = $om->select("select * from bhs_address where user_id={$user_id} order by id desc");
          	echo json_encode($default,JSON_UNESCAPED_UNICODE);
          }else{
          	echo 0;
          }
         
         }else{
         	echo 0;
         }
  	 	
    	
    	
    }

    public function deal() {
        //处理新增加的订单
        if (!empty($_POST['shipping']) && !empty($_POST['payment'])&&!empty($_POST['select-addr'])) {
            //生成订单号
            $addr_id = $_POST['select-addr'];
            $user_id = $_POST['userid'];
            $amount = $_POST['amount'];  //对应的商品数量
            $goods_id = $_POST['goodsid']; //数组
            //存入SESSION做处理
            $_SESSION['amount'] = $amount;
            $_SESSION['goodsid'] = $goods_id;
             
            //从收货地址里提取信息
            $om = new OrderModel();
            $default = $om->select("select * from bhs_address where id={$addr_id}");
            $receiver = $default[0]['receiver'];
            $addr = array();
            $province = $default[0]['pro'];
            $city = $default[0]['city'];
            $region = $default[0]['region'];
            $address = $default[0]['detail'];
            array_push($addr,$province);
            array_push($addr,$city);
            array_push($addr,$region);
            array_push($addr,$address);
            $lastaddr = implode("-",$addr);
            $postcode = $default[0]['postcode'];
            $mobile = $default[0]['contact'];
            $total = $_POST['total'];
            $ship_type = $_POST['shipping'];
            $pay_type = $_POST['payment'];

            $addtime = date('Y-m-d H:m:s');

            if (!empty($default)){
                $n = 0;
                $order_num = date('Ymd').str_pad(mt_rand(1,99999),5,0,STR_PAD_LEFT);  //唯一订单号生成
                $rs = new Redis();
                $rs->connect('localhost');
                $rs->set('ordernum',$order_num);
           
                foreach($goods_id as $key=>$val) {
                    $sql = "insert into bhs_order(id,goods_id,order_num,user_id,amount,receiver,postcode,receiver_addr,mobile,total,order_status,ship_type,pay_type,overtime,addtime,comment_status) values(null,{$goods_id[$key]},'{$order_num}',{$user_id},{$amount[$key]},
'{$receiver}','{$postcode}','{$lastaddr}','{$mobile}','{$total}','0',
'{$ship_type}','{$pay_type}',null,'{$addtime}',0)";

                    //录入数据
                    
                    $boolData = $om->query($sql);
                    if (!$boolData) {
                        $n +=1;
                        break;
                    }
                }
                if ($n==0) {
                    header('Location:?c=pay&a=finish&num='.$order_num);
                } else {
                    echo "<script>alert('订单提交失败');location.href='?c=pay&a=index';</script>";
                }

            }

            else {
                echo "<script>alert('订单信息不完整');location.href='?c=pay&a=index';</script>";
            }

        } else {
            echo "<script>alert('订单信息不完整');location.href='?c=pay&a=index';</script>";
        }
    }

    public function finish(){
			
        if(!empty($_GET['num'])) {
            $username = $_COOKIE['username'];
            $GLOBALS['smarty']->assign("username", $username);
            $order_num = $_GET['num'];
            $om = new OrderModel();
            $GLOBALS['smarty']->assign("order_num", $order_num);
            $pay = $om->select("select id,pay_type,total from bhs_order where order_num={$order_num}");
            $GLOBALS['smarty']->assign("pay", $pay);

            //订单递交后的过度支付页面
            $v_mid = '22676577';//商户号
            $v_url = 'http://112.74.162.171/?c=pay&a=payback';// 请填写返回url,地址应为绝对路径,带有http协议
            $key   = 'tangyong230';//密钥
            $v_moneytype = "CNY"; 	//币种
            $text =$pay[0]['total'].$v_moneytype.$order_num.$v_mid.$v_url.$key;        //md5加密拼凑串,注意顺序不能变
            $v_md5info = strtoupper(md5($text));
            $remarkl ='不要发错货!';                          //md5函数加密并转化成大写字母

            $payData = array(
                'v_mid'=>$v_mid,//商户号
                'v_oid'=>$order_num,//订单号
                'v_amount'=>$pay[0]['total'],//总金额
                'v_moneytype'=>$v_moneytype,//币种
                'v_url'=>$v_url,//回调地址
                'v_md5info'=>$v_md5info //签名档
            );

            $GLOBALS['smarty']->assign("payData",$payData);
        }
        $GLOBALS['smarty']->display("pay/pay_finish.html");
    }

    /**
     * 支付成功后的回调页面
     */
    public function payback() {
        header('content-type:text/html;charset=utf-8');

        $key='tangyong230';
        $v_oid = trim($_POST['v_oid']);
        $v_pmode = trim($_POST['v_pmode']);
        $v_pstatus = trim($_POST['v_pstatus']);
        $v_pstring = trim($_POST['v_pstring']);
        $v_amount = trim($_POST['v_amount']);
        $v_moneytype = trim($_POST['v_moneytype']);
        $v_md5str = trim($_POST['v_md5str']);

        /**
         * 重新计算MD5的值
         */
        $md5string=strtoupper(md5($v_oid.$v_pstatus.$v_amount.$v_moneytype.$key));
        /**
         * 判断返回信息，如果支付成功，并且支付结果可信，则进行下一步处理
         */

        if($v_md5str==$md5string) {
            if ($v_pstatus=='20') {
                $username = $_COOKIE['username'];
                $GLOBALS['smarty']->assign("username", $username);
                //更改订单的状态
                $rs = new Redis();
                $rs->connect('localhost');
                $ordernum = $rs->get('ordernum');
                $om = new OrderModel();
                $bool = $om->query("update bhs_order set order_status=1 where order_num='{$ordernum}'");
                if(!$bool){
                    exit('404Not Found');
                }

                //减少商品库存
                if(!empty($_SESSION['shopcar'])&&!empty($_SESSION['goodsid'])){
                    $goodsid = $_SESSION['goodsid'];
                    $amount = $_SESSION['amount'];
                    
                    //redis存入到对应商品里的商品销售量和销售时间
                      $goodsid = $_SESSION['goodsid'];
                      $amount = $_SESSION['amount'];
                      $rs = new Redis();
                      $rs->connect('localhost');

                      $saletime = date('Y/m/d');
                      $salename = 'salenum'.'-'.$saletime;
                            foreach($goodsid as $key=>$value) {
                                $check = $rs->hget('goods'.'-'.$value,$salename);
                                if(empty($check)){
                                    $rs->hmset('goods'.'-'.$value,array($salename=>$amount[$key]));
                                }else{
                                $rs->hincrby('goods'.'-'.$value,$salename,$amount[$key]);
                                }
                            }
                            
                    $oldnum = array();
                    $newnum = array();
                    //之前每个商品的库存量
                    $saletime = date('Y/m/d');
                    foreach($goodsid as $key=>$value) {
                        $oldnum[] = $om->select("select num from bhs_goods where id='{$value}'")[0];

                    }
                    //相减得到的新库存量
                    foreach($oldnum as $key=>$value){
                        $newnum[] = $value['num']-$amount[$key];
                    }
                    foreach($_SESSION['goodsid'] as $key=>$value) {
                        $om->query("update bhs_goods set num='{$newnum[$key]}' where id='{$value}'");
                    }


                }

                //清空购买的商品购物车数据
                unset($_SESSION['shopcar']);
                $_SESSION['num']=0;
                unset($_SESSION['amount']);
                unset($_SESSION['goodsid']);
                $rs->del('ordernum');



                $GLOBALS['smarty']->display('pay/payback.html');
            }
            else{
                echo "<script>alert('支付失败!')</script>";
            }
        }
        else{
            echo "<script>alert('支付失败!')</script>";
        }

    }


}