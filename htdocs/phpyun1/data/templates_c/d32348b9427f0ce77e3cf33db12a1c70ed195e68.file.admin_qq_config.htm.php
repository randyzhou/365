<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-07 02:58:07
         compiled from "D:\rcw\uploads\app\template\admin\admin_qq_config.htm" */ ?>
<?php /*%%SmartyHeaderCode:1185395755fa59cbf1b13c8-17238610%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd32348b9427f0ce77e3cf33db12a1c70ed195e68' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\admin\\admin_qq_config.htm',
      1 => 1576479798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1185395755fa59cbf1b13c8-17238610',
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
  'unifunc' => 'content_5fa59cbf1bfcf4_16413028',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fa59cbf1bfcf4_16413028')) {function content_5fa59cbf1bfcf4_16413028($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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

	<body class="body_ifm">
		<div class="infoboxp">
			<div class="admin_new_tip">
				<a href="javascript:;" class="admin_new_tip_close"></a>
				<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
				<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
				<div class="admin_new_tip_list_cont">
					<div class="admin_new_tip_list"> 请先申请对应的接口再开启&nbsp;(
						<a href="http://connect.qq.com/" target="_blank">QQ开放平台</a> &nbsp;&nbsp;
						<a href="http://open.weibo.com" target="_blank">新浪开放平台</a>)</div>
				</div>
			</div>
			<div class="clear"></div>
			<div style="height:10px;"></div>

			<div class="tag_box mt10">

				<form class="layui-form">
					<table width="100%" class="table_form">
						<tbody>
							<tr class="admin_table_trbg">
								<th width="160" bgcolor="#f0f6fb" colspan="2"><span class="admin_bold">QQ登录</span></th>
							</tr>
						</tbody>
						<tr class="admin_table_trbg">
							<th width="160">是否开启：</th>
							<td>
								<div class="layui-form-item">
									<div class="layui-input-block">
										<div class="layui-input-inline">
											<input type="checkbox" name="sy_qqlogin" lay-skin="switch" lay-text="开启|关闭" <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_qqlogin']=="1") {?>checked<?php }?>>
										</div>
									</div>
								</div>
							</td>
						</tr>
						<tr class="admin_table_trbg">
							<th width="160">appid：</th>
							<td><input class="input-text" type="text" name="sy_qqappid" id="sy_qqappid" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_qqappid'];?>
" size="30" maxlength="255" /><span class="admin_web_tip">如：1002478xx</span></td>
						</tr>
						<tr class="admin_table_trbg">
							<th width="160">appkey：</th>
							<td><input class="input-text" type="text" name="sy_qqappkey" id="sy_qqappkey" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_qqappkey'];?>
" size="40" maxlength="255" /><span class="admin_web_tip">如：4dd1c30d472676914f2fbfbnjt33</span></td>
						</tr>
						<tr class="admin_table_trbg" style="display:none;">
							<th width="160">应用打通是否申请通过：</th>
							<td>
								<div class="layui-form-item">
									<div class="layui-input-block">
										<div class="layui-input-inline">
											<input type="checkbox" name="sy_qqdt" lay-skin="switch" lay-text="是|否" <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_qqdt']=="1") {?>checked<?php }?>><span class="admin_web_tip">QQ互联平台移动应用和网站应用是否已打通，未打通的请不要打开</span>
										</div>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td colspan="2" align="center"><input class="layui-btn layui-btn-normal" id="qqconfig" type="button" name="qqconfig" value="提交" />&nbsp;&nbsp;<input class="layui-btn layui-btn-normal" type="reset" value="重置" /></td>
						</tr>
					</table>

					<table width="100%" class="table_form">
						<tbody>
							<tr class="admin_table_trbg">
								<th width="160" bgcolor="#f0f6fb" colspan="2"><span class="admin_bold">新浪微博登录</span></th>
							</tr>
						</tbody>
						<tr>
							<th width="160">是否开启：</th>
							<td>
								<div class="layui-form-item">
									<div class="layui-input-block">
										<div class="layui-input-inline">
											<input type="checkbox" name="sy_sinalogin" lay-skin="switch" lay-text="开启|关闭" <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_sinalogin']=="1") {?>checked<?php }?>>
										</div>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<th width="160">App Key：</th>
							<td><input class="input-text" type="text" name="sy_sinaappid" id="sy_sinaappid" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_sinaappid'];?>
" size="30" maxlength="255" /></td>
						</tr>
						<tr>
							<th width="160">App Secret：</th>
							<td><input class="input-text" type="text" name="sy_sinaappkey" id="sy_sinaappkey" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_sinaappkey'];?>
" size="40" maxlength="255" /></td>
						</tr>
						<tr>
							<td colspan="2" align="center"><input class="layui-btn layui-btn-normal" id="sinaconfig" type="button" name="msgconfig" value="提交" />&nbsp;&nbsp;<input class="layui-btn layui-btn-normal" type="reset" value="重置" /></td>
						</tr>
					</table>

					<input type="hidden" name="pytoken" id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
			</div>
		</div>

		<?php echo '<script'; ?>
>
			layui.use(['layer', 'form'], function() {
				var layer = layui.layer,
					form = layui.form,
					$ = layui.$;
			});

			$(function() {
				$("#qqconfig").click(function() {
					loadlayer();
					$.post("index.php?m=qqconfig&c=save", {
						config: $("#qqconfig").val(),
						sy_qqdt: $("input[name=sy_qqdt]").is(':checked') ? 1 : 0,
						sy_qqlogin: $("input[name=sy_qqlogin]").is(':checked') ? 1 : 0,
						sy_qqappkey: $("#sy_qqappkey").val(),
						sy_qqappid: $("#sy_qqappid").val(),
						pytoken: $("#pytoken").val()
					}, function(data, textStatus) {
						parent.layer.closeAll('loading');
						config_msg(data);
					});
				});
				$("#sinaconfig").click(function() {
					loadlayer();
					$.post("index.php?m=qqconfig&c=save", {
						config: $("#sinaconfig").val(),
						sy_sinalogin: $("input[name=sy_sinalogin]").is(':checked') ? 1 : 0,
						sy_sinaappkey: $("#sy_sinaappkey").val(),
						sy_sinaappid: $("#sy_sinaappid").val(),
						pytoken: $("#pytoken").val()
					}, function(data, textStatus) {
						parent.layer.closeAll('loading');
						config_msg(data);
					});
				});

			})
		<?php echo '</script'; ?>
>
	</body>

</html><?php }} ?>
