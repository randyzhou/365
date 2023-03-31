<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-01 02:03:53
         compiled from "D:\rcw\uploads\app\template\member\user\binding.htm" */ ?>
<?php /*%%SmartyHeaderCode:15031922835f9da70976d214-32401837%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e73b747ef4651e9c4c8c555ead51432a96c54241' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\member\\user\\binding.htm',
      1 => 1576737825,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15031922835f9da70976d214-32401837',
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
  'unifunc' => 'content_5f9da7097913c3_39446513',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9da7097913c3_39446513')) {function content_5f9da7097913c3_39446513($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
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
>var weburl = "<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
";<?php echo '</script'; ?>
>
<div class="yun_w1200">
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="yun_m_rightbox fltR mt20 re">
            <div class="member_right_index_h1 fltL"> <span class="member_right_h1_span fltL">账号设置</span> <i class="member_right_h1_icon user_bg"></i></div>
    

        <div class="clear"></div>

	 <div class="job_list_tit"> <ul class="">
	<li><a href="index.php?c=info">基本信息</a><i class="left_sidebar_leftmune_icon"></i></li>
      <li><a href="index.php?c=passwd">账号安全</a></li>
      <li class="job_list_tit_cur"><a href="index.php?c=binding">绑定授权</a></li>
      <li><a href="index.php?c=uppic">上传照片 </a></li>

	</ul></div>

 <div  class="resume_Prompt_box"><div  class="resume_Prompt"><i class="resume_Prompt_icon"></i> 绑定的第三方帐号，可用于直接登录网站</div></div>


        <div class="resume_box_list">
         
       
            <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_qqlogin']=='1') {?>
            <div class="Binding_list">
                <div class="Binding_list_left">
				<div class="Bingding_icon <?php if ($_smarty_tpl->tpl_vars['member']->value['qqid']!='') {?>Bingding_icon_cur<?php }?>"><i class="binding_qq_icon"></i></div>
				<span class="bingding_yx_wr">绑定QQ</span></div>
                <?php if ($_smarty_tpl->tpl_vars['member']->value['qqid']!='') {?>
                <div class="Binding_list_text Binding_list_text_mt">已绑定QQ号</div>
                <div class="Binding_oper">
                    <a href="javascript:void(0)" onclick="layer_del('确定要取消绑定？','index.php?c=binding&act=del&type=qqid');" class="Binding_submit_qx">取消绑定</a>
                </div>
                <?php } else { ?>
				<div class="Binding_list_text">
				  <span class="Binding_list_text_zt"><i class="Binding_list_text_zticon"></i>未绑定QQ号</span>
                <div class="Binding_list_p">授权绑定后，可使用QQ账号登录</div>


              </div>
                <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_qqlogin']!='1') {?>
                <div class="Binding_oper">
                    <a href="javascript:void(0)" onclick="layer.msg('对不起，QQ绑定已关闭！', 2, 8);return false;" class="Binding_submit">立即绑定</a>
                </div>
                <?php } else { ?>
                <div class="Binding_oper">
                    <a href="<?php echo smarty_function_url(array('m'=>'qqconnect','login'=>1),$_smarty_tpl);?>
" class="Binding_submit">立即绑定</a>
                </div>
                <?php }?>
                <?php }?>
            </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_sinalogin']=='1') {?>
            <div class="Binding_list">
                <div class="Binding_list_left">
				<div class="Bingding_sinaicon <?php if ($_smarty_tpl->tpl_vars['member']->value['sinaid']!='') {?>bingding_sina_cur<?php }?>"><i class="binding_xl_icon"></i></div>
				<span class="bingding_yx_wr">绑定新浪微博</span></div>
                <?php if ($_smarty_tpl->tpl_vars['member']->value['sinaid']!='') {?>
                <div class="Binding_list_text Binding_list_text_mt">已绑定，可使用新浪微博快速登录</div>
                <div class="Binding_oper">
                    <a href="javascript:void(0)" onclick="layer_del('确定要取消绑定？','index.php?c=binding&act=del&type=sinaid');" class="Binding_submit_qx">取消绑定</a>
                </div>
                <?php } else { ?>
				  <div class="Binding_list_text">
				  <span class="Binding_list_text_zt"><i class="Binding_list_text_zticon"></i>未绑定新浪微博</span>
                <div class="Binding_list_p">授权绑定后，可使用新浪微博快速登录</div>
				</div>
                <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_sinalogin']!='1') {?>
                <div class="Binding_oper">
                    <a href="javascript:void(0)" onclick="layer.msg('对不起，新浪绑定已关闭！', 2, 8);return false;" class="Binding_submit">立即绑定</a>
                </div>
                <?php } else { ?>
                <div class="Binding_oper">
                    <a href="<?php echo smarty_function_url(array('m'=>'sinaconnect','login'=>1),$_smarty_tpl);?>
" class="Binding_submit">立即绑定</a>
                </div>
                <?php }?>
                <?php }?>
            </div>
            <?php }?>
			<div class="Binding_list">
            <div class="Binding_list_left">
			<div class="Bingding_wx <?php if ($_smarty_tpl->tpl_vars['member']->value['wxopenid']!=''||$_smarty_tpl->tpl_vars['member']->value['wxid']!='') {?>bingding_wx_cur<?php }?>"><i class="binding_wx_icon"></i></div>
			<span class="bingding_yx_wr">绑定微信</span>
			</div>
            <?php if ($_smarty_tpl->tpl_vars['member']->value['wxopenid']!=''||$_smarty_tpl->tpl_vars['member']->value['wxid']!='') {?>
            <div class="Binding_list_text  Binding_list_text_mt">已绑定，您已可使用微信扫描登录</div>
            <div class="Binding_oper"><a href="javascript:void(0)" onClick="layer_del('确定要取消绑定？','index.php?c=binding&act=del&type=wxid');" class="Binding_submit_qx">取消绑定</a></div>
            <?php } else { ?>
			<div class="Binding_list_text">
				  <span class="Binding_list_text_zt"><i class="Binding_list_text_zticon"></i>未绑定微信</span>
                <div class="Binding_list_p">授权绑定后，可使用微信扫描登录</div>
			</div>

            <?php if ($_smarty_tpl->tpl_vars['config']->value['wx_author']!='1') {?>
            <div class="Binding_oper"><a href="javascript:void(0)" onclick="layer.msg('对不起，微信绑定已关闭！', 2, 8); return false;" class="Binding_submit">立即绑定</a></div>
            <?php } else { ?>
            <div class="Binding_oper"><a href="javascript:void(0)" onclick="wxshow();" class="Binding_submit">立即绑定</a></div>
            <?php }?>
            <?php }?> 
		  </div>
 
        </div>
    </div>
</div>
<div id="wxcontent" style=" display:none;">
 	<div id="wx_login_qrcode" class="wx_bdtck_pic">正在获取二维码...</div>
	<div class="wx_bdtck_p">请使用微信扫描二维码绑定</div>
</div>
<input type="hidden" id="linktel" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['telphone'];?>
" />
<input type="hidden" id="linkmail" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['email'];?>
" />
<input type="hidden" id="send" value="0" />

<?php echo '<script'; ?>
>
	$(document).ready(function(){
		var setval;
		$.post('<?php echo smarty_function_url(array('m'=>'login','c'=>'wxlogin'),$_smarty_tpl);?>
',{t:1},function(data){
			if(data==0){
				$('#wx_login_qrcode').html('二维码获取失败..');
			}else{
				$('#wx_login_qrcode').html('<img src="'+data+'" width="180" height="180">');
				setval = setInterval("wxorderstatus()", 2000); 
			}
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
	
	function wxshow(){
		$.layer({
			type : 1,
			title : '绑定微信',
			border : [10 , 0.3 , '#000', true],
			area : ['300px','auto'],
			page : {dom :"#wxcontent"}
		});
	}
<?php echo '</script'; ?>
>	
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
