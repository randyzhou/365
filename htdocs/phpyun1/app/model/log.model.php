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

/**
 * 日志操作类
 */
class log_model extends model{
    /**
     * 添加管理员日志
     * @param string $content
     * @param string $opera:
     * @param string $opera_id
     */
	public function addAdminLog($content, $opera = '', $type = '', $opera_id=''){
		if($_SESSION['auid'] && $_SESSION['ausername'] && $content){
		    $data = array(
		        'uid'        =>  $_SESSION['auid'],
		        'username'   =>  $_SESSION['ausername'],
		        'content'    =>  $content,
		        'ctime'      =>  time(),
		        'ip'         =>  fun_ip_get(),
		        'opera'      =>  $opera,
		        'type'       =>  $type,
		        'opera_id'   =>  $opera_id,
		        'did'        =>  $this->config['did']
		    );
			
			$this->insert_into('admin_log',$data);
		}
	}
	/**
	 * 查询管理员日志
	 * @param array $whereData
	 * @param array $data
	 */
	public function getAdminLog($whereData = array(), $data = array()){
	    
	    $log  =  $this -> select_once('admin_log',$whereData);
	    
	    return $log;
	}
	/**
	 * 查询管理员日志
	 * @param array $whereData
	 * @param array $data
	 */
	public function getAdminLogList($whereData = array(), $data = array()){
		
		$data['field']	=	empty($data['field']) ? '*' : $data['field'];
	    
	    $List  			=  	$this -> select_all('admin_log',$whereData,$data['field']);
	    
	    return $List;
	}
	
	public function delAdminlog($whereData = array(), $data = array()) {
		
		$return['layertype']	=	0;
		
		if(!empty($whereData)){
		
			if(!empty($whereData['id']) && $whereData['id'][0] == 'in'){
				$return['layertype']	=	1;
			}
			if($data['norecycle'] == '1'){	

				$return['id']	=	$this -> delete_all('admin_log', $whereData, '', '', '1');
			}else{
				
				$return['id']	=	$this -> delete_all('admin_log', $whereData, '');
			}		
			$return['msg']		=	'后台日志';
			$return['errcode']	=	$return['id'] ? '9' :'8';
			$return['msg']		=	$return['id'] ? $return['msg'].'删除成功！' : $return['msg'].'删除失败！';
		}else{
			$return['msg']		=	'请选择您要删除的后台日志！';
			$return['errcode']	=	8;
		}
		return	$return; 
	}
    /**
     * 添加会员日志
     * @param string $uid
     * @param string $usertype
     * @param string $content
     * @param string $opera
	 1-职位，2-简历，3-下载简历（下载，删除），4-邀请面试（邀请，删除），5-收藏/关注（收藏/关注，删除/取消），6-申请/报名，
	 
	 7-基本信息，8-修改密码，9-兼职，11-修改账号，12-账号解绑，13-账号认证，14-招聘会/专题，15-地图设置，16-图片（横幅，环境，作品），
	 
	 17-积分兑换，18-系统信息，19-问答，20-讲师，22-新闻，23-举报，26-浏览/屏蔽，27-子账号增删 ,28-搜索器
	 
	 29-项目任务,30-购买聊天,31注销账号申请
     * @param string $type:1-增加，2-修改，3-删除 , 4-刷新
	 
     */
	public function addMemberLog($uid,$usertype,$content,$opera='',$type='', $num = ''){
	    
	    if ($uid && $usertype && $content){
	        
	        $data  =  array(
	            'uid'       =>  $uid,
	            'usertype'  =>  $usertype,
	            'content'   =>  $content,
	            'opera'     =>  $opera,
	            'type'      =>  $type,
	            'ip'        =>  fun_ip_get(),
	            'ctime'     =>  time(),
	            'jobnum'    =>  $num
	        );
	        $member			=	$this->select_once('member',array('uid'=>$uid),'`did`');
			$data['did']	=	$member['did'];
			
	        $this -> insert_into('member_log',$data);
	    }
	}
   
     
	/**
	 * 查询会员日志数目
	 */
	function getMemberLogNum($Where=array()){
	    return $this->select_num('member_log', $Where);
	}
	/**
     * 获取member_log 列表
	 * $whereData 	 查询条件
     * $data 		 自定义处理数组
     */
    public function getMemlogList($whereData, $data = array()) {
        $data['field']  =	empty($data['field']) ? '*' : $data['field'];
        $List  			=   $this -> select_all('member_log', $whereData, $data['field']);   
        
        if ($data['utype'] == 'admin'){
            
            $List  =  $this->getDataList($List);
        }
        return $List;    
	}

	/**
     *@desc 删除member_log日志
	 * $delId 日志id
     */
    public function delMemlog($whereData = array(), $data = array()) {

		$return['layertype']	=	0;
		
		if(!empty($whereData)){
		
			if(!empty($whereData['id']) && $whereData['id'][0] == 'in'){
				$return['layertype']	=	1;
			}
			
			if($data['norecycle'] == '1'){	

				$return['id']		=	$this -> delete_all('member_log', $whereData, '', '', '1');
			}else{
				
				$return['id']		=	$this -> delete_all('member_log', $whereData, '');
			}

			$return['msg']		=	'会员日志';
			$return['errcode']	=	$return['id'] ? '9' :'8';
			$return['msg']		=	$return['id'] ? $return['msg'].'删除成功！' : $return['msg'].'删除失败！';
		}else{
			$return['msg']		=	'请选择您要删除的会员日志！';
			$return['errcode']	=	8;
		}
		return	$return; 
	}
	
	/**
     * @desc 获取login_log 列表
     */
    public function getLoginlogList($whereData, $data = array()) {
        
        $data['field']  =	empty($data['field']) ? '*' : $data['field'];
        $List  			=   $this -> select_all('login_log', $whereData, $data['field']);
        
        if ($data['utype'] == 'admin'){
            
            $List  =  $this -> getDataList($List);
        }
        
        return $List;    
	}
	/**
     * @desc 添加login_log
     */
    public function addLoginlog($addData, $data = array()) {
        
        $return			=	0;
        
        if (!empty($addData)){
            $addData['remoteport'] = !empty($addData['remoteport']) ? $addData['remoteport'] :$_SERVER['REMOTE_PORT'];
            $return 	=   $this -> insert_into('login_log', $addData);
        }
        
        return $return;    
	}
	public function getLoginLog($where = array())
	{
	    $return  =  $this -> select_once('login_log', $where);
	    return  $return;
	}
	
	/**
     * @desc 删除login_log日志
	 * $delId 日志id
     */
    public function delLoginlog($delId,$where) {
		$return['layertype']	=	0;
		
		if(!empty($delId)){
			if(is_array($delId)){
				$delId					=	pylode(',', $delId);

				$return['layertype']	=	1;
			}
			
			$return['id']				=	$this -> delete_all("login_log", array('id' => array('in',$delId)),"");
			
			$return['msg']				=	'会员登录日志(ID:'.$delId.')';
			$return['errcode']			=	$return['id'] ? '9' :'8';
			$return['msg']				=	$return['id'] ? $return['msg'].'删除成功！' : $return['msg'].'删除失败！';
		}elseif($where){
			$return['id']				=	$this -> delete_all("login_log", $where,"");
			
			$return['msg']				=	'会员登录日志';
			$return['errcode']			=	$return['id'] ? '9' :'8';
			$return['msg']				=	$return['id'] ? $return['msg'].'删除成功！' : $return['msg'].'删除失败！';
		}else{
			$return['msg']				=	'请选择您要删除的会员登录日志！';
			$return['errcode']			=	8;
		}
		return	$return; 
	}
	
	private function getDataList($List){
	    
	    foreach($List as $v){
	        
	        $uids[]   =   $v['uid'];
	    }
	    $member    =  $this->select_all('member',array('uid'=>array('in',pylode(',', $uids))),'`uid`,`username`');
	    $resume    =  $this->select_all('resume',array('uid'=>array('in',pylode(',', $uids))),'`uid`,`name`,`def_job`');
		$company   =  $this->select_all('company',array('uid'=>array('in',pylode(',', $uids))),'`uid`,`name`');
	    
	    foreach($List as $k=>$v){
	        
	        foreach($member as $val){
	            
	            if($val['uid']==$v['uid']){
	            
	                $List[$k]['username']  =  $val['username'];
	            }
	        }
	        foreach($resume as $val){
	            
	            if($v['uid']==$val['uid']){
	                
	                $List[$k]['rname']  =  $val['name'];
	                $List[$k]['eid']    =  $val['def_job'];
	            }
	        }
	        foreach($company as $val){
	            
	            if($v['uid']==$val['uid']){
	                
	                $List[$k]['comname']  =  $val['name'];
	            }
			}
			
	    }
	    return $List;
	}
	 
}

?>