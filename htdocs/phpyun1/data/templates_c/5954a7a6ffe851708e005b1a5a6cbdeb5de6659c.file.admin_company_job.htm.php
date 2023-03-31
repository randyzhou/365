<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-07 02:45:41
         compiled from "D:\rcw\uploads\app\template\admin\admin_company_job.htm" */ ?>
<?php /*%%SmartyHeaderCode:15244119345fa599d5d90657-74744401%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5954a7a6ffe851708e005b1a5a6cbdeb5de6659c' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\admin\\admin_company_job.htm',
      1 => 1582938804,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15244119345fa599d5d90657-74744401',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'pytoken' => 0,
    'cache' => 0,
    'v' => 0,
    'ccname' => 0,
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
  'unifunc' => 'content_5fa599d5de2741_86067347',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fa599d5de2741_86067347')) {function content_5fa599d5de2741_86067347($_smarty_tpl) {?><?php if (!is_callable('smarty_function_searchurl')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.searchurl.php';
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
"><?php echo '</script'; ?>
>
	
	<title>后台管理</title>
</head>

<body class="body_ifm">
	<div id="preview" style="display:none;width:450px ">
   		<div style="height:380px; overflow:auto;width:450px;">
       		<form class="layui-form" name="formstatus" action="index.php?m=admin_company_job&c=cjobstatus" target="supportiframe" method="post" onSubmit="return tcdiv();">
         		
         		<input type="hidden" name="pytoken" id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
            	
            	<table cellspacing='1' cellpadding='1' class="admin_examine_table">
	                <tr>
	             		<th>公司名称：</th>
	                    <td align="left"><span id="comname"></span></td>
	                </tr>
            		<tr>
                        <th width="85">职位审核：</th>
                        <td align="left">
                            <div class="layui-form-item">
                                <div class="layui-input-block">
                                    <input name="r_status" id="plstatus1"  value="1" title="正常" type="radio" lay-filter="plstatus" />
                                    <input name="r_status" id="plstatus3"  value="3" title="未通过" type="radio" lay-filter="plstatus" />
                                </div>
                            </div>
                        </td>
                    </tr>
                    
                    <tr class="tbcss">
                        <th><span class="sh_tb">企业审核：</span></th>
                        <td align="left">
                            <div class="layui-form-item">
                                <div class="layui-input-inline">
                                    <input name="istb" id="istb" value="1" title="同步" type="checkbox"  lay-skin="primary" checked="checked" />
                                </div>
                            </div>
                           
                        </td>
                    </tr>
                    <tr class="tbcss">
                        <th>同步说明：</th>  <td align="left"><div class="sh_sm">企业身份状态根据职位状态同步审核</div></td>
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
   	
	<!-- 职位审核弹出框 -->
	<div id="status_div"  style="display:none; width:390px; ">
		<form action="index.php?m=admin_company_job&c=status" target="supportiframe" method="post" onsubmit="return htStatus()" class="layui-form">
	    	<input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
		    <table cellspacing='1' cellpadding='1' class="admin_examine_table">
		      	<tr>
			        <th width="80">审核操作：</th>
			        <td align="left">
			        	<div class="layui-form-item">
			        		<div class="layui-input-block">
			              		<input name="status" id="status1" value="1" title="正常" type="radio"/>
			              		<input name="status" id="status3" value="3" title="未通过" type="radio"/>
			            	</div>
			          	</div>
			       	</td>
		      	</tr>
		      	<tr>
		        	<th>审核说明：</th>
		        	<td align="left"><textarea id="alertcontent" name="statusbody"class="admin_explain_textarea"></textarea></td>
		      	</tr>
		      	<tr>
		        	<td colspan='2' align="center">
		        		<div class="admin_Operating_sub">
				            <input name="pid" value="0" type="hidden">
				            <input type="submit" value='确认' class="admin_examine_bth">
				            <input type="button" onClick="layer.closeAll();" class="admin_examine_bth_qx" value='取消'>
		          		</div>
		          	</td>
		      	</tr>
		    </table>
	  	</form>
	</div>

	<!-- 职位置顶弹出框 -->
	<div id="infobox3" style="display:none;text-align:center;margin-top:20px">
	  	<form action="index.php?m=admin_company_job&c=xuanshang" target="supportiframe" method="post">
		    <input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
		    
		    <div class=" admin_com_smbox_list_b"> 
		    	<span class="admin_com_smbox_span">置顶天数：</span>
		      	<input class="admin_com_smbox_text" value="" name="days" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')">
		      	<span class="admin_com_smbox_list_s">天</span> 
		   	</div>
		   	
		    <div class="xsdiv" style="display:none"> 
		    	<span class="admin_com_smbox_span">当前结束日期：</span> 
		    	<span class="admin_com_smbox_list_s edate" style="colo2r:#f60"></span>
		    </div>
		    
		    <div class="admin_com_smbox_qx_box"> 
		    	如需取消职位置顶请单击 <input type="checkbox" id="xtype" name="s" value="1"> 点击确认即可 
		  	</div>
		  	
		    <div class="admin_com_smbox_opt admin_com_smbox_opt_mt" style="width:300px;">
		      	<input type="submit" onclick="loadlayer();" value='确认'  class="admin_examine_bth">
		      	<input type="button" onClick="layer.closeAll();" class="admin_examine_bth_qx" value='取消'>
		    </div>
		    
		    <input name="pid" value="0" type="hidden">
	  	</form>
	</div>
	
	<!-- 职位推荐弹出框 -->
	<div id="infobox6" style="display:none;">
	  	<div class="admin_com_t_box">
		    <form action="index.php?m=admin_company_job&c=recommend" target="supportiframe" method="post">
		      	<input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
 		      	
		      	<div class=" admin_com_smbox_list_pd"> 
		      		<span class="admin_com_smbox_span">推荐天数：</span>
		        	<input class="admin_com_smbox_text" value="" name="days" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')">
		        	<span class="admin_com_smbox_list_s">天</span> 
		        </div>
		      	
		      	<div class="recdiv" style="display:none"> 
		      		<span class="admin_com_smbox_span">当前结束日期：</span> 
		      		<span class="admin_com_smbox_list_s edate" style="color:#f60"></span> 
		      	</div>
		      	
		      	<div class="admin_com_smbox_qx_box"> 
		      		如需取消推荐职位请单击 <input type="checkbox" name="s" value="1"> 点击确认即可 
		      	</div>
		      	
		      	<div class="admin_com_smbox_opt admin_com_smbox_opt_mt">
		      		<input type="submit" onclick="loadlayer();" value='确认' class="admin_examine_bth">
		        	<input type="button" onClick="layer.closeAll();" class="admin_examine_bth_qx" value='取消'>
		      	</div>
		      	
		      	<input name="pid" value="0" type="hidden">
		      	
		    </form>
	  	</div>
	</div>
	
	<!-- 紧急招聘弹出框 -->
	<div id="infobox5"  style="display:none;text-align:center;">
	  	<div class="admin_com_t_box">
		    <form action="index.php?m=admin_company_job&c=urgent" target="supportiframe" method="post">
		      	<input type="hidden" name="pytoken" id="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
 		      	
		      	<div class="admin_com_smbox_list_pd"> 
		      		<span class="admin_com_smbox_span">紧急天数：</span>
		        	<input class="admin_com_smbox_text" value="" name="days"  onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')">
		        	<span class="admin_com_smbox_list_s">天</span> 
		        </div>
		        
		      	<div class="eurdiv" style="display:none"> 
		      		<span class="admin_com_smbox_span">当前结束日期：</span> 
		      		<span class="admin_com_smbox_list_s edate" style="color:#f60"></span> 
		      	</div>
		      	
		      	<div class="admin_com_smbox_qx_box"> 
		      		如需取消紧急职位请单击 <input type="checkbox" name="s" value="1"> 点击确认即可
		      	</div>
		      	
		      	<div class="admin_com_smbox_opt admin_com_smbox_opt_mt">
		        	<input type="submit" onclick="loadlayer();" value='确认' class="admin_examine_bth">
		        	<input type="button" onClick="layer.closeAll();" class="admin_examine_bth_qx"  value='取消'>
		      	</div>
		      	
		      	<input name="pid" value="0" type="hidden">
 		      	
		    </form>
	  	</div>
	</div>
	
	<!-- 导出职位 -->
	<div id="export" style="display:none;">
	  	<div class="" style=" margin-top:10px; ">
	    	<div>
				<form action="index.php?m=admin_company_job&c=xls" target="supportiframe" method="post" class="myform">
					<input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
					<input name="pid" value="0" type="hidden">
					
					<div class="admin_resume_dc">
						<label><span class="admin_resume_dc_s"> <input type="checkbox" class="type" name="type[]" value="id"> 职位ID</span></label>
						<label><span class="admin_resume_dc_s"> <input type="checkbox" class="type" name="type[]" value="uid">企业UID</span></label> 
						<label><span class="admin_resume_dc_s"> <input type="checkbox" class="type" name="type[]" value="name">职位名称</span></label> 
						<label><span class="admin_resume_dc_s"> <input type="checkbox" class="type" name="type[]" value="hy">行业</span></label> 
						<label><span class="admin_resume_dc_s"> <input type="checkbox" class="type" name="type[]" value="job1">一级类别</span></label> 
						<label><span class="admin_resume_dc_s"> <input type="checkbox" class="type" name="type[]" value="job1_son">二级类别</span></label> 
						<label><span class="admin_resume_dc_s"> <input type="checkbox" class="type" name="type[]" value="job_post">三级类别</span></label> 
						<label><span class="admin_resume_dc_s"> <input type="checkbox" class="type" name="type[]" value="provinceid">省</span></label> 
						<label><span class="admin_resume_dc_s"> <input type="checkbox" class="type" name="type[]" value="cityid">市</span></label> 
						<label><span class="admin_resume_dc_s"> <input type="checkbox" class="type" name="type[]" value="three_cityid">县</span></label> 
						<label><span class="admin_resume_dc_s"> <input type="checkbox" class="type" name="type[]" value="minsalary,maxsalary"> 薪水</span></label> 
						<label><span class="admin_resume_dc_s"> <input type="checkbox" class="type" name="type[]" value="number">招聘人数</span></label> 
						<label><span class="admin_resume_dc_s"> <input type="checkbox" class="type" name="type[]" value="exp">工作经验</span></label> 
						<label><span class="admin_resume_dc_s"> <input type="checkbox" class="type" name="type[]" value="report">到岗时间</span></label> 
						<label><span class="admin_resume_dc_s"> <input type="checkbox" class="type" name="type[]" value="sex">性别要求</span></label> 
						<label><span class="admin_resume_dc_s"> <input type="checkbox" class="type" name="type[]" value="edu">教育程度</span></label> 
						<label><span class="admin_resume_dc_s"> <input type="checkbox" class="type" name="type[]" value="marriage">婚姻状况</span></label> 
						<label><span class="admin_resume_dc_s"> <input type="checkbox" class="type" name="type[]" value="sdate">开始日期</span></label> 
						<label><span class="admin_resume_dc_s"> <input type="checkbox" class="type" name="type[]" value="lastdate">更新时间</span></label> 
						<label><span class="admin_resume_dc_s"> <input type="checkbox" class="type" name="type[]" value="age">年龄要求</span></label> 
						<label><span class="admin_resume_dc_s"> <input type="checkbox" class="type" name="type[]" value="lang">语言要求</span></label> 
						<label><span class="admin_resume_dc_s"> <input type="checkbox" class="type" name="type[]" value="welfare">福利待遇</span></label> 
						<label><span class="admin_resume_dc_s"> <input type="checkbox" class="type" name="type[]" value="com_name">公司名称</span></label> 
						<label><span class="admin_resume_dc_s"> <input type="checkbox" class="type" name="type[]" value="pr">公司性质</span></label> 
						<label><span class="admin_resume_dc_s"> <input type="checkbox" class="type" name="type[]" value="mun">企业规模</span></label>
					</div>
					
					<div class="admin_resume_dc_p" style="padding: 10px 0;">
						<span class="admin_resume_dc_n">导出数量：</span> 
						<input name='limit' type='text' class="admin_resume_dc_ntext"> 
						<span class="admin_web_tip admin_resume_dc_tip">数字太大会导致运行缓慢，请慎重填写。</span>
					</div>
					
					<div class="admin_resume_dc_sub" style="margin-top: 10px;">
						<input type="button" onClick="check_xls();" value='确认' class="admin_resume_dc_bth1"> 
						<input type="button" onClick="layer.closeAll();" class="admin_resume_dc_bth2" value='取消'>
					</div>
					
				</form>
			</div>
	  	</div>
	</div>
	
	<!-- 转移分类弹出框 -->
	<div id="infobox4" style="display:none;">
	  	<div class="admin_com_t_box_hy">
		    <form action="index.php?m=admin_company_job&c=saveclass" target="supportiframe" method="post" onSubmit="return checkmove();">
		      	<input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
		      
		      	<div class="admin_com_select_list"> 
		      		<span class="admin_com_smbox_span">行业类别：</span>
		      		
			        <div class="admin_com_smbox_select_box">
			          	<select name="hy" id="hy" class="admin_com_smbox_select">
			            	<option value="">--选择大类--</option>
							<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cache']->value['industry_index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?> 
				            	<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['cache']->value['industry_name'][$_smarty_tpl->tpl_vars['v']->value];?>
</option>
							<?php } ?>
			          	</select>
			    	</div>
		      	</div>
		      	
		      	<div class="admin_com_select_list"> 
		      		<span class="admin_com_smbox_span">职位类别：</span>
		      		
			        <div class="admin_com_smbox_select_box">
			          	<select name="job1" id="job1"  class="admin_com_smbox_select job1" lid="job1_son" >
				            <option value="">--请选择--</option>
							<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cache']->value['job_index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
				            	<option value='<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['cache']->value['job_name'][$_smarty_tpl->tpl_vars['v']->value];?>
</option>
							<?php } ?> 
			          	</select>
			          	
				     	<select name="job1_son" id="job1_son" class="admin_com_smbox_select job1" lid="job1_son1" >
				      		<option value="">--请选择--</option>
				     	</select>
				     	
			          	<select name="job_post" id="job1_son1" class="admin_com_smbox_select" >
			            	<option value="">--请选择--</option>
			          	</select>
			        </div>
		      	</div>
		      	
		      	<div class="admin_com_smbox_opt admin_com_smbox_opt_mt">
		        	<input type="submit"  value='确认' class="admin_examine_bth">
		        	<input type="button" onClick="layer.closeAll();" class="admin_examine_bth_qx" value='取消'>
		      	</div>
		      	
		      	<input name="jobid" value="0" type="hidden">
		    </form>
		</div>
	</div>

	<div class="infoboxp">
		<div class="tabs_info">
			<ul>
				<li class="curr"><a href="index.php?m=admin_company_job&uid=<?php echo $_GET['uid'];?>
">全职职位</a></li>
				<li><a href="index.php?m=admin_partjob&uid=<?php echo $_GET['uid'];?>
">兼职职位</a></li>
			</ul>
		</div>
	
		<div class="admin_new_tip">
			<a href="javascript:;" class="admin_new_tip_close"></a>
			<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
			<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
			<div class="admin_new_tip_list_cont">
				<?php if ($_GET['uid']!='') {?>
					<div class="admin_new_tip_list">该页面展示了网站企业：<font color="#f00">【<?php echo $_smarty_tpl->tpl_vars['ccname']->value;?>
】</font> 的职位信息，可对职位进行编辑修改操作。</div>
				<?php } else { ?>
					<div class="admin_new_tip_list">该页面展示了网站所有的企业职位信息，可对职位进行编辑修改操作。</div>
				<?php }?>
				
				<div class="admin_new_tip_list">未审核企业名称后有信息标识，对职位进行审核等操作时请注意。</div>
				<div class="admin_new_tip_list">可输入关键字进行搜索，也可进行详细的高级搜索。</div>
        <div class="admin_new_tip_list">当前用户除了已锁定状态，可以正常审核。</div>
        <div class="admin_new_tip_list">当前除了已审核状态，显示其他状态（未审核，未通过）。</div>
			</div>
		</div>
	
		<div class="clear"></div>
	
		<div class="admin_new_search_box">
			<form action="index.php" name="myform" method="get" >
				<input type="hidden" name="m" value="admin_company_job"/>
				<input type="hidden" name="state" value="<?php echo $_GET['state'];?>
"/>
				<input type="hidden" name="job_type" value="<?php echo $_GET['job_type'];?>
"/>
				<input type="hidden" name="jtype" value="<?php echo $_GET['jtype'];?>
"/>
				<input type="hidden" name="salary" value="<?php echo $_GET['salary'];?>
"/>
				
				<div class="admin_new_search_name">搜索类型：</div>
				<div class="admin_Filter_text formselect"  did='dtype'>
					<input type="button" value="<?php if ($_GET['type']=='1'||$_GET['type']=='') {?>公司名称<?php } elseif ($_GET['type']=='2') {?>职位名称<?php }?>" class="admin_new_select_text"  id="btype">
					<input type="hidden" id='type' value="<?php if ($_GET['type']=='1'||$_GET['type']=='') {?>1<?php } else { ?>2<?php }?>" name='type'>
					<div class="admin_Filter_text_box" style="display:none" id='dtype'>
						<ul>
							<li><a href="javascript:void(0)" onClick="formselect('1','type','公司名称')">公司名称</a></li>
							<li><a href="javascript:void(0)" onClick="formselect('2','type','职位名称')">职位名称</a></li>
						</ul>
					</div>
				</div>
	
				<input type="text" placeholder="输入你要搜索的关键字" name="keyword" class="admin_new_text">
				<input type="submit" name='news_search' value="搜索" class="admin_new_bth">
				<a href="javascript:void(0)" onclick="$('.admin_screenlist_box').toggle();"   class="admin_new_search_gj">高级搜索</a>
			</form>
			<?php echo $_smarty_tpl->getSubTemplate ("admin/admin_search.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
		</div>
	
		<div class="clear"></div>
		
		<div class="admin_statistics">
	    	数据统计：
			<?php if ($_GET['uid']!='') {?>
				<span><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</span>；
			<?php } else { ?>
				<em class="admin_statistics_s">总数：<span class="ajaxjoball">0</span></em>
				<em class="admin_statistics_s">未审核：<span class="ajaxjobstatus1">0</span></em>
				<em class="admin_statistics_s">未通过：<span class="ajaxjobstatus2">0</span></em>
				<em class="admin_statistics_s">已下架：<span class="ajaxjobstatus3">0</span></em>
				搜索结果：<span><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</span>；
			<?php }?>
		</div>
		   
		<div class="clear"></div>
	
		<div class="table-list">
			<div class="admin_table_border">
				<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
				<form action="index.php" name="myform" method="get" id='myform' target="supportiframe">
					<input name="m" value="admin_company_job" type="hidden"/>
					<input name="c" value="del" type="hidden"/>
					<table width="100%">
						<thead>
							<tr class="admin_table_top">
								<th style="width:20px;"> 
									<label for="chkall"><input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/></label>
								</th>
								<?php if ($_GET['t']=="id"&&$_GET['order']=="asc") {?>
									<th><a href="<?php echo smarty_function_searchurl(array('order'=>'desc','t'=>'id','m'=>'admin_company_job','untype'=>'order,t'),$_smarty_tpl);?>
">编号<img src="images/sanj.jpg"/></a></th>
								<?php } else { ?>
									<th><a href="<?php echo smarty_function_searchurl(array('order'=>'asc','t'=>'id','m'=>'admin_company_job','untype'=>'order,t'),$_smarty_tpl);?>
">编号<img src="images/sanj2.jpg"/></a></th>
								<?php }?>
								<th align="left" width="180">职位名称/发布企业</th>
								<th>会员等级</th>
								<th>简历</th>
								<th>发布/更新时间</th>
								<th>浏览量</th>
								<th>来源</th>
								<th>审核状态</th>
								<th>招聘状态</th>
								<th>推广</th>
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
								<tr align="center"  <?php if (($_smarty_tpl->tpl_vars['key']->value+1)%2=='0') {?>class="admin_com_td_bg"<?php }?> id="list<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
									<td>
									<input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="check_all" name='del[]' onclick='unselectall()' rel="del_chk" />
									</td>
									<td class="td1" style="text-align:center;width:50px;"><span><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</span></td>
									<td align="left">
										<a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['joburl'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a>
										<div class="admin_job_comname">
											<a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['comurl'];?>
" target="_blank" class="admin_cz_sc"><?php echo $_smarty_tpl->tpl_vars['v']->value['com_name'];?>
</a>
											<?php if ($_smarty_tpl->tpl_vars['v']->value['c_status']!=1) {?>
												<a href="javascript:void(0)" class="job_name_all"  v="<?php if ($_smarty_tpl->tpl_vars['v']->value['c_status']==0) {?>企业未审核<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['c_status']==3) {?>企业审核未通过<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['c_status']==2) {?>企业已锁定<?php }?>">
													<img src="images/bg_wechat_help.png">
												</a>
											<?php }?>
										</div>
									</td>
									<td>
										<?php if ($_smarty_tpl->tpl_vars['v']->value['rating_name']) {?>[<?php echo $_smarty_tpl->tpl_vars['v']->value['rating_name'];?>
]<?php }?>
									</td>
									<td class="td" align="center">
										<div class="admin_new_t_j"> 简历数：<?php echo $_smarty_tpl->tpl_vars['v']->value['snum'];?>
</div>
										<div class="admin_new_t_j">未查看：<?php echo $_smarty_tpl->tpl_vars['v']->value['browseNum'];?>
</div>
										<div class="admin_new_t_j"> 已面试：<?php echo $_smarty_tpl->tpl_vars['v']->value['inviteNum'];?>
</div>
									</td>
									<td class="td" align="center">
										<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['sdate'],"%Y-%m-%d");?>

										<div class="mt8"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['lastupdate'],"%Y-%m-%d");?>
</div>
									</td>
									<td class="td" align="center"><?php echo $_smarty_tpl->tpl_vars['v']->value['jobhits'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['source']->value[$_smarty_tpl->tpl_vars['v']->value['source']];?>
</td>
									<td> 
										<?php if ($_smarty_tpl->tpl_vars['v']->value['state']==1) {?> 
											<span class="admin_com_Audited">已审核</span> 
										<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['state']==0) {?> 
											<span class="admin_com_noAudited">未审核</span> 
										<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['state']==3) {?> 
											<span class="admin_com_tg">未通过</span> 
										<?php }?> 
									</td>
	
									<td id="state<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"> 
										<?php if ($_smarty_tpl->tpl_vars['v']->value['status']==1) {?> 
											<span class="admin_com_Lock">已下架</span> 
											<a href="javascript:void(0);" onclick="checkstate('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','2');" class="admin_new_tg"></a>
										<?php } else { ?> 
											<span class="admin_com_Audited">招聘中</span> 
											<a href="javascript:void(0);" onclick="checkstate('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','1');" class="admin_new_tg admin_new_tg_cur"></a>
										<?php }?> 
									</td>
				
									<td>
										<div class="admin_new_t_j">
											置顶： <a href="javascript:void(0);"  pid="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" edate="<?php echo $_smarty_tpl->tpl_vars['v']->value['xstime'];?>
" etime="<?php echo $_smarty_tpl->tpl_vars['v']->value['xsdate'];?>
" class="admin_new_tg <?php if ($_smarty_tpl->tpl_vars['v']->value['xsdate']>time()) {?>admin_new_tg_cur<?php }?> xuanshang"></a> 
										</div>
										
										<div class="admin_new_t_j">
											推荐：
											<?php if ($_smarty_tpl->tpl_vars['v']->value['rec_time']>time()) {?> 
												<a href="javascript:void(0);" class="admin_new_tg admin_new_tg_cur rec" pid="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" edate="<?php echo $_smarty_tpl->tpl_vars['v']->value['recdate'];?>
" etime="<?php echo $_smarty_tpl->tpl_vars['v']->value['rec_time'];?>
"></a> 
											<?php } else { ?> 
												<a href="javascript:void(0);" class="admin_new_tg rec" pid="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"></a> 
											<?php }?>
										</div>
										
										<div class="admin_new_t_j">
											紧急：
											<?php if ($_smarty_tpl->tpl_vars['v']->value['urgent_time']>time()) {?> 
												<a href="javascript:void(0);" class="admin_new_tg admin_new_tg_cur urgent" pid="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" edate="<?php echo $_smarty_tpl->tpl_vars['v']->value['eurgent'];?>
" etime="<?php echo $_smarty_tpl->tpl_vars['v']->value['urgent_time'];?>
"></a> 
											<?php } else { ?> 
												<a href="javascript:void(0);" class="admin_new_tg urgent" pid="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"></a> 
											<?php }?> 
										</div>
									</td>
	
									<td>
										<div class="admin_new_bth_c"> 
											<a href="javascript:;"pid="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" status='<?php echo $_smarty_tpl->tpl_vars['v']->value['state'];?>
' comname='<?php echo $_smarty_tpl->tpl_vars['v']->value['com_name'];?>
' uid='<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
'  rstatus='<?php echo $_smarty_tpl->tpl_vars['v']->value['r_status'];?>
' class="admin_new_c_bth admin_new_c_bthsh status" >审核</a>
										</div>
										
										<div class="admin_new_bth_c"> 
											<a href="index.php?m=admin_company_job&c=show&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="admin_new_c_bth ">修改</a> 
											<a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=admin_company_job&c=del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');" class="admin_new_c_bth admin_new_c_bth_sc">删除</a> 
										</div>
									</td>
								</tr>
							<?php } ?>
							
							<tr>
								<td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)'/></td>
								<td colspan="11" >
									<label for="chkAll2">全选</label>
									<input class="admin_button" type="button" name="delsub" value="审核" onClick="audall();" />
									<input class="admin_button" type="button" name="delsub" value="刷新" onClick="Refresh();" />
									<input class="admin_button" type="button" name="delsub" value="置顶" onClick="setTop();" />
									<input class="admin_button" type="button" name="delsub" value="推荐" onClick="recommend();" />
									<input class="admin_button" type="button" name="delsub" value="紧急" onClick="urgent();" />
									<input class="admin_button" type="button" name="delsub" value="导出" onClick="Export();" />
									<input class="admin_button" type="button" name="delsub" value="转移类别" onClick="audall3();" />
									<input class="admin_button" type="button" name="delsub" value="删除" onClick="return really('del[]')" />
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
									<td colspan="9" class="digg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</td>
								</tr>
							<?php }?>
						</tbody>
					</table>
					<input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
				</form>
			</div>
		</div>
	</div>

	<?php echo '<script'; ?>
>
		
		layui.use([ 'layer', 'form' ], function() {
			var layer = layui.layer, 
				form = layui.form, 
				$ = layui.$;
			form.on('radio(plstatus)', function(data){
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

		var weburl = "<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
";
		
		/* 上架招聘 / 下架职位 */
		function checkstate(id, state) {
			var pytoken = $('#pytoken').val();
			$.post("index.php?m=admin_company_job&c=checkstate", { id : id, state : state, pytoken : pytoken }, function(data) {
				if (data == 1) {
					if (state == '1') {
						$('#state' + id) .html('<span class="admin_com_noAudited">已下架</span><a href="javascript:void(0);" onclick="checkstate(\''+ id+ '\',\'2\');" class="admin_new_tg"></a>');
					} else {
						$('#state' + id).html('<span class="admin_com_Audited">招聘中</span><a href="javascript:void(0);" onclick="checkstate(\''+ id+ '\',\'1\');" class="admin_new_tg admin_new_tg_cur"></a>');
					}
				}
			});
		}
		
		$(function() {
			/* 企业审核状态提示 */
			$(".job_name_all").hover(function() {
				
				var job_name = $(this).attr('v');
				if ($.trim(job_name) != '') {
					layer.tips(job_name, this, {
						guide : 1,
						style : ['background-color:#5EA7DC; color:#fff;top:-7px','#5EA7DC' ]
					});
					$(".xubox_layer").addClass("xubox_tips_border");
				}
			}, function() {
				var job_name = $(this).attr('v');
				if ($.trim(job_name) != '') {
					layer.closeAll('tips');
				}
			});
			
			/* 职位置顶 */
			$(".xuanshang").click(function() {
				
				$('input[name=pid]').val($(this).attr('pid'));
				var edate = $(this).attr('edate');
				$("input[name='days']").val('');
				
				$(".xsdiv").hide();
				
				if (edate) {
					$(".edate").html(edate);
					$(".xsdiv").show();
					add_class('职位置顶', '300', '270', '#infobox3', '');
				} else {
					add_class('职位置顶', '300', '250', '#infobox3', '');
				}
				
			});
			
			/* 职位推荐 */
			$(".rec").click(function() {
				
				$("input[name=pid]").val($(this).attr("pid"));
				var edate = $(this).attr("edate");
				$("input[name='days']").val('');
				
				$(".recdiv").hide();
				
				if (edate) {
					$(".edate").html(edate);
					$(".recdiv").show();
					add_class('职位推荐', '290', '280', '#infobox6', '');
				} else {
					add_class('职位推荐', '290', '260', '#infobox6', '');
				}
				
			});
			
			/* 紧急招聘 */
			$(".urgent").click(function() {
				
				$("input[name=pid]").val($(this).attr("pid"));
				var edate = $(this).attr("edate");
				$(".eurdiv").hide();
				
				if (edate) {
					$(".edate").html(edate);
					$(".eurdiv").show();
					add_class('紧急招聘', '290', '280', '#infobox5', '');
				} else {
					add_class('紧急招聘', '290', '260', '#infobox5', '');
				}
				
			});
			
			/* 职位审核 */
			$(".status").click(function() {
				
				var id = $(this).attr("pid");
				var uid = $(this).attr("uid");

				$("input[name=cuid]").val($(this).attr("uid"));
				$("input[name=pid]").val($(this).attr("pid"));
				$("input[name=cid]").val($(this).attr("pid"));
				
				var status = $(this).attr("status");
				$("#status" + status).attr("checked", true);
        		
				var rstatus=$(this).attr("rstatus");

            	var comname = $(this).attr("comname");
            	if(rstatus == 0){
            		$("#comname").html(comname+'<font color="red">【未审核】</font>');
            	}else if(rstatus == 3){
            		$("#comname").html(comname+'<font color="red">【未通过】</font>');
            	}
         		if(rstatus!=1){
          			if(rstatus==2){
              			parent.layer.msg("用户已锁定,无法审核相关信息", 2, 8);
                    	return false;
                	}else{
			            $("#plstatus1").attr("checked", true);
			            $("#istb").attr("checked", true);
			            $("#istb").attr("disabled", true);
  		          		$(".tbcss").show();
			            $.layer({
			              	type: 1,
			              	title: '审核操作',
			              	closeBtn: [0, true],
			              	offset: ['80px', ''],
			              	border: [10, 0.3, '#000', true],
			              	area: ['450px', '350px'],
			            	page: {
			                	dom: '#preview'
			              	}
			           	});
			       	}
       			}else{
          			var pytoken = $("#pytoken").val();
			  		$.post("index.php?m=admin_company_job&c=lockinfo", {id : id, pytoken : pytoken}, function(msg) {
			       		$("#alertcontent").val(msg);
			        	add_class('职位审核', '390', '240', '#status_div', '');
			     	});
			  	}
				layui.use([ 'form' ], function() {
					var form = layui.form;
						form.render();
				});
			});
		});
		
		/* 批量审核 */
		function audall() {
			var codewebarr = "";
			$(".check_all:checked").each(function() {
				
				if (codewebarr == "") {
					codewebarr = $(this).val();
				} else {
					codewebarr = codewebarr + "," + $(this).val();
				}
				
			});
			if (codewebarr == "") {
				
				parent.layer.msg("您还未选择任何信息！", 2, 8);
				return false;
				
			} else {
				
				$("input[name=pid]").val(codewebarr);
				$("#alertcontent").val('');				//批量审核，审核说明先清空，批量注释说明
				$("input[name=status]").attr("checked", false);
				add_class('批量审核', '390', '260', '#status_div', '');
				
			}
		}
		
		/* 批量刷新 */
		function Refresh() {
			var codewebarr = "";
			$(".check_all:checked").each(function() { 
				if (codewebarr == "") {
					codewebarr = $(this).val();
				} else {
					codewebarr = codewebarr + "," + $(this).val();
				}
			});
			if (codewebarr == "") {
				parent.layer.msg("请选择要刷新的职位！", 2, 8);
				return false;
			} else {
				loadlayer();
				$.post("index.php?m=admin_company_job&c=refresh", {
					ids : codewebarr,
					pytoken : $('#pytoken').val()
				}, function(data) {
					parent.layer.closeAll('loading');
					parent.layer.msg("刷新成功！",2, 9,function(){location.reload();});return false;
				})
			}
		}
		
		/* 批量置顶 */
		function setTop() {
			var codearr = "";
			$(".check_all:checked").each(function() {
				if (codearr == "") {
					codearr = $(this).val();
				} else {
					codearr = codearr + "," + $(this).val();
				}
			});
			if (codearr == "") {
				parent.layer.msg("请选择要置顶的职位！", 2, 8);
				return false;
			} else {
				$("input[name=pid]").val(codearr);
				$(".xsdiv").hide();
				add_class('职位批量置顶', '290', '240', '#infobox3', '');
			}
		}
		
		/* 批量推荐 */
		function recommend() {
			var codearr = "";
			$(".check_all:checked").each(function() { 	
				if (codearr == "") {
					codearr = $(this).val();
				} else {
					codearr = codearr + "," + $(this).val();
				}
			});
			if (codearr == "") {
				parent.layer.msg("请选择要推荐的职位！", 2, 8);
				return false;
			} else {
				$("input[name=pid]").val(codearr);
				$(".edatediv").hide();
				add_class('职位批量推荐', '290', '240', '#infobox6', '');
			}
		}
		
		/* 批量紧急 */
		function urgent() {
			var codeugent = "";
			$(".check_all:checked").each(function() {
				if (codeugent == '') {
					codeugent = $(this).val();
				} else {
					codeugent = codeugent + "," + $(this).val();
				}
			});
			if (codeugent == "") {
				parent.layer.msg("请选择要紧急的职位！", 2, 8);
				return false;
			} else {
				$("input[name=pid]").val(codeugent);
				$(".eurgentdiv").hide();
				add_class('职位批量紧急', '290', '240', '#infobox5', '');
			}
		}
		
		/* 导出职位 */
		function Export() {
			var codewebarr = "";
			$(".check_all:checked").each(function() {  
				if (codewebarr == "") {
					codewebarr = $(this).val();
				} else {
					codewebarr = codewebarr + "," + $(this).val();
				}
			});
			if (codewebarr != "") {
				$("input[name=pid]").val(codewebarr);
			}
			add_class('选择导出字段', '650', '380', '#export', '');
		}
		
		function check_xls() {
			var type = "";
			$(".type:checked").each(function() {  
				if (type == "") {
					type = $(this).val();
				} else {
					type = type + "," + $(this).val();
				}
			});
			if (type == "") {
				parent.layer.msg("请选择导出字段！", 2, 8);
				return false;
			}
			setTimeout(function() {
				$('.myform').submit()
			}, 0);
			layer.closeAll();
		}
		
		/*	批量专业类别（行业、职位分类） */
		function audall3() {
			var codewebarr = "";
			$(".check_all:checked").each(function() { 	
				
				if (codewebarr == "") {
					codewebarr = $(this).val();
				} else {
					codewebarr = codewebarr + "," + $(this).val();
				}
			
			});
			if (codewebarr == "") {
				
				parent.layer.msg("您还未选择任何信息！", 2, 8);
				return false;
				
			} else {
				
				$("input[name=jobid]").val(codewebarr);
				add_class('批量修改职位类别', '320', '280', '#infobox4', '');
				
			}
		}
		function checkmove() {
			if ($("#hy").val() == "") {
				layer.msg("请选择行业类别！", 2, 8);
				return false;
			}
			if ($("#job1_son").val() == "") {
				layer.msg("请选择职位类别！", 2, 8);
				return false;
			}
		}
		
		/* 职位置顶操作判断 */
		function isxs() {
			var xtype = $("#xtype").attr("checked");
			var days = $.trim($("input[name='xsdays']").val());
			layer.closeAll();
			
			if (xtype == "checked") {
				parent.layer.confirm("确定取消该职位置顶？", function() {
					setTimeout(function() {
						$('.xssubmit').submit()
					}, 0);
					parent.layer.load('执行中，请稍候...', 0);
				}, function() {
					layer.closeAll();
				});
			} else {
				if (days < 1) {
					parent.layer.msg("置顶天数不能为空！", 2, 8, function() {
						add_class('职位置顶', '300', '200', '#infobox3', '');
					});
					return false;
				} else {
					parent.layer.confirm("是否确定为该职位增加" + days + "天置顶服务？",function() {
						setTimeout(function() {
							$('.xssubmit').submit()
						}, 0);
						parent.layer.load('执行中，请稍候...', 0);
					}, function() {
						layer.closeAll();
					});
				}
			}
		}
		
		$(document).ready(function() {
			$(".job1").change(function() {
				var job = $(this).val();
				var lid = $(this).attr("lid");
				if (job == "") {
					$("#" + lid + " option").remove()
					$("<option value=''>--请选择--</option>").appendTo("#" + lid);
				}
				lid2 = $("#" + lid).attr("lid");
				if (lid2) {
					$("#" + lid2 + " option").remove();
					$("<option value=''>--请选择--</option>").appendTo("#" + lid2);
				}
				$.post(weburl + "/index.php?m=ajax&c=ajax_job", {
					"str" : job
				}, function(data) {
					if (lid != "" && data != "") {
						$('#' + lid + ' option').remove();
						$(data).appendTo("#" + lid);
					}
				})
			})
		})
		
		/* 自动查询列表相关数据统计 */
		$(document).ready(function() {
			$.get("index.php?m=admin_company_job&c=jobNum", function(data) {
				var datas = eval('(' + data + ')');
				if (datas.jobAllNum) {
					$('.ajaxjoball').html(datas.jobAllNum);
				}
				if (datas.jobStatusNum1) {
					$('.ajaxjobstatus1').html(datas.jobStatusNum1);
				}
				if (datas.jobStatusNum2) {
					$('.ajaxjobstatus2').html(datas.jobStatusNum2);
				}
				if (datas.jobStatusNum3) {
					$('.ajaxjobstatus3').html(datas.jobStatusNum3);
				}
			});
		});
	<?php echo '</script'; ?>
>

</body>
</html><?php }} ?>
