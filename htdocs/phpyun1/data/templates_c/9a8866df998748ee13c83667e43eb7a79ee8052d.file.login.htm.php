<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-10-31 16:34:10
         compiled from "D:\rcw\uploads\app\template\default\public_search\login.htm" */ ?>
<?php /*%%SmartyHeaderCode:18233776585f9d2182a1bed5-51489929%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a8866df998748ee13c83667e43eb7a79ee8052d' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\default\\public_search\\login.htm',
      1 => 1586223575,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18233776585f9d2182a1bed5-51489929',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'admincache' => 0,
    'style' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5f9d2182a45998_53684750',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9d2182a45998_53684750')) {function content_5f9d2182a45998_53684750($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
?><?php if (!$_COOKIE['uid']||$_smarty_tpl->tpl_vars['admincache']->value=='1') {?>
<!--当前登录-->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/tck_logoin.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
<div class="none" id="onlogin">
	<!-- 登录弹出框-->
	<div class="login_pop_up_box">
		<div class="login_pop_up_box_right">
	
			
			<div id="login_normal">
				<div class="login_pop_up_box_title">
                <div class="login_pop_up_box_title_b">
					<input type="hidden" name="act" id="act_login" value="0" />
					<ul>
                       <li id="acount_login" class="login_pop_up_cur">账号登录<i class="login_pop_up_curline"></i></li>
                        <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_msg_isopen']==1&&$_smarty_tpl->tpl_vars['config']->value['sy_msg_login']==1) {?>
						<li id="mobile_login">短信登录<i class="login_pop_up_curline"></i></li>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['config']->value['wx_author']=='1') {?>
						<li id="code_login" >扫码登录<i class="login_pop_up_curline"></i></li>
                        <?php }?>
					</ul>
				</div></div>
				<!---------------扫码登录页面---------------------->
				<div class="wx_login_show none">
					<div id="wx_login_qrcode" class="wxlogintext">正在获取二维码...</div>
					<div class="wxlogintxt">请使用微信扫一扫登录</div>
                  
				</div>
			<!------------------扫码登录页面end-->
				<div id="login_normal_box">
					<div class="login_pop_up_box_text"><i class="login_pop_up_box_icon login_pop_up_box_icon_zh"></i>
						<input type="text" id="username" placeholder="手机/会员名/邮箱" name="username" class="login_pop_up_box_t" autocomplete="off" />
						<!--提示-->
						<div class="login_pop_up_msg none" id="show_name">
							<div class="login_pop_up_msg_tx">请填写用户名</div>
							<div class="login_pop_up_msg_icon"></div>
						</div>
					</div>
					<div class="login_pop_up_box_text"><i class="login_pop_up_box_icon login_pop_up_box_icon_mm"></i>
						<input type="password" id="password" name="password" placeholder="请输入密码" class="login_pop_up_box_t" autocomplete="off" />
						<div class="login_pop_up_msg none" id="show_pass">
							<div class="login_pop_up_msg_tx">请填写密码</div>
							<div class="login_pop_up_msg_icon"></div>
						</div>
					</div>
				</div>
				<!--    手机动态码登录样式-->
				<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_msg_isopen']==1&&$_smarty_tpl->tpl_vars['config']->value['sy_msg_login']==1) {?>
				<div class="none" id="login_sj_box">
					<div class="login_pop_up_box_text"><i class="login_pop_up_box_icon login_pop_up_box_icon_sj"></i>
						<input type="text" id="usermoblie" placeholder="请输入手机号码" name="username" class="login_pop_up_box_t" autocomplete="off" />
						<div class="login_pop_up_msg none" id="show_mobile">
							<div class="login_pop_up_msg_tx">请填写正确手机号</div>
							<div class="login_pop_up_msg_icon"></div>
						</div>
					</div>
				</div>
				<?php }?> 
                
				<?php if (strpos($_smarty_tpl->tpl_vars['config']->value['code_web'],"前台登录")!==false) {?> 
				<?php if ($_smarty_tpl->tpl_vars['config']->value['code_kind']==3) {?>

				
				<div class="gtdx-captcha">
					
					
					<input type='hidden' id="geetest_challenge"  name="geetest_challenge" value="">
					<input type='hidden' id="geetest_validate"  name="geetest_validate" value="">
					<input type='hidden' id="geetest_seccode"  name="geetest_seccode" value="">
					<input type='hidden' id="popup-submit">	
					<input type='hidden' id="bind-submit">
				</div>
				<?php } elseif ($_smarty_tpl->tpl_vars['config']->value['code_kind']==4) {?>
				
				<div class="gtdx-captcha">
					<input type='hidden' id="dx_token"  name="dx_token" value="">
					<input type='hidden' id="popup-submit">	
					<input type='hidden' id="bind-submit">
				</div>
		
				<?php } else { ?>
				<div class="login_pop_up_box_yztext"><i class="login_pop_up_box_icon login_pop_up_box_icon_yz"></i>
					<input id="txt_CheckCode" type="text" maxlength="6" name="authcode" autocomplete="off" placeholder="请输入验证码" class="login_pop_up_box_t">
					<div class="login_pop_up_box_yzimg">
						<img id="vcode_img" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/include/authcode.inc.php" onclick="checkCode('vcode_img');" style="margin-right:5px; margin-left:5px;cursor:pointer;" />
					</div>
					<div class="login_pop_up_msg none" id="show_code">
						<div class="login_pop_up_msg_tx">请填写验证码</div>
						<div class="login_pop_up_msg_icon"></div>
					</div>
					<input type="hidden" id="login_codekind" value="1" />
				</div>
				<?php }?> 
				<?php } else { ?>
				<input type="hidden" id="login_codekind" value="0" /> 
				<?php }?>
				<div class="clear"></div>
				<div class="none" id="login_sjyz_box">
					<div class="login_pop_up_box_sjtext"><i class="login_pop_up_box_icon login_pop_up_box_icon_dx"></i>
						<input id="dynamiccode" type="text" tabindex="3" maxlength="6" name="authcode" autocomplete="off" placeholder="请输入短信验证码" class="login_pop_up_box_t">
						<div class="login_pop_up_msg none" id="show_dynamiccode">
							<div class="login_pop_up_msg_tx">请填写短信动态码</div>
							<div class="login_pop_up_msg_icon"></div>
						</div>
						<a href="javascript:void(0);" class=" login_pop_up_box_yztext_hq" id="send_msg_tip" onclick="send_msg2('<?php echo smarty_function_url(array('m'=>'login','c'=>'sendmsg'),$_smarty_tpl);?>
');">发送动态码</a>
                        <i class="login_pop_up_box_yztext_line"></i>
					</div>
				</div>
				<input type="hidden" id="login_usertype" />
				<input id="sublogin" class="login_pop_up_box_bth" type="button" onclick="check_login('<?php echo smarty_function_url(array('m'=>'login','c'=>'loginsave'),$_smarty_tpl);?>
','vcode_img',1);" value="登 录">
				
				<div class="login_pop_up_box_fot">
                	没有账号？<a href="###" id="onregister" target="_blank">立即注册</a>
					<a href="<?php echo smarty_function_url(array('m'=>'forgetpw'),$_smarty_tpl);?>
" class="login_pop_up_box_rightreg">忘记密码？</a>
					
				</div>
                 <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_qqlogin']==1||$_smarty_tpl->tpl_vars['config']->value['sy_sinalogin']==1||$_smarty_tpl->tpl_vars['config']->value['wx_author']==1) {?>
                
				<div class="login_pop_up_box_other"><div class="login_pop_up_box_othertit"><span class="login_pop_up_box_othertit_n">其他方式登录</span></div>
					<?php if ($_smarty_tpl->tpl_vars['config']->value['wx_author']==1) {?>
					<a href="<?php echo smarty_function_url(array('m'=>'wxconnect'),$_smarty_tpl);?>
" class="login_pop_up_box_other_wx"></a>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_qqlogin']==1) {?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/qqlogin.php" class="login_pop_up_box_other_qq"></a>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_sinalogin']==1) {?>
					<a href="<?php echo smarty_function_url(array('m'=>'sinaconnect'),$_smarty_tpl);?>
" class="login_pop_up_box_other_sina"></a>
					<?php }?> 
				</div>
                   <?php }?>
			</div>
		</div>
	</div>
</div>
<div id="bind-captcha" data-id='sublogin' data-type='click'></div>
<?php if ($_smarty_tpl->tpl_vars['config']->value['code_kind']==3) {?>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/geetest/gt.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/geetest/pc.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
>
<?php } elseif ($_smarty_tpl->tpl_vars['config']->value['code_kind']==4) {?>
<?php echo '<script'; ?>
 src="https://cdn.dingxiang-inc.com/ctu-group/captcha-ui/index.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>var dxappid = "<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_dxappid'];?>
";<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/dingxiang/pc.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
>
<?php }?>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/js/reg_ajax.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
	var code_kind = '<?php echo $_smarty_tpl->tpl_vars['config']->value['code_kind'];?>
';
	function showlogin(usertype) {
		checkCode('vcode_img');
		$("#login_usertype").val(usertype);
   
		var reg_moblie = '<?php echo $_smarty_tpl->tpl_vars['config']->value['reg_moblie'];?>
';
		var reg_email = '<?php echo $_smarty_tpl->tpl_vars['config']->value['reg_email'];?>
';
		$("#onregister").attr("href", '<?php echo smarty_function_url(array('m'=>'register'),$_smarty_tpl);?>
');
		$('#bind-captcha').attr('data-id','sublogin');
		$("#bind-captcha").attr('data-type','click');
		
		$.layer({
			id: 'onloginid',
			type: 1,
			title: '欢迎登录',
			closeBtn: [0, true],
			offset: ['20%'],
			border: [10, 0.3, '#000', true],
			area: ['410px', 'auto'],
			zIndex:100,
			page: {
				dom: "#onlogin"
			}
		});
	}
	$(document).ready(function() {

		
		var setval;

		//账号登录和手机登录tab选择
		$('#acount_login').click(function(data) {
			$('#acount_login').removeClass().addClass('login_pop_up_cur');
			$('#mobile_login').removeClass();
			$('#code_login').removeClass();
			$('#login_normal_box').show();
			$('#sublogin').show();
			$('#login_sj_box').hide();
			$('.logoin_tck_t_list').show();
			$('.login_pop_up_box_yztext').show();
			$('.login_pop_up_box_fot').show();
			$('.login_pop_up_box_other').show();
			$('#login_sjyz_box').hide();
			$('.wx_login_show').hide();
			$('#act_login').val('0');
			$('#bind-captcha').attr('data-id','sublogin');
		});
		$('#mobile_login').click(function(data) {
			$('#mobile_login').removeClass().addClass('login_pop_up_cur');
			$('#acount_login').removeClass();
			$('#code_login').removeClass();
			$('#login_sj_box').show();
			$('.logoin_tck_t_list').show();
			$('.login_pop_up_box_yztext').show();
			$('#login_sjyz_box').show();
			$('#sublogin').show();
			$('#login_normal_box').hide();
			$('.wx_login_show').hide();
			$('.login_pop_up_box_fot').show();
			$('.login_pop_up_box_other').show();
			$('#act_login').val('1');
			
			$('#bind-captcha').attr('data-id','send_msg_tip');
		});
		$('#code_login').click(function(data) {
			$('#code_login').removeClass().addClass('login_pop_up_cur');
			$('#acount_login').removeClass();
			$('#mobile_login').removeClass();
			$('#login_sj_box').hide();
			$('.logoin_tck_t_list').hide();
			$('.login_pop_up_box_yztext').hide();
			$('.login_pop_up_box_fot').hide();
			$('.login_pop_up_box_other').hide();
			$('#login_sjyz_box').hide();
			$('#login_normal_box').hide();
			$('#sublogin').hide();
			$('.wx_login_show').show();
			
			$.post('<?php echo smarty_function_url(array('m'=>'login','c'=>'wxlogin'),$_smarty_tpl);?>
', {
				t: 1
			}, function(data) {
				if(data == 0) {
					$('#wx_login_qrcode').html('二维码获取失败..');
				} else {
					$('#wx_login_qrcode').html('<img src="' + data + '" width="100" height="100">');
					setval = setInterval(function(){
						$.post('<?php echo smarty_function_url(array('m'=>'login','c'=>'getwxloginstatus'),$_smarty_tpl);?>
', {
							t: 1
						}, function(data) {
							var data = eval('(' + data + ')');
							if(data.url != '' && data.msg != '') {
								clearInterval(setval);
								layer.msg(data.msg, 2, 9, function() {
									window.location.href = data.url;
								});
							} else if(data.url) {
								clearInterval(setval);
								window.location.href = '';
							}
						});
					}, 2000);
				}
			});
		});
	});

	
<?php echo '</script'; ?>
>
<?php }?><?php }} ?>
