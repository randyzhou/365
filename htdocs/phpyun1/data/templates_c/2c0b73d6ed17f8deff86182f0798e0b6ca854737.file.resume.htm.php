<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-11 12:24:04
         compiled from "D:\rcw\uploads\app\template\wap\member\user\resume.htm" */ ?>
<?php /*%%SmartyHeaderCode:4649289665fab676463bd49-56108310%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c0b73d6ed17f8deff86182f0798e0b6ca854737' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\wap\\member\\user\\resume.htm',
      1 => 1580809864,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4649289665fab676463bd49-56108310',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config_wapdomain' => 0,
    'config' => 0,
    'expect' => 0,
    'maxnum' => 0,
    'cityname' => 0,
    'industry_name' => 0,
    'userclass_name' => 0,
    'jobname' => 0,
    'doc' => 0,
    'resume' => 0,
    'user' => 0,
    'user_sex' => 0,
    'work' => 0,
    'workval' => 0,
    'edu' => 0,
    'eduval' => 0,
    'project' => 0,
    'projectval' => 0,
    'training' => 0,
    'trainingval' => 0,
    'skill' => 0,
    'skillval' => 0,
    'other' => 0,
    'otherval' => 0,
    'arrayTag' => 0,
    'tv' => 0,
    'show' => 0,
    'v' => 0,
    'rows' => 0,
    'wap_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fab67646ecca8_98586199',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fab67646ecca8_98586199')) {function content_5fab67646ecca8_98586199($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/member/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
/js/mui/css/mui.picker.min.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
/js/mui/css/mui.poppicker.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
<style>
    .layermbox {z-index: 10000000000}
	.header_userbg{ background:#1178c3;}
	.header_h1{color:#fff}
	.header_top_l:after{content: ' ';width: 12px;height: 12px;border: #fff solid;-webkit-transform: rotate(-135deg);border-width: 1px 1px 0 0;display: inline-block;
}
.yun_footer{ display:none}
</style>
<?php if ($_smarty_tpl->tpl_vars['expect']->value) {?>
<!--有简历的情况-->
<div class="yun_usermember_have" style="display:;">
	<?php if ($_GET['fr']!='1') {?>
	    <?php if ($_smarty_tpl->tpl_vars['expect']->value['state']=='0') {?>
			<div class="sh_tipbox">
				<div class="sh_tipbox_tit">简历审核中</div>
				您的简历正在审核中,暂时无法申请职位,如需快速审核，可拨打服务热线：<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>

			</div>
		<?php } elseif ($_smarty_tpl->tpl_vars['expect']->value['state']=='3') {?> 
			<div class="sh_tipbox">
				<div class="sh_tipbox_tit">审核未通过</div>
				很遗憾！您的简历未通过审核,如需疑问，可拨打服务热线：<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];
if ($_smarty_tpl->tpl_vars['expect']->value['statusbody']) {?> 未通过原因：<?php echo $_smarty_tpl->tpl_vars['expect']->value['statusbody'];
}?>
			</div>
		<?php }?>
    

	    <div class="yun_usermember_resume">
	        <div class="yun_usermember_resume_b">
	           
	            <div class="yun_usermember_resume_b_c">
	                <div class="yun_usermember_resumet">
	                    <div class="yun_usermember_resumename">
							<?php echo $_smarty_tpl->tpl_vars['expect']->value['name'];?>
 
							<?php if ($_smarty_tpl->tpl_vars['expect']->value['defaults']=="1") {?><span class="yun_usermember_resume_mr">默认</span> <?php }?>
	                    </div>
	                    <div class="yun_usermember_resumeintegrity">
	                        <span class="yun_usermember_resumeintegrity_name">简历完整度：<span class="yun_usermember_resumeintegrity_namewzd"><?php echo $_smarty_tpl->tpl_vars['expect']->value['integrity'];?>
%</span></span> 
	                        <span class="rsm_schedule_b"> <i style=	"width:<?php echo $_smarty_tpl->tpl_vars['expect']->value['integrity'];?>
%"></i></span>
	                    </div>
					<div class="yun_usermember_resume_czbox">
						<a id="refresh" data-id="<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
" class="yun_usermember_resume_cz"><i class="yun_usermember_resume_cz_icon yun_usermember_resume_cz_sx"></i>刷新简历</a>
		
						<?php if ($_smarty_tpl->tpl_vars['expect']->value['state']==1) {?>
							<a href="javascript:void(0)" onclick="topCheck('<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
')" class="yun_usermember_resume_cz"><i class="yun_usermember_resume_cz_icon yun_usermember_resume_cz_zd"></i><?php if ($_smarty_tpl->tpl_vars['expect']->value['top']==1&&$_smarty_tpl->tpl_vars['expect']->value['topdatetime']>0) {?>已置顶 <?php } else { ?>置顶简历 <?php }?></a>
						<?php } else { ?>
							<a href="javascript:void(0)" onclick="layermsg('您的简历尚未审核，无法置顶操作！');return false;" class="yun_usermember_resume_cz"><i class="yun_usermember_resume_cz_icon yun_usermember_resume_cz_zd"></i>置顶简历</a>
						<?php }?>
		         
						<span class="yun_usermember_resume_more" id="showmoreset"><i class="yun_usermember_resume_cz_icon yun_usermember_resume_cz_set"></i>设置
							<div class="yun_usermember_resume_more_box" style="display:none" id="morelist">
								
								
								<?php if ($_smarty_tpl->tpl_vars['expect']->value['defaults']=="1") {?> <?php } else { ?>
									<a id='resumedefaults' data-id="<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
" class="">设为默认</a>
								<?php }?>
								  <a href="index.php?c=likejob&id=<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
" class="">匹配职位</a>
								<a href="index.php?c=privacy">隐私设置</a>
								
								<a id="resumeUserPicker" class="" data-resume="<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
">切换简历</a>
								 
								
							  
							 
								<?php if ($_smarty_tpl->tpl_vars['maxnum']->value>0||$_smarty_tpl->tpl_vars['maxnum']->value=='') {?>
									 
									<a href="index.php?c=addresume" class="">创建新简历</a>
								<?php } else { ?>
									
									<a href="javascript:void(0)" onclick="layermsg('你的简历数已经达到系统设置的简历数了');return false;" class="">创建新简历</a>
								<?php }?>

								
								<a href="javascript:void(0)" onclick="layer_del('确定要删除此份简历吗？','index.php?c=resumeset&del=<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
');" id='resume_del' class="yun_usermember_resume_more_box_sc">删除简历</a>
							</div>
						</span>
					</div>
	            </div>
	        </div>
	    </div>
    <?php }?>
  
    <?php if ($_smarty_tpl->tpl_vars['expect']->value['doc']) {?>
		<ul class="yun_usermember_resumebox">
			<li>
				<a href="index.php?c=addexpect&eid=<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
">
					<div class="yun_usermember_resumetit">
						<i class="yun_usermember_resumetit_icon yun_usermember_resumetit_icon_yx"></i>求职意向
						<i class="list_box_b">+100%</i></span>
						<span class="yun_usermember_resume_zt">修改</span>
					</div>
					<div class="yun_usermember_resume_yx">
						<?php if ($_smarty_tpl->tpl_vars['expect']->value['name']) {?>
						<div class="yun_usermember_resumeinfo_p"><span class="yun_usermember_resumeinfo_p_n">期望岗位：</span><?php echo $_smarty_tpl->tpl_vars['expect']->value['name'];?>
</div><?php }?>
						
						<?php if ($_smarty_tpl->tpl_vars['cityname']->value) {?>
						<div class="yun_usermember_resumeinfo_p"><span class="yun_usermember_resumeinfo_p_n">工作地点：</span><?php echo $_smarty_tpl->tpl_vars['cityname']->value;?>
</div><?php }?> 
						
						<?php if ($_smarty_tpl->tpl_vars['industry_name']->value[$_smarty_tpl->tpl_vars['expect']->value['hy']]) {?>
						<div class="yun_usermember_resumeinfo_p"><span class="yun_usermember_resumeinfo_p_n">从事行业：</span><?php echo $_smarty_tpl->tpl_vars['industry_name']->value[$_smarty_tpl->tpl_vars['expect']->value['hy']];?>
</div><?php }?> 
						
						<?php if ($_smarty_tpl->tpl_vars['expect']->value['minsalary']) {?>
						<div class="yun_usermember_resumeinfo_p"><span class="yun_usermember_resumeinfo_p_n">期望薪资：</span><?php echo $_smarty_tpl->tpl_vars['expect']->value['minsalary'];
if ($_smarty_tpl->tpl_vars['expect']->value['maxsalary']) {?>-<?php echo $_smarty_tpl->tpl_vars['expect']->value['maxsalary'];?>
元/月<?php } else { ?>元以上/月<?php }?></div><?php }?>
						
						<?php if ($_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['expect']->value['report']]) {?>
						<div class="yun_usermember_resumeinfo_p"><span class="yun_usermember_resumeinfo_p_n">到岗时间：</span><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['expect']->value['report']];?>
</div><?php }?>
						
						<?php if ($_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['expect']->value['type']]) {?>
						<div class="yun_usermember_resumeinfo_p"><span class="yun_usermember_resumeinfo_p_n">工作性质：</span><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['expect']->value['type']];?>
</div><?php }?> 
						
						<?php if ($_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['expect']->value['jobstatus']]) {?>
						<div class="yun_usermember_resumeinfo_p"><span class="yun_usermember_resumeinfo_p_n">求职状态：</span><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['expect']->value['jobstatus']];?>
</div><?php }?> 
						
						<?php if ($_smarty_tpl->tpl_vars['jobname']->value) {?>
						<div class="yun_usermember_resumeinfo_p"><span class="yun_usermember_resumeinfo_p_n">工作职能：</span><?php echo $_smarty_tpl->tpl_vars['jobname']->value;?>
</div><?php }?>
					</div>
				</a>
			</li>
			<li>
				<a href="index.php?c=addresumeson&eid=<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
&type=doc">
					<div class="yun_usermember_resumetit"><i class="yun_usermember_resumetit_icon"></i>黏贴简历内容 <span class="yun_usermember_resume_zt">修改</span></div>
					<div class="yun_usermember_resume_yx">
						<?php echo $_smarty_tpl->tpl_vars['doc']->value['doc'];?>

					</div>
				</a>
			</li>
		</ul>

    <?php } else { ?>
	    <?php if ($_GET['fr']!='1') {?>
		    <?php if ($_smarty_tpl->tpl_vars['expect']->value['integrity']<'100') {?>
			    <div class="yh_tip">
				    <div class="yh_tip_p">你的简历完整度低会影响求职效果，建议优化</div>
				    <?php if ($_smarty_tpl->tpl_vars['resume']->value['expect']=='0') {?>
				    <div class="yh_tip_list">完善求职意向  <a href="index.php?c=addexpect&eid=<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
" class="yh_tip_list_bth">优化</a></div>
				    <?php }?>
				    <?php if ($_smarty_tpl->tpl_vars['resume']->value['work']=='0') {?>
				    <div class="yh_tip_list">完善工作经历  <a href="index.php?c=rinfo&eid=<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
&type=work" class="yh_tip_list_bth">优化</a></div>
				    <?php }?>
				    <?php if ($_smarty_tpl->tpl_vars['resume']->value['edu']=='0') {?>
				    <div class="yh_tip_list">完善教育经历  <a href="index.php?c=rinfo&eid=<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
&type=edu" class="yh_tip_list_bth">优化</a></div>
				    <?php }?>
				    <?php if ($_smarty_tpl->tpl_vars['resume']->value['project']=='0') {?>
				    <div class="yh_tip_list">完善项目经历  <a href="index.php?c=rinfo&eid=<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
&type=project" class="yh_tip_list_bth">优化</a></div>
				    <?php }?>
				    <?php if ($_smarty_tpl->tpl_vars['resume']->value['training']=='0') {?>
				    <div class="yh_tip_list">完善培训经历  <a href="index.php?c=rinfo&eid=<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
&type=training" class="yh_tip_list_bth">优化</a></div>
				    <?php }?>
				    <?php if ($_smarty_tpl->tpl_vars['resume']->value['skill']=='0') {?>
				    <div class="yh_tip_list">完善职业技能  <a href="index.php?c=rinfo&eid=<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
&type=skill" class="yh_tip_list_bth">优化</a></div>
				    <?php }?>
			    </div>
		    <?php }?>
		<?php }?>
		<?php if ($_GET['fr']=='1') {?>
		    <!--基础创建成功情况-->
			<div class="basics_box">
			<div class="">基础简历创建成功~</div>
			<div class="basics_box_ws">完善以下信息可提升求职效果哦！</div>
			</div>
		<?php }?>
<!--基础创建成功情况-->
		<ul class="yun_usermember_resumebox">
			<?php if ($_GET['fr']!='1') {?>
			<li>
				<a href="index.php?c=info&eid=<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
">
					<div class="yun_usermember_resumetit"><i class="yun_usermember_resumetit_icon"></i>基本资料 <i class="list_box_b">+20%</i><span class="yun_usermember_resume_zt">修改</span></div>
					<div class="yun_usermember_resumeinfo">
						<div class="yun_usermember_resumeinfo_photo">
							<?php if ($_smarty_tpl->tpl_vars['user']->value['sex']==1) {?>
								<img src="<?php echo $_smarty_tpl->tpl_vars['user']->value['photo'];?>
" border="0" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_icon'];?>
',2);">
							<?php } else { ?>
								<img src="<?php echo $_smarty_tpl->tpl_vars['user']->value['photo'];?>
" border="0" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_iconv'];?>
',2);">
							<?php }?>
						</div>

						<div class="yun_usermember_resumeinfo_pt">
							<span class="yun_usermember_resumeinfo_name"><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
  </span>
							（ <?php echo $_smarty_tpl->tpl_vars['user_sex']->value[$_smarty_tpl->tpl_vars['user']->value['sex']];
if ($_smarty_tpl->tpl_vars['user']->value['age']) {?><span class="yun_usermember_resumeline">|</span><?php echo $_smarty_tpl->tpl_vars['user']->value['age'];?>
岁<?php }?>）
						</div>
						
						<div class="yun_usermember_resumeinfo_p">
							<span class="yun_usermember_resumeinfo_p_n">工作经验：</span> 
							<?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['expect']->value['exp']];?>

						</div>
						<div class="yun_usermember_resumeinfo_p">
							<span class="yun_usermember_resumeinfo_p_n">最高学历：</span>
							<?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['expect']->value['edu']];?>

						</div>

						<?php if ($_smarty_tpl->tpl_vars['user']->value['height']||$_smarty_tpl->tpl_vars['user']->value['weight']||$_smarty_tpl->tpl_vars['user']->value['nationality']||$_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['user']->value['marriage']]) {?>
							<div class="yun_usermember_resumeinfo_p">
								<span class="yun_usermember_resumeinfo_p_n">基本资料：</span> 
								<?php if ($_smarty_tpl->tpl_vars['user']->value['height']) {
echo $_smarty_tpl->tpl_vars['user']->value['height'];?>
cm<?php }?> 
								<?php if ($_smarty_tpl->tpl_vars['user']->value['height']&&$_smarty_tpl->tpl_vars['user']->value['weight']) {?> / <?php }?> 
								<?php if ($_smarty_tpl->tpl_vars['user']->value['weight']) {
echo $_smarty_tpl->tpl_vars['user']->value['weight'];?>
kg<?php }?> 
								<?php if (($_smarty_tpl->tpl_vars['user']->value['height']||$_smarty_tpl->tpl_vars['user']->value['weight'])&&$_smarty_tpl->tpl_vars['user']->value['nationality']) {?><span class="yun_usermember_resumeline">|</span><?php }?> <?php echo $_smarty_tpl->tpl_vars['user']->value['nationality'];?>
 
								<?php if ((($_smarty_tpl->tpl_vars['user']->value['height']||$_smarty_tpl->tpl_vars['user']->value['weight'])||$_smarty_tpl->tpl_vars['user']->value['nationality'])&&$_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['user']->value['marriage']]) {?><span class="yun_usermember_resumeline">|</span><?php }?> 
								<?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['user']->value['marriage']];?>

							</div>
						<?php }?>
						<div class="yun_usermember_resumeinfo_p"><span class="yun_usermember_resumeinfo_p_n">现居住地：</span> 
							<?php echo $_smarty_tpl->tpl_vars['user']->value['living'];?>

						</div>
					</div>
				</a>
			</li>
			<?php }?>
			<?php if (($_GET['fr']=='1'&&$_smarty_tpl->tpl_vars['resume']->value['expect']=='0')||$_GET['fr']!='1') {?>
			<li>
				<a href="index.php?c=addexpect&eid=<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
">
					<div class="yun_usermember_resumetit"><i class="yun_usermember_resumetit_icon yun_usermember_resumetit_icon_yx"></i>求职意向 <?php if ($_smarty_tpl->tpl_vars['resume']->value['expect']) {?><i class="list_box_b">+35%</i><?php } else { ?>+35%<?php }?>
						<span class="yun_usermember_resume_zt"> <?php if ($_smarty_tpl->tpl_vars['resume']->value['expect']) {?>修改<?php } else { ?>添加<?php }?> </span>
					</div>
				  
					<div class="yun_usermember_resume_yx">
						<?php if ($_smarty_tpl->tpl_vars['expect']->value['name']) {?>
						<div class="yun_usermember_resumeinfo_p"><span class="yun_usermember_resumeinfo_p_n">期望岗位：</span><?php echo $_smarty_tpl->tpl_vars['expect']->value['name'];?>
</div><?php }?> 
						
						<?php if ($_smarty_tpl->tpl_vars['cityname']->value) {?>
						<div class="yun_usermember_resumeinfo_p"><span class="yun_usermember_resumeinfo_p_n">工作地点：</span><?php echo $_smarty_tpl->tpl_vars['cityname']->value;?>
</div><?php }?> 
						
						<?php if ($_smarty_tpl->tpl_vars['industry_name']->value[$_smarty_tpl->tpl_vars['expect']->value['hy']]) {?>
						<div class="yun_usermember_resumeinfo_p"><span class="yun_usermember_resumeinfo_p_n">从事行业：</span><?php echo $_smarty_tpl->tpl_vars['industry_name']->value[$_smarty_tpl->tpl_vars['expect']->value['hy']];?>
</div><?php }?> 
						
						<?php if ($_smarty_tpl->tpl_vars['expect']->value['minsalary']) {?>
						<div class="yun_usermember_resumeinfo_p"><span class="yun_usermember_resumeinfo_p_n">期望薪资：</span><?php echo $_smarty_tpl->tpl_vars['expect']->value['minsalary'];
if ($_smarty_tpl->tpl_vars['expect']->value['maxsalary']) {?>-<?php echo $_smarty_tpl->tpl_vars['expect']->value['maxsalary'];?>
元/月<?php } else { ?>元以上/月<?php }?></div><?php }?> 
						
						<?php if ($_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['expect']->value['report']]) {?>
						<div class="yun_usermember_resumeinfo_p"><span class="yun_usermember_resumeinfo_p_n">到岗时间：</span><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['expect']->value['report']];?>
</div><?php }?> 
						
						<?php if ($_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['expect']->value['type']]) {?>
						<div class="yun_usermember_resumeinfo_p"><span class="yun_usermember_resumeinfo_p_n">工作性质：</span><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['expect']->value['type']];?>
</div><?php }?> 
						
						<?php if ($_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['expect']->value['jobstatus']]) {?>
						<div class="yun_usermember_resumeinfo_p"><span class="yun_usermember_resumeinfo_p_n">求职状态：</span><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['expect']->value['jobstatus']];?>
</div><?php }?> 
						
						<?php if ($_smarty_tpl->tpl_vars['jobname']->value) {?>
						<div class="yun_usermember_resumeinfo_p"><span class="yun_usermember_resumeinfo_p_n">工作职能：</span><?php echo $_smarty_tpl->tpl_vars['jobname']->value;?>
</div><?php }?>
					</div>
				</a>
			</li>
			<?php }?>
			<?php if (($_GET['fr']=='1'&&$_smarty_tpl->tpl_vars['resume']->value['work']=='0')||$_GET['fr']!='1') {?>
			<li>
				<a href="index.php?c=rinfo&eid=<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
&type=work<?php if ($_GET['fr']=='1') {?>&fr=1<?php }?>">
					<div class="yun_usermember_resumetit"><i class="yun_usermember_resumetit_icon yun_usermember_resumetit_icon_gz"></i>工作经历 <?php if ($_smarty_tpl->tpl_vars['resume']->value['work']) {?><i class="list_box_b">+10%</i><?php } else { ?>+10%<?php }?> <span class="yun_usermember_resume_zt"><?php if ($_smarty_tpl->tpl_vars['resume']->value['work']) {?>修改<?php } else { ?>添加<?php }?> </span>
					</div>
					<?php  $_smarty_tpl->tpl_vars['workval'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['workval']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['work']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['workval']->key => $_smarty_tpl->tpl_vars['workval']->value) {
$_smarty_tpl->tpl_vars['workval']->_loop = true;
?>
					<div class="yun_usermember_resumelist">
						<div class=""><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['workval']->value['sdate'],'%Y.%m');?>
-<?php if ($_smarty_tpl->tpl_vars['workval']->value['edate']!=0) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['workval']->value['edate'],'%Y.%m');
} else { ?>至今<?php }?></div>
						<div class="yun_usermember_resumejobname"><?php echo $_smarty_tpl->tpl_vars['workval']->value['title'];?>
</div>
						<div class="yun_usermember_resumecomname"><?php echo $_smarty_tpl->tpl_vars['workval']->value['name'];?>
</div>
						<div class="resume_nr_show"><?php echo $_smarty_tpl->tpl_vars['workval']->value['content'];?>
</div>
					</div>
					<?php } ?>
				</a>
			</li>
			<?php }?>
			<?php if (($_GET['fr']=='1'&&$_smarty_tpl->tpl_vars['resume']->value['edu']=='0')||$_GET['fr']!='1') {?>
			<li>
				<a href="index.php?c=rinfo&eid=<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
&type=edu<?php if ($_GET['fr']=='1') {?>&fr=1<?php }?>">
					<div class="yun_usermember_resumetit">
						<i class="yun_usermember_resumetit_icon yun_usermember_resumetit_icon_jy"></i>教育经历 
						<?php if ($_smarty_tpl->tpl_vars['resume']->value['edu']) {?><i class="list_box_b">+10%</i><?php } else { ?>+10%<?php }?> 
						<span class="yun_usermember_resume_zt"> <?php if ($_smarty_tpl->tpl_vars['resume']->value['edu']) {?>修改<?php } else { ?>添加<?php }?></span>
					</div>
					<?php  $_smarty_tpl->tpl_vars['eduval'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['eduval']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['edu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['eduval']->key => $_smarty_tpl->tpl_vars['eduval']->value) {
$_smarty_tpl->tpl_vars['eduval']->_loop = true;
?>
					<div class="yun_usermember_resumelist">
						<div class=""><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['eduval']->value['sdate'],'%Y.%m');?>
-<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['eduval']->value['edate'],'%Y.%m');?>
</div>
						<div class="yun_usermember_resumejobname"><?php echo $_smarty_tpl->tpl_vars['eduval']->value['name'];?>
</div>
						<?php if ($_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['eduval']->value['education']]) {?>
						<div class="yun_usermember_resumecomname"><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['eduval']->value['education']];?>
学历</div><?php }?> <?php if ($_smarty_tpl->tpl_vars['eduval']->value['specialty']) {?>
						<div class="resume_nr_show"><?php echo $_smarty_tpl->tpl_vars['eduval']->value['specialty'];?>
</div><?php }?>
					</div>
					<?php } ?>
				</a>
			</li>
			<?php }?>
			<?php if (($_GET['fr']=='1'&&$_smarty_tpl->tpl_vars['resume']->value['project']=='0')||$_GET['fr']!='1') {?>
			<li>
				<a href="index.php?c=rinfo&eid=<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
&type=project<?php if ($_GET['fr']=='1') {?>&fr=1<?php }?>">
					<div class="yun_usermember_resumetit"><i class="yun_usermember_resumetit_icon yun_usermember_resumetit_icon_xm"></i>项目经历<?php if ($_smarty_tpl->tpl_vars['resume']->value['project']) {?><i class="list_box_b">+8%</i><?php } else { ?>+8%<?php }?></span><span class="yun_usermember_resume_zt"><?php if ($_smarty_tpl->tpl_vars['resume']->value['project']) {?>修改<?php } else { ?>添加<?php }?></span>
					</div>
					<?php  $_smarty_tpl->tpl_vars['projectval'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['projectval']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['project']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['projectval']->key => $_smarty_tpl->tpl_vars['projectval']->value) {
$_smarty_tpl->tpl_vars['projectval']->_loop = true;
?>
					<div class="yun_usermember_resumelist">
						<div class=""><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['projectval']->value['sdate'],'%Y.%m');?>
-<?php if ($_smarty_tpl->tpl_vars['projectval']->value['edate']!=0) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['projectval']->value['edate'],'%Y.%m');
} else { ?>至今<?php }?></div>
						<div class="yun_usermember_resumejobname"><?php echo $_smarty_tpl->tpl_vars['projectval']->value['name'];?>
</div>
						<?php if ($_smarty_tpl->tpl_vars['projectval']->value['title']) {?>
						<div class="yun_usermember_resumecomname">担任 <?php echo $_smarty_tpl->tpl_vars['projectval']->value['title'];?>
</div><?php }?>
						<div class="resume_nr_show"><?php echo $_smarty_tpl->tpl_vars['projectval']->value['content'];?>
</div>
					</div>
					<?php } ?>
				</a>
			</li>
			<?php }?>
			<?php if (($_GET['fr']=='1'&&$_smarty_tpl->tpl_vars['resume']->value['training']=='0')||$_GET['fr']!='1') {?>
			<li>
				<a href="index.php?c=rinfo&eid=<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
&type=training<?php if ($_GET['fr']=='1') {?>&fr=1<?php }?>">
					<div class="yun_usermember_resumetit"><i class="yun_usermember_resumetit_icon yun_usermember_resumetit_icon_px"></i>培训经历 <?php if ($_smarty_tpl->tpl_vars['resume']->value['training']) {?><i class="list_box_b">+7%</i><?php } else { ?>+7%<?php }?><span class="yun_usermember_resume_zt"><?php if ($_smarty_tpl->tpl_vars['resume']->value['training']) {?>修改<?php } else { ?>添加<?php }?></span>
					</div>
					<?php  $_smarty_tpl->tpl_vars['trainingval'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['trainingval']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['training']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['trainingval']->key => $_smarty_tpl->tpl_vars['trainingval']->value) {
$_smarty_tpl->tpl_vars['trainingval']->_loop = true;
?>
					<div class="yun_usermember_resumelist">
						<div class=""><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['trainingval']->value['sdate'],'%Y.%m');?>
-<?php if ($_smarty_tpl->tpl_vars['trainingval']->value['edate']!=0) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['trainingval']->value['edate'],'%Y.%m');
} else { ?>至今<?php }?></div>
						<div class="yun_usermember_resumejobname"><?php echo $_smarty_tpl->tpl_vars['trainingval']->value['name'];?>
</div>
						<div class="yun_usermember_resumecomname"><?php echo $_smarty_tpl->tpl_vars['trainingval']->value['title'];?>
</div>
						<div class="resume_nr_show"><?php echo $_smarty_tpl->tpl_vars['trainingval']->value['content'];?>
</div>
					</div>
					<?php } ?>
				</a>
			</li>
			<?php }?>
			<?php if (($_GET['fr']=='1'&&$_smarty_tpl->tpl_vars['resume']->value['skill']=='0')||$_GET['fr']!='1') {?>
			<li>
				<a href="index.php?c=rinfo&eid=<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
&type=skill<?php if ($_GET['fr']=='1') {?>&fr=1<?php }?>">
					<div class="yun_usermember_resumetit">
						<i class="yun_usermember_resumetit_icon yun_usermember_resumetit_icon_jn"></i>
						职业技能 <?php if ($_smarty_tpl->tpl_vars['resume']->value['skill']) {?><i class="list_box_b">+10%</i><?php } else { ?>+10%<?php }?>
						<span class="yun_usermember_resume_zt"> <?php if ($_smarty_tpl->tpl_vars['skill']->value) {?>修改<?php } else { ?>添加<?php }?> </span>
					</div>
					<?php  $_smarty_tpl->tpl_vars['skillval'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['skillval']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['skill']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['skillval']->key => $_smarty_tpl->tpl_vars['skillval']->value) {
$_smarty_tpl->tpl_vars['skillval']->_loop = true;
?>
					<div class="yun_usermember_resumelist">
						<div class="yun_usermember_resumejobname"><?php echo $_smarty_tpl->tpl_vars['skillval']->value['name'];?>
</div>
						<?php if ($_smarty_tpl->tpl_vars['skillval']->value['longtime']) {?><div class="yun_usermember_resumecomname">掌握时间：<?php echo $_smarty_tpl->tpl_vars['skillval']->value['longtime'];?>
年</div><?php }?>
						<div class="yun_usermember_resumecomname">熟练程度：<?php echo $_smarty_tpl->tpl_vars['skillval']->value['ing_n'];?>
</div>
						<?php if ($_smarty_tpl->tpl_vars['skillval']->value['pic']) {?>
						<div class="resume_nr_show">技能证书：<img src="<?php echo $_smarty_tpl->tpl_vars['skillval']->value['pic'];?>
" style="max-width:50px; vertical-align:middle"></div><?php }?>
					</div>
					<?php } ?>
				</a>
			</li>
			<?php }?>
			<?php if (($_GET['fr']=='1'&&$_smarty_tpl->tpl_vars['resume']->value['other']=='0')||$_GET['fr']!='1') {?>
			<li>
				<a href="index.php?c=rinfo&eid=<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
&type=other<?php if ($_GET['fr']=='1') {?>&fr=1<?php }?>">
					<div class="yun_usermember_resumetit"><i class="yun_usermember_resumetit_icon yun_usermember_resumetit_icon_qt"></i>其他信息 <?php if ($_smarty_tpl->tpl_vars['resume']->value['other']) {?><i class="list_box_b"></i><?php }?>
						<span class="yun_usermember_resume_zt"><?php if ($_smarty_tpl->tpl_vars['resume']->value['other']) {?>修改<?php } else { ?>添加<?php }?> </span>
					</div>
					<?php  $_smarty_tpl->tpl_vars['otherval'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['otherval']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['other']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['otherval']->key => $_smarty_tpl->tpl_vars['otherval']->value) {
$_smarty_tpl->tpl_vars['otherval']->_loop = true;
?>
					<div class="yun_usermember_resumelist">
						<div class="yun_usermember_resumejobname">标题：<?php echo $_smarty_tpl->tpl_vars['otherval']->value['name'];?>
</div>
						<?php if ($_smarty_tpl->tpl_vars['otherval']->value['content']) {?><div class="resume_nr_show">内容：<?php echo $_smarty_tpl->tpl_vars['otherval']->value['content'];?>
</div><?php }?>
					</div>
					<?php } ?>
				</a>
			</li>
			<?php }?>
			<?php if (($_GET['fr']=='1'&&$_smarty_tpl->tpl_vars['user']->value['description']=='')||$_GET['fr']!='1') {?>
			<li>
				<a href="index.php?c=addresumeson&eid=<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
&type=desc<?php if ($_GET['fr']=='1') {?>&fr=1<?php }?>">
					<div class="yun_usermember_resumetit">
						<i class="yun_usermember_resumetit_icon yun_usermember_resumetit_icon_pj"></i>自我评价 <?php if ($_smarty_tpl->tpl_vars['user']->value['description']) {?><i class="list_box_b"></i><?php }?>
						<span class="yun_usermember_resume_zt"><?php if ($_smarty_tpl->tpl_vars['user']->value['description']) {?> 修改<?php } else { ?>添加<?php }?></span>
					</div>
					
					<?php if ($_smarty_tpl->tpl_vars['user']->value['description']) {?>
					<div class="yun_resume_pj_box">
						<div class="yun_resume_pj_box_nr"><?php echo $_smarty_tpl->tpl_vars['user']->value['description'];?>
</div>
						<?php  $_smarty_tpl->tpl_vars['tv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tv']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arrayTag']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tv']->key => $_smarty_tpl->tpl_vars['tv']->value) {
$_smarty_tpl->tpl_vars['tv']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['tv']->key;
?>
						<span class="yun_usermember_resumebq"><?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
</span> 
						<?php } ?>
					</div>
					<?php }?>
				</a>
			</li>
			<?php }?>
			<?php if (($_GET['fr']=='1'&&empty($_smarty_tpl->tpl_vars['show']->value))||$_GET['fr']!='1') {?>
			<li>
				<a href="index.php?c=rinfo&eid=<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
&type=show<?php if ($_GET['fr']=='1') {?>&fr=1<?php }?>">
					<div class="yun_usermember_resumetit"><i class="yun_usermember_resumetit_icon yun_usermember_resumetit_icon_al"></i>我的作品 <span class="yun_usermember_resume_zt">添加</span></div>
					<div class="yun_usermember_resumelist">
						<div class="">PS：上传作品更受企业青睐，可提升5倍面试邀约率！上传作品案例</div>
						
						<div style="padding-left:5px; padding-top:10px;">
							<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['show']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
							<div  style="width: 32%; height: 70px; display: inline-block; text-align: center; margin-top: 5px;">
								<?php if ($_smarty_tpl->tpl_vars['v']->value['picurl']) {?>
								<img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
" style="width:110px; text-align:center; height:70px; padding-left:5px;"/> 
								<?php }?>
							</div>
							<?php } ?>
						</div>

					</div>
				</a>
			</li>
			<?php }?>
		</ul>
		<?php if ($_GET['fr']!='1') {?>
    	<div class="yun_usermember_resume_zx" style="width:100%; text-align:center; padding-top:5px; background:#fff; padding-bottom:10px;color:#999">
            <span class="yun_usermember_resume_zx_n">更新时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['expect']->value['lastupdate'],'%Y-%m-%d');?>
</span>
			<span class="yun_usermember_resume_zx_n">被浏览：<?php echo $_smarty_tpl->tpl_vars['expect']->value['hits'];?>
</span>
    	</div>
    	<?php }?>
    <?php }?>
        <!--基础创建成功情况完成-->
        <?php if ($_GET['fr']=='1') {?>
        <div class="basics_box_ok"><a  href="javascript:void(0);" onclick="frConfirm('<?php echo $_smarty_tpl->tpl_vars['expect']->value['integrity'];?>
','<?php echo $_GET['fr'];?>
','<?php echo $_GET['eid'];?>
')" >完成</a></div>
        
        <?php }?>
</div>
<!--有简历的情况 end-->
<?php } else { ?>
<!--无简历的情况-->
<div class="wap_member_no">
    你还没有创建简历，无法申请职位
    <div>
		<a href="index.php?c=addresume" class="wap_member_no_submit">创建简历</a>
    </div>
</div>
<?php }?>
<!--无简历的情况 end-->
<!--更多设置弹出层-->

<div id="bg" style="display:none; z-index:100000000000"></div>

 

 

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
/js/mui/mui.picker.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
/js/mui/mui.poppicker.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    var resumeData = [];
    '<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>'
    resumeData.push({
        value: '<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
',
        text: '<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
'
    })
    '<?php } ?>'
    mui.init({
        swipeBack: true //启用右滑关闭功能
    });
	 
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/resume.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/publicselect.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
