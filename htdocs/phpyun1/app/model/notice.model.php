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
 * （email、手机短信）消息发送类 天眼查数据获取
 */
class notice_model extends model{

    private $smtp = null;
    
    private function _getSmtp($serverId=''){
		if($this->config['sy_email_online']==1){
			 include_once(LIB_PATH.'email.class.php');
			
			include(PLUS_PATH.'emailconfig.cache.php');
			
			if($serverId){
				if(is_array($emailconfig)){
					foreach($emailconfig as $value){
						if($value['id'] == $serverId){
						$emailConfig = $value;
						break;
						}	
					}
				}
			}else{
				if(count($emailconfig)>0){
					$rand = array_rand($emailconfig,1);
					$emailConfig = $emailconfig[$rand];
				}
			}
			if($emailConfig['smtpserver'] && $emailConfig['smtpuser'] && $emailConfig['smtppass']){
				if($emailConfig['smtpport']=='465'){
					$smtpserver = 'ssl://'.$emailConfig['smtpserver'];
					$smtpserverport = '465';
				}else{
					$smtpserver = $emailConfig['smtpserver'];
					$smtpserverport = '25';
				}
				return new smtp($smtpserver,$smtpserverport,true,$emailConfig['smtpuser'],$emailConfig['smtppass'],$emailConfig['smtpnick']);
			}else{
				return false;
			}
		}
		if($this->config['sy_email_online']==2){
			 include_once(LIB_PATH.'aliyunemail.class.php');
			 $accesskey=$this->config['accesskey'];  
			 $accesssecret=$this->config['accesssecret'];  
			 $accountname=$this->config['ali_email'];  
			 $fromalias=$this->config['ali_name'];  
			 $tagname=$this->config['ali_tag'];  
			 
			 return new aliyun_sendemail($accesskey,$accesssecret,$accountname,$fromalias.$tagname); 
		}
    }
    /**
     * 获取邮件、短信模板
     * @param array $data  传入参数
     * @param string $type 模板类型：email邮箱; msg短信
     * @return mixed
     */
    public function getTpl($data, $type){
        $name = $type.$data['type'];
        
        
        $row = $this -> select_once('templates',array('name'=>$name));
		
        if ($row){
            $tpl['title']=$this->_tpl($row['title'], $data);
            $tpl['content']=$this->_tpl($row['content'], $data);
           
            return $tpl;
        }else{
            return array('status' => -1, 'msg' => '信息模板有误，请联系管理员');
        }
    }
    
    private function _tpl($tpl, $data){
        unset($data['type']);
        
        $re     =  array("{webname}","{weburl}","{webtel}");
        $re2[]  =  $this->config['sy_webname'];
        $re2[]  =  $this->config['sy_weburl'];
        $re2[]  =  $this->config['sy_freewebtel'];
        $tpl    =  str_replace($re,$re2,$tpl);

        foreach($data as $k=>$v){
            $tpl  =  str_replace("{".$k."}",$v,$tpl);
        }
        return $tpl;
    }
        
    
    private function _isKey($key, $arr){
        if(array_key_exists($key, $arr) && trim($arr[$key]) != ''){
            return trim($arr[$key]);
        }
        return false;
    }

    /**
    * 传入 email地址、主题、内容等参数，简单发送email方法
    * 
    * @param string $data['email'] email地址
    * @param string $data['subject'] email主题
    * @param string $data['content'] email正文内容
    */
    public function sendEmail($data){
		if($this->config['sy_email_online']==1){
			if(!$this->smtp){
				$serverId = array_key_exists('smtpServerId', $data) ? $data['smtpServerId'] : '';
				$this->smtp = $this->_getSmtp($serverId);
			}
			if(!$this->smtp){
				return array('status' => -1, 'msg' => '还没有配置邮箱，请联系管理员！');
			}
			
			if($this->_isKey('email', $data) == false || CheckRegEmail($data['email']) == false){
				return array('status' => -1, 'msg' => 'email地址错误');
			}
			
			if(!$this->_isKey('subject', $data) || !$this->_isKey('content', $data)){
				return array('status' => -1, 'msg' => 'email主题/正文为空');
			}
			
			$sendid = $this->smtp->sendmail($data['email'],$data['subject'],$data['content'],'HTML',$data['cc'],$data['bcc'],$data['additional_headers']);
			if($sendid){
				$state = '1';
				$retval = array('status' => 1, 'msg' => 'email发送成功！');
			}else{
				$state = '0';
				$retval = array('status' => -1, 'msg' => 'email发送失败！');
			}
		}
		
		if($this->config['sy_email_online']==2){
		    if(!$this->smtp){
		        $this->smtp = $this->_getSmtp();
		    }
		    if(!$this->smtp){
		        return array('status' => -1, 'msg' => '还没有配置邮箱，请联系管理员！');
		    }
			$sendid = $this->smtp->sendemail($data['email'],$data['subject'],$data['content']);
			if($sendid){
				$state = '1';
				$retval = array('status' => 1, 'msg' => 'email发送成功！');
			}else{
				$state = '0';
				$retval = array('status' => -1, 'msg' => 'email发送失败！');
			}
		}
        
        
        $tbContent  =  $data['tbContent'] ? $data['tbContent'] : $data['content'];
        
        $email_msg  =  array(
            'uid'         =>  $data['uid'],
            'cuid'        =>  $data['cuid'] ? $data['cuid'] : 0,
            'email'       =>  $data['email'],
            'title'       =>  $data['subject'],
            'content'     =>  $tbContent ,
            'state'       =>  $state,
            'ctime'       =>  time(),
            'smtpserver'  =>  $this->smtp->user
        );
        if($data['email']){
			$this -> insert_into('email_msg',$email_msg);
        }
        return $retval;
    }

    /**
     * @desc 根据业务类型，判断后台设置是否开启该类型email提醒，选择设定好的email模板，发送指定类型的邮件
     *
     * @param string $data['type'] 发送email的类型：
     *            reg注册，yqms邀请面试,fkcg付款成功,zzshtg职位审核成功,sqzw申请职位,getpass找回密码,yqmshf回复面试邀请,login登录验证
     *            'birthday',
     *            'webbirthday',
     *            'vipmr',
     *            'useradd',
     *            'userup',
     *            'addjob',
     *            'upjob'
     *            $data数组,网站名称，网站域名和网站电话，不需要加到该数组中，请根据/data/db.tpl.php进行添加数据进来，全部添加
     *            $data包括email,moblie,$type
     *            email 要发送的邮箱用户
     *            moblie要发送的手机用户
     *            
     */
    public function sendEmailType($data, $tpl = NULL)
    {
        if (! $this->_isKey('type', $data) || ! $this->_isKey('sy_email_'.$data['type'], $this->config) || $this->config['sy_email_'.$data['type']] != 1) {
            return array(
                'status' => - 1,
                'msg' => '未开启email提醒，请联系管理员！(code:' . $data['type'] . ')'
            );
        }
        
        if (! $tpl) {
            $tpl = $this->getTpl($data, 'email');
            if ($tpl['status']) {
                return $tpl;
            }
        }
        $data['subject'] = $tpl['title'];
        $data['content'] = html_entity_decode($tpl['content'], ENT_QUOTES);
        
        return $this->sendEmail($data);
    }

    private function postSMS($type='msgsend',$data=''){
    	$data['content'] = str_replace(array(" ","　","\t","\n","\r"),array('','','','',''),$data['content']);
    	$url='http://msg.phpyun.com/send.php';
    	$url.='?user='.iconv('UTF-8','GBK',$data['uid']).'&pass='.$data['pwd'].'&code='.$data['key'].'&moblie='.$data['mobile'].'&content='.iconv('UTF-8','GBK//IGNORE',$data['content']).'&time='.$data['time'];
    	if (extension_loaded('curl')){
    	    $file_contents = CurlGet($url);
    	}else if(function_exists('file_get_contents')){
    	    $file_contents = file_get_contents($url);
    	}
        return $file_contents;
    }
  
    /**
    * $data['moblie'] / $data['mobile'] 手机号（必填）
    * $data['content'] 短信内容（必填）
    * 
    *  （选填） 保存到moblie_msg表的字段：
    * uid 接收人uid,
    * cuid 发送人uid,
    */
    public function sendSMS($data){
        if(!$this->config['sy_msguser'] || !$this->config['sy_msgpw'] 
          || !$this->config['sy_msgkey']||$this->config['sy_msg_isopen']!='1'){
          return array('status' => -1, 'msg' => '还没有配置短信，请联系管理员！');
        }
    
        $data['mobile'] = $data['moblie'] ? $data['moblie'] : $data['mobile'];
        if($this->_isKey('mobile', $data) == false || CheckMoblie($data['mobile']) == false){
            return array('status' => -1, 'msg' => '手机号错误');
        }
		if($this->config['sy_web_mobile']!=''){
			$regnamer=@explode(';',$this->config['sy_web_mobile']);
			if(in_array($data['mobile'],$regnamer)){
				return array('status' => -1, 'msg' => '该手机号已被禁止使用');
			}
		}
			
        if($this->_isKey('content', $data) == false || $data['content'] == ''){
            return array('status' => -1, 'msg' => '短信内容为空');
        }
    
        
        $row = array(
                'uid'      =>  $this->config['sy_msguser'],
                'pwd'      =>  $this->config['sy_msgpw'],
                'key'      =>  $this->config['sy_msgkey'],
    			'mobile'   =>  $data['mobile'],
    			'content'  =>  $data['content'],
                'time'     =>  $data['time'] ? $data['time'] : '',
                'mid'      =>  $data['mid'] ? $data['mid'] : ''
    		);
    	$re= $this->postSMS('msgsend',$row);
        
        
        $sql_data  =  array(
            'uid'      =>  $data['uid'],
            'cuid'     =>  $data['cuid'] ? $data['cuid'] : 0,

            'moblie'   =>  $data['mobile'],
            'ctime'    =>  time(),
            'content'  =>  $data['content']
        );
        
    	if(trim($re) == '1'){
            
            include_once('warning.model.php');
            
            $warning  =  new warning_model($this->db,$this->def);
            
            $warning -> warning(5);
    
            $sql_data['state']  =  0;
            
            $sql_data['ip']     =  fun_ip_get();
            
            $sqlResult  =  $this -> insert_into('moblie_msg',$sql_data);
            
            return array('status' => 1, 'msg' => '发送成功!');
    	}else{
    		$sql_data['state']  =  $re;
            $this -> insert_into('moblie_msg',$sql_data);
          
            return array('status' => -1, 'msg' => '发送失败！状态：'.$re );
        }
    }
    /**
     * 
     * @param array $data  传入参数
     * @param string $content 短信内容
     * @return number[]|string[]
     */
    public function sendSMSType($data, $content=NULL){
        if(!$this->_isKey('type', $data) 
        || !$this->_isKey('sy_msg_'.$data['type'], $this->config) 
        || $this->config['sy_msg_'.$data['type']] !=1){ 
          return array('status' => -1, 'msg' => '未开启短信提醒，请联系管理员(code:msg'.$data['type'].')');
        }
        
        
        
        
        
        
        
        if (!$content){
            $tpl = $this->getTpl($data, 'msg');
            if ($tpl['status']){
                return $tpl;
            }
            $content = $tpl['content'];
        }
        
        $data['content'] = $content;
        return $this->sendSMS($data);
    }

    public function getBusinessInfo($name){
        if($this->config['sy_msguser'] && $this->config['sy_msgpw'] && $this->config['sy_msgkey']){
            
            $comNameNum  =  $this -> select_num('company',array('name'=>$name));
            
            if($comNameNum > 0){
                $url='http://msg.phpyun.com/business.php';
                $url.='?user='.$this->config['sy_msguser'].'&pass='.$this->config['sy_msgpw'].'&code='.$this->config['sy_msgkey'].'&name='.iconv('utf-8','gbk',$name);
                if (extension_loaded('curl')){
                    $file_contents = CurlGet($url);
                }else if(function_exists('file_get_contents')){
                    $file_contents = file_get_contents($url);
                }
                $return = json_decode($file_contents,true);
                
                if(!empty($return['content'])){
                    if($return['content']['estiblishTime']){
                        $msectime = $return['content']['estiblishTime'] * 0.001;
                        if(strstr($msectime,'.')){
                            sprintf('%01.3f',$msectime);
                            list($usec, $sec) = explode('.',$msectime);
                            $sec = str_pad($sec,3,'0',STR_PAD_RIGHT);
                        }else{
                            $usec = $msectime;
                            $sec = '000';
                        }
                        $est = date('Y-m-d',$usec);
                        $return['content']['estiblishTime'] =$est;
                	}
                    
                    if($return['content']['fromTime']){
                		
                		
                		
                		$msectime = $return['content']['fromTime'] * 0.001;
                        if(strstr($msectime,'.')){
                            sprintf('%01.3f',$msectime);
                            list($usec, $sec) = explode('.',$msectime);
                            $sec = str_pad($sec,3,'0',STR_PAD_RIGHT);
                        }else{
                            $usec = $msectime;
                            $sec = '000';
                        }
                        $est = date('Y-m-d',$usec);
                        $return['content']['fromTime'] =$est;
                    }
                	if($return['content']['toTime']){
                		$toTime=new DateTime('@'.substr($return['content']['toTime'],0,10));
                		
                		$toTime->setTimezone(new DateTimeZone('PRC'));
                		$return['content']['toTime'] = $toTime->format('Y-m-d');
                	}else{
                		$return['content']['toTime'] = '长期';
                	}
                	
                	/*if($toTime=="1970-01-01"){
                		$return['content']['toTime'] = "长期";
                	}else{
                		$return['content']['toTime'] = date('Y-m-d',substr($return['content']['toTime'],0,10));
                	}*/
                }
            }
            return $return;
        }
    }
    
    /**
     * @desc    短信验证码时效性
     * @param   array $data
     * @return  boolean
     */
  	public function checkTime($data)
    {
        $cert_validity  =   $this->config['moblie_codetime'] * 60; 
        $time           =   time();
        $ctime          =   ($time - $data);
        
        if ($ctime <= $cert_validity) {
        
            return true;
        } else {
            
            return false;
        }
    }
    
 	/**
 	 * 发送手机短信/邮件验证码
 	 * @param string $sended       手机号/邮箱
 	 * @param string $type         验证码类型：getpass-忘记密码-7; login-登录-2; regcode-注册-2; cert-认证-2;
 	 * @param array $user          用户信息
 	 * @param number $length       验证码长度
 	 * @param number $validity     发送间隔
 	 * @param string $kind         类型：msg 短信/email 邮件
 	 */
 	public function  sendCode($sended, $type, $user = array(), $length = 6, $validity = 120, $kind = 'msg') 
 	{
  	    
 	    $time      =  time();
 	    $overtime  =  $time - $validity;
 	    $today     =  strtotime('today');
 	    $ip        =  fun_ip_get();
 	    $code      =  gt_Generate_code($length); 
		
 	    if ($kind == 'msg'){
 	        
			if(!$this->config['sy_msguser'] || !$this->config['sy_msgpw'] || !$this->config['sy_msgkey']||$this->config['sy_msg_isopen']!='1'){
			
				return array('error'=> 107, 'msg'=> '网站没有配置短信，请联系管理员！');
			
			}
			
			$ip      =   fun_ip_get();
			
			$ipnum   =   $this -> select_num('moblie_msg', array('ip'=>$ip , 'ctime' => array('>', strtotime(date('Y-m-d')))));
			
			if($ipnum >= $this->config['ip_msgnum']){
			    
				return array('error'=> 107, 'msg'=> '当前IP短信发送受限！');
				
			}
			
			$num     =	  $this -> select_num('moblie_msg', array('moblie' => $sended , 'ctime' => array('>',strtotime(date('Y-m-d')))));
			
			if($num	>=	$this->config['moblie_msgnum']){
			    
				return array('error'=> 107, 'msg'=> '请不要频繁发送！');
				
			}
			
 	        if (CheckMoblie($sended) == false){
 	            
 	            return array('error'=> 106, 'msg'=> '手机号码格式错误');
 	            
 	        }
			
			if ($type == 'getpass'){
 	            
 	            $member  =  $this -> select_once('member',array('moblie'=>$sended),'`uid`,`username` as `name`, `usertype`');
 	            
 	            if (!empty($member)){
 	                
 	                $user  =  array(
 	                    'uid'       =>  $member['uid'],
 	                    'usertype'  =>  $member['usertype'],
 	                    'name'      =>  $member['name']
 	                );
 	                
 	            }else{
 	                
 	                return array('error'=> 105, 'msg'=> '该手机尚未注册');
 	                
 	            }
 	            
 	            $lastSend  =  $this -> select_once('company_cert',array('check' => $sended, 'type' => 7 ,'orderby'=>'id,desc'),'`ctime`,`type`');
 	            
 	        }else {
 	            
 	            $lastSend  =  $this -> select_once('company_cert',array('check' => $sended, 'type' => 2,'orderby'=>'id,desc'),'`ctime`,`type`');
 	        }
 	        if($lastSend['ctime'] > $overtime){
 	            
 	            return array('error' => 102, 'msg' => '两次发送间隔需超过'.$validity.'秒');
 	            
 	        }
 	        if ($type == 'cert'){
 	            
 	            $certover  =  $time - ($this->config['cert_msgtime'] * 60);
 	            
 	            if ($lastSend['ctime'] > $certover){
 	                
 	                return array('error' => 102, 'msg' => '手机认证短信发送间隔需超过'.$this->config['cert_msgtime'].'分钟');
 	            }
 	        }
 	        $sendToday  =  $this -> select_all('moblie_msg', array('moblie' => $sended, 'ctime' => array('>' , $today)), '`ip`');
 	        
 	        if(count($sendToday) >= $this->config['moblie_msgnum']){
 	            
 	            return array('error' => 103, 'msg' => '同一手机号一天最多发送'.$this->config['moblie_msgnum'].'条');
 	            
 	        }
 	        
 	        $ipSendNum  =  0;
 	        
 	        foreach ($sendToday as $v){
 	            if ($v['ip'] == $ip){
 	                $ipSendNum++;
 	            }
 	        }
 	        if($ipSendNum >= $this->config['ip_msgnum']){
 	            
 	            return array('error'=> 104, 'msg' => '同一IP一天最多发送'.$this->config['ip_msgnum'].'条');
 	            
 	        }
 	        $result  =  $this -> sendType($sended, $type, $code, 'msg', $user);
 	        
 	    }elseif ($kind == 'email'){
 	        if (CheckRegEmail($sended) ==false){
 	            
 	            return array('error'=> 101, 'msg'=> '邮箱格式错误');
 	        }
			
			if($this->config['sy_email_set']!="1"){
				return array('error'=> 107, 'msg'=> '网站邮件服务器暂不可用');
			}
			
			$num	=	$this->select_num("company_cert" , array('check'=>$sended , 'ctime'=>array('>',strtotime(date('Y-m-d')))) );
			if($num>=5){
				$data['errmsg']  = '请不要频繁发送邮件！';
				$data['error']   = 17;
				echo json_encode($data);die;
			}
			
 	        if ($type == 'getpass'){
 	            
 	            $member  =  $this -> select_once('member',array('email'=>$sended),'`uid`,`username` as `name`, `usertype`');
 	            
				if($this->config['sy_email_getpass']=="2"){
				
					return array('error'=> 108, 'msg'=> '网站未开启邮件找回密码');
				}
				
 	            if ($member){
 	                $user  =  array(
 	                    'uid'      => $member['uid'],
 	                    'usertype' => $member['usertype'],
 	                    'name'     => $member['name']
 	                );
 	            }else{
 	                
 	                return array('error'=> 105, 'msg'=> '该邮箱尚未注册');
 	            }
 	            
 	            $num  =  $this -> select_num('company_cert',array('check'=>$sended,'type'=>7,'ctime'=>array('>',$today)));
 	            
 	            if($num >= 5){
 	                
 	                return array('error'=> 106, 'msg'=> '请不要频繁发送邮件');
 	            }
 	            $lastSend  =  $this -> select_once('company_cert',array('check'=>$sended,'type'=>7),'`ctime`,`type`');
 	            
 	            $result    =  $this -> sendType($sended, $type, $code, 'email', $user);
 	        }
 	    }
		
 	    if($result['status'] != -1){
 	        
  	    
 	        $sendData = array(
 	            'uid'         =>  intval($user['uid']),
 	            'status'      =>  0,
 	            'step'        =>  1,
 	            'check'       =>  $sended,
 	            'check2'      =>  $code,
 	            'ctime'       =>  $time,
 	            'did'         =>  $this -> config['did'],
 	            'statusbody'  =>  $this -> codeType($type)
 	        );
 	        
 	        if ($type == 'getpass'){
 	            $sendData['type']  =  7;
 	        }else{
 	            $sendData['type']  =  2;
 	        }
 	        
 	        if($lastSend && ($lastSend['type'] == 2 || $lastSend['type'] == 7)){
 	            
 	            if ($lastSend['type'] == 2){
 	                
  	                $this -> update_once('company_cert', $sendData, array('check'=>$sended,'type'=>2));
 	                
 	            }elseif ($lastSend['type'] == 7){
 	                
 	                $this -> update_once('company_cert', $sendData, array('check'=>$sended,'type'=>7));
 	            }
 	            
 	        }else{
 	            
 	            $this -> insert_into('company_cert', $sendData);
 	        }
 	    }
 	    return array('error' => $result['status'], 'msg' => $result['msg']);
 	}
 	
 	private function sendType($sended, $type, $code, $kind = 'msg',$user = array()){
 	    
 	    $finfo    = $this -> forsend($user);       
 	    
 	    $data = array(
 	        'uid'       =>  $finfo['uid'],
 	        'username'  =>  $finfo['name'],
 	        'cuid'      =>  $finfo['cuid'],
 	        'cname'     =>  $finfo['cname'],
 	        'type'      =>  $type,
			'code'      =>  $code
 	    );
 	    if ($kind == 'msg'){
 	        
 	        $data['moblie']  =  $sended;
 	        
 	        $result          = $this -> sendSMSType($data);
 	        
 	    }elseif ($kind == 'email'){
 	        
 	        $data['email']  =  $sended;
 	        
 	        $result         =  $this -> sendEmailType($data);
 	    }
 	    return $result;
 	}
 	
 	private function codeType($type){
 	    $status = array(
 	        'login'    =>  '手机登录验证码',
 	        'regcode'  =>  '手机注册验证码',
 	        'cert'     =>  '手机认证',
 	        'getpass'  =>  '找回密码'
 	    );
 	}
 	
 	private function forsend($user){
 	    $info = array(
 	        'uid'   =>  0,
 	        'name'  =>  '',
 	        'cuid'  =>  0,
 	        'cname' =>  '系统'
 	    );
 	    if ($user['uid']){
 	        
 	        if ($user['name']){
 	            
 	            $info['uid']  =   $user['uid'];
 	            $info['name'] =   $user['name'];
 	            
 	        }else {
 	            
 	            $info  =  $this -> select_once('member', array('uid' => $user['uid']),'`uid`, `username` as `name`');
 	            
 	        }
 	    }
 	    return $info;
 	}
	
	
 	function jycheck($authcode,$tag){
		session_start();
		if(!empty($tag)){
			if (strpos($this -> config['code_web'], $tag) !== false) {
			
				if ($this -> config['code_kind'] == 3) {
					
					
					if(!gtauthcode($this->config)){
					
						return array('error'=> 107, 'msg'=> '请点击按钮进行验证！');
						
					}
				
				}elseif ($this -> config['code_kind'] == 4) {
					
					
					if(!dxauthcode($this->config)){
					
						return array('error'=> 107, 'msg'=> '请滑动按钮进行验证！');
						
					}
				
				}else {
					
					if(md5(strtolower(trim($authcode)))!=$_SESSION['authcode'] || trim($authcode)==''){
						unset($_SESSION['authcode']);
						return array('error'=> 106, 'msg'=> '验证码错误！');
						
					}else{
                        unset($_SESSION['authcode']);
                    }
				}
				
			}
			
		}else{
			if(md5(strtolower(trim($authcode)))!=$_SESSION['authcode'] || trim($authcode)==''){
				unset($_SESSION['authcode']);
				return array('error'=> 106, 'msg'=> '验证码错误！');
			}else{
                unset($_SESSION['authcode']);
            }
		}
	}
}
?>