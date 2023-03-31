<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-11 15:20:52
         compiled from "D:\rcw\uploads\app\template\wap\member\user\addexpect.htm" */ ?>
<?php /*%%SmartyHeaderCode:7798639005fab90d48292a0-69225473%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '473078866ac5cffa676cb91e6262a599be6eca85' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\wap\\member\\user\\addexpect.htm',
      1 => 1578392215,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7798639005fab90d48292a0-69225473',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'config_wapdomain' => 0,
    'wap_style' => 0,
    'row' => 0,
    'industry_name' => 0,
    'userclass_name' => 0,
    'job_type' => 0,
    'job_index' => 0,
    'v' => 0,
    'job_name' => 0,
    'key' => 0,
    'vv' => 0,
    'twok' => 0,
    'city_type' => 0,
    'city_index' => 0,
    'city_name' => 0,
    'industry_index' => 0,
    'userdata' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fab90d48a1c83_10201889',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fab90d48a1c83_10201889')) {function content_5fab90d48a1c83_10201889($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/member/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/wap_tck.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
/js/mui/css/mui.picker.min.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
/js/mui/css/mui.poppicker.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/style.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/css/cmc.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />

<div id="app" class="mui-views">
	<div class="mui-view">
		<div class="mui-pages"></div>
	</div>
</div>
<!--页面主结构结束-->
<!--单页面开始-->
<div id="main" class="mui-page">
	<!--页面主内容区开始-->
	<div class="mui-page-content">
		<div class="mui-scroll-wrapper">
			<div class="mui-scroll">
				<ul class="yunset_list mt15">
					<li class="yunset_list_text"><span class="yunset_list_name">期望岗位<i class="yunset_list_bt">*</i></span > <span class="yunset_list_commentary"><input type="text" name="name" id="name"  value="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
" placeholder="请输入期望岗位"></span></li>
					<li>
						<a href="#jobclasshtml"><span class="yunset_list_name">工作职能<i class="yunset_list_bt">*</i></span ><span class="yunset_list_commentary yunset_list_js" id="jobnameshow"><?php echo mb_substr($_smarty_tpl->tpl_vars['row']->value['job_classname'],0,16,'utf-8');?>
</span></a>
						<input type="hidden" name="job_classid" id="job_classid" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['job_classid'];?>
" />
					</li>
				</ul>
				<ul class="yunset_list mt15">
					
					<li>
						<a href="#cityclasshtml"><span class="yunset_list_name">期望城市<i class="yunset_list_bt">*</i></span ><span class="yunset_list_commentary yunset_list_js" id="citynameshow"><?php echo mb_substr($_smarty_tpl->tpl_vars['row']->value['city_classname'],0,16,'utf-8');?>
</span></a>
						<input type="hidden" name="city_classid" id="city_classid" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['city_classid'];?>
" />
					</li>
					<li>
						<a href="#salaryhtml"><span class="yunset_list_name">期望薪资<i class="yunset_list_bt">*</i></span > <span class="yunset_list_commentary" id="salaryshow"><?php echo $_smarty_tpl->tpl_vars['row']->value['minsalary'];
if ($_smarty_tpl->tpl_vars['row']->value['maxsalary']) {?>-<?php echo $_smarty_tpl->tpl_vars['row']->value['maxsalary'];?>
元/月<?php } else { ?>元以上/月<?php }?></span></a>
					</li>
                    <li><span class="yunset_list_name">从事行业</span>
						<span class="yunset_list_commentary">
						<button id='hyPicker' class="mui-btn mui-btn-block" type='button' data-hy="<?php echo $_smarty_tpl->tpl_vars['row']->value['hy'];?>
"><?php if ($_smarty_tpl->tpl_vars['industry_name']->value[$_smarty_tpl->tpl_vars['row']->value['hy']]) {
echo $_smarty_tpl->tpl_vars['industry_name']->value[$_smarty_tpl->tpl_vars['row']->value['hy']];
} else { ?>不限<?php }?></button>
						<input type="hidden" id="hy" name="hy" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['hy'];?>
">
						</span>
					</li>
				</ul>

				<ul class="yunset_list mt15">
					<li><span class="yunset_list_name">工作性质<i class="yunset_list_bt">*</i></span ><span class="yunset_list_commentary">
				<button id='typePicker' class="mui-btn mui-btn-block" type='button' data-type="<?php echo $_smarty_tpl->tpl_vars['row']->value['type'];?>
"><?php if ($_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['row']->value['type']]) {
echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['row']->value['type']];
} else { ?>请选择工作性质<?php }?></button>
				<input type="hidden" id="type" name="type" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['type'];?>
">
				</span></li>
					<li><span class="yunset_list_name">到岗时间<i class="yunset_list_bt">*</i></span ><span class="yunset_list_commentary">
				<button id='reportPicker' class="mui-btn mui-btn-block" type='button' data-report="<?php echo $_smarty_tpl->tpl_vars['row']->value['report'];?>
"><?php if ($_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['row']->value['report']]) {
echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['row']->value['report']];
} else { ?>请选择到岗时间<?php }?></button>
				<input type="hidden" id="report" name="report" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['report'];?>
">
				</span></li>
					<li><span class="yunset_list_name">求职状态<i class="yunset_list_bt">*</i></span ><span class="yunset_list_commentary">
				<button id='jobstatusPicker' class="mui-btn mui-btn-block" type='button' data-jobstatus="<?php echo $_smarty_tpl->tpl_vars['row']->value['jobstatus'];?>
"><?php if ($_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['row']->value['jobstatus']]) {
echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['row']->value['jobstatus']];
} else { ?>请选择求职状态<?php }?></button>
				<input type="hidden" id="jobstatus" name="jobstatus" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['jobstatus'];?>
">
				</span></li>
				</ul>
				<div class="yunset_bth_box">
					<input type="hidden" id="eid" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" />
					<button id="submit" class="mui-btn mui-btn-block mui-btn-primary">保 存</button>

				</div>
			</div>
		</div>
	</div>
	<!--页面主内容区结束-->
</div>
<!-- 职位-->
<div id="jobclasshtml" class="mui-page">
	<div class="mui-page-content">
		<div style="height:570px;">
        
        <div class="zn_search">
        	<div class="zn_search_text_c">
        		<div class="zn_search_text">
        			<input id="jclass_svalue" type="text" value="" data-type='jobclass' placeholder="请输入职位类别" class="zn_search_t inputListener">
        		</div>
        	</div>
        </div>
        <div id="jobclass_search" class="zn_searchbox " style="display:none;">
        	<div id="jobclass_searhtml" class="mui-input-row mui-checkbox classTap">
        		
				
			</div>

	    </div>  
       
       
       
       
       
		<div class="grade_tit" style="display:none;">选择工作职能 (最多可选5项)</div>
		<?php if (empty($_smarty_tpl->tpl_vars['job_type']->value)) {?>
   		<div class="grade-eject grade-w-roll">
			<ul class="grade-w" id="jobone">
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['job_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
				<li class="jobone" data-id="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
">
					<div class="mui-input-row mui-checkbox">
						<label><?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</label>
						<input class="jobonebox jobcheck<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" id="jobone<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" type="checkbox" style="width:10px"/>
					</div>
				</li>
				<?php } ?>
			</ul>
		</div>
       
        <?php } else { ?>
		<div class="grade-eject grade-w-roll">
			<ul class="grade-w" id="jobone">
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['job_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
				<li data-id="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</li>
				<?php } ?>
			</ul>
			<ul class="grade-t" id="jobtwo">
			<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['job_type']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
				<?php if (in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['job_index']->value)) {?>
					<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_smarty_tpl->tpl_vars['twok'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['v']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
 $_smarty_tpl->tpl_vars['twok']->value = $_smarty_tpl->tpl_vars['vv']->key;
?>
						<?php if (!empty($_smarty_tpl->tpl_vars['job_type']->value[$_smarty_tpl->tpl_vars['vv']->value])) {?>
						<li class="jobtwo job<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 none" data-id="<?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['vv']->value];?>
</li>
						<?php } else { ?>
						<li class="jobtwo job<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 none" data-id="<?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
"><div class="mui-input-row mui-checkbox"><label><?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['vv']->value];?>
</label><input class="jobtwobox jobcheck<?php echo $_smarty_tpl->tpl_vars['twok']->value;?>
" id="jobtwo<?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
" type="checkbox" style="width:150px"/></div></li>
						<?php }?>
					<?php } ?>	
				<?php }?>
			<?php } ?>
			</ul>
			<ul class="grade-s" id="jobthree">
			<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['job_type']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
				<?php if (in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['job_index']->value)) {?>
					<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['v']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>
						<?php if (!empty($_smarty_tpl->tpl_vars['job_type']->value[$_smarty_tpl->tpl_vars['vv']->value])) {?>
						<li id="jobtwo<?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
" class="jobthree job<?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
 none"><div class="mui-input-row mui-checkbox"><label>全部</label><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
" id="jobcheckAll<?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
" class="checkAll"/></div></li>
						<?php }?>
					<?php } ?>	
				<?php }?>
			<?php } ?>
			<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['job_type']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
				<?php if (!in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['job_index']->value)) {?>
					<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['v']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>
					<li class="jobthree job<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 none"><div class="mui-input-row mui-checkbox"><label><?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['vv']->value];?>
</label><input class="jobthreebox jobcheck<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" id="jobthree<?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
" type="checkbox"/></div></li>
					<?php } ?>	
				<?php }?>
			<?php } ?>
			</ul>
		</div>
		<?php }?>
		<div class="grade_chlose_box">
			<div class="grade_chlose_box_c">
				<span class="grade_chlose_box_c_name">已选</span>
				<div class="mui-slider">
					<div class="mui-scroll-wrapper mui-slider-indicator mui-segmented-control mui-segmented-control-inverted" style="background:#fff;height:20px;">
						<div id="jobchoosed" class="mui-scroll" style="background:#fff;height:20px;">
							<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['row']->value['jobArr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
							<a class="grade_chlose_box_a" data-id="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
			<a class="grade_chlose_bth mui-action-back">确定 <span id="jobpencent" class="<?php if (!$_smarty_tpl->tpl_vars['row']->value['jobArr']) {?>none<?php }?>"><?php echo count($_smarty_tpl->tpl_vars['row']->value['jobArr']);?>
/5</span></a>
		
		</div>
	</div></div>
</div>
<!-- 城市多选-->
<div id="cityclasshtml" class="mui-page">
	<div class="mui-page-content">
		<div style="height:570px;">

			<div class="zn_search">
	        	<div class="zn_search_text_c">
	        		<div class="zn_search_text">
	        			<input id="cclass_svalue" type="text" value="" data-type='cityclass' placeholder="请输入城市类别" class="zn_search_t inputListener">
	        		</div>
	        	</div>
	        </div>
	        <div id="cityclass_search" class="zn_searchbox " style="display:none;">
	        	<div id="cityclass_searhtml" class="mui-input-row mui-checkbox classTap">
	        		
					
				</div>

		    </div> 

			<div class="grade_tit">选择城市(可多选)</div>
			<?php if (empty($_smarty_tpl->tpl_vars['city_type']->value)) {?>
	   		<div class="grade-eject grade-w-roll">
				<ul class="grade-w" id="cityone">
					<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['city_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
					<li class="cityone" data-id="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
">
						<div class="mui-input-row mui-checkbox">
							<label><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</label>
							<input class="cityonebox citycheck<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" id="cityone<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" type="checkbox" style="width:10px"/>
						</div>
					</li>
					<?php } ?>
				</ul>
			</div>
	       
	        <?php } else { ?>
			<div class="grade-eject grade-w-roll">
				<ul class="grade-w" id="cityone">
					<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['city_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
					<li data-id="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</li>
					<?php } ?>
				</ul>
				<ul class="grade-t" id="citytwo">
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
					<?php if (in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['city_index']->value)) {?>
						<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_smarty_tpl->tpl_vars['twok'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['v']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
 $_smarty_tpl->tpl_vars['twok']->value = $_smarty_tpl->tpl_vars['vv']->key;
?>
							<?php if (!empty($_smarty_tpl->tpl_vars['city_type']->value[$_smarty_tpl->tpl_vars['vv']->value])) {?>
							<li class="citytwo city<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 none" data-id="<?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['vv']->value];?>
</li>
							<?php } else { ?>
							<li class="citytwo city<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 none" data-id="<?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
"><div class="mui-input-row mui-checkbox"><label><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['vv']->value];?>
</label><input class="citytwobox citycheck<?php echo $_smarty_tpl->tpl_vars['twok']->value;?>
" id="citytwo<?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
" type="checkbox" style="width:150px"/></div></li>
							<?php }?>
						<?php } ?>	
					<?php }?>
				<?php } ?>
				</ul>
				<ul class="grade-s" id="citythree">
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
					<?php if (in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['city_index']->value)) {?>
						<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['v']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>
							<?php if (!empty($_smarty_tpl->tpl_vars['city_type']->value[$_smarty_tpl->tpl_vars['vv']->value])) {?>
							<li id="citytwo<?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
" class="citythree city<?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
 none"><div class="mui-input-row mui-checkbox"><label>全部</label><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
" id="citycheckAll<?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
" class="checkAll"/></div></li>
							<?php }?>
						<?php } ?>	
					<?php }?>
				<?php } ?>
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
					<?php if (!in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['city_index']->value)) {?>
						<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['v']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>
						<li class="citythree city<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 none"><div class="mui-input-row mui-checkbox"><label><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['vv']->value];?>
</label><input class="citythreebox citycheck<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" id="citythree<?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
" type="checkbox"/></div></li>
						<?php } ?>	
					<?php }?>
				<?php } ?>
				</ul>
			</div>
			<?php }?>
			<div class="grade_chlose_box">
				<div class="grade_chlose_box_c">
					<span class="grade_chlose_box_c_name">已选</span>
					<div class="mui-slider">
						<div class="mui-scroll-wrapper mui-slider-indicator mui-segmented-control mui-segmented-control-inverted" style="background:#fff;height:20px;">
							<div id="citychoosed" class="mui-scroll" style="background:#fff;height:20px;">
								<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['row']->value['cityArr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
								<a class="grade_chlose_box_a" data-id="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
				<a class="grade_chlose_bth mui-action-back">确定<span id="citypencent" class="<?php if (!$_smarty_tpl->tpl_vars['row']->value['cityArr']) {?>none<?php }?>"><?php echo count($_smarty_tpl->tpl_vars['row']->value['cityArr']);?>
/5</span></a>
			</div>
		</div>
	</div>
</div>
<div id="salaryhtml" class="mui-page">
	<div class="mui-page-content">
		<div class="mui-scroll-wrapper">
			<div class="mui-scroll wap_member">
				<ul class="yunset_list">
					<li class="yunset_list_text"><span class="yunset_list_name">最低薪资</span>
						<div class="yunset_list_xzbox">
							<input type="number" id="minsalary" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['minsalary'];?>
" placeholder="请填写最低薪资" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')">
							<span class="yunset_list_xz">元/月</span>
						</div>
					</li>
					<li class="yunset_list_text"><span class="yunset_list_name">最高薪资<em class="yunset_xttip">(选填)</em></span>
						<div class="yunset_list_xzbox">
							<input type="number" id="maxsalary" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['maxsalary'];?>
" placeholder="请填写最高薪资">

							<span class="yunset_list_xz">元/月</span> </div>
					</li>
				</ul>
				<div class="yunset_bth_box">	<a class="yun_wap_info_brief_tit_bc mui-action-back">确定</a>	</div>
			</div>
		</div>
	</div>
</div>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
/js/mui/mui.view.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
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
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/resume.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript">
	var wapurl = "<?php echo smarty_function_url(array('m'=>'wap'),$_smarty_tpl);?>
";
	var hyData = [];
	'<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['industry_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>'
	hyData.push({
		value: '<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
',
		text: '<?php echo $_smarty_tpl->tpl_vars['industry_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
'
	})
	'<?php } ?>'
	var typeData = [];
	'<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_type']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>'
	typeData.push({
		value: '<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
',
		text: '<?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
'
	})
	'<?php } ?>'
	var reportData = [];
	'<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_report']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>'
	reportData.push({
		value: '<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
',
		text: '<?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
'
	})
	'<?php } ?>'
	var jobstatusData = [];
	'<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_jobstatus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>'
	jobstatusData.push({
		value: '<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
',
		text: '<?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
'
	})
	'<?php } ?>'

	var jobclass = '<?php echo $_smarty_tpl->tpl_vars['row']->value['job_classid'];?>
';
	var jobclassname = '<?php echo $_smarty_tpl->tpl_vars['row']->value['job_classname'];?>
';
	var jobclassidData = [];
	'<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['row']->value['jobArr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>'
	jobclassidData.push({
		value: '<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
',
		text: '<?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
'
	})
	'<?php } ?>';
	var cityclass = '<?php echo $_smarty_tpl->tpl_vars['row']->value['city_classid'];?>
';
	var cityclassname = '<?php echo $_smarty_tpl->tpl_vars['row']->value['city_classname'];?>
';
	var cityclassidData = [];
	'<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['row']->value['cityArr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>'
	cityclassidData.push({
		value: '<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
',
		text: '<?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
'
	})
	'<?php } ?>';
	mui.init();
	var viewApi = mui('#app').view({
		defaultPage: '#main'
	});
	
	var view = viewApi.view;
	(function($) {
		//初始化单页的区域滚动
		mui('.mui-scroll-wrapper').scroll({
			scrollY: true, //是否竖向滚动
			scrollX: false, //是否横向滚动
			startX: 0, //初始化时滚动至x
			startY: 0, //初始化时滚动至y
			indicators: false, //是否显示滚动条
			deceleration: 0.0006, //阻尼系数,系数越小滑动越灵敏
			// bounce: true //是否启用回弹
		});
		//处理view的后退与webview后退
		var oldBack = $.back;
		$.back = function() {
			if(viewApi.canBack()) { //如果view可以后退，则执行view的后退
				viewApi.back();
			} else { //执行webview后退
				oldBack();
			}
		};
	})(mui);
	view.addEventListener('pageBeforeShow', function(e) { //动画开始前触发
		document.activeElement.blur();
	})
	view.addEventListener('pageBeforeBack', function(e) {

		var salaryshow = '';
		var minsalary = parseInt(document.getElementById('minsalary').value);
		var maxsalary = parseInt(document.getElementById('maxsalary').value);
		if(minsalary) {
			salaryshow = minsalary;
			if(maxsalary) {
				salaryshow += '-' + maxsalary +'元/月';
			} else {
				salaryshow += '元以上/月';
			}
		}
		if(parseInt(maxsalary)>0 && parseInt(maxsalary) < parseInt(minsalary)) {
			document.getElementById('minsalary').value = '';
			document.getElementById('maxsalary').value = '';
			document.getElementById('salaryshow').innerText = '';
			return mui.toast('最低薪资不能比最高薪资高，请重新填写');
		}
		document.getElementById('salaryshow').innerText = salaryshow;


		document.getElementById('jclass_svalue').value = '';
		document.getElementById('jobclass_search').style.display = 'none';
		document.getElementById('cclass_svalue').value = '';
		document.getElementById('cityclass_search').style.display = 'none';
	});
	(function() {
		if(document.getElementById('main')){
			document.getElementById('main').addEventListener('touchmove', function (e) { e.preventDefault();}, {passive: false});
		}
		var submit = document.getElementById('submit');
		submit.addEventListener('tap', saveexpect, false);

	})();
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/data/plus/job.cache.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/data/plus/jobparent.cache.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/data/plus/city.cache.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/data/plus/cityparent.cache.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/category.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/cmc.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
