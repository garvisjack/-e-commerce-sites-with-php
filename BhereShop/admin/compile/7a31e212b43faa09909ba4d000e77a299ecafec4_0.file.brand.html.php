<?php
/* Smarty version 3.1.30, created on 2017-03-23 11:08:53
  from "F:\wamp\www\Bhere shop\admin\template\brand\brand.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58d3acc5cecb58_33586603',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a31e212b43faa09909ba4d000e77a299ecafec4' => 
    array (
      0 => 'F:\\wamp\\www\\Bhere shop\\admin\\template\\brand\\brand.html',
      1 => 1489194494,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d3acc5cecb58_33586603 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_cut')) require_once 'F:\\wamp\\www\\Bhere shop\\libs\\plugins\\modifier.cut.php';
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
<form method="post" action="" id="listform">
  <div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> BhereShop-品牌管理</strong></div>
    <div class="padding border-bottom">
      <ul class="search" style="padding-left:10px;">
        <li> <a class="button border-yellow icon-plus-square-o" href="?c=brand&a=add"> 添加品牌</a> </li>
        <li>搜索：</li>
        <li>
          <input type="text" placeholder="请输入搜索关键字" name="keywords" class="input" style="width:250px; line-height:17px;display:inline-block" />
          <a href="javascript:void(0)" class="button border-main icon-search" onclick="changesearch()" > 搜索</a></li>
      </ul>
    </div>
    <table class="table table-hover text-center">
      <tr>
          <th style="text-align:left; padding-left:20px;">品牌ID</th>
          <th>品牌名字</th>
          <th>品牌网址</th>
          <th width="10%">品牌商标图</th>
          <th width="20%">品牌描述</th>
          <th width="8%">是否显示</th>
          <th>操作</th>
      </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
        <tr>
            <td style="text-align:left; padding-left:20px;"><input type="checkbox" name="id[]" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" />
                <?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
</td>
            <td> <?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</td>
            <td> <?php echo $_smarty_tpl->tpl_vars['value']->value['url'];?>
</td>
            <td><img src="<?php echo smarty_modifier_cut($_smarty_tpl->tpl_vars['value']->value['pic']);?>
" alt="待定" width="70" height="50" style="border-radius:3px;"/></td>
            <td style="display:block;width:270px;height:55px;overflow:hidden;line-height:60px;margin-left: auto"><?php echo $_smarty_tpl->tpl_vars['value']->value['descr'];?>
</td>

            <?php if ($_smarty_tpl->tpl_vars['value']->value['isshow'] == 1) {?>
            <td><img src="../public/admin/images/yes.gif"></td>
            <?php } else { ?>
            <td><img src="../public/admin/images/no.gif"></td>
            <?php }?>
            <td><div class="button-group">
                    <a class="button border-main" href="?c=brand&a=editor&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">
                     <span class="icon-edit"></span> 修改
                    </a>
                    <a class="button border-red" href="javascript:void(0)" onclick="del(<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
)">
                        <span class="icon-trash-o"></span> 删除
                    </a>
                 </div>
            </td>
        </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>



      <tr>
        <td style="text-align:left; padding:19px 0;padding-left:20px;"><input type="checkbox" id="checkall"/>
          全选</td>
          <td colspan="7" style="text-align:left;padding-left:20px;">
              <a href="javascript:void(0)" class="button border-red icon-trash-o" style="padding:5px 15px;" onclick="DelSelect()"> 删除</a>
              <a href="javascript:void(0)" style="padding:5px 15px; margin:0 10px;" class="button border-blue icon-edit" onclick="sorts()"> 排序</a>
          </td>

      <tr>
        <td colspan="8"><div class="pagelist"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div></td>
      </tr>
    </table>

  </div>
</form>
<?php echo '<script'; ?>
 type="text/javascript">

//搜索
function changesearch(){	
		
}

//单个删除
function del(data){
	if(confirm("您确定要删除吗?")){
		location.href="?c=brand&a=delete&id="+data;
	}
}

//全选
$("#checkall").click(function(){ 
  $("input[name='id[]']").each(function(){
	  if(this.checked){
		  this.checked = false;
	  }
	  else {
		  this.checked = true;
	  }
  });
});

//批量删除
function DelSelect(){
    var Checkbox=false;
    var id_array = new Array(); //这个数组是用来装全选框里的id
    $("input[name='id[]']").each(function(){//这行表示，我input框索相对应勾选的
        //判断表单是否有选择，有则为true
        if (this.checked==true) {  //这行表示，我所选的框，checked为true，才能执行里面的代码
            id_array.push($(this).val());//这行表示，$(this).val()是指我们所选的框里面的id值压入到id_array数组的末尾，
            Checkbox=true;
        }
    });
    if (Checkbox){
        var t=confirm("您确认要删除选中的内容吗？");
        if (t==false) return false; //这里为什么没有大括号呢？;
        $.getJSON("?c=brand&a=deleteAll",{id:id_array},function(msg){
            if(msg==1){
                alert("删除成功");
                location.reload();
            }else{
                alert("删除失败");
                location.reload();
            }
        })
    }
    else{
        alert("请选择您要删除的内容!");
        return false;
    }
}

//批量排序
function sorts(){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){	
		
		$("#listform").submit();		
	}
	else{
		alert("请选择要操作的内容!");
		return false;
	}
}


//批量首页显示
function changeishome(o){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){
		
		$("#listform").submit();	
	}
	else{
		alert("请选择要操作的内容!");		
	
		return false;
	}
}

//批量推荐
function changeisvouch(o){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){
		
		
		$("#listform").submit();	
	}
	else{
		alert("请选择要操作的内容!");	
		
		return false;
	}
}

//批量置顶
function changeistop(o){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){		
		
		$("#listform").submit();	
	}
	else{
		alert("请选择要操作的内容!");		
	
		return false;
	}
}


//批量移动
function changecate(o){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){		
		
		$("#listform").submit();		
	}
	else{
		alert("请选择要操作的内容!");
		
		return false;
	}
}

//批量复制
function changecopy(o){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){	
		var i = 0;
	    $("input[name='id[]']").each(function(){
	  		if (this.checked==true) {
				i++;
			}		
	    });
		if(i>1){ 
	    	alert("只能选择一条信息!");
			$(o).find("option:first").prop("selected","selected");
		}else{
		
			$("#listform").submit();		
		}	
	}
	else{
		alert("请选择要复制的内容!");
		$(o).find("option:first").prop("selected","selected");
		return false;
	}
}

<?php echo '</script'; ?>
>
</body>
</html><?php }
}
