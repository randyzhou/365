<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-01 02:02:03
         compiled from "D:\rcw\uploads\app\template\member\user\privacy.htm" */ ?>
<?php /*%%SmartyHeaderCode:16198710305f9da69b6bfe20-99333270%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7cbb43710a6ac865450c68c745722bdf3a7acc4' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\member\\user\\privacy.htm',
      1 => 1576479787,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16198710305f9da69b6bfe20-99333270',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'resume' => 0,
    'rows' => 0,
    'log' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5f9da69b6cd7a2_27469027',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9da69b6cd7a2_27469027')) {function content_5f9da69b6cd7a2_27469027($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="yun_w1200">
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="yun_m_rightbox fltR mt20 re">
    
    <?php echo '<script'; ?>
>
        function changesta(status, type) {
			loadlayer();
            $.post("index.php?c=privacy", { status: status, type: type }, function (data) {
				layer.closeAll('loading');
                layer.msg('设置成功', 2, 9);
            });
        }
    <?php echo '</script'; ?>
>

      <div class="member_right_index_h1 fltL"> <span class="member_right_h1_span fltL">隐私设置</span> <i class="member_right_h1_icon user_bg"></i></div>
      <div  class="resume_Prompt_box">
<div  class="resume_Prompt"><i class="resume_Prompt_icon"></i>提示：隐私设置为公开时，企业才能搜索到你的默认简历 </div></div>
     <div class="resume_box_list">
    
     
   <div class="clear"></div>
			<dl class="set-status">
			<dd  <?php if ($_smarty_tpl->tpl_vars['resume']->value['status']==1) {?>class="cur"<?php }?>>
				<span>我正在找工作，希望企业关注我的简历</span>
				<a href="javascript:void(0)" onclick="layer_del('', 'index.php?c=privacy&act=up&status=1');" ><i class="i1"></i>公开</a>
				<em class="yes"></em>
				<em class="arr-bottom"></em>
			</dd>
			<dd  <?php if ($_smarty_tpl->tpl_vars['resume']->value['status']==2) {?>class="cur"<?php }?> style="width:350px;">
				<span>目前没找工作，不希望企业关注我的简历</span>
				<a href="javascript:void(0)" onclick="layer_del('', 'index.php?c=privacy&act=up&status=2');"  style="width:280px;"><i class="i2"></i>保密</a>
				<em class="yes"></em>
				<em class="arr-bottom"></em>
			</dd>
		</dl> 
      <?php if ($_smarty_tpl->tpl_vars['resume']->value['status']==1) {?>
		<div class="blacklist">
			<p class="yun_usertitle">
				<span>企业屏蔽</span> <span class="blacklist_tip">我不希望某些企业搜索到我</span>
				<a href="javascript:void(0)" onclick="addblack()">+添加</a>
				<?php if ($_smarty_tpl->tpl_vars['rows']->value) {?>
				<a id="clearcontent" href="javascript:void(0)" onclick="layer_del('您确定要取消屏蔽？', 'index.php?c=privacy&act=delall');"><i class="d"></i>清空</a></p>
				<ul class="clearfix" id="company_blench">
				<?php  $_smarty_tpl->tpl_vars['log'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['log']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['log']->key => $_smarty_tpl->tpl_vars['log']->value) {
$_smarty_tpl->tpl_vars['log']->_loop = true;
?>
				<li><a href="javascript:void(0)" class="close" onclick="layer_del('您确定要取消屏蔽？', 'index.php?c=privacy&act=del&id=<?php echo $_smarty_tpl->tpl_vars['log']->value['id'];?>
');">x</a><a href="<?php echo smarty_function_url(array('m'=>'company','c'=>'show','id'=>'`$log.p_uid`'),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['log']->value['com_name'];?>
</a></li>
				<?php } ?>
				</ul>
				<?php } else { ?>
				<a id="clearcontent" href="javascript:void(0)" onclick="layer.msg('暂无企业清空！',2,8);return false;"><i class="d"></i>清空</a>
				<?php }?>
				
			<p align="center" class="more" style="display:none"><a href="javascript:void(0)" id="showmore">展开更多</a></p>
		</div>
         <div class="diggg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
	
         <?php } else { ?>
        <div class="blacklist" id="company_no_list">当前设置下，任何企业都无法搜索到或查看您的简历</div> 
       <?php }?> 
    </div>
</div>    
</div>

<div style="padding:10px;height:230px; display:none;" id='blackdiv'>
   <div class="black_sumit_box"> <input id="name" class="black_text" type="text"placeholder="请输入要屏蔽的公司名称">
    <input type="button" value="搜索" class="black_sumit" onclick="searchcom()">
    </div>
    <div class="Blacklist_box">
        
        <form action="index.php?c=privacy&act=save" target="supportiframe" method="post" onsubmit="return ckaddblack()">
            <div class="alert-compt-list_h1">
                <label id="select" class="fltR"><input id="checkAll" type="checkbox" onclick="m_checkAll(this.form)"> 全选</label>请在下方选择您要屏蔽的公司
            </div>
            <ul></ul>
            <div class="black_submit_cont">
                <input type="submit" value="确定" class="black_submit">
            </div>
        </form>
    </div> 
</div> 
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
