<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-16 22:16:13
         compiled from "D:\rcw\uploads\app\template\admin\admin_mypass.htm" */ ?>
<?php /*%%SmartyHeaderCode:18393085005fb289ad206ee3-12177529%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8aff0c367958590c9c8e5a4f06b0fe2c9a9365a' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\admin\\admin_mypass.htm',
      1 => 1576479798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18393085005fb289ad206ee3-12177529',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'adminuser' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fb289ad2105c7_19256355',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb289ad2105c7_19256355')) {function content_5fb289ad2105c7_19256355($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
		<link href="./images/reset.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
		<link href="./images/system.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
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
		<link href="./images/table_form.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
		<title></title>
	</head>
	<body class="body_ifm">
		<div class="infoboxp">
			<div class="admin_new_tip">
				<a href="javascript:;" class="admin_new_tip_close"></a>
				<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
				<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
				<div class="admin_new_tip_list_cont">
					<div class="admin_new_tip_list">请正确填写原始密码，修改成功以后，需重新登录。</div>
				</div>
			</div>
			<div class="clear"></div>
			<div style="height:10px;"></div>

			<div class="common-form">
				<div class="admin_table_border">
					<iframe id="supportiframe" name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
					<form name="myform" action="index.php?m=admin_user&c=savePass" target="supportiframe" method="post" id="myform">
						<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['adminuser']->value[0];?>
" name="uid" />
						<table width="100%" class="table_form contentWrap" style="background:#fff;">
							<tr>
								<tbody>
									<th bgcolor="#f0f6fb" colspan="2"><span class="admin_bold">修改密码</span></th>
								</tbody>
							</tr>
							<tr>
								<th width="150">原始密码：</th>
								<td>
									<input type="password" name="oldpass" id="realname" class="input-text" size="30" value="">
								</td>
							</tr>
							<tr class="admin_table_trbg">
								<th>新密码：</th>
								<td><input type="password" name="password" id="realname" class="input-text" size="30" value="">
								</td>
							</tr>
							<tr>
								<th>确认密码：</th>
								<td><input type="password" name="okpassword" id="realname" class="input-text" size="30" value=""></td>
							</tr>

							<tr class="admin_table_trbg">
								<td colspan="2" align="center">
									<input class="layui-btn layui-btn-normal" name="useradd" type="submit" value="提交" id="dosubmit">
								</td>
							</tr>
						</table>
						<input type="hidden" name="pytoken" id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
					</form>
				</div>
			</div>
		</div>
	</body>
</html><?php }} ?>
