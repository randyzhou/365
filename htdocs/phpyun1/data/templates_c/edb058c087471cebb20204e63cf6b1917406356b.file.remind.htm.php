<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-05 13:46:02
         compiled from "D:\rcw\uploads\app\template\\member\public\remind.htm" */ ?>
<?php /*%%SmartyHeaderCode:14638204265fa3919ab257c7-72771918%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'edb058c087471cebb20204e63cf6b1917406356b' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\\\member\\public\\remind.htm',
      1 => 1591002067,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14638204265fa3919ab257c7-72771918',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'remindInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fa3919ab2efb3_87539504',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fa3919ab2efb3_87539504')) {function content_5fa3919ab2efb3_87539504($_smarty_tpl) {?><link href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/member/com/images/tips.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css"/>
<!-- 引导完善信息 -->
<div class="yun_prompt_box none" id="remind">
	
	<div class="yun_tipsbox_tit">
		<span class="yun_tipsbox_tit_name">温馨提示</span>
		<a href="javascript:void(0)"  class="yun_tipsbox_close toinfo"></a>
	</div>
 	
 	<div class="yun_prompt_writingicon"><i class="yun_prompt_writingicon_noright"></i></div>
	
	<div class="yun_prompt_writing"><?php echo $_smarty_tpl->tpl_vars['remindInfo']->value['title'];?>
</div>
	
	
	 
	<div class="yun_prompt_writing_tip" id='zzrz_msg'><?php echo $_smarty_tpl->tpl_vars['remindInfo']->value['msg'];?>
</div>
 	
	<div class="yun_prompt_writing_operation">
	    <a href="javascript:void(0)" class="yun_prompt_writing_operation_bth toinfo">立即完善</a>
	</div>

</div>
	<!--提示部分  end-->
<?php echo '<script'; ?>
>
$(function(){
	var url = '<?php echo $_smarty_tpl->tpl_vars['remindInfo']->value['url'];?>
';
	layui.use('layer', function(){
	var layer = layui.layer;
  
	  
		layer.open({
			type: 1,
			skin: 'yun_skin',
			title: false,
			closeBtn : 0,
			area : [ '450px', '320px' ],
			content: $('#remind') 
		});
	});  
	 

	$('.toinfo').click(function(){window.location.href=url;});

});
<?php echo '</script'; ?>
><?php }} ?>
