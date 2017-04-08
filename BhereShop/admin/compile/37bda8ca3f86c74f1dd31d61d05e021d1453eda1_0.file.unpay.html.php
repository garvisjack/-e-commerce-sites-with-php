<?php
/* Smarty version 3.1.30, created on 2017-03-29 20:12:40
  from "/usr/lamp/apache2/htdocs/admin/template/order/unpay.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58dba4b8f0def3_81764080',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37bda8ca3f86c74f1dd31d61d05e021d1453eda1' => 
    array (
      0 => '/usr/lamp/apache2/htdocs/admin/template/order/unpay.html',
      1 => 1490784128,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58dba4b8f0def3_81764080 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title></title>
    <link rel="stylesheet" href="../public/admin/css/pintuer.css">
    <link rel="stylesheet" href="../public/admin/css/admin.css">
    <?php echo '<script'; ?>
 src="../public/admin/js/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../public/admin/js/pintuer.js"><?php echo '</script'; ?>
>
   <!-- <link rel="stylesheet" href="../public/addr/addrcss/main.css"/>
    <link rel="stylesheet" href="../public/addr/addrcss/bootstrap.css"/>
    <link rel="stylesheet" href="../public/addr/addrcss/city-picker.css"/>-->
</head>
<body>
    <div class="panel admin-panel">
        <div class="panel-head"><strong class="icon-reorder">BhereShop-未付款订单</strong> <a href="" style="float:right; display:none;">添加字段</a></div>
   <div class="padding border-bottom" style="height:60px">
        	 <form style="float:right;" action="?c=order&a=like" method="post">
            <ul class="search" style="padding-left:10px;">
                <li style='float:right;'>
                    <input type="text" name="ordercode" class="stand-input" style="width:150px;height:30px;display:inline-block;font-size:11px;margin-top:2px;" value="" />
                    <input type="submit" class="button border-main icon-search" value="搜索订单号"/>
                </li>

            </ul>
             </form>
        </div>

        <table class="table table-hover text-center">
            <tr>

                <th>订单号</th>
                <th>下单时间</th>
                <th>总金额</th>
                <th>收件人</th>
                <th>订单状态</th>
                <th>操作</th>
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>

            <volist name="list" id="vo"><!--商品信息遍历-->
                <tr>

                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['order_num'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['username'];?>
<br/><?php echo $_smarty_tpl->tpl_vars['value']->value['addtime'];?>
</td>
                    <td>￥<?php echo $_smarty_tpl->tpl_vars['value']->value['amount']*$_smarty_tpl->tpl_vars['value']->value['price'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['receiver'];?>
</td>
                    <td><?php if ($_smarty_tpl->tpl_vars['value']->value['order_status'] == '0') {?><strong style="color:red">待付款</strong>
                        <?php } elseif ($_smarty_tpl->tpl_vars['value']->value['order_status'] == '1') {?><strong style="color:#ff4500">已付款/未发货</strong>
                        <?php } elseif ($_smarty_tpl->tpl_vars['value']->value['order_status'] == '6') {?>
                        <strong style="color:#12a">已发货</strong>
                        <?php } else { ?>
                        <strong style="color:green">已完成/已收货</strong>
                        <?php }?></td>
                    <td><div class="button-group">
                        <a class="button border-green" href="?c=order&a=editororder&order=<?php echo $_smarty_tpl->tpl_vars['value']->value['order_num'];?>
"><span class="icon-edit"></span>修改</a>
                        <?php if ($_smarty_tpl->tpl_vars['value']->value['order_status'] == '1') {?>
                        <a class="button border-main" href="?c=order&a=kd&order=<?php echo $_smarty_tpl->tpl_vars['value']->value['order_num'];?>
">
                            <span class="icon-edit"></span>去发货</a>
                        <?php }?>

                        <a class="button border-black" href="javascript:void(0)" onclick="return del(<?php echo $_smarty_tpl->tpl_vars['value']->value['order_num'];?>
)">
                            <span class="icon-trash-o"></span>删除</a> </div></td>
                </tr>
                 <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                <tr>
                    <td colspan="12">
                        <!--分页字符串部分-->
                        <div class="pagelist">
                              <?php echo $_smarty_tpl->tpl_vars['str']->value;?>

                        </div>
                    </td>
                </tr>
            </volist>
        </table>
    </div>

<?php echo '<script'; ?>
 src="../public/addr/addrjs/bootstrap.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../public/addr/addrjs/city-picker.data.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../public/addr/addrjs/city-picker.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    function go(){
        var page = document.getElementById('page');
        location.href = "?c=order&a=select&p="+page.value+"#spot";
    }
    //搜索


    //单个删除
    function del(order){
        if(confirm("您确实要把这条订单删除吗?")){
            location.href='?c=order&a=delete&order='+order;
            return true;
        }else{
            return false;
        }
    }




    //批量删除
    function DelSelect(){
        var Checkbox=false;
        $("input[name='id[]']").each(function(){
            if (this.checked==true) {
                Checkbox=true;
            }
        });
        if (Checkbox){
            var t=confirm("您确认要删除选中的内容吗？");
            if (t==false) return false;
            $("#listform").submit();
        }
        else{
            alert("请选择您要删除的内容!");
            return false;
        }
    }

    //批量排序
    function sorts(){
        var Checkbox=false;
        $("input[name='id[]']").each(function(){
            if (this.checked==true) {
                Checkbox=true;
            }
        });
        if (Checkbox){

            $("#listform").submit();
        }
        else{
            alert("请选择要操作的内容!");
            return false;
        }
    }


    //批量首页显示
    function changeishome(o){
        var Checkbox=false;
        $("input[name='id[]']").each(function(){
            if (this.checked==true) {
                Checkbox=true;
            }
        });
        if (Checkbox){

            $("#listform").submit();
        }
        else{
            alert("请选择要操作的内容!");

            return false;
        }
    }

    //批量推荐
    function changeisvouch(o){
        var Checkbox=false;
        $("input[name='id[]']").each(function(){
            if (this.checked==true) {
                Checkbox=true;
            }
        });
        if (Checkbox){


            $("#listform").submit();
        }
        else{
            alert("请选择要操作的内容!");

            return false;
        }
    }

    //批量置顶
    function changeistop(o){
        var Checkbox=false;
        $("input[name='id[]']").each(function(){
            if (this.checked==true) {
                Checkbox=true;
            }
        });
        if (Checkbox){

            $("#listform").submit();
        }
        else{
            alert("请选择要操作的内容!");

            return false;
        }
    }


    //批量移动
    function changecate(o){
        var Checkbox=false;
        $("input[name='id[]']").each(function(){
            if (this.checked==true) {
                Checkbox=true;
            }
        });
        if (Checkbox){

            $("#listform").submit();
        }
        else{
            alert("请选择要操作的内容!");

            return false;
        }
    }

    //批量复制
    function changecopy(o){
        var Checkbox=false;
        $("input[name='id[]']").each(function(){
            if (this.checked==true) {
                Checkbox=true;
            }
        });
        if (Checkbox){
            var i = 0;
            $("input[name='id[]']").each(function(){
                if (this.checked==true) {
                    i++;
                }
            });
            if(i>1){
                alert("只能选择一条信息!");
                $(o).find("option:first").prop("selected","selected");
            }else{

                $("#listform").submit();
            }
        }
        else{
            alert("请选择要复制的内容!");
            $(o).find("option:first").prop("selected","selected");
            return false;
        }
    }


    $("#search").click(function(){
      var ordercode = $("input[name='ordercode']").val()

        $.getJSON("?c=order&a=select",{code:ordercode},function(msg){
                console.log(msg);
        })
   })
<?php echo '</script'; ?>
>
</body>
<?php }
}
