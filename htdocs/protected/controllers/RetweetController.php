<?php

class RetweetController extends Controller
{
	public function actionFriendList($userid,$userid1=null,$p=0,$limit=30)
	{
	   	if(empty($userid)){
			echo CJSON::encode(array('status'=>1, 'message'=>'没有登录'));
		   	exit;
		}
		if(!is_numeric($userid)) exit;
		
		if(is_null($userid1)) $model = User::model()->findByPk($userid);
		else $model = User::model()->findByPk($userid1);

		$user = ['userid'=>$model->userid, 'username'=>$model->username, 'usersex'=> $model->usersex];

		$offset = $p*$limit;

		$retweetsql = "select user.userid,user.username,user.usersex,user.intro,user.education,user.marry,user.lookingfor,user.friend_amount,user.workprovince,user.workcity,user.workdistrict,retweet.content,retweet.username as retweet_username,retweet.id as retweetid,retweet.create_time as retweet_create_time,retweet.comments as retweet_comments from retweet left join user on retweet.owner_id = user.userid where retweet.userid = $model->userid and retweet.typeid = 3 limit $offset,$limit";
		$retweets = Yii::app()->db->createCommand($retweetsql)->queryAll();

		echo CJSON::encode(array('status'=>200, 'owner'=>$user, 'data'=>$retweets));
	}	

	public function actionArticleList($userid,$userid1=null,$p=0,$limit=30)
	{
	   	if(empty($userid)){
			echo CJSON::encode(array('status'=>1, 'message'=>'没有登录'));
		   	exit;
		}
		if(!is_numeric($userid)) exit;

		if(is_null($userid1)) $model = User::model()->findByPk($userid);
		else $model = User::model()->findByPk($userid1);

		$user = ['userid'=>$model->userid, 'username'=>$model->username, 'usersex'=> $model->usersex];

		$offset = $p*$limit;
		$retweetsql = "select article.*,retweet.userid,retweet.username,retweet.usersex,retweet.content,retweet.id as retweetid,retweet.create_time as retweet_create_time,retweet.comments as retweet_comments from retweet left join article on retweet.owner_id = article.id where retweet.userid = $model->userid and retweet.typeid = 4 limit $offset,$limit";
		$retweets = Yii::app()->db->createCommand($retweetsql)->queryAll();

		echo CJSON::encode(array('status' => 200, 'owner'=>$user, 'data'=>$retweets));
	}

	public function actionProductList($userid,$ownerid=null,$p=0,$limit=30)
	{
	   	if(empty($userid)){
			echo CJSON::encode(array('status'=>1, 'message'=>'没有登录'));
		   	exit;
		}
		
		if(empty($ownerid)){
			$shop = Shop::model()->findByAttributes(array("userid"=>$userid,"typeid"=>1));
		}else{
			$shop = Shop::model()->findByPk($ownerid);
		}

		$offset = $p*$limit;
		$retweetsql = "select product.*,retweet.userid,retweet.username,retweet.usersex,retweet.content,retweet.id as retweetid,retweet.create_time as retweet_create_time,retweet.comments as retweet_comments from retweet left join product on retweet.owner_id = product.id where retweet.userid = $shop->id and retweet.typeid = 5 limit $offset,$limit";
		$retweets = Yii::app()->db->createCommand($retweetsql)->queryAll();

		echo CJSON::encode(array('status'=>200, 'owner'=>$shop, 'data'=>$retweets));
	}	

	public function actionView($userid,$username,$usersex,$retweetid,$typeid)
	{
	   	if(empty($userid)){
			echo CJSON::encode(array('status'=>200, 'result'=>0, 'message'=>'没有登录'));
		   	exit;
		}
		if(!is_numeric($userid)) exit;
		   
	   	if(empty($retweetid)){
			echo CJSON::encode(array('status'=>200, 'result'=>0, 'message'=>'没有指定转推id'));
		   	exit;
		}
		if(!is_numeric($retweetid)) exit;
		
		if($typeid == 4){
			$retweetsql = "select article.*,retweet.owner_id as retweet_owner_id,retweet.userid as retweet_userid,retweet.username as retweet_username,retweet.usersex as retweet_usersex,retweet.content as retweet_content,retweet.id as retweetid,retweet.create_time as retweet_create_time,retweet.comments as retweet_comments from retweet left join article on retweet.owner_id = article.id where retweet.id = $retweetid";
			$retweet = Yii::app()->db->createCommand($retweetsql)->queryRow();
			$user = User::model()->findByPk($retweet['retweet_userid']);
			$owner = ['userid'=>$user['userid'], 'username'=>$user['username'], 'usersex'=> $user['usersex']];
		}
		if($typeid == 5){
			$retweetsql = "select product.*,retweet.owner_id as retweet_owner_id,retweet.userid as retweet_userid,retweet.username as retweet_username,retweet.usersex as retweet_usersex,retweet.content as retweet_content,retweet.id as retweetid,retweet.create_time as retweet_create_time,retweet.comments as retweet_comments from retweet left join product on retweet.owner_id = product.id where retweet.id = $retweetid";
			$retweet = Yii::app()->db->createCommand($retweetsql)->queryRow();
			$owner = Shop::model()->findByPk($retweet['retweet_userid']);
		}

		$commentsql = 'select comment.* from comment where comment.ownerid = '.$retweet["retweet_owner_id"].' and comment.typeid = '.$typeid.' order by comment.id desc';	
		$comments = Yii::app()->db->createCommand($commentsql)->queryAll();

		$retweetcommentsql = "select comment.* from comment where comment.ownerid = $retweetid and comment.typeid = 6";
		$retweet_comments = Yii::app()->db->createCommand($retweetcommentsql)->queryAll();

		echo CJSON::encode(array('status' => 200, 'owner'=>$owner, 'retweet'=>$retweet, 'comments'=>$comments, 'retweet_comments'=>$retweet_comments));
	}

	public function actionCheckRetweet($userid,$username,$usersex,$ownerid,$typeid)
	{
	   	if(empty($userid)){
			echo CJSON::encode(array('status'=>200, 'result'=>0, 'message'=>'没有登录'));
		   	exit;
		}
		if(!is_numeric($userid)) exit;
		   
	   	if(empty($ownerid)){
			echo CJSON::encode(array('status'=>200, 'result'=>0, 'message'=>'没有指定转推id'));
		   	exit;
		}
		if(!is_numeric($ownerid)) exit;

		if(empty($typeid)){
			echo CJSON::encode(array('status'=>200, 'result'=>0, 'message'=>'没有指定转推类型id'));
		   	exit;
		}
		if(!is_numeric($typeid)) exit;
				
		$userid1 = $userid;

		if($typeid == 5){
			$shopsql = "select id from shop where userid = $userid and typeid = 1";
			$shop = Yii::app()->db->createCommand($shopsql)->queryRow();
			$userid1 = $shop['id'];
		}

		$sql = "select id from retweet where owner_id = $ownerid and typeid = $typeid and userid = $userid1";
		$retweet = Yii::app()->db->createCommand($sql)->queryRow();
		if($retweet){
			echo CJSON::encode(array('status' => 200, 'result'=>1, 'msg'=>'已转推，不可重复转推！'));			
			exit;
		}
		echo CJSON::encode(array('status' => 200, 'result'=>2, 'msg'=>'可以转推'));
	}

	public function actionCreate($userid,$username,$usersex)
	{
	   	if(empty($userid)){
			echo CJSON::encode(array('status'=>200, 'result'=>0, 'message'=>'没有登录'));
		   	exit;
		}
		if(!is_numeric($userid)) exit;
		   
	   	if(empty($_POST['ownerid'])){
			echo CJSON::encode(array('status'=>200, 'result'=>0, 'message'=>'没有指定转推id'));
		   	exit;
		}
		if(!is_numeric($_POST['ownerid'])) exit;
		
		if(empty($_POST['content'])){
			echo CJSON::encode(array('status'=>200, 'result'=>0, 'message'=>'没有发表转推评论'));
		   	exit;
		}

		$typeid = 1;
		if(!empty($_POST['typeid'] && is_numeric($_POST['typeid']))){
			$typeid = $_POST['typeid'];
		}

		$userid1 = $userid;
		$username1 = $username;
		if($typeid == 5){
			$shopsql = "select id,name from shop where userid = $userid and typeid = 1";
			$shop = Yii::app()->db->createCommand($shopsql)->queryRow();
			$userid1 = $shop['id'];
			$username1 = $shop['name'];
		}

		$retweet = new Retweet;
		$retweet->typeid = $typeid;
		$retweet->userid= $userid1;
		$retweet->username = $username1;
		$retweet->usersex = $usersex;
		$retweet->owner_id = $_POST['ownerid'];
		$retweet->content = $_POST['content'];
		if($retweet->save()){
			echo CJSON::encode(array('status' => 200, 'result'=>1, 'message'=>'转推成功！'));
			exit;
		}

		echo CJSON::encode(array('status' => 200, 'result'=>0, 'message'=>'转推未成功！'));
	}

	public function actionDelete($userid,$username,$usersex)
	{
		if(empty($_POST['id'])){
			echo CJSON::encode(array('status'=>200, 'message'=>'没有指定信息ID！', 'result'=>0));
			exit;
		}
		$id = $_POST['id'];

		$retweet = Retweet::model()->findByPk($id);
		if(!$retweet){
			echo CJSON::encode(array('status'=>200, 'message'=>'该ID没有信息！', 'result'=>0));
			exit;
		}

		$ownerid = $retweet->userid;
		$typeid = $retweet->typeid;

		if($typeid == 5){
			$owner = Shop::model()->findByAttributes(array("id"=>$ownerid,"typeid"=>1));
			if(!$owner){
				echo CJSON::encode(array('status'=>200, 'message'=>'该信息没有属主！', 'result'=>0));
				exit;
			}
			if($owner->userid != $userid){
				echo CJSON::encode(array('status'=>200, 'message'=>'不是您的信息!!!', 'result'=>0));
				exit;
			}
		}else{
			if($ownerid != $userid){
				echo CJSON::encode(array('status'=>200, 'message'=>'不是您的信息！', 'result'=>0));
				exit;
			}
		}

		if($retweet->delete()){
			echo CJSON::encode(array('status' => 200, 'message'=>'删除成功！', 'result'=>1));
			exit;
		}

		echo CJSON::encode(array('status' => 200, 'message'=>'删除未成功！', 'result'=>0));
	}
}
