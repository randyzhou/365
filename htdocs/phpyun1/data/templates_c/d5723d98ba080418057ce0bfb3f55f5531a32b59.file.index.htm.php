<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-20 01:36:43
         compiled from "D:\rcw\uploads\app\template\wap\company\index.htm" */ ?>
<?php /*%%SmartyHeaderCode:20303754395fb6ad2b190f44-88343605%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5723d98ba080418057ce0bfb3f55f5531a32b59' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\wap\\company\\index.htm',
      1 => 1576479787,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20303754395fb6ad2b190f44-88343605',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'keywords' => 0,
    'description' => 0,
    'company_style' => 0,
    'config' => 0,
    'row' => 0,
    'city_name' => 0,
    'comclass_name' => 0,
    'industry_name' => 0,
    'show' => 0,
    'v' => 0,
    'wlist' => 0,
    'jlist' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fb6ad2b1c69a5_90618989',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb6ad2b1c69a5_90618989')) {function content_5fb6ad2b1c69a5_90618989($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
	<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
,wap" />
	<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no,minimal-ui"/>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['company_style']->value;?>
/css/jquery.fullPage.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"/> 
	<link type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['company_style']->value;?>
/css/rusume.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet"/>
	<link type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['company_style']->value;?>
/icon/iconfont.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet"/> 
</head>
<body>

<div id="dowebok">
	
	<section class="section company_one">
	   <div class="company_logo"><?php if ($_smarty_tpl->tpl_vars['row']->value['logo']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['row']->value['logo'];?>
" width="100" height="100"  onerror="if($(this).attr('load')!='1'){$(this).attr('load',1);this.src='<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_unit_icon'];?>
';}"/><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_unit_icon'];?>
" width="100" height="100"><?php }?></div>
	   <div class="company_name"><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</div>
	  	<i class="company_one_icon3"></i>
	   	<i class="company_one_icon"></i>
	   	<i class="company_one_icon2"></i>
	    <div class="company_one_bg"><img src="<?php echo $_smarty_tpl->tpl_vars['company_style']->value;?>
/images/bg1_bg.png" /></div>
		<div class="company_end"><i class="company_end_icon iconfont"></i></div>
  	</section>
  	
 	<section class="section">
	 	<div class="company_tit">
	 		<div class="company_tit_icon iconfont"></div>
	 		<div class="company_tit_e"> Essential Information</div>
	 		<div class="company_tit_p">基本信息</div>
	 	</div>
	  	<div class="section_img"></div>
	    <div class="section_bor"></div>
	   	<div class="section_ears"></div>
		<div class="company_one_p1"><span class="company_one_p1_s">地区：<?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['row']->value['provinceid']];?>
</span></div>
		<div class="company_one_p2"><span class="company_one_p2_s">规模：<?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['row']->value['mun']];?>
</span></div>
		<div class="company_one_p3"><span class="company_one_p3_s">性质：<?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['row']->value['pr']];?>
</span></div>
		<div class="company_one_p4"><span class="company_one_p4_s"style="font-size:14px;">创办：<?php echo $_smarty_tpl->tpl_vars['row']->value['sdate'];?>
</span></div>
	  	<div class="company_one_p5"><span class="company_one_p5_s">行业：<?php echo $_smarty_tpl->tpl_vars['industry_name']->value[$_smarty_tpl->tpl_vars['row']->value['hy']];?>
</span></div>
	  	<div class="company_end"><i class="company_end_icon iconfont"></i></div>
  	</section>
 
 	<section class="section">
 		<div class="company_tit">
		  	<div class="company_tit_icon iconfont"></div>
		 	<div class="company_tit_e">Enterprise Profile</div>
		 	<div class="company_tit_p">企业简介</div>
		</div> 
	  	<div class="company_about"><div class="company_about_cont"><?php echo mb_substr($_smarty_tpl->tpl_vars['row']->value['content'],0,200,'utf-8');
if (strlen($_smarty_tpl->tpl_vars['row']->value['content'])>200) {?>...<?php }?></div> </div>
   		<div class="company_job_more"><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'company','a'=>'show','id'=>$_smarty_tpl->tpl_vars['row']->value['uid']),$_smarty_tpl);?>
#content">详情介绍>> </a></div>
 		<div class="company_end"><i class="company_end_icon iconfont"></i></div>
 	</section>
 	
	 <?php if ($_smarty_tpl->tpl_vars['show']->value) {?>
	 <section class="section">
		<div class="company_tit">
	  		<div class="company_tit_icon iconfont"></div>
			<div class="company_tit_e">Corporate Environment</div>
			<div class="company_tit_p">企业环境</div>
	 	</div>
	  	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['show']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
	   	<div class="slide">
	 		<div class="section_photo_con">
	 			<img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
"/>
	   			<div class="section_photo_p"> <?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</div>
	   		</div>
	   	</div>
	    <?php } ?>
		<div class="company_end"><i class="company_end_icon iconfont"></i></div>
	  </section> 
	  <?php }?>
	  
	 <?php if ($_smarty_tpl->tpl_vars['row']->value['welfare']) {?> 
	 <section class="section">
	   <div class="company_tit">
	 <div class="company_tit_icon iconfont"></div>
	 <div class="company_tit_e">Welfare Treatment</div>
	 <div class="company_tit_p">福利待遇</div>
	 </div>
	  <div class="company_about">
	    <?php  $_smarty_tpl->tpl_vars['wlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['wlist']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['row']->value['welfare']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['wlist']->key => $_smarty_tpl->tpl_vars['wlist']->value) {
$_smarty_tpl->tpl_vars['wlist']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['wlist']->key;
?>
	      <span style="border:1px solid #fff; padding:3px 10px; margin-right:5px; margin-left:15px; margin-top:10px;border-radius:20px; display:inline-block"><?php echo $_smarty_tpl->tpl_vars['wlist']->value;?>
</span>
	    <?php } ?>
	  </div>
	 </section>
	 <?php }?>
	 
	<section class="section">
		<div class="company_tit">
		 	<div class="company_tit_icon iconfont"></div>
		 	<div class="company_tit_e">Recruitment Post</div>
		 	<div class="company_tit_p">招聘职位</div>
		</div>
		<div class="section_job_con">
			<div class="company_job_box">
		    <?php  $_smarty_tpl->tpl_vars['jlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['jlist']->_loop = false;
global $db,$db_config,$config;
		$time = time();
		
		
		//可以做缓存
        $paramer=array("item"=>"'jlist'","uid"=>"'auto.id'","limit"=>"2","nocache"=>"")
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
		 
		$jlist = $db->select_all("company_job",$where.$limit);

		if(is_array($jlist) && !empty($jlist)){
			//处理类别字段
			$cache_array = $db->cacheget();
			$comuid=$jobid=array();
			foreach($jlist as $key=>$value){
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
			foreach($jlist as $key=>$value){

				if($paramer[bid]){
					$noids[] = $value[id];
				}
				//筛除重复
				if($paramer[noids]==1 && !empty($noids) && in_array($value['id'],$noids)){
					unset($jlist[$key]);
					continue;
				}else{
					$jlist[$key] = $db->array_action($value,$cache_array);
					$jlist[$key][stime] = date("Y-m-d",$value[sdate]);
					$jlist[$key][etime] = date("Y-m-d",$value[edate]);
					if($arr_data['sex'][$value['sex']]){
						$jlist[$key][sex_n]=$arr_data['sex'][$value['sex']];
					}
					$jlist[$key][lastupdate] = date("Y-m-d",$value[lastupdate]);
					if($value[minsalary]&&$value[maxsalary]){
						$jlist[$key][job_salary] =$value[minsalary]."-".$value[maxsalary];
					}elseif($value[minsalary]){
						$jlist[$key][job_salary] =$value[minsalary]."以上";
					}else{
						$jlist[$key][job_salary] ="面议";
					}
					if($r_uid[$value['uid']][shortname]){
						$jlist[$key][com_name] =$r_uid[$value['uid']][shortname];
					}
					$jlist[$key][yyzz_status] =$r_uid[$value['uid']][yyzz_status];
					$jlist[$key][logo] =$r_uid[$value['uid']][logo];
					$jlist[$key][pr_n] =$r_uid[$value['uid']][pr_n];
					$jlist[$key][hy_n] =$r_uid[$value['uid']][hy_n];
					$jlist[$key][mun_n] =$r_uid[$value['uid']][mun_n];
					$jlist[$key][hotlogo] =$r_uid[$value['uid']][hotlogo];
					$time=$value['lastupdate'];
					//今天开始时间戳
					$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
					//昨天开始时间戳
					$beginYesterday=mktime(0,0,0,date('m'),date('d')-1,date('Y'));
					//一周内时间戳
					$week=strtotime(date("Y-m-d",strtotime("-1 week")));
					if($time>$week && $time<$beginYesterday){
						$jlist[$key]['time'] ="一周内";
					}elseif($time>$beginYesterday && $time<$beginToday){
						$jlist[$key]['time'] ="昨天";
					}elseif($time>$beginToday){	
						$jlist[$key]['time'] = date("H:i",$value['lastupdate']);
						$jlist[$key]['redtime'] =1;
					}else{
						$jlist[$key]['time'] = date("Y-m-d",$value['lastupdate']);
					}
    
                     // 前天
    				$beforeYesterday=mktime(0,0,0,date('m'),date('d')-2,date('Y'));

					if($value['sdate']>$beforeYesterday){
						$jlist[$key]['newtime'] =1;
					}
					//获得福利待遇名称
					if($value[welfare]){
						$welfareList = @explode(',',$value[welfare]);

						if(!empty($welfareList)){
							$jlist[$key][welfarename] =$welfareList;
						}
					}
					//截取公司名称
					if($paramer[comlen]){
						if($r_uid[$value['uid']][shortname]){
							$jlist[$key][com_n] = mb_substr($r_uid[$value['uid']][shortname],0,$paramer[comlen],"utf-8");
						}else{
							$jlist[$key][com_n] = mb_substr($value['com_name'],0,$paramer[comlen],"utf-8");
						}
					}
					//截取职位名称
					if($paramer[namelen]){
						if($value['rec_time']>time()){
							$jlist[$key][name_n] = "<font color='red'>".mb_substr($value['name'],0,$paramer[namelen],"utf-8")."</font>";
						}else{
							$jlist[$key][name_n] = mb_substr($value['name'],0,$paramer[namelen],"utf-8");
						}
					}else{
						if($value['rec_time']>time()){
							$jlist[$key]['name_n'] = "<font color='red'>".$value['name']."</font>";
						}
					}
					//构建职位伪静态URL
					$jlist[$key][job_url] = Url("job",array("c"=>"comapply","id"=>$value[id]),"1");
					//构建企业伪静态URL
					$jlist[$key][com_url] = Url("company",array("c"=>"show","id"=>$value[uid]));
					
					foreach($comrat as $k=>$v){
						if($value[rating]==$v[id]){
							$jlist[$key][color] = str_replace("#","",$v[com_color]);
							if($v[com_pic]){
								$jlist[$key][ratlogo] = checkpic($v[com_pic]);
							}
							$jlist[$key][ratname] = $v[name];
						}
					}
					if($paramer[keyword]){
						$jlist[$key][name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[name]);
						$jlist[$key][com_name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[com_name]);
						$jlist[$key][name_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$jlist[$key][name_n]);
						$jlist[$key][com_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$jlist[$key][com_n]);
						$jlist[$key][job_city_one]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[provinceid]]);
						$jlist[$key][job_city_two]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[cityid]]);
					}
				}
			}
			if(is_array($jlist)){
				if($paramer[keyword]!=""&&!empty($jlist)){
					addkeywords('3',$paramer[keyword]);
				}
			}
		}$jlist = $jlist; if (!is_array($jlist) && !is_object($jlist)) { settype($jlist, 'array');}
foreach ($jlist as $_smarty_tpl->tpl_vars['jlist']->key => $_smarty_tpl->tpl_vars['jlist']->value) {
$_smarty_tpl->tpl_vars['jlist']->_loop = true;
?>
				<div class="company_job">
				 	<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','a'=>'comapply','id'=>$_smarty_tpl->tpl_vars['jlist']->value['id']),$_smarty_tpl);?>
">
						<div class="company_job_name"><?php echo $_smarty_tpl->tpl_vars['jlist']->value['name'];?>
  <?php echo $_smarty_tpl->tpl_vars['jlist']->value['job_city_one'];?>
 <?php echo $_smarty_tpl->tpl_vars['jlist']->value['job_city_two'];?>
 <?php echo $_smarty_tpl->tpl_vars['jlist']->value['job_city_three'];?>
</div>
						<div class="company_job_salary"><span class="company_job_xz">薪资：<?php if ($_smarty_tpl->tpl_vars['jlist']->value['job_salary']==''||$_smarty_tpl->tpl_vars['jlist']->value['job_salary']=='不限'||$_smarty_tpl->tpl_vars['jlist']->value['job_salary']=='面议') {
} else { ?>￥<?php }
echo $_smarty_tpl->tpl_vars['jlist']->value['job_salary'];?>
</span>经验：<?php echo $_smarty_tpl->tpl_vars['jlist']->value['job_exp'];?>
 </div>
						<i class="company_job_icon iconfont"></i>
					</a>
				</div> 
		 	<?php } ?> 
		  	</div>  
		 	<div class="company_job_more"><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'company','a'=>'show','id'=>$_smarty_tpl->tpl_vars['row']->value['uid']),$_smarty_tpl);?>
#job">查看更多职位>> </a></div>
		</div>  
  		<div class="company_end"><i class="company_end_icon iconfont"></i></div>
  	</section> 
  	
  	<section class="section">
   		
   		<div class="company_tit">
 			<div class="company_tit_icon iconfont"></div>
 			<div class="company_tit_e">Contact Information</div>
 			<div class="company_tit_p">联系方式</div>
 		</div>
 		
  		<div class="company_tit_p_touch_cont">
  		
 			<?php if ($_smarty_tpl->tpl_vars['link']->value['errorcode']=="9") {?>
 			
 				<?php if ($_smarty_tpl->tpl_vars['row']->value['linkman']) {?>
				<div class="company_tit_p_touch">
				 	<span class="company_tit_p_touch_s">联&nbsp;系&nbsp;人：</span>
				 	<span class="company_tit_p_touch_r"><?php echo $_smarty_tpl->tpl_vars['row']->value['linkman'];?>
</span>
				</div>
				<?php }?>
			
				<?php if ($_smarty_tpl->tpl_vars['row']->value['linktel']) {?>
					<div class="company_tit_p_touch">
				 		<span class="company_tit_p_touch_s">联系电话：</span>
				 		<span class="company_tit_p_touch_r"><?php echo $_smarty_tpl->tpl_vars['row']->value['linktel'];?>
</span>
					</div>
				<?php }?>
				 
				<?php if ($_smarty_tpl->tpl_vars['row']->value['linkmail']) {?>
					 <div class="company_tit_p_touch">
						 <span class="company_tit_p_touch_s">联系邮件：</span>
						 <span class="company_tit_p_touch_r"><?php echo $_smarty_tpl->tpl_vars['row']->value['linkmail'];?>
</span> 
					 </div>
				<?php }?>
				 
				<?php if ($_smarty_tpl->tpl_vars['row']->value['address']) {?>
					 <div class="company_tit_p_touch"> 
						 <span class="company_tit_p_touch_s">联系地址：</span>
						 <span class="company_tit_p_touch_r"><?php echo $_smarty_tpl->tpl_vars['row']->value['address'];?>
 </span>
					 </div>
				<?php }?>
				
 			<?php } else { ?> 
 				
 				<?php if ($_smarty_tpl->tpl_vars['link']->value['errorcode']==1||$_smarty_tpl->tpl_vars['link']->value['errorcode']==2||$_smarty_tpl->tpl_vars['link']->value['errorcode']==6||$_smarty_tpl->tpl_vars['link']->value['errorcode']==5) {?>
					<div class="company_tit_p_touch_l_p"> <?php echo $_smarty_tpl->tpl_vars['link']->value['msg'];?>
 </div>
				<?php } elseif ($_smarty_tpl->tpl_vars['link']->value['errorcode']==3) {?> 
 					<div class="company_tit_p_touch_l_p"><?php echo $_smarty_tpl->tpl_vars['link']->value['msg'];?>
</div>
					<div class="company_tit_p_touch_l_c"><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'login'),$_smarty_tpl);?>
" class="company_tit_p_touch_log">立即登录</a><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'register','usrtype'=>1,'type'=>1),$_smarty_tpl);?>
" class="company_tit_p_touch_reg">立即注册</a></div>
				<?php } elseif ($_smarty_tpl->tpl_vars['link']->value['errorcode']==4) {?> 
 					<div class="company_tit_p_touch_l_p"><?php echo $_smarty_tpl->tpl_vars['link']->value['msg'];?>
</div>
					<div class="company_tit_p_touch_l_c">
						<a href="<?php echo smarty_function_url(array('m'=>'wap'),$_smarty_tpl);?>
member/index.php?c=addresume" class="company_tit_p_touch_log">创建简历</a>
 					</div>
				<?php }?> 
 			<?php }?> 
		</div>
      	<div class="company_end"><i class="company_end_icon iconfont"></i></div>
  	</section>
  
 	<section class="section">
  
		<div class="company_tit">
		 	<div class="company_tit_icon iconfont"></div>
		 	<div class="company_tit_e">Contact Information</div>
		 	<div class="company_tit_p">其他联系方式</div>
		</div>
		
		<ul class="section_touch_ul">
			<li><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'company','a'=>'show','id'=>$_smarty_tpl->tpl_vars['row']->value['uid']),$_smarty_tpl);?>
#tel"><i class="section_touch_icon iconfont"></i>查看详细信息</a></li>
			<li><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'company','a'=>'show','id'=>$_smarty_tpl->tpl_vars['row']->value['uid']),$_smarty_tpl);?>
#job"><i class="section_touch_icon  iconfont"></i>查看招聘职位</a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wapdomain'];?>
"><i class="section_touch_icon  iconfont"></i>查看<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
</a></li>
		</ul>
	  	<div class="section_nav">
	      	<div class="section_nav_line"></div>
	      	<div class="section_nav_line_r"></div>
	    </div>
  	</section>
  	
</div>
<!--微信分享专用---->
<div style='margin:0 auto;width:0px;height:0px;overflow:hidden;'><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wx_sharelogo'];?>
"></div>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['company_style']->value;?>
/js/jquery-1.8.3.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['company_style']->value;?>
/js/jquery.fullPage.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
$(function(){
	$('#dowebok').fullpage({
		normalScrollElements: '.myDiv'
	});
});
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/nativeshare.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html>
<?php }} ?>
