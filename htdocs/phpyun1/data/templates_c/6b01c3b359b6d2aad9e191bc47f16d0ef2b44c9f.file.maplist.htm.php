<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-07 03:13:11
         compiled from "D:\rcw\uploads\app\template\wap\maplist.htm" */ ?>
<?php /*%%SmartyHeaderCode:9710687995fa5a0471142d7-84831033%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b01c3b359b6d2aad9e191bc47f16d0ef2b44c9f' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\wap\\maplist.htm',
      1 => 1576479791,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9710687995fa5a0471142d7-84831033',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'keywords' => 0,
    'description' => 0,
    'config' => 0,
    'tplmoblie' => 0,
    'headertitle' => 0,
    'mapx' => 0,
    'mapy' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fa5a047137bd5_16601822',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fa5a047137bd5_16601822')) {function content_5fa5a047137bd5_16601822($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
?><!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <meta http-equiv="Cache-Control" content="no-cache" />
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
,wap" />
        <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width" initial-scale="1" />
        <meta name="viewport" content="initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0, user-scalable=no, width=device-width" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/css.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/job.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/map.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
    </head>

    <body>
        <header>
            <div class="header">
                <div class="header_bg <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {?>bg<?php echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>">
                    <a class="hd-lbtn" href="javascript:history.back();"><i class="header_top_l"></i></a>
                    <div class="header_map"><?php echo $_smarty_tpl->tpl_vars['headertitle']->value;?>
</div>
                </div>
            </div>
        </header>
        <div id="loading">
            <i class="loading_icon"></i>
        </div>

        <div class="yun_map_titmap">
            <ul>
                <li>
                    <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'map','x'=>$_GET['x'],'y'=>$_GET['y']),$_smarty_tpl);?>
">列表</a>
                </li>
                <li class="yun_map_cur">
                    <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'map','a'=>'maplist','x'=>$_GET['x'],'y'=>$_GET['y']),$_smarty_tpl);?>
" class="">地图</a>
                </li>
            </ul>
        </div>
        <div id="allmap"></div>
        <input type="hidden" name="x" id="mapx" value="<?php echo $_smarty_tpl->tpl_vars['mapx']->value;?>
" />
        <input type="hidden" name="y" id="mapy" value="<?php echo $_smarty_tpl->tpl_vars['mapy']->value;?>
" />
        <!--左面-->
        <div id="map-controls">
            <button id="show-company-list"><i class="map_list map_iconfont_search_map "></i></button>
            <button id="my-location"><i class="map_jz_list map_iconfont_search_map_nav "></i></button>
        </div>
        <!--右面放大缩小-->
        <!--公司-->
        <!--下面公司-->
        <div id="company-panel-controls" style="display:none;"> <span id="company-panel-close" class="icon close" style="display: none;"></span> <span id="company-panel-refresh">换一批<span class="icon refresh"></span><i class="iconfont map_iconfont_search_map_nav_hyh" style="font-size:16px; margin-left:5px;"></i></span>
        </div>
        <div id="company-panel" style="display:none;">
            <div id="company-list" style="margin-left: 0; width:100%;">
            </div>
            <ul id="company-indicator"></ul>
            <span id="company-list-prev" class="icon prev"><i class="iconfont company-listicon"></i></span> <span id="company-list-next" class="icon next"><i class="iconfont company-listicon"></i></span>
        </div>
        <style type="text/css">
            #allmap {
                width: 100%;
                height: 100%;
                overflow: hidden;
                margin: 0;
                font-family: "微软雅黑";
            }
        </style>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/js/prefixfree.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/js/layer/layer.m.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['mapurl'];?>
"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript">
            var wapurl = '<?php echo smarty_function_url(array('m'=>'wap'),$_smarty_tpl);?>
';
            var x = $("#mapx").val();
            var y = $("#mapy").val();
			var configx = parseFloat("<?php echo $_smarty_tpl->tpl_vars['config']->value['map_x'];?>
");
            var configy = parseFloat("<?php echo $_smarty_tpl->tpl_vars['config']->value['map_y'];?>
");
            var map = new BMap.Map("allmap");
			if(x > 0  && y > 0){
				var point = new BMap.Point(x, y);
			}else{
				if(configx>0 && configy>0){
					var point = new BMap.Point(configx, configy);
				}else{
					var point = new BMap.Point(116.39131928, 39.90793074);
				}
			}
            var map_zoom = 15; //3---18                           //设置地图初始缩放级别
            map.centerAndZoom(point, map_zoom); //设置中心点和地图缩放级别
            var company_list_index = 0; //1-10
            var company_list_index_max = 9;
            var res;
            var mk_list = new Array();
			var pagecount = 1;
            var page = 1;
            var location_r = {
                x: '',
                y: ''
            };
			var u = navigator.userAgent,osname=null;
			if(u.indexOf('Android') > -1 || u.indexOf('Adr') > -1){
				osname = 'Android';
			}else if(!!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/)){
				osname = 'iOS';
			}
            $(window).load(function() {
                //适当延迟隐藏，提高loading效果  
                $('#loading').hide(0);
            });
            $(function() {
				if(x > 0 && y > 0){
					get_com_list(page, x, y);	
				}else{
					get_current_loaction(page);
				}
                $('#my-location').click(function() {
                    get_current_loaction(1);
                });
				$('#company-panel-refresh').click(function() {
					get_com_list((page < pagecount) ? ++page : pagecount, x, y);
				});
            });

            function show_info_window(marker) {
                var i = marker.tag;
                var joblist_html = '';
                var joblist_length = 0;
                if(res.list[i].joblist.length>0) {
					for(var j=0;j<res.list[i].joblist.length;j++){
						joblist_html += '<li><a href="' + res.list[i].joblist[j].joburl + '">' + res.list[i].joblist[j].name + '</a></li>';
					}
                    joblist_length = res.list[i].joblist.length;
                }
                var info_html = ' <div class="map_company">' +'<div class="map_company_cont">' +'<ul class="map_company_post">' +joblist_html +'</ul>' +'<div class="map_company_xq"><a href="' + res.list[i].comurl + '">查看详情>></a></div>' +'</div>' +'</div>';
                var infoWindow = new BMap.InfoWindow(info_html, {
                    title: '<div class="map_company_h1"><a style="color:#000;" href="' + res.list[i].comurl + '">' + res.list[i].com_name + '</a></div>',
                    width: 100,
                    height: 20 * joblist_length + 90
                });
                marker.openInfoWindow(infoWindow);
            }

            function get_current_loaction(page) {
                var geolocation = new BMap.Geolocation();
                geolocation.getCurrentPosition(function(r) {
                    if(this.getStatus() == BMAP_STATUS_SUCCESS) {
						x = r.point.lng;
						y = r.point.lat;
						var local_point = new BMap.Point(x, y);
						map.centerAndZoom(local_point, 15);
						map.panTo(local_point);
                        get_com_list(page, x, y);
                        location_r.x = x;
                        location_r.y = y;
                        $('#mapx').val(x);
                        $('#mapy').val(y);
						$.post(wapurl + 'index.php?c=job&a=distance', {
							x: r.point.lng,
							y: r.point.lat
						}, function(data) {})
                    } else {
                        alert('failed' + this.getStatus());
                    }
                }, {
                    enableHighAccuracy: true
                });
            }

            function get_com_list(page, x, y) {
                var map = new BMap.Map("allmap");
                map.centerAndZoom(new BMap.Point(x, y), 13);
                var top_right_navigation = new BMap.NavigationControl({
                    anchor: BMAP_ANCHOR_BOTTOM_RIGHT,
                    type: BMAP_NAVIGATION_CONTROL_SMALL,
                    offset: new BMap.Size(0, 105)
                });
                map.addControl(top_right_navigation);
				var localcenter=null;
                $.post('index.php?c=map&a=comlist', {
                    x: x,
                    y: y,
                    page: page
                }, function(data) {
                    if(data) {
                        res = eval('(' + data + ')');
						pagecount = res.pagecount;
                        var company_indicator_html = '';
                        var company_list_html = '';
                        if (res.list.length > 0) {
                            location_r.x = res.list[0].x;
                            location_r.y = res.list[0].y;
                            var info_point = new BMap.Point(res.list[0].x, res.list[0].y);
                            map.centerAndZoom(info_point, 15);
                            map.panTo(info_point);
                            for(var i = 0; i < res.list.length; i++) {
                                info_point = new BMap.Point(res.list[i].x, res.list[i].y);
                                var mk = new BMap.Marker(info_point);
                                mk.tag = i;
                                mk.addEventListener("click", function() {
                                    show_info_window(this);
                                });

                                company_indicator_html += '<li ' + (i == 0 ? 'class="current"' : '') + ' style="width: 10%;"></li>';
                                company_list_html += '<div class="company-info" style="width: ' + document.body.clientWidth + 'px;">' +
                                    '<h3 class="company-title"><a href="' + res.list[i].comurl + '">' + res.list[i].com_name + '</a></h3>' +
                                    '</div>  ';
                                mk_list[i] = mk;
                                map.addOverlay(mk);
                            }
							$('#company-panel-controls').show();
                            $('#company-panel').show();
                        } else {
                            layermsg('您的附近没有相关职位！', 2);
                            $('#company-panel-controls').hide();
                            $('#company-panel').hide();
                            var info_point = new BMap.Point(x, y);
                            var mk = new BMap.Marker(info_point);
                            map.addOverlay(mk);
                            map.panTo(info_point);
                        }
                        company_list_index_max = res.list.length;
                        $('#company-indicator').html(company_indicator_html);
                        $('#company-list').html(company_list_html);
                        $('#company-list').width(document.body.clientWidth * res.list.length);
						localcenter = map.getCenter();
                    }
                });
				if(osname == 'Android'){
					var xArr = [];//存放横坐标
					var yArr = [];//存放纵坐标
					map.addEventListener("touchstart", function(e){ 
						//手指触摸屏幕的时候清空两个数组
						xArr.length = 0;
						yArr.length = 0;
					}); 
					map.addEventListener("touchmove",function(e){
						//如果滑动了屏幕，xArr和yArr将各存入两个坐标值，即始末坐标值
						xArr.push(e.targetTouches[0].pageX);
						yArr.push(e.targetTouches[0].pageY);
					});
					map.addEventListener('touchend',function(e){
						var far;
						var flag = true;
						//计算平移距离，区分滑动事件和点击事件
						if((xArr.length > 1) && (yArr.length > 1)){
							var lastx = xArr.length-1;
							var lasty = yArr.length-1;
							far = (Math.abs(xArr[0]-xArr[lastx]))^2 + (Math.abs(yArr[0]-yArr[lasty]))^2;
							if(far > 0){
								flag = false;
							}
						}
						setTimeout(function(){
							var nowcenter=map.getCenter();
							if(nowcenter.lat != localcenter.lat && nowcenter.lng != localcenter.lng){
								localcenter = nowcenter;
								flag = false;
							}
							if(flag){
								if(!e.overlay) {
									layer.open({
										content: '您确定查找该地区附近的职位吗？',
										btn: ['确定', '取消'],
										shadeClose: false,
										yes: function() {
											setTimeout(function() {
												location.href = wapurl + "index.php?c=map&x=" + e.point.lng + "&y=" + e.point.lat + "";
											}, 0);
										}
									});
								};
							}
						},300);
					});
				}else{
					var click = 1;
					map.addEventListener("touchstart", function(e){ 
						click = 1;
					}); 
					map.addEventListener("touchmove",function(e){
						click = 0;
					});
					map.addEventListener('touchend',function(e){
						if(click==1){
							if(!e.overlay) {
								layer.open({
									content: '您确定查找该地区附近的职位吗？',
									btn: ['确定', '取消'],
									shadeClose: false,
									yes: function() {
										setTimeout(function() {
											location.href = wapurl + "index.php?c=map&x=" + e.point.lng + "&y=" + e.point.lat + "";
										}, 0);
									}
								});
							};
						}
					});
				}
            }
        <?php echo '</script'; ?>
>
    </body>

</html><?php }} ?>
