<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-01 01:47:05
         compiled from "D:\rcw\uploads\app\template\admin\admin_company.htm" */ ?>
<?php /*%%SmartyHeaderCode:6309480995f9da3193ddd91-12993251%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad9c34fbbb14f2f0319f7956e535eb2c62ecb93f' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\admin\\admin_company.htm',
      1 => 1586342228,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6309480995f9da3193ddd91-12993251',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'pytoken' => 0,
    'ratingarr' => 0,
    'key' => 0,
    'ratlist' => 0,
    'total' => 0,
    'rows' => 0,
    'v' => 0,
    'source' => 0,
    'Dname' => 0,
    'email_promiss' => 0,
    'moblie_promiss' => 0,
    'pagenum' => 0,
    'pages' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5f9da31944fb67_96487757',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9da31944fb67_96487757')) {function content_5f9da31944fb67_96487757($_smarty_tpl) {?><?php if (!is_callable('smarty_function_searchurl')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.searchurl.php';
if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<!--[if IE 6]>
	<?php echo '<script'; ?>
 src="./js/png.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
		DD_belatedPNG.fix('.png,.admin_infoboxp_tj,');
	<?php echo '</script'; ?>
>
	<![endif]-->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/admin_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/show_pub.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
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
	<link href="images/reset.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
	<link href="images/system.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
	<link href="images/table_form.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
	<title>后台管理</title>
</head>

<body class="body_ifm">

	<!--管理弹出框-->
	<div id="manage" class="" style="width:650px; display:none;">
		<div class="admin_usertck_box">
     		<div class="admin_userinfo_box">
               	<div class="admin_userinfo_box_username">
               		【用户名】：<em id="m_username"></em> 
               		<span class="admin_userinfo_box_useruid">【用户id】：<em id="m_comid"></em></span>
                   	<a href="###" class="admin_userinfo_box_zx" id="m_center" target="_blank">进入用户中心>></a>
                   	<a href="" class="admin_userinfo_box_zx" id="m_home" target="_blank">预览公司主页>></a>
               	</div>
               	<div class="admin_userinfo_box_qyname">
               		【操作对象】：
               		<span class="admin_userinfo_box_qyname_s" id="m_name"></span>
               		<span class="admin_userinfo_box_useruid">【顾问姓名】：<em id="m_adviser"></em></span>
               		<span class="admin_userinfo_box_useruid">【用户IP】：<em  id="m_regip"></em></span>
               	</div>
           	</div>
           	         
           	<div class="admin_operation_box">
               	<div class="admin_operation_list">
                   	<span class="admin_operation_list_name">业务管理：</span>
                   	<a href="javascript:void(0)" class="admin_operation_list_a" id="m_integral">积分管理(<span id="m_integral_num">0</span>)</a>
                   	<a href="###" class="admin_operation_list_a" id="m_order">充值/订单(<span id="m_order_num">0</span>)</a>
                   	<a href="###" class="admin_operation_list_a" id="m_down">下载简历(<span id="m_down_num">0</span>)</a>
                   	<a href="###" class="admin_operation_list_a" id="m_apply">收到简历(<span id="m_apply_num">0</span>)</a>
                   	<a href="###" class="admin_operation_list_a" id="m_invite">面试邀请(<span id="m_invite_num">0</span>)</a>
               	</div>
               	<div class="admin_operation_list">
                   	<span class="admin_operation_list_name">资料管理：</span>
                  	<a href="###" class="admin_operation_list_a" id="m_job">职位管理(<span id="m_job_num">0</span>)</a>
                   	<a href="###" class="admin_operation_list_a" id="m_show">企业环境(<span id="m_show_num">0</span>)</a>
                   	<a href="###" class="admin_operation_list_a" id="m_comtpl">企业模板</a>
               	</div>
               	
               	<div class="admin_operation_list">
               		<span class="admin_operation_list_name">联系方式：</span>
              		<em id="m_phone"></em> 
              		<a href="javascript:void(0);" class="admin_operation_list_a" id="m_sendmsg" style="font-weight:bold;color:#F60;">[发送短信]</a>
              		<div class="">
               			<em id="m_email"></em> 
               			<a href="javascript:void(0);" class="admin_operation_list_a" id="m_sendemail" style="font-weight:bold;color:#F60;">[发送邮件]</a>
               		</div>
               		<em id="m_linkman"></em>
				</div>
				 
               	<input type="hidden" id="m_yyzzurl" value="" />
               	<input type="hidden" id="m_linktel" value="" />
               	<input type="hidden" id="m_linkmail" value="" />
               	<input type="hidden" id="m_resetpassword" value="" />

               	<input type="hidden" id="m_user" value="" />
               	<input type="hidden" id="m_uid" value="" />
               	<input type="hidden" id="m_status" value="" />
               	<input type="hidden" id="m_regip" value="" />
               	<input type="hidden" id="m_rating" value="" />
           	</div>
       	</div>
   	</div>
   	<!--管理弹出框 end-->
    
    <!-- 邮箱认证弹出框 -->
	<div id="renemail" style="display:none; width: 430px;text-align:center; ">
       	<div class="jap_honda">
			<form class="layui-form" action="index.php?m=admin_company&c=emaillock" target="supportiframe" method="post" autocomplete="off">
				<table cellspacing='1' cellpadding='1' class="admin_examine_table">
           			 <tr>
						<th width="80">邮箱：</th>
						<td align="left">
							<div class="layui-form-item">
								<div class="layui-input-block">
									<div class="admin_examine_right" style="width: 330px;">
										<input type="text" id="comemail" class="input-text" name="comemail" value="">
									</div>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<th width="80">认证操作：</th>
						<td align="left">
							<div class="layui-form-item">
								<div class="layui-input-block">
									<div class="admin_examine_right" style="width: 330px;">
										<input name="estatus" id="estatus0"  value="0" title="待认证" type="radio" /> 
										<input name="estatus" id="estatus1"  value="1" title="已认证" type="radio" /> 
									</div>
								</div>
							</div>
						</td>
					</tr>
	
					<tr>
						<td colspan='2' align="center">
							<input type="submit" onclick="loadlayer();" value='确认' class="admin_examine_bth">
							<input type="button" class="admin_examine_bth_qx closebutton" value='取消'>
						</td>
					</tr>
				</table>
				
				<input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
				<input type="hidden" name="uid" id="uid" value="0" >
			</form>
		</div>
	</div>
	<!-- 邮箱认证弹出框END -->
	
	<!--手机认证弹出框-->
	<div id="renphone" style="display:none; width: 430px;text-align:center; ">
		<div class="jap_honda">
		 	<form class="layui-form" action="index.php?m=admin_company&c=phonelock" target="supportiframe" method="post" autocomplete="off">
			 	<table cellspacing='1' cellpadding='1' class="admin_examine_table">
				 	<tr>
					 	<th width="80">手机号码：</th>
					 	<td align="left">
						 	<div class="layui-form-item">
							 	<div class="layui-input-block">
								 	<div class="admin_examine_right" style="width: 330px;">
										<input type="text" class="input-text" id="comlinktel" name="comlinktel" value="">
								 	</div>
							 	</div>
						 	</div>
					 	</td>
				 	</tr>
				 	<tr>
						<th width="80">认证操作：</th>
					 	<td align="left">
						 	<div class="layui-form-item">
							 	<div class="layui-input-block">
								 	<div class="admin_examine_right" style="width: 330px;">
									 	<input name="mstatus" id="pstatus0"  value="0" title="待认证" type="radio" /> 
									 	<input name="mstatus" id="pstatus1"  value="1" title="已认证" type="radio" /> 
								 	</div>
							 	</div>
						 	</div>
					 	</td>
				 	</tr>
 
					<tr>
						<td colspan='2' align="center">
							<input type="submit" onclick="loadlayer();" value='确认' class="admin_examine_bth">
							<input type="button" class="admin_examine_bth_qx closebutton" value='取消'>
						</td>
					</tr>
			 	</table>
			 
			 	<input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
			 	<input type="hidden" name="uid" id="phoneuid" value="0" >
		 	</form>
	 	</div>
	</div>
   	<!-- 手机认证end -->
   	
   	<!-- 证书认证弹出框 -->
   	<div id="preview" style="display:none;width:450px ">
     	<div style="height:380px; overflow:auto;width:450px;">
 			<form class="layui-form" name="formstatus" action="index.php?m=admin_company&c=comStatus" target="supportiframe" method="post" onsubmit="return tcdiv();">
            	
            	<input type="hidden" name="pytoken" id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">

          		<table cellspacing='1' cellpadding='1' class="admin_examine_table">
                	<tr>
                   		<th>公司名称：</th>
                       	<td align="left"><span id="comname"></span></td>
                   	</tr>
               		<tr>
	                	<th>认证图片：</th>
	                 	<td align="left">
	                		<div class="job_box_div" style="float:left;border:1px solid #eee;"></div>
							<a target="_blank" href="" id='preview_url' style="line-height:70px; padding-left:10px;">查看原图</a>
							<a id="zwyyzz" style="line-height:70px; padding-left:10px;display: none">暂无营业执照</a>
	                  	</td>
	               	</tr>
                	<tr>
                  		<th width="80">审核操作：</th>
                 		<td align="left">
                        	<div class="layui-form-item">
                            	<div class="layui-input-block">
	                             	<input name="r_status" id="comstatus1" value="1" title="正常" type="radio" />
	                              	<input name="r_status" id="comstatus3" value="3" title="未通过" type="radio" />
                             	</div>
                          	</div>
                     	</td>
                  	</tr> 
               		<?php if ($_smarty_tpl->tpl_vars['config']->value['com_free_status']=='1') {?>
                  		<tr>
                        	<th width="80">同步操作：</th>
                        	<td align="left">
                              	<div class="layui-form-item">
                                  	<div class="layui-input-block">
                                      	<input name="job_status" value="1" title="审核" type="checkbox" />
                                      	【说明：所有未审核职位同步审核成功】
                               		</div>
                              	</div>
                        	</td>
                   		</tr>
                	<?php }?>

                   	<tr>
                       	<th>审核说明：</th>
                       	<td align="left"> <textarea id="renzhencontent" name="statusbody" class="admin_explain_textarea"></textarea></td>
                   	</tr>
                   	<tr>
                    	<td colspan='2' align="center">
                           	<div class="admin_Operating_sub"> <input type="submit" value='确认' class="admin_examine_bth"> <input type="button" onClick="layer.closeAll();" class="admin_examine_bth_qx" value='取消'></div>
                       	</td>
                   	</tr>
            	</table>
        		<input name="noyyzz" id="noyyzz" value="" type="hidden">
             	<input name="uid" id="comuid" value="0" type="hidden">
      		</form>

       	</div>
	</div>
	<!-- 证书认证弹出框end -->
	
	<!-- 批量认证 -->
	<div id="batchrezhen" style="display:none;width:360px ">
		<div style="overflow:auto;width:360px;">
			<form class="layui-form" action="index.php?m=admin_company&c=batchfirm" target="supportiframe" method="post">
				<table cellspacing='1' cellpadding='1' class="admin_examine_table">
					<tr>
						<th width="80">认证类型：</th>
						<td align="left">
							<div class="layui-form-item">
								<div class="layui-input-block">
										<input name="comname_email" title="邮箱" type="checkbox" lay-skin="primary"/>
										<input name="comname_moblie" title="手机" type="checkbox" lay-skin="primary"/>
										<input name="comname_yyzz" title="营业执照" type="checkbox" lay-skin="primary"/>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<th width="80">认证操作：</th>
						<td align="left">
							<div class="layui-form-item">
								<div class="layui-input-block">
									<input name="plstatus" id="batchstatis0" value="0" title="待认证" type="radio" />
									<input name="plstatus" id="batchstatis1" value="1" title="已认证" type="radio" />
								</div>
							</div>
						</td>
					</tr>
	
					<tr>
						<td colspan='2' align="center">
							<div class="admin_Operating_sub">
								<input type="submit" onclick="loadlayer();" value='确认' class="admin_examine_bth">
								<input type="button" onClick="layer.closeAll();" class="admin_examine_bth_qx" value='取消'></div>
						</td>
					</tr>
				</table>
				<input name="uid" id="btachuid" value="0" type="hidden">
				<input type="hidden" name="pytoken" id="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
			</form>
		</div>
	</div>
	<!-- 批量认证End -->
	
	<div id="export" style="display:none;">
       	<div style=" margin-top:10px;">
           	<div>
               	<form action="index.php?m=admin_company&c=xls" target="supportiframe" method="post" class="myform">
                   	<input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
					<input name="uid" value="0" type="hidden">
                   	
                   	<div class="admin_resume_dc">
                       	<label><span class="admin_resume_dc_s"><input type="checkbox" class="type" name="type[]" value="uid"> 企业UID</span></label>
                       	<label><span class="admin_resume_dc_s"><input type="checkbox" class="type" name="type[]" value="name"> 企业名称</span></label>
                       	<label><span class="admin_resume_dc_s"><input type="checkbox" class="type" name="type[]" value="hy"> 从事行业</span></label>
                       	<label><span class="admin_resume_dc_s"><input type="checkbox" class="type" name="type[]" value="pr"> 企业性质</span></label>
                       	<label><span class="admin_resume_dc_s"><input type="checkbox" class="type" name="type[]" value="rating"> 会员等级</span></label>
                       	<label><span class="admin_resume_dc_s"><input type="checkbox" class="type" name="type[]" value="provinceid"> 省</span></label>
                       	<label><span class="admin_resume_dc_s"><input type="checkbox" class="type" name="type[]" value="cityid"> 市</span></label>
                       	<label><span class="admin_resume_dc_s"><input type="checkbox" class="type" name="type[]" value="mun"> 规模</span></label>
                       	<label><span class="admin_resume_dc_s"><input type="checkbox" class="type" name="type[]" value="sdate"> 创办时间</span></label>
                       	<label><span class="admin_resume_dc_s"><input type="checkbox" class="type" name="type[]" value="money"> 注册资金</span></label>
                       	<label><span class="admin_resume_dc_s"><input type="checkbox" class="type" name="type[]" value="address"> 公司地址</span></label>
                       	<label><span class="admin_resume_dc_s"><input type="checkbox" class="type" name="type[]" value="linkman"> 联系人</span></label>
                       	<label><span class="admin_resume_dc_s"><input type="checkbox" class="type" name="type[]" value="linkjob"> 所属职位</span></label>
                       	<label><span class="admin_resume_dc_s"><input type="checkbox" class="type" name="type[]" value="linkqq"> 联系QQ</span></label>
                       	<label><span class="admin_resume_dc_s"><input type="checkbox" class="type" name="type[]" value="linkphone"> 固定电话</span></label>
                       	<label><span class="admin_resume_dc_s"><input type="checkbox" class="type" name="type[]" value="linktel"> 联系手机</span></label>
                       	<label><span class="admin_resume_dc_s"><input type="checkbox" class="type" name="type[]" value="linkmail"> 邮件</span></label>
                       	<label><span class="admin_resume_dc_s"><input type="checkbox" class="type" name="type[]" value="website"> 网址</span></label>
                       	<label><span class="admin_resume_dc_s"><input type="checkbox" class="type" name="type[]" value="rec"> 知名企业</span></label>
                       	<label><span class="admin_resume_dc_s"><input type="checkbox" class="type" name="type[]" value="lastdate"> 更新时间</span></label>
                       	<label><span class="admin_resume_dc_s"><input type="checkbox" class="type" name="type[]" value="vip_stime">会员开始时间</span></label>
                  		<label><span class="admin_resume_dc_s"><input type="checkbox" class="type" id="xlsAllCheck" onclick="xlsAll(this.form)"> 全选</span></label>
                       	
                   	</div>
					
					<div class="admin_resume_dc_p" style=" padding:10px 0;">
                   		<span class="admin_resume_dc_n">导出数量：</span>
                   		<input name='limit' type='text' class="admin_resume_dc_ntext">
                   		<span class="admin_web_tip admin_resume_dc_tip">数字太大会导致运行缓慢，请慎重填写。</span>
                   	</div>
                   	
                   	<div class="admin_resume_dc_sub" style="margin-top:10px;">
                       	<input type="button" onClick="check_xls();" value='确认' class="admin_resume_dc_bth1">
                       	<input type="button" onClick="layer.closeAll();" class="admin_resume_dc_bth2" value='取消'>
                   	</div>
               	</form>
           	</div>
       	</div>
   	</div>
   	
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['adminstyle']->value)."/member_send_email.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<div id="comrating" style="display: none;">
		<div style="width: 710px;">
			<form class="layui-form" action="index.php?m=admin_company&c=uprating" target="supportiframe" method="post">
				<table cellspacing='1' cellpadding='1' class="table_form contentWrap" width="100%">
					<tr>
						<th align="right">会员等级：</th>
						<td align="left">
							<div class="layui-form-item">
								<div class="layui-input-block">
									<div class="layui-input-inline">
										<select name="rating" id="ratingid" lay-filter="rating">
											<option value="">请选择</option> 
											<?php  $_smarty_tpl->tpl_vars['ratlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ratlist']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ratingarr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ratlist']->key => $_smarty_tpl->tpl_vars['ratlist']->value) {
$_smarty_tpl->tpl_vars['ratlist']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['ratlist']->key;
?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['ratlist']->value;?>
</option>
											<?php } ?>
										</select>
									</div>
								</div>
							</div>
						</td>
						<th align="right" class="comp_hotjob_line">账户<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：</th>
						<td>
							<div class="admin_company_width220">
								<input type="text" name="integral" id="integral" size="15" class="admin_company_jobtext" value="" />
							</div>
						</td>
					</tr>
					<tr class="admin_table_trbg">
						<th align="right">会员到期时间：</th>
						<td>
							<p id="vipetime"></p>
						</td>
						<th align="right" class="comp_hotjob_line">延长会员有效期：</th>
						<td><input type="text" name="addday" id="addday" style="width: 40px;" class="admin_company_jobtext"> 天
							<input type="checkbox" name="hotjob" id="hotjob" title="名企" >
						</td>
					</tr>
					<tr>
						<th align="right">发布职位数：</th>
						<td>
							<input type="text" name="job_num" id="job_num" size="15" class="admin_company_jobtext" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')" />
						</td>
						<th align="right" class="comp_hotjob_line">刷新职位数：</th>
						<td>
							<input type="text" name="breakjob_num" id="breakjob_num" size="15" class="admin_company_jobtext" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')" />
						</td>
					</tr>
					<tr class="admin_table_trbg">
						<th align="right">剩余下载数：</th>
						<td><input type="text" name="down_resume" id="down_resume" size="15" class="admin_company_jobtext" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')" /></td>
						<th align="right" class="comp_hotjob_line">邀请面试：</th>
						<td><input type="text" name="invite_resume" id="invite_resume" size="15" class="admin_company_jobtext" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')" /></td>
					</tr>
					<tr class="admin_table_trbg">
						<th align="right">招聘会报名次数：</th>
						<td><input type="text" name="zph_num" id="zph_num" size="15" class="admin_company_jobtext" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')" /></td>
						<th align="right" class="comp_hotjob_line">置顶天数：</th>
						<td><input type="text" name="top_num" id="top_num" size="15" class="admin_company_jobtext" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')" /></td>

					</tr>
					<tr>
						<th align="right">紧急天数：</th>
						<td>
							<input type="text" name="urgent_num" id="urgent_num" size="15" class="admin_company_jobtext" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')" />
						</td>
						<th align="right" class="comp_hotjob_line">推荐天数：</th>
						<td>
							<input type="text" name="rec_num" id="rec_num" size="15" class="admin_company_jobtext" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')" />
						</td>
					</tr>
				  
					<tr>
						<th align="center" colspan="4" style="text-align: center; border-right: 0px;">
							<input type="submit" value='确认' class="admin_examine_bth" /> 
							<input type="button" class="admin_examine_bth_qx closebutton" value='取消' />
						</th>
					</tr>
				</table>
				<input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
				<input type="hidden" name="rating_name" id="rating_name" value="">
				<input type="hidden" name="oldetime" id="oldetime" value="">
				<input name="ratuid" id="ratuid" value="0" type="hidden">
			</form>
		</div>
	</div>

	<!-- 审核弹出框 -->
	<div id="infobox2" style="display:none; width: 390px; ">
    	<form class="layui-form" action="index.php?m=admin_company&c=status" target="supportiframe" method="post" onsubmit="return htStatus()">
           	<table cellspacing='1' cellpadding='1' class="admin_examine_table">
               	<tr>
                   	<th width="80">审核操作：</th>
                   	<td align="left">
                       	<div class="layui-form-item">
                           	<div class="layui-input-block">
                           	  	<input name="status" id="status0" value="0" title="未审核" type="radio" />
                               	<input name="status" id="status1" value="1" title="已审核" type="radio" />
								<input name="status" id="status2" value="3" title="未通过" type="radio" />
                           	</div>
                       	</div>
                   	</td>
               	</tr>
               	<tr>
                   	<th>审核说明：</th>
                   	<td align="left"><textarea id="statusbody" name="statusbody" class="admin_explain_textarea"></textarea></td>
               	</tr>
               	<tr>
                   	<td colspan='2' align="center">
                       	<input type="submit" value='确认' class="admin_examine_bth">
                       	<input type="button" class="admin_examine_bth_qx closebutton" value='取消'>
                   	</td>
               	</tr>
           	</table>
           	<input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
           	<input name="uid" value="0" type="hidden">
       	</form>
   	</div>
	<!-- 审核弹出框End -->
	
   	<div class="infoboxp">
   	
       	<div class="tabs_info">
           	<ul>
               	<li <?php if ($_GET['time']!=5&&!$_GET['c']) {?>class="curr" <?php }?>>
                   	<a href="index.php?m=admin_company">全部会员</a>
               	</li>
				<li <?php if ($_GET['time']==5&&!$_GET['c']) {?>class="curr" <?php }?>>
                   	<a href="index.php?m=admin_company&time=5">过期会员</a>
               	</li>
               	<li <?php if ($_GET['c']) {?>class="curr" <?php }?>>
                   	<a href="index.php?m=user_member&c=writtenOffLog&utype=2" >解绑记录</a>
               	</li>
				<li <?php if ($_GET['c']) {?>class="curr" <?php }?>>
                   	<a href="index.php?m=admin_company&c=member_log">会员日志</a>
               	</li>
           	</ul>
       	</div>

       	<div class="admin_new_tip">
           	<a href="javascript:;" class="admin_new_tip_close"></a>
           	<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
          	
          	<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
           	<div class="admin_new_tip_list_cont">
               	<div class="admin_new_tip_list">该页面展示了网站所有的企业会员信息，可对会员进行编辑修改操作。</div>
               	<div class="admin_new_tip_list">可输入名称关键字进行搜索，也可进行详细的高级搜索。</div>
                <div class="admin_new_tip_list">当前企业不是已审核状态，涉及到相关数据无法进行审核操作。</div>
                
           	</div>
       	</div>
         	
       	<div class="clear"></div>
         	
   		<div class="admin_new_search_box">
     			
     		<div class="admin_new_search_name">搜索类型：</div>
     			
			<form action="index.php" name="myform" method="get">
	
				<input type="hidden" name="m" value="admin_company" />
				<input type="hidden" name="status" value="<?php echo $_GET['status'];?>
" />
				<input type="hidden" name="rec" value="<?php echo $_GET['rec'];?>
" />
				<input type="hidden" name="time" value="<?php echo $_GET['time'];?>
" />
				<input type="hidden" name="rating" value="<?php echo $_GET['rating'];?>
" />

				<div class="admin_Filter_text formselect" did="dcom_type">
					<input type="button" <?php if ($_GET['type']=='1'||$_GET['type']=='') {?> value="企业名称" <?php } elseif ($_GET['type']=='2') {?> value="用户名称" <?php } elseif ($_GET['type']=='3') {?> value="联系人" <?php } elseif ($_GET['type']=='4') {?> value="联系电话" <?php } elseif ($_GET['type']=='5') {?> value="用户邮箱" <?php } elseif ($_GET['type']=='6') {?> value="用户ID" <?php }?> class="admin_new_select_text" id="bcom_type">

					<input type="hidden" name="type" id="com_type" value="<?php if ($_GET['type']) {
echo $_GET['type'];
} else { ?>1<?php }?>" />
					
					<div class="admin_Filter_text_box" style='display: none' id="dcom_type">
						<ul>
							<li><a href="javascript:void(0)" onClick="formselect('1','com_type','企业名称')">企业名称</a></li>
							<li><a href="javascript:void(0)" onClick="formselect('2','com_type','用户名称')">用户名称</a></li>
							<li><a href="javascript:void(0)" onClick="formselect('3','com_type','联系人')">联系人</a></li>
							<li><a href="javascript:void(0)" onClick="formselect('4','com_type','联系电话')">联系电话</a></li>
							<li><a href="javascript:void(0)" onClick="formselect('5','com_type','用户邮箱')">用户邮箱</a></li>
							<li><a href="javascript:void(0)" onClick="formselect('6','com_type','用户ID')">用户ID</a></li>
						</ul>
					</div>
				</div>
				<input type="text" placeholder="输入你要搜索的关键字" name="keyword" class="admin_new_text">
				<input type="submit" name='news_search' value="搜索" class="admin_new_bth" />

				<a href="javascript:void(0)" onclick="$('.admin_screenlist_box').toggle();" class="admin_new_search_gj">高级搜索</a>
				<a href="index.php?m=admin_company&c=add" class="admin_new_cz_tj">+ 添加企业</a>
			</form>
	      	
	      	<?php echo $_smarty_tpl->getSubTemplate ("admin/admin_search.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	      	
       	</div>
        	
		<div class="clear"></div>
		
		<div class="admin_statistics">
			数据统计：
			<em class="admin_statistics_s">总数：<span class="ajaxcompanyall">0</span></em>
			<em class="admin_statistics_s">未审核：<span class="ajaxcompanystatus1">0</span></em>
			<em class="admin_statistics_s">未通过：<span class="ajaxcompanystatus2">0</span></em>
			<em class="admin_statistics_s">已锁定：<span class="ajaxcompanystatus3">0</span></em>
			搜索结果：<span><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</span>；
		</div> 
		   
		<div class="clear"></div>
		
		<div class="table-list" style="color:#898989">
			<div class="admin_table_border">
				<iframe id="supportiframe" name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
				<form action="index.php" name="myform" method="get" id='myform' target="supportiframe">
				
					<input type="hidden" name="pytoken" id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
					<input name="m" value="admin_company" type="hidden" />
					<input name="c" value="del" type="hidden" />
					<table width="100%">
						<thead>
							<tr class="admin_table_top">
								<th style="width: 20px;">
									<label for="chkall"><input type="checkbox" id='chkAll' onclick='CheckAll(this.form)' /></label>
								</th>
								<th>
									<?php if ($_GET['t']=="uid"&&$_GET['order']=="asc") {?> 
										<a href="<?php echo smarty_function_searchurl(array('order'=>'desc','t'=>'uid','m'=>'admin_company','untype'=>'order,t'),$_smarty_tpl);?>
">用户ID<img	src="images/sanj.jpg" /></a> 
									<?php } else { ?> 
										<a href="<?php echo smarty_function_searchurl(array('order'=>'asc','t'=>'uid','m'=>'admin_company','untype'=>'order,t'),$_smarty_tpl);?>
">用户ID<img src="images/sanj2.jpg" /></a> 
									<?php }?>
								</th>
								<th align="left" width="150">用户</th>
								<th align="left">等级/到期时间</th>
								<th>认证</th>
								<th align="left"> <div class="qyly">来源/手机/邮箱</div></th>
								<th>登录/注册</th>
								<th>职位数</th>
								<th>设为名企</th>
								<th>站点</th>
								<th>企业顾问</th>
								<th>审核</th>
								<th width="130">操作</th>
							</tr>
						</thead>
						<tbody>
							<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
								<tr align="center" <?php if (($_smarty_tpl->tpl_vars['key']->value+1)%2=='0') {?>class="admin_com_td_bg"<?php }?> id="list<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
">
									<td><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" class="check_all" name='del[]' onclick='unselectall()' rel="del_chk" /></td>
									<td align="left" class="td1" style="text-align: center;">
										<span><?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
</span>
										
									</td>
									<td align="left">
										<div class="">
											<a href="javascript:void(0)" onclick="toMember('index.php?m=admin_company&c=Imitate&uid=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['usertype'];?>
')"><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</a>
											<?php if ($_smarty_tpl->tpl_vars['v']->value['status']==2) {?> <img src="../config/ajax_img/suo.png" title="已锁定" width="15"><?php }?>
										</div>
										<div class="mt5">
											<a href="<?php echo smarty_function_url(array('m'=>'company','c'=>'show','id'=>$_smarty_tpl->tpl_vars['v']->value['uid']),$_smarty_tpl);?>
" target="_blank" class="admin_com_name"	title="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
 <?php if ($_smarty_tpl->tpl_vars['v']->value['shortname']) {?>【简称：<?php echo $_smarty_tpl->tpl_vars['v']->value['shortname'];?>
】<?php }?>">
												<?php echo mb_substr($_smarty_tpl->tpl_vars['v']->value['name'],0,10,"utf-8");?>

												<?php if (strlen($_smarty_tpl->tpl_vars['v']->value['name'])>10) {?>...<?php }?> 
												<?php if ($_smarty_tpl->tpl_vars['v']->value['shortname']) {?>【<?php echo $_smarty_tpl->tpl_vars['v']->value['shortname'];?>
】<?php }?>
											</a>
										</div>
									</td>
	
									<td align="left">
										<?php if (time()<=$_smarty_tpl->tpl_vars['v']->value['vipetime']||$_smarty_tpl->tpl_vars['v']->value['vipetime']=='0') {?>
											<?php echo $_smarty_tpl->tpl_vars['v']->value['rating_name'];?>
 
										<?php } else { ?> 
											<b style="color: red;"> 
												<?php if ($_smarty_tpl->tpl_vars['v']->value['oldrating_name']) {?>
													<?php echo $_smarty_tpl->tpl_vars['v']->value['oldrating_name'];?>
 
												<?php } else { ?>
													<?php echo $_smarty_tpl->tpl_vars['v']->value['rating_name'];?>

												<?php }?> 
											</b> 
										<?php }?> 
										<a data-uid="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" href="javascript:void(0);" class="comrating"> 
											<span class="admin_company_xg_icon">[修改]</span>
										</a> 
										<?php if ($_smarty_tpl->tpl_vars['v']->value['vipetime']) {?> 
											<?php if (time()<=$_smarty_tpl->tpl_vars['v']->value['vipetime']) {?>
												<div class="mt5"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['vipetime'],"%Y-%m-%d");?>
</div>
											<?php } else { ?>
												<div class="mt5" style="color: red;"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['vipetime'],"%Y-%m-%d");?>
</div>
											<?php }?> 
										<?php }?>
									</td>
									<td>
										<?php if ($_smarty_tpl->tpl_vars['v']->value['email_status']==1) {?> 
											<img src="../config/ajax_img/1-1.png"  title="邮箱已认证" data-status="<?php echo $_smarty_tpl->tpl_vars['v']->value['email_status'];?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
"  data-mail="<?php echo $_smarty_tpl->tpl_vars['v']->value['linkmail'];?>
"   data-name="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
" class="company_rzpng mt_email" width="20" height="20"> 
										<?php } else { ?> 
                    
											<img src="../config/ajax_img/1-2.png"  title="邮箱未认证" data-status="<?php echo $_smarty_tpl->tpl_vars['v']->value['email_status'];?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
"  data-mail="<?php echo $_smarty_tpl->tpl_vars['v']->value['linkmail'];?>
"  data-name="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
"  class="company_rzpng mt_email" width="20" height="20"> 
										<?php }?> 
										
										<?php if ($_smarty_tpl->tpl_vars['v']->value['moblie_status']==1) {?> 
											<img src="../config/ajax_img/2-1.png" title="手机已认证" data-status="<?php echo $_smarty_tpl->tpl_vars['v']->value['moblie_status'];?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
"  data-phone="<?php echo $_smarty_tpl->tpl_vars['v']->value['linktel'];?>
"  data-name="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
"  class="company_rzpng  mt_phone" width="20" height="20">
										<?php } else { ?> 
											<img src="../config/ajax_img/2-2.png" title="手机未认证" data-status="<?php echo $_smarty_tpl->tpl_vars['v']->value['moblie_status'];?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
"  data-phone="<?php echo $_smarty_tpl->tpl_vars['v']->value['linktel'];?>
"  data-name="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
"  class="company_rzpng  mt_phone" width="20" height="20">
										<?php }?>

										<?php if ($_smarty_tpl->tpl_vars['v']->value['yyzz_status']==1) {?> 
											<img src="../config/ajax_img/3-1.png" title="营业执照已认证" data-url="<?php echo $_smarty_tpl->tpl_vars['v']->value['yyzzurl'];?>
" data-uid="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
" data-status="<?php echo $_smarty_tpl->tpl_vars['v']->value['yyzz_status'];?>
" class="company_rzpng m_yyzz" width="20" height="20">
										<?php } else { ?> 
											<img src="../config/ajax_img/3-2.png" title="营业执照未认证" data-url="<?php echo $_smarty_tpl->tpl_vars['v']->value['yyzzurl'];?>
" data-uid="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
" data-status="<?php echo $_smarty_tpl->tpl_vars['v']->value['yyzz_status'];?>
" class="company_rzpng m_yyzz" width="20" height="20"> 
										<?php }?>
										
									</td>
									<td align="left">
                                    <div class="qyly">
									<div class=""><?php echo $_smarty_tpl->tpl_vars['source']->value[$_smarty_tpl->tpl_vars['v']->value['source']];?>
</div>
									<div>
                                            <?php if ($_smarty_tpl->tpl_vars['v']->value['linktel']) {?>
												<span class="admin_new_sj"><?php echo $_smarty_tpl->tpl_vars['v']->value['linktel'];?>
</span> 
												
											
											<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['linkphone']) {?>
												<span class="admin_new_sj"><?php echo $_smarty_tpl->tpl_vars['v']->value['linkphone'];?>
</span> 
												
											<?php }?>
                                        </div>
                                        <div>
                                            <?php if ($_smarty_tpl->tpl_vars['v']->value['linkmail']) {?>
												<span class="admin_new_yx"><?php echo $_smarty_tpl->tpl_vars['v']->value['linkmail'];?>
</span> 
												
											<?php }?>
                                        </div>  </div>
									</td>
									<td>
										<?php if ($_smarty_tpl->tpl_vars['v']->value['login_date']) {?>
											<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['login_date'],"%Y-%m-%d");?>

										<?php } else { ?> 
											未登录
										<?php }?>
										<div class=""><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['reg_date'],"%Y-%m-%d");?>
</div>
									</td>
									
									<td align="center">
										<div>
											<?php if ($_smarty_tpl->tpl_vars['v']->value['jobnum']>0) {
echo $_smarty_tpl->tpl_vars['v']->value['jobnum'];
} else { ?><font color="red">0</font><?php }?>个
										</div>
										<div>
											<a href="index.php?m=admin_company_job&c=show&uid=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" class="admin_cz_sc"><span class="admin_company_xg_icon">添加</span></a>
										</div>
									</td>
									<td>
										<div style="width: 94px;">
											<?php if ($_smarty_tpl->tpl_vars['v']->value['hottime']&&$_smarty_tpl->tpl_vars['v']->value['rec']==1) {?>
												<div class="">
													<?php if ($_smarty_tpl->tpl_vars['v']->value['hottime']>=time()) {?>
														<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['hottime'],"%Y-%m-%d");?>

													<?php } else { ?> 
														<font color='red'><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['hottime'],"%Y-%m-%d");?>
</font>
													<?php }?>
												</div>
												<a href="javascript:void(0);" onClick="showdiv3('<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
');" class="admin_cz_sc">
													<span class="admin_company_xg_icon">修改</span>
												</a>/ 
												<a href="javascript:void(0);" onClick="layer_del('确定要取消该名企？','index.php?m=admin_hotjob&c=del&del=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
');" class="admin_cz_sc">
													<span class="admin_company_xg_icon">取消</span>
												</a>
	
											<?php } else { ?>
												<?php if ($_smarty_tpl->tpl_vars['v']->value['name']) {?> 
													<a href="javascript:void(0);" onClick="showdiv('<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
');" class="admin_cz_sc">
													<span class="admin_company_xg_icon">设为名企</span></a> 
												<?php } else { ?> 
													<a href="javascript:void(0);" onClick="layer.msg('请先完善企业资料',2,8);" class="admin_cz_sc">
													<span class="admin_company_xg_icon">设为名企</span></a> 
												<?php }?>
											<?php }?>
										</div>
									</td>
	
									<td>
										<div><?php echo $_smarty_tpl->tpl_vars['Dname']->value[$_smarty_tpl->tpl_vars['v']->value['did']];?>
</div>
										<div>
											<a href="javascript:;" onclick="checksite('<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
','index.php?m=admin_company&c=checksitedid');" class="admin_company_xg_icon">
												<span class="admin_company_xg_icon">分配</span>
											</a>
										</div>
									</td>
									
									<td align="center">
										<?php if ($_smarty_tpl->tpl_vars['v']->value['crm_uid']) {?>
											<div><?php echo $_smarty_tpl->tpl_vars['v']->value['crm_name'];?>
</div>
											<div>
												<a href="javascript:void(0);" onclick="checkguwen('<?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
','index.php?m=admin_company&c=checkguwen');" class="admin_company_xg_icon">
													<span class="admin_company_xg_icon">分配</span>
												</a>
											</div> 
										<?php } else { ?>
											<div>未分配</div>
											<div>
												<a href="javascript:void(0);" onclick="checkguwen('<?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
','index.php?m=admin_company&c=checkguwen');" class="admin_company_xg_icon">
													<span class="admin_company_xg_icon">分配</span>
												</a>
											</div> 
										<?php }?>
									</td>
									
									<td>
										<?php if ($_smarty_tpl->tpl_vars['v']->value['r_status']=='1') {?> 
											<span class="admin_com_Audited">已审核</span> 
										<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['r_status']=='2') {?> 
											<span class="admin_com_Lock">已锁定</span>
										<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['r_status']=='3') {?> 
											<span class="admin_com_tg">未通过</span>
										<?php } else { ?> 
											<span class="admin_com_noAudited">未审核</span>
										<?php }?> 
										
									</td>
									
									<td align="left">
										<a href="javascript:void(0);" uid="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" status="<?php echo $_smarty_tpl->tpl_vars['v']->value['r_status'];?>
"  class="admin_new_c_bth admin_new_c_bthsh status" title="审核">审核</a>
										<a href="index.php?m=admin_company&c=edit&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
&rating=<?php echo $_smarty_tpl->tpl_vars['v']->value['rating'];?>
" class="admin_new_c_bth" title="修改密码、信息、套餐">修改</a> 

										<br> 
										<a href="index.php?m=admin_company&c=member_log&uid=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" class="admin_new_c_bth admin_new_c_rz mt5" title="查看企业操作记录">日志</a>
										
										<a href="javascript:void(0);" onclick="layer_del('确定要删除？', 'index.php?m=admin_company&c=del&del=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
');" class="admin_new_c_bth admin_new_c_bth_sc" title="删除关于该企业所有记录">删除</a>
										
										
										<br> 
										<a href="javascript:void(0)" onClick="resetpw('<?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
');" class="admin_new_c_bth admin_new_c_mmcz mt5" title="重置密码为123456">密码</a> 
										<a href="javascript:;" onclick="manage('<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
','<?php echo smarty_function_url(array('m'=>'company','c'=>'show','id'=>$_smarty_tpl->tpl_vars['v']->value['uid']),$_smarty_tpl);?>
')" class="admin_new_c_bth admin_new_c_bth_more  mt5" title="包括积分管理、订单记录、下载简历、收到简历、面试邀请、企业环境、企业模板、招聘分析、短信邮箱联系会员">更多</a>
									</td>
								</tr>
							<?php } ?>
							<tr>
								<td align="center"><label for="chkall2"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></label></td>
								<td colspan="12">
									<label for="chkAll2">全选</label> 
									<input class="admin_button" type="button" name="delsub" value="批量审核" onClick="audall();" /> 
									
									<?php if ($_smarty_tpl->tpl_vars['email_promiss']->value) {?> 
										<input class="admin_button" type="button" value="发邮件"	onclick="return confirm_email('确定发邮件吗？','email_div')" />
									<?php }?> 
									
									<?php if ($_smarty_tpl->tpl_vars['moblie_promiss']->value) {?> 
										<input	class="admin_button" type="button" value="发信息" onclick="return confirm_email('确定发信息吗？','moblie_div')" />
									<?php }?> 
									<input class="admin_button" type="button" name="delsub" value="删除所选" onClick="return really('del[]')" />
									<input class="admin_button" type="button" name="delsub" value="导出" onClick="Export();" /> 
									<input class="admin_button" type="button" name="delsub" value="批量选择分站" onClick="checksiteall('index.php?m=admin_company&c=checksitedid');" />
									<input class="admin_button" type="button" name="delsub" value="批量分配顾问" onClick="checkguwenall('index.php?m=admin_company&c=checkguwen');" />
									<input class="admin_button" type="button" name="delsub" value="批量认证" onclick="return batch('del[]')" />
								</td>
							</tr>
							
							<?php if ($_smarty_tpl->tpl_vars['total']->value>$_smarty_tpl->tpl_vars['config']->value['sy_listnum']) {?>
								<tr>
									<?php if ($_smarty_tpl->tpl_vars['pagenum']->value==1) {?>
										<td colspan="3">从 1 到 <?php echo $_smarty_tpl->tpl_vars['config']->value['sy_listnum'];?>
 ，总共 <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 条</td> 
									<?php } elseif ($_smarty_tpl->tpl_vars['pagenum']->value>1&&$_smarty_tpl->tpl_vars['pagenum']->value<$_smarty_tpl->tpl_vars['pages']->value) {?>
										<td colspan="3">从 <?php echo ($_smarty_tpl->tpl_vars['pagenum']->value-1)*$_smarty_tpl->tpl_vars['config']->value['sy_listnum']+1;?>
 到  <?php echo $_smarty_tpl->tpl_vars['pagenum']->value*$_smarty_tpl->tpl_vars['config']->value['sy_listnum'];?>
 ，总共 <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 条</td> 
									<?php } elseif ($_smarty_tpl->tpl_vars['pagenum']->value==$_smarty_tpl->tpl_vars['pages']->value) {?>
										<td colspan="3">从 <?php echo ($_smarty_tpl->tpl_vars['pagenum']->value-1)*$_smarty_tpl->tpl_vars['config']->value['sy_listnum']+1;?>
 到 <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 ，总共 <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 条</td>
									<?php }?>
									<td colspan="10" class="digg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</td>
								</tr>
							<?php }?>
						</tbody>
					</table>
				</form>
			</div>
		</div>
	</div>
	
	<?php echo '<script'; ?>
>
		$(document).ready(function() {
			$('body').click(function(evt) {
				if ($(evt.target).parents("#gw_name").length == 0 && evt.target.id != "gw_name") {
					$('#gw_select').hide();
				}
			});
		})
		
		/* 批量审核 */
		function audall() {
			var codewebarr = "";
			
			$(".check_all:checked").each(function() { 	
				if (codewebarr == "") {
					codewebarr = $(this).val();
				} else {
					codewebarr = codewebarr + "," + $(this).val();
				}
			});
			
			if (codewebarr == "") {
				parent.layer.msg('您还未选择需要审核的用户！', 2, 8);
				return false;
			} else {
				$("input[name=uid]").val(codewebarr);
				$("#statusbody").val('');
				$("input[name='status']").attr('checked', false);
				$.layer({
					type : 1,
					title : '企业用户审核',
					closeBtn : [ 0, true ],
					border : [ 10, 0.3, '#000', true ],
					area : [ '390px', 'auto' ],
					page : {
						dom : "#infobox2"
					}
				});
			}
		}

		$(function() {
			/* 审核操作 */
			$(".status").click(function() {
				var uid = $(this).attr("uid");
				var status = $(this).attr("status");
				if(status==2){
					parent.layer.msg('当前用户为已锁定状态，无法进行审核操作', 2, 8);
					return false;
				}
				$("input[name='status']").attr('checked', false);
				$("#status" + status).attr("checked", true);
				layui.use([ 'form' ], function() {
					var form = layui.form;
					form.render();
				});
				var pytoken = $("#pytoken").val();
		
				$("input[name=uid]").val(uid);
				$.post("index.php?m=admin_company&c=lockinfo", {
					uid : uid,
					pytoken : pytoken
				}, function(msg) {
					$("#statusbody").val(msg);
					$.layer({
						type : 1,
						title : '企业用户审核',
						closeBtn : [ 0, true ],
						border : [ 10, 0.3, '#000', true ],
						area : [ '390px', 'auto' ],
						page : {
							dom : "#infobox2"
						}
					});
				});
			});
			/*邮件认证*/
			$(".mt_email").click(function(data){
				var status = $(this).attr("data-status");
				var uid    = $(this).attr("data-url");
				var email  = $(this).attr("data-mail");
				$('#comname').html(name);
				$('#comemail').val(email);
				$('#uid').val(uid);
				$("#estatus" + status).attr("checked", true);
				layui.use([ 'form' ], function() {
					var form = layui.form;
					form.render();
				});
				$.layer({
					type : 1,
					title : '邮箱认证',
					closeBtn : [ 0, true ],
					offset : [ '80px', '' ],
					border : [ 10, 0.3, '#000', true ],
					area : [ '350px', '260px' ],
					page : {
						dom : '#renemail'
					}
				});
			})
			  /****手机认证****/
			$(".mt_phone").click(function(data){
			  var status   = 	$(this).attr("data-status");
			  var uid      = 	$(this).attr("data-url");
			  var linktel  = 	$(this).attr("data-phone");
				$('#comlinktel').val(linktel);
				 $('#phoneuid').val(uid);
				$("#pstatus" + status).attr("checked", true);
				layui.use([ 'form' ], function() {
				  var form = layui.form;
				  form.render();
				});
				$.layer({
					type : 1,
					title : '手机认证',
					closeBtn : [ 0, true ],
					offset : [ '80px', '' ],
					border : [ 10, 0.3, '#000', true ],
					area : [ '350px', '260px' ],
					page : {
					  dom : '#renphone'
					}
				});
			})

			/* 营业执照 */
			$(".m_yyzz").click( function() {
              var url = $(this).attr("data-url");
              var name = $(this).attr("data-name");
              var status = $(this).attr("data-status");
              var uid = $(this).attr("data-uid");
              var pytoken = $('#pytoken').val();
              $("#comname").html(name);
              $("#comuid").val(uid);
              $("#comstatus" + status).attr("checked", true);
                layui.use([ 'form' ], function() {
                    var form = layui.form;
                    form.render();
                });
                $.post("index.php?m=comcert&c=sbody", {uid: uid,pytoken: pytoken}, function(msg) {
                	$("#renzhencontent").val(msg);
                });
                $(".job_box_div").html("<img src='" + url + "' style='width:250px;height:100px' />");
                if(url){
                    $("#preview_url").attr("href",url);
                    $("#zwyyzz").hide();
                    $("#preview_url").show();
                }else{
                    $("#preview_url").hide();
                    $("#noyyzz").val('1');
                    $("#zwyyzz").show();
                }
				$.layer({
					type : 1,
					title : '查看图片',
					closeBtn : [ 0, true ],
					offset : [ '80px', '' ],
					border : [ 10, 0.3, '#000', true ],
					area : [ '420px', 'auto' ],
					page : {
						dom : '#preview'
					}
				});
			});
			
			/* 发短信 */
			$("#m_sendmsg").click(function() {
				var linktel = $('#m_linktel').val();
				if (!linktel) {
					parent.layer.msg('该企业未填写联系手机！', 2, 8);
				} else {
					send_moblie(linktel);
				}
			});
			
			/* 发邮件 */
			$("#m_sendemail").click(function() {
				var linkmail = $('#m_linkmail').val();
				if (!linkmail) {
					parent.layer.msg('该企业未填写联系邮箱！', 2, 8);
				} else {
					send_email(linkmail);
				}
			});
			
			/* 会员等级修改 */
			$(".comrating").click(function() {
				
				var uid = $(this).attr("data-uid");
				var pytoken = $("#pytoken").val();
				$.post("index.php?m=admin_company&c=getstatis", {
					uid : uid,
					pytoken : pytoken
				},function(data) {
					if (data) {
						var dataJson = eval("(" + data + ")");
						$('#top_num').val(dataJson.top_num);
						$('#urgent_num').val(dataJson.urgent_num);
						$('#rec_num').val(dataJson.rec_num);
						$('#sons_num').val(dataJson.sons_num);
						$('#job_num').val(dataJson.job_num);
						$('#down_resume').val(dataJson.down_resume);
						$('#invite_resume').val(dataJson.invite_resume);
						$('#breakjob_num').val(dataJson.breakjob_num);
						$('#zph_num').val(dataJson.zph_num);
						$('#oldetime').val(dataJson.vip_etime);
						$('#vipetime').text(dataJson.vipetime);
						$('#pay').val(dataJson.pay);
						$('#integral').val(dataJson.integral);
						$('#ratuid').val(uid);
						$("#ratingid").val(dataJson.rating);
						if(dataJson.hotjob==1){
							$('#hotjob').prop("checked",true);
						}else{
							$('#hotjob').prop("checked",false);
						}

						layui.use([ 'form' ], function() {
							var f = layui.form;
								f.render();
						});
						var ratingname = $("#ratingid").find("option:selected").text();
						$('#rating_name').val(ratingname);
						$.layer({
							type : 1,
							title : '企业会员等级修改',
							closeBtn : [ 0, true ],
							border : [ 10, 0.3, '#000', true ],
							area : [ '710px', '390px' ],
							offset : [ '20px', '' ],
							page : {
								dom : "#comrating"
							}
						});
					} else {
						parent.layer.msg('用户信息获取失败！', 2, 8);
						return false;
					}
				});
			});
		});
		
		/* 导出企业数据  */
		function Export() {
			var codewebarr = "";
			$(".check_all:checked").each(function() { 	
				if (codewebarr == "") {
					codewebarr = $(this).val();
				} else {
					codewebarr = codewebarr + "," + $(this).val();
				}
			});
			if (codewebarr != '') {
				$("input[name=uid]").val(codewebarr);
			}
			add_class('选择导出字段', '650', '370', '#export', '');
		}
		
		function check_xls() {
			var type = "";
			$(".type:checked").each(function() { 	
				if (type == "") {
					type = $(this).val();
				} else {
					type = type + "," + $(this).val();
				}
			});
			if (type == "") {
				layer.msg("请选择导出字段！", 2, 8);
				return false;
			}
			setTimeout(function() {
				$('.myform').submit()
			}, 0);
			layer.closeAll();
		}

		/* 在管理中重置密码 */
		function resetpassword() {
			var pytoken = $('#pytoken').val();
			var resetpassword = $("#m_resetpassword").val(); //通过管理获取用户名称的值
			var uid = $("#m_uid").val(); //通过管理获取用户名称的ID值
			parent.layer.confirm("确定要重置密码？", function() { //重置程序
				parent.layer.closeAll();
				loadlayer();
				$.get("index.php?m=admin_company&c=reset_companypassword&uid=" + uid + "&pytoken=" + pytoken, function(data) {
					parent.layer.closeAll('loading');
					parent.layer.alert("企业会员：" + resetpassword + "密码已经重置为123456！", 9);
					return false;
				});

			});
		}
		function showDIVMore(url, title) {
			layer.open({
				type : 2,
				title : title,
				shadeClose : true,
				shade : false,
				maxmin : true, //开启最大化最小化按钮
				area : [ '1100px', '495px' ],
				content : url
			});
		}

		function manage(comid, url) {
			var pytoken = $("#pytoken").val();
			$('#m_comid').html(comid);
			$('#m_uid').val(comid);
			$('#m_home').attr('href', url);
			$('#m_taocan').attr('data-uid', comid);
			$('#m_zengzhi').attr('data-uid', comid);
			$('#m_center').attr('href', 'index.php?m=admin_company&c=Imitate&uid=' + comid);
			$('#m_integral').attr('onclick', "showDIVMore('index.php?m=company_pay&comid=" + comid + "','积分管理')");
			$('#m_order').attr('onclick', "showDIVMore('index.php?m=company_order&comid=" + comid + "','充值/订单')");
			$('#m_apply').attr('onclick', "showDIVMore('index.php?m=admin_comlog&comid=" + comid + "','收到简历')");
			$('#m_down').attr('onclick', "showDIVMore('index.php?m=admin_userlog&comid=" + comid + "','下载简历')");
			$('#m_invite').attr( 'onclick', "showDIVMore('index.php?m=admin_comlog&c=useridmsg&comid=" + comid + "','面试邀请')");
			$('#m_job').attr('onclick', "showDIVMore('index.php?m=admin_company_job&uid=" + comid + "','职位管理')");
			$('#m_show').attr('onclick', "showDIVMore('index.php?m=admin_company_pic&c=show&comid="	+ comid + "','企业环境')");
			$('#m_comtpl').attr('onclick',"showDIVMore('index.php?m=admin_company&c=mcomtpl&comid="	+ comid + "','企业模板')");
			$('#m_memberlog').attr('href','index.php?m=admin_company&c=member_log&comid=' + comid);
			
			$('#m_addjob').attr('href',	'index.php?m=admin_company_job&c=show&uid=' + comid);
			$('#sonMsgAId').attr('href', 'index.php?m=admin_company&c=child&com_id=' + comid)
			var i = loadlayer();
			$.post("index.php?m=admin_company&c=getinfo", {
				comid : comid,
				pytoken : pytoken
			}, function(data) {
				parent.layer.closeAll();
				if (data) {
					var comdata = eval("(" + data + ")");
					if (comdata.name != "") {
						$('#m_name').html(comdata.name);
					} else {
						$('#m_name').html("尚未完善资料");
					}
					$('#m_username').html(comdata.username);
					if (comdata.linkman != "") {
						$('#m_linkman').html("【联系人】：" + comdata.linkman + "&nbsp;&nbsp;");
					} else {
						$('#m_linkman').html("【联系人】：" + "暂无联系人");
					}
					if (comdata.phone != "") {
						$('#m_phone').html("【手机】：" + comdata.phone + "&nbsp;&nbsp;");
					} else {
						$('#m_phone').html("【手机】：" + "暂无联系手机");
					}
					if (comdata.linkmail != "") {
						$('#m_email').html("【邮箱】：" + comdata.linkmail);
					} else {
						$('#m_email').html("【邮箱】：" + "暂无联系邮箱");
					}
					if (comdata.adviser != "") {
						$('#m_adviser').html(comdata.adviser);
					} else {
						$('#m_adviser').html("该企业尚未分配顾问");
					}
					if (comdata.integralNum != "") {
						$('#m_integral_num').html(comdata.integralNum);
					}
					if (comdata.orderNum != "") {
						$('#m_order_num').html(comdata.orderNum);
					}
					if (comdata.downNum != "") {
						$('#m_down_num').html(comdata.downNum);
					}
					if (comdata.applyNum != "") {
						$('#m_apply_num').html(comdata.applyNum);
					}
					if (comdata.inviteNum != "") {
						$('#m_invite_num').html(comdata.inviteNum);
					}
					if (comdata.showNum != "") {
						$('#m_show_num').html(comdata.showNum);
					}
					if (comdata.jobNum != "") {
						$('#m_job_num').html(comdata.jobNum);
					}
					if (comdata.sonsNum != "") {
						$('#sonMsgId').html(comdata.sonsNum);
					}

					$('#m_status').val(comdata.status);
					$('#m_regip').html(comdata.reg_ip);
					$('#m_rating').val(comdata.rating);
					$('#m_info').attr('href','index.php?m=admin_company&c=edit&id=' + comid+ '&rating=' + comdata.rating);
					$('#m_password').attr('href','index.php?m=admin_company&c=edit&id=' + comid+ '&rating=' + comdata.rating);
					$('#m_yyzzurl').val(comdata.yyzzurl);
					$('#m_yyzz').attr('data-name', comdata.name);
					$('#m_yyzz').attr('data-status', comdata.comyyzzstatus);
					$('#m_linktel').val(comdata.linktel);
					$('#m_linkmail').val(comdata.linkmail);
					$('#m_user').val(comdata.username);
					$('#m_resetpassword').val(comdata.username);

					$.layer({
						type : 1,
						title : '企业管理',
						closeBtn : [ 0, true ],
						border : [ 10, 0.3, '#000', true ],
						area : [ '670px', '440px' ],
						offset : [ '20px', '' ],
						page : {
							dom : "#manage"
						}
					});
				}
			});
		}
		
  		layui.use(['layer', 'form'], function() {
        	var layer = layui.layer,
            	form = layui.form,
            	$ = layui.$,
            	url = "index.php?m=admin_company&c=getrating";

           	var pytoken = $("#pytoken").val();

			form.on('select(rating)', function(data) {
               	$.post(url, {
                   	id: data.value,
                   	pytoken: pytoken
               	}, function(htm) {
               		if(htm) {
                       	var dataJson = eval("(" + htm + ")");
						$('#top_num').val(dataJson.top_num);
						$('#urgent_num').val(dataJson.urgent_num);
						$('#rec_num').val(dataJson.rec_num);
						$('#sons_num').val(dataJson.sons_num);
                       	$('#job_num').val(dataJson.job_num);
                       	$('#down_resume').val(dataJson.resume);
                       	$('#editjob_num').val(dataJson.editjob_num);
                       	$('#invite_resume').val(dataJson.interview);
                       	$('#breakjob_num').val(dataJson.breakjob_num);
                       	$('#zph_num').val(dataJson.zph_num);
                       	$('#vipetime').text(dataJson.vipetime);
                       	$('#oldetime').val(dataJson.oldetime);
                       	$('#rating_name').val(dataJson.name);
                       	$('#com_rating_val').val(dataJson.id);
						
                   	} else {
                       	parent.layer.msg('请选择会员等级',2,8);
                   	}
                   	form.render('select');
               	});
           	});
		});
		$(document).ready(function(){
			$.get("index.php?m=admin_company&c=companyNum", function(data) {
				var datas = eval('(' + data + ')');
				if(datas.companyAllNum) {
					$('.ajaxcompanyall').html(datas.companyAllNum);
				}
				if(datas.companyStatusNum1) {
					$('.ajaxcompanystatus1').html(datas.companyStatusNum1);
				}
				if(datas.companyStatusNum2) {
					$('.ajaxcompanystatus2').html(datas.companyStatusNum2);
				}
				if(datas.companyStatusNum3) {
					$('.ajaxcompanystatus3').html(datas.companyStatusNum3);
				}
			});
		});
		function xlsAll(form){
			for (var i=0;i<form.elements.length;i++){
				var e = form.elements[i];
				if (e.name == 'type[]' && e.disabled == false){
					e.checked = form.xlsAllCheck.checked;
				}
			}
			for (var i=0;i<form.elements.length;i++){
				var e = form.elements[i];
				if (e.name == 'rtype[]' && e.disabled == false){
					e.checked = form.xlsAllCheck.checked;
				}
			}
		}

		//批量认证
		function batch(name){
			var chk_value =[];  
		   
			$('input[name="'+name+'"]:checked').each(function(){    
				chk_value.push($(this).val());   
			});  
		
			if(chk_value.length==0){
				layer.msg("请选择要批量认证的数据！",2,8);return false;
			}else{

				$('#btachuid').val(chk_value);
				$.layer({
					type : 1,
					title : '批量认证',
					closeBtn : [ 0, true ],
					offset : [ '80px', '' ],
					border : [ 10, 0.3, '#000', true ],
					area : [ '350px', '235px' ],
					page : {
						dom : '#batchrezhen'
					}
				}); 
			}
		}
		function toMember(url, usertype){
			if (usertype !='2'){
				if(usertype == '1'){
					parent.layer.confirm("该账户当前身份为求职者，以招聘者身份模拟进入可能导致部分功能无法正常使用，是否确认进入？", function() {
						parent.layer.closeAll();
						window.open(url);
					});
				}else{
					parent.layer.confirm("该账户当前未设置身份，以招聘者身份模拟进入可能导致部分功能无法正常使用，是否确认进入？", function() {
						parent.layer.closeAll();
						window.open(url);
					});
				}
				
			}else{
				window.open(url);
			}
		}
	<?php echo '</script'; ?>
>

	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['adminstyle']->value)."/checkdomain.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	
    </body>
</html><?php }} ?>
