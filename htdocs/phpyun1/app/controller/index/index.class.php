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

		//是否加载区域分站
		if(!$this->config['did'] && $this->config['sy_gotocity']=='1' && !$_COOKIE['gotocity']){

			include(PLUS_PATH."domain_cache.php");

			go_to_city($site_domain);//自动跳转分站

		}
		
		if($this->config['sy_jobdir']!=""){

			$jobclassurl	=	$this->config['sy_weburl']."/job/index.php?c=search&";

		}else{

			$jobclassurl	=	$this->config['sy_weburl']."/index.php?m=job&c=search&";

		}

		$this->yunset("jobclassurl",$jobclassurl);
		
		$where['status']	=	1;
		$where['r_status']	=	1;
		$where['rec_resume']=	1;
		if($this->config['did']>0){
			$where['did']	=	$this->config['did'];
		}else{
			$where['PHPYUNBTWSTART']=	'';
			$where['did'][]	=	array('isnull');
			$where['did'][]	=	array('=','0','OR');
			$where['PHPYUNBTWEND']	=	'';
		}
		$resumeM	=	$this->MODEL('resume');

		$topnum 	= 	$resumeM->getExpectNum($where);

		$this->yunset("topnum",$topnum);
		
		if($this->config["did"]){

			$this->seo("index",$this->config['sy_webtitle'],$this->config['sy_webkeyword'],$this->config['sy_webmeta']);

			$CacheM					=				$this->MODEL('cache');

			$DomainList				=				$CacheM->GetCache(array('domain'));

			$site_domain			=				$DomainList['site_domain'];

			if(is_array($site_domain)){

				foreach($site_domain as $d){

					if($d['id']==$this->config["did"]){

						$domain['tpl']	=	$d['tpl'];

					}

				}

			}

			if($domain['tpl']!=""){

				$tpl	=	@explode(".",$domain['tpl']);

				$this->yun_tpl(array($tpl[0]));

			}else{

				$this->yun_tpl(array('siteindex'));

			}

		}else{

			$this->seo("index");

			$this->yun_tpl(array('index'));

		}

	}
	function top_action(){

		$this->seo("top");

		$this->yun_tpl(array('top'));

	}
	function moblie_action(){

		$this->seo("moblie");

		$this->yun_tpl(array('moblie'));

	}
	function wap_action(){

		$this->seo("wap");

		$this->yun_tpl(array('wap'));

	}
	function weixin_action(){

		$this->seo("weixin");

		$this->yun_tpl(array('weixin'));

	}
	function xcx_action(){

		$this->seo("xcx");

		$this->yun_tpl(array('android'));

	}
	function app_action(){

		$this->seo("app");

		$this->yun_tpl(array('ios'));

	}
	function site_action(){

		if($this->config["sy_web_site"]!="1"){

			$this->ACT_msg($_SERVER['HTTP_REFERER'], $msg = "暂未开启多站点模式！");

		}
		
		$siteinfo				=				getLocalCity();

		if($siteinfo){
			
	
			$site				=				1;
			if($siteinfo['mode']=='2'){
						
				$siteinfo['host']=$this -> config['sy_indexdomain'].'/'.$siteinfo['indexdir'].'/';
			}else{
				$siteinfo['host']='http://'.$siteinfo['host'];
			}
			$this->yunset("site",$site);

			$this->yunset("vurl",$siteinfo['host']);

			$this->yunset("siteinfo",$siteinfo);

		}

		$this->seo("index");

		$this->yun_tpl(array('site'));

	}
	function logout_action(){

		$this->logout();

	}
	//切换身份
	function changeusertype_action(){
		$memberM		=	$this -> MODEL('userinfo');
		$uid				=			$this->uid;
		if(empty($uid)){
			$res['url']			=	Url('login');
			$res['msg']			=	'请先登录';
      echo json_encode(array('msg'=>$res['msg'],'url'=>$res['url']));die; 
		}
		//判断数据是否存在
		$where['uid']		=		$uid;
		$rows				=		$memberM->getInfo($where,array('field'=>'`usertype`,`pid`'));
		if($rows){
			$userwhere['uid']				      =		$uid;
			$userwhere['pres_usertype']		=		$rows['usertype'];
			$userwhere['status']			    =		0;	
      
			$cahnge							=		$memberM->getUserChangeInfo($userwhere);
      if($cahnge){
				$usertype	=	array('1'=>'个人会员','2'=>'企业会员');
        $res['url']			=$_SERVER['HTTP_REFERER'];
        $res['msg']			='当前已申请'.$usertype[$cahnge['apply_usertype']].'类型,无法申请新的会员类型';
        echo json_encode(array('msg'=>$res['msg'],'url'=>$res['url']));die; 
			}
		
			if($_POST['applyusertype']==""){
				$res['url']			=$_SERVER['HTTP_REFERER'];
        $res['msg']			='请选择转换会员类型';
        echo json_encode(array('msg'=>$res['msg'],'url'=>$res['url']));die; 
			}elseif($rows['usertype']==$_POST['applyusertype']){
				 $res['url']		=$_SERVER['HTTP_REFERER'];
         $res['msg']			='选择转换会员类型与当前会员类型一致，无须切换';
         echo json_encode(array('msg'=>$res['msg'],'url'=>$res['url']));die; 
			}
			$adddata 				=   	array(
				'uid'				=>		$this->uid,
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
			
			$return					=		$memberM->addUserChange($adddata);
			if($return){
				$res['url']		  =$_SERVER['HTTP_REFERER'];
        $res['msg']			='申请成功，等待审核';
        echo json_encode(array('msg'=>$res['msg'],'url'=>$res['url']));die; 
			}else{
				 $res['url']		  =$_SERVER['HTTP_REFERER'];
        $res['msg']			='申请转换会员类型失败';
        echo json_encode(array('msg'=>$res['msg'],'url'=>$res['url']));die; 
			}
		}else{
			$res['url']		  =$_SERVER['HTTP_REFERER'];
      $res['msg']			='数据不存在';  
      echo json_encode(array('msg'=>$res['msg'],'url'=>$res['url']));die; 
		}				
	}
	function applytype_action(){
		$memberM		=	$this -> MODEL('userinfo');
   
		$uid			=	$this->uid;
		$res			=	$memberM->getapplytype($uid);
		echo json_encode(array('msg'=>$res['msg'],'url'=>$res['url'],'wxopenid'=>$res['wxopenid'],'wxid'=>$res['wxid'],'errcode'=>$res['errcode']));die;
	}
	function applystype_action(){
		$memberM			=			$this -> MODEL('userinfo');
    $uid				=			$this->uid;
		$res				=			$memberM->getapplyyjjtype($uid);
		echo json_encode(array('msg'=>$res['msg'],'url'=>$res['url'],'errcode'=>$res['errcode']));die;
	}
	function GetHits_action(){
    	if($_GET['id']){

			$articleM		=		$this->MODEL('article');

			$articleM->upBase(array('id'=>(int)$_GET['id']),array('hits'=>array('+',1)));
				
			$info			=		$articleM->getInfo(array('id'=>(int)$_GET['id']),array('field'=>'hits'));
			
			echo "document.write('".$info["hits"]."')";
			
		}
		
    }
	function get_action(){

		$descriptionM				=		$this->MODEL('description');
		
		session_start();

		if($_SESSION['auid']==""){

			$row					=		$descriptionM->getDes(array("id"=>(int)$_GET['id'],"is_nav"=>'1'));

		}else{

			$row					=		$descriptionM->getDes(array("id"=>(int)$_GET['id']));

		}
		
		$top						=		"";

		$footer						=		"";
		
		if(is_array($row)){

			if($row['top_tpl']==1){

				$top				=		APP_PATH."/app/template/".$this->config['style']."/header";

			}else if($row['top_tpl']==3){

				 $top				=		APP_PATH."/app/template/".$row['top_tpl_dir'];

			}
			if($row['footer_tpl']==1){

				$footer				=		APP_PATH."/app/template/".$this->config['style']."/footer";

			}else if($row['footer_tpl']==3){

				$footer				=		APP_PATH."/app/template/".$row['footer_tpl_dir'];

			}
			$seo['title']			=		$row['title'];

			$seo['keywords']		=		$row['keyword'];

			$seo['description']		=		$row['descs'];

			$this->yunset("seo",$seo);
			
			$this->yunset("name",$row['name']);

			$this->yunset("content",$row['content']);

			$this->header_desc($row['title'],$row['keyword'],$row['descs']);
			
			$make					=		APP_PATH."/app/template/".$this->config['style']."/make";

			$make_top				=		APP_PATH."/app/template/".$this->config['style']."/make_top";
			
			$this->yuntpl(array($make_top,$top,$make,$footer));

		}else{

			$this->ACT_msg($this->config['sy_weburl'],"请求页面不存在！");

		}

	}

    //广告记录
	function clickhits_action(){

		if((int)$_GET['id']){

			$adM					=			$this->MODEL("ad");

			$id						=			(int)$_GET['id'];

			$ad						=			$adM->getInfo(array('id'=>$id),array("field"=>"pic_src,id"));
			
			if(!empty($ad)){

				$ip					= 			fun_ip_get();

				if($this->config['sy_adclick']>0){
					
					$num			=			$adM->getAdClickNum(array('ip'=>$ip,'aid'=>$id,'addtime'=>array('>',strtotime('-'.$this->config['sy_adclick'].' hour'))));
					
					if($num>"0"){

						header('Location: '.$ad['pic_src']);

					}

				}

				$data['aid']		=			$id;

				$data['uid']		=			$this->uid;

				$data['ip']			=			$ip;

				$data['addtime']	=			time();
	
				$nid				=			$adM->addAdClick($data);

				if($nid){

					$adM->upInfo(array('id'=>$id),array('hits'=>array('+',1)));

				}
				if(!$ad['pic_src']){

					$ad['pic_src']	=			$this->config['sy_weburl'];

				}
				

				header('Location: '.$ad['pic_src']);

			}

		}

	}
	
	function hb_action(){

		$UserinfoM	=	$this -> MODEL('userinfo');
		$a = $UserinfoM -> activUser($this ->uid,1);
		/*临时测试
		$nav = $this->obj->DB_select_all('admin_navigation',"`keyid`='0'");
		
		foreach($nav as $key=>$value){
			
			$nav1[] = $value['id'];
		
		}

		$this->obj->DB_update_all('admin_navigation',"`level`='1'","where `id` IN (".implode(',',$nav1).")");

		$nav = $this->obj->DB_select_all('admin_navigation',"`keyid` IN (".implode(',',$nav1).")");

		foreach($nav as $key=>$value){
			
			$nav2[] = $value['id'];
		
		}
		$this->obj->DB_update_all('admin_navigation',"`level`='2'","where `id` IN (".implode(',',$nav2).")");


		$nav = $this->obj->DB_select_all('admin_navigation',"`keyid` IN (".implode(',',$nav2).")");

		foreach($nav as $key=>$value){
			
			$nav3[] = $value['id'];
		
		}
		$this->obj->DB_update_all('admin_navigation',"`level`='3'","where `id` IN (".implode(',',$nav3).")");

		*/
	}

	function ur_action(){
		set_time_limit(0);

		//分批查询简历
		$count = $this->obj->DB_select_num("resume_expect");
		
		//每次转换数据量 1000 或 2000 较为合适，防止内存溢出
		$size = 10; 
		//循环次数 
		$num = ceil($count/$size); 
		
		//$num =1;
		if(!$_GET['num']){
			$i = 0;
		
		}else{
			$i=$_GET['num'];
		}
		//每次查询$size条数据,防止占用内存过大
		
		$SQL = "Select `id`,`uid` From `phpyun_resume_expect` Where id>=(Select Max(id) From ( Select id From `phpyun_resume_expect`  Order By id ASC limit ".($size*$i).",1) As tmp)  ORDER BY id ASC limit ".$size;
		$list = $this -> obj -> DB_query_all($SQL,'all');

		foreach($list as $key=>$value){
			
			//查询简历相关附表数据

			$skill = $this ->obj -> select_num('resume_skill',array('eid'=>$value['id']));

			$work = $this ->obj -> select_num('resume_work',array('eid'=>$value['id']));

			$pro = $this ->obj -> select_num('resume_project',array('eid'=>$value['id']));
			$edu = $this ->obj -> select_num('resume_edu',array('eid'=>$value['id']));
			$train = $this ->obj -> select_num('resume_training',array('eid'=>$value['id']));
			$cert = $this ->obj -> select_num('resume_cert',array('eid'=>$value['id']));
			$other = $this ->obj -> select_num('resume_other',array('eid'=>$value['id']));
			//组合简历完整度
			$integrity = 55;
			$user_resume_sql['uid']	=	$value['uid'];
			$user_resume_sql['eid']	=	$value['id'];
			$user_resume_sql['expect']	=	1;

			if($work > 0){
				$integrity  =  $integrity + 10;
				$user_resume_sql['work']	=	$work;
			}
			if($edu > 0){
				$integrity  =  $integrity + 10;
				$user_resume_sql['edu']	=	$edu;
			}
			if($skill > 0){
				$integrity  =  $integrity + 10;
				$user_resume_sql['work']	=	$skill;
			}
			if($pro > 0){
				$integrity  =  $integrity + 8;
				$user_resume_sql['project']	=	$pro;
			}
			if($train > 0){
   				$integrity  =  $integrity + 7;
 				$user_resume_sql['training']	=	$train;
  			}			

			//查询user_resume 是否存在
			$userresumeNum = $this -> obj -> select_num('user_resume',array('eid'=>$value['id']));

			if($userresumeNum>0){
				
				$this -> obj ->update_once('user_resume',$user_resume_sql,array('eid'=>$value['id']));

			}else{
			
				$this -> obj ->insert_into('user_resume',$user_resume_sql,array('eid'=>$value['id']));
			}
			$this -> obj ->update_once('resume_expect',array('integrity'=>$integrity),array('id'=>$value['id']));
		}
		
		if(($i+1)>=$num){
			echo "完成";
		}else{
			$getnum = $i+1;
			echo "<script>location.href='".$this->config[sy_weburl]."/index.php?c=ur&num=".$getnum."';</script>";
		}
	
	
	}
	
}
?>