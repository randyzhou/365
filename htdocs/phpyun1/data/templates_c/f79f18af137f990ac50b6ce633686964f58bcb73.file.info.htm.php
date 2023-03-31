<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-11 15:05:56
         compiled from "D:\rcw\uploads\app\template\wap\member\user\info.htm" */ ?>
<?php /*%%SmartyHeaderCode:15877857475fab8d5415df78-63596227%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f79f18af137f990ac50b6ce633686964f58bcb73' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\wap\\member\\user\\info.htm',
      1 => 1576492524,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15877857475fab8d5415df78-63596227',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config_wapdomain' => 0,
    'config' => 0,
    'wap_style' => 0,
    'resume' => 0,
    'nametype' => 0,
    'user_sex' => 0,
    'userclass_name' => 0,
    'j' => 0,
    'v' => 0,
    'userdata' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fab8d541a2e74_78104593',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fab8d541a2e74_78104593')) {function content_5fab8d541a2e74_78104593($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/member/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
/js/mui/css/mui.picker.min.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
/js/mui/css/mui.poppicker.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/style.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
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
                        <a href="#photohtml" class="yunset_list_max">
                            <span class="yunset_list_name">头像</span>
 							<span class="yunset_list_tx ">
								<img id="photopic" src="<?php echo $_smarty_tpl->tpl_vars['resume']->value['photo'];?>
" border="0" >
							</span>
                        </a>
                    </li>
					<li>
						<span class="yunset_list_name">头像展示</span><span class="yunset_list_commentary">
						<button id='phototypePicker' class="mui-btn mui-btn-block" type='button' data-phototype="<?php echo $_smarty_tpl->tpl_vars['resume']->value['phototype'];?>
"><?php if ($_smarty_tpl->tpl_vars['resume']->value['phototype']==1) {?>不公开<?php } else { ?>公开<?php }?></button>
						<input type="hidden" id="phototype" name="phototype" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['phototype'];?>
">
						</span>
					</li>
                </ul>
                <ul class="yunset_list mt15">
                    <li class="yunset_list_text"><span class="yunset_list_name">姓名</span ><span class="yunset_list_commentary"><input type="text" name="name" id="name" <?php if ($_smarty_tpl->tpl_vars['resume']->value['idcard_status']==1) {?>readonly<?php }?>  value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['name'];?>
" placeholder="请输入姓名"></span></li>
					<li>
						<span class="yunset_list_name">姓名展示</span><span class="yunset_list_commentary">
						<button id='nametypePicker' class="mui-btn mui-btn-block" type='button' data-nametype="<?php echo $_smarty_tpl->tpl_vars['resume']->value['nametype'];?>
"><?php echo $_smarty_tpl->tpl_vars['nametype']->value[$_smarty_tpl->tpl_vars['resume']->value['nametype']];?>
</button>
						<input type="hidden" id="nametype" name="nametype" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['nametype'];?>
">
						</span>
					</li>
				</ul>
                <ul class="yunset_list mt15">

                    <li><span class="yunset_list_name">性别</span><span class="yunset_list_commentary">
					<button id='sexPicker' class="mui-btn mui-btn-block" type='button' data-sex="<?php echo $_smarty_tpl->tpl_vars['resume']->value['sex'];?>
"><?php if ($_smarty_tpl->tpl_vars['resume']->value['sex']) {
echo $_smarty_tpl->tpl_vars['user_sex']->value[$_smarty_tpl->tpl_vars['resume']->value['sex']];
} else { ?>请选择性别<?php }?></button>
					<input type="hidden" id="sex" name="sex" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['sex'];?>
">
					</span></li>

                    <li><span class="yunset_list_name">出生年月</span><span class="yunset_list_commentary">
					<button id='birthdayUserPicker' data-options='{"type":"date","value":"<?php if ($_smarty_tpl->tpl_vars['resume']->value['birthday']) {
echo $_smarty_tpl->tpl_vars['resume']->value['birthday'];
} else { ?>1988-08-08<?php }?>","beginYear":1955,"endYear":2010}'  class="btn mui-btn mui-btn-block"><?php if ($_smarty_tpl->tpl_vars['resume']->value['birthday']) {
echo $_smarty_tpl->tpl_vars['resume']->value['birthday'];
} else { ?>1988-08-08<?php }?></button>
					<input type="hidden" id="birthday" name="birthday" value="<?php if ($_smarty_tpl->tpl_vars['resume']->value['birthday']) {
echo $_smarty_tpl->tpl_vars['resume']->value['birthday'];
} else { ?>1988-08-08<?php }?>">
					</span></li>

                    <li><span class="yunset_list_name">最高学历</span><span class="yunset_list_commentary">
					<button id='eduPicker' class="mui-btn mui-btn-block" type='button' data-edu="<?php echo $_smarty_tpl->tpl_vars['resume']->value['edu'];?>
"><?php if ($_smarty_tpl->tpl_vars['resume']->value['edu']) {
echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['resume']->value['edu']];
} else { ?>请选择最高学历<?php }?></button>
					<input type="hidden" id="edu" name="edu" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['edu'];?>
">
					</span></li>

                    <li><span class="yunset_list_name">工作经验</span><span class="yunset_list_commentary">
					<button id='expPicker' class="mui-btn mui-btn-block" type='button' data-exp="<?php echo $_smarty_tpl->tpl_vars['resume']->value['exp'];?>
"><?php if ($_smarty_tpl->tpl_vars['resume']->value['exp']) {
echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['resume']->value['exp']];
} else { ?>请选择工作经验<?php }?></button>
					<input type="hidden" id="exp" name="exp" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['exp'];?>
">
					</span></li>

                    <li class="yunset_list_text"><span class="yunset_list_name">现居住地</span><span class="yunset_list_commentary"><input type="text" name="living"  id="living"value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['living'];?>
" placeholder="请输入现居住地"></span></li>
                </ul>
                <ul class="yunset_list mt15">
                    <li class="yunset_list_text"><span class="yunset_list_name">手机</span><span class="yunset_list_commentary">
					<?php if ($_smarty_tpl->tpl_vars['resume']->value['moblie_status']==1) {?>
					（已绑定）<?php echo $_smarty_tpl->tpl_vars['resume']->value['telphone'];?>
 
					<input type="hidden" id="telphone" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['telphone'];?>
">
					<?php } else { ?>
					<input type="text" name="telphone" id="telphone" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['telphone'];?>
" onkeyup="this.value=this.value.replace(/[^0-9.]/g,'')" class=""placeholder="请输入手机号码" >
					<?php }?> 
					</span></li>
						
                </ul>

             <div class="yunset_bth_box">
                    <a href="#addnexthtml" class="yun_wap_info_brief_tit_bc addnext">下一步</a>
                </div>
                <div style="height:30px;"></div>
                <!--<div class="yunset_bth_box"> <button id="submit" class="mui-btn mui-btn-block mui-btn-primary">保 存</button>-->
            </div>
        </div>
    </div>
</div>
</div>

<div id="addnexthtml" class="mui-page">
    <div class="mui-page-content">
        <div class="mui-scroll-wrapper">
            <div class="mui-scroll">

                <ul class="yunset_list">

                    <li class="yunset_list_text"><span class="yunset_list_name" style="width:150px">详细地址<em class="yunset_xttip">（选填）</em></span>
                        <div class="yunset_list_commentary"> <input type="text" name="address" id="address" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['address'];?>
" placeholder="XXX省XXX市XXX区XXX街道" class=""></div>
                    </li>

                    <li class="yunset_list_text"><span class="yunset_list_name">身高<em class="yunset_xttip">（选填）</em></span > 
                      	<span class="yunset_list_commentary" style="padding-right:20px;">
                    		<input type="number" name="height" id="height"  value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['height'];?>
" placeholder="">
                      	</span>
                        <i style=" position:absolute;right:10px;top:0px; display:inline-block; line-height:44px;">CM</i>
                    </li>

                    <li class="yunset_list_text"><span class="yunset_list_name">体重<em class="yunset_xttip">（选填）</em></span > 
                      	<span class="yunset_list_commentary" style="padding-right:20px;">
                    		<input type="number" name="weight" id="weight"  value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['weight'];?>
" placeholder="">
                      	</span>
                        <i style=" position:absolute;right:10px;top:0px; display:inline-block; line-height:44px;">KG</i>
                    </li>

                    <li class="yunset_list_text"><span class="yunset_list_name">民族<em class="yunset_xttip">（选填）</em></span>
                        <div class="yunset_list_commentary"> <input type="text" name="nationality" id="nationality" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['nationality'];?>
" placeholder="例：汉" class=""></div>
                    </li>

                    <li><span class="yunset_list_name">婚姻<em class="yunset_xttip">（选填）</em></span><span class="yunset_list_commentary">
					<button id='marriagePicker' class="mui-btn mui-btn-block" type='button' data-marriage="<?php echo $_smarty_tpl->tpl_vars['resume']->value['marriage'];?>
"><?php if ($_smarty_tpl->tpl_vars['resume']->value['marriage']) {
echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['resume']->value['marriage']];
} else { ?>请选择婚姻状况<?php }?></button>
					<input type="hidden" id="marriage" name="marriage" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['marriage'];?>
">
					</span></li>

                    <li class="yunset_list_text"><span class="yunset_list_name" style="width:150px">户籍所在地<em class="yunset_xttip">（选填）</em></span>
                        <div class="yunset_list_commentary"> <input type="text" name="domicile" id="domicile" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['domicile'];?>
" placeholder="例：江苏-宿迁" class=""></div>
                    </li>

                    <li class="yunset_list_text"><span class="yunset_list_name">QQ<em class="yunset_xttip">（选填）</em></span>
                        <div class="yunset_list_commentary"> <input type="text" name="qq" id="qq" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['qq'];?>
" class="" placeholder="请填写QQ号码"></div>
                    </li>

					<li class="yunset_list_text">
							<span class="yunset_list_name">邮箱</span>
							<span class="yunset_list_commentary ">
								<?php if ($_smarty_tpl->tpl_vars['resume']->value['email_status']==1) {?>
									已验证）<?php echo $_smarty_tpl->tpl_vars['resume']->value['email'];?>

									<input type="hidden" id="email" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['email'];?>
">
								<?php } else { ?>
									<input type="text" name="email" id="email" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['email'];?>
" class="" placeholder="请输入联系邮箱" > 
								<?php }?> 
							</span>
						</li>

                    <li class="yunset_list_text">
                        <span class="yunset_list_name" style="width:150px">个人二维码<em class="yunset_xttip">（选填）</em></span>
                     	<span class="yunset_list_commentary" id="previewshow">
                          	<img id="previewimg" src="<?php echo $_smarty_tpl->tpl_vars['resume']->value['wxewm'];?>
" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_ewm'];?>
',2);" style="border-radius:0px;width:20px;height:20px;">
                       	</span>
                        <div class="yunset_list_file"> 
                        	<input type="file" id="pic" name="pic" onchange="previewImage(this,'preview')" accept="image/*"  />
                        </div>
                   		<input type='hidden' name='preview' value='' id='preview'>  
                    </li>

                    <li class="yunset_list_text"><span class="yunset_list_name" style="width:150px">个人主页/博客<em class="yunset_xttip">（选填）</em></span>
                        <div class="yunset_list_commentary"> <input type="text" name="homepage" id="homepage" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['homepage'];?>
" placeholder="请填写个人主页/博客" class="" style="width:78%"></div>
                    </li>
                </ul>

 
                <div class="yunset_bth_box" style="background: transparent; border: none;">
					
                    <button id="submit" class="mui-btn mui-btn-block mui-btn-primary">保 存</button>

                    <a class="yun_wap_info_brief_tit_bc mui-action-back" style="background:#f8f8f8;border:1px solid #eee;color:#333; margin-top:10px;">返回上一步</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="photohtml" class="mui-page">
    <div class="mui-page-content">
        <div class="mui-scroll-wrapper">
            <div class="mui-scroll">
                <div id="showResult">
                    <div id="changeAvatar" class="photo_i_box">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['resume']->value['photo'];?>
" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_unit_icon'];?>
',2);" width="120" height="120">
                    </div>
                    <div class="clear"></div>
                    <div class="photo_xz">
                        <input id="image" type="file" accept="image/*" />选择上传头像
                    </div>
                    <div class="yunset_identity_msg"><i class="yunset_identity_msg_icon"></i>选择上传头像点击提交按钮即可上传<?php if ($_smarty_tpl->tpl_vars['resume']->value['photo_n']) {?>(<?php if ($_smarty_tpl->tpl_vars['resume']->value['photo_status']=='1') {?><font color="red">审核中</font><?php } elseif ($_smarty_tpl->tpl_vars['resume']->value['photo_status']=='2') {?><font color="red">未通过</font><?php } else { ?><font color="red">已审核</font><?php }?>)<?php }?></div>
                    <div class="photo_tj">
                        <input type='hidden' name="txt" id="uimage" value="">
                        <input name="submit" type="button" onclick="photo()" value="提交" class="yunset_bth" />
                    </div>
                </div>
                <input type="hidden" value=""  id="previewlogo">
            </div>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
>
    weburl = "<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
";
    var formData = new FormData(),
        newuploadpic;
<?php echo '</script'; ?>
>
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
    $(function() {

        

        function cutImg() {
            $('#showResult').fadeOut();
        }
        $('#image').on('change', function() {
            cutImg();
        });

        
        var $inputImage = $('#image'),
            URL = window.URL || window.webkitURL,
            blobURL;
        if(URL) {
            $inputImage.change(function() {
                var files = this.files,
                    file;
                previewImage(this,'previewlogo');
                if(files && files.length) {
                    file = files[0];

                    if(/^image\/\w+$/.test(file.type)) {
                        setTimeout(function(){
                            toAlloyCrop($('#previewlogo').val());
                        },1000);
                        $inputImage.val('');
                    } else {
                        showMessage('请上传图片');
                    }
                }
            });
        } else {
            $inputImage.parent().remove();
        }
        function toAlloyCrop(pic){
            var mAlloyCrop;
            
            mAlloyCrop = new AlloyCrop({
                image_src: pic,
                width: 200,
                height: 200,
                output: 1,
                ok: function(base64, canvas) {
                    $("#changeAvatar > img").attr("src", base64);
                    document.getElementById('uimage').value = base64;
                    $('#showResult').fadeIn();
                    mAlloyCrop.destroy();
                },
                cancel: function() {
                    $('#showResult').fadeIn();
                    mAlloyCrop.destroy();
                },
                ok_text: '确定',
                cancel_text: '取消'
            });
        }
    });
    
    var sexData = [];
    '<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['user_sex']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>'
    sexData.push({
        value: '<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
',
        text: '<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
'
    });
    '<?php } ?>'
    var eduData = [];
    '<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_edu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>'
    eduData.push({
        value: '<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
',
        text: '<?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
'
    })
    '<?php } ?>'
    var marriageData = [];
    '<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_marriage']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>'
    marriageData.push({
        value: '<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
',
        text: '<?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
'
    })
    '<?php } ?>'
    var expData = [];
    '<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_word']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>'
    expData.push({
        value: '<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
',
        text: '<?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
'
    })
    '<?php } ?>'
	var nametypeData = [];
    '<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nametype']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>'
    nametypeData.push({
        value: '<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
',
        text: '<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
'
    });
    '<?php } ?>'
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
	        indicators: true, //是否显示滚动条
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
    (function() {
    	
		if(document.getElementById('main')){
			document.getElementById('main').addEventListener('touchmove', function (e) { e.preventDefault();}, {passive: false});
		}
		if(document.getElementById('addnexthtml')){
			document.getElementById('addnexthtml').addEventListener('touchmove', function (e) { e.preventDefault();}, {passive: false});
		}
		
        mui('.yunset_bth_box').on('tap', '.addnext', function() {
            var name = $.trim(document.getElementById('name').value),
                sex = $.trim(document.getElementById('sex').value),
                birthday = $.trim(document.getElementById('birthday').value),
                edu = $.trim(document.getElementById('edu').value),
                exp = $.trim(document.getElementById('exp').value),
                living = $.trim(document.getElementById('living').value),
                telphone = $.trim(document.getElementById('telphone').value),
                email = $.trim(document.getElementById('email').value);

            if(name == '') {
                mui.toast('请填写姓名！');
                return false;
            }
            if(sex == '') {
                mui.toast('请选择性别！');
                return false;
            }
            if(birthday == '') {
                mui.toast('请选择出生年月！');
                return false;
            }
            if(edu == '') {
                mui.toast('请选择最高学历！');
                return false;
            }
            if(exp == '') {
                mui.toast('请选择工作经验！');
                return false;
            }
            if(living == '') {
                mui.toast('请填写现居住地！');
                return false;
            }
            if(telphone == '') {
                mui.toast('请填写手机！');
                return false;
            } else if(!isjsMobile(telphone)) {
                mui.toast('手机格式错误！');
                return false;
            }
            var myreg = /^([a-zA-Z0-9\-]+[_|\_|\.]?)*[a-zA-Z0-9\-]+@([a-zA-Z0-9\-]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
            if(email != "" && !myreg.test(email)) {
                mui.toast('邮箱格式错误！');
                return false;
            }

        })
        var submitBtn = document.getElementById('submit')
        if(submitBtn) {
            submitBtn.addEventListener('tap', checkinfo, false)
        }
    })();

    function photo() {
        var uimage = $("#uimage").val();
        if(uimage == '') {
            layermsg('头像未改变，无需修改');
            return false;
        }else{
			var regS = new RegExp("\\+", "gi");
			uimage = uimage.replace(regS, "#");
			layer_load('执行中，请稍候...');
			$.ajax({
				type: 'POST',
				url: "index.php?c=photo",
				cache: false,
				dataType: 'json',
				data: {
					uimage: uimage,
					submit: 1
				},
				success: function(res) {
					layer.closeAll();
					if(res){
                        layermsg(res.msg, 2, function() {
                            window.location.href = wapurl + "member/index.php?c=info";
                        });
                        return false;
                    }
				}
			});
		}
        
    }
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/publicselect.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/category.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
 

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
