<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-17 19:05:01
         compiled from "D:\rcw\uploads\app\template\member\com\addproduct.htm" */ ?>
<?php /*%%SmartyHeaderCode:3961676805fb3ae5d1f6b54-21357096%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e94cef97af881a4f8c30c7b483899aec8a36588' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\member\\com\\addproduct.htm',
      1 => 1576479786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3961676805fb3ae5d1f6b54-21357096',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'editrow' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fb3ae5d2071c4_48087745',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb3ae5d2071c4_48087745')) {function content_5fb3ae5d2071c4_48087745($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
    <div class="com_tit"><span class="com_tit_span">添加产品</span></div>
           <div class=right_box>
			<div class=admincont_box>
				<div class="job_list_tit">
					<ul class="">
						<li ><a href="index.php?c=info">基本信息</a></li>
						<li><a href="index.php?c=map">企业地图</a></li>
						<li><a href="index.php?c=news">企业新闻</a></li>
						<li><a href="index.php?c=show">企业环境</a></li>
						<li class="job_list_tit_cur"><a href="index.php?c=product">企业产品</a></li>
					</ul>
				</div>
				<div class="com_body">
					<div class="com_release_box">
						<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
						<form id="productform" name="MyForm" method="post" target="supportiframe" action="index.php?c=product&act=save" enctype="multipart/form-data">
							<ul>
								<li>
									<div class="com_release_name"><i class="ff0">*</i> 产品标题</div>
									<input type="text"  name="title" value="<?php echo $_smarty_tpl->tpl_vars['editrow']->value['title'];?>
"class="com_info_text" >
									<span id="by_name"  class="errordisplay">不能为空</span>
								</li>

								<li>
									<div class="com_release_name"><i class="ff0">*</i> 产品图片</div>
									<div class="add_product_text">
										<button type="button" class="yun_bth_pic noupload" lay-data="{imgid: 'imgicon',parentid: 'imgparent'}">上传图片</button>最佳尺寸：宽/高=270像素/180像素<span id="by_name" class="errordisplay">不能为空</span>
										<input type="hidden" id="laynoupload" value="1"/>
									</div>
								</li>
								<li id="imgparent" <?php if (!$_smarty_tpl->tpl_vars['editrow']->value['pic']) {?>class="none"<?php }?>>
									<div class="com_release_name"><i class="ff0">*</i> 图片展示</div>
									<img id="imgicon" src="<?php echo $_smarty_tpl->tpl_vars['editrow']->value['pic'];?>
" width="100" height="60"/>
								</li>
								<li>
									<div class="com_release_name"><i class="ff0">*</i> 产品描述</div>
 									<?php echo '<script'; ?>
 id="description" name="body" type="text/plain" style="width:560px; height:200px;"> <?php echo $_smarty_tpl->tpl_vars['editrow']->value['body'];?>
 <?php echo '</script'; ?>
>
									<span id="by_description" class="errordisplay">不能为空</span>
								</li>   
								<li>
									<input name="id" value="<?php echo $_GET['id'];?>
" type="hidden"/>
									<input class="btn_01" type="button" onclick="CheckPost()" value="提交操作">  
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
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui.upload.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type='text/javascript'><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 language="javascript">
function CheckPost(){ 
	var title=$.trim($("input[name='title']").val());
	if(title==''){
		layer.msg('产品标题不能为空！', 2, 8);return false;
	}
	if(title.lentgh>30){
		layer.msg('请将标题控制在30字以内！', 2, 8);return false;
	}
	// if($.trim($("input[name='pic']").val())=='' && $.trim($("input[name='id']").val())==''){
	// 	layer.msg('产品图片不能为空！', 2, 8);return false;
	// }
	if(UE.getEditor('description').getContent()==''){
		layer.msg('产品描述不能为空！', 2, 8);return false;
	}  
	$("#productform").submit();
	layer.load('执行中，请稍候...',0);
}
<?php echo '</script'; ?>
> 
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
