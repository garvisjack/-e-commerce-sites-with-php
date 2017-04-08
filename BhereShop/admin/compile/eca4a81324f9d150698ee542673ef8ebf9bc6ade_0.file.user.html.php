<?php
/* Smarty version 3.1.30, created on 2017-03-22 13:04:41
  from "C:\wamp\www\Bhere shop\admin\template\user\user.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58d276698cde76_35985944',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eca4a81324f9d150698ee542673ef8ebf9bc6ade' => 
    array (
      0 => 'C:\\wamp\\www\\Bhere shop\\admin\\template\\user\\user.html',
      1 => 1489564212,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d276698cde76_35985944 (Smarty_Internal_Template $_smarty_tpl) {
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
<!--产品展示内容模块-->
<a href="#" name="spot"></a>
<div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder">BhereShop-会员列表</strong></div>
    <div class="padding border-bottom">
    </div>
    <table class="table table-hover text-center">
        <tr >
            <th><a href="javascript:void(0);" id='spot'>ID</a></th>
            <th>会员名称</th>
            <th>邮箱</th>
            <th>生日</th>
            <th>手机</th>
            <th>地址</th>
            <th>等级</th>
            <th>注册时间</th>
            <th>到期时间</th>
            <th>操作</th>
        </tr>
           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value['username'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value['email'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value['birth'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value['mobile'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value['address'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value['level'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value['regtime'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value['exptime'];?>
</td>
            <td><div class="button-group">
                <a class="button border-main" href="?c=user&a=usereditor&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><span class="icon-edit"></span> 修改</a>
                <a class="button border-red" href="javascript:void(0)" onclick="deleteCates(<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
)"><span class="icon-trash-o"></span> 删除</a>
            </div></td>

        </tr>
           <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <tr>
            <td colspan="5">

                <div class="pagelist">

                </div>
            </td>
        </tr>
    </table>
    <div class="pagelist">
       <?php echo $_smarty_tpl->tpl_vars['str']->value;?>

    </div>

</div>



<?php echo '<script'; ?>
 type="text/javascript">
    function deleteCates($id){
        if(confirm("确认删除吗?")){
            location.href = '?c=user&a=userdelete&id='+$id;
        }else{
            location.href = '?c=user&a=select';
        }
    }
    function go(){
        var page = document.getElementById('page');//取到类里面的input
        location.href = "?c=user&a=select&p="+page.value+"#spot";//输入的页数就是所跳转的页数 加锚点

    }
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
