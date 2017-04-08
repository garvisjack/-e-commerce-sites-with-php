<?php
/* Smarty version 3.1.30, created on 2017-03-26 20:05:21
  from "/usr/lamp/apache2/htdocs/admin/template/articletype/articletype_add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58d7ae817a88f4_55950670',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e7415c680e4b615d12c218dd773bd15e08b7390' => 
    array (
      0 => '/usr/lamp/apache2/htdocs/admin/template/articletype/articletype_add.html',
      1 => 1489574246,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d7ae817a88f4_55950670 (Smarty_Internal_Template $_smarty_tpl) {
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
    <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>增加文章</strong></div>
    <div class="body-content">
        <form method="post" class="form-x" action="?c=articletype&a=add" enctype="multipart/form-data">
            <div class="form-group">
                <div class="label">
                    <label>文章标题：</label>
                </div>
                <div class="field">
                    <input type="text" class="stand-input" value="" name="type"/>
                    <div class="tips"></div>
                </div>
            </div>

            <div class="form-group">
                <div class="label">
                    <label></label>
                </div>
                <div class="field">
                    <button class="button bg-main icon-check-square-o" type="submit" name="submit"> 提交</button>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html><?php }
}
