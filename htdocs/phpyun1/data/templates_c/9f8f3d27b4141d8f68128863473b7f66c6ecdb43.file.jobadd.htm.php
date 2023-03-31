<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-17 15:27:55
         compiled from "D:\rcw\uploads\app\template\wap\member\com\jobadd.htm" */ ?>
<?php /*%%SmartyHeaderCode:16560302895fb37b7b1169f5-95595878%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f8f3d27b4141d8f68128863473b7f66c6ecdb43' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\wap\\member\\com\\jobadd.htm',
      1 => 1578392215,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16560302895fb37b7b1169f5-95595878',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config_wapdomain' => 0,
    'config' => 0,
    'wap_style' => 0,
    'row' => 0,
    'job_name' => 0,
    'city_name' => 0,
    'info' => 0,
    'comclass_name' => 0,
    'job_link' => 0,
    'company' => 0,
    'industry_name' => 0,
    'com_sex' => 0,
    'comdata' => 0,
    'v' => 0,
    'tv' => 0,
    'job_type' => 0,
    'job_index' => 0,
    'key' => 0,
    'vv' => 0,
    'twok' => 0,
    'industry_index' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fb37b7b1e3635_75150742',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb37b7b1e3635_75150742')) {function content_5fb37b7b1e3635_75150742($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/member/cheader.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
/js/umeditor/themes/default/css/umeditor.min.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/css/cmc.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
<div id="app" class="mui-views">
	<div class="mui-view">
		<div class="mui-pages"></div>
	</div>
</div>
<div id="main" class="mui-page">
	<!--页面主内容区开始-->
	<div class="mui-page-content">
		<div class="mui-scroll-wrapper">
			<div class="mui-scroll wap_member">
				<ul class="yunset_list mt10">
					<li class="yunset_list_text"><span class="yunset_list_name">职位名称<i class="yunset_list_bt">*</i></span>
						<span class="yunset_list_commentary"> 
							<input type="text" name="name" id='name' value="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
" placeholder="请填写职位名称" class="">
			            </span>
					</li>
					
					<li>
						<a href="#jobclasshtml"><span class="yunset_list_name">职位类别<i class="yunset_list_bt">*</i></span ><span class="yunset_list_commentary yunset_list_js" id="jobnameshow">
						<?php if ($_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['row']->value['job1_son']]) {?>
							<?php if (!$_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['row']->value['job_post']]) {?>
								<?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['row']->value['job1_son']];?>

							<?php } else { ?>
								<?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['row']->value['job_post']];?>

							<?php }?>
						<?php } elseif ($_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['row']->value['job1']]) {?>
							<?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['row']->value['job1']];?>

						<?php } else { ?>
						请选择
						<?php }?></span></a>
						<input type="hidden" name="job_classid" id="job_classid" value="<?php if ($_smarty_tpl->tpl_vars['row']->value['job_post']) {
echo $_smarty_tpl->tpl_vars['row']->value['job_post'];
} elseif ($_smarty_tpl->tpl_vars['row']->value['job1_son']) {
echo $_smarty_tpl->tpl_vars['row']->value['job1_son'];
} elseif ($_smarty_tpl->tpl_vars['row']->value['job1']) {
echo $_smarty_tpl->tpl_vars['row']->value['job1'];
}?>" />
					</li>
					
					<li class="yunset_list_select">
						<span class="yunset_list_name">工作地点<i class="yunset_list_bt">*</i></span>
						<span class="yunset_list_commentary">
							
							<?php if ($_smarty_tpl->tpl_vars['row']->value['id']) {?>
								<button id='cityPicker' class="mui-btn mui-btn-block" type='button' data-provinceid="<?php echo $_smarty_tpl->tpl_vars['row']->value['provinceid'];?>
" data-cityid="<?php echo $_smarty_tpl->tpl_vars['row']->value['cityid'];?>
" data-three_cityid="<?php echo $_smarty_tpl->tpl_vars['row']->value['three_cityid'];?>
"><?php if ($_smarty_tpl->tpl_vars['row']->value['provinceid']) {
echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['row']->value['provinceid']];?>
 <?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['row']->value['cityid']];?>
 <?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['row']->value['three_cityid']];
} else { ?>请选择<?php }?></button>
								<input type="hidden" id="provinceid" name="provinceid" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['provinceid'];?>
">
								<input type="hidden" id="cityid" name="cityid" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['cityid'];?>
">
								<input type="hidden" id="three_cityid" name="three_cityid" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['three_cityid'];?>
">
							<?php } else { ?>
								<button id='cityPicker' class="mui-btn mui-btn-block" type='button' data-provinceid="<?php echo $_smarty_tpl->tpl_vars['info']->value['provinceid'];?>
" data-cityid="<?php echo $_smarty_tpl->tpl_vars['info']->value['cityid'];?>
" data-three_cityid="<?php echo $_smarty_tpl->tpl_vars['info']->value['three_cityid'];?>
"><?php if ($_smarty_tpl->tpl_vars['info']->value['provinceid']) {
echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['info']->value['provinceid']];?>
 <?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['info']->value['cityid']];?>
 <?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['info']->value['three_cityid']];
} else { ?>请选择<?php }?></button>
								<input type="hidden" id="provinceid" name="provinceid" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['provinceid'];?>
">
								<input type="hidden" id="cityid" name="cityid" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['cityid'];?>
">
								<input type="hidden" id="three_cityid" name="three_cityid" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['three_cityid'];?>
">
							<?php }?>
						</span>
					</li>
					
					<li>
						<a href="#salaryhtml"><span class="yunset_list_name">薪资待遇<i class="yunset_list_bt">*</i></span><span class="yunset_list_commentary yunset_list_js" id="salary"><?php if (!$_smarty_tpl->tpl_vars['row']->value['minsalary']&&!$_smarty_tpl->tpl_vars['row']->value['maxsalary']&&$_smarty_tpl->tpl_vars['row']->value['id']) {?>面议<?php } else {
if ($_smarty_tpl->tpl_vars['row']->value['maxsalary']) {
echo $_smarty_tpl->tpl_vars['row']->value['minsalary'];?>
-<?php echo $_smarty_tpl->tpl_vars['row']->value['maxsalary'];?>
元/月<?php } elseif ($_smarty_tpl->tpl_vars['row']->value['minsalary']) {
echo $_smarty_tpl->tpl_vars['row']->value['minsalary'];?>
元以上/月<?php } else { ?>请填写<?php }?></span><?php }?></a>
					</li>
                    <li class="yunset_list_select">
							<span class="yunset_list_name">经验要求<em class="yunset_xttip"></em></span>
							<span class="yunset_list_commentary">
								<button id="expPicker" class="mui-btn mui-btn-block" type="button" data-exp="<?php echo $_smarty_tpl->tpl_vars['row']->value['exp'];?>
"><?php if ($_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['row']->value['exp']]) {
echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['row']->value['exp']];
} else { ?>不限<?php }?></button>
								<input type="hidden" id="exp" name="exp" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['exp'];?>
">
							</span>
						</li>
                        <li class="yunset_list_select">
							<span class="yunset_list_name">学历要求<em class="yunset_xttip"></em></span>
							<span class="yunset_list_commentary">
								<button id="eduPicker" class="mui-btn mui-btn-block" type="button" data-edu="<?php echo $_smarty_tpl->tpl_vars['row']->value['edu'];?>
"><?php if ($_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['row']->value['edu']]) {
echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['row']->value['edu']];
} else { ?>不限<?php }?></button>
								<input type="hidden" id="edu" name="edu" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['edu'];?>
">
							</span>
						</li>
						
					<li>
						<a href="#contenthtml"><span class="yunset_list_name">职位描述<i class="yunset_list_bt">*</i></span><span class="yunset_list_commentary yunset_list_js" id="contentshow"><?php if ($_smarty_tpl->tpl_vars['row']->value['description']) {
echo $_smarty_tpl->tpl_vars['row']->value['description_t'];
} else { ?>请填写<?php }?></span></a>
					</li>
					<textarea style="display:none" id="contenttext"><?php echo $_smarty_tpl->tpl_vars['row']->value['description'];?>
</textarea>
					<li>
						<a href="#linkhtml"><span class="yunset_list_name">联系方式</span><span class="yunset_list_commentary yunset_list_js" id="link">
						<?php if ($_smarty_tpl->tpl_vars['row']->value['is_link']==3) {?>
							不向求职者展示联系方式
						<?php } elseif ($_smarty_tpl->tpl_vars['row']->value['is_link']==2) {?>
							<?php echo $_smarty_tpl->tpl_vars['job_link']->value['link_man'];?>
-<?php echo $_smarty_tpl->tpl_vars['job_link']->value['link_moblie'];
if ($_smarty_tpl->tpl_vars['job_link']->value['link_address']) {?>-<?php echo $_smarty_tpl->tpl_vars['job_link']->value['link_address'];
}?>
						<?php } else { ?>
							<?php if ($_smarty_tpl->tpl_vars['company']->value['linktel']) {?>
								<?php echo $_smarty_tpl->tpl_vars['company']->value['linkman'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['company']->value['linktel'];?>

							<?php } elseif ($_smarty_tpl->tpl_vars['company']->value['linkphone']) {?>
								<?php echo $_smarty_tpl->tpl_vars['company']->value['linkman'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['company']->value['linkphone'];?>

							<?php } else { ?>
								不向求职者展示联系方式
							<?php }?>
						<?php }?>
						</span></a>
						<input type="hidden" id="islink" name="islink" value="<?php if ($_smarty_tpl->tpl_vars['row']->value['is_link']) {
echo $_smarty_tpl->tpl_vars['row']->value['is_link'];
} else { ?>1<?php }?>" />
						<input type="hidden" id="link_moblie" name="link_moblie" value="<?php echo $_smarty_tpl->tpl_vars['job_link']->value['link_moblie'];?>
">
						<input type="hidden" id="link_man" name="link_man" value="<?php echo $_smarty_tpl->tpl_vars['job_link']->value['link_man'];?>
">
						<input type="hidden" id="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['job_link']->value['email'];?>
">
						<input type="hidden" id="link_address" name="link_address" value="<?php echo $_smarty_tpl->tpl_vars['job_link']->value['link_address'];?>
">
						<input type="hidden" id="tblink" name="tblink" value="">
						
					</li>
				
				</ul>
				<div class="yunset_bth_box">
					<a href="#addnexthtml" class="yun_wap_info_brief_tit_bc addnext">下一步</a>
				</div>

			</div>
		</div>
	</div>
</div>
</div>
<div id="addnexthtml" class="mui-page">
	<div class="mui-page-content">
		<div class="mui-scroll-wrapper">
			<div class="mui-scroll wap_member">
				<div class="yun_wap_xtbox" style="display:block">
					<ul class="yunset_list">
						<li class="yunset_list_select">
							<span class="yunset_list_name">从事行业<em class="yunset_xttip"></em></span>
							<span class="yunset_list_commentary">
                              <button id="hyPicker" class="mui-btn mui-btn-block" type="button" data-hy="<?php echo $_smarty_tpl->tpl_vars['row']->value['hy'];?>
"><?php if ($_smarty_tpl->tpl_vars['industry_name']->value[$_smarty_tpl->tpl_vars['row']->value['hy']]) {
echo $_smarty_tpl->tpl_vars['industry_name']->value[$_smarty_tpl->tpl_vars['row']->value['hy']];
} else {
if ($_smarty_tpl->tpl_vars['industry_name']->value[$_smarty_tpl->tpl_vars['company']->value['hy']]) {
echo $_smarty_tpl->tpl_vars['industry_name']->value[$_smarty_tpl->tpl_vars['company']->value['hy']];
}
}?></button>
								<input type="hidden" id="hy" name="hy" value="<?php if ($_smarty_tpl->tpl_vars['row']->value['hy']) {
echo $_smarty_tpl->tpl_vars['row']->value['hy'];
} else {
if ($_smarty_tpl->tpl_vars['company']->value['hy']) {
echo $_smarty_tpl->tpl_vars['company']->value['hy'];
}
}?>">
							</span>
						</li>
						<li class="yunset_list_select">
							<span class="yunset_list_name">招聘人数<em class="yunset_xttip"></em></span>
							<span class="yunset_list_commentary">
								<button id="numberPicker" class="mui-btn mui-btn-block" type="button" data-number="<?php echo $_smarty_tpl->tpl_vars['row']->value['number'];?>
"><?php if ($_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['row']->value['number']]) {
echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['row']->value['number']];
}?></button>
								<input type="hidden" id="number" name="number" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['number'];?>
">
							</span>
						</li>
						
						<li class="yunset_list_select">
							<span class="yunset_list_name">到岗时间<em class="yunset_xttip"></em></span>
							<span class="yunset_list_commentary">
								<button id="reportPicker" class="mui-btn mui-btn-block" type="button" data-report="<?php echo $_smarty_tpl->tpl_vars['row']->value['report'];?>
"><?php if ($_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['row']->value['report']]) {
echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['row']->value['report']];
}?></button>
								<input type="hidden" id="report" name="report" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['report'];?>
">
							</span>
						</li>
						<li class="yunset_list_select">
							<span class="yunset_list_name">年龄要求<em class="yunset_xttip"></em></span>
							<span class="yunset_list_commentary">
								<button id="agePicker" class="mui-btn mui-btn-block" type="button" data-age="<?php echo $_smarty_tpl->tpl_vars['row']->value['age'];?>
"><?php if ($_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['row']->value['age']]) {
echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['row']->value['age']];
}?></button>
								<input type="hidden" id="age" name="age" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['age'];?>
">
							</span>
						</li>
						<li class="yunset_list_select">
							<span class="yunset_list_name">性别要求<em class="yunset_xttip"></em></span>
							<span class="yunset_list_commentary">
								<button id="sexPicker" class="mui-btn mui-btn-block" type="button" data-sex="<?php echo $_smarty_tpl->tpl_vars['row']->value['sex'];?>
"><?php if ($_smarty_tpl->tpl_vars['com_sex']->value[$_smarty_tpl->tpl_vars['row']->value['sex']]) {
echo $_smarty_tpl->tpl_vars['com_sex']->value[$_smarty_tpl->tpl_vars['row']->value['sex']];
} else { ?>不限<?php }?></button>
								<input type="hidden" id="sex" name="sex" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['sex'];?>
">
							</span>
						</li>
						
						<li class="yunset_list_select">
							<span class="yunset_list_name">婚姻状况<em class="yunset_xttip"></em></span>
							<span class="yunset_list_commentary">
								<button id="marriagePicker" class="mui-btn mui-btn-block" type="button" data-marriage="<?php echo $_smarty_tpl->tpl_vars['row']->value['marriage'];?>
"><?php if ($_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['row']->value['marriage']]) {
echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['row']->value['marriage']];
}?></button>
								<input type="hidden" id="marriage" name="marriage" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['marriage'];?>
">
							</span>
						</li>
						<?php if ($_smarty_tpl->tpl_vars['comdata']->value['job_lang']!=''&&count($_smarty_tpl->tpl_vars['comdata']->value['job_lang'])>0) {?>
						<li>
							<a href="#languagehtml"><span class="yunset_list_name">语言要求<em class="yunset_xttip"></em></span><span class="yunset_list_commentary yunset_list_js" id="langshow">
								<?php if ($_smarty_tpl->tpl_vars['row']->value['lang']) {?>
									<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_lang']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
										<?php if (in_array($_smarty_tpl->tpl_vars['v']->value,$_smarty_tpl->tpl_vars['row']->value['lang'])) {?>
											<?php if (($_smarty_tpl->tpl_vars['v']->value!=$_smarty_tpl->tpl_vars['row']->value['lang'][0])) {?>
												,<?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>

											<?php } else { ?>
												<?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>

											<?php }?>
										<?php }?>
									<?php } ?>
								<?php } else { ?>
								请选择
								<?php }?>
							</span></a>
							<input type="hidden" id="lang" name="lang" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['langid'];?>
">
						</li>
						<?php }?>
						<li>
							<a href="#welfarehtml"><span class="yunset_list_name">福利待遇</span><span class="yunset_list_commentary yunset_list_js" id="welfareshow"><?php if ($_smarty_tpl->tpl_vars['row']->value['welfare']) {
echo $_smarty_tpl->tpl_vars['row']->value['welfare'];
} else { ?>请选择<?php }?></span></a>
							<input type="hidden" id="welfare" name="welfare" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['welfare'];?>
">
						</li>
						<li class="yunset_list_text">
							<span class="yunset_list_name" style="width:150px;">可接受应届生<em class="yunset_xttip"></em></span>
							<div class="yunset_kg_box">
								<div class="yunset_kg">
									<div class="mui-switch mui-switch-mini is_graduate <?php if ($_smarty_tpl->tpl_vars['row']->value['is_graduate']) {?>mui-active<?php }?>">
										<div class="mui-switch-handle"></div>
									</div>
									<input type="hidden" id="is_graduate" name="is_graduate" value="<?php if ($_smarty_tpl->tpl_vars['row']->value['is_graduate']) {
echo $_smarty_tpl->tpl_vars['row']->value['is_graduate'];
} else { ?>0<?php }?>">
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="yunset_bth_box" style="background: transparent; border: none;">
					<input id="id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" type="hidden" />
					<input id="state" name="state" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['state'];?>
" type="hidden" />
					<input id="r_status" name="r_status" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['r_status'];?>
" type="hidden" />

					<input type="submit" id="jobsubmit" value="提交操作" class="reinputText2">
					<a class="yun_wap_info_brief_tit_bc mui-action-back" style="background:#f8f8f8;border:1px solid #eee;color:#333; margin-top:10px;">返回上一步</a></div>
				
			</div>
		</div>
	</div>
</div>
</div>
<div id="contenthtml" class="mui-page">
	<div class="mui-page-content">
		<div class="mui-scroll-wrapper">
			<div class="mui-scroll">
				<div class="yun_wap_info_brief">
					<div class="yun_wap_info_brief_c">
						<div class="yun_wap_addresume_box_nexttit">职位描述<div style="display:none" id="description" class="yun_wap_yb"><a href="javascript:void(0)" onclick="setexample()">样本：<span id="descname"></span></a></div></div>
						<textarea class="textAreaMsg tip" id="content" name="content" style="width: 100%;"><?php echo $_smarty_tpl->tpl_vars['row']->value['description'];?>
</textarea></div>
					<div class="yunset_bth_box"><a class="yun_wap_info_brief_tit_bc mui-action-back">确定</a></div>
				</div>
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
" placeholder="请填写最低薪资">
							<span class="yunset_list_xz">元/月</span>
						</div>
					</li>
					<li class="yunset_list_text"><span class="yunset_list_name">最高薪资</span>
						<div class="yunset_list_xzbox">
							<input type="number" id="maxsalary" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['maxsalary'];?>
" placeholder="请填写最高薪资">
							<span class="yunset_list_xz">元/月</span> </div>
					</li>
					<li class="yunset_list_text"><span class="yunset_list_name">面议</span>
						<div class="yunset_kg_box">
							<div class="yunset_kg">
								<div class="mui-switch mui-switch-mini salary_type">
									<div class="mui-switch-handle"></div>
								</div>
								<input type="hidden" id="salary_type" value="<?php if (!$_smarty_tpl->tpl_vars['row']->value['minsalary']&&!$_smarty_tpl->tpl_vars['row']->value['maxsalary']&&$_smarty_tpl->tpl_vars['row']->value['id']) {?>1<?php } else { ?>2<?php }?>"></div>
						</div>
					</li>
				</ul>
				<div class="yunset_bth_box"><a class="yun_wap_info_brief_tit_bc mui-action-back">确定</a></div>
			</div>
		</div>
	</div>
</div>
<div id="linkhtml" class="mui-page">
	<div class="mui-page-content">
		<div class="mui-scroll-wrapper">
			<div class="mui-scroll wap_member">
				<div class="yun_wap_addresume_box_group">
					<div class="yun_wap_addresume_box_nexttit">联系方式</div>
					<div class="">
						<div class="admin_job_js_list_rt">
							<div class="admin_job_style <?php if ($_smarty_tpl->tpl_vars['row']->value['is_link']==1||$_smarty_tpl->tpl_vars['row']->value['is_link']=='') {?>admin_job_style_n<?php }?>" onclick="choice('1','link')" id="islink1"><?php echo $_smarty_tpl->tpl_vars['company']->value['linkman'];?>
&nbsp;<?php if ($_smarty_tpl->tpl_vars['company']->value['linktel']) {
echo $_smarty_tpl->tpl_vars['company']->value['linktel'];
} else {
echo $_smarty_tpl->tpl_vars['company']->value['linkphone'];
}?></div>
						</div>
						<div class="admin_job_js_list_rt">
							<div class="admin_job_style <?php if ($_smarty_tpl->tpl_vars['row']->value['is_link']==2) {?>admin_job_style_n<?php }?>" onclick="choice('2','link')" id="islink2">使用新联系方式
						<div class="admin_job_js mt10" id="newlink" style=" <?php if ($_smarty_tpl->tpl_vars['row']->value['is_link']!=2) {?>display:none;<?php }?>">
							<div class="job_touch_other">
							
								<ul>
									<li>
										<div class="job_touch_other_text"> 
                                         <span class="job_touch_other_text_name">联系人</span><input type="text" class="payment_fp_touch_text payment_fp_touch_text_p" value="<?php if ($_smarty_tpl->tpl_vars['job_link']->value['link_man']&&$_smarty_tpl->tpl_vars['row']->value['is_link']=='2') {
echo $_smarty_tpl->tpl_vars['job_link']->value['link_man'];
}?>" id="lxr" placeholder="请输入联系人">
										</div>
									</li>
									<li>
										<div class="job_touch_other_text">
                                        <span class="job_touch_other_text_name">联系电话</span>
                                         <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['job_link']->value['link_moblie']&&$_smarty_tpl->tpl_vars['row']->value['is_link']=='2') {
echo $_smarty_tpl->tpl_vars['job_link']->value['link_moblie'];
}?>" id="lxdh" placeholder="请输入联系电话" class="payment_fp_touch_text"> </div>
									</li>
									<li>
										<div class="job_touch_other_text">
                                         <span class="job_touch_other_text_name">联系邮箱</span>
                                          <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['job_link']->value['email']&&$_smarty_tpl->tpl_vars['row']->value['is_link']=='2') {
echo $_smarty_tpl->tpl_vars['job_link']->value['email'];
}?>" id="lxyx" placeholder="请输入联系邮箱" class="payment_fp_touch_text"> </div>
									</li>
									<li>
										<div class="job_touch_other_text">  <span class="job_touch_other_text_name">工作地址</span><input type="text" value="<?php if ($_smarty_tpl->tpl_vars['job_link']->value['link_address']&&$_smarty_tpl->tpl_vars['row']->value['is_link']=='2') {
echo $_smarty_tpl->tpl_vars['job_link']->value['link_address'];
}?>" id="lxdz" placeholder="请输入工作地址" class="payment_fp_touch_text"> </div>
									</li>
									
									
									<li >
										<div class="job_touch_setmap">设置地图<a href="#maphtml"><span class="job_touch_setmap_s" id="mapshow"><?php if (($_smarty_tpl->tpl_vars['row']->value['x']&&$_smarty_tpl->tpl_vars['row']->value['y'])||($_smarty_tpl->tpl_vars['company']->value['x']&&$_smarty_tpl->tpl_vars['company']->value['y'])) {?>已设置<?php } else { ?>设置地图位置<?php }?></span></a></div>
										
									</li>

									<li>
                                    <div class="job_touch_settb">
										联系方式同步到所有职位
                                        <div class="job_touch_settb_kg">
										<div class="mui-switch mui-switch-mini tblink">
											<div class="mui-switch-handle"></div>
										</div>
                                        </div></div>
									</li>
								</ul>
							</div></div>
						</div>
						</div>
                       <div class="yunjob_tel_set">
                       不向求职者展示联系方式（不想受到骚扰）
                       	<div class="yunset_kg">
									<div class="mui-switch mui-switch-mini islink <?php if ($_smarty_tpl->tpl_vars['row']->value['is_link']==3||($_smarty_tpl->tpl_vars['row']->value['is_link']==''&&$_smarty_tpl->tpl_vars['row']->value['infostatus']==2)) {?>mui-active<?php }?>">
										<div class="mui-switch-handle"></div>
									</div>
								</div>
                                
                       </div>
                        <div class="yunjob_tel_set">
                        不需要将收到的简历发送到邮箱
                        	<div class="yunset_kg">
									<div class="mui-switch mui-switch-mini isemail <?php if ($_smarty_tpl->tpl_vars['row']->value['is_email']==3) {?>mui-active<?php }?>">
										<div class="mui-switch-handle"></div>
									</div>
									<input type="hidden" id="isemail" name="isemail" value="<?php if ($_smarty_tpl->tpl_vars['row']->value['isemail']==3) {
echo $_smarty_tpl->tpl_vars['row']->value['isemail'];
} else { ?>0<?php }?>">
								</div>
                           </div>
                      
					<div class="yunset_bth_box">	<a class="yun_wap_info_brief_tit_bc mui-action-back">确定</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="maphtml" class="mui-page">
	<div class="mui-page-content">
		<div class="mui-scroll-wrapper">
			<div class="mui-scroll">
				<div id="map_container" style="width:100%;height:380px; left:0;"></div>
	            <input name="x" id="map_x" type="hidden" value="<?php if ($_smarty_tpl->tpl_vars['row']->value['x']) {
echo $_smarty_tpl->tpl_vars['row']->value['x'];
} else {
echo $_smarty_tpl->tpl_vars['company']->value['x'];
}?>">
			    <input name="y" id="map_y" type="hidden" value="<?php if ($_smarty_tpl->tpl_vars['row']->value['y']) {
echo $_smarty_tpl->tpl_vars['row']->value['y'];
} else {
echo $_smarty_tpl->tpl_vars['company']->value['y'];
}?>">
	          <div class="yunset_bth_box">  <a class="yun_wap_info_brief_tit_bc mui-action-back">确定</a></div>
			</div>
		</div>
	</div>
</div>
<div id="languagehtml" class="mui-page">
	<div class="mui-page-content">
		<div class="mui-scroll-wrapper">
			<div class="mui-scroll">
				<div class="yun_info_fl">
					<div class="yun_info_fl_c">
						<div class="yun_wap_addresume_box_nexttit">语言要求</div>
						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_lang']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
						<div class="yun_info_fl_list">
							<div class="mui-input-row mui-checkbox">
								<label><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
 </label>
								<input name="yyyq" value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" type="checkbox" class="lang" data-id="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['v']->value,$_smarty_tpl->tpl_vars['row']->value['lang'])) {?>checked<?php }?>>
							</div>
						</div>
						<?php } ?>
						<div class="yunset_bth_box"><a class="yun_wap_info_brief_tit_bc mui-action-back">确定</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="welfarehtml" class="mui-page">
    <div class="mui-page-content">
        <div class="mui-scroll-wrapper">
            <div class="mui-scroll">

                <div class="yun_info_fl">
                    <div class="yun_info_fl_c">
                        <div class="yun_wap_addresume_box_nexttit">福利待遇</div>
                        <form class="" id="addwelfarelist">
                            <?php if ($_smarty_tpl->tpl_vars['row']->value['welfare']) {?>
                            <?php  $_smarty_tpl->tpl_vars['tv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['row']->value['arraywelfare']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tv']->key => $_smarty_tpl->tpl_vars['tv']->value) {
$_smarty_tpl->tpl_vars['tv']->_loop = true;
?>
                            <div class="yun_info_fl_list">
                                <div class="mui-input-row mui-checkbox">
                                    <label><?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
</label>
                                    <input name="welfare[]" value="<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
" type="checkbox" class="welfare" data-name="<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['arraywelfare']&&in_array($_smarty_tpl->tpl_vars['tv']->value,$_smarty_tpl->tpl_vars['row']->value['arraywelfare'])) {?>checked<?php }?>>
                                </div>
                            </div>
                            <?php } ?> 
                            <?php }?>
                            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_welfare']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?> 
                            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
<?php $_tmp1=ob_get_clean();?><?php if (!in_array($_tmp1,$_smarty_tpl->tpl_vars['row']->value['arraywelfare'])) {?>
                            <div class="yun_info_fl_list">
                                <div class="mui-input-row mui-checkbox">
                                    <label><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
 </label>
                                    <input name="welfare[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" type="checkbox" class="welfare" data-name="<?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['arraywelfare']&&in_array($_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value],$_smarty_tpl->tpl_vars['row']->value['arraywelfare'])) {?>checked<?php }?>>
                                </div>
                            </div>
                            <?php }?> <?php } ?>
                        </form>

                        <div class="yun_info_fl_zdy_tip"> 您也可以自定义福利</div>
                        <div class="yun_info_fl_zdy"><input type="text" value="" class="" tabindex="1000" id="addwelfare" placeholder="请输入福利名称">
                            <div class="yun_info_fl_zdy_tj"> <button type="button" class="addwelfarebox">+ 添加福利</button></div>
                        </div>
                    <div class="yunset_bth_box">
                            <a class="yun_wap_info_brief_tit_bc mui-action-back">确定</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
       
       
       
       
        <input type="hidden" id="jobnum" name="jobnum" value="1"/>
		<div class="grade_tit" style="display:none;">选择工作职能 (最多可选1项)</div>
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
/1</span></a>
		
		</div>
	</div></div>
</div>
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
 src="<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
/js/mui/mui.view.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/jobadd.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/umeditor/umeditor.config.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/umeditor/umeditor.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
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
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/category.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['mapurl'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/map.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
	var jobclass = '<?php if ($_smarty_tpl->tpl_vars['row']->value['job_post']) {
echo $_smarty_tpl->tpl_vars['row']->value['job_post'];
} elseif ($_smarty_tpl->tpl_vars['row']->value['job1_son']) {
echo $_smarty_tpl->tpl_vars['row']->value['job1_son'];
} elseif ($_smarty_tpl->tpl_vars['row']->value['job1']) {
echo $_smarty_tpl->tpl_vars['row']->value['job1'];
}?>';
	
	var jobclassname = '<?php if ($_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['row']->value['job1_son']]) {
if (!$_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['row']->value['job_post']]) {
echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['row']->value['job1_son']];
} else {
echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['row']->value['job_post']];
}
}?>';
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

	var umeditor = UM.getEditor('content', {
		toolbar: false,
		elementPathEnabled: false,
		wordCount: false,
		autoHeightEnabled: false
	});
	mui.init();
	var viewApi = mui('#app').view({
		defaultPage: '#main'
	});
	
	var view = viewApi.view;
	(function($) {
		//初始化单页的区域滚动
		mui('.mui-scroll-wrapper').scroll({
			indicators: false, //是否显示滚动条
			bounce: false //是否启用回弹
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
		view.addEventListener('pageBeforeShow', function(e) { //动画开始前触发
			document.activeElement.blur();
			if(e.detail.page.id == 'contenthtml') {
				var contenttext = document.getElementById('contenttext').value;
				if(contenttext != "") {
					umeditor.setContent(contenttext);
				}
			}
			if(e.detail.page.id == 'maphtml') {
				var mapx = document.getElementById('map_x').value,
					mapy = document.getElementById('map_y').value;
				if(mapx!="" && mapy!=""){
					setLocation('map_container', mapx, mapy, "map_x", "map_y"); 
				}else{
					var geolocation = new BMap.Geolocation();
					geolocation.getCurrentPosition(function(r) {
						if(this.getStatus() == BMAP_STATUS_SUCCESS) {
							location_r = r;
							setLocation('map_container', r.point.lng, r.point.lat, "map_x", "map_y");
						}
					}, {
						enableHighAccuracy: true
					}); 
				}
			}
			document.getElementById('jclass_svalue').value = '';
			document.getElementById('jobclass_search').style.display = 'none';
		});
		view.addEventListener('pageBeforeBack', function(e) {
			if(e.detail.page.id == 'salaryhtml') {
				//薪资待遇
				var salarytype = document.getElementById('salary_type').value;
				if(salarytype == 2) {
					var minsalary = document.getElementById('minsalary').value;
					var maxsalary = document.getElementById('maxsalary').value;
					if(minsalary != "") {
						document.getElementById('salary').innerText = minsalary + '元以上/月';
					}
					if(parseInt(maxsalary) > 0) {
						if(parseInt(maxsalary) <= parseInt(minsalary)) {
							mui.toast('最高薪资必须大于最低薪资');
							document.getElementById('salary').innerText = "";
						} else {
							document.getElementById('salary').innerText = minsalary + '-' + maxsalary + '元/月';
						}
					}
				} else if(salarytype == 1) {
					document.getElementById('salary').innerText = '面议';
				}
			}
			if(e.detail.page.id == 'contenthtml') {
				var content = umeditor.getContent();
				if(content != "") {
					document.getElementById('contentshow').innerText = content.replace(/<\/?.+<?php echo '?>'; ?>
/g, "").replace(/ /g, "");
					document.getElementById('contenttext').innerText = content;
				}
			}
			if(e.detail.page.id == 'linkhtml') {
				//联系方式
				var islink = document.getElementById('islink').value;
				if(islink == 1) {
					document.getElementById('link').innerText = document.getElementById('islink1').innerText;
				} else if(islink == 2) {
					var linkman = document.getElementById('lxr').value,
						linkphone = document.getElementById('lxdh').value,
						email = document.getElementById('lxyx').value,
						linkaddress = document.getElementById('lxdz').value;
					document.getElementById('link_man').value = linkman;
					document.getElementById('link_moblie').value = linkphone;
					document.getElementById('email').value = email;
					document.getElementById('link_address').value = linkaddress;
					document.getElementById('link').innerText = linkman + ' ' + linkphone+' ' + email+ ' ' + linkaddress;
				}
			}
			if(e.detail.page.id == 'languagehtml') {
				//语言要求
				var yyyq = "",
					langshow = "";
				$(".lang").each(function(w, lang) {
					if(lang.checked == true) {
						if(yyyq == "") {
							yyyq = lang.dataset.id;
						} else {
							yyyq = yyyq + "," + lang.dataset.id;
						}
						if(langshow == "") {
							langshow = lang.dataset.name;
						} else {
							langshow = langshow + "," + lang.dataset.name;
						}
					}
				});
				document.getElementById("lang").value = yyyq;
				document.getElementById("langshow").innerText = langshow != "" ? langshow : "请选择";

			}
			if(e.detail.page.id == 'welfarehtml') {
				var allwel = '';
				$('.welfare').each(function(w, wel) {
					if(wel.checked == true) {
						if(allwel == '') {
							allwel = wel.dataset.name;
						} else {
							allwel = allwel + ',' + wel.dataset.name;
						}
					}
				});
				document.getElementById('welfareshow').innerText = allwel?allwel:'请选择';
				document.getElementById('welfare').value = allwel;
			}
			if(e.detail.page.id == 'jobclasshtml') {
				var job_classid	=	document.getElementById('job_classid'),
					jobnameshow	=	document.getElementById('jobnameshow');
				var sql={
				  	id : job_classid ? job_classid.value : ''
				};
				mui.post('index.php?c=ajaxjobclass',sql,function(data) {
					if(data==1){
						document.getElementById('description').style.display='block';
						document.getElementById('descname').innerText = jobnameshow ? jobnameshow.innerHTML : '';
					}else{
						document.getElementById('description').style.display='none';
						document.getElementById('descname').innerText = '';
					}
				}, 'json');
			}
		});
	})(mui);
	$(document).ready(function() {
		if(document.getElementById('addnexthtml')){
			document.getElementById('addnexthtml').addEventListener('touchmove', function (e) { e.preventDefault();}, {passive: false});
		}
	})
	var hyData = [];
	'<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['industry_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>';
	hyData.push({
		value: '<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
',
		text: '<?php echo $_smarty_tpl->tpl_vars['industry_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
'
	});
	'<?php } ?>';
	var numberData = [];
	'<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_number']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>';
	numberData.push({
		value: '<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
',
		text: '<?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
'
	});
	'<?php } ?>';
	var expData = [];
	'<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_exp']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>';
	expData.push({
		value: '<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
',
		text: '<?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
'
	});
	'<?php } ?>';
	var reportData = [];
	'<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_report']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>';
	reportData.push({
		value: '<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
',
		text: '<?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
'
	});
	'<?php } ?>';
	var ageData = [];
	'<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_age']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>';
	ageData.push({
		value: '<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
',
		text: '<?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
'
	});
	'<?php } ?>';
	var sexData = [];
	'<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['com_sex']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>';
	sexData.push({
		value: '<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
',
		text: '<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
'
	});
	'<?php } ?>';
	var eduData = [];
	'<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_edu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>';
	eduData.push({
		value: '<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
',
		text: '<?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
'
	});
	'<?php } ?>';
	var marriageData = [];
	'<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_marriage']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>';
	marriageData.push({
		value: '<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
',
		text: '<?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
'
	});
	'<?php } ?>';

	function choice(id, type) {
		if(id == 1) {
			$("#is" + type + "2").removeClass('admin_job_style_n');
			$("#is" + type + id).addClass('admin_job_style_n');
			$("input[name='is" + type + "']").val(id);
			$("#new" + type).hide();
		} else if(id == 2) {
			$("#is" + type + "1").removeClass('admin_job_style_n');
			$("#is" + type + id).addClass('admin_job_style_n');
			$("input[name='is" + type + "']").val(id);
			$("#new" + type).show();
		}
		$('.islink').removeClass('mui-active');
	}
	var map = new BMap.Map("map_container");
	map.centerAndZoom(new BMap.Point(116.404, 39.915), 12);

	var local;

	function setLocation(id, x, y, xid, yid) {
		var rating, map_control_type, map_control_anchor;
		if(!x && !y) {
			x = '116.404';
			y = '39.915';
		}
		var point = new BMap.Point(x, y);
		var marker = new BMap.Marker(point);
		var opts = {
			type: BMAP_NAVIGATION_CONTROL_LARGE
		}
		map.enableScrollWheelZoom(true);
		map.addControl(new BMap.NavigationControl(opts));
		map.centerAndZoom(point, 15);
		map.addOverlay(marker);
		map.addEventListener("click", function(e) {
			var info = new BMap.InfoWindow('', {
				width: 260
			});
			var projection = this.getMapType().getProjection();
			var lngLat = e.point;
			document.getElementById(xid).value = lngLat.lng;
			document.getElementById(yid).value = lngLat.lat;
			map.clearOverlays();
			var point = new BMap.Point(lngLat.lng, lngLat.lat);
			var marker = new BMap.Marker(point);
			map.addOverlay(marker);
			
			document.getElementById('mapshow').innerText = '已设置';
		});
	}
	function setexample(){
		var id = $("#job_classid").val();
		if(id){
			$.post("index.php?c=setexample",{id:id},function(data){
				if(data){
					umeditor.setContent(data);
				} 
			});
		}else{
			return mui.toast('参数错误！');
		}
		
	}
	(function($, doc) {
		$.init();
		//添加福利
		var addwelfarebox = $('.addwelfarebox')[0];
		if(addwelfarebox) {
			addwelfarebox.addEventListener('tap', function(event) { //添加福利
				var welfare = doc.getElementById('addwelfare').value;
				var error = 0;
				if(welfare.length >= 2 && welfare.length <= 8) {
					//判断信息是否已经存在 
					$('.welfare').each(function(i, arr) {
						var otag = arr.dataset.name;
						if(welfare == otag) {
							error = 1;
							return mui.toast('相同福利已存在，请选择或重新填写！');
						}
					});
					if(error == 0) {
						var html = "<div class='mui-input-row mui-checkbox'><label>" + welfare + "</label><input name='welfare[]' value='" + welfare + "' type='checkbox' class='welfare' data-name='" + welfare + "' checked></div>";
						var oDiv = doc.createElement('div');
						oDiv.className = 'yun_info_fl_list';
						oDiv.innerHTML = html;
						doc.getElementById('addwelfarelist').appendChild(oDiv);
					}
					doc.getElementById('addwelfare').value = '';
				} else {
					return mui.toast('请输入2-8个福利字符！');
				}
			}, false);
		}

	})(mui, document);
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/cmc.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php }} ?>
