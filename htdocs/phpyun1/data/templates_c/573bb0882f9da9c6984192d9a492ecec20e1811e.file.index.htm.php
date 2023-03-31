<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-11 16:50:01
         compiled from "D:\rcw\uploads\app\template\default\map\index.htm" */ ?>
<?php /*%%SmartyHeaderCode:3915677245faba5b9433fa2-05436565%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '573bb0882f9da9c6984192d9a492ecec20e1811e' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\default\\map\\index.htm',
      1 => 1579068491,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3915677245faba5b9433fa2-05436565',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'keywords' => 0,
    'description' => 0,
    'style' => 0,
    'config' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5faba5b94505e4_53108204',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5faba5b94505e4_53108204')) {function content_5faba5b94505e4_53108204($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
		<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />

		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/css.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
		<link href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/map.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />

		<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
	</head>

	<body style="background: #f8f8f8; height: 100%; overflow: hidden;">
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


		<div class="clear"></div>
		<div class="new_mapbox">
			<div class="new_mapbox_nav">
				<ul>
					<li id="tjob" class="new_mapbox_nav_cur">
						<a href="javascript: void(0)" class="changetype" data-type="job"><i class="new_mapbox_nav_icon"></i>职位</a>
					</li>
					<li id="tcompany">
						<a href="javascript: void(0)" class="changetype" data-type="company"><i class="new_mapbox_nav_icon new_mapbox_nav_icon_gs"></i>公司</a>
					</li>
				</ul>
			</div>

			<div class="new_mapbox_left">
				<div class="new_mapbox_search">
					<input id="keyword" type="text" name="key" value="" placeholder="请输入职位名称" class="new_mapbox_search_text">
					<input type="hidden" name="searchtype" id="searchtype" value="job" />
					<input id="submitbutton" type="button" value="搜索" class="new_mapbox_search_bth" href="javascript: void(0)">
				</div>

				<div id="newcontent" class="new_map_jobbox">


				</div>
				<div id="Pagination" class="pagination"></div>
			</div>
			<div class="new_mapbox_right">
				<div id="map_content">

					<div id="map">
						<div id="map-container" class="inner"></div>
						<div class="map-loader">
							<img src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/map_loader.gif" />
						</div>
						<div class="map-loader-box">
							<img src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/map_loader_box.gif" />
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="clear"></div>
		<!--[if IE 6]>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/png.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
>
		DD_belatedPNG.fix('.png');
		<?php echo '</script'; ?>
>
		<![endif]-->

		<?php echo '<script'; ?>
>
			weburl = "<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
";
		<?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
		<link href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/css/layui.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet"
		 type="text/css" />
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
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/lazyload.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['mapurl'];?>
" charset="utf-8"><?php echo '</script'; ?>
>

		<?php echo '<script'; ?>
>
			var getdataurl = '<?php echo smarty_function_url(array('m'=>'map','c'=>'search'),$_smarty_tpl);?>
';
			var marker_icon_url = "<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/map_markers.png";
			var marker_icon_blue = "<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/map_marker_blue.png";
			var x = "<?php echo $_smarty_tpl->tpl_vars['config']->value['map_x'];?>
";
			var y = "<?php echo $_smarty_tpl->tpl_vars['config']->value['map_y'];?>
";
			var map_tocity = "<?php echo $_smarty_tpl->tpl_vars['config']->value['map_tocity'];?>
";
		<?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/js/map.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
		<div class="none"><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
></div>
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/public_search/login.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
