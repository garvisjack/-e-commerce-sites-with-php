<?php
/* Smarty version 3.1.30, created on 2017-03-31 01:52:42
  from "/usr/lamp/apache2/htdocs/admin/template/comment/comment_editor.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58dd45ead83a87_61022929',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd45cadda7128076a157d6530fdf7e8840feba574' => 
    array (
      0 => '/usr/lamp/apache2/htdocs/admin/template/comment/comment_editor.html',
      1 => 1490895957,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58dd45ead83a87_61022929 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_time')) require_once '/usr/lamp/apache2/htdocs/libs/plugins/modifier.time.php';
if (!is_callable('smarty_modifier_checkarr')) require_once '/usr/lamp/apache2/htdocs/libs/plugins/modifier.checkarr.php';
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>商品分类-添加</title>
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
    <div class="panel-head"><strong><span class="icon-pencil-square-o"></span>增加分类</strong></div>
    <div class="body-content comment">
        <ul>
            <li style="border-bottom: 1px solid #ccc">
                <span class="light-notice">用户:<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['user_name'];?>
</span>于<?php echo smarty_modifier_time($_smarty_tpl->tpl_vars['arr']->value[0]['addtime']);?>
对
                <span class="light-notice"><?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['title'];?>
</span>发表评论</li>
            <li>
                <div><?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['content'];?>
</div>
                <span class="light-tips">IP地址:<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['ip'];?>
</span>
                <span class="light-tips">评论等级:<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['comment_rank'];?>
</span>
                <div>
                    <?php if ($_smarty_tpl->tpl_vars['arr']->value[0]['status'] == 1) {?>
                    <input style="margin-left: 460px;" class="button bg-red-light icon-check-square-o" type='button' id='hide-status' name="status" value="隐藏显示"/>
                     <?php } else { ?>
                    <input style="margin-left: 460px;" class="button bg-red-light icon-check-square-o" type='button' id='show-status' name="status" value="允许显示"/>
                    <?php }?>
                </div>
            </li>
        </ul>
    </div>
    <?php if (smarty_modifier_checkarr($_smarty_tpl->tpl_vars['admin']->value)) {?>
    <div class="body-content comment">
        <ul>
            <li style="border-bottom: 1px solid #ccc">管理员:<span class="light-notice"><?php echo $_smarty_tpl->tpl_vars['admin']->value[0]['user_name'];?>
</span>于<span class="light-notice"><?php echo smarty_modifier_time($_smarty_tpl->tpl_vars['admin']->value[0]['addtime']);?>
</span>回复用户:<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['user_name'];?>
</li>
            <li><div><?php echo $_smarty_tpl->tpl_vars['admin']->value[0]['content'];?>
</div>
                <span class="light-tips">IP地址:<?php echo $_smarty_tpl->tpl_vars['admin']->value[0]['ip'];?>
</span>
            </li>
        </ul>
    </div>
    <?php } else { ?>
    <div class=""></div>
    <?php }?>
    <div class="body-content">
        <form method="post" class="form-x" action="?c=comment&a=add">
           
            <div class="form-group">
                <div class="label">
                    <label>用户名：</label>
                </div>
                <div class="field">
                    <input type="hidden" name="goods_id" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['goods_id'];?>
">
                     <input type="hidden" name="order_id" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['order_id'];?>
">
                    <input type="hidden" id='this-id' name="parent_id" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['id'];?>
">
                    <input type="text" class="stand-input" value="<?php echo $_smarty_tpl->tpl_vars['arrm']->value[0]['username'];?>
" name="user_name" readonly/>
                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>回复内容：</label>
                </div>
                <div class="field">
                    <textarea name="content" id="" style="width:300px;height: 200px;"></textarea>
                    <div class="tips">提示: 此条评论已有回复, 如果继续回复将更新原来回复的内容!</div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label></label>
                </div>
                <div class="field">
                    <input type="radio" name="isemail" VALUE="0" checked/>通知
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
                    <button class="button bg-main icon-check-square-o" type="reset" name="reset"> 重置</button>
                   
                </div>
            </div>
        </form>
    </div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
    $(function(){
        /*给是否显示绑定事件，并操作后台数据*/
        $('#hide-status').click(function() {
            $.getJSON('?c=comment&a=update', {id:$('#this-id').val(), action:'hide'}, function (msg) {
                if (msg == 1) {
                    location.reload();
                } else {
                    alert("操作失败!");
                    location.reload();
                }
            })
        })

        $('#show-status').click(function(){
            $.getJSON('?c=comment&a=update',{id:$('#this-id').val(),action:'show'},function(msg){
                if(msg==1){
                    location.reload();
                }else{
                    alert("操作失败!");
                    location.reload();
                }
            })
        })




    })

<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
