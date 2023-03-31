<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-10-31 16:34:34
         compiled from "D:\rcw\uploads\app\template\default\ajax\login.htm" */ ?>
<?php /*%%SmartyHeaderCode:13537558035f9d219aa15bf2-54204930%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a169fe9050e58e83323ac1bdb8367f622b6c7a4' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\default\\ajax\\login.htm',
      1 => 1577783113,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13537558035f9d219aa15bf2-54204930',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'usertype' => 0,
    'member' => 0,
    'config' => 0,
    'username' => 0,
    'yqnum' => 0,
    'lookNum' => 0,
    'expectnum' => 0,
    'company' => 0,
    'addjobnum' => 0,
    'lt' => 0,
    'uid' => 0,
    'reg_com_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5f9d219aa5a101_15398035',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9d219aa5a101_15398035')) {function content_5f9d219aa5a101_15398035($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
?><?php if ($_smarty_tpl->tpl_vars['usertype']->value=="1") {?>  
<div class="login_ok">
<div class="login_ok_user">
<div class="login_ok_user_photo"><img width="60" height="60" src="<?php echo $_smarty_tpl->tpl_vars['member']->value['photo'];?>
" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_icon'];?>
',2);"> </div>
<div class="login_ok_username">hi , <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</div>
<div class="login_ok_hi">欢迎回来</div>
</div>
<div class="login_ok_n_list"><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=invite"><span class="login_ok_n"><?php if ($_smarty_tpl->tpl_vars['yqnum']->value=='') {?>0<?php } else {
echo $_smarty_tpl->tpl_vars['yqnum']->value;
}?></span><div class="login_ok_name">面试通知</div></a></div>
<div class="login_ok_n_list"><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=favorite"><span class="login_ok_n"><?php if ($_smarty_tpl->tpl_vars['member']->value['fav_jobnum']<1) {?>0<?php } else {
echo $_smarty_tpl->tpl_vars['member']->value['fav_jobnum'];
}?></span><div class="login_ok_name">收藏记录</div></a></div>
<div class="login_ok_n_list"><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=look"><span class="login_ok_n"><?php echo $_smarty_tpl->tpl_vars['lookNum']->value;?>
 </span><div class="login_ok_name">企业看过</div></a></div>
<div class="login_ok_mune"><div class="login_ok_mune_list"><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=resume"><i class="login_ok_mune_icon"></i>我的简历</a></div><div class="login_ok_mune_list"><a <?php if ($_smarty_tpl->tpl_vars['config']->value['user_number']>$_smarty_tpl->tpl_vars['expectnum']->value||$_smarty_tpl->tpl_vars['config']->value['user_number']=='') {?>href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=expect&act=add"<?php } else { ?>href="javascript:void(0)" onclick="layer.msg('你的简历数已经达到系统设置的简历数了',2,8);return false;"<?php }?>><i class="login_ok_mune_icon login_ok_mune_icon_cj"></i>创建简历</a></div><div class="login_ok_mune_list"><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=atn"><i class="login_ok_mune_icon login_ok_mune_icon_gz"></i>关注记录</a></div>
<div class="login_ok_member"><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php" class="login_ok_member_bth">管理中心</a><a href="javascript:void(0);" onclick="logout('<?php echo smarty_function_url(array('c'=>'logout'),$_smarty_tpl);?>
');" class="login_ok_member_bthtc">退出登录</a></div>
</div>
<?php } elseif ($_smarty_tpl->tpl_vars['usertype']->value=="2") {?>
<div class="login_ok">
<div class="login_ok_user">
<div class="login_ok_user_photo"><img width="60" height="60" src="<?php echo $_smarty_tpl->tpl_vars['company']->value['logo'];?>
"  onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_unit_icon'];?>
',2);"> </div>
<div class="login_ok_username">hi , <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</div>
<div class="login_ok_hi">欢迎登录</div>
</div>
<div class="login_ok_n_list">	<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=hr"><span class="login_ok_n"><?php echo $_smarty_tpl->tpl_vars['company']->value['sq_job'];?>
</span><div class="login_ok_name">收到简历</div></a></div>
<div class="login_ok_n_list"><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=msg"><span class="login_ok_n"><?php echo $_smarty_tpl->tpl_vars['company']->value['msgnum'];?>
</span><div class="login_ok_name">求职咨询</div></a></div>
<div class="login_ok_n_list"><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=look_job"><span class="login_ok_n"><?php echo $_smarty_tpl->tpl_vars['company']->value['look_jobnum'];?>
</span><div class="login_ok_name">谁看过我</div></a></div>
<div class="login_ok_mune"><div class="login_ok_mune_list"><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=job&w=1"><i class="login_ok_mune_icon"></i>职位管理</a></div>
<div class="login_ok_mune_list"><a href="javascript:void(0)"  onclick="addJobIndex('<?php echo $_smarty_tpl->tpl_vars['addjobnum']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_job'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['com_integral_online'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
');return false;"><i class="login_ok_mune_icon login_ok_mune_icon_cj"></i>发布职位</a></div><div class="login_ok_mune_list"><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=attention_me"><i class="login_ok_mune_icon login_ok_mune_icon_gz"></i>关注记录</a></div>
<div class="login_ok_member"><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php" class="login_ok_member_bth">管理中心</a><a href="javascript:void(0);" onclick="logout('<?php echo smarty_function_url(array('c'=>'logout'),$_smarty_tpl);?>
');" class="login_ok_member_bthtc">退出登录</a></div>
</div>

<?php } elseif ($_smarty_tpl->tpl_vars['usertype']->value=="3") {?>
<div class="login_ok">
<div class="login_ok_user">
<div class="login_ok_user_photo"><img width="60" height="60"  src="<?php echo $_smarty_tpl->tpl_vars['lt']->value['photo'];?>
" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_lt_icon'];?>
',2);"> </div>
<div class="login_ok_username">hi , <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</div>
<div class="login_ok_hi">欢迎登录</div>
</div>
<div class="login_ok_n_listbox">
<div class="login_ok_n_list">	<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=entrust_resume"><span class="login_ok_n"><?php echo $_smarty_tpl->tpl_vars['lt']->value['entrust'];?>
</span><div class="login_ok_name">委托简历</div></a></div>
<div class="login_ok_n_list"><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=down_resume"><span class="login_ok_n"><?php echo $_smarty_tpl->tpl_vars['lt']->value['lt_status2'];?>
</span><div class="login_ok_name">下载简历</div></a></div>
</div>
<div class="login_ok_mune">
<div class="login_ok_mune_list"><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=job&s=1"><i class="login_ok_mune_icon"></i>职位管理</a></div><div class="login_ok_mune_list"><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=search_resume"><i class="login_ok_mune_icon login_ok_mune_icon_cj"></i>搜索简历</a></div>
<div class="login_ok_mune_list" ><a href="javascript:void(0)"  onclick="addJobIndex('<?php echo $_smarty_tpl->tpl_vars['addjobnum']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_job'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['com_integral_online'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
');return false;"><i class="login_ok_mune_icon login_ok_mune_icon_cj"></i>发布职位</a></div>
<div class="login_ok_member"><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php" class="login_ok_member_bth">管理中心</a><a href="javascript:void(0);" onclick="logout('<?php echo smarty_function_url(array('c'=>'logout'),$_smarty_tpl);?>
');" class="login_ok_member_bthtc">退出登录</a></div>
</div>

<?php } elseif ($_smarty_tpl->tpl_vars['usertype']->value=="4") {?>

<div class="login_ok">
<div class="login_ok_user">
<div class="login_ok_user_photo"><img width="60" height="60"  src="<?php echo $_smarty_tpl->tpl_vars['member']->value['logo'];?>
" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_icon'];?>
',2);"> </div>
<div class="login_ok_username">hi , <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</div>
<div class="login_ok_hi">欢迎登录</div>
</div>
<div class="login_ok_n_listbox">
<div class="login_ok_n_list"><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=sign_up&status=2"><span class="login_ok_n"><?php echo $_smarty_tpl->tpl_vars['member']->value['baoming'];?>
</span><div class="login_ok_name">待联系</div></a></div>
<div class="login_ok_n_list">	<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=message&status=1"><span class="login_ok_n"><?php echo $_smarty_tpl->tpl_vars['member']->value['zixun'];?>
</span><div class="login_ok_name">待回复</div></a></div>
</div>
<div class="login_ok_mune">
<div class="login_ok_mune_list" style="width:32%"><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=subject"><i class="login_ok_mune_icon"></i>课程管理</a></div><div class="login_ok_mune_list" style="width:32%"><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=team"><i class="login_ok_mune_icon login_ok_mune_icon_cj"></i>讲师管理</a></div>
<div class="login_ok_mune_list" style="width:32%"><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=sign_up"><i class="login_ok_mune_icon login_ok_mune_icon_gz"></i>预约名单</a></div>
<div class="login_ok_member"><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php" class="login_ok_member_bth">管理中心</a><a href="javascript:void(0);" onclick="logout('<?php echo smarty_function_url(array('c'=>'logout'),$_smarty_tpl);?>
');" class="login_ok_member_bthtc">退出登录</a></div>
</div>

<?php } else { ?>
	<!--登录-->
	<!--<div class="index_frame_right_tit">
		<span class="index_frame_right_tit_s"><i class="index_frame_right_tit_line"></i>用户登录</span> 
	</div>-->
	
	<!-- <input type="hidden" name="act" id="act_login" value="0"/> -->

	<?php if ($_smarty_tpl->tpl_vars['config']->value['wx_author']=='1') {?>
		<div class="wx_login" title="微信扫一扫登录" style="display:block;"><span class="wxcode_login_c"><!--<i class="wxcode_login_c_icon">扫码登录</i>--></span></div>
		<div class="indexnormal_login none" title="普通登录"></div>
	<?php }?>
	<div class="indexwx_login_show none">
		<div id="indexwx_login_qrcode" class="indexwxlogintext">正在获取二维码...</div>
		<div class="wxlogintxt">请使用微信扫一扫登录</div>
	</div>
	
	<div id="login_normal">
		<div class="index_frist_pic"> <span class="index_frist_pic_bg"></span></div>
		<div class="index_frist_hi"> Hi , 欢迎登录！</div>
		<div class="index_frist_login_bth">
      <?php if ($_smarty_tpl->tpl_vars['uid']->value) {?>
			<a href="javascript:void(0);"  onclick="showlogin('','<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
');" class="index_frist_login_bth_l">登录</a>
			<?php } else { ?>
      <a href="javascript:void(0);"  onclick="showlogin('','');" class="index_frist_login_bth_l">登录</a>
      <?php }?>
      <a href="<?php echo $_smarty_tpl->tpl_vars['reg_com_url']->value;?>
" class="index_frist_login_bth_reg">注册</a>
		</div>
	<!--	<div class="index_frist_login_sj">
			
			<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_msg_isopen']==1&&$_smarty_tpl->tpl_vars['config']->value['sy_msg_login']==1) {?>
				<a href="<?php echo smarty_function_url(array('m'=>'login'),$_smarty_tpl);?>
" class="index_frist_login_bth_sj_a">使用手机动态码登录</a> 
			<?php }?>

			<a href="<?php echo smarty_function_url(array('m'=>'forgetpw'),$_smarty_tpl);?>
"  class="index_frist_login_bth_m">找回密码？</a>
		</div>-->
        
		<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_qqlogin']==1||$_smarty_tpl->tpl_vars['config']->value['sy_sinalogin']==1||$_smarty_tpl->tpl_vars['config']->value['wx_author']==1) {?>
			<div class="index_frist_login_other"> 
				<div class="index_frist_login_other_tit"> 
					<span class="index_frist_login_other_tit_s">其他方式登录</span>
				</div>
			</div>
			<div class="index_frist_login_other_box">
				<?php if ($_smarty_tpl->tpl_vars['config']->value['wx_author']==1) {?>
					<a href="<?php echo smarty_function_url(array('m'=>'wxconnect'),$_smarty_tpl);?>
" class="index_frist_login_other_wx"></a>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_qqlogin']==1) {?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/qqlogin.php" class="index_frist_login_other_qq"></a>
				<?php }?> 
				<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_sinalogin']==1) {?>
					<a href="<?php echo smarty_function_url(array('m'=>'sinaconnect'),$_smarty_tpl);?>
" class=" index_frist_login_other_xl"></a>
				<?php }?> 
				
				
			</div>
		<?php }?>
	</div>      
<?php }?>

<style>#label{height:34px; line-height:34px;border:1px solid #e6e6e6}

</style>

<?php echo '<script'; ?>
>
	$(document).ready(function(){
		//账号登录和手机登录tab选择
		/**
		$('#acount_login').click(function(data){
			$('#acount_login').removeClass().addClass('login_box_h_list_cur');
			$('#mobile_login').removeClass();
			$('#login_normal_box').show();
			$('#login_sj_box').hide();
			$('#login_sjyz_box').hide();
			$('#act_login').val('0');
		});
		$('#mobile_login').click(function(data){
			$('#mobile_login').removeClass().addClass('login_box_h_list_cur');
			$('#acount_login').removeClass();
			$('#login_sj_box').show();
			$('#login_sjyz_box').show();
			$('#login_normal_box').hide();
			$('#act_login').val('1');
		});
		$("#username,#txt_CheckCode,#usermoblie,#dynamiccode").focus(function(){
			var txAreaVal = $(this).val();
			if( txAreaVal == this.defaultValue){$(this).val("");}
		}).blur(function(){
			var txAreaVal = $(this).val();
			if( txAreaVal == this.defaultValue||$(this).val()==""){$(this).val(this.defaultValue);}
		}).keydown(function (e) {
			var ev = document.all ? window.event : e;
			if (ev.keyCode == 13) {
				check_login('<?php echo smarty_function_url(array('m'=>'login','c'=>'loginsave'),$_smarty_tpl);?>
','vcode_imgs');
			} else { return;}
		});
		$("#password2").focus(function(){
			$("#password").show();
			$("#password").focus();
			$("#password2").hide();
		})
		$("#password").blur(function(){
			if($("#password").val()==""){
				$("#password2").show();
				$("#password").hide();
			}
		}).keydown(function (e) {
			var ev = document.all ? window.event : e;
			if (ev.keyCode == 13) {
				check_login('<?php echo smarty_function_url(array('m'=>'login','c'=>'loginsave'),$_smarty_tpl);?>
','vcode_imgs');
			} else { return; }
		});
		*/
		var setval;
		$('.wx_login').click(function(data){
			$('.wx_login').hide();
			$('.indexnormal_login').show();
			$('#login_normal').hide();
			$('.login_box_h_list').hide();
			$('.indexwx_login_show').show();
			$.post('<?php echo smarty_function_url(array('m'=>'login','c'=>'wxlogin'),$_smarty_tpl);?>
',{t:1},function(data){
				if(data==0){
					$('#indexwx_login_qrcode').html('二维码获取失败..');
				}else{
					$('#indexwx_login_qrcode').html('<img src="'+data+'" width="100" height="100">');
					setval = setInterval("wxorderstatus()", 2000); 
				}
			});

		});
		$('.indexnormal_login').click(function(data){
			$('.wx_login').show();
			$('.indexnormal_login').hide();
			$('#login_normal').show();
			$('.login_box_h_list').show();
			$('.indexwx_login_show').hide();
			clearInterval(setval);
		});
	});

function wxorderstatus() { 
	$.post('<?php echo smarty_function_url(array('m'=>'login','c'=>'getwxloginstatus'),$_smarty_tpl);?>
',{t:1},function(data){
		var data=eval('('+data+')');
		if(data.url!='' && data.msg!=''){
			layer.msg(data.msg, 2, 9,function(){window.location.href=data.url;});
		}else if(data.url){
			window.location.href=data.url;
		}
	});
}
function jobaddurl(num,integral_job){ 
	var gourl= weburl+'/member/index.php?c=jobadd';
		checkType = 'addjob';

	var url = weburl + '/index.php?m=ajax&c=ajax_day_action_check';
		layer.load('执行中，请稍候...',0);  
		$.post(url,
			{'type': checkType},
			function(data){
				layer.closeAll('loading');
				data = eval('(' + data + ')');
				if(data.status == -1){
					layer.msg(data.msg, 2, 8);
				}else if(data.status == 1){
					if(num==1){
						window.location.href=gourl;
						window.event.returnValue = false;
						return false;
					}else if(num==2){
						var msg='套餐已用完，您可以<a href="'+weburl+'/member/index.php?c=right&act=added" style="color:red;">购买增值包</a>！是否继续？';
						layer.confirm(msg, function(){
							layer.closeAll();
							window.location.href=weburl+"/member/index.php?c=right&act=added"; 
							
						});
					}else if(num==0){
						var msg='会员已到期，您可以<a href="'+weburl+'/member/index.php?c=right" style="color:red">购买会员</a>！是否继续？';

						layer.confirm(msg, function(){
							window.location.href=weburl+"/member/index.php?c=right"; 
						});  
 						
 					}
				}
			}
		);
	}
  function showlogin(usertype,uid) {
    if(uid>0){
      window.location.href = "<?php echo smarty_function_url(array('m'=>'login'),$_smarty_tpl);?>
";
    }else{
      checkCode('vcode_img');
      $("#login_usertype").val(usertype);
      var reg_moblie = '<?php echo $_smarty_tpl->tpl_vars['config']->value['reg_moblie'];?>
';
      var reg_email = '<?php echo $_smarty_tpl->tpl_vars['config']->value['reg_email'];?>
';
      $("#onregister").attr("href", '<?php echo smarty_function_url(array('m'=>'register'),$_smarty_tpl);?>
');

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
		
	}
<?php echo '</script'; ?>
><?php }} ?>
