<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-01 03:21:39
         compiled from "D:\rcw\uploads\app\template\member\user\resumetpl.htm" */ ?>
<?php /*%%SmartyHeaderCode:11916620405f9db9437b5d97-24438011%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df58814821b53fa1dd0ca64a4f60bc1318519415' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\member\\user\\resumetpl.htm',
      1 => 1576479787,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11916620405f9db9437b5d97-24438011',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'user_style' => 0,
    'statis' => 0,
    'resume' => 0,
    'rows' => 0,
    'style' => 0,
    'paytpls' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5f9db9437cc451_89604802',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9db9437cc451_89604802')) {function content_5f9db9437cc451_89604802($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/class.public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
> 
<?php echo '</script'; ?>
>
<div class="yun_w1200">
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="yun_m_rightbox fltR mt20 re">
		<div class="member_right_index_h1 fltL"> <span class="member_right_h1_span fltL">简历模板</span> <i class="member_right_h1_icon user_bg"></i></div> 
		       
<div  class="resume_Prompt_box">
<div  class="resume_Prompt"><i class="resume_Prompt_icon"></i>提示：所有简历均可用于投递职位；当隐私设置为"公开"时，仅默认简历可以被企业搜索到</div>
</div>

			
			<div class="resume_template_box"> 
				<dl class="resume_template">
					<dt> <img src="<?php echo $_smarty_tpl->tpl_vars['user_style']->value;?>
/images/mr.png"width="238" height="315"> </dt>
					<dd>
					<div class="resume_template_pd">
					<div class="resume_template_name">	默认模板 </div>
						<div class="resume_template_p">
							模板价格：<b class="comtpl_b">免费</b>
						</div>
						</div>
							<div class="resume_template_cz">
							<?php if ($_smarty_tpl->tpl_vars['statis']->value['tpl']=='0') {?>
							<span class=" resume_template_bth_sy">使用中</span>
							<i class="resume_template_cz_icon"></i>
							<?php } else { ?>  
								<a href="javascript:void(0);" onclick="layer_del('确定试用该模板？', 'index.php?c=resumetpl&act=settpl&id=0');" class="resume_template_bth">使用</a> 
							<?php }?> 
							<a href="<?php echo smarty_function_url(array('m'=>'resume','c'=>'show','id'=>$_smarty_tpl->tpl_vars['resume']->value['def_job'],'tmp'=>2),$_smarty_tpl);?>
" target="_blank" class="resume_template_ylbth">预览</a>

						</div>
					</dd>
				</dl>
				
				<?php  $_smarty_tpl->tpl_vars['style'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['style']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['style']->key => $_smarty_tpl->tpl_vars['style']->value) {
$_smarty_tpl->tpl_vars['style']->_loop = true;
?> 
				<dl class="resume_template">
					<dt> <img alt="<?php echo $_smarty_tpl->tpl_vars['style']->value['name'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['style']->value['pic'];?>
"width="238" height="315"> </dt>
					<dd>
						<div class="resume_template_pd">
						<div class="resume_template_name"><?php echo $_smarty_tpl->tpl_vars['style']->value['name'];?>
 </div>
						<div class="resume_template_p" id="list_tpl_<?php echo $_smarty_tpl->tpl_vars['style']->value['id'];?>
">
							模板价格：
								<?php if ($_smarty_tpl->tpl_vars['style']->value['price']!=0) {?>
								<span class="resume_template_jg"><?php echo $_smarty_tpl->tpl_vars['style']->value['price'];?>
</span> <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>

								<?php } else { ?>
								<span class="resume_template_jg">免费</span>
								<?php }?>
								</div>
						</div>
						<div class="resume_template_cz">
							<?php if ($_smarty_tpl->tpl_vars['statis']->value['tpl']==$_smarty_tpl->tpl_vars['style']->value['id']) {?>
							<div class=" resume_template_bth_sy">使用中</div>
								<i class="resume_template_cz_icon"></i>
							<?php } else { ?> 
								<?php if (in_array($_smarty_tpl->tpl_vars['style']->value['id'],$_smarty_tpl->tpl_vars['paytpls']->value)) {?>
									<a href="javascript:void(0);" onclick="layer_del('确定试用该模板？', 'index.php?c=resumetpl&act=settpl&id=<?php echo $_smarty_tpl->tpl_vars['style']->value['id'];?>
');" class="resume_template_bth">使用</a>
								<?php } else { ?>
									<a href="javascript:void(0);" onclick="layer_del('购买模板将花费<?php echo $_smarty_tpl->tpl_vars['style']->value['price'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
，是否继续？', 'index.php?c=resumetpl&act=pay&id=<?php echo $_smarty_tpl->tpl_vars['style']->value['id'];?>
');" class="resume_template_bth">购买</a>
								<?php }?> 
							<?php }?>
							<a href="<?php echo smarty_function_url(array('m'=>'resume','c'=>'show','id'=>$_smarty_tpl->tpl_vars['resume']->value['def_job'],'tmp'=>$_smarty_tpl->tpl_vars['style']->value['id']),$_smarty_tpl);?>
" target="_blank" class="resume_template_ylbth">预览</a>

						</div>
					</dd>
				</dl>
			
				<?php } ?> 
			</div>
		</div> 
</div> 
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
