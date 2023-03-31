<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-08 03:53:45
         compiled from "D:\rcw\uploads\app\template\wap\resume_show.htm" */ ?>
<?php /*%%SmartyHeaderCode:8338468285fa6fb495ca638-06517231%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e019c7f7caad02193ac1b51dd13b075f17eddd09' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\wap\\resume_show.htm',
      1 => 1576653095,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8338468285fa6fb495ca638-06517231',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'Info' => 0,
    'backurl' => 0,
    'v' => 0,
    'key' => 0,
    'uid' => 0,
    'usertype' => 0,
    'resumeCkeck' => 0,
    'worklist' => 0,
    'edulist' => 0,
    'traininglist' => 0,
    'projectlist' => 0,
    'skilllist' => 0,
    'otherlist' => 0,
    'tj' => 0,
    'username' => 0,
    'wap_style' => 0,
    'eid' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fa6fb4965ff85_15662544',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fa6fb4965ff85_15662544')) {function content_5fa6fb4965ff85_15662544($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/header_cont.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo '<script'; ?>
 type="text/javascript">
	var wapurl = "<?php echo smarty_function_url(array('m'=>'wap'),$_smarty_tpl);?>
";
	var integral_pricename = '<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
';
	var weburl = "<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
";
	var isHeight = "<?php echo $_smarty_tpl->tpl_vars['Info']->value['height_status'];?>
";
<?php echo '</script'; ?>
>

<div class="header_navlist">
    <a href="javascript:void(0);" class="moreOptions"><i class="usernaviconfont"></i></a>
</div>

<style>
	.header_h {
		display: none;
	}
	.yun_footer {
		display: none;
	}
</style>

<form name="myform" method="post" action="">
	
	<div class="yun_newedition_resumeheader">
		<div class="yun_newedition_resumeheader_c">
			<div class="yun_newedition_resumeheader_box">
				<a href="<?php if ($_smarty_tpl->tpl_vars['backurl']->value) {
echo $_smarty_tpl->tpl_vars['backurl']->value;
} else { ?>javascript:goBack();<?php }?>" class="yun_newedition_resumeheader_name">简历详情</a> 
				<?php if ($_smarty_tpl->tpl_vars['Info']->value['talent_pool']) {?> 
                	<span class="yun_newedition_resumeheader_ysc"  title="已收藏"></span>
             	<?php } else { ?> 
					<a href="javascript:talent_pool('<?php echo $_smarty_tpl->tpl_vars['Info']->value['uid'];?>
','<?php echo $_smarty_tpl->tpl_vars['Info']->value['id'];?>
');" class="yun_newedition_resumeheader_sc" title="收藏"></a>
				<?php }?> 
                
                
                
                
                
				<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_h5_share']==1) {?>
					<a href="javascript:void(0);" data-url="<?php echo smarty_function_url(array('m'=>'wap','c'=>'resume','a'=>'share','id'=>$_smarty_tpl->tpl_vars['Info']->value['id']),$_smarty_tpl);?>
" id="shareClick" class="yun_newedition_resumeheader_fx"></a>
				<?php } else { ?>
					<a href="javascript:void(0);" id="shareClick" class="yun_newedition_resumeheader_fx"></a>
				<?php }?> 
			</div>
		</div>
	</div>
	
	<div class="yun_newedition_resumeheader_pic_bg">
		<?php if ($_smarty_tpl->tpl_vars['Info']->value['height_status']==2) {?><i class="yun_newedition_resume_good"></i><?php }?>
		<div class="yun_newedition_resumeheader_pic">
			<img src="<?php echo $_smarty_tpl->tpl_vars['Info']->value['photo'];?>
" width="80" height="80">
			<?php if ($_smarty_tpl->tpl_vars['Info']->value['sex']==2) {?>
				<i class="yun_newedition_resume_userxb"></i>
			<?php } elseif ($_smarty_tpl->tpl_vars['Info']->value['sex']==1) {?>
				<i class="yun_newedition_resume_userxb_n"></i>
			<?php }?>
		</div>
		<span class="resume_gx"><?php echo $_smarty_tpl->tpl_vars['Info']->value['lastupdate'];?>
 更新</span>
	</div>
	
	<div class="yun_newedition_resume_userinfo">
		<div class="yun_newedition_resume_username">
			<?php if ($_smarty_tpl->tpl_vars['Info']->value['m_status']==1) {?> 
				<?php echo $_smarty_tpl->tpl_vars['Info']->value['name'];?>

			<?php } else { ?> 
				<?php echo $_smarty_tpl->tpl_vars['Info']->value['username_n'];?>
 
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['Info']->value['moblie_status']==1) {?><span class="yun_resume_info_sjrz"></span><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['Info']->value['idcard_status']=='1') {?> <i class="yun_resume_info_sfrz"></i><?php }?>
		</div>
		
		<div class="yun_newedition_resume_userinfo_p">
			<?php if ($_smarty_tpl->tpl_vars['Info']->value['job_sex']) {
echo $_smarty_tpl->tpl_vars['Info']->value['job_sex'];?>
<i class="yun_newedition_jobline"></i><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['Info']->value['age']==0) {?>保密<?php } else {
echo $_smarty_tpl->tpl_vars['Info']->value['age'];?>
岁<?php }?><i class="yun_newedition_jobline"></i>
			<?php echo $_smarty_tpl->tpl_vars['Info']->value['useredu'];?>
学历<i class="yun_newedition_jobline"></i>
			<?php echo $_smarty_tpl->tpl_vars['Info']->value['user_exp'];?>
经验
		</div>
		
		<?php if ($_smarty_tpl->tpl_vars['Info']->value['arrayTag']) {?>
			<div class="yun_resume_exp_p">
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['arrayTag']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?> 
					<span class="resume_user_bq"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</span> 
				<?php } ?>
			</div>
		<?php }?>

		<div class="resume_user_info_p_box">
			<?php if ($_smarty_tpl->tpl_vars['Info']->value['height']) {?> <span><?php echo $_smarty_tpl->tpl_vars['Info']->value['height'];?>
cm<i class="resume_user_info_p_line">|</i></span> <?php }?> 
			<?php if ($_smarty_tpl->tpl_vars['Info']->value['weight']) {?> <span><?php echo $_smarty_tpl->tpl_vars['Info']->value['weight'];?>
kg<i class="resume_user_info_p_line">|</i></span> <?php }?> 
			<?php if ($_smarty_tpl->tpl_vars['Info']->value['user_marriage']) {?> <span><?php echo $_smarty_tpl->tpl_vars['Info']->value['user_marriage'];?>
<i class="resume_user_info_p_line">|</i></span> <?php }?> 
			<?php if ($_smarty_tpl->tpl_vars['Info']->value['nationality']) {?> <span><?php echo $_smarty_tpl->tpl_vars['Info']->value['nationality'];?>
<i class="resume_user_info_p_line">|</i></span> <?php }?> 
			<?php if ($_smarty_tpl->tpl_vars['Info']->value['living']) {?> <span><?php echo $_smarty_tpl->tpl_vars['Info']->value['living'];
if ($_smarty_tpl->tpl_vars['Info']->value['address']) {?><i class="resume_user_info_p_line">|</i><?php echo $_smarty_tpl->tpl_vars['Info']->value['address'];
}?></span> <?php }?>
		</div>
		
	</div>
	
	<div class="yun_newedition_resume_showbox">
		<div class="yun_newedition_resume_show_tit">求职意向</div>
		<ul class="yun_newedition_resume_show_yx">
			<li class="user_resume_yxli">
				<span class="user_resume_yx">期望岗位</span>
				<span class="user_resume_yxzn"> <?php echo $_smarty_tpl->tpl_vars['Info']->value['customjob'];?>
</span>
			</li>
			<li class="user_resume_yxli">
				<span class="user_resume_yx">工作职能</span>
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['expectjob']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?> 
					<?php if ($_smarty_tpl->tpl_vars['key']->value<5) {?> <span class=""><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</span><?php }?>
				<?php } ?>
			</li>
			<li class="">
				<span class="user_resume_yx">期望城市</span>
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['expectcity']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?> 
					<?php if ($_smarty_tpl->tpl_vars['key']->value<5) {?> <span class=""><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</span><?php }?>
				<?php } ?>
			</li>
			<li class="">
				<span class="user_resume_yx">期望薪资</span>
				<?php echo $_smarty_tpl->tpl_vars['Info']->value['salary'];?>

				
			</li>
			
			<?php if ($_smarty_tpl->tpl_vars['Info']->value['type']) {?>
				<li class="user_resume_yxli"><span class="user_resume_yx"><i class="user_resume_yx_icon"></i>工作性质</span><?php echo $_smarty_tpl->tpl_vars['Info']->value['type'];?>
</li>
			<?php }?>
			 
			<?php if ($_smarty_tpl->tpl_vars['Info']->value['report']) {?>
				<li class="user_resume_yxli"><span class="user_resume_yx"><i class="user_resume_yx_icon"></i>到岗时间</span><?php echo $_smarty_tpl->tpl_vars['Info']->value['report'];?>
</li>
			<?php }?>
			
			<li class="user_resume_yxli"><span class="user_resume_yx"><i class="user_resume_yx_icon"></i>所属行业</span><?php echo $_smarty_tpl->tpl_vars['Info']->value['hy'];?>
</li> 
			
			<?php if ($_smarty_tpl->tpl_vars['Info']->value['jobstatus']) {?>
				<li class="user_resume_yxli"><span class="user_resume_yx"><i class="user_resume_yx_icon"></i>目前状态</span><?php echo $_smarty_tpl->tpl_vars['Info']->value['jobstatus'];?>
</li>
			<?php }?>
		</ul>
	</div>

	<section>
		<div class="yun_newedition_resume_showbox" id='tel'>
			<div class="yun_newedition_resume_show_tit">联系方式</div>

			<div style="clear: both"></div>
			
			<?php if (($_smarty_tpl->tpl_vars['Info']->value['uid']==$_smarty_tpl->tpl_vars['uid']->value&&$_smarty_tpl->tpl_vars['usertype']->value==1)||$_smarty_tpl->tpl_vars['Info']->value['m_status']==1) {?>
				<div class="com_post_msg_bot" style="padding-left: 0px;">
					<aside class="wap_touch_img">
						<em>联系手机：</em><?php echo $_smarty_tpl->tpl_vars['Info']->value['telphone'];?>

					</aside>
					
					<?php if ($_smarty_tpl->tpl_vars['Info']->value['basic_info']=='1'&&$_smarty_tpl->tpl_vars['Info']->value['telhome']) {?>
						<aside class="wap_touch_img">
							<em>联系座机：</em><?php echo $_smarty_tpl->tpl_vars['Info']->value['telhome'];?>

						</aside>
					<?php }?> 
					
					<?php if ($_smarty_tpl->tpl_vars['Info']->value['email']) {?>
						<aside class="wap_touch_img">
							<em>联系邮箱：</em><?php echo $_smarty_tpl->tpl_vars['Info']->value['email'];?>

						</aside>
					<?php }?> 
					
					<?php if ($_smarty_tpl->tpl_vars['Info']->value['qq']) {?>
						<div class="resume_Intention">
							<i class="one_vita_Intention_i one_vita_red"></i>联系Q Q：<?php echo $_smarty_tpl->tpl_vars['Info']->value['qq'];?>

						</div>
					<?php }?>
					
					<?php if ($_smarty_tpl->tpl_vars['Info']->value['address']) {?>
						<aside class="wap_touch_img">
							<em>详细地址：</em><?php echo $_smarty_tpl->tpl_vars['Info']->value['address'];?>
</span>
						</aside>
					<?php }?> 
					
					<?php if ($_smarty_tpl->tpl_vars['Info']->value['wxewm']) {?>
						<div class="wap_touch_img">
							<em>个人微信：</em><img src="<?php echo $_smarty_tpl->tpl_vars['Info']->value['wxewm'];?>
" width="80" height="80">
						</div>
					<?php }?>
				</div>
				
			<?php } elseif ($_smarty_tpl->tpl_vars['Info']->value['link_wapmsg']) {?>
				
				<div class="com_post_login">
					<div class="com_post_look_toew">
						<div class="look_resume_tel_login"><?php echo $_smarty_tpl->tpl_vars['Info']->value['link_wapmsg'];?>
</div>
					</div>
				</div>
				
			<?php } else { ?>
			
				<div class="com_post_login">
					<div class="com_post_look_toew">
						<div class="look_resume_tel_login">
							<div class="com_s_logoin_tip">请登录后查看联系方式</div>
							<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'login'),$_smarty_tpl);?>
" class="com_s_logoin">登录</a>
							<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'register','usertype'=>2),$_smarty_tpl);?>
" class="com_s_reg">注册</a>
						</div>
					</div>
				</div>
				
			<?php }?>
		</div>

	</section>
	
	<?php if ($_smarty_tpl->tpl_vars['resumeCkeck']->value==1) {?>
		<!--工作经历 -->
		<?php if ($_smarty_tpl->tpl_vars['Info']->value['user_work']) {?>
			<section>
		
				<div class="yun_newedition_resume_showbox">
					<div class="yun_newedition_resume_show_tit">工作经历</div>
		
					<div class="resume_showbox_pd">
						<?php  $_smarty_tpl->tpl_vars['worklist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['worklist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['user_work']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['worklist']->key => $_smarty_tpl->tpl_vars['worklist']->value) {
$_smarty_tpl->tpl_vars['worklist']->_loop = true;
?>
		
						<div class="resume_jy_list">
							<i class="resume_jy_list_time"></i>
							<aside><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['worklist']->value['sdate'],"%Y-%m");?>
 <?php if ($_smarty_tpl->tpl_vars['worklist']->value['edate']) {?>至<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['worklist']->value['edate'],"%Y-%m");
} else { ?>至今<?php }?></aside>
							<aside>
								<div class="resume_jy_comname"><?php echo $_smarty_tpl->tpl_vars['worklist']->value['name'];?>
</div>
								<?php if ($_smarty_tpl->tpl_vars['worklist']->value['title']) {?>
									<aside>
										<em>任职：</em><?php echo $_smarty_tpl->tpl_vars['worklist']->value['title'];?>

									</aside>
								<?php }?> 
								<?php if ($_smarty_tpl->tpl_vars['worklist']->value['content']) {?> <em>职责：</em><?php echo $_smarty_tpl->tpl_vars['worklist']->value['content'];?>
	<?php }?>
							</aside>
						</div>
						<?php } ?>
					</div>
					<div class="yun_newedition_resume_showtime">平均工作时长：<?php echo $_smarty_tpl->tpl_vars['Info']->value['avghourInfo'];?>
</div>
				</div>
			</section>
		<?php }?>
		<!--教育经历 -->
		<?php if ($_smarty_tpl->tpl_vars['Info']->value['user_edu']) {?>
			<section>
				<div class="yun_newedition_resume_showbox">
					<div class="yun_newedition_resume_show_tit">教育经历</div>
					<div class="resume_showbox_pd">
						<?php  $_smarty_tpl->tpl_vars['edulist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['edulist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['user_edu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['edulist']->key => $_smarty_tpl->tpl_vars['edulist']->value) {
$_smarty_tpl->tpl_vars['edulist']->_loop = true;
?>
						<div class="resume_jy_list">
							<i class="resume_jy_list_time"></i>
							<aside><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['edulist']->value['sdate'],"%Y-%m");?>
 <?php if ($_smarty_tpl->tpl_vars['edulist']->value['edate']) {?>至<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['edulist']->value['edate'],"%Y-%m");
} else { ?>至今<?php }?></aside>
							<div class="firm_name_h1_h"><?php echo $_smarty_tpl->tpl_vars['edulist']->value['name'];?>
</div>
							<?php if ($_smarty_tpl->tpl_vars['edulist']->value['specialty']) {?>
								<aside>
									<em>所学专业：</em><?php echo $_smarty_tpl->tpl_vars['edulist']->value['specialty'];?>

								</aside>
							<?php }?> 
							<?php if ($_smarty_tpl->tpl_vars['edulist']->value['education']) {?>
								<aside>
									<em>最高学历：</em><?php echo $_smarty_tpl->tpl_vars['edulist']->value['education_n'];?>

								</aside>
							<?php }?>
						</div>
						<?php } ?>
					</div>
				</div>
			</section>
		<?php }?>
		<!--培训经历 -->
		<?php if ($_smarty_tpl->tpl_vars['Info']->value['user_tra']) {?>
			<section>
				<div class="yun_newedition_resume_showbox">
					<div class="yun_newedition_resume_show_tit">培训经历</div>
		
					<div class="resume_showbox_pd">
						<?php  $_smarty_tpl->tpl_vars['traininglist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['traininglist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['user_tra']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['traininglist']->key => $_smarty_tpl->tpl_vars['traininglist']->value) {
$_smarty_tpl->tpl_vars['traininglist']->_loop = true;
?>
						<div class="resume_jy_list">
							<i class="resume_jy_list_time"></i>
							<aside><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['traininglist']->value['sdate'],"%Y-%m");?>
 <?php if ($_smarty_tpl->tpl_vars['traininglist']->value['edate']) {?>至<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['traininglist']->value['edate'],"%Y-%m");
} else { ?>至今<?php }?></aside>
							<div class="firm_name_h1_h"><?php echo $_smarty_tpl->tpl_vars['traininglist']->value['name'];?>
</div>
							<?php if ($_smarty_tpl->tpl_vars['traininglist']->value['title']) {?>
								<aside>
									<em>培训方向：</em><?php echo $_smarty_tpl->tpl_vars['traininglist']->value['title'];?>

								</aside>
							<?php }?> 
							<?php if ($_smarty_tpl->tpl_vars['traininglist']->value['content']) {?>
								<aside>
									<em>培训描述：</em><?php echo $_smarty_tpl->tpl_vars['traininglist']->value['content'];?>

								</aside>
							<?php }?>
						</div>
						<?php } ?>
					</div>
				</div>
			</section>
		<?php }?>
		<!--项目经历 -->
		<?php if ($_smarty_tpl->tpl_vars['Info']->value['user_xm']) {?>
			<section>
				<div class="yun_newedition_resume_showbox">
					<div class="yun_newedition_resume_show_tit">项目经历</div>
		
					<div class="resume_showbox_pd">
						<?php  $_smarty_tpl->tpl_vars['projectlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['projectlist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['user_xm']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['projectlist']->key => $_smarty_tpl->tpl_vars['projectlist']->value) {
$_smarty_tpl->tpl_vars['projectlist']->_loop = true;
?>
						<div class="resume_jy_list">
							<i class="resume_jy_list_time"></i>
							<aside><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['projectlist']->value['sdate'],"%Y-%m");?>
  <?php if ($_smarty_tpl->tpl_vars['projectlist']->value['edate']) {?>至<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['projectlist']->value['edate'],"%Y-%m");
} else { ?>至今<?php }?></aside>
							<div class="firm_name_h1_h"><?php echo $_smarty_tpl->tpl_vars['projectlist']->value['name'];?>
</div>
							<?php if ($_smarty_tpl->tpl_vars['projectlist']->value['content']) {?>
								<aside>
									<em>项目内容：</em><?php echo $_smarty_tpl->tpl_vars['projectlist']->value['content'];?>

								</aside>
							<?php }?> 
							<?php if ($_smarty_tpl->tpl_vars['projectlist']->value['title']) {?>
								<aside>
									<em>担任职位：</em><?php echo $_smarty_tpl->tpl_vars['projectlist']->value['title'];?>

								</aside>
							<?php }?>
						</div>
						<?php } ?>
					</div>
				</div>
			</section>
		<?php }?>
		<!--职业技能-->
		<?php if ($_smarty_tpl->tpl_vars['Info']->value['user_skill']) {?>
			<section>
				<div class="yun_newedition_resume_showbox" id="resume_skill muipreview">
					<div class="yun_newedition_resume_show_tit">职业技能</div>
		
					<div class="resume_showbox_pd">
						<?php  $_smarty_tpl->tpl_vars['skilllist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['skilllist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['user_skill']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['skilllist']->key => $_smarty_tpl->tpl_vars['skilllist']->value) {
$_smarty_tpl->tpl_vars['skilllist']->_loop = true;
?>
							<div class="resume_jy_list">
								<i class="resume_jy_list_time"></i>
								<div class="firm_name_h1_h"><?php echo $_smarty_tpl->tpl_vars['skilllist']->value['name'];?>
</div>
								<?php if ($_smarty_tpl->tpl_vars['skilllist']->value['longtime']) {?>
									<aside>
										<em>掌握时间：</em><?php echo $_smarty_tpl->tpl_vars['skilllist']->value['longtime'];?>
年
									</aside>
								<?php }?> 
								<aside>
									<em>熟练程度：</em><?php echo $_smarty_tpl->tpl_vars['skilllist']->value['ing_n'];?>

								</aside>
								<?php if ($_smarty_tpl->tpl_vars['skilllist']->value['picurl']) {?>
									<aside class="muipreview">
										<em>证书图片：</em><img src="<?php echo $_smarty_tpl->tpl_vars['skilllist']->value['picurl'];?>
" width="95" height="70" style="vertical-align: middle" />
									</aside>
								<?php }?>
							</div>
						<?php } ?>
					</div>
				</div>
			</section>
		<?php }?>

		<!--我的作品-->
		<?php if ($_smarty_tpl->tpl_vars['Info']->value['user_show']) {?>
			<?php if (($_smarty_tpl->tpl_vars['Info']->value['uid']==$_smarty_tpl->tpl_vars['uid']->value&&$_smarty_tpl->tpl_vars['usertype']->value==1)||$_smarty_tpl->tpl_vars['Info']->value['m_status']==1) {?>
			<section>
				<div class="yun_newedition_resume_showbox muipreview" id="resume_usershow">
					<div class="yun_newedition_resume_show_tit">我的作品</div>
					<div class="resume_showbox_pd" style="padding-top: 10px;">
						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['user_show']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
							<div class="resume_showbox_zpimg muipreview">
								<?php if ($_smarty_tpl->tpl_vars['v']->value['picurl']) {?> <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
" style="vertical-align: middle" /> <?php }?>
							</div>
						<?php } ?>
					</div>
				</div>
			</section>
			<?php }?>
		<?php }?>
		<!--其他信息-->
		<?php if ($_smarty_tpl->tpl_vars['Info']->value['user_other']) {?>
			<section>
				<div class="yun_newedition_resume_showbox">
					<div class="yun_newedition_resume_show_tit">其他信息</div>
					<div class="resume_showbox_pd">
						<?php  $_smarty_tpl->tpl_vars['otherlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['otherlist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['user_other']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['otherlist']->key => $_smarty_tpl->tpl_vars['otherlist']->value) {
$_smarty_tpl->tpl_vars['otherlist']->_loop = true;
?>
							<div class="resume_jy_list">
								<i class="resume_jy_list_time"></i>
								<div class="firm_name_h1_h"><?php echo $_smarty_tpl->tpl_vars['otherlist']->value['name'];?>
</div>
								<?php if ($_smarty_tpl->tpl_vars['otherlist']->value['content']) {?>
								<aside><em>内容：</em><?php echo $_smarty_tpl->tpl_vars['otherlist']->value['content'];?>
</aside>
								<?php }?>
							</div>
						<?php } ?>
					</div>
				</div>
			</section>
		<?php }?>
		
		<!--黏贴简历内容-->
		<?php if ($_smarty_tpl->tpl_vars['Info']->value['doc']&&$_smarty_tpl->tpl_vars['Info']->value['user_doc']['doc']) {?>
        <div class="yun_newedition_resume_showbox">
		<div class="yun_newedition_resume_show_tit">简历内容</div>
			<section class="com_post_title">
				
				<div class="user_jl_jy_list">
					<div class="job_jl_list">
						<aside><?php echo $_smarty_tpl->tpl_vars['Info']->value['user_doc']['doc'];?>
</aside>
					</div>
				</div>
			</section>
            	</div>
		<?php }?>
		
		<!--自我评价-->
		<?php if ($_smarty_tpl->tpl_vars['Info']->value['description']) {?>
			<section>
				<div class="yun_newedition_resume_showbox">
					<div class="yun_newedition_resume_show_tit">自我评价</div>
		
					<div class="resume_showbox_cont resume_showbox_cont_pj">
						<?php echo $_smarty_tpl->tpl_vars['Info']->value['description'];?>
</div>
				</div>
			</section>
		<?php }?>
		
		<!--客服评价-->
		<?php if ($_smarty_tpl->tpl_vars['Info']->value['label_n']||$_smarty_tpl->tpl_vars['Info']->value['content']) {?>
			<section>
				<div class="resume_showbox">
					<div class="resume_showbox_tit">
						<i class="resume_showbox_icon resume_showbox_icon_zwpj"></i>评价分类
					</div>
					<div class="resume_showbox_cont resume_showbox_cont_pj">
						客服评价：<?php echo $_smarty_tpl->tpl_vars['Info']->value['content'];?>
</div>
					<div class="resume_showbox_cont resume_showbox_cont_pj">
						分类标签：<?php echo $_smarty_tpl->tpl_vars['Info']->value['label_n'];?>
</div>
				</div>
			</section>
		<?php }?>
		
		<section <?php if ($_smarty_tpl->tpl_vars['Info']->value['uid']==$_smarty_tpl->tpl_vars['uid']->value&&$_smarty_tpl->tpl_vars['usertype']->value==1) {?>class="none"<?php }?>>
			<div class="job_show_tip">
				<div class="job_show_tip_jb">
					<?php if ($_smarty_tpl->tpl_vars['usertype']->value=='2') {?> 
						<a href="javascript:void(0)" eid=<?php echo $_smarty_tpl->tpl_vars['Info']->value['id'];?>
 uid="<?php echo $_smarty_tpl->tpl_vars['Info']->value['uid'];?>
" r_name="<?php echo $_smarty_tpl->tpl_vars['Info']->value['username_n'];?>
" class="repeatlist repeat_list"><span class="job_show_tip_tip_i"></span>举报</a>
					<?php } elseif ($_smarty_tpl->tpl_vars['uid']->value) {?> 
						<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_user_change']==1) {?>
						<a href="javascript:void(0)" onclick="layermsg('请先申请企业账户');"  ><span class="job_show_tip_tip_i"></span>举报</a> 
						<?php } else { ?>
						<a href="javascript:void(0)" onclick="layermsg('只有企业用户才能举报');"  ><span class="job_show_tip_tip_i"></span>举报</a> 
						<?php }?>
					<?php } else { ?> 
						<a href="javascript:void(0)" onclick="pleaselogin('您还未登录企业账号，是否登录？','<?php echo smarty_function_url(array('m'=>'wap','c'=>'login'),$_smarty_tpl);?>
')"><span class="job_show_tip_tip_i"></span>举报</a> 
					<?php }?>
				</div>
				<div class="job_show_tip_p">
					<div class="job_show_tip_p_t">
						若该简历为广告简历 或 无意义简历<br>乱写、乱填、您可以 
					</div>
				</div>
			</div>
		</section>
		
	<?php } else { ?>
		<section>
			<div class="yun_newedition_resume_showbox">
				<div class="yun_newedition_resume_show_tit">简历介绍</div>
				<div class="yun_newedition_resume_nologin">
	
					<div class="yun_newedition_resume_nologin_list">
						<?php if ($_smarty_tpl->tpl_vars['tj']->value['education']) {?>
                        <div class="yun_newedition_resume_mhname">教育经历</div>
							<div class=""><?php echo $_smarty_tpl->tpl_vars['tj']->value['edumin'];?>
-<?php echo $_smarty_tpl->tpl_vars['tj']->value['edumax'];?>
</div>
							已完成<?php echo $_smarty_tpl->tpl_vars['tj']->value['education'];?>
段学业 
						<?php }?>
					</div>
					<div class="yun_newedition_resume_nologin_list">
						<?php if ($_smarty_tpl->tpl_vars['tj']->value['worknum']>0) {?>
                         <div class="yun_newedition_resume_mhname">工作经历</div>
							<div class=""><?php echo $_smarty_tpl->tpl_vars['tj']->value['workmin'];?>
-<?php echo $_smarty_tpl->tpl_vars['tj']->value['workmax'];?>
</div>
							参加过<?php echo $_smarty_tpl->tpl_vars['tj']->value['worknum'];?>
份工作，平均工作时长<?php echo $_smarty_tpl->tpl_vars['tj']->value['workavg'];?>
个月，涉及<?php echo $_smarty_tpl->tpl_vars['tj']->value['worktit'];?>
等岗位
						<?php }?>
					</div>
					<div class="yun_newedition_resume_nologin_list">
						<?php if ($_smarty_tpl->tpl_vars['tj']->value['xmnum']>0) {?>
                         <div class="yun_newedition_resume_mhname">项目经历</div>
							<div class=""><?php echo $_smarty_tpl->tpl_vars['tj']->value['xmmin'];?>
-<?php echo $_smarty_tpl->tpl_vars['tj']->value['xmmax'];?>
</div>
							独自完成或参与过<?php echo $_smarty_tpl->tpl_vars['tj']->value['xmnum'];?>
个项目，并在其中担任过<?php echo $_smarty_tpl->tpl_vars['tj']->value['xmtit'];?>
等职务
						<?php }?>
					</div>
					<div class="yun_newedition_resume_nologin_list">
						<?php if ($_smarty_tpl->tpl_vars['tj']->value['trainnum']>0) {?>
                         <div class="yun_newedition_resume_mhname">培训经历</div>
							<div class=""><?php echo $_smarty_tpl->tpl_vars['tj']->value['trainmin'];?>
-<?php echo $_smarty_tpl->tpl_vars['tj']->value['trainmax'];?>
</div>
							参加过<?php echo $_smarty_tpl->tpl_vars['tj']->value['trainnum'];?>
次培训，进行自我充电，能力提升 
						<?php }?>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['tj']->value['skillnum']>0) {?>
                     
					<div class="yun_newedition_resume_nologin_list">
                    <div class="yun_newedition_resume_mhname">职业技能</div>
							目前已掌握<?php echo $_smarty_tpl->tpl_vars['tj']->value['skillnum'];?>
项技能，其中<?php echo $_smarty_tpl->tpl_vars['tj']->value['skillpic'];?>
项拥有技能证书
					</div>	
					<?php }?>	
					<?php if ($_smarty_tpl->tpl_vars['tj']->value['shownum']>0) {?>
						<div class="yun_newedition_resume_nologin_list">
						<div class="yun_newedition_resume_mhname">作品案例</div>
						已上传<?php echo $_smarty_tpl->tpl_vars['tj']->value['shownum'];?>
份作品案例给招聘企业提前预览</div>
					<?php }?>
					
					<div class="yun_newedition_resume_nologin_tip">
						<a href="javascript:void(0);" onclick="showresdet('<?php echo $_smarty_tpl->tpl_vars['config']->value['resume_open_check'];?>
','<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
')">查看简历详细信息</a>
					</div>
				</div>
			</div>
		</section>
	<?php }?>
 
	<!--footer-->
	<div class="job_show_foot <?php if ($_smarty_tpl->tpl_vars['Info']->value['uid']==$_smarty_tpl->tpl_vars['uid']->value) {?>none<?php }?>">
		<div class="job_show_foot_fixd">
			<div class="job_show_foot_left">
				<div class="job_show_foot_leftlist">

					<?php if ($_smarty_tpl->tpl_vars['Info']->value['m_status']=="1") {?> 
						<a href="<?php if ($_smarty_tpl->tpl_vars['Info']->value['telphone']) {?> tel:<?php echo $_smarty_tpl->tpl_vars['Info']->value['telphone'];
} elseif ($_smarty_tpl->tpl_vars['Info']->value['telhome']) {?>tel:<?php echo $_smarty_tpl->tpl_vars['Info']->value['telhome'];?>
 <?php }?>" class="job_show_foot_leftbth"><i class="job_show_foot_leftbth_icon job_show_foot_leftbth_icontel"></i><span class="yun_job_footer_s">电话</span> </a> 
					<?php } elseif (!$_smarty_tpl->tpl_vars['username']->value) {?> 
						<a href="javascript:phone('1')" class="job_show_foot_leftbth"><i class="job_show_foot_leftbth_icon job_show_foot_leftbth_icontel"></i> <span class="yun_job_footer_s">电话</span> </a> 
					<?php } elseif ($_smarty_tpl->tpl_vars['usertype']->value!=2&&$_smarty_tpl->tpl_vars['usertype']->value!=3) {?> 
						<a href="javascript:phone('2')" class="job_show_foot_leftbth"><i class="job_show_foot_leftbth_icon job_show_foot_leftbth_icontel"></i> <span class="yun_job_footer_s">电话</span> </a> 
					<?php } else { ?> 
						<a href="javascript:void(0)" onclick="comlink('<?php echo $_smarty_tpl->tpl_vars['Info']->value['downresumes'];?>
','<?php echo $_smarty_tpl->tpl_vars['Info']->value['id'];?>
')" class="job_show_foot_leftbth"> <i class="job_show_foot_leftbth_icon job_show_foot_leftbth_icontel"></i> <span class="yun_job_footer_s">电话</span> </a> 
					<?php }?>
				</div>
				
				
				<div class="job_show_foot_leftlist">
				<?php if ($_smarty_tpl->tpl_vars['Info']->value['talent_pool']) {?> 
					<span class="job_show_foot_leftbth"><i class=" job_show_foot_leftbth_icon job_show_foot_leftbth_iconysc"></i><span class="yun_job_footer_s yun_job_footer_s_y">已收藏</span></span>
				<?php } else { ?> 
					<a href="javascript:talent_pool('<?php echo $_smarty_tpl->tpl_vars['Info']->value['uid'];?>
','<?php echo $_smarty_tpl->tpl_vars['Info']->value['id'];?>
');" class="job_show_foot_leftbth"><i class="job_show_foot_leftbth_icon job_show_foot_leftbth_iconsc"></i>收藏</a>
				<?php }?>
				</div>
				
			</div>
			
			<div class="job_show_foot_right">
				<?php if ($_smarty_tpl->tpl_vars['Info']->value['userid_msg']) {?> 
					<span class="yun_job_footer_fx_right_ytd_bth">已邀请面试</span>
				<?php } else { ?>
					  <?php if ($_smarty_tpl->tpl_vars['usertype']->value==1) {?>
						<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_user_change']==1) {?>
						<a href="javascript:void(0);" onclick="layermsg('请先申请企业账户')" class="yun_job_footer_fx_right_bth ">面试邀请</a>
						 <?php } else { ?> 
						 <a href="javascript:void(0);" onclick="layermsg('请先申请企业账户才能邀请')" class="yun_job_footer_fx_right_bth">面试邀请</a>
						  <?php }?>
					  <?php } else { ?>
					  <a href="javascript:void(0);" uid="<?php echo $_smarty_tpl->tpl_vars['Info']->value['uid'];?>
" class="yun_job_footer_fx_right_bth sq_resume">面试邀请</a>
					  <?php }?>
				<?php }?>
			</div>
		</div>
	</div>

</form>

<!--以下是查看简历信息弹出框----------------------------------------------------------------------------------->

<!--仅对有职位的企业开放简历明细-->
<div id="fbjob" class="wap_tips" style="width:270px;display: none;">
	<div class="wap_tips_iconbox">
		<i class="wap_tips_icon wap_tips_icon_noresume"></i>
	</div>
	<div class="wap_tips_p">求职者仅对有职位的企业开放简历信息</div>
	<div class="wap_tips_bth">
		<a href="<?php echo smarty_function_url(array('m'=>'wap'),$_smarty_tpl);?>
member" class="wap_tips_bth_a">发布职位</a>
	</div>
</div>

<!--查看联系方式后展示简历信息-->
<div id="comlink" class="wap_tips" style="width:270px;display: none;">
	<div class="wap_tips_iconbox">
		<i class="wap_tips_icon wap_tips_icon_noresume"></i>
	</div>
	<div class="wap_tips_p">求职者仅对查看TA联系方式的企业开放简历信息</div>
	<div class="wap_tips_bth">
		<a href="javascript:void(0)" onclick="comlink('<?php echo $_smarty_tpl->tpl_vars['Info']->value['downresumes'];?>
','<?php echo $_smarty_tpl->tpl_vars['Info']->value['id'];?>
')" class="wap_tips_bth_a">查看联系方式</a>
	</div>
</div>

<!--查看联系方式弹出框 end-->
<div id="bg" style="display: none; z-index: 1000000000"></div>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/layer/layer.m.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/prefixfree.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 type="text/javascript">
		
	$(function(){
		'<?php if ($_smarty_tpl->tpl_vars['usertype']->value==2||$_smarty_tpl->tpl_vars['usertype']->value==3) {?>'
			var eid = '<?php echo $_smarty_tpl->tpl_vars['eid']->value;?>
';
			$.post('index.php?c=resume&a=history',{eid:eid},function(data){
				if(data){
					return true;			
				}
			})
		'<?php }?>'
	}) 

	// 查看联系方式，提示剩余下载简历数
	function isDownResume(eid, num, url) {
		layer.open({
			title : [ '查看联系方式', 'background-color: #FF4351; color:#fff;' ],
			content : '您还可以查看' + num + '份简历，是否查看？',
			btn : [ '查看', '取消' ],
			shadeClose : false,
			yes : function() {
				for_link(eid);
			}
		});
	}

	function for_link(eid) {
		
		var index = layer_load('执行中，请稍候');
		
		$.post("<?php echo smarty_function_url(array('m'=>'wap','c'=>'ajax','a'=>'forlink'),$_smarty_tpl);?>
",{eid : eid},function(data) {
			
			layer.closeAll('loading');
			
			var data   = eval('(' + data + ')');
			var status = data.status;
			var type   = data.type;
			var online = data.online;
			
			if (status == 1) {
				
				var msgList	=	data.msgList;
				layer.open({
					title: [ '温馨提示', 'background-color: #FF4351; color:#fff;' ],
					content: msgList.join('')+'<div class="tjwmz">以上条件尚未满足</div>',
					anim: 'up',
					btn: '我知道了',
					shadeClose: false
				});
			} else if (status == 2) {
				
				layer.open({
					title : [ '温馨提示', 'background-color: #FF4351; color:#fff;' ],
					content : data.msg,
					btn : [ '确认', '取消' ],
					shadeClose : false,
					yes : function() {
						window.location.href = "member/index.php?c=server&server=downresume&id="+ eid;
					}
				});
				
				
			}else if (status == 3) {
				
				location.reload(true);
			} else  {
				
				layermsg(data.msg);
			}
		});
		 
	}

	function talent_pool(uid, eid) {
		$.post("<?php echo smarty_function_url(array('m'=>'wap','c'=>'ajax','a'=>'talentpool'),$_smarty_tpl);?>
", {
			eid : eid,
			uid : uid
		}, function(data) {
			var data = eval('(' + data + ')');
			if (data.state == '0') {
				var sy_user_change = '<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_user_change'];?>
';
				if(sy_user_change==1){
					layermsg('请先申请企业账户');
				}else{
					layermsg('只有企业用户才能收藏');
				}
				return false;
			} else if (data.state == '1') {
				layermsg(data.msg, 2, function() {
					location.reload(true);
				});
			} else if (data.state == '2') {
				layermsg(data.msg);
			} else if (data.state == '3') {
				pleaselogin(data.msg, '<?php echo smarty_function_url(array('m'=>'wap','c'=>'login'),$_smarty_tpl);?>
')
			} else {
				layermsg('对不起，操作出错！');
			}
		});
	}

	function phone(data) {
		if (data == 1) {
			pleaselogin('您还未登录企业账号，是否登录？', '<?php echo smarty_function_url(array('m'=>'wap','c'=>'login'),$_smarty_tpl);?>
')
		} else if (data == 2) {
			var sy_user_change = '<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_user_change'];?>
';
			if(sy_user_change==1){
				layermsg('请先申请企业账户');
			}else{
				layermsg('只有企业用户才能查看');
			}
			return false;
		}
	}
	var config = {
		url : '<?php echo smarty_function_url(array('m'=>'wap','c'=>'resume','a'=>'share','id'=>$_smarty_tpl->tpl_vars['Info']->value['id']),$_smarty_tpl);?>
',
		title : '<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
',
		desc : '',
		img : '<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wx_sharelogo'];?>
',
		img_title : '<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
',
		from : '<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
'
	};
	
	function showresdet(rescheck,uid) {
		
		if(uid){
			if(rescheck==3){
				layer.open({
				  type: 1,
				  title: '温馨提示',
				  closeBtn: 1,
				  style:'width:300px;',
				  border: [10, 0.3, '#000', true],
				  content: $("#fbjob").html()
				});
			}else if(rescheck==4){
				layer.open({
				  type: 1,
				  title: '温馨提示',
				  closeBtn: 1,
				  style:'width:300px;',
				  border: [10, 0.3, '#000', true],
				  content: $("#comlink").html()
				});
			}
		}else{
			pleaselogin('该简历只对登录的企业开放，是否登录？', 'index.php?m=wap&c=login');
		}
	}
	
	function comlink(nums,id){
		
		layer.closeAll();
		
		if(nums > 0){
		
			isDownResume(id,nums,'index.php?m=ajax&c=forlink');
		}else{
			
			for_link(id,'index.php?m=ajax&c=forlink');
		}
	
	}
<?php echo '</script'; ?>
>
<!--微信分享专用---->
<div style='margin: 0 auto; width: 0px; height: 0px; overflow: hidden;'>
	<img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wx_sharelogo'];?>
" />
</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/public_previewimage.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
