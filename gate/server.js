const express = require('express');
const bodyParser = require('body-parser');
const url = require("url");
const request = require('request');
const crypto = require('crypto');
const fs = require('fs');
const Config = require('./configs/config.js');

const api = Config.apiUrl;

const secret = 'salt';
const privateKey = "ssdflkdsfnsdfnsdlf";

function isJson($string)
{
  try {
      if(typeof JSON.parse($string) == 'object')
          return true;
      return false;
  } catch (e) {
      console.log(e);
      return false;
  }
}

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

function verifyToken123(obj,token){
  let str = obj.ip+obj.userid+privateKey;
  let md5 = crypto.createHash('md5');
  let token1 = md5.update(str).digest('hex');

  let tokenObj = tokenList[token];
  if(!tokenObj) return false;
  if(token1 != token) return false;

  let uptime = tokenObj.uptime || 0;
  let nowtime = new Date().getTime();
  if(nowtime - uptime > 2 * 24 * 60 * 60 * 1000) return false;
  return true;
}
function verifyToken(obj,token){
  let tokenObj = tokenList[token];
  if(!tokenObj){
    console.log("no tokenList[token]");
    return false;
  }
  if(tokenObj.uptime != obj.uptime){
    console.log("not equal uptime");
    return false;
  }

  let uptime = tokenObj.uptime || 0;
  let nowtime = new Date().getTime();
  if(nowtime - uptime > 2 * 24 * 60 * 60 * 1000){
    console.log("time expired");
    return false;
  }
  return true;
}
function genToken(obj){
//  let str = obj.ip+obj.userid+privateKey;
  let str = obj.uptime+obj.userid+privateKey;
  let md5 = crypto.createHash('md5');
  let token = md5.update(str).digest('hex');
  return token;
}

let tokenList = {};
let filePath = './configs/tokenlist.js';
fs.readFile(filePath, 'utf8', function(err,result){
  tokenList = JSON.parse(result);
});	

const app = express();

app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: true }));

//每60秒拉取一次权限表数据
let authList = {};
function setAuthList(){
  let opt_gate = {
    dataType: 'json',
    method: 'get'
  };
  request(api+'/gate.php',opt_gate,function(error,response,body){
    if (!error && response.statusCode == 200) {
      try{
        let res = JSON.parse(body);
        if(res.result > 0){
          authList = res.data;
        }
      }catch(e){
        console.log(e)
      }
    }
  });
}
setAuthList();
setInterval(setAuthList,10000);

app.all("*",function(req,res){
  res.header('Access-Control-Allow-Origin', '*');
  res.header('Access-Control-Allow-Credentials', true);
  res.header('Access-Control-Allow-Methods', 'POST, GET, PUT, DELETE, OPTIONS, HEAD');
  res.header('Access-Control-Allow-Headers', 'Content-Type, X-Requested-With');
  

  let userid='',username='',usersex=0;
  let reqUrl = url.parse(req.url);
  let pathname = reqUrl.pathname;
  let path = reqUrl.path;

  let ip = req.header('x-forwarded-for') || req.connection.remoteAddress;
  let uptime = req.query.uptime;
  if(pathname == "/member/joinedrooms") 
  {
    ip = req.query.ip;
  }
  let token = req.query.token;

  if(pathname == "favicon.ico"){
    res.end();
    return;
  }

  if(pathname == "/configs/tokenlist.js"){
    res.json(tokenList);
    res.end();
    return;
  }

  if(pathname == "/site/isLogin"){
    if (!token || !verifyToken({uptime},token) || !tokenList[token]) {
      res.statusCode = 200;
      res.json({status:200,unlogin:1,msg:'请登录'});  
      return;
    }

    let tokenContent = tokenList[token];
    let content = {
      data:{
        token: token,
        uptime: uptime,
        userid: tokenContent.userid,
        username: tokenContent.username,
        usersex: tokenContent.usersex,
        latitude_reg: tokenContent.latitude_reg,
        longitude_reg: tokenContent.longitude_reg
      },
      statusCode: 1
    };
    res.json(content);
    res.end();
    return;
  }

  if(pathname == "/site/logout"){
    if(token.length < 1){
      res.statusCode = 200;
      res.json({status:200,result:200,msg:'无需退出'}); 
      res.end();
      return;      
    }
    delete tokenList[token];
    fs.writeFile(filePath,JSON.stringify(tokenList),function(err){
      let logoutcontent = {status:200,result:200,msg:'退出成功'};
      if (err) {
        logoutcontent = {status:200,result:1,msg:'退出未成功'}; 
      }
      res.statusCode = 200;
      res.json(logoutcontent); 
      res.end();
      return;
    });
    return;
  }

  //参数过滤
  let queryObj = req.query;
  delete queryObj.token;
  delete queryObj.uptime;
  let flag = 1;
  for(let key in queryObj){
    let value = queryObj[key];
    console.log(key+":"+value);
    if(key != "roomid" && (key.indexOf('id')>-1 || key == "p" || key == "limit" || key == "type" || key == "distance")){
      if(!/^\d+$/.test(value)){
        flag = 2;
      }
    }else{
      if(key.indexOf(' ') > -1 || key.indexOf("'") > -1){
        flag = 2;
      }
    }
    if(flag == 2){
      console.log(key+":"+value);
      res.json({status:200,msg:'非法参数'});
      res.end();
      return;
    }

  }

  let queryString = parseParam(queryObj);
  let pathString = pathname+"?"+queryString;

  let formObj = req.body;
  for(let key in formObj){
    let value = formObj[key];
    if(key != "roomid" && (key.indexOf('id')>-1 || key == "p" || key == "limit" || key == "type" || key == "latitude_reg" || key == "longitude_reg" || key == "distance")){
      if(!/^\d+$/.test(value)) flag = 2;
    }else{
      if(key.indexOf(' ') > -1 || key.indexOf("'") > -1){
        flag = 2;
      }
    }
    if(flag == 2){
      console.log(key+":"+value)
      res.json({status:200,msg:'非法参数'});
      res.end();
      return;
    }
  }

  let opt = {
    dataType: 'json',
    method: req.method,
    form: formObj
  };

  if(pathname == "/user/userjoin"){
    request(api+"/user/userjoin",opt,function(error,response,body){
      if (!error && response.statusCode == 200) {
        try {
          let res1 = JSON.parse(body);
          res.statusCode = 200;
          res.json(res1);
          res.end();
          return;
        } catch (e) {
            console.log(e);
            return false;
        }
      }else{
        res.json({status:1,msg:'error'});
        res.end();
        return;
      }
    });
    return;
  }  
  
  if(pathname == "/site/loginusername" || pathname == "/site/loginmobile" || pathname == "/site/loginvericode"){
    let loginpath = api+pathname;
    console.log("login pathname:"+loginpath);
    request(loginpath,opt,function(error,response,body){
      if (!error && response.statusCode == 200) {
        let res1 = {};
        try {
          res1 = JSON.parse(body);
        } catch (e) {
            console.log(e);
            res.json({result:0,msg:'登录错误'});
            res.end();
            return false;
        }
        if(res1.statusCode == 1){
          let userid = res1.data.userid;
          let uptime = new Date().getTime();
          let token = genToken({uptime,userid});
          tokenList[token] = {ip:ip,userid:res1.data.userid,username:res1.data.username,usersex:res1.data.usersex,latitude_reg:res1.data.latitude_reg,longitude_reg:res1.data.longitude_reg,uptime};
          fs.writeFile(filePath,JSON.stringify(tokenList),function(err){
            if (err) {
              res.json({result:0,msg:'读取权限错误'});
              res.end();
              throw err;
            }
          });
          let content = {
            data:{
              token: token,
              userid: res1.data.userid,
              username: res1.data.username,
              usersex: res1.data.usersex,
              latitude_reg: res1.data.latitude_reg,
              longitude_reg: res1.data.longitude_reg,
              uptime: uptime
            },
            result: 1
          };
          res.json(content);
          res.end();
          return;
        }else{
          res.json(res1);
          res.end();
          return;
        }
      }else{
        res.json({result:0,msg:'登录参数错误！'});
        res.end();
        return;
      }
    });
    return;
  }

  if(!authList[pathname]){
    res.statusCode = 200;
    res.json({status:1,unlogin:1,msg:"该api不存在"});  
    res.end();
    return;
  }

  if(authList[pathname] && authList[pathname] == "2"){
    if (!token || !verifyToken({uptime},token)) {
        res.statusCode = 200;
        res.json({status:1,unlogin:2,msg:"该api需要登录"});  
        res.end();
        return;
    }
    userid = tokenList[token].userid;
    username = tokenList[token].username;
    usersex = tokenList[token].usersex;

    if(queryString) path = pathString+'&userid='+userid+'&username='+username+'&usersex='+usersex;
    else path = pathString+'userid='+userid+'&username='+username+'&usersex='+usersex;
  }

  path = encodeURI(path);

  if(pathname == "/site/getlocation"){
    let place = encodeURIComponent(req.query.place);
    let city = encodeURIComponent(req.query.city);
    let url = "http://api.map.baidu.com/place/v2/suggestion?query="+place+"&region="+city+"&city_limit=true&output=json&ak=DBfe373cd7eeb74e891a8f51b9d843be"
    console.log(url);
    request(url,opt,function(error,response,body){
      if (!error && response.statusCode == 200) {
        try {
          let res1 = JSON.parse(body);
          res.statusCode = 200;
          res.json(res1);
          res.end();
          return;
        } catch (e) {
            console.log(e);
            return false;
        }
      }else{
        console.log(body)
        res.json({status:1,msg:'error'});
        res.end();
        return;
      }
    });
    return;
  }   

  request(api+path,opt,function(error,response,body){
    console.log(api+path)
    console.log(api+pathString)
    console.log(opt)
    console.log(body);
    if (!error && response.statusCode == 200) {
      try {
        let res1 = JSON.parse(body);
        res.statusCode = 200;
        res.json(res1);
        res.end();
        return;
      } catch (e) {
          console.log(e);
          res.json({status:1,msg:'data error'});
          res.end();
          return false;
      }
    }else{
      res.json({status:1,msg:'error'});
      res.end();
      return;
    }
  });

});

app.listen(8001);
console.log("listenning on 8001!");
console.log(Config);