<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-07 02:44:47
         compiled from "D:\rcw\uploads\app\template\admin\admin_integral_comspend.htm" */ ?>
<?php /*%%SmartyHeaderCode:9289871755fa5999fb15bd5-67020932%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62a5cb4ff46ec6ec1478c1d48540ca57cd1584f1' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\admin\\admin_integral_comspend.htm',
      1 => 1576583345,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9289871755fa5999fb15bd5-67020932',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'data' => 0,
    'key' => 0,
    'v' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fa5999fb32a19_98259450',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fa5999fb32a19_98259450')) {function content_5fa5999fb32a19_98259450($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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

		<form class="layui-form">

			<div class="infoboxp">
				<div class="tabs_info">
					<ul>
						<li><a href="index.php?m=admin_comset">企业设置</a></li>
						<li><a href="index.php?m=admin_comset&c=logo">头像设置</a></li>
						<li><a href="index.php?m=admin_comset&c=set"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
设置</a></li>
						<li class="curr"><a href="index.php?m=admin_comset&c=comspend">消费设置</a></li>
						<li><a href="index.php?m=admin_comset&c=rating">套餐设置</a></li>
					</ul>
				</div>

				<div class="admin_new_tip">
					<a href="javascript:;" class="admin_new_tip_close"></a>
					<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
					<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
					<div class="admin_new_tip_list_cont">
						<div class="admin_new_tip_list">该页面展示了网站企业消费设置管理</div>
						<div class="admin_new_tip_list">当前<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
兑换比为1元=<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
，可设置最低金额是<?php echo 1/$_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
元。</div>
					</div>
				</div>

				<div class="main_tag mt10">
					<div class="clear"></div>
					<div class="tag_box">
						<div>
							<table width="100%" class="table_form">

								<tr class="admin_table_trbg">
									<th width="220" bgcolor="#f0f6fb"><span class="admin_bold">参数说明</span></th>
									<td bgcolor="#f0f6fb"><span class="admin_bold">参数值</span></td>
								</tr>

								<tr>
									<th width="220">发布职位：</th>
									<td>
										<div class="layui-form-item">
											<div class="layui-input-block">
												<input class="input-text" type="text" name="integral_job" id="integral_job" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_job'];?>
" autocomplete="off" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')" onBlur="payintegral(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
');" />
												元 / 份
											</div>
										</div>
									</td>
								</tr>

								<tr>
									<th width="220">下载人才简历：</th>
									<td>

										<div class="layui-form-item">
											<div class="layui-input-block">
												<input class="input-text" type="text" name="integral_down_resume" id="integral_down_resume" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_down_resume'];?>
" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')" onBlur="payintegral(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
');" />
												元 / 份
											</div>
										</div>
									</td>
								</tr>

								<tr class="admin_table_trbg">
									<th width="220">邀请人才面试：</th>
									<td>
										<div class="layui-form-item">
											<div class="layui-input-block">
												<input class="input-text" type="text" name="integral_interview" id="integral_interview" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_interview'];?>
" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')" onBlur="payintegral(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
');" />
												元 / 份
											</div>
										</div>
									</td>
								</tr>


								<tr class="admin_table_trbg">
									<th width="220">刷新职位：</th>
									<td>
										<div class="layui-form-item">
											<div class="layui-input-block">
												<input class="input-text" type="text" name="integral_jobefresh" id="integral_jobefresh" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_jobefresh'];?>
" autocomplete="off" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')" onBlur="payintegral(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
');" />
												元 / 份
											</div>
										</div>
									</td>
								</tr>


								<tr>
									<th width="220">发布紧急招聘：</th>
									<td>
										<div class="layui-form-item">
											<div class="layui-input-block">
												<input type="text" name="com_urgent" id="com_urgent" required lay-verify="required" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['com_urgent'];?>
" autocomplete="off" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')" class="input-text" onBlur="payintegral(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
');">
												元 / 天
											</div>
										</div>
									</td>
								</tr>

								<tr>
									<th width="220">发布置顶职位：</th>
									<td>
										<div class="layui-form-item">
											<div class="layui-input-block">
												<input type="text" name="integral_job_top" id="integral_job_top" required lay-verify="required" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_job_top'];?>
" autocomplete="off" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')" class="input-text" onBlur="payintegral(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
');">
												元 / 天
											</div>
										</div>
									</td>
								</tr>

								<tr class="admin_table_trbg">
									<th width="220">发布推荐招聘：</th>
									<td>
										<div class="layui-form-item">
											<div class="layui-input-block">
												<input type="text" name="com_recjob" id="com_recjob" required lay-verify="required" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['com_recjob'];?>
" autocomplete="off" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')" class="input-text" onBlur="payintegral(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
');">
												元 / 天
											</div>
										</div>
									</td>
								</tr>

								<tr class="admin_table_trbg">
									<th width="220">职位自动刷新：</th>
									<td>
										<div class="layui-form-item">
											<div class="layui-input-block">
												<input type="text" name="job_auto" id="job_auto" required lay-verify="required" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['job_auto'];?>
" autocomplete="off" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')" class="input-text" onBlur="payintegral(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
');">
												元 / 天
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<th width="220">下载人才简历定价：</th>
									<td>
										<div class="admin_resumedjtip">
											<span class="admin_web_tip" style="margin-left:0px;">简历可按照更新时间，如：1天内更新,3天内更新或7天内更新等等分别定价</span>
										</div>

										<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
										<div class="admin_resume_jg_list" id="newdayprice<?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
">
											更新时间：<input class="input-text" type="text" name="days[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['days'];?>
" style="width:80px;" placeholder=" " /> 天内
											<span class="admin_resume_jg_name">单价：</span>
											<input class="input-text" type="text" name="price[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')" onBlur="payintegral(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
');" style="width:80px;" /> 元 / 份
											<a href="javascript:;" onclick="deldowndata('<?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
');" class="admin_resume_jgdelete">删除</a>
										</div>
										<?php } ?>

										<div id="newlist"></div>
										<div class="admin_resume_jg_add_c"><span class="admin_resume_jg_add" id="adddowndata">+ 添加新定价</span></div>
									</td>
								</tr>
							 
								
								
								<tr class="admin_table_trbg">
									<th style="border-bottom:none;">&nbsp;</th>
									<td align="left" style="border-bottom:none;">
										<input class="layui-btn layui-btn-normal" id="integral" type="button" name="config" value="提交" />&nbsp;&nbsp;
										<input class="layui-btn layui-btn-normal" type="reset" value="重置" />
									</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
			<input type="hidden" name="pytoken" id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
		</form>
		<?php echo '<script'; ?>
>
			layui.use(['layer', 'form'], function() {
				var layer = layui.layer,
					form = layui.form,
					$ = layui.$;
			});
		
			$(function() {
				$("#integral").click(function() {
					var codewebarr = "";
					var a = document.getElementsByName("days[]");
					var b = document.getElementsByName("price[]");
					for (var i = 0; i < a.length; i++) {
						if (codewebarr == '') {
							if (a[i].value > 0) {
								codewebarr += a[i].value;
								if (b[i].value) {
									codewebarr += '_' + b[i].value;
								} else {
									codewebarr += '_0';
								}
							}
						} else {
							if (a[i].value > 0) {
								codewebarr += ':' + a[i].value;
								if (b[i].value) {
									codewebarr += '_' + b[i].value;
								} else {
									codewebarr += '_0';
								}
							}
						}
					}
					loadlayer();
					$.post("index.php?m=admin_comset&c=save", {
							config: $("#integral").val(),
		
							integral_job_type: 2,
							integral_job: $("#integral_job").val(),
		
							integral_down_resume_type: 2,
							integral_down_resume: $("#integral_down_resume").val(),
							integral_down_resume_dayprice: codewebarr,
		
							integral_interview_type: 2,
							integral_interview: $("#integral_interview").val(),
		
		
							integral_jobefresh_type: 2,
							integral_jobefresh: $("#integral_jobefresh").val(),
		
							com_urgent_type: 2,
							com_urgent: $("#com_urgent").val(),
		
							com_recjob_type: 2,
							com_recjob: $("#com_recjob").val(),
		
							job_auto_type: 2,
							job_auto: $("#job_auto").val(),
		
							integral_jobtop_type: 2,
							integral_job_top: $("#integral_job_top").val(),
		
							
							pytoken: $("#pytoken").val()
						},
		
						function(data, textStatus) {
							parent.layer.closeAll('loading');
							config_msg(data);
						});
				});
				$('#adddowndata').click(function() {
					var randnum = parseInt(Math.random() * 1000);
					var arrstr = '<div class="admin_resume_jg_list" id="newdayprice' + randnum +
						'">更新时间：<input class="input-text" type="text" name="days[]" value="" style="width:80px;"/> 天内 <span class="admin_resume_jg_name">单价：</span><input class="input-text" type="text" name="price[]" value="" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,\'\')"style="width:80px;" /> 元 / 份<a href="javascript:;" onclick="deldowndata(' +
						randnum + ');" class="admin_resume_jgdelete">删除</a></div>';
					$("#newlist").before(arrstr);
				});
			})
		
			function deldowndata(obj) {
				var commentSet = $("input[name='days[]']");
				if (commentSet.length <= 1) {
					parent.layer.msg('再删就没有啦！', 2, 8);
					return false;
				} else {
					$("#newdayprice" + obj).remove();
				}
			}
		<?php echo '</script'; ?>
>
	</body>
</html>
<?php }} ?>
