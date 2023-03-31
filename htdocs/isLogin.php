<?
session_start();
if(isset($_SESSION["unionid"])){
  echo json_encode(array("result"=>1,"unionid"=>$_SESSION['unionid'],"openid"=>$_SESSION["openid"],"nickname"=>$_SESSION["nickname"]));
  exit;
}else{
  echo json_encode(array("result"=>0,"msg"=>"没有登录！"));
}
