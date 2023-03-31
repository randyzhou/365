export default class Addmobile extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      errTag: "disabled",
      Errors: {},
      ErrorMsg: {},
      errShow: {},
      inputed: {},
      user: {},

      reg_mobile:"",
      reg_vericode:"",
      reg_vericode_disabled:true,
      password:"",
      veriPassword:"",
      veriShow:"none",
      passDivShow:"none",
      send_vericode_disabled:true,
      vericodeTd:"#ccc",
      maxtime:60,
      vericharSpan:"发送验证码",
      submit_disabled:true,
      submitColor:"#ccc",
      connected_mobile:"",
      connect_mobile_show:0
    };
    this.validData = {
      "reg_mobile": ["maxLength(11)","minLength(11)","isDigits()","notEmpty()"],
      "password": ["maxLength(20)","minLength(6)","notEmpty()"],
      "veriPassword": ["maxLength(20)","minLength(6)","notEmpty()","compareValue(==,password,密码不相符)"]
    };
    this.mobile_change = this.mobile_change.bind(this);
    this.reg_mobile = this.reg_mobile.bind(this);
    this.send_vericode = this.send_vericode.bind(this);
    this.reg_vericode = this.reg_vericode.bind(this);
    this.changePassword = this.changePassword.bind(this);
    this.changeVeriPassword = this.changeVeriPassword.bind(this);
    this.mobile_submit = this.mobile_submit.bind(this);
    this.cancel = this.cancel.bind(this);
  }

  componentDidMount(){
    fetchApi({url:Config.api+"site/getvericode"},function(res){    
        if(res.statusCode == 1){
          this.setState({connect_mobile_show:1,connected_mobile:res.mobile});
        }
      }.bind(this)
    );
  }

  componentWillUnmount(){
    clearInterval(this.timer);
  }

  reg_mobile(event){
    var value = event.target.value;
    if(value.length > 11){
      return false;
    }
    this.setState({reg_mobile:value});
    if(value.length == 11){
      this.setState({send_vericode_disabled:false,vericodeTd:"palegreen"});
    }else{
      this.setState({send_vericode_disabled:true});
    }
    var validNames = this.validData["reg_mobile"];
    validate(value,"reg_mobile",validNames,this);
  }

  send_vericode(e){
    e.preventDefault();
    if(this.state.maxtime != 60) return false;
    var mobile = this.state.reg_mobile;
    if(mobile.length < 11) return false;
    fetchApi({
      url:Config.api+"site/addvericode",
      method:"POST",
      body:{mobile:mobile}
    },function(res){    
        resultAlert(res.msg);
        if(res.statusCode == 1){
          this.setState({reg_vericode_disabled:false,send_vericode_disabled:true,vericharSpan:"还剩",veriShow:"inline-block"});
          this.timer = setInterval(function() {
            var maxtime = this.state.maxtime;
             this.setState({verishowSpan:maxtime});
             if (maxtime > 0) {
               --maxtime;
               this.setState({maxtime});
             } else {
               clearInterval(this.timer);
               this.setState({vericharSpan:"发送验证码",veriShow:"none",vericodeTd:"#ccc"});
             }
          }.bind(this),1000);
        }
      }.bind(this)
    );
  }

  reg_vericode(event){
    var reg_vericode = event.target.value;
    this.setState({reg_vericode});
    if(reg_vericode.length == 4){
      fetchApi({
        url:Config.api+"site/checkvericode?mobile="+this.state.reg_mobile+"&vericode="+reg_vericode,
      },function(res){        
          resultAlert(res);
          if(res.statusCode == 1){
            this.setState({passDivShow:"table"});
          }
        }.bind(this)
      );
    }
  }

  changePassword(event){
    var password = event.target.value;
    this.setState({password});
    var validNames = this.validData["password"];
    validate(password,"password",validNames,this);
  }

  changeVeriPassword(event){
    var veriPassword = event.target.value;
    this.setState({veriPassword});
    var validNames = this.validData["veriPassword"];
    validate(veriPassword,"veriPassword",validNames,this);
    if(this.state.errTag == "disabled"){
      this.setState({submit_disabled:true,submitColor:"#ccc"});
    }else{
      this.setState({submit_disabled:false,submitColor:"lightgreen"});
    }
  }

  mobile_submit(e){
    e.preventDefault();
    var mobile = this.state.reg_mobile;
    var vericode = this.state.reg_vericode;
    var password = this.state.password;
    if(this.state.errTag == "disabled"){
      return false;
    }
    fetchApi({
      url:Config.api+"site/addmobile",
      method:"POST",
      body:{mobile,vericode,password}
    },function(res){            
        resultAlert(res);
        if(res.statusCode == 1){
          this.setState({connect_mobile_show:"1",connected_mobile:mobile});
        }
      }.bind(this)
    );
  }

  mobile_change(){
    this.setState({connect_mobile_show:0});
  }

  cancel(){
    location.href="#/me/admin";
  }

  render() {
    setTitle("关联手机");
    var errMsg = "错误提示";
    var errStyle = {textAlign:"left", color:"red", clear:"left", fontSize:"12px", margin:"3px", clear:"both"};

    return (
      <form style={{margin: "0 auto", width:"100%"}}>
        <table style={{width:"100%",marginTop:"20px"}}>
          <tbody><tr>
            <td style={{width:"40px",textAlign:"center",height:"50px"}}>
              <span style={{borderRadius:"3px",padding:"10px",fontSize:"16px",fontWeight:"bold"}}></span>
            </td>
            <td style={{textAlign:"center"}}>
              <span style={{fontSize:"20px",fontWeight:"bold"}}>关联手机</span>
            </td>
            <td style={{width:"40px",textAlign:"center",height:"50px"}}>
              <span style={{borderRadius:"3px",padding:"10px",fontSize:"16px",fontWeight:"bold"}}></span>
            </td>
          </tr></tbody>
        </table>
        <div style={{padding:"10px",display:this.state.connect_mobile_show==1?"block":"none"}}>
          <table style={{width:"100%",padding:"3px",marginTop:"10px",border:"0px #ccc solid",borderRadius:"0px"}}>
          <tbody><tr><td style={{height:"50px",width:"100%",textAlign:"center"}}>
            你的用户账号已关联手机{this.state.connected_mobile}
          </td></tr>
          <tr><td style={{height:"60px"}}>
            <button onTouchEnd={this.mobile_change} style={{display:"inline-block",cursor:"pointer",marginTop:"20px",width:"100%",height:"40px",lineHeight:"40px",border:"1px indianred solid",borderRadius:"20px",backgroundColor:"palegreen"}}>
              <span style={{borderRadius:"3px",padding:"10px"}}>更改关联手机</span>
            </button>
          </td></tr></tbody>
          </table>
        </div>
        <div style={{padding:"10px",display:this.state.connect_mobile_show==1?"none":"block"}}>
    			<table style={{width:"100%",padding:"3px",marginTop:"10px",border:"1px #ccc solid",borderRadius:"5px"}}>
            <tbody><tr>
              <td style={{width:"60px",textAlign:"center"}}>
                + 86 <font style={{fontSize:"10px"}}>▼</font>
              </td>
              <td>
                <input type="tel" maxLength="11" style={{width:"100%",height:"40px",border:"0px solid #ccc",borderRadius:"5px"}} placeholder="请输入手机号码" value={this.state.reg_mobile} onChange={this.reg_mobile}/>
                <em className={this.state.errShow.reg_mobile?'show':'hide'} style={errStyle}>{this.state.inputed.reg_mobile || 0}/11  {this.state.ErrorMsg.reg_mobile}</em>
              </td>
            </tr></tbody>
          </table>
          <table style={{width:"100%",padding:"3px",marginTop:"10px",border:"1px #ccc solid",borderRadius:"5px"}}>
            <tbody><tr>
              <td>
                <input id="reg_vericode" maxLength="4" type="number" name="Reg[veriCode]" disabled={this.state.reg_vericode_disabled} style={{width:"100%",height:"40px",border:"0px"}} placeholder="请输入验证码" value={this.state.reg_vericode} onChange={this.reg_vericode}/>
              </td>
              <td id="vericodeTd" style={{width:"135px",textAlign:"center",backgroundColor:this.state.vericodeTd}}>
                <button disabled={this.state.send_vericode_disabled} onTouchEnd={this.send_vericode}><span>{this.state.vericharSpan}</span><span style={{display:this.state.veriShow}}>(<span>{this.state.maxtime}</span>)秒</span></button>
              </td>
            </tr></tbody>
          </table>
          <table id="passDiv" style={{display:this.state.passDivShow,width:"100%",padding:"3px",marginTop:"10px",border:"0px #ccc solid",borderRadius:"0px"}}>
          <tbody><tr><td style={{height:"50px",width:"100%"}}>
            <input type="password" minLength="6" maxLength="20" placeholder="登录密码" style={{display:"block",width:"100%",height:"40px",lineHeight:"40px",border:"1px solid #ccc",borderRadius:"0px"}} value={this.state.password} onChange={this.changePassword}/>
            <em className={this.state.errShow.password?'show':'hide'} style={errStyle}>{this.state.inputed.password || 0}/20  {this.state.ErrorMsg.password}</em>
          </td></tr>
          <tr><td style={{height:"60px"}}>
            <input type="password" minLength="6" maxLength="20" placeholder="确认密码" style={{width:"100%",height:"40px",lineHeight:"40px",border:"1px solid #ccc",borderRadius:"0px"}} value={this.state.veriPassword} onChange={this.changeVeriPassword}/>
            <em className={this.state.errShow.veriPassword?'show':'hide'} style={errStyle}>{this.state.inputed.veriPassword || 0}/20  {this.state.ErrorMsg.veriPassword}</em>
          </td></tr>
          <tr><td style={{height:"60px"}}>
            <button disabled={this.state.submit_disabled} onTouchEnd={this.mobile_submit} style={{display:"inline-block",cursor:"pointer",marginTop:"20px",width:"100%",height:"40px",lineHeight:"40px",border:"1px indianred solid",borderRadius:"20px",backgroundColor:this.state.submitColor}}>
              <span style={{borderRadius:"3px",padding:"10px"}}>提 交</span>
            </button>
          </td></tr></tbody>
          </table>
        </div>
        <table style={{width:"100%",padding:"3px",marginTop:"10px",border:"0px #ccc solid",borderRadius:"0px"}}>
        <tbody><tr><td style={{height:"60px",padding:"15px"}}>
          <button onTouchEnd={this.cancel} style={{display:"inline-block",cursor:"pointer",marginTop:"20px",width:"100%",height:"40px",lineHeight:"40px",border:"1px indianred solid",borderRadius:"20px",backgroundColor:"palegreen"}}>
            <span style={{borderRadius:"3px",padding:"10px"}}>关闭</span>
          </button>
        </td></tr></tbody>
        </table>

    	</form>
    );

  }
}


