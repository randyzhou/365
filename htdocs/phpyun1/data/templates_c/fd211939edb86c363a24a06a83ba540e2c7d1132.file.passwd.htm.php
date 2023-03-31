<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-01 03:03:41
         compiled from "D:\rcw\uploads\app\template\member\user\passwd.htm" */ ?>
<?php /*%%SmartyHeaderCode:20212773835f9db50d4ec033-02448064%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd211939edb86c363a24a06a83ba540e2c7d1132' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\member\\user\\passwd.htm',
      1 => 1576479787,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20212773835f9db50d4ec033-02448064',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'member' => 0,
    'resume' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5f9db50d508465_10545168',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9db50d508465_10545168')) {function content_5f9db50d508465_10545168($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/member_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/binding.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    var weburl = "<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
";
<?php echo '</script'; ?>
>

<div class="yun_w1200">

    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <div class="yun_m_rightbox fltR mt20 re">

		<div class="member_right_index_h1 fltL"> <span class="member_right_h1_span fltL">账号设置</span> <i class="member_right_h1_icon user_bg"></i></div>

        <div class="clear"></div>

        <div class="job_list_tit">
            <ul>
                <li>
                    <a href="index.php?c=info">基本信息</a><i class="left_sidebar_leftmune_icon"></i>
               	</li>
                <li class="job_list_tit_cur">
                    <a href="index.php?c=passwd">账号安全</a>
                </li>
                <li>
                    <a href="index.php?c=binding">绑定授权</a>
                </li>
                <li>
                    <a href="index.php?c=uppic">上传照片 </a>
                </li>

            </ul>
        </div>

        <div class="account_settings">

            <div class="account_settings_list">
            
                <div class="account_settings_list_left">
                    <i class="account_settings_list_left_icon account_settings_list_left_icon_user"></i>
                    <div class="account_settings_tit">账户修改</div>
                   	您有一次修改账户名机会（仅限一次）
                </div>
                
                <?php if ($_smarty_tpl->tpl_vars['member']->value['setname']==1) {?>
                	<a href="javascript:void(0);" onclick="showEditUsername();" class="account_settings_bth_hv">修改</a>
                <?php } else { ?>
                	<div class="account_settings_bth">已使用</div>
                <?php }?>
                
            </div>

            <div class="account_settings_list">
                <div class="account_settings_list_left">
                    <i class="account_settings_list_left_icon account_settings_list_left_icon_m"></i>
                    <div class="account_settings_tit">账号密码</div>
                 	用于保护账号信息和登录安全
                </div>
                <a href="javascript:void(0);" onclick="showEditPass();" class="account_settings_bth_hv">修改</a>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['resume']->value['email_status']==1) {?>
	            
	            <div class="account_settings_list">
	                <div class="account_settings_list_left">
	                    <i class="account_settings_list_left_icon account_settings_list_left_icon_yx"></i>
	                    <div class="account_settings_tit">安全邮箱<?php echo $_smarty_tpl->tpl_vars['resume']->value['email'];?>
</div>
	                   	安全邮箱将可用于登录账号和重置密码，建议立即设置
	                </div>
	                <a href="javascript:void(0)" onclick="layer_del('确定要取消绑定？','index.php?c=binding&act=del&type=email');" class="account_settings_bth">取消绑定</a>
	            </div>
	            
            <?php } else { ?>
            
	            <div class="account_settings_list">
	                <div class="account_settings_list_left">
	                    <i class="account_settings_list_left_icon account_settings_list_left_icon_yx"></i>
	                    <div class="account_settings_tit">安全邮箱<?php echo $_smarty_tpl->tpl_vars['resume']->value['email'];?>
<span class="account_settings_tit_zt"><i class="account_settings_tit_icon"></i>未绑定</span></div>
	                    <div class="account_settings_tip"> 安全邮箱将可用于登录账号和重置密码，建议立即设置</div>
	                </div>
	                <a href="javascript:getshow('email','绑定邮箱');" class="account_settings_bth_hv">绑定</a>
	            </div>
	            
            <?php }?> 
            
            <?php if ($_smarty_tpl->tpl_vars['resume']->value['moblie_status']==1) {?>
	            
	            <div class="account_settings_list">
	                <div class="account_settings_list_left">
	                    <i class="account_settings_list_left_icon account_settings_list_left_icon_sj"></i>
	                    <div class="account_settings_tit">安全手机<?php echo $_smarty_tpl->tpl_vars['resume']->value['telphone'];?>
</div>
	                  	安全手机将可用于登录账号和重置密码或其他安全设置
	                </div>
	                <a href="javascript:void(0)" onclick="layer_del('确定要取消绑定？','index.php?c=binding&act=del&type=moblie');" class="account_settings_bth">取消绑定</a>
	            </div>
	            
            <?php } else { ?>
            
	            <div class="account_settings_list">
	                <div class="account_settings_list_left">
	                    <i class="account_settings_list_left_icon account_settings_list_left_icon_sj"></i>
	                    <div class="account_settings_tit">安全手机<?php echo $_smarty_tpl->tpl_vars['resume']->value['telphone'];?>
<span class="account_settings_tit_zt"><i class="account_settings_tit_icon"></i>未验证</span></div>
	                    <div class="account_settings_tip"> 安全手机将可用于登录账号和重置密码或其他安全设置</div>
	                </div>
	                <a href="javascript:getshow('moblie','绑定手机号码');" class="account_settings_bth_hv">验证</a>
	            </div>
	            
            <?php }?>

            <div class="account_settings_list">
                <div class="account_settings_list_left">
                    <i class="account_settings_list_left_icon account_settings_list_left_icon_sf"></i>
                    <div class="account_settings_tit">身份认证<?php if ($_smarty_tpl->tpl_vars['resume']->value['idcard_status']<1&&!$_smarty_tpl->tpl_vars['resume']->value['idcard_pic']) {?><span class="account_settings_tit_zt"><i class="account_settings_tit_icon"></i>未验证</span><?php }?></div>
                    <div class="account_settings_tip"> 身份认证增加企业对你的信任度</div>
                    <?php if ($_smarty_tpl->tpl_vars['resume']->value['idcard_status']==2&&$_smarty_tpl->tpl_vars['resume']->value['statusbody']) {?>审核说明：<?php echo $_smarty_tpl->tpl_vars['resume']->value['statusbody'];
}?>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['resume']->value['idcard_status']==1) {?>
                	
                	<a href="javascript:getshow2('yyzz','身份认证');" class="account_settings_bth">已认证</a>
                	
                <?php } else { ?> 
                
					<?php if ($_smarty_tpl->tpl_vars['resume']->value['idcard_pic']) {?> 
						
						<?php if ($_smarty_tpl->tpl_vars['resume']->value['idcard_status']==2) {?>
				
							<a href="javascript:getshow2('yyzz','身份认证');" class="account_settings_bth">认证未通过</a>
				
						<?php } else { ?>
				
							<a href="javascript:getshow2('yyzz','身份认证');" class="account_settings_bth">等待管理员审核</a>
				
						<?php }?> 
						
					<?php } else { ?>

						<a href="javascript:getshow2('yyzz','身份认证');" class="account_settings_bth">认证</a>

					<?php }?> 
					
				<?php }?>
				
            </div>

        </div>
    </div>
</div>

<div id="showEditUsername" style="display:none;">
    <form action='index.php?c=passwd' target="supportiframe" method="post">
        <div class="Binding_pop_box" style="padding:10px;width:430px;height:200px; background:#fff">
            <div class="Binding_pop_box_msg">用户名长2至16位，不包含特殊字符</div>
            <div>
                <div class="Binding_pop_box_list">
                    <span class="Binding_pop_box_list_left"><i class="Binding_pop_box_list_left_i">*</i>新用户名：</span>
                    <input type="text" name="username" id="username" value="" class="Binding_pop_box_list_text Binding_pop_box_list_textw200" />
                </div>

                <div class="Binding_pop_box_list">
                    <span class="Binding_pop_box_list_left"><i class="Binding_pop_box_list_left_i">*</i>密码：</span>
                    <input type="password" name="password" id="password" value="" class="Binding_pop_box_list_text Binding_pop_box_list_textw200" />
                </div>

                <div class="Binding_pop_sub" style="margin-top:10px; margin-bottom: 25px;">
                    <span class="Binding_pop_box_list_left">&nbsp;</span>
                    <input class="layui-btn layui-btn-normal" type="submit" name="submit2" value="确定" />
                    <input class="layui-btn layui-btn-primary" type="button" value="取消" onclick="layer.close($('#layindex').val());" />
                </div>
            </div>
        </div>
    </form>
</div>

<div id="showEditPass" style="display:none;">
    <form name='MyForm' action='' target="supportiframe" method="post" onsubmit="return Showsub();">
        <div class="Binding_pop_box" style="padding:10px;width:430px;height:200px; background:#fff">
            <div class="Binding_pop_box_msg">密码长度8~16位，可包含数字，字母，下划线</div>
            <div>
                <div class="Binding_pop_box_list">
                    <span class="Binding_pop_box_list_left"><i class="Binding_pop_box_list_left_i">*</i>原密码：</span>
                    <input type="password" name="oldpassword" id="oldpassword" value="" class="Binding_pop_box_list_text Binding_pop_box_list_textw200" />
                </div>

                <div class="Binding_pop_box_list">
                    <span class="Binding_pop_box_list_left"><i class="Binding_pop_box_list_left_i">*</i>新密码：</span>
                    <input type="password" name="password" id="newpassword" value="" class="Binding_pop_box_list_text Binding_pop_box_list_textw200" />
                </div>

                <div class="Binding_pop_box_list">
                    <span class="Binding_pop_box_list_left"><i class="Binding_pop_box_list_left_i">*</i>确认密码：</span>
                    <input type="password" name="repassword" id="repassword" value="" class="Binding_pop_box_list_text Binding_pop_box_list_textw200" />
                </div>

                <div class="Binding_pop_sub" style="margin-top:10px; margin-bottom: 25px;">
                    <span class="Binding_pop_box_list_left">&nbsp;</span>
                    <input class="layui-btn layui-btn-normal" type="submit" name="submit" value="确定" />
                    <input class="layui-btn layui-btn-primary" type="button" value="取消" onclick="layer.close($('#layindex').val());" />
                </div>
            </div>
        </div>
    </form>
</div>

<!--绑定邮箱弹出框-->
<div id="email" style="display:none;">
    <div class="Binding_pop_box" style="padding:10px;width:430px;height:260px; background:#fff">
        <div class="Binding_pop_box_msg">绑定后的邮箱将作为新的登录账号</div>
        <div>
            <div class="Binding_pop_box_list">
                <span class="Binding_pop_box_list_left"><i class="Binding_pop_box_list_left_i">*</i>新的邮箱：</span>
                <input type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['email'];?>
" class="Binding_pop_box_list_text Binding_pop_box_list_textw200">
            </div>
            <div class="Binding_pop_box_list">
                <span class="Binding_pop_box_list_left"><i class="Binding_pop_box_list_left_i">*</i>验证码：</span>

                <input type="text" name="email_code" maxlength="6" class="Binding_pop_box_tpyz_text">
                <a href="javascript:void(0);" onclick="checkCode('vcode_img');" class="Binding_pop_box_yz_pic"> <img id="vcode_img" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/include/authcode.inc.php">
                </a>

            </div>
            <div class="Binding_pop_sub" style="margin-top:10px;">
                <span class="Binding_pop_box_list_left">&nbsp;</span>
                <input class="layui-btn layui-btn-normal" type="button" onclick="sendbemail('vcode_img');" value="发送验证邮箱">
                <input class="layui-btn layui-btn-primary" type="button" value="取消" onclick="layer.close($('#layindex').val());">
            </div>
        </div>
    </div>
</div>

<!--弹出框 end-->
<!--绑定手机弹出框-->
<div id="moblie" style=" display:none;">
    <div class="Binding_pop_box" style="padding:10px;width:430px;height:280px; background:#fff;">
        <div class="Binding_pop_box_msg">绑定完成后，您可以使用该手机号码登录账号、找回密码</div>
        <div>
            <div class="Binding_pop_box_list">
                <span class="Binding_pop_box_list_left"><i class="Binding_pop_box_list_left_i">*</i>手机号码：</span>
                <input type="text" name="moblie" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['telphone'];?>
" class="Binding_pop_box_list_text Binding_pop_box_list_textw200">

            </div>
			<div class="Binding_pop_box_list">
				<span class="Binding_pop_box_list_left"><i class="Binding_pop_box_list_left_i">*</i>验证码：</span>

				<input type="text" name="phoneimg_code" maxlength="6" class="Binding_pop_box_tpyz_text">
				<a href="javascript:void(0);" onclick="checkCode('pcode_img');" class="Binding_pop_box_yz_pic"> <img id="pcode_img" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/include/authcode.inc.php">
				</a>

			</div>
            <div class="Binding_pop_box_list">
                <span class="Binding_pop_box_list_left"><i class="Binding_pop_box_list_left_i">*</i>短信验证码：</span>
                <div class="Binding_pop_box_r"> <input type="text" id="moblie_code" class="Binding_pop_box_yz_text" style="width:90px;">
                    <a href="javascript:;" onclick="sendmoblie('pcode_img');" id="time" class="Binding_pop_box_yz_send">免费发送验证码</a>
                </div>
            </div>
            <div class="Binding_pop_sub" style="margin-top:20px;">
                <span class="Binding_pop_box_list_left">&nbsp;</span>
                <input class="layui-btn layui-btn-normal" onclick="check_moblie();" type="button" value="保存">
                <input class="layui-btn layui-btn-primary" type="button" value="取消" onclick="layer.close($('#layindex').val());">
            </div>
        </div>
    </div>
</div>
<!--弹出框 end-->

<!--身份证弹出框-->
<div id="yyzz" style=" display:none;">
	<div style="width:630px;">
		<div class="license_box">
            <div class="license_tip">提示：身份证中的照片与账号的真实姓名保持一致，扫描件中的身份证号,姓名需清晰可辨，否则不能通过认证</div>

            <form id="certform" name="MyForm" target="supportiframe" method="post" action="index.php?c=binding&act=savecert" enctype="multipart/form-data">
                <div class="license_left" style="width: 380px;">
                    <div class="license_tit">方式一：本地上传</div>
                    
                    <div class="license_list"><span class="license_list_name"><i class="Binding_pop_box_list_left_i">*</i>真实姓名</span>
                        <input type="text" name="name" id="name" value='<?php echo $_smarty_tpl->tpl_vars['resume']->value['name'];?>
' class="Binding_pop_box_list_text license_left_text">
                    </div>

					<div class="license_list"><span class="license_list_name"><i class="Binding_pop_box_list_left_i">*</i>证件号码</span>
                        <input type="text" name="idcard" id="idcard" value='<?php echo $_smarty_tpl->tpl_vars['resume']->value['idcard'];?>
' class="Binding_pop_box_list_text license_left_text">
                    </div>
                    
                    <div class="license_list">
                    	<span class="license_list_name"><i class="Binding_pop_box_list_left_i">*</i>证件扫描件</span>
                        <button type="button" class="yun_bth_pic noupload" lay-data="{imgid: 'imgicon',parentid: 'imgparent'}">上传图片</button>
                        <input type="hidden" id="laynoupload" value="1"/>
						<input type="hidden" id="old_cert" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['idcard_pic'];?>
" />
						
                        <div id="imgparent" class="licensefile_box_img <?php if (!$_smarty_tpl->tpl_vars['resume']->value['idcard_pic']) {?>none<?php }?>">
                            <img id="imgicon" src="<?php echo $_smarty_tpl->tpl_vars['resume']->value['idcard_pic'];?>
" width="40" height="40" />
							<div id="newbind" class="Binding_pop_box_msg_cont_new none">新</div>
                            <a id="checka" href="javascript:;" data_url="<?php echo $_smarty_tpl->tpl_vars['resume']->value['idcard_pic'];?>
" onclick="showpic(this)" class="Binding_pop_box_msg_cont_pic_p">查看原图</a>
                        </div>

                        <div class="licensefile_box_tip">最大<?php echo $_smarty_tpl->tpl_vars['config']->value['file_maxsize'];?>
M,支持<?php echo $_smarty_tpl->tpl_vars['config']->value['pic_type'];?>
格式</div>
                        
                    </div>
                    
                    <div class="license_list">
                        <input class="license_list_bth" type="button" onclick="check_user_cert()" value="提交">
                    </div>
                    
                </div>
            </form>
            
            <div class="license_right" style="width: 220px; right:10px;">
                <div class="license_tit">方式二：手机拍照上传</div>
            
                <div class="license_ewm">
                    <img src="<?php echo smarty_function_url(array('m'=>'upload','c'=>'qrcode','type'=>2),$_smarty_tpl);?>
" alt="手机扫码拍照上传" width="130" height="130" />
                </div>
            
                <div class="license_right_p"> 扫描二维码 </div>
                <div class=""> 打开我-账户绑定-点击身份认证 </div>
                
            </div>
		</div>
	</div>
</div>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui.upload.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type='text/javascript'><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
	layui.use(['layer'], function() {
		var layer = layui.layer,
			$ = layui.$;
	});	
	function showpic(obj){
		var url =	$(obj).attr('data_url');
		var picjson={
		  "data": [ {
			  "src": url, //原图地址
			  "thumb": url //缩略图地址
			}]
		}
		layer.photos({
			photos: picjson
			,anim: 5 //0-6的选择，指定弹出图片动画类型，默认随机（请注意，3.0之前的版本用shift参数）
		});
	}

    function Showsub() {
        var oldpass = $("#oldpassword").val();
        var pass = $("#newpassword").val();
        var repass = $("#repassword").val();
        oldpass = $.trim(oldpass);
        pass = $.trim(pass);
        repass = $.trim(repass);

        if(oldpass == "") {
            layer.msg('原始密码不能为空!', 2, 8);
            // $("#oldpassword").focus();
            return false;
        } else if(oldpass.length < 6 || oldpass.length > 20) {
            layer.msg('密码需在 6-20个字符之内!', 2, 8);
            // $("#oldpassword").focus();
            return false;
        }

        if(pass == "") {
            layer.msg('新密码不能为空!', 2, 8);
            // $("#newpassword").focus();
            return false;
        } else if(pass.length < 6 || pass.length > 20) {
            layer.msg('新密码需在 6-20个字符之内!', 2, 8);
            // $("#newpassword").focus();
            return false;
        }

        if(repass == "") {
            layer.msg('请再次确认新密码!', 2, 8);
            // $("#repassword").focus();
            return false;
        } else if(repass.length < 6 || repass.length > 20) {
            layer.msg('新密码需在 6-20个字符之内!', 2, 8);
            // $("#repassword").focus();
            return false;
        }
        if(repass != pass) {
            layer.msg('两次密码输入不一致，请重新输入!', 2, 8);
            // $("#repassword").focus();
            return false;
        }

        if(oldpass != "" && oldpass == pass) {
            layer.msg("原始密码和新密码一致，不需要修改！", 2, 8);
            return false;
        }

        return true;
    }

    function showEditPass() {
        var layindex = $.layer({
            type: 1,
            title: '修改密码',
            closeBtn: [0, true],
            border: [10, 0.3, '#000', true],
            area: ['450px', 'auto'],
            page: {
                dom: "#showEditPass"
            }
        });
        $("#layindex").val(layindex);
    }

    function showEditUsername() {
        var layindex = $.layer({
            type: 1,
            title: '修改用户名',
            closeBtn: [0, true],
            border: [10, 0.3, '#000', true],
            area: ['450px', 'auto'],
            page: {
                dom: "#showEditUsername"
            }
        });
        $("#layindex").val(layindex);
    }

    function getshow2(id, title) {
        var layindex = $.layer({
            type: 1,
            title: title,
            closeBtn: [0, true],
            border: [10, 0.3, '#000', true],
            area: ['650px', 'auto'],
            page: {
                dom: "#" + id
            }
        });
        $("#layindex").val(layindex);
    }
<?php echo '</script'; ?>
>
<!--弹出框 end-->
<input type="hidden" id="linktel" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['telphone'];?>
" />
<input type="hidden" id="linkmail" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['email'];?>
" />
<input type="hidden" id="send" value="0" /> 
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
