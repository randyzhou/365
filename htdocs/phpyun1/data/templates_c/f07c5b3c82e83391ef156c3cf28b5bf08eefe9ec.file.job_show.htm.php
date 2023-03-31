<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-07 03:11:11
         compiled from "D:\rcw\uploads\app\template\wap\job_show.htm" */ ?>
<?php /*%%SmartyHeaderCode:21115387645fa59fcf4b5bc0-11458956%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f07c5b3c82e83391ef156c3cf28b5bf08eefe9ec' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\wap\\job_show.htm',
      1 => 1136139789,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21115387645fa59fcf4b5bc0-11458956',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'job' => 0,
    'usertype' => 0,
    'uid' => 0,
    'Info' => 0,
    'wlist' => 0,
    'link' => 0,
    'mapx' => 0,
    'mapy' => 0,
    'department' => 0,
    'wlists' => 0,
    'style' => 0,
    'comrat' => 0,
    'msgList' => 0,
    'msglist' => 0,
    'job_jia' => 0,
    'waflist' => 0,
    'wap_style' => 0,
    'title' => 0,
    'description' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fa59fcf540251_93563916',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fa59fcf540251_93563916')) {function content_5fa59fcf540251_93563916($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/header_cont.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="header_navlist">
    <a href="javascript:void(0);" class="moreOptions"><i class="naviconfont"></i></a>
</div>
<?php echo '<script'; ?>
>
	var weburl = "<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
";
	var wapurl = "<?php echo smarty_function_url(array('m'=>'wap'),$_smarty_tpl);?>
";
<?php echo '</script'; ?>
>

<div class="yun_newedition_jobshow_opt">
	<?php if ($_smarty_tpl->tpl_vars['job']->value['fav_job']) {?>
		<a href="javascript:void(0);" class="yun_newedition_jobshow_opt_icon yun_newedition_jobshow_opt_ysc" title="已收藏"></a>
	<?php } elseif ($_smarty_tpl->tpl_vars['usertype']->value!=1&&$_smarty_tpl->tpl_vars['uid']->value!='') {?>
		<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_user_change']==1) {?>
		<a href="javascript:void(0)" onclick="layermsg('请先申请个人账户');" class="yun_newedition_jobshow_opt_icon yun_newedition_jobshow_opt_sc" title="收藏"></a>
		<?php } else { ?>
		<a href="javascript:void(0)" onclick="layermsg('只有个人用户才能收藏');" class="yun_newedition_jobshow_opt_icon yun_newedition_jobshow_opt_sc" title="收藏"></a>
		<?php }?>
	<?php } elseif ($_smarty_tpl->tpl_vars['uid']->value=='') {?>
		<a href="javascript:void(0)" onclick="layermsg('请先登录个人账号！',2,function(){location.href='index.php?c=login';});return false;"  class="yun_newedition_jobshow_opt_icon yun_newedition_jobshow_opt_sc" title="收藏"></a>
	<?php } else { ?>
		<a href="javascript:jobfav('<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
');" class="yun_newedition_jobshow_opt_icon yun_newedition_jobshow_opt_sc" title="收藏"></a>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_h5_share']==1) {?>
		<a href="javascript:void(0);" data-url='<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','a'=>'share','id'=>$_smarty_tpl->tpl_vars['job']->value['id']),$_smarty_tpl);?>
' id="shareClick" class="yun_newedition_jobshow_opt_icon yun_newedition_jobshow_opt_fx" title="分享"></a></div>
	<?php } else { ?>
		<a href="javascript:void(0);" id="shareClick" class="yun_newedition_jobshow_opt_icon yun_newedition_jobshow_opt_fx" style="float:right;color:#fff;margin:-1px 25px 0px 0px;" title="分享"></a></div>
	<?php }?>
	<div class="yun_newedition_jobshow">
    <h2 class="yun_newedition_jobshow_name"><?php echo $_smarty_tpl->tpl_vars['job']->value['jobname'];?>
</h2>
      <div class="yun_newedition_jobshow_xz">
			<span class="yun_newedition_jobshow_xz_c">
				<em class="yun_newedition_jobshow_xz_n"><?php echo $_smarty_tpl->tpl_vars['job']->value['job_salary'];?>
</em><?php if ($_smarty_tpl->tpl_vars['Info']->value['job_salary']!='面议') {?> /月<?php }?>
			</span>
			<?php if ($_smarty_tpl->tpl_vars['job']->value['rec']=='1'&&$_smarty_tpl->tpl_vars['job']->value['rec_time']>time()) {?><span class="yun_newedition_jobhot">推荐</span><?php }?> 
			<?php if ($_smarty_tpl->tpl_vars['job']->value['urgent']=='1'&&$_smarty_tpl->tpl_vars['job']->value['urgent_time']>time()) {?><span class="yun_newedition_jobemergency">急招</span><?php }?>
		</div>

		<div class="yun_newedition_jobinfo" style="padding-right:0px;">
			<?php echo $_smarty_tpl->tpl_vars['job']->value['job_city_one'];?>
 -<?php echo $_smarty_tpl->tpl_vars['job']->value['job_city_two'];?>


			<?php if ($_smarty_tpl->tpl_vars['job']->value['job_exp']) {?><i class="yun_newedition_jobline"></i><?php echo $_smarty_tpl->tpl_vars['job']->value['job_exp'];?>
经验<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['job']->value['job_edu']) {?><i class="yun_newedition_jobline"></i> <?php echo $_smarty_tpl->tpl_vars['job']->value['job_edu'];?>
学历<?php if ($_smarty_tpl->tpl_vars['job']->value['is_graduate']) {?>（接受应届生)<?php }?> <?php }?>
		</div>
	</div>
	
	<div class="yun_newedition_jobdata">
		<span class="">更新：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['job']->value['lastupdate'],"%Y-%m-%d");?>
</span>
		<span class="">浏览：<?php echo '<script'; ?>
 language="javascript" src="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','a'=>'GetHits','id'=>'`$job.id`'),$_smarty_tpl);?>
"><?php echo '</script'; ?>
>人</span>
		<span class="">投递：<?php echo $_smarty_tpl->tpl_vars['Info']->value['snum'];?>
人</span>
	</div>

    <?php if (!empty($_smarty_tpl->tpl_vars['job']->value['welfare'])) {?>
	<div class="yun_newedition_jobshow_content">
    <div class="yun_newedition_showtit">职位福利</div>
    <div class="yun_newedition_show_welfare mt10">
    	<?php  $_smarty_tpl->tpl_vars['wlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['wlist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['job']->value['arraywelfare']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['wlist']->key => $_smarty_tpl->tpl_vars['wlist']->value) {
$_smarty_tpl->tpl_vars['wlist']->_loop = true;
?>
			<span class="yun_newedition_show_welfare_n"><?php echo $_smarty_tpl->tpl_vars['wlist']->value;?>
</span>
		<?php } ?>										
	</div>
    </div>
    <?php }?>
     <div class="yun_newedition_jobshow_content">   
	<?php if ($_smarty_tpl->tpl_vars['link']->value['data']['address']) {?>
		<div class="yun_newedition_showtit">工作地址</div>
		<?php if ($_smarty_tpl->tpl_vars['job']->value['x']&&$_smarty_tpl->tpl_vars['job']->value['y']) {?>
		<div class="yun_newedition_show_jobaddressbox">
			<a class="yun_newedition_show_jobaddress" href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','a'=>'jobmap','id'=>$_smarty_tpl->tpl_vars['job']->value['uid']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['link']->value['data']['address'];?>
<span class="yun_newedition_show_jobprimary">距离 <em id="distance"></em></span></a>
			<input type="hidden" id="map_x" value="<?php echo $_smarty_tpl->tpl_vars['mapx']->value;?>
" />
			<input type="hidden" id="map_y" value="<?php echo $_smarty_tpl->tpl_vars['mapy']->value;?>
" />
		</div> 
		<?php } else { ?>
			<div class="yun_newedition_show_jobaddressbox" style="padding-top:18px;">
			  <?php echo $_smarty_tpl->tpl_vars['link']->value['data']['address'];?>
 
			</div>
		<?php }?>
	<?php }?>
    
	<div class="yun_newedition_showtit">职位描述</div>
		<div class="clear"></div>
		<ul class="user_contnet_ul" style=" padding-top:10px;">
			<?php if ($_smarty_tpl->tpl_vars['department']->value) {?>
				<li> <span class="user_contnet_info_n">部门：</span><?php echo $_smarty_tpl->tpl_vars['department']->value;?>
</li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['job']->value['job_number']) {?>
				<li> <span class="user_contnet_info_n">招聘：</span><?php echo $_smarty_tpl->tpl_vars['job']->value['job_number'];?>
</li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['job']->value['job_report']) {?>
				<li><span class="user_contnet_info_n">到岗：</span><?php echo $_smarty_tpl->tpl_vars['job']->value['job_report'];?>
</li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['job']->value['job_age']) {?>
				<li><span class="user_contnet_info_n">年龄：</span><?php echo $_smarty_tpl->tpl_vars['job']->value['job_age'];?>
</li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['job']->value['job_sex']) {?>
				<li><span class="user_contnet_info_n">性别：</span><?php echo $_smarty_tpl->tpl_vars['job']->value['job_sex'];?>
</li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['job']->value['job_marriage']) {?>
				<li><span class="user_contnet_info_n">婚况：</span><?php echo $_smarty_tpl->tpl_vars['job']->value['job_marriage'];?>
</li>
			<?php }?> 
			<?php if ($_smarty_tpl->tpl_vars['job']->value['job_lang']) {?>
				<li class="com_show_li"><span class="user_contnet_info_n">语言：</span>
					<?php  $_smarty_tpl->tpl_vars['wlists'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['wlists']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['job']->value['job_lang']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['wlists']->key => $_smarty_tpl->tpl_vars['wlists']->value) {
$_smarty_tpl->tpl_vars['wlists']->_loop = true;
?>
					<span class="yun_com_fl_dy "><?php echo $_smarty_tpl->tpl_vars['wlists']->value;?>
</span>
					<?php } ?>
				</li>
			<?php }?>
		</ul>
		<!--<div class="yun_newedition_show_mstit">岗位职责</div>-->
		
		<div class="clear"></div>
		
		<div class="yun_newedition_show_content">
		<?php echo $_smarty_tpl->tpl_vars['job']->value['description'];?>
</div>
		</div>

		<div class="job_show_tip">
			<div class="job_show_tip_jb">
				<?php if ($_smarty_tpl->tpl_vars['usertype']->value=='1') {?>
					<a href="javascript:void(0)" onclick="reportcom('<?php echo $_smarty_tpl->tpl_vars['usertype']->value;?>
');"><span class="job_show_tip_tip_i"></span>举报</a>
				<?php } elseif ($_smarty_tpl->tpl_vars['uid']->value) {?>
					<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_user_change']==1) {?>
					<a href="javascript:void(0)" href="javascript:void(0)" onclick="layermsg('请先申请个人账户');"><span class="job_show_tip_tip_i"></span>举报</a>
					<?php } else { ?>
					<a href="javascript:void(0)" href="javascript:void(0)" onclick="layermsg('只有个人用户才能举报');"><span class="job_show_tip_tip_i"></span>举报</a>
					<?php }?>
				<?php } else { ?>
					<a href="javascript:void(0)" onclick="pleaselogin('您还未登录个人账号，是否登录？','<?php echo smarty_function_url(array('m'=>'wap','c'=>'login'),$_smarty_tpl);?>
')" ><span class="job_show_tip_tip_i"></span>举报</a>
				<?php }?> 
			</div>
			<div class="job_show_tip_p">
				<div class="job_show_tip_p_t">如遇无效、虚假、诈骗信息，请立即举报</div>
				<div><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_shenming'];?>
                                                   </div>
			</div>
		</div>
		
		<div class="yun_newedition_jobshow_content">

			<div class="yun_newedition_showtit">公司信息</div>

			<div class="yun_newedition_cominfo">
				<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'company','a'=>'show','id'=>$_smarty_tpl->tpl_vars['job']->value['uid']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['job']->value['name'];?>
">
					<div class="yun_newedition_cominfo_logo"> <img src="<?php echo $_smarty_tpl->tpl_vars['job']->value['logo'];?>
" ></div>
					<div class="yun_newedition_cominfo_name"> <?php echo $_smarty_tpl->tpl_vars['job']->value['name'];?>

           
					<div class="yun_newedition_cominfo_m">
						<?php echo $_smarty_tpl->tpl_vars['job']->value['job_pr'];?>
<span class="yun_newedition_jobline"></span>
						<?php echo $_smarty_tpl->tpl_vars['job']->value['job_mun'];?>
<span class="yun_newedition_jobline"></span>
						<?php echo $_smarty_tpl->tpl_vars['job']->value['job_hy'];?>
 
				</div>         <div class="">
						<?php if ($_smarty_tpl->tpl_vars['job']->value['hotlogo']==1) {?>
						<img src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/mq.png" alt="名企" class="png">
						<?php }?>
				 
						<?php if ($_smarty_tpl->tpl_vars['comrat']->value['com_pic']!="0"&&$_smarty_tpl->tpl_vars['comrat']->value['com_pic']!='') {?>
							<img src="<?php echo $_smarty_tpl->tpl_vars['comrat']->value['com_pic'];?>
" /> 
						<?php }?> 
						
						<?php if ($_smarty_tpl->tpl_vars['job']->value['yyzz_status']=='1') {?>
							<i class="job_qy_rz_icon" style="vertical-align:top"></i> 
						<?php }?></div>
				</div>
				</a>
			</div>
	
			
		</div>
		<?php if ($_smarty_tpl->tpl_vars['config']->value['com_message']==1) {?>
		<div class="yun_newedition_jobshow_content">
			
			<div class="yun_newedition_showtit">问公司
			<?php if ($_smarty_tpl->tpl_vars['uid']->value) {?>
				<?php if ($_smarty_tpl->tpl_vars['usertype']->value==1) {?>
				<a href="javascript:void(0)" onclick="zixun('<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['usertype']->value;?>
');" class="yun_newedition_showtit_tw">我要提问</a>
				<?php } else { ?> 
					<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_user_change']==1) {?>
						<a href="javascript:void(0)" onclick="layermsg('请先申请个人账户');" class="yun_newedition_showtit_tw">我要提问</a>
					<?php } else { ?>
						<a href="javascript:void(0)" onclick="layermsg('只有个人用户才能提问');" class="yun_newedition_showtit_tw">我要提问</a>
					<?php }?>
				<?php }?>
			<?php } else { ?> 	
				<a href="javascript:void(0)" onclick="pleaselogin('您还未登录个人账号，是否登录？','<?php echo smarty_function_url(array('m'=>'wap','c'=>'login'),$_smarty_tpl);?>
')" class="yun_newedition_showtit_tw">我要提问</a>
			<?php }?>
			</div> 

			<?php if ($_smarty_tpl->tpl_vars['msgList']->value) {?>
				<?php  $_smarty_tpl->tpl_vars['msglist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['msglist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['msgList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['msglist']->key => $_smarty_tpl->tpl_vars['msglist']->value) {
$_smarty_tpl->tpl_vars['msglist']->_loop = true;
?>
					<div class="yun_newedition_showask"><i class="yun_newedition_showask_icon">问</i><?php echo $_smarty_tpl->tpl_vars['msglist']->value['content'];?>
</div>
					<div class="yun_newedition_showand"><i class="yun_newedition_showand_icon">答</i><?php if ($_smarty_tpl->tpl_vars['msglist']->value['reply']) {
echo $_smarty_tpl->tpl_vars['msglist']->value['reply'];
} else { ?>企业尚未回复<?php }?>
					<div class="yun_newedition_showand_time"> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['msglist']->value['datetime'],"%Y-%m-%d");?>
</div></div> 
				<?php } ?>
			<?php } else { ?>
				<div class="yun_newedition_shosakno">~ 对职位有疑问？快来问问吧   </div>
			<?php }?>
		
		</div>
     <?php }?>
        </div> 
    <div class="clear"></div>
    <section id="job">
        <div class="yun_newedition_jobshow_content ">
			<div class="yun_newedition_showtit">为您推荐</div>

				<?php  $_smarty_tpl->tpl_vars['job_jia'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['job_jia']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
global $db,$db_config,$config;
		$time = time();
		
		
		//可以做缓存
        $paramer=array("limit"=>"4","noid"=>"'@job.id'","nouid"=>"'@job.uid'","jobids"=>"'@job.job1'","namelen"=>"15","item"=>"'job_jia'","key"=>"'key'","nocache"=>"")
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
				<div class="yun_newedition_jobtj_list">
					<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','a'=>'comapply','id'=>$_smarty_tpl->tpl_vars['job_jia']->value['id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['job_jia']->value['name'];?>
">
					<h3 class="yun_newedition_jobtj_name"><?php echo $_smarty_tpl->tpl_vars['job_jia']->value['name_n'];?>
</h3>
					<div class="yun_newedition_jobinfo"><?php echo $_smarty_tpl->tpl_vars['job_jia']->value['job_city_one'];?>
-<?php echo $_smarty_tpl->tpl_vars['job_jia']->value['job_city_two'];?>
<i class="yun_newedition_jobline"></i><?php echo $_smarty_tpl->tpl_vars['job_jia']->value['job_exp'];?>
经验<i class="yun_newedition_jobline"></i> <?php echo $_smarty_tpl->tpl_vars['job_jia']->value['job_edu'];?>
学历 </div>

					<?php if ($_smarty_tpl->tpl_vars['job_jia']->value['urgent_time']>time()) {?><span class="yun_newedition_jobemergency">急聘</span><?php }?>
					<?php if ($_smarty_tpl->tpl_vars['job_jia']->value['welfarename']) {?>
					<?php  $_smarty_tpl->tpl_vars['waflist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['waflist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['job_jia']->value['welfarename']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['waflist']->key => $_smarty_tpl->tpl_vars['waflist']->value) {
$_smarty_tpl->tpl_vars['waflist']->_loop = true;
?>
					<span class="yun_newedition_jobfl"><?php echo $_smarty_tpl->tpl_vars['waflist']->value;?>
</span><?php } ?>
					<?php }?>			
					<div class="yun_newedition_jobinfo"><?php echo $_smarty_tpl->tpl_vars['job_jia']->value['com_name'];
if ($_smarty_tpl->tpl_vars['job_jia']->value['ratlogo']!=''&&$_smarty_tpl->tpl_vars['job_jia']->value['ratlogo']!="0") {?>
					<img src="<?php echo $_smarty_tpl->tpl_vars['job_jia']->value['ratlogo'];?>
" style="vertical-align:middle; width:16px; height:16px;" /> <?php }?> <?php if ($_smarty_tpl->tpl_vars['job_jia']->value['yyzz_status']=='1') {?>
								<i class="job_qy_rz_icon"></i> <?php }?></div>
					<div class="yun_newedition_jobtj_xz"><?php echo $_smarty_tpl->tpl_vars['job_jia']->value['job_salary'];?>
</div>
					</a>
				</div>
				<?php }
if (!$_smarty_tpl->tpl_vars['job_jia']->_loop) {
?>
					<div class="wap_member_nosearch">
						<div class="wap_member_no_tip"> 很抱歉,暂无推荐职位！</div>
					</div>
				<?php } ?>
        </div>
    </section>
</div>
<!--footer-->
<div class="job_show_foot">
	<div class="job_show_foot_fixd">
		<div class="job_show_foot_left">
		<div class="job_show_foot_leftlist">
		<?php if ($_smarty_tpl->tpl_vars['usertype']->value!=1&&$_smarty_tpl->tpl_vars['uid']->value!='') {?>
			<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_user_change']==1) {?>
			<a  href="javascript:void(0)" onclick="layermsg('请先申请个人账户');" class="job_show_foot_leftbth"><i class="job_show_foot_leftbth_icon job_show_foot_leftbth_icontel"></i> <span class="yun_job_footer_s">电话</span></a>
			<?php } else { ?>
			<a  href="javascript:void(0)" onclick="layermsg('只有个人用户才能电话沟通');" class="job_show_foot_leftbth"><i class="job_show_foot_leftbth_icon job_show_foot_leftbth_icontel"></i> <span class="yun_job_footer_s">电话</span></a>
			<?php }?>
		<?php } elseif ($_smarty_tpl->tpl_vars['uid']->value=='') {?>
			<?php if ($_smarty_tpl->tpl_vars['config']->value['com_login_link']=='1') {?>
			<a href="javascript:openLinkTip();"  class="job_show_foot_leftbth"><i class="job_show_foot_leftbth_icon job_show_foot_leftbth_icontel"></i> <span class="yun_job_footer_s">电话</span></a>
			<?php } else { ?>
			<a  href="javascript:void(0)" onclick="layermsg('请先登录个人账号！',2,function(){location.href='index.php?c=login';});return false;" class="job_show_foot_leftbth"><i class="job_show_foot_leftbth_icon job_show_foot_leftbth_icontel"></i> <span class="yun_job_footer_s">电话</span></a>
			<?php }?>
		<?php } else { ?>
			<a href="javascript:openLinkTip();"  class="job_show_foot_leftbth"><i class="job_show_foot_leftbth_icon job_show_foot_leftbth_icontel"></i> <span class="yun_job_footer_s">电话</span></a>
		<?php }?>
		</div>

		<?php if ($_smarty_tpl->tpl_vars['usertype']->value!=1&&$_smarty_tpl->tpl_vars['uid']->value!='') {?>
			<div class="job_show_foot_leftlist">
			<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_user_change']==1) {?>
			<a href="javascript:void(0)" onclick="layermsg('请先申请个人账户');" class="job_show_foot_leftbth " title="收藏"><i class="job_show_foot_leftbth_icon job_show_foot_leftbth_iconsc"></i>收藏</a>
			<?php } else { ?>
			<a href="javascript:void(0)" onclick="layermsg('只有个人用户才能收藏');" class="job_show_foot_leftbth " title="收藏"><i class="job_show_foot_leftbth_icon job_show_foot_leftbth_iconsc"></i>收藏</a>
			<?php }?>
			</div>
		<?php } elseif ($_smarty_tpl->tpl_vars['uid']->value=='') {?>
			<div class="job_show_foot_leftlist"> 
				<a href="javascript:void(0)" onclick="layermsg('请先登录个人账号！',2,function(){location.href='index.php?c=login';});return false;" class="job_show_foot_leftbth " title="收藏"><i class="job_show_foot_leftbth_icon job_show_foot_leftbth_iconsc"></i>收藏</a>
			</div>
		<?php } elseif ($_smarty_tpl->tpl_vars['job']->value['fav_job']) {?>
			<div class="job_show_foot_leftlist"> 
				<a href="javascript:void(0);" class="job_show_foot_leftbth" title="已收藏"><i class="job_show_foot_leftbth_icon job_show_foot_leftbth_iconsc"></i>已收藏</a>
		   </div>
		<?php } else { ?>
			<div class="job_show_foot_leftlist"><a href="javascript:jobfav('<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
');" class="job_show_foot_leftbth " title="收藏"><i class="job_show_foot_leftbth_icon job_show_foot_leftbth_iconsc"></i>收藏</a></div>
		<?php }?>
		</div>
		<div class="job_show_foot_right">
			<?php if ($_smarty_tpl->tpl_vars['usertype']->value!=1&&$_smarty_tpl->tpl_vars['uid']->value!='') {?>
				<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_user_change']==1) {?>
				<a href="javascript:void(0)" onclick="layermsg('请先申请个人账户');" class="yun_job_footer_fx_right_bth">投递简历</a>
				<?php } else { ?>
				<a href="javascript:void(0)" onclick="layermsg('只有个人用户才能申请');" class="yun_job_footer_fx_right_bth">投递简历</a>
				<?php }?>
			<?php } elseif ($_smarty_tpl->tpl_vars['job']->value['userid_job']) {?>
				<span class="yun_job_footer_fx_right_ytd_bth">已投递简历</span> 
			<?php } elseif ($_smarty_tpl->tpl_vars['job']->value['invite_job']) {?>
				<span class="yun_job_footer_fx_right_ytd_bth">已邀请面试</span>
			<?php } elseif ($_smarty_tpl->tpl_vars['uid']->value=='') {?>
				<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','a'=>'applyjobuid','jobid'=>$_smarty_tpl->tpl_vars['job']->value['id']),$_smarty_tpl);?>
" class="yun_job_footer_fx_right_bth">投递简历</a>
			<?php } else { ?>
				<a href="javascript:jobapplyshow();" class="yun_job_footer_fx_right_bth">投递简历</a>
			<?php }?>
		</div>
	</div>
</div>


<!-- 投递简历弹出框 -->
<div class="wap_tips_jobapplyjob" style="display:none;">
<div class="wap_tips">
	<div class="job_prompt_sendresume">
    	<div class="wap_tips_tit"><span class="wap_tips_tit_name">申请职位</span><a href="javascript:closeshow();" class="wap_tips_tit_close"></a></div>
  
	
		<div class="job_prompt_sendresume_job">您正在申请 <span class="job_prompt_sendresume_jobname"><?php echo mb_substr($_smarty_tpl->tpl_vars['job']->value['jobname'],0,14,'utf-8');?>
</span> 职位，请选择您要投递的简历</div>
		<div  class="POp_up_r"></div>
		<div class="job_prompt_box_ok"> <a href="javascript:jobapply();" class="job_prompt_box_ok_bth login_button2">立即申请</a></div>
		<input id="companyname" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['job']->value['com_name'];?>
" />
		<input id="jobname" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['job']->value['jobname'];?>
" />
		<input id="companyuid" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['job']->value['uid'];?>
" />
		<input id="jobid" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
" />
	</div>
	
</div>
</div>

<!--以下是查看联系方式弹出框----------------------------------------------------------------------------------->
<?php if ($_smarty_tpl->tpl_vars['link']->value['errorcode']==1||$_smarty_tpl->tpl_vars['link']->value['errorcode']==2) {?>
	<!--未开放联系方式，提示投递简历-->
	<div class="wap_tips wap_link_tips" style="display:none;">
		<div class="wap_tips_tit"><span class="wap_tips_tit_name">温馨提示</span><a href="javascript:closetip();" class="wap_tips_tit_close"></a></div>
		<div class="wap_tips_iconbox"><i class="wap_tips_icon wap_tips_icon_no"></i></div>
		<div class="wap_tips_p">企业未开放查看联系方式<?php if (!$_smarty_tpl->tpl_vars['job']->value['userid_job']) {?>，请直接投递简历<?php }?></div>
		<?php if (!$_smarty_tpl->tpl_vars['job']->value['userid_job']) {?>
		<div class="wap_tips_bth"><a href="javascript:jobapplyshow();" class="wap_tips_bth_a">投递简历</a></div>
		<?php }?>
	</div>
<?php } else { ?>

	<?php if ($_smarty_tpl->tpl_vars['link']->value['errorcode']==4) {?>
		<!--仅对有简历的求职者开放联系方式-->
		<div class="wap_tips wap_link_tips" style="display:none;">
			<div class="wap_tips_tit"><span class="wap_tips_tit_name">温馨提示</span><a href="javascript:closetip();" class="wap_tips_tit_close"></a></div>
			<div class="wap_tips_iconbox"><i class="wap_tips_icon wap_tips_icon_noresume"></i></div>
			<div class="wap_tips_p">企业仅对有简历的求职者开放联系方式</div>
			<div class="wap_tips_bth"><a href="member/index.php?c=addresume" class="wap_tips_bth_a">创建简历</a></div>
		</div>
	<?php } elseif ($_smarty_tpl->tpl_vars['link']->value['errorcode']==5) {?>
		<!--设置投递简历查看联系方式-->
		<div class="wap_tips wap_link_tips" style="display:none;">
			<div class="wap_tips_tit"><span class="wap_tips_tit_name">温馨提示</span><a href="javascript:closetip();" class="wap_tips_tit_close"></a></div>
			<div class="wap_tips_looktel">手机：<span class="wap_tips_looktel_n"><?php echo $_smarty_tpl->tpl_vars['link']->value['data']['linktel_n'];?>
</span>  </div>
			<div class="wap_tips_p">企业已设置投递简历才能查看联系方式</div>
			<div class="wap_tips_bth"><a href="javascript:void(0);" onclick="lxsq()" class="wap_tips_bth_a">投递简历</a></div>
		</div>
	<?php } else { ?>
		
		<?php if ($_smarty_tpl->tpl_vars['link']->value['errorcode']==6) {?>	
		
		<div class="wap_tips wap_link_tips" style="display:none;">
		<div class="wap_tips_tit"><span class="wap_tips_tit_name">温馨提示</span><a href="javascript:closetip();"class="wap_tips_tit_close"></a></div>
		<div class="wap_tips_iconbox"><i class="wap_tips_icon wap_tips_icon_noresume"></i></div>
		<div class="wap_tips_p">只有个人用户才能查看联系方式</div>
		<div class="wap_tips_bth">
			<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_user_change']==1) {?>
			<a href="javascript:void(0)" onclick="layermsg('请先申请个人账户');" class="wap_tips_bth_a">查看联系方式</a></div>
			<?php } else { ?>
			<a href="javascript:void(0)" onclick="layermsg('只有个人用户才能查看');" class="wap_tips_bth_a">查看联系方式</a></div>
			<?php }?>
		</div>
		
		
		<?php } elseif ($_smarty_tpl->tpl_vars['link']->value['errorcode']==3) {?>
		<div class="wap_tips wap_link_tips" style="display:none;">
		<div class="wap_tips_tit"><span class="wap_tips_tit_name">温馨提示</span><a href="javascript:closetip();" class="wap_tips_tit_close"></a></div>
		<div class="wap_tips_iconbox"><i class="wap_tips_icon wap_tips_icon_noresume"></i></div>
		<div class="wap_tips_p">企业设置登录用户才能查看联系方式</div>
		<div class="wap_tips_bth"><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'login'),$_smarty_tpl);?>
" class="wap_tips_bth_a">立即登录</a></div>
		</div>
		
		<?php } else { ?>
		
		<!--查看联系方式-->
		<div class="wap_tips wap_link_tips"  style="display:none;">
		<div class="wap_tips_tit"><span class="wap_tips_tit_name">联系方式</span><a href="javascript:closetip();" class="wap_tips_tit_close"></a></div>
		<div class="wap_tips_looktouchbox">
		<?php if ($_smarty_tpl->tpl_vars['link']->value['data']['linkman']) {?><div class="wap_tips_looktouchuserbox"><span class="wap_tips_looktouchuser"><?php echo $_smarty_tpl->tpl_vars['link']->value['data']['linkman'];?>
</span><?php if ($_smarty_tpl->tpl_vars['job']->value['linkjob']) {?>（<?php echo $_smarty_tpl->tpl_vars['job']->value['linkjob'];?>
）<?php }?></div><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['link']->value['data']['linktel']) {?><div class="wap_tips_looktouch">手机：<span class="wap_tips_looktel_n"><?php echo $_smarty_tpl->tpl_vars['link']->value['data']['linktel'];?>
</span><a href="tel:<?php echo $_smarty_tpl->tpl_vars['link']->value['data']['linktel'];?>
"  class="wap_tips_looktel_bth">拨打</a>  </div><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['link']->value['data']['linkphone']) {?><div class="wap_tips_looktouch">电话：<span class="wap_tips_looktel_n"><?php echo $_smarty_tpl->tpl_vars['link']->value['data']['linkphone'];?>
</span><a href="tel:<?php echo $_smarty_tpl->tpl_vars['link']->value['data']['linkphone'];?>
"  class="wap_tips_looktel_bth wap_tips_looktel_bth_dh">拨打</a>  </div><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['link']->value['data']['linkqq']) {?><div class="wap_tips_looktouch">联系QQ：<span class="wap_tips_looktel_n"><?php echo $_smarty_tpl->tpl_vars['link']->value['data']['linkqq'];?>
</span> </div><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['link']->value['data']['busstops']) {?><div class="wap_tips_looktouch">公交站点：<span class="wap_tips_looktel_n"><?php echo $_smarty_tpl->tpl_vars['link']->value['data']['busstops'];?>
</span> </div><?php }?>
		<div class="wap_tips_looktel_p">联系我时，请说是在<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
上看到的</div>
		</div>

		</div>
		<?php }?>
	<?php }?>
<?php }?>	

<!--默认简历填写不完整，完善后才能投递职位-->
<div class="wap_tips wap_tips_sqjob" style="display:none;">
<div class="wap_tips_tit"><span class="wap_tips_tit_name">温馨提示</span><a href="javascript:closetip();" class="wap_tips_tit_close"></a></div>
<div class="wap_tips_iconbox"><i class="wap_tips_icon wap_tips_icon_noresume"></i></div>
<div id="nosqmsg" class="wap_tips_p">默认简历填写不完整，完善后才能投递职位</div>
<div class="wap_tips_bth"><a href="member/index.php?c=resume" class="wap_tips_bth_a">完善简历</a></div>
</div>
<!--查看联系方式弹出框 end---------------------------------------------------------------------------------->
<div id="bg" style="display:none; z-index:1000000000"></div>
<!--举报-->

<div style="display:none" id="reportcom">
    <div class="report_box_h1"><span class="report_box_h1_s">举报此职位</span>
        <span class="report_box_h1_qx"><input class="" type="button" value="取消"  onclick="reportqx();"/></span>
    </div>
    <div class="report_box" style="width:320px;">

        <div class="report_job_ly_tip">请选择您的举报理由</div>

        <!--report_job_ly_cur-->
        <span class="report_job_ly" id="r1" onclick="add_reason(1);">电话空号</span>
        <span class="report_job_ly" id="r2" onclick="add_reason(2);">电话没人接</span>
        <span class="report_job_ly" id="r3" onclick="add_reason(3);">工资虚假</span>
        <span class="report_job_ly" id="r4" onclick="add_reason(4);">非法收费</span>
        <span class="report_job_ly" id="r5" onclick="add_reason(5);">职介冒充</span>

        <div class="report_job_ly_tip">备注说明</div>
        <div class="report_job_textarea_box">
            <input id="r_uid" value="<?php echo $_smarty_tpl->tpl_vars['Info']->value['uid'];?>
" type="hidden" />
            <input id="id" value="<?php echo $_smarty_tpl->tpl_vars['Info']->value['id'];?>
" type="hidden" />
            <input id="r_name" value="<?php echo $_smarty_tpl->tpl_vars['Info']->value['com_name'];?>
" type="hidden" />
            <textarea placeholder="请简明扼要的阐述你的理由，以便工作人员更好的判断" id="r_reason" class="report_job_textarea"></textarea>
        </div>

        <div class="report_job_ly_tip">验证码</div>
        <div class="report_box_yz">
            <input type="text" class="report_box_text" id="authcode" maxlength="6" placeholder="输入图片验证码" onfocus="checkCode('vcode_img')" autocomplete="off">
            <img id="vcode_img" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wapdomain'];?>
/authcode.inc.php" class="report_box_yz_img" />
            <a onclick="checkCode('vcode_img');">看不清?</a>
        </div>
        <div class="report_box_bth"> <input class="login_button_jb" type="button" value="举 报" onclick="reportSub();" /> </div>
    </div>
</div>

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
>
	$(function(){
		'<?php if ($_smarty_tpl->tpl_vars['usertype']->value==1) {?>'
			var id = '<?php echo $_GET['id'];?>
';
			$.post('index.php?c=job&a=history',{id:id},function(data){
				if(data){
					return true;			
				}
			})
		'<?php }?>'
	}) 

    var config = {
        url: '<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','a'=>'share','id'=>$_smarty_tpl->tpl_vars['job']->value['id']),$_smarty_tpl);?>
',
        title: '<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
',
        desc: '<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
',
        img: '<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wx_sharelogo'];?>
',
        img_title: '<?php echo $_smarty_tpl->tpl_vars['job']->value['name'];?>
',
        from: '<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
'
    };
    var content = '';
	
	function jobapplyshow(){
		closetip();
		$.post(wapurl + "?c=ajax&a=index_ajaxjob", {
            jobid: '<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
'
        }, function(data) {
			 var data = eval('(' + data + ')');
			 if(data.status==1){
				$(".POp_up_r").html();
				$(".POp_up_r").html(data.html);
				$(".wap_tips_jobapplyjob").show();
				$("#bg").show();
			 }else{
				layermsg(data.msg);
				return false;
			 }
        });
	}
	function closeshow(){
		$(".wap_tips_jobapplyjob").hide();
		$("#bg").hide();
	}
	
	function sqjobclic(id){
		$(".job_prompt_sendresume_list").removeClass("job_prompt_sendresume_list_cur");
		$('#resume_'+id).addClass("job_prompt_sendresume_list_cur");
	}
	
    function reportcom(usertype) {
        if(usertype == 1) {
            content = $("#reportcom").html();
            $("#reportcom").html('');
            layer.open({
                type: 1,
                shadeClose: false,
                content: content
            });
        }
    }

    function add_reason(s) {
        if($("#r" + s).hasClass('report_job_ly_cur')) {
            $("#r" + s).removeClass('report_job_ly_cur');
        } else {
            $("#r" + s).addClass('report_job_ly_cur');
        }
    }

    function reportqx() {
        $("#reportcom").html(content);
        layer.closeAll();
    }
    function reportSub() {
        var authcode = $("#authcode").val();
        var r1 = $("#r1").html(),
            r2 = $("#r2").html(),
            r3 = $("#r3").html(),
            r4 = $("#r4").html(),
            r5 = $("#r5").html();
        var reason = "理由：";
        if($("#r1").hasClass('report_job_ly_cur')) {
            var reason = reason + r1 + "，";
        }
        if($("#r2").hasClass('report_job_ly_cur')) {
            var reason = reason + r2 + "，";
        }
        if($("#r3").hasClass('report_job_ly_cur')) {
            var reason = reason + r3 + "，";
        }
        if($("#r4").hasClass('report_job_ly_cur')) {
            var reason = reason + r4 + "，";
        }
        if($("#r5").hasClass('report_job_ly_cur')) {
            var reason = reason + r5 + "；";
        }

        if(reason == '理由：') {
            layermsg('请选择举报原因！');
            return false;
        }

        var r6 = $("#r_reason").val();

        var reason = reason + r6;

        if(authcode == '') {
            layermsg('请填写验证码！');
            return false;
        }
        layer.closeAll();
        layer_load('执行中，请稍候...');
        $.post(wapurl + "?c=job&a=report", {
            id: '<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
',
            authcode: authcode,
            reason: reason
        }, function(data) {
            layer.closeAll();
            var data = eval('(' + data + ')');
            if(data.url) {
                layermsg(data.msg, 2, function() {
                    location.href = data.url;
                });
            } else {
                layermsg(data.msg, 2, function() {
                    location.reload(true);
                });
            }
        });
    }

    function zixun(uid,usertype) {
		layer.open({
			type: 1,
			title: '问企业',
			closeBtn: [0, true],
			border: [10, 0.3, '#000', true],
			area: ['200px', 'auto'],
			content: '<div class="ask_box"><div class="ask_tit_tip">您的问题会在企业回答后展示在职位详情页！</div> <div class="ask_box_textareabox"><textarea class="ask_box_textarea mt10" id="reasons" placeholder="请输入你要咨询的问题"></textarea><input type="hidden" name="jobid" value="<?php echo $_smarty_tpl->tpl_vars['Info']->value['id'];?>
" /><input type="hidden" name="job_uid" value="<?php echo $_smarty_tpl->tpl_vars['job']->value['uid'];?>
" /><input type="hidden" name="com_name" value="<?php echo $_smarty_tpl->tpl_vars['Info']->value['com_name'];?>
" /><input type="hidden" name="job_name" value="<?php echo $_smarty_tpl->tpl_vars['job']->value['name'];?>
" /></div><div class="ask_box_yz"><div class="ask_box_yz_bth"><input type="text" class="" placeholder="请输入验证码"id="authcodes" maxlength="6"></div><a onclick="checkCode(\'vcode_imgs\');"><img id="vcode_imgs" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wapdomain'];?>
/authcode.inc.php" class="ask_box_yz_img"/> </a></div><div class="report_box_bth"><input class="login_button_jb" type="button" value="提交咨询"  onclick="zixunSubs();"/></div></div>'
		});
    }

    function zixunqxs() {
        $("#zixuns").html();
        layer.closeAll();
    }

    function zixunSubs() {
        var authcode = $("#authcodes").val();
        var reason = $("#reasons").val();
        var jobid = $.trim($("input[name='jobid']").val());
        var job_uid = $.trim($("input[name='job_uid']").val());
        var com_name = $.trim($("input[name='com_name']").val());
        var job_name = $.trim($("input[name='job_name']").val());
        if(reason == '') {
            layermsg('请填写咨询内容！');
            return false;
        }
        if(authcode == '') {
            layermsg('请填写验证码！');
            return false;
        }

        layer_load('执行中，请稍候...');
        $.post(wapurl + "?c=job&a=msg", {
            id: '<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
',
            authcode: authcode,
            reason: reason,
            jobid: jobid,
            job_uid: job_uid,
            com_name: com_name,
            job_name: job_name
        }, function(data) {
            layer.closeAll();
            var data = eval('(' + data + ')');
            if(data.url) {
                layermsg(data.msg, 2, function() {
                    location.href = data.url;
                });
            } else {
                layermsg(data.msg, 2, function() {
                    location.reload(true);
                });
            }
        });
    }

    function jobapply() {
		$(".wap_tips_jobapplyjob").hide();
		$('#bg').hide();
		var eid=$(".job_prompt_sendresume_list_cur").attr('data_did');
		var jobid=$("#jobid").val();
        layer_load('执行中，请稍候...');
        $.get(wapurl + "/index.php?c=job&a=comapply&type=sq&id=<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
&eid="+eid, function(data) {
        	layer.closeAll();
            var data = eval('(' + data + ')');
            if(data.state==1){
				pleaselogin('您还未登录个人账号，是否登录？','<?php echo smarty_function_url(array('m'=>'wap','c'=>'login'),$_smarty_tpl);?>
')
			}else if(data.state==2){
				var sy_user_change = '<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_user_change'];?>
';
				if(sy_user_change==1){
					layermsg('请先申请个人账户');
				}else{
					layermsg('只有个人用户才能申请');
				}
				return false;
			}else if(data.state==7){
				$("#nosqmsg").text(data.msg);
				$('.wap_tips_sqjob').show();
				$('#bg').show();
			}else if(data.url) {
                if(data.url == '1') {
                    url = location.href;
                }
                layermsg(data.msg, 2, function() {
                    location.href = data.url;
                });
            } else {
                layermsg(data.msg, 2,function() {
					window.location.reload();
                });
            }
        });
    }
    function jobfav(jobid) {
        layer_load('执行中，请稍候...');
        $.get(wapurl + "?c=job&a=comapply&type=fav&id=<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
", function(data) {
        	layer.closeAll();
            var data = eval('(' + data + ')');
              if(data.state==0){
                pleaselogin('您还未登录个人账号，是否登录？','<?php echo smarty_function_url(array('m'=>'wap','c'=>'login'),$_smarty_tpl);?>
')
              }else if(data.state==4){
            	  var sy_user_change = '<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_user_change'];?>
';
  				  if(sy_user_change==1){
  					 layermsg('请先申请个人账户');
  				  }else{
  					 layermsg('只有个人用户才能收藏');
  				  }
				return false;
              }else if(data.url) {
                if(data.url == '1') {
                    url = location.href;
                }
                layermsg(data.msg, 2, function() {
                    location.href = data.url;
                });
            } else {
                layermsg(data.msg, 2, function() {
                    location.reload(true);
                });
            }
        })
    };

    function checkshenming() {
        $('#shenming').hide();
        $("#smtext").show();
    }

    function subsm(id) {
        var shenming = $("#smname").val();
		layer_load('执行中，请稍候...');
        $.post(wapurl + "?c=job&a=shenming", {
            id: id,
            shenming: shenming
        }, function(data) {
			layer.closeAll();
            if(data) {
                location.reload(true);
            }
        });
    }
	//显示联系方式弹出框
	function openLinkTip(){
		$('.wap_link_tips').show();
		$('#bg').show();
	}
	//关闭联系方式弹出框
	function closetip(){
		$('.wap_link_tips').hide();
		$('#bg').hide();
	}
	function lxsq(){
		$('.wap_link_tips').hide();
		$("#bg").hide();
		jobapplyshow();
	}
<?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['job']->value['x']&&$_smarty_tpl->tpl_vars['job']->value['y']) {?>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['mapurl'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    //百度地图测距
    var map=null;
    function getdistance() {
        var map_x = $("#map_x").val();
        var map_y = $("#map_y").val();
        if(map_x == 0 && map_y == 0) {
            var geolocation = new BMap.Geolocation();
            geolocation.getCurrentPosition(function(r) {
                if(this.getStatus() == BMAP_STATUS_SUCCESS) {
                    $.post(wapurl + 'index.php?c=job&a=distance', {
                        x: r.point.lng,
                        y: r.point.lat
                    }, function(data) {})
                    $("#map_x").val(r.point.lng);
                    $("#map_y").val(r.point.lat);
					map_x=r.point.lng;
					map_y=r.point.lat;
                } else {
                    if(this.getStatus() == "6") {
                        layermsg("开启手机定位后才能使用此功能", 2);
                        return false;
                    } else if(this.getStatus() == "7") {
                        layermsg("开启手机定位后才能使用此功能", 2);
                        return false;
                    } else {
                        layermsg("地图定位出错", 2);
                        return false;
                    }
                }
            }, {
                enableHighAccuracy: true
            })
        }
        var x = '<?php echo $_smarty_tpl->tpl_vars['job']->value['x'];?>
',
            y = '<?php echo $_smarty_tpl->tpl_vars['job']->value['y'];?>
';
		setTimeout(function(){
			if(map_x > 0 && map_y > 0) {
				var pointA = new BMap.Point(x, y);
				var pointB = new BMap.Point(map_x, map_y);
				var mapdistance = '(' + (map.getDistance(pointA, pointB) / 1000).toFixed(1) + 'km)';
				$("#distance").html(mapdistance);
			} else {
				setTimeout(function() {
					getdistance();
				}, 3000);
			}
		},1000);
    }
    $(function() {
		map = new BMap.Map();
        getdistance();
    })
<?php echo '</script'; ?>
>
<?php }?>
<!--微信分享专用---->
<div style='margin:0 auto;width:0px;height:0px;overflow:hidden;'><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wx_sharelogo'];?>
"></div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/public_previewimage.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<style>
.yun_footer{ display:none;}
.header_h1{border-bottom:1px solid #eee}
</style><?php }} ?>
