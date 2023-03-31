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
class login_controller extends common{
	function index_action(){
		$this->get_moblie();
		//判断来源是否为马甲APP
		$this->magbind();
		//微信wap登录
		if(preg_match("/^[a-zA-Z0-9_-]+$/",$_GET['wxid'])){
			$wxid = $_GET['wxid'];
			$this->cookie->setcookie("wxid",$_GET['wxid'],time() + 86400);
		}elseif($_COOKIE['wxid']){
			$wxid = $_COOKIE['wxid'];
		}
		if(preg_match("/^[a-zA-Z0-9_-]+$/",$_GET['wxloginid'])){
			$this->cookie->setcookie("wxloginid",$_GET['wxloginid'],time() + 86400);
		}
		if($wxid){
			if($wxid == $_COOKIE['wxid']){
				$this->yunset("wxid",$wxid);
				$this->yunset("wxnickname",$_COOKIE['wxnickname']);
				$this->yunset("wxpic",$_COOKIE['wxpic']);
			}else{
				$wxM = $this->MODEL('weixin');
				$wxinfo = $wxM->getWxUser($wxid);
				if($wxinfo['nickname']){
					$this->yunset("wxid",$wxid);
					$this->cookie->setcookie("wxnickname",$wxinfo['nickname'],time() + 86400);
					$this->yunset("wxnickname",$wxinfo['nickname']);
					$this->cookie->setcookie("wxpic",$wxinfo['headimgurl'],time() + 86400);
					$this->yunset("wxpic",$wxinfo['headimgurl']);
					$this->cookie->setcookie("unionid",$wxinfo['unionid'],time() + 86400);
				}
			}
		}
		if($this->uid || $this->username){
			if((int)$_GET['bind']=='1'){
				$this->cookie->unset_cookie();
				$data['msg']='重新绑定您的求职账户！';
			}elseif($_GET['wxid']){
				$this->cookie->unset_cookie();
			}else{
				$this->wapheader('member/index.php');
			}
		}	
		$checkurl=$_COOKIE['checkurl'];
		unset($checkurl);
       	$this->yunset("checkurl",$checkurl);
		$this->yunset('headertitle',"会员登录");
		$this->seo('login');	
		if(strpos($_SERVER['HTTP_REFERER'],'applyjobuid')){
			if($this->config['sy_seo_rewrite']){
				$endurl=str_replace(array(Url('wap'),'.html'),array('',''),$_SERVER['HTTP_REFERER']);
				$furl=explode('-',$endurl);
				$eurl=explode('_',$furl[2]);
			}else{
				$endurl=str_replace(Url('wap',array('c'=>'job','a'=>'applyjobuid')).'&','',$_SERVER['HTTP_REFERER']);
				$eurl=explode('=',$endurl);
			}
			$this -> yunset('backurl', Url('wap',array('c'=>'job','a'=>'comapply','id'=>$eurl['1'])));
		}else{
			$this -> yunset('backurl', $_SERVER['HTTP_REFERER']);
		}
		$this->yuntpl(array('wap/login'));
	}
	function mlogin_action(){
	    //普通账户登录提交
	    if($_POST['submit']){
	        $lData['username']		=			$_POST['username'];
	        $lData['uid']			=			$this->uid;
	        $lData['usertype']		=			$this->usertype;
	        $lData['act_login']		=			$_POST['act_login'];
	        $lData['moblie']     	=    	 	$_POST['moblie'];
	        $lData['backurl']		=     	 	$_POST['backurl'];
	        $lData['password']		=			$_POST['act_login'] == 1 ? $_POST['dynamiccode'] : $_POST['password'];
	        $lData['qfyuid']		=			$_POST['qfyuid'];
	        $lData['job']			=			$_POST['job'];
	        $lData['checkurl']		=			$_POST['checkurl'];
	        $lData['usource']		=			'wap';
			$lData['authcode']		=			$_POST['authcode'];
	        
	        $UserinfoM				=			$this->MODEL('userinfo');
	        
	        $return					=			$UserinfoM->userLogin($lData);
	        
	        if($return['errcode']==2){
	            $this->layer_msg('',9,0,Url('wap',array('c'=>'register','a'=>'ident')),2);
	        }else if($return['errcode']==9){
	            $this->layer_msg('',9,0,$return['url'],2);
	        }else{
	            $this->layer_msg($return['msg'],9,0,'',2);
	        }
	    }
	}
	//登录短信验证码发送
	function sendmsg_action(){
		$noticeM 		= 		$this->MODEL('notice');
		$result			=		$noticeM->jycheck($_POST['authcode'],'前台登录');
		if(!empty($result)){
			$this->layer_msg($result['msg'], 9, 0, '', 2, $result['error']);
		}
		
		$moblie			=		$_POST['moblie'];
		$UserinfoM		=		$this->MODEL('userinfo');
		$userinfo 		= 		$UserinfoM->getInfo(array("moblie" => $moblie),array('field'=>"`usertype`,`moblie_status`,`uid`"));
		if($userinfo['moblie_status']!='1'){
			$this->layer_msg('手机号码未绑定', 9, 0, '', 2, 108);
		}
		$user 			= 		array(
			'uid'     	=> 		$userinfo['uid'],
			'usertype' 	=> 		$userinfo['usertype']
		);
		
		$result 		=		$noticeM->sendCode($moblie, 'login', $user, 6, 90);
		echo json_encode($result);exit();
	}
	function loginlock_action(){
		$this->seo("login"); 
		$this->yuntpl(array('wap/loginlock'));
	}
	function utype_action(){
		if($this->uid){
			header("Location:".$this->config['sy_weburl']."/member");
		}
		$this->seo("login");
		$this->yuntpl(array('wap/utype'));
	}

	function setutype_action(){
		if($_COOKIE['username'] && $_COOKIE['password'] && (CheckRegUser($_COOKIE['username']) OR CheckRegEmail($_COOKIE['username']))){
			$Member			=		$this->MODEL("userinfo");
			$RatingM		=		$this->MODLE('rating');
			$user 			= 		$Member->getInfo(array("username"=>$_COOKIE['username']),array("field"=>"`uid`,`username`,`password`,`salt`,`usertype`,`did`"));
		
			$userid 		= 		$user['uid'];
			if(!$user['usertype']){
				if(passCheck($_COOKIE['password'],$user['salt'],$user['password']) && $user['password']!=''){
					$usertype 			=  (int)$_GET['usertype'];
					if($usertype=='1'){
						$table1 		=  "member_statis";
						$table2			=  "resume";
						$data1			=  array("uid"=>$userid);
						$data2['uid']	=  $userid;
					}elseif($usertype=='2'){
						$table1 		=  "company_statis";
						$table2 		=  "company";
						$ratingM        =  $this->MODEL('rating');
						$data1          =  $ratingM->FetchRatingInfo();
						$data2['uid']	=  $userid;
						$data1['did']	=  $user['did'];
					}elseif($usertype=='3'){
						$table1			=  'lt_statis';
						$table2			=  'lt_info';
						$id 			=  $this->config['lt_rating'];
						$rwhere['id']	=  $id;

						$row 			=  $RatingM->getInfo($rwhere);
						$data1=array('uid'=>$userid,'rating'=>$id,'rating_name'=>$row['name'],'rating_type'=>$row['type'],'lt_job_num'=>$row['lt_job_num'],'lt_down_resume'=>$row['lt_resume'],'lt_editjob_num'=>$row['lt_editjob_num'],'lt_breakjob_num'=>$row['lt_breakjob_num']);
						if($row['service_time']>0){
							$time=time()+86400*$row['service_time'];
						}else{
							$time=0;
						}
						$data1['vip_etime']=$time;
						$data2['uid']=$userid;
						$data2['did']=$user['did'];

					}
					$Member->upInfo(array("uid"=>$userid),array("usertype"=>$usertype));
					$Member->InsertReg($table1,$data1);
					$Member->InsertReg($table2,$data2);
					
					if(($usertype == '1' && $this->config['user_state']!='1') || ($usertype == '2' && $this->config['com_status']!='1') ){
						$data['msg']='请等待账户审核！';
						$data['url']=Url('wap',array('c'=>'login'));
						$this->yunset("layer",$data);
						$this->yuntpl(array('wap/utype'));
					}else{
						$this->cookie->add_cookie($userid,$user['username'],$user['salt'],$user['email'],$user['password'],$usertype,1,$user['did']);
						header("Location:".$this->config['sy_wapdomain'].'/member');
					}
					
				}else{
					$this->cookie->unset_cookie();
					echo "激活失败";
				}
			}else{
				$this->cookie->unset_cookie();
				echo "激活失败";
			}
		}else{
			header("Location:".Url('wap'));
		}
	}
	//查询马甲绑定
	function magbind(){
	    if ($this->config['sy_maglogin']==1 && !$_POST){
	        session_start();
	        if (!$_SESSION['mag']['user_id']){
	            $this->getMag();
	        }
	        if($_SESSION['mag']['user_id']){
				$userinfoM	 		= 		$this->MODEL('userinfo');
				$where['maguid']	=		$_SESSION['mag']['user_id'];
	            $userinfo 	 		=		$userinfoM->getInfo($where,array('field'=>'`uid`,`usertype`,`username`,`email`,`password`,`salt`,`status`,`did`'));
	            $time 				= 		time();
	            if (!$userinfo['uid']){
	                $this->yunset("maglogin",1);
	            }else{
	                //锁定
	                if($userinfo['status']=="2"){
	                    header('Location: '.Url('wap',array('c'=>'login','a'=>'loginlock','type'=>1)));
	                    exit();
	                }
	                //审核未通过等
	                if($userinfo['usertype']=="2" && $this->config['com_status']!="1" && $userinfo['status']!="1"){
	                    header('Location: '.Url('wap',array('c'=>'login','a'=>'loginlock','type'=>2)));
	                    exit();
	                }
	                $ip 			= 		fun_ip_get();
	                $logdate		=		date("Ymd",$userinfo['login_date']);
	                $nowdate		=		date("Ymd",$time);
	                if($logdate!=$nowdate){
	                    $integralM  =  $this->MODEL('integral');
	                    $integralM->invtalCheck($userinfo['uid'],$userinfo['usertype'],"integral_login","会员登录",22);
					}
					$bwhere['uid']		=		$userinfo['uid'];
					$bdata				=		array(
						'login_ip'		=>		$ip,
						'login_date'	=>		$time,
						'login_hits'	=>		array('+',1)
					);
					$userinfoM->upInfo($bwhere,$bdata);
	                $this->cookie->add_cookie($userinfo['uid'],$userinfo['username'],$userinfo['salt'],$userinfo['email'],$userinfo['password'],$userinfo['usertype'],1,$userinfo['did']);
	                $this->wapheader('member/index.php');
	            }
	        }
	    }
	}
	function getMag(){
	    $userAgent 		= 		$_SERVER['HTTP_USER_AGENT'];
	    $info 			=	    strstr($userAgent, "MAGAPPX");
	    $info			=		explode("|",$info);
	    $agent			=		array('token'=>$info[7]);
	    if ($agent['token']){
	        $Url		= 		$this->config['sy_magweburl']."/mag/cloud/cloud/getUserInfo?token=".$agent['token']."&secret=".$this->config['sy_magsecret'];
	        $CurlReturn =		CurlGet($Url);
	        $result		=		json_decode($CurlReturn,true);
	        if ($result['success']==true){
	            //获取马甲用户头像
	            if(strpos($result['data']['head'],$this->config['sy_magimgurl'])===false){
	                $headData 	= 		@explode("?",$result['data']['head']);
	                $head 		= 		$this->getImage($headData[0], 'user');
	            }else{
	                $head 		= 		$result['data']['head'];
	            }
	            $_SESSION['mag']["user_id"] 		= 		$result['data']['user_id'];
	            $_SESSION['mag']["name"] 			= 		$result['data']['name'];
	            $_SESSION['mag']["head"] 			= 		$head;
	        }
	    }
	}
	//获取马甲用户头像
	function getImage($url,$path){
	    $CurlReturn 	=		 CurlGet($url);
	    $time 			= 		 time();
	    $filename	 	= 		 $time.'.jpg';
	    $picDir 		= 		 date('Ymd', $time);
	    $dirName 		= 		 APP_PATH . '/data/upload/'.$path.'/' . $picDir;
	    if (!file_exists($dirName)){
	        mkdir($dirName, 0777, true);
	    }
	    $res 			= 		 fopen($dirName . '/' . $filename, 'a');
	    fwrite($res, $CurlReturn);
	    fclose($res);
	    return $this->config['sy_weburl'].'/data/upload/'.$path.'/' . $picDir.'/'.$filename;
	}
	//查询千帆云绑定
	function qfybind_action(){
	    if ($this->config['sy_qfylogin']==1 && $_POST['qfyuid']!=''){
			$userinfoM 				= 		$this->MODEL('userinfo');
			$uwhere['qfyuid']		=		$_POST['qfyuid'];
	        $userinfo 				= 		$userinfoM->getInfo($uwhere,array("field"=>"`uid`,`usertype`,`username`,`email`,`password`,`salt`,`status`,`did`"));
	        $time 					= 		time();
	        if ($userinfo && is_array($userinfo)){
	            //锁定
	            if($userinfo['status']=="2"){
	                echo json_encode(array('error'=>2,'url'=>'?c=login&a=loginlock&type=1'));die;
	            }
	            if($userinfo['usertype']=="2" && $this->config['com_status']!="1" && $userinfo['status']!="1"){
	                echo json_encode(array('error'=>3,'url'=>'?c=login&a=loginlock&type=2'));die;
	            }
	            $ip 				= 		fun_ip_get();
	            $logdate			=		date("Ymd",$userinfo['login_date']);
	            $nowdate			=		date("Ymd",$time);
	            if($logdate!=$nowdate){
	                $IntegralM  =  $this->MODEL('integral');
					$IntegralM->invtalCheck($userinfo['uid'],$userinfo['usertype'],"integral_login","会员登录",22);
				}
				$awhere['uid']		=		$userinfo['uid'];
				$adata				=		array(
					'login_ip'		=>		$ip,
					'login_date'	=>		$time,
					'login_hits'	=>		array('+',1)
				);					
	            $userinfoM->upInfo($awhere,$adata);
	            $this->cookie->add_cookie($userinfo['uid'],$userinfo['username'],$userinfo['salt'],$userinfo['email'],$userinfo['password'],$userinfo['usertype'],1,$userinfo['did']);
	            echo json_encode(array('error'=>1,'url'=>'member/index.php'));die;
	        }else{
	            echo json_encode(array('error'=>-1));die;
	        }
	    }
	}
}
?>