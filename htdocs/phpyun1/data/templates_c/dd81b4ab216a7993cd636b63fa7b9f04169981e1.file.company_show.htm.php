<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-07 13:38:30
         compiled from "D:\rcw\uploads\app\template\wap\company_show.htm" */ ?>
<?php /*%%SmartyHeaderCode:1083528685fa632d61ae224-04338278%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd81b4ab216a7993cd636b63fa7b9f04169981e1' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\wap\\company_show.htm',
      1 => 1578624856,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1083528685fa632d61ae224-04338278',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'usertype' => 0,
    'isatn' => 0,
    'row' => 0,
    'config' => 0,
    'comrat' => 0,
    'industry_name' => 0,
    'waflist' => 0,
    'mapx' => 0,
    'mapy' => 0,
    'city_name' => 0,
    'comclass_name' => 0,
    'show' => 0,
    'v' => 0,
    'wap_style' => 0,
    'link' => 0,
    'job_list' => 0,
    'typename' => 0,
    'username' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fa632d6217784_66905432',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fa632d6217784_66905432')) {function content_5fa632d6217784_66905432($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
?> <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/header_cont.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="header_navlist">
    <a href="javascript:void(0);" class="moreOptions"><i class="naviconfont"></i></a>
</div>
<style>
    .img_auto img {
        max-width: 100%;
    }
	
</style>
<div class="yun_newedition_jobshow_opt">
<?php if ($_smarty_tpl->tpl_vars['usertype']->value=='1') {?> 
	<?php if ($_smarty_tpl->tpl_vars['isatn']->value['id']) {?>
		<span class="  atn_<?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
"><a href="javascript:void(0)" onclick="atn('<?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
','<?php echo smarty_function_url(array('m'=>'wap','c'=>'ajax','a'=>'atncompany'),$_smarty_tpl);?>
')" id='atn_<?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
' class=" yun_newedition_jobshow_opt_icon yun_newedition_jobshow_opt_gzqx"></a> </span> 
	<?php } else { ?>
		<span class=" atn_<?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
"><a href="javascript:void(0)" onclick="atn('<?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
','<?php echo smarty_function_url(array('m'=>'wap','c'=>'ajax','a'=>'atncompany'),$_smarty_tpl);?>
')" id='atn_<?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
' class="yun_newedition_jobshow_opt_icon yun_newedition_jobshow_opt_gz"title="关注"></a> </span> 
	<?php }?> 
<?php } else { ?>
	<?php if ($_smarty_tpl->tpl_vars['usertype']->value) {?> 
		<a href="javascript:void(0)" class="yun_newedition_jobshow_opt_icon yun_newedition_jobshow_opt_gz"title="关注" <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_user_change']==1) {?>onclick="layermsg('请先申请个人账户');"<?php } else { ?>onclick="layermsg('只有个人用户才能关注');"<?php }?>></a>
	<?php } else { ?>
		<a href="javascript:void(0)" class="yun_newedition_jobshow_opt_icon yun_newedition_jobshow_opt_gz"title="关注" onclick="pleaselogin('您还未登录个人账号，是否登录？','<?php echo smarty_function_url(array('m'=>'wap','c'=>'login'),$_smarty_tpl);?>
')"></a>
	<?php }?>
<?php }?> 

<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_h5_share']==1) {?>
    <a href="javascript:void(0);" data-url='<?php echo smarty_function_url(array('m'=>'wap','c'=>'company','a'=>'share','id'=>$_smarty_tpl->tpl_vars['row']->value['uid']),$_smarty_tpl);?>
'  id="shareClick" class="yun_newedition_jobshow_opt_icon yun_newedition_jobshow_opt_fx" title="分享"></a>
<?php } else { ?>
    <a href="javascript:void(0);" class="yun_newedition_jobshow_opt_icon yun_newedition_jobshow_opt_fx" id="shareClick" style="float:right;color:#fff;margin:-2px 25px 0px 0px;" title="分享"></a>
<?php }?>
</div>
<section>
    <div class="company_info">

        <div class="company_info_logo muipreview">
        <div class="company_info_logo_c">
            <img class="avatar" src="<?php echo $_smarty_tpl->tpl_vars['row']->value['logo'];?>
" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_unit_icon'];?>
',2);">
              <?php if ($_smarty_tpl->tpl_vars['row']->value['hotlogo']==1) {?><i class="company_mq_icon">名企</i> <?php }?>
              
        </div>
    </div> </div>

    <div class="company_cominfo">
        <div class="company_infonname"><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>

          <?php if ($_smarty_tpl->tpl_vars['comrat']->value['com_pic']!="0"&&$_smarty_tpl->tpl_vars['comrat']->value['com_pic']!='') {?><img src="<?php echo $_smarty_tpl->tpl_vars['comrat']->value['com_pic'];?>
" /> <?php }?> <?php if ($_smarty_tpl->tpl_vars['row']->value['yyzz_status']=='1') {?><i class="job_qy_rz_icon"></i><?php }?>
        </div>
				 
        <div class="yun_newedition_comshow_info_hy"><?php echo $_smarty_tpl->tpl_vars['industry_name']->value[$_smarty_tpl->tpl_vars['row']->value['hy']];?>
</div>

    </div>
</section>

     <?php if ($_smarty_tpl->tpl_vars['row']->value['welfare_n']) {?> 
   <div class="yun_newedition_jobshow_content">    
   <div class="yun_newedition_showtit">公司福利</div>
        <div class="com_show_fl" style="padding-top:15px;">
            <?php  $_smarty_tpl->tpl_vars['waflist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['waflist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['row']->value['welfare_n']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['waflist']->key => $_smarty_tpl->tpl_vars['waflist']->value) {
$_smarty_tpl->tpl_vars['waflist']->_loop = true;
?>
            <span class="com_show_fl_s"><?php echo $_smarty_tpl->tpl_vars['waflist']->value;?>
</span><?php } ?>
        </div>      </div>
        <?php }?>
    <div class="yun_newedition_jobshow_content">


<div class="yun_newedition_showtit">公司地址</div>

<?php if ($_smarty_tpl->tpl_vars['row']->value['address']) {?>

    <?php if ($_smarty_tpl->tpl_vars['row']->value['x']&&$_smarty_tpl->tpl_vars['row']->value['y']) {?>
     <div class="yun_newedition_show_jobaddressbox">
        <a class="yun_newedition_show_jobaddress" href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','a'=>'jobmap','id'=>$_smarty_tpl->tpl_vars['row']->value['uid']),$_smarty_tpl);?>
">
<span class="yun_newedition_show_jobprimary">距离 <em id="distance"></em></span>
<?php echo $_smarty_tpl->tpl_vars['row']->value['address'];?>

</a>        </div> 

    <input type="hidden" id="map_x" value="<?php echo $_smarty_tpl->tpl_vars['mapx']->value;?>
" />
    <input type="hidden" id="map_y" value="<?php echo $_smarty_tpl->tpl_vars['mapy']->value;?>
" /> 
	<?php } else { ?>
       <div class="yun_newedition_show_jobaddressbox" style="padding-top:18px;"><?php echo $_smarty_tpl->tpl_vars['row']->value['address'];?>
 </div>
	<?php }?>

<?php }?>

        <div class="" id='content'>
    <div class="yun_newedition_showtit">公司简介</div>
    <div class="yun_newedition_comshow_info">
 <?php if ($_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['row']->value['provinceid']]) {
echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['row']->value['provinceid']];
if ($_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['row']->value['cityid']]) {?>/<?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['row']->value['cityid']];
}?><i class="yun_newedition_jobline"></i><?php }?> <?php if ($_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['row']->value['pr']]) {
echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['row']->value['pr']];?>
<i class="yun_newedition_jobline"></i><?php }?> <?php if ($_smarty_tpl->tpl_vars['row']->value['money']!=0) {
echo $_smarty_tpl->tpl_vars['row']->value['money'];
if ($_smarty_tpl->tpl_vars['row']->value['moneytype']==1) {?>万元<?php } else { ?>万美元<?php }?><i class="yun_newedition_jobline"></i><?php }
if ($_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['row']->value['mun']]) {
echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['row']->value['mun']];
}?>
</div>
<?php if ($_smarty_tpl->tpl_vars['show']->value) {?>
<div class="swiper_banner" style=" text-align:center; margin-top:15px;">
	<div class="swiper-container" id="imgswiper">
		<div class="swiper-wrapper">
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['show']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
		<div class="swiper-slide">
			<img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
" style="max-width:100%;height:160px;" />
		</div>
		<?php } ?>
		</div>
	</div>
</div>
<?php }?>

      <div class="yun_newedition_comshow_js">  
       
      <?php if ($_smarty_tpl->tpl_vars['row']->value['content']) {?>
      <div style="width:100%;height:auto; overflow:hidden" id="com_content" class="img_auto">
      <?php echo $_smarty_tpl->tpl_vars['row']->value['content'];?>

      </div>
      <div class="com_show_cont none"><a href="javascript:;" onclick="showcc()">展开全部</a></div>
      <?php } else { ?> 
      <div class="evaluate_pj_no"><i class="evaluate_pj_no_icon"></i>该企业还没有填写公司简介! </div>      
      <?php }?> 
      
       </div>
     </div> 
     
	     </div> 

<section>
    <div class="yun_newedition_jobshow_content  none" id="businessInfo">
        <div class="yun_newedition_showtit">工商信息</div>
        <div class="com_new_contnet_box ">
       

            <!----天眼查------->

            <div class="business">
                <div class="businessInfo">
                    <ul class="basicMsgList clearfix" style="line-height:30px;height:275px; overflow:hidden" id="com_business">
                        <li>
                            <div class="clearfix"><span>统一社会信用代码：</span><em id="creditCode"></em></div>
                        </li>
                        <li>
                            <div class="clearfix"><span>成立日期：</span><em id="estiblishTime"></em></div>
                        </li>
                        <li>
                            <div class="clearfix"><span>组织机构代码：</span><em id="orgNumber"></em></div>
                        </li>
                        <li>
                            <div class="clearfix"><span>经营期限：</span><em id="Time"></em></div>
                        </li>
                        <li>
                            <div class="clearfix"><span>企业类型：</span><em id="companyOrgType"></em></div>
                        </li>
                        <li>
                            <div class="clearfix"><span>登记机关：</span><em id="regInstitute"></em></div>
                        </li>
                        <li>
                            <div class="clearfix"><span>经营状态：</span><em id="regStatus"></em></div>
                        </li>
                        <li>
                            <div class="clearfix"><span>注册资本：</span><em id="regCapital"></em></div>
                        </li>
                        <li>
                            <div class="clearfix"><span>注册地址：</span><em id="regLocation"></em></div>
                        </li>
						<li>
							<div class="clearfix"><span>经营范围：</span><em id="businessScope"></em></div>
						</li>
                    </ul>
					<div class="qxb clearfix">
						<div class="qxb_tg" style="background:#fafafa; padding:5px 10px ; text-align:center"><span>以上内容由</span> <span class="hxb"><a href="" class="tianyancha" id="tianyancha" target='_blank'><img src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/images/tycc.png" height="30" style="vertical-align:middle"></a> </span> <span>提供</span></div>
					</div>
				</div>
				<div class="on-off" style="background:#f8f8f8; padding:5px 10px ;text-align: center"><a href="javascript:void(0);" onclick="showbb()">展开信息</a></div>
			</div>
			<!---------END------>
        </div>
  </div>
</section>  




<section id='tel'>
    
    <div class="yun_newedition_jobshow_content">
    
		<div class="yun_newedition_showtit">联系方式</div>
    
       	<?php if ($_smarty_tpl->tpl_vars['link']->value['errorcode']=="9") {?>
		   	<ul class="com_post_msg com_post_msg_touch ">
			
				<?php if ($_smarty_tpl->tpl_vars['row']->value['linkman']) {?>
				<li><i class="com_post_msg_touch_icon iconfont_jobshow_teluser"></i>联&nbsp;系&nbsp;人：<?php echo $_smarty_tpl->tpl_vars['row']->value['linkman'];
if ($_smarty_tpl->tpl_vars['row']->value['linkjob']) {?><em class="com_post_msg_zw">( <?php echo $_smarty_tpl->tpl_vars['row']->value['linkjob'];?>
 )</em><?php }?></li>
				<?php }?> 
				
				<?php if ($_smarty_tpl->tpl_vars['row']->value['linktel']) {?>
				<li class="com_post_msg_tel"><i class="com_post_msg_touch_icon iconfont_jobshow_telip"></i>联系手机：
					<a href="tel:<?php echo $_smarty_tpl->tpl_vars['row']->value['linktel'];?>
" class="com_post_msg_tel_n"><?php echo $_smarty_tpl->tpl_vars['row']->value['linktel'];?>
<span class="com_post_tel_bd"><i class="com_post_sj iconfont"></i>  <div class="com_post_tel_bd_p">拨打</div></span></a>
				</li>
				<?php }?>
				 
				<?php if ($_smarty_tpl->tpl_vars['row']->value['linkphone']) {?>
				<li class="com_post_msg_tel"><i class="com_post_msg_touch_icon iconfont_jobshow_tel"></i>联系电话：
					<a href="tel:<?php echo $_smarty_tpl->tpl_vars['row']->value['linkphone'];?>
" class="com_post_msg_tel_n"><?php echo $_smarty_tpl->tpl_vars['row']->value['linkphone'];?>
<span class="com_post_tel_bd"><i class="com_post_zx iconfont"></i>  <div class="com_post_tel_bd_p">拨打</div></span></a>
				</li>
				<?php }?> 
				
				<?php if ($_smarty_tpl->tpl_vars['row']->value['busstops']) {?>
				<li><i class="com_post_msg_touch_icon iconfont_jobshow_bus"></i>公交站点：</span><?php echo $_smarty_tpl->tpl_vars['row']->value['busstops'];?>
</li>
				<?php }?>
			
			</ul>
		<?php } else { ?> 
		
			<?php if ($_smarty_tpl->tpl_vars['link']->value['errorcode']==1||$_smarty_tpl->tpl_vars['link']->value['errorcode']==2||$_smarty_tpl->tpl_vars['link']->value['errorcode']==5||$_smarty_tpl->tpl_vars['link']->value['errorcode']==6) {?>
		
				<div class="com_post_login"> <i class="com_post_tel iconfont"></i><?php echo $_smarty_tpl->tpl_vars['link']->value['msg'];?>
 </div>
				
			<?php } elseif ($_smarty_tpl->tpl_vars['link']->value['errorcode']==3) {?> 
				<div class=" ">
					<div class="com_post_login com_post_login_no">
						<div class="com_post_login_no_tip"><span class=""><?php echo $_smarty_tpl->tpl_vars['link']->value['msg'];?>
</span>
						</div>
						<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'login'),$_smarty_tpl);?>
" class="com_s_logoin">登录</a>
						<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'register'),$_smarty_tpl);?>
" class="com_s_reg">注册</a>
					</div>
				</div>
			<?php } elseif ($_smarty_tpl->tpl_vars['link']->value['errorcode']==4) {?>
				<div class="com_post_login"> <i class="com_post_tel iconfont"></i><?php echo $_smarty_tpl->tpl_vars['link']->value['msg'];?>
 </div>
				<div class="company_tit_p_touch_l_c">
					<a href="<?php echo smarty_function_url(array('m'=>'wap'),$_smarty_tpl);?>
member/index.php?c=addresume" class="company_tit_p_touch_log">创建简历</a>
				</div>
			<?php }?> 
			
		<?php }?>
	</div>

</section>


<section id="job">
    <div class="yun_newedition_jobshow_content">
		<div class="yun_newedition_showtit">在招职位</div>
		
		<div style="padding-top:10px;" id="company_job_list">
            <?php $_smarty_tpl->tpl_vars['uid'] = new Smarty_variable($_smarty_tpl->tpl_vars['row']->value['uid'], null, 0);?> 
            <?php  $_smarty_tpl->tpl_vars['job_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['job_list']->_loop = false;
global $db,$db_config,$config;
		$time = time();
		
		
		//可以做缓存
        $paramer=array("namelen"=>"8","comlen"=>"12","ispage"=>"0","uid"=>"'@row.uid'","com_id"=>"'auto.id'","islt"=>"4","item"=>"'job_list'","name"=>"'joblist1'","nocache"=>"")
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
		 
		$job_list = $db->select_all("company_job",$where.$limit);

		if(is_array($job_list) && !empty($job_list)){
			//处理类别字段
			$cache_array = $db->cacheget();
			$comuid=$jobid=array();
			foreach($job_list as $key=>$value){
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
			foreach($job_list as $key=>$value){

				if($paramer[bid]){
					$noids[] = $value[id];
				}
				//筛除重复
				if($paramer[noids]==1 && !empty($noids) && in_array($value['id'],$noids)){
					unset($job_list[$key]);
					continue;
				}else{
					$job_list[$key] = $db->array_action($value,$cache_array);
					$job_list[$key][stime] = date("Y-m-d",$value[sdate]);
					$job_list[$key][etime] = date("Y-m-d",$value[edate]);
					if($arr_data['sex'][$value['sex']]){
						$job_list[$key][sex_n]=$arr_data['sex'][$value['sex']];
					}
					$job_list[$key][lastupdate] = date("Y-m-d",$value[lastupdate]);
					if($value[minsalary]&&$value[maxsalary]){
						$job_list[$key][job_salary] =$value[minsalary]."-".$value[maxsalary];
					}elseif($value[minsalary]){
						$job_list[$key][job_salary] =$value[minsalary]."以上";
					}else{
						$job_list[$key][job_salary] ="面议";
					}
					if($r_uid[$value['uid']][shortname]){
						$job_list[$key][com_name] =$r_uid[$value['uid']][shortname];
					}
					$job_list[$key][yyzz_status] =$r_uid[$value['uid']][yyzz_status];
					$job_list[$key][logo] =$r_uid[$value['uid']][logo];
					$job_list[$key][pr_n] =$r_uid[$value['uid']][pr_n];
					$job_list[$key][hy_n] =$r_uid[$value['uid']][hy_n];
					$job_list[$key][mun_n] =$r_uid[$value['uid']][mun_n];
					$job_list[$key][hotlogo] =$r_uid[$value['uid']][hotlogo];
					$time=$value['lastupdate'];
					//今天开始时间戳
					$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
					//昨天开始时间戳
					$beginYesterday=mktime(0,0,0,date('m'),date('d')-1,date('Y'));
					//一周内时间戳
					$week=strtotime(date("Y-m-d",strtotime("-1 week")));
					if($time>$week && $time<$beginYesterday){
						$job_list[$key]['time'] ="一周内";
					}elseif($time>$beginYesterday && $time<$beginToday){
						$job_list[$key]['time'] ="昨天";
					}elseif($time>$beginToday){	
						$job_list[$key]['time'] = date("H:i",$value['lastupdate']);
						$job_list[$key]['redtime'] =1;
					}else{
						$job_list[$key]['time'] = date("Y-m-d",$value['lastupdate']);
					}
    
                     // 前天
    				$beforeYesterday=mktime(0,0,0,date('m'),date('d')-2,date('Y'));

					if($value['sdate']>$beforeYesterday){
						$job_list[$key]['newtime'] =1;
					}
					//获得福利待遇名称
					if($value[welfare]){
						$welfareList = @explode(',',$value[welfare]);

						if(!empty($welfareList)){
							$job_list[$key][welfarename] =$welfareList;
						}
					}
					//截取公司名称
					if($paramer[comlen]){
						if($r_uid[$value['uid']][shortname]){
							$job_list[$key][com_n] = mb_substr($r_uid[$value['uid']][shortname],0,$paramer[comlen],"utf-8");
						}else{
							$job_list[$key][com_n] = mb_substr($value['com_name'],0,$paramer[comlen],"utf-8");
						}
					}
					//截取职位名称
					if($paramer[namelen]){
						if($value['rec_time']>time()){
							$job_list[$key][name_n] = "<font color='red'>".mb_substr($value['name'],0,$paramer[namelen],"utf-8")."</font>";
						}else{
							$job_list[$key][name_n] = mb_substr($value['name'],0,$paramer[namelen],"utf-8");
						}
					}else{
						if($value['rec_time']>time()){
							$job_list[$key]['name_n'] = "<font color='red'>".$value['name']."</font>";
						}
					}
					//构建职位伪静态URL
					$job_list[$key][job_url] = Url("job",array("c"=>"comapply","id"=>$value[id]),"1");
					//构建企业伪静态URL
					$job_list[$key][com_url] = Url("company",array("c"=>"show","id"=>$value[uid]));
					
					foreach($comrat as $k=>$v){
						if($value[rating]==$v[id]){
							$job_list[$key][color] = str_replace("#","",$v[com_color]);
							if($v[com_pic]){
								$job_list[$key][ratlogo] = checkpic($v[com_pic]);
							}
							$job_list[$key][ratname] = $v[name];
						}
					}
					if($paramer[keyword]){
						$job_list[$key][name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[name]);
						$job_list[$key][com_name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[com_name]);
						$job_list[$key][name_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$job_list[$key][name_n]);
						$job_list[$key][com_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$job_list[$key][com_n]);
						$job_list[$key][job_city_one]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[provinceid]]);
						$job_list[$key][job_city_two]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[cityid]]);
					}
				}
			}
			if(is_array($job_list)){
				if($paramer[keyword]!=""&&!empty($job_list)){
					addkeywords('3',$paramer[keyword]);
				}
			}
		}$job_list = $job_list; if (!is_array($job_list) && !is_object($job_list)) { settype($job_list, 'array');}
foreach ($job_list as $_smarty_tpl->tpl_vars['job_list']->key => $_smarty_tpl->tpl_vars['job_list']->value) {
$_smarty_tpl->tpl_vars['job_list']->_loop = true;
?>
            <div class="index_newedition_job_list" style="padding:15px 0px;border-bottom:1px solid #eee; margin-top:0px">
				<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','a'=>'comapply','id'=>$_smarty_tpl->tpl_vars['job_list']->value['id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['job_list']->value['name'];?>
">
					<h3 class="index_newedition_jobname"><?php echo $_smarty_tpl->tpl_vars['job_list']->value['name_n'];?>
</h3>
					<div class="yun_newedition_jobinfo"><?php echo $_smarty_tpl->tpl_vars['job_list']->value['job_city_one'];?>
-<?php echo $_smarty_tpl->tpl_vars['job_list']->value['job_city_two'];
if ($_smarty_tpl->tpl_vars['job_list']->value['job_exp']) {?><i class="yun_newedition_jobline"></i><?php echo $_smarty_tpl->tpl_vars['job_list']->value['job_exp'];?>
经验 <?php }
if ($_smarty_tpl->tpl_vars['job_list']->value['job_edu']) {?><i class="yun_newedition_jobline"></i><?php echo $_smarty_tpl->tpl_vars['job_list']->value['job_edu'];?>
学历<?php }?>
						<div class="yun_index_jobemergency_tg" style="right:0">
							<?php if ($_smarty_tpl->tpl_vars['job_list']->value['urgent_time']>time()) {?><span class="yun_index_jobemergency">急聘</span><?php }?>
							<?php if ($_smarty_tpl->tpl_vars['job_list']->value['rec']=='1'&&$_smarty_tpl->tpl_vars['job_list']->value['rec_time']>time()) {?><span class="yun_index_hot">推荐</span><?php }?>
						</div>
					</div>
					<span class="index_newedition_jobxz" style="right:0"><?php if ($_smarty_tpl->tpl_vars['job_list']->value['job_salary']!='面议') {?>￥<?php echo $_smarty_tpl->tpl_vars['job_list']->value['job_salary'];
} else { ?>面议<?php }?></span>
					<div style="font-size:12px; padding-top:5px;"><?php if ($_smarty_tpl->tpl_vars['job_list']->value['time']=='今天'||$_smarty_tpl->tpl_vars['job_list']->value['time']=='昨天') {?> <span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['job_list']->value['time'];?>
</span> <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['job_list']->value['time'];?>
 <?php }?>更新</div>
				</a>
			</div>
            <?php }
if (!$_smarty_tpl->tpl_vars['job_list']->_loop) {
?>
            <div class="evaluate_pj_no"><i class="evaluate_pj_no_icon"></i>该企业还没有发布职位信息! </div>
            <?php } ?>
        </div>
      </div>

</section>

<!--浮动框-->
<!--<section>
    <div class="yun_job_footer">
        <div class="yun_job_footer_fixed">
            <div class="com_footer_bg">
                <div class="com_footer">
                    <div class="com_footer_pd">
                        <a href="javascript:void(0);" data-url='<?php echo smarty_function_url(array('m'=>'wap','c'=>'company','a'=>'share','id'=>$_smarty_tpl->tpl_vars['row']->value['uid']),$_smarty_tpl);?>
' class="" id="shareClick">分享企业</a>
                    </div>
                </div>

                <div class="com_footer">
                    <div class="com_footer_pd">
                        <?php if ($_smarty_tpl->tpl_vars['usertype']->value=='1') {?> 
                        	<?php if ($_smarty_tpl->tpl_vars['isatn']->value['id']) {?>
                        		<span class="  atn_<?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
"><a href="javascript:void(0)" onclick="atn('<?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
','<?php echo smarty_function_url(array('m'=>'wap','c'=>'ajax','a'=>'atncompany'),$_smarty_tpl);?>
')" id='atn_<?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
' class=" com_footer_gz_qx">取消关注</a> </span> 
                        	<?php } else { ?>
                        		<span class=" atn_<?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
"><a href="javascript:void(0)" onclick="atn('<?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
','<?php echo smarty_function_url(array('m'=>'wap','c'=>'ajax','a'=>'atncompany'),$_smarty_tpl);?>
')" id='atn_<?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
' class="com_footer_gz">关注企业</a> </span> 
                        	<?php }?> 
                        <?php } else { ?>
                        	<?php if ($_smarty_tpl->tpl_vars['usertype']->value) {?> 
                        		<a href="javascript:void(0)" class="com_footer_gz" onclick="notuser('<?php echo $_smarty_tpl->tpl_vars['typename']->value[$_smarty_tpl->tpl_vars['usertype']->value];?>
','<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
','个人账户','<?php echo smarty_function_url(array('m'=>'wap','c'=>'ajax','a'=>'notuserout'),$_smarty_tpl);?>
','');">关注企业</a>
                    		<?php } else { ?>
                    			<a href="javascript:void(0)" class="com_footer_gz" onclick="pleaselogin('您还未登录个人账号，是否登录？','<?php echo smarty_function_url(array('m'=>'wap','c'=>'login'),$_smarty_tpl);?>
')">关注企业</a>
                    		<?php }?>
                    	<?php }?> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>-->
<!--功能条 -->
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

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/swiper/swiper.min.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/swiper/swiper.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    var config = {
        url: '<?php echo smarty_function_url(array('m'=>'wap','c'=>'company','a'=>'share','id'=>$_smarty_tpl->tpl_vars['row']->value['uid']),$_smarty_tpl);?>
',
        title: '<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
-<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
',
        desc: '',
        img: '<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wx_sharelogo'];?>
',
        img_title: '<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
',
        from: '<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
'
    };
    $(function() {
        $.post('<?php echo smarty_function_url(array('m'=>'wap','c'=>'ajax','a'=>'getbusiness'),$_smarty_tpl);?>
', {
            name: '<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
'
        }, function(data) {
            if(data) {
                var business = eval('(' + data + ')');
                $('#creditCode').html(business.creditCode);
                $('#estiblishTime').html(business.estiblishTime);
                $('#orgNumber').html(business.orgNumber);
                $('#Time').html(business.fromTime + '至' + business.toTime);
                $('#companyOrgType').html(business.companyOrgType);
                $('#regInstitute').html(business.regInstitute);
                $('#regStatus').html(business.regStatus);
                $('#regLocation').html(business.regLocation);
                $('#regCapital').html(business.regCapital);
                $('#businessScope').html(business.businessScope);
                $('#tianyancha').attr('href', 'https://www.tianyancha.com/company/' + business.companyId);
                $('#businessInfo').show();
                //$('#companybusiness').show();
            }
        });
    })
    $(function() {
        var myimgswiper = new Swiper('#imgswiper', {
            direction: 'horizontal',
            autoplay: true,
            loop: true
        });
    });
<?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['row']->value['x']&&$_smarty_tpl->tpl_vars['row']->value['y']) {?>
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
        var x = '<?php echo $_smarty_tpl->tpl_vars['row']->value['x'];?>
',
            y = '<?php echo $_smarty_tpl->tpl_vars['row']->value['y'];?>
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
<?php echo '<script'; ?>
>
    $(function() {
        var cheight = $("#com_content").height();
        var bheight = $("#com_business").height();
        if(parseInt(cheight) > 275) {
            $("#com_content").attr('style', 'width:100%;height:275px; overflow:hidden');
            $(".com_show_cont").show();
        }
        if(parseInt(bheight) > 275) {
            $("#com_business").attr('style', 'line-height:30px;height:auto; overflow:hidden');
            $(".on-off").show();
        }
    });

    function showcc() {
        $("#com_content").attr('style', 'width:100%;height:auto; overflow:hidden');
        $(".com_show_cont").find('a').html('收起');
        $(".com_show_cont").find('a').attr('onclick', 'hidecc()');
    }

    function hidecc() {
        $("#com_content").attr('style', 'width:100%;height:275px; overflow:hidden');
        $(".com_show_cont").find('a').html('展开信息');
        $(".com_show_cont").find('a').attr('onclick', 'showcc()');
    }

    function showbb() {
        $("#com_business").attr('style', 'line-height:30px;height:auto; overflow:hidden');
        $(".on-off").find('a').html('收起');
        $(".on-off").find('a').attr('onclick', 'hidebb()');
    }

    function hidebb() {
        $("#com_business").attr('style', 'line-height:30px;height:275px; overflow:hidden');
        $(".on-off").find('a').html('展开信息');
        $(".on-off").find('a').attr('onclick', 'showbb()');
    }
	$(document).ready(function(){
		$(".department_a").click(function() {
			$(".department_a").removeClass('department_a_cur');
			$(this).addClass('department_a_cur');
			var departmentName=$(this).attr('data-name');
			var comuid=$(this).attr('data-uid');
			var html='';
			$.ajax({
				url: wapurl +"index.php?c=company&a=departmentjob",
				data:{comuid:comuid,departmentName,departmentName},
				type:'POST',
				success:function(data){
					if(departmentName==''){
						$("#company_job_list").attr("style","display:none;");
					}
					$('#company_job_list').html(data);
				}	
			});
		});
	});
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/public_previewimage.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
