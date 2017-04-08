<?php
/* Smarty version 3.1.30, created on 2017-03-28 22:18:42
  from "/usr/lamp/apache2/htdocs/admin/template/autogoods/autogoods_editor.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58da70c2340860_43553110',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba4072893041312b3a838faf2cbf70098273bf31' => 
    array (
      0 => '/usr/lamp/apache2/htdocs/admin/template/autogoods/autogoods_editor.html',
      1 => 1489140096,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58da70c2340860_43553110 (Smarty_Internal_Template $_smarty_tpl) {
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
    <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>BhereShop-修改品牌</strong></div>
    <div class="body-content">
        <form method="post" class="form-x" action="?c=autogoods&a=editor" enctype="multipart/form-data">


            <div class="form-group">
                <div class="label">
                    <label>品牌名称：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['title'];?>
" name="title" data-validate="required:请输入标题" />
                    <input type="hidden"  name="id" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['id'];?>
" />
                    <div class="tips"></div>
                </div>
            </div>


            <div class="form-group">
                <div class="label">
                    <label>上架时间：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['input'];?>
" name="url" data-validate="required:请输入上架时间" />
                    <div class="tips"></div>
                </div>
            </div>

            <div class="form-group">
                <div class="label">
                    <label>下架时间：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['output'];?>
" name="url" data-validate="required:请输入下架时间" />
                    <div class="tips"></div>
                </div>
            </div>

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
</html>
<?php }
}
