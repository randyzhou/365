<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-11 15:25:41
         compiled from "D:\rcw\uploads\app\template\wap\member\user\addresumeson.htm" */ ?>
<?php /*%%SmartyHeaderCode:10776087485fab91f52b59f3-50311350%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcded371936fd82719b97f1dff042f371204b31b' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\wap\\member\\user\\addresumeson.htm',
      1 => 1576745915,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10776087485fab91f52b59f3-50311350',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config_wapdomain' => 0,
    'config' => 0,
    'wap_style' => 0,
    'fr' => 0,
    'row' => 0,
    'userclass_name' => 0,
    'description' => 0,
    'arrayTag' => 0,
    'tv' => 0,
    'userdata' => 0,
    'v' => 0,
    'tag_arr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fab91f5373116_85819653',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fab91f5373116_85819653')) {function content_5fab91f5373116_85819653($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/member/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/compress.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/exif.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<style>
    .yun_wap_addresume_box_control_text {
        border: 1px solid #ddd;
    }
    
    .yun_wap_addresume_texttextAreaMsg {
        width: 100%;
        height: 100px;
        border: none; font-size:14px;
        margin: 0;
        padding: 0;
        outline: none;
        ;
    }
</style>
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
                <div class="resume-cont">
                    <div class="">
					   <input type="hidden" name="fr" id="fr" value="<?php echo $_smarty_tpl->tpl_vars['fr']->value;?>
">
                        <?php if ($_GET['type']=="skill") {?>
                        <ul class="yunset_list mt15">
                            <li class="yunset_list_text"><span class="yunset_list_name">技能名称<i class="yunset_list_bt">*</i></span > <span class="yunset_list_commentary"><input type="text" name="name" id="name"  value="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
" placeholder="请输入技能名称"></span></li>
                            <li class="yunset_list_text"><span class="yunset_list_name">掌握时间</span > <span class="yunset_list_commentary" style="padding-right:20px;"><input type="number" name="longtime" id="longtime"  value="<?php echo $_smarty_tpl->tpl_vars['row']->value['longtime'];?>
" placeholder="请输入掌握时间，单位“年”"></span><i style=" position:absolute;right:10px;top:0px; display:inline-block; line-height:44px;">年</i></li>
                        </ul>
						<ul class="yunset_list mt15">
                            <li><span class="yunset_list_name">熟练程度<i class="yunset_list_bt">*</i></span > <span class="yunset_list_commentary" ><button id='ingUserPicker' class="mui-btn mui-btn-block" type='button' data-ing="<?php echo $_smarty_tpl->tpl_vars['row']->value['ing'];?>
"><?php if ($_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['row']->value['ing']]) {
echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['row']->value['ing']];
} else { ?>请选择熟练程度<?php }?></button>
							<input type="hidden" id="ing" name="ing" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['ing'];?>
">
							</span></li>
                        </ul>
                        <ul class="yunset_list">
                            <li class="yunset_list_max">
                            	<span class="yunset_list_name">技能证书</span>
                                <span class="yunset_list_tx " id="previewshow">
									<img id="previewimg"  src="<?php echo $_smarty_tpl->tpl_vars['row']->value['pic'];?>
" border="0" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_skill'];?>
',2);"style="border-radius:0;">
								</span>
								<div class="yunset_list_file"><input type="file" name="pic" onchange="previewImage(this,'preview')" accept="image/*" class=" ">
                				<input type='hidden' name='preview' value='' id='preview'></div>
                            </li>
                        </ul>
                        <div class="yunset_bth_box">
                            <input type="hidden" id="table" value="skill" />
                            <input type="hidden" id="eid" value="<?php echo $_GET['eid'];?>
" />
                            <input type="hidden" id="id" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" />
                            <button id="submit" name="submit" type="button" class="mui-btn mui-btn-block mui-btn-primary">保 存</button>
                        </div>
                        
                        <?php } elseif ($_GET['type']=="show") {?>
                        <ul class="yunset_list mt15">
                            <li class="yunset_list_text"><span class="yunset_list_name">作品标题</span > <span class="yunset_list_commentary"><input type="text" name="title" id="title"  value="<?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
" placeholder="请输入作品标题"></span></li>
                            <li class="yunset_list_text"><span class="yunset_list_name">作品排序</span >
                             <span class="yunset_list_commentary"><input type="number" name="sort" id="sort"  value="<?php echo $_smarty_tpl->tpl_vars['row']->value['sort'];?>
" placeholder="请输入作品排序"></span></li>
                        </ul>
                        <ul class="yunset_list">
                            <li class="yunset_list_max">
                                <span class="yunset_list_name">作品</span>
                           		<span class="yunset_list_tx " id="previewshow">
									<img id="previewimg" src="<?php echo $_smarty_tpl->tpl_vars['row']->value['pic'];?>
" border="0" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_skill'];?>
',2);" style="border-radius:0;">
								</span>
								<div class="yunset_list_file"><input type="file" name="pic" onchange="previewImage(this,'preview')" accept="image/*" class=" ">
                				<input type='hidden' name='preview' value='' id='preview'>
                                </div>
                                
                            </li>
                        </ul>
                        <div class="yunset_bth_box">
                            <input type="hidden" id="table" value="show" />
                            <input type="hidden" id="eid" value="<?php echo $_GET['eid'];?>
" />
                            <input type="hidden" id="id" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" />
                            <button id="submit" type="button" class="mui-btn mui-btn-block mui-btn-primary">保 存</button>
                        </div>

                        <?php } elseif ($_GET['type']=="work") {?>
                        <ul class="yunset_list mt15">
                            <li class="yunset_list_text"><span class="yunset_list_name">单位名称<i class="yunset_list_bt">*</i></span > <span class="yunset_list_commentary"><input type="text" name="name" id="name"  value="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
" placeholder="请输入单位名称"></span></li>
                            <li class="yunset_list_text"><span class="yunset_list_name">担任职位</span > <span class="yunset_list_commentary"><input type="text" name="title" id="title"  value="<?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
" placeholder="请输入担任职位"></span></li>
                        </ul>
                        <ul class="yunset_list mt15">
                            <li><span class="yunset_list_name">入职时间<i class="yunset_list_bt">*</i></span > <span class="yunset_list_commentary"><button id='sdatePicker' data-options='{"type":"month","value":"<?php if ($_smarty_tpl->tpl_vars['row']->value['sdate']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['sdate'],'%Y-%m');
}?>","beginYear":1955,"endYear":<?php echo smarty_modifier_date_format(time(),"%Y");?>
}'  class="btn mui-btn mui-btn-block"><?php if ($_smarty_tpl->tpl_vars['row']->value['sdate']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['sdate'],'%Y-%m');
} else { ?>请选择入职时间<?php }?></button>
							<input type="hidden" id="sdate" name="sdate" value="<?php if ($_smarty_tpl->tpl_vars['row']->value['sdate']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['sdate'],'%Y-%m');
}?>"></span>

                            </li>
                            <li><span class="yunset_list_name">离职时间<i class="yunset_list_bt">*</i></span > <span class="yunset_list_commentary"><button id='edatePicker' data-options='{"type":"month","value":"<?php if ($_smarty_tpl->tpl_vars['row']->value['edate']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['edate'],'%Y-%m');
} else {
echo smarty_modifier_date_format(time(),'%Y-%m');
}?>","beginYear":1955,"endYear":<?php echo smarty_modifier_date_format(time(),"%Y");?>
}'  class="btn mui-btn mui-btn-block" <?php if ($_smarty_tpl->tpl_vars['row']->value&&!$_smarty_tpl->tpl_vars['row']->value['edate']) {?>disabled<?php }?>><?php if ($_smarty_tpl->tpl_vars['row']->value['edate']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['edate'],'%Y-%m');
} elseif ($_smarty_tpl->tpl_vars['row']->value&&!$_smarty_tpl->tpl_vars['row']->value['edate']) {
echo smarty_modifier_date_format(time(),'%Y-%m');
} else { ?>请选择离职时间<?php }?></button>
							<input type="hidden" id="edate" name="edate" value="<?php if ($_smarty_tpl->tpl_vars['row']->value['edate']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['edate'],'%Y-%m');
}?>"></span>

                            </li>
                            <li class="yunset_list_text">
                                <span class="yunset_list_name" style="width:150px;">至今<em class="yunset_xttip"></em></span>
                                <div class="yunset_kg_box">
                                    <div class="yunset_kg">
                                        <div class="mui-switch mui-switch-mini totoday <?php if ($_smarty_tpl->tpl_vars['row']->value&&!$_smarty_tpl->tpl_vars['row']->value['edate']) {?>mui-active<?php }?>">
                                            <div class="mui-switch-handle"></div>
                                        </div>
                                        <input type="hidden" id="totoday" name="totoday" value="<?php if ($_smarty_tpl->tpl_vars['row']->value&&!$_smarty_tpl->tpl_vars['row']->value['edate']) {?>1<?php } else { ?>0<?php }?>">
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="yunset_list mt15">
                            <li>
                                <a href="#contenthtml">
                                    <span class="yunset_list_name">工作描述</span > 
                                	<span class="yunset_list_commentary" id="contentshow">
                                		<?php if ($_smarty_tpl->tpl_vars['row']->value['content']) {
echo $_smarty_tpl->tpl_vars['row']->value['content'];
} else { ?>请输入描述<?php }?>
                                	</span>
                                </a>
                            </li>
                        </ul>
                        <div class="yunset_bth_box">
                            <input type="hidden" id="table" value="work" />
                            <input type="hidden" id="eid" value="<?php echo $_GET['eid'];?>
" />
                            <input type="hidden" id="id" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" />
                            <button id="submit" type="button" class="mui-btn mui-btn-block mui-btn-primary">保 存</button>
                        </div>
                        <?php } elseif ($_GET['type']=="project") {?>
                        <ul class="yunset_list mt15">
                            <li class="yunset_list_text"><span class="yunset_list_name">项目名称<i class="yunset_list_bt">*</i></span > <span class="yunset_list_commentary"><input type="text" name="name" id="name"  value="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
" placeholder="请输入项目名称"></span></li>
                            <li class="yunset_list_text"><span class="yunset_list_name">担任职位</span > <span class="yunset_list_commentary"><input type="text" name="title" id="title"  value="<?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
" placeholder="请输入担任职位"></span></li>
                        </ul>
                        <ul class="yunset_list mt15">
                            <li><span class="yunset_list_name">开始时间<i class="yunset_list_bt">*</i></span > <span class="yunset_list_commentary"><button id='sdatePicker' data-options='{"type":"month","value":"<?php if ($_smarty_tpl->tpl_vars['row']->value['sdate']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['sdate'],'%Y-%m');
}?>","beginYear":1955,"endYear":<?php echo smarty_modifier_date_format(time(),"%Y");?>
}'  class="btn mui-btn mui-btn-block"><?php if ($_smarty_tpl->tpl_vars['row']->value['sdate']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['sdate'],'%Y-%m');
} else { ?>请选择开始时间<?php }?></button>
							<input type="hidden" id="sdate" name="sdate" value="<?php if ($_smarty_tpl->tpl_vars['row']->value['sdate']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['sdate'],'%Y-%m');
}?>"></span>

                            </li>
                            <li><span class="yunset_list_name">结束时间<i class="yunset_list_bt">*</i></span > <span class="yunset_list_commentary"><button id='edatePicker' data-options='{"type":"month","value":"<?php if ($_smarty_tpl->tpl_vars['row']->value['edate']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['edate'],'%Y-%m');
}?>","beginYear":1955,"endYear":<?php echo smarty_modifier_date_format(time(),"%Y");?>
}'  class="btn mui-btn mui-btn-block"><?php if ($_smarty_tpl->tpl_vars['row']->value['edate']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['edate'],'%Y-%m');
} else { ?>请选择结束时间<?php }?></button>
							<input type="hidden" id="edate" name="edate" value="<?php if ($_smarty_tpl->tpl_vars['row']->value['edate']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['edate'],'%Y-%m');
}?>"></span>

                            </li>
                        </ul>
                        <ul class="yunset_list mt15">
                            <li>
                                <a href="#contenthtml"><span class="yunset_list_name">项目内容</span > <span class="yunset_list_commentary" id="contentshow"><?php if ($_smarty_tpl->tpl_vars['row']->value['content']) {
echo $_smarty_tpl->tpl_vars['row']->value['content'];
} else { ?>请输入项目内容<?php }?></span></a>
                            </li>
                        </ul>
                        <div class="yunset_bth_box">
                            <input type="hidden" id="table" value="project" />
                            <input type="hidden" id="eid" value="<?php echo $_GET['eid'];?>
" />
                            <input type="hidden" id="id" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" />
                            <button id="submit" type="button" class="mui-btn mui-btn-block mui-btn-primary">保 存</button>
                        </div>

                        <?php } elseif ($_GET['type']=="edu") {?>
                        <ul class="yunset_list mt15">
                            <li class="yunset_list_text"><span class="yunset_list_name">学校名称<i class="yunset_list_bt">*</i></span > <span class="yunset_list_commentary"><input type="text" name="name" id="name"  value="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
" placeholder="请输入学校名称"></span></li>
                        </ul>
                        <ul class="yunset_list mt15">
                            <li><span class="yunset_list_name">入校时间<i class="yunset_list_bt">*</i></span > <span class="yunset_list_commentary"><button id='sdatePicker' data-options='{"type":"month","value":"<?php if ($_smarty_tpl->tpl_vars['row']->value['sdate']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['sdate'],'%Y-%m');
}?>","beginYear":1955,"endYear":<?php echo smarty_modifier_date_format(time(),"%Y");?>
}'  class="btn mui-btn mui-btn-block"><?php if ($_smarty_tpl->tpl_vars['row']->value['sdate']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['sdate'],'%Y-%m');
} else { ?>请选择入校时间<?php }?></button>
							<input type="hidden" id="sdate" name="sdate" value="<?php if ($_smarty_tpl->tpl_vars['row']->value['sdate']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['sdate'],'%Y-%m');
}?>"></span>

                            </li>
                            <li><span class="yunset_list_name">离校时间<i class="yunset_list_bt">*</i></span > <span class="yunset_list_commentary"><button id='edatePicker' data-options='{"type":"month","value":"<?php if ($_smarty_tpl->tpl_vars['row']->value['edate']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['edate'],'%Y-%m');
}?>","beginYear":1955,"endYear":2099}'  class="btn mui-btn mui-btn-block"><?php if ($_smarty_tpl->tpl_vars['row']->value['edate']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['edate'],'%Y-%m');
} else { ?>请选择离校时间<?php }?></button>
							<input type="hidden" id="edate" name="edate" value="<?php if ($_smarty_tpl->tpl_vars['row']->value['edate']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['edate'],'%Y-%m');
}?>"></span>

                            </li>
                        </ul>
                        <ul class="yunset_list mt15">
                            <li class="yunset_list_text"><span class="yunset_list_name">所学专业<i class="yunset_list_bt">*</i></span > <span class="yunset_list_commentary"><input type="text" name="specialty" id="specialty"  value="<?php echo $_smarty_tpl->tpl_vars['row']->value['specialty'];?>
" placeholder="请输入所学专业"></span></li>
                        </ul>
                        <ul class="yunset_list mt15">
                            <li><span class="yunset_list_name">最高学历<i class="yunset_list_bt">*</i></span > <span class="yunset_list_commentary" ><button id='educationUserPicker' class="mui-btn mui-btn-block" type='button' data-education="<?php echo $_smarty_tpl->tpl_vars['row']->value['education'];?>
"><?php if ($_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['row']->value['education']]) {
echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['row']->value['education']];
} else { ?>请选择最高学历<?php }?></button>
                        <input type="hidden" id="education" name="education" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['education'];?>
">
                        </span></li>
                        </ul>
                        <div class="yunset_bth_box">
                            <input type="hidden" id="table" value="edu" />
                            <input type="hidden" id="eid" value="<?php echo $_GET['eid'];?>
" />
                            <input type="hidden" id="id" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" />
                            <button id="submit" type="button" class="mui-btn mui-btn-block mui-btn-primary">保 存</button>
                        </div>

                        <?php } elseif ($_GET['type']=="training") {?>
                        <ul class="yunset_list mt15">
                            <li class="yunset_list_text"><span class="yunset_list_name">培训中心<i class="yunset_list_bt">*</i></span > <span class="yunset_list_commentary"><input type="text" name="name" id="name"  value="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
" placeholder="请输入培训中心"></span></li>
                            <li class="yunset_list_text"><span class="yunset_list_name">培训方向</span > <span class="yunset_list_commentary"><input type="text" name="title" id="title"  value="<?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
" placeholder="请输入培训方向"></span></li>
                        </ul>
                        <ul class="yunset_list mt15">
                            <li><span class="yunset_list_name">开始时间<i class="yunset_list_bt">*</i></span > <span class="yunset_list_commentary"><button id='sdatePicker' data-options='{"type":"month","value":"<?php if ($_smarty_tpl->tpl_vars['row']->value['sdate']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['sdate'],'%Y-%m');
}?>","beginYear":1955,"endYear":<?php echo smarty_modifier_date_format(time(),"%Y");?>
}'  class="btn mui-btn mui-btn-block"><?php if ($_smarty_tpl->tpl_vars['row']->value['sdate']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['sdate'],'%Y-%m');
} else { ?>请选择开始时间<?php }?></button>
							<input type="hidden" id="sdate" name="sdate" value="<?php if ($_smarty_tpl->tpl_vars['row']->value['sdate']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['sdate'],'%Y-%m');
}?>"></span>

                            </li>
                            <li><span class="yunset_list_name">结束时间<i class="yunset_list_bt">*</i></span > <span class="yunset_list_commentary"><button id='edatePicker' data-options='{"type":"month","value":"<?php if ($_smarty_tpl->tpl_vars['row']->value['edate']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['edate'],'%Y-%m');
}?>","beginYear":1955,"endYear":<?php echo smarty_modifier_date_format(time(),"%Y");?>
}'  class="btn mui-btn mui-btn-block"><?php if ($_smarty_tpl->tpl_vars['row']->value['edate']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['edate'],'%Y-%m');
} else { ?>请选择结束时间<?php }?></button>
							<input type="hidden" id="edate" name="edate" value="<?php if ($_smarty_tpl->tpl_vars['row']->value['edate']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['edate'],'%Y-%m');
}?>"></span>
                            </li>
                        </ul>
                        <ul class="yunset_list mt15">
                            <li>
                                <a href="#contenthtml"><span class="yunset_list_name">培训描述</span > <span class="yunset_list_commentary" id="contentshow"><?php if ($_smarty_tpl->tpl_vars['row']->value['content']) {
echo $_smarty_tpl->tpl_vars['row']->value['content'];
} else { ?>请输入培训描述<?php }?></span></a>
                            </li>
                        </ul>
                        <div class="yunset_bth_box">
                            <input type="hidden" id="table" value="training" />
                            <input type="hidden" id="eid" value="<?php echo $_GET['eid'];?>
" />
                            <input type="hidden" id="id" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" />
                            <button id="submit" type="button" class="mui-btn mui-btn-block mui-btn-primary">保 存</button>
                        </div>

                        <?php } elseif ($_GET['type']=="other") {?>
                        <ul class="yunset_list mt15">
                            <li class="yunset_list_text"><span class="yunset_list_name">其他标题</span > <span class="yunset_list_commentary"><input type="text" name="name" id="name"  value="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
" placeholder="请输入其他标题"></span></li>
                        </ul>

                        <ul class="yunset_list mt15">
                            <li>
                                <a href="#contenthtml"><span class="yunset_list_name">其他描述</span > <span class="yunset_list_commentary" id="contentshow"><?php if ($_smarty_tpl->tpl_vars['row']->value['content']) {
echo $_smarty_tpl->tpl_vars['row']->value['content'];
} else { ?>请输入其他描述<?php }?></span></a>
                            </li>
                        </ul>
                        <div class="yunset_bth_box">
                            <input type="hidden" id="table" value="other" />
                            <input type="hidden" id="eid" value="<?php echo $_GET['eid'];?>
" />
                            <input type="hidden" id="id" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" />
                            <button id="submit" type="button" class="mui-btn mui-btn-block mui-btn-primary">保 存</button>
                        </div>

                        <?php } elseif ($_GET['type']=="desc") {?>
						
                        <div class="yun_my_introduce_box">

                            <div class="yun_info_fl_c">
                                <div class="yun_my_introduce_tit">自我评价</div>

                                <div class="yun_info_textarea"> <textarea name="description" id="description" class="yun_wap_addresume_texttextAreaMsg" placeholder="对自己做一个简短的评价，让用人单位快速了解你，请不要填写手机号，QQ,微信等联系方式"><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</textarea></div>
                                <div class="zwpj_other"><a href="javascript:void(0)"  onclick="opendiv()" class=""><i class="zwpj_other_icon"></i>看看别人怎么写</a></div>
                                <div class="">
									<div class="yun_my_introduce_sl_box" style="display: none;" id="divopen"></div>
                                    <form class="" id="addtaglist">         
                                         <div class="yun_my_introduce_tit">  职业优势 <span class="yun_my_introduce_tit_s">最多可选择5项</span></div>
												<div id="newtag"></div>
												<?php  $_smarty_tpl->tpl_vars['tv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tv']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arrayTag']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tv']->key => $_smarty_tpl->tpl_vars['tv']->value) {
$_smarty_tpl->tpl_vars['tv']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['tv']->key;
?>
													<span class="yun_my_introduce_bq yun_my_introduce_bq_cur" data-tag="<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
" tag-class="2"><?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
+</span> 
												<?php } ?>
										 
											<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_tag']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
												<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
<?php $_tmp1=ob_get_clean();?><?php if (!in_array($_tmp1,$_smarty_tpl->tpl_vars['arrayTag']->value)) {?>
												<span class="yun_my_introduce_bq " data-tag="<?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
" tag-class="1"><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
 +</span>
												<?php }?> 
											<?php } ?>
                                    </form>
                                    <div class="yun_info_fl_zdy_tip"> 您也可以自定义优势</div>
                                    <div class="yun_info_fl_zdy"><input type="text" value="" class="" tabindex="1000" id="addfuli" placeholder="请输入标签名称">
                                        <div class="yun_info_fl_zdy_tj"> <button type="button" class="addtagbox">+ 添加标签</button></div>
										<input type="hidden" name="tag" id="tag" value="<?php echo $_smarty_tpl->tpl_vars['tag_arr']->value;?>
">
                                    </div>
                                    <div class="yun_my_introduce_bth" style="background: transparent; border: none;">
                                        <input type="hidden" name="table" id="table" value="resume" />
                                        <input type="hidden" name="eid" id="eid" value="<?php echo $_GET['eid'];?>
" />
                                        <input type="hidden" id="id" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" />
                                        <button id="submit" type="button" class="">保 存</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php } elseif ($_GET['type']=="doc") {?>
                        <div class="wap_member_comp_h1"><span>黏贴简历内容</span></div>
                        <div class="yun_wap_addresume_box">

                            <div class="yun_wap_addresume_box_group">
                                <div class="yun_wap_addresume_box_control_text" style="height:300px;"> <textarea name="doc" id="doc" style="height:300px;" class="yun_wap_addresume_texttextAreaMsg"><?php echo $_smarty_tpl->tpl_vars['row']->value['doc'];?>
</textarea></div>
                            </div>
                            <div class="yun_wap_addresume_box_group" style="background: transparent; border: none;">
                                <input type="hidden" name="table" id="table" value="doc" />
                                <input type="hidden" name="eid" id="eid" value="<?php echo $_GET['eid'];?>
" />
                                <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" />
                                <button id="submit" type="button" class="mui-btn mui-btn-block mui-btn-primary">保 存</button>
                            </div>

                        </div>
                        <?php echo '<script'; ?>
 type="text/javascript">
                            var ue = UM.getEditor('doc', {
                                toolbar: false,
                                elementPathEnabled: false,
                                wordCount: false,
                                autoHeightEnabled: false
                            });
                        <?php echo '</script'; ?>
>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--页面主内容区结束-->
</div>
<!--单页面结束-->

<div id="contenthtml" class="mui-page">
    <div class="mui-page-content">
        <div class="mui-scroll-wrapper">
            <div class="mui-scroll">
                <div class="yun_wap_addresume_box_group">
                    <div class="yun_wap_addresume_box_control_text">
                        <textarea name="content" id="content" style="height:200px;" class="yun_wap_addresume_texttextAreaMsg "><?php echo $_smarty_tpl->tpl_vars['row']->value['content'];?>
</textarea>
                    </div>
                    <a class="yun_wap_info_brief_tit_bc mui-action-back mt10">确定</a>
                </div>
            </div>
        </div>
    </div>
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
/js/resume.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    var formData = new FormData(),
        newuploadpic;
	var wapurl = "<?php echo smarty_function_url(array('m'=>'wap'),$_smarty_tpl);?>
";
    var eduData = [];
    '<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_edu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>'
    eduData.push({
        value: '<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
',
        text: '<?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
'
    })
    '<?php } ?>'
	 var ingData = [];
    '<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_ing']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>'
    ingData.push({
        value: '<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
',
        text: '<?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
'
    })
    '<?php } ?>'
    mui.init();
    var viewApi = mui('#app').view({
        defaultPage: '#main'
    });
    //初始化单页的区域滚动
    mui('.mui-scroll-wrapper').scroll({
        scrollY: true, //是否竖向滚动
        scrollX: false, //是否横向滚动
        startX: 0, //初始化时滚动至x
        startY: 0, //初始化时滚动至y
        indicators: true, //是否显示滚动条
        deceleration: 0.0006, //阻尼系数,系数越小滑动越灵敏
        // bounce: true //是否启用回弹
    });
    var view = viewApi.view;
    var oldBack = mui.back;
    mui.back = function() {
        if(viewApi.canBack()) {
            viewApi.back();
        } else {
            oldBack();
        }
    };
    view.addEventListener('pageBack', function(e) {
        if(e.detail.page.id == 'contenthtml') {
            if(document.getElementById('content')) {
                document.getElementById('contentshow').innerText = document.getElementById('content').value.replace(/<\/?.+<?php echo '?>'; ?>
/g, "").replace(/ /g, "");
            }
        }

    });
    mui('.totoday').each(function() {
        this.addEventListener('toggle', function(event) {
            if(event.detail.isActive) {
                document.getElementById('edatePicker').disabled = true;
                document.getElementById('edatePicker').innerText = "<?php echo smarty_modifier_date_format(time(),'%Y-%m');?>
"
                document.getElementById('totoday').value = 1;
            } else {
                document.getElementById('totoday').value = '';
                document.getElementById('edatePicker').disabled = false;
                document.getElementById('edatePicker').innerText = "请选择离职时间"
            }
        });
    });
    $(function() {
        var submit = document.getElementById('submit');
        submit.addEventListener('tap', kresume, false);
		$(".yun_my_introduce_bq").live('click',function(){
		
			var tag=$(this).attr('tag-class');
			if(tag=='1'){
				$(this).addClass('yun_my_introduce_bq_cur');
				$(this).attr('tag-class','2');
			}else{
				$(this).removeClass('yun_my_introduce_bq_cur');
				$(this).attr('tag-class','1');
			}
			var tag_value;
			var tagi = 0;
			$(".yun_my_introduce_bq_cur").each(function(){
				if($(this).attr('tag-class')=='2'){
					var info =$(this).attr("data-tag");
					tag_value+=","+info;
					tagi++;

				}
			});
			if(tagi>5){
				if(tag=='1'){
					$(this).removeClass('yun_my_introduce_bq_cur');
				}				
				return mui.toast('最多只能选择五项！');false
			}
			if(tag_value){ 
				tag_value = tag_value.replace("undefined,","");
				$("#tag").val(tag_value); 
			}else{
				$("#tag").val(''); 
			}
		});
 }); 

	function opendiv(){
		var obj=document.getElementById('divopen');
		if(obj.style.display=='none'){
			$('#divopen').show();
			var intro=document.getElementById('introduce');
			if(!intro){
				$.post(wapurl+"/member/index.php?c=getIntroduceInfo",{rand:Math.random()},function(data){
					$('#divopen').html(data);
				});
			}
			
		}else{
			$('#divopen').hide();
		}
	}
	function nextintroduce(){
		var intro=$("#introduce").val();
		$.post(wapurl+"/member/index.php?c=getIntroduceInfo",{introduceid:intro},function(data){
			$('#divopen').html();
			$('#divopen').html(data);
		});
			
	}
	
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/publicselect.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
