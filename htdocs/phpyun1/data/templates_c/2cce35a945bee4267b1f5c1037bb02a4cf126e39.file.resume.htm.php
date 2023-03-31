<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-11 23:08:02
         compiled from "D:\rcw\uploads\app\template\resume\resume.htm" */ ?>
<?php /*%%SmartyHeaderCode:20816907935f9d9b5cafdfa0-14290679%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2cce35a945bee4267b1f5c1037bb02a4cf126e39' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\resume\\resume.htm',
      1 => 1605107277,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20816907935f9d9b5cafdfa0-14290679',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5f9d9b5cbbfd79_66346964',
  'variables' => 
  array (
    'keywords' => 0,
    'description' => 0,
    'resumestyle' => 0,
    'config' => 0,
    'style' => 0,
    'title' => 0,
    'uid' => 0,
    'Info' => 0,
    'usertype' => 0,
    'key' => 0,
    'v' => 0,
    'UserMember' => 0,
    'resumeCkeck' => 0,
    'one' => 0,
    'tj' => 0,
    'usermsgnum' => 0,
    'talent_pool' => 0,
    'username' => 0,
    'look' => 0,
    'eid' => 0,
    'tplurl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9d9b5cbbfd79_66346964')) {function content_5f9d9b5cbbfd79_66346964($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
	<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
	
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['resumestyle']->value;?>
/css/resume.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/comapply.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
	<link href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/css.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
	<link href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/tips.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
	
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
	
	<style type="text/css" media=print>
		.noprint {
			display: none
		}
	</style>
</head>

<body style="background:#fff">
	
	<div class="noprint"><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
	<div class="clear"></div>
	
	<div class="yun_newedition_resume_top">
   		<div class="w1200">
    		<div class="yun_newedition_resume_current"> 首页  > 找人才 > 简历详细</div>
			<?php if ($_smarty_tpl->tpl_vars['uid']->value!=$_smarty_tpl->tpl_vars['Info']->value['uid']&&$_smarty_tpl->tpl_vars['usertype']->value!=1) {?>
			<!-- 浮动 -->
			<div id="float" class="yun_newedition_resume_ceil">
				<div class="yun_newedition_resume_ceil_box">
					<div class="yun_newedition_resume_ceil_bg"></div>
					<div class="yun_newedition_resume_ceil_info">
						<div class="w900">
							<div class="yun_newedition_resume_ceil_usertx"><img src="<?php echo $_smarty_tpl->tpl_vars['Info']->value['photo'];?>
" width="50" height="50" /></div>
							<div class="yun_newedition_resume_ceil_userxx">
			   					<div class="yun_newedition_resume_ceil_username"> <?php if ($_smarty_tpl->tpl_vars['Info']->value['m_status']=="1") {?> <?php echo $_smarty_tpl->tpl_vars['Info']->value['name'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['Info']->value['username_n'];?>
 <?php }?></div>
			    				<div class="yun_newedition_resume_ceil_wantjob">工作职能：<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['expectjob']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?> <?php if ($_smarty_tpl->tpl_vars['key']->value<5) {?> <span class=""><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</span> <?php }?> <?php } ?> </div>
			     			</div>
			     			<div class="yun_newedition_resume_ceil_tel">
							
							<a  href="javascript:void(0);" onclick="sq_resume(this)"  class="yun_newedition_resume_ceil_tel_yq sq_resume"  name="submit" username="<?php echo $_smarty_tpl->tpl_vars['Info']->value['name'];?>
" eid="<?php echo $_smarty_tpl->tpl_vars['Info']->value['eid'];?>
" uid="<?php echo $_smarty_tpl->tpl_vars['Info']->value['uid'];?>
">邀请面试</a>
							<?php echo $_smarty_tpl->tpl_vars['Info']->value['link_topmsg'];?>

			     			</div>
			     		</div>
			      	</div>  
				</div>
			</div>
			<!-- 浮动 end-->  
    		<?php }?> 
    		
    		<div class="yun_newedition_resume_info">
              	<div class="yun_newedition_resume_info_c">
        			
        			<div class="yun_newedition_resume_info_pic"> 
        				<img src="<?php echo $_smarty_tpl->tpl_vars['Info']->value['photo'];?>
" width="140" height="140" /> 
        				<i class="resume_list_xb resume_list_xb <?php if ($_smarty_tpl->tpl_vars['Info']->value['job_sex']=='女') {?>resume_list_xb_nv<?php }?>"></i>
        			</div>
					<?php if ($_smarty_tpl->tpl_vars['Info']->value['height_status']==2) {?> <i class="yun_newedition_resume_good"></i><?php }?>
        			<div> 
        				<span class="yun_newedition_resume_username">
        					<?php if ($_smarty_tpl->tpl_vars['Info']->value['m_status']=='1') {?> 
        						<?php echo $_smarty_tpl->tpl_vars['Info']->value['name'];?>
 
        					<?php } else { ?> 
        						<?php echo $_smarty_tpl->tpl_vars['Info']->value['username_n'];?>
 
        					<?php }?>
        				</span>
	                  	<?php if ($_smarty_tpl->tpl_vars['UserMember']->value['source']==6&&$_smarty_tpl->tpl_vars['UserMember']->value['claim']==0&&$_smarty_tpl->tpl_vars['UserMember']->value['email']!='') {?> <a class=" " href="javascript:void(0);" onClick="claim('<?php echo smarty_function_url(array('m'=>'ajax','c'=>'claim','uid'=>$_smarty_tpl->tpl_vars['Info']->value['uid']),$_smarty_tpl);?>
')">认领</a> <?php }?>
	                  	<?php if ($_smarty_tpl->tpl_vars['Info']->value['idcard_status']==1&&$_smarty_tpl->tpl_vars['Info']->value['idcard']) {?> <span class="yun_newedition_resume_rz yun_newedition_resume_rz_sm">实名认证</span> <?php }?>
                  		
                  		<?php if ($_smarty_tpl->tpl_vars['Info']->value['moblie_status']=="1"&&$_smarty_tpl->tpl_vars['Info']->value['telphone']) {?><span class="yun_newedition_resume_rz yun_newedition_resume_rz_sj">手机认证</span><?php }?>
                  		<?php if ($_smarty_tpl->tpl_vars['Info']->value['email_status']=='1') {?> <span class="yun_newedition_resume_rz yun_newedition_resume_rz_yx">邮箱认证</span><?php }?>
                  	</div>
                  	<div class="yun_newedition_resume_basic"> 
                  		<?php echo $_smarty_tpl->tpl_vars['Info']->value['job_sex'];?>
<span class="yun_newedition_resume_line">|</span>
                  		<?php if ($_smarty_tpl->tpl_vars['Info']->value['age']==0) {?>保密 ,<?php } else {
echo $_smarty_tpl->tpl_vars['Info']->value['age'];?>
岁<span class="yun_newedition_resume_line">|</span><?php }?>
                  		<?php if ($_smarty_tpl->tpl_vars['Info']->value['height']) {?> <?php echo $_smarty_tpl->tpl_vars['Info']->value['height'];?>
cm <?php }?>
                  		<?php if ($_smarty_tpl->tpl_vars['Info']->value['weight']&&$_smarty_tpl->tpl_vars['Info']->value['height']) {?> / <?php }?>
                  		<?php if ($_smarty_tpl->tpl_vars['Info']->value['weight']) {?> <?php echo $_smarty_tpl->tpl_vars['Info']->value['weight'];?>
kg <span class="yun_newedition_resume_line">|</span><?php }?>
                  		<?php echo $_smarty_tpl->tpl_vars['Info']->value['user_exp'];?>
经验 <span class="yun_newedition_resume_line">|</span> 
                  		<?php if ($_smarty_tpl->tpl_vars['Info']->value['useredu']) {
echo $_smarty_tpl->tpl_vars['Info']->value['useredu'];?>
学历<?php }?> 
                  		<?php if ($_smarty_tpl->tpl_vars['Info']->value['user_marriage']) {?><span class="yun_newedition_resume_line">|</span> <?php echo $_smarty_tpl->tpl_vars['Info']->value['user_marriage'];?>
 <?php }?>
                  		<?php if ($_smarty_tpl->tpl_vars['Info']->value['nationality']) {?><span class="yun_newedition_resume_line">|</span><span class=""><?php echo $_smarty_tpl->tpl_vars['Info']->value['nationality'];?>
</span><?php }?>
                  		<?php if ($_smarty_tpl->tpl_vars['Info']->value['domicile']) {?> <span class="yun_newedition_resume_line">|</span> 现居<?php echo $_smarty_tpl->tpl_vars['Info']->value['living'];?>
 <?php }?> 
                  	</div>
			        <?php if ($_smarty_tpl->tpl_vars['Info']->value['arrayTag']) {?>
			        	<div class="yun_newedition_resume_fl"> <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['arrayTag']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?> <span><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</span> <?php } ?> </div>
			        <?php }?>
        			<div class="yun_newedition_resume_data">
        				<span class="yun_newedition_resume_data_time">更新：<?php echo $_smarty_tpl->tpl_vars['Info']->value['lastupdate'];?>
</span>
        				被浏览：<?php echo '<script'; ?>
 language="javascript" src="<?php echo smarty_function_url(array('m'=>'resume','c'=>'show','a'=>'GetHits','id'=>'`$Info.id`'),$_smarty_tpl);?>
"><?php echo '</script'; ?>
> 次
        			</div>
        		</div>
          	</div>
  		</div>
	</div>
	
	<div class="w1200">
    	<div class="yun_newedition_resume_cont">
    		<div class="yun_newedition_resume_left">
    			<div class="yun_newedition_tit"><span class="yun_newedition_tit_s">求职意向</span><i class="yun_newedition_tit_line"></i></div>
              	
              	<div class="">
        			<ul class="yun_newedition_yx_list">
		            	<li style="width:100%"> 
		            		<span class="yun_newedition_yx_name"> 工作职能：</span> 
		            		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['expectjob']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?> 
		            			<?php if ($_smarty_tpl->tpl_vars['key']->value<5) {?> <span class="yun_newedition_yx_job"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</span> <?php }?> 
		            		<?php } ?> 
		            	</li>
		               	<li><span class="yun_newedition_yx_name"> 意向岗位：</span><?php echo $_smarty_tpl->tpl_vars['Info']->value['customjob'];?>
</li>
						<li><span class="yun_newedition_yx_name"> 从事行业：</span><?php echo $_smarty_tpl->tpl_vars['Info']->value['hy'];?>
</li>
		               	<li><span class="yun_newedition_yx_name"> 期望薪资：</span><?php echo $_smarty_tpl->tpl_vars['Info']->value['salary'];?>
 </li>
		              	<?php if ($_smarty_tpl->tpl_vars['Info']->value['report']) {?>
		                  	<li><span class="yun_newedition_yx_name"> 到岗时间：</span><?php echo $_smarty_tpl->tpl_vars['Info']->value['report'];?>
</li>
		           		<?php }?> 
		           		<?php if ($_smarty_tpl->tpl_vars['Info']->value['jobstatus']) {?>
		           			<li><span class="yun_newedition_yx_name"> 求职状态：</span><?php echo $_smarty_tpl->tpl_vars['Info']->value['jobstatus'];?>
</li>
		               	<?php }?> 
		               	<?php if ($_smarty_tpl->tpl_vars['Info']->value['type']) {?>
		               		<li><span class="yun_newedition_yx_name"> 工作性质：</span><?php echo $_smarty_tpl->tpl_vars['Info']->value['type'];?>
</li>
		               	<?php }?>
		             	<li style="width:100%"><span class="yun_newedition_yx_name"> 工作地点：</span><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['expectcity']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
if ($_smarty_tpl->tpl_vars['key']->value<5) {?> <?php echo $_smarty_tpl->tpl_vars['v']->value;?>
&nbsp; <?php }?> <?php } ?> </li>
		         	</ul>
		 		</div>

				<?php if ($_smarty_tpl->tpl_vars['Info']->value['m_status']==1) {?>
		 		<div class="yun_newedition_exhibition">
						
					<div class="yun_newedition_tit">
						<span class="yun_newedition_tit_s">联系方式</span>
						<i class="yun_newedition_tit_line"></i>
					</div>
					
					<div class="tcktouch_box_tip">联系我时请说是在<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
上看到的</div>
					<div class="tcktouch_box_p">手机：<span class="tcktouch_box_p_sj"><?php echo $_smarty_tpl->tpl_vars['Info']->value['telphone'];?>
</span></div>
					<?php if ($_smarty_tpl->tpl_vars['Info']->value['email']) {?> <div class="tcktouch_box_p">邮箱：<?php echo $_smarty_tpl->tpl_vars['Info']->value['email'];?>
 </div><?php }?> 
					<?php if ($_smarty_tpl->tpl_vars['Info']->value['qq']) {?><div class="tcktouch_box_p">Q Q：<?php echo $_smarty_tpl->tpl_vars['Info']->value['qq'];?>
</div> <?php }?> 
					<?php if ($_smarty_tpl->tpl_vars['Info']->value['homepage']) {?> <div class="tcktouch_box_p">主页：<?php echo $_smarty_tpl->tpl_vars['Info']->value['homepage'];?>
</div> <?php }?> 
					<?php if ($_smarty_tpl->tpl_vars['Info']->value['wxewm']) {?><div class="tcktouch_box_p">个人二维码：</div> <img src="<?php echo $_smarty_tpl->tpl_vars['Info']->value['wxewm'];?>
" width="100" height="100"/><?php }?>
				</div>
				<?php }?>

              	<?php if ($_smarty_tpl->tpl_vars['resumeCkeck']->value==1) {?> 
					<!--工作经历--> 
					<?php if (is_array($_smarty_tpl->tpl_vars['Info']->value['user_work'])&&!empty($_smarty_tpl->tpl_vars['Info']->value['user_work'])) {?>
					<div class="yun_newedition_exhibition">
						
						<div class="yun_newedition_tit">
							<span class="yun_newedition_tit_s">工作经历</span>
							<i class="yun_newedition_tit_line"></i>
							<span class="yun_resume_jobtime" style="margin-left:20px;">平均工作时长：<?php echo $_smarty_tpl->tpl_vars['Info']->value['avghourInfo'];?>
</span>
						</div>
						
						<ul class="yun_newedition_joblist">
							<?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['user_work']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value) {
$_smarty_tpl->tpl_vars['one']->_loop = true;
?>
							<li> <i class="yun_newedition_icon"></i>
								<div class="yun_newedition_jobname"><?php echo $_smarty_tpl->tpl_vars['one']->value['name'];
if ($_smarty_tpl->tpl_vars['one']->value['title']) {?><span class="yun_newedition_job_zw">担任职位：<?php echo $_smarty_tpl->tpl_vars['one']->value['title'];?>
</span><?php }?></div>
								<div class="">工作时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['one']->value['sdate'],"%Y.%m");?>
- <?php if ($_smarty_tpl->tpl_vars['one']->value['edate']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['one']->value['edate'],"%Y.%m");
} else { ?>至今<?php }?></div>
								
								<?php if ($_smarty_tpl->tpl_vars['one']->value['content']) {?><div class="">工作职责：<?php echo $_smarty_tpl->tpl_vars['one']->value['content'];?>
</div><?php }?>
							</li>
							<?php } ?>
						</ul>
					</div>
					<?php }?> 
              
					<!--教育经历--> 
					<?php if (is_array($_smarty_tpl->tpl_vars['Info']->value['user_edu'])&&!empty($_smarty_tpl->tpl_vars['Info']->value['user_edu'])) {?>
					<div class="yun_newedition_exhibition">
						
						<div class="yun_newedition_tit">
							<span class="yun_newedition_tit_s">教育经历</span>
							<i class="yun_newedition_tit_line"></i>
						</div>
						<ul class="yun_newedition_joblist">
							<?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['user_edu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value) {
$_smarty_tpl->tpl_vars['one']->_loop = true;
?>
							<li>
                            <i class="yun_newedition_icon"></i>
								<div class="yun_newedition_jobname"><?php echo $_smarty_tpl->tpl_vars['one']->value['name'];
if ($_smarty_tpl->tpl_vars['one']->value['education_n']||$_smarty_tpl->tpl_vars['one']->value['specialty']) {?>
									 <span class="yun_newedition_job_zw">学历学位：<?php echo $_smarty_tpl->tpl_vars['one']->value['education_n'];?>
</span>
									
								<?php }?></div>
								<div class="">在校时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['one']->value['sdate'],"%Y.%m");?>
-<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['one']->value['edate'],"%Y.%m");?>
</div>
								<?php if ($_smarty_tpl->tpl_vars['one']->value['specialty']) {?><div class="">主修专业：<?php echo $_smarty_tpl->tpl_vars['one']->value['specialty'];?>
</div><?php }?>
							</li>
							<?php } ?>
						</ul>
					</div>
					<?php }?> 
              
					<!--培训经历--> 
					<?php if (is_array($_smarty_tpl->tpl_vars['Info']->value['user_tra'])&&!empty($_smarty_tpl->tpl_vars['Info']->value['user_tra'])) {?>
					<div class="yun_newedition_exhibition">
						<div class="yun_newedition_tit">
							<span class="yun_newedition_tit_s">培训经历</span>
							<i class="yun_newedition_tit_line"></i>
						</div>
						<ul class="yun_newedition_joblist">
							<?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['user_tra']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value) {
$_smarty_tpl->tpl_vars['one']->_loop = true;
?>
							<li> <i class="yun_newedition_icon"></i>
								<div class="yun_newedition_jobname"><?php echo $_smarty_tpl->tpl_vars['one']->value['name'];?>
</div>
								<div class="">培训时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['one']->value['sdate'],"%Y.%m");?>
 - <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['one']->value['edate'],"%Y.%m");?>
</div>
								<?php if ($_smarty_tpl->tpl_vars['one']->value['title']) {?><div class="">培训项目：<?php echo $_smarty_tpl->tpl_vars['one']->value['title'];?>
</div><?php }?>
								<?php if ($_smarty_tpl->tpl_vars['one']->value['content']) {?><div class="">培训内容：<?php echo $_smarty_tpl->tpl_vars['one']->value['content'];?>
</div><?php }?>
							</li>
							<?php } ?>
						</ul>
					</div>
					<?php }?> 
              
					<!--专业技能--> 
					<?php if ($_smarty_tpl->tpl_vars['Info']->value['m_status']=="1") {?> 
						<?php if (is_array($_smarty_tpl->tpl_vars['Info']->value['user_skill'])&&!empty($_smarty_tpl->tpl_vars['Info']->value['user_skill'])) {?>
						<div class="yun_newedition_exhibition">
							<div class="yun_newedition_tit">
								<span class="yun_newedition_tit_s">技能专长</span>
								<i class="yun_newedition_tit_line"></i>
							</div>
							<div class="yun_newedition_skill">
								<div class="yun_newedition_exhibition_c" id="skill_photos"> 
									<?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['user_skill']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value) {
$_smarty_tpl->tpl_vars['one']->_loop = true;
?>
										<div class="yun_newedition_skilllist">
											<div class="yun_newedition_skill_name"><?php echo $_smarty_tpl->tpl_vars['one']->value['name'];?>
</div>
											<div class="yun_newedition_skill_zt">
												<div class="yun_newedition_skill_progress">
													<em class="yun_newedition_skill_progressbg <?php if ($_smarty_tpl->tpl_vars['one']->value['ing']==291) {?>yun_newedition_skill_progressbg_one<?php } elseif ($_smarty_tpl->tpl_vars['one']->value['ing']==292) {?>yun_newedition_skill_progressbg_two<?php } else { ?>yun_newedition_skill_progressbg_three<?php }?> "></em>
													<span class="yun_newedition_skill_progress_cd"><?php echo $_smarty_tpl->tpl_vars['one']->value['ing_n'];?>
</span>
												</div>
											</div>
											<div class="yun_newedition_skill_time "><?php if ($_smarty_tpl->tpl_vars['one']->value['longtime']) {?>掌握时长：<?php echo $_smarty_tpl->tpl_vars['one']->value['longtime'];?>
年<?php }?> 
												<?php if ($_smarty_tpl->tpl_vars['one']->value['picurl']) {?>
													<img src="<?php echo $_smarty_tpl->tpl_vars['one']->value['picurl'];?>
" lay-src="<?php echo $_smarty_tpl->tpl_vars['one']->value['picurl'];?>
" width="210" height="153" />
												<?php }?> 
											</div>
										</div>
									<?php } ?> 
								</div>
							</div>
						</div>
						<?php }?>
					<?php }?> 
				  
					<!--项目经验--> 
					<?php if (is_array($_smarty_tpl->tpl_vars['Info']->value['user_xm'])&&!empty($_smarty_tpl->tpl_vars['Info']->value['user_xm'])) {?>
					<div class="yun_newedition_exhibition">
						<div class="yun_newedition_tit">
							<span class="yun_newedition_tit_s">项目经验</span>
							<i class="yun_newedition_tit_line"></i>
						</div>
						<ul class="yun_newedition_joblist">
							<?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['user_xm']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value) {
$_smarty_tpl->tpl_vars['one']->_loop = true;
?>
								<li> <i class="yun_newedition_icon"></i>
									<div class="yun_newedition_jobname"><?php echo $_smarty_tpl->tpl_vars['one']->value['name'];?>
  <?php if ($_smarty_tpl->tpl_vars['one']->value['title']) {?> <span class="yun_newedition_job_zw">担任职位：<?php echo $_smarty_tpl->tpl_vars['one']->value['title'];?>
</span><?php }?></div>
									<div class="">项目时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['one']->value['sdate'],"%Y.%m");?>
 - <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['one']->value['edate'],"%Y.%m");?>
</div>
								 
								   <?php if ($_smarty_tpl->tpl_vars['one']->value['content']) {?> <div class="">项目职责：<?php echo $_smarty_tpl->tpl_vars['one']->value['content'];?>
</div><?php }?>
								</li>
							<?php } ?>
						</ul>
					</div>
					<?php }?> 
              
					<!-- 我的作品--> 
					<?php if (is_array($_smarty_tpl->tpl_vars['Info']->value['user_show'])&&!empty($_smarty_tpl->tpl_vars['Info']->value['user_show'])) {?>
					<?php if (($_smarty_tpl->tpl_vars['Info']->value['uid']==$_smarty_tpl->tpl_vars['uid']->value&&$_smarty_tpl->tpl_vars['usertype']->value==1)||$_smarty_tpl->tpl_vars['Info']->value['m_status']==1) {?>
					<div class="yun_newedition_exhibition">
						<div class="yun_newedition_tit">
							<span class="yun_newedition_tit_s">我的作品</span>
							<i class="yun_newedition_tit_line"></i>
						</div>
						<div class="fairs_introduction_p">
							<ul class="fairs_introduction_img" id="rolling_img1">
								<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['user_show']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
									<li><a class="image_gall" href="javascript:;"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
" lay-src="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
"  /> </a> </li>
								<?php } ?>
							</ul>
						</div>
					</div>
					<?php }?> 
					<?php }?> 
              
					<!--附加信息--> 
					<?php if (is_array($_smarty_tpl->tpl_vars['Info']->value['user_other'])&&!empty($_smarty_tpl->tpl_vars['Info']->value['user_other'])) {?>
					<div class="yun_newedition_exhibition">
						<div class="yun_newedition_tit">
							<span class="yun_newedition_tit_s">其他信息</span>
							<i class="yun_newedition_tit_line"></i>
						</div>
						<ul class="yun_newedition_joblist">
							<?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['user_other']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value) {
$_smarty_tpl->tpl_vars['one']->_loop = true;
?>
							<li> <i class="yun_newedition_icon"></i>
								<div class="yun_newedition_jobname"><?php echo $_smarty_tpl->tpl_vars['one']->value['name'];?>
</div>
								<?php if ($_smarty_tpl->tpl_vars['one']->value['content']) {?> <div class="">内容：<?php echo $_smarty_tpl->tpl_vars['one']->value['content'];?>
</div><?php }?>
							</li>
							<?php } ?>
						</ul>
					</div>
					<?php }?> 
              
					<!--自我评价--> 
					<?php if (!empty($_smarty_tpl->tpl_vars['Info']->value['description'])) {?>
					<div class="yun_newedition_exhibition">
						<div class="yun_newedition_tit">
							<span class="yun_newedition_tit_s">自我评价</span>
							<i class="yun_newedition_tit_line"></i>
						</div>
						<div class="yun_newedition_js"><?php echo $_smarty_tpl->tpl_vars['Info']->value['description'];?>
</div>
					</div>
					<?php }?> 
              
					<!--客服评价分类--> 
					<?php if (!empty($_smarty_tpl->tpl_vars['Info']->value['label_n'])||!empty($_smarty_tpl->tpl_vars['Info']->value['content'])) {?>
					<div class="yun_newedition_exhibition">
						<div class="yun_newedition_tit"><span class="yun_newedition_tit_s">客服人工回访</span><i class="yun_newedition_tit_line"></i></div>
						<ul class="yun_newedition_exhibition">
							<li> <div class="">简历标签：<?php echo $_smarty_tpl->tpl_vars['Info']->value['label_n'];?>
</div> </li>
							<li> <div class="">客服评价：<?php echo $_smarty_tpl->tpl_vars['Info']->value['content'];?>
</div> </li>
						</ul>
					</div>
					<?php }?> 
              
					<!--粘贴简历--> 
					<?php if ($_smarty_tpl->tpl_vars['Info']->value['doc']&&$_smarty_tpl->tpl_vars['Info']->value['user_doc']['doc']) {?>
					<div class="yun_newedition_exhibition">
						<div class="yun_newedition_tit">
							<span class="yun_newedition_tit_s">简历内容</span>
							<i class="yun_newedition_tit_line"></i>
						</div>
						<div class="yun_newedition_js"><?php echo $_smarty_tpl->tpl_vars['Info']->value['user_doc']['doc'];?>
</div>
					</div>
					<?php }?>
				<?php } else { ?>
					<div class="resume_bg">
					<div class="yun_newedition_resume_nologin_box">
					  
						<?php if ($_smarty_tpl->tpl_vars['tj']->value['education']) {?>
						<div class="yun_newedition_resume_nologin_list">
							  <div class="resume_bg_tit"><i class="resume_bg_icon resume_bg_icon_jy"></i>教育经历</div>
							  <div class="resume_bg_r">  <?php echo $_smarty_tpl->tpl_vars['tj']->value['edumin'];?>
-<?php echo $_smarty_tpl->tpl_vars['tj']->value['edumax'];?>
 已完成<?php echo $_smarty_tpl->tpl_vars['tj']->value['education'];?>
段学业</div>
						</div>
						<?php }?> 
						<?php if ($_smarty_tpl->tpl_vars['tj']->value['worknum']>0) {?>
						<div class="yun_newedition_resume_nologin_list">
							  <div class="resume_bg_tit"><i
										  class="resume_bg_icon resume_bg_icon_jl"></i>工作经历</div>
							  <div class="resume_bg_r"> <?php echo $_smarty_tpl->tpl_vars['tj']->value['workmin'];?>
-<?php echo $_smarty_tpl->tpl_vars['tj']->value['workmax'];?>
 参加过<?php echo $_smarty_tpl->tpl_vars['tj']->value['worknum'];?>
份工作，平均工作时长<?php echo $_smarty_tpl->tpl_vars['tj']->value['workavg'];?>
个月，涉及<?php echo $_smarty_tpl->tpl_vars['tj']->value['worktit'];?>
等岗位 </div>
						</div>
						<?php }?> 
						<?php if ($_smarty_tpl->tpl_vars['tj']->value['xmnum']>0) {?>
						<div class="yun_newedition_resume_nologin_list">
							  <div class="resume_bg_tit"><i class="resume_bg_icon resume_bg_icon_xm"></i>项目经历</div>
							  <div class="resume_bg_r"> <?php echo $_smarty_tpl->tpl_vars['tj']->value['xmmin'];?>
-<?php echo $_smarty_tpl->tpl_vars['tj']->value['xmmax'];?>
 独自完成或参与过<?php echo $_smarty_tpl->tpl_vars['tj']->value['xmnum'];?>
个项目，并在其中担任过<?php echo $_smarty_tpl->tpl_vars['tj']->value['xmtit'];?>
等职务 </div>
						</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['tj']->value['trainnum']>0) {?>
						<div class="yun_newedition_resume_nologin_list">
							  <div class="resume_bg_tit"><i class="resume_bg_icon resume_bg_icon_px"></i>培训经历</div>
							  <div class="resume_bg_r"> <?php echo $_smarty_tpl->tpl_vars['tj']->value['trainmin'];?>
-<?php echo $_smarty_tpl->tpl_vars['tj']->value['trainmax'];?>
 参加过<?php echo $_smarty_tpl->tpl_vars['tj']->value['trainnum'];?>
次培训，进行自我充电，能力提升</div>
						</div>
						<?php }?> 
						<?php if ($_smarty_tpl->tpl_vars['tj']->value['skillnum']>0) {?>
						<div class="yun_newedition_resume_nologin_list">
							  <div class="resume_bg_tit"><i class="resume_bg_icon resume_bg_icon_jn"></i>职业技能</div>
							  <div class="resume_bg_r">目前已掌握<?php echo $_smarty_tpl->tpl_vars['tj']->value['skillnum'];?>
项技能<?php if ($_smarty_tpl->tpl_vars['tj']->value['skillpic']>0) {?>，其中<?php echo $_smarty_tpl->tpl_vars['tj']->value['skillpic'];?>
项拥有技能证书<?php }?>
							  </div>
						</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['tj']->value['shownum']>0) {?>
						<div class="yun_newedition_resume_nologin_list">
							  <div class="resume_bg_tit"><i class="resume_bg_icon resume_bg_icon_iconry"></i>作品案例</div>
							  <div class="resume_bg_r">已上传<?php echo $_smarty_tpl->tpl_vars['tj']->value['shownum'];?>
份作品案例给招聘企业提前预览
							  </div>
						</div>
						<?php }?>
								
						<div class="yun_newedition_resume_nologin_tip">
							<?php echo $_smarty_tpl->tpl_vars['Info']->value['link_res'];?>

						</div>
							
					</div>
					</div>
				<?php }?> </div>
    
			
			<div class="yun_newedition_resume_right">
    			<?php if ($_GET['see']!='member'&&$_GET['see']!='used'&&$_smarty_tpl->tpl_vars['usertype']->value!=1) {?>
				<div class="">
					<?php if ($_smarty_tpl->tpl_vars['usertype']->value==2) {?>
						<?php if ($_smarty_tpl->tpl_vars['usermsgnum']->value) {?> 
							<div class="">
								<span class="yun_newedition_resume_yqok">已邀请面试</span>
							</div>
						<?php } else { ?>
							<div class="">
								<a href="javascript:void(0);" onclick="sq_resume(this)" class="yun_newedition_resume_yq"  name="submit" username="<?php echo $_smarty_tpl->tpl_vars['Info']->value['name'];?>
" eid="" uid="<?php echo $_smarty_tpl->tpl_vars['Info']->value['uid'];?>
">邀请面试</a>
							</div>
						<?php }?>
						
					<?php }?>
					
					<div class=""><?php echo $_smarty_tpl->tpl_vars['Info']->value['link_msg'];?>
</div>
					
					<div class="yun_newedition_resume_right_cz"> <span class="yun_newedition_resume_right_cz_n">其他操作</span></div>
					
					<div class="clear"></div>
					<div class="r_cz">
                   
					<?php if ($_smarty_tpl->tpl_vars['talent_pool']->value) {?>
					
						<input class="yun_newedition_resume_right_bth "type="button" onclick="layer.msg('该简历已加入到人才库！',2,8);" value="已收藏" />
					<?php } else { ?>
					
						<input class="yun_newedition_resume_right_bth" type="button" onclick="add_user_talent('<?php echo $_smarty_tpl->tpl_vars['Info']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['usertype']->value;?>
')" value="收藏简历" />
					<?php }?>
					
					<?php if ($_smarty_tpl->tpl_vars['usertype']->value==2||$_smarty_tpl->tpl_vars['usertype']->value==3) {?>
					
						<?php if ($_smarty_tpl->tpl_vars['Info']->value['downresume']==1) {?>
							<a href="<?php echo smarty_function_url(array('m'=>'ajax','c'=>'resume_word','id'=>$_smarty_tpl->tpl_vars['Info']->value['id']),$_smarty_tpl);?>
" class="yun_newedition_resume_right_fxbth">下载简历</a>
						<?php } else { ?>
							<input class="yun_newedition_resume_right_fxbth" onClick="for_link('<?php echo $_smarty_tpl->tpl_vars['Info']->value['id'];?>
','<?php echo smarty_function_url(array('m'=>'ajax','c'=>'for_link'),$_smarty_tpl);?>
','<?php echo smarty_function_url(array('m'=>'ajax','c'=>'resume_word','id'=>$_smarty_tpl->tpl_vars['Info']->value['id']),$_smarty_tpl);?>
');" type="button" name="submit" value="下载简历 ">
						<?php }?>
						 
					<?php } else { ?>
						<?php if ($_smarty_tpl->tpl_vars['uid']->value) {?>
							<input class="yun_newedition_resume_right_fxbth" onClick="layer.msg('只有企业用户，才可以下载！',2,8);" type="button" name="submit" value="下载简历 ">
						<?php } else { ?>
							<input class="yun_newedition_resume_right_fxbth" onClick="showlogin('2');" type="button" name="submit" value="下载简历 ">
						<?php }?>
					<?php }?>
					
                    <?php if (!$_smarty_tpl->tpl_vars['uid']->value&&!$_smarty_tpl->tpl_vars['username']->value) {?>
						
						<?php if ($_smarty_tpl->tpl_vars['Info']->value['height_status']==2) {?>
							<input class=" yun_newedition_resume_right_dybth" type="button" onclick="showlogin('3');" value="分享简历" name="submit" />
						<?php } else { ?>
							<input class=" yun_newedition_resume_right_dybth" type="button" onclick="showlogin('2');" value="分享简历" name="submit" />
						<?php }?>
						
					<?php } else { ?>
						
						<input class=" yun_newedition_resume_right_dybth" type="button" onclick="recommendInterval('<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
','<?php echo smarty_function_url(array('m'=>'resume','c'=>'resumeshare','id'=>'`$Info.id`'),$_smarty_tpl);?>
');" value="分享简历" name="submit" />
						
					<?php }?>

					</div>
					
					<div class="clear"></div>

					<div class="yun_newedition_resume_right_jb">
						<div class="yun_newedition_tit">
							<span class="yun_newedition_tit_s">举报简历</span>
							<i class="yun_newedition_tit_line"></i>
						</div>
						
						<form action="index.php?m=resume&c=show&a=report" method="post" id='myform' target="supportiframe" class="layui-form">
							<input type="hidden" name="r_uid" value="<?php echo $_smarty_tpl->tpl_vars['Info']->value['uid'];?>
" />
							<input type="hidden" name="r_eid" value="<?php echo $_smarty_tpl->tpl_vars['Info']->value['id'];?>
" />
							<input type="hidden" name="r_name" value="<?php echo $_smarty_tpl->tpl_vars['Info']->value['name'];?>
" />
							
							<div class="yun_resume_cz_dt" style="margin-top:20px;">
								若该简历为无效简历，您可以在此举报<br>
								核实后我们将为你补偿：
							</div>
							
							<div class="yun_resume_cz_dt">
								<input type="checkbox" name="reason[]" id="reason_1" lay-skin="primary" title="无人接听" value="无人接听" />
								<input type="checkbox" name="reason[]" id="reason_2" lay-skin="primary" title="打广告" value="打广告" />
								<input type="checkbox" name="reason[]" id="reason_3" lay-skin="primary" title="找到工作" value="找到工作" />
								<input type="checkbox" name="reason[]" id="reason_4" lay-skin="primary" title="信息不实" value="信息不实" />
								<input type="checkbox" name="reason[]" id="reason_5" lay-skin="primary" title="号码错误" value="号码错误" />
								<input type="checkbox" name="reason[]" id="reason_6" lay-skin="primary" title="骗子" value="骗子" />
							</div>
							
							<div class="yun_resume_cz_dt"> 
								<?php if (!$_smarty_tpl->tpl_vars['uid']->value&&!$_smarty_tpl->tpl_vars['username']->value) {?>
									<input type="button" name="submit" value="举报" onclick="showlogin('2');" class="yun_resume_cz_jb_a" />
								<?php } elseif ($_smarty_tpl->tpl_vars['usertype']->value!=2) {?>
									<input class="yun_resume_cz_jb_a" onclick="layer.msg('只有企业用户才可以举报！',2,8);" type="button" name="submit" value="举报 " />
								<?php } else { ?>
									<input type="submit" name="submit" value="举报" class="yun_resume_cz_jb_a" />
								<?php }?> 
							</div>
						</form>
					</div>
				</div>
                 <div class="clear"></div>
				<div class=" noprint" style="text-align: center;margin-bottom:10px; margin-top:15px;" >
					<div class="yun_resume_czewm">
						<div style="padding:10px 0">微信扫一扫</div>
						<img src="<?php echo smarty_function_url(array('m'=>'ajax','c'=>'pubqrcode','toc'=>'resume','toa'=>'show','toid'=>$_smarty_tpl->tpl_vars['Info']->value['id']),$_smarty_tpl);?>
" width="140" height="140">
						<div class="yun_resume_cz_tit" style="color:red;">↑微信扫上方二维码↑</br>便可将此简历分享至朋友圈</div>
					</div>
				</div>
      			<?php }?>
               
				
				<?php if ($_GET['tplsee']!='member') {?>
					<?php if ($_smarty_tpl->tpl_vars['uid']->value==$_smarty_tpl->tpl_vars['Info']->value['uid']&&$_smarty_tpl->tpl_vars['usertype']->value==1) {?>
					<div class=" noprint">
					
						
 						<?php if ($_smarty_tpl->tpl_vars['usertype']->value==1) {?>
 							<div class="yun_resume_cz " style="padding:0px;border:none; background:none">
 								
 								
																
								<a href="<?php echo smarty_function_url(array('m'=>'member','c'=>'expect','e'=>$_smarty_tpl->tpl_vars['Info']->value['id']),$_smarty_tpl);?>
" class="yun_resume_cz_xg">修改简历</a>
								<input class="yun_resume_cz_bc yun_resume_cz_bth_xz fl " onclick="for_link('<?php echo $_smarty_tpl->tpl_vars['Info']->value['id'];?>
','<?php echo smarty_function_url(array('m'=>'ajax','c'=>'for_link'),$_smarty_tpl);?>
','<?php echo smarty_function_url(array('m'=>'ajax','c'=>'resume_word','id'=>$_smarty_tpl->tpl_vars['Info']->value['id']),$_smarty_tpl);?>
');" type="submit" name="submit" value="保存到电脑 " /> 
								<div class="mt10">
									<div class="yun_resume_cz_gz">如需手机上传或修改个人形象照，请关注微信进行操作</div>
								</div>
							</div>	
						<?php }?>
						
					 
						<div class="yun_resume_czewm">
							<div class="yun_resume_czewmpic"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wx_qcode'];?>
" width="150" height="150"></div>
							<div class="yun_resume_cz_tit">扫一扫手机上也可以编辑简历了</div>
						</div>
					</div>
					<?php }?>
				<?php }?>
            </div>
			
		</div>
		
		<?php if ($_GET['see']!='member'&&$_GET['see']!='used') {?>
			<div class="yun_newedition_resume_other">
				<div class="yun_newedition_tit">
					<span class="yun_newedition_tit_s">你的同行还查看了以下简历</span>
					<i class="yun_newedition_tit_line"></i>
					<a href="<?php echo smarty_function_url(array('m'=>'resume'),$_smarty_tpl);?>
" class="yun_newedition_tit_more" style="right:50px;top:5px;">更多优质简历在这里！</a>
				</div>

				<ul class="yun_newedition_resume_otherlist">
					<?php  $_smarty_tpl->tpl_vars['look'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['look']->_loop = false;
$look=array();global $db,$db_config,$config;
		if(is_array($_GET)){
			foreach($_GET as $key=>$value){
				if($value=='0'){
					unset($_GET[$key]);
				}
			}
		}
		$paramer=array("limit"=>"6","post_len"=>"18","notid"=>"'@Info.id'","item"=>"'look'","nocache"=>"")
;
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }

	    //处理类别字段
		$cache_array = $db->cacheget();
        $fscache_array = $db->fscacheget();
		$userclass_name = $cache_array["user_classname"];
		$city_name      = $cache_array["city_name"];
        $city_index     = $cache_array["city_index"];
		$job_name		= $cache_array["job_name"];
        $job_index		= $cache_array["job_index"];
		$job_type		= $cache_array["job_type"];
		$industry_name	= $cache_array["industry_name"];
        $city_parent       = $fscache_array["city_parent"];
        $job_parent     = $fscache_array["job_parent"];

		//是否属于分站下
		if($config['sy_web_site']=="1"){
			if($config[province]>0 && $config[province]!=""){
				$paramer[provinceid] = $config[province];
			}
			if($config['cityid']>0 && $config['cityid']!=""){
				$paramer['cityid']=$config['cityid'];
			}
			if($config['three_cityid']>0 && $config['three_cityid']!=""){
				$paramer['three_cityid']=$config['three_cityid'];
			}
			if($config['hyclass']>0 && $config['hyclass']!=""){
				$paramer['hy']=$config['hyclass'];
			}
		}

		
			$where = "a.`defaults`='1' and a.`state`='1' and a.`status`='1' and a.`r_status`='1'";
            //关注我公司的人才--条件
			if($paramer[where_uid]){
				$where .=" AND a.`uid` in (".$paramer['where_uid'].")";
			}
			//黑名单不能查看已拉黑的个人用户简历
			if($_COOKIE['uid']&&$_COOKIE['usertype']=="2"){
				$blacklist=$db->select_all("blacklist","`p_uid`='".$_COOKIE['uid']."'","c_uid");
				if(is_array($blacklist)&&$blacklist){
					foreach($blacklist as $v){
						$buid[]=$v['c_uid'];
					}
				    $where .=" AND a.`uid` NOT IN (".@implode(",",$buid).")";
				}
			}
            //置顶
			if($paramer[topdate]){
				$where .=" AND a.`top`=1 AND a.`topdate`>'".time()."'";
			}
			if($paramer[top]){
				$where .=" AND a.`top`=1 AND a.`topdate`>'".time()."'";
			}
            //身份认证
			if($paramer[idcard]){
				$where .=" AND a.`idcard_status`='1'";
			}
			//优质人才
			if($paramer[height_status]){
				$where .=" AND a.`height_status`=".$paramer[height_status];
			}
			//优质人才推荐
			if($paramer[rec]){
				$where .=" AND a.`rec`=1";
			}
			//普通推荐
			if($paramer[rec_resume]){
				$where .=" AND a.`rec_resume`=1";
			}
			//作品
			if($paramer[work]){
				$show=$db->select_all("resume_show","1 group by eid","`eid`");
				if(is_array($show)){
					foreach($show as $v){
						$eid[]=$v['eid'];
					}
				}
				$where .=" AND a.`id` in (".@implode(",",$eid).")";
			}
			//标签
			if($paramer[tag]){
			    $tagname=$userclass_name[$paramer[tag]];
				$tag=$db->select_all("resume","`def_job`>0 and `r_status`=1 and `status`=1 and FIND_IN_SET('".$tagname."',`tag`)","`def_job`");
				if(is_array($tag)){
					foreach($tag as $v){
						$tagid[]=$v['def_job'];
					}
				}
				$where .=" AND a.`id` in (".@implode(",",$tagid).")";
			}
			//更新时间区间
			if($paramer[uptime]){
				if($paramer[uptime]==1){
					$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
	    			$where.=" AND a.`lastupdate`>$beginToday";
	    		}else{
	    			$time=time();
					$uptime = $time-($paramer[uptime]*86400);
					$where.=" AND a.`lastupdate`>$uptime";
	    		}
			}
			//添加时间区间，即审核时间
			if($paramer[adtime]){
				$time=time();
				$adtime = $time-($paramer[adtime]*86400);
				$where.=" AND a.`status_time`>$adtime";
			}
			//是否有照片
			if($paramer[pic]=="0" || $paramer[pic]){
				$where .=" AND a.`photo`<>'' AND a.`phototype`!=1";
			}
            //行业
			if($paramer['hy']!=""){
				$where .= " AND a.`hy` IN (".$paramer['hy'].")";
			}


            $citywhere = "1";
			if($paramer[three_cityid]){
             
			  $citywhere = " AND b.`three_cityid` = $paramer[three_cityid]";
			}elseif($paramer[cityid]){
             
			   $citywhere = " AND b.`cityid` = $paramer[cityid]";
			}elseif($paramer[provinceid]){
              
			   $citywhere = " AND b.`provinceid` = $paramer[provinceid]";
			}
            //城市区间,不建议执行该查询
			if($paramer[cityin]){
                if($city_parent[$paramer[cityin]]=='0'){
					$citywhere  = " AND b.`provinceid` = $paramer[cityin]";
				}elseif(in_array($city_parent[$paramer[cityin]],$city_index)){
					$citywhere  = " AND b.`cityid` = $paramer[cityin]";
				}elseif($city_parent[$paramer[cityin]]>0){
					$citywhere  = " AND b.`three_cityid` = $paramer[cityin]";
				}
			}
            $jobwhere = "1";
			if($paramer[job_post]){
            
			  $jobwhere=" AND c.`job_post`= $paramer[job_post]";
			}elseif($paramer[job1_son]){
             
			   $jobwhere=" AND c.`job1_son`= $paramer[job1_son]";
			}elseif($paramer[job1]){
			
				$jobwhere =" AND c.`job1`= $paramer[job1]";
			}
			//职位区间,不建议执行该查询
			if($paramer[jobin]){
                if($job_parent[$paramer[jobin]]=='0'){
					$jobwhere =" AND c.`job1`= $paramer[jobin]";
				}elseif(in_array($job_parent[$paramer[jobin]],$job_index)){
					$jobwhere =" AND c.`job1_son`= $paramer[jobin]";
				}elseif($job_parent[$paramer[jobin]]>0){
					$jobwhere =" AND c.`job_post`= $paramer[jobin]";
				}
			}
			//工作经验
			if($paramer[exp]){
				$where .=" AND a.`exp`=$paramer[exp]";
			}
			//学历
			if($paramer[edu]){
				$where .=" AND a.`edu`=$paramer[edu]";
			}
			//性别
			if($paramer[sex]){
				$where .=" AND a.`sex`=$paramer[sex]";
			}
			//到岗时间
			if($paramer[report]){
				$where .=" AND a.`report`=$paramer[report]";
			}
			//工作性质
			if($paramer[type]){
				$where .= " AND a.`type`=$paramer[type]";
			}
			if($paramer[notid]){
				$where.= " and `id`<>$paramer[notid]";
			}
			//关键字
			if($paramer[keyword]){
				$where1 = array();
				$where1[]="a.`name` LIKE '%$paramer[keyword]%'";
				$where1[]="a.`uname` LIKE '%$paramer[keyword]%'";
 				
				//搜索工作经历 
				$workList = $db->select_all('resume_work',"`title` LIKE '%$paramer[keyword]%' OR `content` LIKE '%$paramer[keyword]%' ORDER BY id DESC limit 500","`eid`");
				if(!empty($workList)){
					$workId = array();
					foreach($workList as $value){
						$workId[] = $value['eid'];
					}
					$where1[]	=	"a.id IN (".implode(',',$workId).")";
				}
               
                $where.=" AND (".@implode(" or ",$where1).")";
			}
			//薪资待遇
			if($paramer[minsalary]&&$paramer[maxsalary]){
				$where.= " AND ((a.`minsalary`<=".intval($paramer[minsalary])." and a.`maxsalary`>=".intval($paramer[minsalary]).") 
							or (a.`minsalary`<=".intval($paramer[maxsalary])." and a.`maxsalary`>=".intval($paramer[maxsalary])."))";
			}elseif($paramer[minsalary]&&!$paramer[maxsalary]){
				$where.= " AND ((a.`minsalary`<=".intval($paramer[minsalary])." and a.`maxsalary`>=".intval($paramer[minsalary]).") 
							or (a.`minsalary`>=".intval($paramer[minsalary])." and a.`maxsalary`>=".intval($paramer[minsalary]).")
							or (a.`minsalary`!=0 and  a.`maxsalary`=0))";
			}elseif(!$paramer[minsalary]&&$paramer[maxsalary]){
				$where.= " AND ((a.`minsalary`<=".intval($paramer[maxsalary])." and a.`maxsalary`>=".intval($paramer[maxsalary]).")
							or (a.`minsalary`<=".intval($paramer[maxsalary])." and a.`maxsalary`<=".intval($paramer[maxsalary]).")  
							or (a.`minsalary`<=".intval($paramer[maxsalary])." and a.`maxsalary`=0) 
							or (a.`minsalary`=0 and a.`maxsalary`!=0)
							)";
			}
			//年龄
			if($paramer[minage]&&$paramer[maxage]){
				$mintime=date("Y-m-d",strtotime("-".$paramer[minage]." year"));
				$maxtime=date("Y-m-d",strtotime("-".$paramer[maxage]." year"));
				$where.= " AND a.`birthday`>= '".$maxtime."' and a.`birthday`<='".$mintime."'";
			}elseif($paramer[minage]&&!$paramer[maxage]){
				$mintime=date("Y-m-d",strtotime("-".$paramer[minage]." year"));
				$where.= " AND a.`birthday`<='".$mintime."'";
			}elseif(!$paramer[minage]&&$paramer[maxage]){
				$maxtime=date("Y-m-d",strtotime("-".$paramer[maxage]." year"));
				$where.= " AND a.`birthday`>='".$maxtime."'";
			}
	        //排序字段默认为更新时间
			if($paramer[order] && $paramer[order]!="lastdate"){
				if($paramer[order]=='topdate'){
					$nowtime=time();
					$order = " ORDER BY if(a.`topdate`>$nowtime,a.`topdate`,a.`lastupdate`)";
				}else{
					$order = " ORDER BY a.`".$paramer[order]."`";
				}
			}else{
				$order = " ORDER BY a.`lastupdate` ";
			}
			//排序规则 默认为倒序
			$sort = $paramer[sort]?$paramer[sort]:'DESC';
			//查询条数
			if($paramer[limit]){
				$limit=" LIMIT ".$paramer[limit];
			}
			//自定义查询条件，默认取代上面任何参数直接使用该语句
			if($paramer[where]){
				$where = $paramer[where];
 			}
            $pagewhere = "";$joinwhere = "";
            if($citywhere!="1"){

				$pagewhere.=" ,`".$db_config[def]."resume_cityclass`  b ";
				$joinwhere .= " a.`id`=b.`eid` ".$citywhere;
            }
            if($jobwhere!="1"){
				$pagewhere.=" ,`".$db_config[def]."resume_jobclass`  c ";
				if($joinwhere!=""){
					$joinwhere .= " and a.`id`=c.`eid` ".$jobwhere;
				}else{
					$joinwhere .= " a.`id`=c.`eid` ".$jobwhere;
				}

            }
            if($joinwhere!=""){
				$where .= " group by a.id ";
			}
			if($paramer[ispage]){
				if($paramer["height_status"]){
					$limit = PageNav($paramer,$_GET,"resume_expect",$where,$Purl,"",$paramer[islt]?$paramer[islt]:"3",$_smarty_tpl,$pagewhere,$joinwhere);
				}else{
					$limit = PageNav($paramer,$_GET,"resume_expect",$where,$Purl,"","0",$_smarty_tpl,$pagewhere,$joinwhere);
				}
			}
	
			if($paramer[topdate] && $_GET[page]>1){
				$look = array();
			}else{
				
				$select="a.`id`,a.`uid`,a.`name`,a.`hy`,a.`job_classid`,a.`city_classid`,a.`jobstatus`,a.`type`,a.`report`,a.`lastupdate`,a.`rec`,a.`top`,a.`topdate`,a.`rec_resume`,a.`ctime`,a.`uname`,a.`idcard_status`,a.`minsalary`,a.`maxsalary`";
				if($pagewhere!=""){

					$sql = "select ".$select." from `".$db_config[def]."resume_expect` a ".$pagewhere." where ".$joinwhere." and ".$where.$order.$sort.$limit;

					$look=$db->DB_query_all($sql,"all");

				}else{
					$sql = "select ".$select." from `".$db_config[def]."resume_expect` a where ".$where.$order.$sort.$limit;
					$look=$db->DB_query_all($sql,"all");
				}
			}
            
        
        include(CONFIG_PATH."db.data.php");		

		if(!empty($look) && is_array($look)){
			
			//如果存在top，则说明请求来自排行榜页面
			if($paramer['top']){
				$uids=$m_name=array();
				foreach($look as $k=>$v){
					$uids[]=$v[uid];
				}

				$member=$db->select_all($db_config[def]."member","`uid` in(".@implode(',',$uids).")","uid,username");
				foreach($member as $val){
					$m_name[$val[uid]]=$val['username'];
				}
			}
			$uid = $eid = array();
			foreach($look as $key=>$value){
				
				$uid[] = $value['uid'];
				$eid[] = $value['id'];
			}
			$eids = @implode(',',$eid);
			$uids = @implode(',',$uid);
            $resume=$db->select_all("resume","`uid` in(".$uids.")","uid,name,nametype,tag,sex,moblie_status,edu,exp,photo,phototype,photo_status,birthday");
			foreach($resume as $v){
				$ruids[] = $v['uid'];
			}
			foreach($look as $k=>$v){
				if(!in_array($v['uid'],$ruids)){
					unset($look[$k]);
					continue;
				}
			}
            $rshow=$db->select_all("resume_show","`eid` in(".$eids.")");
			if($paramer[topdate]){
				$noids=array();
			}

			if($paramer[workexp] == 1){
				$eduList  = $db -> select_all("resume_edu","`eid` in(".$eids.")");
				if(!empty($eduList)){
					foreach($eduList as $key=>$value){
						$eduListNew[$value['eid']][] = $value;
					}
					foreach($eduListNew as $k=>$eduv){
						$edumin				=		0;
						$edumax				=		0;
						$edutitle			=	array();
						$education			=	array();
						foreach($eduv as $v){
							if($v['sdate']>0 && $edumin==0){
								$edumin		=		$v['sdate'];
							}elseif($edumin>$v['sdate']){
								$edumin		=		$v['sdate'];
							}
							if($v['edate']==0 ){
								$edumax		=		0;
							}elseif($edumax<$v['edate']){
								$edumax		=		$v['edate'];
							}
						
							$education[]	=		$userclass_name[$v['education']];

							$edutitle[]		=		$v['title'];
						}
						$return =array();
						$return['edumin']		=		date('Y-m',$edumin);
						$return['edumax']		=		$edumax  == 0 ?  '至今': date('Y-m',$edumax);
						$return['education']	=		@implode(',',$education);
						//$return['edutit']		=		@implode(',',$edutitle);
						
						$return['edu_time']		=		$return['edumin']."-".$return['edumax'];
						
						
						$workexpList[$k]['edu_content']	=	$return['edu_time'].' 已完成'.$return['education'].'段学业';
						
					}
					
				}
				



				$workList  = $db -> select_all("resume_work","`eid` in(".$eids.")");
				if(!empty($workList)){
					foreach($workList as $key=>$value){
						$workListNew[$value['eid']][] = $value;
					}
					foreach($workListNew as $k=>$workv){
						
						$whour     		=   0;
						$hour     	 	=   array();
						$time      		=   time();
						$workmin		=	0;
						$workmax		=	0;
						$worknum		=	count($workv);
						$wtitle			=	array();
						foreach($workv as $v){
							/* 计算每份工作时长(按月) */
							
							
							if($v['sdate']>0 && $workmin==0){
								$workmin		=		$v['sdate'];
							}elseif($workmin>$v['sdate']){
								$workmin		=		$v['sdate'];
							}
							
							if($v['edate']==0 ){
								$workmax		=		0;
							}elseif($workmax<$v['edate']){
								$workmax		=		$v['edate'];
							}
			
							$wtitle[]			=		$v['title'];
							
							$hour[]   			=		$workTime;
							$whour    			+=   	$workTime;
						}
						
						$workavg   =   ceil($whour/count($hour));
						$return = array();
						$return['worknum']		=		$worknum  > 0 ?  $worknum:0;
						$return['workavg']		=		$workavg  > 0 ?  $workavg:0;
						$return['workmin']		=		date('Y-m',$workmin);
						$return['workmax']		=		$workmax  == 0 ?  '至今': date('Y-m',$workmax);
						$return['worktit']		=		@implode(',',$wtitle);
						
						$return['work_time']	=		$return['workmin'].'-'.$return['workmax'];
						
						if($return['worktit']!=''){
							$workexpList[$k]['work_content']	=	$return['work_time'].' 参加过'.$return['worknum'].'份工作 ，涉及'.$return['worktit'].'等岗位';
						}else{
							$workexpList[$k]['work_content']	=	$return['work_time'].' 参加过'.$return['worknum'].'份工作';
						}
						
							
					}
				}
				
				
			}
			foreach($look as $k=>$v){
				if($paramer[topdate]){
					$noids[] = $v[id];
				}
				//筛除重复
				if($paramer[noid]=='1' && !empty($noids) && in_array($v['id'],$noids)){
					unset($look[$k]);
					continue;
				}
			    foreach($resume as $val){
			        if($v['uid']==$val['uid']){
                        $look[$k]['where']=$citywhere;
			    		$look[$k]['edu_n']=$userclass_name[$val['edu']];
				        $look[$k]['exp_n']=$userclass_name[$val['exp']];
			            if($val['birthday']){
							$year = date("Y",strtotime($val['birthday']));
							$look[$k]['age'] =date("Y")-$year;
						}
						if($val['sex']==152){
							$val['sex']='1';
						}elseif ($val['sex']==153){
							$val['sex']='2';
						}
						$look[$k]['sex'] =$arr_data[sex][$val['sex']];
		                $look[$k]['phototype']=$val[phototype];
		                $photo=$icon="";
						if($config['user_pic']==1 || empty($config['user_pic'])){
			                if($val['photo'] && $val['photo_status']==0 && $val['phototype']!=1){
	            				$photo=$val['photo'];
	            			}else{
	            				if($val['sex']==1){
	            					$icon=$config['sy_member_icon'];
	            				}else{
	            					$icon=$config['sy_member_iconv'];
	            				}
	            			}
	            			
						}elseif($config['user_pic']==2){
							if($val['photo']&& $val['photo_status']==0){
								$photo=$val['photo'];
							}else{
								if($val['sex']==1){
									$icon=$config['sy_member_icon'];
								}else{
									$icon=$config['sy_member_iconv'];
								}
							}
						}elseif($config['user_pic']==3){
							if($val['sex']==1){
								$icon=$config['sy_member_icon'];
							}else{
								$icon=$config['sy_member_iconv'];
							}
						}
						$look[$k]['photo']=checkpic($photo,$icon);
						if($val['tag']){
                            $look[$k]['tag']=explode(',',$val['tag']);
	                    }
                        $look[$k]['nametype']=$val[nametype];
                        $look[$k]['moblie_status']=$val[moblie_status];
                        //名称显示处理
						if($config['user_name']==1 || !$config['user_name']){
    						if($val['nametype']==3){
    						    if($val['sex']==1){
    						        $look[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."先生";
    						    }else{
    						        $look[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."女士";
    						    }
    						}elseif($val['nametype']==2){
    						    $look[$k]['username_n'] = "NO.".$v['id'];
    						}else{
    							$look[$k]['username_n'] = $val['name'];
    						}
						}elseif($config['user_name']==3){
							if($val['sex']==1){
								$look[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."先生";
							}else{
								$look[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."女士";
							}
						}elseif($config['user_name']==2){
							$look[$k]['username_n'] = "NO.".$v['id'];
						}elseif($config['user_name']==4){
							$look[$k]['username_n'] = $val['name'];
						}
                    }
                }
			    foreach($rshow as $val){
					if($v['id']==$val['eid']){
						$look[$k]['show_n'] = 1;
					}
				}
				//更新时间显示方式
				$time=$v['lastupdate'];
				//今天开始时间戳
				$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
				//昨天开始时间戳
				$beginYesterday=mktime(0,0,0,date('m'),date('d')-1,date('Y'));
				//一周内时间戳
				$week=strtotime(date("Y-m-d",strtotime("-1 week")));
				if($time>$week && $time<$beginYesterday){
					$look[$k]['time'] = "一周内";
				}elseif($time>$beginYesterday && $time<$beginToday){
					$look[$k]['time'] = "昨天";
				}elseif($time>$beginToday){
					$look[$k]['time'] = date("H:i",$v['lastupdate']);
					$look[$k]['redtime'] =1;
				}else{
					$look[$k]['time'] = date("Y-m-d",$v['lastupdate']);
				} 
                
                // 前天
				$beforeYesterday=mktime(0,0,0,date('m'),date('d')-2,date('Y'));

				if($v['ctime']>$beforeYesterday){
					$look[$k]['newtime'] =1;
				}
				$look[$k]['user_jobstatus_n']=$userclass_name[$v['jobstatus']];
				if($v['minsalary']&&$v['maxsalary']){
					$look[$k]["salary_n"] = "￥".$v['minsalary']."-".$v['maxsalary'];    
                }else if($v['minsalary']){
                    $look[$k]["salary_n"] = "￥".$v['minsalary']."以上";  
                }else{
    				$look[$k]["salary_n"] = "面议";
    			}
				$look[$k]['report_n']=$userclass_name[$v['report']];
				$look[$k]['type_n']=$userclass_name[$v['type']];
				$look[$k]['lastupdate']=date("Y-m-d",$v['lastupdate']);
					
				$look[$k]['user_url']=Url("resume",array("c"=>"show","id"=>$v['id']),"1");
				$look[$k]["hy_info"]=$industry_name[$v['hy']];
				if($paramer['top']){
					$look[$k]['m_name']=$m_name[$v['uid']];
					$look[$k]['user_url']=Url("ask",array("c"=>"friend","a"=>"myquestion","uid"=>$v['uid']));
				}
				$look[$k]['work_content']=$workexpList[$v['id']]['work_content'];
				$look[$k]['edu_content']=$workexpList[$v['id']]['edu_content'];

				$kjob_classid=@explode(",",$v['job_classid']);
				$kjob_classid=array_unique($kjob_classid);	
				$jobname=array();
				if(is_array($kjob_classid)){
					foreach($kjob_classid as $val){
					    if($val!=''){
					        if($paramer['keyword']){
                               $jobname[]=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$job_name[$val]);
                            }else{
                               $jobname[]=$job_name[$val];
                            }
                        }
					}
				}
				//$look[$k]['job_post']=@implode(",",$jobname);
				$look[$k]['expectjob']=$jobname;
				$kcity_classid=@explode(",",$v['city_classid']);
				$kcity_classid=array_unique($kcity_classid);	
				$cityname=array();
				if(is_array($kcity_classid)){
					foreach($kcity_classid as $val){
					    if($val!=''){
					       
                            $cityname[]=$city_name[$val];
                            
                        }
					}
				}
                //$look[$k]['citylist']=@implode("/",$cityname);
				$look[$k]['expectcity']=$cityname;
				//截取标题
				if($paramer['post_len']){
					$postname[$k]=@implode(",",$jobname);
					$look[$k]['job_post_n']=mb_substr($postname[$k],0,$paramer[post_len],"utf-8");
				}
                if($paramer['city_len']){
					$scityname[$k]=@implode("/",$cityname);
					$look[$k]['city_name_n']=mb_substr($scityname[$k],0,$paramer[city_len],"utf-8");
				}
			}
			foreach($look as $k=>$v){
               if($paramer['keyword']){
					$look[$k]['username_n']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$v['username_n']);
					$look[$k]['job_post']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$look[$k]['job_post']);
					$look[$k]['job_post_n']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$look[$k]['job_post_n']);
					$look[$k]['city_name_n']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$look[$k]['city_name_n']);
				}
            }

			
			if($paramer['keyword']!=""&&!empty($look)){
				addkeywords('5',$paramer['keyword']);
			}
		}$look = $look; if (!is_array($look) && !is_object($look)) { settype($look, 'array');}
foreach ($look as $_smarty_tpl->tpl_vars['look']->key => $_smarty_tpl->tpl_vars['look']->value) {
$_smarty_tpl->tpl_vars['look']->_loop = true;
?>
						<li style="height:80px;">
							<div class="yun_newedition_resume_other_usertx"><a href="<?php echo $_smarty_tpl->tpl_vars['look']->value['user_url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['look']->value['photo'];?>
" width="70" height="70" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_icon'];?>
',2);"></a></div>
							
							<div class="yun_newedition_resume_other_username"><a href="<?php echo $_smarty_tpl->tpl_vars['look']->value['user_url'];?>
"><?php if (in_array($_smarty_tpl->tpl_vars['look']->value['id'],$_smarty_tpl->tpl_vars['eid']->value)) {
echo $_smarty_tpl->tpl_vars['look']->value['uname'];
} else {
echo $_smarty_tpl->tpl_vars['look']->value['username_n'];
}?></a> <span class="yun_newedition_resume_other_username_i"><?php echo $_smarty_tpl->tpl_vars['look']->value['sex'];?>
,<?php if ($_smarty_tpl->tpl_vars['look']->value['age']==0) {?>保密<?php } else {
echo $_smarty_tpl->tpl_vars['look']->value['age'];?>
岁<?php }?></span></div>
							
							<div class="yun_newedition_resume_other_userinfo"><?php echo $_smarty_tpl->tpl_vars['look']->value['exp_n'];?>
<span class="yun_newedition_resume_line">|</span><?php echo $_smarty_tpl->tpl_vars['look']->value['edu_n'];?>
</div>

							<div class="yun_newedition_resume_other_userwant">求职：<span class="yun_newedition_resume_other_userwantjob"><?php echo $_smarty_tpl->tpl_vars['look']->value['job_post_n'];?>
</span></div>
						</li>
					<?php } ?>
				</ul>
			</div>
		<?php }?>
	</div>

	<div class="clear"></div>
	
	<!-- 联系方式弹出框 -->
	<div style="width:450px; display:none" id='link_style_div'>
		<div class="tcktouch_box">
			<?php if ($_smarty_tpl->tpl_vars['Info']->value['m_status']==1) {?>
			<div class="tcktouch_box_username"><?php echo $_smarty_tpl->tpl_vars['Info']->value['name'];?>
</div>
			
			<div class="tcktouch_box_tip">联系我时请说是在<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
上看到的</div>
			<div class="tcktouch_box_p">手机：<span class="tcktouch_box_p_sj"><?php echo $_smarty_tpl->tpl_vars['Info']->value['telphone'];?>
</span></div>
			<?php if ($_smarty_tpl->tpl_vars['Info']->value['email']) {?> <div class="tcktouch_box_p">邮箱：<?php echo $_smarty_tpl->tpl_vars['Info']->value['email'];?>
 </div><?php }?> 
			<?php if ($_smarty_tpl->tpl_vars['Info']->value['qq']) {?><div class="tcktouch_box_p">Q Q：<?php echo $_smarty_tpl->tpl_vars['Info']->value['qq'];?>
</div> <?php }?> 
			<?php if ($_smarty_tpl->tpl_vars['Info']->value['homepage']) {?> <div class="tcktouch_box_p">主页：<?php echo $_smarty_tpl->tpl_vars['Info']->value['homepage'];?>
</div> <?php }?> 
			<?php if ($_smarty_tpl->tpl_vars['Info']->value['wxewm']) {?> <div class="tcktouch_box_ewm"><img src="<?php echo $_smarty_tpl->tpl_vars['Info']->value['wxewm'];?>
" width="100" height="100"><div class="tcktouch_box_ewm_p">个人二维码</div></div> <?php }?>
			<?php }?>
		</div>
	</div>
	<!-- 联系方式弹出框 end -->
	<div class="clear"></div>

	<div id="uclogin" class="none"></div>
	<?php if ($_GET['see']=='member') {?> 
	<!--使用该模板 预览时隐藏  -->
	<div class="expext_yl_box_bth"> 
		<a href="javascript:;" onClick="settemplate('确定使用该模板？', '<?php echo smarty_function_url(array('m'=>'ajax','c'=>'settpl','id'=>2,'eid'=>$_smarty_tpl->tpl_vars['Info']->value['id']),$_smarty_tpl);?>
');" class="expext_yl_box_sub">使用该模板</a> 
		<a href="<?php echo smarty_function_url(array('m'=>'resume','c'=>'show','uid'=>$_smarty_tpl->tpl_vars['uid']->value,'tmp'=>$_smarty_tpl->tpl_vars['tplurl']->value['id']),$_smarty_tpl);?>
" target="_blank" class="expext_yl_box_sub">预览</a> 
	</div>
	<?php }?> 

	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
> 
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
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
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/js/resume.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
> 
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/js/pay.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
> 
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/js/ScrollPic.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
> 
	<?php echo '<script'; ?>
>
		var headerfix = '<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_header_fix'];?>
';
		$(function(){
			var oDiv = document.getElementById("float"),
	            H = 600,
	            Y = oDiv
	        while(Y) {
	            H += Y.offsetTop;
	            Y = Y.offsetParent
	        }
	        window.onscroll = function() {
	            var s = document.body.scrollTop || document.documentElement.scrollTop;
	            if(s > H) {
	                if(headerfix == 1) {
	                    var top = '40px';
	                } else {
	                    var top = '0px';
	                }
	                $("#float").attr('style', 'position:fixed;top:' + top + ';display:block');
	            } else {
	                $("#float").attr('style', '');
	            }
	        }
		});
		layui.use(['form', 'layer'], function() {
			var $ = layui.$,
				form = layui.form,
				layer = layui.layer;
			layer.photos({
				photos: '#rolling_img1',
				anim: 5 //0-6的选择，指定弹出图片动画类型，默认随机（请注意，3.0之前的版本用shift参数）
			});
			layer.photos({
			  photos: '#skill_photos',
			  anim: 5 //0-6的选择，指定弹出图片动画类型，默认随机（请注意，3.0之前的版本用shift参数）
			}); 
		});

		var integral_pricename = '<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
';
		var weburl = "<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
";
		var isHeight = "<?php echo $_smarty_tpl->tpl_vars['Info']->value['height_status'];?>
";

		<!--//--><![CDATA[//><!--
		var li_num = $("#rolling_img1 li").length;
		if(li_num > 3) { //如果图片数量不足，就不执行切换
			var scrollPic_02 = new ScrollPic();
			scrollPic_02.scrollContId = "rolling_img1"; //内容容器ID
			scrollPic_02.arrLeftId = "LeftArr"; //左箭头ID
			scrollPic_02.arrRightId = "RightArr"; //右箭头ID
			scrollPic_02.frameWidth = 725; //显示框宽度
			scrollPic_02.pageWidth = 225; //翻页宽度
			scrollPic_02.speed = 10; //移动速度(单位毫秒，越小越快)
			scrollPic_02.space = 10; //每次移动像素(单位px，越大越快)
			scrollPic_02.autoPlay = true; //自动播放
			scrollPic_02.autoPlayTime = 2; //自动播放间隔时间(秒)
			scrollPic_02.initialize(); //初始化
		}
		//--><!]]>
	<?php echo '</script'; ?>
>

	<iframe id="supportiframe" name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>

	<!--[if IE 6]>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/png.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
	DD_belatedPNG.fix('.png,.yun_resume_photo_bg,.yun_resume_h1_icon,.yun_resume_jobtime,.vita_Opera_cz_list_icon');
	<?php echo '</script'; ?>
>
	<![endif]--> 
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/public_search/public_tips.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['temstyle']->value)."/resume/resume_include.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/public_search/login.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
	<?php if ($_GET['see']!='member'&&$_GET['see']!='used') {?>
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php }?><?php }} ?>
