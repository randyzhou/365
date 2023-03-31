<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-10-31 16:48:12
         compiled from "D:\rcw\uploads\app\template\admin\admin_integral_config.htm" */ ?>
<?php /*%%SmartyHeaderCode:13494788165f9d24cc6041b4-35303418%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e9f1020d3993efe73ed1f1efd84b77b33fa9e5b' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\admin\\admin_integral_config.htm',
      1 => 1576479798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13494788165f9d24cc6041b4-35303418',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5f9d24cc62f188_03973425',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9d24cc62f188_03973425')) {function content_5f9d24cc62f188_03973425($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<link href="images/reset.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<link href="images/system.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<link href="images/table_form.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/admin_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<link href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/css/layui.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/layui.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/phpyun_layer.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<title>后台管理</title>
</head>
<body class="body_ifm">
<div class="infoboxp">   <div class="tabs_info">
    <ul>
      <li class="curr"><a href="index.php?m=integral"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
设置</a></li>
      <li class=""><a href="index.php?m=integral&c=user">个人<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
</a></li>
      <li class=""> <a href="index.php?m=integral&c=com">企业<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
</a></li>
	  <li class=""> <a href="index.php?m=integral&c=class"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
优惠</a></li>
    </ul>
  </div>
<div class="admin_new_tip">
<a href="javascript:;" class="admin_new_tip_close"></a>
<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
<div class="admin_new_tip_list_cont">
<div class="admin_new_tip_list"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
设置</div>
</div>
</div>
<div class="clear"></div>
<div style="height:10px;"></div>


<form class="layui-form">



<div class="main_tag">
<div class="tag_box">
<div>
<table width="100%" class="table_form">
  <tr class="admin_table_trbg">
         <th width="220" bgcolor="#f0f6fb"><span class="admin_bold">参数说明</span></th>
          <td bgcolor="#f0f6fb"><span class="admin_bold">参数值</span></td>
    </tr>
  <tr class="admin_table_trbg">
    <th width="220"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
代替词：</th>
    <td><input class="input-text tips_class" type="text" name="integral_pricename" id="integral_pricename" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
" size="20" maxlength="255"/> <span class="admin_web_tip">默认为<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
，例：金币</span></td>
  </tr>
  <tr>
    <th width="220">最低充值<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：</th>
    <td><input class="input-text tips_class" type="text" name="integral_min_recharge" id="integral_min_recharge" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_min_recharge'];?>
" size="20" maxlength="255"/> <span class="admin_web_tip">0 表示不限</span></td>
  </tr>
 
 
   <tr>
    <th width="220">最低充值金额：</th>
    <td><input class="input-text tips_class" type="text" name="money_min_recharge" id="money_min_recharge" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['money_min_recharge'];?>
" size="20" maxlength="255"/> 元<span class="admin_web_tip">0 表示不限</span></td>
  </tr>
    <tr class="admin_table_trbg">
    <th width="220"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
单位：</th>
    <td><input class="input-text tips_class" type="text" name="integral_priceunit" id="integral_priceunit" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];?>
" size="20" maxlength="255"/> <span class="admin_web_tip">默认为点，例：个，位</span></td>
  </tr>
    <tr>
    <th width="220"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
兑换比例：</th>
    <td><input class="input-text tips_class" type="text" name="integral_proportion" id="integral_proportion" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
" size="20" maxlength="255"/> 点 <span class="admin_web_tip">例：1元=30点<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
</span></td>
  </tr>
  <tr>
    <th width="220">每日签到送<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：</th>
    <td><input class="input-text tips_class" type="text" name="integral_signin" id="integral_signin" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_signin'];?>
" size="20" maxlength="255"  onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')"/><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
  <span class="admin_web_tip">第六日起，获得<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
将翻倍。</span></td>
  </tr>
    <tr class="admin_com_td_bg">
  <th width="220">会员注册：</th>
    <td>
      <div class="layui-form-item">
        <div class="layui-input-block">
          <!-- <div class="layui-input-inline"> -->
            <input type="checkbox" name="integral_reg_type" lay-skin="switch" lay-text="加|减"
              <?php if ($_smarty_tpl->tpl_vars['config']->value['integral_reg_type']=="1") {?>
             checked
              <?php }?>
              disabled />

            <input class="input-text" type="text" name="integral_reg" id="integral_reg" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_reg'];?>
" size="13" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/> <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
 
          <!-- </div> -->
        </div>
      </div> 
    </td>
  </tr>
    <tr>
  <th width="220">每天第一次登录：</th>
    <td>
      <div class="layui-form-item">
        <div class="layui-input-block">
            <input type="checkbox" name="integral_login_type" lay-skin="switch" lay-text="加|减"
              <?php if ($_smarty_tpl->tpl_vars['config']->value['integral_login_type']=="1") {?>
             checked
              <?php }?> disabled
              />

            <input class="input-text" type="text" name="integral_login" id="integral_login" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_login'];?>
" size="13" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/> <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
 
        </div>
      </div>
    </td>    
  </tr>

    <tr class="admin_com_td_bg">
  <th width="220">完善基本资料：</th>
    <td>      
      <div class="layui-form-item">
        <div class="layui-input-block">
            <input type="checkbox" name="integral_userinfo_type" lay-skin="switch" lay-text="加|减"
              <?php if ($_smarty_tpl->tpl_vars['config']->value['integral_userinfo_type']=="1") {?>
             checked
              <?php }?> disabled
              />

            <input class="input-text" type="text" name="integral_userinfo" id="integral_userinfo" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_userinfo'];?>
" size="13" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/> <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>

        </div>
      </div>
    </td>
  </tr>  
    <tr>
  <th width="220">邮箱认证：</th>
    <td>
      <div class="layui-form-item">
        <div class="layui-input-block">
          <input type="checkbox" name="integral_emailcert_type" id="integral_emailcert_type" lay-skin="switch" lay-text="加|减"
            <?php if ($_smarty_tpl->tpl_vars['config']->value['integral_emailcert_type']=="1") {?>
           checked
            <?php }?> disabled
            />

          <input class="input-text" type="text" name="integral_emailcert" id="integral_emailcert" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_emailcert'];?>
" size="13" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/> <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>

        </div>
      </div>
    </td>
  </tr>
    <tr class="admin_com_td_bg">
  <th width="220">手机认证：</th>
    <td> 
      <div class="layui-form-item">
        <div class="layui-input-block">
          <input type="checkbox" name="integral_mobliecert_type" id="integral_mobliecert_type" lay-skin="switch" lay-text="加|减"
            <?php if ($_smarty_tpl->tpl_vars['config']->value['integral_mobliecert_type']=="1") {?>
           checked
            <?php }?> disabled
            />

          <input class="input-text" type="text" name="integral_mobliecert" id="integral_mobliecert" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_mobliecert'];?>
" size="13" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/> <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>

        </div>
      </div>
    </td>
  </tr>
    <tr>
  <th width="220">上传头像：</th>
    <td>
      <div class="layui-form-item">
        <div class="layui-input-block">
          <input type="checkbox" name="integral_avatar_type" id="integral_avatar_type" lay-skin="switch" lay-text="加|减"
            <?php if ($_smarty_tpl->tpl_vars['config']->value['integral_avatar_type']=="1") {?>
           checked
            <?php }?> disabled
            />

          <input class="input-text" type="text" name="integral_avatar" id="integral_avatar" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_avatar'];?>
" size="13" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/> <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>

        </div>
      </div>
    </td>
  </tr>
    <tr class="admin_com_td_bg">
  <th width="220">发布问题：</th>
    <td>
      <div class="layui-form-item">
        <div class="layui-input-block">
          <input type="checkbox" name="integral_question_type" id="integral_question_type" lay-skin="switch" lay-text="加|减"
            <?php if ($_smarty_tpl->tpl_vars['config']->value['integral_question_type']=="1") {?>
           checked
            <?php }?>
            />

          <input class="input-text" type="text" name="integral_question" id="integral_question" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_question'];?>
" size="13" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/> <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>

        </div>
      </div>
    </td>
  </tr>

  <tr>
    <th width="220">回答问题：</th>
    <td>
      <div class="layui-form-item">
        <div class="layui-input-block">
          <input type="checkbox" name="integral_answer_type" id="integral_answer_type" lay-skin="switch" lay-text="加|减"
            <?php if ($_smarty_tpl->tpl_vars['config']->value['integral_answer_type']=="1") {?>
           checked
            <?php }?>
            />

          <input class="input-text" type="text" name="integral_answer" id="integral_answer" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_answer'];?>
" size="13" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/> <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>

        </div>
      </div>
    </td>
  </tr>
    <tr class="admin_com_td_bg">
  <th width="220">评论回答：</th>
    <td>
      <div class="layui-form-item">
        <div class="layui-input-block">
          <input type="checkbox" name="integral_answerpl_type" id="integral_answerpl_type" lay-skin="switch" lay-text="加|减"
            <?php if ($_smarty_tpl->tpl_vars['config']->value['integral_answerpl_type']=="1") {?>
           checked
            <?php }?>
            />

          <input class="input-text" type="text" name="integral_answerpl" id="integral_answerpl" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_answerpl'];?>
" size="13" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/> <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>

        </div>
      </div>
    </td>
  </tr>
    <tr>
  <th width="220">邀请注册：</th>
    <td>
      <div class="layui-form-item">
        <div class="layui-input-block">
          <input type="checkbox" name="integral_invite_reg_type" id="integral_invite_reg_type" lay-skin="switch" lay-text="加|减"
            <?php if ($_smarty_tpl->tpl_vars['config']->value['integral_invite_reg_type']=="1") {?>
           checked
            <?php }?> disabled
            />

          <input class="input-text" type="text" name="integral_invite_reg" id="integral_invite_reg" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_invite_reg'];?>
" size="13" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/> <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>

        </div>
      </div>
    </td>
  </tr>

  <tr class="admin_table_trbg">
    <th>&nbsp;</th>
          <td align="left">
      <input class="layui-btn layui-btn-normal" id="integral" type="button" name="config" value="提交" />&nbsp;&nbsp;
      <input class="layui-btn layui-btn-normal" type="reset" value="重置" />
    </td>
  </tr>
</table>
</div>

</div>
</div>
</div>
<input type="hidden" name="pytoken" id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
<?php echo '<script'; ?>
>
  layui.use(['layer', 'form'], function(){
    var layer = layui.layer
    ,form = layui.form
    ,$ = layui.$;
  });

$(function(){
  $("#integral").click(function(){
	loadlayer();
    $.post("index.php?m=integral&c=save",{
      config : $("#integral").val(),
      integral_pricename : $("#integral_pricename").val(),
      integral_priceunit : $("#integral_priceunit").val(),
      integral_min_recharge : $("#integral_min_recharge").val(),
      money_min_recharge : $("#money_min_recharge").val(),
      integral_proportion : $("#integral_proportion").val(),
      integral_signin : $("#integral_signin").val(),
      integral_reg_type : $("input[name=integral_reg_type]").is(":checked") ? 1 : 2,
      integral_reg : $("#integral_reg").val(),
      integral_login_type : $("input[name=integral_login_type]").is(":checked") ? 1 : 2,
      integral_login : $("#integral_login").val(),
      integral_userinfo_type : $("input[name=integral_userinfo_type]").is(":checked") ? 1 : 2,
      integral_userinfo : $("#integral_userinfo").val(),
      integral_emailcert_type : $("#integral_emailcert_type").is(":checked") ? 1 : 2,
      integral_emailcert : $("#integral_emailcert").val(),
      integral_mobliecert_type : $("#integral_mobliecert_type").is(":checked") ? 1 : 2,
      integral_mobliecert : $("#integral_mobliecert").val(),
      integral_avatar_type : $("#integral_avatar_type").is(":checked") ? 1 : 2,
      integral_avatar : $("#integral_avatar").val(),
      integral_question_type : $("#integral_question_type").is(":checked") ? 1 : 2,
      integral_question : $("#integral_question").val(),
      integral_answer_type : $("#integral_answer_type").is(":checked") ? 1 : 2,
      integral_answer : $("#integral_answer").val(),
      integral_answerpl_type : $("#integral_answerpl_type").is(":checked") ? 1 : 2,
      integral_answerpl : $("#integral_answerpl").val(),
      integral_invite_reg_type : $("#integral_invite_reg_type").is(":checked") ? 1 : 2,
      integral_invite_reg : $("#integral_invite_reg").val(),
      pytoken : $("#pytoken").val()
    },function(data,textStatus){
		parent.layer.closeAll('loading');
      config_msg(data);
    });
  });
})
<?php echo '</script'; ?>
>
</form>
</body>
</html><?php }} ?>
