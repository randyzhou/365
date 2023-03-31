<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-11 12:47:44
         compiled from "D:\rcw\uploads\app\template\wap\advice.htm" */ ?>
<?php /*%%SmartyHeaderCode:13980893605fab6cf0bc36c0-43471295%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27489c4305d3f6693d675b436b175f80ce2103f8' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\wap\\advice.htm',
      1 => 1576479791,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13980893605fab6cf0bc36c0-43471295',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'config' => 0,
    'wap_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fab6cf0bcc014_83255634',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fab6cf0bcc014_83255634')) {function content_5fab6cf0bcc014_83255634($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/header_cont.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="">
	<div class="fk_box_lx">
	<div class="fk_box_tit">反馈你的问题</div>
        <span class="advice_list_fs" data-code="1">建议</span> 
		<span class="advice_list_fs" data-code="2">意见</span>
		<span class="advice_list_fs" data-code="3">求助</span> 
		<span class="advice_list_fs" data-code="4">投诉</span> 
		<input type="hidden" name="infotype" />
    <div class="fk_textarea"><textarea class="advice_list_textarea" id="content" name="content" data-id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" placeholder="留下您的意见或反馈，我们会不断改进~"></textarea></div>
    	</div>
	<div class="advice_list_c">
	<div class="advice_list">
		<span class="advice_list_s">联系人</span>
		<input class="advice_list_text" name="username" id="username" type="text" placeholder="请输入您的姓名" value="">
	</div>
	
	<div class="advice_list ">
		<span class="advice_list_s">联系手机</span>
		<input class="advice_list_text" name="moblie" id="moblie" type="text" placeholder="请输入手机号" value="">
	</div>
	

	
	<div class="advice_list ">
		<span class="advice_list_s">验证码</span>
		<div class="advice_list_yz">
			<input class="zx_yx_input" id="msg_CheckCode" type="text" placeholder="请输入验证码" value="" maxlength="6" name="authcode">
		</div>
		<img class="advice_list_yzm" id="vcode_imgs" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wapdomain'];?>
/authcode.inc.php" onclick="checkCode('vcode_imgs');">
	</div>
    </div>
	<div class="advice_list_but mt15">
		<input class="" type="submit" name="submit" value="提交" onclick="advice('vcode_imgs');">
	</div>
</div>

<div class="advice_list_p">
	尊敬的用户您好!<br>我们将在第一时间及时回复您的反馈，如您的问题比较紧急，请致电服务热线!
	<div>客服热线：<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>
</div>
</div>
<style>
body{ background:#fff}
</style>
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

<?php echo '<script'; ?>
>
	$(document).ready(function() {

		$("#username,#telphone,#content,#txt_CheckCode").focus(function() {
		
			var txValue = $(this).val();
			
			if (txValue == this.defaultValue) {
				$(this).val('');
			}
		});
		
		$('.advice_list_fs').click(function(event) {
		
			$('.advice_list_fs').each(function(index, el) {
				$(this).removeClass('advice_list_fs_cur');
			});
			$(this).addClass('advice_list_fs_cur');
			$('input[name="infotype"]').val($(this).data('code'));
		});
	});
	
	function advice(img) {
		var infotype 	= 	$.trim($('input[name="infotype"]').val());
		var content 	= 	$.trim($("#content").val());
		var username 	= 	$.trim($("#username").val());
		var moblie 		= 	$.trim($("#moblie").val());
		var authcode 	= 	$.trim($("#msg_CheckCode").val());
		var reg 		= 	/^[1][3456789]\d{9}$/;
		
		if (infotype == '') {
			layermsg("请选择意见类型", 2);
			return false;
		}
		
		if (username == "") {
			layermsg('联系人不能空!', 2);
			return false;
		}

		if (moblie == "") {
			layermsg('联系手机不能为空!', 2);
			return false;
		} else if (!reg.test(moblie)) {
			layermsg('手机格式错误!', 2);
			return false
		}

		if (content == "") {
			layermsg('反馈内容不能为空!', 2);
			return false;
		}
		if (authcode == "") {
			layermsg('验证码不能为空!', 2);
			return false;
		}
		
		layer_load('执行中，请稍候');
		
		$.post(wapurl + "/index.php?c=advice&a=saveadd", {
			infotype : infotype,
			content : content,
			username : username,
			moblie : moblie,
			authcode : authcode
		}, function(data) {
			layer.closeAll();
			var data = eval('(' + data + ')');
			
			if (data.errcode == "8" && !data.url) {
				layermsg(data.msg, 2, function() {
					checkCode(img)
				});
				return false;
			} else if (data.errcode == 9) {
				layermsg(data.msg, 2, function() {
					window.location.href = data.url
				});
				return false;
			} else {
				layermsg(data.msg, 2, function() {
					window.location.href = data.url
				});
				return false;
			}
		});
	}
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
