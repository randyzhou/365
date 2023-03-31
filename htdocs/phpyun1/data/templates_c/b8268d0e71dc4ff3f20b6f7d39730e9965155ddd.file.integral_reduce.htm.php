<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-19 15:07:26
         compiled from "D:\rcw\uploads\app\template\member\user\integral_reduce.htm" */ ?>
<?php /*%%SmartyHeaderCode:19831192255fb619aec31aa1-97315682%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8268d0e71dc4ff3f20b6f7d39730e9965155ddd' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\member\\user\\integral_reduce.htm',
      1 => 1576479787,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19831192255fb619aec31aa1-97315682',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fb619aec3dac3_53458092',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb619aec3dac3_53458092')) {function content_5fb619aec3dac3_53458092($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="yun_w1200">
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="yun_m_rightbox fltR mt20 re">
    
      <div class="member_right_index_h1 fltL"> <span class="member_right_h1_span fltL"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
管理</span> <i class="member_right_h1_icon user_bg"></i></div>
   <div class="job_list_tit"> <ul class="">
	<li ><a href="index.php?c=integral"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
任务</a></li>
      <li class="job_list_tit_cur"><a href="index.php?c=integral_reduce">消费规则</a></li>
 <li><a href="index.php?c=reward_list"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
兑换</a></li>
	</ul> 
    </div>
      <div class="integral_cont"> 
      <ul class="integral_cont_list">
        <li> <span class="integral_cont_list_span">个人简历置顶费用：</span> <span class="integral_cont_list_span_c" style="border:none">  <b><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_resume_top'];?>
</b> 元 / 天 </span> </li>     
      </ul>
    </div>
  </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
