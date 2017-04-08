<?php
/* Smarty version 3.1.30, created on 2017-03-22 11:17:30
  from "C:\wamp\www\Bhere shop\admin\template\order\editororder.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58d25d4a39f193_68885061',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59c2f421dc88b2e9bd2a0f738d3d9f235f7d8ef9' => 
    array (
      0 => 'C:\\wamp\\www\\Bhere shop\\admin\\template\\order\\editororder.html',
      1 => 1489049572,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d25d4a39f193_68885061 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>主要信息-修改</title>
    <link rel="stylesheet" href="../public/admin/css/pintuer.css">
    <link rel="stylesheet" href="../public/admin/css/admin.css">
    <?php echo '<script'; ?>
 src="../public/admin/js/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../public/admin/js/pintuer.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="../public/addr/addrcss/main.css"/>
    <link rel="stylesheet" href="../public/addr/addrcss/bootstrap.css"/>
    <link rel="stylesheet" href="../public/addr/addrcss/city-picker.css"/>
    <link rel="stylesheet" href="../public/newopen/css/popModal.min.css"/>
</head>
<body>
<div class="panel admin-panel">
    <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>修改内容</strong></div>
    <div class="body-content">
        <form method="post" class="form-x" action="" enctype="multipart/form-data">
            <div class="form-group">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                <p><strong class="icon-reorder">商品名:</strong><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</p>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                <p><strong class="icon-reorder">订单号:</strong><?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['order_num'];?>
</p>
                <p><strong class="icon-reorder">购买人姓名:</strong><?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['username'];?>
</p>
                <p><strong class="icon-reorder">购买人地址:</strong><?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['address'];?>
</p>
                <p><strong class="icon-reorder">收件人:</strong><?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['receiver'];?>
</p>
                <p><strong class="icon-reorder">订单状态:</strong><?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['order_status'];?>
</p>
                <p><strong class="icon-reorder">快递公司:</strong><?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['ship_type'];?>
</p>
                <p><strong class="icon-reorder">生成时间:</strong><?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['overtime'];?>
</p>
                <div class="container" style="display:inline-block;position: absolute;
top: 10px;
left: 420px; ">

                    <div class="page-header">收件人地址:</div>
                    <div class="page-header"><?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['receiver_addr'];?>
</div>
                    <div class="docs-methods">
                        <from class="form-inline">
                            <div id="distpicker">
                                <div class="form-group">
                                    <div style="position: relative;">
                                        <input type="text" id="city-picker3" class="form-control" readonly value="" data-toggle="city-picker" name="picker"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                </div>
                            </div>
                        </from>
                    </div>
                </div>
                <div class="page-header" style="position: absolute;
left:326px ;
top: 175px;">收件人详细地址:</div>
                    <textarea name="addr" id="" cols="40" rows="10" style="position: absolute;
left: 437px;
top: 238px;"></textarea>
                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['id'];?>
"/>
                <div class="field">
                    <button class="button bg-main icon-check-square-o" type="submit">修改</button>
                </div>
            </div>
        </form>
    </div>
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
 src="../public/newopen/js/popModal.min.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
