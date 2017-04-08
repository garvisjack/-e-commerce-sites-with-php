<?php
/* Smarty version 3.1.30, created on 2017-03-22 10:43:25
  from "C:\wamp\www\Bhere shop\admin\template\attr\attr_editor.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58d2554dbd88b1_26952217',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20cd7cbf44f6ff9f2b5fe65226484d109ee558a1' => 
    array (
      0 => 'C:\\wamp\\www\\Bhere shop\\admin\\template\\attr\\attr_editor.html',
      1 => 1489731208,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d2554dbd88b1_26952217 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>主要信息-属性编辑</title>
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
<div class="panel admin-panel">
    <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>编辑内容</strong></div>
    <div class="body-content">
        <form method="post" class="form-x" action="" enctype="multipart/form-data">

            <div class="form-group">
                <div class="label">
                    <label>属性：</label>
                </div>
                <div class="field">
                    <input type="text" class="stand-input" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['attr'];?>
" name="attr"/>
                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['id'];?>
"/>
                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>所属类型：</label>
                </div>
                <div class="field">
                    <!--下拉菜单部分-->
                    <select name='typeid' class='stand-input'>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrx']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                         <?php if ($_smarty_tpl->tpl_vars['value']->value['id'] == $_smarty_tpl->tpl_vars['arr']->value[0]['type_id']) {?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['value']->value['type'];?>
</option>
                         <?php } else { ?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['type'];?>
</option>
                         <?php }?>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </select>
                    <div class="tips"></div>
                </div>
            </div>
            <div class="clear"></div>
            <div class="form-group">
                <div class="label">
                    <label></label>
                </div>
                <div class="field">
                    <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html><?php }
}
