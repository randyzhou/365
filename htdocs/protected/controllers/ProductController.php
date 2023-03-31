<?php

class ProductController extends Controller
{
	public function actionList($ownerid=null,$type=null,$userid,$p=0,$limit=30)
	{
		$condition = "";
		$offset = $p*$limit;
		$page = " limit $offset,$limit";
		$owner = [];
		if(!is_null($type)){
			$condition = " and product.type = '$type'";
		}

		if(!is_null($ownerid)){
			$owner = Shop::model()->findByPk($ownerid);
			if(empty($owner)){
				echo CJSON::encode(array('status'=>200, 'result'=>0, 'msg'=>'没有找到属主', 'data'=>[]));
				exit;
			}
			$ownerid = $owner->id;
			$condition = $condition." and product.ownerid = $ownerid";
		}

 		$sql = "SELECT product.*,shop.name as shopname,shop.id as shopid,shop.province,shop.city FROM product left join shop on product.ownerid = shop.id WHERE product.id>0 $condition ORDER BY product.id desc $page";
 		$products = Yii::app()->db->createCommand($sql)->queryAll();
		echo CJSON::encode(array('status'=>200, 'result'=>1, 'owner'=>$owner, 'data'=>$products));
	}

	public function actionListAdmin($ownerid=null,$type=null,$admin=null,$userid,$p=0,$limit=30)
	{
		$condition = "";
		$offset = $p*$limit;
		$page = " limit $offset,$limit";
		$owner = '';

		if(!is_null($type)){
			$condition = " and product.type = '$type'";
		}
		
		$sql = "select * from shop where userid=$userid and typeid=1";
		$owner = Yii::app()->db->createCommand($sql)->queryRow();
		if(empty($owner)){
			echo CJSON::encode(array('status'=>200, 'result'=>0, 'msg'=>'没有找到属主', 'data'=>[]));
			exit;
		}
		$ownerid = $owner['id'];
		$condition = $condition." and product.ownerid = $ownerid";

 		$sql = "SELECT product.*,shop.name as shopname,shop.id as shopid FROM product left join shop on product.ownerid = shop.id WHERE product.id>0 $condition ORDER BY product.id desc $page";
 		$products = Yii::app()->db->createCommand($sql)->queryAll();
		echo CJSON::encode(array('status'=>200, 'result'=>1, 'owner'=>$owner, 'data'=>$products));
	}

	public function actionView($id)
	{
		$product = $this->loadModel($id);
		if(empty($product)){
			echo CJSON::encode(array('status'=>1, 'message'=>'没有该产品！'));
			exit;
		}
		$owner = $product->owner;
		$sql = "SELECT comment.*
						FROM comment
						WHERE comment.ownerid = $id and typeid = 5
						ORDER BY comment.id desc";
		$comments = Yii::app()->db->createCommand($sql)->queryAll();

		echo CJSON::encode(array('status'=>200, 'owner'=>$owner, 'product'=>$product, 'comments'=>$comments));
	}
	
	public function actionUpdate($userid,$username,$usersex,$id=null,$ownerid=null)
	{
		if(!empty($ownerid) && !is_numeric($ownerid)){
			$shop = Shop::model()->findByPk($ownerid);
		}else{
			$shop = Shop::model()->findByAttributes(array('userid'=>$userid,'typeid'=>1));
		}
		if(!$shop){
			echo CJSON::encode(array('status'=>0,'msg'=>'您尚未创建自己的店铺！'));
			exit;
		}

		if($id){
			if(!empty($id) && !is_numeric($id)){
				echo CJSON::encode(array("status"=>1, "message"=>'数据错误！', "shop"=>$shop));
				exit;
			}
			$product = Product::model()->findByPk($id);
			if(!$product){
				echo CJSON::encode(array("status"=>1, "message"=>"没有找到该产品信息！"));
				exit;
			}
			if($product->ownerid != $shop->id){
				echo CJSON::encode(array("status"=>1, "message"=>"该产品不属于您管辖范围！"));
				exit;
			}
		}else{
			$product = new Product();
		}

		if(isset($_POST['title']) && isset($_POST['content']) && isset($_POST['avatar']) && isset($_POST['type']) && isset($_POST['price']))
		{
			$product->title = $_POST['title'] or "";
			$product->content = $_POST['content'] or "";
			$product->avatar = $_POST['avatar'] or "";
			$product->type = $_POST['type'] or 0;
			$product->price = $_POST['price'] or 0;
			$product->updatedate = date("Y-m-d H:i:s");
			$product->ownerid = $shop->id;
			$product->owner_name = $shop->name;
			$product->userid = $userid;
			$product->username = $username;
			$product->usersex = $usersex;

			if($product->save()){
				if(!$id){
					$sql = "SELECT * FROM product WHERE ownerid = $shop->id ORDER BY id desc";
					$products = Yii::app()->db->createCommand($sql)->queryAll();
					echo CJSON::encode(array("status"=>200, "message"=>"提交成功！", "products"=>$products));
					exit;
				}
				echo CJSON::encode(array("status"=>200, "message"=>"提交成功！", "product"=>$product));
				exit;
			}
			echo CJSON::encode(array("status"=>1, "message"=>"修改失败！"));
			exit;
		}
		echo CJSON::encode(array("status"=>200, "message"=>"提交资料不全", "shop"=>$shop));
	}


	public function actionDelete($userid)
	{
		if(is_null($userid)){
			echo CJSON::encode(array('status'=>200,'result'=>0,'msg'=>'没有登录','photos'=>[],'userid'=>$userid));
			exit;
		}

		$sql = "select id from shop where userid=$userid and typeid=1";
		$owner = Yii::app()->db->createCommand($sql)->queryRow();
		if(!$owner){
			echo CJSON::encode(array('status'=>200,'result'=>0,'msg'=>'信息属主没找到','photos'=>[]));
			exit;
		}
		$ownerid = $owner["id"];

		if(!isset($_POST['id'])){
			echo CJSON::encode(array('status'=>1, 'message'=>'没有指定产品ID！'));
			exit;
		}
		
		$id = $_POST['id'];
		$product = $this->loadModel($id);

		if($product->ownerid != $ownerid){
			echo CJSON::encode(array('status'=>0,'msg'=>'这不是您的信息！'));
			exit;
		}

		if($product->delete()){
	 		$sql = "SELECT * FROM product WHERE ownerid = $ownerid ORDER BY id desc";
	 		$products = Yii::app()->db->createCommand($sql)->queryAll();
			echo CJSON::encode(array('status'=>200, 'message'=>'删除成功！', 'products'=>$products, 'result'=>1));
			exit;
		}

		echo CJSON::encode(array('status'=>200, 'message'=>'删除失败！', 'result'=>0));
		exit;
	}

	public function loadModel($id)
	{
		$model=Product::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

}
