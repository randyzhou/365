<?php

class PhotoController extends Controller
{
	public function actionList($ownerid=null,$typeid=null,$p=0,$limit=0,$userid=null)
	{
		if(is_null($userid)){
			echo CJSON::encode(array('status'=>200,'result'=>0,'msg'=>'没有登录','data'=>[],'userid'=>$userid));
			exit;
		}
		if(is_null($typeid)){
			echo CJSON::encode(array('status'=>200,'result'=>0,'msg'=>'缺乏分类信息','data'=>[]));
			exit;
		}
		if(is_null($ownerid)){
			echo CJSON::encode(array('status'=>200,'result'=>0,'msg'=>'没有指定属主ID','data'=>[]));
			exit;
		}
		if($typeid == 3){
			$owner1 = User::model()->findByPk($ownerid);
			if(!$owner1){
				echo CJSON::encode(array('status'=>200,'result'=>0,'msg'=>'信息属主没找到','data'=>[]));
				exit;
			}
			$owner = ["userid"=>$owner1->userid,"username"=>$owner1->username,"usersex"=>$owner1->usersex];
		}else{
			$owner1 = Shop::model()->findByPk($ownerid);
			if(!$owner1){
				echo CJSON::encode(array('status'=>200,'result'=>0,'msg'=>'信息属主没找到','data'=>[]));
				exit;
			}
			$owner = ["id"=>$owner1->id,"name"=>$owner1->name,"typeid"=>$owner1->typeid];
		}

		$criteria = new CDbCriteria();
		$criteria->order = "id desc";
		$criteria->limit = $limit;
		$criteria->offset = $p*$limit;
		$criteria->addCondition("ownerid = $ownerid and typeid = $typeid");
		$photos = Photo::model()->findAll($criteria);

		if($photos){
			echo CJSON::encode(array('status'=>200,'result'=>1,'owner'=>$owner,'data'=>$photos));
			exit;
		}
		echo CJSON::encode(array('status'=>200,'result'=>1,'msg'=>'没有信息','owner'=>$owner,'data'=>[]));
	}

	public function actionListAdmin($ownerid=null,$typeid=null,$p=0,$limit=0,$userid=null)
	{
		if(is_null($userid)){
			echo CJSON::encode(array('status'=>200,'result'=>0,'msg'=>'没有登录','data'=>[],'userid'=>$userid));
			exit;
		}
		if(is_null($typeid)){
			echo CJSON::encode(array('status'=>200,'result'=>0,'msg'=>'缺乏分类信息','data'=>[]));
			exit;
		}

		if($typeid == 3){
			$owner = User::model()->findByPk($userid);
			if(!$owner){
				echo CJSON::encode(array('status'=>200,'result'=>0,'msg'=>'信息属主没找到','data'=>[]));
				exit;
			}
			$ownerid = $owner->userid;
		}else{
			if(is_null($ownerid)){
				echo CJSON::encode(array('status'=>200,'result'=>0,'msg'=>'没有指定属主ID','data'=>[]));
				exit;
			}
			$owner = Shop::model()->findByAttributes(array('userid'=>$userid,'id'=>$ownerid));
			if(!$owner){
				echo CJSON::encode(array('status'=>200,'result'=>0,'msg'=>'信息属主没找到','data'=>[]));
				exit;
			}
		}

		$criteria = new CDbCriteria();
		$criteria->order = "id desc";
		$criteria->limit = $limit;
		$criteria->offset = $p*$limit;
		$criteria->addCondition("ownerid = $ownerid and typeid = $typeid");
		$photos = Photo::model()->findAll($criteria);

		if($photos){
			echo CJSON::encode(array('status'=>200,'result'=>1,'owner'=>$owner,'data'=>$photos));
			exit;
		}
		echo CJSON::encode(array('status'=>200,'result'=>1,'msg'=>'没有信息','owner'=>$owner,'data'=>[]));
	}

	public function actionCreate($userid,$typeid=null,$ownerid=null)
	{
		if(is_null($userid)){
			echo CJSON::encode(array('status'=>200,'result'=>0,'msg'=>'没有登录','photos'=>[],'userid'=>$userid));
			exit;
		}

		if(is_null($typeid)){
			echo CJSON::encode(array('status'=>200,'result'=>0,'msg'=>'缺乏分类信息','photos'=>[]));
			exit;
		}
		
		if($typeid == 3){
			$owner = User::model()->findByPk($userid);
			if(!$owner){
				echo CJSON::encode(array('status'=>200,'result'=>0,'msg'=>'信息属主没找到','photos'=>[]));
				exit;
			}
			$ownerid = $owner->userid;
		}else{
			if(is_null($ownerid)){
				echo CJSON::encode(array('status'=>200,'result'=>0,'msg'=>'没有指定属主ID','photos'=>[]));
				exit;
			}
			$owner = Shop::model()->findByPk($ownerid);
			if(!$owner){
				echo CJSON::encode(array('status'=>200,'result'=>0,'msg'=>'信息属主没找到','photos'=>[]));
				exit;
			}
			$ownerid = $owner["id"];
		}

		$photo = new Photo;
		$photo->ownerid = $ownerid;
		$photo->typeid = $typeid;

		if(isset($_POST["photoname"])) $photo->photoname = $_POST["photoname"];
		if(isset($_POST["avatar"])) $photo->avatar = $_POST["avatar"];
		$photo->phototime = date("Y-m-d H:i:s");

		if($photo->save()){
			echo CJSON::encode(array('status'=>200, 'result'=>1, 'photo'=>$photo,  'message'=>'上传图片成功'));
			exit;
		}

		echo CJSON::encode(array('status'=>200, 'result'=>0,  'message'=>'没有上传图片'));
	}	

	public function actionUpdate($ownerid=null,$id=null,$userid,$typeid=null)
	{
		if(is_null($id)){
			echo CJSON::encode(array('status'=>200,'result'=>0,'msg'=>'没有指定信息ID','photos'=>[],'userid'=>$userid));
			exit;
		}

		if(is_null($userid)){
			echo CJSON::encode(array('status'=>200,'result'=>0,'msg'=>'没有登录','photos'=>[],'userid'=>$userid));
			exit;
		}

		if(is_null($typeid)){
			echo CJSON::encode(array('status'=>200,'result'=>0,'msg'=>'缺乏分类信息','photos'=>[]));
			exit;
		}
		if($typeid == 1){
			$sql = "select id from shop where userid=$userid and typeid=1";
			$owner = Yii::app()->db->createCommand($sql)->queryRow();
			if(!$owner){
				echo CJSON::encode(array('status'=>200,'result'=>0,'msg'=>'信息属主没找到','photos'=>[]));
				exit;
			}
			$ownerid = $owner["id"];
		}
		if($typeid == 2){
			if(is_null($ownerid)){
				echo CJSON::encode(array('status'=>200,'result'=>0,'msg'=>'没有指定属主ID','photos'=>[]));
				exit;
			}
			$owner = Shop::model()->findByPk($ownerid);
			if(!$owner){
				echo CJSON::encode(array('status'=>200,'result'=>0,'msg'=>'信息属主没找到','photos'=>[]));
				exit;
			}
			$ownerid = $owner["id"];
		}
		if($typeid == 3){
			$owner = User::model()->findByPk($userid);
			if(!$owner){
				echo CJSON::encode(array('status'=>200,'result'=>0,'msg'=>'信息属主没找到','photos'=>[]));
				exit;
			}
			$ownerid = $owner->userid;
		}

		$photo = $this->loadModel($id);
		if($photo->ownerid != $ownerid){
			echo CJSON::encode(array('status'=>0,'msg'=>'这不是您的信息！'));
			exit;
		}

		if(isset($_POST["photoname"])) $photo->photoname = $_POST["photoname"];
		if(isset($_POST["avatar"])) $photo->avatar = $_POST["avatar"];
		$photo->phototime = date("Y-m-d H:i:s");

		if($photo->save()){
			echo CJSON::encode(array('status'=>200, 'result'=>1, 'photo'=>$photo,  'message'=>'上传图片成功'));
			exit;
		}

		echo CJSON::encode(array('status'=>200, 'result'=>0,  'message'=>'没有上传图片'));
	}	

	public function actionDelete($userid,$typeid=null)
	{
		if(is_null($userid)){
			echo CJSON::encode(array('status'=>200,'result'=>0,'msg'=>'没有登录','photos'=>[],'userid'=>$userid));
			exit;
		}

		if(is_null($typeid)){
			echo CJSON::encode(array('status'=>200,'result'=>0,'msg'=>'缺乏分类信息','photos'=>[]));
			exit;
		}
		if($typeid == 1){
			$sql = "select id from shop where userid=$userid and typeid=1";
			$owner = Yii::app()->db->createCommand($sql)->queryRow();
			if(!$owner){
				echo CJSON::encode(array('status'=>200,'result'=>0,'msg'=>'信息属主没找到','photos'=>[]));
				exit;
			}
			$ownerid = $owner["id"];
		}
		if($typeid == 3){
			$owner = User::model()->findByPk($userid);
			if(!$owner){
				echo CJSON::encode(array('status'=>200,'result'=>0,'msg'=>'信息属主没找到','photos'=>[]));
				exit;
			}
			$ownerid = $owner->userid;
		}

		if(!isset($_POST['id'])){
			echo CJSON::encode(array('status'=>1, 'message'=>'没有指定图片ID！'));
			exit;
		}
		
		$id = $_POST['id'];
		$photo = $this->loadModel($id);

		if($photo->ownerid != $ownerid){
			echo CJSON::encode(array('status'=>0,'msg'=>'这不是您的信息！'));
			exit;
		}

		if($photo->delete()){
			echo CJSON::encode(array('status'=>200, 'message'=>'删除图片成功！'));
			exit;
		}
		echo CJSON::encode(array('status'=>1, 'message'=>'删除图片不成功！'));
	}

	public function loadModel($id)
	{
		$model = Photo::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
}
