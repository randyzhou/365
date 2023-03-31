<?php
/* *
* $Author ：PHPYUN开发团队
*
* 官网: http://www.phpyun.com
*
* 版权所有 2009-2019 宿迁鑫潮信息技术有限公司，并保留所有权利。
*
* 软件声明：未经授权前提下，不得用于商业运营、二次开发以及任何形式的再次发布。
*/
class wx_controller extends adminCommon{  
	//设置高级搜索功能
	function set_search(){
		/*高级搜索相关代码*/
		$type		=	array('1'=>'关注微信','2'=>'绑定微信账户','3'=>'创建首份简历','4'=>'企业完善资料');
		$usertype	=	array('1'=>'个人','2'=>'企业');
		$status		=	array('2'=>'失败','1'=>'成功');
		$time		=	array('1'=>'今天','3'=>'最近三天','7'=>'最近七天','15'=>'最近半月','30'=>'最近一个月');
		$this->yunset('type',$type);
		$this->yunset('usertype',$usertype);
		$this->yunset('status',$status);
		$this->yunset('time',$time);
		
		/*高级搜索结束*/
		$search_list[]	=	array('param'=>'usertype','name'=>'用户类型','value'=>$usertype);
		$search_list[]	=	array('param'=>'status','name'=>'状态','value'=>$status);
		$search_list[]	=	array('param'=>'time','name'=>'发放时间','value'=>$time);
		$this->yunset('search_list',$search_list);
	}
	
	function setwx_search(){
		/*高级搜索相关代码*/
		$status	=	array('2'=>'未登录','1'=>'已登录');
		
		$time	=	array('1'=>'今天','3'=>'最近三天','7'=>'最近七天','15'=>'最近半月','30'=>'最近一个月');
		
		$this->yunset('status',$status);
		
		$this->yunset('time',$time);
		
		/*高级搜索结束*/
		$search_list[]	=	array('param'=>'status','name'=>'状态','value'=>$status);
		
		$search_list[]	=	array('param'=>'time','name'=>'登录时间','value'=>$time);
		
		$this->yunset('search_list',$search_list);
	}
	
	function index_action(){
		
		$this->yuntpl(array('admin/admin_wx'));
		
	}
	
	

	function save_action(){
 		if($_POST['msgconfig']){
			
			//实例化
			$configM	=	$this->MODEL('config');
			
			unset($_POST['msgconfig']);
			
			$configM->setConfig($_POST);
			
			$this->web_config();
			
			$this->ACT_layer_msg('微信配置更新成功！',9,$_SERVER['HTTP_REFERER'],2,1);
		}
	}
	
	
	
	function binduser_action(){

		//实例化
		$userInfoM =	$this->MODEL('userinfo');
		
		$where['PHPYUNBTWSTART']		=	'';
		
		$where['wxid']			=	array('<>','');
		
		$where['wxid']			=	array('notnull');
		
		$where['PHPYUNBTWEND']	=	'';
		
		if(trim($_GET['keyword'])){
			
			$where['username']	=	array('like',trim($_GET['keyword']));
			
			$urlarr['keyword']	=	$_GET['keyword'];
		
		}
		
		//分页链接
		$urlarr['page']	=	'{{page}}';
		$urlarr['c']	=	$_GET['c']; 
		$pageurl		=	Url($_GET['m'],$urlarr,'admin');
		
		//提取分页
		$pageM			=	$this  -> MODEL('page');
		$pages			=	$pageM -> pageList('member',$where,$pageurl,$_GET['page']);
		
		//分页数大于0的情况下 执行列表查询
		if($pages['total'] > 0){
			
		    //limit order 只有在列表查询时才需要
			$where['orderby']		=	'wxbindtime,desc';
			
		    $where['limit']			=	$pages['limit'];
			
			$urlarr['order']		=	$_GET['order'];
				
			$urlarr['t']			=	$_GET['t'];
		    
		    $List	=	$userInfoM -> getList($where,array('field'=>'`uid`,`username`,`wxid`,`wxbindtime`'));
			
			$this->yunset('userList',$List);
		}
		
		$this->yuntpl(array('admin/admin_wxbind'));
	}

	function keyword_action(){
		
		$hotKeyM	=	$this->MODEL('hotkey');
		
		$where['type']	=	'8';

		if(trim($_GET['keyword'])){
			
			$where['key_name']	=	array('like',trim($_GET['keyword']));
			
			$urlarr['keyword']	=	trim($_GET['keyword']);
		}
		
		$urlarr['page']	=	'{{page}}';
		$urlarr['c']	=	$_GET['c']; 
		$pageurl		=	Url($_GET['m'],$urlarr,'admin');
		
		$pageM			=	$this  -> MODEL('page');
		$pages			=	$pageM -> pageList('hot_key',$where,$pageurl,$_GET['page']);
		
		if($pages['total'] > 0){
			
			$where['orderby']		=	'num,desc';
			
		    $where['limit']			=	$pages['limit'];
			
			$urlarr['order']		=	$_GET['order'];
				
			$urlarr['t']			=	$_GET['t'];
		    
		    $List	=	$hotKeyM -> getList($where);
			
			$this->yunset('keyList',$List);
		}
		
		$this->yuntpl(array('admin/admin_wxkey'));
	}

	function wxnav_action(){
		//实例化
		$weiXinM			=	$this->MODEL('weixin');
		
		$where['id']		=	array('>',0);
		
		$where['orderby']	=	'sort,asc';
		
  		$navlist 			= 	$weiXinM->getWxNavList($where);
		
		$this->yunset('navlist',$navlist);
		
		$this->yuntpl(array('admin/admin_wxnav'));
	}
 
	function wxqrcodelog_action(){
		$this->setwx_search();
		
		//实例化
		$weiXinM	=	$this->MODEL('weixin');
		
		if(trim($_GET['keyword'])){
			
			if($_GET['wtype']=='1'){
				
				$where['re_nick']	=	array('like',trim($_GET['keyword']));
           
		    }elseif($_GET['wtype']=='2'){
				
				$where['username']	=	array('like',trim($_GET['keyword']));
            
			}
			
			$where['PHPYUNBTWSTART']		=	'';
			
			$where['username']		=	array('like',trim($_GET['keyword']));
			
			$where['re_nick']		=	array('like',trim($_GET['keyword']),'or');
			
			$where['PHPYUNBTWEND']	=	'';
			
			$urlarr['keyword']		=	trim($_GET['keyword']);
			
			$urlarr['keyword']		=	trim($_GET['keyword']);
		}
		
		if($_GET['status']){
			
			if($_GET['status']=='2'){
				
				$status = 0;
				
			}else{
				
				$status = $_GET['status'];
				
			}
			$where['status']		=	$status;
			
			$urlarr['status']		=	trim($_GET['status']);
		}
		
		if($_GET['usertype']){
			
			$where['usertype']		=	$_GET['usertype'];
			
			$urlarr['usertype']		=	trim($_GET['usertype']);
		}	
		
		if($_GET['time']){
			
			if($_GET['time']=='1'){
				
				$where['time']		=	array('>',strtotime(date('Y-m-d 00:00:00')));
				
			}else{
				
				$where['time']		=	array('>',strtotime('-'.intval($_GET['time']).' day'));
			}
			
				$urlarr['time']		=	$_GET['time'];
	
		}
		
		//分页链接
		$urlarr['page']	=	'{{page}}';
		$urlarr['c']	=	$_GET['c']; 
		$pageurl		=	Url($_GET['m'],$urlarr,'admin');
		
		//提取分页
		$pageM			=	$this  -> MODEL('page');
		$pages			=	$pageM -> pageList('wxqrcode',$where,$pageurl,$_GET['page']);
		
		//分页数大于0的情况下 执行列表查询
		if($pages['total'] > 0){
			
		    //limit order 只有在列表查询时才需要
			$where['orderby']		=	'time,desc';
			
		    $where['limit']			=	$pages['limit'];
			
			$urlarr['order']		=	$_GET['order'];
				
			$urlarr['t']			=	$_GET['t'];
		    
			$List	=	$weiXinM -> getWxQrcodeList($where);
			
			$this->yunset('logList',$List['list']);
		}
		
		$this->yuntpl(array('admin/admin_wxqrcodelog'));
	}
	
	function edit_action(){
		
		//实例化
		$weiXinM	=	$this->MODEL('weixin');
		
		$logM		=	$this->MODEL('log');
		
		if($_POST['name'] && $_POST['keyid']!==''){
			
			$data['name']		=	$_POST['name'];
			
			$data['key'] 		= 	$_POST['key'];
			
			$data['keyid'] 		= 	$_POST['keyid'];
			
			$data['url'] 		= 	$_POST['url'];
			
			$data['type'] 		= 	$_POST['type'];
			
			$data['sort'] 		= 	$_POST['sort'];
			
			$data['appid'] 		= 	$_POST['appid'];
			
			$data['apppage'] 	= 	$_POST['apppage'];
			
			$where['name']		= 	$_POST['name'];
			
			if($_POST['keyid']>0){
				
				if(!$_POST['key'] && $_POST['type']=='click'){
					
					echo 1;exit();
					
				}elseif($_POST['type']=='miniprogram' && (!$_POST['url'] || !$_POST['appid'] || !$_POST['apppage'])){
					
					echo 1;exit();
					
				}elseif($_POST['type']=='view' && !$_POST['url']){
					
					echo 1;exit();
				
				}else{

					$where['PHPYUNBTWSTART']		=	'';
			
					$where['name']			=	$_POST['name'];
					
					$where['keyid']			=	$_POST['keyid'];
					
					$where['PHPYUNBTWEND']	=	'';
					
				}
			}
			
			if($_POST['navid']>0){
				
				$where['id']	=	array('<>',$_POST['navid']);
			
			}
			
 			$nav = $weiXinM->getWxNavNum($where);
			
			if($nav>0){
				
				echo 2;exit();
			
			}
			
			unset($_POST['pytoken']);
			
			if($_POST['navid']>0){
				
				$navid = $_POST['navid'];
				
				unset($_POST['navid']);
				
				$upWhere['id']	=	$navid;
				
				$weiXinM->upWxNavInfo($upWhere,$data);
				
				$logM	->addAdminLog('微信菜单(ID:'.$navid.')修改成功');
			
			}else{
				
				$navid	=	$weiXinM->addWxNavInfo($data);
				
				$logM	->addAdminLog('微信菜单(ID:'.$navid.')添加成功');
			}

			echo 3;	exit();
		
		}else{
			
			echo 1;	exit();
		
		}

	}
 	
	function creat_action(){
		
		//实例化
		$weiXinM			=	$this->MODEL('weixin');
		
		$where['id']		=	array('>',0);
		
		$where['orderby']	=	array('keyid,asc','sort,asc');
		
  		$creatNav	=	$weiXinM->creatWxNavList($where);
		
		if(is_array($creatNav))	{
			
 			$Token = getToken($this->config);

 			$DelUrl = 'https://api.weixin.qq.com/cgi-bin/menu/delete?access_token='.$Token;
			CurlPost($DelUrl);
			
			$Url = 'https://api.weixin.qq.com/cgi-bin/menu/create?access_token='.$Token;
			$result = CurlPost($Url,urldecode(json_encode($creatNav)));
			
			$Info = json_decode($result);
			
			if($Info->errcode=='0' || $Info->errmsg=='ok'){
 				
				echo 1;die;
			
			}else{
 				
				echo '错误代码:'.$Info->errcode.',错误信息:'.$Info->errmsg;die;
			}
		}
	}
	
 	function delnav_action(){
		
		//实例化
		$weiXinM	=	$this->MODEL('weixin');
		
		if($_POST['del']){
			
			$where['id']	=	array('in',pylode(',',$_POST['del']));
			
			$where['keyid']	=	array('in',pylode(',',$_POST['del']),'or');
			
			$weiXinM->delWxNav($where,array('type'=>'all'));
			
			$this->layer_msg('微信菜单(ID:'.pylode(',',$_POST['del']).')删除成功！',9,1,$_SERVER['HTTP_REFERER']);
		}
		if((int)$_GET['delid']){
			
			$this->check_token();
			
			$where['id']	=	(int)$_GET['delid'];
			
			$where['keyid']	=	array('=',(int)$_GET['delid'],'or');
			
			//删除微信菜单及子菜单
			$id	=	$weiXinM->delWxNav($where,array('type'=>'one'));
			
			$id?$this->layer_msg('微信菜单(ID:'.$_GET['delid'].')删除成功！',9,0,$_SERVER['HTTP_REFERER']):$this->layer_msg('删除失败！',8,0,$_SERVER['HTTP_REFERER']);
		}
	}
	
 	function deluser_action(){
		
		//实例化
		$userInfoM	=	$this->MODEL('userinfo');
		if($_GET['del']){
			
			$this->check_token();
			
			$where['wxid']	=	array('in',pylode(',',$_GET['del']));
			
			$data['wxid']	=	'';
			
			$userInfoM->upInfo($where,$data);
			
			$this->layer_msg('微信用户(ID:'.pylode(',',$_GET['del']).')取消绑定成功！',9,1,$_SERVER['HTTP_REFERER']);
		}
		
	}
	
	function ajax_action(){
		//实例化
		$weiXinM	=	$this->MODEL('weixin');
		
		$logM		=	$this->MODEL('log');
		
		if($_POST['sort']){
			
			$upWhere['id']	=	$_POST['id'];
			
			$data['sort']	=	$_POST['sort'];
			
			$weiXinM->upWxNavInfo($upWhere,$data);
			
			$logM->addAdminLog('微信菜单(ID:'.$_POST['id'].')排序修改成功');
		}
		
		if($_POST['name']){
			
			$upWhere['id']	=	$_POST['id'];
			
			$data['name']	=	$_POST['name'];
			
			$weiXinM->upWxNavInfo($upWhere,$data);
			
			$logM->addAdminLog('微信菜单(ID:'.$_POST['id'].')名称修改成功');
		}
		
		echo '1';die;
	}
	
	function zdkeyword_action(){
		//实例化
		$weiXinM	=	$this->MODEL('weixin');
		
	
		if(trim($_GET['keyword'])){
			
			$where['keyword']	=	array('like',trim($_GET['keyword']));
			
			$urlarr['keyword']	=	trim($_GET['keyword']);
		}
		
		//分页链接
		$urlarr['page']	=	'{{page}}';
		$urlarr['c']	=	$_GET['c']; 
		$pageurl		=	Url($_GET['m'],$urlarr,'admin');
		
		//提取分页
		$pageM			=	$this  -> MODEL('page');
		$pages			=	$pageM -> pageList('wxzdkeyword',$where,$pageurl,$_GET['page']);
		
		//分页数大于0的情况下 执行列表查询
		if($pages['total'] > 0){
			
		    //limit order 只有在列表查询时才需要
			$where['orderby']		=	'time,desc';
			
		    $where['limit']			=	$pages['limit'];
			
			$urlarr['order']		=	$_GET['order'];
				
			$urlarr['t']			=	$_GET['t'];
		    
		    $List	=	$weiXinM->getWxzdkeywordList($where);
			
			$this->yunset('keyList',$List['list']);
		}
		
		$this->yuntpl(array('admin/admin_zdkeyword'));
	}
	
	//一键清除三天以上记录
	function clearwx_action(){	
		
		//实例化
		$weiXinM	=	$this->MODEL('weixin');
		
		$where['time']	=	array('<',strtotime('- 3 days'));

		$del		=	$weiXinM->delWxqrcode($where,array('type'=>'all'));
		
		echo $del ? '清理完成！' : '删除失败！';
	
	}
	
	function zdaddkeyword_action(){	
	
		//实例化
		$weiXinM		=	$this->MODEL('weixin');
		
		$where['id']	=	(int)$_GET['id'];
		
		$row	=	$weiXinM->getWxzdkeyword($where);
		
	    $this->yunset('row',$row);
		
		if($_POST['submit']){   
		
			if(trim($_POST['title'])==''){
				
				$this->ACT_layer_msg('规则名称不能为空！',8);
			
			}	
			
			if(trim($_POST['keyword'])==''){
				
				$this->ACT_layer_msg('关键字不能为空！',8);
			
			}	
			
			if(trim($_POST['content'])==''){
				
				$this->ACT_layer_msg('回复内容不能为空！',8);
			
			}	 
			
			$data['title']		=	trim($_POST['title']);
			
			$data['keyword']	=	trim($_POST['keyword']);
			
			$data['content']	=	trim($_POST['content']);
			
			$data['time']		=	time();
			
			$weiXinM->addWxzdkeyword($data);
			
			$this->ACT_layer_msg('添加成功！',9,'index.php?m=wx&c=zdkeyword',2,1);
		}
		
		if($_POST['update']){   
			
			$data['title']		=	trim($_POST['title']);
			
			$data['keyword']	=	trim($_POST['keyword']);
			
			$data['content']	=	trim($_POST['content']);
			
			$data['time']		=	time();
			
			$zdWhere['id']		=	$_POST['id'];
			
			$weiXinM->upWxzdkeyword($zdWhere,$data);
			
		    $this->ACT_layer_msg('修改成功！',9,'index.php?m=wx&c=zdkeyword',2,1);		
		
		}
		
		$this->yuntpl(array('admin/admin_zdaddkeyword'));
	}
		
	function delkeyword_action(){
		
		//实例化
		$weiXinM	=	$this->MODEL('weixin');
		
		if(is_array($_POST['del'])){
			
			$where['id']	=	array('in',pylode(',',$_POST['del']));
			
			$del			=	$weiXinM->delWxzdkeyword($where,array('type'=>'all'));
			
			$layer_type		=	1;
			
			$delid			=	pylode(',',$_POST['del']);
			
		}else{
			
			$this->check_token();
			
			$where['id']	=	(int)$_GET['id'];
			
			$del			=	$weiXinM->delWxzdkeyword($where,array('type'=>'one'));
			
			$layer_type		=	0;
			
			$delid			=	(int)$_GET['id'];
		}
		
		if(!$delid){
			
			$this->layer_msg('请选择要删除的内容！',8);
		
		}
		
		$del?$this->layer_msg('(ID:'.$delid.')删除成功！',9,$layer_type,$_SERVER['HTTP_REFERER']):$this->layer_msg('删除失败！',8,$layer_type,$_SERVER['HTTP_REFERER']);
	}
}

?>