<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-11 12:24:09
         compiled from "D:\rcw\uploads\app\template\wap\member\user\rcomplete.htm" */ ?>
<?php /*%%SmartyHeaderCode:15982257905fab67699f1292-07797874%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f738750d04cfb5b9f5fa99067690d8c19900b33' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\wap\\member\\user\\rcomplete.htm',
      1 => 1576479743,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15982257905fab67699f1292-07797874',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config_wapdomain' => 0,
    'config' => 0,
    'list' => 0,
    'job' => 0,
    'wap_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fab6769a01665_99500979',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fab6769a01665_99500979')) {function content_5fab6769a01665_99500979($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/member/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
/js/mui/css/mui.picker.min.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
/js/mui/css/mui.poppicker.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
<style>
    .layermbox {z-index: 10000000000}
	.header_userbg{ background:#1178c3;}
	.header_h1{color:#fff}
	.header_top_l:after{content: ' ';width: 12px;height: 12px;border: #fff solid;-webkit-transform: rotate(-135deg);border-width: 1px 1px 0 0;display: inline-block;
}
.yun_footer{ display:none}
</style>

<!--有简历的情况-->
<div class="yun_usermember_have" style="display:;">
	<!--基础创建成功情况-->
	<div class="basics_box">
		<div class="rcomplete_gx">恭喜你 , 简历发布成功</div>
<div class="rcomplete_ylbox">
		<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'resume','a'=>'show','id'=>$_GET['eid']),$_smarty_tpl);?>
" class="rcomplete_yl">预览简历</a>
		<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job'),$_smarty_tpl);?>
" class="rcomplete_yljob">开始找工作</a>
		
	</div>
		</div>	

     	
    <div class="rcomplete_tjjob">
    	<div>95%的人发布简历后都主动投递了职位!</div>
    	<div>
    		<?php  $_smarty_tpl->tpl_vars['job'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['job']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['job']->key => $_smarty_tpl->tpl_vars['job']->value) {
$_smarty_tpl->tpl_vars['job']->_loop = true;
?>
    		<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','a'=>'comapply','id'=>$_smarty_tpl->tpl_vars['job']->value['id']),$_smarty_tpl);?>
">
            <div class="rcomplete_tjjoblist">
    			<div class="rcomplete_tjjobname"><?php echo $_smarty_tpl->tpl_vars['job']->value['name'];?>
</div>
    			<div>
    				<span class="rcomplete_tjjobxz"><?php echo $_smarty_tpl->tpl_vars['job']->value['job_salary'];?>
</span>
                    <span class="rcomplete_tjjob_line">|</span>
    				<span><?php echo $_smarty_tpl->tpl_vars['job']->value['job_exp'];?>
经验</span>
                    <span class="rcomplete_tjjob_line">|</span>
    				<span><?php echo $_smarty_tpl->tpl_vars['job']->value['job_edu'];?>
学历</span>
    			</div>
    			<div class="rcomplete_tjcomname"><?php echo $_smarty_tpl->tpl_vars['job']->value['com_name'];?>
</div>
                </div>
    		</a>
    		<?php } ?>
    	</div>
    	<div class="rcomplete_tjmore"><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job'),$_smarty_tpl);?>
">查看更多职位></a></div>
    </div>

</div>


<div id="bg" style="display:none; z-index:100000000000"></div>




<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
/js/mui/mui.picker.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
/js/mui/mui.poppicker.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    
	 
<?php echo '</script'; ?>
>
<!-- <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/resume.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/publicselect.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
> -->
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
