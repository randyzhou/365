<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-07 20:41:33
         compiled from "D:\rcw\uploads\app\template\admin\admin_user_config.htm" */ ?>
<?php /*%%SmartyHeaderCode:7117124515fa695fdbbf764-65059267%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a73a80b56aa6eac316fb0464388771794e4ed794' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\admin\\admin_user_config.htm',
      1 => 1576583345,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7117124515fa695fdbbf764-65059267',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'userdata' => 0,
    'v' => 0,
    'userclass_name' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fa695fdbf72c7_51674332',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fa695fdbf72c7_51674332')) {function content_5fa695fdbf72c7_51674332($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
" rel="stylesheet"
		 type="text/css" />
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
			<div id="subboxdiv" style="width:100%;height:100%;display:none;position:absolute;"></div>
			<div class="infoboxp">
				<div class="tabs_info">
					<ul>
						<li class="curr">
							<a href="index.php?m=admin_userset">个人设置</a>
						</li>
						<li>
							<a href="index.php?m=admin_userset&c=logo">头像设置</a>
						</li>
						<li>
							<a href="index.php?m=admin_userset&c=set"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
设置</a>
						</li>
						<li>
							<a href="index.php?m=admin_userset&c=userspend">消费设置</a>
						</li>
					</ul>
				</div>
				<div class="admin_new_tip">
					<a href="javascript:;" class="admin_new_tip_close"></a>
					<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
					<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
					<div class="admin_new_tip_list_cont">
						<div class="admin_new_tip_list">通过个人设置，可以实现“简历审核、个人身份证认证”等设置。管理员根据自己运营需求自由设置。</div>
					</div>
				</div>
				<div class="clear"></div>

				<div class="main_tag mt10">
					<div class="tag_box">
						<div class="">
							<table width="100%" class="table_form">
								<tr class="admin_table_trbg">
									<th width="220" bgcolor="#f0f6fb"><span class="admin_bold">参数说明</span></th>
									<td bgcolor="#f0f6fb"><span class="admin_bold">参数值</span></td>
								</tr>
								<tr>
									<th width="220">个人会员审核：</th>
									<td>
										<div class="layui-form-item">
											<div class="layui-input-block">
												<input type="radio" name="user_state" value="0" title="审核" <?php if ($_smarty_tpl->tpl_vars['config']->value['user_state']!=1) {?>checked<?php }?>/>
												<input type="radio" name="user_state" value="1" title="不审核" <?php if ($_smarty_tpl->tpl_vars['config']->value['user_state']==1) {?>checked<?php }?>/>
											</div>
										</div>
									</td>
								</tr>
							    <tr>
									<th width="220">个人简历审核：</th>
									<td>
										<div class="layui-form-item">
											<div class="layui-input-block">
												<input type="radio" name="resume_status" value="0" title="开启" <?php if ($_smarty_tpl->tpl_vars['config']->value['resume_status']!=1) {?>checked<?php }?>/>
												<input type="radio" name="resume_status" value="1" title="关闭" <?php if ($_smarty_tpl->tpl_vars['config']->value['resume_status']==1) {?>checked<?php }?>/>
											</div>
										</div>
									</td>
								</tr>
							    <tr>
									<th width="220">个人会员邮件激活：</th>
									<td>
										<div class="layui-form-item">
											<div class="layui-input-block">
												<input type="radio" name="user_status" value="1" title="开启" <?php if ($_smarty_tpl->tpl_vars['config']->value['user_status']==1) {?>checked<?php }?>/>
												<input type="radio" name="user_status" value="0" title="关闭" <?php if ($_smarty_tpl->tpl_vars['config']->value['user_status']!=1) {?>checked<?php }?>/>
												<a href="javascript:jihuo();" class="layui-btn layui-btn-normal">以前用户全部激活</a>
											</div>
										</div>
									</td>
								</tr>
								<tr class="admin_table_trbg">
									<th width="220">强制创建简历：</th>
									<td>
										<div class="layui-form-item">
											<div class="layui-input-block">
												<input type="radio" name="user_resume_status" value="1" title="开启" <?php if ($_smarty_tpl->tpl_vars['config']->value['user_resume_status']==1) {?>checked<?php }?>/>
												<input type="radio" name="user_resume_status" value="0" title="关闭" <?php if ($_smarty_tpl->tpl_vars['config']->value['user_resume_status']!=1) {?>checked<?php }?>/>
											</div>
										</div>
									</td>
								</tr>
								<tr class="admin_table_trbg">
									<th width="220">简历创建必填项：</th>
									<td>
										<div class="layui-form-item">
											<div class="layui-input-block">
												
												<input name="resume_create_exp" title="工作经历" <?php if ($_smarty_tpl->tpl_vars['config']->value['resume_create_exp']==1) {?> checked <?php }?> type="checkbox" lay-skin="primary" lay-filter="resume_create_exp"/>
                                                <input name="resume_create_edu" title="教育经历" <?php if ($_smarty_tpl->tpl_vars['config']->value['resume_create_edu']==1) {?> checked <?php }?> type="checkbox" lay-skin="primary" lay-filter="resume_create_edu"/>
												<input name="resume_create_project" title="项目经历" <?php if ($_smarty_tpl->tpl_vars['config']->value['resume_create_project']==1) {?> checked <?php }?> type="checkbox" lay-skin="primary"/>
											</div>
										</div>
                                     <div id="expshow" <?php if ($_smarty_tpl->tpl_vars['config']->value['resume_create_exp']!=1) {?>style="display:none;"<?php }?>>  
                                     <div class="admin_tj_xz">
                                     <div class="admin_tj_xz_tit"><span class="admin_tj_xz_tit_n">工作经历非必填条件选择</span> 根据求职者填写基本信息时选择的工作经验，创建简历时可不强制填写工作经历</div>
                                     	<div class="layui-form-item">
											<div class="layui-input-block">
												<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_word']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
												<input name="expcreate" title="<?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
" value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if (strpos($_smarty_tpl->tpl_vars['config']->value['expcreate'],$_smarty_tpl->tpl_vars['v']->value)!==false) {?> checked <?php }?> type="checkbox" lay-skin="primary"/>
												<?php } ?>
												
											</div>
										</div>
                                     </div> 
                                       </div> 
                                        <div id="edushow" <?php if ($_smarty_tpl->tpl_vars['config']->value['resume_create_edu']!=1) {?>style="display:none;"<?php }?>>
                                        <div class="admin_tj_xz">
                                        <div class="admin_tj_xz_tit"><span class="admin_tj_xz_tit_n">教育经历非必填条件选择</span> 根据求职者填写基本信息时选择的学历，创建简历时可不强制填写教育经历</div>
                                        <div class="layui-form-item">
											<div class="layui-input-block">
												<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_edu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
												<input name="educreate" title="<?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
" value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if (strpos($_smarty_tpl->tpl_vars['config']->value['educreate'],$_smarty_tpl->tpl_vars['v']->value)!==false) {?> checked <?php }?> type="checkbox" lay-skin="primary"/>
												<?php } ?>
												
											</div>
										</div>
                                        </div>
                                        </div>
                                    
									</td>
								</tr>
                              
                              
								<tr class="admin_table_trbg">
									<th width="220">简历置顶要求：</th>
									<td>
										<div class="layui-form-item">
											<div class="layui-input-block">
												<input name="user_edu_regiser" title="教育经历" <?php if ($_smarty_tpl->tpl_vars['config']->value['user_edu_regiser']==1) {?> checked <?php }?> type="checkbox" lay-skin="primary"/>
												<input name="user_work_regiser" title="工作经历" <?php if ($_smarty_tpl->tpl_vars['config']->value['user_work_regiser']==1) {?> checked <?php }?> type="checkbox" lay-skin="primary"/>
												<input name="user_project_regiser" title="项目经历" <?php if ($_smarty_tpl->tpl_vars['config']->value['user_project_regiser']==1) {?> checked <?php }?> type="checkbox" lay-skin="primary"/>
											</div>
										</div>
									</td>
								</tr>
								
								<tr>
									<th width="220">个人身份证审核：</th>
									<td>
										<div class="layui-form-item">
											<div class="layui-input-block">
												<input type="radio" name="user_idcard_status" value="1" title="开启" <?php if ($_smarty_tpl->tpl_vars['config']->value['user_idcard_status']==1) {?>checked<?php }?>/>
												<input type="radio" name="user_idcard_status" value="0" title="关闭" <?php if ($_smarty_tpl->tpl_vars['config']->value['user_idcard_status']!=1) {?>checked<?php }?>/>
											</div>
										</div>
									</td>
								</tr>
								<tr class="admin_table_trbg">
									<th width="220">个人头像审核：</th>
									<td>
										<div class="layui-form-item">
											<div class="layui-input-block">
												<input type="radio" name="user_photo_status" value="1" title="开启" <?php if ($_smarty_tpl->tpl_vars['config']->value['user_photo_status']==1) {?>checked<?php }?>/>
												<input type="radio" name="user_photo_status" value="2" title="关闭" <?php if ($_smarty_tpl->tpl_vars['config']->value['user_photo_status']==2) {?>checked<?php }?>/>
												<span class="admin_web_tip">关闭则默认通过审核</span>
											</div>
										</div>
									</td>
								</tr>
								<tr class="admin_table_trbg">
									<th width="220">作品案例审核：</th>
									<td>
										<div class="layui-form-item">
											<div class="layui-input-block">
												<input type="radio" name="rshow_photo_status" value="1" title="开启" <?php if ($_smarty_tpl->tpl_vars['config']->value['rshow_photo_status']==1) {?>checked<?php }?>/>
												<input type="radio" name="rshow_photo_status" value="0" title="关闭" <?php if ($_smarty_tpl->tpl_vars['config']->value['rshow_photo_status']==0) {?>checked<?php }?>/>
												<span class="admin_web_tip">关闭则默认通过审核</span>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<th width="220">拥有简历才可报名兼职：</th>
									<td>
										<div class="layui-form-item">
											<div class="layui-input-block">
												<input type="radio" name="com_resume_partapply" value="1" title="开启" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_resume_partapply']==1) {?>checked<?php }?>/>
												<input type="radio" name="com_resume_partapply" value="0" title="关闭" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_resume_partapply']!=1) {?>checked<?php }?>/>
											</div>
										</div>
									</td>
								</tr>
								<tr class="admin_table_trbg">
									<th width="220">个人搜索器数量：</th>
									<td>
										<input class="input-text tips_class" type="text" name="user_finder" id="user_finder" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['user_finder'];?>
" size="20" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')" />个
										<span class="admin_web_tip">数量太多，发送订阅邮件会很慢，为空则不限</span>
									</td>
								</tr>
								<tr>
									<th width="220">个人会员发布简历数：</th>
									<td>
										<input class="input-text tips_class" type="text" name="user_number" id="user_number" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['user_number'];?>
" size="20" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')" /> 份
										<span class="admin_web_tip">为空则不限</span>
									</td>
								</tr>
								
								<tr class="admin_table_trbg">
									<th width="220">姓名展示：</th>
									<td>
										<div class="layui-form-item">
											<div class="layui-input-block">
												<input type="radio" name="user_name" value="1" title="用户自定义" <?php if ($_smarty_tpl->tpl_vars['config']->value['user_name']==1) {?>checked<?php }?>/>
												<input type="radio" name="user_name" value="2" title="编号" <?php if ($_smarty_tpl->tpl_vars['config']->value['user_name']==2) {?>checked<?php }?>/>
												<input type="radio" name="user_name" value="3" title="性别称呼" <?php if ($_smarty_tpl->tpl_vars['config']->value['user_name']==3) {?>checked<?php }?>/>
												<input type="radio" name="user_name" value="4" title="真实姓名" <?php if ($_smarty_tpl->tpl_vars['config']->value['user_name']==4) {?>checked<?php }?>/>
												<span class="admin_web_tip">编号：如NO.12，性别称呼：如冯先生/女士，真实姓名：如冯云鹏</span>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<th width="220">个人简历头像：</th>
									<td>
										<div class="layui-form-item">
											<div class="layui-input-block">
												<input type="radio" name="user_pic" value="1" title="用户自定义" <?php if ($_smarty_tpl->tpl_vars['config']->value['user_pic']==1) {?>checked<?php }?>/>
												<input type="radio" name="user_pic" value="2" title="显示" <?php if ($_smarty_tpl->tpl_vars['config']->value['user_pic']==2) {?>checked<?php }?>/>
												<input type="radio" name="user_pic" value="3" title="不显示" <?php if ($_smarty_tpl->tpl_vars['config']->value['user_pic']==3) {?>checked<?php }?>/>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<th width="220">申请职位要求简历完整度达到：</th>
									<td>
										<input class="input-text tips_class" type="text" name="user_sqintegrity" id="user_sqintegrity" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['user_sqintegrity'];?>
" size="20" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')" />%
									</td>
								</tr>
								<tr>
									<th width="220">个人简历刷新类型：</th>
									<td>
										<div class="layui-form-item">
											<div class="layui-input-block">
												<input type="radio" name="resume_sx" value="1" title="登录后自动刷新" <?php if ($_smarty_tpl->tpl_vars['config']->value['resume_sx']==1) {?>checked<?php }?>/>
												<input type="radio" name="resume_sx" value="2" title="弹出框手动刷新" <?php if ($_smarty_tpl->tpl_vars['config']->value['resume_sx']==2) {?>checked<?php }?>/>
											</div>
										</div>
									</td>
								</tr>
								<tr class="admin_table_trbg">
                                    <th width="220">简历模糊化：</th>
                                    <td>
                                        <div class="layui-form-item">
                                            <div class="layui-input-block">
                                                <input type="radio" name="resume_open_check" lay-filter="type" value="1" title="开放" <?php if ($_smarty_tpl->tpl_vars['config']->value['resume_open_check']==1) {?>checked<?php }?>>
                                                <input type="radio" name="resume_open_check" lay-filter="type" value="2" title="企业登录" <?php if ($_smarty_tpl->tpl_vars['config']->value['resume_open_check']==2) {?>checked<?php }?>>
                                                <input type="radio" name="resume_open_check" lay-filter="type" value="3" title="发布职位" <?php if ($_smarty_tpl->tpl_vars['config']->value['resume_open_check']==3) {?>checked<?php }?>>
                                                <input type="radio" name="resume_open_check" lay-filter="type" value="4" title="下载简历(查看联系方式)" <?php if ($_smarty_tpl->tpl_vars['config']->value['resume_open_check']==4) {?>checked<?php }?>>
                                                <span class="admin_web_tip">若选择“开放”，任何人都可以查看具体的工作经历等内容</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
								
								<tr class="">
									<th>&nbsp;</th>
									<td align="left">
										<input type="hidden" name="pytoken" id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
"/>
										<input class="layui-btn layui-btn-normal admin_buttonpz" id="config" type="button" name="config" value="提交"/>&nbsp;&nbsp;
										<input class="layui-btn layui-btn-normal admin_buttonpz" type="reset" value="重置" />
									</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<?php echo '<script'; ?>
>
					layui.use(['layer', 'form'], function() {
						var layer = layui.layer,
							form = layui.form,
							$ = layui.$;
						form.on('checkbox(resume_create_edu)', function(data) {
							if(data.elem.checked) {
								$('#edushow').show();
							}else{
								$('#edushow').hide();
							}
						});
						form.on('checkbox(resume_create_exp)', function(data) {
							if(data.elem.checked) {
								$('#expshow').show();
							}else{
								$('#expshow').hide();
							}
						});
					});
					$(function() {
						$("#config").click(function() {
							var educreate	= "";
                        	$('input[name="educreate"]:checked').each(function() {
                                if(educreate == "") {
                                	educreate = $(this).val();
                                } else {
                                	educreate = educreate + "," + $(this).val();
                                }
                            });
							var expcreate	= "";
                        	$('input[name="expcreate"]:checked').each(function() {
                                if(expcreate == "") {
                                	expcreate = $(this).val();
                                } else {
                                	expcreate = expcreate + "," + $(this).val();
                                }
                            });
							loadlayer();
							$.post("index.php?m=admin_userset&c=save", {
								config: $("#config").val(),
								user_number: $("#user_number").val(),
								user_finder: $("#user_finder").val(),
								user_work_regiser: $("input[name=user_work_regiser]").is(":checked") ? 1 : 0,
								user_edu_regiser: $("input[name=user_edu_regiser]").is(":checked") ? 1 : 0,
								user_project_regiser: $("input[name=user_project_regiser]").is(":checked") ? 1 : 0,
								//简历完善度达到80%以上验证，是否开启 1是开启 0是关闭  暂时不需要
								//简历完整度字段名称为：user_integrity_eighty
								user_integrity_eighty: $("input[name=user_integrity_eighty]:checked").val(),
								user_trust_number: $("#user_trust_number").val(),
								user_state: $("input[name=user_state]:checked").val(),
								resume_status: $("input[name=resume_status]:checked").val(),
								user_status: $("input[name=user_status]:checked").val(),
								user_resume_status: $("input[name=user_resume_status]:checked").val(),
								user_height_resume: $("input[name=user_height_resume]:checked").val(),
								user_idcard_status: $("input[name=user_idcard_status]:checked").val(),
								resume_open_check: $("input[name=resume_open_check]:checked").val(),

								com_resume_partapply: $("input[name=com_resume_partapply]:checked").val(),
								resume_sx: $("input[name=resume_sx]:checked").val(),
								pytoken: $("#pytoken").val(),
							
								user_photo_status: $("input[name=user_photo_status]:checked").val(),
								rshow_photo_status: $("input[name=rshow_photo_status]:checked").val(),
								user_name: $("input[name=user_name]:checked").val(),
								//个人简历头像是否显示，1是用户自定义 2是显示 3是不显示
								user_pic: $("input[name=user_pic]:checked").val(),
								user_sqintegrity: $("#user_sqintegrity").val(),
								//简历创建必填项
								resume_create_edu: $("input[name=resume_create_edu]").is(":checked") ? 1 : 0,
								resume_create_exp: $("input[name=resume_create_exp]").is(":checked") ? 1 : 0,
								resume_create_project: $("input[name=resume_create_project]").is(":checked") ? 1 : 0,
								educreate:educreate,
								expcreate:expcreate
							}, function(data, textStatus) {
								parent.layer.closeAll('loading');
								config_msg(data);
							});
						});
					})

					function jihuo() {
						var pytoken = $("#pytoken").val();
						loadlayer();
						$.get('index.php?m=admin_userset&c=jihuo&pytoken=' + pytoken, function(data) {
							parent.layer.closeAll('loading');
							if (data) {
								parent.layer.msg('激活成功！', 2, 9);
							} else {
								parent.layer.msg('激活失败！', 2, 8);
							}
						})
					}
				<?php echo '</script'; ?>
>
			</div>
		</form>
	</body>

</html>
<?php }} ?>
