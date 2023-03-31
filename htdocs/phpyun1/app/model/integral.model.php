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
class integral_model extends model{	

	/**
	 * 会员积分/金额操作
	 * @param string $uid              操作UID
	 * @param string $integral         积分数量
	 * @param string $auto             true 加  false 减
	 * @param string $name             用途
	 * @param string $pay              是否入库
	 * @param number $pay_state        是否已支付
	 * @param string $type             integral 积分操作  packpay 金额退回  yhq 优惠券
	 * @param string $pay_type         支付类型
	 * 1-支付佣金; 2-购买积分; 4-购买广告位; 9-报名专题招聘; 12-购买增值包; 14-使用优惠券和积分抵扣; 15-购买简历模板; 20-上传头像; 21-身份认证; 22-会员登录;
	 *  23-注册/邀请注册; 24-积分兑换; 25-首次填写基本资料; 27-积分抵扣;  66-取消订单返还积分; 
	 * @param string $eid              下载简历id
	 */
	function company_invtal($uid, $usertype, $integral, $auto=true, $name='', $pay=true, $pay_state=2, $type='integral', $pay_type='',$eid = null, $coupon_id = null){
		
	    if( $pay && $integral!='0'){
			
	        $integral = abs($integral);
		
			$member=$this->select_once('member',array('uid'=>$uid),'`did`');
			
			if($usertype=='1'){
			    
				$table='member_statis';
			}elseif($usertype=='2'){
			    
				$table='company_statis';
			} 
            
			if($type != 'yhq'){  
			    
    			if($auto){
    			    
    				$nid		=	$this	->	update_once($table,array($type=>array('+',$integral)),array('uid'=>$uid));
    			}else{
    			    
    			    $nid		=	$this 	->	update_once($table,array($type=>array('-',$integral)),array('uid'=>$uid));
    			    
    			    $integral	=   '-'.$integral;
    			}
			}
			
			$dingdan             =   time().rand(10000,99999);
			
			$data                =   array();
			
			$data['order_id']    =   $dingdan;
			$data['did']         =   $member['did'];
			$data['com_id']      =   $uid;
			$data['usertype']    =   $usertype;
			$data['pay_remark']  =   $name;
			$data['pay_state']   =   $pay_state;
			$data['pay_time']    =   time();
			$data['order_price'] =   $integral;
			$data['pay_type']    =   $pay_type;
			$data['eid']         =   $eid;
			
			if($type=='integral'){
			
			    $data['type']=1;
			    
			}else if($type=='yhq'){
			    
			    $data['type']=3;
			}else{
				
			    $data['type']=2;
			}
			
			$this->insert_into('company_pay',$data);
			
			return $nid;
		}else{
			return true;
		}
	}
	/**
	 * 统一判断加积分还是减积分整合函数
	 */
	function invtalCheck($uid,$usertype, $type, $msg, $pay_type = '')
	{

		$return	=	$this	->	checkOnceIntegral($uid, $type, $msg);
		
		if($return){
			if($this->config[$type.'_type'] == '1'){

				$auto  =  true;

			}else{

				$auto  =  false;

			}

			$this -> company_invtal($uid,$usertype, $this->config[$type], $auto, $msg, true, 2, 'integral', $pay_type);
		}
	}
	/**
	 * 判断是否是一个账号只能获取一次的积分
	 */
	private function checkOnceIntegral($uid, $type, $msg)
	{
		$onceitg	=	array(
		    'integral_reg',
		    'integral_userinfo',
		    'integral_emailcert',
		    'integral_mobliecert',
		    'integral_avatar',
		    'integral_add_resume',
		    'integral_identity',
		    'integral_map',
		    'integral_banner',
		    'integral_comcert',
		    'integral_ltcert',
		    
		);

		if(in_array($type,$onceitg)){
			$compay	=	$this	->	getInfo(array('com_id'=>$uid,'pay_remark'=>$msg));
			if(!empty($compay)){
				return false;
			}else{
				return true;
			}
		}else{
			return true;
		}
	}
	function insert_company_pay($integral, $pay_state, $uid,$usertype, $msg, $type, $pay_type = '', $ptype = false){

		if($integral!='0'){
		    
		    $pay  =   array();

			if($ptype){

				$pay['order_price'] =   $integral;

			}else{

				$pay['order_price'] =   '-'.$integral;

			}

			$pay['order_id']     =   time().rand(10000,99999);
			$pay['pay_time']     =   time();
			$pay['pay_state']    =   $pay_state;
			$pay['com_id']       =   $uid;
			$pay['usertype']     =   $usertype;
			$pay['pay_remark']   =   $msg;
			$pay['type']         =   $type;
			$pay['pay_type']     =   $pay_type;
			$pay['did']          =   $this->config['did'];

			return $this->insert_into('company_pay',$pay);

		}else{

			return false;
		}
	}
	/**
	*积分任务页面的积分状态
	*$data 必传参数 type 类型（com：商家）
	*				uid 
	*				uidtype 
	*/
	function integralMission($data=array()){

		$baseInfo			= false;	
		$logo				= false;	
		$photo				= false;	
		$signin			    = false;	
		$emailChecked		= false;	
		$phoneChecked		= false;	
		$pay_remark         = false;
		$question        	= false;	
		$answer       		= false;	
		$answerpl           = false;	
		
		$map				= false;	
		$banner				= false;	
		$yyzz				= false;	
		if($data['type']=='com'){
			$row	=	$this	->	select_once("company",array('uid'=>$data['uid']),'name,hy,logo,email_status,moblie_status,x,y,firmpic,yyzz_status');
			$ban	=	$this	->	select_once("banner",array('uid'=>$data['uid']),'pic');
			$row['firmpic']=$ban['pic'];
			if(is_array($row) && !empty($row)){
				if($row['name'] != '' && $row['hy'] != '' ){
					$baseInfo = true;
				}
				if($row['logo'] != ''){ 
					$logo = true;
				}
				if($row['email_status'] != 0){
					$emailChecked = true;
				}
				if($row['moblie_status'] != 0){
					$phoneChecked = true;
				}
				if($row['x'] != 0 && $row['y'] != 0){
					$map = true;
				}
				if($row['firmpic'] != ''){
					$banner = true;
				}
				if($row['yyzz_status'] != 0){
					$yyzz = true;
				}
			}
		}
		
		
		if($data['type']=='member'){
			$row		=	$this->select_once('resume',array('uid'=>$data['uid']),'`name`,`sex`,`birthday`,`telphone`,`email`,`edu`,`exp`,`living`,`photo`,`email_status`,`moblie_status`,`idcard_status`');
			if(is_array($row) && !empty($row)){
				if($row['name'] != '' && $row['sex'] != '' && $row['birthday'] != '' && $row['telphone'] != '' && $row['edu'] != '' && $row['exp'] != '' && $row['living'] != ''){
					$baseInfo		 =	true;
				}
				
				if($row['photo'] != ''){
					$photo			 =	true;
				}	
				
				if($row['email_status'] != 0){
					$emailChecked 	=	true;
				}
					
				if($row['moblie_status'] != 0){
					$phoneChecked 	=	true;
				}				
					
				if($row['idcard_status'] != 0){
					$identification =	true;
				}
			}
		}
		
		$date	=	date("Ymd");
		$reg	=	$this	->	select_once("member_reg",array('uid'=>$data['uid'],'usertype'=>$data['usertype'],'date'=>$date));
		if($reg['id']){
		    $signin = true;
		}
		if($this->config['integral_question_type']=="1"){
			$question	=	$this->max_time('发布问题',$data['uid'],$data['usertype']);

		}
		if($this->config['integral_answer_type']=="1"){
			$answer		=	$this->max_time('回答问题',$data['uid'],$data['usertype']);
		}
		if($this->config['integral_answerpl_type']=="1"){
			$answerpl	=	$this->max_time('评论问答',$data['uid'],$data['usertype']); 
		}
		$statusList = array(
			'baseInfo'		=> 	$baseInfo,
			'logo'			=> 	$logo,
		    'signin'		=> 	$signin,
			'emailChecked'	=> 	$emailChecked,
			'phoneChecked'	=> 	$phoneChecked,
			'question'	    => 	$question,
			'answer'	    => 	$answer,
			'answerpl'	    => 	$answerpl,
			'photo'			=>	$photo,			
			'pay_remark'	=>	$pay_remark,
			'identification'=>	$identification,	
			'map'			=> 	$map,				
			'banner'		=>	$banner,			
			'yyzz'			=>	$yyzz				
		);
			
		return $statusList;
	}

	function max_time($remark,$uid,$usertype){
	   
		$stime	=	strtotime(date('Ymd'));
		$etime	=	strtotime(date('Ymd'))+ 86400;
		
			
			
			
		
		$where['com_id']				=	$uid;
		$where['usertype']				=	$usertype;
		$where['pay_remark']			=	$remark;
		$where['PHPYUNBTWSTART_A']  	=   '';
		$where['pay_time'][]            =   array('>', $stime, 'AND');
		$where['pay_time'][]            =   array('<', $etime,'AND');	
		$where['PHPYUNBTWEND_A']    	=   '';
	    $num	=	$this -> select_num("company_pay",$where);
		if($num>0){
			return false;
		}else{
			return true;
		}
	}
	
	/**
	*转换积分整合
	*$data 必传参数
	*/
	function change($data){
		require_once ('statis.model.php');
		require_once ('companyorder.model.php');
		$statisM    			=   new statis_model($this->db, $this->def);
		$orderM    				=   new companyorder_model($this->db, $this->def);
		
		$nWhere['com_id']		=	$data['uid'];
		$nWhere['usertype']		=	$data['usertype'];
		
		$nWhere['pay_remark']	=	array('like', '转换'.$this->config['integral_pricename']);
		$nWhere['pay_time']		=	array('>=', strtotime(date("Y-m-d 00:00:00")));
		
		$getCompanyPayNum 		= 	$orderM->getCompanyPayNum($nWhere);	
		
		$return					=	array();
		
		if($data['changeprice'] && $data['changeintegral']){
			
			$changeprice		=	$data['changeprice'];
			
			$changeintegral		=	$data['changeintegral'];
			
			if($getCompanyPayNum>=$this->config['paypack_max_recharge']){
				$re['msg']		=	"今日转换次数已达上限，请明日再来！";
				$re['url']		=	'index.php?c=change';
				
			}else{
				$nid			=	$statisM->upInfo(array('packpay'=>array('-',$changeprice)), array('uid'=>$data['uid'], 'usertype'=>$data['usertype']));
				
				if($nid){
					$this	->	company_invtal($data['uid'],$data['usertype'],$changeintegral,true,"赏金转换".$this->config['integral_pricename'],true,2,'integral',2);
					$re['msg']	=	'转换成功';
					$re['url']	=	'index.php?c=changelist';
				}else{
					$re['msg']	=	'转换失败';
					$re['url']	=	'index.php?c=change';
				}	
			}
			
			$return['return']		=	$re;
			
		}
		
		$return['changeNum']		=	$getCompanyPayNum;
		
		return $return;
	}
	
	/**
	 * @desc 查询company_pay记录
	 */
	function getInfo($where = array(), $data = array()) {
	    
	    $field     =	empty($data['field']) ? '*' : $data['field'];
	   
	    $info      =	$this -> select_once('company_pay',$where, $field);
	   
	    return $info;
	}
	/**
	 * @desc 修改admin_integralclass记录
	 */
	function upIntClass($where = array(), $data = array()) {
		
		if(!empty($where)){
			
			$nid      =		$this -> update_once('admin_integralclass',$data, $where);
		
		}
	    return $nid;
	}
	
	/**
	 * @desc 查询admin_integralclass记录
	 */
	function getIntClass($where = array(), $data = array()) {
		
		if(!empty($where)){
			
			$field     	=		empty($data['field']) ? '*' : $data['field'];
			
			$List      	=		$this -> select_all('admin_integralclass',$where, $field);
		
		}
	    return $List;
	}
	
	/**
	 * @desc 添加admin_integralclass记录
	 */
	function addIntClass($data = array()) {
		
		if(!empty($data)){
			
			$nid      	=		$this -> insert_into('admin_integralclass',$data);
		
		}
	    return $nid;
	}
	
	/**
	 * @desc  删除admin_integralclass记录
	 */
	function delIntClass($ids){
		
		if(!empty($ids)){
			
			$whereData['id']	=	array('in',pylode(',',$ids));
			
			$result				=	$this	->	delete_all('admin_integralclass',$whereData,'');
			
		}
		return	$result;
	}
	
	function getList($whereData=array(), $data = array()){
		
		if(!empty($whereData)){
			
			$field     	=		empty($data['field']) ? '*' : $data['field'];
			
			$List      	=		$this -> select_all('company_pay',$whereData, $field);
		
		}
	    return $List;
		
	}
	
}
?>