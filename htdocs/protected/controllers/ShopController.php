<?php

class ShopController extends Controller
{
	public function actionList($shopid=null,$typeid=1,$keywords=null,$distance=null,$latitude=0,$longitude=0,$p=0,$limit=30)
	{
		if(!is_numeric($p)) exit;
		if(!is_numeric($limit)) exit;

		$keywords = urldecode($keywords);
		$offset = $p*$limit;
		
		$condition = "";

		if($typeid == 1){
			if(!is_null($keywords)) 
				$condition = " and (name like '%".$keywords."%' or type like '%".$keywords."%' or province like '%".$keywords."%' or city like '%".$keywords."%' or district like '%".$keywords."%' or town like '%".$keywords."%' or intro like '%".$keywords."%')";
			if(!is_null($distance) && is_numeric($distance) && !is_null($latitude) && $latitude != "undefined" && !is_null($longitude) && $longitude != "undefined"){
				$condition = $condition." and ABS(latitude - $latitude) < $distance and ABS(longitude - $longitude) < $distance";	
			}
			$sql = "select * from `shop` where typeid = 1 and building != '' and latitude != '' and longitude != '' $condition order by acos(cos($latitude*pi()/180 )*cos(latitude*pi()/180)*cos($longitude*pi()/180 -longitude*pi()/180)+sin($latitude*pi()/180 )*sin(latitude*pi()/180))*6370996.81/1000 asc limit $offset,$limit";
		}else{	
			if(!is_null($keywords)) 
				$condition = " and (shop.name like '%".$keywords."%' or shop.type like '%".$keywords."%' or owner.province like '%".$keywords."%' or owner.city like '%".$keywords."%' or owner.district like '%".$keywords."%' or owner.town like '%".$keywords."%' or shop.intro like '%".$keywords."%')";
			if(!is_null($distance) && is_numeric($distance) && !is_null($latitude) && $latitude != "undefined" && !is_null($longitude) && $longitude != "undefined"){
				$condition = $condition." and ABS(owner.latitude - $latitude) < $distance and ABS(owner.longitude - $longitude) < $distance";	
			}
			$sql = "select shop.id,shop.name,shop.act_title,shop.act_date,shop.act_time,shop.ownerid,owner.name as ownername,owner.province,owner.city,owner.district,owner.town,owner.building,owner.latitude,owner.longitude from shop as shop left join shop as owner on shop.ownerid = owner.id where shop.typeid = 2 and shop.act_title != '' $condition order by acos(cos($latitude*pi()/180 )*cos(owner.latitude*pi()/180)*cos($longitude*pi()/180 -owner.longitude*pi()/180)+sin($latitude*pi()/180 )*sin(owner.latitude*pi()/180))*6370996.81/1000 asc limit $offset,$limit";
		}
		$shop = Yii::app()->db->createCommand($sql)->queryAll();
		if($shop){
			echo CJSON::encode(array('status'=>200, 'data'=>$shop));
			exit;
		}
		echo CJSON::encode(array('status'=>200));
	}

	public function actionStoreList($shopid=null,$keywords=null,$distance=null,$latitude=0,$longitude=0,$p=0,$limit=30)
	{
		if(!is_numeric($p)) exit;
		if(!is_numeric($limit)) exit;

		$keywords = urldecode($keywords);

		$condition = "";
		if(!is_null($keywords)) $condition = " and (name like '%".$keywords."%' or type like '%".$keywords."%' or province like '%".$keywords."%' or city like '%".$keywords."%' or district like '%".$keywords."%' or town like '%".$keywords."%' or intro like '%".$keywords."%')";
		if(!is_null($distance) && is_numeric($distance) && !is_null($latitude) && $latitude != "undefined" && !is_null($longitude) && $longitude != "undefined"){
			$condition = $condition." and ABS(latitude - $latitude) < $distance and ABS(longitude - $longitude) < $distance";	
		}

		$offset = $p*$limit;
		$sql = "select * from `shop` where typeid = 1 and building != '' and latitude != '' and longitude != '' $condition order by acos(cos($latitude*pi()/180 )*cos(latitude*pi()/180)*cos($longitude*pi()/180 -longitude*pi()/180)+sin($latitude*pi()/180 )*sin(latitude*pi()/180))*6370996.81/1000 asc limit $offset,$limit";

		$store = Yii::app()->db->createCommand($sql)->queryAll();
		if($store){
			echo CJSON::encode(array('status'=>200, 'data'=>$store));
			exit;
		}
		echo CJSON::encode(array('status'=>200));
	}

	public function actionGroupList($shopid=null,$keywords=null,$p=0,$limit=30)
	{
		$condition = " and club.id > 0";
		if($shopid)	$condition += $condition." and club.id = $shopid";

		$keywords = urldecode($keywords);

		if($keywords) $condition = $condition." and (club.name like '%".$keywords."%' or club.act_title like '%".$keywords."%' or club.act_place like '%".$keywords."%' or club.username like '%".$keywords."%' or club.type like '%".$keywords."%' or club.act_date like '%".$keywords."%')";
		
		$offset = $p*$limit;
		$clubSql = "select club.*,store.id as storeid,store.name as storename from shop club left join shop store on club.ownerid = store.id where club.typeid > 1 $condition order by club.certified desc limit $offset,$limit";
		$clubs = Yii::app()->db->createCommand($clubSql)->queryAll();

		echo CJSON::encode(array('status'=>200, 'clubs'=>$clubs));
	}

	public function actionNewGroups($latitude=0,$longitude=0)
	{
		$groupSql = "select shop.id,shop.name,shop.act_title,shop.act_date,shop.act_time,shop.ownerid,shop.province as shop_province,shop.city as shop_city,shop.district as shop_district,shop.town as shop_town,shop.building as shop_building,shop.latitude as shop_latitude,shop.longitude as shop_longitude,owner.name as ownername,owner.province,owner.city,owner.district,owner.town,owner.building,owner.latitude,owner.longitude from shop as shop left join shop as owner on shop.ownerid = owner.id where shop.act_title != '' order by acos(cos($latitude*pi()/180 )*cos(owner.latitude*pi()/180)*cos($longitude*pi()/180 -owner.longitude*pi()/180)+sin($latitude*pi()/180 )*sin(owner.latitude*pi()/180))*6370996.81/1000 asc limit 0,30";
		$groups = Yii::app()->db->createCommand($groupSql)->queryAll();
		echo CJSON::encode(array('status'=>200, 'data'=>$groups));
	}

	public function actionStoreGroups($ownerid)
	{
		if(!is_numeric($ownerid)) exit;
		$store = $this->loadModel($ownerid);
		$clubSql = "select * from shop where typeid > 1 and ownerid = $ownerid order by certified desc";
		$groups = Yii::app()->db->createCommand($clubSql)->queryAll();

		echo CJSON::encode(array('status'=>200, 'owner'=>$store, 'data'=>$groups));
	}

	public function actionMyGroups($userid=null,$p=0,$limit=30)
	{
		if(!$userid) {
			echo CJSON::encode(array('status'=>1,'message'=>'您没有登录！'));
			exit;
		};
		$user = User::model()->findByPk($userid);

		$mystoresql = "select member.*, shop.id as storeid,shop.name as store_name, shop.avatar as avatar, shop.newestmsg as newestmsg from member left join shop on member.ownerid = shop.id where member.userid = $userid order by member.id desc";
		$stores = Yii::app()->db->createCommand($mystoresql)->queryAll();

		// $mygroupsql = "select member.*, shop.id as groupid,shop.name as group_name, shop.avatar as avatar, shop.newestmsg as newestmsg from member left join shop on member.ownerid = shop.id where typeid = 2 and member.userid = $userid order by member.id desc";
 		// $groups = Yii::app()->db->createCommand($mygroupsql)->queryAll();

		$criteria = new CDbCriteria();
		$criteria->addCondition("friendid = '".$userid."'");
		$criteria->addCondition("userid = '".$userid."'","or");
		$friends = Friend::model()->findAll($criteria);
		$myFriends = [];
		$fuser = [];
		foreach ($friends as $key => $friend) {
			if($friend->friend_owner && $friend->user_owner){
				if($friend->userid == $userid){
					$fuser = array("userid"=>$friend->friend_owner->userid,
												 "username"=>$friend->friend_owner->username,
												 "usersex"=>$friend->friend_owner->usersex,
												 "userbirthday"=>$friend->friend_owner->userbirthday,
												 "education"=>$friend->friend_owner->education,
												 "duty"=>$friend->friend_owner->duty,
												 "jobtitle"=>$friend->friend_owner->jobtitle,
												 "marry"=>$friend->friend_owner->marry,
												 "usersex"=>$friend->friend_owner->usersex,
												 "avatar"=>$friend->friend_owner->avatar,
												 "newestmsg"=>$friend->friend_owner->newestmsg
											 );
				}else{
					$fuser = array("userid"=>$friend->user_owner->userid,
												 "username"=>$friend->user_owner->username,
												 "usersex"=>$friend->user_owner->usersex,
												 "userbirthday"=>$friend->user_owner->userbirthday,
												 "education"=>$friend->user_owner->education,
												 "duty"=>$friend->user_owner->duty,
												 "jobtitle"=>$friend->user_owner->jobtitle,
												 "marry"=>$friend->user_owner->marry,
												 "usersex"=>$friend->user_owner->usersex,
												 "avatar"=>$friend->user_owner->avatar,
												 "newestmsg"=>$friend->user_owner->newestmsg
											 );
				}

			}
			$myFriends[] = $fuser;
		}

		$myself = array("userid"=>$user->userid,"username"=>$user->username,"usersex"=>$user->usersex,'newestmsg'=>$user->newestmsg,'avatar'=>$user->avatar);
		echo CJSON::encode(array('status'=>200, 'user'=>$myself, 'groups'=>[], 'stores'=>$stores, 'myFriends'=>$myFriends));
		exit;
	}

	public function actionActList($shopid=null,$keywords=null,$p=0,$limit=30)
	{
		$keywords = urldecode($keywords);

		$condition = " and club.act_title <> ''";
		if($shopid)	$condition += $condition." and club.id = $shopid";
		if($keywords) $condition = $condition." and (club.name like '%".$keywords."%' or club.act_title like '%".$keywords."%' or club.act_place like '%".$keywords."%' or club.username like '%".$keywords."%' or club.type like '%".$keywords."%' or club.act_date like '%".$keywords."%')";
		
		$offset = $p*$limit;
		$clubSql = "select club.*,store.id as storeid,store.name as storename from shop club left join shop store on club.ownerid = store.id where club.typeid > 1 $condition order by club.certified desc limit $offset,$limit";
		$clubs = Yii::app()->db->createCommand($clubSql)->queryAll();

		echo CJSON::encode(array('status'=>200, 'clubs'=>$clubs));
	}

	public function actionStoreGroupsAdmin($userid)
	{
		if(!is_numeric($userid)){
			echo CJSON::encode(array('status'=>0, 'msg'=>'没有登录'));
			exit;
		}
		
		$shop = Shop::model()->findByAttributes(array('userid'=>$userid,'typeid'=>1));
		if($shop){
			$groups = $shop->groups;
			echo CJSON::encode(array('status'=>200,"owner"=>$shop,'data'=>$groups));
			exit;
		}

		echo CJSON::encode(array('status'=>1));
	}	

	public function actionMyGroupsAdmin($userid)
	{
		if(!is_numeric($userid)){
			echo CJSON::encode(array('status'=>0, 'msg'=>'没有登录'));
			exit;
		}
		
		$clubSql = "select * from shop where typeid > 1 and userid = $userid order by certified desc";
		$groups = Yii::app()->db->createCommand($clubSql)->queryAll();

		if($groups){
			echo CJSON::encode(array('status'=>200, "groups"=>$groups));
			exit;
		}

		echo CJSON::encode(array('status'=>1));
	}

	public function actionViewStore($shopid,$userid)
 	{
		if(!is_numeric($shopid)) exit;
 		$store = $this->loadModel($shopid);
 		if($store->updatedate != date('Y-m-d')){
 			$store->yesterday = $store->today;
 			$store->today = 0;
 			$store->updatedate = date('Y-m-d');
 			$store->save();
 		}

 		$totals = count($store->members);
 		$username = $store->username;
 		echo CJSON::encode(array('status'=>200, 'store'=>$store, 'username'=>$username, 'totals'=>$totals));
	}
	 
	public function actionMain($shopid,$userid)
 	{
		if(!is_numeric($shopid)) exit;
 		$store = $this->loadModel($shopid);
 		if($store->updatedate != date('Y-m-d')){
 			$store->yesterday = $store->today;
 			$store->today = 0;
 			$store->updatedate = date('Y-m-d');
 			$store->save();
 		}

 		$totals = count($store->members);
 		$username = $store->username;
		 
		$membersql = "SELECT member.id as id,member.certified as certified,user.userid as userid,user.username as username,user.usersex as usersex FROM member LEFT JOIN user ON member.userid = user.userid WHERE member.ownerid = $store->id and member.certified>4 ORDER BY member.id desc";
		$members = Yii::app()->db->createCommand($membersql)->queryAll(); 

		$groupsql = "SELECT * FROM shop WHERE shop.ownerid = $store->id ORDER BY act_date desc";
		$groups = Yii::app()->db->createCommand($groupsql)->queryAll(); 

		$photosql = "SELECT * FROM photo WHERE ownerid = $store->id ORDER BY id desc limit 0,6";
		$photos = Yii::app()->db->createCommand($photosql)->queryAll(); 

		$productsql = "SELECT * FROM product WHERE ownerid = $store->id ORDER BY id desc limit 0,6";
		$products = Yii::app()->db->createCommand($productsql)->queryAll(); 	

 		echo CJSON::encode(array('status'=>200, 'store'=>$store, 'username'=>$username, 'totals'=>$totals, 'members'=>$members, 'groups'=>$groups, 'products'=>$products, 'photos'=>$photos));
	}

	public function actionDetail($shopid,$userid)
 	{
		if(!is_numeric($shopid)) exit;
 		$store = $this->loadModel($shopid);
 		if($store->updatedate != date('Y-m-d')){
 			$store->yesterday = $store->today;
 			$store->today = 0;
 			$store->updatedate = date('Y-m-d');
 			$store->save();
 		}

 		$totals = count($store->members);
 		$username = $store->username;
		 
		$commentsql = "SELECT comment.* FROM comment WHERE comment.ownerid = $store->id and comment.typeid = 11 ORDER BY comment.id desc";
		$comments = Yii::app()->db->createCommand($commentsql)->queryAll();		

		$owner = '';
		if($store->typeid == 2){
			$owner = Shop::model()->findByPk($store->ownerid);
		}

 		echo CJSON::encode(array('status'=>200, 'store'=>$store, 'username'=>$username, 'totals'=>$totals, 'comments'=>$comments, 'owner'=>$owner));
 	}

	public function actionViewAct($shopid,$typeid=12,$userid)
 	{
		if(!is_numeric($shopid)) exit;
 		$shop = $this->loadModel($shopid);

 		$sql = "SELECT comment.id,comment.title,comment.content,comment.datetime,
									 comment.payment,comment.paydatetime,comment.payuserid,
									 comment.payusername,comment.payusersex,comment.paymentreply,
									 comment.userid,comment.username,comment.usersex
 						FROM comment
 						WHERE comment.ownerid = $shop->id and comment.typeid = $typeid
 						ORDER BY comment.id desc";
 		$comments = Yii::app()->db->createCommand($sql)->queryAll();

		$enrolled = 2;
		$enrolls = [];
		$sql = "SELECT  enroll.id,enroll.baomingtime,enroll.certified,enroll.msg,
						user.userid,user.username,user.usersex,user.userbirthday,
						user.education,user.jobtitle,user.duty,user.marry,user.avatar
					FROM enroll
					LEFT JOIN user
					ON enroll.userid = user.userid
					WHERE enroll.ownerid = $shop->id
					ORDER BY enroll.id desc";
		$enrollRes = Yii::app()->db->createCommand($sql)->queryAll();

		foreach ($enrollRes as $key => $enrollItem) {
			if(isset($enrollItem)){
				if($enrollItem["userid"] == $userid){
					$enrolled = 1;
				}
				$enrolls[] = $enrollItem;
			}
		}

 		echo CJSON::encode(array('status' => 200, 'shop'=>$shop, 'comments'=>$comments, 'enrolls'=>$enrolls, 'enrolled'=>$enrolled));
 	}


	public function actionCreateStore($userid,$username,$usersex)
	{
		$shopname = $_POST['shopname'];
		if(empty($shopname))
		{
			echo CJSON::encode(array('status'=>200, 'result'=>1));
			exit;
		}
		
		$shop = Shop::model()->findByAttributes(array('userid'=>$userid,'typeid'=>1));
		if($shop){
			echo CJSON::encode(array('status'=>200, 'result'=>2, 'message'=>'一个用户只能创建一个店家平台！'));
			exit;
		}

		$model = new Shop;
		$model->name = $shopname;
		$model->userid = $userid;
		$model->username = $username;
		$model->ownerid = 0;
		$model->type = "null";
		$model->typeid = 1;   

		if($model->save()){
			echo CJSON::encode(array('status'=>200, 'result'=>3));
			exit;
		}

		echo CJSON::encode(array('status'=>200, 'result'=>0));
		exit;
	}

	public function actionCreateGroup($userid,$username)
	{
		$shopname = $_POST['shopname'];
		$shopid = $_POST['shopid'];
		if(empty($shopname) || empty($shopid))
		{
			echo CJSON::encode(array('status'=>200, 'result'=>1));
			exit;
		}
			
		$shop = Shop::model()->findByPk($shopid);
		if(!$shop){
			echo CJSON::encode(array('status'=>200, 'result'=>2));
			exit;
		}

		$model = new Shop;
		$model->name = $shopname;
		$model->userid = $userid;
	   	$model->username = $username;
		$model->ownerid = $shopid;
	   	$model->type = "null";
	   	$model->typeid = 2;

		if($model->save()){
		   $shopSql = "select id from `shop` where ownerid = $shop->id";
		   $shops = Yii::app()->db->createCommand($shopSql)->queryAll();
		   $clubs = count($shops);
		   $shop->clubs = $clubs;
		   $shop->save();
			echo CJSON::encode(array('status'=>200, 'result'=>3));
			exit;
		}

		echo CJSON::encode(array('status'=>200, 'result'=>0));
		exit;
	}

	public function actionActJoin($shopid,$userid,$username,$usersex,$usertel='',$duty='',$msg='')
	{
		$enroll = Enroll::model()->findByAttributes(array('ownerid'=>$shopid,'userid'=>$userid));
		if($enroll){
			echo CJSON::encode(array('status'=>1, 'message'=>'您已报名该活动！'));
			exit;
		}

		$msg = urldecode($msg);		
		$enroll = new Enroll;
		$enroll->ownerid = $shopid;
		$enroll->userid = $userid;
		$enroll->username = $username;
		$enroll->usersex = $usersex;
		$enroll->msg = $msg;
		$enroll->usertel = $usertel;
		$enroll->duty = $duty;
		$enroll->baomingtime = date('Y-m-d');

		if($enroll->save()){
			$sql = "SELECT enroll.id,enroll.baomingtime,enroll.certified,enroll.msg,
						user.userid,user.username,user.usersex,user.userbirthday,
						user.education,user.jobtitle,user.duty,user.marry
						FROM enroll
						LEFT JOIN user
						ON enroll.userid = user.userid
						WHERE enroll.ownerid = $shopid
						ORDER BY enroll.id desc";
			$enrolls = Yii::app()->db->createCommand($sql)->queryAll();
			echo CJSON::encode(array('status'=>200, 'enrolls'=>$enrolls, 'enrolled'=>1, 'message'=>'报名该活动成功！'));
			exit;
		}
		echo CJSON::encode(array('status'=>1, 'message'=>'报名不成功！'));
	}

	public function actionActCancel($shopid,$userid)
	{
		$enroll = Enroll::model()->findByAttributes(array('ownerid'=>$shopid,'userid'=>$userid));
		if(!$enroll){
			echo CJSON::encode(array('status'=>1, 'message'=>'您没有报名该活动！'));
			exit;
		}

		if($enroll->delete()){
				$sql = "SELECT enroll.id,enroll.baomingtime,enroll.certified,enroll.msg,
							user.userid,user.username,user.usersex,user.userbirthday,
							user.education,user.jobtitle,user.duty,user.marry
							FROM enroll
							LEFT JOIN user
							ON enroll.userid = user.userid
							WHERE enroll.ownerid = $shopid
							ORDER BY enroll.id desc";
				$enrolls = Yii::app()->db->createCommand($sql)->queryAll();

				echo CJSON::encode(array('status'=>200, 'enrolls'=>$enrolls, 'enrolled'=>2, 'message'=>'取消报名成功！'));
				exit;
		}
		echo CJSON::encode(array('status'=>1, 'message'=>'取消报名不成功！'));
	}

	public function actionSetGroupCaptain($shopid,$userid=null)
	{
		$shop = Shop::model()->findByAttributes(array('userid'=>$userid,'typeid'=>1));
		if(!$shop){
			echo CJSON::encode(array('status'=>200, 'result'=>2, 'message'=>'您还没有建立门店！'));
			exit;
		}

		$model=$this->loadModel($shopid);
		if($model->ownerid != $shop->id){
			echo CJSON::encode(array('status'=>200, 'result'=>2, 'message'=>'这不是您门店的社团！'));
			exit;
		}

		if(isset($_POST['username']))
		{
			$username = $_POST['username'];
			$du = User::model()->findByAttributes(array('username'=>$username));
			if(!$du){
				echo CJSON::encode(array("status"=>2, "message"=>"找不到该会员！"));
				exit;
			}

			$model->userid = $du->userid;
			$model->username = $du->username;

			if($model->save()){
				echo CJSON::encode(array("status"=>200, "message"=>"设置群主成功！"));
				exit;
			}
			echo CJSON::encode(array("status"=>1, "message"=>"设置群主失败！"));
		}
		echo CJSON::encode(array("status"=>1, "message"=>"没有填群主会员名！"));
	}	


	public function actionUpdate($userid,$shopid=null)
 	{		
		if(is_numeric($shopid)){
			$model = Shop::model()->findByPk($shopid);
		}else{
			$model = Shop::model()->findByAttributes(array('userid'=>$userid,'typeid'=>1));
		} 

		$owner = new stdClass();
		if($model->typeid == 2){
			$owner1 = Shop::model()->findByPk($model->ownerid);
			if($owner1){
				$owner = new stdClass();
				$owner->id = $owner1->id;
				$owner->name = $owner1->name;
			}
		}

		$psql = "SELECT * FROM S_Province ORDER BY ProvinceID asc";
		$provinces = Yii::app()->db->createCommand($psql)->queryAll();
		$citys = [];
		$districts = [];

		if(!$model){
			echo CJSON::encode(array("status"=>1, "provinces"=>$provinces, "citys"=>$citys, "districts"=>$districts));
 			exit;
 		}

		if($model->city){
			$csql = "SELECT ProvinceID FROM S_City where CityName = '$model->city'";
			$city = Yii::app()->db->createCommand($csql)->queryAll()[0];
			$ProvinceID = $city['ProvinceID'];
			$csql = "SELECT * FROM S_City WHERE ProvinceID = '$ProvinceID' ORDER BY CityID ASC";
			$citys = Yii::app()->db->createCommand($csql)->queryAll();
		}
		if($model->district){
			$dsql = "SELECT CityID FROM S_District where DistrictName = '$model->district'";
			$district = Yii::app()->db->createCommand($dsql)->queryAll()[0];
			$CityID = $district['CityID'];
			$dsql = "SELECT * FROM S_District WHERE CityID = '$CityID' ORDER BY DistrictID asc";
			$districts = Yii::app()->db->createCommand($dsql)->queryAll();
		}

 		if(isset($_POST['Shop'])){
 			$model->name = $_POST['Shop']['name'];
 			$model->intro = $_POST['Shop']['intro'];
 			$model->province = $_POST['Shop']['province'];
 			$model->city = $_POST['Shop']['city'];
 			$model->district = $_POST['Shop']['district'];
 			$model->town = $_POST['Shop']['town'];
 			$model->road = $_POST['Shop']['road'];
 			$model->building = $_POST['Shop']['building'];
 			$model->phone = $_POST['Shop']['phone'];
			if(isset($_POST['Shop']['avatar'])) $model->avatar = $_POST['Shop']['avatar'];
			if(isset($_POST['Shop']['promote_avatar'])) $model->promote_avatar = $_POST['Shop']['promote_avatar'];
			if(isset($_POST['Shop']['latitude'])) $model->latitude = $_POST['Shop']['latitude'];
			if(isset($_POST['Shop']['longitude'])) $model->longitude = $_POST['Shop']['longitude'];

 			if($model->save()){
 				echo CJSON::encode(array("status"=>200, "message"=>"修改店铺成功！"));
 				exit;
 			}
 			echo CJSON::encode(array("status"=>200, "message"=>"修改失败！"));
 		}

 		echo CJSON::encode(array("status"=>200, "shop"=>$model, "owner"=>$owner, "provinces"=>$provinces, "citys"=>$citys, "districts"=>$districts));
	}

	public function actionUpdateOne($userid='',$shopid=null)
	{
		if(is_null($shopid)){
			echo CJSON::encode(array("status"=>1, "msg"=>"没有指定ID"));
 			exit;
		}
	 	$model = Shop::model()->findByAttributes(array('userid'=>$userid,'id'=>$shopid)); 
		if(!$model){
			echo CJSON::encode(array('status'=>1,'msg'=>'没找到您的门店！'));
			exit;
		}

		$colums = [
			'name'=>1,
			'type'=>1,
			'province'=>1,
			'city'=>1,
			'district'=>1,
			'town'=>1,
			'road'=>1,
			'building'=>1,
			'intro'=>1,
			'nickname'=>1,
			'cert_name'=>1,
			'pay_cert_name'=>1,
			'cert_name'=>1,
			'pay_promotion'=>1,
			'promote_title'=>1,
			'promote_detail'=>1,
			'phone'=>1,
			'avatar'=>1,
			'promote_avatar'=>1,
			'latitude'=>1,
			'longitude'=>1,
			'act_title'=>1,
			'act_date'=>1,
			'act_time'=>1,
			'act_place'=>1,
			'act_cost'=>1,
			'act_detail'=>1,
			'act_person'=>1,
			'act_invite'=>1,
			'act_contact'=>1,
			'act_avatar'=>1,
			'chat_cert'=>1,
			'post_cert'=>1
		];

		$name = $_POST['item_name'];
		if(!$colums[$name]){
			echo CJSON::encode(array('status' => 200, 'message'=>'不允许修改该项'));
			exit;
		}
		$value = '';
		if(isset($_POST['item_value'])) $value = $_POST['item_value'];
		$model[$name] = $value;

		if($model->save()){
			echo CJSON::encode(array('status' => 200, 'message'=>'更新资料成功！'));
			exit;
		}
		echo CJSON::encode(array('status' => 1, 'message'=>'更新资料失败！'));
		exit;
	}

	public function actionUpdateWbLocations($userid='',$shopid=null)
	{
		$model = $this->haveShop($userid);
		if(!$model){
			echo CJSON::encode(array('status'=>1,'msg'=>'没找到您的门店！'));
			exit;
		}

		$workbuilding = $model->building;
		$latitude = $model->latitude;
		$longitude = $model->longitude;

		if(is_null($_POST['building']) || is_null($_POST['latitude']) || is_null($_POST['longitude'])){
			echo CJSON::encode(array('status' => 200, 'message'=>'没有位置信息！'));
			exit;
		}

		$model->building = $_POST['building'];
		$model->latitude = $_POST['latitude'];
		$model->longitude = $_POST['longitude'];

		if($model->save()){
			echo CJSON::encode(array('status' => 200, 'message'=>'更新位置成功！'));
			exit;
		}
		echo CJSON::encode(array('status' => 1, 'message'=>'更新位置失败！', 'building'=>$building, 'latitude'=>$latitude, 'longitude'=>$longitude));
		exit;
	}	

	public function actionUpdatePayCertified($userid,$shopid=null)
	{
		if(is_numeric($shopid)) $model = Shop::model()->findByAttributes(array('userid'=>$userid,"id"=>$shopid));
		else $model = Shop::model()->findByAttributes(array('userid'=>$userid,"typeid"=>1));
		if(!$model){
			echo CJSON::encode(array('status'=>1,'msg'=>'没有找个该属主！'));
			exit;
		}

		if(isset($_POST['shop']))
		{
			$model->pay_cert_name = $_POST['shop']['pay_cert_name'];
			if($model->save()){
				echo CJSON::encode(array("status"=>200, "message"=>"修改会员优惠级别成功！"));
				exit;
			}
			echo CJSON::encode(array("status"=>200, "message"=>"修改失败！"));
		}

		echo CJSON::encode(array("status"=>200, "shop"=>$model));
	}	

	public function actionUpdatePromotion($userid)
 	{
		$model = Shop::model()->findByAttributes(array('userid'=>$userid,'typeid'=>1));
		if(!$model){
			echo CJSON::encode(array('status'=>1));
			exit;
		}

		if(isset($_POST['shop']))
		{
			$model->promote_title = $_POST['shop']['promote_title'];
			$model->promote_detail = $_POST['shop']['promote_detail'];
			$model->promote_avatar = $_POST['shop']['promote_avatar'];

			if($model->save()){
				echo CJSON::encode(array("status"=>200, "message"=>"修改促销信息成功！"));
				exit;
			}
			echo CJSON::encode(array("status"=>200, "message"=>"修改失败！"));
	 	}

	 	echo CJSON::encode(array("status"=>200, "shop"=>$model));
 	}

	public function actionUpdateNewestmsg($id,$userid)
 	{
		$model = Shop::model()->findByAttributes(array('userid'=>$userid,'id'=>$id));
		if(!$model){
			echo CJSON::encode(array('status'=>1,'msg'=>'这不是您的门店或社团'));
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
	 
	public function actionUpdateProductType($userid)
	{
		$model = Shop::model()->findByAttributes(array('userid'=>$userid,'typeid'=>1));
		if(!$model){
			echo CJSON::encode(array('status'=>1,'msg'=>'没有找个该店铺！'));
			exit;
		}

		if(isset($_POST['shop']))
		{
			$model->product_type = $_POST['shop']['product_type'];
			$model->product_max_id = $_POST['shop']['product_max_id'];
			if($model->save()){
				echo CJSON::encode(array("status"=>200, "message"=>"修改分类成功！"));
				exit;
			}
			echo CJSON::encode(array("status"=>200, "message"=>"修改失败！"));
		}
		echo CJSON::encode(array("status"=>200, "shop"=>$model));
	}	 

	public function haveShop($userid)
	{
		if(!is_numeric($userid)) return false;
		$model = Shop::model()->findByAttributes(array('userid'=>$userid,'typeid'=>1));
		if(!$model)
			return false;
		else 
			return $model;
	}
	public function loadModel($shopid)
	{
		$model=Shop::model()->findByPk($shopid);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
}
