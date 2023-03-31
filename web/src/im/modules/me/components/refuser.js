export default class Refuser extends React.Component {
  constructor(props){
    super(props);
    this.state = {
      p: 0,
      showMobileTable:"none",
      showRefTable:"none",
      refuser: null,
      refuser1:{},
      refuser2:{}
    }
  }

  componentDidMount(){
    let url = Config.api + "user/checkuser";
    fetchApi({
      url
    },function(res){
      if(!isJson(res)){
        alertMsg("服务器文件错误！");
        return false;
      }
      if(res.status == 200){
        var orders = res.orders;
        var showOrdersDiv = orders.length>0?"block":"none";
        this.setState({
          user: res.user,
          refuser1: res.refuser1,
          ref1: res.refuser1,
          ref2: res.refuser2,
          orders,
          showOrdersDiv
        });
      }else{
        alertMsg(res);
      }
    }.bind(this));
  }

  toggleMobileTable=(flag)=>{
    var showFlag = this.state.showMobileTable=="none"?"table":"none";
    if(flag) showFlag = flag;
    this.setState({showMobileTable:showFlag});
  }

  toggleRefTable=(flags)=>{
    var showFlag = this.state.showRefTable=="none"?"table":"none";
    if(flags) showFlag = flags;
    this.setState({showRefTable:showFlag});
  }

  toggleOrdersDiv=(flag)=>{
    var showFlag = this.state.showOrdersDiv=="none"?"block":"none";
    if(flag) showFlag = flag;
    this.setState({showOrdersDiv:showFlag});
  }

  handleRefChange=(event)=>{
    let value = event.target.value;
    this.setState({refuser:value})
  }

  selectRefUser=(event)=>{
    let that = this;
    let value = this.state.refuser;
    var url = Config.api + "user/selectrefuser?username1="+value;
    fetchApi({
      url
    },function(res){
      if(res.result == 3){
        that.setState({
          refuser1:res.refuser1,
          refuser2:res.refuser2,
          changeRefFlag:1
        });
      }else{
        that.setState({
          changeRefFlag:0
        });
        resultAlert(res);
      }
    }.bind(this));
  }

  submitRefUser=()=>{
    if(this.state.changeRefFlag != 1){
      alert("介绍人ID不正确！");
      return false;
    }
    
    var balance = parseFloat(this.state.user.balance);
    balance = balance.toFixed(2);
    
    if(this.state.user.ref_userid> 1 && balance < 100){
    	alert("您的余额不足1000元，暂不能更换介绍人！");
    	return false;
    }
    
    if(this.state.user.ref_userid > 1){
      var r = confirm("您的余额充足，将从您的余额中支付给现介绍人1000元！");
      if(r == false){
        return false;
      }
    }
    
    var url = Config.api + "user/updaterefuser";
    fetchApi({
      url,
      method: "POST",
      body: {refuserid:this.state.refuser1.userid}
    },function(res){
      if(res.result == 3){
        this.setState({
          user:res.user,
          refuser1:res.refuser1,
          refuser2:res.refuser2,
          ref1:res.refuser1,
          ref2:res.refuser2,
          showRefTable:"none"
        });
      }
      resultAlert(res);
    }.bind(this));
  }

  submitUserMobile=()=>{
    var url = "/user/adminusermobile";
    fetchApi({
      url,
      method: "POST",
      body: {mobile:this.state.user.mobile}
    },function(res){
      if(res.status == 200){
        var user = this.state.user;
        this.setState({user,showMobileTable:"none"});
      }
      resultAlert(res);
    }.bind(this));
  }

  payToUser=()=>{
    var ref_amount_left = parseInt(this.state.user.balance||'0');
  	if(ref_amount_left < 1){
  		alert("您的业务余额不足1元，不能提现！");
  		return false;
    }
    alertMsg("暂不能提现，请耐心等候！");
    return false;
  	var r = confirm("确定提现？");
  	if(r == "false"){
  		return false;
    }
    var url = "/wxpay/example/withdraw.php";
    fetchApi({
      url
    },function(res){
      if(res.status == 200){
        var user = this.state.user;
        user.ref_amount_left = 0;
        this.setState({user});
      }
		alert(res);
    }.bind(this));
  }

  handleMobileChange=(event)=>{
    var value = event.target.value;
    var user = this.state.user;
    user["mobile"] = value;
    this.setState({user});
  }

  render(){
    setTitle("管理界面");
    if(!this.state.user) return false;
    if(!this.state.user.id){
      //$("#login_div").show();
      //return false;
    }
    var user = this.state.user;
    var Style = {
    	userRow:{height:"100px", margin:"3px"},
    	userLogoTd: { width: "100px", verticalAlign:"middle" },
    	userLogo: {width:"50px", height:"50px",borderRadius:"25px"},
    	divRow:{height:"40px", margin:"3px"},
    	logoTd: { width: "30px", verticalAlign:"middle" },
    	logo: {width:"30px", height:"30px"},
      vertical: {verticalAlign:"middle"},
      td: {dispay:"block", fontSize:"16px", fontWeight:"normal", textAlign:"center"}
    };
    var nickname = nickname||null;
    var ref_income = parseFloat(user.ref_income||'0');
    ref_income = ref_income.toFixed(2);
    var balance = parseFloat(user.balance||'0');
    balance = balance.toFixed(2);
    
    return (
      <table style={{width:"100%", border:"0px",  marginTop:"0px", backgroundColor:"#eeeeee"}}>
        <tbody>
        	<tr style={Style.divRow}>
        		<td className="content" style={{border:"0px red solid"}}>
                <table style={{width:"100%", border:"0px",  marginTop:"0px", backgroundColor:"white"}}>
                  <tbody>
                  	<tr>
                  		<td style={{verticalAlign:"left"}}>
                        <table style={{width:"100%"}}><tbody>
                          <tr><td style={{textAlign:"center",width:"60px"}}>
                            <Img src={thumbUrl+"/topuserphotos/"+this.state.user.avatar+".jpg"} style={Style.userLogo}/>
                          </td>
                          </tr>
                          <tr>
                          <td style={{verticalAlign:"middle",textAlign:"center"}}>
                            <div style={{fontWeight:"normal"}} onTouchEnd={this.toggleMobileTable.bind(this,"table")}>
                              （<span>{user.username}</span>）<br/>
                            </div>
                          </td></tr>
                        </tbody></table>
                  		</td>
                  	</tr>
                    <tr style={Style.divRow}>
                    	<td>
                          <table style={{width:"100%"}}><tbody>
                            <tr><td style={{textAlign:"center"}}>
                            	<div style={{height:"5px"}}></div>
                                <div>直接介绍人：<span style={{color:this.state.refuser1.usersex==1?"black":"red"}} onTouchEnd={touchEnd.bind(this,"#/users/detail/"+this.state.ref1.userid)}>{this.state.ref1.username}</span>	<span style={{background:"url(image/icon_new.jpg) no-repeat -217px -178px",display:"inline-block",width:"20px",height:"20px"}} onTouchEnd={this.toggleRefTable.bind(this,"table")}></span></div>
                                <div style={{display:this.state.ref2.username?"inline-block":"none"}}>间接介绍人：<span style={{color:this.state.ref2.usersex==1?"black":"red"}} onTouchEnd={touchEnd.bind(this,"#/users/detail/"+this.state.ref2.userid)}>{this.state.ref2.username}{this.state.ref2.mobile}</span></div>
                                <div style={{height:"5px"}}></div>
                                <span><em className="error" style={{fontSize:"12px"}}>有问题直接联系介绍人！</em></span>
                            </td></tr>
                          </tbody></table>
                    	</td>
                    </tr>
                    <tr><td style={{height:"10px"}}></td></tr>
                  </tbody>
                </table>

                  <div style={{width:"100%",height:"10px"}}></div>

                  <table style={{width:"100%", border:"0px",  marginTop:"0px", backgroundColor:"white"}}>
                    <tbody>
                    	<tr style={Style.divRow}>
                    		<td>
                          <table style={{width:"100%"}}><tbody>
                            <tr><td><div style={Style.td}>
                            <span onTouchEnd={touchEnd.bind(this,"#/me/myrecommendcashlogs")}>收入：{ref_income}元</span>
                            </div></td></tr>
                          </tbody></table>
                        </td>
                    		<td style={{border:"0px red solid", verticalAlign:"middle"}}>
                          <table style={{width:"100%"}}><tbody>
                            <tr><td><div style={Style.td}>
                            <span onTouchEnd={touchEnd.bind(this,"#/me/myrecommendcashlogs")} >余额：{balance}元</span>
                            </div></td></tr>
                          </tbody></table>
                    		</td>
                    		<td style={{border:"0px red solid", width:"70px", verticalAlign:"middle"}}>
                          <table style={{width:"100%"}}><tbody>
                            <tr><td><div style={Style.td}>
                            <span style={{ padding:"5px",color:"white",backgroundColor:"darkcyan",fontSize:"14px",borderRadius:"5px" }} onTouchEnd={this.payToUser}>提现</span>
                            </div></td></tr>
                          </tbody></table>
                    		</td>
                    	</tr>
                    </tbody>
                  </table>

                  <div style={{width:"100%",height:"10px"}}></div>

                  <table style={{width:"100%", border:"0px",  marginTop:"0px", backgroundColor:"white"}}>
                    <tbody>
                      <tr><td colSpan="2" style={{borderBottom:"1px solid #eeeeee"}}></td></tr>
                    	<tr style={Style.divRow}>
                    		<td>
                          <table style={{width:"100%"}}><tbody>
                            <tr><td><div style={Style.td}>
                            <span onTouchEnd={touchEnd.bind(this,"#/me/myrecommends")}>我的推荐</span>
                            </div></td></tr>
                          </tbody></table>
                        </td>
                    		<td style={{border:"0px red solid", verticalAlign:"middle"}}>
                          <table style={{width:"100%"}}><tbody>
                            <tr><td><div style={Style.td}>
                            <span onTouchEnd={touchEnd.bind(this,"#/me/myrecommendcashlogs")} >业务收入</span>
                            </div></td></tr>
                          </tbody></table>
                    		</td>
                    	</tr><tr><td colSpan="2" style={{borderBottom:"1px solid #eeeeee"}}></td></tr>
                    </tbody>
                  </table>
                  
                  <div style={{width:"100%",height:"10px"}}></div>               

                  <table style={{display:this.state.showMobileTable,width:"100%",position:"fixed",top:"150px"}}>
                    <tbody><tr><td style={{textAlign:"center",padding:"10px"}}>
                      <div style={{backgroundColor:"white",padding:"10px",border:"1px solid #aaa",margin:"0 auto"}}>
                        新手机号：<input style={{height:"30px"}} value={this.state.user.mobile} onChange={this.handleMobileChange} />
                        <div style={{height:"10px"}}></div>
                        <span className="btn-info" style={{marginRight:"20px"}} onTouchEnd={this.toggleMobileTable.bind(this,"none")}>取消</span>
                        <span className="btn-info" onTouchEnd={this.submitUserMobile}>确定</span>
                      </div>
                    </td></tr></tbody>
                  </table>

                  <table style={{display:this.state.showRefTable,width:"100%",position:"fixed",top:"150px"}}>
                    <tbody><tr><td style={{textAlign:"center",padding:"10px"}}>
                      <div style={{top:"-2px",right:"5px",position:"absolute",backgroundColor:"black",color:"white",border:"1px black solid",borderRadius:"12px",width:"24px",height:"24px"}}><Icon type={'cross'} onTouchEnd={this.toggleRefTable.bind(this,"none")}/></div>
                      <div style={{backgroundColor:"white",padding:"10px",border:"1px solid #aaa",margin:"0 auto"}}>
                        <div style={{textAlign:"left",fontSize:"14px",color:"chocolate",marginTop:"10px"}}>改换介绍人请慎重：只能选择比您先注册的会员，且需要支付给现介绍人脱钩费1000元(首次更换除外)，请确保您的业务余额有1000元，建议您轻易不要更换介绍人。</div>
                        <div style={{height:"10px"}}></div>
                        <div><input style={{height:"30px",placeHolder:"介绍人会员名",border:"1px solid #ddd"}} value={this.state.refuser} onChange={this.handleRefChange}/><span onTouchEnd={this.selectRefUser} style={{marginLeft:"10px",color:"darkgreen",width:"50px",textAlign:"center"}}>搜索</span></div>
                        <div style={{height:"60px",lineHeight:"60px"}}><span style={{color:this.state.refuser1.usersex==1?"black":"red"}}>{this.state.refuser1.username}(直接)</span>{this.state.refuser2.username?" -> "+this.state.refuser2.username+"(间接)":""}</div>
                        <div style={{width:"100%",height:"30px",lineHeight:"30px",textAlign:"center",backgroundColor:"darkgreen",color:"white"}} onTouchEnd={this.submitRefUser}>确定更换</div>
                      </div>
                    </td></tr></tbody>
                  </table>
                  
                  <div style={{display:this.state.showOrdersDiv,position:"fixed",width:"100%",textAlign:"center",top:"45px",margin:"0 auto"}}>
                    <span className="btn-info" style={{position:"absolute",backgroundColor:"chocolate",color:"white",padding:"6px",borderRadius:"15px",width:"30px",height:"30px",lineHeight:"20px",textAlign:"center",right:"4px",display:"inline-block"}} onTouchEnd={this.toggleOrdersDiv.bind(this,"none")}>X</span>
                    <table style={{width:"98%"}}>
                      <tbody><tr><td style={{textAlign:"center",padding:"10px"}}>
                        <div style={{backgroundColor:"ivory",padding:"10px",border:"1px solid #aaa",margin:"0 auto",borderRadius:"5px"}}>
                          <table style={{width:"100%"}}><tbody>
                          <tr><td style={{width:"90px",height:"40px"}}>日期</td><td>店铺</td><td style={{width:"60px"}}>消费金额</td><td style={{width:"50px"}}>状态</td></tr>
                          
                          </tbody></table>
                          <div style={{height:"20px"}}></div>
                          <span className="btn-info" style={{padding:"6px",borderRadius:"3px",backgroundColor:"chocolate"}} onTouchEnd={touchEnd.bind(this,"#/stores/myorders")}>前往处理</span>
                          <div style={{height:"20px"}}></div>
                        </div>
                      </td></tr></tbody>
                    </table>              
				          </div>
                  <table style={{zIndex:"10000",position:"fixed",bottom:"0px",width:"100%",backgroundColor:"darkgreen"}}><tbody><tr><td style={{textAlign:"center",height:"35px",lineHeight:"35px"}}>
                    <span style={{padding:"3px",color:"white"}} onTouchEnd={touchEnd.bind(this,"#/me/admin")}>关闭</span>
                  </td></tr></tbody></table>
        		</td>
        	</tr>
        </tbody>
      </table>
    );

  }

}