<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-10-31 16:34:57
         compiled from "D:\rcw\uploads\app\template\admin\admin_right.htm" */ ?>
<?php /*%%SmartyHeaderCode:16823972505f9d21b1970a28-56967599%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24ca5b272fa4b2d242f5e7a3450649b82cd24e15' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\admin\\admin_right.htm',
      1 => 1585552688,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16823972505f9d21b1970a28-56967599',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'dirname' => 0,
    'mruser' => 0,
    'power' => 0,
    'version' => 0,
    'soft' => 0,
    'kongjian' => 0,
    'banben' => 0,
    'phpbanben' => 0,
    'yonghu' => 0,
    'server' => 0,
    'pytoken' => 0,
    'base' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5f9d21b1988a77_20761411',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9d21b1988a77_20761411')) {function content_5f9d21b1988a77_20761411($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	
	<link href="images/reset.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" /> 
	
	<?php echo '<script'; ?>
 src="../js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/admin_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
> 
	
	<title>后台管理</title>
	
	<?php echo '<script'; ?>
> 
		/*屏蔽所有的js错误*/ 
		function killerrors() {return true;}
		window.onerror = killerrors;
		function logout(){
			if (confirm("您确定要退出控制面板吗？"))
			top.location = 'index.php?c=logout';
			return false;
		}
		var integral_pricename='<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
';  
	<?php echo '</script'; ?>
>
	
	<!--[if IE 6]>
	<?php echo '<script'; ?>
 src="./js/png.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
	  DD_belatedPNG.fix('.png,.header .logo,.header .nav li a,.header .nav li.on,.left_menu h3 span.on');
	<?php echo '</script'; ?>
>
	<![endif]-->
	
</head>

<body style="font-size:14px; padding-bottom:0; ">
	
	<div id="yunshengji"></div>
	
	<?php if (($_smarty_tpl->tpl_vars['dirname']->value||$_smarty_tpl->tpl_vars['mruser']->value==1)&&in_array('161',$_smarty_tpl->tpl_vars['power']->value)) {?>
		<div class="admin_indextip">
			<?php if ($_smarty_tpl->tpl_vars['dirname']->value) {?>为了您的网站安全考虑，强烈建议将 admin,install 文件夹名改为其它名称！<?php }?> 
			<?php if ($_smarty_tpl->tpl_vars['mruser']->value==1) {?>您还没有更改默认的管理员用户名和密码!<a href="index.php?m=admin_user&c=pass" class="admin_index_info_box_a">【马上修改】</a><?php }?>
		</div>
	<?php }?>
	
	<div class="clear"></div>
	
	<div class="index_sj_table">
		<div style="padding-right:15px;">
			<table width="100%">
				<tr>
					<td width='12%' >
						<div class='admin_index_todayuser'>
							<div class="admin_index_todayuser_icon"><i class="admin_index_todayuser_icon_u"></i></div>
							<div class="admin_index_todayuser_name">今日新增会员总数</div>
							<div class="admin_index_todayuser_n" id="ajax_new_member_num">0</div>
						</div>
					</td>
					
					<td width="12%">
						<div class="admin_index_todayuser admin_index_todaymoney" >
							
							<div class="admin_index_todayuser_icon"><i class="admin_index_todayuser_icon_m"></i></div>
							<div class="admin_index_todayuser_name">今日总收益</div>
							
							<?php if (!in_array('161',$_smarty_tpl->tpl_vars['power']->value)) {?>
								<div class="admin_index_today_sy_tip">您的权限未能查看，请联系管理员开通财务权限。</div>
					    	<?php } else { ?>
								<div class="admin_index_todayuser_n" id="ajax_money_total">0</div>
   							<?php }?>
   						</div>
   					</td>
   					
					<td width="20%" >
						<div class="admin_index_todayuser_mx">
							<div class="admin_index_todayuser_mx_name">今日新增企业</div>
							<div class="admin_index_todayuser_mx_img"><i class="admin_index_todayuser_mx_img_qicon"></i></div>
							<div class="admin_index_todayuser_mx_list">
								<div class="admin_index_todayuser_mx_list_nmane">
									<?php if (in_array('999',$_smarty_tpl->tpl_vars['power']->value)) {?><a href="index.php?m=admin_company&adtime=1">企业会员</a><?php } else { ?>企业会员<?php }?>
								</div>
								<span class="admin_index_todayuser_mx_list_qyn"><div id='ajax_new_company_num'>0</div></span>
							</div>
							<div class="admin_index_todayuser_mx_list">
								<div class="admin_index_todayuser_mx_list_nmane">
									<?php if (in_array('999',$_smarty_tpl->tpl_vars['power']->value)) {?><a href="index.php?m=admin_company_job&adtime=1">新增职位</a><?php } else { ?>新增职位<?php }?>
								</div>
								<span class="admin_index_todayuser_mx_list_frn"><div id="ajax_new_job_num">0</div></span>
							</div>
						</div>
					</td>
					
					<td width="20%" >
						<div class="admin_index_todayuser_mx">
							<div class="admin_index_todayuser_mx_name">今日新增人才</div>
							<div class="admin_index_todayuser_mx_img"><i class="admin_index_todayuser_mx_img_icon"></i></div>
							<div class="admin_index_todayuser_mx_list">
								<div class="admin_index_todayuser_mx_list_nmane"> 
									<?php if (in_array('999',$_smarty_tpl->tpl_vars['power']->value)) {?><a href="index.php?m=user_member&adtime=1">个人会员</a><?php } else { ?>个人会员<?php }?>
								</div>
								<span class="admin_index_todayuser_mx_list_qyn"><div id="ajax_new_user_num">0</div></span>
							</div>
							<div class="admin_index_todayuser_mx_list">
								<div class="admin_index_todayuser_mx_list_nmane">
									<?php if (in_array('999',$_smarty_tpl->tpl_vars['power']->value)) {?><a href="index.php?m=admin_resume&adtime=1">新增简历</a><?php } else { ?>新增简历<?php }?>
								</div>
								<span class="admin_index_todayuser_mx_list_frn"> <div id="ajax_new_resume_num">0</div></span>
							</div>
						</div>
					</td>
					
					<td width="40%" >
					
						<div class="admin_index_today_sy">
					
							<div class="admin_index_today_sy_name">今日收益概况</div>
						 	
						 	<?php if (!in_array('161',$_smarty_tpl->tpl_vars['power']->value)) {?>
						    	
						    	<div class="admin_index_today_sy_tip">您的权限未能查看，请联系管理员开通财务权限。</div>
						    	
						   	<?php } else { ?>
						   	
							   	<div class="admin_index_today_sy_list">
									<div class="admin_index_today_sy_list_n">￥<span id="ajax_money_vip">0</span></div>
							 		<a href="index.php?m=company_order&typedd=1&order_state=2&time=1">会员套餐</a>
								</div>
								
								<div class="admin_index_today_sy_list">
									<div class="admin_index_today_sy_list_n">￥<span id="ajax_money_service">0</span></div> 
									<a href="index.php?m=company_order&typedd=5&order_state=2&time=1">增值服务</a>
								</div>
								
								<div class="admin_index_today_sy_list admin_index_today_sy_list_end">
									<div class="admin_index_today_sy_list_n">￥<span id="ajax_money_integral">0</span></div> 
									<a href="index.php?m=company_order&order_state=2&time=1">其他服务</a>
								</div>
								
					       	<?php }?>
						</div>
					</td>
				</tr>
			</table>
		</div>
	</div>
	
	<div class="clear"></div>

	<?php if (in_array('999',$_smarty_tpl->tpl_vars['power']->value)) {?>
	<div class="admin_index_bgboxpd ajax_msgnum">
	
		<div class="admin_index_bgbox">
			<div class="admin_index_bgbox_tit"><i class="admin_index_bgbox_tit_icon"></i>待处理事项</div>
			<div class="admin_index_dshbox">
			<a href="index.php?m=admin_message&status=1" class="admin_index_dsh_xw ajaxhandle_hide"><div class="admin_index_db_n"><span class="ajaxhandle" >0</span></div>待处理意见反馈</a>
			<a href="index.php?m=admin_userchange&status=3" class="admin_index_dsh_xw ajaxuserchange_hide"><div class="admin_index_db_n"><span class="ajaxuserchange" >0</span></div>待审核身份转换会员</a>
			<a href="index.php?m=admin_company&status=4" class="admin_index_dsh_qy ajaxcompany_hide"><div class="admin_index_db_n"><span class="ajaxcompany" >0</span></div>待审核企业会员</a>
			<a href="index.php?m=admin_company_job&state=4"class="admin_index_dsh_zw ajaxjob_hide"><div class="admin_index_db_n"><span class="ajaxjob" >0</span></div>待审核职位</a>
			<a href="index.php?m=admin_partjob&state=4"class="admin_index_dsh_jz ajaxpartjob_hide"><div class="admin_index_db_n"><span class="ajaxpartjob" >0</span></div>待审核兼职</a>
			<a href="index.php?m=comproduct&status=3"class="admin_index_dsh_cp ajaxcomproduct_hide"><div class="admin_index_db_n"><span class="ajaxcomproduct" >0</span></div>待审核企业产品</a>
			<a href="index.php?m=comnews&status=3"class="admin_index_dsh_xw ajaxcomnews_hide"><div class="admin_index_db_n"><span class="ajaxcomnews" >0</span></div>待审核企业新闻</a>
			<a href="index.php?m=comcert&status=3"class="admin_index_dsh_rz ajaxcomcert_hide"><div class="admin_index_db_n"><span class="ajaxcomcert" >0</span></div>待审核企业认证</a>
			<a href="index.php?m=admin_company_pic&status=1"class="admin_index_dsh_logo ajaxcomlogo_hide"><div class="admin_index_db_n"><span class="ajaxcomlogo" >0</span></div>待审核企业LOGO</a>
			<a href="index.php?m=admin_company_pic&c=show&status=1"class="admin_index_dsh_logo ajaxcomshow_hide"><div class="admin_index_db_n"><span class="ajaxcomshow" >0</span></div>待审核企业环境</a>
			<a href="index.php?m=admin_company_pic&c=banner&status=1"class="admin_index_dsh_logo ajaxcombanner_hide"><div class="admin_index_db_n"><span class="ajaxcombanner" >0</span></div>待审核企业横幅</a>
			<!--个人-->
			<a href="index.php?m=user_member&status=4"class="admin_index_dsh_user ajaxuser_hide"><div class="admin_index_db_n"><span class="ajaxuser" >0</span></div>待审核个人会员</a>
			<a href="index.php?m=admin_resume&status=4"class="admin_index_dsh_jl ajaxresume_hide"><div class="admin_index_db_n"><span class="ajaxresume" >0</span></div>待审核简历</a>
			<a href="index.php?m=usercert&status=2"class="admin_index_dsh_rz ajaxusercert_hide"><div class="admin_index_db_n"><span class="ajaxusercert" >0</span></div>待审核个人认证</a>
			
			<a href="index.php?m=admin_user_pic&status=1"class="admin_index_dsh ajaxuserpic_hide"><div class="admin_index_db_n"><span class="ajaxuserpic" >0</span></div>待审核个人头像</a>
			<a href="index.php?m=admin_user_pic&c=show&status=1"class="admin_index_dsh ajaxusershow_hide"><div class="admin_index_db_n"><span class="ajaxusershow" >0</span></div>待审核个人作品</a>
			
			<!--店铺-->
			<a href="index.php?m=admin_once&status=3"class="admin_index_dsh_dp ajaxonce_hide"><div class="admin_index_db_n"><span class="ajaxonce" >0</span></div>待审核店铺招聘</a>
			<!--普工-->
			<a href="index.php?m=admin_tiny&status=2"class="admin_index_dsh_pg ajaxtiny_hide"><div class="admin_index_db_n"><span class="ajaxtiny" >0</span></div>待审核普工简历</a>
			<!--招聘会-->
			<a href="index.php?m=zhaopinhui&c=com&status=3"class="admin_index_dsh_ch ajaxzphcom_hide"><div class="admin_index_db_n"><span class="ajaxzphcom" >0</span></div>待审核参会企业</a>
			<!--问答-->
			<a href="index.php?m=admin_question&status=0"class="admin_index_dsh_wd ajaxask_hide"><div class="admin_index_db_n"><span class="ajaxask" >0</span></div>待审核问答</a>
			<!--商城-->
			<a href="index.php?m=reward_list&status=-1"class="admin_index_dsh_dh ajaxredeem_hide"><div class="admin_index_db_n"><span class="ajaxredeem" >0</span></div>待审核商品兑换</a>
			<!--财务-->
			<a href="index.php?m=company_order&order_state=1"class="admin_index_dsh_cz ajaxorder_hide"><div class="admin_index_db_n"><span class="ajaxorder" >0</span></div>待处理充值订单</a>
			<!--专题-->
			<a href="index.php?m=special"class="admin_index_dsh_qyzt ajaxspecialcom_hide"><div class="admin_index_db_n"><span class="ajaxspecialcom" >0</span></div>待审核企业专题</a>
			
			<!--举报-->
			<a href="index.php?m=report"class="admin_index_dsh_jb ajaxreportjob_hide"><div class="admin_index_db_n"><span class="ajaxreportjob" >0</span></div>待处理举报职位</a>
			<a href="index.php?m=report&ut=2"class="admin_index_dsh_jb ajaxreportresume_hide"><div class="admin_index_db_n"><span class="ajaxreportresume" >0</span></div>待处理举报简历</a>
			<a href="index.php?m=report&type=1"class="admin_index_dsh_jb ajaxreportask_hide"><div class="admin_index_db_n"><span class="ajaxreportask" >0</span></div>待处理举报问答</a>
			<a href="index.php?m=admin_appeal"class="admin_index_dsh_ss ajaxappeal_hide"><div class="admin_index_db_n"><span class="ajaxappeal" >0</span></div>待处理账号申诉</a>
			<a href="index.php?m=report&type=2"class="admin_index_dsh_ts ajaxreportgw_hide"><div class="admin_index_db_n"><span class="ajaxreportgw" >0</span></div>待处理投诉顾问</a>
			
			<!--系统-->
			<a href="index.php?m=link&state=2"class="admin_index_dsh_lj ajaxlink_hide"><div class="admin_index_db_n"><span class="ajaxlink" >0</span></div>待审核友情链接</a>
			
			<a href="index.php?m=admin_member_logout&status=1"class="admin_index_dsh_pg ajaxlogout_hide"><div class="admin_index_db_n"><span class="ajaxlogout" >0</span></div>待处理注销账号</a>
	    </div>
		</div>
		
	</div>
	<?php }?>

	 

	<div class="mainindex_box">
		<div class="mainindex_box_cont_c">
	 		<div class="mainindex_box_cont">
	 			
	 			<i class="admin_index_bgbox_tit_icon" style="top:25px;"></i>
	 			
	 			<div class="mainleft">
	 				<div class="maininfo">
	              		<div class="admin_indexdt"><div class="mainboxtop"><h6>官方动态</h6></div><ul class="" id="yunzx"></ul></div>
	      			</div>
	  			</div>                                
	 
	  			<div class="mainright">
	    			<div class="maininfo">
	    				<div class="mainboxtop"><h6>开发团队</h6></div>
				        <div class="maincontent">
					        <p>开发团队：phpyun开发组</p>
					        <p>特别感谢：花菜 , 肖强 , 纪祥 , 逍遥 , 龙泉 , 小关 , 茉莉传媒 , 石头先生</p>
					        <p>联系电话：400-880-5523</p>
							<p>官方网站：<a href="http://www.phpyun.com/" target="_blank">http://www.phpyun.com/</a> 官方论坛：<a href="http://bbs.phpyun.com/" target="_blank">http://bbs.phpyun.com/</a></p>
							<p>咨询QQ：3367562 , 721799845 , 721799844</p>
				        </div>
				    </div>
	  			</div> 
	  		</div> 
	 	</div>
	</div> 

	<div class="mainindex_box" style="margin-top:20px;">
		<div class="mainindex_box_cont_c">
			<div class="mainindex_box_cont">
				<i class="admin_index_bgbox_tit_icon" style="top:25px;"></i>
				<div class="mainmsg">
					<div class="mainboxtop"><h6>系统信息</h6></div>
					<div class="">
						<span class="mainmsg_list">PHPYun程序版本： <?php echo $_smarty_tpl->tpl_vars['version']->value;?>
 [ <font id="version_msg">无须更新!</font>]</span>
						<span class="mainmsg_list">服务器软件：<?php echo $_smarty_tpl->tpl_vars['soft']->value;?>
</span>
						<span class="mainmsg_list">可用空间(磁盘区)：<?php echo $_smarty_tpl->tpl_vars['kongjian']->value;?>
&nbsp;M</span>
						<span class="mainmsg_list">MySQL 版本：<?php echo $_smarty_tpl->tpl_vars['banben']->value;?>
</span>
						<span class="mainmsg_list">PHP 版本：<?php echo $_smarty_tpl->tpl_vars['phpbanben']->value;?>
</span>
						<span class="mainmsg_list">用户 - 服务器：<?php echo $_smarty_tpl->tpl_vars['yonghu']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['server']->value;?>
</span>
					</div>   
				</div>
			</div> 
		</div>
	</div>

	<input type="hidden" name="pytoken" id="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
"/>
	
	<?php echo '<script'; ?>
>
		function dk(){$("#edition_box_yun").show();$(".edition_box_bg").show();}
		function gb(){$("#edition_box_yun").hide();$(".edition_box_bg").hide();}
		function clicktb(name){
			$("#tbrightMain").attr("src","index.php?m=admin_right&c="+name);
		}
		function clicktbdt(name){
			$("#tbrightMaindt").attr("src","index.php?m=admin_right&c="+name);
			$.post("index.php?m=admin_right&c="+name+"hy",{rand:Math.random()},function(data){
				$("#tbrightMaindthy").html(data);
			})
		}
		function clicktbrz(name){
			$("#tbrightMainrz").attr("src","index.php?m=admin_right&c="+name);
			$.post("index.php?m=admin_right&c="+name+"hy",{rand:Math.random()},function(data){
				$("#tbrightMainrzhy").html(data);
			})
		}
		$(document).ready(function(){
			$(".admin_message_h1_s").click(function(){
				$(".admin_message_h1_s").attr("class","admin_message_h1_s");
				$(this).attr("class","admin_message_h1_s admin_message_h1_cur");
				var a=$(this).attr("data-a");
				$(".admin_index_Data_cont").hide();
				$("#"+a).show();
			});
			$.post("index.php?m=admin_right&c=downresumedthy",{rand:Math.random()},function(data){
				$("#tbrightMaindthy").html(data);
			});
			$.post("index.php?m=admin_right&c=userrzhy",{rand:Math.random()},function(data){
				$("#tbrightMainrzhy").html(data);
			})
		})
	<?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
 src="https://init.phpyun.com/site.php?site=<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
">//此代码为远程获取补丁及通知，请不要删除<?php echo '</script'; ?>
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
	<?php echo '<script'; ?>
 type="text/javascript">
$(document).ready(function(){
	$.post("index.php?m=admin_right&c=ajax_statis", {pytoken: '<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
'}, function(data){
		var o = eval( '(' + data + ')' );
		$('#ajax_new_member_num').html(o.memberNum);
		$('#ajax_new_user_num').html(o.userNum);
		$('#ajax_new_resume_num').html(o.resumeNum);
		$('#ajax_new_company_num').html(o.companyNum);
		$('#ajax_new_job_num').html(o.jobNum);

		if(o.moneyTotal){
		  $('#ajax_money_total').html(o.moneyTotal);
		}
		if(o.moneyVip){
		  $('#ajax_money_vip').html(o.moneyVip);
		}
		if(o.moneyIntegral){
		  $('#ajax_money_integral').html(o.moneyIntegral);
		}
		if(o.moneyService){
		  $('#ajax_money_service').html(o.moneyService);
		}
		if(o.moneyJob){
		  $('#ajax_money_job').html(o.moneyJob);
		}

		$('#ajax_check_user').html(o.checkUserNum);
		$('#ajax_check_company').html(o.checkCompanyNum);
		$('#ajax_check_resume').html(o.checkResumeNum);
		$('#ajax_check_job').html(o.checkJobNum);
		$('#ajax_check_order').html(o.checkOrderNum);
		$('#ajax_check_pay').html(o.checkPayNum);

		if(o.resumeNumMon) {
			$('.ajax_resume').html(o.resumeNumMon);
		}
		if(o.jobNumMon) {
			$('.ajax_job').html(o.jobNumMon);
		}
		if(o.companyNumMon) {
			$('.ajax_company').html(o.companyNumMon);
		}
		if(o.userNumMon) {
			$('.ajax_user').html(o.userNumMon);
		}
		if(o.newsNumMon) {
			$('.ajax_news').html(o.newsNumMon);
		}
		if(o.ggNumMon) {
			$('.ajax_gg').html(o.ggNumMon);
		}
		if(o.onceNumMon) {
			$('.ajax_once').html(o.onceNumMon);
		}
		if(o.tinyNumMon) {
			$('.ajax_tiny').html(o.tinyNumMon);
		}
	});
	
	$.get("index.php?c=msgNum", function(data) {
		var datas = eval('(' + data + ')');
		if(datas.handlenum > 0){
			$('.ajaxhandle').html(datas.handlenum);
		}else{
			$('.ajaxhandle_hide').hide();
		}
		
		if(datas.msgNum > 0){
			$('.ajax_msgnum').show();
		}else{
			$('.ajax_msgnum').hide();
		}
		
		if(datas.company_job) {
			$('.ajaxjob').html(datas.company_job);
		}else{
			$('.ajaxjob_hide').hide();
		}
		if(datas.userchangenum){
      		$('.ajaxuserchange').html(datas.userchangenum);
    	}else{
      		$('.ajaxuserchange_hide').hide();
    	}
		if(datas.company) {
			$('.ajaxcompany').html(datas.company);
		}else{
			$('.ajaxcompany_hide').hide();
		}
		
		if(datas.partjob) {
			$('.ajaxpartjob').html(datas.partjob);
		}else{
			$('.ajaxpartjob_hide').hide();
		}
		
		if(datas.company_product) {
			$('.ajaxcomproduct').html(datas.company_product);
		}else{
			$('.ajaxcomproduct_hide').hide();
		}
		
		if(datas.company_news) {
			$('.ajaxcomnews').html(datas.company_news);
		}else{
			$('.ajaxcomnews_hide').hide();
		}
		
		if(datas.company_cert) {
			$('.ajaxcomcert').html(datas.company_cert);
		}else{
			$('.ajaxcomcert_hide').hide();
		}
		
		if(datas.comlogo) {
			$('.ajaxcomlogo').html(datas.comlogo);
		}else{
			$('.ajaxcomlogo_hide').hide();
		}
		
		if(datas.comshow) {
			$('.ajaxcomshow').html(datas.comshow);
		}else{
			$('.ajaxcomshow_hide').hide();
		}
		
		if(datas.combanner) {
			$('.ajaxcombanner').html(datas.combanner);
		}else{
			$('.ajaxcombanner_hide').hide();
		}
		
		if(datas.userNum) {
			$('.ajaxuser').html(datas.userNum);
		}else{
			$('.ajaxuser_hide').hide();
		}
		
		if(datas.resume_expect) {
			$('.ajaxresume').html(datas.resume_expect);
		}else{
			$('.ajaxresume_hide').hide();
		}
		
		if(datas.usercertNum) {
			$('.ajaxusercert').html(datas.usercertNum);
		}else{
			$('.ajaxusercert_hide').hide();
		}
		
		if(datas.resumetrust) {
			$('.ajaxresumetrust').html(datas.resumetrust);
		}else{
			$('.ajaxresumetrust_hide').hide();
		}
		
		if(datas.userpic) {
			$('.ajaxuserpic').html(datas.userpic);
		}else{
			$('.ajaxuserpic_hide').hide();
		}
		
		if(datas.usershow) {
			$('.ajaxusershow').html(datas.usershow);
		}else{
			$('.ajaxusershow_hide').hide();
		}
		
		
		if(datas.ltheightuser) {
			$('.ajaxheightuser').html(datas.ltheightuser);
		}else{
			$('.ajaxheightuser_hide').hide();
		}
		
		if(datas.once_job) {
			$('.ajaxonce').html(datas.once_job);
		}else{
			$('.ajaxonce_hide').hide();
		}
		if(datas.tiny) {
			$('.ajaxtiny').html(datas.tiny);
		}else{
			$('.ajaxtiny_hide').hide();
		}
		if(datas.zphcom) {
			$('.ajaxzphcom').html(datas.zphcom);
		}else{
			$('.ajaxzphcom_hide').hide();
		}
		if(datas.ask) {
			$('.ajaxask').html(datas.ask);
		}else{
			$('.ajaxask_hide').hide();
		}
		if(datas.redeem) {
			$('.ajaxredeem').html(datas.redeem);
		}else{
			$('.ajaxredeem_hide').hide();
		}
		
		if(datas.order) {
			$('.ajaxorder').html(datas.order);
		}else{
			$('.ajaxorder_hide').hide();
		}
		
		if(datas.adorder) {
			$('.ajaxadorder').html(datas.adorder);
		}else{
			$('.ajaxadorder_hide').hide();
		}
		if(datas.specialcom) {
			$('.ajaxspecialcom').html(datas.specialcom);
		}else{
			$('.ajaxspecialcom_hide').hide();
		}
		if(datas.reportjob) {
			$('.ajaxreportjob').html(datas.reportjob);
		}else{
			$('.ajaxreportjob_hide').hide();
		}
		if(datas.reportresume) {
			$('.ajaxreportresume').html(datas.reportresume);
		}else{
			$('.ajaxreportresume_hide').hide();
		}
		if(datas.reportask) {
			$('.ajaxreportask').html(datas.reportask);
		}else{
			$('.ajaxreportask_hide').hide();
		}
		if(datas.reportgw) {
			$('.ajaxreportgw').html(datas.reportgw);
		}else{
			$('.ajaxreportgw_hide').hide();
		}
		if(datas.appealnum) {
			$('.ajaxappeal').html(datas.appealnum);
		}else{
			$('.ajaxappeal_hide').hide();
		}
		if(datas.linkNum) {
			$('.ajaxlink').html(datas.linkNum);
		}else{
			$('.ajaxlink_hide').hide();
		}
		if(datas.logout) {
			$('.ajaxlogout').html(datas.logout);
		}else{
			$('.ajaxlogout_hide').hide();
		}
	});
});
<?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
