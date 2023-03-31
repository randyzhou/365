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
class company_controller extends common
{

    function index_action()
    {
        $this -> get_moblie();
        
        $CacheM     =   $this -> MODEL('cache');
        
        $CacheList  =   $CacheM->GetCache(array('city', 'hy', 'com'));
        
        $this -> yunset($CacheList);
        
        if (intval($_GET['three_cityid'])) {
            
            $this   ->   yunset('cityname', $CacheList['city_name'][intval($_GET['three_cityid'])]);
            
        }

        foreach ($_GET as $k => $v) {
            
            if ($k != '') {
                
                $searchurl[] = $k.'='.$v;
                
            }
            
        }
        
        $this -> seo('firm');
        
        $searchurl  =   @implode('&', $searchurl);
        
        $this -> yunset('searchurl', $searchurl);
        $this -> yunset('backurl', Url('wap'));
        $this -> yunset('topplaceholder', '请输入企业关键字,如：有限公司...');
        $this -> yunset('headertitle', '公司搜索');
        $this -> yuntpl(array('wap/company'));
    }


    function show_action()
    {
        
        $this -> get_moblie();
        
        $UserinfoM  =   $this -> MODEL('userinfo');
        $companyM   =   $this -> MODEL('company');
        $jobM       =   $this -> MODEL('job');
        
        $uid        =   intval($this -> uid);
        $cuid       =   intval($_GET['id']);
        
        $CacheM     =   $this -> MODEL('cache');
        $CacheList  =   $CacheM->GetCache(array('job', 'com', 'city', 'hy'));
        $this -> yunset($CacheList);
        
        $ComMember  =   $UserinfoM -> getInfo(array('uid'=> $cuid), array('field'=>'`status`'));
        
        $row        =   $companyM -> getInfo($cuid, array('logo' => '1'));
        
        
        $show       =   $companyM -> getCompanyShowList(array('uid'=>$cuid,'status'=>0));
       
        $this -> yunset('show', $show);

        if (!is_array($row)) {
            
            $this -> ACT_msg_wap($_SERVER['HTTP_REFERER'], '没有找到该企业！');
            
        } elseif ($ComMember[status] == 0) {
            
            $this -> ACT_msg_wap($_SERVER['HTTP_REFERER'], '该企业正在审核中，请稍后查看！');
            
        } elseif ($ComMember[status] == 3) {
            
            $this -> ACT_msg_wap($_SERVER['HTTP_REFERER'], '该企业未通过审核！');
            
        } elseif ($row[r_status] == 2) {
            
            $this -> ACT_msg_wap($_SERVER['HTTP_REFERER'], '该企业暂被锁定，请稍后查看！');
            
        }
        
        $linkphone  =   explode('-', $row['linkphone']);
        
        if (strlen($linkphone[0]) == 4) {
            
            $row['callphone']   =   $linkphone[0] . $linkphone[1];
            
        } else if (strlen($linkphone[0] > 8)) {
            
            $row['callphone']   =   substr($row['linkphone'], 0, 12);
            
        } else {
            
            $row['callphone']   =   $row['linkphone'];
            
        }
		 //联系方式
		$link		=$jobM->getCompanyTel(array('com_id'=>$row['uid'],'uid'=>$this->uid,'usertype'=>$this->usertype));
		
		$this->yunset('link',$link);

        $statisM    =   $this -> MODEL('statis');
        
        $rows       =   $statisM -> getInfo($cuid, array('usertype' => '2', 'field' => '`rating`'));
       
        $ratingM    =   $this -> MODEL('rating');
        
        $comrat     =   $ratingM -> getInfo(array('id'=> intval($rows['rating'])), array('pic'=>'1'));
        
        $row['lastupdate']  =   date('Y-m-d', $row['lastupdate']);
        
        if ($row['infostatus'] == '2') {
            
            $row['linkphone'] = $row['linktel'] = $row['linkmail'] = $row['linkqq'] = '';
            
        }
        
        $welfare    =   @explode(',', $row['welfare']);
        
        foreach ($welfare as $k => $v) {
            if (! $v) {
                unset($welfare[$k]);
            }
        }
        $row['welfare_n']   =   $welfare;
        
        // 解决通过Editor上传的图片路径问题
        $row['content']     =   str_replace(array('ti<x>tle','“','”','&nbsp;'), array('title','','',' '), $row['content']);
        $row['content']     =   htmlspecialchars_decode($row['content']);
        
        preg_match_all('/<img(.*?)src=("|\'|\s)?(.*?)(?="|\'|\s)/', $row['content'], $res);
        
        if (! empty($res[3])) {
            
            foreach ($res[3] as $v) {
                
                if (strpos($v, 'http:') === false && strpos($v, 'https:') === false) {
                    $ossv=checkpic($v);
                    $row['content'] = str_replace($v, $ossv, $row['content']);
                }
            }
            
        }
        
        $this -> yunset("row", $row);
        
        $this -> yunset("comrat", $comrat);
        
        if ($uid && $this->usertype == '1') {
            
            $atnM   =   $this -> MODEL('atn');
            
            $isatn  =   $atnM -> getAtnInfo(array('uid' => $uid, 'sc_uid' => $cuid));
            
            $this   ->  yunset('isatn', $isatn);
            
            $userid_job =   $jobM -> getSqJobInfo(array('uid' => $uid, 'com_id' => $cuid));
            
            $this   ->  yunset('userid_job', $userid_job);
        }
        
        
        $data['company_name']       =   $row['name'];
        $data['company_name_desc']  =   $row['content'];
        $this -> data   =   $data;
        $this -> seo('company_index');
        $this -> yunset('headertitle', '公司详情');
        if($this->config['sy_h5_share']==1){
			$this -> yunset("shareurl", Url('wap', array('c' => 'company','a' => 'share','id' => $cuid)));
		}else{
			$this -> yunset("shareurl",Url('wap',array('c'=>'company','a'=>'show','id'=>$cuid)));	
		}
        
        // 距离
        $user_agent = (! isset($_SERVER['HTTP_USER_AGENT'])) ? FALSE : $_SERVER['HTTP_USER_AGENT'];
        
        if (($_COOKIE['mapx'] && $_COOKIE['mapx'] > 0) && ($_COOKIE['mapy'] && $_COOKIE['mapy'] > 0) && strpos($user_agent, 'Android') && is_weixin()) {
           
            $this->yunset(array(
                'mapx' => $_COOKIE['mapx'],
                'mapy' => $_COOKIE['mapy']
            ));
            
        } else {
            
            $this->yunset(array(
                'mapx' => 0,
                'mapy' => 0
            ));
            
        }
        
        $this->yuntpl(array('wap/company_show'));
    }
	
    function share_action()
    {
        
        $this   ->  get_moblie();

        $cuid       =   intval($_GET['id']);
        
        $comM       =   $this -> MODEL('company');
        
        $row        =   $comM -> getInfo($cuid, array('logo'=>'1'));

        $welfare    =   @explode(',', $row['welfare']);
        
        foreach ($welfare as $k => $v) {
        
            if (! $v) {
                
                unset($welfare[$k]);
            }
        }
        
        $row['welfare']     =   $welfare;
        
        $row['content']     =   strip_tags($row['content']);
		$row['content']     =   str_replace(array('ti<x>tle','“','”','&nbsp;'), array('title','','',' '), $row['content']);

        $jobM   =   $this->MODEL('job');
        
        $link   =   $jobM -> getCompanyTel(array('com_id'=>$row['uid'],'uid'=>$this->uid,'usertype'=>$this->usertype));
      
        $this->yunset('link',$link);
        
        $this -> yunset('row', $row);
        
        $show   =   $comM -> getCompanyShowList(array('uid' => $cuid), array('field' => '`picurl`'));
         
        $this -> yunset('show', $show);
        
        $product    =   $comM -> getCompanyProductList(array('uid' => $cuid, 'status' => '1'));
        
        $this -> yunset('product', $product);
        
        $CacheM     = $this->MODEL('cache');
        
        $CacheList  = $CacheM->GetCache(array('job', 'com', 'city', 'hy'));

        $this -> yunset($CacheList);
        
        $data['company_name']       =   $row['name'];
        $data['company_name_desc']  =   $row['content'];
        $this -> data   =   $data;
        
        $this -> seo('company_index');
        $this -> yunset('company_style', $this->config['sy_weburl'] . '/app/template/wap/company');
        $this -> yuntpl(array('wap/company/index'));
    }

    function msg_action()
    {
        $this -> get_moblie();
        
        $comM   =   $this -> MODEL('company');      
        $row    =   $comM -> getInfo(intval($_GET['id']));
        $this   ->  yunset('row', $row);
        
        $data['company_name']       =   $row['name'];
        $data['company_name_desc']  =   $row['content'];
        $this -> data   =   $data;
        $this -> seo('company_index');
        $this -> yunset('headertitle', '公司详情');
        $this -> yuntpl(array('wap/company_msg'));
    }

   
    function yzToken($uid, $token)
    {
        if (!empty($uid) && !empty($token)){
            
            $userInfoM  =  $this->MODEL('userinfo');
            $member     =  $userInfoM->getInfo(array('uid'=>$uid),array('field'=>'`uid`,`username`,`usertype`,`password`,`salt`,`pid`,`did`,`status`'));
            if ($member){
                if ($member['status'] == 2){
                    return array('errmsg'=>'您的账号已被锁定，请联系网站客服');
                }
                $mdtoken  =  md5($member['username'].$member['password'].$member['salt'].$member['usertype']);
                
                if($token != $mdtoken){
                    
                    return array('errmsg'=>'登录信息有误，请重新登录');
                }else{
                    
                    $user  =  array(
                        'uid'       =>  $member['uid'],
                        'username'  =>  $member['username'],
                        'usertype'  =>  $member['usertype'],
                        'did'       =>  $member['did']
                    );
                   
                    return $user;
                }
            }else{
                return array('errmsg'=>'用户信息错误，请重新登录');
            }
        }else{
            return array('errmsg'=>'用户信息缺失');
        }
    }
}
?>