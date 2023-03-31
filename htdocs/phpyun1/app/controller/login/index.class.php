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
		if($this->uid!=""&&$this->username!=""){
			if($_GET['type']=="out"){       
				
				$this->cookie->unset_cookie();
				
			}else{
				$this->ACT_msg($this->config['sy_weburl']."/member", "您已经登录了！");
			}
		}
		if($_GET['backurl']=='1'){
			$this->cookie->setCookie("backurl",$_SERVER['HTTP_REFERER'],time()+60);
		}
		if(!$_GET['usertype']){
			$_GET['usertype']		=		1;
		}
		$this->yunset("cookie", $_COOKIE['checkurl']);				
		$this->yunset("usertype",(int)$_GET['usertype']);
		$this->yunset("loginname",$_COOKIE['loginname']);
        $this->yunset("referurl",$_SERVER['HTTP_REFERER']);
		$this->seo("login");
		$this->yun_tpl(array('index'));
	}
	//登录验证
	function loginsave_action(){
		
	
		$Member					=			$this->MODEL('userinfo');

		$lData['username']		=			$_POST['username'];
		$lData['uid']			=			$this->uid;
		$lData['usertype']		=			$this->usertype;
		$lData['act_login']		=			$_POST['act_login'];
		$lData['num']			=			$_POST['num'];
		$lData['loginname']		=			$_POST['loginname'];
		$lData['password']		=			$_POST['password'];
		$lData['referurl']		=			$_POST['referurl'];
		$lData['authcode']		=			$_POST['authcode'];

		$return					=			$Member->userLogin($lData);
	
		if($return['uclogin']){
			$error	=	2;
			$return['msg'] = $return['uclogin'];
		}else{
			$error	=	1;
		}
		if($return['errcode']==2){
			$this->layer_msg($return['msg'],9,0,Url('register',array('c'=>'ident')),2,$error);
		}else if($return['url']){
			$this->layer_msg($return['msg'],9,0,$return['url'],2,$error);
		}else{
			$this->layer_msg($return['msg']);	
		}
		
	}
	//登录短信验证码发送
	function sendmsg_action(){
		$noticeM		= 		$this->MODEL('notice');
		$result			=		$noticeM->jycheck($_POST['code'],'前台登录');
		if(!empty($result)){
			$this->layer_msg($result['msg'], 9, 0, '', 2, $result['error']);
		}
		$moblie			=		$_POST['moblie'];
		$UserinfoM		=		$this->MODEL('userinfo');
		$userinfo 		= 		$UserinfoM->getInfo(array("moblie" => $moblie),array('field'=>"`usertype`,`moblie_status`,`uid`"));
		if($userinfo['moblie_status']!='1'){
			$this->layer_msg('手机号码未绑定', 9, 0, '', 2, 108);
		}
		$user = array(
			'uid'      	=> 		$userinfo['uid'],
			'usertype' 	=> 		$userinfo['usertype']
		);
		
		$result 		=		$noticeM->sendCode($moblie, 'login',$user, 6, 90);
		echo json_encode($result);exit();
	}
	function rest_action(){
		$this->cookie->unset_cookie();
		$url = Url("login",array("usertype"=>"1"),"1");
		header("Location: ".$url);
	}
	function utype_action(){
		if($this->uid){
			header("Location:".$this->config['sy_weburl']."/member");
		}
		$this->seo("login");
		$this->yun_tpl(array('utype'));
	}

	function setutype_action(){   
		//验证前期保存的登录数据，是否在本系统有存在并且密码对应
		if($_COOKIE['username'] && $_COOKIE['password'] && (CheckRegUser($_COOKIE['username']) OR CheckRegEmail($_COOKIE['username'])==false)){
			//无usertype情况下 才予以激活 否则直接登录会员中心
			$Member=$this->MODEL("userinfo");
			$user = $Member->getInfo(array("username"=>$_COOKIE['username']),array("field"=>"`uid`,`username`,`password`,`salt`,`usertype,did`"));
			
			$userid = $user['uid'];
			if(!$user['usertype']){
				if(passCheck($_COOKIE['password'],$user['salt'],$user['password']) && $user['password']!=''){
					$usertype = (int)$_GET['usertype'];
					if($usertype=='1'){
						$table = "member_statis";
						$table2 = "resume";
						$data1=array("uid"=>$userid);
						$data2['uid']=$userid;
					}elseif($usertype=='2'){
					    
						$table         =  "company_statis";
						$table2        =  "company";
						$ratingM       =  $this->MODEL('rating');
						$data1         =  $ratingM->FetchRatingInfo();
						$data2['uid']  =  $userid;
						$data1['did']  =  $user['did'];
						
					}elseif($usertype=='3'){
						$table = 'lt_statis';
						$table2 = 'lt_info';
						$id =$this->config['lt_rating'];
						$row = $Member->GetRatinginfoOne(array('id'=>$id));
						$data1=array('rating'=>$id,'integral'=>$this->config['integral_reg'],'rating_name'=>$row['name'],'rating_type'=>$row['type'],'lt_job_num'=>$row['lt_job_num'],'lt_down_resume'=>$row['lt_resume'],'lt_editjob_num'=>$row['lt_editjob_num'],'lt_breakjob_num'=>$row['lt_breakjob_num']);
						if($row['service_time']>0){
							$time=time()+86400*$row['service_time'];
						}else{
							$time=0;
						}
						$data1['vip_etime']=$time;
						$data2['uid']=$userid;
						$data2['did']=$user['did'];

					}
					$Member->upInfo(array(array("uid"=>$userid),"usertype"=>$usertype));
					$Member->InsertReg($table,$data1);
					$Member->InsertReg($table2,$data2);
					$this->cookie->add_cookie($userid,$user['username'],$user['salt'],$user['email'],$user['password'],$usertype,1,$user['did']);
					header("Location:".$this->config['sy_weburl'].'/member');
				}else{
					$this->cookie->unset_cookie();
					echo "激活失败";
				}
			}else{
				$this->cookie->unset_cookie();
				echo "激活失败";
			}
		}else{
			header("Location:".Url('index'));
		}
	}
	//微信登录
	function wxlogin_action(){
		$WxM=$this->MODEL('weixin');
		$qrcode = $WxM->applyWxQrcode($_COOKIE['wxloginid']);
		if(!$qrcode){
			echo 0;
		}else{
			echo $qrcode;
		}
	}
	
	function getwxloginstatus_action(){
		if($_COOKIE['wxloginid']){
			$WxM				=			$this->MODEL('weixin');
			$UserinfoM			=			$this->MODEL('userinfo');
			$user 				= 			$WxM->getWxLoginStatus($_COOKIE['wxloginid']);
			if(!empty($user)){
                if($user['wxbindtime']=="" || $user['wxbindtime']==0){
					$where['uid']			=			$user['uid'];

					$data					=			array(

						'wxbindtime'		=>			time()
					);
					$UserinfoM->upInfo($where,$data);
                }
				if($user['status']=="2"){
					$this->layer_msg('您的账号已被锁定',9,0,Url("register",array("c"=>"ok","type"=>2),"1"),2);
				}
                if($user['usertype']=="1" && $this->config['user_status']!="1" && $user['status']!="1"){
					$this->layer_msg('您还没有通过审核!',9,0,Url("register",array("c"=>"ok","type"=>3),"1"),2,1);
				}
				if($user['usertype']=="2" && $this->config['com_status']!="1" && $user['status']!="1"){
					$this->layer_msg('您还没有通过审核',9,0,Url("register",array("c"=>"ok","type"=>3),"1"),2,1);
				}
				if($user['usertype']=="3" && $this->config['lt_status']!="1" && $user['status']!="1"){
					$this->layer_msg('您还没有通过审核!',9,0,Url("register",array("c"=>"ok","type"=>3),"1"),2,1);
				}
				
				if($this->config['user_status']=="1" && $user['usertype']=="1"&&$user['email_status']!="1"){
					$this->layer_msg('您的账户还未激活，请先激活！',9,0,Url("activate",'',"1"),2);
				}
				$this->cookie->add_cookie($user['uid'],$user['username'],$user['salt'],$user['email'],$user['password'],$user['usertype'],1,$user['did']);
				$logtime		=		date("Ymd",$user['login_date']);
				$nowtime		=		date("Ymd",time());
				if($logtime!=$nowtime){
				    $this->MODEL('integral')->invtalCheck($user['uid'],$user['usertype'],"integral_login","会员登录",22);
				} 

				$this->layer_msg('',9,0,Url("member"));
			}else{
				$this->layer_msg('');
			}
		}else{
			$this->layer_msg('');
		}
	}
}
