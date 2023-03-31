<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-11 15:26:55
         compiled from "D:\rcw\uploads\app\template\wap\spe_index.htm" */ ?>
<?php /*%%SmartyHeaderCode:5404779535fab923f4e64c7-36003898%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcf28e8b7d99e4e4c557c9b0bdb369cfb73c8fbe' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\wap\\spe_index.htm',
      1 => 1576479796,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5404779535fab923f4e64c7-36003898',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'row' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fab923f4fa6d4_08451390',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fab923f4fa6d4_08451390')) {function content_5fab923f4fa6d4_08451390($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/header_cont.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="special_indexbox">
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
global $db,$db_config,$config;$paramer=array("limit"=>"10","item"=>"'row'","nocache"=>"")
;$row=array();
		//处理传入参数，并且构造分页参数
		$ParamerArr = GetSmarty($paramer,$_GET);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
		$where = "display='1' ";
		
		if($paramer['ctime']>0){
			$time=time()-$paramer['ctime']*86400;
			$where.=" and `ctime`>".$time;
		}
		if($paramer['delid']){
			$where.=" AND `id`<>'".$paramer['delid']."'";
		}
		
		//查询条数
		if($paramer[limit]){
			$limit=" LIMIT ".$paramer[limit];
		}else{
			$limit=" LIMIT 20";
		}
		//自定义查询条件，默认取代上面任何参数直接使用该语句
		if($paramer[where]){
			$where = $paramer[where];
		}
		if($paramer[ispage]){
			$limit = PageNav($paramer,$_GET,"special",$where,$Purl,'','0',$_smarty_tpl);
		}
		//排序字段默认为更新时间
		if($paramer['order']){
			$order = " ORDER BY `".str_replace("'","",$paramer[order])."`";
		}else{
			$order = " ORDER BY sort ";
		}
		//排序规则 默认为倒序
		if($paramer['sort']){
			$sort = $paramer['sort'];
		}else{
			$sort = " DESC";
		}
		$where.=$order.$sort.$limit;
		$row=$db->select_all("special",$where);
		if(is_array($row)){
			foreach($row as $key=>$value){
				$row[$key]['url'] = Url("special",array("c"=>"show","id"=>$value[id]));
			}
		}$row = $row; if (!is_array($row) && !is_object($row)) { settype($row, 'array');}
foreach ($row as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
<div class="pic-txt">

<div class="txt">
<div class="tit"><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'special','a'=>'show','id'=>'`$row.id`'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</a></div>

<div class="special_box_info">
<span class="special_box_time"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['etime'],'%Y-%m-%d');?>
</span>

</div><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'special','a'=>'show','id'=>'`$row.id`'),$_smarty_tpl);?>
" class="s_bth">进入专题</a>
</div>
</div>
 <?php }
if (!$_smarty_tpl->tpl_vars['row']->_loop) {
?>
<div class="wap_member_no">抱歉，还没有专题招聘的相关信息</div>
 <?php } ?>
 </div>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
