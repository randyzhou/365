<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-01 02:03:52
         compiled from "D:\rcw\uploads\app\template\member\user\paylog.htm" */ ?>
<?php /*%%SmartyHeaderCode:6799099815f9da70868d879-27447653%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14659877d71b54ed746bf81f30df63b8fe22f1ce' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\member\\user\\paylog.htm',
      1 => 1576479787,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6799099815f9da70868d879-27447653',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rows' => 0,
    'log' => 0,
    'config' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5f9da70869a262_61361551',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9da70869a262_61361551')) {function content_5f9da70869a262_61361551($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="yun_w1200">
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<div class="yun_m_rightbox fltR mt20 re">
		<div class="member_right_index_h1 fltL"> 
			<span class="member_right_h1_span fltL">财务明细</span> 
			<i class="member_right_h1_icon user_bg"></i>
		</div>
	<div>

	<div id="gms_showclew"></div>
	
	<div class="job_list_tit"> 
		<ul class="">
			<li><a href="index.php?c=paylist">充值记录</a></li>
			<li class="job_list_tit_cur"><a href="index.php?c=paylog">账单明细</a></li>
		</ul> 
	</div> 
	
	<div class="resume_box_list mt20">
	<?php if (!empty($_smarty_tpl->tpl_vars['rows']->value)) {?>
		<div class="paylist_tit">
			<div class="paylist_span paylist_dh">流水单号</div>
			<div class="paylist_span paylist_money">财务出入</div>
			<div class="paylist_span paylist_paylong_bz">备注</div>
			<div class="paylist_span paylist_cz"> 操作时间	 </div>
		</div>
	<?php }?>
	<?php  $_smarty_tpl->tpl_vars['log'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['log']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['log']->key => $_smarty_tpl->tpl_vars['log']->value) {
$_smarty_tpl->tpl_vars['log']->_loop = true;
?>
		<?php $_smarty_tpl->tpl_vars["state"] = new Smarty_variable($_smarty_tpl->tpl_vars['log']->value['pay_state'], null, 0);?>
		<div class="paylist_list">
			<div class="paylist_span paylist_dh"><?php echo $_smarty_tpl->tpl_vars['log']->value['order_id'];?>
</div>
			<div class="paylist_span paylist_money">
				<?php echo $_smarty_tpl->tpl_vars['log']->value['order_price'];?>

				<?php if ($_smarty_tpl->tpl_vars['log']->value['type']==2) {?>元
				<?php } else {
echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>

				<?php }?>
			</div>
			<div class="paylist_span paylist_paylong_bz"><?php echo $_smarty_tpl->tpl_vars['log']->value['pay_remark'];?>
&nbsp;</div>
			<div class="paylist_span paylist_cz"><?php echo $_smarty_tpl->tpl_vars['log']->value['pay_time'];?>
 </div>
		</div>
	<?php }
if (!$_smarty_tpl->tpl_vars['log']->_loop) {
?>
		<div class="msg_no">您还没有财务记录</div>
	<?php } ?>
	<div class="diggg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
</div>
</div>
</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
