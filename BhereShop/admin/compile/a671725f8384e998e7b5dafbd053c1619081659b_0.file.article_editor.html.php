<?php
/* Smarty version 3.1.30, created on 2017-03-22 10:38:53
  from "C:\wamp\www\Bhere shop\admin\template\article\article_editor.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58d2543d4145f8_50874907',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a671725f8384e998e7b5dafbd053c1619081659b' => 
    array (
      0 => 'C:\\wamp\\www\\Bhere shop\\admin\\template\\article\\article_editor.html',
      1 => 1489142746,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d2543d4145f8_50874907 (Smarty_Internal_Template $_smarty_tpl) {
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
</head>
<body>
<div class="panel admin-panel">
    <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>修改文章</strong></div>
    <div class="body-content">
        <form method="post" class="form-x" action="?c=article&a=update" enctype="multipart/form-data">
            <div class="form-group">
                <div class="label">
                    <label>文章标题：</label>
                </div>
                <div class="field">
                    <input type="text" class="stand-input" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['con'];?>
" name="con"/>
                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>文章类型：</label>
                </div>
                <div class="field">
                    <select name="type" id="" class='stand-input'>
                        <option value="0">文章类型</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrX']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                        <?php if ($_smarty_tpl->tpl_vars['value']->value['id'] == $_smarty_tpl->tpl_vars['arr']->value[0]['type_id']) {?>
                            <option value=" <?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
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
            <div class="form-group">
                <div class="label">
                    <label>是否在导航栏显示：</label>
                </div>
                <div class="field">
                    <input type="radio" name="isshow" VALUE="1" checked/>是
                    <input name="isshow" type="radio" value="0"/>否
                    <!-- <input type="text" class="stand-input" value="" name="isnav"/>-->
                    <div class="tips"></div>
                </div>
            </div>
            <div class="clear"></div>
            <div class="form-group">
                <div class="label">
                    <label></label>
                </div>
                <div class="field">
                    <input type="hidden"name="id"value="<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['id'];?>
"/>
                    <button class="button bg-main icon-check-square-o" type="submit" name="submit"> 更新</button>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html><?php }
}
