<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-08 03:50:48
         compiled from "D:\rcw\uploads\app\template\wap\member\com\index.htm" */ ?>
<?php /*%%SmartyHeaderCode:3116567375fa6fa98077775-70186284%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04e71c0f9a35851f68d322d9b6ac5c2548f9cd16' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\wap\\member\\com\\index.htm',
      1 => 1576747925,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3116567375fa6fa98077775-70186284',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'spid' => 0,
    'signstate' => 0,
    'config' => 0,
    'company' => 0,
    'member' => 0,
    'statis' => 0,
    'jobnums' => 0,
    'jobids' => 0,
    'nopayorder' => 0,
    'recresume' => 0,
    'recr' => 0,
    'todayEnd' => 0,
    'wap_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fa6fa980bb404_86400642',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fa6fa980bb404_86400642')) {function content_5fa6fa980bb404_86400642($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/member/cheader.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<style>
    .comheader  {
        display: none;
    }
</style>

<div class="yun_com_member">
    <i class="yun_com_member_bg1"></i>

    <div class="yun_com_member_index_t">
        <?php if (empty($_smarty_tpl->tpl_vars['spid']->value)) {?>
            <span class="yun_com_member_index_set"><a class="yun_com_member_index_set_icon" href="index.php?c=set"></a></span>
        <?php } else { ?>
            <span class="yun_com_member_index_set"><a style="color:#fff" href="javascript:;" onclick="islogout('<?php echo smarty_function_url(array('m'=>'wap','c'=>'loginout'),$_smarty_tpl);?>
','确认退出吗？');">退出登录</a></span>
        <?php }?>
        <span class="yun_com_member_index_msg"><a class="yun_com_membersysnews" href="index.php?c=sysnews"><i class="yun_com_membersysnews_n" id="sysmsgnum"></i></a></span> 
        <?php if (empty($_smarty_tpl->tpl_vars['spid']->value)) {?>
	        <?php if ($_smarty_tpl->tpl_vars['signstate']->value==1) {?>
	        	<a class="yun_com_member_index_qd" onClick="signok();"><span class="yun_com_member_index_qd_s">已签到</span></a>
	        <?php } else { ?>
	        	<a href="javascript:void(0);" onClick="sign();" class="yun_com_member_index_qd"><span class="yun_com_member_index_qd_s">签到赚<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
</span></a>
	        <?php }?>
        <?php }?>
    </div>

    <div class="yun_com_member_indexinfo">

        <div class="yun_com_member_indexinfo_logo">
            <a href="<?php if (empty($_smarty_tpl->tpl_vars['spid']->value)) {?>index.php?c=photo&t=1<?php } else { ?>javascript:void(0);<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['company']->value['logo'];?>
" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_unit_icon'];?>
',2);"></a>
        </div>

        <div class="yun_com_member_comname">
	        <span class="yun_com_member_comname_t"><?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
</span>
            <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'company','a'=>'show','id'=>'`$uid`'),$_smarty_tpl);?>
" class="yun_com_member_comlook">预览</a>
        </div>

        <div class="">

            <?php if ($_smarty_tpl->tpl_vars['company']->value['moblie_status']==1) {?>
            	<a class="yun_com_member_comrz yun_com_member_comyrz" href="<?php if (empty($_smarty_tpl->tpl_vars['spid']->value)) {?>index.php?c=bindingbox&type=moblie<?php } else { ?>javascript:void(0);<?php }?>"><i class="yun_com_member_comrz_icon yun_com_member_comrz_iconsj"></i>已认证 </a>
            <?php } else { ?>
            	<a class="yun_com_member_comrz" href="<?php if (empty($_smarty_tpl->tpl_vars['spid']->value)) {?>index.php?c=bindingbox&type=moblie<?php } else { ?>javascript:void(0);<?php }?>"><i class="yun_com_member_comrz_icon yun_com_member_comrz_iconsj"></i>未认证 </a>
            <?php }?> 
            
            <?php if ($_smarty_tpl->tpl_vars['company']->value['email_status']==1) {?>
            	<a class="yun_com_member_comrz yun_com_member_comyrz" href="<?php if (empty($_smarty_tpl->tpl_vars['spid']->value)) {?>index.php?c=bindingbox&type=email<?php } else { ?>javascript:void(0);<?php }?>"><i class="yun_com_member_comrz_icon yun_com_member_comrz_iconyx"></i>已绑定</a> 
           	<?php } else { ?>
            	<a class="yun_com_member_comrz" href="<?php if (empty($_smarty_tpl->tpl_vars['spid']->value)) {?>index.php?c=bindingbox&type=email<?php } else { ?>javascript:void(0);<?php }?>"><i class="yun_com_member_comrz_icon yun_com_member_comrz_iconyx"></i>未绑定</a> 
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['member']->value['wxopenid']!=''||$_smarty_tpl->tpl_vars['member']->value['wxid']!='') {?>
				 <a class="yun_com_member_comrz yun_com_member_comyrz" href="index.php?c=binding"><i class="yun_com_member_comrz_icon yun_com_member_comrz_iconwx"></i> 已认证</a> 
			<?php } else { ?>
			     <a class="yun_com_member_comrz" href="index.php?c=binding"><i class="yun_com_member_comrz_icon yun_com_member_comrz_iconwx"></i> 未认证</a> 
			<?php }?>
           
            <?php if ($_smarty_tpl->tpl_vars['company']->value['yyzz_status']=="1") {?>
            	<a class="yun_com_member_comrz yun_com_member_comyrz" href="<?php if (empty($_smarty_tpl->tpl_vars['spid']->value)) {?>index.php?c=comcert<?php } else { ?>javascript:void(0);<?php }?>"><i class="yun_com_member_comrz_icon yun_com_member_comrz_iconzz"></i> 已认证 </a> 
            <?php } else { ?>
            	<a class="yun_com_member_comrz" href="<?php if (empty($_smarty_tpl->tpl_vars['spid']->value)) {?>index.php?c=comcert<?php } else { ?>javascript:void(0);<?php }?>"><i class="yun_com_member_comrz_icon yun_com_member_comrz_iconzz"></i> 未认证</a> 
            <?php }?>
        </div>
    </div>
    
    
  <section>
    <div class="m_index_msg">
        <dl class="m_index_msg_list">
            <a href="index.php?c=hr"><dt id="sqnum"></dt>
                <dd>收到简历</dd>
            </a>
        </dl>
        <dl class="m_index_msg_list">
            <a href="index.php?c=msg"><dt id="msgnum"></dt>
                <dd>求职者咨询</dd>
            </a>
        </dl>
         <dl class="m_index_msg_list">
            <a href="index.php?c=attention_me"><dt id="attention_menum"></dt>
                <dd>对我感兴趣</dd>
            </a>
        </dl>
        <dl class="m_index_msg_list">
            <a href="index.php?c=look_job"><dt id="look_jobnum"></dt>
                <dd>谁看过我</dd>
            </a>
        </dl>
    </div>
</section>  
    
    <div class="clear"></div>
<div class="hy_box"><div class="hy_box_c"><span class="hy_box_name"><?php echo $_smarty_tpl->tpl_vars['statis']->value['rating_name'];?>
</span>  升级会员享特权<a href="index.php?c=rating" class="hy_box_bth">查看详情</a></div></div>

   <div class="clear"></div>
    <div class="yun_com_member_indexfw none"> 我的服务：<?php echo $_smarty_tpl->tpl_vars['statis']->value['rating_name'];?>

        <?php if (empty($_smarty_tpl->tpl_vars['spid']->value)) {?>
            <span>&nbsp;<a href="index.php?c=<?php if ($_smarty_tpl->tpl_vars['config']->value['com_vip_type']==2||$_smarty_tpl->tpl_vars['config']->value['com_vip_type']==0) {?>rating<?php } else { ?>time<?php }?>" style="color:#FF0">升级</a></span>
        <?php }?>
        <?php if (empty($_smarty_tpl->tpl_vars['spid']->value)) {?>
        	<div class="yun_com_member_indexfw_jf">可用<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：<?php echo (($tmp = @$_smarty_tpl->tpl_vars['statis']->value['integral'])===null||$tmp==='' ? 0 : $tmp);?>
 <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];?>
</div>
            <a href="index.php?c=pay" class="yun_com_member_indexczbth">充值</a>
            <a href="index.php?c=integral" class="yun_com_member_indexzjf">赚<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
</a>
        <?php }?>
    </div>
</div>



<div class="clear"></div>
<div class="cy_box">
<div class="cy_box_c">
<div class="cy_box_tit"><span class="cy_box_tit_n">常用工具</span></div>
<div class="cy_nav"><a href="javascript:void(0)" onclick="jobadd_url('<?php echo $_smarty_tpl->tpl_vars['statis']->value['addjobnum'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_job'];?>
','job','<?php echo $_smarty_tpl->tpl_vars['config']->value['com_integral_online'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
');"><i class="cy_nav_icon cy_nav_icon_fb"></i>发布职位<input type="hidden" id="refreshjobids" value="" /><input type="hidden" id="jobnums" value="<?php echo $_smarty_tpl->tpl_vars['jobnums']->value;?>
" /></a></div>
<div class="cy_nav"><a href="javascript:void(0)" onclick="RefreshAll('<?php echo $_smarty_tpl->tpl_vars['jobids']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['statis']->value['breakjob_num'];?>
');"><i class="cy_nav_icon cy_nav_icon_sx"></i>刷新职位</a></div>
<div class="cy_nav">
    <a href="index.php?c=pay"><i class="cy_nav_icon cy_nav_icon_cz"></i>充值服务</a>
    <?php if ($_smarty_tpl->tpl_vars['nopayorder']->value>0) {?>
    <a href="index.php?c=paylog" class="cy_box_tip"><?php echo $_smarty_tpl->tpl_vars['nopayorder']->value;?>
个订单未付款</a>
    <?php }?>
</div>
<div class="cy_nav">
    <a href="index.php?c=finance"><i class="cy_nav_icon cy_nav_icon_hy"></i>会员服务</a>
   
</div>
<div class="cy_nav"><a  href="index.php?c=jobcolumn"><i class="cy_nav_icon cy_nav_icon_zw"></i>职位管理</a></div>
<div class="cy_nav"><a  href="index.php?c=resumecolumn"><i class="cy_nav_icon cy_nav_icon_jl"></i>简历管理</a></div>
<div class="cy_nav"><a  href="index.php?c=map"><i class="cy_nav_icon cy_nav_icon_wz"></i>企业位置</a></div>
<div class="cy_nav"  onclick="gwshow()"><a  href="javascript:void(0)"><i class="cy_nav_icon cy_nav_icon_kf"></i>客户服务</a></div>


</div>
</div>

<div class="clear"></div>
<?php if ($_smarty_tpl->tpl_vars['company']->value['r_status']!=1) {?>
<div style="padding:15px 15px 0 15px">
<div class="admin_new_tip " style="border-radius:5px;">
    <div class="admin_new_tit">温馨提示</div>
    <div class="admin_new_tip_list_cont">

		<?php if ($_smarty_tpl->tpl_vars['company']->value['r_status']==0) {?>

			<div class="admin_new_tip_list"> 您的帐号尚未审核，发布的职位信息将在审核通过后展示 </div>
			<div id="forms" class="admin_new_tip_list">
				您暂时无法查看简历的联系方式，我们会24小时内进行审核，请保持电话畅通，您可联系客服快速审核（<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>
）		
			</div>

		<?php } elseif ($_smarty_tpl->tpl_vars['company']->value['r_status']==2||$_smarty_tpl->tpl_vars['company']->value['r_status']==4) {?>
					
			<div class="admin_new_tip_list"> 您的帐号已被锁定，您可联系客服快速解锁（<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>
） </div>

		<?php } elseif ($_smarty_tpl->tpl_vars['company']->value['r_status']==3) {?>
						
			<div class="admin_new_tip_list"> 您的帐号未通过审核，请重新完善资料，您也可联系客服快速审核（<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>
） </div>

		<?php }?> 
    </div>
</div>
</div>
<?php }?>


<div class="clear"></div>
<div class="yun_user_newmember_c" style="padding:15px 15px">
<ul class="yun_user_newmember_nav">

 	<?php if (empty($_smarty_tpl->tpl_vars['spid']->value)) {?>
 		<li>
           	<a href="index.php?c=info"><i class="yun_usermember_nav_icon yun_usermember_nav_iconinfo"></i>企业资料<span class="yun_mnav_tip">完善企业基本资料</span></a>
       	</li>
   	<?php }?>


	<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_ask_web']==1) {?>
    <li>
        <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'ask'),$_smarty_tpl);?>
"><i class="yun_usermember_nav_icon yun_usermember_nav_iconask"></i>职场问答</a>
    </li>
    <?php }?>
    

    <?php if (empty($_smarty_tpl->tpl_vars['spid']->value)) {?>
        <li>
            <a href="index.php?c=set"><i class="yun_usermember_nav_icon yun_usermember_nav_iconzh"></i>账户设置</a>
        </li>
    <?php }?>
	

</ul>
</div>
<!--为你推荐 无匹配情况请随机-->
<div class="clear"></div>
<div class="tj_box">
    <div class="tj_tit">
        <span class="tj_tit_s"><i class="tj_tit_icon1"></i><i class="tj_tit_icon2"></i><i class="tj_tit_icon3"></i>为你推荐<i class="tj_tit_iconr1"></i><i class="tj_tit_iconr2"></i><i class="tj_tit_iconr3"></i>
        </span>
    </div>
<!--列表-->
    <?php  $_smarty_tpl->tpl_vars['recr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['recr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recresume']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['recr']->key => $_smarty_tpl->tpl_vars['recr']->value) {
$_smarty_tpl->tpl_vars['recr']->_loop = true;
?>
    <div class="tj_list">
        <div class="tj_list_c">
            <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'resume','a'=>'show','id'=>$_smarty_tpl->tpl_vars['recr']->value['id']),$_smarty_tpl);?>
">
                <div class="tj_list_yx"><?php echo $_smarty_tpl->tpl_vars['recr']->value['jobname'];?>
</div>
                <div class="tj_list_pic">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['recr']->value['photo'];?>
" width="50" height="50">
                </div>
                <div class="tj_list_name"><?php echo $_smarty_tpl->tpl_vars['recr']->value['username_n'];?>
<span class="tj_list_info">(<?php echo $_smarty_tpl->tpl_vars['recr']->value['sex_n'];?>
,<?php echo $_smarty_tpl->tpl_vars['recr']->value['age_n'];?>
)</span></div>
                <div class="tj_list_xl"><?php echo $_smarty_tpl->tpl_vars['recr']->value['edu_n'];?>
<span class="tj_list_line">|</span><?php echo $_smarty_tpl->tpl_vars['recr']->value['exp_n'];?>
</div>
                <div class="tj_list_lookbox"><span class="tj_list_look">查看详情</span></div>
            </a>
        </div>
    </div>
    <?php } ?>
</div>






<!--列表 end-->



<div class="clear"></div>


<div class="clear"></div>

<div class="index_section">
    <section class="wap_member">
        <div class="wap_member_mrecord">
        </div>
    </section>
</div>

<!--编辑基本信息引导匡-->
<div id="yingdaoone" style="width:100%;height:100%; background:rgba(51,51,51,0.6); position:fixed;left:0px;top:0px; z-index:100000;<?php if ($_smarty_tpl->tpl_vars['company']->value['name']!='') {?>display:none;<?php }?>">
    <div style="width:100%; position:absolute;left:0px;top:140px;">
        <div style="padding:20px;">
            <div class="index_yd_box">
                <div class="index_yd_box_h1">亲，你还没有填写基本信息</div>
                <div class="user_resume_index_tip_p">
                    <a href="index.php?c=info" class="user_resume_index_tip_sub">编辑</a>
                </div>
                <div class="user_resume_index_tip_p2">
                    <a href="javascript:Close_yd('yingdaoone');" class="user_resume_index_tip_p2_a">下次再说</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['company']->value['name']&&$_smarty_tpl->tpl_vars['company']->value['linktel']) {?>

<div id="updaterating" style="width:100%;height:100%; background:rgba(51,51,51,0.6); position:fixed;left:0px;top:0px; z-index:100000; <?php if ($_smarty_tpl->tpl_vars['statis']->value['vip_etime']=='0'||$_smarty_tpl->tpl_vars['statis']->value['vip_etime']>$_smarty_tpl->tpl_vars['todayEnd']->value||$_COOKIE['updatetoast']==1) {?> display: none;  <?php }?>">
    <div style="width:100%; position:absolute;left:0px;top:140px;">
        <div style="padding:20px;">
            <div class="index_yd_box">
                <div class="index_yd_box_h1">尊敬的企业用户，您好！</br>您的会员已到期，请先续费会员！</div>
                <div class="user_resume_index_tip_p">
                    <a href="index.php?c=<?php if ($_smarty_tpl->tpl_vars['config']->value['com_vip_type']==2||$_smarty_tpl->tpl_vars['config']->value['com_vip_type']==0) {?>rating<?php } else { ?>time<?php }?>" class="user_resume_index_tip_sub">续费</a>
                </div>
                <div class="user_resume_index_tip_p2">
                    <a href="javascript:Close_yd('updaterating');" class="user_resume_index_tip_p2_a">下次再说</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php }?>
 

<?php if ($_smarty_tpl->tpl_vars['statis']->value['vip_etime']>$_smarty_tpl->tpl_vars['todayEnd']->value||$_smarty_tpl->tpl_vars['statis']->value['vip_etime']=='0') {?>
<!--上传LOGO引导匡-->
<div id="yingdaotwo" style="width:100%;height:100%; background:rgba(51,51,51,0.6); position:fixed;left:0px;top:0px; z-index:100000;<?php if ($_smarty_tpl->tpl_vars['company']->value['logo']!=" ") {?>display:none;<?php }?>">
    <div style="width:100%; position:absolute;left:0px;top:140px;">
        <div style="padding:20px;">
            <div class="index_yd_box">
                <div class="index_yd_box_h1">亲，你还没有上传LOGO</div>
                <div class="user_resume_index_tip_p">
                    <a href="index.php?c=photo" class="user_resume_index_tip_sub">上传LOGO</a>
                </div>
                <div class="user_resume_index_tip_p2">
                    <a href="javascript:Close_yd('yingdaotwo');" class="user_resume_index_tip_p2_a">下次再说</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }?> 

<?php if ($_smarty_tpl->tpl_vars['company']->value['logo']!='') {?>
<!--验证营业执照引导匡-->
<div id="yingdaothree" style="width:100%;height:100%; background:rgba(51,51,51,0.6); position:fixed;left:0px;top:0px; z-index:100000;<?php if ($_smarty_tpl->tpl_vars['company']->value['yyzz_status']==1||$_smarty_tpl->tpl_vars['company']->value['yyzz_status']==0) {?>display:none;<?php }?>">
    <div style="width:100%; position:absolute;left:0px;top:140px;">
        <div style="padding:20px;">
            <div class="index_yd_box">
                <div class="index_yd_box_h1">亲，你还没有验证营业执照</div>
                <div class="user_resume_index_tip_p">
                    <a href="index.php?c=comcert" class="user_resume_index_tip_sub">验证</a>
                </div>
                <div class="user_resume_index_tip_p2">
                    <a href="javascript:Close_yd('yingdaothree');" class="user_resume_index_tip_p2_a">下次再说</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }?>
 
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/jsMath.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    function Close_yd(id) {
        $("#" + id).hide();
    }

    function RefreshAll(id, num) {
		

		if(id == '') {
			layermsg("您暂无发布中的职位！", 2, function() {
				window.location.href = wapurl + "member/index.php?c=job&type=1&w=1";
			});
			return false;
		}else{
	    	var jobnums	=	$("#jobnums").val();
	    	if(parseInt(num) > parseInt(jobnums)){
	    		layer.open({
	            	title 	: [ '温馨提示', 'background-color: #FF4351; color:#fff;' ],
	                content	: '本次刷新'+jobnums+'职位，将扣除'+jobnums+'份刷新套餐数据，是否刷新？',
	                btn: ['继续', '取消'],
	                shadeClose: false,
	                yes: function() {
	                  	sxJob(id);
	                }
	            });
	    	}else{
	    		sxJob(id);
	    	}
		}
    }
	
    function sxJob(id){

		var wapurl 		= 	'<?php echo smarty_function_url(array('m'=>'wap'),$_smarty_tpl);?>
';
		var ajaxUrl 	= 	wapurl + "member/index.php?c=ajax_refresh_job";
		var integral 	= 	'<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_jobefresh'];?>
';

		var chk_value 		= 	[];
		chk_value 			= 	id.split(",");
		
		$("#refreshjobids").val(chk_value);
		
		var jobid 			= 	$("#refreshjobids").val();
		
		var breakjob_num 	= 	'<?php echo $_smarty_tpl->tpl_vars['statis']->value['breakjob_num'];?>
';
		var sxdj 			= 	'<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_jobefresh'];?>
';
		var online			= 	'<?php echo $_smarty_tpl->tpl_vars['config']->value['com_integral_online'];?>
';
		var pro 			=	'<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
';
		
		var num 			= 	accSub(chk_value.length, breakjob_num);
		var sxneed			= 	accMul(sxdj, num);
		var inter 			= 	accMul(integral, pro);
		var sxintegral 		= 	accMul(inter, num);
		
		$.post(ajaxUrl, {jobid: jobid }, function(data) {
			
			data = eval('(' + data + ')');
			
			if(data.error == 1) {
			
				layermsg(data.msg, 2, function() {
					window.location.href = '';
				});
				
			} else if(data.error == 2) {
				 
				layer.open({
					title 	: 	[ '温馨提示', 'background-color: #FF4351; color:#fff;' ],
					content	: 	data.msg,
					btn		: 	['继续', '取消'],
					shadeClose	: 	false,
					yes	: 	function() {
						window.location.href = "index.php?c=server&server=sxjob&id=" + id;
					}
				});
			} else {
				if(data.url) {
					layermsg(data.msg, 2, function() {
						location.href = "index.php?c=<?php if ($_smarty_tpl->tpl_vars['config']->value['com_vip_type']==2||$_smarty_tpl->tpl_vars['config']->value['com_vip_type']==0) {?>rating<?php } else { ?>time<?php }?>"
					});
				} else {
					layermsg(data.msg, 2);
				}

			}
		});
    }
 
	
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
