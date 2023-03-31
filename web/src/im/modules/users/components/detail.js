
export default class Detail extends React.Component{
  constructor(props){
    super(props);
    this.state = {
      id: this.props.id,
      user: {},
      showRetweetDiv: "none",
      slides: {pert:100, startX:0, moveX:0},
      cliW: document.body.clientWidth
    }
  }

  componentDidMount(){
    if(this.props.id){
      fetchApi({
        url:Config.api+"user/view?id="+this.props.id
      },function(res){
        if(!isJson(res)){
            errMessage("","服务器文件错误！");
            return false;
        }
        if(res.status == 200){
          var phoneWidth =  parseInt(window.screen.width)>450?450:parseInt(window.screen.width)-1;
          this.setState({
            phoneWidth,
            user: res.data,
            friend: res.friend
          });
        }else{
          errMessage(res);
        }
      }.bind(this));

    }
  }

  historyBack = ()=>{
    history.back();
  }

  addToFriend = (userid)=>{
    console.log(userid)
    let friend_amount = this.state.user.friend_amount || 0;
    alertMsg("您将支付"+friend_amount+"元加好友费给对方<br/>同意点确定，不同意点取消。",1,function(){
      fetchApi({
        url: Config.api + "friend/add",
        method: 'POST',
        body: {userid1:userid}
      },function(res){
        if(res.friend == 1){
          this.setState({friend:res.friend});
          resultAlert(res);
        }else{
          alertMsg(res);
        }
      }.bind(this));
    }.bind(this))
  }

  deleteFromFriend = (userid)=>{
    alertMsg("确定解除好友关系吗？",1,function(){
      fetchApi({
        url: Config.api + "friend/delete",
        method: 'POST',
        body: {userid1:userid}
      },function(res){      
        this.setState({friend:res.friend});
        resultAlert(res);
      }.bind(this));
    }.bind(this));
  }

  showPostRetweet=()=>{
    if(this.state.user.userid == userid){
      resultAlert("不能转推自己")
      return;
    }
    if(this.state.showRetweetDiv == "block"){
      this.setState({showRetweetDiv: "none"});
      return;
    }
    let url = Config.api+"retweet/checkretweet?ownerid="+this.props.id+"&typeid=3";
    fetchApi({
      url
    },function(res){
      if(!isJson(res)){
          errMessage("","服务器文件错误！");
          return false;
      }
      if(res.result == 2){
        this.setState({
          showRetweetDiv: "block"
        })
      }else{
        resultAlert(res);
      }
    }.bind(this));
  }

  handleChangeRetweetContent=(event)=>{
    this.setState({
      retweetcontent: event.target.value
    })
  }  

  sendRetweet=()=>{
    if(this.state.user.userid == userid){
      resultAlert("不能转推自己")
      return;
    }
    this.setState({showRetweetDiv:"none"});
    if(this.state.retweetcontent){
      let url = Config.api+"retweet/create";
      fetchApi({
        url,
        method: "POST",
        body: {content: this.state.retweetcontent, ownerid: this.props.id, typeid: 3}
      },function(res){
        if(!isJson(res)){
            errMessage("","服务器文件错误！");
            return false;
        }
        resultAlert(res);
      }.bind(this));
    }
  }  


  detailStart = (event)=>{
    //event.preventDefault();
    event.stopPropagation();
    if(!event.touches.length) return;
    let slides = Object.assign({},this.state.slides);
    slides.startX = event.touches[0].pageX;
    let cliW= document.body.clientWidth
    slides.moveX = 0;
    slides.pert = 0;
    this.setState({slides,cliW});
  }

  detailMove = (event)=>{
    //event.preventDefault();
    event.stopPropagation();
    if(!event.touches.length) return;
    let slides = Object.assign({},this.state.slides);
    let moveX = event.touches[0].pageX - slides.startX;
    slides.moveX = moveX;
    if(moveX > 40){
      slides.pert = moveX/2;
      this.setState({slides});
    }
  }

  detailEnd = (event)=>{
    //event.preventDefault();
    event.stopPropagation();
    let slides = Object.assign({},this.state.slides);
    if(slides.pert > 50){
      if(backurl_user) location.href = backurl_user;
      else history.back();
    }
    else slides.pert = 0;
    slides.moveX = 0;
    this.setState({slides});  
  }

  render() {
    var $user = this.state.user;
    setTitle($user.username);
    
    let img = null;
    if($user.userid){
      let photoname = photoUrl+"/topuserphotos/"+$user.userid+".jpg";
      img = <Img id="userLogo" style={{width:this.state.phoneWidth}} src={photoname}/>;
    }

    let joindisplay = this.state.friend == "0"?"inline-block":"none";
    let leavedisplay = this.state.friend == "1"?"inline-block":"none";  

    return (
        <table style={{width:"100%",height:"100%"}} onTouchStart={this.detailStart} onTouchEnd={this.detailEnd} onTouchMove={this.detailMove}>
        <tbody>
          <tr><td style={{height:"30px"}}>
            <Usernav user={$user}/>
          </td></tr>
          <tr><td style={{verticalAlign:"top"}}>
            <table style={{width:"100%"}}><tbody>
              <tr><td style={{width:"100%"}}>
                {img}
            </td></tr></tbody></table>

            <List renderHeader={() => {return <div style={{width:"100%",height:"30px",lineHeight:"30px",display:"inline-block"}}><span style={{float:"left"}}>基本资料({$user.friend_amount}元)</span><span style={{color:"darkgreen",display:joindisplay,float:"right",border:"1px solid darkgreen",width:"60px",textAlign:"center",height:"25px",lineHeight:"25px",borderRadius:"10px"}} onTouchEnd={this.addToFriend.bind(this,$user.userid)}>加为好友</span><span style={{color:"darkred",display:leavedisplay,float:"right",border:"1px solid darkred",width:"60px",textAlign:"center",height:"25px",lineHeight:"25px",borderRadius:"10px"}} onTouchEnd={this.deleteFromFriend.bind(this,$user.userid)}>删除好友</span><span style={{color:"darkred",display:leavedisplay,float:"right",border:"1px solid darkred",width:"60px",textAlign:"center",height:"25px",lineHeight:"25px",borderRadius:"10px",marginRight:"5px"}} onTouchEnd={this.showPostRetweet.bind(this,$user.userid)}>推荐好友</span></div>}} className="my-list">
              <table className="user_detail_table"><tbody><tr>
                <td className="first_td"></td>
                <td className="second_td">性别</td>
                <td className="third_td"><div className="user_detail_div">{$user.usersex==1?"男":"女"}</div></td>
                <td className="last_td"></td>
              </tr></tbody></table>
              <table className="user_detail_table"><tbody><tr>
                <td className="first_td"></td>
                <td className="second_td">出生</td>
                <td className="third_td"><div className="user_detail_div">{$user.userbirthday}</div></td>
                <td className="last_td"></td>
              </tr></tbody></table>                  
              <table className="user_detail_table"><tbody><tr>
                <td className="first_td"></td>
                <td className="second_td">血型</td>
                <td className="third_td"><div className="user_detail_div">{$user.bloodtype}</div></td>
                <td className="last_td"></td>
              </tr></tbody></table>
              <table className="user_detail_table"><tbody><tr>
                <td className="first_td"></td>
                <td className="second_td">星座</td>
                <td className="third_td"><div className="user_detail_div">{$user.constellation}</div></td>
                <td className="last_td"></td>
              </tr></tbody></table>
              <table className="user_detail_table"><tbody><tr>
                <td className="first_td"></td>
                <td className="second_td">感情状态</td>
                <td className="third_td"><div className="user_detail_div">{$user.marry}</div></td>
                <td className="last_td"></td>
              </tr></tbody></table> 
              <table className="user_detail_table"><tbody><tr>
                <td className="first_td"></td>
                <td className="second_td">籍贯</td>
                <td className="third_td"><div className="user_detail_div">{$user.homeprovince}{$user.homecity}</div></td>
                <td className="last_td"></td>
              </tr></tbody></table> 
              <table className="user_detail_table"><tbody><tr>
                <td className="first_td"></td>
                <td className="second_td">居住地</td>
                <td className="third_td"><div className="user_detail_div">{$user.workprovince}{$user.workcity}{$user.workdistrict}{$user.worktown}{$user.workstreet}</div></td>
                <td className="last_td"></td>
              </tr></tbody></table> 
            </List>

            <List renderHeader={() => '教育程度'} className="my-list">
              <table className="user_detail_table"><tbody><tr>
                <td className="first_td"></td>
                <td className="second_td">毕业院校</td>
                <td className="third_td"><div className="user_detail_div">{$user.school}</div></td>
                <td className="last_td"></td>
              </tr></tbody></table> 
              <table className="user_detail_table"><tbody><tr>
                <td className="first_td"></td>
                <td className="second_td">最高学历</td>
                <td className="third_td"><div className="user_detail_div">{$user.education}</div></td>
                <td className="last_td"></td>
              </tr></tbody></table> 
              <table className="user_detail_table"><tbody><tr>
                <td className="first_td"></td>
                <td className="second_td">所学专业</td>
                <td className="third_td"><div className="user_detail_div">{$user.specialist}</div></td>
                <td className="last_td"></td>
              </tr></tbody></table> 
            </List>

            <List renderHeader={() => '工作名片'} className="my-list">
              <table className="user_detail_table"><tbody><tr>
                <td className="first_td"></td>
                <td className="second_td">公司名称</td>
                <td className="third_td"><div className="user_detail_div">{$user.companyname}</div></td>
                <td className="last_td"></td>
              </tr></tbody></table> 
              <table className="user_detail_table"><tbody><tr>
                <td className="first_td"></td>
                <td className="second_td">真名职务</td>
                <td className="third_td"><div className="user_detail_div">{$user.realname}{$user.duty}</div></td>
                <td className="last_td"></td>
              </tr></tbody></table> 
              <table className="user_detail_table"><tbody><tr>
                <td className="first_td"></td>
                <td className="second_td">联系地址</td>
                <td className="third_td"><div className="user_detail_div">{$user.companyaddress}</div></td>
                <td className="last_td"></td>
              </tr></tbody></table> 
              <table className="user_detail_table"><tbody><tr>
                <td className="first_td"></td>
                <td className="second_td">公司电话</td>
                <td className="third_td"><div className="user_detail_div">{$user.companytel}</div></td>
                <td className="last_td"></td>
              </tr></tbody></table> 
              <table className="user_detail_table"><tbody><tr>
                <td className="first_td"></td>
                <td className="second_td">公司网址</td>
                <td className="third_td"><div className="user_detail_div" onTouchEnd={touchEnd.bind(this,"http://"+$user.url)}>{$user.url}</div></td>
                <td className="last_td"></td>
              </tr></tbody></table> 
              <table className="user_detail_table"><tbody><tr>
                <td className="first_td"></td>
                <td className="second_td">公司简介</td>
                <td className="third_td"><div className="user_detail_div">{$user.companykeywords}</div></td>
                <td className="last_td"></td>
              </tr></tbody></table> 
              <table className="user_detail_table"><tbody><tr>
                <td className="first_td"></td>
                <td className="second_td">职务级别</td>
                <td className="third_td"><div className="user_detail_div">{$user.jobtitle}</div></td>
                <td className="last_td"></td>
              </tr></tbody></table> 
              <table className="user_detail_table"><tbody><tr>
                <td className="first_td"></td>
                <td className="second_td">工作职责</td>
                <td className="third_td"><div className="user_detail_div">{$user.occupation}</div></td>
                <td className="last_td"></td>
              </tr></tbody></table> 
            </List>

            <List renderHeader={() => '事业发展'} className="my-list">
              <table className="user_detail_table"><tbody><tr>
                <td className="first_td"></td>
                <td className="second_td">职业技能</td>
                <td className="third_td"><div className="user_detail_div">{$user.advantage}</div></td>
                <td className="last_td"></td>
              </tr></tbody></table> 
              <table className="user_detail_table"><tbody><tr>
                <td className="first_td"></td>
                <td className="second_td">语言技能</td>
                <td className="third_td"><div className="user_detail_div">{$user.languages}</div></td>
                <td className="last_td"></td>
              </tr></tbody></table> 
              <table className="user_detail_table"><tbody><tr>
                <td className="first_td"></td>
                <td className="second_td">工作经历</td>
                <td className="third_td"><div className="user_detail_div" style={{wordBreak:"break-all"}}>{$user.workexperience}</div></td>
                <td className="last_td"></td>
              </tr></tbody></table> 
              <table className="user_detail_table"><tbody><tr>
                <td className="first_td"></td>
                <td className="second_td">行业方向</td>
                <td className="third_td"><div className="user_detail_div">{$user.likearea}</div></td>
                <td className="last_td"></td>
              </tr></tbody></table> 
              <table className="user_detail_table"><tbody><tr>
                <td className="first_td"></td>
                <td className="second_td">理想职务</td>
                <td className="third_td"><div className="user_detail_div">{$user.idealjob}</div></td>
                <td className="last_td"></td>
              </tr></tbody></table> 
              <table className="user_detail_table"><tbody><tr>
                <td className="first_td"></td>
                <td className="second_td">进修技能</td>
                <td className="third_td"><div className="user_detail_div">{$user.needskills}</div></td>
                <td className="last_td"></td>
              </tr></tbody></table> 
            </List>

            <List renderHeader={() => '个性特征'} className="my-list">
              <table className="user_detail_table"><tbody><tr>
                <td className="first_td"></td>
                <td className="second_td">性格脾气</td>
                <td className="third_td"><div className="user_detail_div">{$user.character}</div></td>
                <td className="last_td"></td>
              </tr></tbody></table>  
              <table className="user_detail_table"><tbody><tr>
                <td className="first_td"></td>
                <td className="second_td">饮食习惯</td>
                <td className="third_td"><div className="user_detail_div">{$user.tasts}</div></td>
                <td className="last_td"></td>
              </tr></tbody></table>  
              <table className="user_detail_table"><tbody><tr>
                <td className="first_td"></td>
                <td className="second_td">阅读偏好</td>
                <td className="third_td"><div className="user_detail_div">{$user.reading}</div></td>
                <td className="last_td"></td>
              </tr></tbody></table>  
              <table className="user_detail_table"><tbody><tr>
                <td className="first_td"></td>
                <td className="second_td">爱好研究</td>
                <td className="third_td"><div className="user_detail_div">{$user.lovestudy}</div></td>
                <td className="last_td"></td>
              </tr></tbody></table>  
              <table className="user_detail_table"><tbody><tr>
                <td className="first_td"></td>
                <td className="second_td">欣赏品质</td>
                <td className="third_td"><div className="user_detail_div">{$user.lovecharacter}</div></td>
                <td className="last_td"></td>
              </tr></tbody></table>  
              <table className="user_detail_table"><tbody><tr>
                <td className="first_td"></td>
                <td className="second_td">拒绝忍受</td>
                <td className="third_td"><div className="user_detail_div">{$user.rejectcharacter}</div></td>
                <td className="last_td"></td>
              </tr></tbody></table>  
            </List>

            <List renderHeader={() => '思想观念'} className="my-list">
              <table className="user_detail_table"><tbody><tr>
                <td className="first_td"></td>
                <td className="second_td">世界观</td>
                <td className="third_td"><div className="user_detail_div">{$user.believe}</div></td>
                <td className="last_td"></td>
              </tr></tbody></table>  
              <table className="user_detail_table"><tbody><tr>
                <td className="first_td"></td>
                <td className="second_td">人生观</td>
                <td className="third_td"><div className="user_detail_div">{$user.lifeview}</div></td>
                <td className="last_td"></td>
              </tr></tbody></table>  
              <table className="user_detail_table"><tbody><tr>
                <td className="first_td"></td>
                <td className="second_td">价值观</td>
                <td className="third_td"><div className="user_detail_div">{$user.valueview}</div></td>
                <td className="last_td"></td>
              </tr></tbody></table>  
              <table className="user_detail_table"><tbody><tr>
                <td className="first_td"></td>
                <td className="second_td">金钱观</td>
                <td className="third_td"><div className="user_detail_div">{$user.moneyview}</div></td>
                <td className="last_td"></td>
              </tr></tbody></table>  
              <table className="user_detail_table"><tbody><tr>
                <td className="first_td"></td>
                <td className="second_td">事业观</td>
                <td className="third_td"><div className="user_detail_div">{$user.workingview}</div></td>
                <td className="last_td"></td>
              </tr></tbody></table>  
              <table className="user_detail_table"><tbody><tr>
                <td className="first_td"></td>
                <td className="second_td">朋友观</td>
                <td className="third_td"><div className="user_detail_div">{$user.friendview}</div></td>
                <td className="last_td"></td>
              </tr></tbody></table> 
              <table className="user_detail_table"><tbody><tr>
                <td className="first_td"></td>
                <td className="second_td">家庭观</td>
                <td className="third_td"><div className="user_detail_div">{$user.familyview}</div></td>
                <td className="last_td"></td>
              </tr></tbody></table>  
            </List>

            <List renderHeader={() => '社交倾向'} className="my-list">
              <table className="user_detail_table"><tbody><tr>
                <td className="first_td"></td>
                <td className="second_td">交友目的</td>
                <td className="third_td"><div className="user_detail_div">{$user.lookingfor}</div></td>
                <td className="last_td"></td>
              </tr></tbody></table> 
              <table className="user_detail_table"><tbody><tr>
                <td className="first_td"></td>
                <td className="second_td">兴趣社团</td>
                <td className="third_td"><div className="user_detail_div">{$user.club}</div></td>
                <td className="last_td"></td>
              </tr></tbody></table> 
              <table className="user_detail_table"><tbody><tr>
                <td className="first_td"></td>
                <td className="second_td">兴趣活动</td>
                <td className="third_td"><div className="user_detail_div">{$user.act}</div></td>
                <td className="last_td"></td>
              </tr></tbody></table> 
            </List>

            <List renderHeader={() => '个人介绍'} className="my-list">
              <div style={{width:"95%",wordBreak:"break-all",fontSize:"17px",color:"#888",padding:"10px",wordBreak:"break-all"}}>{$user.intro?$user.intro:"无"}</div>
            </List>

            <Postretweet 
              showRetweetDiv={this.state.showRetweetDiv} 
              retweetcontent={this.state.retweetcontent}
              handleChangeRetweetContent={this.handleChangeRetweetContent}
              hidePostRetweet={this.showPostRetweet}
              sendRetweet={this.sendRetweet} 
            />
          </td></tr>
          </tbody></table>
    );
  }
}


