class Amount extends React.Component{
  constructor(props){
    super(props);
    this.state = {
      errTag: "disabled",
      Errors: {},
      ErrorMsg: {},
      errShow: {},
      inputed: {},
      user: {},
      sValue: 0
    }
    this.validData = {
      "user_name": ["maxLength(28)","minLength(6)","notEmpty()"]
    }

    this.updateSubmit = this.updateSubmit.bind(this);
  }

  componentDidMount(){
    let phoneWidth = parseInt(window.screen.width);
    let url = Config.api+"user/update";
    fetchApi({
      url
    },function(res){
      this.setState({
        user: res.user,
        phoneWidth
      });
    }.bind(this));
  }

  updateSubmit(name,value){
    fetchApi({
      url: Config.api+'user/updateone',
      method: 'POST',
      body: {item_name:name,item_value:value}
    },function(res){
      resultAlert(res);
      if(res.status != 200){
        var user = this.state.user;
        user[name] = value;
        this.setState({user});
      }
    }.bind(this));
  }

  handleChange(name,value){
    var validNames = this.validData[name];
    validate(value,name,validNames,this,this.state.user);
    var user = this.state.user;
    user[name] = value;
    this.setState({user});
    wait(3000).done(function(){
      this.updateSubmit(name,value);
    }.bind(this));
  }

  render(){
    setTitle("设置个人费用");
    if(!this.state.user) return null;

    var errMsg = "错误提示";
    var errStyle = {textAlign:"left", color:"red", clear:"left", fontSize:"12px", margin:"3px", clear:"both"};

    return (
      <div style={{width:"100%",height:"100%",overflowY:"auto"}}>
        <Usernavadmin user={this.state.user}/>
        <table style={{width:"99%"}}><tbody>
          <tr><td>
            <table className={"user_admin_table"}><tbody>
              <tr><td className={"info-top"} style={{height:"50px"}}><b>个人费用</b><span style={{color:"darkgreen"}}>(您被拉时对方所需支付的费用)</span></td></tr>
            </tbody></table>  
            <List style={{backgroundColor:'white'}}>
              <InputItem type="text" style={{textAlign:"right",color:"#888"}} placeholder="金额(元)" onChange={this.handleChange.bind(this,"friend_amount")} value={this.state.user.friend_amount||""}><span style={{width:"150px",color:"darkgreen",fontSize:"15px"}}>被加好友(元)</span></InputItem>
            </List>  
            <List style={{backgroundColor:'white'}}>
              <InputItem type="text" style={{textAlign:"right",color:"#888"}} placeholder="金额(元)" onChange={this.handleChange.bind(this,"join_amount")} value={this.state.user.join_amount||""}><span style={{width:"150px",color:"darkgreen",fontSize:"15px"}}>被拉入群(元)</span></InputItem>
            </List>
          </td></tr>
        </tbody></table>
        <div style={{height:"60px"}}></div>
        <div style={{zIndex:"10000",width:"100%",position:"fixed",bottom:"0px",backgroundColor:"#108ee9",height:"40px",lineHeight:"40px",textAlign:"center",opacity:"100%"}}>
          <span style={{color:"white"}} onTouchEnd={touchEnd.bind(this,"#/me/admin")}>关闭</span>
        </div>
      </div>
    );
  }
}

export default Amount