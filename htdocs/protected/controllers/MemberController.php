<?php

class MemberController extends Controller
{
	public function actionStoreMembers($p=0,$limit=10,$ownerid,$userid=null,$userid1=null,$username1=null,
	$usersex1=null,$minage=null,$maxage=null,$constellation=null,$homeprovince=null,$homecity=null,
	$workprovince=null,$workcity=null,$workdistrict=null,$worktown=null,
	$marry=null,$lookingfor=null,$education=null,$school=null,$occupation=null,$jobtitle=null,
	$likearea=null,$club=null,$act=null,$order=null,$latitude_reg=null,$longitude_reg=null,$distance = null)
	{
		if(!is_numeric($ownerid)) exit;
		$store = Shop::model()->findByPk($ownerid);
		if(!$store){
			echo CJSON::encode(array('status'=>1, data=>[]));
			exit;
		}

		$condition = "where member.ownerid = $store->id ";
		$orderby = "order by member.certified desc, user.friends desc";

		if(!is_null($distance) && is_numeric($distance) && !is_null($latitude_reg) && !is_null($longitude_reg)){
			$condition = $condition." and ABS(user.latitude_reg - $latitude_reg) < $distance and ABS(user.longitude_reg - $longitude_reg) < $distance";	
		}

		if($userid1){
			if(!is_numeric($userid1)) exit;
			$condition = $condition." and user.userid = $userid1";
		}
		else if($username1){
			$username1 = urldecode(strip_tags($username1));
			$condition = $condition." and user.username like '%".urldecode($username1)."%'";
		}
		else{
			if(!is_null($usersex1)) $condition = $condition." and user.usersex = '".$usersex1."'";
			if(!is_null($minage)) $condition = $condition ." and year(user.userbirthday) <= year(now())-".$minage;
			if(!is_null($maxage)) $condition = $condition ." and year(user.userbirthday) >= year(now())-".$maxage;
			if(!is_null($constellation)) $condition = $condition ." and user.constellation = '".$constellation."'";
			if(!is_null($homeprovince)) $condition = $condition ." and user.homeprovince = '".$homeprovince."'";
			if(!is_null($homecity)) $condition = $condition ." and user.homecity = '".$homecity."'";
			if(!is_null($workprovince)) $condition = $condition ." and user.workprovince = '".$workprovince."'";
			if(!is_null($workcity)) $condition = $condition ." and user.workcity = '".$workcity."'";
			if(!is_null($workdistrict)) $condition = $condition ." and user.workdistrict like '%".$workdistrict."%'";
			if(!is_null($worktown)) $condition = $condition ." and user.worktown like '%".$worktown."%'";
			if(!is_null($marry)) $condition = $condition ." and user.marry = '".$marry."'";
			if(!is_null($lookingfor)) $condition = $condition ." and user.lookingfor = '".$lookingfor."'";
			if(!is_null($education)) $condition = $condition ." and user.education = '".$education."'";
			if(!is_null($school)) $condition = $condition ." and user.school like '%".$school."%'";
			if(!is_null($occupation)) $condition = $condition ." and user.occupation like '%".$occupation."%'";
			if(!is_null($jobtitle)) $condition = $condition ." and user.jobtitle like '%".$jobtitle."%'";
			if(!is_null($likearea)) $condition = $condition ." and user.likearea like '%".$likearea."%'";
			if(!is_null($club)) $condition = $condition ." and user.club like '%".$club."%'";
			if(!is_null($act)) $condition = $condition ." and user.act like '%".$act."%'";
			if(!is_null($order)) $orderby = "order by ".$order." desc,user.friends desc";
			if($order == "joinfirst") $orderby = "order by user.joindate asc,user.friends desc";
			if($order == "joinlast") $orderby = "order by user.joindate desc,user.friends desc";
		}

    	$offset = $p*$limit;
		$sql = "SELECT user.newestmsg,user.avatar,user.userid,user.username,user.usersex,user.userbirthday,user.duty,user.education,user.jobtitle,user.intro,user.marry,user.latitude_reg,user.longitude_reg,member.ownerid,member.certified,member.nickname,member.membername FROM member LEFT JOIN user ON member.userid = user.userid $condition $orderby limit $offset,$limit";
		$members = Yii::app()->db->createCommand($sql)->queryAll();

		$membersql = "select id from member where userid = $userid and ownerid=$store->id"; 
		$member = Yii::app()->db->createCommand($membersql)->queryAll();
		$su=2;
		if($member){
			$su = 1;
		}

		echo CJSON::encode(array('status'=>200,'shop'=>$store,'data'=>$members, 'su'=>$su));
	}		
		
	public function actionStoreMembersAdmin($ownerid=null,$p=0,$limit=10,$userid=null,$userid1=null,$username1=null,
	$usersex1=null,$minage=null,$maxage=null,$constellation=null,$homeprovince=null,$homecity=null,
	$workprovince=null,$workcity=null,$workdistrict=null,$worktown=null,$keywords=null,
	$marry=null,$lookingfor=null,$education=null,$school=null,$occupation=null,$jobtitle=null,
	$likearea=null,$club=null,$act=null,$order=null,$latitude_reg=null,$longitude_reg=null,$distance = null)
	{
		$shop = Shop::model()->findByAttributes(array('userid'=>$userid,'id'=>$ownerid));
		if(!$shop){
			echo CJSON::encode(array('status'=>1, 'data'=>[], 'msg'=>'没有店铺ID'));
			exit;
		}

		$condition = "where member.ownerid = $shop->id ";
		$orderby = "order by member.certified desc, user.friends desc";
		if(!is_null($distance) && is_numeric($distance) && !is_null($latitude_reg) && !is_null($longitude_reg)){
			$condition = $condition." and ABS(user.latitude_reg - $latitude_reg) < $distance and ABS(user.longitude_reg - $longitude_reg) < $distance";	
		}

		if($userid1){
			if(!is_numeric($userid1)) exit;
			$condition = $condition." and user.userid = $userid1";
		}
		else if($username1){
			$username1 = urldecode(strip_tags($username1));
			$condition = $condition." and user.username like '%".$username1."%'";
		}
		else{
			if(!is_null($usersex1)) $condition = $condition." and user.usersex = '".$usersex1."'";
			if(!is_null($minage)) $condition = $condition ." and year(user.userbirthday) <= year(now())-".$minage;
			if(!is_null($maxage)) $condition = $condition ." and year(user.userbirthday) >= year(now())-".$maxage;
			if(!is_null($constellation)) $condition = $condition ." and user.constellation = '".$constellation."'";
			if(!is_null($homeprovince)) $condition = $condition ." and user.homeprovince = '".$homeprovince."'";
			if(!is_null($homecity)) $condition = $condition ." and user.homecity = '".$homecity."'";
			if(!is_null($workprovince)) $condition = $condition ." and user.workprovince = '".$workprovince."'";
			if(!is_null($workcity)) $condition = $condition ." and user.workcity = '".$workcity."'";
			if(!is_null($workdistrict)) $condition = $condition ." and user.workdistrict like '%".$workdistrict."%'";
			if(!is_null($worktown)) $condition = $condition ." and user.worktown like '%".$worktown."%'";
			if(!is_null($marry)) $condition = $condition ." and user.marry = '".$marry."'";
			if(!is_null($lookingfor)) $condition = $condition ." and user.lookingfor = '".$lookingfor."'";
			if(!is_null($education)) $condition = $condition ." and user.education = '".$education."'";
			if(!is_null($school)) $condition = $condition ." and user.school like '%".$school."%'";
			if(!is_null($occupation)) $condition = $condition ." and user.occupation like '%".$occupation."%'";
			if(!is_null($jobtitle)) $condition = $condition ." and user.jobtitle like '%".$jobtitle."%'";
			if(!is_null($likearea)) $condition = $condition ." and user.likearea like '%".$likearea."%'";
			if(!is_null($club)) $condition = $condition ." and user.club like '%".$club."%'";
			if(!is_null($act)) $condition = $condition ." and user.act like '%".$act."%'";
			if(!is_null($order)) $orderby = "order by ".$order." desc,user.friends desc";
			if($order == "joinfirst") $orderby = "order by user.joindate asc,user.friends desc";
			if($order == "joinlast") $orderby = "order by user.joindate desc,user.friends desc";
		}

    	$offset = $p*$limit;
		$sql = "SELECT user.avatar,user.userid,user.username,user.usersex,user.userbirthday,user.duty,user.education,user.jobtitle,user.marry,user.latitude_reg,user.longitude_reg,member.ownerid,member.intro,member.certified,member.paycertified,member.nickname,member.membername,member.total_money,member.left_money,member.consume_money,member.id,member.join_time FROM member LEFT JOIN user ON member.userid = user.userid $condition $orderby limit $offset,$limit";
		$members = Yii::app()->db->createCommand($sql)->queryAll();

		echo CJSON::encode(array('status'=>200,'shop'=>$shop,'data'=>$members));
	}

	public function actionJoinStoreList($ownerid=null,$p=0,$limit=10,$userid=null,$userid1=null,$username1=null,
	$usersex1=null,$minage=null,$maxage=null,$constellation=null,$homeprovince=null,$homecity=null,
	$workprovince=null,$workcity=null,$workdistrict=null,$worktown=null,
	$marry=null,$lookingfor=null,$education=null,$school=null,$occupation=null,$jobtitle=null,
	$likearea=null,$club=null,$act=null,$order=null,$latitude_reg=null,$longitude_reg=null,$distance = null)
	{
		if(is_null($userid) || empty($userid)) return false;
		$myid = $userid;
		$shop = Shop::model()->findByAttributes(array('userid'=>$myid,'id'=>$ownerid));
		if(!$shop){
			echo CJSON::encode(array('status'=>1, 'msg'=>'没找到属主', data=>[]));
			exit;
		}
		if($shop->typeid == 2){
			$owner = Shop::model()->findByAttributes(array('id'=>$shop->ownerid));
			if(!$owner){
				echo CJSON::encode(array('status'=>1, 'msg'=>'没找到社团所在店家', data=>[]));
				exit;
			}
		}

		$condition = "";
		$orderby = "order by user.certified desc, user.friends desc";

		if(is_numeric($distance) && !is_null($latitude_reg) && !is_null($longitude_reg)){
			$condition = $condition." and ABS(user.latitude_reg - $latitude_reg) < $distance and ABS(user.longitude_reg - $longitude_reg) < $distance";	
		}

		if($userid1){
			if(!is_numeric($userid1)) exit;
			$condition = $condition." and user.userid = $userid1";
		}
		else if($username1){
			$username1 = urldecode(strip_tags($username1));
			$condition = $condition." and user.username like '%".$username1."%'";
		}
		else{
			if(!is_null($usersex1)){
				if($usersex1 == 1) $condition = $condition." and user.usersex = '1'";
				else  $condition = $condition." and user.usersex != '1'";
			}
			if(!is_null($minage)) $condition = $condition ." and year(user.userbirthday) <= year(now())-".$minage;
			if(!is_null($maxage)) $condition = $condition ." and year(user.userbirthday) >= year(now())-".$maxage;
			if(!is_null($constellation)) $condition = $condition ." and user.constellation = '".$constellation."'";
			if(!is_null($homeprovince)) $condition = $condition ." and user.homeprovince = '".$homeprovince."'";
			if(!is_null($homecity)) $condition = $condition ." and user.homecity = '".$homecity."'";
			if(!is_null($workprovince)) $condition = $condition ." and user.workprovince = '".$workprovince."'";
			if(!is_null($workcity)) $condition = $condition ." and user.workcity = '".$workcity."'";
			if(!is_null($workdistrict)) $condition = $condition ." and user.workdistrict like '%".$workdistrict."%'";
			if(!is_null($worktown)) $condition = $condition ." and user.worktown like '%".$worktown."%'";
			if(!is_null($marry)) $condition = $condition ." and user.marry = '".$marry."'";
			if(!is_null($lookingfor)) $condition = $condition ." and user.lookingfor = '".$lookingfor."'";
			if(!is_null($education)) $condition = $condition ." and user.education = '".$education."'";
			if(!is_null($school)) $condition = $condition ." and user.school like '%".$school."%'";
			if(!is_null($occupation)) $condition = $condition ." and user.occupation like '%".$occupation."%'";
			if(!is_null($jobtitle)) $condition = $condition ." and user.jobtitle like '%".$jobtitle."%'";
			if(!is_null($likearea)) $condition = $condition ." and user.likearea like '%".$likearea."%'";
			if(!is_null($club)) $condition = $condition ." and user.club like '%".$club."%'";
			if(!is_null($act)) $condition = $condition ." and user.act like '%".$act."%'";
			if(!is_null($order)) $orderby = "order by ".$order." desc,user.friends desc";
			if($order == "joinfirst") $orderby = "order by user.joindate asc,user.friends desc";
			if($order == "joinlast") $orderby = "order by user.joindate desc,user.friends desc";
		}		
		$offset = $p*$limit;

		$sql = "SELECT newestmsg,userid,username,usersex,userbirthday,education,jobtitle,duty,marry,intro,lookingfor,workprovince,workcity,workdistrict,worktown,workstreet,latitude_reg,longitude_reg,latitude_login,longitude_login,friend_amount,join_amount
				FROM user
				WHERE userid NOT IN (select userid from member where ownerid = $shop->id) $condition
				$orderby
				LIMIT $limit
				OFFSET $offset";
		if($shop->typeid == 2){
			$sql = "SELECT user.newestmsg,user.userid,user.username,user.usersex,user.userbirthday,user.education,user.jobtitle,user.duty,user.marry,user.intro,user.lookingfor,user.workprovince,user.workcity,user.workdistrict,user.worktown,user.workstreet,user.latitude_reg,user.longitude_reg,user.latitude_login,user.longitude_login,user.friend_amount,user.join_amount
					FROM user left join member
					ON member.userid = user.userid
					WHERE member.ownerid = $owner->id and user.userid NOT IN (select member.userid from member where member.ownerid = $shop->id) $condition
					$orderby
					LIMIT $limit
					OFFSET $offset";			
		}		
		$users = Yii::app()->db->createCommand($sql)->queryAll();
		echo CJSON::encode(array('status'=>200,'data'=>$users,'shop'=>$shop));
	}

	public function actionIsMember($shopid,$userid)
	{
		if(!is_numeric($shopid)) exit;
		$store = Shop::model()->findByPk($shopid);
		if(!$store){
			echo CJSON::encode(array('status'=>1));
			exit;
		}

		$membersql = "select id,certified from member where userid = $userid and ownerid=$store->id"; 
		$member = Yii::app()->db->createCommand($membersql)->queryRow();
		if(!$member){
			echo CJSON::encode(array('status'=>1, 'message'=>'您不是该组织成员', 'su'=>2));
			exit;
		}

		if($store->typeid != "2"){
			echo CJSON::encode(array('status'=>1, 'message'=>'只有社团组织成员才能发布文章', 'su'=>2));
			exit;
		}

		if($member["certified"] < $store->post_cert){
			$cn = new stdClass();
			$cert_name = $store->cert_name?CJSON::decode($store->cert_name):$cn;
			$user_cert = $cert_name[$member["certified"]];
			$post_cert = $cert_name[$store->post_cert];
			$msg = '该组织成员发文权限为'.$store->post_cert.'级'.$post_cert.'，您的成员级别为'.$member["certified"].'级'.$user_cert.'，您没有在该组织发文的权限，请尽快和管理员联系！';
			echo CJSON::encode(array('status'=>1, 'message'=>$msg, 'su'=>3));
			exit;
		}

		echo CJSON::encode(array('status'=>200, 'su'=>1));
	}		

	public function actionJoinStoreFromUsers($userid='',$userid1='',$ownerid=null)
	{
		if(empty($userid)) return false;
		if(!is_numeric($userid)) return false;

		if(empty($userid1)) return false;
		if(!is_numeric($userid1)) return false;

		if(!is_numeric($ownerid)){
			echo CJSON::encode(array('status'=>1, 'result'=>0, 'message'=>'没有属主ID！'));
			exit;
		}
		$shop = Shop::model()->findByAttributes(array('userid'=>$userid,'id'=>$ownerid));
		if(!$shop){
			echo CJSON::encode(array('status'=>1, 'result'=>0, 'message'=>'不是您的店铺！'));
			exit;
		}

		$su = Member::model()->findByAttributes(array("userid"=>$userid1,"ownerid"=>$shop->id));
		if($su){
			echo CJSON::encode(array('status'=>1, 'result'=>0, 'message'=>'该会员已经是您店铺群员！'));
			exit;
		}

		$me = User::model()->findByPk($userid);
		$user = User::model()->findByPk($userid1);
		if($me->balance < $user->join_amount){
			echo CJSON::encode(array('stautsCode'=>1, 'status'=>200, 'result'=>0, 'message'=>'余额不足以支付对方的加群费用！'));
			exit;
		}

		$model = new Member;
		$model->ownerid = $shop->id;
		$model->userid = $userid1;
		$model->join_time = date('Y-m-d');

		if($model->save()){
			$shop->today++;
			if($shop->updatedate != date('Y-m-d')){
				$shop->yesterday = $shop->today;
				$shop->today = 1;
				$shop->updatedate = date('Y-m-d');
			}
			$shop->save();

			if($user->join_amount > 0){
				$me->balance = $me->balance - $user->join_amount;
				if($me->save()){
					$join_amount = $user->join_amount;
					$user_join_amount = $join_amount * 0.70;
					$user->ref_income = $user->ref_income + $user_join_amount;
					$user->balance = $user->balance + $user_join_amount;

					if($user->save()){

						$ref1 = User::model()->findByPk($user->ref_userid);
						$ref2 = User::model()->findByPk($ref1->ref_userid);
						
						$ref1_join_amount = $join_amount * 0.20;
						$ref1->ref_income = $ref1->ref_income + $ref1_join_amount;
						$ref1->balance = $ref1->balance + $ref1_join_amount;

						$ref2_join_amount = $join_amount * 0.05;
						$ref2->ref_income = $ref2->ref_income + $ref2_join_amount;
						$ref2->balance = $ref2->balance + $ref2_join_amount;

						$ref1->save();
						$ref2->save();

						$cashlog = new Cashlog();
						$cashlog->amount = $user->join_amount;

						$cashlog->userid = $user->userid;
						$cashlog->username = $user->username;
						$cashlog->user_amount = $user_join_amount;

						$cashlog->ref1_userid = $ref1->userid;
						$cashlog->ref1_username = $ref1->username;
						$cashlog->ref1_amount = $ref1_join_amount;

						$cashlog->ref2_userid = $ref2->userid;
						$cashlog->ref2_username = $ref2->username;
						$cashlog->ref2_amount = $ref2_join_amount;

						$cashlog->rate = "100%";
						$cashlog->depth = 0;
						$cashlog->pay_type = "被拉群";
						$cashlog->payer_userid = $me->userid;
						$cashlog->payer_username = $me->username;
						$cashlog->orderid = '';
						$cashlog->save();

						echo CJSON::encode(array('stautsCode'=>1,'status'=>200, 'result'=>1, 'message'=>"添加群员并扣款支付成功，您的账户余额为 $me->balance 元！"));		
						exit;				
					}
					echo CJSON::encode(array('stautsCode'=>1,'status'=>200, 'result'=>1, 'message'=>"添加群员并扣款成功，您的账户余额为 $me->balance 元！"));		
					exit;
				}
			}
			echo CJSON::encode(array('status'=>200, 'result'=>1, 'message'=>'添加群员成功！'));
			exit;
		}

		echo CJSON::encode(array('status'=>1, 'result'=>0, 'message'=>'添加会员失败！'));
	}

	public function actionJoinStore($ownerid=null,$userid)
	{
		if(!is_numeric($ownerid)) exit;
		if(!$ownerid){
			echo CJSON::encode(array('status'=>200, 'message'=>'没有指定店家ID！', 'result'=>0));
			exit;
		}

		if(!isset($userid)) exit;

		$criteria = new CDbCriteria();
		$condition = "ownerid = $ownerid and userid = $userid";
		$criteria->condition = $condition;
		$member = Member::model()->find($criteria);
		if($member){
			echo CJSON::encode(array('status'=>200, 'message'=>'已经是该店家会员！', 'result'=>1));
			exit;
		}
		$member = new Member();
		$member->ownerid = $ownerid;
		$member->userid = $userid;
		if($member->save()){
			$owner = Shop::model()->findByPk($ownerid);
			$owner->today++;
			if($owner->updatedate != date('Y-m-d')){
				$owner->yesterday = $owner->today;
				$owner->today = 1;
				$owner->updatedate = date('Y-m-d');
			}
			$owner->save();
			echo CJSON::encode(array('status'=>200, 'message'=>'加入店家成功！', 'su'=>1, 'result'=>3));
			exit;
		}
		echo CJSON::encode(array('status'=>200, 'message'=>'加入失败！', 'su'=>2, 'result'=>1));
	}

	public function actionLeaveStore($userid)
	{
		$ownerid = $_POST['ownerid'];
		if(!is_numeric($ownerid)) exit;

		if(empty($ownerid))
		{
			echo CJSON::encode(array('status'=>200, 'message'=>'没有指定店家ID！', 'result'=>1));
			exit;
		}
		
		$member = Member::model()->findByAttributes(array("ownerid"=>$ownerid,"userid"=>$userid));
		if(!$member){
			echo CJSON::encode(array('status'=>200, 'message'=>'不是该店家会员！', 'result'=>2));
			exit;
		}
		if($member->delete()){
			echo CJSON::encode(array('status'=>200, 'message'=>'退出店家成功！', 'su'=>2, 'result'=>3));
			exit;
		}
		echo CJSON::encode(array('status'=>200, 'message'=>'退出失败！', 'result'=>0));
		exit;
	}

	public function actionDeleteFromStore($userid,$userid1,$ownerid)
	{
		if(empty($userid1))
		{
			echo CJSON::encode(array('status'=>200, 'message'=>'没有指定会员ID！', 'result'=>1));
			exit;
		}
		if(!is_numeric($userid1)) exit;		

		if(empty($ownerid))
		{
			echo CJSON::encode(array('status'=>200, 'message'=>'没有指定店家ID！', 'result'=>1));
			exit;
		}
		if(!is_numeric($ownerid)) exit;		

		$owner = Shop::model()->findByAttributes(['id'=>$ownerid,'userid'=>$userid]);
		if(empty($owner))
		{
			echo CJSON::encode(array('status'=>200, 'message'=>'该ID不是您的门店！', 'result'=>1));
			exit;
		}

		$member = Member::model()->findByAttributes(array("ownerid"=>$ownerid,"userid"=>$userid1));
		if(!$member){
			echo CJSON::encode(array('status'=>200, 'message'=>'不是该店家会员！', 'result'=>2));
			exit;
		}
		if($member->delete()){
			echo CJSON::encode(array('status'=>200, 'message'=>'退出店家成功！', 'su'=>2, 'result'=>3));
			exit;
		}
		echo CJSON::encode(array('status'=>200, 'message'=>'退出失败！', 'result'=>0));
		exit;
	}

	public function actionAdminUserLeftMoney($id=null,$ownerid=null,$userid)
	{
		if(empty($id)||!is_numeric($id)){
			echo CJSON::encode(array('status'=>1, "result"=>'0', 'msg'=>'没有指定会员ID'));
			exit;
		}
		if(empty($ownerid)||!is_numeric($ownerid)){
			echo CJSON::encode(array('status'=>1, "result"=>'0', 'msg'=>'没有指定店家ID'));
			exit;
		}
		if(!isset($_POST['left_money'])||!is_numeric($_POST['left_money'])){
			echo CJSON::encode(array('status'=>1, "result"=>'0', 'msg'=>'请只填数字！'));
			exit;
		}
		
		if(!is_numeric($userid)){
			echo CJSON::encode(array('status'=>1, "result"=>'0', 'msg'=>'非法登录'));
			exit;
		}

		$shop = Shop::model()->findByPk($ownerid);
		if(!$shop){
			echo CJSON::encode(array("status"=>2, "result"=>'0', "message"=>"找不到该店家！"));
			exit;
		}
				
		if($shop->userid != $userid){
			echo CJSON::encode(array("status"=>2, "result"=>'0', "message"=>"您不是该店家管理员！"));
			exit;
		}
		$member = Member::model()->findByAttributes(array("userid"=>$id,"ownerid"=>$ownerid));
		if(!$member){
			echo CJSON::encode(array("status"=>2, "result"=>'0', "message"=>"找不到该会员！"));
			exit;
		}

		if(isset($_POST['left_money']))
		{
			$left_money = $member->left_money + $_POST['left_money'];
			$member->left_money = $left_money;
			$total_money = $member->total_money + $_POST['left_money'];
			$member->total_money = $total_money;
			$consume_money = $member->consume_money + $_POST['left_money'];
			$member->consume_money = $consume_money;

 			$pcert = 0;		
 			$spcm = json_decode($shop->pay_cert_name);
 			foreach($spcm as $key=>$val){
 	 			if(!isset($val[2])){
					echo CJSON::encode(array("status"=>2, "result"=>'0', "message"=>"请先正确设置店家会员优惠制度！"));
					exit;
 	  			}
 	  			if($consume_money >= $val[2]) $pcert = $key;
 			}
 			if($pcert > $member->paycertified) $member->paycertified = $pcert;

			if($member->save()){
				echo CJSON::encode(array("status"=>200, "result"=>'2', "message"=>"会员充值成功！", "user"=>$member));
				exit;
			}
			echo CJSON::encode(array("status"=>1, "result"=>'0', "message"=>"会员充值失败！"));
			exit;
		}
		
		echo CJSON::encode(array("status"=>1, "result"=>'0', "message"=>"没有选择会员！"));
	}

	public function actionAdminUserNickname($id=null,$ownerid=null,$userid)
	{
		if(empty($id)||!is_numeric($id)){
			echo CJSON::encode(array('status'=>1, "result"=>'0', 'msg'=>'没有指定会员ID'));
			exit;
		}
		if(empty($ownerid)||!is_numeric($ownerid)){
			echo CJSON::encode(array('status'=>1, "result"=>'0', 'msg'=>'没有指定店家ID'));
			exit;
		}
		if(!isset($_POST['nickname'])){
			echo CJSON::encode(array('status'=>1, "result"=>'0', 'msg'=>'不能为空！'));
			exit;
		}
		
		if(!is_numeric($userid)){
			echo CJSON::encode(array('status'=>1, "result"=>'0', 'msg'=>'非法登录'));
			exit;
		}

		$shop = Shop::model()->findByPk($ownerid);
		if(!$shop){
			echo CJSON::encode(array("status"=>2, "result"=>'0', "message"=>"找不到该店家！"));
			exit;
		}
				
		if($shop->userid != $userid){
			echo CJSON::encode(array("status"=>2, "result"=>'0', "message"=>"您不是该店家管理员！"));
			exit;
		}
		$member = Member::model()->findByAttributes(array("userid"=>$id,"ownerid"=>$ownerid));
		if(!$member){
			echo CJSON::encode(array("status"=>2, "result"=>'0', "message"=>"找不到该会员！"));
			exit;
		}

		if(isset($_POST['nickname']))
		{
			$member->nickname = $_POST['nickname'];

			if($member->save()){
				echo CJSON::encode(array("status"=>200, "result"=>'2', "message"=>"会员修改成功！", "user"=>$member));
				exit;
			}
			echo CJSON::encode(array("status"=>1, "result"=>'0', "message"=>"会员修改失败！"));
			exit;
		}
		
		echo CJSON::encode(array("status"=>1, "result"=>'0', "message"=>"没有选择会员！"));
	}

	public function actionAdminUserIntro($id=null,$ownerid=null,$userid)
	{
		if(empty($id)||!is_numeric($id)){
			echo CJSON::encode(array('status'=>1, "result"=>'0', 'msg'=>'没有指定会员ID'));
			exit;
		}
		if(empty($ownerid)||!is_numeric($ownerid)){
			echo CJSON::encode(array('status'=>1, "result"=>'0', 'msg'=>'没有指定店家ID'));
			exit;
		}
		if(!isset($_POST['intro'])){
			echo CJSON::encode(array('status'=>1, "result"=>'0', 'msg'=>'不能为空！'));
			exit;
		}
		
		if(!is_numeric($userid)){
			echo CJSON::encode(array('status'=>1, "result"=>'0', 'msg'=>'非法登录'));
			exit;
		}

		$shop = Shop::model()->findByPk($ownerid);
		if(!$shop){
			echo CJSON::encode(array("status"=>2, "result"=>'0', "message"=>"找不到该店家！"));
			exit;
		}
				
		if($shop->userid != $userid){
			echo CJSON::encode(array("status"=>2, "result"=>'0', "message"=>"您不是该店家管理员！"));
			exit;
		}
		$member = Member::model()->findByAttributes(array("userid"=>$id,"ownerid"=>$ownerid));
		if(!$member){
			echo CJSON::encode(array("status"=>2, "result"=>'0', "message"=>"找不到该会员！"));
			exit;
		}

		if(isset($_POST['intro']))
		{
			$member->intro = $_POST['intro'];

			if($member->save()){
				echo CJSON::encode(array("status"=>200, "result"=>'2', "message"=>"会员修改成功！", "user"=>$member));
				exit;
			}
			echo CJSON::encode(array("status"=>1, "result"=>'0', "message"=>"会员修改失败！"));
			exit;
		}
		
		echo CJSON::encode(array("status"=>1, "result"=>'0', "message"=>"没有选择会员！"));
	}

	public function actionAdminUserPaycertified($id=null,$ownerid=null,$userid)
	{
		if(empty($id)||!is_numeric($id)){
			echo CJSON::encode(array('status'=>1, "result"=>'0', 'msg'=>'没有指定会员ID'));
			exit;
		}
		if(empty($ownerid)||!is_numeric($ownerid)){
			echo CJSON::encode(array('status'=>1, "result"=>'0', 'msg'=>'没有指定店家ID'));
			exit;
		}
		if(!isset($_POST['paycertified'])){
			echo CJSON::encode(array('status'=>1, "result"=>'0', 'msg'=>'不能为空！'));
			exit;
		}
		
		if(!is_numeric($userid)){
			echo CJSON::encode(array('status'=>1, "result"=>'0', 'msg'=>'非法登录'));
			exit;
		}

		$shop = Shop::model()->findByPk($ownerid);
		if(!$shop){
			echo CJSON::encode(array("status"=>2, "result"=>'0', "message"=>"找不到该店家！"));
			exit;
		}
				
		if($shop->userid != $userid){
			echo CJSON::encode(array("status"=>2, "result"=>'0', "message"=>"您不是该店家管理员！"));
			exit;
		}
		$member = Member::model()->findByAttributes(array("userid"=>$id,"ownerid"=>$ownerid));
		if(!$member){
			echo CJSON::encode(array("status"=>2, "result"=>'0', "message"=>"找不到该会员！"));
			exit;
		}

		if(isset($_POST['paycertified']))
		{
			$member->paycertified = $_POST['paycertified'];

			if($member->save()){
				echo CJSON::encode(array("status"=>200, "result"=>'2', "message"=>"会员修改成功！", "user"=>$member));
				exit;
			}
			echo CJSON::encode(array("status"=>1, "result"=>'0', "message"=>"会员修改失败！"));
			exit;
		}
		
		echo CJSON::encode(array("status"=>1, "result"=>'0', "message"=>"没有选择会员！"));
	}

	public function actionAdminUserCertified($id=null,$ownerid=null,$userid)
	{
		if(empty($id)||!is_numeric($id)){
			echo CJSON::encode(array('status'=>1, "result"=>'0', 'msg'=>'没有指定会员ID'));
			exit;
		}
		if(empty($ownerid)||!is_numeric($ownerid)){
			echo CJSON::encode(array('status'=>1, "result"=>'0', 'msg'=>'没有指定店家ID'));
			exit;
		}
		if(!isset($_POST['certified'])){
			echo CJSON::encode(array('status'=>1, "result"=>'0', 'msg'=>'不能为空！'));
			exit;
		}
		
		if(!is_numeric($userid)){
			echo CJSON::encode(array('status'=>1, "result"=>'0', 'msg'=>'非法登录'));
			exit;
		}

		$shop = Shop::model()->findByPk($ownerid);
		if(!$shop){
			echo CJSON::encode(array("status"=>2, "result"=>'0', "message"=>"找不到该店家！"));
			exit;
		}
				
		if($shop->userid != $userid){
			echo CJSON::encode(array("status"=>2, "result"=>'0', "message"=>"您不是该店家管理员！"));
			exit;
		}
		$member = Member::model()->findByAttributes(array("userid"=>$id,"ownerid"=>$ownerid));
		if(!$member){
			echo CJSON::encode(array("status"=>2, "result"=>'0', "message"=>"找不到该会员！"));
			exit;
		}

		if(isset($_POST['certified']))
		{
			$member->certified = $_POST['certified'];

			if($member->save()){
				echo CJSON::encode(array("status"=>200, "result"=>'2', "message"=>"群员级别修改成功！", "user"=>$member));
				exit;
			}
			echo CJSON::encode(array("status"=>1, "result"=>'0', "message"=>"群员级别修改失败！"));
			exit;
		}
		
		echo CJSON::encode(array("status"=>1, "result"=>'0', "message"=>"没有选择会员！"));
	}

	public function actionAdminUserPayprice($id=null,$ownerid=null,$userid)
	{
		if(empty($id)||!is_numeric($id)){
			echo CJSON::encode(array('status'=>1, "result"=>'0', 'msg'=>'没有指定会员ID'));
			exit;
		}
		if(empty($ownerid)||!is_numeric($ownerid)){
			echo CJSON::encode(array('status'=>1, "result"=>'0', 'msg'=>'没有指定店家ID'));
			exit;
		}
		if(!isset($_POST['offPrice'])){
			echo CJSON::encode(array('status'=>1, "result"=>'0', 'msg'=>'不能为空！'));
			exit;
		}
		
		if(!is_numeric($userid)){
			echo CJSON::encode(array('status'=>1, "result"=>'0', 'msg'=>'非法登录'));
			exit;
		}

		$shop = Shop::model()->findByPk($ownerid);
		if(!$shop){
			echo CJSON::encode(array("status"=>2, "result"=>'0', "message"=>"找不到该店家！"));
			exit;
		}
				
		if($shop->userid != $userid){
			echo CJSON::encode(array("status"=>2, "result"=>'0', "message"=>"您不是该店家管理员！"));
			exit;
		}
		$member = Member::model()->findByAttributes(array("userid"=>$id,"ownerid"=>$ownerid));
		if(!$member){
			echo CJSON::encode(array("status"=>2, "result"=>'0', "message"=>"找不到该会员！"));
			exit;
		}

		if(isset($_POST['offPrice']))
		{
			$payPrice = $_POST['payPrice'];
			$offPrice = $_POST['offPrice'];
			$payoff = $_POST['payoff'];
			$leftMoney = $member->left_money;
			$left_money = $leftMoney - $offPrice;
			if($left_money < 0){
				echo CJSON::encode(array("status"=>2, "result"=>0, "message"=>"该会员余额不足！"));
				exit;
			}

			$member->left_money = $left_money;
			$member->consume_money = $member->consume_money + $offPrice;
			if($member->save()){
				$msg = "添加记录成功！";
				$member_id = $member->id;
				$shop_name = $shop->name;
				$sex = $member->usersex;
				$userid = $member->userid;

				//新增付款记录并为“已付款”
				// $orderInsertSql = "insert into `order` (`id`, `order_content`, `order_store_id`, `order_store_name`, 
				// `order_status`, `order_price`, `off_price`, `payoff`, `certified`, `order_table`, `createdate`, `updatedate`,
				//  `time_code`, `appid`, `attach`, `bank_type`, `cash_fee`, `cash_fee_new`, `fee_type`, `is_subscribe`, `mch_id`, 
				//  `nonce_str`, `userid`, `out_trade_no`, `result_code`, `return_code`, `sign`, `time_end`, `total_fee`, `trade_type`,
				//   `transaction_id`, `nickname`,`sex`,`headimgurl`) values 
				// (NULL, '会员余额支付', '$ownerid', '$shop_name', '待确认', '$payPrice', '$offPrice', '$payoff', '0', '0', 
				// CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, '0', '', '会员消费', '', '', '', '', '', '', '', '$userid', '', '', 
				// '', '', '', '', '', '', '$nickname', '$sex', '');";
				// $orderInsert = Yii::app()->db->createCommand($orderInsertSql)->execute();
				// if(empty($orderInsert)) {
				// 	$msg = "扣款记录未成功，请及时通知会员及平台！";
				// }
				
				// $order = new Order();
				// $order->content = '会员余额支付';
				// $order->ownerid = $ownerid;
				// $order->ownername = $shopname;
				// $order->status = '待确认';
				// $order->price = $payPrice;
				// $order->off_price = $offPrice;
				// $order->payoff = $payoff;
				// $order->userid = $userid1;
				// $order->username = $username1;

				$ordersql = "SELECT * FROM orders where userid = '$userid' and ownerid = '$ownerid' ORDER BY id desc limit 5";
				$orders = Yii::app()->db->createCommand($ordersql)->queryAll();
				echo CJSON::encode(array("status"=>200, 'result'=>1, 'user'=>$member, "message"=>$msg, "orders"=>$orders));
				exit;
			}
		}
		echo CJSON::encode(array("status"=>1, "result"=>'0', "message"=>"会员支付不成功！"));
	}

	public function actionJoinedRooms($userid='')
	{
		if(empty($userid)){
			echo CJSON::encode(array('status'=>1,'errMessage'=>'您没有登录！'));
			exit;
		} 
		$shopsql = "select shop.typeid,shop.id from member left join shop on member.ownerid = shop.id where member.userid = $userid";
		$shops = Yii::app()->db->createCommand($shopsql)->queryAll();
		if($shops){
			echo CJSON::encode(array('status'=>200, 'shops'=>$shops));
			exit;
		}
		echo CJSON::encode(array('status'=>2));
	}		
}
