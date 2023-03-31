<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-01 03:22:04
         compiled from "D:\rcw\uploads\app\template\member\user\integral.htm" */ ?>
<?php /*%%SmartyHeaderCode:210192695f9db95ca9be17-00900817%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1449c7aaa3a4d16f0e95a8a0dff2b1b3717aeff' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\member\\user\\integral.htm',
      1 => 1576479787,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '210192695f9db95ca9be17-00900817',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'statusList' => 0,
    'expectnum' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5f9db95cac6753_65962777',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9db95cac6753_65962777')) {function content_5f9db95cac6753_65962777($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="yun_w1200">
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="yun_m_rightbox fltR mt20 re">

        <div class="member_right_index_h1 fltL"> <span class="member_right_h1_span fltL"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
管理</span> <i class="member_right_h1_icon user_bg"></i></div>

        <div class="job_list_tit">
            <ul class="">
                <li class="job_list_tit_cur">
                    <a href="index.php?c=integral"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
任务</a>
                </li>
                <li>
                    <a href="index.php?c=integral_reduce">消费规则</a>
                </li>
                <li>
                    <a href="index.php?c=reward_list"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
兑换</a>
                </li>
            </ul>
        </div>

        <div class="integral_list_box">

            <ul class="integral_list">
                <li>
                    <div class="integral_list_n integral_list_n_c1"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_userinfo'];?>
</div>
                    <div class="integral_listname">完善基本资料</div>
                    <div class="integral_list_p"> +<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_userinfo'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
 </div>
                    <div class="integral_list_bth">
                        <?php if ($_smarty_tpl->tpl_vars['statusList']->value['baseInfo']) {?><span class="integral_list_bth_s">已完善</span> <?php } else { ?>
                        <a href="index.php?c=info" target="_blank" class="integral_list_bth_a">立即完善</a> <?php }?> </div>
                </li>
                <li>

                    <div class="integral_list_n integral_list_n_c2"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_avatar'];?>
</div>
                    <div class="integral_listname">上传头像</div>
                    <div class="integral_list_p"> +<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_avatar'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
 </div>
                    <div class="integral_list_bth"><?php if ($_smarty_tpl->tpl_vars['statusList']->value['photo']) {?><span class="integral_list_bth_s">已上传</span><?php } else { ?>
                        <a href="index.php?c=uppic" target="_blank" class="integral_list_bth_a">上传头像</a> <?php }?> </div>
                </li>
                <li>
                    <div class="integral_list_n integral_list_n_c3"> <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_invite_reg'];?>
</div>
                    <div class="integral_listname">邀请朋友注册</div>
                    <div class="integral_list_p"> +<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_invite_reg'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
 </div>
                    <div class="integral_list_bth">
                        <a href="<?php echo smarty_function_url(array('m'=>'invitereg'),$_smarty_tpl);?>
" target="_blank" class="integral_list_bth_a">现在就邀请</a>
                    </div>
                </li>

                <li>
                    <div class="integral_list_n integral_list_n_c4"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_login'];?>
</div>
                    <div class="integral_listname">每天第一次登录</div>
                    <div class="integral_list_p"> +<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_login'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
 </div>
                    <div class="integral_list_bth"><span class="integral_list_bth_s">今日已登录</span> </div>
                </li>
                   <li>
                    <div class="integral_list_n integral_list_n_c4"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_signin'];?>
</div>
                    <div class="integral_listname">每天签到</div>
                    <div class="integral_list_p"> +<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_signin'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
 </div>
                    <div class="integral_list_bth">                    
                    <?php if ($_smarty_tpl->tpl_vars['statusList']->value['signin']) {?>
                      <span class="integral_list_bth_s">今日已签到</span> 
                      <?php } else { ?>
                        <a href="javascript:void(0);" onClick="sign();" class="integral_list_bth_a">签到</a>
                    <?php }?>
                    </div> 
            
                </li>
                <li>
                    <div class="integral_list_n integral_list_n_c5"> <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_emailcert'];?>
</div>
                    <div class="integral_listname">认证电子邮箱</div>
                    <div class="integral_list_p">+<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_emailcert'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
 </div>

                    <div class="integral_list_bth"><?php if ($_smarty_tpl->tpl_vars['statusList']->value['emailChecked']) {?> <span class="integral_list_bth_s">已验证</span> <?php } else { ?>
                        <a href="index.php?c=passwd" target="_blank" class="integral_list_bth_a">邮箱认证</a> <?php }?> </div>
                </li>
                <li>
                    <div class="integral_list_n integral_list_n_c6"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_mobliecert'];?>
</div>
                    <div class="integral_listname">认证手机号码</div>
                    <div class="integral_list_p"> +<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_mobliecert'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
</div>
                    <div class="integral_list_bth"><?php if ($_smarty_tpl->tpl_vars['statusList']->value['phoneChecked']) {?>
                        <span class="integral_list_bth_s"> 已验证</span> <?php } else { ?>
                        <a href="index.php?c=passwd" target="_blank" class="integral_list_bth_a">手机验证</a> <?php }?> </div>
                </li>
                <li>
                    <div class="integral_list_n integral_list_n_c7"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_add_resume'];?>
</div>
                    <div class="integral_listname">发布简历</div>
                    <div class="integral_list_p"> +<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_add_resume'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
</div>
                    <div class="integral_list_bth"><?php if ($_smarty_tpl->tpl_vars['expectnum']->value) {?><span class="integral_list_bth_s">已发布</span><?php } else { ?>
                        <a href="index.php?c=expect&act=add" target="_blank" class="integral_list_bth_a">现在去发布</a><?php }?></div>
                </li>
                <li>
                    <div class="integral_list_n integral_list_n_c8"> <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_identity'];?>
</div>
                    <div class="integral_listname">上传身份验证</div>
                    <div class="integral_list_p"> +<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_identity'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
</div>
                    <div class="integral_list_bth"> <?php if ($_smarty_tpl->tpl_vars['statusList']->value['identification']) {?><span class="integral_list_bth_s">已验证</span><?php } else { ?>
                        <a href="index.php?c=passwd" target="_blank" class="integral_list_bth_a">现在去验证</a> <?php }?> </div>
                </li>
                <?php if ($_smarty_tpl->tpl_vars['config']->value['integral_question_type']==1) {?>
                <li>
                    <div class="integral_list_n integral_list_n_c9"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_question'];?>
</div>
                    <div class="integral_listname">发布问题</div>
                    <div class="integral_list_p"> +<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_question'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
</div>
                    <div class="integral_list_bth"><?php if ($_smarty_tpl->tpl_vars['statusList']->value['question']==false) {?><span class="integral_list_bth_s">今日已发布</span><?php } else { ?>
                        <a href="<?php echo smarty_function_url(array('m'=>'ask','c'=>'addquestion'),$_smarty_tpl);?>
" target="_blank" class="integral_list_bth_a">发布问题</a><?php }?></div>
                </li>
                <?php }?> 
                
                <?php if ($_smarty_tpl->tpl_vars['config']->value['integral_answer_type']==1) {?>
                <li>
                    <div class="integral_list_n integral_list_n_c10"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_answer'];?>
</div>
                    <div class="integral_listname">回答问题</div>
                    <div class="integral_list_p"> +<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_answer'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
</div>
                    <div class="integral_list_bth"><?php if ($_smarty_tpl->tpl_vars['statusList']->value['answer']==false) {?><span class="integral_list_bth_s">今日已回答</span> <?php } else { ?>
                        <a href="<?php echo smarty_function_url(array('m'=>'ask'),$_smarty_tpl);?>
#last-question" target="_blank" class="integral_list_bth_a">回答问题</a><?php }?></div>
                </li>
                <?php }?> 
                
                <?php if ($_smarty_tpl->tpl_vars['config']->value['integral_answerpl_type']==1) {?>
                <li>
                    <div class="integral_list_n integral_list_n_c11"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_answerpl'];?>
</div>
                    <div class="integral_listname">评论回答</div>
                    <div class="integral_list_p"> +<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_answerpl'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
</div>
                    <div class="integral_list_bth"><?php if ($_smarty_tpl->tpl_vars['statusList']->value['answerpl']==false) {?><span class="integral_list_bth_s">今日已评论</span><?php } else { ?>
                        <a href="<?php echo smarty_function_url(array('m'=>'ask'),$_smarty_tpl);?>
#last-question" target="_blank" class="integral_list_bth_a">评论回答</a> <?php }?></div>
                </li>
                <?php }?>

            </ul>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
>
function sign(){
  $.get(weburl+"/member/index.php?m=ajax&c=sign",function(data){ 
				var data=eval('('+data+')');
        if(data.type=="-2"){
         	layer.msg('操作失败！',2,8);return false;
        }else{ 
        	layer.msg('签到成功！', 2, 9,function(){ window.location.reload();window.event.returnValue = false;return false;});return false; 
        }
  });
}
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
