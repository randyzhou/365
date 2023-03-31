export default React.createClass({
  displayName: 'Create',

  getInitialState: function(){
    return {
      errTag: "disabled",
      Errors: {},
      ErrorMsg: {},
      errShow: {},
      inputed: {},
      user: {}
    }
  },

  componentDidMount: function(){
    if(this.props.id){
      let url = Config.api + "user/update?id="+this.props.id;
      fetchApi({
        url
      },function(res){           
        if(!isJson(res)){
            errMessage("","服务器文件错误！");
            return false;
        }
        if(res.status == 200){
          this.setState({
            user: res.user
          });
        }else{
          errMessage(res);
        }
      }.bind(this));
    }
    var phoneWidth =  parseInt(window.screen.width);
    this.setState({phoneWidth:phoneWidth});
  },

  handleChange: function(name,event){
    var value = "";
    if(!event) value = this.refs[name].value;
    else value = event.target.value;

    var validNames = this.validData[name];

    validate(value,name,validNames,this,this.state.user);
    var user = this.state.user;
    user[name] = value;

    this.setState({
      user: user
    });
  },

  validData: {
    "msg": ["maxLength(28)"]
  },

  handleSubmit: function(){
    var $this = this;
    let url = Config.api+"user/update?id="+this.props.id,;
    fetchApi({
      url,
      method: "POST",
      body: {user: this.state.user}
    },function(res){    
      if(res.status == 200){
        this.setState({user:res.user});
        resultAlert(res);
      }
    }.bind(this));

  },

  render: function() {
    if(this.props.id) setTitle("修改个人动态");
    if(!this.state.user) return null;

    var errMsg = "错误提示";
    var errStyle = {textAlign:"left", color:"red", clear:"left", fontSize:"12px", margin:"3px", clear:"both"};

    return (
      <div>
        <table style={{width:"100%"}}><tbody>
          <tr><td style={{backgroundColor:"lavender",textAlign:"center"}}><b>个人动态</b></td></tr>
          <tr style={{height:"50px"}}>
            <td>
              <input type="text" className="ipt" style={{width:"100%",lineHeight:"30px",verticalAlign:"middle"}} placeholder="请输入0~28个字符，必填" value={this.state.user.msg} maxLength="28" onChange={this.handleChange.bind(this,"msg")} />
              <em className={this.state.errShow.msg?'show':'hide'} style={errStyle}>{this.state.inputed.msg || 0}/28  {this.state.ErrorMsg.msg}</em>
            </td>
          </tr>
        </tbody></table>
        <table style={{width:"100%",height:"40px",backgroundColor:"#eee",marginTop:"10px"}}><tbody><tr><td style={{textAlign:"center"}}>
          <span className={"btn-info"} onTouchEnd={this.handleSubmit}>发布</span>
        </td></tr></tbody></table>
        <div style={{height:"150px"}}>&nbsp;</div>
      </div>
    );
  }
});


