<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-01 01:51:20
         compiled from "D:\rcw\uploads\app\template\default\invitereg\index.htm" */ ?>
<?php /*%%SmartyHeaderCode:12056967715f9da41895c1d1-18230305%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b66dcb114a7957155f547ad8f72b6d0be7b9988' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\default\\invitereg\\index.htm',
      1 => 1576479781,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12056967715f9da41895c1d1-18230305',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'keywords' => 0,
    'description' => 0,
    'style' => 0,
    'config' => 0,
    'reg_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5f9da418973e23_09658264',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9da418973e23_09658264')) {function content_5f9da418973e23_09658264($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<meta name=keywords content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
"/>
<meta name=description content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
"/>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/css.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"/>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="clear"></div>
<div class="wh_body" style="width:100%;">
<div class="invitereg_cont">
 <div class="current_Location com_current_Location png">
      <div>您当前的位置：<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
">首页</a> > <span>邀请好友注册</span> </div>
    </div>
  <div class="invitereg_cont_box">
    <div class="invitereg_img"> <img src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/y_br.jpg" width="1200"/></div>
    <div class="invitereg_cont_box_c">
      <div class="invitereg_p1">方法一：这是您的专属链接,请通过QQ发送给好友：</div>
      <div class="invitereg_p2">
        <textarea class="invitereg_info">#推荐得<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
，好礼尽情拿#只要成功推荐1位朋友注册，就可以兑换到礼品了！只要推荐<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
够给力，更有新iPad、iPod、音响、耳机、背包、笔记本等数万件礼品可尽情兑换！给我点力吧！注册成功你也可以获得礼品兑换<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
哦，赶快来参加吧！链接地址：<?php echo $_smarty_tpl->tpl_vars['reg_url']->value;?>
</textarea>
      </div>
      <div class="invitereg_p2">
	  <div class="clear"></div>
	   <div class="complay_h1_share" style="width:300px;float:left"> <span class="Company_post_s_fl" style="float:left; line-height:28px;">分享到：</span> <span  style="float:left; line-height:20px;">
      <div class="bdsharebuttonbox">
	  <a title="分享到QQ空间" href="#" class="bds_qzone" data-cmd="qzone"></a>
	  <a title="分享到新浪微博" href="#" class="bds_tsina" data-cmd="tsina"></a>
	  <a title="分享到微信" href="#" class="bds_weixin" data-cmd="weixin"></a>
	  <a href="#" class="bds_more" data-cmd="more"></a> </div>
      </span> </div>
	  
      </div>
      	  <div class="clear"></div>
      <div class="invitereg_p1">方法二：发送邮件给朋友</div>
      <div class="invitereg_p2">邀请朋友加入，可以在下面输入朋友的邮箱地址和想说的话</div>
    <form name="myform" target="supportiframe" action="<?php echo smarty_function_url(array('m'=>'invitereg'),$_smarty_tpl);?>
" method="post" onsubmit="return checkpost();">
      <div class="invitereg_list"><span class="invitereg_list_span">邮箱地址：</span>
        <input type="text" name="email" placeholder="这里输入邮箱" class="invitereg_text"/>
      </div>
      <div class="invitereg_list"><span class="invitereg_list_span">想说的话：</span>
        <textarea class="invitereg_info_yx" name="content" id="content" readonly >我一直在用<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
找工作；真的很不错；忍不住的想推荐给你，快去注册吧！免费哦！链接地址：<?php echo $_smarty_tpl->tpl_vars['reg_url']->value;?>
</textarea>
      </div>
      
      <div class="invitereg_list"><span class="invitereg_list_span">验证码：</span>
        <input type="text" name="authcode" id="authcode"  placeholder="这里输入验证码" class="invitereg_texts" maxlength="6"/>
        <a href="javascript:void(0);" onclick="checkCode('vcode_imgs');"><img id="vcode_imgs" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/include/authcode.inc.php"/></a> 
      </div>
      
      <div class="invitereg_list"><span class="invitereg_list_span">&nbsp;</span>
        <input type="submit" name="submit" value="发送邮件" class="invitereg_bth"/>
      </div>
     </form>
    </div>
  </div>
</div>
</div>
<input type="hidden" id="url" value="<?php echo $_smarty_tpl->tpl_vars['reg_url']->value;?>
"/>
<textarea id="fe_text" cols="50" rows="3" class="none"><?php echo $_smarty_tpl->tpl_vars['reg_url']->value;?>
</textarea>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<link href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/css/layui.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" /><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/layui.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/phpyun_layer.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/js/subscribe.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" class="dn"></iframe> 
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/js/ZeroClipboard.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
var weburl="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
",integral_pricename='<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
',pricename='<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
',code_web='<?php echo $_smarty_tpl->tpl_vars['config']->value['code_web'];?>
',code_kind='<?php echo $_smarty_tpl->tpl_vars['config']->value['code_kind'];?>
';<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript">
function checkpost(){
	var email=$("input[name=email]").val();
    if(email==""){
		layer.msg('邮箱不能为空！', 2, 8);return false;  
	}
    var myreg = /^([a-zA-Z0-9\-]+[_|\_|\.]?)*[a-zA-Z0-9\-]+@([a-zA-Z0-9\-]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
    if(!myreg.test(email)){
		layer.msg('邮箱格式不正确！', 2, 8);return false;  
	}
	var content=$("#content").val();
    if(content==""){
		layer.msg('内容不能为空！', 2, 8);return false;  
	}
	layer.load('执行中，请稍候...',0);
} 
	var clip = new ZeroClipboard( document.getElementById("d_clip_button"), {
	  moviePath: "<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/js/ZeroClipboard.swf"
	} );
	// 复制内容到剪贴板成功后的操作
	clip.on( 'complete', function(client, args) {
	   layer.msg('复制成功！', 2, 9);return false;  
	} );
	window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdDesc":"#推荐得<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
，好礼尽情拿#只要成功推荐1位朋友注册，就可以兑换到礼品了！只要推荐<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
够给力，更有新iPad、iPod、音响、耳机、背包、笔记本等数万件礼品可尽情兑换！给我点力吧！注册成功你也可以获得礼品兑换<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
哦，赶快来参加吧！","bdUrl":"<?php echo $_smarty_tpl->tpl_vars['reg_url']->value;?>
","bdComment":"<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
","bdMini":"2","bdPic":"","bdStyle":"0","bdSize":"24"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src=weburl+'/js/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<?php }} ?>
