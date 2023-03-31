<?php
/*
 * $Author ：PHPYUN开发团队
 *
 * 官网: http://www.phpyun.com
 *
 * 版权所有 2009-2019 宿迁鑫潮信息技术有限公司，并保留所有权利。
 *
 * 软件声明：未经授权前提下，不得用于商业运营、二次开发以及任何形式的再次发布。
 *
 */
	function CheckMoblie($moblie){
	    if(!preg_match("/1[3456789]{1}\d{9}$/",trim($moblie))){
	        return false;
	    }else{
	        return true;
	    }
	}
	function CheckRegUser($str){
		if(!preg_match("/^[\x{4e00}-\x{9fa5}A-Za-z0-9_\-]+$/u",$str)){
			return false;
		}else{
			return true;
		}
	}
	function CheckTell($idcard){
		if(preg_match("/^[0-9-]+?$/",$idcard)==0){
			return false;
		}else{
			return true;
		}
	}
    function CheckRegEmail($email){
		if(!preg_match('/^([a-zA-Z0-9\-]+[_|\_|\.]?)*[a-zA-Z0-9\-]+@([a-zA-Z0-9\-]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,4}$/',$email)) {
			return false;
		}else{
			return true;
		}
	}
 
    function ArrayToString($obj,$withKey=true,$two=false){
    	if(empty($obj))	return array();
    	$objType=gettype($obj);
    	if ($objType=='array') {
    		$objstring = "array(";
    	    foreach ($obj as $objkey=>$objv) {
    			if($withKey)$objstring .="\"$objkey\"=>";
    			$vtype =gettype($objv) ;
    			if ($vtype=='integer') {
                    $objstring .="$objv,";
    			}else if ($vtype=='double'){
                    $objstring .="$objv,";
    			}else if ($vtype=='string'){
                    $objv= str_replace('"',"\\\"",$objv);
                    $objstring .="\"".$objv."\",";
    			}else if ($vtype=='array'){
                    $objstring .="".ArrayToString($objv,$withKey,$two).",";
    			}else if ($vtype=='object'){
                    $objstring .="".ArrayToString($objv,$withKey,$two).",";
    			}else {
                    $objstring .="\"".$objv."\",";
    			}
    	    }
    		$objstring = substr($objstring,0,-1)."";
    		return $objstring.")\n";
    	}
    }
    
    function fun_ip_get()
    {
        $ip = '未知IP';
        
        if(!empty($_SERVER['HTTP_CLIENT_IP'])){
            
            return is_ip($_SERVER['HTTP_CLIENT_IP'])?$_SERVER['HTTP_CLIENT_IP']:$ip;
            
        }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
            
            return is_ip($_SERVER['HTTP_X_FORWARDED_FOR'])?$_SERVER['HTTP_X_FORWARDED_FOR']:$ip;
            
        }else{
            
            return is_ip($_SERVER['REMOTE_ADDR'])?$_SERVER['REMOTE_ADDR']:$ip;
        }
    }
    
    function is_ip($str)
    {
        if (stripos($str, ',') !== false){
            
            $strArr  =  explode(',', $str);
            $ip      =  $strArr[0];
            
        }else{
            
            $ip  =  $str;
        }
        
        if(filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)){
            
            return $ip;
            
        }elseif(filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)){
            
            return $ip;
        }
        return false;
    }

    function get_ip_city($ip){
    	$url='http://ip.taobao.com/service/getIpInfo.php?ip='.$ip;
    	if (extension_loaded('curl')){
    	    $file_contents = CurlGet($url);
    	}else if(function_exists('file_get_contents')){
    	    $file_contents = file_get_contents($url);
    	}
    	$file=json_decode($file_contents);
    	
    	$city['threecity']=$file->data->county;//县区
    	$city['city']=$file->data->city;//市
    	$city['province']=$file->data->region;//省
    	return $city;
    }
    function getLocalCity(){
    	$ip = fun_ip_get();
    	$cityInfo = array();
    	$url = "http://user.58.com/userdata/getlocal/";
    	$curl = curl_init();
    	curl_setopt($curl, CURLOPT_URL, $url);
    	curl_setopt($curl, CURLOPT_HEADER, 0);
    	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    	if($ip != "127.0.0.1"){
    		curl_setopt($curl, CURLOPT_HTTPHEADER , array('X-FORWARDED-FOR:'.$ip, 'CLIENT-IP:'.$ip) );
    	}
    	
    	curl_setopt($curl, CURLOPT_TIMEOUT, 1);
    	$ret = curl_exec($curl);
    		
    	if(false !== $ret) {
    		$ret = str_replace('list', '"list"', $ret);
    		$ret = str_replace('local', '"local"', $ret);
    		$ret = str_replace('ishome', '"ishome"', $ret);
    		$ret = str_replace("'", '"', $ret);
    		$output = json_decode($ret,true);
    		curl_close($curl);
    		$local = $output['local'];
    		include(PLUS_PATH."domain_cache.php");	
    		$i=0;
    		foreach($site_domain as $key=>$value ){
    			if (strpos($value['cityname'],$local) !== false){
    				$cityInfo = $value;
    				break;
    			}
    		}
    	}
    	return $cityInfo;
    }
   
    function go_to_city($site_domain){
    	$ip=fun_ip_get();
    	$city=get_ip_city($ip);
    	if(!empty($city)){
    		foreach($city as $key =>$value){
    			$city[$key] = str_replace(array("省","市","县","区"),array(""),$value);
    		}
    	}
    
    	if($city['threecity']){
    		foreach($site_domain as $value){
    			$cityname=str_replace(array("省","市","县","区"),array(""),$value['cityname']);
    			similar_text($city['threecity'],$cityname,$percent);
    			if($percent>=65){
    				$gotourl=$value['host'];
    				break;
    			}
    		}
    	}
    	if(!$gotourl && $city['city']){
    		foreach($site_domain as $value){
    			$cityname=str_replace(array("省","市","县","区"),array(""),$value['cityname']);
    			similar_text($city['city'],$cityname,$percent);
    			if($percent>=65){
    				$gotourl=$value['host'];
    				break;
    			}
    		}
    	}
    	if(!$gotourl && $city['province']){
    		foreach($site_domain as $value){
    			$cityname=str_replace(array("省","市","县","区"),array(""),$value['cityname']);
    			similar_text($city['province'],$cityname,$percent);
    			if($percent>=65){				
    				$gotourl=$value['host'];
    				break;
    			}
    		}
    	}
    	SetCookie("gotocity",'1',time() + 3600, "/"); 
    	if($gotourl){
    		
    		header('Location: http://'.$gotourl);	
    		exit(); 
    	}
    }
    function getUploadPic($content,$count=0){
    	$content=str_replace('"','',$content);
    	$content=str_replace('\'','',$content);
    	$content=str_replace('>',' width="">',$content);
    	$pattern=preg_match_all('/<img[^>]+src=(.*?)\s[^>]+>/im' ,$content,$match);
    	if($match[1]){
    		if($count>0){
    			$i=0;
    			foreach($match[1] as $v){
    				if(!empty($v)){
    					$pic[]=$v;
    					$i++;
    					if($i>=$count){
    						break;
    					}
    				}
    			}
    			return $pic;
    		}
    		return $match[1];
    	}
    	return array();
    }
    function dreferer($default = '') {
        $referer=isset($_SERVER['HTTP_REFERER'])?$_SERVER['HTTP_REFERER']:'';
        if(strpos('a'.$referer,Url('user','login'))) {
            $referer = $default;
        }else{
            $referer = substr($referer, -1) == '?' ? substr($referer, 0, -1) : $referer;
        }
        return $referer;
    }
   
   
    function UserAgent(){    
        $user_agent = ( !isset($_SERVER['HTTP_USER_AGENT'])) ? FALSE : $_SERVER['HTTP_USER_AGENT'];    
    	if ((preg_match("/(iphone|ipod|android)/i", strtolower($user_agent))) AND strstr(strtolower($user_agent), 'webkit')){    
        	return true;    
    	}else if(trim($user_agent) == '' OR preg_match("/(nokia|sony|ericsson|mot|htc|samsung|sgh|lg|philips|lenovo|ucweb|opera mobi|windows mobile|blackberry)/i", strtolower($user_agent))){   
    		return true;   
    	}else{//PC   
    		return true;  
    	}    
    }
    function get_domain($host) {
        $host=strtolower($host);
        if(strpos($host,'/')!==false){
            $parse = @parse_url($host);
            $host = $parse['host'];
        }
        $topleveldomaindb=array('com','edu','gov','int','mil','net','org','biz','info','pro','name','museum','coop','aero','xxx','idv','mobi','cc','me'); $str='';
        foreach($topleveldomaindb as $v){
            $str.=($str ? '|' : '').$v;
        }
        $matchstr="[^\.]+\.(?:(".$str.")|\w{2}|((".$str.")\.\w{2}))$";
        if(preg_match("/".$matchstr."/ies",$host,$matchs)){
            $domain=$matchs['0'];
        } else{
            $domain=$host;
        }
        return $domain;
    }
     
    function made_web($dir,$array,$config){
        $content="<?php \n";
        $content.="\$$config=".$array.";";
        $content.=" \n";
        $content.="?>";
        $fpindex=@fopen($dir,"w+");
        @fwrite($fpindex,$content);
        @fclose($fpindex);
    }
    function made_web_array($dir,$array){
        $content="<?php \n";
        if(is_array($array)){
            foreach($array as $key=>$v){
                if(is_array($v))
                {
                    $content.="\$$key=array(";
                    $content.=made_string($v);
                    $content.=");";
                }else{
                    $v = str_replace("'","\\'",$v);
                    $v = str_replace("\"","'",$v);
                    $v = str_replace("\$","",$v);
                    $content.="\$$key=".$v.";";
                }
                $content.=" \n";
            }
        }
        $content.="?>";
        $fpindex=@fopen($dir,"w+");
        $fw=@fwrite($fpindex,$content);
        @fclose($fpindex);
        return $fw;
    }
    function made_string($array,$string=''){
    	if(is_array($array) && !empty($array)){
    	 	$i = 0;
    		foreach($array as $key=>$value){
    			if($i>0){$string.=',';}
    			if(is_array($value)){
    				$string.="'".$key."'=>array(".made_string($value).")";
    			}else{
    				$string.="'".$key."'=>'".str_replace('\$','',$value)."'";
    			}
    			$i++;
    		}
    	}
      return $string;
    }
    function delfiledir($delfiles){
        $delfiles = stripslashes($delfiles);
        $delfiles = str_replace("../","",$delfiles);
        $delfiles = str_replace("./","",$delfiles);
        $delfiles = "../".$delfiles;
        $p_delfiles = path_tidy($delfiles);
        if($p_delfiles!=$delfiles){die;}
        if(is_file($delfiles)){
            @unlink($delfiles);
        }else{
            $dh=@opendir($delfiles);
            while($file=@readdir($dh)){
                if($file!="."&&$file!=".."){
                    $fullpath=$delfiles."/".$file;
                    if(@is_dir($fullpath)){
                        delfiledir($fullpath);
                    }else{
                        @unlink($fullpath);
                    }
                }
            }
            @closedir($dh);
            if(@rmdir($delfiles)){
                return  true;
            }else{
                return false;
            }
        }
    }
    function path_tidy($path) {
        $tidy = array();
        $path = strtr($path, '\\', '/');
        foreach(explode('/', $path) as $i => $item) {
            if($item == '' || $item == '.' ) {
                continue;
            }
            if($item == '..' && end($tidy) != '..' && $i > 0) {
                array_pop($tidy);
                continue;
            }
            $tidy[] = $item;
        }
        return ($path[0]=='/'?'/':'').implode('/', $tidy);
    }
    function unlink_pic($pic){
        $pictype=getimagesize($pic);
        if($pictype[2]=='1' || $pictype[2]=='2' || $pictype[2]=='3'){
            @unlink($pic);
        }
    }
    function pylode($string,$array){
    		if(is_array($array)){
    			$str = @implode($string,$array);
    		}else{
    			$str = $array;
    		}
    		if(!preg_match("/^[0-9a-zA-Z".$string."]+$/",$str)){
    			$str = 0;
    		}
    		return $str;
    }
    function getToken($config=array()){
		$config = '';
		include(PLUS_PATH.'config.php');
		$Token = $config['token'];
		$TokenTime = $config['token_time'];
		$NowTime = time();
		if(($NowTime-$TokenTime)>7000 || !$Token){
			$Appid       = $config['wx_appid'];
			$Appsecert   = $config['wx_appsecret'];
			$Url         = 'https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid='.$Appid.'&secret='.$Appsecert;
			$CurlReturn  = CurlPost($Url);
			 
			
			$Token = json_decode($CurlReturn);
			
			$config['token']      = $Token->access_token;
			$config['token_time'] = time();
			if($config['token']){
				made_web(PLUS_PATH."config.php",ArrayToString($config),"config");
			}
			return $config['token'];
		}else{
			return $Token;
		}
    }
    function getWxTicket($config=array()){
    	$config = '';
    	include(PLUS_PATH.'config.php');
    	$Ticket = $config['ticket'];
    	$TicketTime = $config['ticket_time'];
    	$NowTime = time();
    	if(($NowTime-$TicketTime)>7000 || !$Ticket){
    		$Url         = 'https://api.weixin.qq.com/cgi-bin/ticket/getticket?access_token='.getToken().'&type=jsapi';
    		$CurlReturn  = CurlPost($Url);
    		$Ticket       = json_decode($CurlReturn);
    		$config['ticket']      = $Ticket->ticket;
    		$config['ticket_time'] = time();
			if($config['ticket']){
    			made_web(PLUS_PATH."config.php",ArrayToString($config),"config");
			}
    		return $config['ticket'];
    	}else{
    		return $Ticket;
    	}
    }
    function getWxJsSdk($url='') {
    	include(PLUS_PATH.'config.php');
    	$Ticket = getWxTicket();
    	if(empty($url)){
    		 $protocol = getprotocol($config['sy_weburl']);

    		 $url = $protocol.$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI];
    	}
    	$timestamp = time();
    	$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    	$nonceStr = "";
    	for ($i = 0; $i < 16; $i++) {
    	  $nonceStr .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
    	}
    	$string = "jsapi_ticket=".$Ticket."&noncestr=".$nonceStr."&timestamp=".$timestamp."&url=".$url;
    	$signature = sha1($string);
    	$signPackage = array(
    	  "appId"     => $config['wx_appid'],
    	  "nonceStr"  => $nonceStr,
    	  "timestamp" => $timestamp,
    	  "url"       => $url,
    	  "signature" => $signature,
    	  "rawString" => $string
    	);
    	return $signPackage; 
     }
    function CurlPost($url,$data='',$headers=''){
    	$ch = curl_init();
    	curl_setopt($ch, CURLOPT_URL,$url);
    	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);
    	if ($headers) {
    	    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    	}
    	if($data!=''){
    		curl_setopt($ch, CURLOPT_POST, 1);
    		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    	}
    	curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    	$Return=curl_exec ($ch);
    	if (curl_errno($ch)) {
    	    echo 'Errno'.curl_error($ch);
    	}
    	curl_close($ch);
    	return $Return;
    }
    function CurlGet($url){
        $ch = curl_init();
        $timeout = 20;
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);  
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);  
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        $Return = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Errno'.curl_error($ch);
        }
        curl_close($ch);
        return $Return;
    }
    function wapJump($config){
		
    	global $ModuleName;
    	$Loaction = '';
    	$mArray   = array('qqconnect','sinaconnect','call');
    	$cArray   = array('clickhits','wjump');
    	if($config['sy_wap_jump']=='1' && !in_array($ModuleName,$mArray) && !in_array($_GET['c'],$cArray)){
    		if(isMobileUser($config) && !strpos(strtolower($_SERVER['REQUEST_URI']), 'wap') && $_SERVER['HTTP_HOST'] != $config['sy_wapdomain']){
    			include(PLUS_PATH."jump.cache.php");
    			if($_GET['c']){
    				$_GET['a'] = $_GET['c'];
    			}
    			if($ModuleName && $ModuleName!='index'){
    				$_GET['c'] = $ModuleName;
    				if($wapA[$ModuleName][$_GET['a']]){
    					$_GET['a'] = $wapA[$ModuleName][$_GET['a']];
    				}
    			}
    			if($_GET['c']){
                  	$jumpGet['c'] = $_GET['c'];
                    unset($_GET['c']);
                 }
                if($_GET['a']){
                  	$jumpGet['a'] = $_GET['a'];
                    unset($_GET['a']);
                }

				if(!empty($_GET)){
 
					foreach($_GET as $key=>$value){
						if($key == 'keyword' || $key == 'code'){
							$jumpGet[$key]	=	$value;
						}
						if(!empty($value) && $value !=0){
                  			
							$jumpGet[$key] = $value;
						}
					}
                }
    			$Loaction =  Url('wap',$jumpGet);
    		}
    	}
    	return $Loaction;
    }
    
    function isMobileUser($config = array()){
        
        $uachar =   '/(nokia|sony|ericsson|mot|samsung|sgh|lg|philips|panasonic|alcatel|lenovo|cldc|midp|mobile|phone|iphone|ipad|ipod|android|symbian|smartphone)/i';

        $ua     =   strtolower($_SERVER['HTTP_USER_AGENT']);
        
    	if(preg_match($uachar, $ua)){
    		
    		return true;
    	
    	}else{
    	    
    		return false;
    		
    	}
    	
    }
    
    function gt_Generate_code($length = 6) {
      return rand(pow(10,($length-1)), pow(10,$length)-1);
    }
    function gtauthcode($config=array(),$type='pc',$code_kind=3){
    	return $code_kind==3 ? gtGeetest($config=array(),$type='pc') : gtverify();
    }
    function gtGeetest(){
    	if($_POST['geetest_challenge'] && $_POST['geetest_validate'] && $_POST['geetest_seccode']){
    		if(!isset($_SESSION)){
    			session_start();
    		}
    		require_once LIB_PATH . '/class.geetestlib.php';
    		if(!$config){
    			include(PLUS_PATH.'config.php');
    		}
    		$GtSdk = new GeetestLib($config['sy_geetestid'], $config['sy_geetestkey']);
			$data = array(
				"user_id" => $user_id, # 网站用户id
				"client_type" => "web", #web:电脑上的浏览器；h5:手机上的浏览器
				"ip_address" => "127.0.0.1" # 请在此处传输用户请求验证时所携带的IP
			);
    		$user_id = $_SESSION['user_id'];
    		if ($_SESSION['gtserver'] == 1) {    
    			$result = $GtSdk->success_validate($_POST['geetest_challenge'], $_POST['geetest_validate'], $_POST['geetest_seccode'], $data);
    			if ($result) {
    				return true;
    			} else{
    				return false;
    			}
    		}else{  
    			if ($GtSdk->fail_validate($_POST['geetest_challenge'],$_POST['geetest_validate'],$_POST['geetest_seccode'])) {
    				return true;
    			}else{
    				return false;
    			}
    		}
    	}else{
    		return false;
    	}
    }
    function dxauthcode($config=array()){
    	include (LIB_PATH."dxCaptchaClient.class.php");
		$appId = $config['sy_dxappid'];
		$appSecret = $config['sy_dxappsecret'];
		$client = new CaptchaClient($appId,$appSecret);
		$client->setTimeOut(2);     
		# $client->setCaptchaUrl("http://cap.dingxiang-inc.com/api/tokenVerify");   
		$response = $client->verifyToken($_POST['dx_token']);
		
		if($response->serverStatus == 'SERVER_SUCCESS'){
			return true;
		}else{
			return false;
		}
    }

    function gtverify(){
    	if(md5(strtolower($_POST['authcode']))!=$_SESSION['authcode'] || empty($_SESSION['authcode'])){
          unset($_SESSION['authcode']);
          return false;
      }
      return true;
    }
    
    function is_weixin(){ 
    	if ( strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') !== false) {
    		return true;
    	}
    	return false;
    }
   
    function setcookies($parseDate=array(),$time,$domain){
    	
    	$domain = get_domain($domain);
    	if(is_array($parseDate)){
    		foreach($parseDate as $key=>$value){
    			SetCookie($key,$value,$time,"/",$domain);
    		}
    	}
    }
 
    function yunEncrypt($str, $key)
    {
        $key = md5($key);
        $k = md5(rand(0, 100));  
        $k = substr($k, 0, 3);
        $tmp = "";
        for ($i = 0; $i < strlen($str); $i ++) {
            $tmp .= substr($str, $i, 1) ^ substr($key, $i, 1);
        }
        return base64_encode($k . $tmp);
    }
    
    function yunDecrypt($str, $key)
    {
        $len = strlen($str);
        $key = md5($key);
        $str = base64_decode($str);
        $str = substr($str, 3, $len - 3);
        $tmp = "";
        for ($i = 0; $i < strlen($str); $i ++) {
            $tmp .= substr($str, $i, 1) ^ substr($key, $i, 1);
        }
        return $tmp;
    }
    function my_sort($prev, $next){
    	if ($prev['value'] == $next['value']) return 0;
    	return ($prev['value'] < $next['value']) ? 1 : -1;
    }
    function t_sort($prev, $next){
    	$p = strtotime($prev);
    	$n = strtotime($next);
    	if ($p == $n) return 0;
    	return ($p > $n) ? 1 : -1;
    }
    
    function isServerOsWindows(){
      return stristr(php_uname('s'), 'window') ? true : false;
    }
    
    function mb_unserialize($serial_str) {
    	$serial_str = str_replace("\r", "", $serial_str);
    	$serial_str = preg_replace_callback('/s:\d+:"(.+?)";/s','checkunserialize', $serial_str);
    	return unserialize($serial_str);
    }
    
    function checkunserialize($r){
    	$n = strlen($r[1]);
    	return "s:$n:\"$r[1]\";";
    }
    
    function sub_string($str){
    	
    
    	$length = mb_strlen($str);
    
    	if($length > 5){
    		
    		$str = mb_substr($str, 0, 4).'****'.mb_substr($str, $length-4, 4);
    	}
    	return $str;
    }
	 
	function checkpic($url='', $post=''){
		
		global $config;

		if(isset($config['sy_oss']) && $config['sy_oss'] == 1){
            $curl =  $config['sy_ossurl'];
        }else{
            $curl =  $config['sy_weburl'];
        }

		$picurl		=	'';
		
		if($url!=''){
		    
		    if(strstr($url, 'http') !== false || strstr($url, 'https') !== false){
		        
		        $picurl	 = 	$url;
		        
		    }else{
		        
		        if(strstr($url, '../data') !== false){
		            
		            $picurl	 =  str_replace('../data', $curl.'/data', $url);
		            
		        }elseif(strstr($url, './data') !== false){
		            
		            $picurl	 =  str_replace('./data', $curl.'/data', $url);
		            
		        }elseif(strstr($url, '/data') !== false){
		            
		            $picurl	 =  str_replace('/data', $curl.'/data', $url);
		        }elseif(strstr($url, '.data') !== false){
		            
		            $picurl	 =  str_replace('.data', $curl.'/data', $url);
		                
		        }else{
		            
		            $picurl	 =  $curl.'/'.$url;
		        }
		    }
		}else{
			
			if($post!=''){
					
				if(strstr($post, 'http') !== false || strstr($url, 'https') !== false){
					
					$picurl = $post;
				}else{
					$picurl	=	$curl.'/'.$post;
					
				}
			}
		}
	    return $picurl;
	}

    function passCheck($pass, $salt = '', $oldpass = '')
    {
        if ($pass) {
    
            if ($oldpass) {
                
                return md5(md5($pass).$salt) == $oldpass ? true : false;
            } else {  
                
                return md5(md5($pass).$salt);
            } 
            
        } else {
    
            return false;
        }
    }

	function getprotocol($weburl = ''){
		
		if($weburl)
		{
			
			if(strpos($weburl,'https://')!==false)
			{
				$protocol = 'https://';
			}else{
				$protocol = 'http://';
			}

		}else{
			
			$protocol  =  ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')) ? 'https://' : 'http://';
		
		}
	
	
		return $protocol;
	}
	
	 
	function format_datetime($date_time, $type = 1, $before = 1, $format = '')
	{
	    if ($type == 1) {
	        
	        $timestamp  =   strtotime($date_time);
	    } elseif ($type == 2) {
	        
	        $timestamp  =   $date_time;
	        $date_time  =   date('Y-m-d H:i:s', $date_time);
	    }
	    
	    if (!empty($format)) {
	        return date($format, $timestamp);
	    }
	    
	    if($before == 1 ){
	    
    	    $difference    =   time() - $timestamp;
    	    
    	    $today         =   time() - strtotime('today');
    	    
    	     
    	    
    	    if($difference < $today){
    	        return '今天';
    	    }elseif ($difference <= ($today + 86400)) {
    	        return '昨天';
    	    }elseif ($difference <= 2592000) {
    	        return ceil($difference / 86400) . '天前';
    	    }elseif ($difference <= 31536000) {
    	        return ceil($difference / 2592000) . '个月前';
    	    } else {
    	        return ceil($difference / 31536000) . '年前';
    	    }
    	    
	    }else if ($before == 2){
	        
	        $difference    =   $timestamp - time();
	        
	        $today         =   strtotime('tomorrow') - time();
	        
	        if ($difference <= $today) {
	            return '今天';
	        } elseif ($difference <= 86400) {
	            return '明天';
	        } elseif ($difference <= 172800) {
	            return '后天';
	        } elseif ($difference <= 604800) {
	            return '一周后';
	        } elseif ($difference <= 2592000) {
	            return '一月后';
	        } elseif ($difference <= 31536000) {
	            return ceil($difference / 2592000) . '个月后';
	        } else {
	            return round($difference / 31536000) . '年后';
	        }
	        
	    }
	}
	function isVip($endtime = 0){
	    
	    if ($endtime >= strtotime('tomorrow') || $endtime == 0){
	        
	        return true;
	        
	    }else{
	        
	        return false;
	    }
	}
?>