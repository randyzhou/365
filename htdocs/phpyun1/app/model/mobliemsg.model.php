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
class mobliemsg_model extends model{
	
	/*
	 * 获取配置列表
	 * $whereData 	查询条件
	 * $data 		自定义处理数组
	 */
	 
	function getList($whereData,$data=array()){
		$ListNew			=	array();
		$List				=	$this -> select_all('moblie_msg',$whereData);
		
		if(!empty( $List )){
			$cuid			=	array();
			$uid			=	array();
			foreach ($List as $k => $v) {
				if($v['cuid'] && $v['cuid']>0){
					$cuid[]	=	$v['cuid'];
				}
				if($v['uid'] && $v['uid']>0){
					$uid[]	=	$v['uid'];
				}
			}
			$alluids		=	array_merge($cuid,$uid);
			$alluids		=	array_unique($alluids);

			require_once ('userinfo.model.php');
            $userinfoM  	=   new userinfo_model($this->db, $this->def);

            $namelists  	=   $userinfoM  ->  getUserList(array('uid'=>array('in',pylode(',',$alluids))));

            foreach($namelists as $nk=>$nv){
                $names[$nv['uid']]  	=   $nv['name'];
            }
            
			foreach($List as $lk => $lv){

				$List[$lk]['fname']		=	$lv['cuid'] ? $names[$lv['cuid']] : '系统';

				if($lv['uid']>0){

					$List[$lk]['sname'] =	$names[$lv['uid']];

				}elseif($lv['uid']<0){

					$List[$lk]['sname'] =	'管理员';

				}else{

					$List[$lk]['sname']	=	'';
					
				}
			}

			$ListNew['list']			=	$List;
		}

		return	$ListNew;
	}
	
	function delMoblieMsg($whereData,$data){
		
		if($data['type']=='one'){
			
			$limit	=	'limit 1';
			
		}
		
		if($data['type']=='all'){
		
			$limit	=	'';
			
		}
		
		if($data['norecycle'] == '1'){

			$result	=	$this -> delete_all('moblie_msg',$whereData,$limit,'','1');
		}else{
		
			$result	=	$this -> delete_all('moblie_msg',$whereData,$limit);
		}	

		return	$result;
		
	}
	/*
	 * 获取单条数据moblie_msg
	 * $whereData 	查询条件
	 * $data 		自定义处理数组
	 */
	 
	function getInfo($whereData,$data=array()){
		
		$data['field']  =	empty($data['field']) ? '*' : $data['field'];
		
		$List				=	$this -> select_once('moblie_msg',$whereData,$data['field']);
		
		if(is_array($List)&&$List){
			
			if(date('Y-m-d',$List['ctime'])==date('Y-m-d'))
			{
				$List['disabled']='1';
			}
		}
		
		return	$List;
	}
	
	
	function getNum($whereData){
		
		$num	=	$this -> select_num('moblie_msg',$whereData);
		
		return	$num;
	}
	
}