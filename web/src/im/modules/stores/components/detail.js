export default class Detail extends React.Component{
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
      title: "",
      content: "",
      paymentShow: "none",
      payment: 0,
      paymentReply: "",
      appdivshow: "none",
      store: {},
      shop: {},
      owner: {}
    }
  }

  componentWillReceiveProps(nextProps){
    var appdivshow = nextProps.appdivshow;
    var weburl = nextProps.weburl;
    this.setState({appdivshow,weburl});
  }  

  componentDidMount(){
    if(this.props.id){
      let url = Config.api+"shop/detail?shopid="+this.props.id;
      fetchApi({
        url
      },function(res){
        if(!isJson(res)){
            errMessage("","服务器文件错误！");
            return false;
        }
        if(res.status == 200){
	      var phoneWidth =  parseInt(window.screen.width)>450?450:parseInt(window.screen.width);
          this.setState({
            phoneWidth:phoneWidth,
            store: res.store,
            storeUsername: res.username,
            totals: res.totals,
            groups: res.groups,
            members: res.members,
            articles: res.articles,
            photos: res.photos,
            products: res.products,
            comments: res.comments,
            owner: res.owner
          });
        }else{
          errMessage(res);
        }
      }.bind(this));

    }
  }

  showPostComments=()=>{
    var res = this.state.showPostCommentsDiv == "block"?"none":"block";
    this.setState({
      showPostCommentsDiv: res
    })
  }

  handleChangeTitle=(event)=>{
    this.setState({
      title: event.target.value
    })
  }  

  handleChangeContent=(event)=>{
    this.setState({
      content: event.target.value
    })
  }

  sendComment=()=>{
    this.setState({showPostCommentsDiv:"none"});
    if(this.state.content){
      let url = Config.api+"comment/create";
      fetchApi({
        url,
        method: "POST",
        body: {title: this.state.title, content: this.state.content, ownerid: this.props.id, typeid:11}
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

  showPayment=(id)=>{
    this.setState({
      paymentId: id,
      paymentShow: this.state.paymentShow=="block"?"none":"block"
    })
  }
 
  handleChangePayment=(event)=>{
    this.setState({
      payment: event.target.value
    })
  }

  handleChangePaymentReply=(event)=>{
    this.setState({
      paymentReply: event.target.value
    })
  }  

  sendPayment=()=>{
    this.setState({paymentShow:"none"});
    if(this.state.payment){
      let url = Config.api+"comment/payment";
      fetchApi({
        url,
        method: "POST",
        body: {payment: this.state.payment, paymentreply: this.state.paymentReply, commentid: this.state.paymentId,typeid:11}
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


  toggleAppDivShow=(place)=>{
    let url = "http://map.baidu.com/?newmap=1&ie=utf-8&s=s%26wd%3D"+place;
    var appdivshow = this.state.appdivshow=="block"?"none":"block";
    var weburl = appdivshow=="block"?url:"";
    this.setState({weburl,appdivshow});
  }

  storeDetail=(shopid)=>{
    backurl_store = "#/stores/detail/"+this.props.id;
    touchEnd("#/stores/main/"+shopid);
  }

  userDetail=(userid)=>{
    backurl_user = "#/stores/detail/"+this.props.id;
    touchEnd("#/users/detail/"+userid);
  }

  render() {
    if(!this.state.store) return null;
    setTitle(this.state.store.name);
    let $this = this;

    let img = null;
    if(this.state.store.id){
      img = <Img src={thumbUrl+"/topstorephotos/"+this.state.store.id+".jpg"} style={{width:this.state.phoneWidth,maxWidth:"100%"}} />
    }

    var cert_name = JSON.parse(this.state.store.cert_name||'[]');
    var certified = {1:"新生",2:"助理",3:"中级",4:"高级",5:"专家",6:"管理"};
    if(Object.keys(cert_name).length>0){
      certified[1] = cert_name[1];
      certified[2] = cert_name[2];
      certified[3] = cert_name[3];
      certified[4] = cert_name[4];
      certified[5] = cert_name[5];
      certified[6] = cert_name[6];
    }

    var CommentItems = !this.state.comments?null:this.state.comments.map(function (item,index) {
      return (
        <Comment key={item.id} item={item} showPayment={this.showPayment} adminid={this.state.store.userid} backurl={"#/stores/detail/"+$this.props.id}/>
      );
    }.bind(this));

    let typeid = this.state.store.typeid;

    let city = '';
    let place = '';
    if(typeid == 1){
      city = this.state.store.city=="北京市"||this.state.store.city=="上海市"||this.state.store.city=="天津市"||this.state.store.city=="重庆市"?"":this.state.store.city;
      place = this.state.store.province+city+this.state.store.district+this.state.store.town+this.state.store.road+this.state.store.building;
    }
    if(typeid == 2){
      city = this.state.owner.city=="北京市"||this.state.owner.city=="上海市"||this.state.owner.city=="天津市"||this.state.owner.city=="重庆市"?"":this.state.owner.city;
      place = this.state.owner.province+city+this.state.owner.district+this.state.owner.town+this.state.owner.road+this.state.owner.building;
    }
    var pay_cert_name = JSON.parse(this.state.store.pay_cert_name||'[]');
  	var paycertified = pay_cert_name.map(function(item,index){
      var money = item[2]||"0";
      return (
        <tr key={index}><td style={{textAlign:"center"}}>{money}</td><td>{item[0]}</td><td>{item[1]}%</td></tr>
      );
    });

    return (
      <div style={{backgroundColor:"#f2f2f2",width:"100%",height:"100%"}}>
        <table style={{width:"100%",height:"100%"}}><tbody>
          <tr><td style={{height:"30px"}}>
            <Storenav store={this.state.store} typeid={typeid}/>
          </td></tr>
          <tr><td style={{verticalAlign:"top"}}>
            {img}
            <table style={{width:'100%',backgroundColor:'#eeeeee',display:typeid==1?"none":"table"}}>
              <tbody>
                <tr style={{height:'35px', lineHeight:'35px'}}>
        	        <td style={{ textAlign:'center'}}><span style={{color:"blue"}} onTouchEnd = {this.storeDetail.bind(this,this.state.owner.id)}>【{this.state.owner.name}】所属社团 >></span></td>
                </tr>
              </tbody>
            </table>
            <table id="counts" style={{width:"100%",backgroundColor:"#ffffff"}}><tbody>
            <tr>
              <td style={{height:"35px",textAlign:"center",verticalAlign:"middle"}}>
                昨日新增:{this.state.store.yesterday}人&nbsp;&nbsp;&nbsp;
                今日新增:{this.state.store.today}人&nbsp;&nbsp;&nbsp;
                总会员数:{this.state.totals}人
              </td>
            </tr>
            </tbody></table>

            <table id="counts" style={{width:"100%",backgroundColor:"#ffffff"}}><tbody>
            <tr><td style={{height:"35px",textAlign:"center",verticalAlign:"middle"}}>
              <span style={{fontWeight:"bolder",fontSize:"14px"}}>{place}</span>&nbsp;[<span style={{color:"blue"}} onTouchEnd={this.toggleAppDivShow.bind(this,place)}>地图</span>]
            </td></tr>
            </tbody></table>

            <table id="counts" style={{width:"100%",backgroundColor:"#ffffff"}}><tbody>
            <tr><td style={{height:"35px",textAlign:"center",verticalAlign:"middle"}}>
              店长：<span onTouchEnd={this.userDetail.bind(this,this.state.store.userid)}>{this.state.storeUsername}</span>&nbsp;&nbsp;<span>电话：{this.state.store.phone||"无"}</span>
            </td></tr>
            </tbody></table>

            <table style={{backgroundColor:"white",width:"100%",display:typeid==1?"table":"none"}}>
              <tbody>
                <tr>
                  <td style={{width:"5px"}}></td>
                  <td style={{textAlign:"left",verticalAlign:"top"}}>
                    <div style={{width:"90%",margin:"0 auto",textAlign:"center"}}>
                      <table style={{width:"100%"}}>
                        <tbody>
                          <tr>
                            <td style={{textAlign:"center"}}>
                              <span style={{color:"firebrick",fontSize:"20px",marginLeft:"-10px"}}>本店会员累积消费优惠说明</span>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <table style={{width:"100%", textAlign:"center", color:"darkcyan"}}>
                        <tbody>
                          <tr>
                          <td style={{textAlign:"center"}}>
                            <table className="paycertified" style={{margin:"0 auto"}}><tbody>
                              <tr><td style={{textAlign:"center"}}>累积消费(元)</td><td>会员级别</td><td>优惠折扣</td></tr>
                              {paycertified}
                            </tbody></table>
                          </td>
                          </tr>
                        </tbody>
                      </table>

                      <div style={{height:"15px"}}></div>
                      <div style={{textAlign:"center", color:"firebrick", fontSize:"20px"}} onTouchEnd={touchEnd.bind(this,"#/stores/detail/"+this.state.store.id+"?token="+token)}>{this.state.store.promote_title}</div>
                      <br/><Img src={thumbUrl+"/topstorepromotephotos/"+this.state.store.id+".jpg"} style={{width:this.state.phoneWidth*0.85}}/>
                      <br/><div style={{textAlign:"left"}}>{this.state.store.promote_detail}</div>
                      <div style={{height:"20px"}}></div>
                    </div>
                  </td>
                  <td style={{width:"5px"}}></td>
                </tr>
              </tbody>
            </table>

            <div style={{width: "100%",backgroundColor:"white"}}>
              <table id="club-nav" style={{width:'100%',backgroundColor: '#f2f2f2'}}>
                  <tbody>
                    <tr style={{height:'35px', lineHeight:'35px'}}>
                      <td style={{width:"45px"}}></td>
                      <td style={{textAlign:'center'}}><span>门店讨论</span></td>
                      <td style={{width:"45px"}}><span className="btn-info" onTouchEnd={this.showPostComments}>发言</span></td>
                    </tr>
                  </tbody>
                </table>
                {CommentItems}
            </div>
          </td></tr>
        </tbody></table>

        <Postcomment 
          showPostCommentsDiv={this.state.showPostCommentsDiv} 
          title={this.state.title} 
          content={this.state.content}
          handleChangeTitle={this.handleChangeTitle}
          handleChangeContent={this.handleChangeContent}
          hidePostComments={this.hidePostComments}
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

        <div style={{zIndex:"10000",position:"fixed",top:"200px",right:"-20px",display:this.state.appdivshow}}>
          <iframe style={{width:"40px",height:"40px",border:"0px",borderRadius:"20px",padding:"0px",marginLeft:"40px",marginTop:"40px"}} src={"./close.html"}/>
        </div>

        <div style={{zIndex:"10000",position:"fixed",top:"300px",right:"-20px",display:this.state.appdivshow}}>
          <iframe style={{width:"40px",height:"40px",border:"0px",borderRadius:"20px",padding:"0px",marginLeft:"40px",marginTop:"40px"}} src={"./back.html"}/>
        </div>

        <div style={{zIndex:"9990",position:"fixed",top:"0px",left:"0px",backgroundColor:"white",width:"100%",height:"100%",display:this.state.appdivshow}}>
          <iframe id="iframeweb" sandbox="allow-forms allow-scripts allow-same-origin" style={{width:"100%",height:"100%",border:"0px solid white"}} src={this.state.weburl} />
        </div>

      </div>
    );
  }
}