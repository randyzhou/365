<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-01 01:37:59
         compiled from "D:\rcw\uploads\app\template\member\user\left.htm" */ ?>
<?php /*%%SmartyHeaderCode:4017435385f9da0f7abaa04-48293491%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a043d2edc1315ad4542dc7aef3406c059d025d0e' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\member\\user\\left.htm',
      1 => 1576821299,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4017435385f9da0f7abaa04-48293491',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'left' => 0,
    'config' => 0,
    'expectnum' => 0,
    'msgnum' => 0,
    'uid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5f9da0f7ae1dd1_69596899',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9da0f7ae1dd1_69596899')) {function content_5f9da0f7ae1dd1_69596899($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
?><?php echo '<script'; ?>
>
    $(document).ready(function () {
        $(".left_sidebar_icon").click(function () {
            var aid = $(this).attr("aid");
            var style = $("#leftlist" + aid).attr("style");
            if ($(this).hasClass("left_sidebar_icon")) {
                $(this).parent().prev().find('li.overflow').show();
                $(this).attr("class", "left_sidebar_icon1");
                $(this).parent().prev().prev().height($(this).parent().prev().find('ul li').length * 30);
            } else {
                $(this).parent().prev().find('li.overflow').hide();
                $(this).attr("class", "left_sidebar_icon");
                $(this).parent().prev().prev().height(($(this).parent().prev().find('ul li').length - $(this).parent().prev().find('ul li.overflow').length) * 30);
            }
        })
    });
<?php echo '</script'; ?>
>
<div class="yun_m_leftsidebar">
<div class="yun_m_leftsidebar_box">
<?php if ($_smarty_tpl->tpl_vars['left']->value==1) {?>
<div class="yun_m_leftsidebar_tit">
<span class="all_word">个人中心 </span>
<span class="all_cirle"></span>
</div>

 <div class="left_sidebar_box" style="display:block">
   
   <ul class="yun_m_leftsidebar_list">
      <li><a href="index.php?c=resume"><i class="left_navicon left_navicon_i1"></i><span>我的简历</span><b></b></a></li>
      <li><a href="index.php?c=info"><i class="left_navicon left_navicon_i2"></i><span>基本信息</span><b></b></a></li>
      <?php if ($_smarty_tpl->tpl_vars['config']->value['user_number']>$_smarty_tpl->tpl_vars['expectnum']->value||$_smarty_tpl->tpl_vars['config']->value['user_number']=='') {?>
	  <li><a href="index.php?c=expect&act=add"><i class="left_navicon left_navicon_i9"></i><span style="color:red;">创建简历</span><b></b></a></li>
	  <?php } else { ?>
	  <li><a href="javascript:void(0)" onclick="layer.msg('你的简历数已经达到系统设置的简历数了',2,8);return false;"><i class="left_navicon left_navicon_i1"></i><span>创建简历</span><b></b></a></li>
	  <?php }?>
      <li><a href="index.php?c=invite"><i class="left_navicon left_navicon_i3"></i><span>我的职位</span><b></b><?php if ($_smarty_tpl->tpl_vars['msgnum']->value) {?><i class="left_sidebar_msg_icon"><?php echo $_smarty_tpl->tpl_vars['msgnum']->value;?>
</i><?php }?></a></li>
      <li><a href="index.php?c=privacy"><i class="left_navicon left_navicon_i4"></i><span>隐私设置</span><b></b></a></li>
      <li><a href="index.php?c=passwd"><i class="left_navicon left_navicon_i20"></i><span>账号设置</span><b></b></a></li>
      <li <?php if ($_GET['c']=='pay') {?>class="yun_m_leftsidebar_list_cur"<?php }?>><a href="index.php?c=pay"><i class="left_navicon left_navicon_i14"></i><span>立即充值</span><b></b></a></li>
      <li class="borend"><a href="index.php?c=binding"><i class="left_navicon left_navicon_i25"></i><span>账户绑定</span><b></b></a></li>
	  
    </ul>
  </div>
  
<?php } elseif ($_smarty_tpl->tpl_vars['left']->value==2) {?>


<div class="yun_m_leftsidebar_listall">
<div class="yun_m_leftsidebar_tit">
<span class="all_word">简历管理 </span>
<span class="all_cirle"></span>
</div>

<ul class="yun_m_leftsidebar_list">
<li <?php if ($_GET['c']=='resume'||$_GET['c']=='likejob'||$_GET['c']=='privacy'||$_GET['c']=='show') {?>class="yun_m_leftsidebar_list_cur"<?php }?>><a href="index.php?c=resume"><i class="left_navicon left_navicon_i1"></i><span>我的简历</span><b></b></a></li>
<?php if ($_smarty_tpl->tpl_vars['config']->value['user_number']>$_smarty_tpl->tpl_vars['expectnum']->value||$_smarty_tpl->tpl_vars['config']->value['user_number']=='') {?>
<li><a href="index.php?c=expect&act=add"><i class="left_navicon left_navicon_i9"></i><span>创建简历</span><b></b></a></li>
<?php } else { ?>
<li><a href="javascript:void(0)" onclick="layer.msg('你的简历数已经达到系统设置的简历数了',2,8);return false;"><i class="left_navicon left_navicon_i1"></i><span>创建简历</span><b></b></a></li>
<?php }?>
<li  <?php if ($_GET['c']=='look') {?>class="yun_m_leftsidebar_list_cur"<?php }?>><a href="index.php?c=look"><i class="left_navicon left_navicon_i6"></i><span>简历被浏览</span><b></b></a></li>
<li <?php if ($_GET['c']=='resumeout') {?>class="yun_m_leftsidebar_list_cur"<?php }?>><a href="index.php?c=resumeout"><i class="left_navicon left_navicon_i7"></i><span>简历外发</span><b></b></a></li>
<li <?php if ($_GET['c']=='resumetpl') {?>class="yun_m_leftsidebar_list_cur "<?php }?>><a href="index.php?c=resumetpl"><i class="left_navicon left_navicon_i8"></i><span>简历模板</span><b></b></a></li>

</ul>
</div>
<?php } elseif ($_smarty_tpl->tpl_vars['left']->value==3) {?>
<div class="yun_m_leftsidebar_listall">
<div class="yun_m_leftsidebar_tit">
<span class="all_word">求职管理 </span>
<span class="all_cirle"></span>
</div>

<ul class="yun_m_leftsidebar_list">
<li <?php if ($_GET['c']=='job'||$_GET['c']=='invite'||$_GET['c']=='favorite'||$_GET['c']=='look_job'||$_GET['c']=='comment') {?>class="yun_m_leftsidebar_list_cur"<?php }?>><a href="index.php?c=invite"><i class="left_navicon left_navicon_i3"></i><span>我的职位</span><b></b></a></li>
<li <?php if ($_GET['c']=='partapply'||$_GET['c']=='partcollect') {?>class="yun_m_leftsidebar_list_cur"<?php }?>><a href="index.php?c=partapply"><i class="left_navicon left_navicon_i11"></i><span>我的兼职</span><b></b></a></li>

<li <?php if ($_GET['c']=='atn'||$_GET['c']=='atnlt') {?>class="yun_m_leftsidebar_list_cur"<?php }?>><a href="index.php?c=atn"><i class="left_navicon left_navicon_i5"></i><span>我的关注</span><b></b></a></li>
<li <?php if ($_GET['c']=='finder') {?>class="yun_m_leftsidebar_list_cur"<?php }?>><a href="index.php?c=finder"><i class="left_navicon left_navicon_i12"></i><span>职位搜索器</span><b></b></a></li>
<li <?php if ($_GET['c']=='commsg') {?>class="yun_m_leftsidebar_list_cur"<?php }?>><a href="index.php?c=commsg"><i class="left_navicon left_navicon_i10"></i><span>求职咨询</span><b></b></a></li>

</ul>
</div>
<?php } elseif ($_smarty_tpl->tpl_vars['left']->value==5) {?>
<div class="yun_m_leftsidebar_listall">
<div class="yun_m_leftsidebar_tit">
<span class="all_word">财务管理 </span>
<span class="all_cirle"></span>
</div>

<ul class="yun_m_leftsidebar_list">
<li <?php if ($_GET['c']=='pay') {?>class="yun_m_leftsidebar_list_cur"<?php }?>><a href="index.php?c=pay"><i class="left_navicon left_navicon_i14"></i><span>立即充值</span><b></b></a></li>
<li <?php if ($_GET['c']=='paylist'||$_GET['c']=='paylog'||$_GET['c']=='payment') {?>class="yun_m_leftsidebar_list_cur"<?php }?>><a href="index.php?c=paylist"><i class="left_navicon left_navicon_i15"></i><span>财务明细</span><b></b></a></li>
 <li <?php if ($_GET['c']=='integral'||$_GET['c']=='integral_reduce'||$_GET['c']=='reward_list') {?>class="yun_m_leftsidebar_list_cur"<?php }?>><a href="index.php?c=integral"><i class="left_navicon left_navicon_i17"></i><span><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
管理</span><b></b></a></li>
<li><a href="<?php echo smarty_function_url(array('m'=>'invitereg'),$_smarty_tpl);?>
" target="_blank"><i class="left_navicon left_navicon_i24"></i><span>邀请注册</span><b></b></a></li>
</ul>
</div>
<?php } elseif ($_smarty_tpl->tpl_vars['left']->value==6) {?>
<div class="yun_m_leftsidebar_listall">
<div class="yun_m_leftsidebar_tit">
<span class="all_word">账号中心 </span>
<span class="all_cirle"></span>
</div>

<ul class="yun_m_leftsidebar_list">
<li <?php if ($_GET['c']=='info') {?>class="yun_m_leftsidebar_list_cur"<?php }?>><a href="index.php?c=info"><i class="left_navicon left_navicon_i2"></i><span>基本信息</span><b></b></a></li>

<li <?php if ($_GET['c']=='passwd'||$_GET['c']=='binding'||$_GET['c']=='uppic') {?>class="yun_m_leftsidebar_list_cur"<?php }?>><a href="index.php?c=passwd"><i class="left_navicon left_navicon_i20"></i><span>账号设置</span><b></b></a></li>
<li <?php if ($_GET['c']=='transfer') {?>class="yun_m_leftsidebar_list_cur"<?php }?>><a href="index.php?c=transfer" target="_blank"><i class="left_navicon left_navicon_i22"></i><span>账户分离</span><b></b></a></li>
<li <?php if ($_GET['c']=='sysnews') {?>class="yun_m_leftsidebar_list_cur"<?php }?>><a href="index.php?c=sysnews"><i class="left_navicon left_navicon_i21"></i><span>系统消息</span><b></b></a></li>
<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_ask_web']==1) {?>
<li><a  href="<?php echo smarty_function_url(array('m'=>'ask','c'=>'friend','a'=>'myquestion','uid'=>$_smarty_tpl->tpl_vars['uid']->value),$_smarty_tpl);?>
" target="_blank"><i class="left_navicon left_navicon_i22"></i><span>我的提问</span><b></b></a></li>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_user_change']==1) {?>
<li><a   href="javascript:void(0)" onclick="changeutype();"><i class="left_navicon left_navicon_i26"></i><span>切换身份</span><b></b></a></li>
<?php }?>
</ul>
</div>
<?php }?>
</div>
<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_wx_qcode']!='') {?>
<div class="left_wx_box">
<dl class="left_wx_box_dl">
<dt><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wx_qcode'];?>
" width="110" height="110"></dt>
<dd class="">
<div class="left_wx_box_tit">手机挑工作!</div>
<div class="left_wx_box_p">微信扫一扫,入职更快速</div>
</dd>
</dl>

</div>
<?php }?>


</div><?php }} ?>
