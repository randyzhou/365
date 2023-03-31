<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-01 01:12:29
         compiled from "D:\rcw\uploads\app\template\member\com\jobserver.htm" */ ?>
<?php /*%%SmartyHeaderCode:8851289495f9d9afdee8a99-79985274%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e78a62117c54abda19b5e6b045232714e44a733e' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\member\\com\\jobserver.htm',
      1 => 1578911159,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8851289495f9d9afdee8a99-79985274',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'statis' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5f9d9afdee9f10_23588676',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9d9afdee9f10_23588676')) {function content_5f9d9afdee9f10_23588676($_smarty_tpl) {?><div id="promote_div" style="display: none;">
	
	<div class="set_tips">
		<div class="set_tips_hello">尊敬的用户您好：</div>
		
		<div class="set_tips_p" id="peomote_etime_div" style="display: none">
			目前置顶职位的到期时间为：<span id="promote_etime"></span>
		</div>
		
		<div class="set_tips_p" id='promote_tc'>
			您的套餐内置顶职位余量为：<span class="set_tips_n"><?php echo $_smarty_tpl->tpl_vars['statis']->value['top_num'];?>
</span>天
		</div>
		
		<div class="set_tips_textbox">
			设置推广天数 
			<input type="text" value="" class="set_tips_text" id="promote_day" name="promote_day" maxlength='3' onkeyup="checkPromoteDay();" oninput="myFunction(this)"> 天
		</div>
		
		<input type="hidden" name="promote_jobid" id="promote_jobid" value="" />
		<input type="hidden" name="promote_type" id="promote_type" value="" />
		<div class="set_tips_bthbox">
			<input type='button' value='确定'  onClick="setJobPromote();" class='set_tips_bth'>
		</div>
	</div>
</div>

<?php }} ?>
