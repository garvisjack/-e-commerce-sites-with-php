<?php
/* Smarty version 3.1.30, created on 2017-03-28 22:17:34
  from "/usr/lamp/apache2/htdocs/admin/template/autogoods/autogoods_add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58da707e218623_06988602',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83ca2680234d887e7b89d6e7bd40b9a3d6ccee05' => 
    array (
      0 => '/usr/lamp/apache2/htdocs/admin/template/autogoods/autogoods_add.html',
      1 => 1489140096,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58da707e218623_06988602 (Smarty_Internal_Template $_smarty_tpl) {
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
<div class="panel admin-panel">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>BhereShop-增加商品</strong></div>
  <div class="body-content">

    <form method="post" class="form-x" action="?c=autogoods&a=add" enctype="multipart/form-data">
      <div class="form-group">
        <div class="label">
          <label>商品名称：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="title" data-validate="required:请输入商品名称" />
          <div class="tips"></div>
        </div>
      </div>


        <div class="form-group">
            <div class="label">
                <label>上架时间：</label>
            </div>
            <div class="field">
                <input type="text" class="input w50" value="" name="input" data-validate="required:请输入上架时间" />
                <div class="tips"></div>
            </div>
        </div>

      <div class="form-group">
        <div class="label">
          <label>下架时间：</label>
        </div>
          <div class="field">
              <input type="text" class="input w50" value="" name="output" data-validate="required:请输入下架时间" />
              <div class="tips"></div>
          </div>
      </div>

      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <input type="submit" name="submit" value="提交" class="button bg-main icon-check-square-o">
        </div>
      </div>
    </form>
  </div>
</div>

</body></html><?php }
}
