<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-10-31 16:56:45
         compiled from "D:\rcw\uploads\app\template\admin\admin_city.htm" */ ?>
<?php /*%%SmartyHeaderCode:3698073415f9d26cd34c886-70125112%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1f3d94280335b9ea13ba106f061ebd4ed2e3404' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\admin\\admin_city.htm',
      1 => 1576479745,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3698073415f9d26cd34c886-70125112',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'city' => 0,
    'letter' => 0,
    'letter4' => 0,
    'pytoken' => 0,
    'city_row' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5f9d26cd36a555_96411972',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9d26cd36a555_96411972')) {function content_5f9d26cd36a555_96411972($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
>
function delsingle(id,type){
	layer.confirm('删除该城市会导致有关数据无法使用，确认删除？', function(){
		loadlayer();
		$.post("index.php?m=admin_city&c=del",{delid:id,type:type,pytoken:$('#pytoken').val()},function(data){
			parent.layer.closeAll('loading');
			if(data=="1"){
				parent.layer.msg("删除成功！",2, 9,function(){location.reload();});return false;
			}else{
				parent.layer.msg("删除失败！",2, 8,function(){location.reload();});return false;
			}
		});
		return true;
	});
}
function addcity(id,type,level){
	if($(".parent"+id).attr("style")=="display:none"){
		$(".parent"+id).attr("style","display:");
		$("#img"+id).html("<a href=\"javascript:;\" onClick=\"displaycity('"+id+"','"+type+"','"+level+"');\"><img src=\"images/iconv/jian.png\" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"javascript:;\" onclick=\"addson('"+id+"','"+level+"');\"class=\"admin_tj_zl\">+ 添加子类</a>");
	}else{
		$.post("index.php?m=admin_city&c=AddCity",{kid:id,pytoken:$('#pytoken').val()},function(data){
			var data=eval('('+data+')');
			if(data && data.length>0){
				var style='';
				var img='';
				var html='';
				var checked='';
				var option1='';
				var option2='';
				var site1='';
				var site2='';
				var city_ABC = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
				if(type=="2"){
					style="|--------";
				}else{
					style="|----------------";
				}
				for (var i = 0; i < data.length; i++) {
					if(type=='2'){
						img="<b  id=\"img"+data[i].id+"\"><a href=\"javascript:;\" onClick=\"addcity('"+data[i].id+"','3','son');\"><img src=\"images/iconv/jia.png\" /></a></b>";
					}
					html+="<tr  align=\"left\" class=\"parent"+id+"\" id=\""+data[i].id+"\" style=\"display:;\">";
					html+="<td class=\"ud\"> <input type=\"checkbox\" class=\"checkbox_all\" name=\"checkbox_all\" value=\""+data[i].id+"\" onclick=\"get_comindes_jobid();\"></td>";
					html+="<td class=\"ud\"><input type=\"text\" name=\"citysort_"+data[i].id+"\" id=\"citysort_"+data[i].id+"\" value=\""+data[i].sort+"\" class=\"input-text citysort\" size=\"3\"></td>";
					html+="<td class=\"ud\">"+style+"<input class=\"input-text\" type=\"text\" id=\"cityname_"+data[i].id+"\" name=\"cityname_"+data[i].id+"\" value=\""+data[i].name+"\" /> "+img+"</td>";
					if(!data[i].e_name){
						html+="<td class=\"ud\"><input class=\"input-text\" type=\"text\" id=\"citye_name_"+data[i].id+"\" name=\"citye_name_"+data[i].id+"\" value=\"\" /></td>";
					}else{
						html+="<td class=\"ud\"><input class=\"input-text\" type=\"text\" id=\"citye_name_"+data[i].id+"\" name=\"citye_name_"+data[i].id+"\" value=\""+data[i].e_name+"\" /></td>";
					}
					html+="<td class=\"ud\"><select id=\"letter_"+data[i].id+"\" name=\"letter_"+data[i].id+"\">";
					for (var j = 0; j <city_ABC.length ; j++) {
						if(data[i].letter==city_ABC[j]){
							checked="selected";
						}else{
							checked="";
						}
						html+="<option "+checked+">"+city_ABC[j]+"</option>";
					}
					if(data[i].display=='1'){
						option1="selected";
						option2="";
					}else{
						option1="";
						option2="selected";
					}
					html+=" <td class=\"ud\"><select id=\"display_"+data[i].id+"\" name=\"display_"+data[i].id+"\"><option value=\"1\" "+option1+" >是</option><option value=\"0\" "+option2+">否</option></select></td> ";
					html+="<td class=\"ud\"><input class=\"admin_submit4\" onclick=\"checkedtr('"+data[i].id+"');\" type=\"button\" name=\"update\" value=\"更新\" /> | <a href=\"javascript:;\"><img src=\"images/iconv/del_icon2.gif\" onclick=\"delsingle('"+data[i].id+"','2');\" alt=\"删除\" title=\"删除\"/></a></td>";
					html+="</select> </td>";
					html+="</tr>";
				}



				$("#"+id).after(html);
				$("#img"+id).html("<a href=\"javascript:;\" onClick=\"displaycity('"+id+"','"+type+"','"+level+"');\"><img src=\"images/iconv/jian.png\" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"javascript:;\" onclick=\"addson('"+id+"','"+level+"');\"class=\"admin_tj_zl\">+ 添加子类</a>");
			}else{
				$("#img"+id).html("<a href=\"javascript:;\" onClick=\"displaycity('"+id+"','"+type+"','"+level+"');\"><img src=\"images/iconv/jian.png\" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"javascript:;\" onclick=\"addson('"+id+"','"+level+"');\"class=\"admin_tj_zl\">+ 添加子类</a>");
			}
		});
	}
}
function displaycity(id,type,level)
{
	if(level=="parent"){
		$(".parent"+id).each(function(){
			var sonid = $(this).attr("id");
			$(".parent"+sonid).attr("style","display:none");
		});
	}
	$(".parent"+id).attr("style","display:none");
	$("#img"+id).html("<a href=\"javascript:;\" onClick=\"addcity('"+id+"','"+type+"','"+level+"');\"><img src=\"images/iconv/jia.png\" /></a>");
}
function addson(id,level){
	var html="";
	var sel="";
	if(level=="top"){
		var style="";
	}else if(level=="parent")
	{
		var style="|--------";
	}else{
		var style="|----------------";
	}
	html+='<tr align="left" id="<?php echo $_smarty_tpl->tpl_vars['city']->value['id'];?>
" style="display:" class="parent'+id+'">';
	html+='<td class="ud"> </td>';
	html+='<td class="ud"><a href="javascript:;" onclick="javascript:this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode);"><img src="images/iconv/del_icon2.gif" alt="删除当前"></a></td>';
	html+='<td class="ud">'+style+'<input class="input-text" type="text" name="addcityname_'+id+'[]" value="" /></td>';
	html+='<td class="ud"><input class="input-text" type="text" name="addcitye_name_'+id+'[]" value="" /></td>';
	'<?php  $_smarty_tpl->tpl_vars['letter4'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['letter4']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['letter']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['letter4']->key => $_smarty_tpl->tpl_vars['letter4']->value) {
$_smarty_tpl->tpl_vars['letter4']->_loop = true;
?>'
	sel+='<option value="<?php echo $_smarty_tpl->tpl_vars['letter4']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['letter4']->value;?>
</option>';
	'<?php } ?>'
	html+='<td><select name="addletter_'+id+'[]">'+sel+'</select> </td>';
	html+='<td class="ud"><select name="adddisplay_'+id+'[]"><option value="1">是</option><option value="0">否</option></select></td> ';
	html+='<td class="ud"></td>';
	html+='<td class="ud"></td></tr>';

	$("#"+id).after(html);
	$("#"+id).find("input[type='checkbox']").attr("checked", true);
	get_comindes_jobid();
}
function checkedtr(id){
	var name = $("#cityname_"+id).val();
	var e_name = $("#citye_name_"+id).val();
	var c_sort = $("#citysort_"+id).val();
	var letter = $("#letter_"+id).val();
	var display = $("#display_"+id).val();
	var sitetype = $("#sitetype_"+id).val();
	if(name == "")
	{
		parent.layer.msg("城市名称不能为空！",2, 8);
		return false;
	}else{
		if(sitetype!="1")
		{
			sitetype="0";
		}
		loadlayer();
		$.post("index.php?m=admin_city&c=Single",{id:id,name:name,e_name:e_name,c_sort:c_sort,letter:letter,display:display,sitetype:sitetype,pytoken:$('#pytoken').val()},function(data){
			parent.layer.closeAll('loading');
			if(data=="2")
			{
				parent.layer.msg("城市名称不能为空！",2, 8);
			}else{
				parent.layer.msg("更新成功！",2, 9);
			}
		});
	}
}
function chachong(page,type){
	var pytoken=$("#pytoken").val();
	$.post("index.php?m=admin_city&c=ajaxchachong", {page:page,pytoken:pytoken},function(edata) {
		var edata=eval('('+edata+')');
		var data=edata.list;
		var html='';
		if(data){
			for(var i=0;i<data.length;i++){
				html+='<tr><td class="ud">'+data[i].id+'</td><td align="left" class="imghide">'+data[i].name+'</td><td class="imghide" align="left"><span onClick="checkename(\''+data[i].id+'\');" id="ename'+data[i].id+'" style="cursor:pointer;">'+data[i].e_name+'</span><input class="input-text hidden cityename" type="text" id="inputename'+data[i].id+'" size="10" value="'+data[i].e_name+'" onBlur="subename(\''+data[i].id+'\',\'index.php?m=admin_city&c=ajax\');"><input type="hidden" id="inputname'+data[i].id+'" value="'+data[i].name+'"></tr>';
			}
			html+='<tr><td colspan="3" style="text-align:center"><input class="admin_button" type="button" name="add" onClick="chachong(\''+edata.page+'\',\'1\')" value="换一批" /></td></tr>';
			$('#chachong').html(html);
			if(type!='1'){
				$.layer({
					type : 1,
					title : '拼音重复类别', 
					closeBtn : [0 , true],
					border : [10 , 0.3 , '#000', true],
					area : ['650px','auto'],
					page : {dom :"#chongfu_div"}
				});
			}
		}
	});
}
function pinyin(msg,status,page,pagesize){
	var pytoken=$("#pytoken").val();
	if(status=='2'){
		parent.layer.confirm(msg,function(){
			$.post('index.php?m=admin_city&c=ajaxpinyin',{page:page,pagesize:pagesize,pytoken:pytoken},function(data){
				var data=eval('('+data+')');
				pinyin(data.msg,data.errcode,data.page,data.pagesize);
			})
		});
	}else if(status=='8'){
		var ii = parent.layer.msg(msg,5000,{icon:16,shade:0.01});
		$.post('index.php?m=admin_city&c=ajaxpinyin',{page:page,pagesize:pagesize,pytoken:pytoken},function(data){
			parent.layer.close(ii);
			var data=eval('('+data+')');
			pinyin(data.msg,data.errcode,data.page,data.pagesize);
		})
	}else{
		parent.layer.close(ii);
		parent.layer.alert(msg,9);
		location.reload();
	}
}
<?php echo '</script'; ?>
>
<title>后台管理</title>
</head>

<body class="body_ifm">
	
	<span id="temp"></span>
	
	<div class="infoboxp">
		
		<div class="admin_new_tip">
			<a href="javascript:;" class="admin_new_tip_close"></a>
			<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
		    <div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
		    <div class="admin_new_tip_list_cont">
		      	<div class="admin_new_tip_list">该页面展示了网站地区设置信息，可对地区设置编辑修改操作。</div>
		       	<div class="admin_new_tip_list">多城市显示只支持二级城市，增加子类需勾选父级城市！</div>
		    </div>
  		</div>
  		
	  	<div class="admin_new_search_box">
	  		<a href="javascript:;" onclick="pinyin('未设置拼音的相关分类将根据中文名称自动生成拼音？','2','0','100');" class="admin_new_cz_tj" style="margin-left:0px;">生成拼音</a>
	  		<a href="javascript:;" onclick="chachong('0','')" class="admin_new_cz_tj" style="margin-left:0px;">一键查重</a>
	  	</div>
 
  		<div class="clear"></div>
  		
		<div class="" style="margin-top:20px;">
		 
  			<div class="table-list">
    			<div class="admin_table_border">
      				
      				<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
      				<form action="index.php?m=admin_city&c=upp" method="post" target="supportiframe" id='myform'>
      					<input type="hidden" id="pytoken" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
				        <table width="100%">
				        	
				        	<thead>
				            	<tr class="admin_table_top">
					              	<th width="60" align="left">选择</th>
					              	<th width="160" align="left">城市排序</th>
					              	<th align="left">城市名称</th>
					              	<th align="left">英文名称/拼音</th>
					              	<th align="left">关联字母</th>
					              	<th align="left">前台显示</th>
					              	<th width="180" align="left" class="admin_table_th_bg">操作</th>
				            	</tr>
				          	</thead>
				          	
				          	<tbody>
				          		<?php  $_smarty_tpl->tpl_vars['city_row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['city_row']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['city_row']->key => $_smarty_tpl->tpl_vars['city_row']->value) {
$_smarty_tpl->tpl_vars['city_row']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['city_row']->key;
?>
				          		<tr align="left" id="<?php echo $_smarty_tpl->tpl_vars['city_row']->value['id'];?>
" style="display:" <?php if (($_smarty_tpl->tpl_vars['key']->value+1)%2=='0') {?>class="admin_com_td_bg"<?php }?>>
				            		<td class="ud"><input type="checkbox" class="checkbox_all" name="checkbox_all" value="<?php echo $_smarty_tpl->tpl_vars['city_row']->value['id'];?>
"></td>
				            		<td class="ud"><input type="text" name="citysort_<?php echo $_smarty_tpl->tpl_vars['city_row']->value['id'];?>
" id="citysort_<?php echo $_smarty_tpl->tpl_vars['city_row']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['city_row']->value['sort'];?>
" class="input-text  citysort"></td>
				            		<td class="ud">
				            			<input class="input-text" type="text" id="cityname_<?php echo $_smarty_tpl->tpl_vars['city_row']->value['id'];?>
" name="cityname_<?php echo $_smarty_tpl->tpl_vars['city_row']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['city_row']->value['name'];?>
" />
				              			<b  id="img<?php echo $_smarty_tpl->tpl_vars['city_row']->value['id'];?>
"><a href="javascript:;" onClick="addcity('<?php echo $_smarty_tpl->tpl_vars['city_row']->value['id'];?>
','2','parent');"><img src="images/iconv/jia.png" /></a></b>
				              		</td>
				            		<td class="ud"><input class="input-text" type="text" id="citye_name_<?php echo $_smarty_tpl->tpl_vars['city_row']->value['id'];?>
" name="citye_name_<?php echo $_smarty_tpl->tpl_vars['city_row']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['city_row']->value['e_name'];?>
" /></td>
				            		<td class="ud">
				            			<select id="letter_<?php echo $_smarty_tpl->tpl_vars['city_row']->value['id'];?>
" name="letter_<?php echo $_smarty_tpl->tpl_vars['city_row']->value['id'];?>
">
							                <?php  $_smarty_tpl->tpl_vars['letter4'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['letter4']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['letter']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['letter4']->key => $_smarty_tpl->tpl_vars['letter4']->value) {
$_smarty_tpl->tpl_vars['letter4']->_loop = true;
?>
							                <option value="<?php echo $_smarty_tpl->tpl_vars['letter4']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['letter4']->value==$_smarty_tpl->tpl_vars['city_row']->value['letter']) {?> selected=selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['letter4']->value;?>
</option>
							                <?php } ?>
						            	</select>
						            </td>
						            <td class="ud">
						            	<select id="display_<?php echo $_smarty_tpl->tpl_vars['city_row']->value['id'];?>
" name="display_<?php echo $_smarty_tpl->tpl_vars['city_row']->value['id'];?>
">
						                	<option value="1" <?php if ($_smarty_tpl->tpl_vars['city_row']->value['display']=='1') {?>selected=selected<?php }?>>是</option>
						                	<option value="0" <?php if ($_smarty_tpl->tpl_vars['city_row']->value['display']=='0') {?>selected=selected<?php }?>>否</option>
						              	</select>
						            </td>
				            		<td class="ud">
				            			<input class="admin_button" type="button" name="update" value="更新" onClick="checkedtr('<?php echo $_smarty_tpl->tpl_vars['city_row']->value['id'];?>
');"/>
				            			<a href="javascript:;" onClick="delsingle('<?php echo $_smarty_tpl->tpl_vars['city_row']->value['id'];?>
','1')" class="admin_cz_sc">删除</a>
				            		</td>
				          		</tr>
				          		<?php } ?>
				          		<tr align="left" id="0">
				            		<td colspan="7"><a href="javascript:;" onClick="addson('0','top');"><img src="images/iconv/jia.png" />添加顶级分类</a></td>
				          		</tr>
					          	<thead>
					            <tr>
					              <td width="70" colspan="1"><input type="checkbox" id="checkbox_all" name="checkbox_all" value="">
					              <label for="checkbox_all">全选</label>&nbsp;
					                <input type="hidden" name="id" id="hiddid_id" value="">
					              </td>
					              <td width="60" colspan="1"><input class="admin_button"  type="button" name="delall" onClick="return really('checkbox_all')"  value="删除选中" />
					              </td>
					              <td width="60" colspan="5"><input class="admin_button"  type="submit" name="updateall"   value="保存操作" />
					              </td>
					            </tr>
					          	</thead>
					     	</tbody>
				        </table>
					</form>
				</div>
  			</div>
		</div>
	</div>

	<div id="trid" style="display:none">
  		<select name="letter">
    		<?php  $_smarty_tpl->tpl_vars['letter4'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['letter4']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['letter']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['letter4']->key => $_smarty_tpl->tpl_vars['letter4']->value) {
$_smarty_tpl->tpl_vars['letter4']->_loop = true;
?>
    		<option value="<?php echo $_smarty_tpl->tpl_vars['letter4']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['letter4']->value;?>
</option>
    		<?php } ?>
  		</select>
	</div>
	
	<div id="chongfu_div" style="display:none;" class="job_box_div">
		<div class="table-list">
			<table class="table_form " style="width:100%">
				<thead>
					<tr class="admin_table_top">
						<th>ID</th>
						<th align="left">类别名称</th>
						<th align="left">英文/拼音<span class="clickup">(点击修改)</span></th>
					</tr>
				</thead>
				<tbody id="chachong"></tbody>
			</table>
		</div>
	</div>
	<?php echo '<script'; ?>
>
		$(document).ready(function(){
			$(".checkbox_all").click(function(){
				get_comindes_jobid();
			})
			$("#checkbox_all").click(function(){
				var checka=$("#checkbox_all").attr("checked");
				if(checka!="checked"){
					checka=false;
				}
				$(".checkbox_all").attr("checked",checka);
				get_comindes_jobid();
			})
		})
		function get_comindes_jobid(){
			var codewebarr="";
			$(".checkbox_all:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
				if(codewebarr==""){codewebarr=$(this).val();}else{codewebarr=codewebarr+","+$(this).val();}
			});
			$("#hiddid_id").val(codewebarr);
		}
	<?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
