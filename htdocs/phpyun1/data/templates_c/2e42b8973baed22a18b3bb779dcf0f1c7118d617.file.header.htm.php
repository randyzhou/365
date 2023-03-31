<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-01 01:37:59
         compiled from "D:\rcw\uploads\app\template\member\user\header.htm" */ ?>
<?php /*%%SmartyHeaderCode:9437884975f9da0f7a9caa3-78192351%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e42b8973baed22a18b3bb779dcf0f1c7118d617' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\member\\user\\header.htm',
      1 => 1576479741,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9437884975f9da0f7a9caa3-78192351',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'user_style' => 0,
    'style' => 0,
    'left' => 0,
    'resume' => 0,
    'username' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5f9da0f7ab4046_52703173',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9da0f7ab4046_52703173')) {function content_5f9da0f7ab4046_52703173($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>个人用户管理平台 - <?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
</title>
		<meta http-equiv=Content-Type content="text/html;charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
		<meta content="MSHTML 6.00.6000.16939" name="Generator" />
		<link href="<?php echo $_smarty_tpl->tpl_vars['user_style']->value;?>
/images/m_css.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" rel="stylesheet" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/tips.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" rel="stylesheet"/>
		<?php echo '<script'; ?>
>
			var weburl = "<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
";
			var pricename = "<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
";
			var user_sqintegrity = "<?php echo $_smarty_tpl->tpl_vars['config']->value['user_sqintegrity'];?>
";
		<?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.1.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
		<link href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/css/layui.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/layui.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/phpyun_layer.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/member_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
		<!--[if IE 6]>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/png.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
>
		  DD_belatedPNG.fix('.png');
		<?php echo '</script'; ?>
>
		<![endif]-->
	</head>
	<body>
		<div class="yun_user_member_top user_bg">
			<div class="yun_user_member_w1100">
				<div class="top_left fltL">欢迎来到<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
！</div>
				<div class="header_seach_State fltR">
               <a href="<?php echo smarty_function_url(array('m'=>'job'),$_smarty_tpl);?>
" target="_blank"class="job_search">职位搜索</a>
                <span class="header_line">|</span>
					<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
" target="_blank" title='返回网站首页' class="user_m_fanh">网站首页</a>
				</div>
			</div>
		</div>

		<div class="header">
			<div class="yun_user_member_w1100">
				<div class="yun_m_logo  fltL">
					<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
" target="_blank" title='返回网站首页'>
						<img alt="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_logo'];?>
">
					</a>
				</div>
				<ul class="yun_user_member_nav">
					<li <?php if ($_smarty_tpl->tpl_vars['left']->value==1) {?>class="yun_user_member_nav_cur"<?php }?>> <a href="index.php">个人中心</a></li>
					<li <?php if ($_smarty_tpl->tpl_vars['left']->value==2) {?>class="yun_user_member_nav_cur"<?php }?>> <a href="index.php?c=resume"> 简历管理</a></li>
					<li <?php if ($_smarty_tpl->tpl_vars['left']->value==3) {?>class="yun_user_member_nav_cur"<?php }?>> <a href="index.php?c=invite">求职管理</a></li>
					<li <?php if ($_smarty_tpl->tpl_vars['left']->value==5) {?>class="yun_user_member_nav_cur"<?php }?>> <a href="index.php?c=paylog">财务管理</a></li>
					<li <?php if ($_smarty_tpl->tpl_vars['left']->value==6) {?>class="yun_user_member_nav_cur"<?php }?>> <a href="index.php?c=binding">账号中心</a></li>
				</ul>
				<div class=""><!-- 消息-->
					<div class="yun_m_headermsg" onMouseOver="tzmsgNumShow('show')" onMouseOut="tzmsgNumShow('hide')">
						<i class="yun_m_headermsg_icon"></i><span class="yun_m_headermsg_n" id="msgNum" style="display:none">0</span>
						<div class="yun_m_headermsg_box" style="display:none">
							<div class="yun_m_headermsg_list">
								<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=invite">邀请面试 <em class="yun_m_headermsg_list_n" id="userid_msgNum"></em></a>
								</div>
							<div class="yun_m_headermsg_list">
								<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=sysnews">系统消息 <em class="yun_m_headermsg_list_n" id="sysmsgNum"></em></a>
							</div>
							<div class="yun_m_headermsg_list">
								<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=commsg">企业回复咨询 <em class="yun_m_headermsg_list_n" id="usermsgNum"></em></a>
							</div>
						</div>
					</div>
					<div class="header_m_navright">
						<!-- 资料未完善提示-->
						<div class="header_m_navright_tip" style="display:none;">
							<div class="header_m_navright_tip_box">7 项资料未完善, <a href="###" class="cblue">立即完善</a><a href="###" class="header_m_navright_tip_close"></a></div>
						</div>
						<!-- 头像-->
						<div class="yun_m_headertx">
							<a href="index.php?c=uppic"> <?php if ($_smarty_tpl->tpl_vars['resume']->value['sex']==1) {?>
								<img src="<?php echo $_smarty_tpl->tpl_vars['resume']->value['photo'];?>
" border="0" height="30" width="30" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_icon'];?>
',2);" />
								<?php } else { ?>
								<img src="<?php echo $_smarty_tpl->tpl_vars['resume']->value['photo'];?>
" border="0" height="30" width="30" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_iconv'];?>
',2);" />
								<?php }?>
							</a>

							<div class="yun_m_headertx_hi">你好！<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</div>
							<i class="yun_m_headertx_hi_icon"></i>
							<div class="yun_m_header_info" style="display:none;">
								<a href="index.php?c=info" class="yun_m_header_info_a">编辑资料</a>
								<a href="index.php?c=resume" target="_blank" class="yun_m_header_info_a"> 简历管理</a>
								<a href="index.php?c=invite" class="yun_m_header_info_a">职位管理</a>
               <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_user_change']==1) {?>
								<a href="javascript:void(0)" onclick="changeutype();" class="yun_m_header_info_a">切换身份</a>
								<?php }?>
                <a href="javascript:void(0)" onClick="logout('index.php?act=logout')" title="退出登录" class="yun_m_header_info_a"
								 style="border:none;">退出登录</a>
							</div>
						</div>
					</div>

					
				</div>
			</div>
		</div>
		<?php echo '<script'; ?>
>
			$(".yun_m_headertx").hover(function() {
				$(".yun_m_header_info").show();
			}, function() {
				$(".yun_m_header_info").hide();
			});
		<?php echo '</script'; ?>
>
		<div class="clear"></div>
<?php }} ?>
