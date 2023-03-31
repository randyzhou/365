<?php
/*
* $Author ：PHPYUN开发团队
*
* 官网: http://www.phpyun.com
*
* 版权所有 2009-2019 宿迁鑫潮信息技术有限公司，并保留所有权利。
*
* 软件声明：未经授权前提下，不得用于商业运营、二次开发以及任何形式的再次发布。
 */
class index_controller extends common{
	function index_action(){
		
		if(!$this->config['did'] && $this->config['sy_gotocity']=='1' && !$_COOKIE['gotocity']){
			include(PLUS_PATH.'domain_cache.php');
			go_to_city($site_domain);
		}
		
		 
		include PLUS_PATH.'menu.cache.php';
		$navlist			=	$menu_name[26];
		foreach($navlist as $k=>$v){

			$navlist[$k]['pic_n']	=	checkpic($v['pic']);
			
			if($v['type']=='2'){
				$navlist[$k]['url_n']	=	$v['url'];
			}else{
				if(strpos($v['url'],'&')!==false && strpos($v['url'],'=')!==false){
					$url = explode('&',$v['url']);
					foreach($url as $key=>$value){

						$urls = explode('=',$value);
						$sonUrl[$urls[0]] = $urls[1];
					}
					$navlist[$k]['url_n']	=	Url('wap',$sonUrl);
					unset($sonUrl);
				}else{
				
					$navlist[$k]['url_n']	=	Url('wap',array('c'=>$v['url']));
				}
				
				
			}
		}
		
		$this->get_moblie();
		if($this->config["did"]){
			$this->seo("index",$this->config['sy_webtitle'],$this->config['sy_webkeyword'],$this->config['sy_webmeta']);
		}else{
			$this->seo('index');
		}
		$this->yunset('navlist',$navlist);
		$this->yunset('indexnav',1);
		$this->yuntpl(array('wap/index'));
		 
	}

	function loginout_action(){
		$this->cookie->unset_cookie();
		$this->wapheader('');
	}
	// 关于我们
	function about_action()
	{
	    
	    $descM    =   $this->MODEL('description');
	    $content  =   $descM -> getDes(array('name'=>'关于我们'),array('field'=>'content'));
	    
	    $this->yunset('content',$content);
	    $this->yunset('headertitle','关于我们');
	    $this->yuntpl(array('wap/about'));
	}
    // 联系我们
	function contact_action()
	{
	    
	    $descM    =   $this->MODEL('description');
	    $content  =   $descM -> getDes(array('name'=>'联系我们'),array('field'=>'content'));
	    
	    $this->yunset('content',$content);
	    $this->yunset('headertitle','联系我们');
	    $this->yuntpl(array('wap/about'));
	}
	//下载app
	function appDown_action()
	{
	    $this->yunset('headertitle','下载APP');
	    $this->yuntpl(array('wap/appdown'));
	}
	// /提示相关信息
	function applytype_action(){
		$memberM		=	$this -> MODEL('userinfo');
		$uid			=	$this->uid;
		$res			=	$memberM->getapplytype($uid);
		echo json_encode(array('msg'=>$res['msg'],'url'=>$res['url'],'wxopenid'=>$res['wxopenid'],'wxid'=>$res['wxid'],'errcode'=>$res['errcode']));die;
	}
	//已拒绝重新弹出
	function applystype_action(){
		
		$memberM			=			$this -> MODEL('userinfo');
		
		$uid				=			$this->uid;
		
		$res				=			$memberM->getapplyyjjtype($uid);
		echo json_encode(array('msg'=>$res['msg'],'url'=>$res['url'],'errcode'=>$res['errcode']));die;
	}
	//切换身份
	function changeusertype_action(){
		$memberM	=	  $this -> MODEL('userinfo');
		$uid      	=     $this->uid;
		if($uid==""){
			$res['url']			=	Url('wap',array('c'=>'login'));
			$res['msg']			=	'请先登录';
			echo json_encode(array('msg'=>$res['msg'],'url'=>$res['url']));die;
		}
		$where['uid']			=		$uid;
		$rows					=		$memberM->getInfo($where,array('field'=>'`usertype`,`pid`'));
	
		if($rows){
			$userwhere['uid']				=		$uid;
			$userwhere['pres_usertype']		=		$rows['usertype'];
			$userwhere['status']			=		0;	
			
			$cahnge							=		$memberM->getUserChangeInfo($userwhere);
		
			if($cahnge){
				$usertype	=	array('1'=>'个人会员','2'=>'企业会员');
				$res['msg']			=		'当前已申请'.$usertype[$cahnge['apply_usertype']].'转换,无法申请其他会员';
				$res['url']			=		$_SERVER['HTTP_REFERER'];
				echo json_encode(array('msg'=>$res['msg'],'url'=>$res['url']));die;
			}
			
			if($_POST['applyusertype']==""){
				$res['msg']			=		'请选择转换会员类型';
				$res['url']			=		$_SERVER['HTTP_REFERER'];
				echo json_encode(array('msg'=>$res['msg'],'url'=>$res['url']));die;
			}elseif($rows['usertype']==$_POST['applyusertype']){
			
				$res['msg']			=		'选择转换会员类型与当前会员类型一致，无须切换';
				$res['url']			=		$_SERVER['HTTP_REFERER'];
				echo json_encode(array('msg'=>$res['msg'],'url'=>$res['url']));die;
			}
			$addData				=		array(
				'uid'				=>		$uid,
				'name'				=>		$this->username,
				'did'				=>		$this->userdid,
				'apply_usertype'	=>		$_POST['applyusertype'],
				'pres_usertype'		=>		$this->usertype,
				'applybody'			=>		$_POST['applybody'],
				'apply_time'		=>		time(),
				'lastupdate'		=>		time(),
				'type'				=>		1,
				'state'				=>		0,
			);
			$return					=		$memberM->addUserChange($addData);
			if($return){
				$res['msg']			=		'申请成功，等待审核';
				$res['url']			=		$_SERVER['HTTP_REFERER'];
				echo json_encode(array('msg'=>$res['msg'],'url'=>$res['url']));die;
			}else{
				$res['msg']			=		'申请转换会员类型失败';
				$res['url']			=		$_SERVER['HTTP_REFERER'];
				echo json_encode(array('msg'=>$res['msg'],'url'=>$res['url']));die;
			}
		}else{
			$res['msg']				=		'数据不存在';
			$res['url']				=		$_SERVER['HTTP_REFERER'];
			echo json_encode(array('msg'=>$res['msg'],'url'=>$res['url']));die;
		}
		
	}
}
?>