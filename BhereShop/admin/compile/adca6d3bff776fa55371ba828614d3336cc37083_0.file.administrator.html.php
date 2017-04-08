<?php
/* Smarty version 3.1.30, created on 2017-03-22 13:04:48
  from "C:\wamp\www\Bhere shop\admin\template\admin\administrator.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58d276700679e0_29396796',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'adca6d3bff776fa55371ba828614d3336cc37083' => 
    array (
      0 => 'C:\\wamp\\www\\Bhere shop\\admin\\template\\admin\\administrator.html',
      1 => 1489677578,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d276700679e0_29396796 (Smarty_Internal_Template $_smarty_tpl) {
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

</head>
<body>
<form method="post" action="" id="listform">
    <div class="panel admin-panel">
        <div class="panel-head"><strong class="icon-reorder">BhereShop-商品列表</strong> </div>
        <div class="padding border-bottom">
            <ul class="search" style="padding-left:10px;">
                <li style='float:right;'>
                <li> <a class="button border-yellow icon-plus-square-o" href="?c=administrator&a=add"> 添加管理员</a> </li>
                <input type="text" name="ordercode" class="input" style="width:150px;height:30px;display:inline-block;font-size:11px;" />
                <a href="javascript:void(0)" class="button border-main icon-search" id="search"> 搜索订单号</a>
                </li>

            </ul>
        </div>
        <table class="table table-hover text-center">
            <tr>
                <th><span id='spot'>管理员名称</span></th>
                <th>最近一次登录IP地址</th>
                <th>最近一次登录时间</th>
                <th>管理员等级</th>
                <th>管理员状态</th>
                <th>操作</th>
            </tr>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrx']->value, 'valuex');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['valuex']->value) {
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['valuex']->value['username'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['valuex']->value['lastip'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['valuex']->value['lasttime'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['valuex']->value['name'];?>
</td>
                <td><?php if ($_smarty_tpl->tpl_vars['valuex']->value['status'] == 1) {?>
                    启用 <?php } else { ?>
                    停用
                    <?php }?>
                </td>
                <td><div class="button-group">
                    <a class="button border-main" href="?c=administrator&a=editor&id=<?php echo $_smarty_tpl->tpl_vars['valuex']->value['id'];?>
"><span class="icon-edit"></span>修改</a>
                    <a class="button border-black" href="javascript:void(0)" onclick="return del(<?php echo $_smarty_tpl->tpl_vars['valuex']->value['id'];?>
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
                        <?php echo $_smarty_tpl->tpl_vars['page']->value;?>

                    </div>
                </td>
            </tr>
            </volist>
        </table>
    </div>
</form>
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
    function del(id){
        if(confirm("您确实要把该管理员移除吗?")){
            location.href='?c=administrator&a=deleteadmin&id='+id;
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
        location.href="?c=order&a=select&code="+ordercode;
    })
<?php echo '</script'; ?>
>
</body>
<?php }
}
