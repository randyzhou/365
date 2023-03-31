<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-01 01:13:00
         compiled from "D:\rcw\uploads\app\template\member\com\partadd.htm" */ ?>
<?php /*%%SmartyHeaderCode:21071017465f9d9b1c667765-08970714%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ffafb78fb660f9243f15feb7bc5b56c271ce3e9' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\member\\com\\partadd.htm',
      1 => 1578392215,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21071017465f9d9b1c667765-08970714',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'statis' => 0,
    'todayEnd' => 0,
    'city_type' => 0,
    'row' => 0,
    'partdata' => 0,
    'v' => 0,
    'partclass_name' => 0,
    'part_morning' => 0,
    'part_noon' => 0,
    'part_afternoon' => 0,
    'part_sex' => 0,
    'j' => 0,
    'city_index' => 0,
    'city_name' => 0,
    'config' => 0,
    'company' => 0,
    'com_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5f9d9b1c6ae670_30339951',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9d9b1c6ae670_30339951')) {function content_5f9d9b1c6ae670_30339951($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<div class="w1000">
	<div class="admin_mainbody"> <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

   <div class="com_tit"><span class="com_tit_span">新增兼职</span></div> <div class=right_box>
		<div class=admincont_box>
			
			<div class="com_body">
            <div class="com_new_tip"> 
          <span class="com_new_tip_h">温馨小提示</span>贵公司还可以发布（<span class="f60"><?php if ($_smarty_tpl->tpl_vars['statis']->value['vip_etime']>$_smarty_tpl->tpl_vars['todayEnd']->value||$_smarty_tpl->tpl_vars['statis']->value['vip_etime']=="0") {
if ($_smarty_tpl->tpl_vars['statis']->value['rating_type']==1) {
echo $_smarty_tpl->tpl_vars['statis']->value['job_num'];
} else { ?>不限<?php }
} else { ?>0<?php }?></span>）条兼职信息<?php if ($_smarty_tpl->tpl_vars['statis']->value['vip_etime']<time()&&$_smarty_tpl->tpl_vars['statis']->value['vip_etime']!=0) {?>
								您的会员已到期，为了更好的招聘人才，请先<a href="index.php?c=right" class="cblue"> 升级会员</a>！
							<?php }?> 
                            </div>
     
			
				<div class="com_release_box">
				<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
            <form name="MyForm" target="supportiframe" method="post" action="index.php?c=partadd&act=save" onsubmit="return CheckPost_part();" class="layui-form">
              <input type="hidden" id="cionly" name="cionly" value="<?php if (empty($_smarty_tpl->tpl_vars['city_type']->value)) {?>1<?php }?>">
              <ul>
                <li>
                  <div class="com_release_name"><i class="ff0">*</i> 兼职名称</div>
                  <div class="com_release_cont_text">
                    <input type="text" placeholder="兼职名称" size="45" id='name' name="name" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
" class="layui-input" >
                  </div>
                </li>
                <li>
                  <div class="com_release_name"><i class="ff0">*</i> 兼职类型</div>
                  <div class="com_release_cont">
                    <div class="com_release_selectbox">
                  <div class="layui-input-inline">
                    <select name="type" lay-filter="type" id="type">
                    <option value=''>请选择</option>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['partdata']->value['part_type']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['type']==$_smarty_tpl->tpl_vars['v']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['partclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option><?php } ?></select>
                  </div>
                  </div>
                </li>
                <li>
                  <div class="com_release_name"><i class="ff0">*</i> 招聘人数 </div>
                  <div class="com_release_cont">
                    <div class="layui-input-inline inline">
                      <input type="text" size="10" name="number" id="number" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['number'];?>
" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" placeholder="招聘人数" class="layui-input">
                    </div>
                    <div class="inline">人</div>
                  </div>
                </li>
                <li>
                  <div class="com_release_name"><i class="ff0">*</i> 兼职时间</div>
                  <div class="com_release_cont">
                    <table class="tjob_timetable" cellpadding="0" cellspacing="1" >
                      <tr>
                        <th>&nbsp;</th>
                        <th>周一</th>
                        <th>周二</th>
                        <th>周三</th>
                        <th>周四</th>
                        <th>周五</th>
                        <th>周六</th>
                        <th>周日</th>
                      </tr>
                      <tr>
                        <th>上午</th>
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['part_morning']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                        <td><input data-mark='isneed' name='worktime[]' class="check_all" id='worktime<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
' type="checkbox" lay-filter="partAll" <?php if (in_array($_smarty_tpl->tpl_vars['v']->value,$_smarty_tpl->tpl_vars['row']->value['worktime_n'])) {?>checked="checked"<?php }?>value='<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
' lay-skin="primary" /></td>
                        <?php } ?> </tr>
                      <tr>
                        <th>下午</th>
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['part_noon']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                        <td><input data-mark='isneed' name='worktime[]' class="check_all" id='worktime<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
' type="checkbox" lay-filter="partAll" <?php if (in_array($_smarty_tpl->tpl_vars['v']->value,$_smarty_tpl->tpl_vars['row']->value['worktime_n'])) {?>checked="checked"<?php }?> value='<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
' lay-skin="primary" /></td>
                        <?php } ?> </tr>
                      <tr>
                        <th>晚上</th>
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['part_afternoon']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                        <td><input data-mark='isneed' name='worktime[]' class="check_all" id='worktime<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
' type="checkbox" lay-filter="partAll" <?php if (in_array($_smarty_tpl->tpl_vars['v']->value,$_smarty_tpl->tpl_vars['row']->value['worktime_n'])) {?>checked="checked"<?php }?> value='<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
' lay-skin="primary" /></td>
                        <?php } ?> </tr>
                      <tr>
                        <td colspan="8"><input id='ckAll' name='ckAll' value="1" type="checkbox" lay-filter="ckAll"  lay-skin="primary">
                          全选</td>
                      </tr>
                    </table>
                    <span class="com_Release_job_qx"> </span> </div>
                </li>
                <li>
                  <div class="com_release_name"><i class="ff0">*</i> 兼职有效期</div>
                  <div class="com_release_cont">
                    <input id="sdate" class="input-text com_info_text com_info_text_time com_info_textw158 item_date" type="text" readonly="" size="15" value="<?php if ($_smarty_tpl->tpl_vars['row']->value['sdate']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['sdate'],'%Y-%m-%d');
}?>" name="sdate" placeholder="兼职开始日期"/>
                    <span class="part_zhi">到</span>
                    
					<input id="edate" class="input-text com_info_text com_info_text_time com_info_textw158 item_date" type="text" readonly="" size="15" value="<?php if ($_smarty_tpl->tpl_vars['row']->value['edate']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['edate'],'%Y-%m-%d');
}?>" name="edate" placeholder="兼职结束日期" <?php if ($_smarty_tpl->tpl_vars['row']->value['edate']==0) {?>style="display:none"<?php }?>/>

                    <input type="checkbox" value='1' id="timetype" name="timetype" class="input-text" <?php if ($_smarty_tpl->tpl_vars['row']->value['edate']==0) {?>checked="checked"<?php }?> onclick="change()" lay-filter="timetype" title="长期招聘" lay-skin="primary"/>
                  </div>
                  <span id="by_edate" class="errordisplay">截止日期要大于当前日期</span> </li>
                
                <li>
                  <div class="com_release_name"><i class="ff0">*</i> 薪资水平：</div>
                  <div class="com_release_cont">
                   <input type="text" size="25" name="salary" id="salary" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['salary'];?>
" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" style="float:left" class="com_info_text com_info_text_w103 " placeholder="薪资水平">
                   <div style="display:inline-block;width:100px;">
                      <div class="layui-input-inline">
                        <select name="salary_type" id="salary_type" lay-filter="salary_type">
						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['partdata']->value['part_salary_type']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['salary_type']==$_smarty_tpl->tpl_vars['v']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['partclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option><?php } ?>
						</select>
                      </div>
                      </div>
                  </div>
                </li>
                <li class="job_add_bc">
                  <div class="com_release_name"><i class="ff0">*</i> 薪资结算：</div>
           
                    <div class="com_release_selectbox">
                 <div class="layui-input-inline">
                        <select name="billing_cycle" id="billing_cycle" lay-filter="billing_cycle"><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['partdata']->value['part_billing_cycle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['billing_cycle']==$_smarty_tpl->tpl_vars['v']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['partclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option><?php } ?></select>
                      </div>
                    </div>
                </li>
                <li>
                  <div class="com_release_name"><i class="ff0">*</i> 兼职内容：</div>
                  <div class=textbox>
 					<?php echo '<script'; ?>
 id="content" name="content" type="text/plain" style="width:600px; height:200px;"> <?php echo $_smarty_tpl->tpl_vars['row']->value['content'];?>
 <?php echo '</script'; ?>
>
                  </div>
                </li>
                <li class="job_add_bc">
                  <div class="com_release_name">性别要求：</div>
                  <div class="com_release_cont">
                  
                      <div class="layui-input-inline">
                        <select name="sex" lay-filter="sex" id="sex"><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['part_sex']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['sex']==$_smarty_tpl->tpl_vars['j']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['part_sex']->value[$_smarty_tpl->tpl_vars['j']->value];?>
</option><?php } ?>
                  </select>
                      </div>
                  
                    <span id="by_ltsexid" class="errordisplay">请选择性别</span> </div>
                </li>
                <li>
                  <div class="com_release_name"><i class="ff0">*</i> 工作地点：</div>
                  <div class="com_release_cont">
                   <div class="layui-input-inline">
                        <select name="provinceid" id="provinceid" lay-filter="citys">
                          <option value="">请选择</option><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['provinceid']==$_smarty_tpl->tpl_vars['v']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option><?php } ?></select>
                      </div>
                      <div class="layui-input-inline">
                        <select name="cityid" lay-filter="citys" id="cityid"><option value="">请选择</option><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value[$_smarty_tpl->tpl_vars['row']->value['provinceid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['cityid']==$_smarty_tpl->tpl_vars['v']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
 </option><?php } ?> </select></div>
                      <div class="layui-input-inline">
                     <select name="three_cityid" lay-filter="three_cityid" id="three_cityid"><option value="">请选择</option><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value[$_smarty_tpl->tpl_vars['row']->value['cityid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['three_cityid']==$_smarty_tpl->tpl_vars['v']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
 </option><?php } ?></select>
                      </div>
                  </div>
                </li>
                <li>
                  <div class="com_release_name"><i class="ff0">*</i> 详细地址：</div>
                  <div class="com_release_cont">
                    <input type="text" size="45" id='address' name="address" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['address'];?>
" class="com_info_text" onblur="localsearch('全国');" style="width:400px;" placeholder="详细地址">
                  </div>
                  <div class="clear"></div>
                  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['mapurl'];?>
"><?php echo '</script'; ?>
> 
                  <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/map.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
                  <div id="map_container" style="width:70%;height:300px; left:0px;"></div>
                  <input name="x" id="map_x" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['x'];?>
">
                  <input name="y" id="map_y" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['y'];?>
">
                </li>
                <li>
                  <div class="com_release_name"><i class="ff0">*</i> 联系人：</div>
                  <div class="com_release_cont">
                    <input type="text" placeholder="联系人" size="45" id='linkman' name="linkman" value="<?php if ($_smarty_tpl->tpl_vars['row']->value['linkman']) {
echo $_smarty_tpl->tpl_vars['row']->value['linkman'];
} else {
echo $_smarty_tpl->tpl_vars['company']->value['linkman'];
}?>" class="com_info_text" maxlength="12">
                  </div>
                </li>
                <li>
                  <div class="com_release_name"><i class="ff0">*</i> 联系手机：</div>
                  <div class="com_release_cont">
                    <input type="text" size="45" id='linktel' name="linktel" value="<?php if ($_smarty_tpl->tpl_vars['row']->value['linktel']) {
echo $_smarty_tpl->tpl_vars['row']->value['linktel'];
} else {
echo $_smarty_tpl->tpl_vars['company']->value['linktel'];
}?>" onkeyup="this.value=this.value.replace(/[^0-9-]/g,'')" class="com_info_text" maxlength="12" placeholder="联系手机">
                  </div>
                </li>
                <li> 
                <input name="r_status" id="r_status" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['company']->value['r_status'];?>
"/>
                <input name="id" id="id" value="<?php echo $_GET['id'];?>
" type="hidden"/>
                <input class="btn_01" type="submit" name="submit" value=" 提 交 操 作 "></li>
                
              </ul>
           
            </form>
          </div>
        </div>
        <br>
        </div>
    </div>
  </div>
</div>

<?php echo '<script'; ?>
>
var map=new BMap.Map("map_container");
setLocation('map_container',116.404,39.915,"map_x","map_y");
	$(document).ready(function() {
		<?php if (($_smarty_tpl->tpl_vars['row']->value['x']==''||$_smarty_tpl->tpl_vars['row']->value['y']=='')&&$_smarty_tpl->tpl_vars['row']->value['address']!='') {?>
			$("#address").val("<?php echo $_smarty_tpl->tpl_vars['row']->value['address'];?>
");
			var address="<?php echo $_smarty_tpl->tpl_vars['row']->value['address'];?>
";
			localsearch('<?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['row']->value['provinceid']];
echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['row']->value['cityid']];
echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['row']->value['three_cityid']];?>
'+address.replace(/\s+/g,""));
		<?php } elseif ($_smarty_tpl->tpl_vars['row']->value['x']!=''&&$_smarty_tpl->tpl_vars['row']->value['y']!='') {?>
			setLocation('map_container',<?php echo $_smarty_tpl->tpl_vars['row']->value['x'];?>
,<?php echo $_smarty_tpl->tpl_vars['row']->value['y'];?>
,"map_x","map_y");
		<?php } else { ?>
			//根据IP到城市开始
			function myFun(result){
				var cityName = result.name;
				map.setCenter(cityName);
			}
			var myCity = new BMap.LocalCity();
			myCity.get(myFun);
			//根据IP到城市结结束
		<?php }?>
     	var worktime='<?php echo $_smarty_tpl->tpl_vars['row']->value['workcishu'];?>
';
    	if(worktime==21){
      		$("#ckAll").prop("checked", true);
      		form.render('checkbox'); 
	    }else{
	      	$("#ckAll").prop("checked", false);
	      	form.render('checkbox'); 
	    }
	});
	var local ;
    function localsearch(city){
	    if($("#address").val()!=$("#address").attr('placeholder')){
		    if($("#address").val()==""){
				layer.msg('请输入详细地址！', 2, 8);return false;
			}
			
			map.centerAndZoom(new BMap.Point(116.404, 39.915), 4);
			
			var province = $("#provinceid").find("option:selected").text().replace("请选择", "");	
			var city = $('#cityid').find("option:selected").text().replace("请选择", "");
			var three_city = $('#three_cityid').find("option:selected").text().replace("请选择", "");

			var local = new BMap.LocalSearch(map, {
				renderOptions: {
					map: map
				}
			});
			local.clearResults();
			local.search(province+city+three_city+$("#address").val().replace(/\s+/g,""));
	
		}
    
	}
	function getLocalResult(){
		var address=$.trim($("#address").val());
		var points=local.getResults();
		var lngLat=points.getPoi(0).point;
		setLocation('map_container',lngLat.lng,lngLat.lat,"map_x","map_y");
		document.getElementById("map_x").value=lngLat.lng;
		document.getElementById("map_y").value=lngLat.lat;
	}
	function setLocation(id,x,y,xid,yid){
		var data=get_map_config();
		var config=eval('('+data+')');
		var rating,map_control_type,map_control_anchor;
		if(!x && !y){x=config.map_x;y=config.map_y;}
		var point = new BMap.Point(x,y);
		var marker = new BMap.Marker(point);
		var opts = {type:BMAP_NAVIGATION_CONTROL_LARGE}
		map.enableScrollWheelZoom(true);
		map.addControl(new BMap.NavigationControl(opts));
		map.centerAndZoom(point, 15);
		map.addOverlay(marker);
		map.addEventListener("click",function(e){
		   var info = new BMap.InfoWindow('', {width: 260});
			var projection = this.getMapType().getProjection();
			var lngLat = e.point;
			document.getElementById(xid).value=lngLat.lng;
			document.getElementById(yid).value=lngLat.lat;
			map.clearOverlays();
			var point = new BMap.Point(lngLat.lng,lngLat.lat);
			var marker = new BMap.Marker(point);
			map.addOverlay(marker);
		});
	}
<?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
>
layui.use(['form', 'laydate'], function(){
    var form = layui.form,
		laydate = layui.laydate,
		$ = layui.$,
		url = weburl+"/index.php?m=ajax&c=get_city_option";  

	 //全选  
      form.on('checkbox(ckAll)', function(data){  
        var child = $(data.elem).parents('table').find('tbody input[type="checkbox"]');  
        child.each(function(index, item){  
          item.checked = data.elem.checked;  
        });  
        form.render('checkbox');  
      });  
      form.on('checkbox(partAll)',function(data){
         var item = $(".check_all");
         for (var i = 0; i < item.length; i++) {
        if (item[i].checked == false) {
          $("#ckAll").prop("checked", false);
            form.render('checkbox');
            break;
          }
        } 
        var all=item.length;//选择本页面   全选自动选中
        for (var i = 0; i < item.length; i++) {
          if (item[i].checked == true) {
            all--;
          }
        }
        if(all==0){
          $("#ckAll").prop("checked", true);
          form.render('checkbox');  
        } 
      })	
	form.on('checkbox(timetype)', function(data){
		if(data.elem.checked){
			$("#edate").hide();
			$("#dline").hide();
		}else{
			$("#dline").show();
			$("#edate").show();
		}
	 });
	
	lay('.item_date').each(function(){
		laydate.render({
		  elem: this
		  ,trigger: 'click'
		});
	  });

  });
<?php echo '</script'; ?>
> 

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
/js/part.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 language=javascript src='<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/data/plus/city.cache.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language=javascript src='<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/city.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
'><?php echo '</script'; ?>
>
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
	var editor = UE.getEditor('content',{
		toolbars:[[ 'Source','|', 'Undo', 'Redo','Bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'fontfamily', 'fontsize',  'forecolor', 'backcolor', 'removeformat', 'autotypeset', 'pasteplain', '|','insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc', '|','simpleupload', '|', 'indent', '|','justifyleft', 'justifycenter', 'justifyright', 'justifyjustify']],wordCount:false,elementPathEnabled:false,initialFrameHeight:200
	});
<?php echo '</script'; ?>
>
 
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
