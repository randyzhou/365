<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-07 03:10:10
         compiled from "D:\rcw\uploads\app\template\wap\login.htm" */ ?>
<?php /*%%SmartyHeaderCode:7116495775fa59f925479b1-02196062%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5162103acf1e98fb0b3a4c52fb53dd8f408e9b6' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\wap\\login.htm',
      1 => 1576479742,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7116495775fa59f925479b1-02196062',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'backurl' => 0,
    'wxid' => 0,
    'wxnickname' => 0,
    'wxpic' => 0,
    'maglogin' => 0,
    'config' => 0,
    'config_wapdomain' => 0,
    'checkurl' => 0,
    'wap_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fa59f925794f0_25769280',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fa59f925794f0_25769280')) {function content_5fa59f925794f0_25769280($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/header_cont.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<style type="text/css">
	body {
		background: #fff
	}
	.header_h{ display:none;}
		.header_top_l:after{
    content: ' ';
    width: 12px;
    height: 12px;
    border: #333 solid;
    -webkit-transform: rotate(-135deg);
    border-width: 1px 1px 0 0;
    color: #828282;
    display: inline-block;
}
</style>
<div class="login_body">

<div class="login_tit">  <a class="hd-lbtn" href="<?php if ($_smarty_tpl->tpl_vars['backurl']->value) {
echo $_smarty_tpl->tpl_vars['backurl']->value;
} else { ?>javascript:goBack();<?php }?>"><i class="header_top_l"></i></a>欢迎登录 <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'register'),$_smarty_tpl);?>
" class="login_tit_reg">注册账号</a></div>
	
	<section class="list">
		<article>
			<?php if ($_smarty_tpl->tpl_vars['wxid']->value&&($_smarty_tpl->tpl_vars['wxnickname']->value||$_smarty_tpl->tpl_vars['wxpic']->value)) {?>
			<div class="lg_at">
				<dl>
					<dt><img style="width:75px;height:75px;border-radius:50px;" src="<?php echo $_smarty_tpl->tpl_vars['wxpic']->value;?>
"/></dt>
					<dd class="lg_at_tit"><?php echo $_smarty_tpl->tpl_vars['wxnickname']->value;?>
</dd>
					<dd class="lg_at_cr">您已登录微信账号</dd>
				</dl>
			</div>

			<div class="lg_bd">
				<div class="lg_bd_z">绑定已有账号</div>
				<div class="lg_bd_r">如果您还没有会员账号，
					<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'register'),$_smarty_tpl);?>
">请先注册！</a>
				</div>
			</div>
			<?php }?>
			<!--马甲登录start -->
			<?php if ($_smarty_tpl->tpl_vars['maglogin']->value&&$_smarty_tpl->tpl_vars['maglogin']->value==1) {?>
			<div class="lg_at">
				<dl>
					<dt><img style="width:75px;height:75px;border-radius:50px;" src="<?php echo $_SESSION['mag']['head'];?>
"/></dt>
					<dd class="lg_at_tit"><?php echo $_SESSION['mag']['name'];?>
</dd>
					<dd class="lg_at_cr">您已经登录<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_magwebname'];?>
账号</dd>
				</dl>
			</div>

			<div class="lg_bd">
				<div class="lg_bd_z">绑定已有账号</div>
				<div class="lg_bd_r">如果您还没有会员账号，
					<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'register'),$_smarty_tpl);?>
">请先注册！</a>
				</div>
			</div>
			<?php }?>
			<!--马甲登录end -->
			<!--千帆云登录start -->
			<div id="qfydiv" style="display: none;">
				<div class="lg_at">
					<dl>
						<dt><img style="width:75px;height:75px;border-radius:50px;" id="qfyhead" src=""/></dt>
						<dd class="lg_at_tit" id="qfyname"></dd>
						<dd class="lg_at_cr">您已登录<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_qfywebname'];?>
</dd>
					</dl>
				</div>

				<div class="lg_bd">
					<div class="lg_bd_z">绑定已有账号</div>
					<div class="lg_bd_r">如果您还没有会员账号，<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'register'),$_smarty_tpl);?>
">请先注册！</a></div>
				</div>
			</div>	
			<!--千帆云登录 end-->
	
			<div class=" ">
				<div class="login_body_cont">
					<form action="<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
/index.php?c=login&a=mlogin" method="post" onsubmit="return mlogin(this);">
						<input id="qfyuid" name="qfyuid" type="hidden" value=""/>
						<input type="hidden" name="backurl" id="backurl" value="<?php echo $_smarty_tpl->tpl_vars['backurl']->value;?>
" />
						<input type="hidden" name="act_login" id="act_login" value="0" />
						<input name="usertype" type="hidden" value="<?php echo $_GET['usertype'];?>
" />
						<input name="wxid" type="hidden" value="<?php echo $_GET['wxid'];?>
" /> 
						<?php if ($_GET['job']) {?>
						<input name="job" type="hidden" value="<?php echo $_GET['job'];?>
" /> 
						<?php }?>

						<dl class="forminputitem" id="login_normal_box" style="padding-top:0px;">
							<dd>
								<div class="c inputitem_w">
									<i class="reg_icon_font login_icon_n1 "></i>
									<div class="mui-input-row">
										 <input name="username" type="text" id="username" value="<?php echo $_GET['username'];?>
" placeholder="邮箱/手机号/用户名" class="inputitemtxt mui-input-clear" />
									</div>
									
								</div>
							</dd>
							<dd>
								<div class="c ico_eye_close inputitem_w">
									<i class="reg_icon_font login_icon_n2 "></i>
									<div class="mui-input-row">
		
										<input name="password" type="password" id="password" class="inputitemtxt mui-input-password" placeholder="请输入密码" />
									</div>
								
									
									<em class="viewpwd" id="showPwd" onclick="showPwd(this)"></em>
								</div>
							</dd>
						
                        
                         </dl>
						<!--手机动态码登录-->
						<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_msg_login']==1) {?>
						<div class="login_sj_box" id="login_sj_box" style="display:none;">
							<div class="c inputitem_w">
								<i class="reg_icon_font login_icon_n4 "></i>
								<div class="mui-input-row">
									<input name="moblie" id="usermoblie" type="number" class="inputitemtxt mui-input-clear" value="" placeholder="请输入手机号码" />
								</div>
									
								
								<div class="logoin_msg none" id="show_mobile">
									<div class="logoin_msg_tx">请填写正确的手机号</div>
									<div class="logoin_msg_icon"></div>
								</div>
							</div>
						</div>
						<div class="clear"></div>
						<?php }?> 
						<?php if (strstr($_smarty_tpl->tpl_vars['config']->value['code_web'],'前台登录')) {?>
						<div style="margin-bottom:10px;">
							<?php if ($_smarty_tpl->tpl_vars['config']->value['code_kind']==3||$_smarty_tpl->tpl_vars['config']->value['code_kind']==4) {?>
							<div class="gtdx-captcha">
								<div id="bind-captcha" data-id='sublogin' data-type='submit'></div>
								
								<input type='hidden' id="geetest_challenge"  name="geetest_challenge" value="">
								<input type='hidden' id="geetest_validate"  name="geetest_validate" value="">
								<input type='hidden' id="geetest_seccode"  name="geetest_seccode" value="">
								<input type='hidden' id="dx_token"  name="dx_token" value="">
								<input type='hidden' id="popup-submit">	
								<input type='hidden' id="bind-submit">
							</div>
							<?php } else { ?>
							<div class="c ico_name inputitem_w login_sj_box_mb">
								<i class="reg_icon_font login_icon_tpyz "></i>
								<input class="inputitemtxt" placeholder="请填写验证码，点图片换一换" name="authcode" id="checkcode" type="text" maxlength="6" />
								<div class="rg_img" style="top:12px;">
									<img id="vcode_img" class="authcode" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wapdomain'];?>
/authcode.inc.php" onclick="checkCode('vcode_img');" />
								</div>
							</div>
							<?php }?>
						</div>
						<?php }?> 
						<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_msg_login']==1) {?>
						<div class="login_sj_box_mb" id="login_sjyz_box" style="display:none;">
							<div class="c ico_name inputitem_w">
								<i class="reg_icon_font login_icon_n8 "></i>
								<input name="dynamiccode" type="text" maxlength='6' class="inputitemtxt" id="dynamiccode" value="" placeholder="请输入短信验证码" />
								<div class="logoin_msg none" id="show_dynamiccode">
									<div class="logoin_msg_tx">请填写发送的验证码</div>
									<div class="logoin_msg_icon"></div>
								</div>
								<a href="javascript:void(0);" class="login_m_send2" id="send_msg_tip" onclick="send_msg('<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
/index.php?c=login&a=sendmsg');">获取验证码</a>
							</div>
                               
						</div>
						<?php }?>

						<div class="login_bth"> <input type="submit" name="submit" id="sublogin" value="登录" class="inputSubmit mt15" /></div>
                        <div class="login_otherlogin">
                        	<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_msg_isopen']==1&&$_smarty_tpl->tpl_vars['config']->value['sy_msg_login']==1) {?>
								<div id="mobile_login" class="">手机号快捷登录</div>
							<?php }?>

							<div class="none" id="acount_login" >  账号密码登录	</div>

                         <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'forgetpw'),$_smarty_tpl);?>
" class="login_wjmm">忘记密码</a>
                             </div>

					

						<?php ob_start();
echo smarty_function_url(array('m'=>'wap','c'=>'forgetpw'),$_smarty_tpl);
$_tmp1=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['checkurl']->value!=$_tmp1) {?>
						<input type="hidden" name="checkurl" value="<?php echo $_smarty_tpl->tpl_vars['checkurl']->value;?>
" /> 
						<?php }?>
						
					</form>
					
				</div>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_qqlogin']==1||$_smarty_tpl->tpl_vars['config']->value['sy_sinalogin']==1||($_smarty_tpl->tpl_vars['config']->value['wx_rz']==1&&!$_smarty_tpl->tpl_vars['wxid']->value)) {?>
			<div class="login_other">
				<span class="login_other_span">其他方式登录</span> 
                <i class="login_other_line"></i>
					<?php if ($_smarty_tpl->tpl_vars['config']->value['wx_rz']==1&&!$_smarty_tpl->tpl_vars['wxid']->value) {?>
				<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'wxconnect'),$_smarty_tpl);?>
" title="wx" class="login_other_icon login_other_wx"><i class="iconfont_wx"></i></a>
				<?php }?>
                <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_qqlogin']==1) {?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/qqlogin.php" title="QQ" class="login_other_icon login_other_qq"><i class="iconfont_qq"></i></a>
				<?php }?> 
                <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_sinalogin']==1) {?>
				<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'sinaconnect'),$_smarty_tpl);?>
" title="sina" class="login_other_icon login_other_xl"><i class="iconfont_sina"></i></a>
				<?php }?> 
				
			
			</div>
			<?php }?>
		</article>
	</section>

</div>
<style>
	#popup-captcha-mobile {
		margin-top: 15px;
	}
	
	#popup-captcha-mobile .geetest_radar_btn {
		border: 1px solid #eee
	}
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
<?php if ($_smarty_tpl->tpl_vars['config']->value['code_kind']==3) {?>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/geetest/gt.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/geetest/mobile.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
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
 src="<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
/js/mui/mui.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
	$(document).ready(function() {
		$("#username,#txt_CheckCode,#usermoblie,#dynamiccode").focus(function() {
			var txAreaVal = $(this).val();
			if(txAreaVal == this.defaultValue) {
				$(this).val("");
			}
		}).blur(function() {
			var txAreaVal = $(this).val();
			if(txAreaVal == this.defaultValue || $(this).val() == "") {
				$(this).val(this.defaultValue);
			}
		}).keydown(function(e) {
			var ev = document.all ? window.event : e;
			if(ev.keyCode == 13) {
				check_login('<?php echo smarty_function_url(array('m'=>'login','c'=>'loginsave'),$_smarty_tpl);?>
', 'vcode_imgs');
			} else {
				return;
			}

		});
		//账号登录和手机登录tab选择
		$('#acount_login').click(function(data) {
			$('#acount_login').hide();
			$('#mobile_login').show();
			$('#login_normal_box').show();
			$('#login_sj_box').hide();
			$('#login_sjyz_box').hide();
			$('#act_login').val('0');
			$('#bind-captcha').attr('data-id','sublogin');
			$('#bind-captcha').attr('data-type','submit');
		});
		$('#mobile_login').click(function(data) {
			$('#mobile_login').hide();
			$('#acount_login').show();
			$('#login_sj_box').show();
			$('#login_sjyz_box').show();
			$('#login_normal_box').hide();
			$('#act_login').val('1');
			$('#bind-captcha').attr('data-id','send_msg_tip');
			$('#bind-captcha').attr('data-type','click');
		});
		//千帆云app内获取登录用户信息
		QFH5ready();
	});

	var Timer;
	var smsTimer_time = 90; //倒数 90
	var smsTimer_flag = 90; //倒数 90
	var smsTime_speed = 1000; //速度 1秒钟

	//发送手机短信
	function send_msg(url) {
		var moblie = $('#usermoblie').val();
		var code;
		var geetest_challenge;
		var geetest_validate;
		var geetest_seccode;
		var dx_token;
		if(moblie == "" || moblie == "请输入手机号码") {

			layermsg("请输入手机号码！");
			return false;
		} else {

			var reg = /^[1][3456789]\d{9}$/;
			if(!reg.test(moblie)) {
				layermsg('手机格式错误！');
				return false;
			}
		}
		var codesear = new RegExp('前台登录');
		if(codesear.test(code_web)) {
			if(code_kind == 1) {
				code = $.trim($("#checkcode").val());
				if(!code) {
					layermsg('请填写图片验证码！');
					return false;
				}
			} else if(code_kind == 3) {

				geetest_challenge = $('input[name="geetest_challenge"]').val();
				geetest_validate = $('input[name="geetest_validate"]').val();
				geetest_seccode = $('input[name="geetest_seccode"]').val();

				if(geetest_challenge == '' || geetest_validate == '' || geetest_seccode == '') {
					$("#bind-submit").trigger("click");
					return false; 
				}
			}else if(code_kind==4){
			
					dx_token = $('input[name="dx_token"]').val();
					if(dx_token == ''){
						$("#bind-submit").trigger("click");
						return false; 
					}
				}
		}

		if(smsTimer_time == smsTimer_flag) {
			Timer = setInterval("smsTimer($('#send_msg_tip'))", smsTime_speed);
			layer_load('执行中，请稍候...');
			$.post(url, {
				moblie: moblie,
				authcode: code,
				geetest_challenge: geetest_challenge,
				geetest_validate: geetest_validate,
				geetest_seccode: geetest_seccode,
				dx_token:dx_token
			}, function(data) {
				layer.closeAll(); 
				if(data){
					var res = JSON.parse(data);
					if(res.error != 1){
						clearInterval(Timer);
					}
					layermsg(res.msg, 2, function(){
						if(res.error != 1){
							if(code_kind == 1) {
								checkCode('vcode_img');
								
							} else if(code_kind == 3 || code_kind == 4) {
								$("#popup-submit").trigger("click");
							}
						}
					});
				}
			})
		} else {
			layermsg('请勿重复发送！', 2);
			return false;
		}
	}
	//手机号码校验
	function testMb(mbNo) {

		var reg = /^[1][3456789]\d{9}$/; //验证手机号码   

		return reg.test(mbNo);
	}
	//倒计时
	function smsTimer(obj) {
		if(smsTimer_flag > 0) {
			$(obj).html('重新发送(' + smsTimer_flag + 's)');
			$(obj).attr({
				'style': 'background:#eaebed;'
			});
			smsTimer_flag--;
		} else {
			$(obj).html('重新发送');
			$(obj).attr({
				'style': 'background:#eaebed;'
			});
			smsTimer_flag = smsTimer_time;
			clearInterval(Timer);
		}
	}
	//千帆云app内获取当前登录用户信息
	function QFH5ready(){
		if(typeof QFH5 !== "undefined"){
			QFH5.getUserInfo(function(state,data){
		      if(state==1){
		        //登陆状态，有数据
		        var uid = data.uid;//用户UID int
		        var username = data.username;//用户名称 string
		        var face = data.face;//用户头像地址 string
				document.getElementById('qfyuid').value = uid;
				document.getElementById('qfyname').innerHTML = username;
				document.getElementById('qfyhead').setAttribute('src',face);
				document.getElementById('qfydiv').style.display = 'block';
				$.post('index.php?c=login&a=qfybind',{qfyuid:uid},function(data){
					var jsonObject = eval("(" + data + ")");
					if(jsonObject.error>0){
						window.location.href = wapurl + jsonObject.url;
					}
				})
		      }
		    })
		}
	}
<?php echo '</script'; ?>
>
<div style='display:none;' id='uclogin'></div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
