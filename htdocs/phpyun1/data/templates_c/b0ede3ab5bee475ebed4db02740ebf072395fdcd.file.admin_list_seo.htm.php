<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-10-31 16:48:14
         compiled from "D:\rcw\uploads\app\template\admin\admin_list_seo.htm" */ ?>
<?php /*%%SmartyHeaderCode:19094038225f9d24ce2ce4b1-46679424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0ede3ab5bee475ebed4db02740ebf072395fdcd' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\admin\\admin_list_seo.htm',
      1 => 1576479798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19094038225f9d24ce2ce4b1-46679424',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'arr_data' => 0,
    'key' => 0,
    'row' => 0,
    'pytoken' => 0,
    'seolist' => 0,
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5f9d24ce2eeaa1_98038928',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9d24ce2eeaa1_98038928')) {function content_5f9d24ce2eeaa1_98038928($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<link href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/css/layui.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/layui.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/phpyun_layer.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/admin_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
> 
function check_type(id,value){
	var val = value=="1"?"0":"1";
	var pytoken=$("#pytoken").val();
	$.post("index.php?m=advertise&c=ajax_check",{id:id,val:val,pytoken:pytoken},function(data){
		html = "<a href=\"javascript:void(0);\" onClick=\"check_type("+id+","+val+");\" >"+data+"</a>";
		$("#"+id).html(html);
	});
}
<?php echo '</script'; ?>
>
<title>后台管理</title>
</head>

<body class="body_ifm">
<div class="infoboxp">
<div class="admin_new_tip">
    <div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
    <div class="admin_new_tip_list_cont">
      <div class="admin_new_tip_list">该页面展示了网站的SEO管理，可对SEO进行编辑修改操作。</div>
    </div>
  </div>
  <div class="clear"></div>

  <div class="admin_new_search_box">
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arr_data']->value['seomodel']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['row']->key;
?>   
    <span class="infoboxp_top_span_sz  <?php if ($_GET['action']==$_smarty_tpl->tpl_vars['key']->value||($_GET['action']==''&&$_smarty_tpl->tpl_vars['key']->value=='index')) {?>infoboxp_top_span_sz_in <?php }?>" >
    <a href="index.php?m=seo&action=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value;?>
</a></span>
    <?php } ?>
      <div class="clear"></div>
    <div class="mt8">
    <a href="index.php?m=seo&c=SeoAdd" class="admin_new_cz_tj" style="margin-left:0px;">+ 添加SEO</a>
    </div> 
</div>
 <div class="clear"></div>


<div class="table-list">

<div class="tag_box" >
<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
<form action="index.php" name="myform" method="get" id='myform' target="supportiframe">
<input type="hidden" name="m" value="seo">
<input type="hidden" name="c" value="del">
<input type="hidden" name="pytoken" id='pytoken'  value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
<table width="100%"  class="table_form">
	<tbody>
		<tr class="admin_table_trbg">
        	<th bgcolor="#f0f6fb"><label for="chkall"><input type="checkbox" id='chkAll' onclick='CheckAll(this.form)' /></label></th>
			<th  bgcolor="#f0f6fb"align="left" width="200"><span class="admin_bold">名称</span></th>
            <th  bgcolor="#f0f6fb"align="left">SEO标识符</th>
            <th bgcolor="#f0f6fb" align="left">网页标题</th>
            <th bgcolor="#f0f6fb" align="left">更新时间</th>
			<th bgcolor="#f0f6fb" align="center" style="text-align:center" >操作</th>
		</tr>
	</tbody>
	<tbody>
    <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['seolist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
    <tr align="left" <?php if (($_smarty_tpl->tpl_vars['key']->value+1)%2=='0') {?>class="admin_com_td_bg"<?php }?> id="list<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
">
    	<td align="center"><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" name='del[]' onclick='unselectall()' rel="del_chk" /></td>
    	<td width="100px" align="left" class="td1"><span><?php echo $_smarty_tpl->tpl_vars['list']->value['seoname'];?>
</span></td> 
        <td align="left" class="ud"><?php echo $_smarty_tpl->tpl_vars['list']->value['ident'];?>
</td>
        <td width="400px" align="left" class="ud"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</td>
        <td width="100px" class="ud" align="left"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['list']->value['time'],"%Y-%m-%d");?>
</td>
    	<td width="150px" align="center"> <a href="index.php?m=seo&c=SeoAdd&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" class="admin_new_c_bth">修改</a>
        <a href="javascript:;" onClick="layer_del('确定要删除？','index.php?m=seo&c=del&del=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
');" class="admin_new_c_bth admin_new_c_bth_sc">删除</a></td>
  	</tr>
  <?php } ?>
  
  </tbody>
  </table>
</form>
</div>
</div>
</div>

</body>
</html><?php }} ?>
