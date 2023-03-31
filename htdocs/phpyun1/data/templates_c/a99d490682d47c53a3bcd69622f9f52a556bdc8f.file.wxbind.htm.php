<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-11 14:32:05
         compiled from "D:\rcw\uploads\app\template\wap\wxbind.htm" */ ?>
<?php /*%%SmartyHeaderCode:3115255155fab8565789262-91072484%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a99d490682d47c53a3bcd69622f9f52a556bdc8f' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\wap\\wxbind.htm',
      1 => 1576479796,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3115255155fab8565789262-91072484',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'wap_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fab85657984d3_91131612',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fab85657984d3_91131612')) {function content_5fab85657984d3_91131612($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/header_cont.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="clear"></div>
<div class="qqconnect_box">
	<div class="qqconnect_box_pic"><img width="100px;" height="100px;" src="<?php echo $_SESSION['wx']['pic'];?>
"></div>
	<div class="qqconnect_box_p"><?php echo $_SESSION['wx']['nickname'];?>
</div>
	<div class="qqconnect_box_p" style="padding-top:5px;">尊敬的微信用户</div>
	<div class="qqconnect_box_p_tip">请关联一个<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
账号，便于您下次快速登录</div>
	<div class="qqconnect_box_list_box">
		<div class="qqconnect_box_list">
			<input type="text" id="username" value="" class="qqconnect_box_text" placeholder="用户名/邮箱/手机号">
		</div>
		<div class="qqconnect_box_list">
			<input type="password" id="password" value="" class="qqconnect_box_text" placeholder="密码"></div>
		<div class="qqconnect_box_bth">
			<input type="button" value="绑定我的账户" onclick="binduser('<?php echo smarty_function_url(array('m'=>'wap','c'=>'wxconnect','a'=>'wxbind'),$_smarty_tpl);?>
');" class="qqconnect_box_sumit">
		</div>
		<div class="qqconnect_box_bth2"> 
			<input type="button" value=" 注册新账户" class="qqconnect_box_sumit2" onclick="window.location.href='<?php echo smarty_function_url(array('m'=>'wap','c'=>'register'),$_smarty_tpl);?>
'" />
		</div>
		<input type="hidden" id="wxoauth" value="<?php echo $_GET['wxoauth'];?>
"/>
	</div>
</div>

<style>
	body {background: #fff}
</style>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/prefixfree.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
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
>
	var wapurl = "<?php echo smarty_function_url(array('m'=>'wap'),$_smarty_tpl);?>
";
	// 判断安卓物理返回键,从wxoauth来的,返回首页;其他的正常返回
	var u = navigator.userAgent;
    var isAndroid = u.indexOf('Android') > -1 || u.indexOf('Adr') > -1; //android终端

    if(isAndroid) {
		$(function(){
			var wxoauth = $('#wxoauth').val();
			history.pushState(null, null, location.href);
			window.addEventListener('popstate', function(event) {
				history.pushState(null, null, location.href);
				if(wxoauth == '1'){
					location.href = wapurl;
				}else{
					window.history.go( -1 );
				}
			});
		})
	}
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
