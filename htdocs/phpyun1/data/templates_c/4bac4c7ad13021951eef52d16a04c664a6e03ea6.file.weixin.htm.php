<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-10-31 16:47:09
         compiled from "D:\rcw\uploads\app\template\default\index\weixin.htm" */ ?>
<?php /*%%SmartyHeaderCode:7944181155f9d248d41a214-50215572%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bac4c7ad13021951eef52d16a04c664a6e03ea6' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\default\\index\\weixin.htm',
      1 => 1576479782,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7944181155f9d248d41a214-50215572',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'keywords' => 0,
    'description' => 0,
    'client' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5f9d248d424bc8_00758278',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9d248d424bc8_00758278')) {function content_5f9d248d424bc8_00758278($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
"/>
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
"/>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['client']->value;?>
/style/css.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css"/>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/client_header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="wei_banner">
  <div class="wei_banner_w980">
    <div class="wei_banner_left">
      <div class="wx_p1">微信找工作<i class="wx_p1icon"></i></div>
      <div class="wx_p2">轻松关注 .  快乐求职 . 实时掌握求职 . 招聘动态
<div class="">微信管理求职信息，好机会一个不漏！</div></div>
     
     <div class="wx_p3">
     <span class="wx_p3_list"><i class="wx_p3_listicon"></i>周边职位</span>
     <span class="wx_p3_list"><i class="wx_p3_listicon wx_p3_listicon2"></i>简历管理</span>
     <span class="wx_p3_list"><i class="wx_p3_listicon wx_p3_listicon3"></i>求职动态</span>
     <span class="wx_p3_list"><i class="wx_p3_listicon wx_p3_listicon4"></i>智能推荐</span></div>
     
    </div>
<!--    <div class="wei_banner_sys"><img src="<?php echo $_smarty_tpl->tpl_vars['client']->value;?>
/images/wx_sys.png" class="png"/></div>

    <div class="wei_banner_ewm"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wx_qcode'];?>
" class="png" height="132" width="132"/></div>
-->
  <div class="wx_t_img"></div>
  <div class="wx_ewm_img"></div>
  <div class="wx_ewm_pic"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wx_qcode'];?>
" class="png" height="150" width="150"/></div>
  
  </div>
</div>
<div class="clear"></div>
<div class="wei_job_list fl">
  <div class="w980">
    <div class="touch fl">
      <div class="touch_size fl">
        <dl>
          <dt><img src="<?php echo $_smarty_tpl->tpl_vars['client']->value;?>
/images/wei_01.jpg"/></dt>
          <dd>
            <div class="touch_h1 fl">输入岗位关键字</div>
            <div class="touch_items_text fl">直接回复岗位即可，如会计，文员、导购、司机等，系统将推荐给您最新岗位！</div>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo $_smarty_tpl->tpl_vars['client']->value;?>
/images/wei_02.jpg"/></dt>
          <dd>
            <div class="touch_h1 fl">微信接受面试通知</div>
            <div class="touch_items_text fl">接受面试通知48小时内有签到过才能激活哦！不要错过每一次面试机会</div>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo $_smarty_tpl->tpl_vars['client']->value;?>
/images/wei_03.jpg"/></dt>
          <dd>
            <div class="touch_h1 fl">推荐周边职位</div>
            <div class="touch_items_text fl">发送你的位置，系统将推荐周边职位给您，好工作；还离家近</div>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo $_smarty_tpl->tpl_vars['client']->value;?>
/images/wei_04.jpg"/></dt>
          <dd>
            <div class="touch_h1 fl">刷新已有简历</div>
            <div class="touch_items_text fl">随时随地刷新简历；让更多企业优先看到你</div>
          </dd>
        </dl>
      </div>
    </div>
  </div>
</div>
<div class="clear"></div>


<div class="wx_list">
<div class="w980">
<div class="wx_box">
<div class="wx_tit">机会留给有准备的人<i class="wx_tit_line"></i></div>
<div class="wx_p">别让机会败给错过，绑定即可第一时间接收面试通知</div>
<div class="wx_leftimg1"></div>
</div>
</div></div>
<div class="wx_list wx_listbg">
<div class="w980">
<div class="wx_box">
<div class="wx_lefpd">
<div class="wx_tit">一键进入简历管理<i class="wx_tit_line"></i></div>
<div class="wx_p">随时随地更新自己的简历，不做“应届毕业生”</div>
</div>
<div class="wx_leftimg2"></div>
</div></div>
</div>
<div class="wx_list">
<div class="w980">
<div class="wx_box">
<div class="wx_tit">福利好还是月薪高<i class="wx_tit_line"></i></div>
<div class="wx_p">专业团队每周一次筛选再筛选，给你最想要的岗位</div>
<div class="wx_img3"></div>
</div></div>
</div>
<div class="wx_list wx_listbg">
<div class="w980">
<div class="wx_box">
<div class="wx_lefpd">
<div class="wx_tit">求职攻略<i class="wx_tit_line"></i></div>
<div class="wx_p">攻略做的好！让好工作来的更轻松，面试什么的都不是个事</div>
</div>
<div class="wx_leftimg6"></div>
</div></div>
</div>
<div class="wx_list" style="border-bottom:1px solid #dcdce6">
<div class="w980">
<div class="wx_box">
<div class="wx_tit">找个离家近点的工作<i class="wx_tit_line"></i></div>
<div class="wx_p">根据您的位置匹配，300米范围内有20多个符合的岗位</div>
<div class="wx_img5"></div>
</div>
</div>
</div></div>

<div style="clear:both"></div>
<!--[if IE 6]>
<?php echo '<script'; ?>
 src="js/png.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
DD_belatedPNG.fix('.png,.wei_banner_ewm,.wei_banner_imp');
<?php echo '</script'; ?>
>
<![endif]-->
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/client_footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
