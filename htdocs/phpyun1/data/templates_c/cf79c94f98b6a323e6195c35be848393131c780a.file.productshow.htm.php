<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-18 10:35:45
         compiled from "D:\rcw\uploads\app\template\company\default\productshow.htm" */ ?>
<?php /*%%SmartyHeaderCode:5838125385fb4888148f2c1-89068414%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf79c94f98b6a323e6195c35be848393131c780a' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\company\\default\\productshow.htm',
      1 => 1588148202,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5838125385fb4888148f2c1-89068414',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'keywords' => 0,
    'description' => 0,
    'style' => 0,
    'config' => 0,
    'com_style' => 0,
    'com' => 0,
    'comrat' => 0,
    'num' => 0,
    'invite_resume' => 0,
    'pre' => 0,
    'ComMember' => 0,
    'usertype' => 0,
    'isatn' => 0,
    'uid' => 0,
    'ProductInfo' => 0,
    'link' => 0,
    'NewsList' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fb488814eb850_87363493',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb488814eb850_87363493')) {function content_5fb488814eb850_87363493($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/css.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
/images/comapply.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
</head>
<body class="companyshowbg">
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="clear"></div>
    <div class="com_details_top">
	<div class="w1200">
	
<div class="com_details_current">您当前的位置：<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
">首页</a> > <a href="<?php echo smarty_function_url(array('m'=>'company'),$_smarty_tpl);?>
">企业列表</a> > <span><a href="<?php echo smarty_function_url(array('m'=>'company','c'=>'show','id'=>$_smarty_tpl->tpl_vars['com']->value['uid']),$_smarty_tpl);?>
">企业详情</a> </span></div>
	<div class="com_details_top_c">
	<?php if ($_smarty_tpl->tpl_vars['com']->value['hotlogo']==1) {?>
			<span class="com_details_name_mq" title="名企"> </span>
		<?php }?>
	<div class="com_details_info_box">
	<div class="com_details_logo"><a href="<?php echo smarty_function_url(array('m'=>'company','c'=>'show','id'=>$_smarty_tpl->tpl_vars['com']->value['uid']),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['com']->value['logo'];?>
" width="140" height="140" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_unit_icon'];?>
',2);" alt="<?php echo $_smarty_tpl->tpl_vars['com']->value['name'];?>
" /></a></div>

	<h1 class="com_details_name"><a href="<?php echo smarty_function_url(array('m'=>'company','c'=>'show','id'=>$_smarty_tpl->tpl_vars['com']->value['uid']),$_smarty_tpl);?>
"><?php echo mb_substr($_smarty_tpl->tpl_vars['com']->value['name'],0,30,'utf-8');?>
  </a>
		<?php if ($_smarty_tpl->tpl_vars['comrat']->value['com_pic']!="0"&&$_smarty_tpl->tpl_vars['comrat']->value['com_pic']!='') {?>
			<img src="<?php echo $_smarty_tpl->tpl_vars['comrat']->value['com_pic'];?>
" width="18" height="18" title="会员等级" /> 
		<?php }?>    
        
       
        <?php if ($_smarty_tpl->tpl_vars['com']->value['yyzz_status']==1) {?><i class="job_details_cominfo_rz job_details_cominfo_rz_zz" title="执照认证"></i> <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['com']->value['moblie_status']==1) {?><i class="job_details_cominfo_rz job_details_cominfo_rz_sj" title="手机认证"></i><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['com']->value['email_status']==1) {?><i class="job_details_cominfo_rz job_details_cominfo_rz_yx" title="邮箱认证"></i><?php }?>
                
	</h1>
	<div class="com_details_info">
		<?php if ($_smarty_tpl->tpl_vars['com']->value['provinceid']) {?>
			<?php echo $_smarty_tpl->tpl_vars['com']->value['provinceid'];?>

				<?php if ($_smarty_tpl->tpl_vars['com']->value['cityid']) {?> - <?php echo $_smarty_tpl->tpl_vars['com']->value['cityid'];
}?>
		<?php }?> 
		<?php if ($_smarty_tpl->tpl_vars['com']->value['hy_info']) {?>
			<span class="com_details_line">|</span><?php echo $_smarty_tpl->tpl_vars['com']->value['hy_info'];?>

		<?php }?> 
		
		
		
		<?php if ($_smarty_tpl->tpl_vars['com']->value['pr_info']) {?>
			<span class="com_details_line">|</span><?php echo $_smarty_tpl->tpl_vars['com']->value['pr_info'];?>
 
		<?php }?> 
		
		<?php if ($_smarty_tpl->tpl_vars['com']->value['mun_info']) {?>
			<span class="com_details_line">|</span><?php echo $_smarty_tpl->tpl_vars['com']->value['mun_info'];?>
 
		<?php }?> 
		
		<?php if ($_smarty_tpl->tpl_vars['com']->value['money']) {?>
			<span class="com_details_line">|</span>注资<?php echo $_smarty_tpl->tpl_vars['com']->value['money'];?>

				<?php if ($_smarty_tpl->tpl_vars['com']->value['moneytype']==1) {?>万元<?php } else { ?>万美元<?php }?> 
		<?php }?> 
		
		<?php if ($_smarty_tpl->tpl_vars['com']->value['sdate']) {?>
			<span class="com_details_line">|</span><?php echo $_smarty_tpl->tpl_vars['com']->value['sdate'];?>
创办
		<?php }?></div> 

		<div class="com_details_data_box" >
		<div class="com_details_data_box_c" >
		<div class="com_details_data"><div class="com_details_data_n"><?php echo $_smarty_tpl->tpl_vars['num']->value;?>
</div><div class="com_details_dataname">在招职位</div><i class="com_details_data_line"></i></div>
		<div class="com_details_data"><div class="com_details_data_n"><?php echo $_smarty_tpl->tpl_vars['invite_resume']->value;?>
</div><div class="com_details_dataname">共邀面试</div><i class="com_details_data_line"></i></div>
		<div class="com_details_data"><div class="com_details_data_n"><?php echo $_smarty_tpl->tpl_vars['pre']->value;?>
%</div><div class="com_details_dataname"> 简历处理率</div><i class="com_details_data_line"></i></div>

		<div class="com_details_data"><div class="com_details_data_n"><?php if ($_smarty_tpl->tpl_vars['ComMember']->value['login_date']) {?>
									<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['ComMember']->value['login_date'],"%Y-%m-%d");?>

								<?php } else { ?>
									未登录 
								<?php }?></div><div class="com_details_dataname"> 最近登录时间</div></div>

		</div>
		</div>
		</div>
		<div class="com_details_opt">
		<div class="com_details_opt_fxbox">
			<?php if ($_smarty_tpl->tpl_vars['usertype']->value=='1') {?> 
						<?php if ($_smarty_tpl->tpl_vars['isatn']->value['id']) {?>
							<a href="javascript:void(0)" onclick="atn('<?php echo $_smarty_tpl->tpl_vars['com']->value['uid'];?>
','<?php echo smarty_function_url(array('m'=>'ajax','c'=>'atncompany'),$_smarty_tpl);?>
')" id='atn_<?php echo $_smarty_tpl->tpl_vars['com']->value['uid'];?>
' class="com_details_opt_gz company_att">取消关注</a>
						<?php } else { ?>
							<a href="javascript:void(0)" onclick="atn('<?php echo $_smarty_tpl->tpl_vars['com']->value['uid'];?>
','<?php echo smarty_function_url(array('m'=>'ajax','c'=>'atncompany'),$_smarty_tpl);?>
')" id='atn_<?php echo $_smarty_tpl->tpl_vars['com']->value['uid'];?>
' class="com_details_opt_gz">关注</a>
						<?php }?> 
					<?php } else { ?> 
						<?php if ($_smarty_tpl->tpl_vars['uid']->value) {?>
							<a href="javascript:void(0)" onclick="layer.msg('只有个人用户才能关注', 2, 8)" class="com_details_opt_gz">+ 关注</a>
                        <?php } else { ?>
							<a href="javascript:void(0)" onclick="showlogin('1');" class="com_details_opt_gz">+ 关注</a>
                        <?php }?>
					<?php }?> 
                    </div>
		<div class="com_details_opt_fxbox"><a href="javascript:void(0);" onmousemove="$('#getwapurl').show();" onmouseout="$('#getwapurl').hide();" rel="nofollow"  class="com_details_opt_fx">分享到朋友圈</a>     <div class="comapply_sq_r_cy none" id="getwapurl">
              <div class="comapply_sq_r_cont"> 
                <div class="comapply_sq_r_tipa"> 微信扫一扫：分享</div>
                <img src="<?php echo smarty_function_url(array('m'=>'ajax','c'=>'pubqrcode','toc'=>'company','toa'=>'show','toid'=>$_smarty_tpl->tpl_vars['com']->value['uid']),$_smarty_tpl);?>
" width="130" height="130" />
                <div class="comapply_sq_r_tipsm"> ↑微信扫上方二维码↑<br>
                  便可将本文分享至朋友圈</div>
              </div>
            </div> </div>
			<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_xcxQrcode']==1) {?> 
			<div class="com_details_opt_xcxbox">
				<a href="javascript:void(0);" onmousemove="$('#getxcxurl').show();" onmouseout="$('#getxcxurl').hide();" class="com_details_opt_xcx">小程序快速求职</a>
				<div class="comapply_sq_r_cy none" id="getxcxurl">
					<div class="comapply_sq_r_cont"> 
						<div class="comapply_sq_r_tipa">微信小程序</div>
						<img src="<?php echo smarty_function_url(array('m'=>'ajax','c'=>'xcxQrcode','id'=>$_smarty_tpl->tpl_vars['com']->value['uid'],'type'=>'company'),$_smarty_tpl);?>
" width="130" height="130" />
						<div class="comapply_sq_r_tipsm"> ↑微信扫上方二维码↑<br>便可快速求职</div>
					</div>
				</div> 
			</div>
			<?php }?> 
		</div>

				
		</div>
		</div>
		</div>



        <div class="clear"></div>
    
    
	<div class="w1200">
    <div class="com_details_left"> 
    

     <div class="com_show_leftbox" style="min-height:1000px" id="product_photos">
		<div class="com_details_tit"><span class="com_details_tit_s">公司产品</span><i class="com_details_tit_line yun_bg_color"></i></div>
		<div style="width:100%; padding:20px 0; text-align:center; font-size:18px;"><?php echo $_smarty_tpl->tpl_vars['ProductInfo']->value['title'];?>
</div>
		<div class="firm_det_con" style="text-align:center; padding:20px 0"><img src="<?php echo $_smarty_tpl->tpl_vars['ProductInfo']->value['pic'];?>
" lay-src="<?php echo $_smarty_tpl->tpl_vars['ProductInfo']->value['pic'];?>
" width="300" /></div>
		<div style="width:100%; padding:10px 0; font-size:14px;" class="company_img_auto"><?php echo $_smarty_tpl->tpl_vars['ProductInfo']->value['body'];?>
</div>
	</div>		
                
     


    </div>
      <div class="com_details_right">
      <div class="com_details_rightbox">
      <div class="com_details_tit"><span class="com_details_tit_s">联系方式</span><i class="com_details_tit_line yun_bg_color"></i></div>
      <?php if ($_smarty_tpl->tpl_vars['link']->value['errorcode']==9) {?>
					<span class="com_details_right_hrname">	<?php echo $_smarty_tpl->tpl_vars['com']->value['linkman'];?>
</span> <?php echo $_smarty_tpl->tpl_vars['com']->value['linkjob'];?>


	
<div class="com_details_tel_me">联系我时，请说是在<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
上看到的</div>
<div class="com_details_tel_p">
							
							
							<?php if ($_smarty_tpl->tpl_vars['com']->value['linkphone']) {?>
								<div class="">电话：<span class="com_details_tel_p_n"><?php echo $_smarty_tpl->tpl_vars['com']->value['linkphone'];?>

								</span></div>
							<?php }?>
							
							<?php if ($_smarty_tpl->tpl_vars['com']->value['linktel']) {?>
							<div class="">手机：<span class="com_details_tel_p_n"><?php echo $_smarty_tpl->tpl_vars['com']->value['linktel'];?>

								</span></div>
							<?php }?> 
							
							<?php if ($_smarty_tpl->tpl_vars['com']->value['linkmail']) {?>
								<div class="">邮箱：<?php echo $_smarty_tpl->tpl_vars['com']->value['linkmail'];?>
</div> 
							<?php }?>
							
							<?php if ($_smarty_tpl->tpl_vars['com']->value['linkqq']) {?>
								<div class="">Q Q：<?php echo $_smarty_tpl->tpl_vars['com']->value['linkqq'];?>
</div> 
							<?php }?>

							<?php if ($_smarty_tpl->tpl_vars['com']->value['zip']) {?>
								<div class="">邮编：<?php echo $_smarty_tpl->tpl_vars['com']->value['zip'];?>
</div>
							<?php }?> 

							<?php if ($_smarty_tpl->tpl_vars['com']->value['website']) {?>
								<div class="">网址：<?php echo $_smarty_tpl->tpl_vars['com']->value['website'];?>
</div>
							<?php }?> 
							
							<?php if ($_smarty_tpl->tpl_vars['com']->value['busstops']) {?>
								<div class="">乘车：<?php echo $_smarty_tpl->tpl_vars['com']->value['busstops'];?>
</div>
							<?php }?> 
							
							<?php if ($_smarty_tpl->tpl_vars['com']->value['address']) {?>
								<div class="">地址：<?php echo $_smarty_tpl->tpl_vars['com']->value['address'];?>
</div> 
							<?php }?> 
							
							<?php if ($_smarty_tpl->tpl_vars['com']->value['comqcode']) {?>
								<div class="com_show_touch_p">
									<img src="<?php echo $_smarty_tpl->tpl_vars['com']->value['comqcode'];?>
" width="120" height="120">
								</div> 
							<?php }?>
                        </div>
					<?php } else { ?>
						<?php if ($_smarty_tpl->tpl_vars['link']->value['errorcode']==1||$_smarty_tpl->tpl_vars['link']->value['errorcode']==2||$_smarty_tpl->tpl_vars['link']->value['errorcode']==6||$_smarty_tpl->tpl_vars['link']->value['errorcode']==5) {?>
							<div class="com_show_touch_login_box">
								<div class="com_show_touch_login">
									<div class="com_show_touch_login_p"><?php echo $_smarty_tpl->tpl_vars['link']->value['msg'];?>
</div>
								</div>
							</div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['link']->value['errorcode']=="4") {?>
							<div class="com_show_touch_login_box">
								<div class="com_show_touch_login">
									<div class="com_show_touch_login_p"><?php echo $_smarty_tpl->tpl_vars['link']->value['msg'];?>
</div>
									<div class="com_show_touch_login_bth">
										<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=expect&act=add" class="com_show_touch_dl">创建简历</a>
									</div>
								</div>
							</div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['link']->value['errorcode']=="3") {?>
							<div class="com_show_touch_login_box">
								<div class="com_show_touch_login">
									<div class="com_show_touch_login_p"><?php echo $_smarty_tpl->tpl_vars['link']->value['msg'];?>
</div>
									<div class="com_show_touch_login_bth">
										<a class="com_show_touch_dl" href="javascript:void(0);" onclick="showlogin('1');">立即登录</a>
										<a class="com_show_touch_reg" href="<?php echo smarty_function_url(array('m'=>'register','usertype'=>1,'type'=>1),$_smarty_tpl);?>
">立即注册</a>
									</div>
								</div>
							</div>
                        <?php }?> 
						<?php if ($_smarty_tpl->tpl_vars['com']->value['address']) {?>
						<div class="com_details_tel_me">
							<div class="">地址：<?php echo $_smarty_tpl->tpl_vars['com']->value['address'];?>
</div>
						</div>
						<?php }?>
					<?php }?>
            

        <?php if ($_smarty_tpl->tpl_vars['com']->value['x']!=''&&$_smarty_tpl->tpl_vars['com']->value['y']!='') {?>
         
                    <div class="com_show_lmap">
                        <div class="frc_map" id="company_baidu_map">
                            <div id="maps_container" style="width:245px;height:205px;"></div>
                            <input type="hidden" id="map_x" value="<?php echo $_smarty_tpl->tpl_vars['com']->value['x'];?>
" />
                            <input type="hidden" id="map_y" value="<?php echo $_smarty_tpl->tpl_vars['com']->value['y'];?>
" />
                        </div>
                        <div class="frc_map_look">
                            <a href="javascript:showmap('map_show');">查看完整地图</a>
                        </div>
                    </div>
              
			<?php }?>
    </div>
   
            
<?php if (!empty($_smarty_tpl->tpl_vars['NewsList']->value)) {?>
 <div class="com_details_rightbox">
 <div class="com_details_tit"><span class="com_details_tit_s">企业新闻</span><i class="com_details_tit_line yun_bg_color"></i></div>

               

                    <ul class="com_show_news">
                        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['NewsList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
							<li>
								<p>
									<a href="<?php echo smarty_function_url(array('m'=>'company','c'=>'newsshow','id'=>$_smarty_tpl->tpl_vars['com']->value['uid'],'nid'=>$_smarty_tpl->tpl_vars['row']->value['id']),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</a>
								</p>
							</li>
                        <?php } ?>
                    </ul>
      </div>         
			<?php }?>
      
    </div>
 </div>  
<div class="clear"></div>
<div class="commpay_Comment">
  <div id="map_show" class="none">
    <div id="map_container" style="width:580px;height:350px;"></div>
  </div>
</div>
<div class="clear"></div>
  <div id="map_show" class="none">
  <div class="map_query_box">
    <div id="map_container" style="width:1100px;height:450px;"></div>
   
 <div class="map_query"  id="map_search">
     <div class="map_query_tit">线路查询 <span class="map_query_tit_s">注：地图可以左击拖拽任意位置</span></div>
   <div class="map_query_list"><span class="map_query_list_s">起点</span><i class="map_query_list_line"></i> <input type="text"  class="map_startlist map_query_text" placeholder="输入起点" id="map_start" name="map_start"/></div>
   <div class="map_query_list">
        <span class="map_query_list_s">终点</span><i class="map_query_list_line"></i>
        <?php if ($_smarty_tpl->tpl_vars['com']->value['x']) {?>
     <input type="text"   id="map_end" class="map_startend map_query_text" name="map_end"/>
    <?php } else { ?>
   <input type="text"  placeholder="输入终点" class="map_startend map_query_text" value="" id="map_end" name="map_end"/>
    <?php }?>
    
     </div>
    <div class="map_query_bth_box">
    <input type="submit" class="mapsubmit map_query_bth "value="公交查询"  name="submit" onclick="bus_query();"/></span>
    <span><input type="submit" class="mapsubmit map_query_bth map_query_bth_car"  value="驾车查询"  name="submit" onclick="map_drving();"/></span>
    </div>    </div>
      <div class="map_query_result"><div id="r-result"></div>  </div>
  </div>
</div>
<div class="clear"></div>
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
/js/lazyload.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<!--[if IE 6]>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/png.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>DD_belatedPNG.fix('.png');<?php echo '</script'; ?>
>
<![endif]-->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['mapurl'];?>
" charset="utf-8"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/map.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
layui.use(['form', 'layer'], function() {
	var $ = layui.$,
		form = layui.form,
		layer = layui.layer;
	layer.photos({
	  photos: '#product_photos',
	  anim: 5 //0-6的选择，指定弹出图片动画类型，默认随机（请注意，3.0之前的版本用shift参数）
	}); 
});
$(function () {
    <?php if ($_smarty_tpl->tpl_vars['com']->value['y']!=''&&$_smarty_tpl->tpl_vars['com']->value['x']!='') {?>
	getmapnoshowcont_diffDomains('maps_container', "<?php echo $_smarty_tpl->tpl_vars['com']->value['x'];?>
", "<?php echo $_smarty_tpl->tpl_vars['com']->value['y'];?>
", "map_x", "map_y",'company_baidu_map');
	<?php }?>
	$(".firm_post").hover(function () {
		$(this).find(".firm_post_right").show();
	}, function () {;
		$(this).find(".firm_post_right").hide();
	});         
});
function showmap(id) {
	$.layer({
		type: 1,
		title: '地图展示',
		closeBtn: [0, true],
		offset: ['100px', ''],
		border: [10, 0.3, '#000', true],
		area: ['1100px', 'auto'],
		page: { dom: "#" + id }
	});
	getmapshowcont('map_container', "<?php echo $_smarty_tpl->tpl_vars['com']->value['x'];?>
", "<?php echo $_smarty_tpl->tpl_vars['com']->value['y'];?>
", "<?php echo $_smarty_tpl->tpl_vars['com']->value['name'];?>
", "<?php echo $_smarty_tpl->tpl_vars['com']->value['address'];?>
");
}
//公交查询
function bus_query(){
    var map_start=$.trim($("#map_start").val());
    if(map_start==""){
         layer.msg("请输入线路查询起点");return false;
    }
    var map_end=$.trim($("#map_end").val());
    var map = new BMap.Map("map_container");
    map.centerAndZoom(new BMap.Point('<?php echo $_smarty_tpl->tpl_vars['com']->value['x'];?>
','<?php echo $_smarty_tpl->tpl_vars['com']->value['y'];?>
'), 12);
   // map.enableScrollWheelZoom();
    var start = map_start;
    var end =map_end;
    //map.centerAndZoom(new BMap.Point(116.404, 39.915), 12);
	var transit = new BMap.TransitRoute(map, {
		renderOptions: {map: map, panel: "r-result"}
	});
	transit.search(start,end);

    /*var transit = new BMap.TransitRoute(map, {
		renderOptions: {map: map, panel: "r-result"}, 
		onResultsHtmlSet : function(){$("#r-result").show()}  	
    });
    transit.search(start,end);*/
}
//驾车查询
function map_drving(){
    var map_start=$.trim($("#map_start").val());
    if(map_start==""){
        layer.msg("请输入线路查询起点");return false;
    }
    var map_end=$.trim($("#map_end").val());
    var map = new BMap.Map("map_container");
	map.centerAndZoom(new BMap.Point('<?php echo $_smarty_tpl->tpl_vars['com']->value['x'];?>
','<?php echo $_smarty_tpl->tpl_vars['com']->value['y'];?>
'), 12);
	var driving = new BMap.DrivingRoute(map, {renderOptions: {map: map, panel: "r-result", autoViewport: true}});
	driving.search(map_start, map_end);
}
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/public_search/login.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
