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
class admin_right_controller extends adminCommon{

    function index_action(){
        
        global $db_config;
        
        include (APP_PATH . 'version.php');
        
        $this -> yunset('version', $version);
        
        $this -> yunset('db_config', $db_config);
        
        $base       =       base64_encode($db_config['coding'] . '|phpyun|' . $this->config['sy_webname'] . '|phpyun|' . $this->config['sy_weburl'] . '|phpyun|' . $this->config['sy_webemail'] . '|phpyun|' . $version);
        
        $this->yunset('base', $base);
        
        if (is_dir('../admin')) {
            
            $dirname[]      =       'admin';
        } else {
            // 生成admin是否更改
            $admindir       =   str_replace('/index.php', '', $_SERVER['PHP_SELF']);
            $admindir_arr   =   explode('/', $admindir);
            $newadmindir    =   $admindir_arr[count($admindir_arr) - 1];
            
            include (PLUS_PATH . '/admindir.php');
            if ($admindir != $newadmindir) {
                $cont       =       "<?php";
                $cont       .=       "\r\n";
                $cont       .=      "\$admindir='" . $newadmindir . "';";
                $cont       .=      "?>";
                
                $fp          =   @fopen(PLUS_PATH . '/admindir.php', 'w+');
                $filetouid   =   @fwrite($fp, $cont);
                @fclose($fp);
            }
        }
        if (is_dir('../install')){
            $dirname[] = 'install';
        }
        $this -> yunset('dirname', @implode(',', $dirname));
        
        $adminM		=     $this -> MODEL('admin');
        
        $nav_user	=	$adminM -> getPower(array('uid'=>$_SESSION['auid']));
        
        $mruser		=	$nav_user['username'] == 'admin' && $nav_user['password'] == $adminM->makePass('admin') ? 1 : 0;

        $this -> yunset('mruser', $mruser);

        $this -> yunset('power', $nav_user['power']);

        $this -> yunset('lasttime', $_COOKIE['lasttime']);
        
        
        $soft           =   $_SERVER['SERVER_SOFTWARE'];
        $kongjian       =   round(@disk_free_space('.') / (1024 * 1024), 2);
        $banben         =   $this->db->mysql_server(1);
        $yonghu         =   @get_current_user();
        $server         =   $_SERVER['SERVER_NAME'];
        
        $this->yunset('soft', $soft);
        $this->yunset('kongjian', $kongjian);
        $this->yunset('banben', $banben);
        $this->yunset('phpbanben', PHP_VERSION);
        $this->yunset('yonghu', $yonghu);
        $this->yunset('server', $server);
        
        $this->yuntpl(array('admin/admin_right'));
    }

    // 后台首页：会员统计信息：今日新增会员总数、新增个人会员数、新增简历、新增企业、新增职位、
    // 待审核个人会员、企业、职位、简历
    // 后台首页：收益统计：总收益、
    function ajax_statis_action(){

        $UserinfoM	=	$this->MODEL('userinfo'); 
        $ResumeM	=	$this->MODEL('resume');
        $ArticleM	=	$this->MODEL('article');
        $OnceM		=	$this->MODEL('once');
        $JobM		=	$this->MODEL('job');
        $CompanyM	=	$this->MODEL('company');
        $CorderM	=	$this->MODEL('companyorder');
        $AdM		=	$this->MODEL('ad');
        $TinyM		=	$this->MODEL('tiny');
        
        $today	=	strtotime('today');
		$days	=	intval(date('d')) - 1;
        $sdate	=	date('Y-m-d', (time() - $days * 86400));
        $month	=	strtotime($sdate);        
        // 今日新增会员数
        $where['reg_date']	=	array(">=",$today);
        $memberNum			=	$UserinfoM->getMemberNum($where);
        
        $userwhere['reg_date']	=	array(">=",$today);
        $userwhere['usertype']	=	1;
        // 新增个人会员数
        $userNum				=	$UserinfoM->getMemberNum($userwhere);
        
        // 新增企业会员数
        $comwhere['reg_date']	=	array(">=",$today);
        $comwhere['usertype']	=	2;
        $companyNum        		=	$UserinfoM->getMemberNum($comwhere);
        
        $expectwhere['ctime']	=	array(">=",$today);
        $resumeNum        		=	$ResumeM->getExpectNum($expectwhere);

        $jobwhere['sdate']	=	array(">=",$today);
        $jobNum          	=	$JobM->getJobNum($jobwhere);
        
        $checkwhere['status']	=	0;
        $checkwhere['usertype']	=	1;
        $checkUserNum          	=	$UserinfoM->getMemberNum($checkwhere);
       
        $cmwhere['status']		=	0;
        $cmwhere['usertype']	=	2;
        $com                   	=	$UserinfoM->getList($comwhere,array('field'=>'`uid`'));

        foreach ($com as $val) {

            $comuids[] = $val['uid'];
        }
        $cwhere['uid']		=	array('in',pylode(',',$comuids));
        $checkCompanyNum	=	$CompanyM->getCompanyNum($cwhere);

        // *Company End*//
        $orderwhere['order_state']	=	3;
        $checkOrderNum              =	$CorderM->getCompanyOrderNum($orderwhere);

        $ordertime                  =	strtotime('-' . intval(7) . ' day');
        $corderwhere['order_state'] =	1;
        $corderwhere['order_time']  =	array('>',$ordertime);
        $checkPayNum                =	$CorderM->getCompanyOrderNum($corderwhere);
        
        $rewhere['r_status']	=	0;
        $checkResumeNum			=	$ResumeM->getExpectNum($rewhere);
		
        $jnumwhere['state']	=	0;
        $checkJobNum		=	$JobM->getJobNum($jnumwhere);
	
        // 总收益
        $owhere['order_state']	=	2;
        $owhere['order_time']	=	array('>=',$today);
        $owhere['type']	        =	array('<>', 6);
        $moneyTotal	=	$CorderM->getInfo($owhere,array('field'=>'sum(order_price) as `total`'));
        $moneyTotal = $moneyTotal['total'];

        // 增值套餐 收益
      
        $vwhere['order_state']	=	2;
        $vwhere['order_time']	=	array('>=',$today);
        $vwhere['type']			=	1;
        $moneyVip	=	$CorderM->getInfo($vwhere,array('field'=>'sum(order_price) as `total`'));
        $moneyVip	=	$moneyVip['total'];
        
        // 增值服务 收益
        $swhere['order_state']	=	2;
        $swhere['order_time']	=	array('>=',$today);
        $swhere['type']			=	5;
        $moneyService	=	$CorderM->getInfo($swhere,array('field'=>'sum(order_price) as `total`'));
        $moneyService	=	$moneyService['total'];
        
        // 其他收益（除去会员套餐和增值服务，都归为其他收益）
        $Iwhere['order_state']	    =	2;
        $Iwhere['order_time']	    =	array('>=',$today);
        $Iwhere['PHPYUNBTWSTART_A'] =   '';
        $Iwhere['type'][]			=	array('<>', 1, 'AND');
        $Iwhere['type'][]			=	array('<>', 5, 'AND');
        $Iwhere['type'][]			=	array('<>', 6, 'AND');
        $Iwhere['PHPYUNBTWEND_A']   =   '';
        $moneyIntegral	=	$CorderM->getInfo($Iwhere,array('field'=>'sum(order_price) as `total`'));
        $moneyIntegral	=	$moneyIntegral['total'];
        
        

        $mrewhere['ctime']	=	array('>=',$month); 
        $resumeNumMon		=	$ResumeM->getExpectNum($mrewhere);
	
        $mjobwhere['sdate']	=	array('>=',$month);
        $jobNumMon			=	$JobM->getJobNum($mjobwhere);    
        
        $mcomwhere['usertype']	=	2;
        $mcomwhere['reg_date']	=	array('>=',$month);
        $companyNumMon			=	$UserinfoM->getMemberNum($mcomwhere);

        $muserwhere['usertype']	=	1;
        $muserwhere['reg_date']	=	array('>=',$month);
        $userNumMon				=	$UserinfoM->getMemberNum($muserwhere);

        $mnewwhere['datetime']	=	array('>=',$month);
        $newsNumMon				=	$ArticleM->getNum($mnewwhere);   

        $madwhere['addtime']	=	array('>=',$month);
        $ggNumMon				=	$AdM->getAdClickNum($madwhere);

        $moncewhere['ctime']	=	array('>=',$month);
        $onceNumMon				=	$OnceM->getOnceNum($moncewhere);

        $mtiwhere['time']	=	array('>=',$month);
        $tinyNumMon			=	$TinyM->getResumeTinyNum($mtiwhere);
        
        echo json_encode(array(
            'memberNum'                  =>         $memberNum,
            'userNum'                    =>         $userNum,
            'companyNum'                 =>         $companyNum,
            'resumeNum'                  =>         $resumeNum,
            'jobNum'                     =>         $jobNum,
            'checkUserNum'               =>         $checkUserNum,
            'checkCompanyNum'            =>         $checkCompanyNum,
            'checkOrderNum'              =>         $checkOrderNum,
            'checkPayNum'                =>         $checkPayNum,
            'checkResumeNum'             =>         $checkResumeNum,
            'checkJobNum'                =>         $checkJobNum,
            'moneyTotal'                 =>         $moneyTotal,
            'moneyVip'                   =>         $moneyVip,
            'moneyIntegral'              =>         $moneyIntegral,
            'moneyService'               =>         $moneyService,
            'moneyJob'                   =>         $moneyJob,
            'resumeNumMon'               =>         $resumeNumMon,
            'jobNumMon'                  =>         $jobNumMon,
            'companyNumMon'              =>         $companyNumMon,
            'userNumMon'                 =>         $userNumMon,
            'newsNumMon'                 =>         $newsNumMon,
            'ggNumMon'                   =>         $ggNumMon,
            'onceNumMon'                 =>         $onceNumMon,
            'tinyNumMon'                 =>         $tinyNumMon
        ));
        exit();
    }
    
 
    
    function getMostElements($arr){
        $arr		=	array_count_values($arr);
        asort($arr);
        
        $findNum	=	end($arr);

        foreach ($arr as $k => $v) {

            if ($v != $findNum) {

                unset($arr[$k]);
            }
        }
        return array_keys($arr);
    }
    // 时间获取
    function day(){

        if ((int) $_GET['days'] > 0) {

            $days	=	(int) $_GET['days'];
            $sdate	=	date('Y-m-d', (time() - $days * 86400));
            $edate	=	date('Y-m-d');

        } elseif ($_GET['sdate']) {

            $sdate	=	$_GET['sdate'];
            $days	=	ceil(abs(time() - strtotime($sdate)) / 86400);

            if ($_GET['edate']) {

                $edate  =	$_GET['edate'];
                $days	=	ceil(abs(strtotime($edate) - strtotime($sdate)) / 86400);
            }
        } else {
            $days	=	intval(date('d')) - 1;
            $sdate	=	date('Y-m-d', (time() - $days * 86400));
            $edate	=	date('Y-m-d');
        }
        return array('sdate' => $sdate,'days' => $days,'edate' => $edate);
    }
}
?>