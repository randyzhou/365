<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-06 19:38:06
         compiled from "D:\rcw\uploads\app\template\admin\admin_company_member_log.htm" */ ?>
<?php /*%%SmartyHeaderCode:12128552145fa5359eb98204-12263745%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ac57037757b771ccf69725000d845ac5cbb3b6b' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\admin\\admin_company_member_log.htm',
      1 => 1576479798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12128552145fa5359eb98204-12263745',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'uinfo' => 0,
    'rows' => 0,
    'v' => 0,
    'total' => 0,
    'pagenum' => 0,
    'pages' => 0,
    'pagenav' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fa5359ebcc014_27379187',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fa5359ebcc014_27379187')) {function content_5fa5359ebcc014_27379187($_smarty_tpl) {?><?php if (!is_callable('smarty_function_searchurl')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.searchurl.php';
if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
		<?php echo '<script'; ?>
 src="js/admin_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
		
		<?php echo '<script'; ?>
 type="text/javascript">
			function cktimesave(){
				var stime=$("#stime").val();
				var etime=$("#etime").val();
				if(stime&&etime&&toDate(stime)>toDate(etime)){
					layer.msg("结束时间必须大于开始时间！",2,8);return false;
				}
			}
		<?php echo '</script'; ?>
>
		
		<title>后台管理</title>
	</head>

	<body class="body_ifm">
	
		<div class="infoboxp">
		<div class="tabs_info">
				<ul>
                   	<li>
						<a href="index.php?m=admin_company">全部会员</a>
					</li>
					<li>
						<a href="index.php?m=admin_company&time=5">过期会员</a>
					</li>
					<li>
                        <a href="index.php?m=user_member&c=writtenOffLog&utype=2">解绑记录</a>
                    </li>
					<li class="curr">
						<a href="index.php?m=admin_company&c=member_log&uid=<?php echo $_GET['uid'];?>
">会员日志</a>
					</li>
                </ul>
			<!-- <ul>
				<li>
					<a href="index.php?m=admin_company">全部会员</a>
				</li>
			
				<li class="curr">
					<a href="index.php?m=admin_company&c=member_log&uid=<?php echo $_GET['uid'];?>
">会员日志</a>
				</li>
				
			</ul> -->
		</div>
			<div class="admin_new_tip">
				<a href="javascript:;" class="admin_new_tip_close"></a>
				<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
				<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
				<div class="admin_new_tip_list_cont">
					<div class="admin_new_tip_list">该页面展示了企业用户会员<?php if ($_GET['uid']) {?>：【<?php echo $_smarty_tpl->tpl_vars['uinfo']->value['username'];?>
】<?php }?>的所有日志信息。</div>
					<div class="admin_new_tip_list">可输入内容关键字进行搜索，也可进行详细的高级搜索。</div>
				</div>
			</div>

			<div class="admin_new_search_box">
				<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>	
				<form action="index.php" name="myform" method="get" onSubmit="return cktimesave()">
					<input name="m" value="admin_company" type="hidden"/>
					<input name="c" value="member_log" type="hidden"/>
					<input name="uid" value="<?php echo $_GET['uid'];?>
" type="hidden"/>
					<input name="operas" value="<?php echo $_GET['operas'];?>
" type="hidden"/>
					<input name="parr" value="<?php echo $_GET['parr'];?>
" type="hidden"/>
					<input name="end" value="<?php echo $_GET['end'];?>
" type="hidden"/>
					<div class="admin_new_search_name">搜索类型：</div>

					<div class="admin_Filter_text formselect" did="dtype">
					
						<input type="button" <?php if ($_GET['type']=='1'||$_GET['type']=='') {?> value="UID" <?php } elseif ($_GET['type']=='2') {?> value="企业名称" <?php } elseif ($_GET['type']=='3') {?> value="内容" <?php }?> class="admin_Filter_but" id="btype">
						
						<input type="hidden" name="type" id="type" value="<?php if ($_GET['type']) {
echo $_GET['type'];
} else { ?>1<?php }?>"/>
						
						<div class="admin_Filter_text_box" style="display:none" id="dtype">
							<ul>
 								<li><a href="javascript:void(0)" onClick="formselect('1','type','UID')">UID</a></li>
 								<li><a href="javascript:void(0)" onClick="formselect('2','type','企业名称')">企业名称</a></li>
 								<li><a href="javascript:void(0)" onClick="formselect('3','type','内容')">内容</a></li>
							</ul>  
						</div>

					</div>

					<input class="admin_Filter_search" type="text" name="keyword"  value="<?php echo $_GET['keyword'];?>
" size="25" style="float:left">
					<span class="admin_new_search_name">时间段：</span>		
 					<input class="admin_Filter_search" type="text" id="time" name="time" value="<?php echo $_GET['time'];?>
"/>
					<?php echo '<script'; ?>
 type="text/javascript">
						layui.use(['laydate'], function(){var laydate = layui.laydate,$ = layui.$;laydate.render({elem: '#time',range:'~'});});
					<?php echo '</script'; ?>
>
					<input  class="admin_Filter_bth"  type="submit" value="检索"/>
					
					<a href="javascript:void(0)" onclick="$('.admin_screenlist_box').toggle();" class="admin_new_search_gj">高级搜索</a>
					<?php echo $_smarty_tpl->getSubTemplate ("admin/admin_search.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				</form>
			</div>

				<div class="clear"></div>

			<div class="table-list">
				<div class="admin_table_border">
					<form action="index.php" name="myform" method="get" target="supportiframe" id='myform'>
						<input name="m" value="admin_company" type="hidden"/>
						<input name="c" value="memberlogdel" type="hidden"/>
						<table width="100%">
							<thead>
								<tr class="admin_table_top">
									<th style="width:20px;">
										<label for="chkall"><input type="checkbox" id='chkAll' onclick='CheckAll(this.form)'/></label>
									</th>
									<?php if ($_GET['t']=="id"&&$_GET['order']=="asc") {?>
										<th><a href="<?php echo smarty_function_searchurl(array('m'=>'admin_company','c'=>'member_log','order'=>'desc','t'=>'id','untype'=>'order,t'),$_smarty_tpl);?>
">编号<img src="images/sanj.jpg"/></a></th>
									<?php } else { ?>
										<th><a href="<?php echo smarty_function_searchurl(array('m'=>'admin_company','c'=>'member_log','order'=>'asc','t'=>'id','untype'=>'order,t'),$_smarty_tpl);?>
">编号<img src="images/sanj2.jpg"/></a></th>
									<?php }?>
									<th align="left">UID</th>
									<th align="left">用户</th>
									<th align="left">内容</th>
									<th>IP</th>
									<?php if ($_GET['t']=="ctime"&&$_GET['order']=="asc") {?>
										<th><a href="<?php echo smarty_function_searchurl(array('m'=>'admin_company','c'=>'member_log','order'=>'desc','t'=>'ctime','untype'=>'order,t'),$_smarty_tpl);?>
">时间<img src="images/sanj.jpg"/></a></th>
									<?php } else { ?>
										<th><a href="<?php echo smarty_function_searchurl(array('m'=>'admin_company','c'=>'member_log','order'=>'asc','t'=>'ctime','untype'=>'order,t'),$_smarty_tpl);?>
">时间<img src="images/sanj2.jpg"/></a></th>
									<?php }?>
									<th class="admin_table_th_bg">操作</th>
								</tr>
							</thead>
							<tbody>
								<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
									<tr align="center" id="list<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
										<td><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
										<td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
										<td align="left"><?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
</td>
										<td align="left">
											<div><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</div>
											<div><a href="<?php echo smarty_function_url(array('m'=>'company','c'=>'show','id'=>$_smarty_tpl->tpl_vars['v']->value['uid']),$_smarty_tpl);?>
" target="_blank" class="admin_com_name"><?php echo $_smarty_tpl->tpl_vars['v']->value['comname'];?>
</a></div>
										</td>
										<td align="left"><?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['v']->value['ip'];?>
</td>
										<td class="td"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['ctime'],"%Y-%m-%d %H:%M");?>
</td>
										<td><a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=admin_company&c=memberlogdel&del=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');"class="admin_new_c_bth admin_new_c_bth_sc">删除</a></td>
									</tr>
								<?php } ?>
								<tr>
									<td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
									<td colspan="8">
										<label for="chkAll2">全选</label>&nbsp;
										<input class="admin_button" type="button" name="delsub" value="删除所选"  onclick="return really('del[]')"/>
									</td>
 								</tr>
								<?php if ($_smarty_tpl->tpl_vars['total']->value>$_smarty_tpl->tpl_vars['config']->value['sy_listnum']) {?>
									<tr>
										<?php if ($_smarty_tpl->tpl_vars['pagenum']->value==1) {?>
											<td colspan="3"> 从 1 到 <?php echo $_smarty_tpl->tpl_vars['config']->value['sy_listnum'];?>
 ，总共 <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 条</td>
										<?php } elseif ($_smarty_tpl->tpl_vars['pagenum']->value>1&&$_smarty_tpl->tpl_vars['pagenum']->value<$_smarty_tpl->tpl_vars['pages']->value) {?>
											<td colspan="3"> 从 <?php echo ($_smarty_tpl->tpl_vars['pagenum']->value-1)*$_smarty_tpl->tpl_vars['config']->value['sy_listnum']+1;?>
 到 <?php echo $_smarty_tpl->tpl_vars['pagenum']->value*$_smarty_tpl->tpl_vars['config']->value['sy_listnum'];?>
 ，总共 <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 条</td>
										<?php } elseif ($_smarty_tpl->tpl_vars['pagenum']->value==$_smarty_tpl->tpl_vars['pages']->value) {?>
											<td colspan="3"> 从 <?php echo ($_smarty_tpl->tpl_vars['pagenum']->value-1)*$_smarty_tpl->tpl_vars['config']->value['sy_listnum']+1;?>
 到 <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 ，总共 <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 条</td>
										<?php }?>
										<td colspan="6" class="digg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</td>
									</tr>
								<?php }?>
							</tbody>
						</table>
						<input type="hidden" name="pytoken"  id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
					</form>
				</div>
			</div>
		</div>
	</body>
</html><?php }} ?>
