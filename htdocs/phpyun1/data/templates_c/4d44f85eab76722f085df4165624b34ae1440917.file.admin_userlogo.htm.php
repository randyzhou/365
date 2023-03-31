<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-07 20:44:05
         compiled from "D:\rcw\uploads\app\template\admin\admin_userlogo.htm" */ ?>
<?php /*%%SmartyHeaderCode:626632135fa69695325df7-27648948%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d44f85eab76722f085df4165624b34ae1440917' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\admin\\admin_userlogo.htm',
      1 => 1576479798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '626632135fa69695325df7-27648948',
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
  'unifunc' => 'content_5fa69695338284_15579930',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fa69695338284_15579930')) {function content_5fa69695338284_15579930($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
		<?php echo '<script'; ?>
 src="js/admin_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
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
		<title>后台管理</title>
	</head>
	<body class="body_ifm">
		<div class="infoboxp">
			<div class="tabs_info">
				<ul>
					<li><a href="index.php?m=admin_userset">个人设置</a></li>
					<li class="curr"><a href="index.php?m=admin_userset&c=logo">头像设置</a></li>
					<li><a href="index.php?m=admin_userset&c=set"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
设置</a></li>
					<li><a href="index.php?m=admin_userset&c=userspend">消费设置</a></li>
				</ul>
			</div>
			<div class="admin_new_tip">
				<a href="javascript:;" class="admin_new_tip_close"></a>
				<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
				<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
				<div class="admin_new_tip_list_cont">
					<div class="admin_new_tip_list">该页面展示了网站个人头像设置管理</div>
				</div>
			</div>

			<div class="clear"></div>

			<div id="subboxdiv" style="width:100%;height:100%;display:none;position:absolute;"></div>

			<div class="main_tag mt10">
				<div class="tag_box">
					<iframe id="supportiframe" name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
					<form class="layui-form" action="index.php?m=admin_userset&c=saveLogo" method="post" enctype="multipart/form-data" target="supportiframe">
						<table width="100%" class="table_form">
							<tr class="admin_table_trbg">
								<th width="160" bgcolor="#f0f6fb"><span class="admin_bold">默认头像</span></th>
								<td bgcolor="#f0f6fb"><span class="admin_bold">默认</span></td>
							</tr>
							<tr>
								<th width="150">默认男生头像：</th>
								<td>
									<button type="button" class="yun_bth_pic adminupload" lay-data="{name: 'sy_member_icon',imgid: 'imgicon',path:'logo'}">上传图片</button>
									<input type="hidden" id="layupload_type" value="2" />
									<img id="imgicon" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_icon'];?>
" width="60" height="60"  <?php if (!$_smarty_tpl->tpl_vars['config']->value['sy_member_icon']) {?>class="none"<?php }?>> </td>
							</tr>
							<tr>
								<th width="150">默认女生头像：</th>
								<td>
									<button type="button" class="yun_bth_pic adminupload" lay-data="{name: 'sy_member_iconv',imgid: 'imgiconv',path:'logo'}">上传图片</button>
									
									<img id="imgiconv" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_iconv'];?>
" width="60" height="60" <?php if (!$_smarty_tpl->tpl_vars['config']->value['sy_member_iconv']) {?>class="none"<?php }?>> </td>
							</tr>
							<tr>
								<th width="150">默认职业技能和作品：</th>
								<td>
									<button type="button" class="yun_bth_pic adminupload" lay-data="{name: 'sy_member_skill',imgid: 'imgskill',path:'logo'}">上传图片</button>
									
									<img id="imgskill" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_skill'];?>
" width="60" height="60" <?php if (!$_smarty_tpl->tpl_vars['config']->value['sy_member_skill']) {?>class="none"<?php }?>> </td>
							</tr>
							<tr>
								<th>&nbsp;</th>
								<td align="left">
									<input class="layui-btn layui-btn-normal admin_buttonpz" type="submit" name="submit" value="提交" />&nbsp;&nbsp;
									<input class="layui-btn layui-btn-normal admin_buttonpz" type="reset" value="重置" />
								</td>
							</tr>
						</table>
						<input type="hidden" name="pytoken" id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
					</form>
				</div>
			</div>
		</div>
		<?php echo '<script'; ?>
>
			var weburl = '<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
';
			layui.use(['layer', 'form'], function() {
				var layer = layui.layer,
					form = layui.form,
					$ = layui.$;
			});
		<?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui.upload.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type='text/javascript'><?php echo '</script'; ?>
>
	</body>
</html>
<?php }} ?>
