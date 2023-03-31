<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-01 01:03:34
         compiled from "D:\rcw\uploads\app\template\member\com\header.htm" */ ?>
<?php /*%%SmartyHeaderCode:18019422825f9d98e6b3d674-29479495%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e83fb535820541dc9f6d4f3d90fd3e9acf7316b' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\member\\com\\header.htm',
      1 => 1576570034,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18019422825f9d98e6b3d674-29479495',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'com_style' => 0,
    'style' => 0,
    'spid' => 0,
    'company' => 0,
    'username' => 0,
    'addjobnum' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5f9d98e6b53dc6_85513061',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9d98e6b53dc6_85513061')) {function content_5f9d98e6b53dc6_85513061($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
?><!DOCTYPE html>
<head>
<title>企业用户后台管理系统 - <?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
</title>
<meta http-equiv=Content-Type content="text/span; charset=utf-8"/>
<meta http-equiv=X-UA-Compatible content="IE=edge"/>
<?php echo '<script'; ?>
>var weburl="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
";<?php echo '</script'; ?>
>
<link href="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
/images/m_style.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" rel="stylesheet"/>
<link href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/tips.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" rel="stylesheet"/>
<link href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/css/layui.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.1.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/layui.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/phpyun_layer.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/member_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/js/pay.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/js/comtc.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
> 
<meta content="MSHTML 6.00.6000.16939" name=GENERATOR/> 
<?php echo '<script'; ?>
>

/*屏蔽所有的js错误*/
function killerrors() {return true;}
window.onerror = killerrors;
var integral_pricename='<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
';  
<?php echo '</script'; ?>
>
    <!--[if IE 6]>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/png.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
      DD_belatedPNG.fix('.png,.#bg');
    <?php echo '</script'; ?>
>
    <![endif]-->
</head>
<body>
<div class="body_box">
<header>

<div class="header">
	<div class="header_fixed">
		<div class="header-logo fltL">
			<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_unit_logo'];?>
" class="png" ></a>
		</div>
		<ul class="yun_m_headernav">
			<li class="yun_m_headernav_cur"><a  href="index.php">企业中心</a></li>
			<li><a href="index.php?c=job&w=1">职位管理 </a></li>
			<li><a href="index.php?c=hr">简历管理</a></li>
			<li><a href="index.php?c=paylogtc">财务管理</a></li>
            <li><a href="index.php?c=vs">设置</a></li>
            <li><a href="index.php?c=info">资料</a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
" target="_blank">人才网首页</a></li>
		</ul>

		<div class="">
			<div class="header_m_navright">
	 
				<!-- 头像-->  
				<div class="yun_m_headertx"  onMouseOver="headerInfoShow('show')" onMouseOut="headerInfoShow('hide')"> 
					<a href="<?php if (empty($_smarty_tpl->tpl_vars['spid']->value)) {?>index.php?c=uppic<?php } else { ?>javascript:void(0);<?php }?>"> 
						<img src="<?php echo $_smarty_tpl->tpl_vars['company']->value['logo'];?>
" width="25" height="25" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_unit_icon'];?>
','2')"/>
					</a> 
					
					<!--<div class="yun_m_headertx_hi">你好！<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</div>-->
					<i class="yun_m_headertx_hi_icon"></i>
					<div class="yun_m_header_info" style="display:none;">
						<?php if (empty($_smarty_tpl->tpl_vars['spid']->value)) {?>
							<a href="index.php?c=info" class="yun_m_header_info_a">编辑资料</a>
						<?php }?>						
						<a href="<?php echo smarty_function_url(array('m'=>'company','c'=>'show','id'=>'`$uid`'),$_smarty_tpl);?>
" target="_blank" class="yun_m_header_info_a"> 预览主页</a>
						<?php if (empty($_smarty_tpl->tpl_vars['spid']->value)) {?>
							<a href="index.php?c=comtpl" class="yun_m_header_info_a">模板设置</a>						
							<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_user_change']==1) {?>
              <a href="javascript:void(0)" onclick="changeutype();" class="yun_m_header_info_a">切换身份</a>
              	<?php }?>
            <?php }?>
						<a href="javascript:void(0)" onClick="logout('index.php?act=logout')" title="退出登录" class="yun_m_header_info_a">退出登录</a>
					</div> 
				</div> 

				<!-- 消息 START-->
				<div class="yun_m_headermsg" onMouseOver="tzmsgNumShow('show')" onMouseOut="tzmsgNumShow('hide')">
					<i class="yun_m_headermsg_icon"></i>
					<span class="yun_m_headermsg_n" id="tzmsgNum" style="display:none">0</span>
					<div class="yun_m_headermsg_box" style="display:none">
						<div class="yun_m_headermsg_list">
							<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=hr">职位申请  <em class="yun_m_headermsg_list_n" id="jobApplyNum">(0)</em></a>
						</div>
						
						<div class="yun_m_headermsg_list">
							<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=sysnews">系统消息  <em class="yun_m_headermsg_list_n" id="sysmsgNum">(0)</em></a>
						</div>
				
						<div class="yun_m_headermsg_list">
							<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=msg">求职咨询  <em class="yun_m_headermsg_list_n" id="jobAskNum">(0)</em></a> 
						</div>
						
					</div>
				</div>
				<!-- 消息 END--> 
				<a  href="javascript:void(0)"  onclick="jobadd_url('<?php echo $_smarty_tpl->tpl_vars['addjobnum']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_job'];?>
','','<?php echo $_smarty_tpl->tpl_vars['config']->value['com_integral_online'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
');return false;" class="header_m_nav_fb">发布职位</a>

			</div>
		</div>
	</div>
</div>
<div class="clear"></div> 


</header><?php }} ?>
