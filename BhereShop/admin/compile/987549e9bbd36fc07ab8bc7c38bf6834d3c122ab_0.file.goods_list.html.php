<?php
/* Smarty version 3.1.30, created on 2017-03-22 10:38:46
  from "C:\wamp\www\Bhere shop\admin\template\goods\goods_list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58d25436752bf0_94752392',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '987549e9bbd36fc07ab8bc7c38bf6834d3c122ab' => 
    array (
      0 => 'C:\\wamp\\www\\Bhere shop\\admin\\template\\goods\\goods_list.html',
      1 => 1489404634,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d25436752bf0_94752392 (Smarty_Internal_Template $_smarty_tpl) {
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
    <div class="panel-head"><strong class="icon-reorder">BhereShop-商品列表</strong> <a href="" style="float:right; display:none;">添加字段</a></div>
    <div class="padding border-bottom">
      <ul class="search" style="padding-left:10px;">
        <li> <a class="button border-yellow icon-plus-square-o" href="?c=goods&a=addpage" style="font-size:14px;"> 添加新商品</a> </li>
        <li style='float:right;'>
          <input type="text" name="keywords" class="input" style="width:150px;height:30px;display:inline-block;font-size:11px;" />
          <a href="javascript:void(0)" class="button border-main icon-search" onclick="changesearch()" > 搜索</a>
        </li>
        <li style='float:right;'>搜索
           <select name="iscate" style="padding:2px 0px; border:1px solid #ddd;width:76px;height:28px;" onchange="changeishome(this)">
                <option value="0">所有分类</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cate']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

          </select>
          <select name="isbrand" style="padding:2px 0px; border:1px solid #ddd;width:76px;height:28px;" onchange="changeishome(this)">
            <option value="">所有品牌</option>
          </select>
          <select name="ishome" style="padding:2px 0px; border:1px solid #ddd;width:76px;height:28px;" onchange="changeishome(this)">
            <option value="">全部</option>
          </select>
          <select name="ishome" style="padding:2px 0px; border:1px solid #ddd;width:56px;height:28px;" onchange="changeishome(this)">
            <option value="">全部</option>>
          </select>
        </li>
      </ul>
    </div>
    <table class="table table-hover text-center">
      <tr>
        <th style="text-align:center;">ID</th>
        <th width="15%" style="white-space: nowrap;overflow:hidden"><span id='spot'>商品名称</span></th>
        <th>货号</th>
        <th>价格</th>
        <th>新品</th>
        <th>热销</th>
        <th>折扣</th>
        <th>推荐</th>
        <th>推荐排序</th>
        <th>上架</th>
        <th>库存</th>
        <th>添加时间</th>
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
            <?php if ($_smarty_tpl->tpl_vars['val']->value['isnew'] == 1) {?>
                <td><img src="../public/admin/images/yes.gif"></td>
            <?php } else { ?>
                <td><img src="../public/admin/images/no.gif"></td>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['val']->value['ishot'] == 1) {?>
            <td><img src="../public/admin/images/yes.gif"></td>
            <?php } else { ?>
            <td><img src="../public/admin/images/no.gif"></td>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['val']->value['issale'] == 1) {?>
            <td><img src="../public/admin/images/yes.gif"></td>
            <?php } else { ?>
            <td><img src="../public/admin/images/no.gif"></td>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['val']->value['isrcm'] == 1) {?>
            <td><img src="../public/admin/images/yes.gif"></td>
            <?php } else { ?>
            <td><img src="../public/admin/images/no.gif"></td>
            <?php }?>
          <td><?php echo $_smarty_tpl->tpl_vars['val']->value['sort'];?>
</td>
            <?php if ($_smarty_tpl->tpl_vars['val']->value['isshelve'] == 1) {?>
            <td><img src="../public/admin/images/yes.gif"></td>
            <?php } else { ?>
            <td><img src="../public/admin/images/no.gif"></td>
            <?php }?>
          <td><?php echo $_smarty_tpl->tpl_vars['val']->value['num'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['val']->value['addtime'];?>
</td>
          <td><div class="button-group"> 
          <a class="button border-green" href="add.html"><span class="icon-edit"></span>查看</a>
          <a class="button border-main" href="?c=goods&a=editor&id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"><span class="icon-edit"></span>修改</a>
          <a class="button border-black" href="javascript:void(0)" onclick="return del(<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
)">
          <span class="icon-trash-o"></span>回收站</a> </div></td>
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
        location.href = "?c=goods&a=select&p="+page.value+"#spot";
}
//搜索
function changesearch(){	
		
}

//单个删除
function del(id){
	if(confirm("您确实要把商品放入回收站吗?")){
		location.href='?c=goods&a=delete&id='+id;
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
        $.getJSON("?c=goods&a=deleteall",{id:id_array},function(msg){
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
