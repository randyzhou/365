<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-01 01:09:08
         compiled from "D:\rcw\uploads\app\template\member\com\index.htm" */ ?>
<?php /*%%SmartyHeaderCode:2700581665f9d9a3455cd59-14479572%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d767cae5a428135ae6eec090846bea0d732a70a' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\member\\com\\index.htm',
      1 => 1577701447,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2700581665f9d9a3455cd59-14479572',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company' => 0,
    'spid' => 0,
    'yyzz' => 0,
    'vipIsDown' => 0,
    'statis' => 0,
    'config' => 0,
    'company_rating' => 0,
    'todayEnd' => 0,
    'todayStart' => 0,
    'member' => 0,
    'des_resume' => 0,
    'de_resume' => 0,
    'msgnum' => 0,
    'look_jobnum' => 0,
    'paying' => 0,
    'normal_job_num' => 0,
    'addjobnum' => 0,
    'breakjobNums' => 0,
    'jobids' => 0,
    'com_style' => 0,
    'guweninfo' => 0,
    'kfqq' => 0,
    'qrcode' => 0,
    'un_refreshjob_num' => 0,
    'ggnum' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5f9d9a345cf1a2_45572295',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9d9a345cf1a2_45572295')) {function content_5f9d9a345cf1a2_45572295($_smarty_tpl) {?><?php if (!is_callable('smarty_function_sign')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.sign.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo '<script'; ?>
>

    function Close(id) {
        $("#" + id).hide();
        $("#bg").hide();
    }
    function Next() {
        $("#one_tip").hide();
        $("#two_tip").show();
    }
    function showindextip(id) {
        $(".indextiphide").hide();
        $("#indextiphide" + id).show();
    }
    function hideindextip() {
        $(".indextiphide").hide();
        $("#bg").hide();
    }
<?php echo '</script'; ?>
>

<div class="w1000">
	<div class="admin_mainbody">

		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		
		<?php if ($_smarty_tpl->tpl_vars['company']->value['hy']==''&&($_GET['c']=='index'||$_GET['c']=='')) {?>
		
		<div id="bg" style="display: block"></div>
		
		<!--发布职位提示-->
		<div class="yun_com_indextip indextiphide" style="display: block;">
			<div class="yun_com_indextip_box">
				<i class="yun_com_indextip_jt"></i> <i class="yun_com_indextip_jl"></i>
				<div class="yun_com_indextip_p">在这里可以发布职位</div>
				<a href="javascript:void(0);" onclick="showindextip('1');" class="yun_com_indexbth_next">下一步</a> 
				<a href="javascript:void(0);" onclick="hideindextip();" class="yun_com_indexbth_tg">跳过</a>
			</div>
		</div>

		<!--应聘简历提示-->
		<div class="yun_resume_indextip indextiphide" id="indextiphide1" style="display: none;">
			<div class="yun_com_indextip_box">
				<i class="yun_com_indextip_jt"></i> <i class="yun_resume_indextip_jl"></i>
				<div class="yun_com_indextip_p">在这里可以查看应聘者的简历</div>
				<a href="javascript:void(0);" onclick="showindextip('2');" class="yun_com_indexbth_next">下一步</a> 
				<a href="javascript:void(0);" onclick="hideindextip();" class="yun_com_indexbth_tg">跳过</a>
			</div>
		</div>

		<!--cw职位提示-->
		<div class="yun_tg_indextip indextiphide" id="indextiphide2" style="display: none;">
			<div class="yun_com_indextip_box">
				<i class="yun_com_indextip_jt"></i> <i class="yun_com_indextip_cw"></i>
				<div class="yun_com_indextip_p">在这里可以推广职位</div>
				<a href="javascript:void(0);" onclick="showindextip('3');" class="yun_com_indexbth_next">下一步</a> 
				<a href="javascript:void(0);" onclick="hideindextip();" class="yun_com_indexbth_tg">跳过</a>
			</div>
		</div>

		<!--基本资料提示-->
		<div class="yun_info_indextip indextiphide" id="indextiphide3" style="display: none;">
			<div class="yun_com_indextip_box">
				<i class="yun_com_indextip_jt"></i> <i class="yun_info_indextip_zl"></i>
				<div class="yun_com_indextip_p">
					<div class="yun_com_indextip_p_may">在这里可以</div>
					完善企业基本资料
				</div>
				<a href="index.php?c=info" class="yun_com_indexbth_next">完善资料</a> 
				<a href="javascript:void(0);" onclick="hideindextip();" class="yun_com_indexbth_tg">跳过</a>
			</div>
		</div>

		<?php }?>
		
		<?php if (empty($_smarty_tpl->tpl_vars['spid']->value)&&($_smarty_tpl->tpl_vars['company']->value['r_status']!=1||!$_smarty_tpl->tpl_vars['company']->value['name']||!$_smarty_tpl->tpl_vars['yyzz']->value||$_smarty_tpl->tpl_vars['vipIsDown']->value||($_smarty_tpl->tpl_vars['statis']->value['remind']==1&&!$_smarty_tpl->tpl_vars['vipIsDown']->value))) {?>
			<!--滚动-->
        <div class="yun_Announcement" style="display:none;">
        <ul class="tiplist">
			<?php if ($_smarty_tpl->tpl_vars['company']->value['r_status']!=1) {?>
			
					<?php if ($_smarty_tpl->tpl_vars['company']->value['r_status']==0) {?>
						 <li class="one">友情提醒：<span>您的帐号尚未审核，职位将在审核通过后展示</span>
						<span id="forms" >暂时无法查看简历的联系方式，我们会24小时内进行审核请保持电话畅通
						</span>	</li>
					<?php } elseif ($_smarty_tpl->tpl_vars['company']->value['r_status']==2||$_smarty_tpl->tpl_vars['company']->value['r_status']==4) {?>
						 <li class="one">友情提醒：您的帐号已被锁定，锁定原因请咨询客服（<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>
）	</li>
					<?php } elseif ($_smarty_tpl->tpl_vars['company']->value['r_status']==3) {?>
					 <li class="one">友情提醒：您的帐号未通过审核，请重新完善资料，详情咨询（<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>
）	</li>
					<?php }?>
		
			<?php }?> 
           
            <?php if (!$_smarty_tpl->tpl_vars['company']->value['name']&&empty($_smarty_tpl->tpl_vars['spid']->value)) {?><li class="three">友情提醒：贵公司的资料还未填写完整，暂时还不可以发布职位哦!  <span class="tiplist_bth"><a href="index.php?c=info">完善资料></a></span></li><?php }?> 
             <?php if (!$_smarty_tpl->tpl_vars['yyzz']->value&&empty($_smarty_tpl->tpl_vars['spid']->value)) {?><li class="two">友情提醒：提升招聘效果，获得人才信任度，从认证营业执照开始~ <span class="tiplist_bth"><a href="index.php?c=binding">立即认证></a></span></li><?php }?> 
            
            <?php if ($_smarty_tpl->tpl_vars['vipIsDown']->value&&empty($_smarty_tpl->tpl_vars['spid']->value)) {?>
            <li class="four">友情提醒：您办理的会员已到期！为保证您的服务正常使用，请尽快开通会员套餐，开通会员套餐有优惠哦~     <span class="tiplist_bth"><a href="index.php?c=right">查看详细></a></span>  </li>
            <?php } elseif ($_smarty_tpl->tpl_vars['statis']->value['remind']==1&&empty($_smarty_tpl->tpl_vars['spid']->value)&&!$_smarty_tpl->tpl_vars['vipIsDown']->value) {?>
            <li class="four">友情提醒：您办理的会员将于近期到期！为保证您的服务正常使用，请尽快办理续费，续费套餐有优惠哦~     <span class="tiplist_bth"><a href="index.php?c=right">查看详细></a></span></li>
            <?php }?>
          
        </ul>
</div>
<!--滚动-->
		<?php }?>

		<div class="clear"></div>
		
		<!--------------------------------  首页---------------------------------------->
		<div class="comindex_info_box mt20">
			<div class="com_index_sign_box <?php if (!empty($_smarty_tpl->tpl_vars['spid']->value)) {?>none<?php }?>">
				<div class="com_index_sign"><?php echo smarty_function_sign(array(),$_smarty_tpl);?>
</div>
			</div>
			<div class="comindex_info_logo">
				<div class="comindex_info_logo_img">
					<a href="<?php if (empty($_smarty_tpl->tpl_vars['spid']->value)) {?>index.php?c=uppic<?php } else { ?>javascript:void(0);<?php }?>" class=""> <img src="<?php echo $_smarty_tpl->tpl_vars['company']->value['logo'];?>
" width="100" height="100" /></a>
				</div>
				<?php if (empty($_smarty_tpl->tpl_vars['spid']->value)) {?>
				<a href="index.php?c=uppic" class="comindex_info_logo_a cblue">修改LOGO</a>
				<?php }?>
			</div>

			<div class="comindex_comname">
				<?php if ($_smarty_tpl->tpl_vars['company']->value['name']) {?> 
				
					<?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
 
					<?php if ($_smarty_tpl->tpl_vars['company_rating']->value['com_pic']) {?> <img src="<?php echo $_smarty_tpl->tpl_vars['company_rating']->value['com_pic'];?>
" width="16"> <?php }?> 
				<?php } elseif (empty($_smarty_tpl->tpl_vars['spid']->value)) {?> 
				
					<a href="index.php?c=info" style="color: #f60; text-decoration: underline">您还未完善企业信息，点击完善！</a>
				<?php }?>
			</div>

			<div class="com_m_index_vip_box">
				我的服务：<span class="com_m_index_vip_box_c"><?php echo $_smarty_tpl->tpl_vars['statis']->value['rating_name'];?>
</span>&nbsp;&nbsp;&nbsp;
				会员服务时间： 
				<span class="f60"> 
					<?php if ($_smarty_tpl->tpl_vars['statis']->value['vip_etime']>$_smarty_tpl->tpl_vars['todayEnd']->value) {?> 
						<em class="com_m_index_vip_box_c_3"> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['statis']->value['vip_stime'],'%Y.%m.%d');?>
-</em>
						<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['statis']->value['vip_etime'],'%Y-%m-%d');?>

					<?php } elseif ($_smarty_tpl->tpl_vars['statis']->value['vip_etime']==0) {?>
						<em class="com_m_index_vip_box_c_3"> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['statis']->value['vip_stime'],'%Y.%m.%d');?>
-</em>永久
					<?php } else { ?>
						<em class="com_m_index_vip_box_c_3"> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['statis']->value['vip_stime'],'%Y.%m.%d');?>
-</em><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['statis']->value['vip_etime'],'%Y.%m.%d');?>

					<?php }?>
				</span> 
				<?php if (empty($_smarty_tpl->tpl_vars['spid']->value)) {?>
				<a href="index.php?c=right" class="com_m_index_vip_sj"><i class="com_m_index_vip_sj_icon"></i>升级VIP会员</a> 
					<?php if ($_smarty_tpl->tpl_vars['statis']->value['vip_etime']>$_smarty_tpl->tpl_vars['todayStart']->value) {?>
					<a href="index.php?c=right&act=added" class="com_m_index_vip_a">购买增值包</a>
					<?php }?>
				<?php }?>
			</div>
			
			<div class="comindex_rz ">
			
				
				
				<?php if ($_smarty_tpl->tpl_vars['company']->value['moblie_status']=='1') {?> 
					<a title="手机已验证" href="<?php if (empty($_smarty_tpl->tpl_vars['spid']->value)) {?>index.php?c=binding<?php } else { ?>javascript:void(0);<?php }?>" class="comindex_rz_a"> <i class="comindex_rz_icon comindex_rz_sjyrz"></i>手机已验证 </a> 
				<?php } else { ?> 
					<a title="手机未验证" href="<?php if (empty($_smarty_tpl->tpl_vars['spid']->value)) {?>index.php?c=binding<?php } else { ?>javascript:void(0);<?php }?>" class="comindex_rz_a"> <i class="comindex_rz_icon comindex_rz_sjwrz"></i>手机未验证</a>
				<?php }?> 
				
				<?php if ($_smarty_tpl->tpl_vars['company']->value['yyzz_status']=='1') {?> 
					<a title="营业执照已验证" href="<?php if (empty($_smarty_tpl->tpl_vars['spid']->value)) {?>index.php?c=binding<?php } else { ?>javascript:void(0);<?php }?>" id="biza" class="comindex_rz_a"> <i class="comindex_rz_icon comindex_rz_zzyrz"></i>营业执照已验证 </a> 
				<?php } else { ?> 
					<a title="营业执照未验证" href="<?php if (empty($_smarty_tpl->tpl_vars['spid']->value)) {?>index.php?c=binding<?php } else { ?>javascript:void(0);<?php }?>" id="biza" class="comindex_rz_a"> <i class="comindex_rz_icon comindex_rz_zzwrz"></i>营业执照未验证</a> 
				<?php }?>
				
				<?php if ($_smarty_tpl->tpl_vars['member']->value['wxopenid']!=''||$_smarty_tpl->tpl_vars['member']->value['wxid']!='') {?>
					<a title="微信已绑定" href="<?php if (empty($_smarty_tpl->tpl_vars['spid']->value)) {?>index.php?c=binding<?php } else { ?>javascript:void(0);<?php }?>" class="comindex_rz_a"> <i class="comindex_rz_icon comindex_rz_wxybd"></i>微信已绑定 </a> 
                <?php } else { ?>
					<a title="微信未绑定" href="<?php if (empty($_smarty_tpl->tpl_vars['spid']->value)) {?>index.php?c=binding<?php } else { ?>javascript:void(0);<?php }?>" class="comindex_rz_a"> <i class="comindex_rz_icon comindex_rz_wxwbd"></i>微信未绑定 </a> 
				<?php }?>
				
                <?php if ($_smarty_tpl->tpl_vars['company']->value['email_status']=='1') {?> 
					<a title="邮件已验证" href="<?php if (empty($_smarty_tpl->tpl_vars['spid']->value)) {?>index.php?c=binding<?php } else { ?>javascript:void(0);<?php }?>" class="comindex_rz_a"> <i class="comindex_rz_icon comindex_rz_yxyrz"></i>邮箱已验证 </a> 
				<?php } else { ?> 
					<a title="邮件未验证" href="<?php if (empty($_smarty_tpl->tpl_vars['spid']->value)) {?>index.php?c=binding<?php } else { ?>javascript:void(0);<?php }?>" class="comindex_rz_a"> <i class="comindex_rz_icon comindex_rz_yxwrz"></i>邮箱未验证 </a>
				<?php }?> 
			</div>
			
			<div class="comindex_cz">
				<div class="comindex_cz_list">
					<?php if (empty($_smarty_tpl->tpl_vars['spid']->value)) {?>
					<a href="index.php?c=info" class="comindex_cz_a cblue"><i class="comindex_cz_icon"></i>编辑资料</a> 
					<i class="comindex_cz_line">|</i>
					<?php }?>
					<a href="<?php echo smarty_function_url(array('m'=>'company','c'=>'show','id'=>'`$uid`'),$_smarty_tpl);?>
" target="_blank" class="comindex_cz_a cblue "><i class="comindex_cz_icon comindex_cz_icon_yl"></i>预览主页</a> 
					<?php if (empty($_smarty_tpl->tpl_vars['spid']->value)) {?>
					<i class="comindex_cz_line">|</i> 
					<a href="index.php?c=comtpl" class="comindex_cz_a cblue"> <i class="comindex_cz_icon comindex_cz_icon_set"></i>模板设置</a>
					<?php }?>	
				</div>
			</div>
			
		</div>

		<div class="clear"></div>
        
		<div class="com_member_newindexbox">
		
			<div class="com_member_newindex_data">
				<div class="com_member_newindex_data_list">
					<a href="index.php?c=hr"> 
						<span class="com_member_newindex_data_name"><i class="com_member_newindex_data_icon"></i>收到的简历</span> 
						<span class="com_member_newindex_data_n"> <?php echo $_smarty_tpl->tpl_vars['des_resume']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['de_resume']->value>0) {?> <i class="yun_m_index_data_list_n_new"><?php echo $_smarty_tpl->tpl_vars['de_resume']->value;?>
</i><?php }?></span>
					</a>
				</div>
				<div class="com_member_newindex_data_list">
					<a href='index.php?c=msg'> 
						<span class="com_member_newindex_data_name"> <i class="com_member_newindex_data_icon com_member_newindex_data_icon_zx"></i>求职者咨询</span> 
						<span class="com_member_newindex_data_n"><?php echo $_smarty_tpl->tpl_vars['msgnum']->value;?>
</span>
					</a>
				</div>

				<div class="com_member_newindex_data_list">
					<a href="index.php?c=attention_me"> 
						<span class="com_member_newindex_data_name"><i class="com_member_newindex_data_icon com_member_newindex_data_icon_xq"></i>对我感兴趣</span>
						<span class="com_member_newindex_data_n"><?php echo $_smarty_tpl->tpl_vars['company']->value['ant_num'];?>
</span>
					</a>
				</div>

				<div class="com_member_newindex_data_list">
					<a href='index.php?c=look_job'> 
						<span class="com_member_newindex_data_name"><i class="com_member_newindex_data_icon com_member_newindex_data_icon_look"></i>谁看过我</span>
						<span class="com_member_newindex_data_n"><?php echo $_smarty_tpl->tpl_vars['look_jobnum']->value;?>
</span>
					</a>
				</div>
			</div>

			<div class="com_member_newindex_service">
				<div class="com_member_newindex_service_tit">我的招聘资源</div>

				<div class="com_member_newindex_service_p <?php if (!empty($_smarty_tpl->tpl_vars['spid']->value)) {?>none<?php }?>">
					可用<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
： <span id="integral" class="comindex_money_n" style="font-size: 14px;"><?php echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
</span>
					<em class="comindex_money_m"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];?>
</em> , 未支付订单： <a href="index.php?c=paylog" style="color: red"><?php echo $_smarty_tpl->tpl_vars['paying']->value;?>
</a>
					<a href="index.php?c=paylog" class="comindex_money_pd_a cblue">去支付</a>
					<a href="index.php?c=pay&type=integral" class="comindex_money_pd_a cblue">充值</a> 
					<a href="index.php?c=paylog&consume=ok" class="comindex_money_pd_a cblue">明细</a>
                    
					<a href="index.php?c=integral" class="comindex_money_pd_a cblue">做任务赚<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
</a>
					<a href="index.php?c=integral_reduce">消费规则>></a>
                    
				</div>
				
				<div class="com_member_newindex_service_listbox">
					<div class="com_member_newindex_service_list">
						<div class="com_member_newindex_service_mx">
							已发布职位数：<span class="com_member_newindex_service_data"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['normal_job_num']->value)===null||$tmp==='' ? 0 : $tmp);?>
</span> 份
						</div>
						<div class="com_member_newindex_service_mx">
							还可发布职位数：<span class="com_member_newindex_service_data">
							<?php if ($_smarty_tpl->tpl_vars['statis']->value['rating_type']==2) {?>
								<?php if ($_smarty_tpl->tpl_vars['statis']->value['job_num']==0) {?>不限<?php } else {
echo (($tmp = @$_smarty_tpl->tpl_vars['statis']->value['job_num'])===null||$tmp==='' ? 0 : $tmp);?>
份/天<?php }?>
							<?php } else { ?>
								<?php echo (($tmp = @$_smarty_tpl->tpl_vars['statis']->value['job_num'])===null||$tmp==='' ? 0 : $tmp);?>

							<?php }?>
								</span><font color="#333">份</font> 
							
						</div>
						<div class="com_member_newindex_service_bthbox">
							<a href="javascript:void(0)" onclick="jobadd_url('<?php echo $_smarty_tpl->tpl_vars['addjobnum']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_job'];?>
','','<?php echo $_smarty_tpl->tpl_vars['config']->value['com_integral_online'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
');return false;" class="com_member_newindex_service_bth">发布新职位</a>
							<a href="index.php?c=job&w=1" class="com_member_newindex_service_otherbth">管理职位</a>
						</div>
						
					</div>

					<div class="com_member_newindex_service_list">

						<div class="com_member_newindex_service_mx">
							刷新职位数：<span class="com_member_newindex_service_data"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['breakjobNums']->value)===null||$tmp==='' ? 0 : $tmp);?>
</span> 份
						</div>
						<div class="com_member_newindex_service_mx">
							还可刷新职位数：<span class="com_member_newindex_service_data">
							<?php if ($_smarty_tpl->tpl_vars['statis']->value['rating_type']==2) {?> 
								<?php if ($_smarty_tpl->tpl_vars['statis']->value['breakjob_num']==0) {?>不限<?php } else {
echo (($tmp = @$_smarty_tpl->tpl_vars['statis']->value['breakjob_num'])===null||$tmp==='' ? 0 : $tmp);?>
份/天<?php }?>
							<?php } else { ?>
								<?php echo (($tmp = @$_smarty_tpl->tpl_vars['statis']->value['breakjob_num'])===null||$tmp==='' ? 0 : $tmp);?>

							<?php }?>
							</span><font color="#333">份</font>
						</div>
						<div class="com_member_newindex_service_bthbox">
							<a href="javascript:;" onclick="return refreshJob('<?php echo $_smarty_tpl->tpl_vars['jobids']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['statis']->value['breakjob_num'];?>
');" class="com_member_newindex_service_bth" style=" background:#1296db">刷新职位</a> 
							<a href="index.php?c=job&w=1" class="com_member_newindex_service_otherbth" style=" background:#1eaa39">置顶职位</a>
						</div>
						
					</div>

					<div class="com_member_newindex_service_list">
						<div class="com_member_newindex_service_mx">
							剩余下载数：<span class="com_member_newindex_service_data">
							<?php if ($_smarty_tpl->tpl_vars['statis']->value['rating_type']==2) {?> 
								<?php if ($_smarty_tpl->tpl_vars['statis']->value['down_resume']==0) {?>不限<?php } else {
echo (($tmp = @$_smarty_tpl->tpl_vars['statis']->value['down_resume'])===null||$tmp==='' ? 0 : $tmp);?>
份/天<?php }?>
							<?php } else { ?>
								<?php echo (($tmp = @$_smarty_tpl->tpl_vars['statis']->value['down_resume'])===null||$tmp==='' ? 0 : $tmp);?>

							<?php }?>
							</span><font color="#333">份</font>
						</div>
						<div class="com_member_newindex_service_mx">
							剩余邀请数：<span class="com_member_newindex_service_data">
							<?php if ($_smarty_tpl->tpl_vars['statis']->value['rating_type']==2) {?> 
								<?php if ($_smarty_tpl->tpl_vars['statis']->value['invite_resume']==0) {?>不限<?php } else {
echo (($tmp = @$_smarty_tpl->tpl_vars['statis']->value['invite_resume'])===null||$tmp==='' ? 0 : $tmp);?>
份/天<?php }?>
							<?php } else { ?>
								<?php echo (($tmp = @$_smarty_tpl->tpl_vars['statis']->value['invite_resume'])===null||$tmp==='' ? 0 : $tmp);?>

							<?php }?>
							</span><font color="#333">份</font>
						</div>
						<div class="com_member_newindex_service_bthbox">
							<a href="index.php?c=hr" class="com_member_newindex_service_bth" style=" background:#2d8cf0">查看简历</a>
							<a href="index.php?c=resume" class="com_member_newindex_service_otherbth" style="background:#f60">搜索简历</a>
						</div>
						
					</div>
				</div>
			</div>

			<div class="com_member_newindex_user">
				<div class="com_member_newindex_user_tit">
					智能推荐简历<a href="index.php?c=attention_me" class="com_member_newindex_user_more">关注我的人才></a>
				</div>
				<div id="resumelist"></div>
			</div>

			<div class="com_member_newindexrightbox">
				
				<div class="com_member_newindex_banner">
					<a href="<?php if (empty($_smarty_tpl->tpl_vars['spid']->value)) {?>index.php?c=right<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
/images/banner_hy.png" width="235" height="160"></a>
				</div>
				
				
				<div class="com_m_index_kjcz">

					<div class="com_m_index_kjcz_tit">快捷操作</div>
				
					<div class="com_m_index_kjcz_p">
						<a href="javascript:;" onclick="return refreshJob('<?php echo $_smarty_tpl->tpl_vars['jobids']->value;?>
');"><i class="com_m_index_kjcz_p_icon"></i>刷新职位</a> 
						<input type="hidden" id="refreshjobids" value="" />
					</div>
					<div class="com_m_index_kjcz_p">
						<a href="javascript:void(0)" onclick="jobadd_url('<?php echo $_smarty_tpl->tpl_vars['addjobnum']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_job'];?>
','','<?php echo $_smarty_tpl->tpl_vars['config']->value['com_integral_online'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
');return false;">
							<i class="com_m_index_kjcz_p_icon com_m_index_kjcz_p_icon_fb"></i>发布职位
						</a>
					</div>
					<div class="com_m_index_kjcz_p">
						<a href="index.php?c=job&w=1"> <i class="com_m_index_kjcz_p_icon com_m_index_kjcz_p_icon_zd"></i>置顶职位 </a>
					</div>
				</div>

				<div class="com_member_newindex_customerservice">
					<?php if ($_smarty_tpl->tpl_vars['guweninfo']->value['uid']) {?>
					<div class="com_index_kf mt10">
						
						<div class="com_m_index_h1">
							<span class="com_m_index_h1_s" style="font-size: 14px;">你好,我是您的专属客服</span>
						</div>
						
						<div class="com_index_kf_box">
							<div class="com_index_kf_box_user">

								<div class="com_index_kf_box_user_photo">
									<img src="<?php echo $_smarty_tpl->tpl_vars['guweninfo']->value['photo_n'];?>
" style="width:50px; height: 50px" />
								</div>

								<div class="com_index_kf_box_username"><?php echo $_smarty_tpl->tpl_vars['guweninfo']->value['name'];?>
</div>

								<div class="">
									<?php if ($_smarty_tpl->tpl_vars['guweninfo']->value['qq']) {?> 
										<a target="_blank" href="tencent://message/?uin=<?php echo $_smarty_tpl->tpl_vars['guweninfo']->value['qq'];?>
&Site=<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
&Menu=yes">
										<img src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
/images/qqicon.png">
										</a> 
									<?php }?>
								</div>
							</div>

							<?php if ($_smarty_tpl->tpl_vars['guweninfo']->value['moblie']) {?><div class="com_index_kf_p">联系电话：<span class="com_index_kf_tel"><?php echo $_smarty_tpl->tpl_vars['guweninfo']->value['moblie'];?>
</span></div><?php }?>
						
							<?php if ($_smarty_tpl->tpl_vars['guweninfo']->value['ewm_n']) {?>
							<div class="com_index_kf_wx"><img src="<?php echo $_smarty_tpl->tpl_vars['guweninfo']->value['ewm_n'];?>
" width="130" height="130"></div>
                            	<div class="com_index_kf_wxh">↑ 扫码添加客服微信 ↑</div>
							<?php }?>
							 
						</div>
					</div>
					<?php } else { ?>
					<div class="com_index_kf ">
                    
                   
                        
						<div class="com_index_kf_box mt10">
							<div class="com_index_kf_box_user">
								<div class="com_index_kf_box_user_photo">
									<img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_guwen'];?>
" style="width: 50px; height: 50px" />
								</div>

								<div class="com_index_kf_box_username">网站客服</div>

								<div class="">
									<?php if ($_smarty_tpl->tpl_vars['kfqq']->value) {?> 
										<a target="_blank" href="tencent://message/?uin=<?php echo $_smarty_tpl->tpl_vars['kfqq']->value;?>
&Site=<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
&Menu=yes">
											<img src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
/images/qqicon.png">
										</a> 
									<?php }?>
								</div>

							</div>

							<div class="com_index_kf_p">电话：<span class="com_index_kf_tel"><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>
</span></div>
							<div class="com_index_kf_p">手机：<span class="com_index_kf_tel"><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webmoblie'];?>
</span></div>
							<div class="com_index_kf_wx"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wx_qcode'];?>
" width="130" height="130"></div>
                     		<div class="com_index_kf_wxh">↑ 扫码添加客服微信 ↑</div>
                             
                                
						</div>
					</div>
					<?php }?>
				</div>

				<div class="com_member_newindex_wx">
					<div class="com_member_newindex_wx_gz">关注官方微信</div>
					<div class="com_member_newindex_wx_p">随时随地接收简历</div>
					<div class="">
						<img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wx_qcode'];?>
" width="130" height="130">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--投诉顾问弹出框-->
<div id="<?php echo $_smarty_tpl->tpl_vars['guweninfo']->value['uid'];?>
" style="display: none;">
	<div class="Binding_pop_box" style="padding: 10px; width: 350px; height: 200px; background: #fff;">
		<div class="complaint_hi">尊敬的用户您好！</div>
		<div class="complaint_p">为了能够给您提供高质量的服务，反馈具体情况，我们会第一时间给您满意的答复！</div>
		<div class="complaint_p_gw" style="padding: 10px 0; color: #f00">您要投诉的顾问是：<?php echo $_smarty_tpl->tpl_vars['guweninfo']->value['username'];?>
</div>
		<div class="popjb_tip"></div>
		<div class="">
			<textarea id="reason" name="reason" class="complaint_text"></textarea>
		</div>
		<div class="complaint_bot">
			<input class="com_pop_bth_qd" onclick="reportSub('index.php?c=report')" type="button" value="确定">
			<input type='hidden' value="<?php echo $_smarty_tpl->tpl_vars['guweninfo']->value['uid'];?>
" id='eid' name='eid'> 
			<input class="com_pop_bth_qx" type="button" value="取消" onclick="layer.close($('#layindex').val());">
		</div>
	</div>
</div>

<!--刷新职位提示弹出框-->
<div id="shuaxin" style="display: none;">
	<div class="yun_prompt_writingicon" style="padding-top: 0px">
		<i class="yun_prompt_writingicon_pm"></i>
	</div>
	<div class="yun_prompt_writing">刷新职位 , 提升排名</div>
	<div class="yun_prompt_writing_obtain">刷新职位引起求职者的关注，提高投递率</div>
	<div class="yun_prompt_writing_tip">刷新职位，可提升职位的显示排名，从而提高职位的曝光率</div>
	<div class="yun_prompt_writing_operation">
		<a href="javascript:void(0)" onclick="refreshJob('<?php echo $_smarty_tpl->tpl_vars['jobids']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['statis']->value['breakjob_num'];?>
');" class="yun_prompt_writing_operation_bth">立即刷新职位</a> 
		<a class="sx_bot_qx" href="javascript:void(0)">暂不刷新</a>
	</div>
</div>

<!-- 会员到期，续费提醒 -->
<div id="updaterating" style="display: none;">
	<div class="renew_box">
		<div class="renew_hello">尊敬的企业用户您好</div>
		<div class="renew_p">
			你的会员服务<font color="#f00">已到期</font>，服务期限：<font color="#999"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['statis']->value['vip_stime'],'%Y.%m.%d');?>
-<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['statis']->value['vip_etime'],'%Y-%m-%d');?>
</font>
			为了不影响您正常使用招聘服务，您可以致电客户经理或自助办理续费
		</div>
		<div class="renew_gx">非常感谢您一直以来的支持与厚爱！</div>
		<div class="renew_xf">
			<a class="renew_bth" href="index.php?c=right">自助续费</a>
			<a class="renew_bth_qx" href="javascript:void(0)">先看看 ,再续费</a>
		</div>
	</div>
</div>
 


<div id="wxbd" style="display: none;">
	<div class="yun_wxbd_tit">关注微信公众号，手机轻松招人</div>
	<div class="yun_wxbd_box">
		<div class="yun_wxbd_img_c">
			<div class="yun_wxbd_img">
				<img src="<?php echo $_smarty_tpl->tpl_vars['qrcode']->value;?>
" width="180" height="180" />
			</div>
		</div>
		<div class="yun_wxbd_p"> 扫码关注公众号</div>
		<div class="yun_wxbd_ok">
			<a class="sx_bot_qx" href="javascript:void(0)" >好，知道了</a>
		</div>
	</div>
</div>

<!--提示弹出框 end-->

<?php echo '<script'; ?>
 type="text/javascript">

    var jobrefresh = '<?php echo $_COOKIE['jobrefresh'];?>
';

    layui.use(['layer'], function () {
        var layer = layui.layer,
            $ = layui.$;
        
        '<?php if ($_smarty_tpl->tpl_vars['company']->value['hy']!=''&&!$_smarty_tpl->tpl_vars['vipIsDown']->value&&$_smarty_tpl->tpl_vars['normal_job_num']->value!=0&&$_smarty_tpl->tpl_vars['un_refreshjob_num']->value!=0&&$_COOKIE['jobrefresh']!=1) {?>'
       
        var shuaxinlayer = layer.open({
            type: 1,
            title: '刷新职位',
            closeBtn: 0,
            border: [10, 0.3, '#000', true],
            area: ['500px', '330px'],
            content: $("#shuaxin")
        });

        $(".sx_bot_qx").click(function () {
            layer.close(shuaxinlayer);
        })

        '<?php } elseif ($_smarty_tpl->tpl_vars['vipIsDown']->value&&$_COOKIE['jobrefresh']!=1) {?>'

        var updatelayer = layer.open({
            type: 1,
            title: '温馨提示',
            closeBtn: 0,
            border: [10, 0.3, '#000', true],
            area: ['430px', 'auto'],
            content: $("#updaterating")
        });

        $(".renew_bth_qx").click(function () {
            layer.close(updatelayer);
        })

        '<?php } elseif (!$_smarty_tpl->tpl_vars['vipIsDown']->value&&$_smarty_tpl->tpl_vars['company']->value['hy']!=''&&$_smarty_tpl->tpl_vars['normal_job_num']->value!=0&&$_COOKIE['jobrefresh']!=1&&$_smarty_tpl->tpl_vars['qrcode']->value) {?>'
	        
	        var wxlayer = layer.open({
	            type: 1,
	            title: false,
	            closeBtn: 0,
	            border: [10, 0.3, '#000', true],
	            area: ['500px', 'auto'],
	            content: $("#wxbd")
	        });
	
	        $(".sx_bot_qx").click(function () {
	            layer.close(wxlayer);
	        })
	         
        '<?php }?>'
    });
   
    $(document).ready(function () {

        $('.wxtitle').click(function () {
            var wxlayer = layer.open({
                type: 1,
                title: false,
                closeBtn: 0,
                border: [10, 0.3, '#000', true],
                area: ['300px', 'auto'],
                content: $("#wxbd")
            });

            $(".sx_bot_qx").click(function () {
                layer.close(wxlayer);
            })
        });
		
		var spid='<?php echo $_smarty_tpl->tpl_vars['spid']->value;?>
';
		var company_r_status='<?php echo $_smarty_tpl->tpl_vars['company']->value['r_status'];?>
';
		var companyname='<?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
';
		var yyzz='<?php echo $_smarty_tpl->tpl_vars['yyzz']->value;?>
';
		var vipIsDown='<?php echo $_smarty_tpl->tpl_vars['vipIsDown']->value;?>
';
		var statisremind='<?php echo $_smarty_tpl->tpl_vars['statis']->value['remind'];?>
';
		
		if (spid=='0' && (company_r_status != 1 || !companyname || !yyzz || vipIsDown || (statisremind==1  && !vipIsDown))){

			$(".yun_Announcement").attr("style","display:block;");
		}else{
			$(".yun_Announcement").attr("style","display:none;");
		}
		
		setTimeout(function(){
			hsresumelist('<?php echo $_smarty_tpl->tpl_vars['normal_job_num']->value;?>
');
		},200);
    })
    function reportgw(eid, title) {
        var layindex = $.layer({
            type: 1,
            title: title,
            closeBtn: [0, true],
            border: [10, 0.3, '#000', true],
            area: ['400px', '330px'],
            page: {
                dom: "#" + eid
            }
        });
        $("#layindex").val(layindex);
    }

    function reportSub(url) {
        var reason 	= $("#reason").val();
        var eid 	= $("#eid").val();
        if (reason == '') {
            layer.msg('请填写投诉内容！', 2, 8);
            return false;
        }
        loadlayer();
        $.post(url, {
            reason: reason,
            eid: eid
        }, function (data) {
            layer.closeAll('loading');
            layer.close($('#layindex').val());
            if (data == '0') {
                layer.msg('投诉失败！', 2, 8);
            } else if (data == '1') {
                layer.msg('投诉成功！', 2, 9, function () {
                    window.location.reload();
                });
            } else if (data == '2') {
                layer.msg('已投诉成功，等待管理员回复！', 2, 8);
            }
        });
    }
    function hsresumelist(jobnum) {

		$.get('index.php?c=index&act=resumeajax', {rand: Math.random()}, function (data) {

		    var res = JSON.parse(data);
		    if (res.list.length > 0) {
		        var html = '';
		        for (var i = 0; i < res.list.length; i++) {
		            html += '<div class="com_member_newindex_userlist">';
		            html += '<div class="com_member_newindex_userpic">';
		            html += '<a href="' + res.list[i].resumeurl + '" target="_blank"><img src="' + res.list[i].photo + '" width="40" height="40" title="' + res.list[i].username_n + '"/></a>';    
		            html += '</div>';
		            html += '<div class="com_member_newindex_username">';
		            html += '<a href="' + res.list[i].resumeurl + '" target="_blank">' + res.list[i].username_n + '</a>';    
		            html += '</div>';
		            html += '<div class="com_member_newindex_userinfo">';
		            html += res.list[i].exp_n+'<span class="com_member_newindex_userline">|</span>'+res.list[i].edu_n;
		            html += '</div>';
		            html += '<div class="com_member_newindex_userwant">';
		            html += '想找<span class="com_member_newindex_userwantjob">' + res.list[i].jobname + '</span>的工作';
		            html += '</div>';
		            html += '<div class="com_member_newindex_userms">';
		            html += '<a href="' + res.list[i].resumeurl + '" class="com_member_newindex_usermsbth">邀请面试</a>';
		            html += '</div>';
		            html += '</div>';
		        }
		        $("#resumelist").prepend(html);
		    } else {
		        $("#noresumelist").removeClass('none');
		    }
		})
    }
    
    function notweixin() {
        layer.msg('网站暂未绑定微信公众号，请联系管理员，电话：<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>
' , 2, 8);
    }
	
	'<?php if ($_smarty_tpl->tpl_vars['ggnum']->value>1) {?>'
	marquee("6000",".yun_Announcement  ul"); 
	'<?php }?>'
	
	
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
