//将json对象转换为urlencode字符串
const parseParam = function(param, key) {
  let paramStr = "";
  if (param instanceof Object || param instanceof Array) {
    for(let i in param){
      let k = key == null ? i : key + "[" + i + "]";
      let obj = param[i];
      paramStr += '&' + parseParam(obj, k);
      }
  } else {
    if(param != '') paramStr += "&" + key + "=" + encodeURIComponent(param);
  }
  let res = paramStr.substr(1);
  return res;
}

//判断是否为JSON格式数据
function isJson(obj) {
  var isjson = (typeof(obj) == "object" || typeof(obj) == "array") && Object.prototype.toString.call(obj).toLowerCase() == "[object object]" && !obj.length;
  return isjson;
}

function jsonshow(obj){
  console.log(JSON.stringify(obj));
}

function getCookie(cookie_name){
  var allcookies = document.cookie;
  var cookie_pos = allcookies.indexOf(cookie_name);

  // 如果找到了索引，就代表cookie存在，
  // 反之，就说明不存在。
  if (cookie_pos != -1)
  {
    // 把cookie_pos放在值的开始，只要给值加1即可。
    cookie_pos += cookie_name.length + 1;
    var cookie_end = allcookies.indexOf(";", cookie_pos);

      if (cookie_end == -1)
      {
        cookie_end = allcookies.length;
      }

    var value = decodeURI(allcookies.substring(cookie_pos, cookie_end));
    return value;
  }
  return "";
}

function setCookie(name,value){
  var Days = 2;
  var hours=24;
  var mins=60;
  var exp  = new Date();
  exp.setTime(exp.getTime() + Days*hours*mins*60*1000);
  document.cookie = name + "="+ encodeURI(value) + ";expires=" + exp.toGMTString()+";path=/";
}

function clearCookie(name)
{
  var Days = 1;
  var hours=1;
  var mins=30;
  var exp  = new Date();
  exp.setTime(exp.getTime());
  document.cookie = name + "="+ encodeURI("") + ";expires=" + exp.toGMTString()+";path=/";
}

//统一显示ajax返回的出错信息，defaultMsg为默认消息
function errMessage(response, defaultMsg){
  var errMsg = '';
  if(response.message) errMsg = response.message;
  else if(response.msg) errMsg = response.msg;
  else if(response.info) errMsg = response.info;
  else if(response.data) {
    if(response.data.message) errMsg = response.data.message;
    else if(response.data.msg) errMsg = response.data.msg;
    else if(response.data.info) errMsg = response.data.info;
    else if(defaultMsg) errMsg = defaultMsg;
  } else if(defaultMsg) errMsg = defaultMsg;

  if (errMsg=='') { errMsg='未知错误，请稍后重试'; }
  alert(errMsg);
  //var url = "error://"+encodeURIComponent(errMsg);
  //window.location.href = url;
}

function formatGroupMsg(){
  chatMessages = JSON.parse(localStorage[userid] || "[]");
  userGroupMsgs = JSON.parse(localStorage[userid+"groupMsgs"] || "[]");
}

function loadJS(url,callback){
  if(ldjs[url]){
    if(callback) callback('ok');
    return;
  }
  try{
    //if($) $("#netloading").show();
    let head = document.getElementsByTagName('head');
    if(head&&head.length){
      head = head[0];
    }else{
      head = document.body;
    }
    let script = document.createElement('script');
    script.src = url;
    script.type = "text/javascript";
    head.appendChild(script);
    script.onload = script.onreadystatechange = function(){
        if ((!this.readyState) || this.readyState == "complete" || this.readyState == "loaded" ){
          ldjs[url]=1;
          if(callback){
            callback('ok');
          }
      }
    }
  }catch(e){
    //if($) $("#netloading").html(e).show();
    alert("程序错误，点击刷新");
  }
}


//include == require模块加载函数
const include = (url,type,fn) => {  
  try{
    if(type == 1){
      loadJS(url,()=>{
        let mod = module.exports;
        includeArray[url] = mod;
        if(fn) fn(mod);
      });
    }else{ 
      if(includeArray[url]){
        let mod = includeArray[url];
        if(fn){
          fn(mod);
        }
      }else{
        loadJS(url,()=>{
          let mod = module.exports;
          includeArray[url] = mod;
          if(fn) fn(mod);
        });
      }

    }
  }catch(e){
    alert(e)
  }
}

//延迟执行函数，用法 wait(500).done(function(){...})
(function(window){
  var stime = 0,checktime = 0;
  var wait = function(milli){
    stime = new Date().getTime();
    return({
      done: function(cb){
        let timer = setTimeout(function(){
          var now = new Date().getTime();
          if(now > milli + stime - 50){
            if(stime > checktime + 10){
              cb();
              checktime = stime;
            }
          }
        },milli);
        //clearTimeout(timer);
      }
    })
  }
  window.wait = wait;
})(window);

function waitExecute(time){
  var now = new Date().getTime();
  wait.lastSearchSt = 0;
  return {
    done : function (cb){
      if(now < (wait.lastSearchSt + time)) return;
      clearTimeout(timer);
      var timer = setTimeout(function() {
        if(now > (wait.lastSearchSt + time)){
          cb();
        }
        wait.lastSearchSt = now;
        return;
      }, time);
    }
  }
}

//获取url哈希部分的所有，包括哈希的参数部分
function getHashes(){
  if(window.location.hash) {
    var hashAll = window.location.hash.split("?")[0].split("#/");
    var hash = hashAll[1];
    if (hash) return decodeURI(hash);
  }
  return null;
}

function upgrade(){
  include("build/modules/messages/index.js",1);
  include("build/modules/stores/index.js",1);
  include("build/modules/storesadmin/index.js",1);
  include("build/modules/groups/index.js",1);
  include("build/modules/users/index.js",1);
  include("build/modules/usersadmin/index.js",1);
  include("build/modules/me/index.js",1);
  include("build/modules/news/index.js",1);
  include("build/modules/shop/index.js",1);
  include("build/modules/apps/index.js",1);
}

function login(fn){    
  let obj = {};
  obj.url = apiUrl+"/site/isLogin";
  fetchApi(obj,function(res){
    if(!isJson(res)){
      //alert("服务器系统出错，点击确定重试！");
      //location.reload();
    }
    if(res.statusCode != "1"){
      document.getElementById("login_div").style.display = "table";
      //$url = "/wxlogin.php";
      //location.href = $url;
    }else{
      openid = res.openid;
      unionid = res.unionid;
      nickname = res.nickname;
      userid = res.data.userid;
      username = res.data.username;
      usersex = res.data.usersex;
      token = res.data.token;
      uptime = res.data.uptime;
      setCookie('token',token);
      setCookie('uptime',uptime);
      if(!res.data.latitude_reg || !res.data.latitude_reg){
        //alert("请完善常用住址！");
        //location.href = "#/usersadmin/admin";
      }
      
      latitude_reg = res.data.latitude_reg;
      longitude_reg = res.data.longitude_reg;
      //$.ajaxSetup({data:{token:token}});
      //document.getElementById("username").innerText = username;
      document.getElementById("main").style.display = "block";
      if(fn) fn();
    }
  });
}

function setLocation(type){
  if(type != 1){
    let nowTime = Date.now();
    if(nowTime - setLocationTime < 600000){
        console.log("时隔太短");
        return false;
    }
  }

  if(!userid) return false;
  if(typeof(api) == "undefined") return false;
  api.getLocation(function(ret, err) {
    if (ret && ret.status) {
      latitude = ret.latitude;
      longitude = ret.longitude;
      setLocationTime = Date.now();
      console.log(latitude);
      console.log(longitude);
      let url = Config.api + "user/updatelocations";
      fetchApi({
        url,
        method: 'POST',
        body: {latitude,longitude}
      },function(res){
        console.log("location:")
        jsonshow(res)
      })
    } else {
      alert('获取位置失败');
    }
  });
}


//开始文件

//获取url路径
function getUrlPath(){
  var rs = location.search;
//  rs = rs.replace(globalConfig.path,"");
  return rs;
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

function getHashParam(name) {
    return getUrlParam(name);
}

//获取url哈希的所有参数，返回Array
function getHashParams() {
    var hashStr;
    var hashArr = [];
    var hash = {};

    if(window.location.hash) hashStr = window.location.hash.split("?")[1];

    if(!hashStr) return;

    hashStr = hashStr.split("&");
    for(var i=0; i < hashStr.length; i++){
      hashArr = hashStr[i].split("=");
      hash[hashArr[0]] = hashArr[1];
    }

    return hash;
}

//获取数组的最后一个元素
function getLastEl(arr){
    return arr[arr.length-1];
}

//将字符串的第一个字符转换为大写
function toUpperCaseFirstChar(str){
    var newStr;
    for (var j = 0, len = str.length; j < len; j++) {
      var ch2 = str.charAt(j);
      if (j == 0) newStr = ch2.toUpperCase();
      else newStr += ch2.toLowerCase();
    }
    return(newStr);
}

//判断React组件是否已经存在
function isComp(arr,obj){
    var cmp = app;
    if(obj) cmp = obj;
    var Arr;
    for(var i=0; i < arr.length; i++){
        Arr = arr[i];
        if(cmp[Arr]) cmp = cmp[Arr];
        else return false;
    }
    return cmp;
}

//从指定模块中取出React组件
function getComp(key,obj,path){
    var cmp;
    if(obj["default"][key]){
      cmp = obj["default"][key];
      return cmp;
    }else{
      alertMsg("组件错误，退出后如还有错误请重装！",0,function(){
        location.href = "/im";
      })
    }
}
function getComp1(arr,obj){
    var cmp = obj;
    var i,Arr;
    for(i=0; i < arr.length; i++){
      Arr = arr[i];
      if(cmp[Arr]) cmp = cmp[Arr];
    }
    return cmp;
}

function loadComp(){
  return [];
}

//模块组件加载函数
function loadModule(){
  lm = 2;
  if(version == 2){
    alertMsg("系统有更新，点击确定立即升级！",1,function(){
      location.reload();
    })
  }
  let hash = getHashes();
  let comp;
  let Comp;
  let id;
  let params = getHashParams();
  let arr;
  let comp_tmp;
  let action = "List";

  gHash = hash;
  if(getHashes())  arr = getHashes().split("/");
  if(arr && !isNaN(parseInt(getLastEl(arr)))) id = parseInt(getLastEl(arr));
  if(arr && arr[1]) action = toUpperCaseFirstChar(arr[1]);
  if(hash && hash.length>0) loadPath = hash.split("/")[0];

  if(!app[loadPath]){
    let appurl = Config.module+"build/modules/"+loadPath+"/index.js";
    if(location.port == '9000') appurl = "/index.js"; //9000端口为webpackdevserver开发端口

    include(appurl,0,function(mod){
      if(!mod) return false;
      app[loadPath] = mod;

      Comp = app[loadPath];
      if(typeof(Comp) == "function") comp = Comp;
      if(typeof(Comp) == "object"){
        comp_tmp = getComp(action,Comp,loadPath);
        if(typeof(comp_tmp) == "function"){
          comp = comp_tmp;
        }
      }
      console.log(Com)
      Com.changeState(comp,params,id);
      return false;
    });      
  }else{
    Comp = app[loadPath];
    if(typeof(Comp) == "function") comp = Comp;
    if(typeof(Comp) == "object"){
      comp_tmp = getComp(action,Comp,loadPath);
      if(typeof(comp_tmp) == "function"){
        comp = comp_tmp;
      }
    }
    Com.changeState(comp,params,id);
  }
}

//改变模块
const componentChangeState = (app,loadPath,action) => {
  let comp;
  let Comp;
  let params = getHashParams();
  let comp_tmp;
  Comp = app[loadPath];
  if(typeof(Comp) == "function") comp = Comp;
  if(typeof(Comp) == "object"){
    comp_tmp = getComp(action,Comp,loadPath);
    if(typeof(comp_tmp) == "function"){
      comp = comp_tmp;
    }
  }
  console.log(Com)
  Com.changeState(comp,params,id);
}

//模块组件加载函数
function getModule(){
  lm = 2;
  if(version == 2){
    alertMsg("系统有更新，点击确定立即升级！",1,function(){
      location.reload();
    })
  }
  let hash = getHashes();
  let id;
  let arr;
  let action = "List";

  gHash = hash;
  if(getHashes())  arr = getHashes().split("/");
  if(arr && !isNaN(parseInt(getLastEl(arr)))) id = parseInt(getLastEl(arr));
  if(arr && arr[1]) action = toUpperCaseFirstChar(arr[1]);
  if(hash && hash.length>0) loadPath = hash.split("/")[0];

  if(!app[loadPath]){
    let appurl = Config.module+"build/modules/"+loadPath+"/index.js";
    if(location.port == '9000') appurl = "/index.js"; //9000端口为webpackdevserver开发端口

    include(appurl,0,function(mod){
      if(!mod) return false;
      app[loadPath] = mod;
      componentChangeState(app,loadPath,action);
      return false;
    });      
  }else{
    componentChangeState(app,loadPath,action);
  }
}

function startModule(){
  if(userid){
    if(lm == 1){
      socket.connect();
      socket.emit('join', {
        userid: userid,
        username: username,
        usersex: usersex,
        token: token,
        uptime: uptime
      }); 
      formatGroupMsg();
      loadModule();
    }
  }
}

function main(fn){
  $("#netloading").show();
  //loadJS("./script/base/api.js",function(){
    loadJS("script/base/socket.io.min.js",function(){
      socket = io(sockUrl).disconnect();
      loadJS("script/base/react.development.18.js",function(){    
      loadJS("script/base/react-dom.development.18.js",function(){
//      loadJS("script/base/react.production.min.js",function(){    
//      loadJS("script/base/react-dom.production.min.js",function(){
        // loadJS("script/base/redux.js",function(){
        // loadJS("script/base/react-redux.js",function(){
        // loadJS("script/base/mobx642.prod.js",function(){
        // loadJS("script/base/mobxstatetree.umd.development.js",function(){    
        // loadJS("script/base/mobxreactlite.umd.development.js",function(){    
//        loadJS("script/base/mobxreact.umd.development.js",function(){      
          loadJS("script/base/prop-types.js",function(){
            loadJS("script/base/antd-mobile/dist/antd-mobile.min.js",function(){
              loadJS("script/functions.js",function(){
                loadJS("build/lib/commons/index.js",function(){
                  for(let i in window.default) window[i] = window.default[i];
                  loadJS("script/index.js",function(){
                    window['module'] = {};
                    window['exports'] = {};
                    loadJS("script/districtdata.js",function(){
                      include("build/modules/messages/index.js");
//                      include("index.js");
                      if(fn) fn();
                      waitExecute(5000).done(function(){
                        include("build/modules/groups/index.js");
                        include("build/modules/users/index.js");
                        include("build/modules/me/index.js");
                        include("build/modules/news/index.js");
                        include("build/modules/products/index.js");
                        include("build/modules/apps/index.js");
                        include("build/modules/stores/index.js");
                        include("build/modules/usersadmin/index.js");
                        include("build/modules/storesadmin/index.js");
                      })
                    })
                  })
                })
              })
            })
          })
        })
        //})
        // })
        // })
        // })
      })
    })
}

gHash = getHashes(); 

if(getCookie('token') != 'undefined') token = getCookie('token');
if(getCookie('uptime') != 'undefined') uptime = getCookie('uptime');

if(getCookie('abc') == 1) setCookie('abc',2);
else setCookie('abc',1);

login(function(){
  main(function(){
    startModule();
  });
});

let resultMsgDiv = document.getElementById("resultMsg");
let winHeight = window.innerHeight;
let resTop = (winHeight - 100)/2;
let winWidth = window.innerWidth;
let resLeft = (winWidth - 250)/2;
resultMsgDiv.style.top = resTop+"px";
resultMsgDiv.style.left = resLeft+"px";  


function getNewMsgs() {
  let useridtime = userid+"time";
  let lastTime = localStorage[useridtime];
  if(!lastTime) lastTime = 0;
  let url = Config.api+"chat/newmsgs?lastTime="+lastTime;
  localStorage[useridtime] = (new Date).getTime();

  fetchApi({
    url
  },function(res){
    if(!isJson(res)){
      errMessage("","服务器文件错误！");
      return false;
    }
    if(res.status == 200){
      var resStoreMsgs = res.storeMsgs?[...res.storeMsgs]:[];
      var personalMsgs = res.personalMsgs?[...res.personalMsgs]:[];
      var groupMsgsArray = [].concat(resStoreMsgs).concat(personalMsgs);
      if(groupMsgsArray.length == 0) return false;
      groupMsgsArray.map(function(data,index){
        if(!data.msg) return false;
        if(!data.toid) return;
        if(data.tousername == '') return;
        let hash = getHashes();
        if(!hash || hash == "messages" || hash == "messages/mobile") {
          Com.sendMsg(data);
        }
      });
    }
  });
}

function reloadNewMsgs(){
  console.log("focus");
  if(!userid){
    console.log("!userid")
    //location.href="/im";
    login(function(){main(function(){
      startModule();
    })})
  }else if(!socket.connected){
    console.log("!socket.connected")
    socket.connect();
    getNewMsgs();
  }
}

const apiready = function(){
  setLocation();
  api.addEventListener({
    name:'resume'
  }, function(ret, err){
    reloadNewMsgs();
  });
}
setInterval(setLocation,620000);
