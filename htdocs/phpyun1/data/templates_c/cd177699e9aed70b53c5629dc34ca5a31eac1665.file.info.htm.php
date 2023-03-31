<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-08 03:51:40
         compiled from "D:\rcw\uploads\app\template\wap\member\com\info.htm" */ ?>
<?php /*%%SmartyHeaderCode:2305378965fa6faccaabb22-40888258%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd177699e9aed70b53c5629dc34ca5a31eac1665' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\wap\\member\\com\\info.htm',
      1 => 1576492524,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2305378965fa6faccaabb22-40888258',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config_wapdomain' => 0,
    'config' => 0,
    'wap_style' => 0,
    'row' => 0,
    'industry_name' => 0,
    'comclass_name' => 0,
    'city_name' => 0,
    'tv' => 0,
    'comdata' => 0,
    'v' => 0,
    'industry_index' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fa6faccb0dc03_60049408',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fa6faccb0dc03_60049408')) {function content_5fa6faccb0dc03_60049408($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/member/cheader.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/webapppic/cropper.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" />
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/alloy/transform.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/alloy/alloy-finger.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/alloy-crop.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
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
<?php echo '<script'; ?>
>var setPosition = '<?php echo $_smarty_tpl->tpl_vars['config']->value['com_enforce_setposition'];?>
'<?php echo '</script'; ?>
>
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
            	<ul class="yunset_list">
                    <li>
                        <a href="#logohtml" class="yunset_list_max">
                        	<span class="yunset_list_name">企业logo</span>
                            <span class="yunset_list_tx "><img id="logopic" src="<?php if ($_smarty_tpl->tpl_vars['row']->value['logo']) {
echo $_smarty_tpl->tpl_vars['row']->value['logo'];
} else {
echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_unit_icon'];
}?>" style="border-radius:0px; width:40px;height:40px;"></span>
                        </a>
					</li>
				</ul>
               
				<ul class="yunset_list mt15">
					<li class="yunset_list_text"><span class="yunset_list_name">企业全称<i class="yunset_list_bt">*</i> </span><span class="yunset_list_commentary"> 
					<?php if ($_smarty_tpl->tpl_vars['row']->value['yyzz_status']==1) {?>
					<input type="text"  value="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
" placeholder="请填写企业全称" class= disabled="disabled">
					<input type="hidden" name="name" id='name' value="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
" >
					<?php } else { ?>
					<input type="text" name="name" id='name' value="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
" placeholder="请填写企业全称"  onblur="checkIsUsed('name');" />
					<?php }?>
					</span>
                    </li>
                    <li class="yunset_list_select"><span class="yunset_list_name">从事行业<i class="yunset_list_bt">*</i></span><span class="yunset_list_commentary">
					<button id='hyPicker' class="mui-btn mui-btn-block" type='button' data-hy="<?php echo $_smarty_tpl->tpl_vars['row']->value['hy'];?>
"><?php if ($_smarty_tpl->tpl_vars['row']->value['hy']) {
echo $_smarty_tpl->tpl_vars['industry_name']->value[$_smarty_tpl->tpl_vars['row']->value['hy']];
} else { ?>请选择<?php }?></button>
					<input type="hidden" id="hy" name="hy" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['hy'];?>
">
					</span></li>
                    <li class="yunset_list_select"><span class="yunset_list_name">企业性质<i class="yunset_list_bt">*</i></span><span class="yunset_list_commentary">
					<button id='prComPicker' class="mui-btn mui-btn-block" type='button' data-pr="<?php echo $_smarty_tpl->tpl_vars['row']->value['pr'];?>
"><?php if ($_smarty_tpl->tpl_vars['row']->value['pr']) {
echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['row']->value['pr']];
} else { ?>请选择<?php }?></button>
					<input type="hidden" id="pr" name="pr" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['pr'];?>
">
					</span></li>
                    <li class="yunset_list_select"><span class="yunset_list_name">企业规模<i class="yunset_list_bt">*</i></span><span class="yunset_list_commentary">
					<button id='munComPicker' class="mui-btn mui-btn-block" type='button' data-mun="<?php echo $_smarty_tpl->tpl_vars['row']->value['mun'];?>
"><?php if ($_smarty_tpl->tpl_vars['row']->value['mun']) {
echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['row']->value['mun']];
} else { ?>请选择<?php }?></button>
					<input type="hidden" id="mun" name="mun" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['mun'];?>
">
					</span></li>
                    <li class="yunset_list_select"><span class="yunset_list_name">所在地区 <i class="yunset_list_bt">*</i></span><span class="yunset_list_commentary">
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
					</span></li>
                    <li class="yunset_list_text"><span class="yunset_list_name">详细地址<i class="yunset_list_bt">*</i></span><span class="yunset_list_commentary"> 
					<input type="text" name="address" id='address' value="<?php echo $_smarty_tpl->tpl_vars['row']->value['address'];?>
" placeholder="请填写公司地址" >
					</span></li>
					<li class="">
						<a href="#maphtml"><span class="yunset_list_name">企业地图<?php if ($_smarty_tpl->tpl_vars['config']->value['com_enforce_setposition']==1) {?><i class="yunset_list_bt">*</i><?php }?></span><span class="yunset_list_commentary yunset_list_js" id="mapshow"><?php if ($_smarty_tpl->tpl_vars['row']->value['x']&&$_smarty_tpl->tpl_vars['row']->value['y']) {?><font color="red">已设置</font><?php } else { ?>请设置<?php }?></span></a>
					</li>
                </ul>

                <ul class="yunset_list mt15">
                    <li class="yunset_list_text"><span class="yunset_list_name">联 系 人<i class="yunset_list_bt">*</i></span><span class="yunset_list_commentary"> 
                    	<input type="text" name="linkman" id='linkman' value="<?php echo $_smarty_tpl->tpl_vars['row']->value['linkman'];?>
" placeholder="请填写联系人" ></span></li>
                    <li class="yunset_list_text"><span class="yunset_list_name">联系手机<i class="yunset_list_bt">*</i></span><span class="yunset_list_commentary">
					<?php if ($_smarty_tpl->tpl_vars['row']->value['moblie_status']==1) {?>
					（已绑定）<?php echo $_smarty_tpl->tpl_vars['row']->value['linktel'];?>
 
					<input type="hidden" id="linktel" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['linktel'];?>
">
					<?php } else { ?>
					<input type="text" name="linktel" id="linktel" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['linktel'];?>
" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" onblur="checkIsUsed('linktel');" class=""placeholder="请填写手机号码" >
					<?php }?> 
					</span></li>
                    <li class="yunset_list_text"><span class="yunset_list_name">固定电话</span><span class="yunset_list_commentary">
					<input type="text" name="linkphone" id="linkphone" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['linkphone'];?>
" onkeyup="this.value=this.value.replace(/[^0-9-]/g,'')" class=""placeholder="请填写固定电话" >
					</span></li>
                </ul>
                <ul class="yunset_list mt15">
                    <li>
                        <a href="#contenthtml" id="contenteditor" class="">
                            <span class="yunset_list_name">企业简介<i class="yunset_list_bt">*</i></span>
                            <span class="yunset_list_commentary yunset_list_js" id="contentshow"><?php echo $_smarty_tpl->tpl_vars['row']->value['content'];?>
</span>
                        </a>
                    </li>
                    <textarea style="display:none" id="contenttext"><?php echo $_smarty_tpl->tpl_vars['row']->value['content'];?>
</textarea>
                </ul>
                 <ul class="yunset_list mt15">
                    <li>
                        <a href="#addnexthtml" class="addnext">
                            <span class="yunset_list_name">补充信息</span>
                            <span class="yunset_list_commentary yunset_list_js">让求职者更好的了解您的企业</span>
                        </a>
                    </li>
                           </ul>  
             
				 <div class="yunset_bth_box"> <button id="infosubmit" type="button" class="mui-btn mui-btn-block mui-btn-primary">保 存</button>
                </div>
			</div>
        </div>
    </div>
</div>
<div id="maphtml" class="mui-page">
	<div class="mui-page-content">
		<div class="mui-scroll-wrapper">
			<div class="mui-scroll">
				<div id="map_container" style="width:100%;height:280px; left:0;"></div>
	            <input name="x" id="map_x" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['x'];?>
">
			    <input name="y" id="map_y" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['y'];?>
">
	         <div class="yunset_bth_box">   <a class="yun_wap_info_brief_tit_bc mui-action-back">确定</a></div>
			</div>
		</div>
	</div>
</div>
<div id="addnexthtml" class="mui-page">
    <div class="mui-page-content">
        <div class="mui-scroll-wrapper">
            <div class="mui-scroll">
                <ul class="yunset_list mt15">
                  <li class="yunset_list_text"><span class="yunset_list_name">企业简称<em class="yunset_xttip">(选填)</em></span>
                        <span class="yunset_list_commentary"> 
					<input type="text" name="shortname" id='shortname' value="<?php echo $_smarty_tpl->tpl_vars['row']->value['shortname'];?>
" placeholder="请填写企业简称" >
					</span>
                    </li>
                    <li>
                        <a href="#welfarehtml"><span class="yunset_list_name">公司福利<em class="yunset_xttip">(选填)</em></span><span class="yunset_list_commentary yunset_list_js" id="welfareshow"><?php if ($_smarty_tpl->tpl_vars['row']->value['welfare']) {
echo mb_substr($_smarty_tpl->tpl_vars['row']->value['welfare'],0,10,'utf-8');
} else { ?>请选择<?php }?></span></a>
						<input type="hidden" id="welfare" name="welfare" value="<?php echo mb_substr($_smarty_tpl->tpl_vars['row']->value['welfare'],0,10,'utf-8');?>
">
                    </li>
                    <li class="yunset_list_text">
                        <span class="yunset_list_name">企业邮箱<em class="yunset_xttip">(选填)</em></span>
                        <span class="yunset_list_commentary">
					 		<?php if ($_smarty_tpl->tpl_vars['row']->value['email_status']==1) {?>
 								<div class="">（已绑定）<?php echo $_smarty_tpl->tpl_vars['row']->value['linkmail'];?>
</div>
								<input type="hidden" id="linkmail" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['linkmail'];?>
">
							<?php } else { ?>
								 <div class=""><input type="text" name="linkmail" id="linkmail" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['linkmail'];?>
" class="" placeholder="请填写联系邮箱，用于接受简历" ></div>
							<?php }?> 
						</span>
                    </li>

                    <li>
                      	<span class="yunset_list_name" style="width:150px">公司二维码<em class="yunset_xttip">(选填)</em></span>
                    	<span class="yunset_list_commentary " id="previewshow">
                    		<img id="previewimg" src="<?php echo $_smarty_tpl->tpl_vars['row']->value['comqcode'];?>
" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/images/yun_m_ewm.png',2);" style="border-radius:0px;width:20px;height:20px;">
                    	</span>
                    	<div class="yunset_list_file"> 
                        	<input type="file" id="pic" name="pic" onchange="previewImage(this,'preview')" accept="image/*"  />
                        </div>
                   		<input type='hidden' name='preview' value='' id='preview'>  
					</li>
					<li class="yunset_list_text"><span class="yunset_list_name">企业网址<em class="yunset_xttip">(选填)</em></span><span class="yunset_list_commentary">
					<input type="text" name="website" id="website" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['website'];?>
" placeholder="请填写企业网址"  style="width:95%">
					</span></li>
                    <li class="yunset_list_select"><span class="yunset_list_name">联系方式<em class="yunset_xttip">(选填)</em></span><span class="yunset_list_commentary">
                    <button id='infostatusComPicker' class="mui-btn mui-btn-block" type='button' data-infostatus="<?php echo $_smarty_tpl->tpl_vars['row']->value['infostatus'];?>
"><?php if ($_smarty_tpl->tpl_vars['row']->value['infostatus']=='1') {?>公开<?php } elseif ($_smarty_tpl->tpl_vars['row']->value['infostatus']=='2') {?>不公开<?php } else { ?>请选择<?php }?></button>
                    <input type="hidden" id="infostatus" name="infostatus" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['infostatus'];?>
">
                    </span></li>
                    <li class="yunset_list_text"><span class="yunset_list_name" style="width:150px">联系人职位<em class="yunset_xttip">(选填)</em></span><span class="yunset_list_commentary">
					<input type="text" name="linkjob" id="linkjob" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['linkjob'];?>
" placeholder="请填写联系人职位" >
					</span></li>
                    <li class="yunset_list_text"><span class="yunset_list_name" style="width:150px">联系人QQ<em class="yunset_xttip">(选填)</em></span><span class="yunset_list_commentary">
					<input type="text" name="linkqq" id="linkqq" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['linkqq'];?>
" placeholder="请填写联系人QQ" >
					</span></li>
                    <li class="yunset_list_text"><span class="yunset_list_name">公交站点<em class="yunset_xttip">(选填)</em></span><span class="yunset_list_commentary">
					<input type="text" name="busstops" id="busstops" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['busstops'];?>
" placeholder="请填写公交站点" >
					</span></li>
                </ul>
                <ul class="yunset_list mt15">
                    <li><span class="yunset_list_name">创办时间<em class="yunset_xttip">(选填)</em></span><span class="yunset_list_commentary">
					<button id='sdatePicker' data-options='{"type":"month","value":"<?php if ($_smarty_tpl->tpl_vars['row']->value['sdate']) {
echo $_smarty_tpl->tpl_vars['row']->value['sdate'];
} else { ?>2018-1<?php }?>","beginYear":1900,"endYear":<?php echo smarty_modifier_date_format(time(),"Y");?>
}'  class="btn mui-btn mui-btn-block" type="button"><?php if ($_smarty_tpl->tpl_vars['row']->value['sdate']) {
echo $_smarty_tpl->tpl_vars['row']->value['sdate'];
} else { ?>请选择创办时间<?php }?></button>
					<input type="hidden" id="sdate" name="sdate" value="<?php if ($_smarty_tpl->tpl_vars['row']->value['sdate']) {
echo $_smarty_tpl->tpl_vars['row']->value['sdate'];
}?>">
					</span></li>

                    <li>
                        <a href="#moneyhtml">
                            <span class="yunset_list_name">注册资金<em class="yunset_xttip">(选填)</em></span>
                            <span class="yunset_list_commentary" id="moneyshow">
                        		<?php if ($_smarty_tpl->tpl_vars['row']->value['money']) {?>
                        			<?php echo $_smarty_tpl->tpl_vars['row']->value['money'];?>

                        			<?php if ($_smarty_tpl->tpl_vars['row']->value['moneytype']==2) {?>万美元<?php } elseif ($_smarty_tpl->tpl_vars['row']->value['moneytype']==1) {?>万元<?php }?>
                        		<?php } else { ?>
                        			请填写注册资金
                        		<?php }?>
                        	</span>
                        </a>
                    </li>
                </ul>
                <div class="yunset_bth_box"> <button id="infosubmit2" type="button" class="mui-btn mui-btn-block mui-btn-primary">保 存</button>
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
                <div class="yun_wap_info_brief">
                    <div class="yun_wap_info_brief_c">
                        <div class="yun_wap_addresume_box_nexttit"> 企业简介 </div>
                        <textarea class="textAreaMsg tip contenttext" id="content" name="content" placeholder="请输入企业简介描述500字以内"><?php echo $_smarty_tpl->tpl_vars['row']->value['content'];?>
</textarea></div>
                    <div class="yunset_bth_box">  <a class="yun_wap_info_brief_tit_bc mui-action-back">确定</a>    </div>
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
                        <div class="yun_info_fl_zdy"><input type="text" value="" class="" tabindex="1000" id="addwelfare" placeholder="请输入福利名称" style="font-size:14px;">
                            <div class="yun_info_fl_zdy_tj"> <button type="button" class="addwelfarebox">+ 添加福利</button></div>
                        </div>
                <div class="yunset_bth_box" style="padding-left:0px; padding-right:10px;"> 
                            <a class="yun_wap_info_brief_tit_bc mui-action-back">确定</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="moneyhtml" class="mui-page">
    <div class="mui-page-content">
        <div class="mui-scroll-wrapper">
            <div class="mui-scroll">
                <div class="yun_info_fl">
                    <div class="yun_info_fl_c">
                        <div class="yun_wap_addresume_box_nexttit">注册资金</div>
                        <div class="yun_info_fl_zj">
                            <div class="yun_info_fl_zj_c"> 
								<button id='moneytypeComPicker' class="mui-btn mui-btn-block" type='button' data-moneytype="<?php echo $_smarty_tpl->tpl_vars['row']->value['moneytype'];?>
"><?php if ($_smarty_tpl->tpl_vars['row']->value['moneytype']==2) {?>美元<?php } else { ?>人民币<?php }?></button>
								<input type="hidden" id="moneytype" name="moneytype" value="<?php if ($_smarty_tpl->tpl_vars['row']->value['moneytype']) {
echo $_smarty_tpl->tpl_vars['row']->value['moneytype'];
} else { ?>1<?php }?>">
							</div>

                            <input type="text" id="money" name="money" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['money'];?>
" class="yun_wap_addtel_a" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')" placeholder="注册资金">
							<span class="yun_info_fl_zj_dw moneyname"><?php if ($_smarty_tpl->tpl_vars['row']->value['moneytype']==2) {?>万美元<?php } else { ?>万元<?php }?></span>
                        </div>
                  <div class="yunset_bth_box" style="padding-left:0px; padding-right:10px;">      <a class="yun_wap_info_brief_tit_bc mui-action-back">确定</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="logohtml" class="mui-page">
    <div class="mui-page-content">
        <div class="mui-scroll-wrapper">
            <div class="mui-scroll">
                <div class="photo_i_box_v">
                    <div id="showResult">
                        <div id="changeAvatar" class="photo_i_box">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['row']->value['logo'];?>
" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_unit_icon'];?>
',2);" width="120" height="120">
                        </div>
                        <div class="clear"></div>
                        <div class="photo_xz"><input id="image" type="file" accept="image/*" />选择上传logo</div>
                        <div class="yunset_identity_msg"><i class="yunset_identity_msg_icon"></i>选择上传logo点击提交按钮即可上传<?php if ($_smarty_tpl->tpl_vars['row']->value['logo_n']) {?>(<?php if ($_smarty_tpl->tpl_vars['row']->value['logo_status']=='1') {?><font color="red">审核中</font><?php } elseif ($_smarty_tpl->tpl_vars['row']->value['logo_status']=='2') {?><font color="red">未通过</font><?php } else { ?><font color="red">已审核</font><?php }?>)<?php }?></div>
                        <input type="hidden" value=""  id="previewlogo">
                        <div class="photo_tj">
                            <input type='hidden' name="txt" id="uimage" value="">
                            <input name="submit" type="button" onclick="photo()" value="提交" class="yunset_bth" />
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>

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
>
    weburl = "<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
";
    var formData = new FormData(),
        newuploadpic;
    
    var address = document.getElementById('address');
	var map = new BMap.Map("map_container");
	map.centerAndZoom(new BMap.Point(116.404, 39.915), 12);
	<?php if ($_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['row']->value['cityid']]) {?>
		var searchcity = '<?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['row']->value['cityid']];?>
';
	<?php } else { ?>
		var searchcity ='全国';
	<?php }?> 
	var local;

	function getLocalResult() {
		
		var address = document.getElementById('address').value;
		var points 	= local.getResults();
		
		if(points.getPoi(0)){
			
			var lngLat = points.getPoi(0).point;
			setLocation('map_container', lngLat.lng, lngLat.lat, "map_x", "map_y");
			document.getElementById("map_x").value = lngLat.lng;
			document.getElementById("map_y").value = lngLat.lat;
		}else{
			
			layermsg('该地址未搜索到！', 2);
			return false;
		}
	}

	function localsearch(city) {
		if(document.getElementById('address').value == "") {
			layermsg('请输入详细地址！', 2);
			return false;
		}
		local = new BMap.LocalSearch(city, {
			renderOptions: {
				map: map,
				panel: "r-result",
				autoViewport: true,
				selectFirstResult: false
			},
			onSearchComplete: getLocalResult
		});
		local.search(document.getElementById('address').value);
	}

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
			document.getElementById('mapshow').style.color = 'red';
		});
	}
<?php echo '</script'; ?>
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
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/data/plus/city.cache.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
/js/mui/mui.view.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
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
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/cominfo.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/category.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>

 
<?php echo '<script'; ?>
 language="javascript">
	$(document).ready(function() {
		if(document.getElementById('main')){
			document.getElementById('main').addEventListener('touchmove', function (e) { e.preventDefault();}, {passive: false});
		}
		if(document.getElementById('addnexthtml')){
			document.getElementById('addnexthtml').addEventListener('touchmove', function (e) { e.preventDefault();}, {passive: false});
		}
	})
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
    var prData = [];
    '<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_pr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>'
    prData.push({
        value: '<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
',
        text: '<?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
'
    })
    '<?php } ?>'
    var munData = [];
    '<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_mun']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>'
    munData.push({
        value: '<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
',
        text: '<?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
'
    })
    '<?php } ?>'
    var infostatusData = [
        {value:1,text:'公开'},
        {value:2,text:'不公开'},
    ];
    
<?php echo '</script'; ?>
>
 
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/member/public/remind.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
