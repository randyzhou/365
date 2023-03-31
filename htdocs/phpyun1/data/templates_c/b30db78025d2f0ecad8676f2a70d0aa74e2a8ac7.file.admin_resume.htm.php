<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-07 02:25:03
         compiled from "D:\rcw\uploads\app\template\admin\admin_resume.htm" */ ?>
<?php /*%%SmartyHeaderCode:20405277385fa594ff398922-86232020%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b30db78025d2f0ecad8676f2a70d0aa74e2a8ac7' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\admin\\admin_resume.htm',
      1 => 1588153533,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20405277385fa594ff398922-86232020',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'pytoken' => 0,
    'userdata' => 0,
    'v' => 0,
    'resume' => 0,
    'userclass_name' => 0,
    'total' => 0,
    'rows' => 0,
    'key' => 0,
    'source' => 0,
    'pagenum' => 0,
    'pages' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fa594ff3f79c0_20265913',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fa594ff3f79c0_20265913')) {function content_5fa594ff3f79c0_20265913($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
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
        <?php echo '<script'; ?>
 src="js/admin_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
        <link href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/css/layui.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet">
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/layui.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/phpyun_layer.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
        <title>后台管理</title>
    </head>

	<body class="body_ifm">
    	<div id="preview" style="display:none;width:450px ">
        	<div style="height:380px; overflow:auto;width:450px;">
 				<form class="layui-form" name="formstatus" action="index.php?m=admin_resume&c=resumestatus" target="supportiframe" method="post" onsubmit="return tcdiv();">
               		
               		<input type="hidden" name="pytoken" id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
                   	
                   	<table cellspacing='1' cellpadding='1' class="admin_examine_table">
                       	<tr>
                           <th>姓名：</th>
                           <td align="left"><span id="username"></span></td>
                       	</tr>
                  		<tr>
                    		<th width="85">简历审核：</th>
                       		<td align="left">
                          		<div class="layui-form-item">
                             		<div class="layui-input-block">
                                 		<input name="r_status" id="userstatus1"  value="1" title="正常" type="radio" lay-filter="userstatus" />
                                        <input name="r_status" id="userstatus3"  value="3" title="未通过" type="radio" lay-filter="userstatus" />
                                    </div>
                           		</div>
                        	</td>
                      	</tr> 
                    	<tr class="tbcss">
                        	<th width="85">个人审核：</th>
                        	<td align="left">
	                       		<div class="layui-form-item">
	                            	<div class="layui-input-block">
	                              		<input name="istb" id="istb" title="同步" type="checkbox" value="1"  lay-skin="primary" checked="checked"  />
	                               	</div>
	                         	</div>
	                      	</td>
                    	</tr>
                    	<tr class="tbcss">
                       		<th>同步说明：</th>  
                       		<td align="left"><div class="sh_sm">个人身份状态根据简历状态同步审核</div></td>
                   		</tr>
                     	<tr>
                         	<th>审核说明：</th>
                        	<td align="left"> <textarea id="statusbody" name="statusbody" class="shsm_textarea"></textarea></td>
                    	</tr>
                     	<tr>
                        	<td colspan='2' align="center">
                          		<div class="admin_Operating_sub"> <input type="submit" value='确认' class="admin_examine_bth"> <input type="button" onClick="layer.closeAll();" class="admin_examine_bth_qx" value='取消'></div>
                        	</td>
                    	</tr>
                   	</table>
               		<input name="cid" value="0" type="hidden">
                   	<input name="cuid" value="0" type="hidden">
           		</form>
           </div>
       </div>
       <div id="export" style="display:none;">
           <div style=" margin-top:10px;">
               <div>
                   <form action="index.php?m=admin_resume&c=xls" target="supportiframe" method="post" class="myform">
                       <input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
                       <input type="hidden" name="ids">
                       <div class="admin_resume_dc">
                           <label><span class="admin_resume_dc_s"><input type="checkbox" class="type" name="rtype[]" value="id"> 简历ID</span></label>
                           <label><span class="admin_resume_dc_s"><input type="checkbox" class="type" name="rtype[]" value="name"> 简历名称</span></label>
                           <label><span class="admin_resume_dc_s"><input type="checkbox" class="type" name="rtype[]" value="uid"> 用户UID</span></label>
                           <label><span class="admin_resume_dc_s"><input type="checkbox" class="type" name="rtype[]" value="uname"> 姓名</span></label>
                           <label><span class="admin_resume_dc_s"><input type="checkbox" class="type" name="rtype[]" value="sex"> 性别</span></label>
                           <label><span class="admin_resume_dc_s"><input type="checkbox" class="type" name="rtype[]" value="birthday"> 生日</span></label>
                           <label><span class="admin_resume_dc_s"><input type="checkbox" class="type" name="type[]" value="marriage"> 婚姻</span></label>
                           <label><span class="admin_resume_dc_s"><input type="checkbox" class="type" name="type[]" value="height"> 身高</span></label>
                           <label><span class="admin_resume_dc_s"><input type="checkbox" class="type" name="type[]" value="nationality"> 民族</span></label>
                           <label><span class="admin_resume_dc_s"><input type="checkbox" class="type" name="type[]" value="weight"> 体重</span></label>
                           <label><span class="admin_resume_dc_s"><input type="checkbox" class="type" name="type[]" value="idcard"> 身份证</span></label>
                           <label><span class="admin_resume_dc_s"><input type="checkbox" class="type" name="type[]" value="telphone"> 手机</span></label>
                           <label><span class="admin_resume_dc_s"><input type="checkbox" class="type" name="type[]" value="telhome"> 座机</span></label>
                           <label><span class="admin_resume_dc_s"><input type="checkbox" class="type" name="type[]" value="email"> 邮件</span></label>
                           <label><span class="admin_resume_dc_s"><input type="checkbox" class="type" name="rtype[]" value="edu"> 教育程度</span></label>
                           <label><span class="admin_resume_dc_s"><input type="checkbox" class="type" name="type[]" value="homepage"> 个人主页</span></label>
                           <label><span class="admin_resume_dc_s"><input type="checkbox" class="type" name="type[]" value="address"> 详细地址</span></label>
                           <label><span class="admin_resume_dc_s"><input type="checkbox" class="type" name="rtype[]" value="exp"> 工作经验</span></label>
                           <label><span class="admin_resume_dc_s"><input type="checkbox" class="type" name="type[]" value="domicile"> 户籍</span></label>
                           <label><span class="admin_resume_dc_s"><input type="checkbox" class="type" name="type[]" value="living"> 现居住地</span></label>
                           <label><span class="admin_resume_dc_s"><input type="checkbox" class="type" name="type[]" value="description"> 个人说明</span></label>
                           <label><span class="admin_resume_dc_s"><input type="checkbox" class="type" name="rtype[]" value="hy"> 意向行业</span></label>
                           <label><span class="admin_resume_dc_s"><input type="checkbox" class="type" name="rtype[]" value="job_classid"> 意向职位</span></label>
                           <label><span class="admin_resume_dc_s"><input type="checkbox" class="type" name="rtype[]" value="city_classid"> 城市</span></label>
                           <label><span class="admin_resume_dc_s"><input type="checkbox" class="type" name="rtype[]" value="minsalary,maxsalary"> 薪水</span></label>
                           <label><span class="admin_resume_dc_s"><input type="checkbox" class="type" name="rtype[]" value="type"> 工作性质</span></label>
                           <label><span class="admin_resume_dc_s"><input type="checkbox" class="type" name="rtype[]" value="report"> 到岗时间</span></label>
                           <label><span class="admin_resume_dc_s"><input type="checkbox" class="type" name="rtype[]" value="lastdate"> 更新时间</span></label>
						<label><span class="admin_resume_dc_s"><input type="checkbox" class="type" id="xlsAllCheck" onclick="xlsAll(this.form)"> 全选</span></label>
                       </div>

                       <div class="admin_resume_dc_p" style=" padding:10px 0;">
                       	<span class="admin_resume_dc_n">导出数量：</span>
                       	<input name='limit' type='text' class="admin_resume_dc_ntext">
                       	<span class="admin_web_tip admin_resume_dc_tip">数字太大会导致运行缓慢，请慎重填写</span>
                       </div>
                        <div class="admin_resume_dc_p" style=" padding:10px 0;">
                       	<span class="admin_resume_dc_n">导出区段：</span>
                       	<input name='section' type='text' class="admin_resume_dc_ntext">
                       	<span class="admin_web_tip admin_resume_dc_tip">例如101,100  从101条开始导出100条</span>
                       </div>
                       <div class="admin_resume_dc_sub" style=" padding-top:10px;">
                           <input type="button" onClick="check_xls();" value='确认' class="admin_resume_dc_bth1"> &nbsp;&nbsp;
                           <input type="button" onClick="layer.closeAll();" class="admin_resume_dc_bth2" value='取消'>
                       </div>
                   </form>
               </div>
           </div>
       </div>
       <div id="resumttop" style="display:none; ">
           <div class="admin_com_t_box">
               <form action="index.php?m=admin_resume&c=top" target="supportiframe" method="post">
                   <input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">

                   <div class=" admin_com_smbox_list_pd">
                       <span class="admin_com_smbox_span">置顶天数：</span>
                       <input class="admin_com_smbox_text" value="" name="addday" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')"><span class="admin_com_smbox_list_s">天</span> </div>
                   <div class="topdiv" style="display:none">
                       <span class="admin_com_smbox_span">当前结束日期：</span>
                       <span class="admin_com_smbox_list_s top" style="color:#f60"></span>
                   </div>
                   <div class="admin_com_smbox_qx_box"> 如需取消置顶简历请单击 <input type="checkbox" name="s" value="1"> 点击确认即可</div>

                   <div class="admin_com_smbox_opt admin_com_smbox_opt_mt"><input type="submit" onclick="loadlayer();" value='确认' id='topsubmit' class="admin_examine_bth"><input type="button" onClick="layer.closeAll();" class="admin_examine_bth_qx" value='取消'></div>

                   <input name="eid" type="hidden" value="" />
               </form>
           </div>
       </div>
       
       <div id="info_div" style="display:none; width: 390px; ">
           <div class="" style=" margin-top:10px; ">
               <form class="layui-form" action="index.php?m=admin_resume&c=status" target="supportiframe" method="post" onsubmit="return htStatus()">
                   <table cellspacing='1' cellpadding='1' class="admin_examine_table">
                       <tr>
                           <th width="80">审核操作：</th>
                           <td align="left">
                               <div class="layui-form-item">
                                   <div class="layui-input-block">
                                       <input name="status" id="status1" value="1" title="正常" type="radio" />
                                       <input name="status" id="status3" value="3" title="未通过" type="radio" />
                                   </div>
                               </div>
                           </td>
                       </tr>
                       <tr>
                           <th>审核说明：</th>
                           <td align="left"> <textarea id="alertcontent" name="statusbody" class="admin_explain_textarea"></textarea> </td>
                       </tr>
                       <tr>
                           <td colspan='2' align="center"><input type="submit" value='确认' class="admin_examine_bth">
                               <input type="button" id="zxxCancelBtn" onClick="layer.closeAll();" class="admin_examine_bth_qx" value='取消'>
						</td>
                       </tr>
                   </table>
				<input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
				<input name="id" value="0" type="hidden">
               </form>
           </div>
       	</div>

		<div id="label_div" style="display:none; width: 520px; ">
        	<div class="" style=" margin-top:10px; ">
               <form class="layui-form" action="index.php?m=admin_resume&c=label" target="supportiframe" method="post" id="formlabel">
                   <table cellspacing='1' cellpadding='1' class="admin_examine_table" align="center">
                       <tr>
                           <th>姓名：</th>
                           <td align="left">
                               <div id="labelname" style="font-weight:bold;"></div>
                           </td>
                       </tr>
                       <tr>
                           <th>简历标签：</th>
                           <td align="left">
                               <select name="label" lay-filter="" id="labels">
                                   <option value="">请选择标签</option>
                                   <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_label']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                   <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['resume']->value['report']==$_smarty_tpl->tpl_vars['v']->value) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
                                   <?php } ?>
                               </select>
                           </td>
                       </tr>
					<tr>
                           <th>客服评价：</th>
                           <td align="left">
                               <textarea id="content" name="content" class="admin_explain_textarea" style="width:390px;height:240px;"></textarea> 
                           </td>
                       </tr>
                       <tr height="50px">
                           <td colspan='2' align="center"><input type="submit" onclick="loadlayer();" value='确认' class="admin_examine_bth">
                               <input type="button" onClick="layer.closeAll();" class="admin_examine_bth_qx" value='取消'></td>
                       </tr>
                   </table>
				<input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
				<input name="id" id="labelid" value="0" type="hidden">
               </form>
           </div>
       </div>

       <div class="infoboxp">
           <div class="admin_new_tip">
               <a href="javascript:;" class="admin_new_tip_close"></a>
               <a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
               <div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
               <div class="admin_new_tip_list_cont">
                   <div class="admin_new_tip_list">该页面展示了网站所有的个人简历管理信息，可对个人简历进行审核，修改，刷新，预览，删除操作。</div>
                   <div class="admin_new_tip_list">未审核个人名称后有信息标识，对简历进行审核等操作时请注意。</div>
                   <div class="admin_new_tip_list">可输入名称关键字进行搜索，也可进行详细的高级搜索。</div>
                   <div class="admin_new_tip_list">当前用户除了已锁定状态，可以正常审核。</div>
                  <div class="admin_new_tip_list">当前除了已审核状态显示已锁定，显示其他状态（未审核，未通过）。</div>
               </div>	
           </div>

           <div class="clear"></div>

           <div class="admin_new_search_box">
               <form action="index.php" name="myform" method="get">
                   <input name="m" value="admin_resume" type="hidden" />
                   <input type="hidden" name="salary" value="<?php echo $_GET['salary'];?>
" />
                   <input type="hidden" name="type" value="<?php echo $_GET['type'];?>
" />
                   <input type="hidden" name="report" value="<?php echo $_GET['report'];?>
" />
                   <div class="admin_new_search_name">搜索类型：</div>
                   <div class="admin_Filter_text formselect" did='dkeytype'>
                       <input type="button" <?php if ($_GET['keytype']==''||$_GET['keytype']=='1') {?> value="简历名称" <?php } elseif ($_GET['keytype']=='2') {?> value="用户姓名" <?php } elseif ($_GET['keytype']=='3') {?> value="简历ID" <?php } elseif ($_GET['keytype']=='4') {?> value="毕业院校" <?php } elseif ($_GET['keytype']=='5') {?> value="工作经历" <?php }?> class="admin_Filter_but" id="bkeytype">
                       <input type="hidden" name="keytype" id="keytype" <?php if ($_GET['keytype']==''||$_GET['keytype']=='1') {?> value="1" <?php } elseif ($_GET['keytype']=='2') {?> value="2" <?php } elseif ($_GET['keytype']=='3') {?> value="3" <?php } elseif ($_GET['keytype']=='4') {?> value="4" <?php } elseif ($_GET['keytype']=='5') {?> value="5" <?php }?>/>
                       <div class="admin_Filter_text_box" style="display:none" id="dkeytype">
                           <ul>
                               <li>
                                   <a href="javascript:void(0)" onClick="formselect('1','keytype','简历名称')">简历名称</a>
                               </li>
                               <li>
                                   <a href="javascript:void(0)" onClick="formselect('2','keytype','用户姓名')">用户姓名</a>
                               </li>
                               <li>
                                   <a href="javascript:void(0)" onClick="formselect('3','keytype','简历ID')">简历ID</a>
                               </li>
                               <li>
                                   <a href="javascript:void(0)" onClick="formselect('4','keytype','毕业院校')">毕业院校</a>
                               </li>
                               <li>
                                   <a href="javascript:void(0)" onClick="formselect('5','keytype','工作经历')">工作经历</a>
                               </li>
                           </ul>
                       </div>
                   </div>
                   <input type="text" value="" placeholder="请输入你要搜索的关键字" name='keyword' class="admin_new_text">
                   <input type="submit" value="搜索" name='search' class="admin_new_bth">
                   <a href="javascript:void(0)" onclick="$('.admin_screenlist_box').toggle();" class="admin_new_search_gj">高级搜索</a>
                   <a href="index.php?m=admin_resume&c=addResume" class="admin_new_cz_tj"> + 添加简历</a>
               </form>
               <?php echo $_smarty_tpl->getSubTemplate ("admin/admin_search.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

           </div>
           <div class="clear"></div>
		
		<div class="admin_statistics">
			数据统计：
			<em class="admin_statistics_s">总数：<span class="ajaxresumeall">0</span></em>
			<em class="admin_statistics_s">未审核：<span class="ajaxresumestatus1">0</span></em>
			<em class="admin_statistics_s">未通过：<span class="ajaxresumestatus2">0</span></em>
			<em class="admin_statistics_s">已锁定：<span class="ajaxresumestatus3">0</span></em>
			搜索结果：<span><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</span>；
		</div>

		<div class="table-list">
     		<div class="admin_table_border">
 				<iframe id="supportiframe" name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
         		<form action="index.php?m=admin_resume&c=delResume" target="supportiframe" name="myform" method="post" id='myform'>
               	<table width="100%">
                 	<thead>
                  		<tr class="admin_table_top">
                       		<th style="width:20px;">
                           		<label for="chkall"><input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/></label>
                        	</th>
                       		<th width="60"> 
                       			<?php if ($_GET['t']=="id"&&$_GET['order']=="asc") {?>
                                  	<a href="index.php?m=admin_resume&order=desc&t=id">简历ID<img src="images/sanj.jpg" /></a> 
                               	<?php } else { ?>
                                  	<a href="index.php?m=admin_resume&order=asc&t=id">简历ID<img src="images/sanj2.jpg" /></a> 
                               	<?php }?> 
                           	</th>
                            <th width="100" align="left">姓名/用户名</th>
                      		<th align="left">期望岗位</th>
                        	<th align="left">期望城市</th>
                         	<th align="left" width="90">完整度</th>
                        	<th> 
								<?php if ($_GET['t']=="time"&&$_GET['order']=="asc") {?>
									<a href="index.php?m=admin_resume&order=desc&t=time">更新时间 <img src="images/sanj.jpg" /></a>
								<?php } else { ?>
									<a href="index.php?m=admin_resume&order=asc&t=time">更新时间 <img src="images/sanj2.jpg" /></a> 
								<?php }?> 
							</th>
							<th> 
								<?php if ($_GET['t']=="ctime"&&$_GET['order']=="asc") {?>
									<a href="index.php?m=admin_resume&order=desc&t=ctime">发布时间 <img src="images/sanj.jpg" /></a>
								<?php } else { ?>
									<a href="index.php?m=admin_resume&order=asc&t=ctime">发布时间 <img src="images/sanj2.jpg" /></a> 
								<?php }?> 
							</th>
 							<th>来源</th>
                         	<th>审核状态</th>
                         	<th>推广</th>
							<th>备注</th>
							<th class="admin_table_th_bg">操作</th>
                        </tr>
                 	</thead>
               		
               		<tbody>
                   		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                  		<tr align="center" <?php if (($_smarty_tpl->tpl_vars['key']->value+1)%2=='0') {?>class="admin_com_td_bg" <?php }?> id="list<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
                      		<td><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="check_all" name='del[]' onclick='unselectall()' rel="del_chk" /></td>
                          	<td align="left" class="td1" style="text-align:center;"><span><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</span></td>
                           	<td class="gd" align="left">
                            	<div class="">
									<?php echo $_smarty_tpl->tpl_vars['v']->value['uname'];?>

									<?php if ($_smarty_tpl->tpl_vars['v']->value['r_status']!=1) {?>
										<a href="javascript:void(0)" class="job_name_all"  v="<?php if ($_smarty_tpl->tpl_vars['v']->value['r_status']==0) {?>个人身份未审核<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['r_status']==3) {?>个人身份审核未通过<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['r_status']==2) {?>用户已锁定<?php }?>">
											<img src="images/bg_wechat_help.png">
										</a>
									<?php }?>
								</div>
                                    
								<div class="mt8">
                                	<a href="index.php?m=user_member&c=Imitate&uid=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" target="_blank" class="admin_com_name"><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</a>
                           		</div>
                         	</td>
					
							<td class="od" align="left">
                           		<div class="">
                               		<span class="admin_resume_yx"><?php echo mb_substr($_smarty_tpl->tpl_vars['v']->value['name'],0,12);?>
</span>
                             	</div>
                               	<div class="mt5">
                               		<span><?php if ($_smarty_tpl->tpl_vars['v']->value['sex_n']) {
echo $_smarty_tpl->tpl_vars['v']->value['sex_n'];
}
if ($_smarty_tpl->tpl_vars['v']->value['edu_n']) {?> <?php echo $_smarty_tpl->tpl_vars['v']->value['edu_n'];
}
if ($_smarty_tpl->tpl_vars['v']->value['exp_n']) {?> <?php echo $_smarty_tpl->tpl_vars['v']->value['exp_n'];
}?></span>
                               	</div>
                        	</td>
							<td class="od" align="left">
                           		<div class="">
									<?php if ($_smarty_tpl->tpl_vars['v']->value['city_n']) {?>
                                		<span class="admin_resume_yx"><?php echo $_smarty_tpl->tpl_vars['v']->value['city_n'];?>
</span> 
										<?php if ($_smarty_tpl->tpl_vars['v']->value['citynum']>1) {?>
                                        	<a href="javascript:void(0)" class="city_name_all" v="<?php echo $_smarty_tpl->tpl_vars['v']->value['cityall'];?>
"><img src="images/bg_wechat_help.png"></a>
                                        <?php }?> 
									<?php }?>
                           		</div>
                         		<div class="mt5">
                                  	<span><?php echo $_smarty_tpl->tpl_vars['v']->value['salary'];?>
</span>,<?php echo $_smarty_tpl->tpl_vars['v']->value['report_n'];?>
,<?php echo $_smarty_tpl->tpl_vars['v']->value['type_n'];?>

                              	</div>
                          	</td>
 							<td class="ud" align="left">
                               	<div class="layui-progress layui-progress-big" lay-showpercent="true">
                               		<div class="layui-progress-bar" lay-percent="<?php echo $_smarty_tpl->tpl_vars['v']->value['integrity'];?>
%"></div>
                               	</div>
                           	</td>
								<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['lastupdate'],"%Y-%m-%d");?>

                                	<a href="javascript:void(0)" onClick="layer_del('确认刷新？', 'index.php?m=admin_resume&c=refresh&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');" title="刷新"><img src="images/newsx.png"></a>
                                </td>
							<td>
								<?php if ($_smarty_tpl->tpl_vars['v']->value['ctime']) {?>
									<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['ctime'],"%Y-%m-%d");?>

								<?php } else { ?>
									<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['lastupdate'],"%Y-%m-%d");?>

								<?php }?>
							</td>
							<td>
								<div><?php echo $_smarty_tpl->tpl_vars['source']->value[$_smarty_tpl->tpl_vars['v']->value['source']];?>
</div>
								<?php if ($_smarty_tpl->tpl_vars['v']->value['doc']==1) {?>【粘贴简历】<?php }?>
							</td>

                      		<td>
                      			<?php if ($_smarty_tpl->tpl_vars['v']->value['state']==1) {?>
									<span class="admin_com_Audited">已审核</span>
								<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['state']==3) {?>
									<span class="admin_com_tg">未通过</span>
								<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['state']==0) {?>
									<span class="admin_com_noAudited">未审核</span>
								<?php }?>
							</td>
					
                        	<td>推荐：
                            	<div class="admin_new_t_j" style="display:inline;" id="rec_resume<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
                               		<?php if ($_smarty_tpl->tpl_vars['v']->value['rec_resume']=="1") {?>
                               			<a href="javascript:void(0);" onClick="rec_up('index.php?m=admin_resume&c=rec','<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','0','rec_resume');">
                                            <img src="../config/ajax_img/doneico.gif"></a>
                                  	<?php } else { ?>
                                        <a href="javascript:void(0);" onClick="rec_up('index.php?m=admin_resume&c=rec','<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','1','rec_resume');">
                                            <img src="../config/ajax_img/errorico.gif"></a>
                                 	<?php }?>
                            	</div>
                            	<div class="admin_new_t_j" id="top<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">置顶： 
                                	<?php if ($_smarty_tpl->tpl_vars['v']->value['top']=="1"&&$_smarty_tpl->tpl_vars['v']->value['topdate']>time()) {?>
                                     	<a href="javascript:void(0);" onClick="resumttop('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['top_day'];?>
','<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['topdate']," %Y-%m-%d ");?>
')">
                                         	<img src="../config/ajax_img/doneico.gif"></a>
                                	<?php } else { ?>
                                     	<a href="javascript:void(0);" onClick="resumttop('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['top_day'];?>
')">
                                         	<img src="../config/ajax_img/errorico.gif"></a>
                                	<?php }?>
                            	</div>
                          	</td>
                         	<td align="center">
                             	<div style="margin-bottom:5px;">
	                           		<?php if ($_smarty_tpl->tpl_vars['v']->value['label']||$_smarty_tpl->tpl_vars['v']->value['content']) {?>
	                             		<a href="javascript:;" class="admin_new_c_bth admin_new_c_bth_yl label" pid="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" names="<?php echo $_smarty_tpl->tpl_vars['v']->value['uname'];?>
" status1="<?php echo $_smarty_tpl->tpl_vars['v']->value['label'];?>
" status2="<?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>
">查看</a>
	                           		<?php } else { ?>
	                             		<a href="javascript:;" class="admin_new_c_bth label" pid="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" names="<?php echo $_smarty_tpl->tpl_vars['v']->value['uname'];?>
" status1="<?php echo $_smarty_tpl->tpl_vars['v']->value['label'];?>
" status2="<?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>
">备注</a>
	                           		<?php }?>
								</div>
							</td>
							<td>
								<div>
									<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/resume/index.php?c=show&look=admin&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" target="_blank" class="admin_new_c_bth admin_new_c_bth_yl">预览</a>
									<a href="javascript:;" class="admin_new_c_bth admin_new_c_bthsh status" pid="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" uid="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" rstatus="<?php echo $_smarty_tpl->tpl_vars['v']->value['r_status'];?>
" username="<?php echo $_smarty_tpl->tpl_vars['v']->value['uname'];?>
"  status="<?php echo $_smarty_tpl->tpl_vars['v']->value['state'];?>
">审核</a>
								</div>
								<div><a href="index.php?m=admin_resume&c=editResume&uid=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="admin_new_c_bth mt5">修改</a>
								<a href="javascript:void(0)" onclick="layer_del('确定要删除？', 'index.php?m=admin_resume&c=delResume&del=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');" class="admin_new_c_bth admin_new_c_bth_sc mt5">删除</a></div>
							</td>
						</tr>
						<?php } ?>
						<tr>
							<td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
							<td colspan="14">
								<label for="chkAll2">全选</label>&nbsp;
								<input class="admin_button" type="button" value="删除" onClick="return really('del[]')" />
								<input class="admin_button" type="button" value="审核" onClick="audall('1');" />
								<input class="admin_button" type="button" value="刷新" onClick="Refreshs();" />
								<input class="admin_button" type="button" value="推荐" onClick="checkdel('rec_resume','1');" />
								<input class="admin_button" type="button" value="取消推荐" onClick="checkdel('rec_resume','0');" />
								<input class="admin_button" type="button" value="置顶" onClick="checkdel('top','1');" />
								<input class="admin_button" type="button" value="取消置顶" onClick="checkdel('top','0');" />
								<input class="admin_button" type="button" value="导出" onClick="Export();" />
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
							<td colspan="12" class="digg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</td>
						</tr>
						<?php }?>
					</tbody>
				</table>
				<input type="hidden" name="pytoken" id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
			</form>
		</div>
	</div>
	</div>
	
	<?php echo '<script'; ?>
>
		layui.use(['layer', 'form', 'element'], function() {
		    var layer = layui.layer,
		        form = layui.form,
		        $ = layui.$,
		        element = layui.element;
		    form.on('radio(userstatus)', function(data){
	          	if(data.value==1){
	          		$("#istb").attr("checked",true);
	          		$("#istb").attr("disabled",true);
	          		$(".tbcss").show();
	          	}else{
	            	$(".tbcss").hide();
	          	}
	          	form.render('checkbox');
        	});
		});
		
		$(document).ready(function(){
			$(".job_name_all").hover(function(){
				var rstatus=$(this).attr('v');
				if($.trim(rstatus)!=''){
					layer.tips(rstatus, this, {guide: 1, style: ['background-color:#5EA7DC; color:#fff;top:-7px', '#5EA7DC']}); 
					$(".xubox_layer").addClass("xubox_tips_border");
				} 
			},function(){
				layer.closeAll('tips');
			});
			$.get("index.php?m=admin_resume&c=resumeNum", function(data) {
				var datas = eval('(' + data + ')');
				if(datas.resumeAllNum) {
					$('.ajaxresumeall').html(datas.resumeAllNum);
				}
				if(datas.resumeStatusNum1) {
					$('.ajaxresumestatus1').html(datas.resumeStatusNum1);
				}
				if(datas.resumeStatusNum2) {
					$('.ajaxresumestatus2').html(datas.resumeStatusNum2);
				}
				if(datas.resumeStatusNum3) {
					$('.ajaxresumestatus3').html(datas.resumeStatusNum3);
				}
			});
			
			$(".city_name_all").hover(function() {
			    var city_name = $(this).attr('v');
			    if($.trim(city_name) != '') {
			        layer.tips(city_name, this, {
			            guide: 1,
			            style: ['background-color:#5EA7DC; color:#fff;top:-7px', '#5EA7DC']
			        });
			        $(".xubox_layer").addClass("xubox_tips_border");
			    }
			}, function() {
			    var city_name = $(this).attr('v');
			    if($.trim(city_name) != '') {
			        layer.closeAll('tips');
			    }
			});
					
			$(".status").click(function() {
           		var rstatus = $(this).attr("rstatus");
           		
           		
           		if(rstatus!=1){
             		if(rstatus==2){
               			parent.layer.msg("用户已锁定,无法审核相关信息", 2, 8);
               			return false;
             		}else{
		                $("input[name=cuid]").val($(this).attr("uid"));
		                $("input[name=cid]").val($(this).attr("pid"));
		                $("#userstatus1").attr("checked", true);
		                $("#istb").attr("checked",true);
		          		$("#istb").attr("disabled",true);
		          		$(".tbcss").show();
		          		
		                var username = $(this).attr("username");
		                if(rstatus == '0'){
		            		$("#username").html(username+'<font color="red">【未审核】</font>');
		            	}else if(rstatus == 3){
		            		$("#username").html(username+'<font color="red">【未通过】</font>');
		            	}
		                $.layer({
		                  	type: 1,
		                  	title: '审核操作',
		                  	closeBtn: [0, true],
		                  	offset: ['80px', ''],
		                  	border: [10, 0.3, '#000', true],
		                  	area: ['450px', '400px'],
		                  	page: {
		                    	dom: '#preview'
		                  	}
		                });
             		}
           		}else{
              		var id = $(this).attr("pid");
               		var status = $(this).attr("status");
              		$("#status" + status).attr("checked", true);               
              	 	$("input[name=id]").val(id);
               		$.get("index.php?m=admin_resume&c=lockInfo&id=" + id, function(msg) {
                   	$("#alertcontent").val($.trim(msg));
                   	$.layer({
                        type: 1,
                        title: '简历审核',
                        closeBtn: [0, true],
                        border: [10, 0.3, '#000', true],
                        area: ['390px', '240px'],
                        page: {
                            dom: "#info_div"
                        }
                    });
               	});
           	}
           	layui.use(['form'], function() {
             		var form = layui.form;
             		form.render();
           	});
			   
		});
			
			$(".label").click(function() {
			    var id = $(this).attr("pid");
			    var lable = $(this).attr("status1");
				var content = $(this).attr("status2");
			    var name = $(this).attr("names");
			    $("#labelid").val(id);
			    $("#labels").val(lable);
				$("#content").text(content);
			    $("#labelname").text(name);
			    layui.use(['form'], function() {
			        var form = layui.form;
			        form.render();
			    });
			    $.layer({
			        type: 1,
			        title: '简历备注',
			        closeBtn: [0, true],
			        border: [10, 0.3, '#000', true],
			        area: ['520px', '480px'],
			        page: {
			            dom: "#label_div"
			        }
			    });
			});
		});
	    function Refreshs() {  
	        var codewebarr = "";
	        $(".check_all:checked").each(function() {  
	            if(codewebarr == "") {
	                codewebarr = $(this).val();
	            } else {
	                codewebarr = codewebarr + "," + $(this).val();
	            }
	        });
	        if(codewebarr == "") {
	            parent.layer.msg("请选择要刷新的简历！", 2, 8);
	            return false;
	        } else {
				loadlayer();
	            $.post("index.php?m=admin_resume&c=refresh", {
	                ids: codewebarr,
	                pytoken: $('#pytoken').val()
	            }, function(data) {
					parent.layer.closeAll('loading');
	                parent.layer.msg("批量刷新成功！", 2, 9, function() {
	                    window.location.reload();
	                });
	            })
	        }
	    }
	
	    function Export() {
	        var codewebarr = "";
	        $(".check_all:checked").each(function() {  
	            if(codewebarr == "") {
	                codewebarr = $(this).val();
	            } else {
	                codewebarr = codewebarr + "," + $(this).val();
	            }
	        });
	        if(codewebarr!='') {
	            $("input[name='ids']").val(codewebarr);
	        }
	        add_class('选择导出字段', '650', '450', '#export', '');
	    }
	
	    function check_xls() {
	        var type = "";
	        $(".type:checked").each(function() {  
	            if(type == "") {
	                type = $(this).val();
	            } else {
	                type = type + "," + $(this).val();
	            }
	        });
	        if(type == "") {
	            layer.msg("请选择导出字段！", 2, 8);
	            return false;
	        }
	        setTimeout(function() {
	            $('.myform').submit()
	        }, 0);
	        layer.closeAll();
	    }
	
	    function checkdel(type, status) {  
	        var codewebarr = "";
	        $(".check_all:checked").each(function() {  
	            if(codewebarr == "") {
	                codewebarr = $(this).val();
	            } else {
	                codewebarr = codewebarr + "," + $(this).val();
	            }
	        });
	        if(codewebarr == "") {
	            parent.layer.msg("请选择简历！", 2, 8);
	            return false;
	        } else if(type == 'top') {
	            if(status != '1') {
	                $('input[name=s]').attr('checked', 'true');
	            }
	            resumttop(codewebarr, 0);
	        } else {
				loadlayer();
	            $.post("index.php?m=admin_resume&c=rec", {
	                ids: codewebarr,
	                pytoken: $('#pytoken').val(),
	                type: type,
	                rec_resume: status
	            }, function(data) {
					parent.layer.closeAll('loading');
	                if(data == 0) {
	                    parent.layer.msg("操作出错，请稍后再试！", 2, 8);
	                } else {
	                    parent.layer.msg("设置成功！", 2, 9, function() {
	                        window.location.reload();
	                    });
	                }
	            })
	        }
	    }
	
	    function resumttop(id, topday, topdate) {
	        if(topdate) {
	            $(".top").html(topdate);
	            $(".topdiv").show();
	            $("input[name='eid']").val(id);
	            add_class('简历置顶', '290', '280', '#resumttop', '');
	        } else {
	            $("input[name='eid']").val(id);
	            add_class('简历置顶', '290', '250', '#resumttop', '');
	        }
	    }
	    function audall(){
			var codewebarr="";
			$(".check_all:checked").each(function(){  
				if(codewebarr==""){codewebarr=$(this).val();}else{codewebarr=codewebarr+","+$(this).val();}
			});
			if(codewebarr==""){
				parent.layer.msg("您还未选择任何信息！",2,8);return false;
			}else{
				$("input[name=id]").val(codewebarr);
				$("#alertcontent").val('');
				$("input[name=status]").attr("checked",false);
				add_class('批量审核','390','240','#info_div','');
			}
		}
		
		function xlsAll(form){
			for (var i=0;i<form.elements.length;i++){
				var e = form.elements[i];
				if (e.name == 'type[]' && e.disabled == false){
					e.checked = form.xlsAllCheck.checked;
				}
			}
			for (var i=0;i<form.elements.length;i++){
				var e = form.elements[i];
				if (e.name == 'rtype[]' && e.disabled == false){
					e.checked = form.xlsAllCheck.checked;
				}
			}
		}
      <?php echo '</script'; ?>
>
    </body>
</html><?php }} ?>
