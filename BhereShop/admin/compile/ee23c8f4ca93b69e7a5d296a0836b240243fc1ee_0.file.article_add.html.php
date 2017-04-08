<?php
/* Smarty version 3.1.30, created on 2017-03-29 16:10:28
  from "/usr/lamp/apache2/htdocs/admin/template/article/article_add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58db6bf4447ec0_28702619',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee23c8f4ca93b69e7a5d296a0836b240243fc1ee' => 
    array (
      0 => '/usr/lamp/apache2/htdocs/admin/template/article/article_add.html',
      1 => 1489143378,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58db6bf4447ec0_28702619 (Smarty_Internal_Template $_smarty_tpl) {
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
        <form method="post" class="form-x" action="?c=article&a=add" enctype="multipart/form-data">
            <div class="form-group">
                <div class="label">
                    <label>文章标题：</label>
                </div>
                <div class="field">
                    <input type="text" class="stand-input" value="" name="con"/>
                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>文章类型：</label>
                </div>
                <div class="field">
                    <select name="type" id="" class='stand-input'>
                        <option value="0" >请选择文章类型</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrX']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                        <option value=" <?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['value']->value['type'];?>
</option>
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
                    <button class="button bg-main icon-check-square-o" type="submit" name="submit"> 提交</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
    $(function(){
        //选项卡操作

        $('#tap li').click(function(){
            var k = $(this).index();
            $('.content').eq(k).show().siblings().hide();
        });



        //搜索
        function changesearch(){

        }

//单个删除
        function del(id,mid,iscid){
            if(confirm("您确定要删除吗?")){

            }
        }
    });



<?php echo '</script'; ?>
>
</body>
</html><?php }
}
