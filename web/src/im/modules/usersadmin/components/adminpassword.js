class Admin extends React.Component{
  constructor(props){
    super(props);
    this.state = {
      errTag: "disabled",
      Errors: {},
      ErrorMsg: {},
      errShow: {},
      inputed: {},
      submit_disabled:true,
      submitColor:"#ccc",
      user: {}
    }

    this.updateSubmit = this.updateSubmit.bind(this);
    this.handleChange = this.handleChange.bind(this);

    this.validData = {
      "password": ["minLength(6)","maxLength(30)","notEmpty()"],
      "verifyPasssword": ['compareValue(==,password,密码不相符)']
    }
  }

  componentDidMount(){
    let url = Config.api+"user/update";
    fetchApi({
      url
    },function(res){
      this.setState({
        user: res.user
      });
    }.bind(this));
  }

  updateSubmit(){
    if(this.state.submit_disabled) return false;
    let value = this.state.user.password;
    if(!this.state.user.password || !this.state.user.verifyPasssword) return false;
    fetchApi({
      url: Config.api+'user/updateone',
      method: 'POST',
      body: {password:value}
    },function(res){
      resultAlert(res);
      if(res.status != 200){
        var user = this.state.user;
        user[name] = value;
        this.setState({user});
      }
    }.bind(this));
  }

  handleChange(name,event){
    let value = event.target.value;
    var validNames = this.validData[name];
    validate(value,name,validNames,this,this.state.user);
    var user = this.state.user;
    user[name] = value;
    this.setState({user});
    if(this.state.errTag == "disabled" || !this.state.user.password || !this.state.user.verifyPasssword){
      this.setState({submit_disabled:true,submitColor:"#ccc"});
    }else{
      this.setState({submit_disabled:false,submitColor:"lightgreen"});
    }
  }


  render(){
    setTitle("修改密码");
    if(!this.state.user.userid) return null;

    var errMsg = "错误提示";
    var errStyle = {textAlign:"left", color:"red", clear:"left", fontSize:"12px", margin:"3px", clear:"both"};

    return (
      <div style={{width:"100%",height:"100%",overflowY:"auto"}}>
        <table style={{width:"99%",marginTop:"10px"}}><tbody>
          <tr><td style={{textAlign:"center",height:"100px",fontSize:"20px"}}>修改密码</td></tr>
          <tr><td style={{height:"50px"}}>
            <input id="password" type="password" placeholder="登录密码" minLength="6" maxLength="30" style={{padding:"3px",width:"99%",height:"40px",lineHeight:"40px",border:"1px solid #ccc",borderRadius:"5px"}} onChange={this.handleChange.bind(this,"password")}/>
            <em className={this.state.errShow.password?'show':'hide'} style={errStyle}>{this.state.inputed.password || 0}/30  {this.state.ErrorMsg.password}</em>
          </td></tr>
          <tr><td style={{height:"60px"}}>
            <input id="verifyPasssword" type="password" placeholder="确认密码" style={{padding:"3px",width:"99%",height:"40px",lineHeight:"40px",border:"1px solid #ccc",borderRadius:"5px"}} onChange={this.handleChange.bind(this,"verifyPasssword")}/>
            <em className={this.state.errShow.verifyPasssword?'show':'hide'} style={errStyle}>{this.state.inputed.verifyPasssword || 0}/30  {this.state.ErrorMsg.verifyPasssword}</em>
          </td></tr>
          <tr><td style={{textAlign:"center",height:"50px",lineHeight:"50px"}}>
            <button id="userjoin_submit" disabled={this.state.submit_disabled} style={{backgroundColor:this.state.submitColor, display:"inline-block",cursor:"pointer",marginTop:"20px",width:"100%",height:"40px",lineHeight:"40px",border:"1px indianred solid",borderRadius:"20px"}}>
            <span style={{borderRadius:"3px",padding:"10px"}} onTouchEnd={this.updateSubmit}>提交修改</span>
            </button>
          </td></tr>
        </tbody></table>
        <div style={{height:"60px"}}></div>
        <div style={{zIndex:"10000",width:"100%",position:"fixed",bottom:"0px",backgroundColor:"#108ee9",height:"40px",lineHeight:"40px",textAlign:"center",opacity:"100%"}}>
          <span style={{color:"white"}} onTouchEnd={touchEnd.bind(this,"#/me/admin")}>返回</span>
        </div>
      </div>
    );
  }
}

export default Admin;