export default class Act extends React.Component{
  constructor(props){
    super(props);
    if(!this.props.id){
      alertMsg("参数错误，点击确定返回！",0,function(){
        window.history.back();
      })
    }
    this.state = {
      id: this.props.id,
      pic: 0,
      showPostCommentsDiv: "none",
      showActJoinDiv: "none",
      msg: "",
      title: "",
      content: "",
      paymentShow: "none",
      payment: 0,
      paymentReply: "",
      shop: {}
    }
  }

  componentDidMount(){
    if(this.props.id){
      let url = Config.api+"shop/viewact?shopid="+this.props.id;
      fetchApi({
        url
      },function(res){  
        if(!isJson(res)){
            errMessage("","服务器文件错误！");
            return false;
        }
        if(res.status == 200){
          this.setState({
            shop: res.shop,
            comments: res.comments,
            enrolls: res.enrolls,
            enrolled: res.enrolled
          });

        }else{
          errMessage(res);
        }
      }.bind(this));
    }
  }

  showActJoin = ()=>{
    var res = this.state.showActJoinDiv == "block"?"none":"block";
    this.setState({
      showActJoinDiv: res
    })
  }

  actJoin = (id)=>{
    this.setState({showActJoinDiv:"none"});
    var url = Config.api+"shop/actjoin?shopid="+id+"&msg="+this.state.msg;
    fetchApi({
      url
    },function(res){  
      if(res.status == 200){
        this.setState({enrolled:res.enrolled, enrolls: res.enrolls});
      }
      resultAlert(res);
    }.bind(this));
  }

  actCancel = (id)=>{
    var url = Config.api+"shop/actcancel?shopid="+id;
    fetchApi({
      url
    },function(res){  
      if(res.status == 200){
        this.setState({enrolled:res.enrolled, enrolls: res.enrolls});
      }
      resultAlert(res);
    }.bind(this));
  }

  showPostComments = ()=>{
    var res = this.state.showPostCommentsDiv == "block"?"none":"block";
    this.setState({
      showPostCommentsDiv: res
    })
  }

  sendComment = ()=>{
    this.setState({showPostCommentsDiv:"none"});
    if(this.state.content){
      fetchApi({
        url: Config.api+"comment/create",
        method: "POST",
        body: {title:this.state.title, content:this.state.content, ownerid:this.props.id, typeid:12},
      },function(res){  
        if(!isJson(res)){
            errMessage("","服务器文件错误！");
            return false;
        }
        if(res.status == 200){
          this.setState({
            comments: res.comments
          })
        }
        resultAlert(res);
      }.bind(this));
    }
  }

  showPayment = (id)=>{
      this.setState({
        paymentid: id,
        paymentShow: "block"
      })
  }

  hidePayment = () => {
    this.setState({
      paymentid:'',
      paymentShow: "none"
    })
  }  

  sendPayment = ()=>{
    this.setState({paymentShow:"none"});
    if(this.state.payment){
      fetchApi({
        url: Config.api+"comment/payment",
        method:"POST",
        body: {payment: this.state.payment, paymentreply: this.state.paymentReply, commentid: this.state.paymentid, typeid:12}
      },function(res){  
        if(!isJson(res)){
            errMessage("","服务器文件错误！");
            return false;
        }
        if(res.status == 200){
          this.setState({
            comments: res.comments
          });
        }
        resultAlert(res);
      }.bind(this));
    }
  }

  handleChangePayment = (event)=>{
    this.setState({
      payment: event.target.value
    })
  }

  handleChangeTitle = (event)=>{
    this.setState({
      title: event.target.value
    })
  }

  handleChangeMsg = (event)=>{
    this.setState({
       msg: event.target.value
    })
  }

  handleChangeContent = (event)=>{
    this.setState({
      content: event.target.value
    })
  }

  handleChangePaymentReply = (event)=>{
    this.setState({
      paymentReply: event.target.value
    })
  }

  userDetail = (userid) => {
    backurl_user = "#/stores/act/"+this.state.shop.id;
    touchEnd("#/users/detail/"+userid);
  }

  render() {
    setTitle(this.state.shop.name);
    let $this = this;

    var cert_name = JSON.parse(this.state.shop.cert_name||'[]');
    var certified = {1:"新生",2:"助理",3:"中级",4:"高级",5:"专家",6:"管理"};
    if(Object.keys(cert_name).length>0){
      certified[1] = cert_name[1];
      certified[2] = cert_name[2];
      certified[3] = cert_name[3];
      certified[4] = cert_name[4];
      certified[5] = cert_name[5];
      certified[6] = cert_name[6];
    }

    var ListItems = !this.state.comments?null:this.state.comments.map(function (item,index) {
      return (
        <Comment key={item.id} item={item} showPayment={this.showPayment} adminid={this.state.shop.userid} backurl={"#/stores/act/"+$this.state.shop.id}/>
      );
    }.bind(this));

    var enrollList = !this.state.enrolls?null:this.state.enrolls.map(function($user,index){
      var $date = !$user.userbirthday?null:$user.userbirthday.replace(/\-/g, "/");
      let userphotoname = $user.userid;
      return (
        <table key={$user.userid} id={$user.userid} style={{width:"100%",border:"0px",backgroundColor:"white"}}>
          <tbody>
          	<tr>
          		<td style={{width:"55px",height:"55px",verticalAlign:"top",padding:"3px"}} userid={$user.userid}>
                <Img src={photoUrl+"/topuserphotos/"+userphotoname+".jpg"} style={{width:"55px", height:"55px", borderRadius:"6px"}} />
              </td>
          		<td style={{verticalAlign:"top"}}>
      					<table style={{width:"100%"}}><tbody><tr><td>
                  <div style={{dispay:"block", whiteSpace:"nowrap", textOverflow:"ellipsis", overflow:"hidden", maxWidth:"200px"}}>
        						<span onTouchEnd={$this.userDetail.bind(this,$user.userid,$user.userid)} style={{color:$user.usersex=="1"?"black":"red",fontSize:"16px",fontWeight:"bold"}}>{$user.username}</span>
                    <br/>
                    <span style={{fontSize:"12px",color:"#999"}}>{(new Date()).getFullYear()-(new Date($date)).getFullYear()}岁{!$user.marry||"-"}{$user.marry}{!$user.jobtitle||"-"}{$user.jobtitle}{!$user.duty||"-"}{$user.duty}</span>
                  </div>
                </td><td>
      					</td></tr></tbody></table>
      					<table style={{width:"100%"}}><tbody>
                <tr><td style={{textAlign:"left",color:"#666"}}>{$user.msg}</td></tr>
                </tbody></table>
          		</td>
              <td style={{width:"65px",verticalAlign:"middle",textAlign:"right",fontSize:"12px",color:"#999"}}>{(new Date($user.baomingtime)).getFullYear()}-{(new Date($user.baomingtime)).getMonth()+1}-{(new Date($user.baomingtime)).getDate()}</td>
          	</tr>
            <tr><td colSpan="3" style={{borderBottom:"1px #eee solid"}}></td></tr>
          </tbody>
        </table>
      );
    });

    let photoname = this.state.shop.id;
    let img = null;
    if(this.state.shop.id){
      img =  <Img src={photoUrl+"/topstoreactphotos/"+photoname+".jpg"} style={{maxWidth:"100%"}} />;
    }

    return (
      <div style={{width:"100%",height:"100%"}}>
        <table style={{width:"100%",height:"100%"}}><tbody>
          <tr><td style={{height:"30px"}}>
            <Storenav store={this.state.shop} showChatDiv={this.showChatDiv}/>
          </td></tr>
          <tr><td>
            <div style={{height:"100%",overflowY:"auto"}}>
              <table style={{width:'100%',backgroundColor: '#fff',minHeight:"60px"}}>
                <tbody>
                  <tr><td style={{position:"relative",textAlign:"center"}}>
                    {img}
                    <div style={{position:"absolute",padding:"10px",bottom:"1px",width:"100%",backgroundColor:"black",color:"white",opacity:"0.8",fontSize:"16px",fontWeight:"bolder",margin:"0 auto"}}>
                      {this.state.shop.act_title||"暂无活动"}
                    </div>
                  </td></tr>
                </tbody>
              </table>

              <table style={{width:'100%',backgroundColor: '#fff'}}>
                <tbody>
                  <tr style={{height:"40px"}}>
                    <td style={{textAlign:"center"}}>地点：</td>
                    <td>{this.state.shop.act_place}</td>
                  </tr>
                  <tr><td style={{borderBottom:"1px #f2f2f2 solid"}}></td></tr>
                  <tr style={{height:"40px"}}>
                    <td style={{width:"60px",textAlign:"center"}}>时间：</td>
                    <td colSpan="3">{this.state.shop.act_date}  {this.state.shop.act_time}</td>
                  </tr>
                  <tr><td style={{borderBottom:"1px #f2f2f2 solid"}}></td></tr>
                  <tr style={{height:"40px"}}>
                    <td style={{textAlign:"center"}}>联系：</td>
                    <td colSpan="3">{this.state.shop.act_contact}</td>
                  </tr>
                  <tr><td style={{borderBottom:"1px #f2f2f2 solid"}}></td></tr>
                  <tr style={{height:"40px"}}>
                    <td style={{textAlign:"center"}}>人数：</td>
                    <td>{this.state.shop.act_person}</td>
                  </tr>
                  <tr><td style={{borderBottom:"1px #f2f2f2 solid"}}></td></tr>
                  <tr style={{height:"40px"}}>
                    <td style={{textAlign:"center"}}>费用：</td>
                    <td>{this.state.shop.act_cost}</td>
                  </tr>
                  <tr><td style={{borderBottom:"1px #f2f2f2 solid"}}></td></tr>
                  <tr style={{height:"40px"}}>
                    <td style={{textAlign:"center"}}>要求：</td>
                    <td colSpan="3">{this.state.shop.act_invite}</td>
                  </tr>
                </tbody>
              </table>
              <table id="club-nav" style={{width:'100%',backgroundColor: '#fff'}}>
                <tbody>
                  <tr><td style={{textAlign:"center",verticalAlign:"middle",height:"40px",backgroundColor:"#f2f2f2"}}>活动详情</td></tr>
                  <tr>
                    <td style={{padding:"10px"}}>{this.state.shop.act_detail}</td>
                  </tr>
                </tbody>
              </table>

              <table id="club-nav" style={{width:'100%',backgroundColor: '#fff'}}>
                <tbody>
                  <tr><td style={{textAlign:"center",verticalAlign:"middle",height:"40px",backgroundColor:"#f2f2f2"}}>
                    <table><tbody><tr>
                    <td style={{width:"50px"}}></td>
                    <td style={{textAlign:"center"}}>
                      活动报名
                    </td>
                    <td style={{width:"50px"}}>
                      <div style={{display:this.state.enrolled==1?"none":"block",width:"100%",height:"30px",lineHeight:"30px",textAlign:"center"}}><span className="btn-info" onTouchEnd={this.showActJoin}>报名</span></div>
                      <div style={{display:this.state.enrolled==1?"block":"none",width:"100%",height:"30px",lineHeight:"30px",textAlign:"center"}}><span className="btn-info" onTouchEnd={this.actCancel.bind(this,this.state.shop.id)}>取消</span></div>
                    </td></tr></tbody></table>
                  </td></tr>
                  <tr style={{height:"1px",backgroundColor:"white"}}><td></td></tr>
                  <tr>
                    <td style={{padding:"3px",backgroundColor:"#f2f2f2"}}>
                      {enrollList}
                    </td>
                  </tr>
                </tbody>
              </table>

              <div style={{height:"10px"}}></div>
              <table id="club-nav" style={{width:'100%',backgroundColor: '#f2f2f2'}}>
                <tbody>
                  <tr style={{height:'35px', lineHeight:'35px'}}>
                    <td style={{width:"45px"}}></td>
                    <td style={{textAlign:'center'}}><span>活动讨论</span></td>
                    <td style={{width:"45px"}}><span className="btn-info" onTouchEnd={this.showPostComments}>发言</span></td>
                  </tr>
                </tbody>
              </table>
              {ListItems}

              <table style={{height:"5px"}}><tbody><tr><td>&nbsp;</td></tr></tbody></table>
            </div>

          </td></tr>
          </tbody></table>

          <Postcomment 
            showPostCommentsDiv={this.state.showPostCommentsDiv} 
            title={this.state.title} 
            content={this.state.content}
            handleChangeTitle={this.handleChangeTitle}
            handleChangeContent={this.handleChangeContent}
            hidePostComments={this.showPostComments}
            sendComment={this.sendComment} 
          />

          <Paymentreply 
            paymentShow={this.state.paymentShow}
            payment={this.state.payment}
            paymentReply={this.state.paymentReply}
            handleChangePayment={this.handleChangePayment}
            handleChangePaymentReply={this.handleChangePaymentReply}
            hidePayment={this.hidePayment}
            sendPayment={this.sendPayment}
          />

          <Actjoin
            id={this.props.id}
            showActJoinDiv={this.state.showActJoinDiv}
            act_title={this.state.shop.act_title}
            username={username}
            handleChangeMsg={this.handleChangeMsg}
            showActJoin={this.showActJoin}
            actJoin={this.actJoin}
          />
      </div>
    );
  }
}