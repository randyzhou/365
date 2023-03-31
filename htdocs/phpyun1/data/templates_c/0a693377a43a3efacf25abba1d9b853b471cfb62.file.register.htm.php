<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-07 09:53:05
         compiled from "D:\rcw\uploads\app\template\wap\register.htm" */ ?>
<?php /*%%SmartyHeaderCode:8332636435fa5fe011e54f1-73857993%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a693377a43a3efacf25abba1d9b853b471cfb62' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\wap\\register.htm',
      1 => 1578652591,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8332636435fa5fe011e54f1-73857993',
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
    'type' => 0,
    'xieyi' => 0,
    'yinsi' => 0,
    'wap_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fa5fe01224ae2_44605171',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fa5fe01224ae2_44605171')) {function content_5fa5fe01224ae2_44605171($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/header_cont.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	
<style>
    body {background: #fff; position:relative}
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
<div class="login_tit">  <a class="hd-lbtn" href="<?php if ($_smarty_tpl->tpl_vars['backurl']->value) {
echo $_smarty_tpl->tpl_vars['backurl']->value;
} else { ?>javascript:goBack();<?php }?>"><i class="header_top_l"></i></a>欢迎注册 <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'login'),$_smarty_tpl);?>
" class="login_tit_reg">登录已有账号</a></div>
<div class="yunwapreg_box">

 
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
			</div>	
			<!--千帆云登录 end-->
			
            <div class="regform">
                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
/index.php?c=register" onsubmit="return checkRegUser(this);" autocomplete="off">
                    <input id="qfyuid" name="qfyuid" type="hidden" value=""/>
                    <input name="regway" id="regway" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" />
				
                    <dl class="forminputitem">

                        <?php if ($_smarty_tpl->tpl_vars['config']->value['reg_email']=='1'&&$_smarty_tpl->tpl_vars['type']->value==3) {?>
                        <dd>
                            <div class="c ico_name inputitem_w">
                                <i class="reg_icon_font login_icon_n3 "></i>
								<div class="mui-input-row">
									<input class="inputitemtxt mui-input-clear" placeholder="请填写您的邮箱" name="email" id="email" type="text" onBlur="check_email();">
								</div>
								
                                
                                <span class="reg_yes" style="display: none;" id="email_yes"></span>
                            </div>
                        </dd>
                        <dd>
                            <div class="c ico_pwd2 inputitem_w">
                                <i class="reg_icon_font login_icon_n2"></i>
								<div class="mui-input-row">
		
									 <input class="inputitemtxt mui-input-password" onfocus="this.type='password'" placeholder="请填写密码，建议填写字母数字组合" name="password" id="password" type="text" onblur="check_password();">
								</div>
								
                               
                                <span class="reg_yes" style="display: none;" id="password_yes"></span>
                                <em class="viewpwd"></em></div>
                        </dd>

                        <?php if ($_smarty_tpl->tpl_vars['config']->value['reg_passconfirm']=='1') {?>
                        <dd>
                            <div class="c ico_pwd2 inputitem_w">
                                <i class="reg_icon_font login_icon_n2 "></i>
								<div class="mui-input-row">
		
									<input class="inputitemtxt mui-input-password" onfocus="this.type='password'" placeholder="请确认填写的密码" name="passconfirm" id="passconfirm" type="text" onblur="check_passconfirm();">
								</div>
                                
                                <span class="reg_yes" style="display: none;" id="passconfirm_yes"></span>
                                <em class="viewpwd"></em></div>
                        </dd>
                        <?php }?> 
						
						<?php if (strpos($_smarty_tpl->tpl_vars['config']->value['code_web'],"注册会员")!==false) {?>
                        <dd>
                           <?php if ($_smarty_tpl->tpl_vars['config']->value['code_kind']==3||$_smarty_tpl->tpl_vars['config']->value['code_kind']==4) {?>
						<div class="gtdx-captcha">
							<?php if ($_smarty_tpl->tpl_vars['config']->value['reg_real_name_check']==1) {?>
							<div id="bind-captcha" data-id='send_msg_tips' data-type='click'></div>
							<?php } else { ?>
							<div id="bind-captcha" data-id='subreg' data-type='submit'></div>
							<?php }?>
							<input type='hidden' id="geetest_challenge"  name="geetest_challenge" value="">
							<input type='hidden' id="geetest_validate"  name="geetest_validate" value="">
							<input type='hidden' id="geetest_seccode"  name="geetest_seccode" value="">
							<input type='hidden' id="dx_token"  name="dx_token" value="">
							<input type='hidden' id="popup-submit">	
							<input type='hidden' id="bind-submit">
						</div>
							
							
							<?php } else { ?>
                            <div class="c ico_name inputitem_w">
                                <i class="reg_icon_font login_icon_tpyz "></i>
                                <div class="reg_yzm_box"> 
								<div class="mui-input-row">
									<input class="inputitemtxt" placeholder="请填写验证码，点图片换一换" name="checkcode" id="checkcode" type="text" maxlength="6" onblur="check_code()" />
								</div>
								
                                    <div class="rg_img">
                                        <img id="vcodeimg" class="authcode" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wapdomain'];?>
/authcode.inc.php" onclick="checkCode('vcodeimg');" />
                                    </div>
                                </div>
                                <span class="reg_yes reg_yes_yz" style="display: none;" id="checkcode_yes"></span>
                            </div>
                            <?php }?>
                        </dd>
                        <?php }?>  
						
						<?php if ($_smarty_tpl->tpl_vars['config']->value['reg_real_name_check']==1) {?>
						<dd>
                            <div class="c ico_name inputitem_w">
                                <i class="reg_icon_font login_icon_n4 "></i>
                                <input class="inputitemtxt" placeholder="请填写您的手机号码" name="moblie" id="moblie" type="tel" onBlur="check_moblie();" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')">
                                <span class="reg_yes" style="display: none;" id="moblie_yes"></span>
                            </div>

                        </dd>
                        <dd>
                            <div class="c ico_name inputitem_w">
                                <i class="reg_icon_font login_icon_n9 "></i>
								<div class="mui-input-row">
									 <input class="inputitemtxt" maxlength="6"  placeholder="请填写短信验证码" name="moblie_code" id="moblie_code" type="text" onblur="check_moblie_code()" />
								</div>
                                <div class="rg_nmb">
                                    <a class="login_m_send2" href="javascript:void(0);" id="send_msg_tips" onclick="sendmsg('vcode_img');"><span id="time">获取验证码</span></a>

                                    <span class="reg_yes" style="display: none;" id="moblie_code_yes"></span>
                                </div> </div>
                        </dd>
                        <?php }?> 
						
						<?php } elseif ($_smarty_tpl->tpl_vars['type']->value==2||$_smarty_tpl->tpl_vars['type']->value=='') {?>
                        <dd>
                            <div class="c ico_name inputitem_w">
                                <i class="reg_icon_font login_icon_n4 "></i>
								<div class="mui-input-row">
									 <input class="inputitemtxt mui-input-clear" placeholder="请填写您的手机号码" name="moblie" id="moblie" type="tel" onBlur="check_moblie();" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')">
								</div>
                               
                                <span class="reg_yes" style="display: none;" id="moblie_yes"></span>
                            </div>

                        </dd>
						<?php if (strpos($_smarty_tpl->tpl_vars['config']->value['code_web'],"注册会员")!==false) {?>
                        <dd>
                            <?php if ($_smarty_tpl->tpl_vars['config']->value['code_kind']==3||$_smarty_tpl->tpl_vars['config']->value['code_kind']==4) {?>
							<input type='hidden' id="noblur" value="1" />
							<div class="gtdx-captcha">
							<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_msg_regcode']==1||$_smarty_tpl->tpl_vars['config']->value['reg_real_name_check']==1) {?>
							<div id="bind-captcha" data-id='send_msg_tips' data-type='click'></div>
							<?php } else { ?>
							<div id="bind-captcha" data-id='subreg' data-type='submit'></div>
							<?php }?>
							
							<input type='hidden' id="geetest_challenge"  name="geetest_challenge" value="">
							<input type='hidden' id="geetest_validate"  name="geetest_validate" value="">
							<input type='hidden' id="geetest_seccode"  name="geetest_seccode" value="">
							<input type='hidden' id="dx_token"  name="dx_token" value="">
							<input type='hidden' id="popup-submit">	
							<input type='hidden' id="bind-submit">
						</div>
							<?php } else { ?>
                            <div class="c ico_name inputitem_w">
                                <i class="reg_icon_font login_icon_tpyz "></i>
                                <div class="reg_yzm_box"> 
								<div class="mui-input-row">
									<input class="inputitemtxt" placeholder="请填写验证码，点图片换一换" name="checkcode" id="checkcode" type="text" maxlength="6" onblur="check_code()" />
								</div>
								
								
                                    <div class="rg_img">
                                        <img id="vcode_img" class="authcode" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wapdomain'];?>
/authcode.inc.php" onclick="checkCode('vcode_img');" />
                                    </div>
                                </div>
                                <span class="reg_yes reg_yes_yz" style="display: none;" id="checkcode_yes"></span>
                            </div>
                            <?php }?>
                        </dd>
                        <?php }?>
                        <dd>
                            <div class="c ico_name inputitem_w">
                                <i class="reg_icon_font login_icon_n9 "></i>
								<div class="mui-input-row">
									<input class="inputitemtxt" maxlength="6"  placeholder="请填写短信验证码" name="moblie_code" id="moblie_code" type="text" onblur="check_moblie_code()" />
								</div>
								
                                <a class="login_m_send2" href="javascript:void(0);" id="send_msg_tips" onclick="sendmsg('vcode_img');"><span id="time">获取验证码</span></a>

                                <span class="reg_yes reg_yes_yz" style="display: none;" id="moblie_code_yes"></span>
                            </div>
                        </dd>

                        <dd>
                            <div class="c ico_pwd2 inputitem_w">
                                <i class="reg_icon_font login_icon_n2 "></i>
								<div class="mui-input-row">
		
									<input class="inputitemtxt mui-input-password" onfocus="this.type='password'" placeholder="请填写密码，建议填写字母数字组合" name="password" id="password" type="text" onblur="check_password();">
								</div>
		
                                
                                <span class="reg_yes" style="display: none;" id="password_yes"></span>
                                <em class="viewpwd"></em></div>
                        </dd>

                        <?php if ($_smarty_tpl->tpl_vars['config']->value['reg_passconfirm']=='1') {?>
                        <dd>
                            <div class="c ico_pwd2 inputitem_w">
                                <i class="reg_icon_font login_icon_n2 "></i>
								<div class="mui-input-row">
		
									<input class="inputitemtxt mui-input-password" onfocus="this.type='password'" placeholder="请确认填写的密码" name="passconfirm" id="passconfirm" type="text" onblur="check_passconfirm();">
								</div>
                                <span class="reg_yes" style="display: none;" id="passconfirm_yes"></span>
                                <em class="viewpwd"></em>
                            </div>
                        </dd>
                        <?php }?> 
						
						
						
						<?php } elseif ($_smarty_tpl->tpl_vars['type']->value==1) {?>
                        <dd>
                            <div class="c ico_name inputitem_w">
                                <i class="reg_icon_font login_icon_n1 "></i>
								<div class="mui-input-row">
									<input class="inputitemtxt mui-input-clear" placeholder="请填写用户名" name="username" id="username" type="text" onblur="check_username();">
								</div>
                                <span class="reg_yes" style="display: none;" id="username_yes"></span>
                            </div>
                        </dd>
                        <dd>
                            <div class="c ico_pwd2 inputitem_w">
                                <i class="reg_icon_font login_icon_n2 "></i>
								<div class="mui-input-row">
		
									<input class="inputitemtxt mui-input-password" onfocus="this.type='password'" placeholder="请填写密码，建议填写字母数字组合" name="password" id="password" type="text" onblur="check_password();">
								</div>
                                
                                <span class="reg_yes" style="display: none;" id="password_yes"></span>
                                <em class="viewpwd"></em></div>
                        </dd>

                        <?php if ($_smarty_tpl->tpl_vars['config']->value['reg_passconfirm']=='1') {?>
                        <dd>
                            <div class="c ico_pwd2 inputitem_w">
                                <i class="reg_icon_font login_icon_n2 "></i>
								<div class="mui-input-row">
		
									<input class="inputitemtxt mui-input-password" onfocus="this.type='password'" placeholder="请确认填写的密码" name="passconfirm" id="passconfirm" type="text" onblur="check_passconfirm();">
								</div>
                                <span class="reg_yes" style="display: none;" id="passconfirm_yes"></span>
                                <em class="viewpwd"></em></div>
                        </dd>
                        <?php }?> <?php if (strpos($_smarty_tpl->tpl_vars['config']->value['code_web'],"注册会员")!==false) {?>
                        <dd>
                           <?php if ($_smarty_tpl->tpl_vars['config']->value['code_kind']==3||$_smarty_tpl->tpl_vars['config']->value['code_kind']==4) {?>
						<div class="gtdx-captcha">
							<?php if ($_smarty_tpl->tpl_vars['config']->value['reg_real_name_check']==1) {?>
							<div id="bind-captcha" data-id='send_msg_tips' data-type='click'></div>
							<?php } else { ?>
							<div id="bind-captcha" data-id='subreg' data-type='submit'></div>
							<?php }?>
							<input type='hidden' id="geetest_challenge"  name="geetest_challenge" value="">
							<input type='hidden' id="geetest_validate"  name="geetest_validate" value="">
							<input type='hidden' id="geetest_seccode"  name="geetest_seccode" value="">
							<input type='hidden' id="dx_token"  name="dx_token" value="">
							<input type='hidden' id="popup-submit">	
							<input type='hidden' id="bind-submit">
						</div>
							
							
							<?php } else { ?>

                            <div class="c ico_name inputitem_w">
                                <i class="reg_icon_font login_icon_tpyz "></i>
                                <div class="reg_yzm_box"> 
								<div class="mui-input-row">
									<input class="inputitemtxt" placeholder="请填写验证码，点图片换一换" name="checkcode" id="checkcode" type="text" maxlength="6" onblur="check_code()" />
								</div>
								
                                    <div class="rg_img">
                                        <img id="vcode_img" class="authcode" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wapdomain'];?>
/authcode.inc.php" onclick="checkCode('vcode_img');" />
                                    </div>
                                </div>
                                <span class="reg_yes reg_yes_yz" style="display: none;" id="checkcode_yes"></span>
                            </div>

                            <?php }?>
                        </dd>
                        <?php }?> 
						<?php if ($_smarty_tpl->tpl_vars['config']->value['reg_real_name_check']==1) {?>
						<dd>
                            <div class="c ico_name inputitem_w">
                                <i class="reg_icon_font login_icon_n4 "></i>
                                <input class="inputitemtxt" placeholder="请填写您的手机号码" name="moblie" id="moblie" type="tel" onBlur="check_moblie();" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')">
                                <span class="reg_yes" style="display: none;" id="moblie_yes"></span>
                            </div>

                        </dd>
                        <dd>
                            <div class="c ico_name inputitem_w">
                                <i class="reg_icon_font login_icon_n9 "></i>
                                <div class="mui-input-row">
									<input class="inputitemtxt" maxlength="6"  placeholder="请填写短信验证码" name="moblie_code" id="moblie_code" type="text" onblur="check_moblie_code()" />
								</div>
								

                                <a class="login_m_send2" href="javascript:void(0);" id="send_msg_tips" onclick="sendmsg('vcode_img');"><span id="time">获取验证码</span></a>

                                <span class="reg_yes reg_yes_yz" style="display: none;" id="moblie_code_yes"></span>
                            </div>
                        </dd>
                        <?php }?>
						<?php }?>

                        <dd class="mt15">
                        <div class="login_bth">
                            <input type="hidden" id="send" value="0" />
                            <input type="hidden" id="isRealnameCheck" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['reg_real_name_check'];?>
" />
                            <input type="submit" name="submit" id="subreg" value="注册" class="inputSubmit">
                            </div>
                            <div class="login_otherlogin">
							
							<?php if ($_smarty_tpl->tpl_vars['config']->value['reg_moblie']=='1'&&$_smarty_tpl->tpl_vars['type']->value!=2) {?>
								<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'register','type'=>2),$_smarty_tpl);?>
" class="<?php if ($_smarty_tpl->tpl_vars['type']->value!=2&&$_smarty_tpl->tpl_vars['type']->value!=1) {?>login_wjmm<?php }?>">手机注册</a>
							<?php }?> 
							<?php if ($_smarty_tpl->tpl_vars['config']->value['reg_email']=='1'&&$_smarty_tpl->tpl_vars['type']->value!=3) {?>
								<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'register','type'=>3),$_smarty_tpl);?>
" class="<?php if ($_smarty_tpl->tpl_vars['type']->value!=3&&$_smarty_tpl->tpl_vars['type']->value!=2) {?>login_wjmm<?php }?>">邮箱注册</a>
							<?php }?> 
							<?php if ($_smarty_tpl->tpl_vars['config']->value['reg_user']=='1'&&$_smarty_tpl->tpl_vars['type']->value!=1) {?>
								<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'register','type'=>1),$_smarty_tpl);?>
" class="<?php if ($_smarty_tpl->tpl_vars['type']->value!=1&&$_smarty_tpl->tpl_vars['type']->value!=3) {?>login_wjmm<?php }?>">用户名注册</a>
							<?php }?>
                             </div>
                        </dd>

                    </dl>
                </form>
                </div>

        </article>
    </section>
   
    <!--注册协议弹出框-->
    <div style="width:100%;height:100%; background:rgba(51,51,51,0.5); position:fixed;left:0px;top:0px;z-index:1000000;display:none" id="services">
        <div style="width:100%; position:absolute;left:0px;top:80px;">
            <div class="reg_xybox">
                <div class="reg_xybox_tit"><span class="reg_xybox_tit_s">用户协议</span>
                    <a href="javascript:void(0);" onclick="$('#services').hide();" class="reg_xybox_tit_a"></a>
                </div>
                <div class="reg_xybox_p">
                    <?php echo $_smarty_tpl->tpl_vars['xieyi']->value['content'];?>

                </div>
            </div>
        </div>
    </div>
	<!--隐私政策弹出框-->
    <div style="width:100%;height:100%; background:rgba(51,51,51,0.5); position:fixed;left:0px;top:0px;z-index:1000000;display:none" id="yinsi">
        <div style="width:100%; position:absolute;left:0px;top:80px;">
            <div class="reg_xybox">
                <div class="reg_xybox_tit"><span class="reg_xybox_tit_s">隐私政策</span>
                    <a href="javascript:void(0);" onclick="$('#yinsi').hide();" class="reg_xybox_tit_a"></a>
                </div>
                <div class="reg_xybox_p">
                    <?php echo $_smarty_tpl->tpl_vars['yinsi']->value['content'];?>

                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="" style="display: none;" id="written_off">
        <div style="padding:10px;width:320px; background:#fff;">
            <div class="reg_have_tip">
                <i class="reg_have_tip_icon"></i>
                <div class="reg_have_tip_tit"><span id="zy_type">该手机号已被注册</span></div>
                <div class="reg_have_tip_zc" id="zy_name"></div>
            </div>
            <div class="reg_have_tip_p">
                1.如果是你本人，但不记得密码，您可以找回密码
                <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'forgetpw'),$_smarty_tpl);?>
" class="reg_have_tip_bth">找回密码</a>
            </div>
            <div id="jcbind" class="reg_have_tip_p">
				<span id="desc_toast">2. 解除手机号与该账号的绑定，解除绑定后，您无法 继续用该手机号登录</span>
                <a href="javascript:void(0);" onclick="CheckPW();" class="reg_have_tip_bth">解除绑定</a>
            </div>
            <div class="reg_have_tip_kf">如有疑问可拨打客服服务热线：<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>
</div>
            <input type="hidden" id="zy_uid" value="" />
            <input type="hidden" id="zy_mobile" value="" />
       		<input type="hidden" id="zy_email" value="" />

        </div>
    </div>

    <div class="tiny_show_tckbox" style="position:absolute;left:50%;bottom:220px; margin-left:-85px; z-index:10000;display:none;" id="postpw">
        <div class="tiny_show_tckbox_cont pw">
        </div>
    </div>
	
	<div style="width:100%; text-align:center; font-size:12px;color:#999">
     	<input type="checkbox" id="xieyi" value="1" checked>
    	<em style="width:100%">注册即表示阅读并同意《<a href="javascript:void(0);" onclick="showservices()" style="color:#007aff">用户协议</a>》&《<a href="javascript:void(0);" onclick="showyinsi()" style="color:#007aff">隐私政策</a>》</em>
    </div>
                     
                        
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
/js/prefixfree.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
	
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/reg_ajax.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
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
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
