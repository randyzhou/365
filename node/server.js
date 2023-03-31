var request = require('request');
var _ = require('underscore');
var path = require('path');
var fs = require('fs');
var app = require('express')();
const Config = require('./configs/config.js');
console.log(Config);

function trim(str)
{
  return str.replace(/(^\s*)|(\s*$)/g, "");
}

const privateKey = "ssdflkdsfnsdfnsdlf";

let api = Config.apiUrl;

app.all("*", function(req, res, next) {
  res.header("Access-Control-Allow-Origin", req.headers.origin);
  res.header("Access-Control-Allow-Credentials", "true");
  res.header("Access-Control-Allow-Headers","Origin, X-Requested-With, Content-Type, Accept");
  res.header("Access-Control-Allow-Methods", "PUT,POST,GET,DELETE,OPTIONS"); 
  next();
});

var options = {
  key: fs.readFileSync(path.join(__dirname, './cert/365-key.pem'), 'utf8'), 
  cert: fs.readFileSync(path.join(__dirname, './cert/365-cert.pem'), 'utf8')
};
//var server = require('https').createServer(options,app).listen(3000, function () {
var server = require('http').createServer(app).listen(3000, function () {
  console.log('server listening on port 3000');
});

var io = require('socket.io')(server);
io.on('connection', function (socket) {
  let ip = '';
  if(socket.handshake.headers['x-forwarded-for'] != null){
    ip = socket.handshake.headers['x-forwarded-for'];
  }else{
    ip = socket.handshake.address;
  }

  var userid,username,usersex,token,uptime,headers={};
  console.log("connected");

  socket.on("join",function(obj){
    token = obj.token;
    if(!token){
      console.log('没有token');
      return null
    }
    uptime = obj.uptime;
    let url = api+'/member/joinedrooms?token='+token+"&ip="+ip+"&uptime="+uptime;
    let param={
      url,
      method:"GET",
      json: true
    };
    request(param, function (error, response, body) {
      console.log(url)
      if (!error && response.statusCode == 200) {
        var res = body;
        if(res.status == 1){
          socket.emit('message',{res:res.errMessage});
          return false;
        }

        let shops = res.shops;
        if(shops){
          for(let i=0; i<shops.length; i++){
            let shop = shops[i];
            let roomtype = "Store";
            var roomID = roomtype+shop.id;
            console.log("joined "+roomID);
            socket.join(roomID);
          }
        }

        userid = obj.userid;
        username = obj.username;
        usersex = obj.usersex;
        socket.name = userid;

        console.log(userid+"("+username+")"+" comming！");
      }
    })

  });

  socket.on("joinroom",function(obj){
    //if(obj.roomtype == "Personal") return false;
    //socket.join(obj.roomid);
    var roomID = obj.roomid;
    socket.join(roomID);
    console.log(userid+"("+username+")"+" joined "+obj.type+"，roomID："+roomID);
  });

  socket.on("leaveroom",function(obj){
//    socket.leave(obj.roomid);
    console.log(userid+"("+username+")"+" leave "+obj.type+"，roomID："+obj.roomid);
  });

  socket.on("leave",function(obj){
    console.log(userid+"("+username+")"+" leaving.");
    userid = null;
    username = null;
    usersex = null;
    token = '';
    uptime = '';
  });

  socket.on('message', function (obj) {
    if(!userid||!username||!usersex) {
      console.log('privateSys');
      console.log(obj);
      socket.emit('privateSys',{stausCode:1,msg:'没有登录'});
      return false;
    }
    let nowTime = new Date();
    obj.sendtime = nowTime.getFullYear()+"-"+(nowTime.getMonth()+1)+"-"+nowTime.getDate()+" "+nowTime.getHours()+":"+nowTime.getMinutes()+":"+nowTime.getSeconds();
    obj.userid = userid;
    obj.username = username;
    obj.usersex = usersex;
    obj.readStatus = 1;
    if(obj.roomtype != "Personal"){
      io.to(obj.roomid).emit('message', obj);
    }else{
      if(userid == obj.toid) return false;
      let toSocket = _.findWhere(io.sockets.sockets,{name:obj.toid})
      if(toSocket){
        console.log(obj)
        toSocket.emit('message',obj);
        obj.readStatus = 0;
      }
      socket.emit('message', obj);
    }
  });

  socket.on('sys', function(obj){
    io.to("Personal"+obj.toid).emit("sys",obj);
    console.log(obj);
  });

  socket.on('upgrade', function (data) {
    io.emit('upgrade', data);
    console.log('upgrade:'+data);
  });

  socket.on("orderJoin",function(storeid){
    var room = "Order"+storeid;
    socket.join(room);
  });

  socket.on("orderNew",function(obj){
    var room = "Order"+obj.toid;
    io.to(room).emit("order",obj);
  });

});