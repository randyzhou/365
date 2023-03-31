<?
session_start();
require_once "./protected/config.php";

$reurl = URL."/wxpay.php";
$wxloginurl = URL;

$storeid = "";
$query_storeid = "";
if(isset($_GET['storeid'])){
  $storeid = $_GET['storeid'];
  $query_storeid = "storeid=".$storeid;
}

$vurl =  $reurl;
if(!empty($storeid) && !is_numeric($storeid)) exit;

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

function getOpenid($reurl,$query_storeid){
  $appid = APPID;
  $appsecret = APPSECRET;

  $return_url = urlencode($reurl."?".$query_storeid);
  $url = "https://open.weixin.qq.com/connect/oauth2/authorize?appid=$appid&redirect_uri=$return_url&response_type=code&scope=snsapi_base&state=STATE#wechat_redirect";
  if(!isset($_GET["code"])){
    header("Location: $url");
    exit;
  }

  $code = $_GET['code'];

  $access_token_url = 'https://api.weixin.qq.com/sns/oauth2/access_token?appid='.$appid.'&secret='.$appsecret.'&code='.$code.'&grant_type=authorization_code';
  $res = json_decode(do_curl($access_token_url));
  if(!isset($res->access_token)){
    echo showDiv("登录错误！");
    exit;
  }

  $_SESSION["openid"] = $res->openid;
  $_SESSION["unionid"] = "";
  $_SESSION["nickname"] = "";
  $_SESSION["sex"] = "";
  $_SESSION["country"] = "";
  $_SESSION["province"] = "";
  $_SESSION["city"] = "";
  $_SESSION["headimgurl"] = "";

  return $res->openid;
}

$openid = null;
$unionid = null;
$nickname = null;
$sex = null;
$country = null;
$province = null;
$city = null;
$headimgurl = null;

if(isset($_SESSION["unionid"]) && !empty($_SESSION["unionid"])){
  $unionid = $_SESSION['unionid'];
  $openid = $_SESSION['openid'];
  $nickname = $_SESSION['nickname'];
  $sex = $_SESSION['sex'];
  $country = $_SESSION['country'];
  $province = $_SESSION['province'];
  $city = $_SESSION['city'];
  $headimgurl = $_SESSION['headimgurl'];
}else{
  $openid = getOpenid($reurl,$query_storeid);
}

// $user_url = 'https://api.weixin.qq.com/sns/userinfo?access_token='.$res->access_token.'&openid='.$res->openid.'&lang=zh_CN';
// $data = json_decode(do_curl($user_url));
// if(!isset($data->openid)){
//   echo showDiv('返回登录会员信息错误！');
//   exit;
// }
//
// $openid = strip_tags($data->openid);
// $unionid = strip_tags($data->unionid);
// $nickname = $data->nickname;
// $sex = $data->sex;
// $country = $data->country;
// $province = $data->province;
// $city = $data->city;
// $headimgurl = $data->headimgurl;

if(empty($storeid)){
  echo showDiv("没有指定店家ID！");
  exit;
}
$storeSql = "SELECT id,store_unionid,store_openid,store_nickname,store_username FROM store where id = '$storeid'";
$storeRes = mysql_query($storeSql);
$store = mysql_fetch_array($storeRes);
if(empty($store)){
  echo showDiv("该店家ID不存在！");
  exit;
}

$ref_openid = $store["store_openid"];
$ref_unionid = $store["store_unionid"];
$ref_nickname = $store["store_nickname"] or $store["store_username"];

if(empty($ref_unionid)){
  echo showDiv("该店家老板ID不存在，请及时告知该店长！");
  exit;
}

$refUserSql = "SELECT id,unionid FROM login where unionid = '$ref_unionid'";
$refUserRes = mysql_query($refUserSql);
$refUser = mysql_fetch_array($refUserRes);
if(empty($refUser)){
  echo showDiv("该店家老板ID不存在！");
  exit;
}

$refunionid = $refUser["unionid"];

$loginSql = "SELECT * FROM login where openid = '$openid'";
$loginRes = mysql_query($loginSql);
$login = mysql_fetch_array($loginRes);
if(!$login){
  $sql = "INSERT INTO `login` (`id`, `openid`, `unionid`, `access_type`, `nickname`, `sex`, `country`, `province`, `city`, `mobile`, `headimgurl`, `ref_openid`, `ref_unionid`, `ref_nickname`, `create_date`, `join_type`, `refs`) VALUES (NULL, '$openid', '$unionid', 'weixin', '$nickname', '$sex', '$country', '$province', '$city', '', '$headimgurl', '$ref_openid', '$ref_unionid', '$ref_nickname', CURRENT_TIMESTAMP, '扫码加入', '0')";
  if(mysql_query($sql)){
    //echo showDiv('加入会员成功！');
  }else{
    echo showDiv('加入会员不成功！');
    exit;
  }
}else{
	$unionid = $login["unionid"];
	$nickname = $login["nickname"];
	$sex = $login["sex"];
	$country = $login["country"];
	$province = $login["province"];
	$city = $login["city"];
	$headimgurl = $login["headimgurl"];

  $_SESSION["unionid"] = $unionid;
  $_SESSION["nickname"] = $nickname;
  $_SESSION["sex"] = $sex;
  $_SESSION["country"] = $country;
  $_SESSION["province"] = $province;
  $_SESSION["city"] = $city;
  $_SESSION["headimgurl"] = $headimgurl;
}

$storeUserSql = "SELECT id,unionid FROM store_user where storeid = '$storeid' and openid = '$openid'";
$storeUserRes = mysql_query($storeUserSql);
$storeUser = mysql_fetch_array($storeUserRes);
if(!$storeUser){
  $joinStoreUserSql = "INSERT INTO `store_user` (`id`, `storeid`, `userid`, `certified`, `nickname`, `openid`, `unionid`, `store_username`, `sex`, `left_money`, `total_money`, `consume_money`, `charge_times`, `charge_time`, `phone`, `join_time`) VALUES (NULL, '$storeid', '', '1', '新人', '$openid', '$unionid', '$nickname', '0', '0', '0', '0', '0', CURRENT_TIMESTAMP, '', CURRENT_TIMESTAMP)";
  $joinStoreRes = mysql_query($joinStoreUserSql);
  if($joinStoreRes){
    //echo showDiv('加入店家会员成功！');
  }else{
    echo showDiv('加入店家会员不成功！');
    exit;
  }
}elseif(empty($storeUser["store_unionid"])){
  $updateStoreUserSql = "update store_user set unionid='$unionid', store_username='$nickname', sex='$sex' where storeid = '$storeid' and openid = '$openid'";
  $updateStoreUserRes = mysql_query($updateStoreUserSql);
}

$tokenString = "juyou365$openid";
$token = md5($tokenString);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"  />
    <title>365支付</title>
    <style>
        html,body{
          margin: 0px;
          padding: 0px;
          height: 100%;
          max-width: 400px;
          font-family: "Helvetica Neue","Hiragino Sans GB","Microsoft YaHei","\9ED1\4F53",Arial,sans-serif
        }
        input,select,textarea{
          border: 1px #ccc solid;
          border-radius: 3px
        }
        table{
          border-collapse: collapse;
          border:0px;
        }
        table td{
          vertical-align: middle
        }
        .tdStyle{
          text-align:center;
          border:1px solid #eee;
          width:25%;
          height:50px;
          fontW-weight:lighter;
          font-size:25px
        }
        .tdStyle1{
          border-right:0
        }
        .tdStyle2{
          border-left:0
        }
    </style>

    <script src="/shop/js/jquery.min.js"></script>
    <script>
    //判断是否为JSON格式数据
    function isJson(obj) {
      var isjson = (typeof(obj) == "object" || typeof(obj) == "array") && Object.prototype.toString.call(obj).toLowerCase() == "[object object]" && !obj.length;
      return isjson;
    }

    function resultAlert(msg,defaultMsg){
      var errMsg = "操作结果返回错误信息！";
      var msg = msg || '';
      if(typeof msg == "object"){
        var response = msg;
        if(response.message) errMsg = response.message;
        else if(response.msg) errMsg = response.msg;
        else if(response.info) errMsg = response.info;
        else if(response.data) {
            if(response.data.message) errMsg = response.data.message;
            else if(response.data.msg) errMsg = response.data.msg;
            else if(response.data.info) errMsg = response.data.info;
            else if(defaultMsg) errMsg = defaultMsg;
        } else if(defaultMsg) errMsg = defaultMsg;
        msg = errMsg;
      }
      $("#resultMsg span").html(msg);
      $("#resultMsg").fadeIn().fadeOut(1500);
    }

    //根据关键字获取url的参数
    function getUrlParam(name) {
        var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)","i");
        var r = '';
        if(window.location.hash) r = window.location.hash.split("?")[1];
        else r = window.location.search.substr(1);

        var res = null;
        if(r) res = r.match(reg);

        if (res!=null) return decodeURI(res[2]);
        return null;
    }

    function handleChange(event){
      var payPrice = event.target.value;
      var offPrice = payPrice*this.state.payoff/100;
      this.setState({payPrice,offPrice});
    }

    //调用微信JS api 支付
    function jsApiCall(){
      var $jsApiParameters = this.state.jsApiParameters;
      var money = parseFloat(this.state.storeuser.consume_money)+parseFloat(this.state.offPrice);
      money = money.toFixed(2);
      WeixinJSBridge.invoke(
        'getBrandWCPayRequest',
        $jsApiParameters,
        function(res){
         if(res.err_msg == "get_brand_wcpay_request:ok" ) {
           $("#consume_money").html(money);
           $("#charge_times").html(parseInt($("#charge_times").html())+1);
           $("#payDiv").hide();
           $("#storeDetail").show();
         }else{
           alert("支付未成功！");
         }
       }.bind(this)
      );
    }

    function callpay(){
      if(this.state.offPrice < 1.02){
        alert("折后金额小于1.02元，不能支付！");
        return false;
      }
      var postData = {offPrice:this.state.offPrice, payPrice:this.state.payPrice, payoff:this.state.payoff, order_store_name:this.state.store.store_name, storeid:"<?php echo $storeid; ?>"};

      if(parseFloat(this.state.offPrice) < parseFloat(this.state.left_money)){
      	memberPay(postData);
      	return false;
      }

      $.ajax({
        type: "post",
        url: "/wxpay/example/jsapiajax.php",
        data: postData,
        dataType: 'json'
      }).done(function(res){
        if(!isJson(res)){
          resultAlert("服务器文件错误！");
          return false;
        }
        this.setState({
          jsApiParameters:res
        });

        if(typeof WeixinJSBridge == "undefined"){
          if( document.addEventListener ){
            document.addEventListener('WeixinJSBridgeReady', jsApiCall, false);
          }else if (document.attachEvent){
            document.attachEvent('WeixinJSBridgeReady', jsApiCall);
            document.attachEvent('onWeixinJSBridgeReady', jsApiCall);
          }
        }else{
          this.jsApiCall();
        }
      }.bind(this));
    }

    function memberPay(postData){
      var money = parseFloat(this.state.storeuser.consume_money)+parseFloat(this.state.offPrice);
      money = money.toFixed(2);
      var left_money = parseFloat(this.state.storeuser.left_money)-parseFloat(this.state.offPrice);
      left_money = left_money.toFixed(2);

      var r = confirm("确认支付"+this.state.offPrice+"元？");
      if(!r) return false;

      $.ajax({
        type: "post",
        url: "/store/memberpay",
        data: postData,
        dataType: 'json'
      }).done(function(res){
        if(!isJson(res)){
          resultAlert("服务器文件错误！");
          return false;
        }
        if(res.status == 200){
           $("#consume_money").html(money);
           $("#charge_times").html(parseInt($("#charge_times").html())+1);
           $("#left_money").html(left_money);
           $("#payDiv").hide();
           $("#storeDetail").show();
        }
        resultAlert(res);
      }.bind(this));
    }

    function addNumber(num){
      if(this.state.payPrice.replace(/(^s*)|(s*$)/g, "").length ==0 && num == ".") return false;

      var payPrice = this.state.payPrice+num;
      var floatNum = payPrice.split(".")[1];
      if(floatNum && floatNum.length > 2) return false;

      var offPrice = payPrice*this.state.payoff/100;
      offPrice = offPrice.toFixed(2);
      this.setState({payPrice,offPrice});
    }

    function cancelNumber(num){
      var str = this.state.payPrice.toString();
      var payPrice = str.substring(0,str.length-1);
      var offPrice = payPrice*this.state.payoff/100;
      offPrice = offPrice.toFixed(2);
      this.setState({payPrice,offPrice});
    }

    function join(){
      location.href = "<?php echo $wxloginurl; ?>/wxlogin.php?query_url=/stores/detail/<?php echo $storeid ?>&refunionid=<?php echo $refunionid; ?>";
    }

    function setState(obj){
      for(var i in obj){
        state[i] = obj[i];
        if(typeof(obj[i]) != "object"){
          $("#"+i).html(state[i]);
        }
      }
    }

    function showpaydiv(mode){
      if(mode == "block") $("#payDetailDiv").show();
      if(mode == "none") $("#payDetailDiv").hide();
    }

	function touchEnd(url){
  		location.href = url;
	}

    var state = {
      id: getUrlParam("storeid"),
      paycertname: "",
      payPrice: "",
      payoff: 100,
      offPrice: 0,
      jsApiParameters: {}
    };

    var token = '<?php echo $token; ?>';
    $.ajaxSetup({
      ifModified: true,
      cache: true,
      data:{token:token},
      error: function(jqXHR, textStatus, errorThrown){
        //console.log(errorThrown);
        switch (jqXHR.status){
          case(500):
            resultAlert("服务器系统内部错误");
            break;
          case(401):
            resultAlert("未登录");
            break;
          case(403):
            resultAlert("无权限执行此操作");
            break;
          case(408):
            resultAlert("请求超时");
            break;
          default:
            resultAlert("未知错误");
        }
      }
    });

    $.ajax({
      type: "get",
      url: url = "/store/storedetails/id/"+this.state.id,
      dataType: 'json'
    }).done(function(res){
      if(!isJson(res)){
        resultAlert("服务器文件错误！");
        return false;
      }
      if(res.status == 200){
        var storeuser = res.storeuser;
        var store = res.store;
        var store_pay_cert_name = JSON.parse(store.store_pay_cert_name);
        var paycertifiedIndex = parseInt(storeuser.paycertified);
        var paycertifiedArray = store_pay_cert_name[paycertifiedIndex]||["",100];
        var paycertname = paycertifiedArray[0];
        var payoff = paycertifiedArray[1];
        this.setState({
          store: store,
          storeuser: storeuser,
          paycertname: paycertname,
          payoff: payoff,
          left_money: storeuser.left_money
        });
        $("#store_name").html(store.store_name);
        $("#store_username").html(storeuser.store_username);
        $("#consume_money").html(storeuser.consume_money);
        $("#left_money").html(storeuser.left_money);
        $("#charge_times").html(storeuser.charge_times);
        $("#paycertname").html(paycertname);
        $("#payoff").html(payoff);
        $("#store_address").html(store.city+store.district+store.town+store.road+store.building);
        $("#store_logo").attr('src',"/topstorephotos/"+store.id+".gif");
        $("#promote_title").html(store.promote_title);
        $("#promote_detail").html(store.promote_detail);
        var phoneWidth =  parseInt(window.screen.width)>450?450:parseInt(window.screen.width)*0.85;
        $("#store_img").attr("src","/storepromotephotos/"+store.id+".gif").css("width",phoneWidth);
        $("#store_intro").html(store.store_intro);

        for(var i=0;i<store_pay_cert_name.length;i++){
          if(i>0){
        	  if(!store_pay_cert_name[i][2]){
          		alert("该商家未正确设置会员优惠政策，暂不能支付！");
          		return false;
          	  }
          	  var money = store_pay_cert_name[i][2];
          	  $(".paycertified").append("<tr><td style='text-align:center'>"+money+"</td><td>"+store_pay_cert_name[i][0]+"</td><td>"+store_pay_cert_name[i][1]+"%</td></tr>");
          }
        }

      }else{
        resultAlert(res);
      }
    }.bind(this));

    </script>
  </head>
  <body>
    <div style="background-color:#eee;width:100%;height:100%">
    <table style="width:100%;background-color:white;text-align:center;font-size:14px">
    	<tbody>
    		<tr style="height:35px;line-height:35px;">
    			<td style="text-align:center" ontouchend="touchEnd('/wxlogin.php?query_url=/stores/detail/<?php echo $storeid ?>')"><span>店铺首页</span></td>
    			<td style="text-align:center" ontouchend="touchEnd('/wxlogin.php?query_url=/stores/space/<?php echo $storeid ?>')"><span>商家动态</span></td>
    			<td style="text-align:center" ontouchend="touchEnd('/wxlogin.php?query_url=/stores/storeproducts/<?php echo $storeid ?>')"><span>产品服务</span></td>
    			<td style="text-align:center" ontouchend="touchEnd('/wxlogin.php?refunionid=<?php echo $unionid ?>')"><span>管理后台</span></td>
    		</tr>
    		<tr><td colspan="4" style="border-bottom:1px #ccc solid"></td></tr>
    	</tbody>
    </table>
      <table style="width:100%; text-align:center">
        <tbody>
          <tr style="height:35px;line-height:35px">
          <td style="text-align:center">
          <table style="margin:0 auto"><tbody><tr>
          <td style="width:60px;text-align:center;border-radius:5px"><img id="store_logo" style="width:50px;border-radius:5px;display:block"/></td>
          <td>
            <table>
              <tr><td style="text-align:left">
              <span id="store_name" style="display:block;font-size:16px;height:30px;line-height:30px">店铺名称</span>
              <span id="store_address" style="display:block;font-size:12px;color:#999;height:20px;line-height:20px;marginTop:-5px">店铺详细地址</span>
              </td></tr>
            </table>
          </td>
          </tr></tbody></table>
          </td>
          </tr>
        </tbody>
      </table>

      <div style="height:0px"></div>

      <table style="width:100%; text-align:center">
        <tbody>
          <tr style="height:25px"><td style="text-align:center;color:forestgreen">
          	<span id="store_username"></span>
          	<div style="font-size:14px;color:blueviolet">余额<span id="left_money"></span>元 <span id="charge_times">0</span>次共消费<span id="consume_money">0</span>元 <span id="paycertname"></span> <span id="payoff">100</span>%折</div>
          </td></tr>
        </tbody>
      </table>

      <div id="payDiv">
        <div style="width:90%;margin:0 auto;height:60px;border-radius:3px;border:1px solid #aaa;background-color:white">
          <table style="width:100%;height:100%"><tbody><tr><td style="vertical-align:middle;padding:5px">
            <table style="position:relative; width:100%">
              <tbody>
                <tr>
                  <td style="text-align:left;width:100px">
                    <span style="color:#999;width:60px">金额</span>
                  </td>
                  <td style="text-align:right">
                    <font style="font-size:20">￥</font><font id="payPrice" style="font-size:26"></font>
                  </td>
                  <td style="width:200px;text-align:right"><span style="color:#999">折后：</span><span id="offPrice" style="font-size:26;width:100%;height:35px;border:0px;border-radius:0px;text-align:left;color:darkgreen;color:red">0</span>元</td>
                </tr>
              </tbody>
            </table>
          </td></tr></tbody></table>
        </div>

        <div style="height:10px"></div>

        <table style="width:100%">
        <tbody>
          <tr>
            <td style="text-align:center;" ontouchend="showpaydiv('block')">
              <span style="color:firebrick;font-size:16px;margin-left:-10px">本店会员累积消费优惠说明</span>
            </td>
          </tr>
        </tbody>
        </table>

        <table style="width:100%; text-align:center; color:darkcyan" ontouchend="showpaydiv('block')">
          <tbody>
            <tr>
            <td style="text-align:center">
              <table class="paycertified" style="margin:0 auto;font-size:14px"><tr><td style="text-align:center;width:100px">累积消费(元)</td><td style="width:100px">会员级别</td><td style="width:100px">优惠折扣</td></tr></table>
            </td>
            </tr>
          </tbody>
        </table>

        <div id="payDetailDiv" style="position: fixed; top: 0px; background-color: white; z-index: 10000000; margin: 0 auto; display: none; width: 100%; height: 100%; overflow-y:auto ">
          <span style="display:inline-block;position: absolute;right: 2px;top: 2px;background: white;padding: 5px;border-radius: 15px;width: 20px;height: 20px;text-align: center;" ontouchend="showpaydiv('none')">X</span>
          <table style="width:100%"><tr>
            <td style="width:5px"></td>
            <td>
              <table style="width:100%">
                <tbody>
                  <tr>
                    <td style="text-align:center;">
                      <span style="color:firebrick;font-size:20px;margin-left:-10px">本店会员累积消费优惠说明</span>
                    </td>
                  </tr>
                </tbody>
              </table>
              <table style="width:100%; text-align:center; color:darkcyan; ">
                <tbody>
                  <tr>
                  <td style="text-align:center">
                    <table class="paycertified" style="margin:0 auto"><tr><td style="text-align:center;width:100px">累积消费(元)</td><td style="width:100px">会员级别</td><td style="width:100px">优惠折扣</td></tr></table>
                  </td>
                  </tr>
                </tbody>
              </table>
              <table style="width:100%">
                <tbody>
                  <tr>
                    <td style="text-align:center;">
                      <span id="promote_title" style="color:firebrick;font-size:20px;margin-left:-10px"></span>
                    </td>
                  </tr>
                </tbody>
              </table>
              <table style="width:100%; text-align:center; color:darkcyan; ">
                <tbody>
                  <tr>
                  <td style="text-align:center">
                    <img id="store_img" style="max-width:300px"/>
                    <table style="width:95%"><tr><td id="promote_detail" style="text-align:left;color:#666"></td></tr></table>
                  </td>
                  </tr>
                </tbody>
              </table>
            </td>
            <td style="width:5px"></td>
          </tr></table>
          <div style="height:30px"></div>
        </div>

        <div style="height:10px"></div>

        <table style="position:fixed;bottom:0px; background-color:white; border-top:1px solid #eee; width:100%">
          <tbody>
            <tr><td class="tdStyle" ontouchend="addNumber(1)">1</td><td class="tdStyle" ontouchend="addNumber(2)">2</td><td class="tdStyle" ontouchend="addNumber(3)">3</td><td ontouchend="cancelNumber()" class="tdStyle"><img src=/shop/image/undo.jpg style="width:43px"/></td></tr>
            <tr><td class="tdStyle" ontouchend="addNumber(4)">4</td><td class="tdStyle" ontouchend="addNumber(5)">5</td><td class="tdStyle" ontouchend="addNumber(6)">6</td><td rowSpan=3 style="text-align:center;background-color:limegreen"><table style="width:42px;margin:0 auto;font-size:20px;color:white"><tr><td ontouchend="callpay()">确认支付</td></tr></table></td></tr>
            <tr><td class="tdStyle" ontouchend="addNumber(7)">7</td><td class="tdStyle" ontouchend="addNumber(8)">8</td><td class="tdStyle" ontouchend="addNumber(9)">9</td></tr>
            <tr><td class="tdStyle tdStyle1" ontouchend="addNumber(0)">0</td><td class="tdStyle tdStyle2"></td><td class="tdStyle" ontouchend="addNumber('.')">·</td></tr>
          </tbody>
        </table>
      </div>

      <div id="storeDetail" style="display:none">
        <table style="width:100%; text-align:center">
          <tbody>
            <tr style="height:35px;line-height:35px">
            <td style="text-align:center">
            <table style="margin:0 auto"><tbody>
              <tr><td id="store_intro" style="text-align:left;width:250px">

              </td></tr>
              <tr><td style="text-align:center;width:250px">
                <div style="text-align:center; color:firebrick; font-size:14px; margin-top: 20px">
                	<div>点击"进入店铺主页"才能成为正式会员！</div>
                    <span ontouchend="join()" style="margin-left:10px; padding:7px; color:white; background-color:crimson; border-radius:5px; font-size:16px; font-family:sans_serif">进入店铺主页</span>
                </div>
              </td></tr>
            </tbody></table>
            </td>
            </tr>
          </tbody>
        </table>
        <div style="width:100%; height:10px"></div>
        <table style="width:100%; border:0px; margin-top:0px; background-color:white">
          <tbody>
          	<tr>
          		<td style="width:100px; text-align:center; vertical-align:middle">
                	<span style="display:inline-block; text-align:center; font-size:16px; color:blueviolet; margin-top:10px">长按关注进入后台公众号，从此不迷路！</span>
               		<img src="/shop/image/mp.jpg" style="width:70%"/>
          		</td>
          	</tr>
          </tbody>
        </table>
      </div>

    </div>
  </body>
</html>
