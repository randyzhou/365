<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-01 02:00:56
         compiled from "D:\rcw\uploads\app\template\\resume\resume_right.htm" */ ?>
<?php /*%%SmartyHeaderCode:11563330295f9da658a09ff2-78128442%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08ff883161fba2f7adb752d480fae419d0c40d47' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\\\resume\\resume_right.htm',
      1 => 1576492523,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11563330295f9da658a09ff2-78128442',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Info' => 0,
    'usertype' => 0,
    'usermsgnum' => 0,
    'talent_pool' => 0,
    'uid' => 0,
    'username' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5f9da658a21487_94742577',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9da658a21487_94742577')) {function content_5f9da658a21487_94742577($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
?><div class="yun_resume_ylcz noprint" style="text-align: center;margin-bottom:10px;" >
	<div class="yun_resume_czewm">
	<div>微信扫一扫：分享</div>
	<img src="<?php echo smarty_function_url(array('m'=>'ajax','c'=>'pubqrcode','toc'=>'resume','toa'=>'show','toid'=>$_smarty_tpl->tpl_vars['Info']->value['id']),$_smarty_tpl);?>
" width="160" height="160">
	<div class="yun_resume_cz_tit" style="color:red;">↑微信扫上方二维码↑</br>便可将此简历分享至朋友圈</div>
	</div>
</div>
<!-- 企业查看简历 -->
<?php if ($_GET['see']!='member'&&$_GET['see']!='used'&&$_smarty_tpl->tpl_vars['usertype']->value!=1) {?>

	<div class="yun_resume_cz  noprint" id="operation_box">
		
		<?php if ($_smarty_tpl->tpl_vars['usertype']->value==2) {?> 
			<?php if ($_smarty_tpl->tpl_vars['usermsgnum']->value) {?> 
				<input class="yun_resume_cz_a" type="button" value="已邀请面试 ">
			<?php } else { ?>
				<input class="yun_resume_cz_a" onclick="sq_resume(this)" type="button" value="邀请面试 " username="<?php echo $_smarty_tpl->tpl_vars['Info']->value['name'];?>
"  uid="<?php echo $_smarty_tpl->tpl_vars['Info']->value['uid'];?>
">
			<?php }?>
		<?php }?>
		
		<div>
	
			<?php if ($_smarty_tpl->tpl_vars['talent_pool']->value) {?> 
				<input class="yun_resume_cz_bth fl" type="button" onClick="layer.msg('该简历已加入到人才库！',2,8);" value="已收藏">
			<?php } else { ?> 
				<input class="yun_resume_cz_bth fl" type="button" onClick="add_user_talent('<?php echo $_smarty_tpl->tpl_vars['Info']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['usertype']->value;?>
')" value="收藏"> 
			<?php }?>
	
			<div class="yun_resume_cz_bth_xz_box"> <?php echo $_smarty_tpl->tpl_vars['Info']->value['link_msg_right'];?>
 </div>
	
			<input class="yun_resume_cz_bth  yun_resume_cz_bth_dy fl" type="button" onClick="dayin()" value="打印 " name="button">
			
			<?php if (!$_smarty_tpl->tpl_vars['uid']->value&&!$_smarty_tpl->tpl_vars['username']->value) {?> 
				
				<?php if ($_smarty_tpl->tpl_vars['Info']->value['height_status']==2) {?> 
				
					<input class="yun_resume_cz_bth yun_resume_cz_bth_fx fr" type="button" onClick="showlogin('3');" value="分享" name="submit">
				<?php } else { ?> 
					
					<input class="yun_resume_cz_bth yun_resume_cz_bth_fx fr" type="button" onClick="showlogin('2');" value="分享" name="submit">
				<?php }?>
				
			<?php } else { ?> 
			
				<input class="yun_resume_cz_bth yun_resume_cz_bth_fx fr" type="button" onClick="recommendInterval('<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
','<?php echo smarty_function_url(array('m'=>'resume','c'=>'resumeshare','id'=>'`$Info.id`'),$_smarty_tpl);?>
');" value="分享" name="submit"> 
			<?php }?> 
			
			<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['Info']->value['id'];?>
" id="eid">
		</div>
	
	
		<form action="index.php?m=resume&c=show&a=report" method="post" id='myform' target="supportiframe" class="layui-form">
			<input type="hidden" name="r_uid" value="<?php echo $_smarty_tpl->tpl_vars['Info']->value['uid'];?>
">
			<input type="hidden" name="r_eid" value="<?php echo $_smarty_tpl->tpl_vars['Info']->value['id'];?>
">
			<input type="hidden" name="r_name" value="<?php echo $_smarty_tpl->tpl_vars['Info']->value['name'];?>
">
			
			<div class="yun_resume_ts_tit">简历投诉</div>
			
			<div class="yun_resume_cz_dt">若该简历为无效简历，您可以在此举报：</div>
			
			<div class="yun_resume_cz_dt">
				<input type="checkbox" name="reason[]" id="reason_1" lay-skin="primary" title="无人接听" value="无人接听"> 
				<input type="checkbox" name="reason[]" id="reason_2" lay-skin="primary" title="打广告" value="打广告"> 
				<input type="checkbox" name="reason[]" id="reason_3" lay-skin="primary" title="找到工作" value="找到工作"> 
				<input type="checkbox" name="reason[]" id="reason_4" lay-skin="primary" title="信息不实" value="信息不实">
				<input type="checkbox" name="reason[]" id="reason_5" lay-skin="primary" title="号码错误" value="号码错误"> 
				<input type="checkbox" name="reason[]" id="reason_6" lay-skin="primary" title="骗子" value="骗子">
			</div>
			
			<div class="yun_resume_cz_dt">
				
				<?php if (!$_smarty_tpl->tpl_vars['uid']->value&&!$_smarty_tpl->tpl_vars['username']->value) {?> 
				
					<input type="button" name="submit" value="举报" onClick="showlogin('2');" class="yun_resume_cz_jb_a">
				<?php } elseif ($_smarty_tpl->tpl_vars['usertype']->value!=2) {?> 
					
					<input class="yun_resume_cz_jb_a" onClick="layer.msg('只有企业用户才可以举报！',2,8);" type="button" name="submit" value="举报 "> 
				<?php } else { ?>
				
				 	<input type="submit" name="submit" value="举报" class="yun_resume_cz_jb_a">
				<?php }?>
			</div>
		</form>
	</div>

	<div id='for_link' class="none" style="width: 350px; text-align: center; margin: 0 auto;">
		<div class="city_1" style="padding: 20px 0; width: 100%;"></div>
		<div class="btn" style="padding-bottom: 20px; padding-top: 10px; width: auto;">
			<a href="<?php echo smarty_function_url(array('m'=>'ajax','c'=>'resume_word','id'=>$_smarty_tpl->tpl_vars['Info']->value['id']),$_smarty_tpl);?>
" class="resume_bthxz" style="display: block;">下载简历</a>
		</div>
	</div>

<?php }?>

<!-- 自己预览简历 -->
<?php if ($_GET['tplsee']!='member') {?> 
	<?php if ($_smarty_tpl->tpl_vars['uid']->value==$_smarty_tpl->tpl_vars['Info']->value['uid']&&$_smarty_tpl->tpl_vars['usertype']->value==1) {?>
		<div class="yun_resume_ylcz noprint">
			<?php if ($_smarty_tpl->tpl_vars['usertype']->value==1) {?>
				<div class="yun_resume_cz ">
					<a href="<?php echo smarty_function_url(array('m'=>'member','c'=>'expect','e'=>$_smarty_tpl->tpl_vars['Info']->value['id']),$_smarty_tpl);?>
" class="yun_resume_cz_xg">修改简历</a>
					<div class="">
						<input class="yun_resume_cz_bc yun_resume_cz_bth_xz fl " onClick="for_link('<?php echo $_smarty_tpl->tpl_vars['Info']->value['id'];?>
','<?php echo smarty_function_url(array('m'=>'ajax','c'=>'for_link'),$_smarty_tpl);?>
','<?php echo smarty_function_url(array('m'=>'ajax','c'=>'resume_word','id'=>$_smarty_tpl->tpl_vars['Info']->value['id']),$_smarty_tpl);?>
');" type="submit" name="submit" value="保存到电脑 "> 
						<input type="button" onClick="dayin()" value="打印简历" class="yun_resume_cz_bc yun_resume_cz_bth_dy fl">
						<div class="yun_resume_cz_gz">如需手机上传或修改个人形象照，请关注微信进行操作</div>
					</div>
				</div>
			<?php }?>
			 
			<div class="yun_resume_czewm">
				<div class="yun_resume_czewmpic">
					<img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wx_qcode'];?>
" width="150" height="150">
				</div>
				<div class="yun_resume_cz_tit">扫一扫手机上也可以编辑简历了</div>
			</div>
		</div>
	<?php }?> 
<?php }?>
<?php }} ?>
