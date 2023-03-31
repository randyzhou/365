<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-10-31 16:52:05
         compiled from "D:\rcw\uploads\app\template\admin\admin_oss_config.htm" */ ?>
<?php /*%%SmartyHeaderCode:11582224425f9d25b5357fd6-42245150%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39c511b143ca7a991eccf5ca9c1a8de7e936df1f' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\admin\\admin_oss_config.htm',
      1 => 1576479798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11582224425f9d25b5357fd6-42245150',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'oss_data' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5f9d25b5367ef6_16476072',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9d25b5367ef6_16476072')) {function content_5f9d25b5367ef6_16476072($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
		<link href="../js/layui/css/layui.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
		<?php echo '<script'; ?>
 src="../js/layui/layui.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="../js/layui/phpyun_layer.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="js/admin_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
>
		<title>后台管理</title>
	</head>
	<body class="body_ifm">
		<div class="infoboxp">
			<div class="main_tag">
				<div class="admin_new_tip">
					<a href="javascript:;" class="admin_new_tip_close"></a>
					<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
					<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
					<div class="admin_new_tip_list_cont">
						<div class="admin_new_tip_list">阿里云OSS设置。</div>
					</div>
				</div>
				<div class="clear"></div>
				<div style="height:10px;"></div>
				<div class="tag_box">
					<div>
						<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
						<form method="post" target="supportiframe" action="index.php?m=admin_oss_config&c=save" onsubmit="return checkForm();" class="layui-form">
							<table width="100%" class="table_form">
								<tr class="admin_table_trbg">
									<th width="200" bgcolor="#f0f6fb"><span class="admin_bold">参数说明</span></th>
									<td bgcolor="#f0f6fb"><span class="admin_bold">参数值</span></td>
								</tr>

								<tr>
									<th width="160">阿里云OSS存储：</th>
									<td>
										<div class="layui-form-item">
											<div class="layui-input-block">
												<input type="checkbox" name="sy_oss" lay-skin="switch" lay-text="开启|关闭" lay-filter="oss" <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_oss']=="1") {?>checked<?php }?>/> <span class="admin_web_tip">关闭时文件上传到网站服务器，开启后网站文件将上传到阿里云OSS</span>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<th width="160">OSS存储地址：</th>
									<td>
										<div class="layui-form-item">
											<div class="layui-input-block">
												<div class="layui-input-inline">
													<input name="sy_ossurl" id="sy_ossurl" autocomplete="off" class="layui-input" type="text" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
"size="50" />
												</div>
												<span class="admin_web_tip">提示：阿里云OSS远程存储地址, 如http://img.hr135.com</span>
											</div>
										</div>
									</td>
								</tr>

								<tr>
									<th width="160">Access Key ID：</th>
									<td>
										<div class="layui-form-item">
											<div class="layui-input-block">
												<div class="layui-input-inline">
													<input name="access_id" id="access_id" autocomplete="off" class="layui-input" type="text" value="<?php echo $_smarty_tpl->tpl_vars['oss_data']->value['access_id'];?>
"size="50" />
												</div>
											</div>
										</div>
									</td>
								</tr>

								<tr>
									<th width="160">Access Key Secret：</th>
									<td>
										<div class="layui-form-item">
											<div class="layui-input-block">
												<div class="layui-input-inline">
													<input name="access_key" id="access_key" autocomplete="off" class="layui-input" type="text" value="<?php echo $_smarty_tpl->tpl_vars['oss_data']->value['access_key'];?>
"size="50" />
												</div>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<th width="160">EndPoint：</th>
									<td>
										<div class="layui-form-item">
											<div class="layui-input-block">
												<div class="layui-input-inline">
													<input name="endpoint" id="endpoint" autocomplete="off" class="layui-input" type="text" value="<?php echo $_smarty_tpl->tpl_vars['oss_data']->value['endpoint'];?>
"size="50" />
												</div>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<th width="160">Bucket：</th>
									<td>
										<div class="layui-form-item">
											<div class="layui-input-block">
												<div class="layui-input-inline">
													<input name="bucket" id="bucket" autocomplete="off" class="layui-input" type="text" value="<?php echo $_smarty_tpl->tpl_vars['oss_data']->value['bucket'];?>
" size="50" />
												</div>
												<span class="admin_web_tip">提示：存储空间名称</span>
											</div>
										</div>
									</td>
								</tr>
								<tr class="admin_table_trbg">
									<th>&nbsp;</th>
									<td colspan="2" align="left">
										<input type="hidden" name="pytoken" id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
										<input class="layui-btn layui-btn-normal" name="oss_config" type="submit" value="提交" />&nbsp;&nbsp;
										<input class="layui-btn layui-btn-normal" type="reset" value="重置" />
									</td>
								</tr>
							</table>
						</form>
					</div>
				</div>
			</div>
		</div>
		<?php echo '<script'; ?>
>
			layui.use(['layer', 'form'], function() {
				var layer = layui.layer,
					form = layui.form,
					$ = layui.$;
			});
			function checkForm(){
				var sy_oss = $("input[name=sy_oss]").is(":checked") ? 1 : 2;
				var sy_ossurl = $("#sy_ossurl").val();
				if(sy_oss == 1 && sy_ossurl == ''){
					parent.layer.msg('请填写阿里云OSS地址',2,8);
					return false;
				}
				loadlayer();
			}
		<?php echo '</script'; ?>
>

	</body>
</html>
<?php }} ?>
