<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-10-31 17:11:07
         compiled from "D:\rcw\uploads\app\template\admin\admin_wxnav.htm" */ ?>
<?php /*%%SmartyHeaderCode:9478829775f9d2a2b2a8e02-72168646%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c7381050c0670418bfc35e1d378b7c7602ee446' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\admin\\admin_wxnav.htm',
      1 => 1576479798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9478829775f9d2a2b2a8e02-72168646',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'navlist' => 0,
    'v' => 0,
    'vv' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5f9d2a2b2d1043_38328296',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9d2a2b2d1043_38328296')) {function content_5f9d2a2b2d1043_38328296($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/admin_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>  
<link href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/css/layui.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet">
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/layui.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/phpyun_layer.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<title>后台管理</title>
</head>
<?php echo '<script'; ?>
 type="text/javascript">
var weburl="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
";
function save_industry(){ 
	var name  =$("input[name='add_name']").val();
	var pytoken =$("#pytoken").val();
	var keyid =$("#add_keyid_val").val();
	var key  =$("input[name='add_key']").val();
	var type  =$("#add_type_val").val();
	var url  =$("input[name='add_url']").val();
	var sort  =$("input[name='add_sort']").val();
	var navid = $("#navid").val();
	var appid = $("input[name='add_appid']").val();
	var apppage = $("input[name='add_apppage']").val();

	if($.trim(name)==''){
		parent.layer.msg('菜单名称不能为空！', 2, 8);return false;
	}
	if(keyid !='0' && type=='click' && type==''){
		parent.layer.msg('点击事件，菜单关键字不得为空！', 2, 8);return false;
	}
	if(keyid !='0' && type=='view' && url==''){
		parent.layer.msg('链接事件，菜单链接不得为空！', 2, 8);return false;
	}
	loadlayer();
	$.post("index.php?m=wx&c=edit",{name:name,keyid:keyid,type:type,key:key,url:url,sort:sort,navid:navid,appid:appid,apppage:apppage,pytoken:pytoken},function(msg){
		parent.layer.closeAll('loading');
		if(msg==1){ 
			parent.layer.msg('请按要求填写信息！', 2, 8);return false;
		}else if(msg==2){
			parent.layer.msg('相同名称或关键字已存在！', 2, 8);return false;
		}else if(msg==3){
			parent.layer.msg('操作成功！', 2,9,function(){location=location ;});return false;
		}else if(msg==4){
			parent.layer.msg('操作成功！', 2,8,function(){location=location ;});return false;
		}
	}); 
}  

function editnav(id,name,keyid,keyname,key,type,url,sort,appid,apppage){	
	$("#navid").val(id);
	$("input[name='add_name']").val(name);	
	$("input[name='add_sort']").val(sort);
	$("#add_keyid_val").val(keyid);
	$("#add_type_val").val(type);
	$("input[name='add_url']").val(url);
	$("input[name='add_key']").val(key);
	$("input[name='add_appid']").val(appid);
	$("input[name='add_apppage']").val(apppage);
	$('.addkey ').hide();
	$('.'+type).show();
	layui.form.render('select');
	
	add_class('修改微信菜单','400','410','#houtai_div','');
}

function addnav(){	
	
	clearnav();
	add_class('新增微信菜单','400','410','#houtai_div','');
	
}


function clearnav(){  
	$("#navid").val('');
	$("input[name='add_name']").val('');
	$("#add_keyid_val").val(0);
	$("input[name='add_key']").val('');
	$("#add_type_val").val('');
	$("input[name='add_url']").val('');
	$("input[name='add_sort']").val(''); 
	$("input[name='add_sort']").val(''); 
	$("input[name='add_appid']").val(''); 
	$("input[name='add_apppage']").val(''); 
	$('.addkey').hide();
	layui.form.render('select');
} 
function navsync(){
	parent.layer.confirm('确定要同步菜单至微信服务器？',function(){
		loadlayer();
		var pytoken=$("#pytoken").val();	
		$.get("index.php?m=wx&c=creat&pytoken="+pytoken,function(msg){
			parent.layer.closeAll('loading');
			if(msg==1){
				parent.layer.msg('微信菜单创建成功！', 2, 9);return false;
			}else{
				parent.layer.msg('微信菜单创建失败,'+msg, 3,8);return false;
			}
		}); 
	});
}
<?php echo '</script'; ?>
>
<link href="images/reset.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<link href="images/system.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<link href="images/table_form.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" /> 

<body class="body_ifm">
<div class="infoboxp"> 
<div class="admin_new_tip">
<a href="javascript:;" class="admin_new_tip_close"></a>
<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
<div class="admin_new_tip_list_cont">
<div class="admin_new_tip_list">微信菜单功能可以实现添加、修改和删除等操作，管理员也可以设置个性化网站或名称。设置后，点击“同步微信菜单”轻松同步到微信公众号中！</div>
<div class="admin_new_tip_list">最多创建3个一级菜单，一级菜单名称名字不多于4个汉字或8个字母。</div>
<div class="admin_new_tip_list">每个一级菜单下的子菜单最多可创建5个，子菜单名称名字不多于8个汉字或16个字母。</div>

</div>
</div>
<div class="clear"></div>

<div class="admin_new_search_box"> 
<a  href="javascript:void(0)" onClick="addnav();" class="admin_new_cz_tj" style="margin-left:0px;">增加微信菜单</a>
<a  href="javascript:void(0);"  onclick="navsync();" class="admin_new_cz_tj">同步微信菜单</a>
  </div>


<div class="clear"></div>
<div class="table-list">
  <div class="tag_box ">
  <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
<form action="index.php?m=wx&c=delnav" method="post" target="supportiframe" id='myform'>  
<table width="100%" class="table_form" >

	<thead>  <tr>
              <td colspan="7" bgcolor="#f0f6fb" style="border-bottom:1px solid #DCE3ED"><div class="admin_bold">微信菜单管理</div></td>
            </tr>
	<tr class="admin_table_top">
   		<th width="50" style="text-align:center"><label for="chkall"> <input type="checkbox" id='chkAll' onclick='CheckAll(this.form)' /></label></th>
		<th align="left">菜单标题<span class="clickup">(点击修改)</span></th>
        <th align="left">菜单类型</th>
         <th align="left">菜单关键字</th>
        <th align="left">菜单链接</th>
        <th align="left">排序</th>
		<th width="180" class="admin_table_th_bg">操作</th>
	</tr>
	</thead>
	<tbody>
	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
	<tr align="left">
  	    <td width="50" align='center'><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" name='del[]' onclick='unselectall()' rel="del_chk" /></td>
		<td class="ud"><span onClick="checkname('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');" id="name<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" style="cursor:pointer;"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</span> <input class="input-text hidden" type="text" id="inputname<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"value="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
" onBlur="subname('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','index.php?m=wx&c=ajax');"/>
		<img class="" style="padding-left:5px;cursor:pointer;" title="" src="images/xg.png" onClick="checkname('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');"/>
		</td>
		<td class="ud"><?php echo $_smarty_tpl->tpl_vars['v']->value['type'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['key'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
</td>
        <td><span onClick="checksort('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');" id="sort<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" style="cursor:pointer;"><?php echo $_smarty_tpl->tpl_vars['v']->value['sort'];?>
</span>
        <input class="input-text hidden" type="text" id="input<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" size="10" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['sort'];?>
" onBlur="subsort('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','index.php?m=wx&c=ajax');"/>
		<img class="" style="padding-left:5px;cursor:pointer;" title="" src="images/xg.png" onClick="checksort('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');"/>
		</td>
		<td class="ud" style="text-align:center">
         <a href="javascript:editnav('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['keyid'];?>
','一级菜单','<?php echo $_smarty_tpl->tpl_vars['v']->value['key'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['type'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['sort'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['appid'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['apppage'];?>
');" class="admin_new_c_bth">修改</a>
        <A href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=wx&c=delnav&delid=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');"class="admin_new_c_bth admin_new_c_bth_sc">删除</a></td>
	</tr> 
    <?php if ($_smarty_tpl->tpl_vars['v']->value['list']) {?>
    <?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['v']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?> 
	<tr align="left">
  	    <td width="50" align='center'><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['vv']->value['id'];?>
" name='del[]' onclick='unselectall()' rel="del_chk" /></td>
		<td class="ud">----<span onClick="checkname('<?php echo $_smarty_tpl->tpl_vars['vv']->value['id'];?>
');" id="name<?php echo $_smarty_tpl->tpl_vars['vv']->value['id'];?>
" style="cursor:pointer;"><?php echo $_smarty_tpl->tpl_vars['vv']->value['name'];?>
</span> <input class="input-text hidden" type="text" id="inputname<?php echo $_smarty_tpl->tpl_vars['vv']->value['id'];?>
"value="<?php echo $_smarty_tpl->tpl_vars['vv']->value['name'];?>
" onBlur="subname('<?php echo $_smarty_tpl->tpl_vars['vv']->value['id'];?>
','index.php?m=wx&c=ajax');"/>
		<img class="" style="padding-left:5px;cursor:pointer;" title="" src="images/xg.png" onClick="checkname('<?php echo $_smarty_tpl->tpl_vars['vv']->value['id'];?>
');"/>
		</td>
		<td class="ud"><?php echo $_smarty_tpl->tpl_vars['vv']->value['type'];?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['vv']->value['key'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['vv']->value['url'];?>
</td>
        <td><span onClick="checksort('<?php echo $_smarty_tpl->tpl_vars['vv']->value['id'];?>
');" id="sort<?php echo $_smarty_tpl->tpl_vars['vv']->value['id'];?>
" style="cursor:pointer;"><?php echo $_smarty_tpl->tpl_vars['vv']->value['sort'];?>
</span>
        <input class="input-text hidden" type="text" id="input<?php echo $_smarty_tpl->tpl_vars['vv']->value['id'];?>
" size="10" value="<?php echo $_smarty_tpl->tpl_vars['vv']->value['sort'];?>
" onBlur="subsort('<?php echo $_smarty_tpl->tpl_vars['vv']->value['id'];?>
','index.php?m=wx&c=ajax');"/>
		<img class="" style="padding-left:5px;cursor:pointer;" title="" src="images/xg.png" onClick="checksort('<?php echo $_smarty_tpl->tpl_vars['vv']->value['id'];?>
');"/>
		</td>
		<td class="ud" style="text-align:center">
          <a href="javascript:editnav('<?php echo $_smarty_tpl->tpl_vars['vv']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['vv']->value['name'];?>
','<?php echo $_smarty_tpl->tpl_vars['vv']->value['keyid'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
','<?php echo $_smarty_tpl->tpl_vars['vv']->value['key'];?>
','<?php echo $_smarty_tpl->tpl_vars['vv']->value['type'];?>
','<?php echo $_smarty_tpl->tpl_vars['vv']->value['url'];?>
','<?php echo $_smarty_tpl->tpl_vars['vv']->value['sort'];?>
','<?php echo $_smarty_tpl->tpl_vars['vv']->value['appid'];?>
','<?php echo $_smarty_tpl->tpl_vars['vv']->value['apppage'];?>
');" class="admin_new_c_bth">修改</a>
        <a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=wx&c=delnav&delid=<?php echo $_smarty_tpl->tpl_vars['vv']->value['id'];?>
');"class="admin_new_c_bth admin_new_c_bth_sc">删除</a></td>
	</tr> 
	<?php } ?> 
    <?php }?>
<?php } ?>
    <tr>
	<input type="hidden" name="pytoken"  id='pytoken'value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
      <td colspan="2"><input class="admin_button"  type="button" name="delsub" value="删除所选"  onclick="return really('del[]')"/></td>
    </tr>
	</tbody>
</table>

</form>
</div>
</div>
</div>
<div id="houtai_div" style="  display:none;">
<div class="wx_mt10">
<form class="layui-form">
   <table cellspacing='1' cellpadding='1' class="admin_examine_table">
		<tbody> 
        	<tr class="ui_td_11" >
				<th width="110">菜单标题：</th>
                <td><input type="text" name="add_name" value="" class="admin_wx_text" /></td>
			</tr>
        <tr class="ui_td_11" >
				<th>菜单数组：</th>
                <td>
                <div class="layui-form-item">
                  <div class="layui-input-block">
                     <div class="layui-input-inline">
                       <select name="add_keyid" lay-filter="" id="add_keyid_val">
                      <option value="0">一级菜单</option>
                      <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                      <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
                      <?php } ?>
                    </select>
                     </div>
                   </div>
                </div>
                </td>
            </tr>
			<tr class="ui_td_11">
				<th>菜单类型：</th>
				<td>
                <div class="layui-form-item">
                  <div class="layui-input-block">
                     <div class="layui-input-inline">
                       <select name="add_type"  lay-filter="selecttype" id="add_type_val">
						<option value="">请选择</option>
						<option value="click">点击事件</option>
						<option value="view">链接事件</option>
						<option value="miniprogram">小程序</option>
                     
                    </select>
                     </div>
                   </div>
                </div>
                </td>
               
			</tr>
            <tr class="ui_td_11 addkey click" style='display:none;'>
				<th>菜单关键字：</th>
                <td><input type="text" name="add_key" class="admin_wx_text" /></td>
			</tr>

            <tr class="ui_td_11 addkey view miniprogram"  style='display:none;'>
				<th>菜单链接：</th>
                <td><input type="text" name="add_url" class="admin_wx_text" /></td>
			</tr>
			 <tr class="ui_td_11 addkey miniprogram"  style='display:none;'>
				<th>小程序APPID：</th>
                <td><input type="text" name="add_appid" class="admin_wx_text" /></td>
			</tr>
			 <tr class="ui_td_11 addkey miniprogram"  style='display:none;'>
				<th>小程序入口文件：</th>
                <td><input type="text" name="add_apppage" class="admin_wx_text" /></td>
			</tr>
			<tr class="ui_td_11" >
				<th>排序：</th>
                <td><input type="text" name="add_sort" size='5' class="admin_wx_text" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')"/></td>
			</tr>
		
		</tbody>
	</table>
    <div class="admin_wx_nav_bthbox">
   
     <input type="hidden" name="navid" id="navid" value="">
                <input class="admin_wx_nav_bth" type="button" name="add" value=" 确认 " onClick="save_industry()" />
                </div> 
</form>
    </div>
</div>   
<?php echo '<script'; ?>
>
layui.use(['layer', 'form'], function(){
    var layer = layui.layer
    ,form = layui.form
    ,$ = layui.$;


	form.on('select(selecttype)', function(data) {
			
			var val = data.value;
			$('.addkey ').hide();
			$('.'+val).show();

	});
});
<?php echo '</script'; ?>
>
  </body>
</html><?php }} ?>
