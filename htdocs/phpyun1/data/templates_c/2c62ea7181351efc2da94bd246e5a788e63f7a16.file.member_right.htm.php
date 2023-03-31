<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-01 01:34:18
         compiled from "D:\rcw\uploads\app\template\member\com\member_right.htm" */ ?>
<?php /*%%SmartyHeaderCode:6931921305f9da01aa36ce2-57602313%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c62ea7181351efc2da94bd246e5a788e63f7a16' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\member\\com\\member_right.htm',
      1 => 1578911159,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6931921305f9da01aa36ce2-57602313',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'statis' => 0,
    'todayEnd' => 0,
    'config' => 0,
    'vipIsDown' => 0,
    'rows' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5f9da01aa6b219_43767582',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9da01aa6b219_43767582')) {function content_5f9da01aa6b219_43767582($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="w1000">
<div class="admin_mainbody">
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class=right_box>
	<div id="grow_freedom" class="grow_mod_wrap my_freedom" style="padding:0px;border:none;">
		<div class="member_data">
			<div class="member_data_left">
				<div class="member_data_left_name">尊敬的企业用户：</div>
				
				<div class="mt10">您当前是：<span class="comindex_money_pd_s"><?php echo $_smarty_tpl->tpl_vars['statis']->value['rating_name'];?>
</span></div>
				
				<div class="member_data_tip mt10"> 
					服务到期为：
					<?php if ($_smarty_tpl->tpl_vars['statis']->value['vip_etime']>$_smarty_tpl->tpl_vars['todayEnd']->value) {?>
						<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['statis']->value['vip_stime'],'%Y-%m-%d');?>
 - <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['statis']->value['vip_etime'],'%Y-%m-%d');?>

					<?php } elseif ($_smarty_tpl->tpl_vars['statis']->value['vip_etime']==0) {?>
						<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['statis']->value['vip_stime'],'%Y-%m-%d');?>
 - 永久
					<?php } else { ?>
						<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['statis']->value['vip_stime'],'%Y-%m-%d');?>
 - 
						<span class="comindex_money_pd_s"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['statis']->value['vip_etime'],'%Y-%m-%d');?>
</span> 
						<a href="index.php?c=right" class="cblue">立即开通</a> 
					<?php }?> 
				</div>

			</div>

			<div class="member_data_right">
				<ul>
					<li> 
						<span class="member_data_right_n"> 
							<?php if ($_smarty_tpl->tpl_vars['statis']->value['rating_type']!='2') {
echo $_smarty_tpl->tpl_vars['statis']->value['job_num'];
} else { ?>不限<?php }?> 
						</span>
						<div class="member_data_right_p">剩余职位数</div>
					</li>
					<li> 
						<span class="member_data_right_n"> 
							<?php if ($_smarty_tpl->tpl_vars['statis']->value['rating_type']!='2') {
echo $_smarty_tpl->tpl_vars['statis']->value['down_resume'];
} else { ?>不限<?php }?> 
						</span>
						<div class="member_data_right_p">剩余简历数</div>
					</li>
					<li> 
						<span class="member_data_right_n"> 
							<?php if ($_smarty_tpl->tpl_vars['statis']->value['rating_type']!='2') {
echo $_smarty_tpl->tpl_vars['statis']->value['invite_resume'];
} else { ?>不限<?php }?> 
						</span>
						<div class="member_data_right_p">剩余邀请数</div>
					</li>
				</ul>
			</div>
		</div>

		<div class=admincont_box style="padding:0px; margin-top:20px;">
			<iframe id="fdingdan"  name="fdingdan" onload="returnmessage('fdingdan');" style="display:none"></iframe>
			
			<div class="package_tit"><span class="com_tit_span">选择适合您的企业VIP套餐</span></div>
			
			<div class="report_uaer_list ">
				<ul>
					<?php if ($_smarty_tpl->tpl_vars['config']->value['com_vip_type']==2) {?>
						<li class="report_uaer_list_cur"><a href="index.php?c=right" >套餐会员</a></li>
					<?php }?>
					
					<?php if ($_smarty_tpl->tpl_vars['config']->value['com_vip_type']==1) {?>
						<li class="report_uaer_list_cur"><a href="index.php?c=right&act=time" >时间会员</a></li>
					<?php }?>
					
					<?php if ($_smarty_tpl->tpl_vars['config']->value['com_vip_type']==0) {?>
						<li class="report_uaer_list_cur"><a href="index.php?c=right" >套餐会员</a></li>
						<li><a href="index.php?c=right&act=time" >时间会员</a></li>
					<?php }?>
					
					<?php if ($_smarty_tpl->tpl_vars['statis']->value['rating_type']!=2&&!$_smarty_tpl->tpl_vars['vipIsDown']->value) {?>
					<li><a href="index.php?c=right&act=added" >增值包</a></li>
					<?php }?>
				</ul>
			</div>

			<div class="vip_tip"> 我们为您提供多样化的套餐服务，您可以根据业务需要选择短期招聘或全年招聘。 </div>
			<div class="vip_box">
				<ul>
					<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
						<?php if ($_smarty_tpl->tpl_vars['v']->value['service_time']>0) {?>
							<li class="vip_box_list">
								<div class="vip_box_left">
									<div class="vip_box_left_name"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
<i class="vip_box_left_name_line"></i></div>
									<div class="vip_box_left_money_b"> 
										<?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3&&$_smarty_tpl->tpl_vars['config']->value['member_meal']!=1) {?> 
											<span class="" id="need_integral<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"> 
												<?php if ($_smarty_tpl->tpl_vars['v']->value['time_start']<time()&&$_smarty_tpl->tpl_vars['v']->value['time_end']>time()) {?>
													<?php echo $_smarty_tpl->tpl_vars['v']->value['yh_price']*$_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>

												<?php } else { ?>
													<?php echo $_smarty_tpl->tpl_vars['v']->value['service_price']*$_smarty_tpl->tpl_vars['config']->value['integral_proportion'];
}?>
											</span> 
											<?php if ($_smarty_tpl->tpl_vars['v']->value['time_start']<time()&&$_smarty_tpl->tpl_vars['v']->value['time_end']>time()) {?>
												<div class="vip_box_left_money_yj">
													原价：<i><?php echo $_smarty_tpl->tpl_vars['v']->value['service_price']*$_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
</i>
												</div>
											<?php }?>
										<?php } else { ?> 
											<span class="vip_box_left_money" id="need_price<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
												<em class="vip_box_left_money_y">￥</em>
												<?php if ($_smarty_tpl->tpl_vars['v']->value['time_start']<time()&&$_smarty_tpl->tpl_vars['v']->value['time_end']>time()) {?>
													<?php echo $_smarty_tpl->tpl_vars['v']->value['yh_price'];?>

												<?php } else { ?>
													<?php echo $_smarty_tpl->tpl_vars['v']->value['service_price'];?>

												<?php }?>
											</span> 
											元/
											<span>
												<?php if ($_smarty_tpl->tpl_vars['v']->value['service_time']>0) {
echo $_smarty_tpl->tpl_vars['v']->value['service_time'];?>
天<?php } else { ?>永久<?php }?> 
											</span> 
											<?php if ($_smarty_tpl->tpl_vars['v']->value['time_start']<time()&&$_smarty_tpl->tpl_vars['v']->value['time_end']>time()) {?>
												<div class="vip_box_left_money_yj">原价：<i><?php echo $_smarty_tpl->tpl_vars['v']->value['service_price'];?>
</i></div>
											<?php }?>
										<?php }?>
										<?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3&&$_smarty_tpl->tpl_vars['config']->value['member_meal']!=1) {?>
											<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>

										<?php }?> 
									</div>
								</div>
								<div class="vip_box_table">
									<table>
										<tr>
											<td><div class="vip_box_data"><?php echo $_smarty_tpl->tpl_vars['v']->value['job_num'];?>
</div>发布职位数 </td>
											<td><div class="vip_box_data"><?php echo $_smarty_tpl->tpl_vars['v']->value['breakjob_num'];?>
</div>刷新职位数</td>
											<td><div class="vip_box_data"><?php echo $_smarty_tpl->tpl_vars['v']->value['resume'];?>
</div>下载简历数</td>
											<td><div class="vip_box_data"><?php echo $_smarty_tpl->tpl_vars['v']->value['interview'];?>
</div>邀请面试数</td>
											<td><div class="vip_box_data"><?php echo $_smarty_tpl->tpl_vars['v']->value['zph_num'];?>
</div>招聘会次数</td>
											<td><div class="vip_box_data"><?php echo $_smarty_tpl->tpl_vars['v']->value['top_num'];?>
</div>置顶天数</td>
											<td><div class="vip_box_data"><?php echo $_smarty_tpl->tpl_vars['v']->value['urgent_num'];?>
</div>紧急天数</td>
											<td><div class="vip_box_data"><?php echo $_smarty_tpl->tpl_vars['v']->value['rec_num'];?>
</div>推荐天数</td>
											
										</tr>
									</table>
								</div>
								<div class="vip_box_sm"> 
									<span class="vip_box_sm_s">套餐说明：</span> 
									
									<?php if ($_smarty_tpl->tpl_vars['v']->value['explains']) {
echo $_smarty_tpl->tpl_vars['v']->value['explains'];
} else {
echo $_smarty_tpl->tpl_vars['v']->value['name'];
}?>
									
									<?php if ($_smarty_tpl->tpl_vars['v']->value['integral_buy']>0) {?>赠送<?php echo $_smarty_tpl->tpl_vars['v']->value['integral_buy'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];
}?>
									
									<?php if ($_smarty_tpl->tpl_vars['v']->value['time_start']<time()&&$_smarty_tpl->tpl_vars['v']->value['time_end']>time()) {?>
									<?php }?> 
									
									<a href="javascript:buyVip('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');" class="vip_box_vip">立即购买</a>
									 
								</div>
							</li>
						<?php }?>    
					<?php }
if (!$_smarty_tpl->tpl_vars['v']->_loop) {
?>
						没有套餐会员
					<?php } ?>
				<ul>
			</div>
		</div>
	</div>
</div>
</div>
</div>
<style>
	.serve_zz_h_nmb_tcjg_box{width:100%; text-align:center; padding-bottom:10px;}
	.serve_zz_h_nmb_tcjg{ font-size:14px;color:#999; text-decoration:line-through; font-weight:normal}
</style>
<?php echo '<script'; ?>
>
	
	$(function(){
	 	$(".shuoming").hover(
	 		function(){
	 			$(this).find('.com_grade_smbox_cont').show();
	 		},
	 		function(){
	 			$(this).find('.com_grade_smbox_cont').hide();
	 		}
	 	);
	});

	$(document).ready(function() {
		$(".com_grade_smicon").hover(function() {
	        var pid=$(this).attr("pid");
			$("#rating"+pid).show();
			$("#ratingtu"+pid).show();
	    },function(){
			var pid=$(this).attr("pid");
			$("#rating"+pid).hide();
			$("#ratingtu"+pid).hide();
		});
	});

<?php echo '</script'; ?>
> 

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
