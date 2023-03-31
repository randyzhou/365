<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-11 15:31:58
         compiled from "D:\rcw\uploads\app\template\wap\member\user\photo.htm" */ ?>
<?php /*%%SmartyHeaderCode:18269549365fab936e00baa9-25170372%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '254dc00117869323d2b18bd8f017dabd9c0ab982' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\wap\\member\\user\\photo.htm',
      1 => 1579576792,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18269549365fab936e00baa9-25170372',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wap_style' => 0,
    'config' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fab936e01d554_64840192',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fab936e01d554_64840192')) {function content_5fab936e01d554_64840192($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/member/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
>
    $(function() {
        $('#image').on('change', function() {
            cutImg();
        });

		var $inputImage = $('#image'),
			URL = window.URL || window.webkitURL;
		if (URL) {
			$inputImage.change(function() {
                var files = this.files,
                    file;
                previewImage(this,'preview');
                if(files && files.length) {
                    file = files[0];

                    if(/^image\/\w+$/.test(file.type)) {
                        setTimeout(function(){

                            toAlloyCrop($('#preview').val());
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
    });
	function cutImg() {
		$('#showResult').fadeOut();
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
							window.location.reload();
						});
						return false;
					}
				}
			});
		}
    }
<?php echo '</script'; ?>
>

<section class="resume_mangage">
    <div class="clear"></div>
    <div class="verify">
        <div class="photo_i_box_v">
            <div class="photo_i_box_v_c">
                <div id="showResult">
                    <div id="changeAvatar" class="photo_i_box">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['user']->value['photo'];?>
" width="120" height="120">
                    </div>
                    <div class="clear"></div>
                    <div class="photo_xz">
                        <input id="image" type="file" accept="image/*" />选择上传头像
                    </div>
                    <div class="yunset_identity_msg"><i class="yunset_identity_msg_icon"></i>选择上传头像点击提交按钮即可上传<?php if ($_smarty_tpl->tpl_vars['user']->value['photo_n']) {?>(<?php if ($_smarty_tpl->tpl_vars['user']->value['photo_status']=='1') {?><font color="red">审核中</font><?php } elseif ($_smarty_tpl->tpl_vars['user']->value['photo_status']=='2') {?><font color="red">未通过</font><?php } else { ?><font color="red">已审核</font><?php }?>)<?php }?></div>
                </div>
                
                <input type="hidden" value=""  id="preview">
            </div>
            <div class="photo_tj">
                <input type='hidden' name="txt" id="uimage" value="">
                <input name="submit" type="button" onclick="photo()" value="提交" class="yunset_bth" />
            </div>
        </div>
    </div>
</section>
<div class="clear"></div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
