<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-01 01:09:23
         compiled from "D:\rcw\uploads\app\template\member\com\uppic.htm" */ ?>
<?php /*%%SmartyHeaderCode:8742625675f9d9a43d62073-12150645%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8f4b81a29881dc4a5ba91c1d47d0198759f5700' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\member\\com\\uppic.htm',
      1 => 1576479786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8742625675f9d9a43d62073-12150645',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'company' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5f9d9a43d6ef66_14303683',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9d9a43d6ef66_14303683')) {function content_5f9d9a43d6ef66_14303683($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/imgareaselect/imgareaselect.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css"/>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/imgareaselect/jquery.imgareaselect.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>  
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/imgareaselect/ajaxfileupload.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>  
<div class="w1000">
  <div class="admin_mainbody"> 
  <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div class="com_tit"><span class="com_tit_span">企业LOGO</span> </div>
         <div class=right_box>
    <div class="admincont_box">
 
      <div class="com_body">
      <div class="com_new_tip"> 
          <span class="com_new_tip_h">温馨小提示</span>有时因页面缓存问题，上传后照片不能及时更新请击刷新页面即可 </div>
<div style="height:400px;">
  <div  style="padding-left:100px; padding-top:30px;">
    <div class="uppic_left">
            <div class="uppic_tip">方式一：选择本地LOGO，上传编辑企业LOGO</div>
            <div class="uppic_tip_bth">
             <a class="uppic_tip_bthupload" href="javascript:;">选择LOGO</a>
               <input id="image" class="uppic_tip_bthfile" type="file" name="image" onchange="ajaxfile();">
             </div>
             <div class="uppic_tip_gs">最大<?php echo $_smarty_tpl->tpl_vars['config']->value['file_maxsize'];?>
M,支持<?php echo $_smarty_tpl->tpl_vars['config']->value['pic_type'];?>
格式</div>    
             <div class="clear"></div>
             <div class="uppic_tit">
				LOGO预览
				<?php if ($_smarty_tpl->tpl_vars['company']->value['logo_n']) {?>
				<?php if ($_smarty_tpl->tpl_vars['company']->value['logo_status']=='1') {?>
					<font color="#f00">审核中</font>
				<?php } elseif ($_smarty_tpl->tpl_vars['company']->value['logo_status']=='2') {?>
					<font color="#f00">未通过</font>
				<?php } else { ?>
					<font color="#f00">已审核</font>
				<?php }?>
				<?php }?>
			</div>
			
             
              <div class="oppic_img_big">
              <div class="oppic_img_big_img" style="width:140px;height:140px;"><img src="<?php echo $_smarty_tpl->tpl_vars['company']->value['logo'];?>
" width='140' height='140' /></div>
              <div class="oppic_img_big_p" style="width:140px;">标准LOGO尺寸 140×140</div>
            </div>
            
  </div>
             </div>
        
           <div class="uppic_right">
          
			<div class="uppic_right_tit">方式二：手机拍照上传</div>
			<div class="uppic_ewm">
			 <img src="<?php echo smarty_function_url(array('m'=>'upload','c'=>'qrcode','type'=>4),$_smarty_tpl);?>
" alt="手机扫码拍照上传" width="130" height="130" />
			 </div>
			<div class="uppic_ewm_p"> 扫描二维码 </div>
			<div class="">  手机拍照上传后，请刷新此页面 </div>
		</div>
         
               </div>
                   
              <div class="clear"></div>  
          <div class="uppic_flash" style="display:none; float:none; width:auto" id='uppic_flash'> 
			<div class="uppic_big_zx" style="float:none; width:auto;border:none;">
				<img src="" style=" margin-right: 10px;" id="thumbnail" />
               </div>
               <div style="width:200px;"> 
                <div id="preview1" class="uppic_previ1">
					<img id="preview1_img" src="" style="position: relative;"/>
				</div>
            </div>       
			<div class="uppic_pb">
			<form name="form1" id="form1">
				<input name="sizeit" id="sizeit" type="submit" value="保存LOGO"  class="uppic_pb_bth"/>	
			</form>
          </div> 
          </div>
 
      
    </div>
  </div>
</div>
</div>
</div> 

<?php echo '<script'; ?>
>
function ajaxfile() {
	if($("#image").val() != '') {
		layer.load('图片上传中，请稍候....', 0);
		$.ajaxFileUpload({
			url: 'index.php?c=uppic&act=ajaxfileupload',
			secureuri: false, //是否需要安全协议，一般设置为false
			fileElementId: 'image', //文件上传域的ID
			dataType: 'json', //返回值类型 一般设置为json
			success: function (data, status){  //服务器成功响应处理函数
				layer.closeAll('loading');
				if (data.s_thumb) {
					layer.msg(data.s_thumb, 2, 8);
				} else {
					hideLoading(data.url);
				}
		   }
		})
	}
}
var size1={
	width:140,
	height:140
}
$('#preview1').width(size1.width);
$('#preview1').height(size1.height);
function hideLoading(pic) {
	$("#thumbnail").attr({ 'src': pic });
	$("#preview1_img").attr({ 'src': pic }); 
	$('#uppic_flash').show();
	var ias = $('#thumbnail').imgAreaSelect({
		aspectRatio: '140:140', //长宽1:1的比例，在等待剪裁的图像上呈现出正方形的选择框
		onSelectChange: lis, //把用户当前的选择状态传给lis函数
		onInit: function () {
			var _opt = ias.getOptions();
			render($('#preview1_img'), $("#thumbnail")[0], {
				height: _opt.y2 - _opt.y1,
				width: _opt.x2 - _opt.x1,
				x1: _opt.x1,
				x2: _opt.x2,
				y1: _opt.y1,
				y2: _opt.y2
			}, size1);
		},
		instance: true,
		keys: true,
		x1: 37, //选择框在图片里的初始位置，这里默认是图片左上角，宽度和高度都是200px，符合size1
		y1: 15,
		x2: size1.width,
		y2: size1.height
	});
}
function lis(img, sel) {
	render($('#preview1 img'), img, sel, size1); 
}
function render(target, img, sel, size) {
	var scale = size.width / sel.width;
	target.css({
		width: Math.round(scale * $(img).width()),
		height: Math.round(scale * $(img).height())
	});
	target.css({
		marginLeft: '-' + Math.round(scale * sel.x1) + 'px',
		marginTop: '-' + Math.round(scale * sel.y1) + 'px'
	});
	target.data('scale', scale);
	target.data('width', sel.width);
	target.data('height', sel.height);
	target.data('x', sel.x1);
	target.data('y', sel.y1);
}
//ajax提交表单
$(function () {
	$('#form1').submit(function (e) {
		e.preventDefault();
		e.stopPropagation();
		var preview1 = $('#preview1 img'); 
		loadlayer();
		$.post("index.php?c=uppic&act=savethumb", {
			sizeit: true,
			count: 1,
			width: preview1.data('width'),
			height: preview1.data('height'),
			x: preview1.data('x'),
			y: preview1.data('y'),
			img1: $('#preview1_img').attr('src'),
			scale: preview1.data('scale') 
		}, function (res) {
			layer.closeAll('loading');
			if(res){
				var res = eval('('+res+')');
				layer.msg(res.msg, 2, res.st,function(){location.reload();}); 
			}
		});
	});
});
<?php echo '</script'; ?>
> 
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
