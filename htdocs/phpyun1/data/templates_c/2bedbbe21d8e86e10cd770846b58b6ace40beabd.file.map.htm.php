<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-07 03:13:08
         compiled from "D:\rcw\uploads\app\template\wap\map.htm" */ ?>
<?php /*%%SmartyHeaderCode:12392872635fa5a04468c9c0-81120793%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2bedbbe21d8e86e10cd770846b58b6ace40beabd' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\wap\\map.htm',
      1 => 1576479742,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12392872635fa5a04468c9c0-81120793',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'keywords' => 0,
    'description' => 0,
    'config' => 0,
    'config_wapdomain' => 0,
    'tplmoblie' => 0,
    'headertitle' => 0,
    'mapx' => 0,
    'mapy' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fa5a0446a20c4_28622736',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fa5a0446a20c4_28622736')) {function content_5fa5a0446a20c4_28622736($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
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
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
/js/mui/css/mui.min.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
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

        <div class="yun_map_tit">
            <ul>
                <li class="yun_map_cur">
                    <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'map','x'=>$_GET['x'],'y'=>$_GET['y']),$_smarty_tpl);?>
">列表</a>
                </li>
                <li>
                    <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'map','a'=>'maplist','x'=>$_GET['x'],'y'=>$_GET['y']),$_smarty_tpl);?>
" class="tcq_mune_msgnews_box">地图</a>
                </li>
            </ul>
        </div>
        <div id="loading">
            <i class="loading_icon"></i>
        </div>

        <!--公司-->
        <div class="" id="com">
        </div>
        <div id="pageindicator" class="pages" style="padding-bottom:20px;display:none">
			<a href="javascript:void(0)" onclick="maptoPrev()" style="color:#333">上一页</a>
			<select id="pageChange" onchange="toPages()"></select>
			<a href="javascript:void(0)" onclick="maptoNext()" style="color:#333">下一页</a>
			<em></em>
		</div>
		<input type="hidden" name="x" id="mapx" value="<?php echo $_smarty_tpl->tpl_vars['mapx']->value;?>
" />
        <input type="hidden" name="y" id="mapy" value="<?php echo $_smarty_tpl->tpl_vars['mapy']->value;?>
" />
        <div class="nearby_position" id="nocom" style="display: none;">
        	您的附近没有相关职位！
        </div>
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
            var x = $("#mapx").val();
            var y = $("#mapy").val();
            $(window).load(function() {
                //适当延迟隐藏，提高loading效果  
                $('#loading').hide(0);
            });

            /*$(window).load(function(){
            		//为ajax绑定loading_bottom  
            		$(document).ajaxStart(function(){  
            				$("#loading").show();//在ajax请求开始的时候启用loading  
            		}).ajaxStop(function(){  
            				$('#loading').hide(0);//在ajax请求结束后隐藏loading  
            		});  
            });*/
            var res;
            var mk_list = new Array();
			var page = 1;
			var smartypage = '<?php echo $_GET['page'];?>
';
			if(smartypage!=''){
				page = smartypage;
			}
			var pagecount = 0;
			var prev = '';
			var next = '';
			var option = '';
            if(x > 0 && y > 0) {
				get_com_list(x, y);
            } else {
                get_current_loaction();
            }
			
            function get_current_loaction() {
                var geolocation = new BMap.Geolocation();
                geolocation.getCurrentPosition(function(r) {
                    if(this.getStatus() == BMAP_STATUS_SUCCESS) {
						$.post(wapurl + 'index.php?c=job&a=distance', {
							x: r.point.lng,
							y: r.point.lat
						}, function(data) {})
                        x = r.point.lng;
                        y = r.point.lat;
						$('#x').val(x);
                        $('#y').val(y);
                        get_com_list(x, y);
                    } else {
                        alert('failed' + this.getStatus());
                    }
                }, {
                    enableHighAccuracy: true
                });
            }

            function get_com_list(x, y) {
                $.post('index.php?c=map&a=joblist', {
                    x: x,
                    y: y,
					page: page
                }, function(data) {
                	
                    if(data) {
                        res = eval('(' + data + ')');
                        var errourl = '<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_unit_icon'];?>
';
                        if (res.list.length > 0) {
							pagecount = res.pagecount;
							if(res.prev && res.prev!=''){
								prev=res.prev;
							}else{
								prev="";
							}
							if(res.next && res.next!=''){
								next=res.next;
							}else{
								next="";
							}
							if(res.option && res.option!=''){
								$("#pageChange").html(res.option);
							}else{
								$("#pageChange").html('');
							}
							var joblist_html='';
							for (var i = 0; i < res.list.length; i++) {
								joblist_html+='<div class="map_job_list mt10"> ';
								joblist_html+='<div class="map_job_list_box">';
								joblist_html+='<div class="map_job_top">';
								joblist_html+='<div class="map_job_topname">';
								joblist_html+='<a href="'+res.list[i].joburl+'" >'+res.list[i].name+'</a>';
								joblist_html+='</div>';
								joblist_html+='<span class="map_job_xz">'+res.list[i].salary_n+'</span>';
								joblist_html+='<div class="map_job_info"></div>';
								joblist_html+='<div class="map_job_com"><a href="'+res.list[i].comurl+'">'+res.list[i].com_name+'</a></div>';
								if(res.list[i].lastupdate){
									joblist_html+='<div class="map_job_com">更新时间：<span class="">'+res.list[i].lastupdate+'</span></div>';
								}
								if(res.list[i].welfare){
									joblist_html+='<div class="map_job_fl">';
									for (var k = 0; k < res.list[i].welfare.length; k++) {
										joblist_html+='<span class="map_job_fl_s">'+res.list[i].welfare[k]+'</span>';
									}
									joblist_html+='</div>';
								}
								joblist_html+='</div>';
								joblist_html+='</div>';
								joblist_html+='<div class="com_map"><a href="'+res.list[i].addressurl+'"><span class="com_map_name">地址</span>'+res.list[i].address+'<em>'+res.list[i].dis+'</em><i class="com_map_name_icon"></i></a></div>';
								joblist_html+='</div>';
							}
							$('#com').html(joblist_html);
						} else {
                            $('#nocom').show();
                        }
						if(res.pagecount>0){
							$('#pageindicator').find('em').html('共'+res.pagecount+'页');
							$('#pageindicator').show();
						}
                    }
                });
            }
			function maptoPrev(){
				if(prev!=""){
					window.location.href = prev;
				}
			}
			function maptoNext(){
				if(next!=""){
					window.location.href = next;
				}
			}
			function toPages(){
				var obj=document.getElementById("pageChange");
				window.location.href=obj.options[obj.selectedIndex].value;
			}
        <?php echo '</script'; ?>
>
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
