<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-07 03:10:52
         compiled from "D:\rcw\uploads\app\template\wap\publictwo.htm" */ ?>
<?php /*%%SmartyHeaderCode:15084035635fa59fbc0e3d03-02245885%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a914b8486ce0f4efb0af9a8dc2895394bfe8832e' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\wap\\publictwo.htm',
      1 => 1578540084,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15084035635fa59fbc0e3d03-02245885',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'job_index' => 0,
    'v' => 0,
    'job_name' => 0,
    'city_index' => 0,
    'city_name' => 0,
    'config' => 0,
    'city_type' => 0,
    'userdata' => 0,
    'userclass_name' => 0,
    'config_wapdomain' => 0,
    'uptime' => 0,
    'key' => 0,
    'industry_index' => 0,
    'industry_name' => 0,
    'comdata' => 0,
    'comclass_name' => 0,
    'com_sex' => 0,
    'partdata' => 0,
    'partclass_name' => 0,
    'adtime' => 0,
    'redeem_index' => 0,
    'redeem_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fa59fbc1b1648_92212684',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fa59fbc1b1648_92212684')) {function content_5fa59fbc1b1648_92212684($_smarty_tpl) {?><?php if (!is_callable('smarty_function_searchurl')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.searchurl.php';
if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
?><?php echo '<script'; ?>
>
	$(document).ready(function() {
		$(".searchOptions_list li a").removeClass("search_h1_box_cur_list");
		$("#resume").submit(function(e) {
			var min = $("#minresume").val();
			var max = $("#maxresume").val();
			if(min && max && parseInt(max) < parseInt(min)) {
				$("#minresume").val(max);
				$("#maxresume").val(min);
			}
		});
		$("#job").submit(function(e) {
			var min = $("#minjob").val();
			var max = $("#maxjob").val();
			if(min && max && parseInt(max) < parseInt(min)) {
				$("#minjob").val(max);
				$("#maxjob").val(min);
			}
		});
		
	});
	function check_city_li(id,type){
		var url=$("#searchurl").val();
		$.post(wapurl+"/?c=ajax&a=ajax_url",{url:url,type:type,id:id},function(data){
			location.href=wapurl+data;
		})
	}
	function check_exp_li(id,type){
      var comexp = $("#comexp").val(); 
      $('#exp'+comexp).attr('class','');
      $('#exp'+id).attr('class','conditional_screening_cur');
      $('#comexp').removeAttr('disabled');
      $('#comexp').val(id);
       
	}
  function check_edu_li(id,type){
      var comedu=$("#comedu").val();
      $('#edu'+comedu).attr('class','');
      $('#edu'+id).attr('class','conditional_screening_cur');
      $('#comedu').removeAttr('disabled');
      $('#comedu').val(id);
    
  }
  function check_uptime_li(id,type){
      var comuptime=$("#comuptime").val();
      $('#uptime'+comuptime).attr('class','');
      $('#uptime'+id).attr('class','conditional_screening_cur');
      if(id){
        $('#comuptime').removeAttr('disabled');
      }else{
        $('#comuptime').attr("disabled","disabled");
      }
      
      $('#comuptime').val(id);
  }
  function check_pr_li(id,type){
      var compr=$("#compr").val();
      $('#pr'+compr).attr('class','');
      $('#pr'+id).attr('class','conditional_screening_cur');
      if(id){
        $('#compr').removeAttr('disabled');
      }else{
        $('#compr').attr("disabled","disabled");
      }
      $('#compr').val(id);
    
  }
    
  function check_mun_li(id,type){
     var commun=$("#commun").val();
      $('#mun'+commun).attr('class','');
      $('#mun'+id).attr('class','conditional_screening_cur');
       if(id){
        $('#commun').removeAttr('disabled');
      }else{
        $('#commun').attr("disabled","disabled");
      }
      $('#commun').val(id);  
      
  }
  function check_sex_li(id,type){
     var comsex=$("#comsex").val();
      $('#sex'+comsex).attr('class','');
      $('#sex'+id).attr('class','conditional_screening_cur');
      $('#comsex').removeAttr('disabled');
      $('#comsex').val(id);  
  }
	function check_uedu_li(id,type){
		var useredu=$("#useredu").val();
		$('#uedu'+useredu).attr('class','');
		$('#uedu'+id).attr('class','conditional_screening_cur');
		$('#useredu').removeAttr('disabled');
		$('#useredu').val(id);
	}
	function check_useruptime_li(id,type){
		var useruptime=$("#useruptime").val();
		$('#uuptime'+useruptime).attr('class','');
		$('#uuptime'+id).attr('class','conditional_screening_cur');
		$('#useruptime').removeAttr('disabled');
		$('#useruptime').val(id);
	}
	function check_hy_li(id,type){
		var userhy=$("#userhy").val();
		$('#hy'+userhy).attr('class','');
		$('#hy'+id).attr('class','conditional_screening_cur');
		$('#userhy').removeAttr('disabled');
		$('#userhy').val(id);
	}
	function check_report_li(id,type){
		var userreport=$("#userreport").val();
		$('#report'+userreport).attr('class','');
		$('#report'+id).attr('class','conditional_screening_cur');
		$('#userreport').removeAttr('disabled');
		$('#userreport').val(id);
	}
	function check_tag_li(id,type){
		var usertag=$("#usertag").val();
		$('#tag'+usertag).attr('class','');
		$('#tag'+id).attr('class','conditional_screening_cur');
		if(id){
			$('#usertag').removeAttr('disabled');
		}else{
			$('#usertag').attr("disabled","disabled");
		}
		$('#usertag').val(id);
	}
	function check_job_li(id,type){
		var url=$("#searchurl").val();
		$.post(wapurl+"/?c=ajax&a=ajax_url",{url:url,type:type,id:id},function(data){
			location.href=wapurl+data;
		})
	}
	function check_ltjob_li(id,type){
		var url=$("#searchurl").val();
		$.post(wapurl+"/?c=ajax&a=ajax_url",{url:url,type:type,id:id},function(data){
			location.href=wapurl+data;
		})
	}
	function check_redeem_li(id,type){
		var url=$("#searchurl").val();
		$.post(wapurl+"/?c=ajax&a=ajax_url",{url:url,type:type,id:id},function(data){
			location.href=wapurl+data;
		})
	}
<?php echo '</script'; ?>
>
<!-- Category职位类别 -->
<div class="Category-eject">
	<ul class="Category-w" id="jobone">
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['job_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
		<li class="qCategorytw<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" onclick="Categorytw('<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
','jobone')"><?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</li>
		<?php } ?>
	</ul>
	<ul class="Category-t" id="jobone_son">
	</ul>
	<ul class="Category-s" id="job_post">
	</ul>
</div>
<!-- End Category -->

<!-- grade 城市类别-->
<div class="grade-eject">

	<ul class="grade-w" id="provinceid">
		<li onclick="check_city_li('0','provinceid');">全部</li>
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['city_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
		<li class="qgrade<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" onclick="grade1('<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
','provinceid','<?php echo $_GET['a'];?>
')"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</li>
		<?php } ?>
	</ul>
	<ul class="grade-t" id="cityid"></ul>
	<ul class="grade-s" id="three_cityid"></ul>

</div>
<!-- End grade -->

<!-- Substation 分站地区-->
<div class="Substation-eject Substation-height">
	<ul class="Substation-Substation" id="Substation-Substation">
		<li>
			<?php if ($_GET['c']=="job") {?>
			<a href="<?php echo smarty_function_searchurl(array('m'=>'wap','c'=>'job','three_cityid'=>'','untype'=>'three_cityid'),$_smarty_tpl);?>
">全部</a>
			<?php } elseif ($_GET['c']=="resume") {?>
			<a href="<?php echo smarty_function_searchurl(array('m'=>'wap','c'=>'resume','three_cityid'=>'','untype'=>'three_cityid'),$_smarty_tpl);?>
">全部</a>
			<?php } elseif ($_GET['c']=="part") {?>
			<a href="<?php echo smarty_function_searchurl(array('m'=>'wap','c'=>'part','three_cityid'=>'','untype'=>'three_cityid'),$_smarty_tpl);?>
">全部</a>
			<?php } elseif ($_GET['c']=="company") {?>
			<a href="<?php echo smarty_function_searchurl(array('m'=>'wap','c'=>'company','three_cityid'=>'','untype'=>'three_cityid'),$_smarty_tpl);?>
">全部</a>
			<?php } elseif ($_GET['c']=="post") {?>
			<a href="<?php echo smarty_function_searchurl(array('m'=>'wap','c'=>'post','three_cityid'=>'','untype'=>'three_cityid'),$_smarty_tpl);?>
">全部</a>
			<?php } elseif ($_GET['c']=="post"&&$_GET['a']=="service") {?>
			<a href="<?php echo smarty_function_searchurl(array('m'=>'wap','c'=>'post','three_cityid'=>'','untype'=>'three_cityid'),$_smarty_tpl);?>
">全部</a>
			<?php } elseif ($_GET['c']=="post"&&$_GET['a']=="famous") {?>
			<a href="<?php echo smarty_function_searchurl(array('m'=>'wap','c'=>'post','three_cityid'=>'','untype'=>'three_cityid'),$_smarty_tpl);?>
">全部</a>
			
			<?php }?>

		</li>

		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value[$_smarty_tpl->tpl_vars['config']->value['cityid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
		<li>
			<?php if ($_GET['c']=="job") {?>
			<a href="<?php echo smarty_function_searchurl(array('m'=>'wap','c'=>'job','three_cityid'=>$_smarty_tpl->tpl_vars['v']->value,'untype'=>'three_cityid'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a>
			<?php } elseif ($_GET['c']=="resume") {?>
			<a href="<?php echo smarty_function_searchurl(array('m'=>'wap','c'=>'resume','three_cityid'=>$_smarty_tpl->tpl_vars['v']->value,'untype'=>'three_cityid'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a>
			<?php } elseif ($_GET['c']=="part") {?>
			<a href="<?php echo smarty_function_searchurl(array('m'=>'wap','c'=>'part','three_cityid'=>$_smarty_tpl->tpl_vars['v']->value,'untype'=>'three_cityid'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a>
			<?php } elseif ($_GET['c']=="company") {?>
			<a href="<?php echo smarty_function_searchurl(array('m'=>'wap','c'=>'company','three_cityid'=>$_smarty_tpl->tpl_vars['v']->value,'untype'=>'three_cityid'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a>
			<?php } elseif ($_GET['c']=="post") {?>
			<a href="<?php echo smarty_function_searchurl(array('m'=>'wap','c'=>'post','three_cityid'=>$_smarty_tpl->tpl_vars['v']->value,'untype'=>'three_cityid'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a>
			<?php } elseif ($_GET['c']=="post"&&$_GET['a']=="service") {?>
			<a href="<?php echo smarty_function_searchurl(array('m'=>'wap','c'=>'post','three_cityid'=>$_smarty_tpl->tpl_vars['v']->value,'untype'=>'three_cityid'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a>
			<?php } elseif ($_GET['c']=="post"&&$_GET['a']=="famous") {?>
			<a href="<?php echo smarty_function_searchurl(array('m'=>'wap','c'=>'post','three_cityid'=>$_smarty_tpl->tpl_vars['v']->value,'untype'=>'three_cityid'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a>
			
			<?php }?>
		</li>
		<?php } ?>
	</ul>
</div>
<!-- End Substation -->

<!-- Sortexp 找人才工作经验-->
<div class="Sortexp-eject Sortexp-height">
	<ul class="Sortexp-Sortexp" id="Sortexp-Sortexp">
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_word']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
		<li>
			<a <?php if ($_GET['c']=="ltresume") {?>href="<?php echo smarty_function_searchurl(array('m'=>'wap','c'=>'ltresume','exp'=>$_smarty_tpl->tpl_vars['v']->value,'untype'=>'exp'),$_smarty_tpl);?>
" <?php } else { ?>href="<?php echo smarty_function_searchurl(array('m'=>'wap','c'=>'resume','exp'=>$_smarty_tpl->tpl_vars['v']->value,'untype'=>'exp'),$_smarty_tpl);?>
" <?php }?>><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a>
		</li>
		<?php } ?>
	</ul>
</div>
<!-- End Sortexp -->

<!-- gengduos 找人才更多-->
<div class="Gengduos-eject">
	<form action="<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
/index.php" method="get" id="resume">
		<input type="hidden" name="c" value="<?php if ($_GET['c']) {
echo $_GET['c'];
} else { ?>resume<?php }?>" />
		<div class="conditional_screening_box">
			<div class="conditional_screening_pv">
				<div class="conditional_screening_all">
				
					<div class="conditional_screening_cont">
						<div class="conditional_screening_tit"><span class="conditional_screening_tit_n">学历要求</span></div>
						<ul class="conditional_screening_list">
						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_edu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
						<li id="uedu<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_GET['edu']==$_smarty_tpl->tpl_vars['v']->value) {?>class="conditional_screening_cur"<?php }?> onclick="check_uedu_li('<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
','edu')"><a href="javascript:void(0)"><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a></li>
						<?php } ?>
						</ul>
					</div>
					<div class="conditional_screening_cont">
						<div class="conditional_screening_tit"><span class="conditional_screening_tit_n">到岗时间</span></div>
						<ul class="conditional_screening_list">
						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_report']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
						<li id="report<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_GET['report']==$_smarty_tpl->tpl_vars['v']->value) {?>class="conditional_screening_cur"<?php }?> onclick="check_report_li('<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
','report')"><a href="javascript:void(0)"><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a></li>
					   <?php } ?>
						</ul>
					</div>
					<div class="conditional_screening_cont">
						<div class="conditional_screening_tit"><span class="conditional_screening_tit_n">更新时间</span></div>
						<ul class="conditional_screening_list">
						<li id="uuptime" <?php if ($_GET['uptime']=='') {?>class="conditional_screening_cur"<?php }?> onclick="check_useruptime_li('','uptime')"><a href="javascript:void(0)">全部</a></li>
						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['uptime']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
						<li id="uuptime<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_GET['uptime']==$_smarty_tpl->tpl_vars['key']->value) {?>class="conditional_screening_cur"<?php }?> onclick="check_useruptime_li('<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
','uptime')"><a href="javascript:void(0)"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</a></li>
						<?php } ?>
						</ul>
					</div>
					<div class="conditional_screening_cont">
						<div class="conditional_screening_tit"><span class="conditional_screening_tit_n">个人标签</span></div>
						<ul class="conditional_screening_list">
						<li id="tag" <?php if ($_GET['tag']=='') {?>class="conditional_screening_cur"<?php }?> onclick="check_tag_li('','tag')"><a href="javascript:void(0)">全部</a></li>
						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_tag']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
						<li id="tag<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_GET['tag']==$_smarty_tpl->tpl_vars['v']->value) {?>class="conditional_screening_cur"<?php }?> onclick="check_tag_li('<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
','tag')"><a href="javascript:void(0)"><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a></li>
						<?php } ?>
						</ul>
					</div>
                    
				</div>
				<div class="conditional_screening_operation">
				<div class="conditional_screening_operation_left"><a href="<?php if ($_GET['a']) {
echo smarty_function_url(array('m'=>'wap','c'=>$_GET['c'],'a'=>$_GET['a']),$_smarty_tpl);
} else {
echo smarty_function_url(array('m'=>'wap','c'=>$_GET['c']),$_smarty_tpl);
}?>" class="conditional_screening_operation_cz">重置</a></div>
				<div class="conditional_screening_operation_right"><a href="javascript:void(0)" onclick="$('#resume').submit();" class="conditional_screening_operation_ok">确定</a></div>
				</div>
			</div>
			<?php if ($_GET['provinceid']) {?><input type="hidden" name="provinceid" value="<?php echo $_GET['provinceid'];?>
"/><?php }?>
			<?php if ($_GET['cityid']) {?><input type="hidden" name="cityid" value="<?php echo $_GET['cityid'];?>
"/><?php }?>
			<?php if ($_GET['three_cityid']) {?><input type="hidden" name="cityid" value="<?php echo $_GET['three_cityid'];?>
"/><?php }?>
			<?php if ($_GET['jobin']) {?><input type="hidden" name="jobin" value="<?php echo $_GET['jobin'];?>
"/><?php }?>
			<input type="hidden" name="hy" id="userhy" <?php if ($_GET['hy']=='') {?>disabled="disabled"<?php }?> value="<?php echo $_GET['hy'];?>
" />
			<input type="hidden" id="useredu" name="edu" <?php if ($_GET['edu']=='') {?>disabled="disabled"<?php }?> value="<?php echo $_GET['edu'];?>
" />
			<input type="hidden" name="uptime" id="useruptime" <?php if ($_GET['uptime']=='') {?>disabled="disabled"<?php }?> value="<?php echo $_GET['uptime'];?>
" />
			<input type="hidden" name="report" id="userreport" <?php if ($_GET['report']=='') {?>disabled="disabled"<?php }?> value="<?php echo $_GET['report'];?>
" />
			<input type="hidden" name="tag" id="usertag" <?php if ($_GET['tag']=='') {?>disabled="disabled"<?php }?> value="<?php echo $_GET['tag'];?>
" />
		</div>
		
	</form>
	<ul class="Gengduos-t" id="Gengduohyt" style="display:block;">
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['industry_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
		<li tab_name="gdshy" data="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['industry_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
 </li>
		<?php } ?>
	</ul>
	<ul class="Gengduos-t" id="Gengduoedut" style="display:none;">
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_edu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
		<li tab_name="gdsedu" data="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</li>
		<?php } ?>
	</ul>
	<ul class="Gengduos-t" id="Gengduoreportt" style="display:none;">
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_report']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
		<li tab_name="gdsreport" data="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</li>
		<?php } ?>
	</ul>
	<ul class="Gengduos-t" id="Gengduouptimet" style="display:none;">
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['uptime']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
		<li tab_name="gdsuptime" data="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</li>
		<?php } ?>
	</ul>
	<ul class="Gengduos-t" id="Gengduotagt" style="display:none;">
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_tag']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
		<li tab_name="gdstag" data="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</li>
		<?php } ?>
	</ul>
</div>
<!-- End gengduos -->

<!-- Sort 找工作经验-->
<div class="Sort-eject Sort-height">
<div  id="Sort-Sort">
<div class="conditional_screening_box">
<div class="conditional_screening_salary_all">
<ul class="conditional_screening_salary">
<li <?php if ($_GET['minsalary']==''&&$_GET['maxsalary']=='') {?>class="conditional_screening_salary_cur"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
/index.php?c=job">全部</a></li>
<li <?php if ($_GET['maxsalary']=='2000') {?>class="conditional_screening_salary_cur"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
/index.php?c=job&minsalary=0&maxsalary=2000">2000以下</a></li>
<li <?php if ($_GET['minsalary']=='2000'&&$_GET['maxsalary']=='4000') {?>class="conditional_screening_salary_cur"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
/index.php?c=job&minsalary=2000&maxsalary=4000">2000-4000</a></li>
<li <?php if ($_GET['minsalary']=='4000'&&$_GET['maxsalary']=='6000') {?>class="conditional_screening_salary_cur"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
/index.php?c=job&minsalary=4000&maxsalary=6000">4000-6000</a></li>
<li <?php if ($_GET['minsalary']=='6000'&&$_GET['maxsalary']=='8000') {?>class="conditional_screening_salary_cur"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
/index.php?c=job&minsalary=6000&maxsalary=8000">6000-8000</a></li>
<li <?php if ($_GET['minsalary']=='8000'&&$_GET['maxsalary']=='10000') {?>class="conditional_screening_salary_cur"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
/index.php?c=job&minsalary=8000&maxsalary=10000">8000-10000</a></li>
<li <?php if ($_GET['minsalary']=='10000') {?>class="conditional_screening_salary_cur"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
/index.php?c=job&minsalary=10000">10000以上</a></li>
</ul>
</div>
<div class="conditional_screening_salary_bot">
<form action="<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
/index.php" method="get" id="newjob">
<input type="hidden" name="c" value="<?php if ($_GET['c']) {
echo $_GET['c'];
} else { ?>job<?php }?>" />
<?php if ($_GET['a']) {?><input type="hidden" name="a" value="<?php echo $_GET['a'];?>
" /><?php }?>
<div class="conditional_screening_salary_fw">薪资范围：</div><div class="conditional_screening_salary_text"><input type="text" name="minsalary" id="minjob" value="<?php echo $_GET['minsalary'];?>
" class=""></div><div class="conditional_screening_salary_z">-</div><div class="conditional_screening_salary_text"><input type="text" name="maxsalary" id="maxjob" value="<?php echo $_GET['maxsalary'];?>
" class=""></div><div class="conditional_screening_salary_bth"><input type="submit" value="确定"></div>
</form>
</div>
</div>

</div>
</div>
<!-- End Sort -->

<!-- Gengduoj 找工作更多-->
<div class="Gengduoj-eject">
	<form action="<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
/index.php" method="get" id="job">
		<input type="hidden" name="c" value="<?php if ($_GET['c']) {
echo $_GET['c'];
} else { ?>job<?php }?>" />
		<?php if ($_GET['a']) {?><input type="hidden" name="a" value="<?php echo $_GET['a'];?>
" /><?php }?>
		
        <div class="conditional_screening_box">
         <div class="conditional_screening_pv">
          <div class="conditional_screening_all">
        <div class="conditional_screening_cont">
        <div class="conditional_screening_tit"><span class="conditional_screening_tit_n">学历要求</span></div>
        <ul class="conditional_screening_list">
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_edu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
        <li id="edu<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_GET['edu']==$_smarty_tpl->tpl_vars['v']->value) {?>class="conditional_screening_cur"<?php }?> onclick="check_edu_li('<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
','edu')"><a href="javascript:void(0)"><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a></li>
        <?php } ?>
        </ul>
         </div>
           <div class="conditional_screening_cont">
        <div class="conditional_screening_tit"><span class="conditional_screening_tit_n">经验要求</span></div>
        <ul class="conditional_screening_list">
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_exp']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
        <li id="exp<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_GET['exp']==$_smarty_tpl->tpl_vars['v']->value) {?>class="conditional_screening_cur"<?php }?> onclick="check_exp_li('<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
','exp')"><a href="javascript:void(0)"><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a></li>
        <?php } ?>
        </ul>
         </div>
            <div class="conditional_screening_cont">
        <div class="conditional_screening_tit"><span class="conditional_screening_tit_n">性别要求</span></div>
        <ul class="conditional_screening_list">
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['com_sex']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
        <li id="sex<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_GET['sex']==$_smarty_tpl->tpl_vars['key']->value) {?>class="conditional_screening_cur"<?php }?> onclick="check_sex_li('<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
','sex')"><a href="javascript:void(0)"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</a></li>
       <?php } ?>
        </ul>
         </div>
        
         <div class="conditional_screening_cont">
        <div class="conditional_screening_tit"><span class="conditional_screening_tit_n">更新时间</span></div>
         <ul class="conditional_screening_list">
        <li id="uptime" <?php if ($_GET['uptime']=='') {?>class="conditional_screening_cur"<?php }?> onclick="check_uptime_li('','uptime')"><a href="javascript:void(0)">全部</a></li>
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['uptime']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
        <li id="uptime<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_GET['uptime']==$_smarty_tpl->tpl_vars['key']->value) {?>class="conditional_screening_cur"<?php }?> onclick="check_uptime_li('<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
','uptime')"><a href="javascript:void(0)"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</a></li>
        <?php } ?>
        </ul>
         </div>
      
          <div class="conditional_screening_cont">
        <div class="conditional_screening_tit"><span class="conditional_screening_tit_n">公司性质</span></div>
          <ul class="conditional_screening_list">
        <li  id="pr" <?php if ($_GET['pr']=='') {?>class="conditional_screening_cur"<?php }?> onclick="check_pr_li('','pr')"><a href="javascript:void(0)">全部</a></li>
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_pr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
        <li id="pr<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_GET['pr']==$_smarty_tpl->tpl_vars['v']->value) {?>class="conditional_screening_cur"<?php }?> onclick="check_pr_li('<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
','pr')"><a href="javascript:void(0)"><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a></li>
        <?php } ?>
        </ul>
         </div>
          <div class="conditional_screening_cont">
        <div class="conditional_screening_tit"><span class="conditional_screening_tit_n">公司规模</span></div>
          <ul class="conditional_screening_list">
        <li id="mun" <?php if ($_GET['mun']=='') {?>class="conditional_screening_cur"<?php }?> onclick="check_mun_li('','mun')"><a href="javascript:void(0)">全部</a></li>
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_mun']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
        <li id="mun<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_GET['mun']==$_smarty_tpl->tpl_vars['v']->value) {?>class="conditional_screening_cur"<?php }?> onclick="check_mun_li('<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
','mun')"><a href="javascript:void(0)"><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a></li>
        <?php } ?>
        </ul>
         </div> 
         </div>
         <div class="conditional_screening_operation">
          <div class="conditional_screening_operation_left"><a href="<?php if ($_GET['a']) {
echo smarty_function_url(array('m'=>'wap','c'=>$_GET['c'],'a'=>$_GET['a']),$_smarty_tpl);
} else {
echo smarty_function_url(array('m'=>'wap','c'=>$_GET['c']),$_smarty_tpl);
}?>" class="conditional_screening_operation_cz">重置</a></div>
          <div class="conditional_screening_operation_right"><a href="javascript:void(0)" onclick="$('#job').submit();" class="conditional_screening_operation_ok">确定</a></div></div>
        </div>
        <?php if ($_GET['provinceid']) {?><input type="hidden" name="provinceid" value="<?php echo $_GET['provinceid'];?>
"/><?php }?>
        <?php if ($_GET['cityid']) {?><input type="hidden" name="cityid" value="<?php echo $_GET['cityid'];?>
"/><?php }?>
        <?php if ($_GET['three_cityid']) {?><input type="hidden" name="cityid" value="<?php echo $_GET['three_cityid'];?>
"/><?php }?>
        <?php if ($_GET['jobin']) {?><input type="hidden" name="jobin" value="<?php echo $_GET['jobin'];?>
"/><?php }?>
      
        <?php if ($_GET['hy']) {?><input type="hidden" name="hy" id="gdjhyi" value="<?php echo $_GET['hy'];?>
" /><?php }?>
        <input type="hidden" id="comexp" name="exp" <?php if ($_GET['exp']=='') {?>disabled="disabled"<?php }?>value="<?php echo $_GET['exp'];?>
"/>
        <input type="hidden" name="pr" id="compr" <?php if ($_GET['pr']=='') {?>disabled="disabled"<?php }?> value="<?php echo $_GET['pr'];?>
" />
        <input type="hidden" name="mun" id="commun" <?php if ($_GET['mun']=='') {?>disabled="disabled"<?php }?>  value="<?php echo $_GET['mun'];?>
" />
        <input  type="hidden" id="comedu" name="edu" <?php if ($_GET['edu']=='') {?>disabled="disabled"<?php }?> value="<?php echo $_GET['edu'];?>
" />
        <input type="hidden" name="uptime" id="comuptime" <?php if ($_GET['uptime']=='') {?>disabled="disabled"<?php }?> value="<?php echo $_GET['uptime'];?>
" />
         <input type="hidden" name="sex" id="comsex" <?php if ($_GET['sex']=='') {?>disabled="disabled"<?php }?> value="<?php echo $_GET['sex'];?>
" />
          </div>
       
	</form>
	<ul class="Gengduoj-t" id="Gengduohy" style="display:block;">
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['industry_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
		<li tab_name="gdjhy" data="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['industry_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</li>
		<?php } ?>
	</ul>
	<ul class="Gengduoj-t" id="Gengduopr" style="display:none;">
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_pr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
		<li tab_name="gdjpr" data="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</li>
		<?php } ?>
	</ul>
	<ul class="Gengduoj-t" id="Gengduonum" style="display:none;">
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_mun']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
		<li tab_name="gdjnum" data="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</li>
		<?php } ?>
	</ul>
	<ul class="Gengduoj-t" id="Gengduoedu" style="display:none;">
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_edu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
		<li tab_name="gdjedu" data="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</li>
		<?php } ?>
	</ul>
	<ul class="Gengduoj-t" id="Gengduouptime" style="display:none;">
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['uptime']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
		<li tab_name="gdjuptime" data="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</li>
		<?php } ?>
	</ul>
</div>
<!-- End Gengduoj -->

<!-- Sorthy 行业弹出框-->
<div class="Sorthy-eject Sorthy-height">
	<ul class="Sorthy-Sorthy" id="Sorthy-Sorthy">
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['industry_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
		<li>
			<?php if ($_GET['c']=="company") {?>
			<a href="<?php echo smarty_function_searchurl(array('m'=>'wap','c'=>'company','hy'=>$_smarty_tpl->tpl_vars['v']->value,'untype'=>'hy'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['industry_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a>
			<?php } elseif ($_GET['c']=="post") {?>
			<a href="<?php echo smarty_function_searchurl(array('m'=>'wap','c'=>'post','hy'=>$_smarty_tpl->tpl_vars['v']->value,'untype'=>'hy'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['industry_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a>
			<?php }?>
		</li>
		<?php } ?>
	</ul>
</div>
<!-- End Sorthy -->

<!-- Sortpr 企业性质弹出框-->
<div class="Sortpr-eject Sortpr-height">
	<ul class="Sortpr-Sortpr" id="Sortpr-Sortpr">
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_pr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
		<li>
			<?php if ($_GET['c']=="company") {?>
			<a href="<?php echo smarty_function_searchurl(array('m'=>'wap','c'=>'company','pr'=>$_smarty_tpl->tpl_vars['v']->value,'untype'=>'pr'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a>
			<?php } elseif ($_GET['c']=="post") {?>
			<a href="<?php echo smarty_function_searchurl(array('m'=>'wap','c'=>'post','pr'=>$_smarty_tpl->tpl_vars['v']->value,'untype'=>'pr'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a>
			<?php }?>

		</li>
		<?php } ?>
	</ul>
</div>
<!-- End Sortpr -->

<!-- Sortmun 企业规模弹出框-->
<div class="Sortmun-eject Sortmun-height">
	<ul class="Sortmun-Sortmun" id="Sortmun-Sortmun">
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_mun']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
		<li>
			<?php if ($_GET['c']=="company") {?>
			<a href="<?php echo smarty_function_searchurl(array('m'=>'wap','c'=>'company','mun'=>$_smarty_tpl->tpl_vars['v']->value,'untype'=>'mun'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a>
			<?php } elseif ($_GET['c']=="post") {?>
			<a href="<?php echo smarty_function_searchurl(array('m'=>'wap','c'=>'post','mun'=>$_smarty_tpl->tpl_vars['v']->value,'untype'=>'mun'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a>
			<?php }?>

		</li>
		<?php } ?>
	</ul>
</div>
<!-- End Sortmun -->

<!-- Sorttype 兼职类型弹出框-->
<div class="Sorttype-eject Sorttype-height">
	<ul class="Sorttype-Sorttype" id="Sorttype-Sorttype">
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['partdata']->value['part_type']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
		<li>
			<a href="<?php echo smarty_function_searchurl(array('m'=>'wap','c'=>'part','type'=>$_smarty_tpl->tpl_vars['v']->value,'untype'=>'type'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['partclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a>
		</li>
		<?php } ?>
	</ul>
</div>
<!-- End Sorttype -->
<!-- Sortcycle 结算周期弹出框-->
<div class="Sortcycle-eject Sortcycle-height">
	<ul class="Sortcycle-Sortcycle" id="Sortcycle-Sortcycle">
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['partdata']->value['part_billing_cycle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
		<li>
			<a href="<?php echo smarty_function_searchurl(array('m'=>'wap','c'=>'part','cycle'=>$_smarty_tpl->tpl_vars['v']->value,'untype'=>'cycle'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['partclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a>
		</li>
		<?php } ?>
	</ul>
</div>
<!-- End Sortcycle -->

<!-------时间--------->
<div class="Sortadtime-eject Sortadtime-height">
	<ul class="Sortadtime-Sortadtime" id="Sortadtime-Sortadtime">
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['adtime']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
		<li>
			<?php if ($_GET['c']=='once') {?>
			<a href="<?php echo smarty_function_searchurl(array('m'=>'wap','c'=>'once','add_time'=>$_smarty_tpl->tpl_vars['key']->value,'untype'=>'add_time'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</a>
			<?php } elseif ($_GET['c']=='tiny') {?>
			<a href="<?php echo smarty_function_searchurl(array('m'=>'wap','c'=>'tiny','add_time'=>$_smarty_tpl->tpl_vars['key']->value,'untype'=>'add_time'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</a>
			<?php }?>
		</li>
		<?php } ?>
	</ul>
</div>
 
 
 
<!-- wap商城商品类别 -->
<div class="redeem-eject">
	<ul class="redeem-w" id="nid">
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['redeem_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
		<li class="qredeemw<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" onclick="redeemw('<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['redeem_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
','nid')"><?php echo $_smarty_tpl->tpl_vars['redeem_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</li>
		<?php } ?>
	</ul>
	<ul class="redeem-t" id="tnid">
	</ul>

</div>
<!-- End redeem --><?php }} ?>
