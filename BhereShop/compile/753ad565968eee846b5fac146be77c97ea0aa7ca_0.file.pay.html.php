<?php
/* Smarty version 3.1.30, created on 2017-04-02 12:42:16
  from "/usr/lamp/apache2/htdocs/template/pay/pay.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e081282b4474_82893200',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '753ad565968eee846b5fac146be77c97ea0aa7ca' => 
    array (
      0 => '/usr/lamp/apache2/htdocs/template/pay/pay.html',
      1 => 1491108118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e081282b4474_82893200 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!DOCTYPE html>
<html lang="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="Keywords" content="" />
    <meta name="Description" content="" />

    <title>Bhere Shop 结算页</title>

    <link href="./public/css/pay/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="./public/css/index/css.css" />
    <link rel="stylesheet" href="./public/css/pi/safe/Snaddress.min.css" />
    <?php echo '<script'; ?>
 type="text/javascript" src="./public/js/index/jquery-1.7.2.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="./public/js/pay/js/distpicker.data.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="./public/js/pay/js/distpicker.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="./public/js/pay/js/main.js"><?php echo '</script'; ?>
>
<body>

<div class="top-bar">
    <div id="menu">
        <ul>
            <li><a href="?c=index&a=index">WELCOME BHERESHOP</a>
                <div>
                    <ul>
                        <li><a href="?c=lr&a=select">新用户注册</a></li>
                        <li><a href="?c=lr&a=select">一键登录Bhere</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="?c=pi&a=index">个人中心</a>
                <div>
                    <ul>
                        <li><a href="default.htm">已买到的商品</a></li>
                        <li><a href="default.htm">个性化设置</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="categories.html">收藏夹</a>
                <div>
                    <ul>
                        <li><a href="default.htm">收藏的商品</a></li>
                        <li><a href="default.htm">收藏的店铺</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="categories.html">卖家中心</a>
                <div>
                    <ul>
                        <li><a href="default.htm">免费开店</a></li>
                        <li><a href="default.htm">已经卖出的商品</a></li>
                        <li><a href="default.htm">出售中的商品</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="categories.html">联系客服</a>
                <div>
                    <ul>
                        <li><a href="default.htm">消费者客服</a></li>
                        <li><a href="default.htm">卖家客服</a></li>
                    </ul>
                </div>
            </li>
            <li><?php if ($_smarty_tpl->tpl_vars['username']->value != '') {?><a href="javascript:void(0)" style='color:#EA2F2F'>欢迎！<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</a><?php } else { ?><a href="?c=lr&a=select" style='color:#EA2F2F'>登录/注册Bhere</a><?php }?>
<li><a href="?c=car&a=show" style='color:#EA2F2F'>我的购物车</a>
    <li><a href="?c=lr&a=logout" style='color:#EA2F2F'>退出登录</a>
</div>
</li>
    </div>
    </li>
</div>
</div>
<div class="nav-menu">
    <div class="wrap">
        <div class="logo">
            <a href="index.php" name="top">
            <img width="150" height="67" src="./public/logo/logo.png" />
        </a>
        </div>
    </div>
</div>
<div class="clear0 "></div>
<div class="block box" style="margin-top: -24px;margin-bottom:-20px">
    <div id="ur_here">
        <div class="path"><div>当前位置: <a href=".">首页</a> <code>&gt;</code> 购物流程</div></div> </div>
</div>

<div class="blank"></div>
<div class="block">



    <form action="?c=pay&a=deal" method="post" name="theForm" id="theForm">
        <div class="flowBox">
            <h6><span>商品列表</span><a href="flow.php" class="f5">修改</a></h6>
            <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
                <tr>
                    <th bgcolor="#fff">商品名称</th>
                    <th bgcolor="#fff">属性</th>
                    <th bgcolor="#fff">市场价</th>
                    <th bgcolor="#fff">本店价</th>
                    <th bgcolor="#fff">购买数量</th>
                    <th bgcolor="#fff">小计</th>
                </tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" name="goodsid[]"/>
                <tr>
                    <td bgcolor="#fff">
                        <a href="#" target="_blank" class="f6"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</a></td>
                    <td bgcolor="#fff">属性</td>
                    <td bgcolor="#fff">￥<?php echo $_smarty_tpl->tpl_vars['value']->value['mkt_price'];?>
元</td>
                    <td bgcolor="#fff">￥<?php echo $_smarty_tpl->tpl_vars['value']->value['price'];?>
元</td>
                    <td bgcolor="#fff"><?php echo $_smarty_tpl->tpl_vars['value']->value['num'];?>
</td>
                    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['num'];?>
" name="amount[]"/>
                    <td bgcolor="#fff">￥<?php echo $_smarty_tpl->tpl_vars['value']->value['price']*$_smarty_tpl->tpl_vars['value']->value['num'];?>
元</td>
                </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                <tr>
                    <td bgcolor="#fff" colspan="7">
                        购物金额小计 ￥<?php echo $_smarty_tpl->tpl_vars['sum']->value;?>
元，比市场价 ￥<?php echo $_smarty_tpl->tpl_vars['mkt_sum']->value;?>
元 节省了<span style='color:#e33131'>￥<?php echo $_smarty_tpl->tpl_vars['mkt_sum']->value-$_smarty_tpl->tpl_vars['sum']->value;?>
</span>元
                    </td>
                </tr>
            </table>
        </div>
        <div class="blank"></div>
        <div class="flowBox">
            <h6><span>收货人信息</span><a href="javascript:void(0)" class="f5" id="set-addr">增加收货地址</a></h6>
             <div id="select-addr">
             	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['default']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
             	<?php if ($_smarty_tpl->tpl_vars['value']->value['addrdefault'] == 1) {?>
                <p><input name="select-addr" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" type="radio" checked/><a href="javascript:void(0)" class="show-addr">
                    <span><?php echo $_smarty_tpl->tpl_vars['value']->value['receiver'];?>
</span><span><?php echo $_smarty_tpl->tpl_vars['value']->value['contact'];?>
</span><span style='width:160px;overflow:hidden'><?php echo $_smarty_tpl->tpl_vars['value']->value['pro'];?>
-<?php echo $_smarty_tpl->tpl_vars['value']->value['city'];?>
-<?php echo $_smarty_tpl->tpl_vars['value']->value['region'];?>
-<?php echo $_smarty_tpl->tpl_vars['value']->value['detail'];?>
</span>
                </a></p>
             <?php } else { ?>
                 <p><input name="select-addr" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" type="radio"/><a href="javascript:void(0)" class="show-addr">
                    <span><?php echo $_smarty_tpl->tpl_vars['value']->value['receiver'];?>
</span><span><?php echo $_smarty_tpl->tpl_vars['value']->value['contact'];?>
</span><span style='width:160px;overflow:hidden'><?php echo $_smarty_tpl->tpl_vars['value']->value['pro'];?>
-<?php echo $_smarty_tpl->tpl_vars['value']->value['city'];?>
-<?php echo $_smarty_tpl->tpl_vars['value']->value['region'];?>
-<?php echo $_smarty_tpl->tpl_vars['value']->value['detail'];?>
</span>
                </a></p>
             <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </div>
            <div id='select-addr2'>
            	
            </div>
            <div id='add-address' style='display:none'>
            <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
                <tr>
                    <td bgcolor="#fff">收货人姓名:</td>
                    <td bgcolor="#fff"><input class='info' type="text" name="receiver" value="">
      <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['user']->value[0]['id'];?>
" name="userid"></td>
                  
                </tr>
                <tr>
                    <td bgcolor="#fff">详细地址:</td>
                    <td bgcolor="#fff">
                        <div data-toggle="distpicker">
                        <select name="province" data-province="---- 选择省 ----"></select>
                        <select name="city" data-city="---- 选择市 ----"></select>
                        <select name="region" data-district="---- 选择区 ----"></select>
                    </div>
                        <textarea cols="30" rows="2" name="address" style="width:332px;"></textarea></td>
                 
                </tr>
                <tr>  <td bgcolor="#fff">邮政编码:</td>
                    <td bgcolor="#fff"><input class='info' type="text" value="" name="postcode" ></td></tr>
                <tr>
                   
                    <td bgcolor="#fff">手机:</td>
                    <td bgcolor="#fff"><input  class='info' type="tel" value="" name="mobile"></td>
                </tr>
                <tr><td bgcolor="#fff" colspan='2'><a class='button' style='width:60px;margin:2px auto' href='javascript:void(0)' id='to-add'>确认</a></td></tr>
            </table>
            </div>
        </div>
        <div class="blank"></div>
        <div class="flowBox">
            <h6><span>配送方式</span></h6>
            <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd" id="shippingTable">
                <tr>
                    <th bgcolor="#fff" width="5%">&nbsp;</th>
                    <th bgcolor="#fff" width="25%">名称</th>
                    <th bgcolor="#fff">订购描述</th>
                    <th bgcolor="#fff" width="15%">费用</th>
                    <th bgcolor="#fff" width="15%">免费额度</th>
                    <th bgcolor="#fff" width="15%">保价费用</th>
                </tr>
                <tr>
                    <td bgcolor="#fff" valign="top"><input name="shipping" type="radio" value="商家决定"  supportCod="0" insure="0" onclick="selectShipping(this)" checked/>
                    </td>
                    <td bgcolor="#fff" valign="top"><strong>由商家决定</strong></td>
                    <td bgcolor="#fff" valign="top">江、浙、沪地区首重15元/KG，续重2元/KG，其余城市首重20元/KG</td>
                    <td bgcolor="#fff" valign="top">￥0.00元</td>
                    <td bgcolor="#fff" align="right" valign="top">￥0.00元</td>
                    <td bgcolor="#fff" align="right" valign="top">不支持保价</td>
                </tr>
                <tr>
                    <td colspan="6" bgcolor="#fff" align="right"><label for="ECS_NEEDINSURE">
                        <input name="need_insure" id="ECS_NEEDINSURE" type="checkbox" value="1"  disabled="true"  />
                        配送是否需要保价 </label></td>
                </tr>
            </table>
        </div>
        <div class="blank"></div>
        <div class="flowBox">
            <h6><span>支付方式</span></h6>
            <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd" id="paymentTable">
                <tr>
                    <th width="5%" bgcolor="#fff">&nbsp;</th>
                    <th width="20%" bgcolor="#fff">名称</th>
                    <th bgcolor="#fff">订购描述</th>
                    <th bgcolor="#fff" width="15%">手续费</th>
                </tr>

                <tr>
                    <td valign="top" bgcolor="#fff"><input type="radio" name="payment" value="自行选择" checked/></td>
                    <td valign="top" bgcolor="#fff"><strong>自行选择支付方式</strong></td>
                    <td align="right" bgcolor="#fff" valign="top">￥0.00元</td>
                    <td align="right" bgcolor="#fff" valign="top">￥0.00元</td>
                </tr>
            </table>
        </div>
        <div class="blank"></div>


        <div class="flowBox">
            <h6><span>其它信息</span></h6>
            <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
                <tr>
                    <td bgcolor="#fff"><strong>使用红包:</strong></td>
                    <td bgcolor="#fff">
                        选择已有红包
                        <select name="bonus" id="ECS_BONUS" style="border:1px solid #ccc;">
                        <option value="0" selected>请选择</option>
                    </select>

                        或者输入红包序列号                <input name="bonus_sn" type="text" class="inputBg" size="15" value="" />
                        <input name="validate_bonus" type="button" class="bnt_blue_1" value="验证红包" onclick="validateBonus(document.forms['theForm'].elements['bonus_sn'].value)" style="vertical-align:middle;" />
                    </td>
                </tr>
                <tr>
                    <td valign="top" bgcolor="#fff"><strong>订单附言:</strong></td>
                    <td bgcolor="#fff"><textarea name="postscript" cols="80" rows="3" id="postscript" style="border:1px solid #ccc;"></textarea></td>
                </tr>
                <tr>
                    <td bgcolor="#fff"><strong>缺货处理:</strong></td>
                    <td bgcolor="#fff">                <label>
                        <input name="how_oos" type="radio" value="0" checked />
                        等待所有商品备齐后再发</label>
                        <label>
                            <input name="how_oos" type="radio" value="1"/>
                            取消订单</label>
                        <label>
                            <input name="how_oos" type="radio" value="2"  />
                            与店主协商</label>
                    </td>
                </tr>
            </table>
        </div>
        <div class="blank"></div>
        <div class="flowBox">
            <h6><span >费用总计</span></h6>
            <div id="ECS_ORDERTOTAL">
                <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
                    <tr>
                        <td style="text-align: right" bgcolor="#fff">
                            商品总价: <span class="f4_b">￥<?php echo $_smarty_tpl->tpl_vars['sum']->value;?>
元</span>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: right" bgcolor="#fff"> 应付款金额: <span class="f4_b">￥<?php echo $_smarty_tpl->tpl_vars['sum']->value;?>
元</span>
                        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['sum']->value;?>
" name="total"/>
                        </td>
                    </tr>
                </table>
            </div>           <div align="center" style="margin:8px auto;">
            <input class='button' type="submit" name="submit" value="提交订单"/>
        </div>
        </div>
    </form>





</div>
<div class="blank5"></div>

<div class="blank"></div>
<div class="foot-body">
    <div class="clear10"></div>

    <div class="blank"></div>


    </div>
    <div class="clear10"></div>
</div>


<?php echo '<script'; ?>
 type="text/javascript">
     $(function(){
     	//增加收货地址
        $('#set-addr').click(function(){
            $('#add-address').toggle();
        })
        
        $('#to-add').click(function(){
       
        	var user_id = $('input[name=userid]').val();
    	 	  var receiver = $('input[name=receiver]').val();
    	 	  var province = $('select[name=province]').val();
          var city = $('select[name=city]').val();
          var region = $('select[name=region]').val();
          var address = $('textarea[name=address]').val();
          var postcode = $('input[name=postcode]').val();
          var mobile = $('input[name=mobile]').val();
        	$.getJSON('?c=pay&a=addAddr',{userid:user_id,receiver:receiver,province:province,city:city,region:region,
        		address:address,postcode:postcode,mobile:mobile},function(msg){
        			
        			if(msg!=0){
        				$('#add-address').hide();
        				$('#select-addr').hide();
        				$('#select-addr2').children().remove();
        				for(var i=0;i<msg.length;i++){
        				$('#select-addr2').append("<p><input name='select-addr' value='"+msg[i].id+"' type='radio'/><a href='javascript:void(0)' class='show-addr'><span>"+msg[i].receiver+"-</span><span>"+msg[i].contact+"-</span><span style='width:160px;overflow:hidden'>"+msg[i].pro+"-"+msg[i].city+"-"+msg[i].region+"-"+msg[i].detail+"</span></a></p>");
        			}
        		}else{
        			alert('');
        		}
        		})
        	
        })


    })
<?php echo '</script'; ?>
>

</body>

</html><?php }
}
