<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-01 02:00:03
         compiled from "D:\rcw\uploads\app\template\company\white\index.htm" */ ?>
<?php /*%%SmartyHeaderCode:516602815f9da623d8d7f4-71869455%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1960732936677828cd1991ee991d7b25df37d3e4' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\company\\white\\index.htm',
      1 => 1579228121,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '516602815f9da623d8d7f4-71869455',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'keywords' => 0,
    'description' => 0,
    'style' => 0,
    'config' => 0,
    'com_style' => 0,
    'title' => 0,
    'com' => 0,
    'banner' => 0,
    'ComMember' => 0,
    'usertype' => 0,
    'isatn' => 0,
    'uid' => 0,
    'wlist' => 0,
    'num' => 0,
    'pre' => 0,
    'operatime' => 0,
    'jlist' => 0,
    'pagenav' => 0,
    'shows' => 0,
    'row' => 0,
    'NewsList' => 0,
    'ProductList' => 0,
    'city' => 0,
    'city_type' => 0,
    'v' => 0,
    'city_name' => 0,
    'city_index' => 0,
    'industry_index' => 0,
    'industry_name' => 0,
    'keylist' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5f9da623e0e6e5_56952594',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9da623e0e6e5_56952594')) {function content_5f9da623e0e6e5_56952594($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_function_formatpicurl')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.formatpicurl.php';
if (!is_callable('smarty_function_listurl')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.listurl.php';
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta name=keywords content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
<meta name=description content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/css.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
/images/style.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
<!--header头部-->
<div class="header_top">
	<div class="header_cont">
		<?php echo $_smarty_tpl->tpl_vars['com']->value['name'];?>
欢迎您！
		<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
" class="header_cont_home">人才网首页</a>
	</div>
</div>

<div class="">
	<div class="header_bg" >
		<div class="header_banner" >
			 <img  src="<?php if ($_smarty_tpl->tpl_vars['banner']->value['pic']) {
echo $_smarty_tpl->tpl_vars['banner']->value['pic'];
} else {
echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_banner'];
}?>" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_banner'];?>
',2);"> 
     
		</div>
	</div>

	<div class="header_combox">
		<div class="header_combox_cont">
			<div class="header_comlogo"><?php if ($_smarty_tpl->tpl_vars['com']->value['logo']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['com']->value['logo'];?>
" width="90" height="90" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_unit_icon'];?>
',2);" /><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_unit_icon'];?>
" width="185" height="75" /><?php }?></div>
<div class="header_cominfo"> <div class="header_cominfo_top">  <h1 class="header_cominfo_name" style="display:inline-block"><?php echo $_smarty_tpl->tpl_vars['com']->value['name'];?>
</h1>
<div class="header_combox_rz">
<?php if ($_smarty_tpl->tpl_vars['com']->value['email_status']=="1") {?> <img src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
images/rz_yx2.png" alt="邮箱未认证" title="邮箱已认证" class="png" /> <?php } else { ?> <img src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
images/rz_yx.png" alt="邮箱未认证" title="邮箱未认证" class="png" /> <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['com']->value['moblie_status']=="1") {?> <img src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
images/rz_sj2.png" alt="手机未认证" title="手机已认证" class="png" /> <?php } else { ?> <img src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
images/rz_sj.png" alt="手机未认证" title="手机未认证" class="png" /> <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['com']->value['yyzz_status']=="1") {?> <img src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
images/rz_zz2.png" alt="执照未认证" title="执照已认证" class="png" /> <?php } else { ?> <img src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
images/rz_zz.png" alt="执照未认证" title="执照未认证" class="png" /> <?php }?>
        </div>
 <?php if ($_smarty_tpl->tpl_vars['ComMember']->value['source']==6&&$_smarty_tpl->tpl_vars['ComMember']->value['claim']==0&&$_smarty_tpl->tpl_vars['ComMember']->value['email']!='') {?>
        <a href="javascript:claim('<?php echo smarty_function_url(array('m'=>'ajax','c'=>'claim','uid'=>$_smarty_tpl->tpl_vars['com']->value['uid']),$_smarty_tpl);?>
');">认领</a>
        <?php }?>
        <div class="wrap_l_name_p"> <?php if ($_smarty_tpl->tpl_vars['usertype']->value=='1') {?>
          <?php if ($_smarty_tpl->tpl_vars['isatn']->value['id']) {?> <a href="javascript:void(0)" onclick="atn('<?php echo $_smarty_tpl->tpl_vars['com']->value['uid'];?>
','<?php echo smarty_function_url(array('m'=>'ajax','c'=>'atncompany'),$_smarty_tpl);?>
')" id='atn_<?php echo $_smarty_tpl->tpl_vars['com']->value['uid'];?>
' class="wrap_l_name_gz">取消关注</a> <?php } else { ?> <a href="javascript:void(0)" onclick="atn('<?php echo $_smarty_tpl->tpl_vars['com']->value['uid'];?>
','<?php echo smarty_function_url(array('m'=>'ajax','c'=>'atncompany'),$_smarty_tpl);?>
')" id='atn_<?php echo $_smarty_tpl->tpl_vars['com']->value['uid'];?>
' class="wrap_l_name_gz">关注</a> <?php }?>
          <?php } else { ?>
            <?php if ($_smarty_tpl->tpl_vars['uid']->value) {?>
             <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_user_change']==1) {?>
               <a href="javascript:void(0);" onclick="layer.msg('请先申请个人用户才能关注', 2, 8)" class="wrap_l_name_gz">关注</a> 
              <?php } else { ?> 
                 <a href="javascript:void(0)" onclick="layer.msg('只有个人用户才能关注', 2,8)" class="wrap_l_name_gz">关注</a> 
             <?php }?>
            <?php } else { ?>
            <a href="javascript:void(0)" onclick="showlogin('1');" class="wrap_l_name_gz">关注</a> 
            <?php }?> 
          <?php }?>
        </div>
        
        </div>
		<?php if ($_smarty_tpl->tpl_vars['com']->value['welfare_n']) {?>
		<div class="com_welfare">
		<?php  $_smarty_tpl->tpl_vars['wlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['wlist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['com']->value['welfare_n']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['wlist']->key => $_smarty_tpl->tpl_vars['wlist']->value) {
$_smarty_tpl->tpl_vars['wlist']->_loop = true;
?> 
		<span class="com_welfare_s"><?php echo $_smarty_tpl->tpl_vars['wlist']->value;?>
</span>
		<?php } ?>
		</div><?php }?>
	</div>
            
            
 <div class="header_comtj"> 
 <ul class="header_comtj_list">
			<li title="该公司在招职位数量">
				<span class="header_comtj_n"><?php echo $_smarty_tpl->tpl_vars['num']->value;?>
个</span>
				<span class="header_comtj_p">招聘职位</span>
                <i class="header_comtj_list_icon"></i>
			</li>
			<li  title="该公司所有职位收到的简历中，在投递后7天内处理完成的简历所占比例">
				<span class="header_comtj_n"><?php echo $_smarty_tpl->tpl_vars['pre']->value;?>
%</span>
				<span class="header_comtj_p">简历及时处理率</span>
                 <i class="header_comtj_list_icon"></i>
                
			</li>
			<li  title="该公司所有职位完成简历处理的平均用时">
				<span class="header_comtj_n"><?php echo $_smarty_tpl->tpl_vars['operatime']->value;?>
</span>
				<span class="header_comtj_p">简历处理用时</span>
                 <i class="header_comtj_list_icon"></i>
			</li>
            <li  title="该公司关注人数">
				<span class="header_comtj_n"><?php echo $_smarty_tpl->tpl_vars['com']->value['ant_num'];?>
人</span>
				<span class="header_comtj_p">关注人数</span>
                 <i class="header_comtj_list_icon"></i>
			</li>
			<li  title="该公司最近一次登录时间">
				<span class="header_comtj_n"><span class="com_show_info_sj_list_n"><?php if ($_smarty_tpl->tpl_vars['ComMember']->value['login_date']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['ComMember']->value['login_date'],"%Y-%m-%d");
} else { ?>未登录 <?php }?></span></span>
				<span class="header_comtj_p">企业最后登录</span>
                
			</li>
		</ul>
          </div>      
</div>


</div>


</div>
<div class="com_cont">
<div class="com_left">

<div class="com_nav"> <ul>
    <li class="c_currer"><a href="<?php echo smarty_function_url(array('m'=>'company','c'=>'show','id'=>$_smarty_tpl->tpl_vars['com']->value['uid']),$_smarty_tpl);?>
">首页</a><i class="c_currer_line"></i></li>
    <li ><a href="#about">公司介绍</a><i class="c_currer_line"></i></li>
	<li><a href="#contact">联系方式</a><i class="c_currer_line"></i></li>
    <li ><a href="#job">招聘职位</a><i class="c_currer_line"></i></li>
    <li ><a href="#show">企业环境</a><i class="c_currer_line"></i></li>
    <li ><a href="#news">企业新闻</a><i class="c_currer_line"></i></li>
    <li ><a href="#product">企业产品</a><i class="c_currer_line"></i></li>
  </ul></div><div class="com_left_pd">
  <div class="com_list">
<div class="com_tit none"  id="companybusiness"><span class="com_tit_s"><i class="com_tit_icon"></i>工商信息</span></div>
   <!----天眼查------->

<div class="business none" id="businessInfo">
	<div class="businessInfo">
		<ul class="basicMsgList clearfix">
		<li><div class="clearfix"><span>统一社会信用代码：</span><em id="creditCode"></em></div></li>
		<li><div class="clearfix"><span>成立日期：</span><em id="estiblishTime"></em></div></li>
		<li><div class="clearfix"><span>组织机构代码：</span><em id="orgNumber"></em></div></li>
		<li><div class="clearfix"><span>经营期限：</span><em id="Time"></em></div></li>
		<li><div class="clearfix"><span>企业类型：</span><em id="companyOrgType"></em></div></li>
		<li><div class="clearfix"><span>登记机关：</span><em id="regInstitute"></em></div></li>
		<li><div class="clearfix"><span>经营状态：</span><em id="regStatus"></em></div></li>
        <li><div class="clearfix"><span>注册资本：</span><em id="regCapital"></em></div></li>
		
		
		</ul>
        <dl class="basicMsgList"><dt>注册地址：</dt><dd id="regLocation"></dd></dl>
		<dl class="basicMsgList mt20"><dt>经营范围：</dt><dd id="businessScope"></dd></dl>
		<div class="qxb clearfix">
		<div class="qxb_tg"><span>以上内容由</span><div class="hxb"><a href="" class="tianyancha" id="tianyancha"  target='_blank'></a></div><span>提供</span></div>
		</div>
	</div>
</div>


<!---------END------>
  <div class="com_list">
  
<div class="com_tit"id="about"><span class="com_tit_s"><i class="com_tit_icon com_tit_iconabout"></i>公司介绍</span></div>
  <div class="com_about">
<?php if ($_smarty_tpl->tpl_vars['com']->value['content']) {?>
<div style="width:100%;height:auto; overflow:hidden" id="com_content" class="company_img_auto">
<?php echo $_smarty_tpl->tpl_vars['com']->value['content'];?>

</div>
<div class="company_show_more none"><a href="javascript:;" onclick="showcc()">查看更多</a></div>

<?php } else { ?><div class="com_msg_no">该企业还没有填写公司简介! </div><?php }?> 
</div>
</div>

	<div class="c_content_recru">
		<div class="com_tit" id="job"><span class="com_tit_s"><i class="com_tit_icon com_tit_iconjob"></i>招聘职位</span></div>
       
   		<!--   职位列表-->
    	<div class="comshow_job" id="company_job_list">
       		<?php if ($_smarty_tpl->tpl_vars['num']->value=='0') {?>
           		<div class="firm_tips_no"> 该企业还没有发布职位信息!</div>
        	<?php } else { ?> 
        	
        		<?php  $_smarty_tpl->tpl_vars['jlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['jlist']->_loop = false;
global $db,$db_config,$config;
		$time = time();
		
		
		//可以做缓存
        $paramer=array("ispage"=>"1","limit"=>"5","item"=>"'jlist'","com_id"=>"'auto.id'","nocache"=>"")
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
               		<div class="firm_post">
                   		<div class="fpc_name">
                  			<a href="<?php echo smarty_function_url(array('m'=>'job','c'=>'comapply','id'=>$_smarty_tpl->tpl_vars['jlist']->value['id']),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['jlist']->value['name'];?>
</a>
               			</div>
             			<div class="firm_post_joblist">
                       		<?php if ($_smarty_tpl->tpl_vars['jlist']->value['job_salary']) {?>
                        		<span class="comshow_job_xz"><i><?php echo $_smarty_tpl->tpl_vars['jlist']->value['job_salary'];?>
</i></span> 
                        	<?php }?> 
                        	<?php if ($_smarty_tpl->tpl_vars['jlist']->value['job_city_two']) {?>
                        		<span class="comshow_job_city"><?php echo $_smarty_tpl->tpl_vars['jlist']->value['job_city_two'];?>
</span>
                        	<?php }?> 
                        	<?php if ($_smarty_tpl->tpl_vars['jlist']->value['job_exp']) {?>
                        		<span class="comshow_job_jy"><?php echo $_smarty_tpl->tpl_vars['jlist']->value['job_exp'];?>
经验</span>
                        	<?php }?> 
                        	<?php if ($_smarty_tpl->tpl_vars['jlist']->value['job_edu']) {?>
                        		<span class="comshow_job_xl"><?php echo $_smarty_tpl->tpl_vars['jlist']->value['job_edu'];?>
学历</span> 
                        	<?php }?>
                     	</div>
                   		<?php if ($_smarty_tpl->tpl_vars['jlist']->value['lastupdate']) {?>
                       		<div class="firm_post_jobtime">更新时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['jlist']->value['lastupdate'],"%Y-%m-%d");?>
</div>
                      	<?php }?>
                     	<a href="<?php echo smarty_function_url(array('m'=>'job','c'=>'comapply','id'=>$_smarty_tpl->tpl_vars['jlist']->value['id']),$_smarty_tpl);?>
" class="firm_post_jobbth">立即查看</a>
                  	</div>
           		<?php } ?> 
             	<?php if ($_smarty_tpl->tpl_vars['pagenav']->value) {?>
                 	<div class="pages" style="margin-top:20px">
                     	<a href="javascript:void(0);" onclick="page('<?php echo $_GET['id'];?>
','1','5','1');">上一页</a>
                    	<a href="javascript:void(0);" onclick="page('<?php echo $_GET['id'];?>
','1','5','2');">下一页</a>
                 	</div>
              	<?php }?> 
        	<?php }?>
    	</div>
	</div>
	<!--   职位列表 end-->
    
    <div class="clear"></div>
    <div class="c_content_envir" id="show">
      	<div class="com_tit"><span class="com_tit_s"><i class="com_tit_icon com_tit_iconhj"></i>企业环境</span></div>
    
       <?php if (!empty($_smarty_tpl->tpl_vars['shows']->value)) {?>
      <div class="c_envir_pic">
        <ul id="layer-pic">
          <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['shows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
          <li style="padding-right:8px; padding-left:8px;"><a href="javascript:void(0);"><img src="<?php echo $_smarty_tpl->tpl_vars['row']->value['picurl'];?>
" lay-src='<?php echo $_smarty_tpl->tpl_vars['row']->value['picurl'];?>
' width="180" height="127"  alt="<?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
"/></a></li>
          <?php } ?>
        </ul>
      </div>  
      <?php } else { ?>
      <div class="com_msg_no">暂无企业环境</div>
      <?php }?>
      <div class="clear"></div>
    </div>	
    <div class="com_tit" id="news"><span class="com_tit_s"><i class="com_tit_icon com_tit_iconnews"></i>企业新闻</span></div>
    
     <?php if (!empty($_smarty_tpl->tpl_vars['NewsList']->value)) {?>
    <div class="com_news"> 
      <ul class="">
        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['NewsList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
        <li>
          <p><a href="<?php echo smarty_function_url(array('m'=>'company','c'=>'newsshow','id'=>$_smarty_tpl->tpl_vars['com']->value['uid'],'nid'=>$_smarty_tpl->tpl_vars['row']->value['id'],'style'=>$_GET['style']),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</a></p>
        </li>
        <?php } ?>
      </ul>
       </div>
       <?php } else { ?>
       <div class="com_msg_no">暂无企业新闻</div>
      <?php }?> 
      
     
     <div class="com_tit" id="product"><span class="com_tit_s"><i class="com_tit_icon com_tit_iconcp"></i>企业产品</span></div>
            <?php if (!empty($_smarty_tpl->tpl_vars['ProductList']->value)) {?>
 
      
  
    <div class="com_cp_list">
      <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ProductList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
      <dl>
        <dt><a href="<?php echo smarty_function_url(array('m'=>'company','c'=>'productshow','id'=>$_smarty_tpl->tpl_vars['com']->value['uid'],'pid'=>$_smarty_tpl->tpl_vars['row']->value['id'],'style'=>$_GET['style']),$_smarty_tpl);?>
"><img src="<?php echo smarty_function_formatpicurl(array('path'=>$_smarty_tpl->tpl_vars['row']->value['pic']),$_smarty_tpl);?>
" width="210" height="140" /></a></dt>
        <dd><a href="<?php echo smarty_function_url(array('m'=>'company','c'=>'productshow','id'=>$_smarty_tpl->tpl_vars['com']->value['uid'],'pid'=>$_smarty_tpl->tpl_vars['row']->value['id'],'style'=>$_GET['style']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</a></dd>
      </dl>
      <?php } ?>
     </div> 
     <?php } else { ?>
     <div class="com_msg_no">暂无企业产品</div>
     <?php }?> 
     
  </div>
      <div class="clear"></div>
<div class="maincenters companysearch_menuBoxs">
      <div id="sortBoxs">
           <div class="com_lb_tit">
          <ul>
            <li class="search_curs" id="typezb" onmousemove="searchtype('zb');">周边招聘</li>
            <li id="typezp" onmousemove="searchtype('zp');">招聘频道</li>
            <li id="typerm" onmousemove="searchtype('rm');">热门搜索</li>
          </ul>
        </div>
        <div class="com_lb_box">
          <!-- 周边招聘 start-->
        <div class="contentBox_conts " id="type_zb">
        <div class="Industry_lists">
			<?php if ($_smarty_tpl->tpl_vars['city']->value['three_cityid']) {?>
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value[$_smarty_tpl->tpl_vars['city']->value['cityid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
				<a href="<?php echo smarty_function_listurl(array('provinceid'=>$_smarty_tpl->tpl_vars['city']->value['provinceid'],'cityid'=>$_smarty_tpl->tpl_vars['city']->value['cityid'],'type'=>'three_cityid','v'=>$_smarty_tpl->tpl_vars['v']->value,'page'=>1),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
招聘</a>
				<?php } ?>
			<?php } elseif ($_smarty_tpl->tpl_vars['city']->value['cityid']) {?>
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value[$_smarty_tpl->tpl_vars['city']->value['provinceid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
				<a href="<?php echo smarty_function_listurl(array('provinceid'=>$_smarty_tpl->tpl_vars['city']->value['provinceid'],'type'=>'cityid','v'=>$_smarty_tpl->tpl_vars['v']->value,'page'=>1),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
招聘</a>
				<?php } ?>
			<?php } else { ?>
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['city_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
				<a href="<?php echo smarty_function_listurl(array('type'=>'provinceid','v'=>$_smarty_tpl->tpl_vars['v']->value,'page'=>1),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
招聘</a>
				<?php } ?>
			<?php }?>
        </div>
        </div>
          <!-- 周边招聘 end-->
          <!-- 招聘频道 start-->
          <div class="contentBox_conts none" id="type_zp" >
           <div class="Industry_lists">
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['industry_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
		<a href="<?php echo smarty_function_listurl(array('type'=>'hy','v'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['industry_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
招聘</a>
		<?php } ?>
              
          </div> </div>
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
          </div> </div>
          <!--   热门搜索 end-->
        </div>
      </div>
    </div>







</div>
</div>
<div class="com_right">
<div class="com_right_box">
<div class="com_tit">基本信息</div>
 <div class="c_nr_hybox">
 <div class="c_nr_hy"><em>行业</em><span><?php echo $_smarty_tpl->tpl_vars['com']->value['hy_info'];?>
</span></div>
              <div class="c_nr_hy"><em>性质</em><span><?php echo $_smarty_tpl->tpl_vars['com']->value['pr_info'];?>
</span></div>
              <div class="c_nr_hy"><em>规模</em><span><?php echo $_smarty_tpl->tpl_vars['com']->value['mun_info'];?>
</span></div>
              <div class="c_nr_hy"><em>地区</em><span><?php echo $_smarty_tpl->tpl_vars['com']->value['provinceid'];?>
</span></div>
          <?php if ($_smarty_tpl->tpl_vars['com']->value['money']) {?><div class="c_nr_hy"><em>注资</em><?php echo $_smarty_tpl->tpl_vars['com']->value['money'];
if ($_smarty_tpl->tpl_vars['com']->value['moneytype']==1) {?>万元<?php } else { ?>万美元<?php }?></div><?php }?>
          <?php if ($_smarty_tpl->tpl_vars['com']->value['sdate']) {?><div class="c_nr_hy"><em>创办</em><?php echo $_smarty_tpl->tpl_vars['com']->value['sdate'];?>
</div><?php }?>
</div>

<div class="com_tit" id="contact" data-slide='2'>联系方式</div>



     <?php if ($_smarty_tpl->tpl_vars['link']->value['errorcode']=="9") {?>
		  <div class="firm_det_link"> 
		  <?php if ($_smarty_tpl->tpl_vars['com']->value['linkman']) {?><span class="firm_mes1">联 &nbsp;系&nbsp;人：<i> <em class="JoB_material_right JoB_material_line"><?php echo $_smarty_tpl->tpl_vars['com']->value['linkman'];?>
</em> </i></span><?php }?>
		  <?php if ($_smarty_tpl->tpl_vars['com']->value['linkjob']) {?><span class="firm_mes1">联系人职位：<i> <em class="JoB_material_right JoB_material_line"><?php echo $_smarty_tpl->tpl_vars['com']->value['linkjob'];?>
</em> </i></span><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['com']->value['linkphone']) {?> <span class="firm_mes1">固定电话：<i><?php echo $_smarty_tpl->tpl_vars['com']->value['linkphone'];?>
</i></span> <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['com']->value['linktel']) {?> <span class="firm_mes1">联系电话：<i> <em class="JoB_material_right JoB_material_line"><?php echo $_smarty_tpl->tpl_vars['com']->value['linktel'];?>
</em> </i></span> <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['com']->value['linkmail']) {?> <span class="firm_mes1">联系邮件：<i><?php echo $_smarty_tpl->tpl_vars['com']->value['linkmail'];?>
</i></span> <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['com']->value['linkqq']) {?> <span class="firm_mes1">联 系 QQ：<i><?php echo $_smarty_tpl->tpl_vars['com']->value['linkqq'];?>
</i></span> <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['com']->value['zip']) {?> <span class="firm_mes1">邮政编码：<i><?php echo $_smarty_tpl->tpl_vars['com']->value['zip'];?>
</i></span> <?php }?>        
          <?php if ($_smarty_tpl->tpl_vars['com']->value['website']) {?> <span class="firm_mes1">企业网址：<i><?php echo $_smarty_tpl->tpl_vars['com']->value['website'];?>
</i></span> <?php }?>
           <?php if ($_smarty_tpl->tpl_vars['com']->value['busstops']) {?> <span class="firm_mes1" style="width:100%;">公交站点：<i><?php echo $_smarty_tpl->tpl_vars['com']->value['busstops'];?>
</i></span> <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['com']->value['address']) {?> <span class="firm_mes1" style="width:100%;">公司地址：<i><?php echo $_smarty_tpl->tpl_vars['com']->value['address'];?>
</i></span> <?php }?> 
           <?php if ($_smarty_tpl->tpl_vars['com']->value['comqcode']) {?> 
           <div class="com_wx" >
           
           <img src="<?php echo $_smarty_tpl->tpl_vars['com']->value['comqcode'];?>
" width="120" height="120">
         <div class="">企业微信</div>
          </div> <?php }?> 
           </div>
           <?php } else { ?>
            <?php if ($_smarty_tpl->tpl_vars['link']->value['errorcode']==1||$_smarty_tpl->tpl_vars['link']->value['errorcode']==2||$_smarty_tpl->tpl_vars['link']->value['errorcode']==6||$_smarty_tpl->tpl_vars['link']->value['errorcode']==5) {?> 
            <div class="firm_login">
        <div class="firm_login_con"> <span><?php echo $_smarty_tpl->tpl_vars['link']->value['msg'];?>
</span> </div>
      </div>
           <?php } elseif ($_smarty_tpl->tpl_vars['link']->value['errorcode']=="4") {?> 
             <div class="firm_login">
        <div class="firm_login_con"> <span><?php echo $_smarty_tpl->tpl_vars['link']->value['msg'];?>
</span>
		<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=expect&act=add" class="firm_login_zc">创建简历</a> </div>
      	</div>
        <?php } elseif ($_smarty_tpl->tpl_vars['link']->value['errorcode']=="3") {?> 
      <div class="firm_login">
        <div class="firm_login_con"> <div><span><?php echo $_smarty_tpl->tpl_vars['link']->value['msg'];?>
</span></div> 请您先 <a class="firm_login_dl" href="javascript:void(0);" onclick="showlogin('1');">登录</a> or <a class="firm_login_zc" href="<?php echo smarty_function_url(array('m'=>'register'),$_smarty_tpl);?>
">注册</a>
		</div>
      </div>
    <?php }?>
		<?php if ($_smarty_tpl->tpl_vars['com']->value['address']) {?>
		<div class="firm_det_link" style="padding:0px 0;">
			<span class="firm_mes1" style="width:100%;">公司地址：<i><?php echo $_smarty_tpl->tpl_vars['com']->value['address'];?>
</i></span>
		</div>
		<?php }?>
          <?php }?>
      </div>
      
      


<div class="clear"></div>
<div class="com_right_box">
<div class="com_tit">分享到朋友圈</div>
<div class="clear"></div>
       <div class="wx_share_fx">
        <div class="wx_share_fx_img"><img src="<?php echo smarty_function_url(array('m'=>'ajax','c'=>'pubqrcode','toc'=>'company','toa'=>'show','toid'=>$_smarty_tpl->tpl_vars['com']->value['uid']),$_smarty_tpl);?>
" width="120" height="120"></div>
        <div class="wx_share_fx_p">分享到朋友圈</div>
        </div>
</div>
</div>
</div>


<!--内容结束-->
<div class="clear"></div>
<?php echo '<script'; ?>
>
var weburl="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
",integral_pricename='<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
',pricename='<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
',code_web='<?php echo $_smarty_tpl->tpl_vars['config']->value['code_web'];?>
',code_kind='<?php echo $_smarty_tpl->tpl_vars['config']->value['code_kind'];?>
';<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<link href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/css/layui.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" /><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/layui.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/phpyun_layer.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/js/ScrollPic.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
layui.use(['layer'], function() {
	var layer = layui.layer,
		$ = layui.$;
});
<!--//--><![CDATA[//><!--
var li_num=$("#layer-pic li").length;
if(li_num>3){//如果图片数量不足，就不执行切换
	var scrollPic_02 = new ScrollPic();
	scrollPic_02.scrollContId   = "layer-pic"; //内容容器ID
	scrollPic_02.arrLeftId      = "LeftArr";//左箭头ID
	scrollPic_02.arrRightId     = "RightArr"; //右箭头ID
	scrollPic_02.frameWidth     = 710;//显示框宽度
	scrollPic_02.pageWidth      = 196; //翻页宽度
	scrollPic_02.speed          = 10; //移动速度(单位毫秒，越小越快)
	scrollPic_02.space          = 10; //每次移动像素(单位px，越大越快)
	scrollPic_02.autoPlay       = true; //自动播放
	scrollPic_02.autoPlayTime   = 2; //自动播放间隔时间(秒)
	scrollPic_02.initialize(); //初始化
}
//--><!]]> 
$(function () {
	tianyancha('<?php echo smarty_function_url(array('m'=>'ajax','c'=>'getbusiness'),$_smarty_tpl);?>
','<?php echo $_smarty_tpl->tpl_vars['com']->value['name'];?>
');
	$('.c_top_daoh li').click(function () {
		$(this).addClass('c_currer').siblings().removeClass('c_currer');
	});
	$(".c_recru_list").find("li").hover(function () {
		var aid = $(this).attr("aid");
		$("#y" + aid).addClass("c_list_curre");
	}, function () {
		var aid = $(this).attr("aid");
		$("#y" + aid).removeClass("c_list_curre");
	});
	
	setTimeout(function(){
		layer.photos({
			photos: '#layer-pic',
			anim: 5
		});
	},1000);
	$.post('<?php echo smarty_function_url(array('m'=>'ajax','c'=>'getbusiness'),$_smarty_tpl);?>
',{name:'<?php echo $_smarty_tpl->tpl_vars['com']->value['name'];?>
'},function(data){
		if(data){
			var business = eval('('+data+')');
			$('#creditCode').html(business.creditCode);
			$('#estiblishTime').html(business.estiblishTime);
			$('#orgNumber').html(business.orgNumber);
			$('#Time').html(business.fromTime+'至'+business.toTime);
			$('#companyOrgType').html(business.companyOrgType);
			$('#regInstitute').html(business.regInstitute);
			$('#regStatus').html(business.regStatus);
			$('#regLocation').html(business.regLocation);
			$('#regCapital').html(business.regCapital);
			$('#businessScope').html(business.businessScope);
			$('#tianyancha').attr('href','https://www.tianyancha.com/company/'+business.companyId);
			$('#businessInfo').show();
		}
	})
	var cheight=$("#com_content").height();
	if(parseInt(cheight)>270){
	    $("#com_content").attr('style','width:100%;height:270px; overflow:hidden');
		$(".company_show_more").show();
	}
});
function showcc(){
    $("#com_content").attr('style','width:100%;height:auto; overflow:hidden');
	$(".company_show_more").find('a').html('收起');
	$(".company_show_more").find('a').attr('onclick','hidecc()');
}
function hidecc(){
    $("#com_content").attr('style','width:100%;height:270px; overflow:hidden');
	$(".company_show_more").find('a').html('查看更多');
	$(".company_show_more").find('a').attr('onclick','showcc()');
}
function page(id, page, limit, updown) {
	if(page < 1) {
		page == 1;
	}
	loadlayer();
	$.ajax({
		type: "POST",
		global: false,
		url: "<?php echo smarty_function_url(array('m'=>'company','c'=>'prestr'),$_smarty_tpl);?>
",
		data: {
			id: id,
			page: page,
			limit: limit,
			updown: updown,
			style: 1
		},
		success: function(data) {
			layer.closeAll('loading');
			var data = eval("(" + data + ")");
			if(data.num < 0) {
				var $html = '<div class="firm_tips_no"> 该企业还没有发布职位信息!</div>'
			} else {
				var $html = data.joblist;
			}
			$("#company_job_list").html($html);
		}
	});
}
function searchtype(id){
	$(".search_curs").removeClass("search_curs");
	$("#type"+id).addClass("search_curs");
	$(".contentBox_conts").hide();
	$("#type_"+id).show();
}
$(document).ready(function(){
	$(".department_a").click(function() {
		$(".department_a").removeClass('department_a_cur');
		$(this).addClass('department_a_cur');
		var departmentName=$(this).attr('data-name');
		var comuid=$(this).attr('data-uid');
		var style=$(this).attr('data-style');
		var html='';
		$.ajax({
			url: "<?php echo smarty_function_url(array('m'=>'company','c'=>'departmentjob'),$_smarty_tpl);?>
",
			data:{comuid:comuid,departmentName:departmentName,style:style},
			type:'POST',
			success:function(data){
				$('#company_job_list').html(data);
			}	
		});
	});
});
<?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/public_search/login.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--底部footer--> 
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
