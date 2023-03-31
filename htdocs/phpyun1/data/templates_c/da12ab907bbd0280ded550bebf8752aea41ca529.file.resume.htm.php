<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-01 01:13:24
         compiled from "D:\rcw\uploads\app\template\member\com\resume.htm" */ ?>
<?php /*%%SmartyHeaderCode:507314405f9d9b349616a1-51442853%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da12ab907bbd0280ded550bebf8752aea41ca529' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\member\\com\\resume.htm',
      1 => 1578392215,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '507314405f9d9b349616a1-51442853',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'style' => 0,
    'config' => 0,
    'jionly' => 0,
    'cionly' => 0,
    'userdata' => 0,
    'v' => 0,
    'userclass_name' => 0,
    'uptime' => 0,
    'j' => 0,
    'user_sex' => 0,
    'user' => 0,
    'key' => 0,
    'user2' => 0,
    'total' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5f9d9b349ba5d5_66336156',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9d9b349ba5d5_66336156')) {function content_5f9d9b349ba5d5_66336156($_smarty_tpl) {?><?php if (!is_callable('smarty_function_searchurl')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.searchurl.php';
if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="w1000">
	<div class="admin_mainbody">
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/class.public.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/data/plus/job.cache.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/data/plus/jobparent.cache.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/data/plus/city.cache.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/data/plus/cityparent.cache.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/class.public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
>
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/newclass.public.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css">
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/newclass.public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
> 
		<link href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/css/formSelects-v4.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/formSelects-v4.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
		<div class="com_tit"> <span class="com_tit_span">搜人才</span> </div>
         <div class="right_box">
			<div class="admincont_box">
            <div class="com_resume_homebox">
            <div class="clear"></div>

            <form action='index.php' method="get" id="form" class="layui-form">
				
				<input name='c' value='resume' type='hidden'>
				
				<div class="com_resume_homesearch">
					<div class="com_resume_homesearch_job">
						<input type="hidden" name="jobin" id="job_post" value="<?php echo $_GET['jobin'];?>
" />
						<select id="jobclass_search" name="jobclass_search" xm-select-type="jobclass" xm-select="jobclass_search" xm-select-search="" xm-select-radio="" xm-select-skin="default"  xm-select-direction="down">
						<option value="">输入搜索职能</option>
						</select>
						<?php if ($_smarty_tpl->tpl_vars['jionly']->value!='1') {?>
						<div onclick="index_job_new(1,'#workadds_job','#job_post','left:100px;top:100px; position:absolute;','1','form');" class="news_expect_text_new_nth" title="选择职位类别"></div>
						<?php }?>
					</div>
					
					<div class="com_resume_homesearch_city">
						<input type="hidden" name="cityin" id="cityid" value="<?php echo $_GET['cityin'];?>
" />
						
						<select id="cityclass_search" name="cityclass_search" xm-select-type="cityclass" xm-select="cityclass_search" xm-select-search="" xm-select-radio="" xm-select-skin="default"  xm-select-direction="down">
			            <option value="">输入搜索城市</option>
			            </select>
			            <?php if ($_smarty_tpl->tpl_vars['cionly']->value!='1') {?>
			            <div onclick="index_city_new(1,'#city','#cityid')" class="news_expect_text_new_nth" title="选择城市"></div>
			            <?php }?>
					</div>
					
					<div class="com_resume_homesearch_select">
						<select name="exp" lay-filter="resume_submit">
							<option value="">工作年限</option>
							<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_word']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_GET['exp']==$_smarty_tpl->tpl_vars['v']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
							<?php } ?>
						</select>
					</div>

					<div class="com_resume_homesearch_select">
						<select name="edu" lay-filter="resume_submit">
							<option value="">学历要求</option>
							<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_edu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_GET['edu']==$_smarty_tpl->tpl_vars['v']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
							<?php } ?>
						</select>
					</div>
					 
					<div class="ps_xz_box" id="salary_sel" onmouseout='closeSalaryOption();' onmouseover='openSalaryOption();'>
						<span class="ps_xz_box_name">
						    <?php if ($_GET['minsalary']!=''||$_GET['maxsalary']!='') {?>
						    	<?php if ($_GET['minsalary']!=''&&$_GET['maxsalary']=='') {?>
						    		<?php echo $_GET['minsalary'];?>
以上
						    	<?php } elseif ($_GET['minsalary']==''&&$_GET['maxsalary']!='') {?>
						    		<?php echo $_GET['maxsalary'];?>
以下
						    	<?php } else { ?>
						    		<?php echo $_GET['minsalary'];?>
 - <?php echo $_GET['maxsalary'];?>

						    	<?php }?>
						    <?php } else { ?>
						    	选择月薪范围
						    <?php }?>
						</span>

						<div class="resume_xz salary_option" style="display:none;z-index:1;">
							<a href="javascript:void(0)" onClick="setSalary('','2000')" class="resume_xzfw">2000以下</a>
							<a href="javascript:void(0)" onClick="setSalary('2000','4000')" class="resume_xzfw">2000-4000</a>
							<a href="javascript:void(0)" onClick="setSalary('4000','6000')" class="resume_xzfw">4000-6000</a>
							<a href="javascript:void(0)" onClick="setSalary('6000','8000')" class="resume_xzfw">6000-8000</a>
							<a href="javascript:void(0)" onClick="setSalary('8000','10000')" class="resume_xzfw">8000-10000</a>
							<a href="javascript:void(0)" onClick="setSalary('10000','')" class="resume_xzfw">10000以上</a>
							<input type="text" id="min" name="minsalary" size="6" value="<?php if ($_GET['minsalary']) {
echo $_GET['minsalary'];
}?>" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" class="resume_xz_text" />
							<span class="resume_xz_line">-</span>
							<input type="text" id="max" name="maxsalary" size="6" value="<?php if ($_GET['maxsalary']) {
echo $_GET['maxsalary'];
}?>" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" class="resume_xz_text" />
							<input type="submit" value="确定" class="resume_xz_bth">
						</div>
					</div>

					<div class="com_resume_homesearch_select">
						<select name="uptime" lay-filter="resume_submit">
							<option value="">更新时间</option>
							<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['uptime']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
" <?php if ($_GET['uptime']==$_smarty_tpl->tpl_vars['j']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
							<?php } ?>
						</select>
					</div>

					<div class="com_resume_homesearch_bot">
						<div class="com_resume_homesearch_xb">
							<select name="sex" lay-filter="resume_submit">
								<option value="">性别</option>
								<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['user_sex']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
" <?php if ($_GET['sex']==$_smarty_tpl->tpl_vars['j']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
								<?php } ?>
							</select>
						</div>
						 
						<div class="com_resume_homesearch_xb"><input type="checkbox" lay-skin="primary" lay-filter='resume_submit' title="有头像" name="pic" value="1" <?php if ($_GET['pic']) {?>checked<?php }?>></div>

						<div class="com_resume_homesearch_xb"><input type="checkbox" lay-skin="primary" lay-filter='resume_submit' title="已认证" name="idcard" value="1" <?php if ($_GET['idcard']) {?>checked<?php }?>></div>

						<div class="com_resume_homesearch_xb"><input type="checkbox" lay-skin="primary" lay-filter='resume_submit' title="有作品" name="work" value="1" <?php if ($_GET['work']) {?>checked<?php }?>></div>

						<div class="com_resume_homesearch_stj"><input type="text" placeholder="在当前条件下筛选" class="com_resume_homesearch_stj_text" value="<?php echo $_GET['keyword'];?>
" name="keyword">

						<input type="submit" value="搜索" class="com_resume_homesearch_stj_bth"></div>

						<div class="com_resume_homesearch_qk"><a href="index.php?c=resume" class="com_resume_homesearch_qk_a">清空所选条件</a></div>
					</div>	
				</div>
            </form>

			<div class="clear"></div>
			<!--简历列表-->
			<div class="com_resume_listbox">
				<div class="com_resume_listbox_tit">
					<div class="com_resume_t">人才列表</div>
					<div class="com_resume_listbox_titlook">查看方式 
						<a href="<?php echo smarty_function_searchurl(array('m'=>'member','c'=>'resume','untype'=>'rtype'),$_smarty_tpl);?>
" class="com_resume_listbox_titlook_zs <?php if ($_GET['rtype']!='1') {?>com_resume_listbox_titlook_cur<?php }?>"><i class="com_resume_listbox_titlook_zslb"></i></a> 
						<a href="<?php echo smarty_function_searchurl(array('m'=>'member','c'=>'resume','rtype'=>1,'untype'=>'rtype'),$_smarty_tpl);?>
" class="com_resume_listbox_titlook_zs <?php if ($_GET['rtype']=='1') {?>com_resume_listbox_titlook_cur<?php }?>"><i class="com_resume_listbox_titlook_zsxx"></i></a>
					</div>
				</div>
				<?php if ($_GET['rtype']!='1') {?>
				<!--  图文展示-->
				<div class="com_resume_show">
            
					<table class="com_resume_showtable">
					<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
$user=array();global $db,$db_config,$config;
		if(is_array($_GET)){
			foreach($_GET as $key=>$value){
				if($value=='0'){
					unset($_GET[$key]);
				}
			}
		}
		$paramer=array("limit"=>"20","minsalary"=>"'auto.minsalary'","maxsalary"=>"'auto.maxsalary'","noid"=>"1","idcard"=>"'auto.idcard'","edu"=>"'auto.edu'","order"=>"'auto.order'","work"=>"'auto.work'","exp"=>"'auto.exp'","sex"=>"'auto.sex'","keyword"=>"'auto.keyword'","hy"=>"'auto.hy'","jobin"=>"'auto.jobin'","cityin"=>"'auto.cityin'","adtime"=>"'auto.adtime'","pic"=>"'auto.pic'","typeids"=>"'auto.typeids'","type"=>"'auto.type'","job1"=>"'auto.job1'","job1_son"=>"'auto.job1_son'","job_post"=>"'auto.job_post'","uptime"=>"'auto.uptime'","post_len"=>"14","city_len"=>"14","ispage"=>"1","item"=>"'user'","key"=>"'key'","name"=>"'userlist1'","islt"=>"3","nocache"=>"")
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
				$user = array();
			}else{
				
				$select="a.`id`,a.`uid`,a.`name`,a.`hy`,a.`job_classid`,a.`city_classid`,a.`jobstatus`,a.`type`,a.`report`,a.`lastupdate`,a.`rec`,a.`top`,a.`topdate`,a.`rec_resume`,a.`ctime`,a.`uname`,a.`idcard_status`,a.`minsalary`,a.`maxsalary`";
				if($pagewhere!=""){

					$sql = "select ".$select." from `".$db_config[def]."resume_expect` a ".$pagewhere." where ".$joinwhere." and ".$where.$order.$sort.$limit;

					$user=$db->DB_query_all($sql,"all");

				}else{
					$sql = "select ".$select." from `".$db_config[def]."resume_expect` a where ".$where.$order.$sort.$limit;
					$user=$db->DB_query_all($sql,"all");
				}
			}
            
        
        include(CONFIG_PATH."db.data.php");		

		if(!empty($user) && is_array($user)){
			
			//如果存在top，则说明请求来自排行榜页面
			if($paramer['top']){
				$uids=$m_name=array();
				foreach($user as $k=>$v){
					$uids[]=$v[uid];
				}

				$member=$db->select_all($db_config[def]."member","`uid` in(".@implode(',',$uids).")","uid,username");
				foreach($member as $val){
					$m_name[$val[uid]]=$val['username'];
				}
			}
			$uid = $eid = array();
			foreach($user as $key=>$value){
				
				$uid[] = $value['uid'];
				$eid[] = $value['id'];
			}
			$eids = @implode(',',$eid);
			$uids = @implode(',',$uid);
            $resume=$db->select_all("resume","`uid` in(".$uids.")","uid,name,nametype,tag,sex,moblie_status,edu,exp,photo,phototype,photo_status,birthday");
			foreach($resume as $v){
				$ruids[] = $v['uid'];
			}
			foreach($user as $k=>$v){
				if(!in_array($v['uid'],$ruids)){
					unset($user[$k]);
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
			foreach($user as $k=>$v){
				if($paramer[topdate]){
					$noids[] = $v[id];
				}
				//筛除重复
				if($paramer[noid]=='1' && !empty($noids) && in_array($v['id'],$noids)){
					unset($user[$k]);
					continue;
				}
			    foreach($resume as $val){
			        if($v['uid']==$val['uid']){
                        $user[$k]['where']=$citywhere;
			    		$user[$k]['edu_n']=$userclass_name[$val['edu']];
				        $user[$k]['exp_n']=$userclass_name[$val['exp']];
			            if($val['birthday']){
							$year = date("Y",strtotime($val['birthday']));
							$user[$k]['age'] =date("Y")-$year;
						}
						if($val['sex']==152){
							$val['sex']='1';
						}elseif ($val['sex']==153){
							$val['sex']='2';
						}
						$user[$k]['sex'] =$arr_data[sex][$val['sex']];
		                $user[$k]['phototype']=$val[phototype];
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
						$user[$k]['photo']=checkpic($photo,$icon);
						if($val['tag']){
                            $user[$k]['tag']=explode(',',$val['tag']);
	                    }
                        $user[$k]['nametype']=$val[nametype];
                        $user[$k]['moblie_status']=$val[moblie_status];
                        //名称显示处理
						if($config['user_name']==1 || !$config['user_name']){
    						if($val['nametype']==3){
    						    if($val['sex']==1){
    						        $user[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."先生";
    						    }else{
    						        $user[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."女士";
    						    }
    						}elseif($val['nametype']==2){
    						    $user[$k]['username_n'] = "NO.".$v['id'];
    						}else{
    							$user[$k]['username_n'] = $val['name'];
    						}
						}elseif($config['user_name']==3){
							if($val['sex']==1){
								$user[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."先生";
							}else{
								$user[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."女士";
							}
						}elseif($config['user_name']==2){
							$user[$k]['username_n'] = "NO.".$v['id'];
						}elseif($config['user_name']==4){
							$user[$k]['username_n'] = $val['name'];
						}
                    }
                }
			    foreach($rshow as $val){
					if($v['id']==$val['eid']){
						$user[$k]['show_n'] = 1;
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
					$user[$k]['time'] = "一周内";
				}elseif($time>$beginYesterday && $time<$beginToday){
					$user[$k]['time'] = "昨天";
				}elseif($time>$beginToday){
					$user[$k]['time'] = date("H:i",$v['lastupdate']);
					$user[$k]['redtime'] =1;
				}else{
					$user[$k]['time'] = date("Y-m-d",$v['lastupdate']);
				} 
                
                // 前天
				$beforeYesterday=mktime(0,0,0,date('m'),date('d')-2,date('Y'));

				if($v['ctime']>$beforeYesterday){
					$user[$k]['newtime'] =1;
				}
				$user[$k]['user_jobstatus_n']=$userclass_name[$v['jobstatus']];
				if($v['minsalary']&&$v['maxsalary']){
					$user[$k]["salary_n"] = "￥".$v['minsalary']."-".$v['maxsalary'];    
                }else if($v['minsalary']){
                    $user[$k]["salary_n"] = "￥".$v['minsalary']."以上";  
                }else{
    				$user[$k]["salary_n"] = "面议";
    			}
				$user[$k]['report_n']=$userclass_name[$v['report']];
				$user[$k]['type_n']=$userclass_name[$v['type']];
				$user[$k]['lastupdate']=date("Y-m-d",$v['lastupdate']);
					
				$user[$k]['user_url']=Url("resume",array("c"=>"show","id"=>$v['id']),"1");
				$user[$k]["hy_info"]=$industry_name[$v['hy']];
				if($paramer['top']){
					$user[$k]['m_name']=$m_name[$v['uid']];
					$user[$k]['user_url']=Url("ask",array("c"=>"friend","a"=>"myquestion","uid"=>$v['uid']));
				}
				$user[$k]['work_content']=$workexpList[$v['id']]['work_content'];
				$user[$k]['edu_content']=$workexpList[$v['id']]['edu_content'];

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
				//$user[$k]['job_post']=@implode(",",$jobname);
				$user[$k]['expectjob']=$jobname;
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
                //$user[$k]['citylist']=@implode("/",$cityname);
				$user[$k]['expectcity']=$cityname;
				//截取标题
				if($paramer['post_len']){
					$postname[$k]=@implode(",",$jobname);
					$user[$k]['job_post_n']=mb_substr($postname[$k],0,$paramer[post_len],"utf-8");
				}
                if($paramer['city_len']){
					$scityname[$k]=@implode("/",$cityname);
					$user[$k]['city_name_n']=mb_substr($scityname[$k],0,$paramer[city_len],"utf-8");
				}
			}
			foreach($user as $k=>$v){
               if($paramer['keyword']){
					$user[$k]['username_n']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$v['username_n']);
					$user[$k]['job_post']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$user[$k]['job_post']);
					$user[$k]['job_post_n']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$user[$k]['job_post_n']);
					$user[$k]['city_name_n']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$user[$k]['city_name_n']);
				}
            }

			
			if($paramer['keyword']!=""&&!empty($user)){
				addkeywords('5',$paramer['keyword']);
			}
		}$user = $user; if (!is_array($user) && !is_object($user)) { settype($user, 'array');}
foreach ($user as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['user']->key;
?>
					<tr>
						<td>
						<div class="com_resume_showcont">
						<div class="com_resume_showpic"><a href="<?php echo smarty_function_url(array('m'=>'resume','c'=>'show','id'=>$_smarty_tpl->tpl_vars['user']->value['id']),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['user']->value['photo'];?>
" width="60" height="60"></a></div>
						<div class="com_resume_userinfo"><span class="com_resume_username"><a href="<?php echo smarty_function_url(array('m'=>'resume','c'=>'show','id'=>$_smarty_tpl->tpl_vars['user']->value['id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['username_n'];?>
</a><?php if ($_smarty_tpl->tpl_vars['user']->value['moblie_status']=='1') {?><i class="com_user_sjrz" title="手机已认证"></i><?php }
if ($_smarty_tpl->tpl_vars['user']->value['show_n']=='1') {?><i class="com_user_zp" title="有作品"></i><?php }?></span> <?php echo $_smarty_tpl->tpl_vars['user']->value['sex'];?>
<span class="com_resume_userline">|</span><?php if ($_smarty_tpl->tpl_vars['user']->value['age']==0) {?>保密<?php } else {
echo $_smarty_tpl->tpl_vars['user']->value['age'];?>
岁<?php }?><span class="com_resume_userline">|</span><?php echo $_smarty_tpl->tpl_vars['user']->value['exp_n'];?>
经验<span class="com_resume_userline">|</span><?php echo $_smarty_tpl->tpl_vars['user']->value['edu_n'];?>
学历</div>
						<div class="com_resume_userinfo_city"><span class="com_resume_userinfo_add">期望地点： <?php if ($_smarty_tpl->tpl_vars['user']->value['expectcity']) {
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['user']->value['expectcity']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?> <?php if ($_smarty_tpl->tpl_vars['key']->value<5) {
echo $_smarty_tpl->tpl_vars['v']->value;
}?> <?php } ?> <?php }?></span>期望薪资：<?php echo $_smarty_tpl->tpl_vars['user']->value['salary_n'];?>
</div>
						<div class="com_resume_userinfo_yx">求职意向：<?php if ($_smarty_tpl->tpl_vars['user']->value['expectjob']) {?> <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['user']->value['expectjob']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?> <?php if ($_smarty_tpl->tpl_vars['key']->value<5) {?> <span class="com_resume_userinfo_yx_n"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</span><?php }?> <?php } ?> <?php }?></div>
						<div class="com_resume_userinfo_tag"><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['user']->value['tag']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
if ($_smarty_tpl->tpl_vars['key']->value<5) {?><span class="com_resume_userinfo_bq"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</span><?php }
} ?></div>
						</div>
						</td>
						<td align="center">
						<div class="com_resume_userinfo_wantjob">Ta想要找<span class="com_resume_userinfo_want"><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</span>的工作 </div>
						</td>
						<td>
						<div class="com_resume_userinfo_xz">
						<div class="com_resume_userinfo_time"><?php echo $_smarty_tpl->tpl_vars['user']->value['time'];?>
更新</div>
						<a href="<?php echo smarty_function_url(array('m'=>'resume','c'=>'show','id'=>$_smarty_tpl->tpl_vars['user']->value['id']),$_smarty_tpl);?>
" class="com_resume_userinfo_xz_bth">下载简历</a></div>
						</td>
					</tr>
					<?php } ?>
					
					</table>
            
				</div>
				<!--  图文展示 end-->
				<?php } else { ?>
             
				<!--  列表展示-->
                <div class="com_resume_show">
					<table class="com_resume_show_listtable">
					<tr style="background:#f8f8f8">
					  <td>期望职位</td>
					  <td>姓名</td>
					  <td>性别</td>
					  <td>年龄</td>
					  <td>学历</td>
					  <td>工作经验</td>
					  <td>期望薪资</td>
					  <td>求职地区</td>
					  <td>更新时间</td>
					  <td>操作</td>
					</tr>
					<?php  $_smarty_tpl->tpl_vars['user2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user2']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
$user2=array();global $db,$db_config,$config;
		if(is_array($_GET)){
			foreach($_GET as $key=>$value){
				if($value=='0'){
					unset($_GET[$key]);
				}
			}
		}
		$paramer=array("limit"=>"20","minsalary"=>"'auto.minsalary'","maxsalary"=>"'auto.maxsalary'","noid"=>"1","idcard"=>"'auto.idcard'","edu"=>"'auto.edu'","order"=>"'auto.order'","work"=>"'auto.work'","exp"=>"'auto.exp'","sex"=>"'auto.sex'","keyword"=>"'auto.keyword'","hy"=>"'auto.hy'","jobin"=>"'auto.jobin'","cityin"=>"'auto.cityin'","adtime"=>"'auto.adtime'","pic"=>"'auto.pic'","typeids"=>"'auto.typeids'","type"=>"'auto.type'","job1"=>"'auto.job1'","job1_son"=>"'auto.job1_son'","job_post"=>"'auto.job_post'","uptime"=>"'auto.uptime'","post_len"=>"14","city_len"=>"14","ispage"=>"1","item"=>"'user2'","key"=>"'key'","name"=>"'userlist1'","islt"=>"3","nocache"=>"")
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
				$user2 = array();
			}else{
				
				$select="a.`id`,a.`uid`,a.`name`,a.`hy`,a.`job_classid`,a.`city_classid`,a.`jobstatus`,a.`type`,a.`report`,a.`lastupdate`,a.`rec`,a.`top`,a.`topdate`,a.`rec_resume`,a.`ctime`,a.`uname`,a.`idcard_status`,a.`minsalary`,a.`maxsalary`";
				if($pagewhere!=""){

					$sql = "select ".$select." from `".$db_config[def]."resume_expect` a ".$pagewhere." where ".$joinwhere." and ".$where.$order.$sort.$limit;

					$user2=$db->DB_query_all($sql,"all");

				}else{
					$sql = "select ".$select." from `".$db_config[def]."resume_expect` a where ".$where.$order.$sort.$limit;
					$user2=$db->DB_query_all($sql,"all");
				}
			}
            
        
        include(CONFIG_PATH."db.data.php");		

		if(!empty($user2) && is_array($user2)){
			
			//如果存在top，则说明请求来自排行榜页面
			if($paramer['top']){
				$uids=$m_name=array();
				foreach($user2 as $k=>$v){
					$uids[]=$v[uid];
				}

				$member=$db->select_all($db_config[def]."member","`uid` in(".@implode(',',$uids).")","uid,username");
				foreach($member as $val){
					$m_name[$val[uid]]=$val['username'];
				}
			}
			$uid = $eid = array();
			foreach($user2 as $key=>$value){
				
				$uid[] = $value['uid'];
				$eid[] = $value['id'];
			}
			$eids = @implode(',',$eid);
			$uids = @implode(',',$uid);
            $resume=$db->select_all("resume","`uid` in(".$uids.")","uid,name,nametype,tag,sex,moblie_status,edu,exp,photo,phototype,photo_status,birthday");
			foreach($resume as $v){
				$ruids[] = $v['uid'];
			}
			foreach($user2 as $k=>$v){
				if(!in_array($v['uid'],$ruids)){
					unset($user2[$k]);
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
			foreach($user2 as $k=>$v){
				if($paramer[topdate]){
					$noids[] = $v[id];
				}
				//筛除重复
				if($paramer[noid]=='1' && !empty($noids) && in_array($v['id'],$noids)){
					unset($user2[$k]);
					continue;
				}
			    foreach($resume as $val){
			        if($v['uid']==$val['uid']){
                        $user2[$k]['where']=$citywhere;
			    		$user2[$k]['edu_n']=$userclass_name[$val['edu']];
				        $user2[$k]['exp_n']=$userclass_name[$val['exp']];
			            if($val['birthday']){
							$year = date("Y",strtotime($val['birthday']));
							$user2[$k]['age'] =date("Y")-$year;
						}
						if($val['sex']==152){
							$val['sex']='1';
						}elseif ($val['sex']==153){
							$val['sex']='2';
						}
						$user2[$k]['sex'] =$arr_data[sex][$val['sex']];
		                $user2[$k]['phototype']=$val[phototype];
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
						$user2[$k]['photo']=checkpic($photo,$icon);
						if($val['tag']){
                            $user2[$k]['tag']=explode(',',$val['tag']);
	                    }
                        $user2[$k]['nametype']=$val[nametype];
                        $user2[$k]['moblie_status']=$val[moblie_status];
                        //名称显示处理
						if($config['user_name']==1 || !$config['user_name']){
    						if($val['nametype']==3){
    						    if($val['sex']==1){
    						        $user2[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."先生";
    						    }else{
    						        $user2[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."女士";
    						    }
    						}elseif($val['nametype']==2){
    						    $user2[$k]['username_n'] = "NO.".$v['id'];
    						}else{
    							$user2[$k]['username_n'] = $val['name'];
    						}
						}elseif($config['user_name']==3){
							if($val['sex']==1){
								$user2[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."先生";
							}else{
								$user2[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."女士";
							}
						}elseif($config['user_name']==2){
							$user2[$k]['username_n'] = "NO.".$v['id'];
						}elseif($config['user_name']==4){
							$user2[$k]['username_n'] = $val['name'];
						}
                    }
                }
			    foreach($rshow as $val){
					if($v['id']==$val['eid']){
						$user2[$k]['show_n'] = 1;
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
					$user2[$k]['time'] = "一周内";
				}elseif($time>$beginYesterday && $time<$beginToday){
					$user2[$k]['time'] = "昨天";
				}elseif($time>$beginToday){
					$user2[$k]['time'] = date("H:i",$v['lastupdate']);
					$user2[$k]['redtime'] =1;
				}else{
					$user2[$k]['time'] = date("Y-m-d",$v['lastupdate']);
				} 
                
                // 前天
				$beforeYesterday=mktime(0,0,0,date('m'),date('d')-2,date('Y'));

				if($v['ctime']>$beforeYesterday){
					$user2[$k]['newtime'] =1;
				}
				$user2[$k]['user_jobstatus_n']=$userclass_name[$v['jobstatus']];
				if($v['minsalary']&&$v['maxsalary']){
					$user2[$k]["salary_n"] = "￥".$v['minsalary']."-".$v['maxsalary'];    
                }else if($v['minsalary']){
                    $user2[$k]["salary_n"] = "￥".$v['minsalary']."以上";  
                }else{
    				$user2[$k]["salary_n"] = "面议";
    			}
				$user2[$k]['report_n']=$userclass_name[$v['report']];
				$user2[$k]['type_n']=$userclass_name[$v['type']];
				$user2[$k]['lastupdate']=date("Y-m-d",$v['lastupdate']);
					
				$user2[$k]['user_url']=Url("resume",array("c"=>"show","id"=>$v['id']),"1");
				$user2[$k]["hy_info"]=$industry_name[$v['hy']];
				if($paramer['top']){
					$user2[$k]['m_name']=$m_name[$v['uid']];
					$user2[$k]['user_url']=Url("ask",array("c"=>"friend","a"=>"myquestion","uid"=>$v['uid']));
				}
				$user2[$k]['work_content']=$workexpList[$v['id']]['work_content'];
				$user2[$k]['edu_content']=$workexpList[$v['id']]['edu_content'];

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
				//$user2[$k]['job_post']=@implode(",",$jobname);
				$user2[$k]['expectjob']=$jobname;
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
                //$user2[$k]['citylist']=@implode("/",$cityname);
				$user2[$k]['expectcity']=$cityname;
				//截取标题
				if($paramer['post_len']){
					$postname[$k]=@implode(",",$jobname);
					$user2[$k]['job_post_n']=mb_substr($postname[$k],0,$paramer[post_len],"utf-8");
				}
                if($paramer['city_len']){
					$scityname[$k]=@implode("/",$cityname);
					$user2[$k]['city_name_n']=mb_substr($scityname[$k],0,$paramer[city_len],"utf-8");
				}
			}
			foreach($user2 as $k=>$v){
               if($paramer['keyword']){
					$user2[$k]['username_n']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$v['username_n']);
					$user2[$k]['job_post']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$user2[$k]['job_post']);
					$user2[$k]['job_post_n']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$user2[$k]['job_post_n']);
					$user2[$k]['city_name_n']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$user2[$k]['city_name_n']);
				}
            }

			
			if($paramer['keyword']!=""&&!empty($user2)){
				addkeywords('5',$paramer['keyword']);
			}
		}$user2 = $user2; if (!is_array($user2) && !is_object($user2)) { settype($user2, 'array');}
foreach ($user2 as $_smarty_tpl->tpl_vars['user2']->key => $_smarty_tpl->tpl_vars['user2']->value) {
$_smarty_tpl->tpl_vars['user2']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['user2']->key;
?>
					<tr>
					  <td><a href="<?php echo smarty_function_url(array('m'=>'resume','c'=>'show','id'=>$_smarty_tpl->tpl_vars['user2']->value['id']),$_smarty_tpl);?>
" class="com_resume_showjobname"><?php echo $_smarty_tpl->tpl_vars['user2']->value['name'];
if ($_smarty_tpl->tpl_vars['user2']->value['moblie_status']=='1') {?><i class="com_user_sjrz" title="手机已认证"></i><?php }
if ($_smarty_tpl->tpl_vars['user2']->value['show_n']=='1') {?><i class="com_user_zp" title="有作品"></i><?php }?></a></td>
					  <td><a href="<?php echo smarty_function_url(array('m'=>'resume','c'=>'show','id'=>$_smarty_tpl->tpl_vars['user2']->value['id']),$_smarty_tpl);?>
" class=""><?php echo $_smarty_tpl->tpl_vars['user2']->value['username_n'];?>
</a></td>
					  <td><?php echo $_smarty_tpl->tpl_vars['user2']->value['sex'];?>
</td>
					  <td><?php if ($_smarty_tpl->tpl_vars['user2']->value['age']==0) {?>保密<?php } else {
echo $_smarty_tpl->tpl_vars['user2']->value['age'];?>
岁<?php }?></td>
					  <td><?php echo $_smarty_tpl->tpl_vars['user2']->value['edu_n'];?>
</td>
					  <td><?php echo $_smarty_tpl->tpl_vars['user2']->value['exp_n'];?>
</td>
					  <td><?php echo $_smarty_tpl->tpl_vars['user2']->value['salary_n'];?>
</td>
					  <td><?php if ($_smarty_tpl->tpl_vars['user2']->value['expectcity']) {
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['user2']->value['expectcity']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?> <?php if ($_smarty_tpl->tpl_vars['key']->value<5) {
echo $_smarty_tpl->tpl_vars['v']->value;
}?> <?php } ?> <?php }?></td>
					  <td><?php echo $_smarty_tpl->tpl_vars['user2']->value['time'];?>
</td>
					  <td><a href="<?php echo smarty_function_url(array('m'=>'resume','c'=>'show','id'=>$_smarty_tpl->tpl_vars['user2']->value['id']),$_smarty_tpl);?>
" class="com_resume_showuserxz">下载</a></td>
					</tr>
					<?php } ?>
					</table>
                </div>
				<!--  列表展示 -->
				<?php }?>
				<!--简历列表 end-->  
				
				
				<?php if ($_smarty_tpl->tpl_vars['total']->value==0) {?>

				<tr>
					<td colspan="7" class="table_end">
						<div class="msg_no">
							<p>亲爱的用户，目前没有你想要的人才简历。</p>
							<a href="index.php?c=resume" class="com_msg_no_bth com_submit">减少搜索条件试试</a>
						</div>
					</td>
				</tr>
				
				<?php }?>

				<div style="width:100%; float:left;padding:15px 0">
					<div class="diggg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
                </div>
				<div class="clear"></div>
            </div>
            </div>
		</div>
        	
	</div>
</div>
</div>
<?php echo '<script'; ?>
>
	
	$(document).ready(function() {
		$("#form").submit(function(e) {
			var min = $("#min").val();
			var max = $("#max").val();
			if(min && max && parseInt(max) < parseInt(min)) {
				$("#min").val(max);
				$("#max").val(min);
			}
		});
		 
	});
	
	function openSalaryOption(){
		$(".salary_option").show();
	}
	
	function closeSalaryOption(){
		$(".salary_option").hide();
	}
	
	function setSalary(min, max) {
		$("#min").val(min);
		$("#max").val(max);
	}
	 
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
	if(!('placeholder' in document.createElement('input'))) {

		$('input[placeholder],textarea[placeholder]').each(function() {
			var that = $(this),
				text = that.attr('placeholder');
			if(that.val() === "") {
				that.val(text).addClass('placeholder');
			}
			that.focus(function() {
				if(that.val() === text) {
					that.val("").removeClass('placeholder');
				}
			})
			.blur(function() {
				if(that.val() === "") {
					that.val(text).addClass('placeholder');
				}
			})
			.closest('form').submit(function() {
				if(that.val() === text) {
					that.val('');
				}
			});
		});
	}
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
	layui.use(['form'], function() {
		var form = layui.form,
			formSelects = layui.formSelects,
			$ = layui.$;
		
		form.on('select(resume_submit)', function(data){
			$('#form').submit();
 		})
		
		form.on('checkbox(resume_submit)', function (data) {

 			$('#form').submit();
		});
		formSelects.btns('jobclass_search', []);
	    formSelects.btns('cityclass_search', []);

	    formSelects.on('jobclass_search', function(id, vals, val, isAdd, isDisabled){
			var jobvalue = [];
            vals.forEach(function(item,index){
            	jobvalue.push(item.value);
            })
            $('#job_post').val(jobvalue.join(','));
            $('#form').submit();
        }, true);
	    formSelects.on('cityclass_search', function(id, vals, val, isAdd, isDisabled){
	      var cityvalue = [];
	        vals.forEach(function(item,index){
	          cityvalue.push(item.value);
	        })
	        $('#cityid').val(cityvalue.join(','));
	        $('#form').submit();
	    }, true);
	    citySearchReset();
	    jobSearchReset();

	});
	function jobSearchReset(){

		var formSelects = layui.formSelects, 
			jobclassArr= $("#job_post").val()!='' ? $("#job_post").val().split(",") : [],
	        jarr = [];

	    for(var i=0;i<jobclassArr.length;i++){
	    	jarr.push({"name":jn[jobclassArr[i]],"value":jobclassArr[i],"selected":'selected'});
	    }
	    formSelects.data('jobclass_search', 'local', {
	        arr: jarr
	    });
	}
  function citySearchReset(){

    var formSelects = layui.formSelects, 
        cityclassArr= $("#cityid").val()!='' ? $("#cityid").val().split(",") : [],
        carr = [];

	for(var i=0;i<cityclassArr.length;i++){
		carr.push({"name":cn[cityclassArr[i]],"value":cityclassArr[i],"selected":'selected'});
	}
	formSelects.data('cityclass_search', 'local', {
	  arr: carr
	});
  }
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/public_search/index_search.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/yqms.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
