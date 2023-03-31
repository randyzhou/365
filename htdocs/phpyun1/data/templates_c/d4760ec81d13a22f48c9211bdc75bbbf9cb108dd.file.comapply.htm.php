<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-20 16:16:49
         compiled from "D:\rcw\uploads\app\template\default\job\comapply.htm" */ ?>
<?php /*%%SmartyHeaderCode:11565728595f9d9e840f65d0-33048609%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4760ec81d13a22f48c9211bdc75bbbf9cb108dd' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\default\\job\\comapply.htm',
      1 => 1605860205,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11565728595f9d9e840f65d0-33048609',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5f9d9e841ef116_20772469',
  'variables' => 
  array (
    'keywords' => 0,
    'description' => 0,
    'style' => 0,
    'config' => 0,
    'title' => 0,
    'Info' => 0,
    'stop' => 0,
    'usertype' => 0,
    'favJobNum' => 0,
    'uid' => 0,
    'userIdJobNum' => 0,
    'wlist' => 0,
    'sy_recommend_day_num' => 0,
    'recommendInterval' => 0,
    'link' => 0,
    'department' => 0,
    'langlist' => 0,
    'comclass_name' => 0,
    'job' => 0,
    'job_jiaa' => 0,
    'city_type' => 0,
    'v' => 0,
    'city_name' => 0,
    'city_index' => 0,
    'job_type' => 0,
    'job_name' => 0,
    'job_index' => 0,
    'keylist' => 0,
    'comrat' => 0,
    'msgList' => 0,
    'msglist' => 0,
    'job_jia' => 0,
    'user_sex' => 0,
    'j' => 0,
    'userdata' => 0,
    'userclass_name' => 0,
    'job_fast' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9d9e841ef116_20772469')) {function content_5f9d9e841ef116_20772469($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_function_listurl')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.listurl.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
	<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/css.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/comapply.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>

<body class="comapply_bg">
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	
	<div class="job_ceil " id="float">
		<div class="job_ceil_box">
			
			<div class="job_ceil_box_bg"></div>
			
			<div class="job_ceil_box_c">
				<div class="yun_content">
					<div class="job_ceil_cont">
						<span class="job_ceil_jobname"><?php echo $_smarty_tpl->tpl_vars['Info']->value['jobname'];?>
</span> 
						<span class="job_ceil_jobxz"> 
							<?php if ($_smarty_tpl->tpl_vars['Info']->value['minsalary']&&$_smarty_tpl->tpl_vars['Info']->value['maxsalary']) {?>
								￥<?php echo $_smarty_tpl->tpl_vars['Info']->value['minsalary'];?>
-<?php echo $_smarty_tpl->tpl_vars['Info']->value['maxsalary'];?>

							<?php } elseif ($_smarty_tpl->tpl_vars['Info']->value['minsalary']) {?> 
								<span class="Company_Basic_information_xz"><?php echo $_smarty_tpl->tpl_vars['Info']->value['minsalary'];?>
以上</span>
							<?php } else { ?> 
								面议
							<?php }?>
						</span> 
						<?php if ($_smarty_tpl->tpl_vars['stop']->value!='1') {?>
							<?php if ($_smarty_tpl->tpl_vars['usertype']->value==1) {?> 
							
								<?php if ($_smarty_tpl->tpl_vars['favJobNum']->value) {?> 
									<a href="javascript:void(0);" class="job_ceil_jobsc">已收藏</a>
								<?php } else { ?> 
									<a href="javascript:void(0);" onclick="fav_job('<?php echo $_smarty_tpl->tpl_vars['Info']->value['id'];?>
','2');" id="favjobid<?php echo $_smarty_tpl->tpl_vars['Info']->value['id'];?>
" class="job_ceil_jobsc">收藏</a>
								<?php }?>
								
							<?php } else { ?>
							
								<?php if ($_smarty_tpl->tpl_vars['uid']->value) {?> 
                     <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_user_change']==1) {?>
                      <a href="javascript:void(0);" onclick="layer.msg('请先申请个人用户才能收藏职位', 2, 8)" class="job_ceil_jobsc" rel="nofollow">收藏</a> 
                      <?php } else { ?> 
                        <a href="javascript:void(0);" onclick="layer.msg('只有个人用户才能收藏', 2, 8)" class="job_ceil_jobsc" rel="nofollow">收藏</a> 
                      <?php }?>
								<?php } else { ?>
									<a href="javascript:void(0);" onclick="showlogin('1');" class="job_ceil_jobsc" rel="nofollow">收藏</a> 
								<?php }?>
								
							<?php }?> 
							
							<?php if ($_smarty_tpl->tpl_vars['usertype']->value==1) {?>
							
								<?php if ($_smarty_tpl->tpl_vars['userIdJobNum']->value) {?> 
									<a class="job_ceil_jobtd_ysq">已申请</a>
								<?php } else { ?> 
									<a href="javascript:;" class="sq_job job_ceil_jobtd sq_job">申请职位</a>
								<?php }?>
								
							<?php } else { ?>
                   <?php if ($_smarty_tpl->tpl_vars['uid']->value) {?> 
                        <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_user_change']==1) {?>
                          <a onclick="layer.msg('请先申请个人用户才能申请职位', 2, 8)" href="javascript:;" class="job_ceil_jobtd">申请职位</a> 
                        <?php } else { ?> 
                          <a onclick="layer.msg('只有个人用户才能申请', 2, 8)" href="javascript:;" class="job_ceil_jobtd">申请职位</a> 
                        <?php }?>
                       
                    <?php } else { ?> 
                       <a onclick="applyjobuid();" href="javascript:;"	class="job_ceil_jobtd">申请职位</a> 
                    <?php }?>
                  <?php }
}?>
				
					</div>
				</div>
			</div>
		</div>
	</div>

    <div class="clear"></div>

	<!--新职位详细-->
	<div class="job_details_top">
		<div class="w1200">

			<div class="job_details_current">您当前的位置： <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
">首页</a> > <a href="<?php echo smarty_function_url(array('m'=>'job'),$_smarty_tpl);?>
">职位列表</a> > 职位详情 </div>

			<div class="job_details_topbox">
				
				<div class="job_details_topleft">
					
					<h1 class="job_details_name"><?php echo $_smarty_tpl->tpl_vars['Info']->value['jobname'];?>
</h1>
					<div class="job_details_salary">

						<span class="job_details_salary_n"><?php echo $_smarty_tpl->tpl_vars['Info']->value['job_salary'];?>
</span><?php if ($_smarty_tpl->tpl_vars['Info']->value['job_salary']!='面议') {?> /月<?php }?> 

						<?php if ($_smarty_tpl->tpl_vars['Info']->value['urgent_time']>time()) {?>
						<span class="job_details_advantage job_details_advantage_jobemergency">紧急招聘</span>
						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['Info']->value['xuanshang']&&$_smarty_tpl->tpl_vars['Info']->value['xsdate']>time()) {?>
						<span class="job_details_advantage job_details_advantage_jobzd">置顶职位</span>
						<?php }?> 

						<?php if ($_smarty_tpl->tpl_vars['Info']->value['rec_time']>time()) {?>
						<span class="job_details_advantage job_details_advantage_jobhot">站长推荐</span>
						<?php }?> 
					</div>

					<div class="job_details_info">

						<?php if ($_smarty_tpl->tpl_vars['Info']->value['job_city_one']||$_smarty_tpl->tpl_vars['Info']->value['job_city_two']||$_smarty_tpl->tpl_vars['Info']->value['job_city_three']) {?>
							<?php echo $_smarty_tpl->tpl_vars['Info']->value['job_city_one'];?>
-<?php echo $_smarty_tpl->tpl_vars['Info']->value['job_city_two'];?>

							<?php if ($_smarty_tpl->tpl_vars['Info']->value['job_city_three']) {?> -<?php echo $_smarty_tpl->tpl_vars['Info']->value['job_city_three'];?>
 <?php }?> 
						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['Info']->value['job_exp']) {?>
							<span class="job_details_line">|</span>
							<?php echo $_smarty_tpl->tpl_vars['Info']->value['job_exp'];?>
经验
						<?php }?> 

						<?php if ($_smarty_tpl->tpl_vars['Info']->value['job_edu']) {?>
							<span class="job_details_line">|</span>
							<?php echo $_smarty_tpl->tpl_vars['Info']->value['job_edu'];?>
学历
						<?php }?> 

						<?php if ($_smarty_tpl->tpl_vars['Info']->value['is_graduate']) {?>
							<span class="job_details_line">|</span>
							可接受应届生
						<?php }?>

					</div>   

					<?php if ($_smarty_tpl->tpl_vars['Info']->value['job_welfare']) {?>
						<div class="job_details_welfare "> 
							<?php  $_smarty_tpl->tpl_vars['wlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['wlist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['job_welfare']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['wlist']->key => $_smarty_tpl->tpl_vars['wlist']->value) {
$_smarty_tpl->tpl_vars['wlist']->_loop = true;
?> 
								<span class="job_details_welfare_n "><?php echo $_smarty_tpl->tpl_vars['wlist']->value;?>
</span>
							<?php } ?> 
						</div>
					<?php }?> 
                                        <div style="color:blue;margin-left:0px;">【唐胡子推荐】： <?php echo $_smarty_tpl->tpl_vars['Info']->value['statusbody'];?>
</div>
                                     
				</div>

				<div class="job_details_topright">
					<?php if ($_smarty_tpl->tpl_vars['stop']->value=='1') {?>
					<img src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/stamp.png" alt="已下架">
					<?php } else { ?>
					<div class="job_details_topright_data">
						<span class="job_details_topright_data_time"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Info']->value['lastupdate'],"%Y-%m-%d");?>
  更新</span>
						被浏览：<?php echo '<script'; ?>
 src="<?php echo smarty_function_url(array('m'=>'job','c'=>'comapply','a'=>'GetHits','id'=>$_smarty_tpl->tpl_vars['Info']->value['id']),$_smarty_tpl);?>
"><?php echo '</script'; ?>
> 次
					</div>
					
					<div class="job_details_top_operation">
						<?php if ($_smarty_tpl->tpl_vars['usertype']->value==1) {?> 
										
							<?php if ($_smarty_tpl->tpl_vars['favJobNum']->value) {?> 
								<a href="javascript:void(0);" class="job_details_top_operation_sc">已收藏</a>
							<?php } else { ?> 
								<a href="javascript:void(0);" onclick="fav_job('<?php echo $_smarty_tpl->tpl_vars['Info']->value['id'];?>
','2');" id="favjobid<?php echo $_smarty_tpl->tpl_vars['Info']->value['id'];?>
" class="job_details_top_operation_sc">收藏</a>
							<?php }?>
							
						<?php } else { ?>
						
							<?php if ($_smarty_tpl->tpl_vars['uid']->value) {?> 
                <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_user_change']==1) {?>
                <a href="javascript:void(0);" onclick="layer.msg('请先申请个人用户才能收藏职位', 2, 8)" class="job_details_top_operation_sc" rel="nofollow">收藏</a> 
                <?php } else { ?> 
                  <a href="javascript:void(0);" onclick="layer.msg('只有个人用户才能收藏', 2, 8)" class="job_details_top_operation_sc" rel="nofollow">收藏</a> 
                <?php }?>
								
							<?php } else { ?>
								<a href="javascript:void(0);" onclick="showlogin('1');" class="job_details_top_operation_sc" rel="nofollow">收藏</a> 
							<?php }?>
							
						<?php }?> 
						
						<?php if ($_smarty_tpl->tpl_vars['usertype']->value==1) {?>
										
							<?php if ($_smarty_tpl->tpl_vars['userIdJobNum']->value) {?> 
								<a  class="job_details_top_operation_ysq">已投递简历</a>
							<?php } else { ?> 
								<a onclick="sqjobtop();" href="javascript:void(0);" class="job_details_top_operation_sq">申请职位</a>
							<?php }?>
							
						<?php } else { ?>
              <?php if ($_smarty_tpl->tpl_vars['uid']->value) {?>
                <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_user_change']==1) {?>
                  <a onclick="layer.msg('请先申请个人用户才能申请职位', 2, 8)" href="javascript:;" class="job_details_top_operation_sq">申请职位</a> 
                <?php } else { ?> 
                  <a onclick="layer.msg('只有个人用户才能申请', 2, 8)" href="javascript:;" class="job_details_top_operation_sq">申请职位</a> 
                <?php }?>
              <?php } else { ?>
                <a onclick="applyjobuid();" href="javascript:;"	class="job_details_top_operation_sq">申请职位</a> 
              <?php }?>
						<?php }?>
					
					</div>
					
					<div class="job_details_top_extension">
						
						<div class="job_details_top_extension_zl">
							<?php if ($_smarty_tpl->tpl_vars['sy_recommend_day_num']->value) {?>
								<a href="javascript:void(0);" onclick="recommendToMuch('<?php echo $_smarty_tpl->tpl_vars['sy_recommend_day_num']->value;?>
');" class="job_details_top_extension_tj" rel="nofollow">推荐</a>
							<?php } else { ?> 
								<?php if ($_smarty_tpl->tpl_vars['uid']->value) {?> 
									<?php if ($_smarty_tpl->tpl_vars['Info']->value['r_status']!=1) {?> 
									<a href="javascript:void(0);" onclick="layer.msg('企业未审核无法推荐',2,8)" class="job_details_top_extension_tj" rel="nofollow">推荐</a>
									<?php } elseif ($_smarty_tpl->tpl_vars['Info']->value['state']!=1) {?> 
									<a href="javascript:void(0);" onclick="layer.msg('职位未审核无法推荐',2,8)" class="job_details_top_extension_tj" rel="nofollow">推荐</a>
									<?php } else { ?> 
									<a href="javascript:void(0);" onclick="recommendInterval('<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
','<?php echo smarty_function_url(array('m'=>'job','c'=>'recommend','id'=>$_smarty_tpl->tpl_vars['Info']->value['id']),$_smarty_tpl);?>
','<?php echo $_smarty_tpl->tpl_vars['recommendInterval']->value;?>
');" class="job_details_top_extension_tj" rel="nofollow">推荐</a>
									<?php }?> 
								<?php } else { ?> 
									<a href="javascript:void(0);" onclick="showlogin('1');" class="job_details_top_extension_tj" rel="nofollow">推荐</a>
								<?php }?> 
							<?php }?> 
						</div> 
						
						<div class="job_details_top_extension_zl ">
							<?php if ($_smarty_tpl->tpl_vars['usertype']->value=='1') {?> 
								<a href="javascript:void(0)" class="job_details_top_extension_jb" onclick="report_com();" rel="nofollow">举报</a> 
							<?php } elseif ($_smarty_tpl->tpl_vars['uid']->value) {?> 
                <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_user_change']==1) {?>
                  <a onclick="layer.msg('请先申请个人用户才能举报职位', 2, 8)" href="javascript:;" class="job_details_top_extension_jb">举报</a> 
                <?php } else { ?> 
                  <a onclick="layer.msg('只有个人用户才能举报', 2, 8)" href="javascript:;" class="job_details_top_extension_jb">举报</a> 
                <?php }?>
							<?php } else { ?> 
								<a href="javascript:void(0)" class="job_details_top_extension_jb" onclick="showlogin('1');" rel="nofollow">举报</a> 
							<?php }?>
						</div> 
						<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_xcxQrcode']==1) {?> 
						<div class="job_details_top_extension_zl">
							<a href="javascript:void(0);" onmousemove="$('#getxcxurl').show();" onmouseout="$('#getxcxurl').hide();" class="job_details_top_extension_xcx" 	rel="nofollow">小程序</a>
							<div class="comapply_sq_r_cy none" id="getxcxurl">
								<div class="comapply_sq_r_cont">
									<div class="comapply_sq_r_tipa">微信小程序</div>
									<img src="<?php echo smarty_function_url(array('m'=>'ajax','c'=>'xcxQrcode','id'=>$_smarty_tpl->tpl_vars['Info']->value['id'],'type'=>'job'),$_smarty_tpl);?>
" width="130" height="130" />
									<div class="comapply_sq_r_tipsm">
										↑微信扫上方二维码↑<br>即可在微信小程序内查看并分享
									</div>
								</div>
							</div>
						</div>
						<?php }?>
						<div class="job_details_top_extension_zl">
							<a href="javascript:void(0);" onmousemove="$('#getwapurl').show();" onmouseout="$('#getwapurl').hide();" class="job_details_top_extension_fx" rel="nofollow">分享</a>
							<div class="comapply_sq_r_cy none" id="getwapurl">
								<div class="comapply_sq_r_cont">
									<div class="comapply_sq_r_tipa">微信扫一扫：分享</div>
									<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_h5_share']==1) {?>
										<img src="<?php echo smarty_function_url(array('m'=>'ajax','c'=>'pubqrcode','toc'=>'job','toa'=>'share','toid'=>$_smarty_tpl->tpl_vars['Info']->value['id']),$_smarty_tpl);?>
" width="130" height="130" />
									<?php } else { ?>
										<img src="<?php echo smarty_function_url(array('m'=>'ajax','c'=>'pubqrcode','toc'=>'job','toa'=>'view','toid'=>$_smarty_tpl->tpl_vars['Info']->value['id']),$_smarty_tpl);?>
" width="130" height="130" />
									<?php }?>
									<div class="comapply_sq_r_tipsm">
										↑微信扫上方二维码↑<br>便可将本文分享至朋友圈
									</div>
								</div>
							</div>
						</div> 
					</div>
					<?php }?>
				</div>
			</div>
		</div>
	</div>

	<div class="clear"></div>
	
	<div class="w1200">
		
		<div class="job_details_left">
			<div class="job_details_left_box">
			
				<div class="job_details_tit"><span class="job_details_tit_s">联系方式</span><i class="job_details_tit_line"></i></div>
				
				<div class="job_details_touch">
					<div class="job_details_user">
						
						<div class=""> 
							
							<span class="job_details_touch_username">
							<?php if ($_smarty_tpl->tpl_vars['Info']->value['is_link']==2) {?>
								<?php echo $_smarty_tpl->tpl_vars['link']->value['data']['linkman'];?>

							<?php } else { ?>
								<?php echo $_smarty_tpl->tpl_vars['link']->value['linkman'];?>

							<?php }?>
							</span>

							<?php if ($_smarty_tpl->tpl_vars['Info']->value['linkjob']) {?><span class="job_details_touch_userjob"><?php echo $_smarty_tpl->tpl_vars['Info']->value['linkjob'];?>
</span><?php }?>

						</div>
						<?php if ($_smarty_tpl->tpl_vars['Info']->value['login_date']) {?><div class="job_details_touch_userlogintime">最近在线时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Info']->value['login_date'],"%Y-%m-%d %H:%m");?>
</div><?php }?>
						<?php if ($_smarty_tpl->tpl_vars['Info']->value['snum']!=0) {?>
						<div class="job_details_touch_userdata">
							<div class="job_details_touch_userdata_list"><span class="job_details_touch_userdata_n"><?php echo $_smarty_tpl->tpl_vars['Info']->value['snum'];?>
份</span>简历投递</div>
							<div class="job_details_touch_userdata_list"><i class=" job_details_touch_userdata_list_line"></i><span class="job_details_touch_userdata_n"><?php echo $_smarty_tpl->tpl_vars['Info']->value['pre'];?>
%</span>平均回复率</div>
							<div class="job_details_touch_userdata_list"><i class=" job_details_touch_userdata_list_line"></i><span class="job_details_touch_userdata_n"><?php echo $_smarty_tpl->tpl_vars['Info']->value['operatime'];?>
</span>平均回复时长</div>
						</div>
						<?php }?>
					</div>

					<?php if ($_smarty_tpl->tpl_vars['link']->value['errorcode']==1||$_smarty_tpl->tpl_vars['link']->value['errorcode']==2||$_smarty_tpl->tpl_vars['link']->value['errorcode']==5||$_smarty_tpl->tpl_vars['link']->value['errorcode']==6) {?>
						<!--联系方式2-->
						<div class="job_details_touch_tel">
							<em class="job_details_touch_tel_tip">企业未开启查看联系方式<?php if (!$_smarty_tpl->tpl_vars['userIdJobNum']->value) {?>，请直接投递简历<?php }?></em> 
							<?php if (!$_smarty_tpl->tpl_vars['userIdJobNum']->value) {?>
								<?php if (!$_smarty_tpl->tpl_vars['uid']->value) {?>
									<a href="javascript:;" onclick="showlogin(2)" class="job_details_touch_tel_bth">投递简历</a>
								<?php } else { ?>
									<?php if ($_smarty_tpl->tpl_vars['usertype']->value==1) {?>
										<a href="javascript:;" class="job_details_touch_tel_bth sq_job">投递简历</a>
									<?php } else { ?>
										<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_user_change']==1) {?>
										<a onclick="layer.msg('请先申请个人用户才能投递简历', 2, 8)" href="javascript:;" class="job_details_touch_tel_bth">投递简历</a> 
										<?php } else { ?> 
										<a onclick="layer.msg('只有个人用户才能投递简历', 2, 8)" href="javascript:;" class="job_details_touch_tel_bth">投递简历</a> 
										<?php }?>
									<?php }?>
								<?php }?>
							<?php }?>
						</div>
					<?php } else { ?>

						<?php if ($_smarty_tpl->tpl_vars['link']->value['data']['linktel_n']||$_smarty_tpl->tpl_vars['link']->value['data']['linkphone_n']) {?>
							<!--联系方式3-->
							<div class="job_details_touch_tel">
								电话：<span class="job_details_touch_tel_n"><?php if ($_smarty_tpl->tpl_vars['link']->value['data']['linktel_n']) {
echo $_smarty_tpl->tpl_vars['link']->value['data']['linktel_n'];
} else { ?>$link.data.linkphone_n<?php }?></span>
								
								<?php if ($_smarty_tpl->tpl_vars['usertype']->value!=1&&$_smarty_tpl->tpl_vars['Info']->value['uid']!=$_smarty_tpl->tpl_vars['uid']->value) {?>
									<?php if ($_smarty_tpl->tpl_vars['link']->value['errorcode']==9) {?>
										<a href="javascript:void(0);"onclick="showtel('<?php echo $_GET['id'];?>
');" class="job_details_touch_tel_bth">显示号码</a>
									<?php } else { ?>
										<a <?php if ($_smarty_tpl->tpl_vars['config']->value['com_search']==1||!$_smarty_tpl->tpl_vars['uid']->value) {?> href="javascript:showlogin(2);"<?php } else {
if ($_smarty_tpl->tpl_vars['config']->value['sy_user_change']==1) {?>onclick="layer.msg('请先申请个人用户才能显示号码', 2, 8);"<?php } else { ?> onclick="layer.msg('只有个人用户才能显示号码', 2, 8);"<?php }
}?> class="job_details_touch_tel_bth">显示号码</a>
									<?php }?>
								<?php } else { ?>
									<?php if ($_smarty_tpl->tpl_vars['link']->value['errorcode']==4) {?>
										<em class="job_details_touch_tel_tip">企业仅对有简历的求职者开放联系方式</em> 
										<a href="<?php echo smarty_function_url(array('m'=>'member','c'=>'expect','act'=>'add'),$_smarty_tpl);?>
" class="job_details_touch_tel_bth">创建简历</a>
									<?php } elseif ($_smarty_tpl->tpl_vars['link']->value['errorcode']==5) {?>
										<!--联系方式1-->
										<em class="job_details_touch_tel_tip">企业已设置投递简历才能查看联系方式</em> 
										<a href="javascript:;"  class="job_details_touch_tel_bth sq_job">投递简历</a>
									<?php } else { ?>
										<?php if ($_smarty_tpl->tpl_vars['link']->value['errorcode']==6) {?>	
											<em class="job_details_touch_tel_tip">只有个人用户才能查看联系方式</em> 
										<?php } elseif ($_smarty_tpl->tpl_vars['link']->value['errorcode']==3) {?>
											<em class="job_details_touch_tel_tip">企业设置登录用户才能查看联系方式</em>
											<a href="javascript:void(0);" onclick="showlogin('1');"	 class="job_details_touch_tel_bth">立即登录</a>
										<?php } else { ?>
											<!--查看联系方式-->
											<a href="javascript:void(0)" onclick="showtel('<?php echo $_GET['id'];?>
');" class="job_details_touch_tel_bth">显示号码</a>
											<span class="job_details_touch_tel_say">联系我时就说是在<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
上看到的</span>
										<?php }?>
									<?php }?>
								<?php }?>
							</div>
						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['link']->value['data']['address']) {?>
							<div class="job_details_touch_add">
								地址：<?php echo $_smarty_tpl->tpl_vars['link']->value['data']['address'];?>
 
								<?php if ($_smarty_tpl->tpl_vars['Info']->value['y']!=''&&$_smarty_tpl->tpl_vars['Info']->value['x']!='') {?> <a href="javascript:showmap('map_show');" class="job_details_touch_add_a" rel="nofollow">查看上班路线</a><?php }?>
							</div>
						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['link']->value['data']['busstops']) {?>
							<div class="job_details_touch_bus">乘车：<?php echo $_smarty_tpl->tpl_vars['link']->value['data']['busstops'];?>
</div>
						<?php }?>	
					<?php }?>	
				</div>
			</div>

			<div class="job_details_left_box">

				<div class="job_details_tit"><span class="job_details_tit_s">职位描述</span><i class="job_details_tit_line"></i></div>
				
				<div class="job_details_describe">
					<?php if ($_smarty_tpl->tpl_vars['department']->value) {?>
						<span class="job_details_describe_yq">招聘部门：<?php echo $_smarty_tpl->tpl_vars['department']->value;?>
</span> 
					<?php }?> 
					<?php if ($_smarty_tpl->tpl_vars['Info']->value['job_number']) {?>
						<span class="job_details_describe_yq">招聘人数：<?php echo $_smarty_tpl->tpl_vars['Info']->value['job_number'];?>
</span> 
					<?php }?> 
			 
					<?php if ($_smarty_tpl->tpl_vars['Info']->value['job_report']) {?>
						<span class="job_details_describe_yq">到岗时间：<?php echo $_smarty_tpl->tpl_vars['Info']->value['job_report'];?>
</span>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['Info']->value['job_age']) {?>
						<span class="job_details_describe_yq">年龄要求：<?php echo $_smarty_tpl->tpl_vars['Info']->value['job_age'];?>
</span>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['Info']->value['job_sex']) {?>
						<span class="job_details_describe_yq">性别要求：<?php echo $_smarty_tpl->tpl_vars['Info']->value['job_sex'];?>
</span>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['Info']->value['job_marriage']) {?>
						<span class="job_details_describe_yq">婚况要求：<?php echo $_smarty_tpl->tpl_vars['Info']->value['job_marriage'];?>
</span>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['Info']->value['lang_info']) {?>
						<div class="">语言要求：
						<?php  $_smarty_tpl->tpl_vars['langlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['langlist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['lang']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['langlist']->key => $_smarty_tpl->tpl_vars['langlist']->value) {
$_smarty_tpl->tpl_vars['langlist']->_loop = true;
?> 
							<span><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['langlist']->value];?>
</span>
						<?php } ?>
						</div>
					<?php }?>
					
					<?php echo $_smarty_tpl->tpl_vars['Info']->value['description'];?>

					
					<div class="clear"></div>
					
					<div class="job_details_tip" >
						求职提醒：<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_shenming'];?>
 
					</div>
					
					<div class="clear"></div>
				
				</div>

			</div>

			<div class="job_details_left_box">
				<div class="job_details_tit"><span class="job_details_tit_s">该公司的其他职位</span><i class="job_details_tit_line"></i></div>
				
				<div class="job_details_com_otherjob">
					<ul>
						<?php  $_smarty_tpl->tpl_vars['job'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['job']->_loop = false;
global $db,$db_config,$config;
		$time = time();
		
		
		//可以做缓存
        $paramer=array("uid"=>"'@Info.uid'","noid"=>"'@Info.id'","namelen"=>"9","limit"=>"10","item"=>"'job'","nocache"=>"")
;
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
        $Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
		include_once  PLUS_PATH."/comrating.cache.php";
		include(CONFIG_PATH."db.data.php"); 
		if($config[sy_web_site]=="1"){
			if($config[province]>0 && $config[province]!=""){
				$paramer[provinceid] = $config[province];
			}
			if($config[cityid]>0 && $config[cityid]!=""){
				$paramer[cityid] = $config[cityid];
			}
			if($config[three_cityid]>0 && $config[three_cityid]!=""){
				$paramer[three_cityid] = $config[three_cityid];
			}
			if($config[hyclass]>0 && $config[hyclass]!=""){
				$paramer[hy]=$config[hyclass];
			}
		}

		
		if($paramer[sdate]){
			$where = "`sdate`>".strtotime("-".intval($paramer[sdate])." day",time())." and `state`=1";
		}else{
			$where = "`state`=1";
		}
		
		//按照UID来查询（按公司地址查询可用GET[id]获取当前公司ID）
		if($paramer[uid]){
			$where .= " AND `uid` = '$paramer[uid]'";
		}
		if($paramer[com_id]){
			$where .= " AND `uid` = '$paramer[com_id]'";
		}

		//是否推荐职位
		if($paramer[rec]){
			
			$where.=" AND `rec_time`>=".time();
			
		}
		//企业认证条件
		if($paramer['cert']){
			$job_uid=array();
			$company=$db->select_all("company","`yyzz_status`=1","`uid`");
			if(is_array($company)){
				foreach($company as $v){
					$job_uid[]=$v['uid'];
				}
			}
			$where.=" and `uid` in (".@implode(",",$job_uid).")";
		}
		//取不包含当前企业的职位
		if($paramer[nouid]){
			$where.= " and `uid`<>$paramer[nouid]";
		}
		//取不包含当前id的职位
		if($paramer[noid]){
			$where.= " and `id`<>$paramer[noid]";
		}
		//是否被锁定
		if($paramer[r_status]){
			$where.= " and `r_status`=2";
		}else{
			$where.= " and `r_status`=1";
		}
		//是否下架职位
		if($paramer[status]){
			$where.= " and `status`='1'";
		}else{
			$where.= " and `status`='0'";
		}
		//公司体制
		if($paramer[pr]){
			$where .= " AND `pr` =$paramer[pr]";
		}
		//公司行业分类
		if($paramer['hy']){
			$where .= " AND `hy` = $paramer[hy]";
		} 
		//职位大类
		if($paramer[job1]){
			$where .= " AND `job1` = $paramer[job1]";
		}
		//职位子类
		if($paramer[job1_son]){
			$where .= " AND `job1_son` = $paramer[job1_son]";
		}
		//职位三级分类
		if($paramer[job_post]){
			$where .= " AND (`job_post` IN ($paramer[job_post]))";
		}
		//您可能感兴趣的职位--个人会员中心
		if($paramer['jobwhere']){
			$where .=" and ".$paramer['jobwhere'];
		}
		//职位分类综合查询
		if($paramer['jobids']){
			$where.= " AND (`job1` = '$paramer[jobids]' OR `job1_son`= '$paramer[jobids]' OR `job_post`='$paramer[jobids]')";
		}
		//职位分类区间,不建议执行该查询
		if($paramer['jobin']){
			$where .= " AND (`job1` IN ($paramer[jobin]) OR `job1_son` IN ($paramer[jobin]) OR `job_post` IN ($paramer[jobin]))";
		}
		//城市大类
		if($paramer[provinceid]){
			$where .= " AND `provinceid` = $paramer[provinceid]";
		}
		//城市子类
		if($paramer['cityid']){
			$where .= " AND (`cityid` IN ($paramer[cityid]))";
		}
		//城市三级子类
		if($paramer['three_cityid']){
			$where .= " AND (`three_cityid` IN ($paramer[three_cityid]))";
		}
		if($paramer['cityin']){
			$where .= " AND `three_cityid` IN ($paramer[cityin])";
		}
		//学历
		if($paramer[edu]){
			$where .= " AND `edu` = $paramer[edu]";
		}
		//工作经验
		if($paramer[exp]){
			$where .= " AND `exp` = $paramer[exp]";
		}
		//到岗时间
		if($paramer[report]){
			$where .= " AND `report` = $paramer[report]";
		}
		//职位性质
		if($paramer[type]){
			$where .= " AND `type` = $paramer[type]";
		}
		//性别
		if($paramer[sex]){
			$where .= " AND `sex` = $paramer[sex]";
		}
		//应届生
		if($paramer[is_graduate]){
			$where .= " AND `is_graduate` = $paramer[is_graduate]";
		}
		//公司规模
		if($paramer[mun]){
			$where .= " AND `mun` = $paramer[mun]";
		}
		 
		if($paramer[minsalary] && $paramer[maxsalary]){
			$where.= " AND (`minsalary`>=".intval($paramer[minsalary])." and `minsalary`<=".intval($paramer[maxsalary])." and `maxsalary`<=".intval($paramer[maxsalary]).") ";
		}elseif($paramer[minsalary]&&!$paramer[maxsalary]){
			$where.= " AND (`minsalary`>=".intval($paramer[minsalary]).") ";
		}elseif(!$paramer[minsalary]&&$paramer[maxsalary]){
			$where.= " AND (`minsalary`<=".intval($paramer[maxsalary])." and `maxsalary`<=".intval($paramer[maxsalary]).") ";
		}

	    //福利待遇
	    $cache_array = $db->cacheget();
		$comclass_name = $cache_array["comclass_name"];
		if($paramer[welfare]){
			$welfarename=$comclass_name[$paramer[welfare]];
            $where .=" AND `welfare` LIKE '%".$welfarename."%' ";
		}
		
		//城市区间,不建议执行该查询
		if($paramer[cityin]){
			$where .= " AND (`provinceid` IN ($paramer[cityin]) OR `cityid` IN ($paramer[cityin]) OR `three_cityid` IN ($paramer[cityin]))";
		}
		//紧急招聘urgent
		if($paramer[urgent]){
			$where.=" AND `urgent_time`>".time();
		}
		//更新时间区间
		if($paramer[uptime]){
			if($paramer[uptime]==1){
				$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
				$where.=" AND lastupdate>$beginToday";
			}else{
				$time=time();
				$uptime = $time-($paramer[uptime]*86400);
				$where.=" AND lastupdate>$uptime";
			}
		}
		//按类似公司名称,不建议进行大数据量操作
		if($paramer[comname]){
			$where.=" AND `com_name` LIKE '%".$paramer[comname]."%'";
		}
		//按公司归属地,只适合查询一级城市分类
		if($paramer[com_pro]){
			$where.=" AND `com_provinceid` ='".$paramer[com_pro]."'";
		}
		//按照职位名称匹配
		if($paramer[keyword]){
			$where1[]="`name` LIKE '%".$paramer[keyword]."%'";
			$where1[]="`com_name` LIKE '%".$paramer[keyword]."%'";
			include  PLUS_PATH."/city.cache.php";
			foreach($city_name as $k=>$v){
				if(strpos($v,$paramer[keyword])!==false){
					$cityid[]=$k;
				}
			}
			if(is_array($cityid)){
				foreach($cityid as $value){
					$class[]= "(provinceid = '".$value."' or cityid = '".$value."')";
				}
				$where1[]=@implode(" or ",$class);
			}
			$where.=" AND (".@implode(" or ",$where1).")";
		}

		//多选职位
		if($paramer["job"]){
			$where.=" AND `job_post` in ($paramer[job])";
		}
		//置顶招聘
		if($paramer[bid]){
			if($config[joblist_top]!=1){
				$paramer[limit] = 5;
			}
			$where.="  and `xsdate`>'".time()."'";
		} 
		
		//自定义查询条件，默认取代上面任何参数直接使用该语句
		if($paramer[where]){
			$where = $paramer[where];
		}

		//查询条数
		$limit = '';
		if($paramer[limit]){

			$limit = " limit ".$paramer[limit];
		}
		if($paramer[ispage]){
			$limit = PageNav($paramer,$_GET,"company_job",$where,$Purl,"",$paramer[islt]?$paramer[islt]:"6",$_smarty_tpl);        
		}

		//排序字段默认为更新时间
		//置顶设置为随机5条时，随机查询
		if($paramer[bid] && $paramer[limit]){
			$order = " ORDER BY rand() ";
		}else{
			if($paramer[order] && $paramer[order]!="lastdate"){
				$order = " ORDER BY ".str_replace("'","",$paramer[order])."  ";
			}else{
				$order = " ORDER BY `lastupdate` ";
			}
		}
		//排序规则 默认为倒序
		if($paramer[sort]){
			$sort = $paramer[sort];
		}else{
			$sort = " DESC";
		} 
		$where.=$order.$sort;
		 
		$job = $db->select_all("company_job",$where.$limit);

		if(is_array($job) && !empty($job)){
			//处理类别字段
			$cache_array = $db->cacheget();
			$comuid=$jobid=array();
			foreach($job as $key=>$value){
				if(in_array($value['uid'],$comuid)==false){$comuid[] = $value['uid'];}
				if(in_array($value['id'],$jobid)==false){$jobid[] = $value['id'];} 
			}
			$comuids = @implode(',',$comuid);
			$jobids = @implode(',',$jobid);
			
			if($comuids){
				$r_uids=$db->select_all("company","`uid` IN (".$comuids.")","`uid`,`yyzz_status`,`logo`,`logo_status`,`pr`,`hy`,`mun`,`shortname`,`welfare`,`hotstart`,`hottime`");
				if(is_array($r_uids)){
					foreach($r_uids as $key=>$value){
						if($value[shortname]){
    						$value['shortname_n'] = $value[shortname];
    					}
						if(!$value['logo'] || $value['logo_status']!=0){
							$value['logo'] = checkpic("",$config['sy_unit_icon']);
						}else{
							$value['logo']= checkpic($value['logo']);
						}
						$value['pr_n'] = $cache_array['comclass_name'][$value[pr]];
						$value['hy_n'] = $cache_array['industry_name'][$value[hy]];
						$value['mun_n'] = $cache_array['comclass_name'][$value[mun]];
						if($value['hotstart']<=time() && $value['hottime']>=time()){
							$value['hotlogo'] = 1;
						}
						$r_uid[$value['uid']] = $value;
					}
				}
			}
			
 			if($paramer[bid]){
				$noids=array();
			}	
			foreach($job as $key=>$value){

				if($paramer[bid]){
					$noids[] = $value[id];
				}
				//筛除重复
				if($paramer[noids]==1 && !empty($noids) && in_array($value['id'],$noids)){
					unset($job[$key]);
					continue;
				}else{
					$job[$key] = $db->array_action($value,$cache_array);
					$job[$key][stime] = date("Y-m-d",$value[sdate]);
					$job[$key][etime] = date("Y-m-d",$value[edate]);
					if($arr_data['sex'][$value['sex']]){
						$job[$key][sex_n]=$arr_data['sex'][$value['sex']];
					}
					$job[$key][lastupdate] = date("Y-m-d",$value[lastupdate]);
					if($value[minsalary]&&$value[maxsalary]){
						$job[$key][job_salary] =$value[minsalary]."-".$value[maxsalary];
					}elseif($value[minsalary]){
						$job[$key][job_salary] =$value[minsalary]."以上";
					}else{
						$job[$key][job_salary] ="面议";
					}
					if($r_uid[$value['uid']][shortname]){
						$job[$key][com_name] =$r_uid[$value['uid']][shortname];
					}
					$job[$key][yyzz_status] =$r_uid[$value['uid']][yyzz_status];
					$job[$key][logo] =$r_uid[$value['uid']][logo];
					$job[$key][pr_n] =$r_uid[$value['uid']][pr_n];
					$job[$key][hy_n] =$r_uid[$value['uid']][hy_n];
					$job[$key][mun_n] =$r_uid[$value['uid']][mun_n];
					$job[$key][hotlogo] =$r_uid[$value['uid']][hotlogo];
					$time=$value['lastupdate'];
					//今天开始时间戳
					$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
					//昨天开始时间戳
					$beginYesterday=mktime(0,0,0,date('m'),date('d')-1,date('Y'));
					//一周内时间戳
					$week=strtotime(date("Y-m-d",strtotime("-1 week")));
					if($time>$week && $time<$beginYesterday){
						$job[$key]['time'] ="一周内";
					}elseif($time>$beginYesterday && $time<$beginToday){
						$job[$key]['time'] ="昨天";
					}elseif($time>$beginToday){	
						$job[$key]['time'] = date("H:i",$value['lastupdate']);
						$job[$key]['redtime'] =1;
					}else{
						$job[$key]['time'] = date("Y-m-d",$value['lastupdate']);
					}
    
                     // 前天
    				$beforeYesterday=mktime(0,0,0,date('m'),date('d')-2,date('Y'));

					if($value['sdate']>$beforeYesterday){
						$job[$key]['newtime'] =1;
					}
					//获得福利待遇名称
					if($value[welfare]){
						$welfareList = @explode(',',$value[welfare]);

						if(!empty($welfareList)){
							$job[$key][welfarename] =$welfareList;
						}
					}
					//截取公司名称
					if($paramer[comlen]){
						if($r_uid[$value['uid']][shortname]){
							$job[$key][com_n] = mb_substr($r_uid[$value['uid']][shortname],0,$paramer[comlen],"utf-8");
						}else{
							$job[$key][com_n] = mb_substr($value['com_name'],0,$paramer[comlen],"utf-8");
						}
					}
					//截取职位名称
					if($paramer[namelen]){
						if($value['rec_time']>time()){
							$job[$key][name_n] = "<font color='red'>".mb_substr($value['name'],0,$paramer[namelen],"utf-8")."</font>";
						}else{
							$job[$key][name_n] = mb_substr($value['name'],0,$paramer[namelen],"utf-8");
						}
					}else{
						if($value['rec_time']>time()){
							$job[$key]['name_n'] = "<font color='red'>".$value['name']."</font>";
						}
					}
					//构建职位伪静态URL
					$job[$key][job_url] = Url("job",array("c"=>"comapply","id"=>$value[id]),"1");
					//构建企业伪静态URL
					$job[$key][com_url] = Url("company",array("c"=>"show","id"=>$value[uid]));
					
					foreach($comrat as $k=>$v){
						if($value[rating]==$v[id]){
							$job[$key][color] = str_replace("#","",$v[com_color]);
							if($v[com_pic]){
								$job[$key][ratlogo] = checkpic($v[com_pic]);
							}
							$job[$key][ratname] = $v[name];
						}
					}
					if($paramer[keyword]){
						$job[$key][name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[name]);
						$job[$key][com_name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[com_name]);
						$job[$key][name_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$job[$key][name_n]);
						$job[$key][com_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$job[$key][com_n]);
						$job[$key][job_city_one]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[provinceid]]);
						$job[$key][job_city_two]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[cityid]]);
					}
				}
			}
			if(is_array($job)){
				if($paramer[keyword]!=""&&!empty($job)){
					addkeywords('3',$paramer[keyword]);
				}
			}
		}$job = $job; if (!is_array($job) && !is_object($job)) { settype($job, 'array');}
foreach ($job as $_smarty_tpl->tpl_vars['job']->key => $_smarty_tpl->tpl_vars['job']->value) {
$_smarty_tpl->tpl_vars['job']->_loop = true;
?>
						<li>
							<div class="job_details_com_otherjob_l">
								<div class="job_details_com_otherjob_name"><a href="<?php echo $_smarty_tpl->tpl_vars['job']->value['job_url'];?>
" target="_blank" class="" title="<?php echo $_smarty_tpl->tpl_vars['job']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['job']->value['name'];?>
</a></div>
								
								<div class="job_details_com_otherjob_info"><?php echo $_smarty_tpl->tpl_vars['job']->value['job_exp'];?>
经验<span class="job_details_line">|</span><?php echo $_smarty_tpl->tpl_vars['job']->value['job_edu'];?>
学历 </div> 
							</div>
					
							<div class="job_details_com_otherjob_c">
								<div class="job_details_com_otherjob_xz"><?php echo $_smarty_tpl->tpl_vars['job']->value['job_salary'];
if ($_smarty_tpl->tpl_vars['job']->value['job_salary']!='面议') {?>元/月<?php }?></div>  
								<div class="job_details_com_otherjob_city"><?php echo $_smarty_tpl->tpl_vars['job']->value['job_city_one'];?>
 - <?php echo $_smarty_tpl->tpl_vars['job']->value['job_city_two'];?>
</div>
							</div>

							<div class="job_details_com_otherjob_r">
								<div class="job_details_com_otherjob_time"> 
									<?php if ($_smarty_tpl->tpl_vars['job']->value['time']=='昨天'||$_smarty_tpl->tpl_vars['job']->value['redtime']=='1') {?>
									<span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['job']->value['time'];?>
</span> 
									<?php } else { ?> 
									<?php echo $_smarty_tpl->tpl_vars['job']->value['time'];?>
 
									<?php }?>
								</div>
								<a  href="<?php echo $_smarty_tpl->tpl_vars['job']->value['job_url'];?>
" target="_blank" class="job_details_com_otherjob_sq">申请</a>
							</div>
						</li>
						<?php } ?>
						<?php if (!$_smarty_tpl->tpl_vars['job']->value) {?>
							<div class="evaluate_pj_no">该企业暂无其他职位!</div>
						<?php }?>
					</ul>
				</div>
			</div>

			<div class="job_details_left_box">
				
				<div class="job_details_tit">
					<span class="job_details_tit_s">你可能感兴趣的职位</span>
					<i class="job_details_tit_line"></i>
					<a href="<?php echo smarty_function_url(array('m'=>'job'),$_smarty_tpl);?>
" class="job_details_more">搜索更多相似职位 ></a>
				</div>
				<div class="job_details_like">
					<ul>
						<?php  $_smarty_tpl->tpl_vars['job_jiaa'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['job_jiaa']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
global $db,$db_config,$config;
		$time = time();
		
		
		//可以做缓存
        $paramer=array("limit"=>"9","noid"=>"'@Info.id'","nouid"=>"'@Info.uid'","jobids"=>"'@Info.job1'","namelen"=>"6","item"=>"'job_jiaa'","key"=>"'key'","nocache"=>"")
;
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
        $Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
		include_once  PLUS_PATH."/comrating.cache.php";
		include(CONFIG_PATH."db.data.php"); 
		if($config[sy_web_site]=="1"){
			if($config[province]>0 && $config[province]!=""){
				$paramer[provinceid] = $config[province];
			}
			if($config[cityid]>0 && $config[cityid]!=""){
				$paramer[cityid] = $config[cityid];
			}
			if($config[three_cityid]>0 && $config[three_cityid]!=""){
				$paramer[three_cityid] = $config[three_cityid];
			}
			if($config[hyclass]>0 && $config[hyclass]!=""){
				$paramer[hy]=$config[hyclass];
			}
		}

		
		if($paramer[sdate]){
			$where = "`sdate`>".strtotime("-".intval($paramer[sdate])." day",time())." and `state`=1";
		}else{
			$where = "`state`=1";
		}
		
		//按照UID来查询（按公司地址查询可用GET[id]获取当前公司ID）
		if($paramer[uid]){
			$where .= " AND `uid` = '$paramer[uid]'";
		}
		if($paramer[com_id]){
			$where .= " AND `uid` = '$paramer[com_id]'";
		}

		//是否推荐职位
		if($paramer[rec]){
			
			$where.=" AND `rec_time`>=".time();
			
		}
		//企业认证条件
		if($paramer['cert']){
			$job_uid=array();
			$company=$db->select_all("company","`yyzz_status`=1","`uid`");
			if(is_array($company)){
				foreach($company as $v){
					$job_uid[]=$v['uid'];
				}
			}
			$where.=" and `uid` in (".@implode(",",$job_uid).")";
		}
		//取不包含当前企业的职位
		if($paramer[nouid]){
			$where.= " and `uid`<>$paramer[nouid]";
		}
		//取不包含当前id的职位
		if($paramer[noid]){
			$where.= " and `id`<>$paramer[noid]";
		}
		//是否被锁定
		if($paramer[r_status]){
			$where.= " and `r_status`=2";
		}else{
			$where.= " and `r_status`=1";
		}
		//是否下架职位
		if($paramer[status]){
			$where.= " and `status`='1'";
		}else{
			$where.= " and `status`='0'";
		}
		//公司体制
		if($paramer[pr]){
			$where .= " AND `pr` =$paramer[pr]";
		}
		//公司行业分类
		if($paramer['hy']){
			$where .= " AND `hy` = $paramer[hy]";
		} 
		//职位大类
		if($paramer[job1]){
			$where .= " AND `job1` = $paramer[job1]";
		}
		//职位子类
		if($paramer[job1_son]){
			$where .= " AND `job1_son` = $paramer[job1_son]";
		}
		//职位三级分类
		if($paramer[job_post]){
			$where .= " AND (`job_post` IN ($paramer[job_post]))";
		}
		//您可能感兴趣的职位--个人会员中心
		if($paramer['jobwhere']){
			$where .=" and ".$paramer['jobwhere'];
		}
		//职位分类综合查询
		if($paramer['jobids']){
			$where.= " AND (`job1` = '$paramer[jobids]' OR `job1_son`= '$paramer[jobids]' OR `job_post`='$paramer[jobids]')";
		}
		//职位分类区间,不建议执行该查询
		if($paramer['jobin']){
			$where .= " AND (`job1` IN ($paramer[jobin]) OR `job1_son` IN ($paramer[jobin]) OR `job_post` IN ($paramer[jobin]))";
		}
		//城市大类
		if($paramer[provinceid]){
			$where .= " AND `provinceid` = $paramer[provinceid]";
		}
		//城市子类
		if($paramer['cityid']){
			$where .= " AND (`cityid` IN ($paramer[cityid]))";
		}
		//城市三级子类
		if($paramer['three_cityid']){
			$where .= " AND (`three_cityid` IN ($paramer[three_cityid]))";
		}
		if($paramer['cityin']){
			$where .= " AND `three_cityid` IN ($paramer[cityin])";
		}
		//学历
		if($paramer[edu]){
			$where .= " AND `edu` = $paramer[edu]";
		}
		//工作经验
		if($paramer[exp]){
			$where .= " AND `exp` = $paramer[exp]";
		}
		//到岗时间
		if($paramer[report]){
			$where .= " AND `report` = $paramer[report]";
		}
		//职位性质
		if($paramer[type]){
			$where .= " AND `type` = $paramer[type]";
		}
		//性别
		if($paramer[sex]){
			$where .= " AND `sex` = $paramer[sex]";
		}
		//应届生
		if($paramer[is_graduate]){
			$where .= " AND `is_graduate` = $paramer[is_graduate]";
		}
		//公司规模
		if($paramer[mun]){
			$where .= " AND `mun` = $paramer[mun]";
		}
		 
		if($paramer[minsalary] && $paramer[maxsalary]){
			$where.= " AND (`minsalary`>=".intval($paramer[minsalary])." and `minsalary`<=".intval($paramer[maxsalary])." and `maxsalary`<=".intval($paramer[maxsalary]).") ";
		}elseif($paramer[minsalary]&&!$paramer[maxsalary]){
			$where.= " AND (`minsalary`>=".intval($paramer[minsalary]).") ";
		}elseif(!$paramer[minsalary]&&$paramer[maxsalary]){
			$where.= " AND (`minsalary`<=".intval($paramer[maxsalary])." and `maxsalary`<=".intval($paramer[maxsalary]).") ";
		}

	    //福利待遇
	    $cache_array = $db->cacheget();
		$comclass_name = $cache_array["comclass_name"];
		if($paramer[welfare]){
			$welfarename=$comclass_name[$paramer[welfare]];
            $where .=" AND `welfare` LIKE '%".$welfarename."%' ";
		}
		
		//城市区间,不建议执行该查询
		if($paramer[cityin]){
			$where .= " AND (`provinceid` IN ($paramer[cityin]) OR `cityid` IN ($paramer[cityin]) OR `three_cityid` IN ($paramer[cityin]))";
		}
		//紧急招聘urgent
		if($paramer[urgent]){
			$where.=" AND `urgent_time`>".time();
		}
		//更新时间区间
		if($paramer[uptime]){
			if($paramer[uptime]==1){
				$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
				$where.=" AND lastupdate>$beginToday";
			}else{
				$time=time();
				$uptime = $time-($paramer[uptime]*86400);
				$where.=" AND lastupdate>$uptime";
			}
		}
		//按类似公司名称,不建议进行大数据量操作
		if($paramer[comname]){
			$where.=" AND `com_name` LIKE '%".$paramer[comname]."%'";
		}
		//按公司归属地,只适合查询一级城市分类
		if($paramer[com_pro]){
			$where.=" AND `com_provinceid` ='".$paramer[com_pro]."'";
		}
		//按照职位名称匹配
		if($paramer[keyword]){
			$where1[]="`name` LIKE '%".$paramer[keyword]."%'";
			$where1[]="`com_name` LIKE '%".$paramer[keyword]."%'";
			include  PLUS_PATH."/city.cache.php";
			foreach($city_name as $k=>$v){
				if(strpos($v,$paramer[keyword])!==false){
					$cityid[]=$k;
				}
			}
			if(is_array($cityid)){
				foreach($cityid as $value){
					$class[]= "(provinceid = '".$value."' or cityid = '".$value."')";
				}
				$where1[]=@implode(" or ",$class);
			}
			$where.=" AND (".@implode(" or ",$where1).")";
		}

		//多选职位
		if($paramer["job"]){
			$where.=" AND `job_post` in ($paramer[job])";
		}
		//置顶招聘
		if($paramer[bid]){
			if($config[joblist_top]!=1){
				$paramer[limit] = 5;
			}
			$where.="  and `xsdate`>'".time()."'";
		} 
		
		//自定义查询条件，默认取代上面任何参数直接使用该语句
		if($paramer[where]){
			$where = $paramer[where];
		}

		//查询条数
		$limit = '';
		if($paramer[limit]){

			$limit = " limit ".$paramer[limit];
		}
		if($paramer[ispage]){
			$limit = PageNav($paramer,$_GET,"company_job",$where,$Purl,"",$paramer[islt]?$paramer[islt]:"6",$_smarty_tpl);        
		}

		//排序字段默认为更新时间
		//置顶设置为随机5条时，随机查询
		if($paramer[bid] && $paramer[limit]){
			$order = " ORDER BY rand() ";
		}else{
			if($paramer[order] && $paramer[order]!="lastdate"){
				$order = " ORDER BY ".str_replace("'","",$paramer[order])."  ";
			}else{
				$order = " ORDER BY `lastupdate` ";
			}
		}
		//排序规则 默认为倒序
		if($paramer[sort]){
			$sort = $paramer[sort];
		}else{
			$sort = " DESC";
		} 
		$where.=$order.$sort;
		 
		$job_jiaa = $db->select_all("company_job",$where.$limit);

		if(is_array($job_jiaa) && !empty($job_jiaa)){
			//处理类别字段
			$cache_array = $db->cacheget();
			$comuid=$jobid=array();
			foreach($job_jiaa as $key=>$value){
				if(in_array($value['uid'],$comuid)==false){$comuid[] = $value['uid'];}
				if(in_array($value['id'],$jobid)==false){$jobid[] = $value['id'];} 
			}
			$comuids = @implode(',',$comuid);
			$jobids = @implode(',',$jobid);
			
			if($comuids){
				$r_uids=$db->select_all("company","`uid` IN (".$comuids.")","`uid`,`yyzz_status`,`logo`,`logo_status`,`pr`,`hy`,`mun`,`shortname`,`welfare`,`hotstart`,`hottime`");
				if(is_array($r_uids)){
					foreach($r_uids as $key=>$value){
						if($value[shortname]){
    						$value['shortname_n'] = $value[shortname];
    					}
						if(!$value['logo'] || $value['logo_status']!=0){
							$value['logo'] = checkpic("",$config['sy_unit_icon']);
						}else{
							$value['logo']= checkpic($value['logo']);
						}
						$value['pr_n'] = $cache_array['comclass_name'][$value[pr]];
						$value['hy_n'] = $cache_array['industry_name'][$value[hy]];
						$value['mun_n'] = $cache_array['comclass_name'][$value[mun]];
						if($value['hotstart']<=time() && $value['hottime']>=time()){
							$value['hotlogo'] = 1;
						}
						$r_uid[$value['uid']] = $value;
					}
				}
			}
			
 			if($paramer[bid]){
				$noids=array();
			}	
			foreach($job_jiaa as $key=>$value){

				if($paramer[bid]){
					$noids[] = $value[id];
				}
				//筛除重复
				if($paramer[noids]==1 && !empty($noids) && in_array($value['id'],$noids)){
					unset($job_jiaa[$key]);
					continue;
				}else{
					$job_jiaa[$key] = $db->array_action($value,$cache_array);
					$job_jiaa[$key][stime] = date("Y-m-d",$value[sdate]);
					$job_jiaa[$key][etime] = date("Y-m-d",$value[edate]);
					if($arr_data['sex'][$value['sex']]){
						$job_jiaa[$key][sex_n]=$arr_data['sex'][$value['sex']];
					}
					$job_jiaa[$key][lastupdate] = date("Y-m-d",$value[lastupdate]);
					if($value[minsalary]&&$value[maxsalary]){
						$job_jiaa[$key][job_salary] =$value[minsalary]."-".$value[maxsalary];
					}elseif($value[minsalary]){
						$job_jiaa[$key][job_salary] =$value[minsalary]."以上";
					}else{
						$job_jiaa[$key][job_salary] ="面议";
					}
					if($r_uid[$value['uid']][shortname]){
						$job_jiaa[$key][com_name] =$r_uid[$value['uid']][shortname];
					}
					$job_jiaa[$key][yyzz_status] =$r_uid[$value['uid']][yyzz_status];
					$job_jiaa[$key][logo] =$r_uid[$value['uid']][logo];
					$job_jiaa[$key][pr_n] =$r_uid[$value['uid']][pr_n];
					$job_jiaa[$key][hy_n] =$r_uid[$value['uid']][hy_n];
					$job_jiaa[$key][mun_n] =$r_uid[$value['uid']][mun_n];
					$job_jiaa[$key][hotlogo] =$r_uid[$value['uid']][hotlogo];
					$time=$value['lastupdate'];
					//今天开始时间戳
					$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
					//昨天开始时间戳
					$beginYesterday=mktime(0,0,0,date('m'),date('d')-1,date('Y'));
					//一周内时间戳
					$week=strtotime(date("Y-m-d",strtotime("-1 week")));
					if($time>$week && $time<$beginYesterday){
						$job_jiaa[$key]['time'] ="一周内";
					}elseif($time>$beginYesterday && $time<$beginToday){
						$job_jiaa[$key]['time'] ="昨天";
					}elseif($time>$beginToday){	
						$job_jiaa[$key]['time'] = date("H:i",$value['lastupdate']);
						$job_jiaa[$key]['redtime'] =1;
					}else{
						$job_jiaa[$key]['time'] = date("Y-m-d",$value['lastupdate']);
					}
    
                     // 前天
    				$beforeYesterday=mktime(0,0,0,date('m'),date('d')-2,date('Y'));

					if($value['sdate']>$beforeYesterday){
						$job_jiaa[$key]['newtime'] =1;
					}
					//获得福利待遇名称
					if($value[welfare]){
						$welfareList = @explode(',',$value[welfare]);

						if(!empty($welfareList)){
							$job_jiaa[$key][welfarename] =$welfareList;
						}
					}
					//截取公司名称
					if($paramer[comlen]){
						if($r_uid[$value['uid']][shortname]){
							$job_jiaa[$key][com_n] = mb_substr($r_uid[$value['uid']][shortname],0,$paramer[comlen],"utf-8");
						}else{
							$job_jiaa[$key][com_n] = mb_substr($value['com_name'],0,$paramer[comlen],"utf-8");
						}
					}
					//截取职位名称
					if($paramer[namelen]){
						if($value['rec_time']>time()){
							$job_jiaa[$key][name_n] = "<font color='red'>".mb_substr($value['name'],0,$paramer[namelen],"utf-8")."</font>";
						}else{
							$job_jiaa[$key][name_n] = mb_substr($value['name'],0,$paramer[namelen],"utf-8");
						}
					}else{
						if($value['rec_time']>time()){
							$job_jiaa[$key]['name_n'] = "<font color='red'>".$value['name']."</font>";
						}
					}
					//构建职位伪静态URL
					$job_jiaa[$key][job_url] = Url("job",array("c"=>"comapply","id"=>$value[id]),"1");
					//构建企业伪静态URL
					$job_jiaa[$key][com_url] = Url("company",array("c"=>"show","id"=>$value[uid]));
					
					foreach($comrat as $k=>$v){
						if($value[rating]==$v[id]){
							$job_jiaa[$key][color] = str_replace("#","",$v[com_color]);
							if($v[com_pic]){
								$job_jiaa[$key][ratlogo] = checkpic($v[com_pic]);
							}
							$job_jiaa[$key][ratname] = $v[name];
						}
					}
					if($paramer[keyword]){
						$job_jiaa[$key][name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[name]);
						$job_jiaa[$key][com_name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[com_name]);
						$job_jiaa[$key][name_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$job_jiaa[$key][name_n]);
						$job_jiaa[$key][com_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$job_jiaa[$key][com_n]);
						$job_jiaa[$key][job_city_one]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[provinceid]]);
						$job_jiaa[$key][job_city_two]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[cityid]]);
					}
				}
			}
			if(is_array($job_jiaa)){
				if($paramer[keyword]!=""&&!empty($job_jiaa)){
					addkeywords('3',$paramer[keyword]);
				}
			}
		}$job_jiaa = $job_jiaa; if (!is_array($job_jiaa) && !is_object($job_jiaa)) { settype($job_jiaa, 'array');}
foreach ($job_jiaa as $_smarty_tpl->tpl_vars['job_jiaa']->key => $_smarty_tpl->tpl_vars['job_jiaa']->value) {
$_smarty_tpl->tpl_vars['job_jiaa']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['job_jiaa']->key;
?>
							<li>
								<div class="job_details_likejobname"><a href="<?php echo $_smarty_tpl->tpl_vars['job_jiaa']->value['job_url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['job_jiaa']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['job_jiaa']->value['name'];?>
</a></div>
								<div class="job_details_likejobxz"><?php echo $_smarty_tpl->tpl_vars['job_jiaa']->value['job_salary'];?>
元/月</div> 
								<div class="job_details_likecomname"><a href="<?php echo $_smarty_tpl->tpl_vars['job_jiaa']->value['com_url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['job_jiaa']->value['com_name'];?>
"><?php echo mb_substr($_smarty_tpl->tpl_vars['job_jiaa']->value['com_name'],0,13,'utf-8');?>
</a></div> 
								<a href="<?php echo $_smarty_tpl->tpl_vars['job_jiaa']->value['job_url'];?>
" class="job_details_likesq">申请</a>
							</li>
						<?php } ?>
					</ul>
				</div>
			</div>

			<div class="job_details_left_box">
				<div class="maincenters ">
					<div id="sortBoxs">
						
						<div class="search_menuBoxs">
							<ul>
								<li class="search_curs" id="typezb" onmousemove="searchtype('zb');">周边招聘<i class="search_curs_line"></i></li>
								<li id="typezp" onmousemove="searchtype('zp');">招聘频道<i class="search_curs_line"></i></li>
								<li id="typerm" onmousemove="searchtype('rm');">热门搜索<i class="search_curs_line"></i></li>
							</ul>
						</div>
						
						<div class="contentBoxs"> 
							
							<!-- 周边招聘 start-->
							<div class="contentBox_conts " id="type_zb">
								<div class="Industry_lists"> 
									<?php if ($_smarty_tpl->tpl_vars['Info']->value['three_cityid']) {?> 
									
										<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value[$_smarty_tpl->tpl_vars['Info']->value['cityid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?> 
											<a href="<?php echo smarty_function_listurl(array('provinceid'=>$_smarty_tpl->tpl_vars['Info']->value['provinceid'],'cityid'=>$_smarty_tpl->tpl_vars['Info']->value['cityid'],'type'=>'three_cityid','v'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
招聘</a> 
										<?php } ?> 

									<?php } elseif ($_smarty_tpl->tpl_vars['Info']->value['cityid']) {?> 
									
										<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value[$_smarty_tpl->tpl_vars['Info']->value['provinceid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?> 
											<a href="<?php echo smarty_function_listurl(array('type'=>'cityid','v'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
招聘</a> 
										<?php } ?> 

									<?php } else { ?> 

										<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['city_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?> 
											<a href="<?php echo smarty_function_listurl(array('type'=>'provinceid','v'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
招聘</a> 
										<?php } ?> 
									<?php }?> 
								</div>
							</div>
							<!-- 周边招聘 end--> 

							<!-- 招聘频道 start-->
							<div class="contentBox_conts none" id="type_zp">
								<div class="Industry_lists">
									<?php if ($_smarty_tpl->tpl_vars['Info']->value['job_post']) {?> 
									
										<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['job_type']->value[$_smarty_tpl->tpl_vars['Info']->value['job1_son']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?> 
											<a href="<?php echo smarty_function_listurl(array('job1'=>$_smarty_tpl->tpl_vars['Info']->value['job1'],'job1_son'=>$_smarty_tpl->tpl_vars['Info']->value['job1_son'],'type'=>'job_post','v'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
招聘</a> 
										<?php } ?> 
									
									<?php } elseif ($_smarty_tpl->tpl_vars['Info']->value['job1_son']) {?> 
									
										<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['job_type']->value[$_smarty_tpl->tpl_vars['Info']->value['job1']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
											<a href="<?php echo smarty_function_listurl(array('job1'=>$_smarty_tpl->tpl_vars['Info']->value['job1'],'type'=>'job1_son','v'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
招聘</a> 
										<?php } ?>

									<?php } else { ?> {
										<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['job_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?> 
											<a href="<?php echo smarty_function_listurl(array('type'=>'job1','v'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
招聘</a> 
										<?php } ?> 
									<?php }?> 
								</div>
							</div>
							<!--  招聘频道 end--> 

							<!-- 热门搜索 start-->
							<div class="contentBox_conts none" id="type_rm">
								<div class="Industry_lists">
									<?php  $_smarty_tpl->tpl_vars['keylist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['keylist']->_loop = false;
global $config;$paramer=array("limit"=>"20","recom"=>"1","type"=>"3","item"=>"'keylist'","nocache"=>"")
;$list=array();
        
        $ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		//是否推荐
		if($paramer[recom]){
			$tuijian = 1;
		}
		//类别
		if($paramer[type]){
			$type = $paramer[type];
		}
		//查询条数
		if($paramer[limit]){
			$limit=$paramer[limit];
		}else{
			$limit=5;
		}
		include PLUS_PATH."/keyword.cache.php";
		if($paramer[iswap]){
			$wap = "/wap";
		}else{
			$index =1;
		}
		if(is_array($keyword)){
			if($paramer[iswap]){
				$i=0;
				foreach($keyword as $k=>$v){
					if($tuijian && $v[tuijian]!=1){
						continue;
					}
					if($type && $v[type]!=$type){
						continue;
					}

					$i++;
					if($v[type]=="1"){
						$v[url] = Url("wap",array("c"=>"once","keyword"=>$v['key_name']));
						$v[type_name]='店铺招聘';
					}elseif($v['type']=="13"){
						$v['url'] = Url("wap",array("c"=>"tiny","keyword"=>$v['key_name']));
						$v['type_name']='普工简历';
					}elseif($v[type]=="3"){
						$v[url] = Url("wap",array("c"=>"job","keyword"=>$v['key_name']));
						$v[type_name]='职位';
					}elseif($v['type']=="4"){
						$v['url'] = Url("wap",array("c"=>"company","keyword"=>$v['key_name']));
						$v['type_name']='公司';
					}elseif($v['type']=="5"){
						$v['url'] = Url("wap",array("c"=>"resume","keyword"=>$v['key_name']));
						$v['type_name']='人才';
					}
					$v['key_title']=$v['key_name'];
					if($v['color']){
						$v['key_name']="<font color='".$v['color']."'>".$v['key_name']."</font>";
					}
					$list[] = $v;
					if($i==$limit){
						break;
					}
				}
			}else{
				$i=0;
				foreach($keyword as $k=>$v){
					if($tuijian && $v['tuijian']!=1){
						continue;
					}
					if($type && $v['type']!=$type){
						continue;
					}
					$i++;
					if($v['type']=="1"){
						$v['url'] = Url("once",array("keyword"=>$v['key_name']));
						$v['type_name']='店铺招聘';
					}elseif($v['type']=="2"){
						$v['url'] = Url("part",array("keyword"=>$v['key_name']));
						$v['type_name']='兼职';
					}elseif($v['type']=="13"){
						$v['url'] = Url("tiny",array("keyword"=>$v['key_name']));
						$v['type_name']='普工简历';
					}elseif($v['type']=="3"){
						$v['url'] = Url("job",array("c"=>"search","keyword"=>$v['key_name']));
						$v['type_name']='职位';
					}elseif($v['type']=="4"){
						$v['url'] = Url("company",array("keyword"=>$v['key_name']));
						$v['type_name']='公司';
					}elseif($v['type']=="5"){
						$v['url'] = Url("resume",array("c"=>"search","keyword"=>$v['key_name']));
						$v['type_name']='人才';
					}elseif($v['type']=="6"){
						$v['url'] = Url("lietou",array("c"=>"service","keyword"=>$v['key_name']));
						$v['type_name']='猎头';
					}elseif($v['type']=="7"){
						$v['url'] = Url("lietou",array("c"=>"post","keyword"=>$v['key_name']));
						$v['type_name']='猎头职位';
					}else if($v['type']=="12"){
						$v['url'] = Url("ask",array("c"=>"search","keyword"=>$v['key_name']));
						$v['type_name']='问答';
					}
					$v['key_title']=$v['key_name'];
					if($v['color']){
						$v['key_name']="<font color='".$v['color']."'>".$v['key_name']."</font>";
					}

					$list[] = $v;
					if($i==$limit){
						break;
					}
				}
			}
		}$list = $list; if (!is_array($list) && !is_object($list)) { settype($list, 'array');}
foreach ($list as $_smarty_tpl->tpl_vars['keylist']->key => $_smarty_tpl->tpl_vars['keylist']->value) {
$_smarty_tpl->tpl_vars['keylist']->_loop = true;
?> 
										<a href="<?php echo $_smarty_tpl->tpl_vars['keylist']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['keylist']->value['key_name'];?>
</a> 
									<?php } ?> 
								</div>
							</div>
							<!-- 热门搜索 end--> 
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="job_details_right">
         
			<div class="Compply_right_qy" style="margin-top:20px;">
			<div class="Compply_logo"> 
				<img src="<?php echo $_smarty_tpl->tpl_vars['Info']->value['logo'];?>
" width="140" height="140" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_unit_icon'];?>
',2);" alt="<?php echo $_smarty_tpl->tpl_vars['Info']->value['com_name'];?>
" /> 
			</div>
			<div class="Compply_right_name"> 
            
				<a href="<?php echo $_smarty_tpl->tpl_vars['Info']->value['com_url'];?>
" target="_blank" class=""><?php echo mb_substr($_smarty_tpl->tpl_vars['Info']->value['com_name'],0,13,'utf-8');?>
</a>
                	<?php if ($_smarty_tpl->tpl_vars['Info']->value['all_name']) {?>
							<?php echo $_smarty_tpl->tpl_vars['Info']->value['all_name'];?>

						<?php }?>
	
			</div>

			<?php if ($_smarty_tpl->tpl_vars['Info']->value['all_name']) {?>
			<div class="Compply_right_name_all"><?php echo $_smarty_tpl->tpl_vars['Info']->value['all_name'];?>
</div>
			<?php }?>
           	<div class="job_details_cominfo_tb"> 
						
						<?php if ($_smarty_tpl->tpl_vars['Info']->value['hotlogo']==1) {?><span class="Compply_mqicon" title="名企"></span><?php }?>
						
						<?php if ($_smarty_tpl->tpl_vars['comrat']->value['com_pic']!="0"&&$_smarty_tpl->tpl_vars['comrat']->value['com_pic']!='') {?>
							<img src="<?php echo $_smarty_tpl->tpl_vars['comrat']->value['com_pic'];?>
" width="18" height="18" alt="会员等级" /> 
						<?php }?>  
						
						<?php if ($_smarty_tpl->tpl_vars['Info']->value['yyzz_status']=='1') {?> 
							<i class="job_details_cominfo_rz job_details_cominfo_rz_zz" title="执照认证"></i> 
						<?php }?> 

						<?php if ($_smarty_tpl->tpl_vars['Info']->value['moblie_status']=='1') {?>
							<i class="job_details_cominfo_rz job_details_cominfo_rz_sj" title="手机认证"></i>
						<?php }?> 

						<?php if ($_smarty_tpl->tpl_vars['Info']->value['email_status']=='1') {?> 
							<i class="job_details_cominfo_rz job_details_cominfo_rz_yx" title="邮箱认证"></i>
						<?php }?> 

					</div>
			<div class="clear"></div>

			<div class="Compply_right_js">
				<ul>
					<?php if ($_smarty_tpl->tpl_vars['Info']->value['job_hy']) {?>
						<li><span class="Compply_right_span_c"><i class="Compply_right_icon Compply_right_icon_hy"></i><?php echo $_smarty_tpl->tpl_vars['Info']->value['job_hy'];?>
</span></li>
					<?php }?> 
					
					<?php if ($_smarty_tpl->tpl_vars['Info']->value['job_pr']) {?>
						<li><span class="Compply_right_span_c"><i class="Compply_right_icon Compply_right_icon_xz"></i><?php echo $_smarty_tpl->tpl_vars['Info']->value['job_pr'];?>
</span> </li>
					<?php }?>
					
					<?php if ($_smarty_tpl->tpl_vars['Info']->value['com_city']) {?>
						<li><span class="Compply_right_span_c"><i class="Compply_right_icon Compply_right_icon_city"></i><?php echo $_smarty_tpl->tpl_vars['Info']->value['com_city'];?>
</span></li>
					<?php }?> 
					<?php if ($_smarty_tpl->tpl_vars['Info']->value['job_mun']) {?>
						<li><span class="Compply_right_span_c"><i class="Compply_right_icon Compply_right_icon_rs"></i><?php echo $_smarty_tpl->tpl_vars['Info']->value['job_mun'];?>
</span></li>
					<?php }?> 
					<?php if ($_smarty_tpl->tpl_vars['Info']->value['money']) {?>
						<li><span class="Compply_right_span_c"><i class="Compply_right_icon Compply_right_icon_zj"></i><?php echo $_smarty_tpl->tpl_vars['Info']->value['money'];?>
万</span></li>
					<?php }?>
				</ul>
			</div>

  

				<div class="job_details_cominfo_p">

			
                       
					<div class="job_details_cominfo_p_b">
						<div class="Company_Profile" style="padding-bottom: 0px;">
							<?php if ($_smarty_tpl->tpl_vars['Info']->value['content']) {?>
								<div style="width: 100%; height: auto; overflow: hidden" id="job_content"><?php echo $_smarty_tpl->tpl_vars['Info']->value['content'];?>
</div>
							<?php }?>
						</div>
					</div>
				</div>

				<div class="job_details_cominfo_more_bth">
					<a href="<?php echo $_smarty_tpl->tpl_vars['Info']->value['com_url'];?>
" target="_blank" class="job_details_cominfo_more">公司主页 ></a>
				</div>
			</div>

			<?php if ($_smarty_tpl->tpl_vars['config']->value['com_message']==1) {?>
			<div class="job_details_right_box">

				<div class="job_details_tit"><span class="job_details_tit_s">问公司</span><i class="job_details_tit_line"></i></div>

				<!--有提问前-->
				<?php if (!$_smarty_tpl->tpl_vars['msgList']->value) {?>
					<div class="job_details_comask_p">对职位有疑问？快来问问吧</div>
					<?php if ($_smarty_tpl->tpl_vars['uid']->value) {?>
						<?php if ($_smarty_tpl->tpl_vars['usertype']->value==1) {?>
							<div class="job_details_comask_bth"><a href="javascript:;" onclick="showmessage('<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['usertype']->value;?>
')" class="job_details_comask_bth_a">我要提问</a></div>
						<?php } else { ?>
							<div class="job_details_comask_bth">
                 <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_user_change']==1) {?>
                  <a onclick="layer.msg('请先申个人用户才能提问', 2, 8)" href="javascript:;" class="job_details_comask_bth_a">我要提问</a> 
                <?php } else { ?> 
                  <a onclick="layer.msg('只有个人用户才能提问', 2, 8)" href="javascript:;" class="job_details_comask_bth_a">我要提问</a> 
                <?php }?>
              </div>
						<?php }?>
					<?php } else { ?>	
						<div class="job_details_comask_bth"><a href="javascript:;" onclick="showlogin();" class="job_details_comask_bth_a">我要提问</a></div>
					<?php }?>
					<!--提问 end-->
					
				<?php } else { ?>
				<!--有提问后-->
					<div class="yun_newedition_askbox">
						<?php if ($_smarty_tpl->tpl_vars['uid']->value) {?>
							<?php if ($_smarty_tpl->tpl_vars['usertype']->value==1) {?>
								<a href="javascript:;" onclick="showmessage('<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['usertype']->value;?>
')" class="job_details_tw">我要提问</a>
							<?php } else { ?>
               <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_user_change']==1) {?>
                  <a onclick="layer.msg('请先申个人用户才能提问', 2, 8)" href="javascript:;" class="job_details_tw">我要提问</a> 
                <?php } else { ?> 
                  <a onclick="layer.msg('只有个人用户才能提问', 2, 8)" href="javascript:;" class="job_details_tw">我要提问</a> 
                <?php }?>
							<?php }?>
						<?php } else { ?>	
							<div class="job_details_comask_bth"><a href="javascript:;" onclick="showlogin();" class="job_details_tw">我要提问</a></div>
						<?php }?>
						<?php  $_smarty_tpl->tpl_vars['msglist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['msglist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['msgList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['msglist']->key => $_smarty_tpl->tpl_vars['msglist']->value) {
$_smarty_tpl->tpl_vars['msglist']->_loop = true;
?>
						<div class="yun_newedition_asklist">
					     	<div class="yun_newedition_showask"><i class="yun_newedition_showask_icon">问</i><?php echo $_smarty_tpl->tpl_vars['msglist']->value['content'];?>
</div>
					     	<div class="yun_newedition_showand"><i class="yun_newedition_showand_icon">答</i><?php if ($_smarty_tpl->tpl_vars['msglist']->value['reply']) {
echo $_smarty_tpl->tpl_vars['msglist']->value['reply'];
} else { ?>企业尚未回复<?php }?>
					     	<div class="yun_newedition_showand_time"> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['msglist']->value['datetime'],"%Y-%m-%d");?>
</div></div>
					 	</div>
					 	<?php } ?>
					</div> 
				<?php }?>
				
				<div class=""  id="showmessage" style="display:none;">
					 
					<div class="job_hr_ly_box" style="padding-top:10px;">
						
						<form action="<?php echo smarty_function_url(array('m'=>'job','c'=>'comapply','a'=>'msg'),$_smarty_tpl);?>
" method="post" target="supportiframe" onsubmit="return com_msg();">
							<div>
								<textarea class="comapply_Leave_fb_text" name="content" id='msg_content' placeholder='请输入您对该职位的疑问。比如所在地、年薪、福利等等，我会及时给您回复！期待与您合作。'></textarea>
								<input type="hidden" name="jobid" value="<?php echo $_smarty_tpl->tpl_vars['Info']->value['id'];?>
" />
								<input type="hidden" name="job_uid" value="<?php echo $_smarty_tpl->tpl_vars['Info']->value['uid'];?>
" />
								<input type="hidden" name="com_name" value="<?php echo $_smarty_tpl->tpl_vars['Info']->value['com_name'];?>
" />
								<input type="hidden" name="job_name" value="<?php echo $_smarty_tpl->tpl_vars['Info']->value['jobname'];?>
" />
							</div>
							
							<div class="affirm affirm_yz">
								<input class="zx_yx_input fl" id="msg_CheckCode" type="text" placeholder="请输入验证码" value="" maxlength="4" name="authcode" onfocus="checkCode('vcode_imgs')"/>
								<img class="zx_yx_input_img fl" id="vcode_imgs" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/include/authcode.inc.php" onclick="checkCode('vcode_imgs');" /> 
								
								<input type="submit" value="提交咨询" name="submit" class="comapply_Leave_fb_sub " />
							</div>

							
						</form>
						<div class="comapply_Leave_fb_s">  <a class="comapply_lea_a" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=commsg" target="_blank"> 查看我的咨询>> </a></div>
					</div>
				</div>
				
			</div>
			<?php }?>
			<div class="job_details_right_box">
				<div class="job_details_right_wxbox">
					<div class="job_details_right_wxpic">
						<img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wx_qcode'];?>
" width="90" height="90" />
					</div>
					<div class="job_details_right_wxpic_p">
						<div class="">手机扫一扫</div>
						<div class="">随时随地找工作</div>
					</div>
				</div>	
			</div>
		</div>
	</div>

	<!--新职位详细 end-->
	
	<!------职位收藏成功----->
	<div id="favjob" style="display:none  ">
		<div class="job_prompt_box">
			<div class="job_prompt_box_pic"><i class="job_prompt_box_pic_icon"></i></div>
			<div class="job_prompt_box_writing"> 职位收藏成功</div>
			<div class="job_prompt_box_p"> 您可以在<a href="<?php echo smarty_function_url(array('m'=>'member','c'=>'favorite'),$_smarty_tpl);?>
" class="job_prompt_box_look">职位收藏夹</a>中查看</div>
			<div class="job_prompt_box_ok"> <a href="javascript:void(0)" onclick="window.location.reload();" class="job_prompt_box_ok_bth">知道了</a></div>
		</div>
	</div>

   	<!------申请职位----->
    <div id="sqjob_show" style="display:none  ">
		<div class="job_prompt_sendresume">
			<div class="job_prompt_sendresume_job">您正在申请 <span class="job_prompt_sendresume_jobname"><?php echo mb_substr($_smarty_tpl->tpl_vars['Info']->value['jobname'],0,14,'utf-8');?>
</span> 职位，请选择您要投递的简历</div>
			<div  class="POp_up_r"></div>
			<div class="job_prompt_box_ok"> <a href="javascript:;" id="click_sq" class="job_prompt_box_ok_bth login_button2">立即申请</a></div>
			<input id="companyname" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['Info']->value['com_name'];?>
" />
			<input id="jobname" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['Info']->value['jobname'];?>
" />
			<input id="companyuid" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['Info']->value['uid'];?>
" />
			<input id="jobid" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['Info']->value['id'];?>
" />
		</div>
    </div>
	
	<!------职位申请成功----->
	<div id="suc_job" style="display:none ">
		<div class="job_prompt_box">
			<div class="job_prompt_box_pic"><i class="job_prompt_box_pic_icon"></i></div>
			<div class="job_prompt_box_writing"> 申请成功</div>
			<div class="job_prompt_box_p"> 恭喜您职位申请成功，请耐心等待企业回复</div>
			<div class="job_prompt_box_maylike">您可能感兴趣的职位：</div>
			<div class="clear"></div>
			<ul class="job_prompt_box_maylike_list">
			<?php  $_smarty_tpl->tpl_vars['job_jia'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['job_jia']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
global $db,$db_config,$config;
		$time = time();
		
		
		//可以做缓存
        $paramer=array("limit"=>"2","noid"=>"'@Info.id'","jobids"=>"'@Info.job1'","namelen"=>"6","item"=>"'job_jia'","key"=>"'key'","nocache"=>"")
;
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
        $Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
		include_once  PLUS_PATH."/comrating.cache.php";
		include(CONFIG_PATH."db.data.php"); 
		if($config[sy_web_site]=="1"){
			if($config[province]>0 && $config[province]!=""){
				$paramer[provinceid] = $config[province];
			}
			if($config[cityid]>0 && $config[cityid]!=""){
				$paramer[cityid] = $config[cityid];
			}
			if($config[three_cityid]>0 && $config[three_cityid]!=""){
				$paramer[three_cityid] = $config[three_cityid];
			}
			if($config[hyclass]>0 && $config[hyclass]!=""){
				$paramer[hy]=$config[hyclass];
			}
		}

		
		if($paramer[sdate]){
			$where = "`sdate`>".strtotime("-".intval($paramer[sdate])." day",time())." and `state`=1";
		}else{
			$where = "`state`=1";
		}
		
		//按照UID来查询（按公司地址查询可用GET[id]获取当前公司ID）
		if($paramer[uid]){
			$where .= " AND `uid` = '$paramer[uid]'";
		}
		if($paramer[com_id]){
			$where .= " AND `uid` = '$paramer[com_id]'";
		}

		//是否推荐职位
		if($paramer[rec]){
			
			$where.=" AND `rec_time`>=".time();
			
		}
		//企业认证条件
		if($paramer['cert']){
			$job_uid=array();
			$company=$db->select_all("company","`yyzz_status`=1","`uid`");
			if(is_array($company)){
				foreach($company as $v){
					$job_uid[]=$v['uid'];
				}
			}
			$where.=" and `uid` in (".@implode(",",$job_uid).")";
		}
		//取不包含当前企业的职位
		if($paramer[nouid]){
			$where.= " and `uid`<>$paramer[nouid]";
		}
		//取不包含当前id的职位
		if($paramer[noid]){
			$where.= " and `id`<>$paramer[noid]";
		}
		//是否被锁定
		if($paramer[r_status]){
			$where.= " and `r_status`=2";
		}else{
			$where.= " and `r_status`=1";
		}
		//是否下架职位
		if($paramer[status]){
			$where.= " and `status`='1'";
		}else{
			$where.= " and `status`='0'";
		}
		//公司体制
		if($paramer[pr]){
			$where .= " AND `pr` =$paramer[pr]";
		}
		//公司行业分类
		if($paramer['hy']){
			$where .= " AND `hy` = $paramer[hy]";
		} 
		//职位大类
		if($paramer[job1]){
			$where .= " AND `job1` = $paramer[job1]";
		}
		//职位子类
		if($paramer[job1_son]){
			$where .= " AND `job1_son` = $paramer[job1_son]";
		}
		//职位三级分类
		if($paramer[job_post]){
			$where .= " AND (`job_post` IN ($paramer[job_post]))";
		}
		//您可能感兴趣的职位--个人会员中心
		if($paramer['jobwhere']){
			$where .=" and ".$paramer['jobwhere'];
		}
		//职位分类综合查询
		if($paramer['jobids']){
			$where.= " AND (`job1` = '$paramer[jobids]' OR `job1_son`= '$paramer[jobids]' OR `job_post`='$paramer[jobids]')";
		}
		//职位分类区间,不建议执行该查询
		if($paramer['jobin']){
			$where .= " AND (`job1` IN ($paramer[jobin]) OR `job1_son` IN ($paramer[jobin]) OR `job_post` IN ($paramer[jobin]))";
		}
		//城市大类
		if($paramer[provinceid]){
			$where .= " AND `provinceid` = $paramer[provinceid]";
		}
		//城市子类
		if($paramer['cityid']){
			$where .= " AND (`cityid` IN ($paramer[cityid]))";
		}
		//城市三级子类
		if($paramer['three_cityid']){
			$where .= " AND (`three_cityid` IN ($paramer[three_cityid]))";
		}
		if($paramer['cityin']){
			$where .= " AND `three_cityid` IN ($paramer[cityin])";
		}
		//学历
		if($paramer[edu]){
			$where .= " AND `edu` = $paramer[edu]";
		}
		//工作经验
		if($paramer[exp]){
			$where .= " AND `exp` = $paramer[exp]";
		}
		//到岗时间
		if($paramer[report]){
			$where .= " AND `report` = $paramer[report]";
		}
		//职位性质
		if($paramer[type]){
			$where .= " AND `type` = $paramer[type]";
		}
		//性别
		if($paramer[sex]){
			$where .= " AND `sex` = $paramer[sex]";
		}
		//应届生
		if($paramer[is_graduate]){
			$where .= " AND `is_graduate` = $paramer[is_graduate]";
		}
		//公司规模
		if($paramer[mun]){
			$where .= " AND `mun` = $paramer[mun]";
		}
		 
		if($paramer[minsalary] && $paramer[maxsalary]){
			$where.= " AND (`minsalary`>=".intval($paramer[minsalary])." and `minsalary`<=".intval($paramer[maxsalary])." and `maxsalary`<=".intval($paramer[maxsalary]).") ";
		}elseif($paramer[minsalary]&&!$paramer[maxsalary]){
			$where.= " AND (`minsalary`>=".intval($paramer[minsalary]).") ";
		}elseif(!$paramer[minsalary]&&$paramer[maxsalary]){
			$where.= " AND (`minsalary`<=".intval($paramer[maxsalary])." and `maxsalary`<=".intval($paramer[maxsalary]).") ";
		}

	    //福利待遇
	    $cache_array = $db->cacheget();
		$comclass_name = $cache_array["comclass_name"];
		if($paramer[welfare]){
			$welfarename=$comclass_name[$paramer[welfare]];
            $where .=" AND `welfare` LIKE '%".$welfarename."%' ";
		}
		
		//城市区间,不建议执行该查询
		if($paramer[cityin]){
			$where .= " AND (`provinceid` IN ($paramer[cityin]) OR `cityid` IN ($paramer[cityin]) OR `three_cityid` IN ($paramer[cityin]))";
		}
		//紧急招聘urgent
		if($paramer[urgent]){
			$where.=" AND `urgent_time`>".time();
		}
		//更新时间区间
		if($paramer[uptime]){
			if($paramer[uptime]==1){
				$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
				$where.=" AND lastupdate>$beginToday";
			}else{
				$time=time();
				$uptime = $time-($paramer[uptime]*86400);
				$where.=" AND lastupdate>$uptime";
			}
		}
		//按类似公司名称,不建议进行大数据量操作
		if($paramer[comname]){
			$where.=" AND `com_name` LIKE '%".$paramer[comname]."%'";
		}
		//按公司归属地,只适合查询一级城市分类
		if($paramer[com_pro]){
			$where.=" AND `com_provinceid` ='".$paramer[com_pro]."'";
		}
		//按照职位名称匹配
		if($paramer[keyword]){
			$where1[]="`name` LIKE '%".$paramer[keyword]."%'";
			$where1[]="`com_name` LIKE '%".$paramer[keyword]."%'";
			include  PLUS_PATH."/city.cache.php";
			foreach($city_name as $k=>$v){
				if(strpos($v,$paramer[keyword])!==false){
					$cityid[]=$k;
				}
			}
			if(is_array($cityid)){
				foreach($cityid as $value){
					$class[]= "(provinceid = '".$value."' or cityid = '".$value."')";
				}
				$where1[]=@implode(" or ",$class);
			}
			$where.=" AND (".@implode(" or ",$where1).")";
		}

		//多选职位
		if($paramer["job"]){
			$where.=" AND `job_post` in ($paramer[job])";
		}
		//置顶招聘
		if($paramer[bid]){
			if($config[joblist_top]!=1){
				$paramer[limit] = 5;
			}
			$where.="  and `xsdate`>'".time()."'";
		} 
		
		//自定义查询条件，默认取代上面任何参数直接使用该语句
		if($paramer[where]){
			$where = $paramer[where];
		}

		//查询条数
		$limit = '';
		if($paramer[limit]){

			$limit = " limit ".$paramer[limit];
		}
		if($paramer[ispage]){
			$limit = PageNav($paramer,$_GET,"company_job",$where,$Purl,"",$paramer[islt]?$paramer[islt]:"6",$_smarty_tpl);        
		}

		//排序字段默认为更新时间
		//置顶设置为随机5条时，随机查询
		if($paramer[bid] && $paramer[limit]){
			$order = " ORDER BY rand() ";
		}else{
			if($paramer[order] && $paramer[order]!="lastdate"){
				$order = " ORDER BY ".str_replace("'","",$paramer[order])."  ";
			}else{
				$order = " ORDER BY `lastupdate` ";
			}
		}
		//排序规则 默认为倒序
		if($paramer[sort]){
			$sort = $paramer[sort];
		}else{
			$sort = " DESC";
		} 
		$where.=$order.$sort;
		 
		$job_jia = $db->select_all("company_job",$where.$limit);

		if(is_array($job_jia) && !empty($job_jia)){
			//处理类别字段
			$cache_array = $db->cacheget();
			$comuid=$jobid=array();
			foreach($job_jia as $key=>$value){
				if(in_array($value['uid'],$comuid)==false){$comuid[] = $value['uid'];}
				if(in_array($value['id'],$jobid)==false){$jobid[] = $value['id'];} 
			}
			$comuids = @implode(',',$comuid);
			$jobids = @implode(',',$jobid);
			
			if($comuids){
				$r_uids=$db->select_all("company","`uid` IN (".$comuids.")","`uid`,`yyzz_status`,`logo`,`logo_status`,`pr`,`hy`,`mun`,`shortname`,`welfare`,`hotstart`,`hottime`");
				if(is_array($r_uids)){
					foreach($r_uids as $key=>$value){
						if($value[shortname]){
    						$value['shortname_n'] = $value[shortname];
    					}
						if(!$value['logo'] || $value['logo_status']!=0){
							$value['logo'] = checkpic("",$config['sy_unit_icon']);
						}else{
							$value['logo']= checkpic($value['logo']);
						}
						$value['pr_n'] = $cache_array['comclass_name'][$value[pr]];
						$value['hy_n'] = $cache_array['industry_name'][$value[hy]];
						$value['mun_n'] = $cache_array['comclass_name'][$value[mun]];
						if($value['hotstart']<=time() && $value['hottime']>=time()){
							$value['hotlogo'] = 1;
						}
						$r_uid[$value['uid']] = $value;
					}
				}
			}
			
 			if($paramer[bid]){
				$noids=array();
			}	
			foreach($job_jia as $key=>$value){

				if($paramer[bid]){
					$noids[] = $value[id];
				}
				//筛除重复
				if($paramer[noids]==1 && !empty($noids) && in_array($value['id'],$noids)){
					unset($job_jia[$key]);
					continue;
				}else{
					$job_jia[$key] = $db->array_action($value,$cache_array);
					$job_jia[$key][stime] = date("Y-m-d",$value[sdate]);
					$job_jia[$key][etime] = date("Y-m-d",$value[edate]);
					if($arr_data['sex'][$value['sex']]){
						$job_jia[$key][sex_n]=$arr_data['sex'][$value['sex']];
					}
					$job_jia[$key][lastupdate] = date("Y-m-d",$value[lastupdate]);
					if($value[minsalary]&&$value[maxsalary]){
						$job_jia[$key][job_salary] =$value[minsalary]."-".$value[maxsalary];
					}elseif($value[minsalary]){
						$job_jia[$key][job_salary] =$value[minsalary]."以上";
					}else{
						$job_jia[$key][job_salary] ="面议";
					}
					if($r_uid[$value['uid']][shortname]){
						$job_jia[$key][com_name] =$r_uid[$value['uid']][shortname];
					}
					$job_jia[$key][yyzz_status] =$r_uid[$value['uid']][yyzz_status];
					$job_jia[$key][logo] =$r_uid[$value['uid']][logo];
					$job_jia[$key][pr_n] =$r_uid[$value['uid']][pr_n];
					$job_jia[$key][hy_n] =$r_uid[$value['uid']][hy_n];
					$job_jia[$key][mun_n] =$r_uid[$value['uid']][mun_n];
					$job_jia[$key][hotlogo] =$r_uid[$value['uid']][hotlogo];
					$time=$value['lastupdate'];
					//今天开始时间戳
					$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
					//昨天开始时间戳
					$beginYesterday=mktime(0,0,0,date('m'),date('d')-1,date('Y'));
					//一周内时间戳
					$week=strtotime(date("Y-m-d",strtotime("-1 week")));
					if($time>$week && $time<$beginYesterday){
						$job_jia[$key]['time'] ="一周内";
					}elseif($time>$beginYesterday && $time<$beginToday){
						$job_jia[$key]['time'] ="昨天";
					}elseif($time>$beginToday){	
						$job_jia[$key]['time'] = date("H:i",$value['lastupdate']);
						$job_jia[$key]['redtime'] =1;
					}else{
						$job_jia[$key]['time'] = date("Y-m-d",$value['lastupdate']);
					}
    
                     // 前天
    				$beforeYesterday=mktime(0,0,0,date('m'),date('d')-2,date('Y'));

					if($value['sdate']>$beforeYesterday){
						$job_jia[$key]['newtime'] =1;
					}
					//获得福利待遇名称
					if($value[welfare]){
						$welfareList = @explode(',',$value[welfare]);

						if(!empty($welfareList)){
							$job_jia[$key][welfarename] =$welfareList;
						}
					}
					//截取公司名称
					if($paramer[comlen]){
						if($r_uid[$value['uid']][shortname]){
							$job_jia[$key][com_n] = mb_substr($r_uid[$value['uid']][shortname],0,$paramer[comlen],"utf-8");
						}else{
							$job_jia[$key][com_n] = mb_substr($value['com_name'],0,$paramer[comlen],"utf-8");
						}
					}
					//截取职位名称
					if($paramer[namelen]){
						if($value['rec_time']>time()){
							$job_jia[$key][name_n] = "<font color='red'>".mb_substr($value['name'],0,$paramer[namelen],"utf-8")."</font>";
						}else{
							$job_jia[$key][name_n] = mb_substr($value['name'],0,$paramer[namelen],"utf-8");
						}
					}else{
						if($value['rec_time']>time()){
							$job_jia[$key]['name_n'] = "<font color='red'>".$value['name']."</font>";
						}
					}
					//构建职位伪静态URL
					$job_jia[$key][job_url] = Url("job",array("c"=>"comapply","id"=>$value[id]),"1");
					//构建企业伪静态URL
					$job_jia[$key][com_url] = Url("company",array("c"=>"show","id"=>$value[uid]));
					
					foreach($comrat as $k=>$v){
						if($value[rating]==$v[id]){
							$job_jia[$key][color] = str_replace("#","",$v[com_color]);
							if($v[com_pic]){
								$job_jia[$key][ratlogo] = checkpic($v[com_pic]);
							}
							$job_jia[$key][ratname] = $v[name];
						}
					}
					if($paramer[keyword]){
						$job_jia[$key][name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[name]);
						$job_jia[$key][com_name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[com_name]);
						$job_jia[$key][name_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$job_jia[$key][name_n]);
						$job_jia[$key][com_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$job_jia[$key][com_n]);
						$job_jia[$key][job_city_one]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[provinceid]]);
						$job_jia[$key][job_city_two]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[cityid]]);
					}
				}
			}
			if(is_array($job_jia)){
				if($paramer[keyword]!=""&&!empty($job_jia)){
					addkeywords('3',$paramer[keyword]);
				}
			}
		}$job_jia = $job_jia; if (!is_array($job_jia) && !is_object($job_jia)) { settype($job_jia, 'array');}
foreach ($job_jia as $_smarty_tpl->tpl_vars['job_jia']->key => $_smarty_tpl->tpl_vars['job_jia']->value) {
$_smarty_tpl->tpl_vars['job_jia']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['job_jia']->key;
?>
				<li>
					<div class="job_prompt_box_maylike_name">
						<a href="<?php echo $_smarty_tpl->tpl_vars['job_jia']->value['job_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['job_jia']->value['name'];?>
</a>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['job_jia']->value['job_salary']) {?>
						<div class="job_prompt_box_maylike_xz"><?php echo $_smarty_tpl->tpl_vars['job_jia']->value['job_salary'];?>
</div>
					<?php }?>
					<div class="job_prompt_box_maylike_comname"><?php echo mb_substr($_smarty_tpl->tpl_vars['job_jia']->value['com_name'],0,13,'utf-8');?>
</div>
					<a href="<?php echo $_smarty_tpl->tpl_vars['job_jia']->value['job_url'];?>
" class="job_prompt_box_maylike_sq">申请</a>
				</li>
			<?php } ?>	
			</ul>
			<div class="clear"></div>
			<div class="job_prompt_box_ok"> <a href="<?php echo smarty_function_url(array('m'=>'job'),$_smarty_tpl);?>
" class="job_prompt_box_ok_bth job_prompt_box_ok_bthw170">查看更多职位</a></div>
		</div>
	</div>  
       
        
	 
	<!--举报弹出框-->
	<div class="none" id="jobreport">
	  <div class="report_jobbox">
	    <div class="report_job_ly_tip">请选择您的举报理由</div>
	    <span class="report_job_ly" id="r1" onclick="add_reason(1);">电话空号</span> <span class="report_job_ly" id="r2" onclick="add_reason(2);">电话没人接</span> <span class="report_job_ly" id="r3" onclick="add_reason(3);">工资虚假</span> <span class="report_job_ly" id="r4" onclick="add_reason(4);">非法收费</span> <span class="report_job_ly" id="r5" onclick="add_reason(5);">职介冒充</span>
	    <div class="report_job_ly_tip mt10">备注说明</div>
	    <div class="report_job_textarea_box">
	      <input id="r_uid" value="<?php echo $_smarty_tpl->tpl_vars['Info']->value['uid'];?>
" type="hidden" />
	      <input id="id" value="<?php echo $_smarty_tpl->tpl_vars['Info']->value['id'];?>
" type="hidden" />
	      <input id="r_name" value="<?php echo $_smarty_tpl->tpl_vars['Info']->value['com_name'];?>
" type="hidden" />
	      <textarea placeholder="请简明扼要的阐述你的理由，以便工作人员更好的判断" rows="2" cols="38" id="r_reason" class="report_job_textarea"></textarea>
	    </div>
	    <div class="report_job_yz"> 验 证 码：
	      <input type="text" class="report_job_text" id="report_authcode" maxlength="6" placeholder="请输入图片验证码" onfocus="checkCode('vcodeimg')" autocomplete="off"/>
	      <img id="vcodeimg" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/include/authcode.inc.php" /> <a href="javascript:void(0);" onclick="checkCode('vcodeimg');">看不清?</a> </div>
	    <div class="report_job_bth_box">
	      <input class="report_job_bth" type="button" value="举 报" onclick="reportSub('vcodeimg');" />
	    </div>
	  </div>
	</div>
	<div id="map_show" class="none">
	  <div class="map_query_box">
	    <div id="map_container" style="width:1100px;height:450px;"></div>
	    <div class="map_query" id="map_search">
	      <div class="map_query_tit">线路查询 <span class="map_query_tit_s">注：地图可以左击拖拽任意位置</span></div>
	      <div class="map_query_list"><span class="map_query_list_s">起点</span><i class="map_query_list_line"></i>
	        <input type="text" class="map_startlist map_query_text" placeholder="输入起点" id="map_start" name="map_start" />
	      </div>
	      <div class="map_query_list"> <span class="map_query_list_s">终点</span><i class="map_query_list_line"></i> <?php if ($_smarty_tpl->tpl_vars['Info']->value['x']) {?>
	        <input type="text" class="map_startend map_query_text" id="map_end" name="map_end" />
	        <?php } else { ?>
	        <input type="text" class="map_startend map_query_text" placeholder="输入终点" value="<?php echo $_smarty_tpl->tpl_vars['Info']->value['address'];?>
" id="map_end" name="map_end" />
	        <?php }?> </div>
	      <div class="map_query_bth_box">
	        <input type="button" class="mapsubmit map_query_bth " value="公交查询" name="submit" onclick="bus_query();" />
	        <span>
	        <input type="button" class="mapsubmit map_query_bth map_query_bth_car" value="驾车查询"  name="submit" onclick="map_drving();"/>
	        </span></div>
	    </div>
	    <div class="map_query_result">
	      <div id="r-result"></div>
	    </div>
	  </div>
	</div>

	<div id="tel_show" class="none">
	  <div class="jobtel_box">
	    <div class="jobtel_box_tel">
	      <div class="jobtel_touch_box">
	        <div class="jobtel_touch_box_wx">
	          <div class="jobtel_box_wx_gz">关注微信公众号</div>
	          <div class="jobtel_box_wx">申请结果早知道</div>
	          <div class="jobtel_box_wxewm">
			   <?php if ($_smarty_tpl->tpl_vars['Info']->value['comqcode']) {?>
			  <img src="<?php echo $_smarty_tpl->tpl_vars['Info']->value['comqcode'];?>
" width="100" height="100">
			  <?php } else { ?>
			  <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wx_qcode'];?>
" width="100" height="100">
			  <?php }?>
			  </div>
	          <div class="jobtel_box_bot"></div>
	        </div>
	        <div class="jobtel_box_tip">联系时请说明是在<span class="jobtel_box_tip_name"><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
</span>上看到的</div>
	        
	        <!--   有简历的情况-->
	        <div class="jobtel_box_t_box"> <i class="jobtel_box_t_box_icon"></i>
	          <div class="jobtel_box_t_hrl">
	            <div class="jobtel_touch_hr" id='linkman'> <?php echo $_smarty_tpl->tpl_vars['Info']->value['linkman'];?>
 </div>
	            <div class="jobtel_touch"><span id='linktel'><?php echo $_smarty_tpl->tpl_vars['Info']->value['linktel'];?>
</span></div>
	            <div class="jobtel_touch"><span id='linkphone'></span></div>
	            <div class="jobtel_box_t_box_cj_tip none" id='addresume'></div>
	          </div>
	        </div>
	        <div class="jobtel_touch_p none" id='linkqq'></div>
	        <!--   有简历的情况 end--> 
	        
	      </div>
	    </div>
	  </div>
	</div>
	
 
<?php if (!$_COOKIE['uid']) {?>
<!--注册弹出框1-->
<form id="subform" action="<?php echo smarty_function_url(array('m'=>'ajax','c'=>'temporaryresume'),$_smarty_tpl);?>
" target="supportiframefast" method="post" onSubmit="return checkaddresume()" enctype="multipart/form-data" autocomplete="off" class="layui-form">
<div id="applydiv" class="none">
  <div class="yun_reg_BasicInfo">
    <div class="yun_reg_BasicInfo_h1"> <span class="yun_reg_BasicInfo_h1_span ">申请职位需要先创建一份简历哦，如果已有简历，可直接登录</span><a href="javascript:void(0);" onclick="OnLogin();" class="yun_reg_BasicInfo_loginbth">登录</a> </div>
    <div class="yun_reg_BasicInfo_box">
      <div class="yun_reg_BasicInfo_left" style="height:600px"> 
       <div class="yun_reg_BasicInfo_tit"><span class="">基本信息</span></div>
       <div class="yun_reg_BasicInfo_tx" style="right: 120px;">
       <div class="yun_figure_img">
	   <button type="button" class="yun_figure_upload_input noupload" lay-data="{imgid: 'imgicon'}">上传图片</button>
		<input type="hidden" id="laynoupload" value="1"/>
		<img id="imgicon" class="none" src="" width="110" height="150">
	   </div>
       </div>
        <div class="yun_reg_BasicInfo_list"><span class="yun_reg_BasicInfo_s"><i class="yun_reg_BasicInfo_i">*</i>姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名：</span>
          <input type="text" name="uname" id="uname" class="yun_reg_BasicInfo_text yun_reg_BasicInfo_textw160" placeholder="请输入真实姓名"/>
               <div class="yun_reg_BasicInfo_sex">
          <input type="hidden" id="sex" name="sex" value="1" />
          <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['user_sex']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?><span class="yun_info_sex <?php if ($_smarty_tpl->tpl_vars['j']->value==1) {?>yun_info_sex_cur<?php }?>" id="sex<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
" onclick="checksex('<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
')"><i class="usericon_sex usericon_sex<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
"></i><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</span><?php } ?> </div> </div>

        <div class="yun_reg_BasicInfo_list"> <span class="yun_reg_BasicInfo_s"><i class="yun_reg_BasicInfo_i">*</i> 出生年月：</span>
          <div class="yun_reg_BasicInfo_l_r yun_reg_BasicInfo_l_date">
            <div class="layui-input-inline">
              <input type="text" value="请输入出生年份" name="birthday" id="birthday" class="yun_reg_BasicInfo_but" />
            </div>
          </div>
        </div>
        <div class="yun_reg_BasicInfo_list"><span class="yun_reg_BasicInfo_s"><i class="yun_reg_BasicInfo_i">*</i>最高学历：</span>
          <div class="yun_reg_BasicInfo_l_s_box">
		  
			<select name="edu" id="educid">
			<option value="">请选择最高学历</option>

			<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_edu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" ><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
			<?php } ?>
			</select>
          </div>
        </div>
        <div class="yun_reg_BasicInfo_list"><span class="yun_reg_BasicInfo_s"><i class="yun_reg_BasicInfo_i">*</i>工作经验：</span>
          <div class="yun_reg_BasicInfo_l_s_box ">
		 
			<select name="exp" id="expid">
			<option value="">请选择工作经验</option>

			<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_word']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" ><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
			<?php } ?>
			</select>
          </div>
        </div>
          <div class="yun_reg_BasicInfo_list"> <span class="yun_reg_BasicInfo_s"><i class="yun_reg_BasicInfo_i">*</i>手机号码：</span>
          <input type="text" name="telphone" id="telphone" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" onblur="ckjobreg('1')" class="yun_reg_BasicInfo_text"placeholder="请输入手机号码"  />
        </div>
    
     <div class="yun_reg_BasicInfo_tit m10"><span class="">账号设置</span></div>
     <div class="yun_reg_BasicInfo_list"> <span class="yun_reg_BasicInfo_s"><i class="yun_reg_BasicInfo_i">*</i>登录密码：</em> </span><span id="pass1">
          <input type="password" class="yun_reg_BasicInfo_text"id="reg_password"/>
          </span> 
	 </div>
        <?php if ($_smarty_tpl->tpl_vars['config']->value['code_kind']==3||$_smarty_tpl->tpl_vars['config']->value['code_kind']==4) {?>
		<input type='hidden' name="geetest_challenge" value="">
		<input type='hidden' name="geetest_validate" value="">
		<input type='hidden' name="geetest_seccode" value="">
		<input type='hidden' name="dx_token" value="">
		<?php } else { ?>
		<div class="yun_reg_BasicInfo_list">
			<span class="yun_reg_BasicInfo_s"><i class="yun_reg_BasicInfo_i">*</i>验证码：</span>
			<input id="CheckCodefast" name='checkcode' type="text" class="yun_reg_BasicInfo_text yun_reg_BasicInfo_text_w155" maxlength="6" style="width:145px; margin-right:10px;" placeholder="请输入验证码" autocomplete="off"/>
			<a href="javascript:void(0);" onclick="checkCode('vcode_img_temp_fast');">
				<img id="vcode_img_temp_fast" class="authcode" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/include/authcode.inc.php" />
			</a>
			<a href="javascript:void(0);" onclick="checkCode('vcode_img_temp_fast');" class="yzm_h"> 看不清？换一张</a>
			<span class="reg_tips reg_tips_red none" id="ajax_CheckCode"></span>
		</div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_msg_isopen']==1&&$_smarty_tpl->tpl_vars['config']->value['sy_msg_login']==1) {?>
        <div class="yun_reg_BasicInfo_list"><span class="yun_reg_BasicInfo_s"><i class="yun_reg_BasicInfo_i">*</i>手机验证</span>
          <input type="text" name="authcode" id="authcode" class="yun_reg_BasicInfo_text yun_reg_BasicInfo_text_w155" />
          <a href="javascript:void(0);" class="login_m_send" id="send_msg_tips" onclick="send_msg('<?php echo smarty_function_url(array('m'=>'ajax','c'=>'sendmsg'),$_smarty_tpl);?>
');">发送验证码</span> </span> </a> </div>
        <?php }?>
        <div class="yun_reg_BasicInfo_bth_box"> <?php if ($_smarty_tpl->tpl_vars['config']->value['resume_create_project']==1||$_smarty_tpl->tpl_vars['config']->value['resume_create_exp']==1||$_smarty_tpl->tpl_vars['config']->value['resume_create_edu']==1) {?>
          <input type="button" value="下一步" class="yun_reg_BasicInfo_bth" onclick="nextaddresume()" />
          <?php } else { ?>
		  <input type="submit" value="保存并投递" class="yun_reg_BasicInfo_bth" />
          <?php }?>  </div>
      </div>
    </div>
  </div>
</div>
<!--注册下一步 -->
<div id="nextaddresume" class="none">
  <div class="yun_reg_BasicInfo">
    <div class="yun_reg_BasicInfo_box" style="height:560px;">
      <div class="yun_reg_BasicInfo_left" > 
      <div class="yun_reg_BasicInfo_h1"> <span class="yun_reg_BasicInfo_h1_span ">为了提高求职成功率，请完善以下信息！</span></div>
      <?php if ($_smarty_tpl->tpl_vars['config']->value['resume_create_exp']=='1') {?> 
        <!--        最近一份工作-->
        <div class="yun_reg_BasicInfo_tit"><span class="">最近一份工作</span></div>
        <div class="yun_reg_BasicInfo_list"> <span class="yun_reg_BasicInfo_s"><i class="yun_reg_BasicInfo_i">*</i>公司名称：</span>
          <input type="text" class="yun_reg_BasicInfo_text" id="workname" name="workname" value="" placeholder="请输入公司名称">
        </div>
        <div class="yun_reg_BasicInfo_list"> <span class="yun_reg_BasicInfo_s"><i class="yun_reg_BasicInfo_i">*</i>担任职位：</span>
          <input type="text" class="yun_reg_BasicInfo_text" name="worktitle" id="worktitle" value="" placeholder="请输入担任职位">
        </div>
        <div class="yun_reg_BasicInfo_list"><span class="yun_reg_BasicInfo_s"><i class="yun_reg_BasicInfo_i">*</i>在职时间：</span>
          <div class="yun_reg_BasicInfo_timetext_box">
            <input name="worksdate" id="worksdate" type="text" value="" class="yun_reg_BasicInfo_timetext" placeholder="入职时间">
            <span class="yun_reg_BasicInfo_timeline">-</span>
            <input name="workedate" id="workedate" type="text" value="" class="yun_reg_BasicInfo_timetext" placeholder="离职时间">
          </div>
        </div>
        <div class="yun_reg_BasicInfo_list"> <span class="yun_reg_BasicInfo_s"><i class="yun_reg_BasicInfo_i">*</i>工作内容：</span>
          <textarea class="yun_reg_BasicInfo_listtextarea" id="workcontent" name="workcontent" placeholder="请对工作内容进行简单阐述~"></textarea>
        </div>
        <?php }?> <?php if ($_smarty_tpl->tpl_vars['config']->value['resume_create_edu']=='1') {?> 
        <!-- 毕业院校 -->
        <div class="yun_reg_BasicInfo_tit"><span class="">毕业院校</span></div>
        <div class="yun_reg_BasicInfo_list"> <span class="yun_reg_BasicInfo_s"><i class="yun_reg_BasicInfo_i">*</i>学校名称：</span>
          <input type="text" class="yun_reg_BasicInfo_text" id="eduname" name="eduname" value="" placeholder="请填写学校名称">
        </div>
        <div class="yun_reg_BasicInfo_list"><span class="yun_reg_BasicInfo_s"><i class="yun_reg_BasicInfo_i">*</i>在校时间：</span> 
          <div class="yun_reg_BasicInfo_timetext_box">
            <input name="edusdate" id="edusdate" type="text" value="" class="yun_reg_BasicInfo_timetext" placeholder="入校时间">
            <span class="yun_reg_BasicInfo_timeline">-</span>
            <input name="eduedate" id="eduedate" type="text" value="" class="yun_reg_BasicInfo_timetext" placeholder="毕业时间">
          </div>
        </div>
        <div class="yun_reg_BasicInfo_list"> <span class="yun_reg_BasicInfo_s"> <i class="yun_reg_BasicInfo_i">*</i>毕业学历：</span>
           <div class="yun_reg_BasicInfo_l_s_box">
		  <select name="education" id="educationcid">
			<option value="">请选择毕业学历</option>

			<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_edu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" ><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
			<?php } ?>
			</select>
          </div>
        </div>
        <div class="yun_reg_BasicInfo_list"> <span class="yun_reg_BasicInfo_s"><i class="yun_reg_BasicInfo_i">*</i>所学专业：</span>
          <input type="text" class="yun_reg_BasicInfo_text" id="eduspec" name="eduspec" value="" placeholder="请填写所学专业">
        </div>
        <?php }?> 
        <!---end---> 
        <?php if ($_smarty_tpl->tpl_vars['config']->value['resume_create_project']=='1') {?> 
        <!--        近期项目-->
        <div class="yun_reg_BasicInfo_tit"><span class="">近期项目</span></div>
        <div class="yun_reg_BasicInfo_list"> <span class="yun_reg_BasicInfo_s"><i class="yun_reg_BasicInfo_i">*</i>项目名称：</span>
          <input type="text" class="yun_reg_BasicInfo_text" name="proname" id="proname" value="" placeholder="请填写项目名称">
        </div>
        <div class="yun_reg_BasicInfo_list"> <span class="yun_reg_BasicInfo_s"><i class="yun_reg_BasicInfo_i">*</i>担任职位：</span>
          <input type="text" class="yun_reg_BasicInfo_text" name="protitle" id="protitle" value="" placeholder="请填写担任职位">
        </div>
        <div class="yun_reg_BasicInfo_list"><span class="yun_reg_BasicInfo_s"><i class="yun_reg_BasicInfo_i">*</i>项目时间：</span>
          <div class="yun_reg_BasicInfo_timetext_box">
            <input type="text" name="prosdate" id="prosdate" value="" class="yun_reg_BasicInfo_timetext" placeholder="开始时间">
            <span class="yun_reg_BasicInfo_timeline">-</span>
            <input type="text" name="proedate" id="proedate" value="" class="yun_reg_BasicInfo_timetext" placeholder="结束时间">
          </div>
        </div>
        <div class="yun_reg_BasicInfo_list"> <span class="yun_reg_BasicInfo_s"><i class="yun_reg_BasicInfo_i">*</i>项目内容：</span>
          <textarea class="yun_reg_BasicInfo_listtextarea" id="procontent" name="procontent"placeholder="请对工作内容进行简单阐述~"></textarea>
        </div>
        <?php }?> 
        <!-- /*    end*/-->
           
        <div style="width:100%; float:left;height:80px;"></div>
         </div>
        <div class="yun_reg_BasicInfo_towbth_box">
          <input type='hidden' id='resume_edu' value='<?php echo $_smarty_tpl->tpl_vars['config']->value['resume_create_edu'];?>
'>
          <input type='hidden' id='resume_exp' value='<?php echo $_smarty_tpl->tpl_vars['config']->value['resume_create_exp'];?>
'>
          <input type='hidden' id='resume_pro' value='<?php echo $_smarty_tpl->tpl_vars['config']->value['resume_create_project'];?>
'>
		  <input name="jobid" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['Info']->value['id'];?>
" />
		  <input type="submit" value="保存并投递" class="yun_reg_BasicInfo_bth" />
          <input type="button" value="返回上一步>" class="" onclick="addresumereturn()" style="border:none; background:#fff;color:#a6a3a3;; margin-left:50px;">
    
      </div>
    </div>
  </div>
</div>
</form>
    <!------快速填写简历投递成功----->
	<div id="fastsuccess" style="display:none">
		<div class="job_prompt_box">
			
			<div class="job_prompt_box_pic"><i class="job_prompt_box_pic_icon"></i></div>
			<div class="job_prompt_box_writing"> 简历投递成功</div>
			<div class="job_prompt_box_p"> 您可以在  个人中心 -  简历管理  -  <a href="<?php echo smarty_function_url(array('m'=>'member','c'=>'resume'),$_smarty_tpl);?>
" class="job_prompt_box_look">我的简历</a>  中查看您创建的简历</div>

			<div class="job_prompt_box_maylike">您可能感兴趣的职位：</div>
			
			<div class="clear"></div>

			<ul class="job_prompt_box_maylike_list">
				<?php  $_smarty_tpl->tpl_vars['job_fast'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['job_fast']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
global $db,$db_config,$config;
		$time = time();
		
		
		//可以做缓存
        $paramer=array("limit"=>"2","noid"=>"'@Info.id'","jobids"=>"'@Info.job1'","namelen"=>"6","item"=>"'job_fast'","key"=>"'key'","nocache"=>"")
;
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
        $Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
		include_once  PLUS_PATH."/comrating.cache.php";
		include(CONFIG_PATH."db.data.php"); 
		if($config[sy_web_site]=="1"){
			if($config[province]>0 && $config[province]!=""){
				$paramer[provinceid] = $config[province];
			}
			if($config[cityid]>0 && $config[cityid]!=""){
				$paramer[cityid] = $config[cityid];
			}
			if($config[three_cityid]>0 && $config[three_cityid]!=""){
				$paramer[three_cityid] = $config[three_cityid];
			}
			if($config[hyclass]>0 && $config[hyclass]!=""){
				$paramer[hy]=$config[hyclass];
			}
		}

		
		if($paramer[sdate]){
			$where = "`sdate`>".strtotime("-".intval($paramer[sdate])." day",time())." and `state`=1";
		}else{
			$where = "`state`=1";
		}
		
		//按照UID来查询（按公司地址查询可用GET[id]获取当前公司ID）
		if($paramer[uid]){
			$where .= " AND `uid` = '$paramer[uid]'";
		}
		if($paramer[com_id]){
			$where .= " AND `uid` = '$paramer[com_id]'";
		}

		//是否推荐职位
		if($paramer[rec]){
			
			$where.=" AND `rec_time`>=".time();
			
		}
		//企业认证条件
		if($paramer['cert']){
			$job_uid=array();
			$company=$db->select_all("company","`yyzz_status`=1","`uid`");
			if(is_array($company)){
				foreach($company as $v){
					$job_uid[]=$v['uid'];
				}
			}
			$where.=" and `uid` in (".@implode(",",$job_uid).")";
		}
		//取不包含当前企业的职位
		if($paramer[nouid]){
			$where.= " and `uid`<>$paramer[nouid]";
		}
		//取不包含当前id的职位
		if($paramer[noid]){
			$where.= " and `id`<>$paramer[noid]";
		}
		//是否被锁定
		if($paramer[r_status]){
			$where.= " and `r_status`=2";
		}else{
			$where.= " and `r_status`=1";
		}
		//是否下架职位
		if($paramer[status]){
			$where.= " and `status`='1'";
		}else{
			$where.= " and `status`='0'";
		}
		//公司体制
		if($paramer[pr]){
			$where .= " AND `pr` =$paramer[pr]";
		}
		//公司行业分类
		if($paramer['hy']){
			$where .= " AND `hy` = $paramer[hy]";
		} 
		//职位大类
		if($paramer[job1]){
			$where .= " AND `job1` = $paramer[job1]";
		}
		//职位子类
		if($paramer[job1_son]){
			$where .= " AND `job1_son` = $paramer[job1_son]";
		}
		//职位三级分类
		if($paramer[job_post]){
			$where .= " AND (`job_post` IN ($paramer[job_post]))";
		}
		//您可能感兴趣的职位--个人会员中心
		if($paramer['jobwhere']){
			$where .=" and ".$paramer['jobwhere'];
		}
		//职位分类综合查询
		if($paramer['jobids']){
			$where.= " AND (`job1` = '$paramer[jobids]' OR `job1_son`= '$paramer[jobids]' OR `job_post`='$paramer[jobids]')";
		}
		//职位分类区间,不建议执行该查询
		if($paramer['jobin']){
			$where .= " AND (`job1` IN ($paramer[jobin]) OR `job1_son` IN ($paramer[jobin]) OR `job_post` IN ($paramer[jobin]))";
		}
		//城市大类
		if($paramer[provinceid]){
			$where .= " AND `provinceid` = $paramer[provinceid]";
		}
		//城市子类
		if($paramer['cityid']){
			$where .= " AND (`cityid` IN ($paramer[cityid]))";
		}
		//城市三级子类
		if($paramer['three_cityid']){
			$where .= " AND (`three_cityid` IN ($paramer[three_cityid]))";
		}
		if($paramer['cityin']){
			$where .= " AND `three_cityid` IN ($paramer[cityin])";
		}
		//学历
		if($paramer[edu]){
			$where .= " AND `edu` = $paramer[edu]";
		}
		//工作经验
		if($paramer[exp]){
			$where .= " AND `exp` = $paramer[exp]";
		}
		//到岗时间
		if($paramer[report]){
			$where .= " AND `report` = $paramer[report]";
		}
		//职位性质
		if($paramer[type]){
			$where .= " AND `type` = $paramer[type]";
		}
		//性别
		if($paramer[sex]){
			$where .= " AND `sex` = $paramer[sex]";
		}
		//应届生
		if($paramer[is_graduate]){
			$where .= " AND `is_graduate` = $paramer[is_graduate]";
		}
		//公司规模
		if($paramer[mun]){
			$where .= " AND `mun` = $paramer[mun]";
		}
		 
		if($paramer[minsalary] && $paramer[maxsalary]){
			$where.= " AND (`minsalary`>=".intval($paramer[minsalary])." and `minsalary`<=".intval($paramer[maxsalary])." and `maxsalary`<=".intval($paramer[maxsalary]).") ";
		}elseif($paramer[minsalary]&&!$paramer[maxsalary]){
			$where.= " AND (`minsalary`>=".intval($paramer[minsalary]).") ";
		}elseif(!$paramer[minsalary]&&$paramer[maxsalary]){
			$where.= " AND (`minsalary`<=".intval($paramer[maxsalary])." and `maxsalary`<=".intval($paramer[maxsalary]).") ";
		}

	    //福利待遇
	    $cache_array = $db->cacheget();
		$comclass_name = $cache_array["comclass_name"];
		if($paramer[welfare]){
			$welfarename=$comclass_name[$paramer[welfare]];
            $where .=" AND `welfare` LIKE '%".$welfarename."%' ";
		}
		
		//城市区间,不建议执行该查询
		if($paramer[cityin]){
			$where .= " AND (`provinceid` IN ($paramer[cityin]) OR `cityid` IN ($paramer[cityin]) OR `three_cityid` IN ($paramer[cityin]))";
		}
		//紧急招聘urgent
		if($paramer[urgent]){
			$where.=" AND `urgent_time`>".time();
		}
		//更新时间区间
		if($paramer[uptime]){
			if($paramer[uptime]==1){
				$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
				$where.=" AND lastupdate>$beginToday";
			}else{
				$time=time();
				$uptime = $time-($paramer[uptime]*86400);
				$where.=" AND lastupdate>$uptime";
			}
		}
		//按类似公司名称,不建议进行大数据量操作
		if($paramer[comname]){
			$where.=" AND `com_name` LIKE '%".$paramer[comname]."%'";
		}
		//按公司归属地,只适合查询一级城市分类
		if($paramer[com_pro]){
			$where.=" AND `com_provinceid` ='".$paramer[com_pro]."'";
		}
		//按照职位名称匹配
		if($paramer[keyword]){
			$where1[]="`name` LIKE '%".$paramer[keyword]."%'";
			$where1[]="`com_name` LIKE '%".$paramer[keyword]."%'";
			include  PLUS_PATH."/city.cache.php";
			foreach($city_name as $k=>$v){
				if(strpos($v,$paramer[keyword])!==false){
					$cityid[]=$k;
				}
			}
			if(is_array($cityid)){
				foreach($cityid as $value){
					$class[]= "(provinceid = '".$value."' or cityid = '".$value."')";
				}
				$where1[]=@implode(" or ",$class);
			}
			$where.=" AND (".@implode(" or ",$where1).")";
		}

		//多选职位
		if($paramer["job"]){
			$where.=" AND `job_post` in ($paramer[job])";
		}
		//置顶招聘
		if($paramer[bid]){
			if($config[joblist_top]!=1){
				$paramer[limit] = 5;
			}
			$where.="  and `xsdate`>'".time()."'";
		} 
		
		//自定义查询条件，默认取代上面任何参数直接使用该语句
		if($paramer[where]){
			$where = $paramer[where];
		}

		//查询条数
		$limit = '';
		if($paramer[limit]){

			$limit = " limit ".$paramer[limit];
		}
		if($paramer[ispage]){
			$limit = PageNav($paramer,$_GET,"company_job",$where,$Purl,"",$paramer[islt]?$paramer[islt]:"6",$_smarty_tpl);        
		}

		//排序字段默认为更新时间
		//置顶设置为随机5条时，随机查询
		if($paramer[bid] && $paramer[limit]){
			$order = " ORDER BY rand() ";
		}else{
			if($paramer[order] && $paramer[order]!="lastdate"){
				$order = " ORDER BY ".str_replace("'","",$paramer[order])."  ";
			}else{
				$order = " ORDER BY `lastupdate` ";
			}
		}
		//排序规则 默认为倒序
		if($paramer[sort]){
			$sort = $paramer[sort];
		}else{
			$sort = " DESC";
		} 
		$where.=$order.$sort;
		 
		$job_fast = $db->select_all("company_job",$where.$limit);

		if(is_array($job_fast) && !empty($job_fast)){
			//处理类别字段
			$cache_array = $db->cacheget();
			$comuid=$jobid=array();
			foreach($job_fast as $key=>$value){
				if(in_array($value['uid'],$comuid)==false){$comuid[] = $value['uid'];}
				if(in_array($value['id'],$jobid)==false){$jobid[] = $value['id'];} 
			}
			$comuids = @implode(',',$comuid);
			$jobids = @implode(',',$jobid);
			
			if($comuids){
				$r_uids=$db->select_all("company","`uid` IN (".$comuids.")","`uid`,`yyzz_status`,`logo`,`logo_status`,`pr`,`hy`,`mun`,`shortname`,`welfare`,`hotstart`,`hottime`");
				if(is_array($r_uids)){
					foreach($r_uids as $key=>$value){
						if($value[shortname]){
    						$value['shortname_n'] = $value[shortname];
    					}
						if(!$value['logo'] || $value['logo_status']!=0){
							$value['logo'] = checkpic("",$config['sy_unit_icon']);
						}else{
							$value['logo']= checkpic($value['logo']);
						}
						$value['pr_n'] = $cache_array['comclass_name'][$value[pr]];
						$value['hy_n'] = $cache_array['industry_name'][$value[hy]];
						$value['mun_n'] = $cache_array['comclass_name'][$value[mun]];
						if($value['hotstart']<=time() && $value['hottime']>=time()){
							$value['hotlogo'] = 1;
						}
						$r_uid[$value['uid']] = $value;
					}
				}
			}
			
 			if($paramer[bid]){
				$noids=array();
			}	
			foreach($job_fast as $key=>$value){

				if($paramer[bid]){
					$noids[] = $value[id];
				}
				//筛除重复
				if($paramer[noids]==1 && !empty($noids) && in_array($value['id'],$noids)){
					unset($job_fast[$key]);
					continue;
				}else{
					$job_fast[$key] = $db->array_action($value,$cache_array);
					$job_fast[$key][stime] = date("Y-m-d",$value[sdate]);
					$job_fast[$key][etime] = date("Y-m-d",$value[edate]);
					if($arr_data['sex'][$value['sex']]){
						$job_fast[$key][sex_n]=$arr_data['sex'][$value['sex']];
					}
					$job_fast[$key][lastupdate] = date("Y-m-d",$value[lastupdate]);
					if($value[minsalary]&&$value[maxsalary]){
						$job_fast[$key][job_salary] =$value[minsalary]."-".$value[maxsalary];
					}elseif($value[minsalary]){
						$job_fast[$key][job_salary] =$value[minsalary]."以上";
					}else{
						$job_fast[$key][job_salary] ="面议";
					}
					if($r_uid[$value['uid']][shortname]){
						$job_fast[$key][com_name] =$r_uid[$value['uid']][shortname];
					}
					$job_fast[$key][yyzz_status] =$r_uid[$value['uid']][yyzz_status];
					$job_fast[$key][logo] =$r_uid[$value['uid']][logo];
					$job_fast[$key][pr_n] =$r_uid[$value['uid']][pr_n];
					$job_fast[$key][hy_n] =$r_uid[$value['uid']][hy_n];
					$job_fast[$key][mun_n] =$r_uid[$value['uid']][mun_n];
					$job_fast[$key][hotlogo] =$r_uid[$value['uid']][hotlogo];
					$time=$value['lastupdate'];
					//今天开始时间戳
					$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
					//昨天开始时间戳
					$beginYesterday=mktime(0,0,0,date('m'),date('d')-1,date('Y'));
					//一周内时间戳
					$week=strtotime(date("Y-m-d",strtotime("-1 week")));
					if($time>$week && $time<$beginYesterday){
						$job_fast[$key]['time'] ="一周内";
					}elseif($time>$beginYesterday && $time<$beginToday){
						$job_fast[$key]['time'] ="昨天";
					}elseif($time>$beginToday){	
						$job_fast[$key]['time'] = date("H:i",$value['lastupdate']);
						$job_fast[$key]['redtime'] =1;
					}else{
						$job_fast[$key]['time'] = date("Y-m-d",$value['lastupdate']);
					}
    
                     // 前天
    				$beforeYesterday=mktime(0,0,0,date('m'),date('d')-2,date('Y'));

					if($value['sdate']>$beforeYesterday){
						$job_fast[$key]['newtime'] =1;
					}
					//获得福利待遇名称
					if($value[welfare]){
						$welfareList = @explode(',',$value[welfare]);

						if(!empty($welfareList)){
							$job_fast[$key][welfarename] =$welfareList;
						}
					}
					//截取公司名称
					if($paramer[comlen]){
						if($r_uid[$value['uid']][shortname]){
							$job_fast[$key][com_n] = mb_substr($r_uid[$value['uid']][shortname],0,$paramer[comlen],"utf-8");
						}else{
							$job_fast[$key][com_n] = mb_substr($value['com_name'],0,$paramer[comlen],"utf-8");
						}
					}
					//截取职位名称
					if($paramer[namelen]){
						if($value['rec_time']>time()){
							$job_fast[$key][name_n] = "<font color='red'>".mb_substr($value['name'],0,$paramer[namelen],"utf-8")."</font>";
						}else{
							$job_fast[$key][name_n] = mb_substr($value['name'],0,$paramer[namelen],"utf-8");
						}
					}else{
						if($value['rec_time']>time()){
							$job_fast[$key]['name_n'] = "<font color='red'>".$value['name']."</font>";
						}
					}
					//构建职位伪静态URL
					$job_fast[$key][job_url] = Url("job",array("c"=>"comapply","id"=>$value[id]),"1");
					//构建企业伪静态URL
					$job_fast[$key][com_url] = Url("company",array("c"=>"show","id"=>$value[uid]));
					
					foreach($comrat as $k=>$v){
						if($value[rating]==$v[id]){
							$job_fast[$key][color] = str_replace("#","",$v[com_color]);
							if($v[com_pic]){
								$job_fast[$key][ratlogo] = checkpic($v[com_pic]);
							}
							$job_fast[$key][ratname] = $v[name];
						}
					}
					if($paramer[keyword]){
						$job_fast[$key][name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[name]);
						$job_fast[$key][com_name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[com_name]);
						$job_fast[$key][name_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$job_fast[$key][name_n]);
						$job_fast[$key][com_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$job_fast[$key][com_n]);
						$job_fast[$key][job_city_one]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[provinceid]]);
						$job_fast[$key][job_city_two]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[cityid]]);
					}
				}
			}
			if(is_array($job_fast)){
				if($paramer[keyword]!=""&&!empty($job_fast)){
					addkeywords('3',$paramer[keyword]);
				}
			}
		}$job_fast = $job_fast; if (!is_array($job_fast) && !is_object($job_fast)) { settype($job_fast, 'array');}
foreach ($job_fast as $_smarty_tpl->tpl_vars['job_fast']->key => $_smarty_tpl->tpl_vars['job_fast']->value) {
$_smarty_tpl->tpl_vars['job_fast']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['job_fast']->key;
?>
				<li>
					<div class="job_prompt_box_maylike_name"><a href="<?php echo $_smarty_tpl->tpl_vars['job_fast']->value['job_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['job_fast']->value['name'];?>
</a></div>
					<div class="job_prompt_box_maylike_xz"><?php echo $_smarty_tpl->tpl_vars['job_fast']->value['job_salary'];?>
</div>
					<div class="job_prompt_box_maylike_comname"><?php echo mb_substr($_smarty_tpl->tpl_vars['job_fast']->value['com_name'],0,13,'utf-8');?>
</div>
					<a href="<?php echo $_smarty_tpl->tpl_vars['job_fast']->value['job_url'];?>
" class="job_prompt_box_maylike_sq">申请</a>
				</li>
				<?php } ?>
			</ul>
			
			<div class="clear"></div>
			
			<div class="job_prompt_box_ok"> 
				<a href="<?php echo smarty_function_url(array('m'=>'job'),$_smarty_tpl);?>
" class="job_prompt_box_ok_bth job_prompt_box_ok_bthw170">查看更多职位</a>
			</div>

		</div>
	</div> 

<?php }?>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
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
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/lazyload.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/member_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/js/company.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/js/pack.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['mapurl'];?>
" charset="utf-8"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/map.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui.upload.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type='text/javascript'><?php echo '</script'; ?>
>
<!--[if IE 6]>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/png.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
	DD_belatedPNG.fix('.png');
	<?php echo '</script'; ?>
>
<![endif]-->

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/public_search/login.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo '<script'; ?>
>
$(function(){
	'<?php if ($_smarty_tpl->tpl_vars['usertype']->value==1) {?>'
		var id = '<?php echo $_GET['id'];?>
';
		$.post('index.php?c=comapply&a=history',{id:id},function(data){
			if(data){
				return true;			
			}
		})
	'<?php }?>'
}) 
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
	layui.use(['form'], function(){
		var form = layui.form
			,$ = layui.$;
	});
	

	var weburl='<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
';
	var headerfix = '<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_header_fix'];?>
';
	    window.onload = function() {
	        var oDiv = document.getElementById("float"),
	            H = 600,
	            Y = oDiv;
	        while(Y) {
	            H += Y.offsetTop;
	            Y = Y.offsetParent;
	        }
	        window.onscroll = function() {
	            var s = document.body.scrollTop || document.documentElement.scrollTop
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
	    }
	    layui.use('laydate', function() {
	        var laydate = layui.laydate;
	        laydate.render({
	            elem: '#birthday',
	            max: -5113,
	            value: '1990-01-01'
	        });
			monthclick(laydate,'#worksdate',1);
			monthclick(laydate,'#workedate',1);
			monthclick(laydate,'#edusdate',1);
			monthclick(laydate,'#eduedate',1);
			monthclick(laydate,'#prosdate',1);
			monthclick(laydate,'#proedate',1);
	    });

		$(function() {
		   $(".job_hr_left_ly").click(function() {
			   $("#hrmsg").show(500);
		   });
		   $("#hrmsg").hover(function() {
			   $("#hrmsg").show();
		   }, function() {
			   $("#hrmsg").hide(500);
		   });
		   var cheight = $("#job_content").height();
		   if(parseInt(cheight) > 270) {
			   $("#job_content").attr('style', 'width:100%;height:270px; overflow:hidden');
			   $(".company_show_more").show();
		   }
		});

		function showcc() {
			$("#job_content").attr('style', 'width:100%;height:auto; overflow:hidden');
			$(".company_show_more").find('a').html('收起');
			$(".company_show_more").find('a').attr('onclick', 'hidecc()');
		}

		function hidecc() {
			$("#job_content").attr('style', 'width:100%;height:270px; overflow:hidden');
			$(".company_show_more").find('a').html('查看更多');
			$(".company_show_more").find('a').attr('onclick', 'showcc()');
		}

		function showmap(id) {
			$.layer({
				type: 1,
				title: '地图展示',
				closeBtn: [0, true],
				offset: ['50px', ''],
				border: [10, 0.3, '#000', true],
				area: ['1100px', 'auto'],
				page: {
					dom: "#" + id
				}
			});
			getmapshowcont('map_container', "<?php echo $_smarty_tpl->tpl_vars['Info']->value['x'];?>
", "<?php echo $_smarty_tpl->tpl_vars['Info']->value['y'];?>
", "<?php echo $_smarty_tpl->tpl_vars['Info']->value['com_name'];?>
", "<?php echo $_smarty_tpl->tpl_vars['Info']->value['address'];?>
");
		}
	   //公交查询
	   function bus_query() {
		   var map_start = $.trim($("#map_start").val());
		   if(map_start == "") {
			   layer.msg("请输入线路查询起点");
			   return false;
		   }
		   var map_end = $.trim($("#map_end").val());
		   var map = new BMap.Map("map_container");
		   map.centerAndZoom(new BMap.Point('<?php echo $_smarty_tpl->tpl_vars['Info']->value['x'];?>
', '<?php echo $_smarty_tpl->tpl_vars['Info']->value['y'];?>
'), 12);
		   map.clearOverlays();
		   var transit = new BMap.TransitRoute(map, {
			   renderOptions: {
				   map: map,
				   panel: "r-result"
			   },
			   onResultsHtmlSet: function() {
				   $("#r-result").show()
			   }
		   });

		   transit.search(map_start, map_end);
	   }
	   //驾车查询
	   function map_drving() {
		   var map_start = $.trim($("#map_start").val());
		   if(map_start == "") {
			   layer.msg("请输入线路查询起点");
			   return false;
		   }
		   var map_end = $.trim($("#map_end").val());
		   var map = new BMap.Map("map_container");
		   map.clearOverlays();
		   map.centerAndZoom(new BMap.Point('<?php echo $_smarty_tpl->tpl_vars['Info']->value['x'];?>
', '<?php echo $_smarty_tpl->tpl_vars['Info']->value['y'];?>
'), 12);
		   var driving = new BMap.DrivingRoute(map, {
			   renderOptions: {
				   map: map,
				   panel: "r-result",
				   autoViewport: true
			   }
		   });
		   driving.search(map_start, map_end);
	   }

	   function checksm() {
		   $('#shenming').hide();
		   $("#smtext").show();
	   }

	   function searchtype(id) {
		   $(".search_curs").removeClass("search_curs");
		   $("#type" + id).addClass("search_curs");
		   $(".contentBox_conts").hide();
		   $("#type_" + id).show();
	   }

	   function subsm(id) {
		   var shenming = $("#smname").val();
		   $.post(weburl + "/index.php?m=job&c=shenming", {
			   id: id,
			   shenming: shenming
		   }, function(data) {
			   if(data) {
				   location.reload();
			   }
		   });
	   }
		
		/*	联系方式	  */
		function showtel(id) {
		   var loadi = layer.load('执行中，请稍候...',0);  
		   $.post(weburl + "/job/index.php?c=comapply&a=gettel", {
			   id: id
		   }, function(data) {
			   layer.close(loadi);
			   if(data == 1) {
					layer.msg('企业暂未开放职位联系方式，请直接投递简历！', 2, 8);
			   } else if(data == 2) {
					layer.msg('系统未开放联系方式，请直接投递简历！', 2, 8);
			   } else if(data == 3) {
					layer.msg('只有求职者才能查看企业联系方式', 2, 8);
			   } else if(data == 7) {
					layer.msg('简历通过才能查看企业联系方式', 2, 8);
			   } else if(data == 8){
					layer.msg('数据错误', 2, 8);
			   } else {
					
					if(data == 4) {
						$('#addresume').html('花1分钟填个简历，联系电话任意看   <a href="<?php echo smarty_function_url(array('m'=>'member','c'=>'expect','act'=>'add'),$_smarty_tpl);?>
" target=\'_blank\' class="jobtel_box_t_box_cj">立即创建</a>');
						$('#addresume').show();
					} else if(data == 5) {
						$('#addresume').html('投递简历，联系电话任意看  ');
						$('#addresume').show();
					} else {
						var data = eval('(' + data + ')');
						$('#linkman').html(data.linkman);
						$('#linktel').html(data.linktel);
						$('#linkphone').html(data.linkphone);
						if(data.linkqq) {
							$('#linkqq').html('联系Q Q：' + data.linkqq + ' <a target="_blank" href="tencent://message/?uin=' + data.linkqq + '&Site=<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
&Menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=1:' + data.linkqq + ':13" alt="点击这里给我发消息"></a>');
							$('#linkqq').show();
						}
					}
					$.layer({
						type: 1,
						title: '联系方式',
						closeBtn: [0, true],
						offset: ['100px', ''],
						border: [10, 0.3, '#000', true],
						area: ['460px', '270px'],
						page: {
							dom: "#tel_show"
						}
					});
			   }
		   });
		}
	    
		function showmessage(uid,usertype){
			if(uid){
				  
				if(usertype!=1){
					layer.msg('只有求职者可以提问！', 2, 8);return false;
				}

				var msgLayer	=	layer.open({
					
					type		:	1,
					title		:	'我要提问',
					closeBtn	:	1,
					border		: 	[10, 0.3, '#000', true],
					area		: 	['auto', 'auto'],
					content		: 	$("#showmessage")
				});
			}else{
				showlogin(1);
			}
			
		}

		function returnmessagejobfast(frame_id){ 
			if(frame_id==''||frame_id==undefined){
				frame_id='supportiframefast';
			}
			
			var message = $(window.frames[frame_id].document).find("#layer_msg").val(); 
			
			if(message != null){
				
				var url=$(window.frames[frame_id].document).find("#layer_url").val();
				var layer_time=$(window.frames[frame_id].document).find("#layer_time").val();
				var layer_st=$(window.frames[frame_id].document).find("#layer_st").val();
				var layer_url = $(window.frames[frame_id].document).find("#layer_url").val();
				
				layer.closeAll('loading');
				
				if(layer_st=='9'){
					layer.closeAll();
					$.layer({
						type : 1,
						fix : false,
						maxmin : false,
						shadeClose : true,
						title : '简历投递成功',
						closeBtn : [ 0, true ],
						area : [ '550px', '500px' ],
						page : {
							dom : "#fastsuccess"
						}
					})
				}else{
					if(url=='1'){
						layer.msg(message, layer_time, Number(layer_st),function(){window.location.reload();window.event.returnValue = false;return false;});
					}else if(url==''){
						layer.msg(message, layer_time, Number(layer_st));
					}else{
						layer.msg(message, layer_time, Number(layer_st),function(){window.location.href = url;window.event.returnValue = false;return false;});
					}
				} 
			}
		}

	<?php echo '</script'; ?>
> 

	<iframe id="supportiframefast" name="supportiframefast" onload="returnmessagejobfast('supportiframefast');" class="none"></iframe>
	<iframe id="supportiframe" name="supportiframe" onload="returnmessage('supportiframe');" class="none"></iframe> 


<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
