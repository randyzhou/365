<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-07 03:14:40
         compiled from "D:\rcw\uploads\app\template\wap\resume.htm" */ ?>
<?php /*%%SmartyHeaderCode:5076730185fa5a0a0dd91a1-24710788%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e28415da3418a266c87f3d6fca6dff4a37dc748' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\wap\\resume.htm',
      1 => 1576479741,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5076730185fa5a0a0dd91a1-24710788',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'keywords' => 0,
    'description' => 0,
    'config' => 0,
    'backurl' => 0,
    'city_name' => 0,
    'job_name' => 0,
    'userclass_name' => 0,
    'searchurl' => 0,
    'uid' => 0,
    'usertype' => 0,
    'mouser' => 0,
    'eid' => 0,
    'user' => 0,
    'zduser' => 0,
    'lookResumeIds' => 0,
    'total' => 0,
    'pagenav' => 0,
    'userrec' => 0,
    'wap_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fa5a0a0e6c5f9_75662431',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fa5a0a0e6c5f9_75662431')) {function content_5fa5a0a0e6c5f9_75662431($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
?><!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<meta http-equiv="Cache-Control" content="no-cache" />
		<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
		<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
,wap" />
		<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width" initial-scale="1" />
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1, maximum-scale=1, user-scalable=no" />
		<meta name="format-detection" content="telephone=no,email=no" />
		<meta name="viewport" content="initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0, user-scalable=no, width=device-width" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/job.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/style.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/css.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
		<?php echo '<script'; ?>
>
			weburl = "<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
";
		<?php echo '</script'; ?>
>
	</head>

	<body>
		<div id="listhtml">
			<div class="body_wap">				
                <div class="search_header">
					<div class="search_header_fixed">
						<div class="search_headerbox">
							<a class="hd-lbtn" href="<?php if ($_smarty_tpl->tpl_vars['backurl']->value) {
echo $_smarty_tpl->tpl_vars['backurl']->value;
} else { ?>javascript:history.back();<?php }?>"><i class="header_return"></i></a>   
							<?php if ($_GET['keyword']) {?>
							<span class="search_header_text searchnew"><?php echo $_GET['keyword'];?>
</span>
							<?php } else { ?>
							<span class="search_header_text searchnew">搜索人才</span>
							<?php }?>
						</div>
					</div>
                </div>
			<section>
				<div class="searchOptions clearfix">
					<ul class="searchOptions_list">
						<?php if ($_smarty_tpl->tpl_vars['config']->value['three_cityid']&&$_smarty_tpl->tpl_vars['config']->value['sy_web_site']=='1') {?>
						<li class="Substation popup" data-pop="Substation">
							<a href="javascript:void(0);" class="searchOptions_list_a">
								<span class="job_ov"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['config']->value['three_cityid']];?>
</span>
								<i class="searchOptions_icon"></i>
							</a>
						</li>
						<?php } elseif ($_smarty_tpl->tpl_vars['config']->value['cityid']&&$_smarty_tpl->tpl_vars['config']->value['sy_web_site']=='1') {?>
						<li class="Substation popup" data-pop="Substation">
							<a href="javascript:void(0);" class="searchOptions_list_a">
								<span class="job_ov"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['config']->value['cityid']];?>
</span>
								<i class="searchOptions_icon"></i>
							</a>
						</li>
						<?php } else { ?>
						<li class="grade popup" data-pop="grade">
							<a href="javascript:void(0);" class="searchOptions_list_a">
								<span class="job_ov">
								<?php if ($_smarty_tpl->tpl_vars['city_name']->value[$_GET['cityid']]||$_smarty_tpl->tpl_vars['city_name']->value[$_GET['provinceid']]) {?>
									<?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_GET['cityid']];
echo $_smarty_tpl->tpl_vars['city_name']->value[$_GET['provinceid']];?>

								<?php } elseif ($_smarty_tpl->tpl_vars['city_name']->value[$_GET['three_cityid']]) {?>
									<?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_GET['three_cityid']];?>

								<?php } else { ?>
									区域
								<?php }?>
								</span>
								<i class="searchOptions_icon"></i>
							</a>
						</li>
						<?php }?>
						<li class="Category popup" data-pop="Category">
							<a href="javascript:void(0);" class="searchOptions_list_a"><span class="job_ov">
							<?php if ($_GET['job1']) {
echo $_smarty_tpl->tpl_vars['job_name']->value[$_GET['job1']];
} elseif ($_GET['job1_son']) {
echo $_smarty_tpl->tpl_vars['job_name']->value[$_GET['job1_son']];
} elseif ($_GET['job_post']) {
echo $_smarty_tpl->tpl_vars['job_name']->value[$_GET['job_post']];
} else { ?>意向<?php }?></span><i class="searchOptions_icon"></i></a>
						</li>
						<li class="Sortexp popup" data-pop="Sortexp">
							<a href="javascript:void(0);" class="searchOptions_list_a"><span class="job_ov"><?php if ($_smarty_tpl->tpl_vars['userclass_name']->value[$_GET['exp']]) {
echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_GET['exp']];
} else { ?>经验<?php }?></span><i class="searchOptions_icon"></i></a>
						</li>
						<li class="Gengduos popup" data-pop="Gengduos" style="border:none">
							<a href="javascript:void(0);" class="searchOptions_list_a">更多<i class="searchOptions_icon"></i></a>
						</li>
						<input type="hidden" id="searchurl" value="<?php echo $_smarty_tpl->tpl_vars['searchurl']->value;?>
" />
						<input type="hidden" id="waptype" value="1" />
					</ul>
				</div>
			</section>

			<div class="clear"></div>
			
			<?php if ($_smarty_tpl->tpl_vars['config']->value['com_search']==1&&(!$_smarty_tpl->tpl_vars['uid']->value||$_smarty_tpl->tpl_vars['usertype']->value==1)) {?>
				<section id="muirlist">
					<div class=" clear">
						<div class="">
							<?php  $_smarty_tpl->tpl_vars['mouser'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mouser']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
$mouser=array();global $db,$db_config,$config;
		if(is_array($_GET)){
			foreach($_GET as $key=>$value){
				if($value=='0'){
					unset($_GET[$key]);
				}
			}
		}
		$paramer=array("limit"=>"3","post_len"=>"14","item"=>"'mouser'","workexp"=>"1","city_len"=>"14","key"=>"'key'","name"=>"'userlist3'","nocache"=>"")
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
				$mouser = array();
			}else{
				
				$select="a.`id`,a.`uid`,a.`name`,a.`hy`,a.`job_classid`,a.`city_classid`,a.`jobstatus`,a.`type`,a.`report`,a.`lastupdate`,a.`rec`,a.`top`,a.`topdate`,a.`rec_resume`,a.`ctime`,a.`uname`,a.`idcard_status`,a.`minsalary`,a.`maxsalary`";
				if($pagewhere!=""){

					$sql = "select ".$select." from `".$db_config[def]."resume_expect` a ".$pagewhere." where ".$joinwhere." and ".$where.$order.$sort.$limit;

					$mouser=$db->DB_query_all($sql,"all");

				}else{
					$sql = "select ".$select." from `".$db_config[def]."resume_expect` a where ".$where.$order.$sort.$limit;
					$mouser=$db->DB_query_all($sql,"all");
				}
			}
            
        
        include(CONFIG_PATH."db.data.php");		

		if(!empty($mouser) && is_array($mouser)){
			
			//如果存在top，则说明请求来自排行榜页面
			if($paramer['top']){
				$uids=$m_name=array();
				foreach($mouser as $k=>$v){
					$uids[]=$v[uid];
				}

				$member=$db->select_all($db_config[def]."member","`uid` in(".@implode(',',$uids).")","uid,username");
				foreach($member as $val){
					$m_name[$val[uid]]=$val['username'];
				}
			}
			$uid = $eid = array();
			foreach($mouser as $key=>$value){
				
				$uid[] = $value['uid'];
				$eid[] = $value['id'];
			}
			$eids = @implode(',',$eid);
			$uids = @implode(',',$uid);
            $resume=$db->select_all("resume","`uid` in(".$uids.")","uid,name,nametype,tag,sex,moblie_status,edu,exp,photo,phototype,photo_status,birthday");
			foreach($resume as $v){
				$ruids[] = $v['uid'];
			}
			foreach($mouser as $k=>$v){
				if(!in_array($v['uid'],$ruids)){
					unset($mouser[$k]);
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
			foreach($mouser as $k=>$v){
				if($paramer[topdate]){
					$noids[] = $v[id];
				}
				//筛除重复
				if($paramer[noid]=='1' && !empty($noids) && in_array($v['id'],$noids)){
					unset($mouser[$k]);
					continue;
				}
			    foreach($resume as $val){
			        if($v['uid']==$val['uid']){
                        $mouser[$k]['where']=$citywhere;
			    		$mouser[$k]['edu_n']=$userclass_name[$val['edu']];
				        $mouser[$k]['exp_n']=$userclass_name[$val['exp']];
			            if($val['birthday']){
							$year = date("Y",strtotime($val['birthday']));
							$mouser[$k]['age'] =date("Y")-$year;
						}
						if($val['sex']==152){
							$val['sex']='1';
						}elseif ($val['sex']==153){
							$val['sex']='2';
						}
						$mouser[$k]['sex'] =$arr_data[sex][$val['sex']];
		                $mouser[$k]['phototype']=$val[phototype];
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
						$mouser[$k]['photo']=checkpic($photo,$icon);
						if($val['tag']){
                            $mouser[$k]['tag']=explode(',',$val['tag']);
	                    }
                        $mouser[$k]['nametype']=$val[nametype];
                        $mouser[$k]['moblie_status']=$val[moblie_status];
                        //名称显示处理
						if($config['user_name']==1 || !$config['user_name']){
    						if($val['nametype']==3){
    						    if($val['sex']==1){
    						        $mouser[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."先生";
    						    }else{
    						        $mouser[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."女士";
    						    }
    						}elseif($val['nametype']==2){
    						    $mouser[$k]['username_n'] = "NO.".$v['id'];
    						}else{
    							$mouser[$k]['username_n'] = $val['name'];
    						}
						}elseif($config['user_name']==3){
							if($val['sex']==1){
								$mouser[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."先生";
							}else{
								$mouser[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."女士";
							}
						}elseif($config['user_name']==2){
							$mouser[$k]['username_n'] = "NO.".$v['id'];
						}elseif($config['user_name']==4){
							$mouser[$k]['username_n'] = $val['name'];
						}
                    }
                }
			    foreach($rshow as $val){
					if($v['id']==$val['eid']){
						$mouser[$k]['show_n'] = 1;
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
					$mouser[$k]['time'] = "一周内";
				}elseif($time>$beginYesterday && $time<$beginToday){
					$mouser[$k]['time'] = "昨天";
				}elseif($time>$beginToday){
					$mouser[$k]['time'] = date("H:i",$v['lastupdate']);
					$mouser[$k]['redtime'] =1;
				}else{
					$mouser[$k]['time'] = date("Y-m-d",$v['lastupdate']);
				} 
                
                // 前天
				$beforeYesterday=mktime(0,0,0,date('m'),date('d')-2,date('Y'));

				if($v['ctime']>$beforeYesterday){
					$mouser[$k]['newtime'] =1;
				}
				$mouser[$k]['user_jobstatus_n']=$userclass_name[$v['jobstatus']];
				if($v['minsalary']&&$v['maxsalary']){
					$mouser[$k]["salary_n"] = "￥".$v['minsalary']."-".$v['maxsalary'];    
                }else if($v['minsalary']){
                    $mouser[$k]["salary_n"] = "￥".$v['minsalary']."以上";  
                }else{
    				$mouser[$k]["salary_n"] = "面议";
    			}
				$mouser[$k]['report_n']=$userclass_name[$v['report']];
				$mouser[$k]['type_n']=$userclass_name[$v['type']];
				$mouser[$k]['lastupdate']=date("Y-m-d",$v['lastupdate']);
					
				$mouser[$k]['user_url']=Url("resume",array("c"=>"show","id"=>$v['id']),"1");
				$mouser[$k]["hy_info"]=$industry_name[$v['hy']];
				if($paramer['top']){
					$mouser[$k]['m_name']=$m_name[$v['uid']];
					$mouser[$k]['user_url']=Url("ask",array("c"=>"friend","a"=>"myquestion","uid"=>$v['uid']));
				}
				$mouser[$k]['work_content']=$workexpList[$v['id']]['work_content'];
				$mouser[$k]['edu_content']=$workexpList[$v['id']]['edu_content'];

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
				//$mouser[$k]['job_post']=@implode(",",$jobname);
				$mouser[$k]['expectjob']=$jobname;
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
                //$mouser[$k]['citylist']=@implode("/",$cityname);
				$mouser[$k]['expectcity']=$cityname;
				//截取标题
				if($paramer['post_len']){
					$postname[$k]=@implode(",",$jobname);
					$mouser[$k]['job_post_n']=mb_substr($postname[$k],0,$paramer[post_len],"utf-8");
				}
                if($paramer['city_len']){
					$scityname[$k]=@implode("/",$cityname);
					$mouser[$k]['city_name_n']=mb_substr($scityname[$k],0,$paramer[city_len],"utf-8");
				}
			}
			foreach($mouser as $k=>$v){
               if($paramer['keyword']){
					$mouser[$k]['username_n']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$v['username_n']);
					$mouser[$k]['job_post']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$mouser[$k]['job_post']);
					$mouser[$k]['job_post_n']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$mouser[$k]['job_post_n']);
					$mouser[$k]['city_name_n']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$mouser[$k]['city_name_n']);
				}
            }

			
			if($paramer['keyword']!=""&&!empty($mouser)){
				addkeywords('5',$paramer['keyword']);
			}
		}$mouser = $mouser; if (!is_array($mouser) && !is_object($mouser)) { settype($mouser, 'array');}
foreach ($mouser as $_smarty_tpl->tpl_vars['mouser']->key => $_smarty_tpl->tpl_vars['mouser']->value) {
$_smarty_tpl->tpl_vars['mouser']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['mouser']->key;
?>

							<div class="yun_newedition_resumelist">
								<?php if ($_smarty_tpl->tpl_vars['usertype']->value==1) {?>
									<a href="javascript:void(0)" <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_user_change']==1) {?>onclick="layermsg('请先申请企业用户');"<?php } else { ?>onclick="layermsg('只有企业用户才能查看');"<?php }?> class="login_resumetipbth_login">
										<div class="yun_newedition_resumepic"><?php if ($_smarty_tpl->tpl_vars['mouser']->value['photo']!='') {?>
											<img src="<?php echo $_smarty_tpl->tpl_vars['mouser']->value['photo'];?>
"> <?php } else { ?>
											<img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_icon'];?>
"> <?php }?>
											<span class="<?php if ($_smarty_tpl->tpl_vars['mouser']->value['sex']=='女') {?>user_tj_xg<?php } elseif ($_smarty_tpl->tpl_vars['mouser']->value['sex']=='男') {?>user_tj_xb<?php }?>"></span>
										</div>
										<div class="yun_newedition_resume_name"><?php if (in_array($_smarty_tpl->tpl_vars['mouser']->value['id'],$_smarty_tpl->tpl_vars['eid']->value)) {
echo $_smarty_tpl->tpl_vars['mouser']->value['uname'];
} else {
echo $_smarty_tpl->tpl_vars['mouser']->value['username_n'];
}?>
											<?php if ($_smarty_tpl->tpl_vars['mouser']->value['rec_resume']) {?><span class="yun_newedition_resume_info"> 推荐</span><?php }?>
										</div>
										<div class="yun_newedition_userinfo"><?php if ($_smarty_tpl->tpl_vars['mouser']->value['sex']) {
echo $_smarty_tpl->tpl_vars['mouser']->value['sex'];?>
<i class="yun_newedition_jobline"></i><?php }
if ($_smarty_tpl->tpl_vars['mouser']->value['age']==0) {?>保密<?php } else {
echo $_smarty_tpl->tpl_vars['mouser']->value['age'];?>
岁<?php }?><!--<?php echo $_smarty_tpl->tpl_vars['user']->value['city_name_n'];?>
--><i class="yun_newedition_jobline"></i><?php echo $_smarty_tpl->tpl_vars['mouser']->value['exp_n'];?>
经验<i class="yun_newedition_jobline"></i><?php echo $_smarty_tpl->tpl_vars['mouser']->value['edu_n'];?>
学历</div>
										<div class="yun_newedition_resume_wantjob">期望职位：<span class="yun_newedition_resume_wantjob_n"><?php echo $_smarty_tpl->tpl_vars['mouser']->value['name'];?>
</span></div>
										<span class="yun_newedition_resume_time">
											<?php if ($_smarty_tpl->tpl_vars['mouser']->value['redtime']==1||$_smarty_tpl->tpl_vars['mouser']->value['time']=='昨天') {?>
											<span><?php echo $_smarty_tpl->tpl_vars['mouser']->value['time'];?>
</span> 
											<?php } else { ?> 
											<?php echo $_smarty_tpl->tpl_vars['mouser']->value['time'];?>
 
											<?php }?>
										</span>
									</a>	
								<?php } else { ?> 
									<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'login'),$_smarty_tpl);?>
">
										<div class="yun_newedition_resumepic"><?php if ($_smarty_tpl->tpl_vars['mouser']->value['photo']!='') {?>
											<img src="<?php echo $_smarty_tpl->tpl_vars['mouser']->value['photo'];?>
"> <?php } else { ?>
											<img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_icon'];?>
"> <?php }?>
											<span class="<?php if ($_smarty_tpl->tpl_vars['mouser']->value['sex']=='女') {?>user_tj_xg<?php } elseif ($_smarty_tpl->tpl_vars['mouser']->value['sex']=='男') {?>user_tj_xb<?php }?>"></span>
										</div>
										<div class="yun_newedition_resume_name"><?php if (in_array($_smarty_tpl->tpl_vars['mouser']->value['id'],$_smarty_tpl->tpl_vars['eid']->value)) {
echo $_smarty_tpl->tpl_vars['mouser']->value['uname'];
} else {
echo $_smarty_tpl->tpl_vars['mouser']->value['username_n'];
}?>
											<?php if ($_smarty_tpl->tpl_vars['mouser']->value['rec_resume']) {?><span class="yun_newedition_resume_info"> 推荐</span><?php }?>
										</div>
										<div class="yun_newedition_userinfo"><?php if ($_smarty_tpl->tpl_vars['mouser']->value['sex']) {
echo $_smarty_tpl->tpl_vars['mouser']->value['sex'];?>
<i class="yun_newedition_jobline"></i><?php }
if ($_smarty_tpl->tpl_vars['mouser']->value['age']==0) {?>保密<?php } else {
echo $_smarty_tpl->tpl_vars['mouser']->value['age'];?>
岁<?php }?><!--<?php echo $_smarty_tpl->tpl_vars['user']->value['city_name_n'];?>
--><i class="yun_newedition_jobline"></i><?php echo $_smarty_tpl->tpl_vars['mouser']->value['exp_n'];?>
经验<i class="yun_newedition_jobline"></i><?php echo $_smarty_tpl->tpl_vars['mouser']->value['edu_n'];?>
学历</div>
										<div class="yun_newedition_resume_wantjob">期望职位：<span class="yun_newedition_resume_wantjob_n"><?php echo $_smarty_tpl->tpl_vars['mouser']->value['name'];?>
</span></div>
										<span class="yun_newedition_resume_time">
											<?php if ($_smarty_tpl->tpl_vars['mouser']->value['redtime']==1||$_smarty_tpl->tpl_vars['mouser']->value['time']=='昨天') {?>
											<span><?php echo $_smarty_tpl->tpl_vars['mouser']->value['time'];?>
</span> 
											<?php } else { ?> 
											<?php echo $_smarty_tpl->tpl_vars['mouser']->value['time'];?>
 
											<?php }?>
										</span>
									</a>
								<?php }?>
								
								<?php if ($_smarty_tpl->tpl_vars['mouser']->value['work_content']||$_smarty_tpl->tpl_vars['mouser']->value['edu_content']) {?>
									<div class="user_undergo_box">
									<?php if ($_smarty_tpl->tpl_vars['mouser']->value['edu_content']) {?>
										<div class="user_undergo"><?php echo $_smarty_tpl->tpl_vars['mouser']->value['edu_content'];?>
  </div>
									<?php }?>

									<?php if ($_smarty_tpl->tpl_vars['mouser']->value['work_content']) {?>
										<div class="user_undergo"><?php echo $_smarty_tpl->tpl_vars['mouser']->value['work_content'];?>
  </div>
									<?php }?>
									</div>
								<?php }?>
                            </div>
                            
						
							<?php } ?> 
                            <div class="login_resumetipbox">
							<div class="login_resumetip">成为企业会员，高效挑选人才！</div>
							<?php if (!$_smarty_tpl->tpl_vars['uid']->value) {?>
                            	<div class="login_resumetipmore">登录可以查看更多简历信息~</div>
                            <?php } else { ?>
                            	<div class="login_resumetipmore"></div>
                            <?php }?>
							<dl class="search_nologin_tip_wx">
							  <dt><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wx_qcode'];?>
"  width="130" height="130"></dt>
							  <dd>扫一扫，让招聘更轻松</dd>
							</dl>
                            <div class="login_resumetipbth">
								<?php if ($_smarty_tpl->tpl_vars['usertype']->value==1) {?>
									<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_user_change']==1) {?>
										<a href="javascript:void(0)" onclick="layermsg('请先申请企业用户');" class="login_resumetipbth_login">身份切换</a>
									<?php } else { ?>
										<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'loginout'),$_smarty_tpl);?>
" class="login_resumetipbth_login">登录企业</a>
									<?php }?>
								<?php } else { ?> 
									<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'login'),$_smarty_tpl);?>
" class="login_resumetipbth_login">登录</a>
									<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'register'),$_smarty_tpl);?>
">注册</a>
								<?php }?>
							</div>
                            <div class="login_resumetiptel">如有需要任何贴心的服务：<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>
</div>
							</div>
						</div>
					</div>
				</section>
			
			<?php } else { ?>
				<section id="muirlist">
					<div class=" clear">
					
						<div class="">
						
						<?php if ($_GET['page']<2) {?>
							<?php  $_smarty_tpl->tpl_vars['zduser'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['zduser']->_loop = false;
$zduser=array();global $db,$db_config,$config;
		if(is_array($_GET)){
			foreach($_GET as $key=>$value){
				if($value=='0'){
					unset($_GET[$key]);
				}
			}
		}
		$paramer=array("limit"=>"5","topdate"=>"1","edu"=>"'auto.edu'","exp"=>"'auto.exp'","sex"=>"'auto.sex'","uptime"=>"'auto.uptime'","keyword"=>"'auto.keyword'","hy"=>"'auto.hy'","minsalary"=>"'auto.minsalary'","maxsalary"=>"'auto.maxsalary'","report"=>"'auto.report'","three_cityid"=>"'auto.three_cityid'","provinceid"=>"'auto.provinceid'","cityid"=>"'auto.cityid'","job1"=>"'auto.job1'","job1_son"=>"'auto.job1_son'","job_post"=>"'auto.job_post'","type"=>"'auto.type'","tag"=>"'auto.tag'","order"=>"'auto.order'","post_len"=>"14","city_len"=>"14","ispage"=>"1","islt"=>"4","workexp"=>"1","item"=>"'zduser'","nocache"=>"")
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
				$zduser = array();
			}else{
				
				$select="a.`id`,a.`uid`,a.`name`,a.`hy`,a.`job_classid`,a.`city_classid`,a.`jobstatus`,a.`type`,a.`report`,a.`lastupdate`,a.`rec`,a.`top`,a.`topdate`,a.`rec_resume`,a.`ctime`,a.`uname`,a.`idcard_status`,a.`minsalary`,a.`maxsalary`";
				if($pagewhere!=""){

					$sql = "select ".$select." from `".$db_config[def]."resume_expect` a ".$pagewhere." where ".$joinwhere." and ".$where.$order.$sort.$limit;

					$zduser=$db->DB_query_all($sql,"all");

				}else{
					$sql = "select ".$select." from `".$db_config[def]."resume_expect` a where ".$where.$order.$sort.$limit;
					$zduser=$db->DB_query_all($sql,"all");
				}
			}
            
        
        include(CONFIG_PATH."db.data.php");		

		if(!empty($zduser) && is_array($zduser)){
			
			//如果存在top，则说明请求来自排行榜页面
			if($paramer['top']){
				$uids=$m_name=array();
				foreach($zduser as $k=>$v){
					$uids[]=$v[uid];
				}

				$member=$db->select_all($db_config[def]."member","`uid` in(".@implode(',',$uids).")","uid,username");
				foreach($member as $val){
					$m_name[$val[uid]]=$val['username'];
				}
			}
			$uid = $eid = array();
			foreach($zduser as $key=>$value){
				
				$uid[] = $value['uid'];
				$eid[] = $value['id'];
			}
			$eids = @implode(',',$eid);
			$uids = @implode(',',$uid);
            $resume=$db->select_all("resume","`uid` in(".$uids.")","uid,name,nametype,tag,sex,moblie_status,edu,exp,photo,phototype,photo_status,birthday");
			foreach($resume as $v){
				$ruids[] = $v['uid'];
			}
			foreach($zduser as $k=>$v){
				if(!in_array($v['uid'],$ruids)){
					unset($zduser[$k]);
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
			foreach($zduser as $k=>$v){
				if($paramer[topdate]){
					$noids[] = $v[id];
				}
				//筛除重复
				if($paramer[noid]=='1' && !empty($noids) && in_array($v['id'],$noids)){
					unset($zduser[$k]);
					continue;
				}
			    foreach($resume as $val){
			        if($v['uid']==$val['uid']){
                        $zduser[$k]['where']=$citywhere;
			    		$zduser[$k]['edu_n']=$userclass_name[$val['edu']];
				        $zduser[$k]['exp_n']=$userclass_name[$val['exp']];
			            if($val['birthday']){
							$year = date("Y",strtotime($val['birthday']));
							$zduser[$k]['age'] =date("Y")-$year;
						}
						if($val['sex']==152){
							$val['sex']='1';
						}elseif ($val['sex']==153){
							$val['sex']='2';
						}
						$zduser[$k]['sex'] =$arr_data[sex][$val['sex']];
		                $zduser[$k]['phototype']=$val[phototype];
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
						$zduser[$k]['photo']=checkpic($photo,$icon);
						if($val['tag']){
                            $zduser[$k]['tag']=explode(',',$val['tag']);
	                    }
                        $zduser[$k]['nametype']=$val[nametype];
                        $zduser[$k]['moblie_status']=$val[moblie_status];
                        //名称显示处理
						if($config['user_name']==1 || !$config['user_name']){
    						if($val['nametype']==3){
    						    if($val['sex']==1){
    						        $zduser[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."先生";
    						    }else{
    						        $zduser[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."女士";
    						    }
    						}elseif($val['nametype']==2){
    						    $zduser[$k]['username_n'] = "NO.".$v['id'];
    						}else{
    							$zduser[$k]['username_n'] = $val['name'];
    						}
						}elseif($config['user_name']==3){
							if($val['sex']==1){
								$zduser[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."先生";
							}else{
								$zduser[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."女士";
							}
						}elseif($config['user_name']==2){
							$zduser[$k]['username_n'] = "NO.".$v['id'];
						}elseif($config['user_name']==4){
							$zduser[$k]['username_n'] = $val['name'];
						}
                    }
                }
			    foreach($rshow as $val){
					if($v['id']==$val['eid']){
						$zduser[$k]['show_n'] = 1;
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
					$zduser[$k]['time'] = "一周内";
				}elseif($time>$beginYesterday && $time<$beginToday){
					$zduser[$k]['time'] = "昨天";
				}elseif($time>$beginToday){
					$zduser[$k]['time'] = date("H:i",$v['lastupdate']);
					$zduser[$k]['redtime'] =1;
				}else{
					$zduser[$k]['time'] = date("Y-m-d",$v['lastupdate']);
				} 
                
                // 前天
				$beforeYesterday=mktime(0,0,0,date('m'),date('d')-2,date('Y'));

				if($v['ctime']>$beforeYesterday){
					$zduser[$k]['newtime'] =1;
				}
				$zduser[$k]['user_jobstatus_n']=$userclass_name[$v['jobstatus']];
				if($v['minsalary']&&$v['maxsalary']){
					$zduser[$k]["salary_n"] = "￥".$v['minsalary']."-".$v['maxsalary'];    
                }else if($v['minsalary']){
                    $zduser[$k]["salary_n"] = "￥".$v['minsalary']."以上";  
                }else{
    				$zduser[$k]["salary_n"] = "面议";
    			}
				$zduser[$k]['report_n']=$userclass_name[$v['report']];
				$zduser[$k]['type_n']=$userclass_name[$v['type']];
				$zduser[$k]['lastupdate']=date("Y-m-d",$v['lastupdate']);
					
				$zduser[$k]['user_url']=Url("resume",array("c"=>"show","id"=>$v['id']),"1");
				$zduser[$k]["hy_info"]=$industry_name[$v['hy']];
				if($paramer['top']){
					$zduser[$k]['m_name']=$m_name[$v['uid']];
					$zduser[$k]['user_url']=Url("ask",array("c"=>"friend","a"=>"myquestion","uid"=>$v['uid']));
				}
				$zduser[$k]['work_content']=$workexpList[$v['id']]['work_content'];
				$zduser[$k]['edu_content']=$workexpList[$v['id']]['edu_content'];

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
				//$zduser[$k]['job_post']=@implode(",",$jobname);
				$zduser[$k]['expectjob']=$jobname;
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
                //$zduser[$k]['citylist']=@implode("/",$cityname);
				$zduser[$k]['expectcity']=$cityname;
				//截取标题
				if($paramer['post_len']){
					$postname[$k]=@implode(",",$jobname);
					$zduser[$k]['job_post_n']=mb_substr($postname[$k],0,$paramer[post_len],"utf-8");
				}
                if($paramer['city_len']){
					$scityname[$k]=@implode("/",$cityname);
					$zduser[$k]['city_name_n']=mb_substr($scityname[$k],0,$paramer[city_len],"utf-8");
				}
			}
			foreach($zduser as $k=>$v){
               if($paramer['keyword']){
					$zduser[$k]['username_n']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$v['username_n']);
					$zduser[$k]['job_post']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$zduser[$k]['job_post']);
					$zduser[$k]['job_post_n']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$zduser[$k]['job_post_n']);
					$zduser[$k]['city_name_n']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$zduser[$k]['city_name_n']);
				}
            }

			
			if($paramer['keyword']!=""&&!empty($zduser)){
				addkeywords('5',$paramer['keyword']);
			}
		}$zduser = $zduser; if (!is_array($zduser) && !is_object($zduser)) { settype($zduser, 'array');}
foreach ($zduser as $_smarty_tpl->tpl_vars['zduser']->key => $_smarty_tpl->tpl_vars['zduser']->value) {
$_smarty_tpl->tpl_vars['zduser']->_loop = true;
?>

					
        <div class="yun_newedition_resumelist">
                            <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'resume','a'=>'show','id'=>$_smarty_tpl->tpl_vars['zduser']->value['id']),$_smarty_tpl);?>
">
                            <div class="yun_newedition_resumepic"><?php if ($_smarty_tpl->tpl_vars['zduser']->value['photo']!='') {?>
												<img src="<?php echo $_smarty_tpl->tpl_vars['zduser']->value['photo'];?>
"> <?php } else { ?>
												<img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_icon'];?>
"> <?php }?>
												<span class="<?php if ($_smarty_tpl->tpl_vars['zduser']->value['sex']=='女') {?>user_tj_xg<?php } elseif ($_smarty_tpl->tpl_vars['zduser']->value['sex']=='男') {?>user_tj_xb<?php }?>"></span>
												</div>
                           <div class="yun_newedition_resume_name"><?php if (in_array($_smarty_tpl->tpl_vars['zduser']->value['id'],$_smarty_tpl->tpl_vars['eid']->value)) {
echo $_smarty_tpl->tpl_vars['zduser']->value['uname'];
} else {
echo $_smarty_tpl->tpl_vars['zduser']->value['username_n'];
}?>
											  <?php if ($_smarty_tpl->tpl_vars['zduser']->value['rec_resume']) {?><span class="yun_newedition_resume_info"> 推荐</span><?php }?></div>
											
                            <div class="yun_newedition_userinfo"><?php if ($_smarty_tpl->tpl_vars['zduser']->value['sex']) {
echo $_smarty_tpl->tpl_vars['zduser']->value['sex'];?>
<i class="yun_newedition_jobline"></i><?php }
if ($_smarty_tpl->tpl_vars['zduser']->value['age']==0) {?>保密<?php } else {
echo $_smarty_tpl->tpl_vars['zduser']->value['age'];?>
岁<?php }?><!--<?php echo $_smarty_tpl->tpl_vars['user']->value['city_name_n'];?>
--><i class="yun_newedition_jobline"></i><?php echo $_smarty_tpl->tpl_vars['zduser']->value['exp_n'];?>
经验<i class="yun_newedition_jobline"></i><?php echo $_smarty_tpl->tpl_vars['zduser']->value['edu_n'];?>
学历</div>
                            <div class="yun_newedition_resume_wantjob">期望职位：<span class="yun_newedition_resume_wantjob_n"><?php echo $_smarty_tpl->tpl_vars['zduser']->value['name'];?>
</span></div>
                        
                            <span class="yun_newedition_resume_zd">
											置顶
                                            
											</span>
                                          
                                            </a>

											<?php if ($_smarty_tpl->tpl_vars['zduser']->value['work_content']||$_smarty_tpl->tpl_vars['zduser']->value['edu_content']) {?>
												<div class="user_undergo_box">
												<?php if ($_smarty_tpl->tpl_vars['zduser']->value['edu_content']) {?>
													<div class="user_undergo"><?php echo $_smarty_tpl->tpl_vars['zduser']->value['edu_content'];?>
  </div>
												<?php }?>

												<?php if ($_smarty_tpl->tpl_vars['zduser']->value['work_content']) {?>
													<div class="user_undergo"><?php echo $_smarty_tpl->tpl_vars['zduser']->value['work_content'];?>
  </div>
												<?php }?>
												</div>
											<?php }?>
      <?php if (in_array($_smarty_tpl->tpl_vars['zduser']->value['id'],$_smarty_tpl->tpl_vars['lookResumeIds']->value)) {?><div class="yun_newedition_yll" style="padding-left:10px; padding-top:0px;">浏览过的简历</div><?php }?>

                            </div>
							<?php } ?> 
							<?php }?>
							<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
$user=array();global $db,$db_config,$config;
		if(is_array($_GET)){
			foreach($_GET as $key=>$value){
				if($value=='0'){
					unset($_GET[$key]);
				}
			}
		}
		$paramer=array("limit"=>"20","noid"=>"1","edu"=>"'auto.edu'","exp"=>"'auto.exp'","sex"=>"'auto.sex'","uptime"=>"'auto.uptime'","keyword"=>"'auto.keyword'","hy"=>"'auto.hy'","minsalary"=>"'auto.minsalary'","maxsalary"=>"'auto.maxsalary'","report"=>"'auto.report'","three_cityid"=>"'auto.three_cityid'","provinceid"=>"'auto.provinceid'","cityid"=>"'auto.cityid'","job1"=>"'auto.job1'","job1_son"=>"'auto.job1_son'","job_post"=>"'auto.job_post'","type"=>"'auto.type'","tag"=>"'auto.tag'","order"=>"'auto.order'","post_len"=>"14","city_len"=>"14","ispage"=>"1","islt"=>"4","workexp"=>"1","item"=>"'user'","nocache"=>"")
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
?>
                            <div class="yun_newedition_resumelist">
                            <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'resume','a'=>'show','id'=>$_smarty_tpl->tpl_vars['user']->value['id']),$_smarty_tpl);?>
">
                            <div class="yun_newedition_resumepic"><?php if ($_smarty_tpl->tpl_vars['user']->value['photo']!='') {?>
												<img src="<?php echo $_smarty_tpl->tpl_vars['user']->value['photo'];?>
"> <?php } else { ?>
												<img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_icon'];?>
"> <?php }?>
												<span class="<?php if ($_smarty_tpl->tpl_vars['user']->value['sex']=='女') {?>user_tj_xg<?php } elseif ($_smarty_tpl->tpl_vars['user']->value['sex']=='男') {?>user_tj_xb<?php }?>"></span>
												</div>
                           <div class="yun_newedition_resume_name"><?php if (in_array($_smarty_tpl->tpl_vars['user']->value['id'],$_smarty_tpl->tpl_vars['eid']->value)) {
echo $_smarty_tpl->tpl_vars['user']->value['uname'];
} else {
echo $_smarty_tpl->tpl_vars['user']->value['username_n'];
}?>
											  <?php if ($_smarty_tpl->tpl_vars['user']->value['rec_resume']) {?><span class="yun_newedition_resume_info"> 推荐</span><?php }?>
											
											  </div>
											  
                            <div class="yun_newedition_userinfo"><?php if ($_smarty_tpl->tpl_vars['user']->value['age']==0) {?>保密<?php } else {
echo $_smarty_tpl->tpl_vars['user']->value['age'];?>
岁<?php }?><!--<?php echo $_smarty_tpl->tpl_vars['user']->value['city_name_n'];?>
--><i class="yun_newedition_jobline"></i><?php echo $_smarty_tpl->tpl_vars['user']->value['exp_n'];?>
经验<i class="yun_newedition_jobline"></i><?php echo $_smarty_tpl->tpl_vars['user']->value['edu_n'];?>
学历</div>
                            <div class="yun_newedition_resume_wantjob">期望职位：<span class="yun_newedition_resume_wantjob_n"><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</span></div> 
                         
                            <span class="yun_newedition_resume_time">
											<?php if ($_smarty_tpl->tpl_vars['user']->value['redtime']==1||$_smarty_tpl->tpl_vars['user']->value['time']=='昨天') {?>
											<span><?php echo $_smarty_tpl->tpl_vars['user']->value['time'];?>
</span> 
											<?php } else { ?> 
											  <?php echo $_smarty_tpl->tpl_vars['user']->value['time'];?>
 
											<?php }?>
                                            
											</span>
                                          
                                            </a>
								<?php if ($_smarty_tpl->tpl_vars['user']->value['work_content']||$_smarty_tpl->tpl_vars['user']->value['edu_content']) {?>
									<div class="user_undergo_box">
									<?php if ($_smarty_tpl->tpl_vars['user']->value['edu_content']) {?>
										<div class="user_undergo"><?php echo $_smarty_tpl->tpl_vars['user']->value['edu_content'];?>
  </div>
									<?php }?>

									<?php if ($_smarty_tpl->tpl_vars['user']->value['work_content']) {?>
										<div class="user_undergo"><?php echo $_smarty_tpl->tpl_vars['user']->value['work_content'];?>
  </div>
									<?php }?>
									</div>
								<?php }?>
                               
                                  <?php if (in_array($_smarty_tpl->tpl_vars['user']->value['id'],$_smarty_tpl->tpl_vars['lookResumeIds']->value)) {?><div class="yun_newedition_yll" style="padding-left:10px; padding-top:0px;">浏览过的简历</div><?php }?>
                            </div>
						
							<?php } ?>
						</div>
						<?php if ($_smarty_tpl->tpl_vars['total']->value<=0) {?>
							 <?php if ($_GET['keyword']!='') {?> 
							 <div class="wap_member_no">没有搜索到人才
								<div>
									<a class="wap_mb_no_sr" href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'resume'),$_smarty_tpl);?>
">重新搜索</a>
								</div>
							 </div>
								<?php } else { ?>
								<div class="wap_member_no">暂无人才
								<div>
									<a class="wap_mb_no_sr" href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'resume'),$_smarty_tpl);?>
">重新搜索</a>
								</div>
								</div>
								<?php }?> 
						<?php } else { ?>
							<div class="pages" style="padding-bottom:20px;"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
						<?php }?>
					</div>
				</section>

				<?php if ($_smarty_tpl->tpl_vars['total']->value<=0) {?> 
				<section id="muireclist">
					<div class="index_wap_tit" style="margin-top:0px;"><i class="index_wap_tit_icon"></i><span class="index_wap_tit_s">为你推荐</span></div>
					<?php  $_smarty_tpl->tpl_vars['userrec'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['userrec']->_loop = false;
$userrec=array();global $db,$db_config,$config;
		if(is_array($_GET)){
			foreach($_GET as $key=>$value){
				if($value=='0'){
					unset($_GET[$key]);
				}
			}
		}
		$paramer=array("limit"=>"3","post_len"=>"18","city_len"=>"10","rec_resume"=>"1","item"=>"'userrec'","nocache"=>"")
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
				$userrec = array();
			}else{
				
				$select="a.`id`,a.`uid`,a.`name`,a.`hy`,a.`job_classid`,a.`city_classid`,a.`jobstatus`,a.`type`,a.`report`,a.`lastupdate`,a.`rec`,a.`top`,a.`topdate`,a.`rec_resume`,a.`ctime`,a.`uname`,a.`idcard_status`,a.`minsalary`,a.`maxsalary`";
				if($pagewhere!=""){

					$sql = "select ".$select." from `".$db_config[def]."resume_expect` a ".$pagewhere." where ".$joinwhere." and ".$where.$order.$sort.$limit;

					$userrec=$db->DB_query_all($sql,"all");

				}else{
					$sql = "select ".$select." from `".$db_config[def]."resume_expect` a where ".$where.$order.$sort.$limit;
					$userrec=$db->DB_query_all($sql,"all");
				}
			}
            
        
        include(CONFIG_PATH."db.data.php");		

		if(!empty($userrec) && is_array($userrec)){
			
			//如果存在top，则说明请求来自排行榜页面
			if($paramer['top']){
				$uids=$m_name=array();
				foreach($userrec as $k=>$v){
					$uids[]=$v[uid];
				}

				$member=$db->select_all($db_config[def]."member","`uid` in(".@implode(',',$uids).")","uid,username");
				foreach($member as $val){
					$m_name[$val[uid]]=$val['username'];
				}
			}
			$uid = $eid = array();
			foreach($userrec as $key=>$value){
				
				$uid[] = $value['uid'];
				$eid[] = $value['id'];
			}
			$eids = @implode(',',$eid);
			$uids = @implode(',',$uid);
            $resume=$db->select_all("resume","`uid` in(".$uids.")","uid,name,nametype,tag,sex,moblie_status,edu,exp,photo,phototype,photo_status,birthday");
			foreach($resume as $v){
				$ruids[] = $v['uid'];
			}
			foreach($userrec as $k=>$v){
				if(!in_array($v['uid'],$ruids)){
					unset($userrec[$k]);
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
			foreach($userrec as $k=>$v){
				if($paramer[topdate]){
					$noids[] = $v[id];
				}
				//筛除重复
				if($paramer[noid]=='1' && !empty($noids) && in_array($v['id'],$noids)){
					unset($userrec[$k]);
					continue;
				}
			    foreach($resume as $val){
			        if($v['uid']==$val['uid']){
                        $userrec[$k]['where']=$citywhere;
			    		$userrec[$k]['edu_n']=$userclass_name[$val['edu']];
				        $userrec[$k]['exp_n']=$userclass_name[$val['exp']];
			            if($val['birthday']){
							$year = date("Y",strtotime($val['birthday']));
							$userrec[$k]['age'] =date("Y")-$year;
						}
						if($val['sex']==152){
							$val['sex']='1';
						}elseif ($val['sex']==153){
							$val['sex']='2';
						}
						$userrec[$k]['sex'] =$arr_data[sex][$val['sex']];
		                $userrec[$k]['phototype']=$val[phototype];
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
						$userrec[$k]['photo']=checkpic($photo,$icon);
						if($val['tag']){
                            $userrec[$k]['tag']=explode(',',$val['tag']);
	                    }
                        $userrec[$k]['nametype']=$val[nametype];
                        $userrec[$k]['moblie_status']=$val[moblie_status];
                        //名称显示处理
						if($config['user_name']==1 || !$config['user_name']){
    						if($val['nametype']==3){
    						    if($val['sex']==1){
    						        $userrec[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."先生";
    						    }else{
    						        $userrec[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."女士";
    						    }
    						}elseif($val['nametype']==2){
    						    $userrec[$k]['username_n'] = "NO.".$v['id'];
    						}else{
    							$userrec[$k]['username_n'] = $val['name'];
    						}
						}elseif($config['user_name']==3){
							if($val['sex']==1){
								$userrec[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."先生";
							}else{
								$userrec[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."女士";
							}
						}elseif($config['user_name']==2){
							$userrec[$k]['username_n'] = "NO.".$v['id'];
						}elseif($config['user_name']==4){
							$userrec[$k]['username_n'] = $val['name'];
						}
                    }
                }
			    foreach($rshow as $val){
					if($v['id']==$val['eid']){
						$userrec[$k]['show_n'] = 1;
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
					$userrec[$k]['time'] = "一周内";
				}elseif($time>$beginYesterday && $time<$beginToday){
					$userrec[$k]['time'] = "昨天";
				}elseif($time>$beginToday){
					$userrec[$k]['time'] = date("H:i",$v['lastupdate']);
					$userrec[$k]['redtime'] =1;
				}else{
					$userrec[$k]['time'] = date("Y-m-d",$v['lastupdate']);
				} 
                
                // 前天
				$beforeYesterday=mktime(0,0,0,date('m'),date('d')-2,date('Y'));

				if($v['ctime']>$beforeYesterday){
					$userrec[$k]['newtime'] =1;
				}
				$userrec[$k]['user_jobstatus_n']=$userclass_name[$v['jobstatus']];
				if($v['minsalary']&&$v['maxsalary']){
					$userrec[$k]["salary_n"] = "￥".$v['minsalary']."-".$v['maxsalary'];    
                }else if($v['minsalary']){
                    $userrec[$k]["salary_n"] = "￥".$v['minsalary']."以上";  
                }else{
    				$userrec[$k]["salary_n"] = "面议";
    			}
				$userrec[$k]['report_n']=$userclass_name[$v['report']];
				$userrec[$k]['type_n']=$userclass_name[$v['type']];
				$userrec[$k]['lastupdate']=date("Y-m-d",$v['lastupdate']);
					
				$userrec[$k]['user_url']=Url("resume",array("c"=>"show","id"=>$v['id']),"1");
				$userrec[$k]["hy_info"]=$industry_name[$v['hy']];
				if($paramer['top']){
					$userrec[$k]['m_name']=$m_name[$v['uid']];
					$userrec[$k]['user_url']=Url("ask",array("c"=>"friend","a"=>"myquestion","uid"=>$v['uid']));
				}
				$userrec[$k]['work_content']=$workexpList[$v['id']]['work_content'];
				$userrec[$k]['edu_content']=$workexpList[$v['id']]['edu_content'];

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
				//$userrec[$k]['job_post']=@implode(",",$jobname);
				$userrec[$k]['expectjob']=$jobname;
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
                //$userrec[$k]['citylist']=@implode("/",$cityname);
				$userrec[$k]['expectcity']=$cityname;
				//截取标题
				if($paramer['post_len']){
					$postname[$k]=@implode(",",$jobname);
					$userrec[$k]['job_post_n']=mb_substr($postname[$k],0,$paramer[post_len],"utf-8");
				}
                if($paramer['city_len']){
					$scityname[$k]=@implode("/",$cityname);
					$userrec[$k]['city_name_n']=mb_substr($scityname[$k],0,$paramer[city_len],"utf-8");
				}
			}
			foreach($userrec as $k=>$v){
               if($paramer['keyword']){
					$userrec[$k]['username_n']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$v['username_n']);
					$userrec[$k]['job_post']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$userrec[$k]['job_post']);
					$userrec[$k]['job_post_n']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$userrec[$k]['job_post_n']);
					$userrec[$k]['city_name_n']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$userrec[$k]['city_name_n']);
				}
            }

			
			if($paramer['keyword']!=""&&!empty($userrec)){
				addkeywords('5',$paramer['keyword']);
			}
		}$userrec = $userrec; if (!is_array($userrec) && !is_object($userrec)) { settype($userrec, 'array');}
foreach ($userrec as $_smarty_tpl->tpl_vars['userrec']->key => $_smarty_tpl->tpl_vars['userrec']->value) {
$_smarty_tpl->tpl_vars['userrec']->_loop = true;
?>
					<div class="user_list_cont" style="margin-top:0px; margin-bottom:10px;">
						<div class="user_list">
							<aside class="user_tj_photo">
								<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'resume','a'=>'show','id'=>$_smarty_tpl->tpl_vars['userrec']->value['id']),$_smarty_tpl);?>
" class="user_list_b">
									<img src="<?php echo $_smarty_tpl->tpl_vars['userrec']->value['photo'];?>
" width="80" height="100" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_icon'];?>
',2);" /></a>
							</aside>
							<h3><span class="c288"><a href="<?php echo $_smarty_tpl->tpl_vars['userrec']->value['user_url'];?>
"><?php if (in_array($_smarty_tpl->tpl_vars['userrec']->value['id'],$_smarty_tpl->tpl_vars['eid']->value)) {
echo $_smarty_tpl->tpl_vars['userrec']->value['uname'];
} else {
echo $_smarty_tpl->tpl_vars['userrec']->value['username_n'];
}?></a></span>            
								<span class="resume_t_date">        
								<?php if ($_smarty_tpl->tpl_vars['userrec']->value['redtime']==1||$_smarty_tpl->tpl_vars['userrec']->value['time']=='昨天') {?>
									<span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['userrec']->value['time'];?>
</span>
								<?php } else { ?>
									<?php echo $_smarty_tpl->tpl_vars['userrec']->value['time'];?>

								<?php }?>
								 </span>        
								</h3>
							<aside class="user_list_p">
								<span class="user_city_n"><?php echo $_smarty_tpl->tpl_vars['userrec']->value['city_name_n'];?>
</span>
								<i class="user_list_p_line">|</i>
								<span class="user_list_jy_p"><?php echo $_smarty_tpl->tpl_vars['userrec']->value['exp_n'];?>
</span>
								<i class="user_list_p_line">|</i> <?php echo $_smarty_tpl->tpl_vars['userrec']->value['edu_n'];?>
学历
							</aside>
							<aside class="user_list_pyxjob"> <em class="user_p_ov"><span class="user_list_j">意向职位：</span>
							<span class="user_list_yxjob"><?php echo $_smarty_tpl->tpl_vars['userrec']->value['job_post_n'];?>
</span></em> </aside>
						</div>
					</div>
					<?php } ?>
				</section>
				<?php }?>
			<?php }?>
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
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/wap_tck.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css">
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/js/demo.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/demo.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css">
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/publictwo.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/search.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
