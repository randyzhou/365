<?php

class test_model extends model{
	
	
	public function getList($whereData,$data=array('utype'=>'')){
	    
	    $ListNew	=	array();
	    
	    $field      =   $data['field'] ? $data['field'] : '*';
  	    if(!empty($data['search'])){

  	    	$rdata	=	$this	->	searchList($data['search']);
  	    	$List	=	$rdata['row'];
  	    	$zdids	=	$rdata['zdids'];
        }else{
            $List	=	$this	->	select_all('resume_expect',$whereData,$field);
        }
    
	    if(!empty($List)){
	        
	        $time    =   time();
	        $cache   =   $this -> getClass(array('user','city','hy','job'));
	        
	        foreach($List as $k=>$v){
	             
	            $euids[]				=  $v['uid'];

	            $List[$k]['age_n']		=  date('Y') - date('Y',strtotime($v['birthday']));
	            
	            $List[$k]['hy_n']		=  $v['hy'] ? $cache['industry_name'][$v['hy']] : '不限';
	            
	            $List[$k]['sex_n']		=  $cache['user_sex'][$v['sex']];
	            
	            $List[$k]['edu_n']		=  $cache['userclass_name'][$v['edu']];
	            
	            $List[$k]['exp_n']		=  $cache['userclass_name'][$v['exp']];
	            
	            $List[$k]['report_n']	=  $cache['userclass_name'][$v['report']];
	            
	            $List[$k]['type_n']		=  $cache['userclass_name'][$v['type']];
	            if($v['lastupdate']){
	            	$ltime				=  $v['lastupdate'];
	                
	                $beginToday			=  strtotime('today');
	                
	                $beginYesterday		=  strtotime('yesterday');
	                
	                $week				=  strtotime("-1 week",time());
	                if($ltime>$week && $ltime<$beginYesterday){

	                    $List[$k]['lastupdate_n']	=	"一周内";

	                }elseif($ltime>$beginYesterday && $ltime<$beginToday){

	                    $List[$k]['lastupdate_n']	=	"昨天";

	                }elseif($ltime>$beginToday){

	                    $List[$k]['lastupdate_n']	=	date("H:i",$ltime);

	                }else{

	                    $List[$k]['lastupdate_n']	=	date("Y-m-d",$ltime);
	                }
	            }
                if(isset($v['ctime'])){
                    $todaystart =   strtotime(date('Y-m-d',time()));
                    $beforeYesterday    =   $todaystart - 86400 * 2;
                    if($v['ctime']>$beforeYesterday){
                        $List[$k]['newtime']  =  1;
                    }
                }
	            
	            if($v['minsalary'] && $v['maxsalary']){
	                
	                $List[$k]['salary']  =  '￥'.$v['minsalary'].'-'.$v['maxsalary'].'元/月';
	            }elseif ($v['minsalary']){
	                
	                $List[$k]['salary']  =  '￥'.$v['minsalary'].'元/月';
	            }elseif ($v['maxsalary']){
	                
	                $List[$k]['salary']  =  '￥'.$v['maxsalary'].'元/月';
	            }else{
	                
	                $List[$k]['salary']  =  '面议';
	            }
	            
	            if ($v['job_classid'] && $cache){
	                
	                $job_classid = @explode(',',$v['job_classid']);
	                
	                if(is_array($job_classid)){
	                    
	                    $jobclassid     =  array();
	                    $job_classname  =  array();
	                    
	                    foreach($job_classid as $jv){
	                        
	                        if($cache['job_name'][$jv]){
	                            
	                            $jobclassid[]     =  $jv;
	                            
	                            $job_classname[]  =  $cache['job_name'][$jv];
	                        }
	                    }
	                    $List[$k]['job_classid']    =  pylode(',',$jobclassid);
	                    
	                    $List[$k]['job_classname']  =  @implode(',',$job_classname);
	                }
	            }
	            
	            if ($v['city_classid'] && $cache){
	                
	                $city_classid = @explode(',',$v['city_classid']);
	                
	                if(is_array($city_classid)){
	                    
	                    $cityclassid     =  array();
	                    $city_classname  =  array();
	                    
	                    foreach($city_classid as $cv){
	                        
	                        if($cache['city_name'][$cv]){
	                            
	                            $cityclassid[]     =  $cv;
	                            
	                            $city_classname[]  =  $cache['city_name'][$cv];
	                        }
	                    }
	                    $List[$k]['city_classid']    =  pylode(',',$cityclassid);
	                    
	                    $List[$k]['city_classname']  =  @implode(' ',$city_classname);
	                }
	            }
	            
	            if($v['topdate'] > $time){
	                
	                $List[$k]['top_day']	=	ceil(($v['topdate']-$time)/86400);
	                
	            }else{
	                
	                $List[$k]['top_day'] = '0';
	            }
	        }
	        
	        if ($data['utype'] == 'admin'){
	            
	            $List  =   $this -> getDataList($List,$cache);
	        }
	        
	        if ($data['withResumeField']){
	            
	            $resumelist  	=   $this -> getResumeList(

	            	array('uid'=>array('in',pylode(',',$euids))),

	            	array(
	            		'field'				=>	$data['withResumeField'],
	            		'downresume_where'	=>	$data['downresume_where']
	            	)

	            );

	            foreach($List as $lk=>$lv){

	            	foreach($resumelist as $rk=>$rv){

	            		if($rv['uid']==$lv['uid']){

	            			$List[$lk]	=	array_merge($lv,$rv);
	            			
	            		}
	            	}
	            }
	        }
	        
	        $ListNew['list']	=	$List;
	        
	        if(isset($zdids) && !empty($zdids)){
	        	$ListNew['zdids']	=	$zdids;
	        }
	        
	        
	        if ($data['cache']){
	            
	            $ListNew['cache']  =   $cache;
	        }
	    }
	    return	$ListNew;
	}

	 
}
?>