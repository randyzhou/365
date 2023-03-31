for(let item in Antd){
  window[item] = Antd[item];
}

function hideIframe(){
  Com.hideIframe();
}

class AppCom extends React.Component{
  constructor(props) {
    super(props);
    this.state = {
      comp: null,
      params: null,
      id: 0,
      msg:null,
      appdivshow: "none",
      weburl: ""
    };
  }
  componentDidMount(){
    $("#netloading").hide();
  }
  changeState(app,params,id){
    this.setState({
      comp: app,
      params: params,
      id: id
    });
  }
  sendMsg(msg){
    this.setState({
      msg: msg
    });
  }
  hideIframe(){
    this.setState({appdivshow:"none",weburl:""});
  }
  render(){
    if(!this.state.comp) return null;
    return React.createElement(this.state.comp,{msg:this.state.msg,appdivshow:this.state.appdivshow,weburl:this.state.weburl,params:this.state.params,id:this.state.id},"aaaaaaabbbbbb");
  }
}

if(JSON.stringify(Com) == "{}"){
  Com = ReactDOM.render(React.createElement(AppCom), document.getElementById("main-content"));
  // const container = document.getElementById('main-content');
  // const root = ReactDOM.createRoot(container);
  // Com = root.render(React.createElement(AppCom));

  // ReactDOM.render(
  //   React.createElement(React.StrictMode,{},React.createElement(AppCom)),
  //   document.getElementById('main-content'),
  //   () => Com = new AppCom
  // );
//  Com = new AppCom;
}

token = getUrlParam('token')?getUrlParam('token'):token;
uptime = getUrlParam('uptime')?getUrlParam('uptime'):uptime;
// $.ajaxSetup({
//   ifModified: true,
//   cache: true,
//   data: {token:token,uptime:uptime},
//   crossDomain:true,
//   error: function(jqXHR, textStatus, errorThrown){
//     console.log(errorThrown);
//     switch (jqXHR.status){
//       case(500):
//         alertMsg("服务器系统内部错误");
//         break;
//       case(401):
//         alertMsg("未登录");
//         break;
//       case(403):
//         alertMsg("无权限执行此操作");
//         break;
//       case(408):
//         alertMsg("请求超时");
//         break;
//       default:
//         alertMsg("未知错误");
//     }
//   }
// });

window.onhashchange = function(){
  //$("#netloading").hide()
  //window.onscroll = "";
  $(window).scrollTop(0);
  loadModule();
}

window.onerror = function(res){
  //console.log(res);
  //if(confirm("客户端系统出现错误，点击确定自动刷新本页！") == true) location.reload();
  //return false;
}


window.onfocus = function(){
  reloadNewMsgs();
}


socket.on('connect',function(){
  if(!userid||!username||!usersex||!token||!uptime){
    alert("socket.connect");
    location.href="/im";
    return false;
  }
  let obj = {
    userid: userid,
    username: username,
    usersex: usersex,
    token: token,
    uptime: uptime
  };
  socket.emit('join', obj);
  $("#login_div").hide();
});

socket.on('message', function(data) {
  if(!data.msg) return false;
  let hash = getHashes();
  if(!hash || hash == "messages" || hash == "messages/mobile" || hash == "messages/list") {
    Com.sendMsg(data);
  }
});

socket.on('sys', function(data){
  console.log(data);
  if(data.command == "joinroom") socket.emit("joinroom",{roomid:data.roomid,roomtype:data.roomtype});
});

socket.on('order', function(data){
  console.log(data);
  let hash = getHashes();
  if(!hash || hash == "stores/adminorders"){
    Com.sendMsg(data);
  }
});

socket.on('upgrade', function(obj){
  console.log(obj);
  if(obj.msg == "静默更新"){
    version = 2;
    console.log("静默更新");
  }
  if(obj.msg == "系统升级"){
    alertMsg("系统有更新，点击确定立即升级！",1,function(){
      location.href = '/im'
    })
  }
});