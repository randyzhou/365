<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-07 03:05:22
         compiled from "D:\rcw\uploads\app\template\ask\index.htm" */ ?>
<?php /*%%SmartyHeaderCode:11857744115fa59e723ed692-87622933%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd687286d56f8fb7f3c347ce5e04507cfc719d0ef' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\ask\\index.htm',
      1 => 1576479798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11857744115fa59e723ed692-87622933',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'uid' => 0,
    'answer' => 0,
    'rlist' => 0,
    'list' => 0,
    'total' => 0,
    'pagenav' => 0,
    'qindex' => 0,
    'slist' => 0,
    'hotclass' => 0,
    'hclist' => 0,
    'hotuser' => 0,
    'hulist' => 0,
    'ask_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fa59e72481d94_33670862',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fa59e72481d94_33670862')) {function content_5fa59e72481d94_33670862($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_function_ad')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.ad.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['askstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
  
<div class="ask_index_banner">
<div class="content">
<div class="ask_index_slogan">
<div class="ask_index_slogan_tit">职场问答</div>
给你职场领域最专业的帮助
</div>
<div class="search">
		<div class="search_con">
			<div class="seek">
				<form action="index.php" name="myform" method="get" target="_blank" autocomplete="off" onsubmit="return asksearch();">
				<div class="seek_con">
					<div class="seek_det">  
						<?php if (!$_smarty_tpl->tpl_vars['config']->value['sy_askdir']) {?><input name='m' type='hidden' value='ask'/><?php }?>
						<input name='c' type='hidden' value='search'/>
						<input type="text" name='keyword' id="askkeyword" placeholder="可以在此输入问题关键词搜索，看看有没有和你提过相同的问题" class="txt" autocomplete="off"  onblur="if(this.value==''){this.value='可以在此输入问题关键词搜索，看看有没有和你提过相同的问题'}" onclick="if(this.value=='可以在此输入问题关键词搜索，看看有没有和你提过相同的问题'){this.value=''}" value="可以在此输入问题关键词搜索，看看有没有和你提过相同的问题"/>
						<span class="icon"></span>
					</div>
					<div class="seek_sear"><input type="submit" class="btn"  value="搜一下"/></div>
				</div>
				</form>
				<div class="seek_menu">
					<ul> 
						<span class="searchli"></span>
						<li class="option">搜索：<a href="#" target="_blank"></a></li>
						<li class="me_quiz"><span>
						<?php if ($_smarty_tpl->tpl_vars['uid']->value) {?>
							<a href="<?php echo smarty_function_url(array('m'=>'ask','c'=>'addquestion'),$_smarty_tpl);?>
" target="_blank">+ 我要提问</a>
						<?php } else { ?>
							<a href="javascript:void(0);" onclick="showlogin('');">+ 我要提问</a>
						<?php }?></span>
						</li>
					</ul>
				</div>
			</div>
            <div class="header_ask_ask">
        <?php if ($_smarty_tpl->tpl_vars['uid']->value) {?>
				<a href="<?php echo smarty_function_url(array('m'=>'ask','c'=>'addquestion'),$_smarty_tpl);?>
" target="_blank">+ 我要提问</a>
			<?php } else { ?>
				<a href="javascript:void(0);" onclick="showlogin('');">+ 我要提问</a>
			<?php }?>
	</div></div></div>
</div>

</div>
<div class="content">
<div class="ask_index_left">
<div class="ask_index_left_tit"><span class="ask_index_left_tit_s">热门精选</span><span class="ask_index_left_titr">已有<i class="ask_index_left_titr_n"><?php echo $_smarty_tpl->tpl_vars['answer']->value;?>
</i> 条问答推荐</span></div>
<div class="ask_index_leftbox">
<ul class="ask_hotbox">
<?php  $_smarty_tpl->tpl_vars['rlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rlist']->_loop = false;
global $db,$db_config,$config;$paramer=array("is_recom"=>"1","name"=>"'list'","ispage"=>"1","t_len"=>"30","limit"=>"5","item"=>"'rlist'","nocache"=>"")
;$rlist=array();
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
         
        if($paramer[state]){
           $where=1;
        }else{
           $where = "`state`=1 ";
        }
		
		
		if($_COOKIE['uid']&&$paramer['friend']){
			$atn=$db->select_all("atn","`uid`='".$_COOKIE['uid']."'","`sc_uid`");
			$friend=array();
			foreach($atn as $val){
				$friend[]=$val['sc_uid'];
			}
			$where.=" and `id` in(".@implode(',',$friend).")";
			unset($friend);
		} 
		if($paramer[hot]){
			$time=strtotime("-".(int)$paramer[hot]." day");
			$where.=" and `add_time`>'".$time."'";
		}
		if($paramer[noid]){
			$where.=" and `id`<>'".$paramer[noid]."'";
		}
		if($paramer[keyword]){
			$where.=" and `title` like '%".$paramer['keyword']."%'";
		}
		if($paramer[nonum]){
			$where.=" and `answer_num`='0'";
		}
		if($paramer[yesnum]){
			$where.=" and `answer_num`>0";
		}
		//排序字段默认为更新时间
		if($paramer[order]){ 
			if($paramer[order]=="addtime"){
				$paramer[order]="add_time";
			}
			if($paramer[order]=="answernum"){
				$paramer[order]="answer_num";
			}
			$order = " ORDER BY `".$paramer[order]."`  desc";
		}else{
			$order = " ORDER BY `add_time` desc";
		}
		if($paramer[cid]){
			$where .=" and `cid`='".$paramer[cid]."'";
		}
		if($paramer[uid]){
			$where .=" and `uid`='".$paramer[uid]."'";
		}
		if($paramer[is_recom]){//推荐 字段
			$where .=" and `is_recom`='1'";
		}
		//if($config['ask_check']){//问答审核开启
			
		//}
		
		if($paramer[limit]){
			$limit=" limit ".$paramer[limit];
		}
		
		if($paramer['ispage']){
			$limit = PageNav($paramer,$_GET,"question",$where,$Purl,"","6",$_smarty_tpl);
		}
		$rlist = $db->select_all("question",$where.$order.$limit);  
		if(count($rlist)){
			foreach($rlist as $key=>$val){
				if(intval($paramer[t_len])>0){
					$len = intval($paramer[t_len]);
					$rlist[$key][title]  = mb_substr($val[title],0,$len,"utf-8");
				}
				if($paramer['keyword']){ 
					$rlist[$key][title] =str_replace($paramer[keyword],"<font color='#FF6600' >".$paramer[keyword]."</font>",$rlist[$key][title]);
				}
				$rlist[$key]['pic']=checkpic($val['pic'],$config['sy_friend_icon']);
				$rlist[$key][url] = Url("ask",array("c"=>"content","id"=>$val[id]));
				$rlist[$key][userurl] = Url("ask",array("c"=>"friend","a"=>"myquestion","uid"=>$val[uid]));
				if(in_array($val[uid],$ListId)==false){$ListId[] =  $val[uid];} 
				$Qclass[]=$val[cid];//问题类别
			}
			//获得提问者uid，并根据uid 获得头像、昵称
			$uids=@implode(",",$ListId);
			$_GET["total"]=1;  
			foreach($rlist as $r_k=>$r_v){
				if($r_v['uid']==$_COOKIE['uid']){
					$rlist[$r_k]['isatn']='2';//表示这是本人，不显示关注按钮
				} 
			}	
		}$rlist = $rlist; if (!is_array($rlist) && !is_object($rlist)) { settype($rlist, 'array');}
foreach ($rlist as $_smarty_tpl->tpl_vars['rlist']->key => $_smarty_tpl->tpl_vars['rlist']->value) {
$_smarty_tpl->tpl_vars['rlist']->_loop = true;
?>
<li>
<div class="ask_hot_hd"><div class="ask_index_n"><?php echo $_smarty_tpl->tpl_vars['rlist']->value['answer_num'];?>
</div> 回答</div>
<div class="ask_hotaskname"><a href="<?php echo $_smarty_tpl->tpl_vars['rlist']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['rlist']->value['title'];?>
</a></div>
<div class="ask_hotuser"><a href="<?php echo $_smarty_tpl->tpl_vars['rlist']->value['userurl'];?>
"><?php echo mb_substr($_smarty_tpl->tpl_vars['rlist']->value['nickname'],0,8,'utf-8');?>
</a> <span class="ask_index_pop_time"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rlist']->value['add_time'],"%Y-%m-%d %H:%M");?>
</span></div>
<div class="ask_hoteye"><?php echo $_smarty_tpl->tpl_vars['rlist']->value['visit'];?>
</div>
</li>
 <?php }
if (!$_smarty_tpl->tpl_vars['rlist']->_loop) {
?>
 <div class="indexnoresult png">暂无热门精选！</div>
 <?php } ?>
</ul>

</div>
<div class="" name="answer" id="answer">
<div class="ask_index_left_tit">
<span class="ask_index_left_tit_s ask_index_left_tit_newask" id="last-question">最新问题</span>
<span class="ask_index_left_titr"><a href="<?php echo smarty_function_url(array('m'=>'ask','yesnum'=>1),$_smarty_tpl);?>
">有回答的问题</a> <i class="ask_tit_c">|</i> <a href="<?php echo smarty_function_url(array('m'=>'ask','nonum'=>1),$_smarty_tpl);?>
">零回答的问题</a></span></div>

<div class="ask_index_leftbox">
<ul class="ask_hotbox">
<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
global $db,$db_config,$config;$paramer=array("item"=>"'list'","nonum"=>"'auto.nonum'","yesnum"=>"'auto.yesnum'","name"=>"'list'","ispage"=>"1","t_len"=>"30","limit"=>"10","nocache"=>"")
;$list=array();
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
         
        if($paramer[state]){
           $where=1;
        }else{
           $where = "`state`=1 ";
        }
		
		
		if($_COOKIE['uid']&&$paramer['friend']){
			$atn=$db->select_all("atn","`uid`='".$_COOKIE['uid']."'","`sc_uid`");
			$friend=array();
			foreach($atn as $val){
				$friend[]=$val['sc_uid'];
			}
			$where.=" and `id` in(".@implode(',',$friend).")";
			unset($friend);
		} 
		if($paramer[hot]){
			$time=strtotime("-".(int)$paramer[hot]." day");
			$where.=" and `add_time`>'".$time."'";
		}
		if($paramer[noid]){
			$where.=" and `id`<>'".$paramer[noid]."'";
		}
		if($paramer[keyword]){
			$where.=" and `title` like '%".$paramer['keyword']."%'";
		}
		if($paramer[nonum]){
			$where.=" and `answer_num`='0'";
		}
		if($paramer[yesnum]){
			$where.=" and `answer_num`>0";
		}
		//排序字段默认为更新时间
		if($paramer[order]){ 
			if($paramer[order]=="addtime"){
				$paramer[order]="add_time";
			}
			if($paramer[order]=="answernum"){
				$paramer[order]="answer_num";
			}
			$order = " ORDER BY `".$paramer[order]."`  desc";
		}else{
			$order = " ORDER BY `add_time` desc";
		}
		if($paramer[cid]){
			$where .=" and `cid`='".$paramer[cid]."'";
		}
		if($paramer[uid]){
			$where .=" and `uid`='".$paramer[uid]."'";
		}
		if($paramer[is_recom]){//推荐 字段
			$where .=" and `is_recom`='1'";
		}
		//if($config['ask_check']){//问答审核开启
			
		//}
		
		if($paramer[limit]){
			$limit=" limit ".$paramer[limit];
		}
		
		if($paramer['ispage']){
			$limit = PageNav($paramer,$_GET,"question",$where,$Purl,"","6",$_smarty_tpl);
		}
		$list = $db->select_all("question",$where.$order.$limit);  
		if(count($list)){
			foreach($list as $key=>$val){
				if(intval($paramer[t_len])>0){
					$len = intval($paramer[t_len]);
					$list[$key][title]  = mb_substr($val[title],0,$len,"utf-8");
				}
				if($paramer['keyword']){ 
					$list[$key][title] =str_replace($paramer[keyword],"<font color='#FF6600' >".$paramer[keyword]."</font>",$list[$key][title]);
				}
				$list[$key]['pic']=checkpic($val['pic'],$config['sy_friend_icon']);
				$list[$key][url] = Url("ask",array("c"=>"content","id"=>$val[id]));
				$list[$key][userurl] = Url("ask",array("c"=>"friend","a"=>"myquestion","uid"=>$val[uid]));
				if(in_array($val[uid],$ListId)==false){$ListId[] =  $val[uid];} 
				$Qclass[]=$val[cid];//问题类别
			}
			//获得提问者uid，并根据uid 获得头像、昵称
			$uids=@implode(",",$ListId);
			$_GET["total"]=1;  
			foreach($list as $r_k=>$r_v){
				if($r_v['uid']==$_COOKIE['uid']){
					$list[$r_k]['isatn']='2';//表示这是本人，不显示关注按钮
				} 
			}	
		}$list = $list; if (!is_array($list) && !is_object($list)) { settype($list, 'array');}
foreach ($list as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
                  
         
<li>
<div class="ask_new_hd"><div class="ask_index_n"><?php echo $_smarty_tpl->tpl_vars['list']->value['answer_num'];?>
</div> 回答</div>
<div class="ask_hotaskname"><a  href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</a></div>
<div class="ask_hotuser"><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['userurl'];?>
" target="_blank" class="ask_index_answer_user_a"><?php echo mb_substr($_smarty_tpl->tpl_vars['list']->value['nickname'],0,8,'utf-8');?>
</a> <span class="ask_index_pop_time"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['list']->value['add_time'],"%Y-%m-%d %H:%M");?>
</span></div>
<div class="ask_hoteye"><?php echo $_smarty_tpl->tpl_vars['list']->value['visit'];?>
</div>
</li>

 <?php } ?>  
					
			
				<?php if ($_smarty_tpl->tpl_vars['total']->value==0) {?>
				<div class="indexnoresult png">您还没有任何问题，抓紧提问吧！</div>
				<?php } else { ?> 
				<div class="pages"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div> 
				<?php }?>  
</ul>

</div>
</div>

           
			

</div>
<div class="ask_index_right">
<div class="ask_index_right_box" style="margin-top:65px; padding-bottom:0px;">
<div class="ask_index_ask_rtit"><span class="ask_index_ask_rtit_s">热门分类</span></div>
<div class="ask_index_fllist_box">
<?php  $_smarty_tpl->tpl_vars['qindex'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['qindex']->_loop = false;
global $db,$db_config,$config;$paramer=array("limit"=>"6","son"=>"1","item"=>"'qindex'","nocache"=>"")
;$qindex=array();
		$ParamerArr = GetSmarty($paramer,$_GET);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
        global $ModuleName;

		include(PLUS_PATH.'/ask.cache.php');
		
		if(!$paramer[classid])
		{
			$askArr = $ask_index;

		}else{
			$askArr = @explode(',',$paramer[classid]);
		}
		$i=0;
		foreach($askArr as $key=>$value)
		{
			$i++;
			$askArray['key'] = $i;
			$askArray['id'] = $value;
			$askArray['name'] = $ask_name[$value];
			$askArray['pic'] = $ask_pic[$value]; 
			$askArray['intro'] = $ask_intro[$value];
			$qindex[] = $askArray;
			if($paramer[limit] && $i>=$paramer[limit])
			{
				break;
			} 
		}
		if($paramer[son]){
			foreach($qindex as $key=>$val){ 
				foreach($ask_type[$val['id']] as $v){
					$qindex[$key][son][]=array('name'=>$ask_name[$v],"id"=>$v);
				} 
			}
		}  
		$qindex = $qindex; if (!is_array($qindex) && !is_object($qindex)) { settype($qindex, 'array');}
foreach ($qindex as $_smarty_tpl->tpl_vars['qindex']->key => $_smarty_tpl->tpl_vars['qindex']->value) {
$_smarty_tpl->tpl_vars['qindex']->_loop = true;
?>
<dl class="ask_index_fllist">
<dt><img class="" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['qindex']->value['pic'];?>
" width="50" height="50" /> </dt>
<dd>
<h3><a href="<?php echo smarty_function_url(array('m'=>'ask','c'=>'topic','pid'=>'`$qindex.id`'),$_smarty_tpl);?>
"  target="_blank"><?php echo $_smarty_tpl->tpl_vars['qindex']->value['name'];?>
</a></h3>
<?php if ($_smarty_tpl->tpl_vars['qindex']->value['son']) {?>                   
<div class="ask_index_fllist_a">
	<?php  $_smarty_tpl->tpl_vars['slist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['qindex']->value['son']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slist']->key => $_smarty_tpl->tpl_vars['slist']->value) {
$_smarty_tpl->tpl_vars['slist']->_loop = true;
?>
	<a href="<?php echo smarty_function_url(array('m'=>'ask','c'=>'search','cid'=>'`$slist.id`'),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['slist']->value['name'];?>
</a>
	<?php } ?> 
</div>

<?php }?>
</dd>
</dl>
<?php } ?> 
</div></div>
<div class="ask_index_right_box" >
<div class="ask_index_ask_rtit"><span class="ask_index_ask_rtit_s">热门标签</span></div>

	<div class="hot_tag_con">
					<?php  $_smarty_tpl->tpl_vars['hclist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hclist']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['hotclass']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hclist']->key => $_smarty_tpl->tpl_vars['hclist']->value) {
$_smarty_tpl->tpl_vars['hclist']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['hclist']->key;
?>
					<a href="<?php echo smarty_function_url(array('m'=>'ask','c'=>'search','cid'=>'`$key`'),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['hclist']->value;?>
</a>
					<?php } ?> 
				</div>
</div>


<div class="ask_index_right_box">
<div class="ask_index_ask_rtit"><span class="ask_index_ask_rtit_s">助人光荣榜</span></div>
<div style="padding-top:10px;">
<?php  $_smarty_tpl->tpl_vars['hulist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hulist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hotuser']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hulist']->key => $_smarty_tpl->tpl_vars['hulist']->value) {
$_smarty_tpl->tpl_vars['hulist']->_loop = true;
?>
				<div class="hot_userdet">
					<div class="user_det1">
						<div class="user_mes">
							<div class="user_pho">
								<img src="<?php echo $_smarty_tpl->tpl_vars['hulist']->value['pic'];?>
" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_friend_icon'];?>
',2);"/>
							</div>
							<div class="user_name">
								<p><a href="<?php echo smarty_function_url(array('m'=>'ask','c'=>'friend','a'=>'myquestion','uid'=>'`$hulist.uid`'),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['hulist']->value['nickname'];?>
</a></p>
								<span>回答总数：<font><?php echo $_smarty_tpl->tpl_vars['hulist']->value['num'];?>
</font> 被赞同总数：<font><?php echo $_smarty_tpl->tpl_vars['hulist']->value['support'];?>
</font></span>
                     
							</div>
						</div>
						
					</div> 
				</div> 
				<?php }
if (!$_smarty_tpl->tpl_vars['hulist']->_loop) {
?> 
					<div class="ask_r_no fl">暂无数据！</div>
				<?php } ?> 
       	</div>          
</div>
</div>

</div>






<div class="content">
	<div class="ask_index_box_banner">
				<?php echo smarty_function_ad(array('cid'=>48,'id'=>169),$_smarty_tpl);?>

			</div>
			
</div>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
>
<link href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/css/layui.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" /><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/layui.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/phpyun_layer.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['ask_style']->value;?>
/js/question.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<!--[if IE 6]>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/png.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
DD_belatedPNG.fix('.png,.attention .watch_gz');
<?php echo '</script'; ?>
>
<![endif]-->
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['askstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
