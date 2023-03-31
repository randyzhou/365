//const $ = window.$;

//fetch,ajax获取处理api请求数据
const fetchApi = function(obj,fn){
  let objurl = obj.url;
  if(token && uptime){
    if(objurl.indexOf('?') > 0){
      objurl = objurl + '&token=' + token + '&uptime=' + uptime;
    }else{
      objurl = objurl + '?token=' + token + '&uptime=' + uptime;
    }
  }
  let url = objurl || '';
  obj.method = obj.method || 'GET';
  obj.body = obj.body || null;
  obj.headers = obj.headers || {
    'Accept': 'application/json, text/javascript, */*; q=0.01',
    'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'
  };
  if(obj.method == "POST") obj.body = parseParam(obj.body||{}) || null;

  fetch(url,obj)
  .then(response=>response.json())
  .then(function(res){
    if(!isJson(res)){
      errMessage("","服务器文件错误！");
      return false;
    }
    if(res.status >= 0 || res.result >= 0 || res.statusCode >= 0){
      if(res.unlogin == 2){
        console.log(url)
        jsonshow(res);
        location.reload();        
      }
      if(fn) fn(res);
    }else{
      //errMessage(res);
    }
  }.bind(this))
  .catch(function(err){
    if(Object.keys(err).length != 0){
      console.log("fetch error:")
      console.log(url)
      console.log(err)
    }
  });
}

$(function(){
  function veriShow() {
    $("#verishowSpan").html(maxtime);
    if (maxtime > 0) {
      --maxtime;
    } else {
      clearInterval(timer);
      $("#vericharSpan").html("发送验证码");
      $("#verishowSpan").html(60);
      $("#veriShow").hide();
      $("#reg_vericode").attr("disabled","disabled");
      $("#vericodeTd").css({"background-color":"#ccc"});
    }
  }

  function verifyPasssword(obj){
    if($(obj).val() == "" || $("#password").val() == ""){
      $("#userjoin_submit").attr("disabled","disabled").css({"background-color":"gainsboro"});
      return false;
    }
    if($(obj).val() != $("#password").val()){
      $("#verifyPassswordError").show();
      $("#userjoin_submit").attr("disabled","disabled").css({"background-color":"gainsboro"});
      return false;
    }else{
      $("#verifyPassswordError").hide();
      $("#userjoin_submit").removeAttr("disabled").css({"background-color":"darkseagreen"});
      return true;
    }
  }

  $("#resultMsg").position({my:"center",at:"center",of:window});

  $(".login_type_td").on("touchend",function(){
    $(".login_type_td").show();
    $(this).hide();
    $("#login_username_input").val("");
    $("#login_mobile_input").val("");

    if($(this).attr("target_name") == "login_username"){
      $("#login_mobile").hide();
      $("#login_type").val("login_username");
      $("#login_username").css("display","inline-block");
    }else{
      $("#login_mobile").css("display","inline-block");
      $("#login_username").hide();
      $("#login_type").val("login_mobile");
    }
  });

  $("#user_join_span").on("touchend",function(e){
      e.preventDefault();
      //$('#login_post').hide();
      $('#user_join').css('display','block');
  });

  $("#user_getpassword_span").on("touchend",function(e){
      e.preventDefault();
      //$('#login_post').hide();
  //     $('#login_mobile_vericode').css('display','block');
    $('#forget_password').css('display','block');
  });

  $("#login_mobile_vericode_cancel").on("touchend",function(e){
      e.preventDefault();
      //$('#login_post').hide();
  //     $('#login_mobile_vericode').css('display','none');
      $('#forget_password').css('display','none');
  });

  $("#verifyPasssword").on("blur input propertychange",function(){
    verifyPasssword(this);
  });

  $("#login_vericode_mobile").on("input propertychange",function(){
    let mobile = $("#login_vericode_mobile").val();
    if(mobile.length == 11){
      maxtime = 60;
      $("#send_login_vericode").removeAttr("disabled");
      $("#vericodeTd").css({"background-color":"palegreen"});
    }else{
      $("#send_vericode").attr("disabled","disabled");
      //$("#vericodeTd").css({"background-color":"#eee"});
    }
  });

  $("#send_login_vericode").on("touchend",function(e){
    e.preventDefault();
    if(maxtime != 60) return false;
    let mobile = $("#login_vericode_mobile").val();
    if(mobile.length < 11) return false;

    fetchApi({
      url: Config.api+"site/mobilejoincheck",
      method: "POST",
      body: {mobile:mobile}
    },function(res){    
      resultAlert(res.msg);
      if(res.statusCode == 1){
        $("#login_vericode").removeAttr("disabled");
        $("#vericharSpan").html("还剩");
        $("#veriShow").show();
        timer = setInterval("veriShow()",1000);
      }
    }.bind(this));
  });

  $("#login_vericode").on("input propertychange",function(){
    let vericode = $("#login_vericode").val();
    if(vericode.length == 4){
    fetchApi({
      url: Config.api+"site/checkvericode?mobile="+$("#login_vericode_mobile").val()+"&vericode="+$("#login_vericode").val()
    },function(res){      
          resultAlert(res);
          if(res.statusCode == 1){
            $("#login_vericode_submit").removeAttr("disabled").css({"background-color":"palegreen"});
          }
        }.bind(this)
      );
    }
  });

  $('#userjoincancel').on("touchend",function(){
    $("#user_join").hide();
    //$("#login_post").show();
  });

  $("#dv_username").on("input propertychange",function(e){
    wait(1000).done(function(){
      let dv_username = $("#dv_username").val();
      if(dv_username.length < 1){
        return false;
      }
      fetchApi({
        url: Config.api+"site/checkusername?username1="+dv_username
      },function(res){
        if(res.result == 1){
          $("#usernameError").show();
          $("#usernameRight").hide();
        }else{
          $("#usernameError").hide();
          $("#usernameRight").show();
        }
      });
    });
  });

  $("#userjoin_submit").on("touchend",function(e){
    e.preventDefault();
    if(!$("#dv_username").val()){
      alert("请填用户名！");
      return false;
    }
    if(!verifyPasssword($("#verifyPasssword"))){
      return false;
    }
    let username = $("#dv_username").val();
    let password = $("#password").val();
    let usersex = $('input:radio[name=usersex]:checked').val();
    fetchApi({
      url: Config.api+"site/userjoin",
      method: "POST",
      body: {username:username,password:password,usersex:usersex}
    },function(res){
      if(res.result == 1){
        $("#user_join").hide();
        $("#login_post").show();
      }
    });
  });

  $("#mobile_join_next").on("touchend",function(){
    event.preventDefault();
    let mobile = $("#login_vericode_mobile").val();
    let vericode = $("#login_vericode").val();
    let url = Config.api+"site/mobilejoin";
    fetchApi({
      url,
      method:"POST",
      body:{mobile:mobile,vericode:vericode}
    },function(res){  
      resultAlert(res);   
      if(res.statusCode >= 1){
        $("#mobile_join").hide();
        $("#user_join").show();
      }
      return false;
    });
  });

  $("#user_login").on("touchend",function(){
    let login_type,username1,mobile,password,url;
    login_type = $("#login_type").val();
    if(login_type == "login_username"){
      url = Config.api+"site/loginusername";
      username1 = $("#login_username_input").val();
    }else{
      url = Config.api+"site/loginmobile";
      mobile = $("#login_mobile_input").val()
    }
    password = $("#userpassword").val();
    fetchApi({
      url,
      method: "POST",
      body: {login_type:login_type,username:username1,mobile:mobile,password:password}
    },function(res){
      if(res.result >= 1){
        userid = res.data.userid;
        username = res.data.username;
        usersex = res.data.usersex;
        token = res.data.token;
        uptime = res.data.uptime;
        setCookie('token',token);
        setCookie('uptime',uptime);
        
        cook = document.cookie;
        latitude_reg = res.data.latitude_reg;
        longitude_reg = res.data.longitude_reg;
        $("#login_div").hide();
        main(function(){
          startModule();
        });
        $("#dv_username").html(username);
        $("#main").show();
      }else{
        //socket.emit("sysmsg","登录失败！");
        alert(res.msg);
      }
    });
  });

  $("#login_vericode_submit").on("touchend",function(){
    event.preventDefault();
    let mobile = $("#login_vericode_mobile").val();
    let vericode = $("#login_vericode").val();
    let url = Config.api+"site/loginvericode";
    fetchApi({
      url,
      method:"POST",
      body:{mobile:mobile,vericode:vericode}
    },function(res){     
        if(res.result >= 1){
          userid = res.data.userid;
          username = res.data.username;
          usersex = res.data.usersex;
          token = res.data.token;
          uptime =res.data.uptime;

          latitude_reg = res.data.latitude_reg;
          longitude_reg = res.data.longitude_reg;
          setCookie('token',token);
          setCookie('uptime',uptime);
          cook = document.cookie;
          $.ajaxSetup({data:{token:token,'uptime':uptime}});
          main(function(){
            startModule();
          });
          $("#login_div").hide();
          $("#dv_username").html(username);
          $("#main").show();
        }else{
          //socket.emit("sysmsg","登录失败！");
          alert("手机号码或验证码错误，请重新登陆！");
        }
        return false;
      }
    );
  });
});