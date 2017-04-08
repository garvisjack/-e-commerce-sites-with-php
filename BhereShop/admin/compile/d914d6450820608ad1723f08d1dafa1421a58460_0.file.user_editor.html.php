<?php
/* Smarty version 3.1.30, created on 2017-03-27 14:42:50
  from "/usr/lamp/apache2/htdocs/admin/template/user/user_editor.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58d8b46af14643_81390852',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd914d6450820608ad1723f08d1dafa1421a58460' => 
    array (
      0 => '/usr/lamp/apache2/htdocs/admin/template/user/user_editor.html',
      1 => 1488812608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d8b46af14643_81390852 (Smarty_Internal_Template $_smarty_tpl) {
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
    <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>修改内容</strong></div>
    <div class="body-content">
        <form method="post" class="form-x" action="" enctype="multipart/form-data" onsubmit="return checkform()">
            <div class="form-group">
                <div class="label">
                    <label>会员等级：</label>
                </div>
                <div class="field">
                    <select name='level' class='stand-input'>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrl']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                        <?php if ($_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['arr']->value[0]['level']) {?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" selected><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
                        <?php } else { ?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
                        <?php }?>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </select>
                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['id'];?>
"/>
                    <div class="tips"></div>
                </div>
                <div class="form-group">
                    <div class="label">
                        <label>到期时间：</label>
                    </div>
                    <div class="field">
                        <!--下拉菜单部分-->

                        <select name='expyear' class='w30' id="1">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arry']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                            <?php if ($_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['arr']->value[0]['year']) {?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" selected><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
                            <?php } else { ?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
                            <?php }?>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </select>
                        <span class="button bg-red">年</span>
                        <select name='expmonth' class='w20' id="2">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrm']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                            <?php if ($_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['arr']->value[0]['month']) {?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" selected><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
                            <?php } else { ?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
                            <?php }?>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </select>
                        <span class="button bg-yellow">月</span>
                        <select name='expday' class='w20' id="3">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrd']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                            <?php if ($_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['arr']->value[0]['day']) {?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" selected><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
                            <?php } else { ?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
                            <?php }?>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </select>
                        <span class="button bg-green">日</span>
                        <select name='exphour' class='w20'id="4">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrh']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                            <?php if ($_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['arr']->value[0]['hour']) {?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" selected><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
                            <?php } else { ?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
                            <?php }?>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </select>
                        <span class="button bg-red">时</span>
                        <select name='expmin' class='w20' id="5">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrn']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                            <?php if ($_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['arr']->value[0]['min']) {?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" selected><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
                            <?php } else { ?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
                            <?php }?>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </select>
                        <span class="button bg-yellow">分</span>
                        <select name='expsec' class='w20' id="6">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrs']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                            <?php if ($_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['arr']->value[0]['sec']) {?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" selected><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
                            <?php } else { ?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
                            <?php }?>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </select>
                        <span class="button bg-green">秒</span>
                        <span class=""  id="tips" style="display:none"></span>
                        <span class=""  id="tips1" style="display:none"></span>
                        <div class="tips"></div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
            <div class="form-group">
                <div class="label">
                    <label></label>
                </div>
                <div class="field">
                    <button class="button bg-main icon-check-square-o" type="submit">修改</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php echo '<script'; ?>
 src="../public/admin/js/jquery.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
       var booldata = false;
        $(".field>select").change(function(){
            var year = $("#1").val();
            var month = $("#2").val();
            var date = $("#3").val();
            var hour = $("#4").val();
            var min = $("#5").val();
            var sec = $("#6").val();

          //判断平闰年
           if(year%4==0&&year%100!=0){//闰年
               if(month==2&&date>29){//判断2月份天数
                   $("#tips").animate({width:"200px",height:"30px"},300).text('闰年2月份只有29天')
                   booldata = false;
               }else{
                   $("#tips").animate({width:"200px",height:"30px"},500).text('填写正确').attr("class","button bg-green")
                   booldata = true
               }

           }else{
               if(month==2&&date>28){
                   $("#tips").animate({width:"200px",height:"30px"},500).text('平年2月份只有28天').attr("class","button bg-red")
                   booldata = false;

               }else{
                   $("#tips").animate({width:"200px",height:"30px"},500).text('填写正确').attr("class","button bg-green")
                   booldata = true
               }

           }
            arr=[2,4,6,9,11];//小月
              for(var i =1;i<arr.length;i++){//判断小月是否有31天
                  if(month==arr[i]){
                     if(date>30){
                         $("#tips1").animate({width:"200px",height:"30px"},500).text('该月份没有这个天数').attr("class","button bg-red")

                         booldata = false;
                         break
                     }else{
                         $("#tips1").animate({width:"200px",height:"30px"},500).text('填写正确').attr("class","button bg-green")

                         booldata = true;
                         break
                     }
                  }
              }
        })
            function checkform(){
                 var check
                if(booldata==false){
                    check = false;
                    alert('填写的内容不正确');
                    return check;
                }else{
                    check=true;
                    return check;
                }
            }
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
