<?php
class UserController extends Controller
{
	public function actionlist($p=0,$limit=10,$userid=null,$userid1=null,$username1=null,
		$usersex1=null,$minage=null,$maxage=null,$constellation=null,$homeprovince=null,$homecity=null,
		$workprovince=null,$workcity=null,$workdistrict=null,$worktown=null,
		$marry=null,$lookingfor=null,$education=null,$school=null,$occupation=null,$jobtitle=null,
		$likearea=null,$club=null,$act=null,$order=null,$latitude_reg=null,$longitude_reg=null,$distance = null)
	{
		$condition = "userid > 2 and intro != '' ";
		$orderby = "order by friends desc";

		if(!is_null($distance) && is_numeric($distance) && !is_null($latitude_reg) && $latitude_reg != "undefined" && !is_null($longitude_reg) && $longitude_reg != "undefined" ){
			$condition = $condition." and ABS(latitude_reg - $latitude_reg) < $distance and ABS(longitude_reg - $longitude_reg) < $distance";	
		}

		if($userid1){
			if(!is_numeric($userid1)) exit;
			$condition = "userid = $userid1";
		}
		else if($username1){
			$username1 = strip_tags($username1);
			$condition = "username like '%".urldecode($username1)."%'";
		}
		else{
			if(!is_null($usersex1)){
				if($usersex1 == 1) $condition = $condition." and usersex = '1'";
				else $condition = $condition." and usersex != '1'";
			}
			if(!is_null($minage)) $condition = $condition ." and year(userbirthday) <= year(now())-".$minage;
			if(!is_null($maxage)) $condition = $condition ." and year(userbirthday) >= year(now())-".$maxage;
			if(!is_null($constellation)) $condition = $condition ." and constellation = '".urldecode($constellation)."'";
			if(!is_null($homeprovince)) $condition = $condition ." and homeprovince = '".urldecode($homeprovince)."'";
			if(!is_null($homecity)) $condition = $condition ." and homecity = '".urldecode($homecity)."'";
			if(!is_null($workprovince)) $condition = $condition ." and workprovince = '".urldecode($workprovince)."'";
			if(!is_null($workcity)) $condition = $condition ." and workcity = '".urldecode($workcity)."'";
			if(!is_null($workdistrict)) $condition = $condition ." and workdistrict like '%".urldecode($workdistrict)."%'";
			if(!is_null($worktown)) $condition = $condition ." and worktown like '%".urldecode($worktown)."%'";
			if(!is_null($marry)) $condition = $condition ." and marry = '".urldecode($marry)."'";
			if(!is_null($lookingfor)) $condition = $condition ." and lookingfor = '".urldecode($lookingfor)."'";
			if(!is_null($education)) $condition = $condition ." and education = '".urldecode($education)."'";
			if(!is_null($school)) $condition = $condition ." and school like '%".urldecode($school)."%'";
			if(!is_null($occupation)) $condition = $condition ." and occupation like '%".urldecode($occupation)."%'";
			if(!is_null($jobtitle)) $condition = $condition ." and jobtitle like '%".urldecode($jobtitle)."%'";
			if(!is_null($likearea)) $condition = $condition ." and likearea like '%".urldecode($likearea)."%'";
			if(!is_null($club)) $condition = $condition ." and club like '%".urldecode($club)."%'";
			if(!is_null($act)) $condition = $condition ." and act like '%".urldecode($act)."%'";

			if(!is_null($order)) $orderby = "order by ".$order." desc,friends desc";
			if($order == "joinfirst") $orderby = "order by joindate asc,friends desc";
			if($order == "joinlast") $orderby = "order by joindate desc,friends desc";
		}

		$offset = $p*$limit;
		$sql = "select userid,username,usersex,userbirthday,education,jobtitle,duty,marry,intro,lookingfor,workprovince,workcity,workdistrict,worktown,workstreet,latitude_reg,longitude_reg,latitude_login,longitude_login,friend_amount from user where $condition $orderby limit $offset,$limit";
		$dataProvider = Yii::app()->db->createCommand($sql)->queryAll();

		echo CJSON::encode(array('status'=>200,'data'=>$dataProvider));
	}

	public function actionlistAdmin($p=0,$limit=10,$distance=null,$username1=null,$userid=null,$userid1=null,
		$usersex1=null,$minage=null,$maxage=null,$constellation=null,$homeprovince=null,$homecity=null,
		$workprovince=null,$workcity=null,$workdistrict=null,$worktown=null,
		$marry=null,$lookingfor=null,$education=null,$school=null,$order=null)
	{
		if($userid != 1638) return false;
		$condition = "userid > 2 and intro != '' ";
		$orderby = "order by friends desc";

		if(!is_null($distance) && is_numeric($distance) && !is_null($latitude_reg) && $latitude_reg != "undefined" && !is_null($longitude_reg) && $longitude_reg != "undefined" ){
			$condition = $condition." and ABS(latitude_reg - $latitude_reg) < $distance and ABS(longitude_reg - $longitude_reg) < $distance";	
		}

		if($userid1){
			if(!is_numeric($userid1)) exit;
			$condition = "userid = $userid1";
		}
		else if($username1){
			$username1 = strip_tags($username1);
			$condition = "username like '%".urldecode($username1)."%'";
		}

		$offset = $p*$limit;
		$sql = "select userid,username,usersex,userbirthday,education,jobtitle,duty,marry,intro,lookingfor,workprovince,workcity,workdistrict,worktown,workstreet,latitude_reg,longitude_reg,latitude_login,longitude_login,friend_amount from user where $condition $orderby limit $offset,$limit";
		$dataProvider = Yii::app()->db->createCommand($sql)->queryAll();

		$psql = "SELECT * FROM S_Province ORDER BY ProvinceID asc";
		$provinces = Yii::app()->db->createCommand($psql)->queryAll();

		echo CJSON::encode(array('status'=>200,'data'=>$dataProvider,'provinces'=>$provinces));
	}

	public function actionMain($id,$userid)
	{
		if(!is_numeric($id)) exit;
		$user = $this->loadModel($id);
		$data["userid"] = $user->userid;
		$data["username"] = $user->username;
		$data["usersex"] = $user->usersex;

		$userid1 = $user->userid;

		$photoSql = "select * from photo where ownerid = $userid1 order by id asc limit 0,6";
		$photos = Yii::app()->db->createCommand($photoSql)->queryAll();		

		$actSql = "select enroll.id as enrollid,enroll.userid as enrolluserid,shop.* from enroll left join shop on enroll.ownerid = shop.id where shop.name != 'null' and shop.act_title != '' and enroll.userid = $userid1 order by shop.act_date desc";
		$acts = Yii::app()->db->createCommand($actSql)->queryAll(); 
		$memberSql = "select member.userid,shop.id,shop.name,shop.typeid,shop.promote_title,shop.clubs,shop.province,shop.city,shop.district,shop.town,shop.building,shop.latitude,shop.longitude from member left join shop on member.ownerid = shop.id where shop.name != 'null' and member.userid = $userid1 order by shop.id desc";
		$shops = Yii::app()->db->createCommand($memberSql)->queryAll();

		$friendRetweetSql = "select user.userid,user.username,user.usersex,user.intro,user.education,user.marry,user.lookingfor,user.friend_amount,user.workprovince,user.workcity,user.workdistrict,retweet.id as retweetitd,retweet.typeid as retweettypeid, retweet.content as retweetcontent from retweet left join user on retweet.owner_id = user.userid where retweet.userid = $userid1 and retweet.typeid = 3 order by retweet.id desc";
		$friendRetweets = Yii::app()->db->createCommand($friendRetweetSql)->queryAll(); 

		$articleRetweetsql = "select article.*,retweet.userid,retweet.username,retweet.usersex,retweet.content,retweet.id as retweetid,retweet.create_time as retweet_create_time,retweet.comments as retweet_comments from retweet left join article on retweet.owner_id = article.id where retweet.userid = $userid1 and retweet.typeid = 4 order by retweet.id desc";
		$articleRetweets = Yii::app()->db->createCommand($articleRetweetsql)->queryAll();

		$friendSql = "select * from friend where (userid = $userid and friendid = $userid1) or (friendid = $userid and friendid = $userid1) ";
		$result = Yii::app()->db->createCommand($friendSql)->queryAll();
		$friend = 0;
		if($result) $friend = 1;

		echo CJSON::encode(array('status'=>200, 'data'=>$data, 'shops'=>$shops, 'photos'=>$photos, 'acts'=>$acts, 'friend'=>$friend, 'friendretweets'=>$friendRetweets, 'articleretweets'=>$articleRetweets));
	}

	public function actionView($id,$userid)
	{
		if(!is_numeric($id)) exit;
		$user = $this->loadModel($id);
		if(!$user){
			echo CJSON::encode(array('status'=>200, 'data'=>null, 'friend'=>1));
			exit;
		}
		$userid1 = $user->userid;

		$friendSql = "select * from friend where (userid = $userid and friendid = $userid1) or (friendid = $userid and friendid = $userid1) ";
		$result = Yii::app()->db->createCommand($friendSql)->queryAll();
		$friend = 0;
		if($result) $friend = 1;

		unset($user->password);
		unset($user->mobile);
		unset($user->useremail);
		unset($user->oicq);
		unset($user->useranser);
		unset($user->userquestion);
		unset($user->userlastip);
		unset($user->tmoney);
		unset($user->balance);
		unset($user->useraddress);

		foreach($user as $key=>$item){
			if(!$item || is_null($item) || $item == 'null'){
			}else{
				$data[$key] = $item;
			}
		}

		echo CJSON::encode(array('status'=>200, 'data'=>$data, 'friend'=>$friend));
	}


	public function actionUsergroups($ownerid,$userid)
	{
		if(!is_numeric($ownerid)) exit;
		$user = $this->loadModel($ownerid);
		$userid1 = $user->userid;
		$memberSql = "select member.userid,shop.id,shop.name,shop.typeid,shop.promote_title,shop.clubs,shop.province,shop.city,shop.district,shop.town,shop.building,shop.latitude,shop.longitude from member left join shop on member.ownerid = shop.id where shop.name != 'null' and member.userid = $userid1 order by shop.id desc";
		$shops = Yii::app()->db->createCommand($memberSql)->queryAll();
		$owner = ['userid'=>$user->userid,'username'=>$user->username, 'usersex'=>$user->usersex];
		echo CJSON::encode(array('status'=>200, 'owner'=>$owner, 'data'=>$shops));
	}

	public function actionUseracts($ownerid,$userid)
	{
		if(!is_numeric($ownerid)) exit;
		$user = $this->loadModel($ownerid);
		$userid1 = $user->userid;
		$actSql = "select enroll.id as enrollid,enroll.userid as enrolluserid,shop.* from enroll left join shop on enroll.ownerid = shop.id where shop.name != 'null' and shop.act_title != '' and enroll.userid = $userid1 order by shop.act_date desc";
		$acts = Yii::app()->db->createCommand($actSql)->queryAll(); 
		$owner = ['userid'=>$user->userid,'username'=>$user->username, 'usersex'=>$user->usersex];
		echo CJSON::encode(array('status'=>200, 'owner'=>$owner, 'data'=>$acts));
	}

	public function actionMyRecommends($p=0,$limit=100,$username=null,$userid=null)
	{
		$offset = $p*$limit;
		$sql = "select * from user where ref_userid = $userid order by userid desc limit $offset,$limit";
		$dataProvider = Yii::app()->db->createCommand($sql)->queryAll();

		echo CJSON::encode(array('status'=>200,'users'=>$dataProvider));
	}

	public function actionCheckUser($userid)
	{
		if(!is_numeric($userid)){
			echo CJSON::encode(array("status"=>0,"result"=>0,'msg'=>'您没有登录！'));
			exit;
		}
		$sql = "select userid,username,usersex,ref_income,balance,avatar,ref_userid from user where userid = $userid";
		$user = Yii::app()->db->createCommand($sql)->queryRow();
		if(!$user){
			echo CJSON::encode(array("status"=>0,"result"=>1,'msg'=>'您没有注册！'));
			exit;
		}

		$refuser1 = [];
		$refuser2 = [];
		$refuserid1 = $user['ref_userid'];
		$refsql1 = "select userid,username,usersex,mobile,ref_userid from user where userid = $refuserid1";
		$refuser1 = Yii::app()->db->createCommand($refsql1)->queryRow();

		if($refuser1 && !empty($refuser1['mobile'])){
			$refuserid2 = $refuser1['ref_userid'];
			$refsql2 = "select userid,username,usersex from user where userid = $refuserid2";
			$refuser2 = Yii::app()->db->createCommand($refsql2)->queryRow();
		}
		
		//$ordersql = "SELECT order.*,shop.id as shopid,shop.name,shop.phone,shop.province,shop.city,shop.district,shop.town,shop.road,shop.building FROM order left join shop on order.order_id = shop.id where order.order_status = '待确认' and order.userid = '$userid' ORDER BY order.id desc";
		//$orders = Yii::app()->db->createCommand($ordersql)->queryAll();
		$orders = [];
		echo CJSON::encode(array("status"=>200,"result"=>3,'user'=>$user, 'refuser1'=>$refuser1, 'refuser2'=>$refuser2, 'orders'=>$orders));
	}

	public function actionSelectRefUser($username1,$userid)
	{
		$refuser = [];
		$refuser = [];
		$refsql1 = "select userid,username,usersex,ref_userid,ref_username from user where username = '$username1'";
		$refuser1 = Yii::app()->db->createCommand($refsql1)->queryRow();
		if(!$refuser1){
			echo CJSON::encode(array("status"=>200,"result"=>0,'msg'=>'不存在该会员名！'));
			exit;
		}
		$ref_userid = $refuser1["userid"];
		if($ref_userid == $userid){
			echo CJSON::encode(array("status"=>200,"result"=>0,'msg'=>'不能选择自己！'));
			exit;
		}
		if($ref_userid > $userid){
			echo CJSON::encode(array("status"=>200,"result"=>0,'msg'=>'不能选择比自己后注册的会员！'));
			exit;
		}

		$me = User::model()->findByPk($userid);
		if($ref_userid == $me["ref_userid"]){
			echo CJSON::encode(array("status"=>200,"result"=>0,'msg'=>'不能选择同一个人！'));
			exit;
		} 

		$ref_userid1 = $refuser1["ref_userid"];
		if($ref_userid1 == $userid){
			echo CJSON::encode(array("status"=>200,"result"=>0,'msg'=>'不能选择自己的下级会员作为介绍人！'));
			exit;
		}

		$refsql2 = "select userid,username,usersex from user where userid = $ref_userid1";
		$refuser2 = Yii::app()->db->createCommand($refsql2)->queryRow();

		echo CJSON::encode(array("status"=>200,"result"=>3,'refuser1'=>$refuser1, 'refuser2'=>$refuser2));
	}

	public function actionUpdate($userid='')
	{
		if(empty($userid)) return false;

		$model = $this->loadModel($userid);

		unset($model->password);
		unset($model->useremail);
		unset($model->openid);
		unset($model->tmoney);
		unset($model->oicq);
		unset($model->userquesion);
		unset($model->useranswer);
		unset($model->mobile);

		echo CJSON::encode(array('status' => 200, 'message'=>'没有填写资料！', 'user'=>$model));
		exit;
	}

	public function actionUpdateOne($userid='')
	{
		if(empty($userid)) return false;
		$model = $this->loadModel($userid);

		if(!isset($_POST["password"])){
			if(is_null($_POST['item_name']) || is_null($_POST['item_name'])){
				echo CJSON::encode(array('status' => 200, 'message'=>'没有填写资料！'));
				exit;
			}
			if($_POST['item_name'] == "password"){
				echo CJSON::encode(array('status' => 200, 'message'=>'不适当的修改项'));
				exit;
			}
			$name = $_POST['item_name'];
			$value = $_POST['item_value'];
			if($name == 'msg'){
				$model->msg = $value;
				$model->msgdate = date("Y-m-d");
			}else{
				$model[$name] = $value;
			}
		}else{
			$model->password = md5($_POST['password']);
		}
		if($model->save()){
			echo CJSON::encode(array('status' => 200, 'message'=>'更新资料成功！'));
			exit;
		}
		echo CJSON::encode(array('status' => 1, 'message'=>'更新资料失败！'));
		exit;
	}

	public function actionUpdateOneAdmin($userid='',$userid1)
	{
		if(empty($userid)) return false;
		if($userid != 1638) return false;
		if(empty($userid1)) return false;
		if(!is_numeric($userid1)) return false;

		$model = $this->loadModel($userid1);
		$model->password = md5(1234567);
		// if(!isset($_POST["password"])){
		// 	$model->password = md5(1234567);
		// }

		if($model->save()){
			$username = $model->username;
			$userid = $model->userid;
			echo CJSON::encode(array('status' => 200, 'message'=>'更新'.$username.'('.$userid.')资料成功！'));
			exit;
		}
		echo CJSON::encode(array('status' => 1, 'message'=>'更新资料失败！'));
		exit;
	}


	
	public function actionUpdateRefUser($userid)
	{
		if(!is_numeric($userid)){
			echo CJSON::encode(array("status"=>0,"result"=>0,'msg'=>'您没有登录！'));
			exit;
		}

		$me = User::model()->findByPk($userid);
		if(!$me){
			echo CJSON::encode(array("status"=>2, "message"=>"您的登录有问题！"));
			exit;
		}
		if($me["ref_userid"]>1 && $me['balance'] < 1000){
			echo CJSON::encode(array("status"=>200,"result"=>0,'msg'=>'您的业务余额不足1000元，更换不成功！'));
			exit;
		}

		if(!isset($_POST['refuserid'])){
			echo CJSON::encode(array("status"=>200,"result"=>0,'msg'=>'没有选定会员名称！'));
			exit;
		}
		$ref_userid = $_POST['refuserid'];
		if($userid <= $ref_userid){
			echo CJSON::encode(array("status"=>200,"result"=>0,'msg'=>'您选择的会员比您后注册，更换不成功！'));
			exit;
		}
		if($me["ref_userid"] == $ref_userid){
			echo CJSON::encode(array("status"=>200,"result"=>0,'msg'=>'您没必要选择同样的介绍人！'));
			exit;
		}
		$refuser = User::model()->findByPk($ref_userid);
		if(!$refuser){
			echo CJSON::encode(array("status"=>2, "message"=>"会员资料不存在！"));
			exit;
		}
		
		$ref_username = $refuser->username;
		$me->ref_userid = $ref_userid;
		$me->ref_username = $ref_username;
		$me->balance = $me->balance - 1000;
		if($me->save()){
			$refuser->ref_income = $refuser->ref_income+1000;
			$refuser->balance = $refuser->balance+1000;
			$refuser->totalref = $refuser->totalref+1;
			$refuser->save();

			$refuser2 = User::model()->findByPk($refuser["ref_userid"]);

			$user['userid'] = $me->userid;
			$user['username'] = $me->username;
			$user['usersex'] = $me->usersex;
			$user['ref_income'] = $me->ref_income;
			$user['balance'] = $me->balance;

			$user1['userid'] = $refuser->userid;
			$user1['username'] = $refuser->username;
			$user1['usersex'] = $refuser->usersex;

			$user2 = [];
			if($refuser2){
				$user2['userid'] = $refuser2->userid;
				$user2['username'] = $refuser2->username;
				$user2['usersex'] = $refuser2->usersex;
			}

			echo CJSON::encode(array("status"=>200, "result"=>3, "message"=>"重新选择上级会员成功，扣款1000元！", "user"=>$user, 'refuser1'=>$user1, 'refuser2'=>$user2));
			exit;
		}
		echo CJSON::encode(array("status"=>1, "message"=>"设置会员上级失败！"));
		exit;
	}

	public function actionUpdateWbLocations($userid='')
	{
		if(empty($userid)) return false;
		$model = $this->loadModel($userid);

		$workbuilding = $model->workbuilding;
		$latitude_reg = $model->latitude_reg;
		$longitude_reg = $model->longitude_reg;

		if(is_null($_POST['workbuilding']) || is_null($_POST['latitude']) || is_null($_POST['longitude'])){
			echo CJSON::encode(array('status' => 200, 'message'=>'没有位置信息！'));
			exit;
		}

		$model->workbuilding = $_POST['workbuilding'];
		$model->latitude_reg = $_POST['latitude'];
		$model->longitude_reg = $_POST['longitude'];

		if($model->save()){
			echo CJSON::encode(array('status' => 200, 'message'=>'更新位置成功！'));
			exit;
		}
		echo CJSON::encode(array('status' => 1, 'message'=>'更新位置失败！', 'workbuilding'=>$workbuilding, 'latitude_reg'=>$latitude_reg, 'longitude_reg'=>$longitude_reg));
		exit;
	}	

	public function actionUpdateLocations($userid='')
	{
		if(empty($userid)) return false;
		$model = $this->loadModel($userid);
		if(is_null($_POST['latitude']) || is_null($_POST['longitude'])){
			echo CJSON::encode(array('status' => 200, 'message'=>'没有位置信息！'));
			exit;
		}
		$model->latitude_login = $_POST['latitude'];
		$model->longitude_login = $_POST['longitude'];
		$model->location_uptime = date("Y-m-d H:i:s");
		if($model->save()){
			echo CJSON::encode(array('status' => 200, 'message'=>'更新位置成功！'));
			exit;
		}
		echo CJSON::encode(array('status' => 1, 'message'=>'更新位置失败！'));
		exit;
	}	

	public function actionUpdateNewestmsg($userid)
 	{
		$model = $this->loadModel($userid);
		if(!$model){
			echo CJSON::encode(array('status'=>1));
			exit;
		}

		if(isset($_POST['newestmsg']))
		{
			$model->newestmsg= $_POST['newestmsg'];
			$model->newest_uptime = date("Y-m-d H:i:s");

			if($model->save()){
				echo CJSON::encode(array("status"=>200, 'result'=>2, "message"=>"修改信息成功！"));
				exit;
			}
			echo CJSON::encode(array("status"=>200, 'result'=>2, "message"=>"修改信息失败！"));
			exit;
	 	}

	 	echo CJSON::encode(array("status"=>200, 'result'=>1, 'message'=>'修改没成功'));
 	}
	 
	public function actionUpdateUserlife($userid,$username)
	{
		$user = $this->loadModel($userid);
		if(!$user){
			echo CJSON::encode(array("status"=>200,"result"=>0,'msg'=>'不存在该会员名！'));
			exit;
		}

		$model = UserLife::model()->findByAttributes(['userid'=>$user->userid]);
		if(!$model){
			$model = new UserLife();
		}
		
		if(isset($_POST['userlife']))
		{
			$userlife = $_POST['userlife'];
			$model->life = $userlife['life'];
			$model->userid = $userid;
			$model->username = $username;
			$model->updatedate = date("Y-m-d H:i:s");
			if($model->save()){
				$model = UserLife::model()->findByAttributes(['userid'=>$user->userid]);
				echo CJSON::encode(array("status"=>200, "userlife"=>$model, "message"=>"修改成功！"));
				exit;
			}
			echo CJSON::encode(array("status"=>200, "message"=>"修改失败！"));
			exit;
		}
		$user1 = new stdClass;
		$user1->userid = $user->userid;
		$user1->username = $user->username;
		$user1->usersex = $user->usersex;
		$user1->userbirthday = $user->userbirthday;
		echo CJSON::encode(array("status"=>200, "user"=>$user1, "userlife"=>$model));
	}	 
 

	public function loadModel($id)
	{
		$model=User::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
}
