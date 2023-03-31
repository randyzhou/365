<?
session_start();
require_once "./protected/config.php";

$baseurl = URL;
$url = $baseurl;
$reurl = $baseurl."/shop";
$query_url = "/me/admin";

if(isset($_GET["query_url"])) $query_url = $_GET["query_url"];

$refunionid = "";
$query_refunionid = "";
if(isset($_GET['refunionid'])){
  $refunionid = $_GET['refunionid'];
  //if(!empty($refunionid) && !is_numeric($refunionid)) exit;
  $_SESSION['refunionid'] = $refunionid;
  $query_refunionid = "&refunionid=".$refunionid;
}

if(strpos($refunionid,',') !== false || strpos($refunionid,' ') !== false){
	echo "非法的数据！";
	exit;
}

$storeid = "";
$query_storeid = "";
if(isset($_GET['storeid'])){
  $storeid = $_GET['storeid'];
  $query_storeid = "storeid=".$storeid;
}

$vurl =  $reurl."/#".$query_url;

if(isset($_SESSION["unionid"]) && !empty($_SESSION["unionid"])){
  $unionid = $_SESSION['unionid'];
  $openid = $_SESSION['openid'];
  $nickname = $_SESSION['nickname'];
  $sex = $_SESSION['sex'];
  $country = $_SESSION['country'];
  $province = $_SESSION['province'];
  $city = $_SESSION['city'];
  $headimgurl = $_SESSION['headimgurl'];

  $tokenString = "juyou365$unionid";
  $token = md5($tokenString);
  $vurl = $vurl;
}else{
  $appid = APPID;
  $appsecret = APPSECRET;

  $return_url = $url."/wxlogin.php?query_url=$query_url$query_refunionid";
  $return_url = urlencode($return_url);
  $url = "https://open.weixin.qq.com/connect/oauth2/authorize?appid=$appid&redirect_uri=$return_url&response_type=code&scope=snsapi_userinfo&state=STATE#wechat_redirect";
  if(!isset($_GET["code"])){
    header("Location: $url");
    exit;
  }

  function do_curl($url,$data='',$agent=''){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0); //是否返回header头
    curl_setopt($ch, CURLOPT_TIMEOUT,6); //超时时间
    if($data){
      curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    }
    //curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // 跳过证书检查
    //curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, true); // 从证书中检查SSL加密算法是否存在
    if($agent){
      curl_setopt($ch, CURLOPT_USERAGENT, $agent);
    }
    $content = curl_exec($ch);
    return $content;
  }

  function showDiv($str){
    return "<table style='width:100%;margin-top:100px'><tr><td style='text-align:center;font-size:30px;color:red'>$str</td></tr></table>";
  }

  $code = $_GET['code'];
  $access_token_url = 'https://api.weixin.qq.com/sns/oauth2/access_token?appid='.$appid.'&secret='.$appsecret.'&code='.$code.'&grant_type=authorization_code';
  $res = json_decode(do_curl($access_token_url));
  if(!isset($res->access_token)){
    echo showDiv("登录错误！");
    exit;
  }

  $user_url = 'https://api.weixin.qq.com/sns/userinfo?access_token='.$res->access_token.'&openid='.$res->openid.'&lang=zh_CN';
  $data = json_decode(do_curl($user_url));
  if(!isset($data->unionid)||!isset($data->openid)){
    echo showDiv('返回登录会员信息错误！');
    exit;
  }

  $openid = strip_tags($data->openid);
  $unionid = strip_tags($data->unionid);
  $nickname = $data->nickname;
  $sex = $data->sex;
  $country = $data->country;
  $province = $data->province;
  $city = $data->city;
  $headimgurl = $data->headimgurl;


  $_SESSION["openid"] = $openid;
  $_SESSION["unionid"] = $unionid;
  $_SESSION["nickname"] = $nickname;
  $_SESSION["sex"] = $sex;
  $_SESSION["country"] = $country;
  $_SESSION["province"] = $province;
  $_SESSION["city"] = $city;
  $_SESSION["headimgurl"] = $headimgurl;
}

$ref_openid = "omrVBuI-IUnoN5j5L3n7aecHLgQM";
$ref_unionid = "onCTq1NQHreIVBngaBA1YsVr7UBA";
$ref_nickname = "如金";

if(!empty($refunionid)){
  $refSql = "SELECT openid,unionid,nickname FROM login WHERE unionid = '$refunionid'";
  $refRes = mysql_query($refSql);
  $ref = mysql_fetch_array($refRes);
  if($ref){
    $ref_openid = $ref['openid'];
    $ref_unionid = $ref['unionid'];
    $ref_nickname = $ref['nickname'];
  }
}

$loginSql = "SELECT id,unionid FROM login where openid = '$openid'";
$loginRes = mysql_query($loginSql);
$login = mysql_fetch_array($loginRes);
if(!$login){
  $sql = "INSERT INTO `login` (`id`, `openid`, `unionid`, `access_type`, `nickname`, `sex`, `country`, `province`, `city`, `mobile`, `headimgurl`, `ref_openid`, `ref_unionid`, `ref_nickname`, `create_date`, `join_type`, `refs`) VALUES (NULL, '$openid', '$unionid', 'weixin', '$nickname', '$sex', '$country', '$province', '$city', '', '$headimgurl', '$ref_openid', '$ref_unionid', '$ref_nickname', CURRENT_TIMESTAMP, '推荐加入', '0')";
  if(mysql_query($sql)){
//    echo "加入会员成功！</br>";
  }else{
    echo showDiv('加入会员不成功！');
    exit;
  }
}
elseif(empty($login['unionid'])){
  $updateLoginSql = "update login set `unionid`='$unionid',`nickname`='$nickname',`sex`='$sex',`country`='$country',`province`='$province',`city`='$city',`headimgurl`='$headimgurl' where openid = '$openid'";
  $updateLoginRes = mysql_query($updateLoginSql);
  $updateLogin = mysql_fetch_array($updateLoginRes);
  if(!updateLogin){
    echo showDiv('正式加入会员不成功！');
    exit;
  }
}

$tokenString = "juyou365$unionid";
$token = md5($tokenString);

//$_SESSION["access_token"] = $res->access_token;
//$_SESSION["fresh_token"] = $res->refresh_token;

//echo '登录成功';
//echo $vurl;

$vurl = $vurl."?token=$token";

header("Location:$vurl");
