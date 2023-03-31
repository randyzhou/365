<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-11 14:25:13
         compiled from "D:\rcw\uploads\app\template\wap\member\user\binding.htm" */ ?>
<?php /*%%SmartyHeaderCode:7090827745fab83c9d765e7-87474286%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b18a0b8ba2075dda1500f5022448873866181c7' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\wap\\member\\user\\binding.htm',
      1 => 1576737825,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7090827745fab83c9d765e7-87474286',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'member' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fab83c9d88dc6_35574386',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fab83c9d88dc6_35574386')) {function content_5fab83c9d88dc6_35574386($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/member/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<ul class="bingding_box">
    <li>
        <div class="bingding_box_iconbg <?php if ($_smarty_tpl->tpl_vars['member']->value['wxid']!='') {?>bingding_yx_g<?php }?>"><i class="bingding_box_iconwx"></i></div>
        <div class="bingding_box_name">微信绑定</div>
        <?php if ($_smarty_tpl->tpl_vars['member']->value['wxopenid']!=''||$_smarty_tpl->tpl_vars['member']->value['wxid']!='') {?>
	        <div class="bingding_box_p">你已绑定微信，下次你可以直接使用微信快捷登录</div>
        	<a href="javascript:void(0)" onclick="layer_del('确定要取消绑定？','index.php?c=binding&type=wxid')" class="bingding_box_bth_jc">解除绑定</a>
        <?php } else { ?>
        	
        	<?php if ($_smarty_tpl->tpl_vars['config']->value['wx_rz']=='0') {?>
        		<a href="javascript:void(0)" onclick="layermsg('对不起，微信绑定已关闭！');return false;" class="bingding_box_bth">立即绑定</a>
        		
        	<?php } else { ?>
	
	       	 <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'wxconnect','login'=>1),$_smarty_tpl);?>
" class="bingding_box_bth">立即绑定</a>
	
	        <?php }?>
	        
			<div class="bingding_box_p">绑定微信，下次你可以直接使用微信快捷登录</div>
		
		<?php }?>
    </li>
    <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_qqlogin']=='1') {?>
    <li>
        <div class="bingding_box_iconbg <?php if ($_smarty_tpl->tpl_vars['member']->value['qqid']!='') {?>bingding_yx_qq<?php }?>"><i class="bingding_box_iconqq"></i></div>
        <div class="bingding_box_name">QQ绑定</div>

        <?php if ($_smarty_tpl->tpl_vars['member']->value['qqid']!='') {?>
        <div class="bingding_box_p">你已绑定QQ号，下次你可以直接使用QQ快捷登录</div>
        <a href="javascript:void(0)" onclick="layer_del('确定要取消绑定？','index.php?c=binding&type=qqid')" class="bingding_box_bth_jc">解除绑定</a>
        <?php } else { ?> <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_qqlogin']!='1') {?>

        <a href="javascript:void(0)" onclick="layermsg('对不起，QQ绑定已关闭！');return false;" class="bingding_box_bth">立即绑定</a>

        <?php } else { ?>

        <a href="<?php echo smarty_function_url(array('m'=>'qqconnect','login'=>1),$_smarty_tpl);?>
" class="bingding_box_bth">立即绑定</a>

        <?php }?>
        <div class="bingding_box_p">绑定QQ，下次你可以直接使用QQ号快捷登录</div>

        <?php }?>
    </li>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_sinalogin']=='1') {?>
    <li>
        <div class="bingding_box_iconbg <?php if ($_smarty_tpl->tpl_vars['member']->value['sinaid']!='') {?>bingding_yx_xl<?php }?>"><i class="bingding_box_iconxl"></i></div>
        <div class="bingding_box_name">新浪微博绑定</div>
        <?php if ($_smarty_tpl->tpl_vars['member']->value['sinaid']!='') {?>
        <div class="bingding_box_p">绑定新浪微博，，下次你可以直接使用新浪微博快捷登录</div>
        <a href="javascript:void(0)" onclick="layer_del('确定要取消绑定？','index.php?c=binding&type=sinaid')" class="bingding_box_bth_jc">解除绑定</a>
        <?php } else { ?> <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_sinalogin']!='1') {?>
        <a href="javascript:void(0)" onclick="layermsg('对不起，新浪绑定已关闭！');return false;" class="bingding_box_bth">立即绑定</a>
        <?php } else { ?>
        <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'sinaconnect','login'=>1),$_smarty_tpl);?>
" class="bingding_box_bth">立即绑定</a>
        <?php }?>
        <div class="bingding_box_p">绑定新浪微博，下次你可以直接使用新浪微博快捷登录</div>

        <?php }?>

    </li>
    <?php }?>
</ul>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
