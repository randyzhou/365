<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-10-31 16:47:51
         compiled from "D:\rcw\uploads\app\template\admin\admin_domain_config.htm" */ ?>
<?php /*%%SmartyHeaderCode:4617656645f9d24b79af762-50181689%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7a74c54cb7bc877cf904c4e68257a8021a105b1' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\admin\\admin_domain_config.htm',
      1 => 1576479798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4617656645f9d24b79af762-50181689',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5f9d24b79bb977_78897498',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9d24b79bb977_78897498')) {function content_5f9d24b79bb977_78897498($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<link href="images/reset.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<link href="images/system.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />  
<link href="images/table_form.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<?php echo '<script'; ?>
 src="../js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/admin_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
>
<link href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/css/layui.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet"/>
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
<body class="body_ifm">
<div class="infoboxp"> 
<div class="admin_new_tip">
<a href="javascript:;" class="admin_new_tip_close"></a>
<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
<div class="admin_new_tip_list_cont">
<div class="admin_new_tip_list">分站列表，主要显示已添加成功的分站列表。管理员通过分站列表轻松查询到网站开通多少家分站。同时根据运营情况也可以自由调整设置。</div>
</div>
</div>
<div class="clear"></div>
<div style="height:10px;"></div>
<div class="main_tag" >
<div class="tag_box">
<div> 
<form class="layui-form">
<table width="100%" class="table_form">
<tbody>
  <tr class="admin_table_trbg">
    <th width="160" bgcolor="#f0f6fb"><span class="admin_bold">参数说明</span></th>
    <td bgcolor="#f0f6fb"><span class="admin_bold">参数值</span></td>   
  </tr>
 </tbody>  
  <tr class="admin_table_trbg">
  	<th width="160">开启分站：</th>
		<td>
      <div class="layui-form-item">
        <div class="layui-input-inline">
          <input name="sy_web_site" lay-filter="sy_web_site" lay-skin="switch" 
            <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_web_site']=="1") {?> checked<?php }?>
            lay-text="开启|关闭" type="checkbox">
        </div>
        <span class="admin_web_tip">
          提示：开启多城市并且绑定域名不支持2级目录，本地测试如 http://localhost/phpyun 请解析测试域名
        </span>
      </div>
    </td>
  </tr>

  <tr class="admin_table_trbg">
  	<th width="220">分站根据IP自动跳转：</th>
		<td>
      <div class="layui-form-item">
        <div class="layui-input-inline">
          <input name="sy_gotocity" lay-filter="sy_gotocity" lay-skin="switch" 
            <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_gotocity']=="1") {?> checked<?php }?>
            lay-text="开启|关闭" type="checkbox">
        </div>
      </div>
    </td>
  </tr>
  <tr>
		<th width="160">设定默认城市：</th>
		<td><input class="input-text" type="text" name="sy_indexcity" id="sy_indexcity" size="40" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_indexcity'];?>
"/><span class="admin_web_tip">提示：开启分站后默认城市 如：全国、总站</span></td>
       
	</tr>
    <tr class="admin_table_trbg">
		<th width="160">一级域名：</th>
		<td><input class="input-text" type="text" name="sy_onedomain" id="sy_onedomain" size="40" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_onedomain'];?>
"/><span class="admin_web_tip">提示：如果默认域名为二级域名，则请填写一级域名</span></td>
     
	</tr> 
         
    <tr>
		<th width="160">默认域名：</th>
		<td><input class="input-text" type="text" name="sy_indexdomain" id="sy_indexdomain" size="40" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_indexdomain'];?>
"/><span class="admin_web_tip">提示：默认城市对应的域名 如全站对应域名 http://www.hr135.com 而不是 beijing.hr135.com</span></td>
       
	</tr>
<tr>
	 <th style="border-bottom:none;">&nbsp;</th>
          <td align="left" style="border-bottom:none;"> 
		<input class="layui-btn layui-btn-normal" id="config" type="button" name="config" value="提交">&nbsp;&nbsp;<input class="layui-btn layui-btn-normal" type="reset" value="重置"/>
		<input type="hidden" name="pytoken" id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
"></td>
	</tr>
</table>  
</form>
</div>   
  
</div>
</div>
<?php echo '<script'; ?>
>  
$(function(){   
	$("#config").click(function(){ 
		loadlayer();
		$.post("index.php?m=admin_domain&c=savecf",{
			config : $("#config").val(), 
			sy_indexcity: $("#sy_indexcity").val(),
			sy_gotocity : $("input[name=sy_gotocity]").is(":checked") ? 1 : 0,
			sy_onedomain: $("#sy_onedomain").val(), 
			sy_indexdomain: $("#sy_indexdomain").val(),	
			pytoken : $("#pytoken").val(),
			sy_web_site: $("input[name=sy_web_site]").is(":checked") ? 1 : 0
		},function(data,textStatus){ 
			parent.layer.closeAll('loading');
			config_msg(data); 
		});
	});
});

layui.use(['form'], function(){
});
<?php echo '</script'; ?>
>
</div>
</body>
</html><?php }} ?>
