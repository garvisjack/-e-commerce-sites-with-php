<?php
/* Smarty version 3.1.30, created on 2017-03-23 11:08:52
  from "F:\wamp\www\Bhere shop\admin\template\bin\bin.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58d3acc42c7f32_88342642',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1b14a4216f3ca915df50dd8cbc926e41342705f' => 
    array (
      0 => 'F:\\wamp\\www\\Bhere shop\\admin\\template\\bin\\bin.html',
      1 => 1488969474,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d3acc42c7f32_88342642 (Smarty_Internal_Template $_smarty_tpl) {
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
    <div class="panel-head"><strong class="icon-reorder">BhereShop-商品回收站</strong></div>
    <div class="padding border-bottom">
      <ul class="search" style="padding-left:10px;">
          <li> <a class="button border-yellow icon-plus-square-o" href="?c=goods&a=select" style="font-size:14px;">商品列表</a> </li>
        <li style='float:right;'>
          <input type="text" name="keywords" class="input" style="width:150px;height:30px;display:inline-block;font-size:11px;" />
          <a href="javascript:void(0)" class="button border-main icon-search" onclick="changesearch()" > 搜索</a>
        </li>

      </ul>
    </div>
    <table class="table table-hover text-center">
      <tr>
        <th style="text-align:center;">ID</th>
        <th><span id='spot'>商品名称</span></th>
        <th>货号</th>
        <th>价格</th>
        <th>操作</th>
      </tr>
      <volist name="list" id="vo"><!--商品信息遍历-->
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
        <tr>
          <td><input type="checkbox" name="id[]" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" /><?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['val']->value['title'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['val']->value['artnum'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['val']->value['price'];?>
</td>
          <td><div class="button-group">
          <a class="button border-yellow" href="javascript:void(0)" onclick="return restore(<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
)"><span class="icon-edit"></span>还原</a>
          <a class="button border-red" href="javascript:void(0)" onclick="return del(<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
)">
          <span class="icon-trash-o"></span>删除</a> </div></td>
        </tr>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      <tr>
        <td style="text-align:left; padding:19px 0;padding-left:20px;"><input type="checkbox" id="checkall"/>
          全选 </td>
        <td colspan="7" style="text-align:left;padding-left:20px;"><a href="javascript:void(0)" class="button border-red icon-trash-o"  onclick="DelSelect()">删除</a> <a href="javascript:void(0)" class="button border-blue icon-edit" onclick="sorts()"> 排序</a></td>
      </tr>
      <tr>
          <td colspan="12">
          <!--分页字符串部分-->
              <div class="pagelist">
                <?php echo $_smarty_tpl->tpl_vars['page']->value;?>

              </div>
          </td>
      </tr>
      </volist>
    </table>
  </div>
</form>
<?php echo '<script'; ?>
 type="text/javascript">

function go(){
        var page = document.getElementById('page');
        location.href = "?c=bin&a=select&p="+page.value+"#spot";
    }
//搜索
function changesearch(){	
		
}
//还原指定数据
function restore(id){
    if(confirm("您确定要还原该商品吗?")){
        location.href='?c=bin&a=update&id='+id;
        return true;
    }else{
        return false;
    }
}
//单个删除
function del(id){
	if(confirm("您确定要删除吗?")){
        location.href='?c=bin&a=delete&id='+id;
        return true;
    }else{
        return false;
    }
}

//全选
$("#checkall").click(function(){ 
  $("input[name='id[]']").each(function(){
	  if (this.checked) {
		  this.checked = false;
	  }
	  else {
		  this.checked = true;
	  }
  });
})

//批量删除
function DelSelect(){
	var Checkbox=false;
    var id_array = new Array(); //该数组用来装每个复选框里面的ID
    //判断表单是否全选了，如果选中了则为true
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {
        id_array.push($(this).val());
		Checkbox=true;	
	  }
	});
	if (Checkbox){
		var t=confirm("您确认要删除选中的内容吗？");
		if (t==false) return false;
        //ajax 提交
        $.getJSON("?c=bin&a=deleteall",{id:id_array},function(msg){
            if(msg==0){
                alert("删除成功!");
                location.reload();
            }else{
                alert("删除失败!");
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
