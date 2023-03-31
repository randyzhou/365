<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-20 20:16:26
         compiled from "D:\rcw\uploads\app\template\wap\index.htm" */ ?>
<?php /*%%SmartyHeaderCode:11709742655fa59eeab895f5-15262193%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3cf49df278690e2b077c79a412a75f39483459a' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\wap\\index.htm',
      1 => 1605874582,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11709742655fa59eeab895f5-15262193',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fa59eeabdfde4_86521017',
  'variables' => 
  array (
    'title' => 0,
    'keywords' => 0,
    'description' => 0,
    'config_wapdomain' => 0,
    'config' => 0,
    'tplmoblie' => 0,
    'username' => 0,
    'lunbo' => 0,
    'navlist' => 0,
    'key' => 0,
    'v' => 0,
    'alist' => 0,
    'hotjoblist' => 0,
    'new_list' => 0,
    'waflist' => 0,
    'wap_style' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fa59eeabdfde4_86521017')) {function content_5fa59eeabdfde4_86521017($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<meta http-equiv="Cache-Control" content="no-cache"/>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
,wap" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
<meta name="renderer" content="webkit"/>
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1"/>
<meta http-equiv="Cache-Control" content="no-siteapp" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
/js/mui/css/mui.min.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css"/>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/css.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css"/>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/job.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css"/>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/style.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css"/>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/yun_wap_member.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<style>
   * { touch-action: none; }
   .header_bg { background:#fff}
   .foot_nav_chiose_t{ line-height:48px; font-size:18px; text-align:left;color:#333; position:relative; padding-left:40px;}
.foot_nav_chiose_t:after{
    content: ' ';
    width: 12px;
    height: 12px;
    border: #333 solid;
    -webkit-transform: rotate(-135deg);
    border-width: 1px 1px 0 0;
    display: inline-block; position:absolute;left:15px;top:15px;
}
</style>
</head>
<body>
<div id="listhtml">
<div id="app" class="mui-views">
	<div class="mui-view">
		<div class="mui-navbar"></div>
		<div class="mui-pages"></div>
	</div>
</div>
</div>
<!--单页面开始-->
<div id="main" class="mui-page">
<div class="mui-navbar-inner mui-bar mui-bar-nav">
<header class="header_h">
  <div class="header_fixed">
    <div class="header_bg <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {?>bg<?php echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>" >
    <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['logo']==2) {?>
    <div class="header_p_z"> <?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
</div>
    <?php } else { ?>
    <div class="index_headerlogo" style="padding-top:10px; padding-left:15px;"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wap_logo'];?>
">有疑问请联系唐胡子：17388940305（微信）！</div>
    <?php }?>
     
    <?php if (!$_smarty_tpl->tpl_vars['username']->value&&$_GET['c']=='') {?>
        <div class="header_new_login">
            <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'login'),$_smarty_tpl);?>
"  class="header_new_login_a">登录</a>
            <span class="header_new_login_line">|</span>
            <a  href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'register'),$_smarty_tpl);?>
" >注册</a>
        </div>
     <?php } else { ?>
        <div class="header_new_login">
            欢迎 【<span style="color: red"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</span>】登录！
        </div>
    <?php }?>
    </div>
  </div>
	
</header>
</div>
	<!--页面主内容区开始-->
	<div class="mui-page-content">
		<div class="mui-scroll-wrapper">
			<div class="mui-scroll">
<div class="clear"></div>
<!--div class="slidebanner"-->
 <!--div class="swiper_banner" -->
 <div>
     <div>
        <div class="swiper-container" id="imgswiper" style="height:60px">
            <div class="swiper-wrapper">
                <?php  $_smarty_tpl->tpl_vars["lunbo"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["lunbo"]->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
global $db,$db_config,$config;$AdArr=array();$paramer=array();
			include(PLUS_PATH.'pimg_cache.php');$add_arr = $ad_label[50];if(is_array($add_arr) && !empty($add_arr)){
				$i=0;$limit = 0;$length = 0;
				foreach($add_arr as $key=>$value){
					if(($value['did']==$config['did'] ||($value['did']=='0'&&!$config['did']))&&$value['start']<time()&&$value['end']>time()){
						if($i>0 && $limit==$i){
							break;
						}
						if($length>0){
							$value['name'] = mb_substr($value['name'],0,$length);
						}
						if($paramer['type']!=""){
							if($paramer['type'] == $value['type']){
								$AdArr[] = $value;
							}
						}else{
							$AdArr[] = $value;
						}
						$i++;
					}
				}
			}$AdArr = $AdArr; if (!is_array($AdArr) && !is_object($AdArr)) { settype($AdArr, 'array');}
foreach ($AdArr as $_smarty_tpl->tpl_vars["lunbo"]->key => $_smarty_tpl->tpl_vars["lunbo"]->value) {
$_smarty_tpl->tpl_vars["lunbo"]->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars["lunbo"]->key;
?>
                <div class="swiper-slide">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['lunbo']->value['src'];?>
">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['lunbo']->value['pic'];?>
" width='100%' height="160" />
                    </a>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<div class="index_newedition_search_box">
<div class="index_newedition_searchbg">
<div class="index_newedition_search_c searchnew"><?php if ($_smarty_tpl->tpl_vars['config']->value['sy_web_site']=='1') {?><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'site'),$_smarty_tpl);?>
" class="index_newedition_search_city"><?php if ($_smarty_tpl->tpl_vars['config']->value['cityname']) {
echo $_smarty_tpl->tpl_vars['config']->value['cityname'];
} else {
echo $_smarty_tpl->tpl_vars['config']->value['sy_indexcity'];
}?></a><?php }?> 
<span class="index_newedition_search_p ">搜索职位或公司</span></div>
</div></div>
<!--<div class="index_newedition_navbox">
<div class="index_newedition_nav">
        <div class="swiper-container" id="navswiper">
            <div class="swiper-wrapper">
			
				<div class="swiper-slide" >
						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['navlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
						<?php if ($_smarty_tpl->tpl_vars['key']->value>0&&$_smarty_tpl->tpl_vars['key']->value%4==0) {?>
						
							</div>
							<div class="swiper-slide" >
						<?php }?>
						<dl class="index_navlist">
							<a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url_n'];?>
">
								<dt class="index_nav_icon"><image src="<?php echo $_smarty_tpl->tpl_vars['v']->value['pic_n'];?>
" ></image></dt>
								<dd><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</dd>
							</a>
						</dl>
						<?php } ?>
					</div>
				
            </div>
       
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>-->
<div class="clear"></div>
<div class="index_newedition_othernav">

</div>
<div class="clear"></div>
<div class="index_newedition_box ">
<div class="index_newedition_notice sxl">
<div class="index_newedition_notice_tit"><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'announcement'),$_smarty_tpl);?>
"><div class="index_newedition_notice_tit_n">公告</div><span class="index_newedition_notice_tit_more">更多</span></a></div>
<ul class="sxlist">
<?php  $_smarty_tpl->tpl_vars['alist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['alist']->_loop = false;
$alist=array();$time=time();$paramer=array("limit"=>"10","item"=>"'alist'","t_len"=>"40","nocache"=>"")
;
		global $db,$db_config,$config;
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
		$where = 1;
		//分站
		if($config['did']){
			$where.=" and `did`='".$config['did']."'";
		}else if($config['sy_web_site']=="1"){
			$where.=" and `did`='0'";
		}  
		 $where.=" and (`endtime`>".time()." or endtime=0 or endtime is null)";
		if($paramer[limit]){
			$limit=" LIMIT ".$paramer[limit];
		}else{
			$limit=" LIMIT 20";
		}
		if($paramer[ispage]){
			$limit = PageNav($paramer,$_GET,"admin_announcement",$where,$Purl,"",0,$_smarty_tpl);
		}
		//排序字段 默认按照xuanshang排序
		if($paramer[order]){
			$where.="  ORDER BY `".$paramer[order]."`";
		}else{
			$where.="  ORDER BY `datetime`";
		}
		//排序方式默认倒序
		if($paramer[sort]){
			$where.=" ".$paramer[sort];
		}else{
			$where.=" DESC";
		}

		$alist=$db->select_all("admin_announcement",$where.$limit);
		if(is_array($alist)){
			foreach($alist as $key=>$value){
				//截取标题
				if($paramer[t_len]){
					$alist[$key][title_n] = mb_substr($value['title'],0,$paramer[t_len],"utf-8");
				}
				$alist[$key][time]=date("Y-m-d",$value[datetime]);
				$alist[$key][url] = Url("announcement",array("id"=>$value[id]),"1");
			}
		}$alist = $alist; if (!is_array($alist) && !is_object($alist)) { settype($alist, 'array');}
foreach ($alist as $_smarty_tpl->tpl_vars['alist']->key => $_smarty_tpl->tpl_vars['alist']->value) {
$_smarty_tpl->tpl_vars['alist']->_loop = true;
?>
<li>
<div class="index_newedition_notice_name"><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'announcement','id'=>$_smarty_tpl->tpl_vars['alist']->value['id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['alist']->value['title_n'];?>
</a></div>
<div class="index_newedition_notice_time"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['alist']->value['datetime'],"%Y-%m-%d");?>
</div>

</li>
<?php } ?> 
</ul>
</div>
</div>
<!--<section>
	
   
    
</section>-->
<div class="clear"></div>


<div class="clear"></div>
<div class="" style="float:left;width:100%; margin-top:10px; background:#fff">
 <!--   <div class="mq_tit">
        <span class="mq_tit_name">名企直招</span>
		<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'company','rec'=>1),$_smarty_tpl);?>
" class="mq_tit_gd">查看更多</a>
    </div>-->
   <div style="padding:0px 15px; position:relative"> <div class="index_newedition_job_tit">唐胡子推荐</div><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'company','rec'=>1),$_smarty_tpl);?>
" class="mq_tit_gd">查看更多</a></div>
   <div style="padding:0px 0 5px 10px">
    <div class="mq_box_list_c">
        <div class="mui-slider">
            <div class="mui-scroll-wrapper mui-slider-indicator mui-segmented-control mui-segmented-control-inverted" style="height:145px; background:none;">
                <div class="mui-scroll" style="background:#fff">
					 <?php  $_smarty_tpl->tpl_vars['hotjoblist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hotjoblist']->_loop = false;
global $db,$db_config,$config;$paramer=array("item"=>"'hotjoblist'","limit"=>"18","nocache"=>"")
;$hotjoblist=array();
		
		$time = time();
		//处理传入参数，并且构造分页参数
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr['arr'];
		$Purl =  $ParamerArr['purl'];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
		//是否属于分站下
		if($config[sy_web_site]=="1"){
			$jobwheres="";
			if($config[province]>0 && $config[province]!=""){
				$jobwheres.=" and `provinceid`='$config[province]'";
			}
			if($config[cityid]>0 && $config[cityid]!=""){
				$jobwheres.=" and `cityid`='$config[cityid]'";
			}
			if($config[three_cityid]>0 && $config[three_cityid]!=""){
				$jobwheres.=" and `three_cityid`='$config[three_cityid]'";
			}
			if($config[hyclass]>0 && $config[hyclass]!=""){
				$jobwheres.=" and `hy`='".$config[hyclass]."'";
			} 
			if($jobwheres){
				$comlist=$db->select_all("company","1 ".$jobwheres,"`uid`");
				if(is_array($comlist)){
					foreach($comlist as $v){
						$cuid[]=$v[uid];
					}
				}
				$hotwhere=" and `uid` in (".@implode(",",$cuid).")";
			} 
		}
		

		$time = time();
		$where = "`time_start`<$time AND `time_end`>$time".$hotwhere;$order = " ORDER BY `sort` ";$sort = 'DESC';
		if($paramer['limit']){
				$limit=" limit ".$paramer['limit'];
			}
		$where.=$order.$sort;
        $Query = $db->query("SELECT * FROM $db_config[def]hotjob where ".$where.$limit); 
		while($rs = $db->fetch_array($Query)){
			$hotjoblist[] = $rs;
			$ListId[] =  $rs[uid];
		}

		//是否需要查询对应职位
		$JobId = @implode(",",$ListId);
		$comList=$db->select_all("company","`uid` IN ($JobId)","`shortname`,`uid`,`hy`,`provinceid`,`cityid`,`three_cityid`");
		
		$JobList=$db->select_all("company_job","`uid` IN ($JobId) and state=1 and r_status=1 and status=0 $jobwheres");
		$statis=$db->select_all("company_statis","`uid` IN ($JobId)","`uid`,`comtpl`");
		if(is_array($ListId)){
			//处理类别字段
			$cache_array = $db->cacheget();
			foreach($hotjoblist as $key=>$value){
				$hotjoblist[$key]["hot_pic"]=checkpic($value[hot_pic],$config[sy_unit_icon]);
				foreach($comList as $v){
					if($value['uid']==$v['uid']){
						if($v['shortname']){
							$hotjoblist[$key]["username"]= $v[shortname];
						}
						$hotjoblist[$key]["hy"]= $cache_array[industry_name][$v[hy]];
						$hotjoblist[$key]["job_city_one"]= $cache_array[city_name][$v[provinceid]];
						$hotjoblist[$key]["job_city_two"]= $cache_array[city_name][$v[cityid]];
					}
				}
				$i=0;$j=0;
				$hotjoblist[$key]["num"]=0;
				if(is_array($JobList)){
					

					foreach($JobList as $ke=>$va){ 
						if($value[uid]==$va[uid]){
							if($j<3){
								$hotjob_url = Url("job",array("c"=>"comapply","id"=>"$va[id]"),"1");
								$curl=  Url("company",array("c"=>"show","id"=>$value[uid]));
								$va[name] = mb_substr($va[name],0,8,"utf-8");
								$hotjoblist[$key]["hotjob"].="<div class='index_mq_box_cont_showjoblist'><a href=\"$hotjob_url\">".$va[name]."</a></div>";
								
							}else{
                                if($j==3){
                                    $hotjoblist[$key]["hotjob"].="<div class='index_mq_box_cont_showjobmore'><a href=\"$curl\">更多职位</a></div>";
							     }
							}
                            $j++;
						}
					}

					
					$hotjoblist[$key]["job"].="<div class=\"area_left\"> ";
					
					foreach($JobList as $k=>$v){
						if($value[uid]==$v[uid] && $i<5){
							$job_url = Url("job",array("c"=>"comapply","id"=>"$v[id]"),"1");
							$v[name] = mb_substr($v[name],0,10,"utf-8");
							$hotjoblist[$key]["job"].="<a href='".$job_url."'>".$v[name]."</a>";
							$i++;
						}
						if($value[uid]==$v[uid]){
							$hotjoblist[$key]["num"]=$hotjoblist[$key]["num"]+1;
						}
					}

					foreach($statis as $v){
						if($value['uid']==$v['uid']){
							if($v['comtpl'] && $v['comtpl']!="default"){
								$jobs_url = Url("company",array("c"=>"show","id"=>$value[uid]))."#job";
							}else{
								$jobs_url = Url("company",array("c"=>"show","id"=>$value[uid]));
							}
						}
					}
					$com_url = Url("company",array("c"=>"show","id"=>$value[uid]));
					$hotjoblist[$key]["job"].="</div><div class=\"area_right\"><a href='".$com_url."'>".$value["username"]."</a></div>";
					$hotjoblist[$key]["url"]=$com_url;
				}
			}
		}$hotjoblist = $hotjoblist; if (!is_array($hotjoblist) && !is_object($hotjoblist)) { settype($hotjoblist, 'array');}
foreach ($hotjoblist as $_smarty_tpl->tpl_vars['hotjoblist']->key => $_smarty_tpl->tpl_vars['hotjoblist']->value) {
$_smarty_tpl->tpl_vars['hotjoblist']->_loop = true;
?>

                    <div class="mui-control-item indexmq_box" data-href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'company','a'=>'show','id'=>$_smarty_tpl->tpl_vars['hotjoblist']->value['uid']),$_smarty_tpl);?>
" style="padding:0;width:110px; line-height:20px;">
                        <div class="mq_box">
                            <div class="mq_logo" style="margin:0 auto">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['hotjoblist']->value['hot_pic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['hotjoblist']->value['username'];?>
">
                            </div>
                            <div class="mq_comname"><?php echo mb_substr($_smarty_tpl->tpl_vars['hotjoblist']->value['username'],0,22,'utf-8');?>
</div>
                            <div class="mq_comjob">
                                <span class="mq_comjob_n"><?php echo $_smarty_tpl->tpl_vars['hotjoblist']->value['num'];?>
</span> 个职位热招</div>
								<?php echo $_smarty_tpl->tpl_vars['hotjoblist']->value['where'];?>

                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
       
        <style>
            .indexmq_box {
                padding: 0px;
                border-radius: 4px;
                margin-left: 5px;
            }
            
            .index_jobtit .mui-active {
                position: relative
            }
            
            .index_jobtit .mui-active:after {
                width: 26px;
                height: 2px;
                background: #007aff;
                display: inline-block;
                position: absolute;
                left: 50%;
                ;
                bottom: 0px;
                content: '';
                margin-left: -13px;
            }
        </style>

    </div>
        </div>
        
</div>
<div class="clear"></div>
<div class="index_newedition_jobpd">
<div class="index_newedition_job">
<!--<div class="index_newedition_job_tit">为你推荐</div>-->

<!--列表 --> 
<?php  $_smarty_tpl->tpl_vars['new_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['new_list']->_loop = false;
global $db,$db_config,$config;
		$time = time();
		
		
		//可以做缓存
        $paramer=array("limit"=>"15","item"=>"'new_list'","nocache"=>"")
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
		 
		$new_list = $db->select_all("company_job",$where.$limit);

		if(is_array($new_list) && !empty($new_list)){
			//处理类别字段
			$cache_array = $db->cacheget();
			$comuid=$jobid=array();
			foreach($new_list as $key=>$value){
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
			foreach($new_list as $key=>$value){

				if($paramer[bid]){
					$noids[] = $value[id];
				}
				//筛除重复
				if($paramer[noids]==1 && !empty($noids) && in_array($value['id'],$noids)){
					unset($new_list[$key]);
					continue;
				}else{
					$new_list[$key] = $db->array_action($value,$cache_array);
					$new_list[$key][stime] = date("Y-m-d",$value[sdate]);
					$new_list[$key][etime] = date("Y-m-d",$value[edate]);
					if($arr_data['sex'][$value['sex']]){
						$new_list[$key][sex_n]=$arr_data['sex'][$value['sex']];
					}
					$new_list[$key][lastupdate] = date("Y-m-d",$value[lastupdate]);
					if($value[minsalary]&&$value[maxsalary]){
						$new_list[$key][job_salary] =$value[minsalary]."-".$value[maxsalary];
					}elseif($value[minsalary]){
						$new_list[$key][job_salary] =$value[minsalary]."以上";
					}else{
						$new_list[$key][job_salary] ="面议";
					}
					if($r_uid[$value['uid']][shortname]){
						$new_list[$key][com_name] =$r_uid[$value['uid']][shortname];
					}
					$new_list[$key][yyzz_status] =$r_uid[$value['uid']][yyzz_status];
					$new_list[$key][logo] =$r_uid[$value['uid']][logo];
					$new_list[$key][pr_n] =$r_uid[$value['uid']][pr_n];
					$new_list[$key][hy_n] =$r_uid[$value['uid']][hy_n];
					$new_list[$key][mun_n] =$r_uid[$value['uid']][mun_n];
					$new_list[$key][hotlogo] =$r_uid[$value['uid']][hotlogo];
					$time=$value['lastupdate'];
					//今天开始时间戳
					$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
					//昨天开始时间戳
					$beginYesterday=mktime(0,0,0,date('m'),date('d')-1,date('Y'));
					//一周内时间戳
					$week=strtotime(date("Y-m-d",strtotime("-1 week")));
					if($time>$week && $time<$beginYesterday){
						$new_list[$key]['time'] ="一周内";
					}elseif($time>$beginYesterday && $time<$beginToday){
						$new_list[$key]['time'] ="昨天";
					}elseif($time>$beginToday){	
						$new_list[$key]['time'] = date("H:i",$value['lastupdate']);
						$new_list[$key]['redtime'] =1;
					}else{
						$new_list[$key]['time'] = date("Y-m-d",$value['lastupdate']);
					}
    
                     // 前天
    				$beforeYesterday=mktime(0,0,0,date('m'),date('d')-2,date('Y'));

					if($value['sdate']>$beforeYesterday){
						$new_list[$key]['newtime'] =1;
					}
					//获得福利待遇名称
					if($value[welfare]){
						$welfareList = @explode(',',$value[welfare]);

						if(!empty($welfareList)){
							$new_list[$key][welfarename] =$welfareList;
						}
					}
					//截取公司名称
					if($paramer[comlen]){
						if($r_uid[$value['uid']][shortname]){
							$new_list[$key][com_n] = mb_substr($r_uid[$value['uid']][shortname],0,$paramer[comlen],"utf-8");
						}else{
							$new_list[$key][com_n] = mb_substr($value['com_name'],0,$paramer[comlen],"utf-8");
						}
					}
					//截取职位名称
					if($paramer[namelen]){
						if($value['rec_time']>time()){
							$new_list[$key][name_n] = "<font color='red'>".mb_substr($value['name'],0,$paramer[namelen],"utf-8")."</font>";
						}else{
							$new_list[$key][name_n] = mb_substr($value['name'],0,$paramer[namelen],"utf-8");
						}
					}else{
						if($value['rec_time']>time()){
							$new_list[$key]['name_n'] = "<font color='red'>".$value['name']."</font>";
						}
					}
					//构建职位伪静态URL
					$new_list[$key][job_url] = Url("job",array("c"=>"comapply","id"=>$value[id]),"1");
					//构建企业伪静态URL
					$new_list[$key][com_url] = Url("company",array("c"=>"show","id"=>$value[uid]));
					
					foreach($comrat as $k=>$v){
						if($value[rating]==$v[id]){
							$new_list[$key][color] = str_replace("#","",$v[com_color]);
							if($v[com_pic]){
								$new_list[$key][ratlogo] = checkpic($v[com_pic]);
							}
							$new_list[$key][ratname] = $v[name];
						}
					}
					if($paramer[keyword]){
						$new_list[$key][name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[name]);
						$new_list[$key][com_name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[com_name]);
						$new_list[$key][name_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$new_list[$key][name_n]);
						$new_list[$key][com_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$new_list[$key][com_n]);
						$new_list[$key][job_city_one]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[provinceid]]);
						$new_list[$key][job_city_two]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[cityid]]);
					}
				}
			}
			if(is_array($new_list)){
				if($paramer[keyword]!=""&&!empty($new_list)){
					addkeywords('3',$paramer[keyword]);
				}
			}
		}$new_list = $new_list; if (!is_array($new_list) && !is_object($new_list)) { settype($new_list, 'array');}
foreach ($new_list as $_smarty_tpl->tpl_vars['new_list']->key => $_smarty_tpl->tpl_vars['new_list']->value) {
$_smarty_tpl->tpl_vars['new_list']->_loop = true;
?>
<div class="index_newedition_job_list">
<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','a'=>'comapply','id'=>$_smarty_tpl->tpl_vars['new_list']->value['id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['new_list']->value['name'];?>
">
<div class="yun_newedition_jobcont">
<div class="index_newedition_jobname"><?php echo $_smarty_tpl->tpl_vars['new_list']->value['name'];?>
</div>
<div class="yun_newedition_jobinfo"><div class="yun_newedition_jobinfo_c"><?php echo $_smarty_tpl->tpl_vars['new_list']->value['job_city_one'];?>
-<?php echo $_smarty_tpl->tpl_vars['new_list']->value['job_city_two'];
if ($_smarty_tpl->tpl_vars['new_list']->value['job_exp']) {?><i class="yun_newedition_jobline"></i><?php echo $_smarty_tpl->tpl_vars['new_list']->value['job_exp'];?>
经验<?php }
if ($_smarty_tpl->tpl_vars['new_list']->value['job_edu']) {?><i class="yun_newedition_jobline"></i><?php echo $_smarty_tpl->tpl_vars['new_list']->value['job_edu'];?>
学历<?php }?></div></div>
<span class="index_newedition_jobxz"><?php if ($_smarty_tpl->tpl_vars['new_list']->value['job_salary']=='面议') {?>面议<?php } else { ?>￥<?php echo $_smarty_tpl->tpl_vars['new_list']->value['job_salary'];
}?></span>
<div class="yun_index_jobemergency_tg">
<?php if ($_smarty_tpl->tpl_vars['new_list']->value['urgent']=='1') {?><span class="yun_index_jobemergency">急聘</span><?php }?>
<?php if ($_smarty_tpl->tpl_vars['new_list']->value['rec']=='1') {?><span class="yun_index_hot">推荐</span><?php }?>
</div>


<?php if ($_smarty_tpl->tpl_vars['new_list']->value['welfare']) {?>
<div class="yun_newedition_jobflbox">
<?php  $_smarty_tpl->tpl_vars['waflist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['waflist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['new_list']->value['welfare']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['waflist']->key => $_smarty_tpl->tpl_vars['waflist']->value) {
$_smarty_tpl->tpl_vars['waflist']->_loop = true;
?>
<span class="yun_newedition_jobfl"><?php echo $_smarty_tpl->tpl_vars['waflist']->value;?>
</span>
<?php } ?>
</div>
<?php }?>


</div> 
<?php if ($_smarty_tpl->tpl_vars['new_list']->value['urgent']!='1'&&$_smarty_tpl->tpl_vars['new_list']->value['rec']!='1') {?>
             <span class="yun_newedition_jobtime">
			<?php if ($_smarty_tpl->tpl_vars['new_list']->value['time']=='今天'||$_smarty_tpl->tpl_vars['new_list']->value['time']=='昨天'||$_smarty_tpl->tpl_vars['new_list']->value['redtime']=='1') {?>
			  <?php echo $_smarty_tpl->tpl_vars['new_list']->value['time'];?>

			<?php } else { ?>
			  <?php echo $_smarty_tpl->tpl_vars['new_list']->value['time'];?>

			<?php }?></span>
<?php }?>			
                                      
<div class="yun_newedition_jobcomname"><?php echo mb_substr(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['new_list']->value['com_name']),0,20,"utf-8");?>
</div>
</a>
    <?php if (strlen($_smarty_tpl->tpl_vars['new_list']->value['statusbody'])>0) {?>唐胡子推荐：<?php echo $_smarty_tpl->tpl_vars['new_list']->value['statusbody'];
}?>
</div> 
<?php } ?> 
<!--列表  end-->
<div class="yun_newedition_jobmore"><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job'),$_smarty_tpl);?>
">查看更多</a></div>
            </div>
            </div>
            <div class="yun_newedition_footer">
			<div class="">
				<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'contact'),$_smarty_tpl);?>
">联系我们</a>
				<span class="yun_newedition_footer_line">|</span>
				<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_app_open']==1) {?>
				<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'appdown'),$_smarty_tpl);?>
">下载APP</a>
				<span class="yun_newedition_footer_line">|</span>
				<?php }?>
				<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'advice'),$_smarty_tpl);?>
">意见反馈</a>
				<span class="yun_newedition_footer_line">|</span>
				<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'about'),$_smarty_tpl);?>
">关于我们</a></div>
			</div>
    </div>  
	</div>
</div>
</div>
		
			</div>
		</div>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/search.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
		

<style>
    .swiper-container {
        width: 100%;
        height: 100px;
    }
</style>
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
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/swiper/swiper.min.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/swiper/swiper.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
/js/mui/mui.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
/js/mui/mui.view.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
	mui.init();
	var viewApi = mui('#app').view({
		defaultPage: '#main'
	});
	
	var view = viewApi.view;
	(function($) {
		//初始化单页的区域滚动
		mui('.mui-scroll-wrapper').scroll({
			scrollY: true, //是否竖向滚动
			scrollX: false, //是否横向滚动
			startX: 0, //初始化时滚动至x
			startY: 0, //初始化时滚动至y
			indicators: false, //是否显示滚动条
			deceleration: 0.0006, //阻尼系数,系数越小滑动越灵敏
			// bounce: true //是否启用回弹
		});
		//处理view的后退与webview后退
		var oldBack = $.back;
		$.back = function() {
			if(viewApi.canBack()) { //如果view可以后退，则执行view的后退
				viewApi.back();
			} else { //执行webview后退
				oldBack();
			}
		};
		// 首页安卓手机禁用物理返回键
		if(mui.os.android){
			history.pushState(null, null, location.href);
			window.addEventListener('popstate', function(event) {
				history.pushState(null, null, location.href);
			});
		}
	})(mui);
    $(function() {
    	if(document.getElementById('main')){
			document.getElementById('main').addEventListener('touchmove', function (e) { e.preventDefault();}, {passive: false});
		}
        var myimgswiper = new Swiper('#imgswiper', {
            direction: 'horizontal',
            autoplay: true,
            loop: true
        });
        var mySwiper = new Swiper('#navswiper', {
            direction: 'horizontal',
            pagination: {
                el: '.swiper-pagination',
            }
        });
    });
    marquee("2000", ".sxl .sxlist");
    $(".indexmq_box").each(function(i, arr) {
        arr.addEventListener('tap', function() {
            mui.openWindow({
                url: arr.dataset.href
            });
        }, false)
    }, false);

    $(function() {
        var myimgswiper = new Swiper('#imgswiper_x', {
            direction: 'horizontal',
            autoplay: true,
            loop: true
        });
    });
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
