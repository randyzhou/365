<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-17 19:10:39
         compiled from "D:\rcw\uploads\app\template\member\com\addnews.htm" */ ?>
<?php /*%%SmartyHeaderCode:12649296055fb3afaf29c047-47167656%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a9e19505234dc75bc1b0425556155c522b77cb1' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\member\\com\\addnews.htm',
      1 => 1576479785,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12649296055fb3afaf29c047-47167656',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'now_url' => 0,
    'editrow' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fb3afaf2a9ef5_44619684',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb3afaf2a9ef5_44619684')) {function content_5fb3afaf2a9ef5_44619684($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="w1000">
	<div class="admin_mainbody"> 
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/ueditor/ueditor.config.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/ueditor/ueditor.all.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
> 

 		<?php echo '<script'; ?>
 language="javascript">
		UE.getEditor('description',{
			toolbars:[[ 'Source','|', 'Undo', 'Redo','Bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'fontfamily', 'fontsize',  'forecolor', 'backcolor', 'removeformat', 'autotypeset', 'pasteplain', '|','insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc', '|','simpleupload', '|', 'indent', '|','justifyleft', 'justifycenter', 'justifyright', 'justifyjustify']],
			wordCount:false,
			elementPathEnabled:false,
			initialFrameHeight:300
		});
		<?php echo '</script'; ?>
>
        <div class="com_tit"><span class="com_tit_span">添加新闻</span></div>
		<div class=right_box>
			<div class=admincont_box>         
			 <div class="job_list_tit">
                 <ul class="">
                 <li ><a href="index.php?c=info">基本信息</a></li>
                 <li><a href="index.php?c=map">企业地图</a></li>
                 <li class="job_list_tit_cur"><a href="index.php?c=news">企业新闻</a></li>
                 <li><a href="index.php?c=show">企业环境</a></li>
                 <li><a href="index.php?c=product">企业产品</a></li>
                 </ul>
                 </div>   
				<div class="com_body">    
					<div class="com_release_box">
						<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
						<form name="MyForm" target="supportiframe" method="post" action="<?php echo $_smarty_tpl->tpl_vars['now_url']->value;?>
&act=save" onsubmit="return CheckPost();">
							<input name="action" type="hidden" value="save">
							<ul>
								<li>
									<div class="com_release_name"><i class="ff0">*</i> 新闻标题 </div>
									<input type="text" size="45" name="title" value="<?php echo $_smarty_tpl->tpl_vars['editrow']->value['title'];?>
"class="com_info_text" style="width:400px;">
								</li>
								<li>
									<div class="com_release_name"><i class="ff0">*</i> 新闻描述 </div>
 									<?php echo '<script'; ?>
 id="description" name="body" type="text/plain" style="width:560px; height:200px;"> <?php echo $_smarty_tpl->tpl_vars['editrow']->value['body'];?>
 <?php echo '</script'; ?>
>
								</li>  
								<li>
									<input name="id" value="<?php echo $_GET['id'];?>
" type="hidden"/>
									<input class="btn_01" type="submit" name="submitBtn" value=" 提 交 操 作 "> 
								</li>  
							</ul>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php echo '<script'; ?>
 language=javascript>
function CheckPost(){
	var title=$.trim($("input[name='title']").val());
	if(title==''){
		layer.msg('标题不能为空！', 2, 8);return false;
	}
	if(title.length>30){
		layer.msg('请将标题控制在30字以内！', 2, 8);return false;
	}

	var html = UE.getEditor('description').getContent();
	if(html==''){
		layer.msg('内容不能为空！', 2, 8);return false;
	}
}
<?php echo '</script'; ?>
> 
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
