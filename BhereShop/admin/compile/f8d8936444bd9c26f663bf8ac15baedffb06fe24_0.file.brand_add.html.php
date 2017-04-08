<?php
/* Smarty version 3.1.30, created on 2017-03-28 13:47:44
  from "/usr/lamp/apache2/htdocs/admin/template/brand/brand_add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58d9f90037c0d9_59686775',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8d8936444bd9c26f663bf8ac15baedffb06fe24' => 
    array (
      0 => '/usr/lamp/apache2/htdocs/admin/template/brand/brand_add.html',
      1 => 1490680057,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d9f90037c0d9_59686775 (Smarty_Internal_Template $_smarty_tpl) {
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
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>BhereShop-增加品牌</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="?c=brand&a=add" enctype="multipart/form-data">


      <div class="form-group">
        <div class="label">
          <label>品牌名称：</label>
        </div>
        <div class="field">
          <input type="text" class="stand-input" value="" name="name" data-validate="required:请输入标题" />
          <div class="tips"></div>
        </div>
      </div>


        <div class="form-group">
            <div class="label">
                <label>品牌网址：</label>
            </div>
            <div class="field">
                <input type="text" class="stand-input" value="" name="url" data-validate="required:请输入品牌网址" />
                <div class="tips"></div>
            </div>
        </div>

      <div class="form-group">
        <div class="label">
          <label>品牌商标图：</label>
        </div>
        <div class="field">
            <input type="file" class="button bg-blue margin-left" id="image1" value="+ 浏览上传" name="file[]" multiple />
        </div>
      </div>



      </if>
      <div class="form-group">
        <div class="label">
          <label>品牌描述：</label>
        </div>
        <div class="field">
          <textarea class="input" name="descr" style=" height:90px;"></textarea>
          <div class="tips"></div>
        </div>
      </div>

        <div class="form-group">
            <div class="label">
                <label>是否显示:</label>
            </div>
            <div class="field">
                <select name="isshow" class="stand-input">
                    <option value="1">默认为是</option>
                    <option value="1">是</option>
                    <option value="0">否</option>
                </select>
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
