<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-20 09:04:29
         compiled from "D:\rcw\uploads\app\template\wap\member\com\set.htm" */ ?>
<?php /*%%SmartyHeaderCode:4907514965fb7161d7bb769-42830151%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '739cef810290e6044ff0cb868c439a6c5fe6ca92' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\wap\\member\\com\\set.htm',
      1 => 1576583345,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4907514965fb7161d7bb769-42830151',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company' => 0,
    'config' => 0,
    'username' => 0,
    'cert' => 0,
    'member' => 0,
    'fpid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fb7161d7cf824_93667079',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb7161d7cf824_93667079')) {function content_5fb7161d7cf824_93667079($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/member/cheader.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--账号设置-->
<a href="index.php?c=info" class="yunset_box_cominfo">
    <img src="<?php echo $_smarty_tpl->tpl_vars['company']->value['logo'];?>
" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_unit_icon'];?>
',2);">
    <div class=""><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</div>
    <div class="yunset_box_info">完善企业基本资料</div>
</a>

<ul class="yunset mt15">
    <li>
        <a href="index.php?c=comcert">
            营业执照认证 <?php if ($_smarty_tpl->tpl_vars['company']->value['yyzz_status']==1) {?>
            <span class="yunset_tip">已认证</span> <?php } else { ?> <?php if (!empty($_smarty_tpl->tpl_vars['cert']->value)) {?> <?php if ($_smarty_tpl->tpl_vars['cert']->value['status']==2) {?>
            <span class="yunset_tip">审核未通过</span> <?php } else { ?>
            <span class="yunset_tip">已上传等待审核</span> <?php }?> <?php } else { ?>
            <span class="yunset_tip">未认证</span> <?php }?> <?php }?>
        </a>
    </li>
</ul>
<ul class="yunset mt15">
    <li class="yunset_yx">
        <a href="index.php?c=bindingbox&type=moblie">
            <span class="yunset_list_maxheight">手机</span>
            <span class="yunset_tip">
            <div class="yunset_yx_name">
				<?php if ($_smarty_tpl->tpl_vars['company']->value['moblie_status']==1) {?>
				（已绑定）
				<?php } else { ?>
				（未绑定）
				<?php }?>
				<?php echo $_smarty_tpl->tpl_vars['company']->value['linktel'];?>

                </div>
                手机用于登录和找回密码请谨慎填写
			</span>
        </a>
    </li>

    <li class="yunset_yx">
        <a href="index.php?c=bindingbox&type=email">
            <span class="yunset_list_maxheight">邮箱</span>
            <span class="yunset_tip ">
				<div class="yunset_yx_name">
					<?php if ($_smarty_tpl->tpl_vars['company']->value['email_status']==1) {?>
					（已绑定）
					<?php } else { ?>
					（未验证）
					<?php }?>
					<?php echo $_smarty_tpl->tpl_vars['company']->value['linkmail'];?>

				</div>
				邮箱用于登录和找回密码请谨慎填写
			</span>
        </a>
    </li>

    <li>
        <a href="index.php?c=binding">社交账号绑定</a>
    </li>
 

</ul>

<ul class="yunset mt15">
    <li>
        <a href="index.php?c=map">企业设置地图
        	<?php if ($_smarty_tpl->tpl_vars['company']->value['x']!=''&&$_smarty_tpl->tpl_vars['company']->value['y']!='') {?>
            	<span class="yunset_tip">已设置</span> 
            <?php }?>  
        </a>
    </li>
    <li>
        <a href="index.php?c=show">上传企业环境</a>
    </li>
</ul>

<ul class="yunset mt15">
    <li>
        <a href="index.php?c=password">密码设置</a>
    </li>
    <?php if ($_smarty_tpl->tpl_vars['member']->value['setname']=='1') {?>
    <li>
        <a href="index.php?c=setname">用户名修改
        <div class="yunset_tip ">您有一次修改账户名的机会</div></a>
    </li>
    <?php }?>

    <?php if (empty($_smarty_tpl->tpl_vars['fpid']->value)&&$_smarty_tpl->tpl_vars['config']->value['sy_user_change']==1) {?>
        <li><a href="javascript:;" onclick="changeutype();">切换身份<span class="yunset_tip">我要求职</span></a></li>
    <?php }?>

    <li>
        <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'advice'),$_smarty_tpl);?>
">意见反馈</a>
    </li>
</ul>

<div class="yunset_logout mt15">
    <a href="javascript:;" onclick="islogout('<?php echo smarty_function_url(array('m'=>'wap','c'=>'loginout'),$_smarty_tpl);?>
','确认退出吗？');">退出登录</a>
</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/member/public/changeutype.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
