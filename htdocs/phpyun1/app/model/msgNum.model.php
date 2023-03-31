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
class msgNum_model extends model{
	function getmsgNum($uid, $usertype,$data=array()){
		
		$msgNum		=	0;
		$arr		=	array();
		
		if($uid){
			
			$sysmsgNum	=	$this -> select_num('sysmsg',array('fa_uid'=>$uid,'usertype'=>$usertype,'remind_status'=>'0'));
			if($sysmsgNum > 0){
				$msgNum += $sysmsgNum;
				$arr['sysmsgNum']			=	$sysmsgNum;
			}
 
			
			if($usertype == 1){
				
				$userid_msg		=	$this -> select_num('userid_msg',array('uid'=>$uid,'is_browse'=>'1'));
				if($userid_msg > 0){
					$msgNum += $userid_msg;
					$arr['userid_msgNum']	=	$userid_msg;
				}
				
				$usermsg		=	$this -> select_num('msg',array('uid'=>$uid,'user_remind_status'=>'0'));
				if($usermsg > 0){
					$msgNum += $usermsg;
					$arr['usermsgNum']		=	$usermsg;
				}
				
				$yqnum				=	$this -> select_num('userid_msg', array('uid'=>$uid));
				$arr['yqnum']   	=   $yqnum;
				
				$wkyqnum			=	$this -> select_num('userid_msg', array('uid'=>$uid,'is_browse'=>'1'));
				$arr['wkyqnum']		=	$wkyqnum;
				
				$sq_nums			=	$this -> select_num('userid_job', array('uid'=>$uid));
				$arr['sq_jobnum']	=	$sq_nums;
				
				$favwhere['uid']		=	$uid;
				if($data['type']){
					$favwhere['type']	=	$data['type'];
				}
				$fav_jobnum				=	$this -> select_num('fav_job', $favwhere);
				$arr['fav_jobnum']		=	$fav_jobnum;
                
				require_once ('atn.model.php');
				$atnM 	= 	new atn_model($this->db, $this->def);
				$where['uid']				=	$uid;
				$where['sc_usertype']		=	'2';
				$atncomnum		=	$atnM -> getAtnNum($where);
				$atn_num		=	$atncomnum;
				$arr['atn_num']		=	$atn_num;
			}elseif($usertype == 2){
				
				$jobApplyNum	=	$this -> select_num('userid_job',array('com_id'=>$uid,'type'=>array('<>',3),'is_browse'=>'1'));
				if($jobApplyNum > 0){
					$msgNum += $jobApplyNum;
					$arr['jobApplyNum']		=	$jobApplyNum;
				}
				
				$jobAskNum		=	$this -> select_num('msg',array('job_uid'=>$uid,'del_status'=>0,'reply'=>''));
				if($jobAskNum > 0){
					$msgNum += $jobAskNum;
					$arr['jobAskNum']		=	$jobAskNum;
				}
				
				 
				
				$company_msg	=	$this -> select_once('company_msg',array('cuid'=>$uid,'orderby'=>'ctime,desc'));
				if($company_msg){
					$ComMsgNum	=	$this -> select_num('company_msg',array('cuid'=>$uid,'reply'=>''));
					if($ComMsgNum > 0){
						$msgNum += $ComMsgNum;
						$arr['ComMsgNum']	=	$ComMsgNum;
					}
				}
				
				$sqnum					=	$this -> select_num('userid_job',array('com_id'=>$uid,'type'=>array('<>',3)));
				$arr['sqnum']			=	$sqnum;
				$msgnum					=	$this -> select_num('msg',array('job_uid'=>$uid));
				$arr['msgnum']			=	$msgnum;
				$attention_menum		=	$this -> select_num('atn', array('sc_uid'=>$uid));
				$arr['attention_menum']	=	$attention_menum;
				$companyjobnum			=	$this -> select_num('company_job', array('uid'=>$uid,'state'=>1,'status'=>0,'r_status'=>1));
				$arr['companyjobnum']	=	$companyjobnum;
				$look_jobnum			=	$this -> select_num('look_job', array('com_id'=>$uid,'com_status'=>0));
				$arr['look_jobnum']		=	$look_jobnum;
				$talent_pool_num		=	$this -> select_num('talent_pool', array('cuid'=>$uid));
				$arr['talent_pool_num']	=	$talent_pool_num;
			} 
		}
		$arr['usertype']=$usertype;
		$arr['msgNum']=$msgNum;
		return $arr;
	}

	
	function msgNum(){
		$msgNum						=	0;
		$arr						=	array();
		
		
		$company					=	$this -> select_num('company',array('r_status'=>'0'));
		if($company > 0){
		    $msgNum += $company;
		    $arr['company']			=	$company;
		}
		
		
		$company_job				=	$this -> select_num('company_job',array('state'=>'0'));
		if($company_job > 0){
			$msgNum += $company_job;
			$arr['company_job']		=	$company_job;
		}
		
		
		$partjob					=	$this -> select_num('partjob',array('state'=>'0'));
		if($partjob > 0){
		    $msgNum += $partjob;
		    $arr['partjob']			=	$partjob;
		}
		
		
		$company_cert				=	$this -> select_num('company_cert',array('status'=>'0','type'=>'3'));
		if($company_cert > 0){
		    $msgNum += $company_cert;
		    $arr['company_cert']	=	$company_cert;
		}
		
		
		$comlogo					=	$this -> select_num('company',array('logo'=>array('<>',''),'logo_status'=>'1'));
		if($comlogo > 0){
		    $msgNum += $comlogo;
		    $arr['comlogo']			=	$comlogo;
		}
		
		$comshow					=	$this -> select_num('company_show',array('picurl'=>array('<>',''),'status'=>'1'));
		if($comshow > 0){
		    $msgNum += $comshow;
		    $arr['comshow']			=	$comshow;
		}
		
		$combanner					=	$this -> select_num('banner',array('pic'=>array('<>',''),'status'=>'1'));
		if($combanner > 0){
		    $msgNum += $combanner;
		    $arr['combanner']		=	$combanner;
		}
		
		
		$company_product			=	$this -> select_num('company_product',array('status'=>'0'));
		if($company_product > 0){
		    $msgNum += $company_product;
		    $arr['company_product']	=	$company_product;
		}
		 
		
		$company_news				=	$this -> select_num('company_news',array('status'=>'0'));
		if($company_news > 0){
		    $msgNum += $company_news;
		    $arr['company_news']	=	$company_news;
		}
		
		
		$user						=	$this -> select_num('resume',array('r_status' => '0'));
		if($user > 0){
			$msgNum += $user;
			$arr['userNum']			=	$user;
		}
		
		
		$resume_expect				=	$this -> select_num('resume_expect',array('state'=>'0'));
		if($resume_expect > 0){
		    $msgNum += $resume_expect;
		    $arr['resume_expect']	=	$resume_expect;
		}
		
		
		$resumetrust				=	$this -> select_num('user_entrust',array('status'=>'0'));
		if($resumetrust > 0){
		    $msgNum += $resumetrust;
		    $arr['resumetrust']		=	$resumetrust;
		}
		
		$usercertNum				=	$this -> select_num('resume',array('idcard_pic'=>array('<>',''),'idcard_status'=>'0'));
		if($usercertNum > 0){
		    $msgNum += $usercertNum;
		    $arr['usercertNum']		=	$usercertNum;
		}
		  
		$appealnum					=	$this -> select_num('member',array('appealtime'=>array('>','0'),'appealstate'=>'1'));
		if($appealnum > 0){
			if(!$this->config['did']||$this->config['did']==0){
				$msgNum += $appealnum;
			}
			$arr['appealnum']		=	$appealnum;
		}
		
		
		$once_job					=	$this -> select_num('once_job',array('status'=>'0','edate'=>array('>',time())));
		if($once_job > 0){
			$msgNum += $once_job;
			$arr['once_job']		=	$once_job;
		}
		
		
		$tiny						=	$this -> select_num('resume_tiny',array('status'=>'0'));
		if($tiny > 0){
		    $msgNum += $tiny;
		    $arr['tiny']			=	$tiny;
		}
		
		
		$withdrawNum				=	$this -> select_num('member_withdraw',array('order_state'=>'0'));
		if($withdrawNum > 0){
			$msgNum += $withdrawNum;
			$arr['withdrawNum']		=	$withdrawNum;
		}
		
		
		$zphcom						=	$this -> select_num('zhaopinhui_com',array('status'=>'0'));
		if($zphcom > 0){
			$msgNum += $zphcom;
			$arr['zphcom']			=	$zphcom;
		}
		
		
		$ask						=	$this -> select_num('question',array('state'=>'0'));
		if($ask > 0){
			$msgNum += $ask;
			$arr['ask']				=	$ask;
		}
		
		
		$order						=	$this -> select_num('company_order',array('order_state'=>'1'));
		if($order > 0){
			$msgNum += $order;
			$arr['order']			=	$order;
		}
		
		
		$adorder					=	$this -> select_num('ad_order',array('status'=>'0'));
		if($adorder > 0){
			$msgNum += $adorder;
			$arr['adorder']			=	$adorder;
		}
		
		
		$rjwhere['usertype']			=	1;
		$rjwhere['type']				=	0;
		$rjwhere['PHPYUNBTWSTART']		=	'';
		$rjwhere['result'][]			=	array('=','');
		$rjwhere['result'][]			=	array('isnull', '', 'OR');
		$rjwhere['PHPYUNBTWEND']		=	'';
		$reportjob					=	$this -> select_num('report',$rjwhere);
		if($reportjob > 0){
			$msgNum += $reportjob;
			$arr['reportjob']		=	$reportjob;
		}
		
		
		$rrwhere['usertype']			=	2;
		$rrwhere['type']				=	0;
		$rrwhere['PHPYUNBTWSTART']		=	'';
		$rrwhere['result'][]			=	array('=','');
		$rrwhere['result'][]			=	array('isnull', '', 'OR');
		$rrwhere['PHPYUNBTWEND']		=	'';
		$reportresume				=	$this -> select_num('report',$rrwhere);
		if($reportresume > 0){
			$msgNum += $reportresume;
			$arr['reportresume']	=	$reportresume;
		}
		
		$rtwhere['status']				=	0;
		$rtwhere['type']				=	1;
		$rtwhere['PHPYUNBTWSTART']		=	'';
		$rtwhere['result'][]			=	array('=','');
		$rtwhere['result'][]			=	array('isnull', '', 'OR');
		$rtwhere['PHPYUNBTWEND']		=	'';
		$reportask				=	$this -> select_num('report',$rtwhere);
		if($reportask > 0){
			$msgNum += $reportask;
			$arr['reportask']		=	$reportask;
		}
		
		$rgwhere['status']				=	0;
		$rgwhere['type']				=	2;
		$rgwhere['PHPYUNBTWSTART']		=	'';
		$rgwhere['result'][]			=	array('=','');
		$rgwhere['result'][]			=	array('isnull', '', 'OR');
		$rgwhere['PHPYUNBTWEND']		=	'';
		$reportgw						=	$this -> select_num('report',$rgwhere);
		if($reportgw > 0){
			$msgNum += $reportgw;
			$arr['reportgw']		=	$reportgw;
		}
		
		$userpic					=	$this -> select_num('resume',array('photo'=>array('<>',''),'photo_status'=>'1'));
		if($userpic > 0){
			$msgNum += $userpic;
			$arr['userpic']			=	$userpic;
		}
		
		$usershow					=	$this -> select_num('resume_show',array('picurl'=>array('<>',''),'status'=>'1'));
		if($usershow > 0){
			$msgNum += $usershow;
			$arr['usershow']			=	$usershow;
		}
		
		
		if(!$this->config['did']){
			
			$linkNum					=	$this -> select_num('admin_link',array('link_state'=>'0'));
			if($linkNum > 0){
				$msgNum += $linkNum;
				$arr['linkNum']			=	$linkNum;
			}
			
			$redeem						=	$this -> select_num('change',array('status'=>'0'));
			if($redeem > 0){
				$msgNum += $redeem;
				$arr['redeem']			=	$redeem;
			}
			
			$specialcom					=	$this -> select_num('special_com',array('status'=>'0'));
			if($specialcom > 0){
				$msgNum += $specialcom;
				$arr['specialcom']		=	$specialcom;
			}
			
			$userchangenum					=	$this -> select_num('user_change',array('status'=>'0'));
			if($userchangenum > 0){
				$msgNum += $userchangenum;
				$arr['userchangenum']		=	$userchangenum;
			}
			
			$handlenum					=	$this -> select_num('advice_question',array('status'=>'1'));
			if($handlenum > 0){
				$msgNum += $handlenum;
				$arr['handlenum']	=	$handlenum;
			}
		}
		
		$logout  =  $this -> select_num('member_logout',array('status'=>1));
		if($logout > 0){
		    $msgNum += $logout;
		    $arr['logout']		=	$logout;
		}
		
		$arr['msgNum']				=	$msgNum;
		return json_encode($arr);
	}

	function companyNum(){
		$arr=array();
		
		
		$companyAllNum					=	$this -> select_num('company');
		if($companyAllNum > 0){
			$arr['companyAllNum']		=	$companyAllNum;
		}
		
		
		$companyStatusNum1				=	$this -> select_num('company',array('r_status'=>'0'));
		if($companyStatusNum1 > 0){
			$arr['companyStatusNum1']	=	$companyStatusNum1;
		}
		
		
		$companyStatusNum2              =	$this -> select_num('company',array('r_status'=>'3'));
		if($companyStatusNum2 > 0){
			$arr['companyStatusNum2']	=	$companyStatusNum2;
		}
		
		
		$companyStatusNum3              =	$this -> select_num('company',array('r_status'=>'2'));
		if($companyStatusNum3 > 0){
			$arr['companyStatusNum3']	=	$companyStatusNum3;
		}
		return json_encode($arr);
	}
	
	function hotNum(){
		$arr=array();
		
		$hotAllNum						=	$this -> select_num('hotjob');
		if($hotAllNum > 0){
			$arr['hotAllNum']			=	$hotAllNum;
		}
		
		$hoted							=	$this -> select_num('hotjob',array('time_end'=>array('<=',time())));
		if($hoted > 0){
			$arr['hoted']				=	$hoted;
		}
		 
		return json_encode($arr);
	}

	function comCertNum(){
		$arr=array();
		
		$comCertAll						=	$this -> select_num('company_cert',array('type'=>'3'));
		if($comCertAll > 0){
			$arr['comCertAll']			=	$comCertAll;
		}
		
		$comCert1						=	$this -> select_num('company_cert',array('type'=>'3','status'=>'0'));
		if($comCert1 > 0){
			$arr['comCert1']			=	$comCert1;
		}
		
		$comCert2						=	$this -> select_num('company_cert',array('type'=>'3','status'=>'2'));
		if($comCert2 > 0){
			$arr['comCert2']			=	$comCert2;
		}
		 
		return json_encode($arr);
	}

	function jobNum(){
		$arr=array();
		
		
		$jobAllNum						=	$this -> select_num('company_job');
		if($jobAllNum > 0){
			$arr['jobAllNum']			=	$jobAllNum;
		}
		
		$jobStatusNum1					=	$this -> select_num('company_job',array('state'=>'0'));
		if($jobStatusNum1 > 0){
			$arr['jobStatusNum1']		=	$jobStatusNum1;
		}
		
		$jobStatusNum2					=	$this -> select_num('company_job',array('state'=>'3'));
		if($jobStatusNum2 > 0){
			$arr['jobStatusNum2']		=	$jobStatusNum2;
		}
		
		$jobStatusNum3					=	$this -> select_num('company_job',array('status'=>'1'));
		if($jobStatusNum3 > 0){
			$arr['jobStatusNum3']		=	$jobStatusNum3;
		}

		return json_encode($arr);
	}

	function partNum(){
		$arr=array();
		
		$partAllNum						=	$this -> select_num('partjob');
		if($partAllNum > 0){
			$arr['partAllNum']			=	$partAllNum;
		}
		
		$partStatusNum1					=	$this -> select_num('partjob',array('state'=>'0'));
		if($partStatusNum1 > 0){
			$arr['partStatusNum1']		=	$partStatusNum1;
		}
		
		$partStatusNum2					=	$this -> select_num('partjob',array('state'=>'3'));
		if($partStatusNum2 > 0){
			$arr['partStatusNum2']		=	$partStatusNum2;
		}
		
	    $ewhere                         =   array(
	        'PHPYUNBTWSTART_A' =>'',
	        'edate'            => array(
	            '0'            => array('<', time(), 'AND'),
	            '1'            => array('>', '0', 'AND')
	        ),
	        'PHPYUNBTWEND_A'   =>  '',
	    );
	    $partStatusNum3					=	$this -> select_num('partjob', $ewhere);
		if($partStatusNum3 > 0){
			$arr['partStatusNum3']		=	$partStatusNum3;
		}
		return json_encode($arr);
	}

	function orderSum(){
		$arr=array();
		
		$orderAll						=	$this -> select_once('company_order',array('order_price'=>array('>','0')),'sum(`order_price`) as `pricesum`');
		if($orderAll['pricesum'] > 0){
			$arr['orderPriceAll']		=	$orderAll['pricesum'];
		}
		
		$orderPayed						=	$this -> select_once('company_order',array('order_price'=>array('>','0'),'order_state'=>'2'),'sum(`order_price`) as `orderPayed`');
		if($orderPayed['orderPayed'] > 0){
			$arr['orderPayed']			=	$orderPayed['orderPayed'];
		}
		
		$orderPay						=	$this -> select_once('company_order',array('order_price'=>array('>','0'),'order_state'=>'1'),'sum(`order_price`) as `orderPay`');
		if($orderPay['orderPay'] > 0){
			$arr['orderPay']			=	$orderPay['orderPay'];
		}
		
		$orderPaying					=	$this -> select_once('company_order',array('order_price'=>array('>','0'),'order_state'=>'3'),'sum(`order_price`) as `orderPaying`');
		if($orderPaying['orderPaying'] > 0){
			$arr['orderPaying']			=	$orderPaying['orderPaying'];
		}

		return json_encode($arr);
	}

	function userNum(){
		$arr=array();
		
		$userAllNum						=	$this -> select_num('resume');
		if($userAllNum > 0){
			$arr['userAllNum']			=	$userAllNum;
		}
		
		$userStatusNum1					=	$this -> select_num('resume',array('r_status'=>'0'));
 		if($userStatusNum1 > 0){
			$arr['userStatusNum1']		=	$userStatusNum1;
		}
		
		$userStatusNum2					=	$this -> select_num('resume',array('r_status'=>'3'));
 		if($userStatusNum2 > 0){
			$arr['userStatusNum2']		=	$userStatusNum2;
		}
		
		$userStatusNum3					=	$this -> select_num('resume',array('r_status'=>'2'));
 		if($userStatusNum3 > 0){
			$arr['userStatusNum3']		=	$userStatusNum3;
		}
		return json_encode($arr);
	}
 
	function resumeNum(){
		$arr=array();
		
		$resumeAllNum					=	$this -> select_num('resume_expect');
		if($resumeAllNum > 0){
			$arr['resumeAllNum']		=	$resumeAllNum;
		}
		
		$resumeStatusNum1				=	$this -> select_num('resume_expect',array('state'=>'0'));
 		if($resumeStatusNum1 > 0){
			$arr['resumeStatusNum1']	=	$resumeStatusNum1;
		}
		
		$resumeStatusNum2				=	$this -> select_num('resume_expect',array('state'=>'3'));
 		if($resumeStatusNum2 > 0){
			$arr['resumeStatusNum2']	=	$resumeStatusNum2;
		}
		
		$resumeStatusNum3				=	$this -> select_num('resume_expect',array('r_status'=>'2'));
 		if($resumeStatusNum3 > 0){
			$arr['resumeStatusNum3']	=	$resumeStatusNum3;
		}
		return json_encode($arr);
	}

	function idCardNum(){
		$arr							=	array();
		
		$idCardAll						=	$this -> select_num('resume',array('idcard_pic'=>array('<>',''),'idcard_status'=>'1'));
		if($idCardAll > 0){
			$arr['idCardAll']			=	$idCardAll;
		}
		
		$idCardNum1						=	$this -> select_num('resume',array('idcard_pic'=>array('<>',''),'idcard_status'=>'0'));
		if($idCardNum1 > 0){
			$arr['idCardNum1']			=	$idCardNum1;
		}
		
		$idCardNum2						=	$this -> select_num('resume',array('idcard_pic'=>array('<>',''),'idcard_status'=>'2'));
		if($idCardNum2 > 0){
			$arr['idCardNum2']			=	$idCardNum2;
		}
		 
		return json_encode($arr);
	}

	function trustNum(){
		$arr=array();
		
		$resumeAllNum					=	$this -> select_num('user_entrust');
		if($resumeAllNum > 0){
			$arr['resumeAllNum']		=	$resumeAllNum;
		}
		
		$resumeStatusNum1				=	$this -> select_num('user_entrust',array('status'=>'0'));
 		if($resumeStatusNum1 > 0){
			$arr['resumeStatusNum1']	=	$resumeStatusNum1;
		}
		
		$resumeStatusNum2				=	$this -> select_num('user_entrust',array('status'=>'2'));
 		if($resumeStatusNum2 > 0){
			$arr['resumeStatusNum2']	=	$resumeStatusNum2;
		}
		 
		return json_encode($arr);
	}

	 
	 
	function gresumeNum(){
		$arr							=	array();
		
		$resumeAllNum					=	$this -> select_num('resume_expect',array('height_status'=>array('<>','0')));
		if($resumeAllNum > 0){
			$arr['resumeAllNum']		=	$resumeAllNum;
		}
		
		$resumeStatusNum1				=	$this -> select_num('resume_expect',array('height_status'=>'1'));
 		if($resumeStatusNum1 > 0){
			$arr['resumeStatusNum1']	=	$resumeStatusNum1;
		}
		
		$resumeStatusNum2				=	$this -> select_num('resume_expect',array('height_status'=>'3'));
 		if($resumeStatusNum2 > 0){
			$arr['resumeStatusNum2']	=	$resumeStatusNum2;
		}
		 
		return json_encode($arr);
	}
	
	 

	function onceNum(){
		$arr							=	array();
		
		$onceAllNum						=	$this -> select_num('once_job');
		if($onceAllNum > 0){
			$arr['onceAllNum']			=	$onceAllNum;
		}
		
		$onceStatusNum1					=	$this -> select_num('once_job',array('status'=>'0','edate'=>array('>',time())));
		if($onceStatusNum1 > 0){
			$arr['onceStatusNum1']		=	$onceStatusNum1;
		}
		
		$onceStatusNum2					=	$this -> select_num('once_job',array('edate'=>array('<',time())));
		if($onceStatusNum2 > 0){
			$arr['onceStatusNum2']		=	$onceStatusNum2;
		}
		return json_encode($arr);
	}

	function tinyNum(){
		$arr							=	array();
		
		$tinyAllNum						=	$this -> select_num('resume_tiny');
		if($tinyAllNum > 0){
			$arr['tinyAllNum']			=	$tinyAllNum;
		}
		
		$tinyStatusNum					=	$this -> select_num('resume_tiny',array('status'=>'0'));
		if($tinyStatusNum > 0){
			$arr['tinyStatusNum']		=	$tinyStatusNum;
		}
		return json_encode($arr);
	}

	function sjobNum(){
		$arr							=	array();
		
		$jobAllNum						=	$this -> select_num('company_job',array('is_graduate'=>'1'));
		if($jobAllNum > 0){
			$arr['jobAllNum']			=	$jobAllNum;
		}
		
		$jobStatusNum1					=	$this -> select_num('company_job',array('is_graduate'=>'1','state'=>'0'));
		if($jobStatusNum1 > 0){
			$arr['jobStatusNum1']		=	$jobStatusNum1;
		}
		
		$jobStatusNum2					=	$this -> select_num('company_job',array('is_graduate'=>'1','state'=>'3'));
		if($jobStatusNum2 > 0){
			$arr['jobStatusNum2']		=	$jobStatusNum2;
		}
		
		$jobStatusNum3					=	$this -> select_num('company_job',array('is_graduate'=>'1','status'=>'1'));
		if($jobStatusNum3 > 0){
			$arr['jobStatusNum3']		=	$jobStatusNum3;
		}

		return json_encode($arr);
	}

	function getFkNum(){
		
		$arr							=	array();
 		$sdate 							= 	strtotime('-1 days');
		$edate 							= 	time();
		
		$where                          =   array();
		$where['PHPYUNBTWSTART_A']      =   '';  
		$where['timein'][]				=	array('>', $sdate, 'AND');
		$where['timein'][]				=	array('<', $edate, 'AND');
		$where['PHPYUNBTWEND_A']        =   ''  ;
    			
		$whereA   =   $whereB =   $where;
			
		$whereA['PHPYUNBTWSTART_A']		=	'';
			
		$whereA['second'][] 	        = 	array('>',10);
							
		$whereA['second'][] 		    = 	array('<',300);
			
		$whereA['status']				= 	0;
			
		$whereA['PHPYUNBTWEND_A']		=	'';
		
		$whereB['PHPYUNBTWSTART_A']		=	'AND';
			
		$whereB['status'][] 		    = 	array('>',1);
							
		$whereB['status'][] 		    = 	array('<',6);
			
		$whereB['PHPYUNBTWEND_A']		=	'';
		
		$tableName    =   'user_log';
		
		$wherePay =   array(
		    'PHPYUNBTWSTART_C'    =>  '',
		    'opera'   =>  array(
		        '0'   =>  array('=', '41', 'AND'),
		        '1'   =>  array('=', '45', 'AND')
		    ),
		    'PHPYUNBTWEND_C'      =>  ''
		); 
		
		$payNumA  =	$this->select_num($tableName,array_merge($wherePay, $whereA));
		$payNumB  =	$this->select_num($tableName,array_merge($wherePay, $whereB));
		
		if($payNumA > 0 || $payNumB > 0){
			$arr['payNum']   =	$payNumA + $payNumB;
		}
		
		$whereSer =   array(
		    'PHPYUNBTWSTART_C'    =>  '',
		    'opera'   =>  array(
		        '0'   =>  array('>', '41', 'AND'),
		        '1'   =>  array('<>', '45', 'AND'),
		        '2'   =>  array('<', '49', 'AND')
		    ),
		    'PHPYUNBTWEND_C'      =>  ''
		); 
		
		$serverNumA  =	$this->select_num($tableName,array_merge($whereSer,$whereA));
		$serverNumB  =	$this->select_num($tableName,array_merge($whereSer,$whereB));
		
		if($serverNumA > 0 || $serverNumB > 0){
			
			$arr['serverNum']    =	$serverNumA + $serverNumB;
		}
		
		$whereRes =   array(
		    'PHPYUNBTWSTART_C'    =>  '',
		    'opera'   =>  array(
		        '0'   =>  array('=', '21', 'OR'),
		        '1'   =>  array('=', '22', 'OR')
		    ),
		    'PHPYUNBTWEND_C'      =>  ''
		);
		
		$resumeNumA  =	$this->select_num($tableName,array_merge($whereRes,$whereA));
		$resumeNumB  =	$this->select_num($tableName,array_merge($whereRes,$whereB));
		
		if($resumeNumA > 0 || $resumeNumB > 0){
		    
		    $arr['resumeNum']    =	$resumeNumA + $resumeNumB;
		}
		
		$whereJob =   array(
		    'PHPYUNBTWSTART_C'    =>  '',
		    'opera'   =>  array(
		        '0'   =>  array('>=', '31', 'AND'),
		        '1'   =>  array('<=', '38', 'AND')
		    ),
		    'PHPYUNBTWEND_C'      =>  ''
		);
		
		$jobNumA  =	$this->select_num($tableName,array_merge($whereJob, $whereA));
		$jobNumB  =	$this->select_num($tableName,array_merge($whereJob, $whereB));
		
		if($jobNumA > 0 || $jobNumB > 0){
			
			$arr['jobNum']   =	$jobNumA + $jobNumB;
		}
		
		$whereBd  =   array(
		    'PHPYUNBTWSTART_C'    =>  '',
		    'opera'   =>  array(
		        '0'   =>  array('=', '12', 'OR'),
		        '1'   =>  array('=', '13', 'OR')
		    ),
		    'PHPYUNBTWEND_C'      =>  ''
		);
		
		$bdNumA   =	$this->select_num($tableName, array_merge($whereBd, $whereA));
		$bdNumB   =	$this->select_num($tableName, array_merge($whereBd, $whereB));
		
		if($bdNumA > 0 || $bdNumB > 0){
			
			$arr['bdNum']    =	$bdNumA + $bdNumB;
		}

        $whereInfo  =   array('opera' => array('<=', '11'));	
        
        $infoNumA =	$this->select_num($tableName, array_merge($whereInfo, $whereA));
        $infoNumB =	$this->select_num($tableName, array_merge($whereInfo, $whereB));
        
		if($infoNumA > 0 || $infoNumB > 0){
			
			$arr['infoNum']  =	$infoNumA + $infoNumB;
		}  
		 
		return $arr;

	}

	function memNum(){
		$arr=array();
		
		$memAllNum						=	$this -> select_num('member');
		if($memAllNum > 0){
			$arr['memAllNum']			=	$memAllNum;
		}
		
		$memAllNum1						=	$this -> select_num('company_account');
		if($memAllNum1 > 0){
			$arr['memAllNum1']			=	$memAllNum1;
		}

		
		$memStatusNum1					=	$this -> select_num('member',array('status'=>'0'));
		if($memStatusNum1 > 0){
			$arr['memStatusNum1']		=	$memStatusNum1;
		}
		
		$memStatusNum2					=	$this -> select_num('member',array('status'=>'3'));
		if($memStatusNum2 > 0){
			$arr['memStatusNum2']		=	$memStatusNum2;
		}
		
		$memStatusNum3					=	$this -> select_num('member',array('status'=>'2'));
		if($memStatusNum3 > 0){
			$arr['memStatusNum3']		=	$memStatusNum3;
		}
		
		$rows = $this ->select_all('company_account','`uid`');
		$uids=array();
		foreach ($rows as $v) {
			$uids[]=$v['uid'];	
		}	

		$memStatusNum4					=	$this -> select_num('member',array('status'=>'2','uid'=>array('in',pylode(',',$uids))));
		if($memStatusNum4 > 0){
			$arr['memStatusNum4']		=	$memStatusNum4;
		}

		return json_encode($arr);
	}

	function memchangeNum(){
		$arr=array();
		
		$memAllNum						=	$this -> select_num('user_change');
		if($memAllNum > 0){
			$arr['memAllNum']			=	$memAllNum;
		}
		
		$memStatusNum3					=	$this -> select_num('user_change',array('status'=>'0'));
		if($memStatusNum3 > 0){
			$arr['memStatusNum3']		=	$memStatusNum3;
		}
		return json_encode($arr);
	}


	function helpSum(){
	
		$arr=array();

		include(CONFIG_PATH."db.data.php");

		
		$helpAll						=	$this -> select_num('friend_help');
		
		$logAll							=	$this -> select_num('friend_help_log');
		
		
		$receiveAll						=	$this -> select_all('friend_help_receive',array('groupby'=>'name'),'`name`,sum(`num`) as `receivenum`');
		
		if(!empty($receiveAll)){
			foreach($receiveAll as $key=>$value){
				$html[] = $arr_data['helpconfig'][$value['name']]['name'].':'.$value['receivenum'];
			}
		}

		$arr['helpall']	=	$helpAll>0?$helpAll:0;

		$arr['logall']	=	$logAll>0?$logAll:0;

		$arr['receiveall']	=	@implode(',',$html);


		return json_encode($arr);
	
	}
}
?>