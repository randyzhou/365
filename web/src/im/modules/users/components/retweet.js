export default class retweet extends React.Component{
  constructor(props){
    super(props);
    var phoneWidth =  parseInt(window.screen.width)>450?450:parseInt(window.screen.width);
    this.state = {
      id: this.props.id,
      pic: 0,
      showPostCommentsDiv: "none",
      showRetweetDiv: "none",
      showRetweetListDiv: 'none',
      title: "",
      content: "",
      paymentShow: "none",
      payment: 0,
      paymentReply: "",
      phoneWidth: phoneWidth,
      store: {},
      shop: {},
      user: {},
      retweet: {}
    }
  }

  componentDidMount(){
    if(this.props.id){
      let url = Config.api + "retweet/view?retweetid="+this.props.id+"&typeid=4";
      fetchApi({
        url
      },function(res){             
        if(!isJson(res)){
            errMessage("","服务器文件错误！");
            return false;
        }
        if(res.status == 200){
          this.setState({
            user: res.owner,
            retweet: res.retweet,
            comments: res.comments,
            retweet_comments: res.retweet_comments
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

  sendComment=()=>{
    this.setState({showPostCommentsDiv:"none"});
    if(this.state.content){
      let url = Config.api+"comment/create";
      fetchApi({
        url,
        method: "POST",
        body: {title: this.state.title, content: this.state.content, ownerid: this.props.id, typeid: 6}
      },function(res){
        if(!isJson(res)){
            errMessage("","服务器文件错误！");
            return false;
        }
        if(res.status == 200){
          this.setState({
            retweet: res.owner,
            retweet_comments: res.comments,
          })
        }
        resultAlert(res);
      }.bind(this));
    }
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

  showRetweetListDiv=()=>{
    var res = this.state.showRetweetListDiv == "block"?"none":"block";
    this.setState({
      showRetweetListDiv: res
    })
  }

  storeDetail=()=>{
    let ownerid = '';
    if(this.state.retweet && this.state.retweet.ownerid){
      ownerid = this.state.retweet.ownerid;
      backurl_store = "#/users/retweet/"+this.props.id;
      touchEnd("#/stores/detail/"+ownerid);
    }
  }
  
  articleDetail=()=>{
    if(this.state.retweet && this.state.retweet.ownerid){
      backurl_store = "#/users/retweet/"+this.props.id;
      touchEnd("#/stores/article/"+this.state.retweet.id);
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

  render(){
    if(!this.state.user) return null;
    setTitle("文章详情");

    let $this = this;

    var ListItems = !this.state.comments?null:this.state.comments.map(function (item,index) {
      return (
        <Comment key={item.id} item={item} backurl={"#/users/retweet/"+$this.props.id}/>
      );
    }.bind(this));

    var RetweetListItems = !this.state.retweet_comments?null:this.state.retweet_comments.map(function (item,index) {
        return (
          <Comment key={item.id} item={item} backurl={"#/users/retweet/"+$this.props.id}/>
        );
    }.bind(this));

    let $avatars = [];
    let avatar = this.state.retweet?this.state.retweet.avatar:'';
    if(avatar && avatar.indexOf("[") > -1){
      $avatars = JSON.parse(avatar);
    }else{
      $avatars.push(avatar);
    }

    var imgList = !$avatars?null:$avatars.map(function(Avatar,index){
      let avatar_title = '';
      if(typeof(Avatar) == "object" && Avatar != null){
        avatar_title = Avatar[0];
        avatar = Avatar[1];
      }else{
        avatar = Avatar;
      }
      return(
        <div style={{width:"100%",marginTop:"10px",fontSize:"16px"}}>
          <div style={{textAlign:"left"}}>{avatar_title}</div>
          <img src={thumbUrl+"/articlephotos/"+avatar+".jpg"} style={{width:this.props.phoneWidth, width:"100%"}}/>
        </div>
      )
    }.bind(this))

    let path = "stores";
    if(this.state.retweet && this.state.retweet.type == 2) path = "groups";

    let ownerid = '';
    if(this.state.retweet && this.state.retweet.ownerid) ownerid = this.state.retweet.ownerid;

    return (
      <div style={{width:"100%",height:"100%"}} onTouchStart={this.detailStart} onTouchEnd={this.detailEnd} onTouchMove={this.detailMove}>
        <table style={{width:"100%",height:"100%"}}>
        <tbody><tr><td style={{height:"30px"}}>
          <Usernav user={this.state.user}/>
        </td></tr>
        <tr><td style={{width:"100%"}}>
        <div style={{width:"100%",height:"100%",overflowY:"auto"}}>
            <table style={{marginBottom:"10px",border:"1px #eee solid",borderRadius:"5px",width:"100%"}}>
        			<tbody>
                  <tr style={{verticalAlign:"top", backgroundColor:"#ffffff"}}>
                      <td style={{padding:"0px"}}>
                          <table style={{width:"100%"}}>
                              <tbody>
                              <tr><td style={{padding:"5px",paddingTop:"0px",textAlign:"center"}}>
                                <div style={{height:"10px"}}></div>
                                <div style={{textAlign:"left",fontSize:"20px"}}><span onTouchEnd={this.articleDetail}>{this.state.retweet?this.state.retweet.title:''}</span></div>
                                <div style={{height:"10px"}}></div>
                                <div style={{textAlign:"left",color:"#999999"}}><span onTouchEnd={this.storeDetail}>{this.state.retweet?this.state.retweet.owner_name:''}</span> <span style={{marginLeft:"10px"}}>{this.state.retweet?this.state.retweet.datetime:''}</span></div>
                                <div style={{height:"10px"}}></div>
                                <div style={{textAlign:"left",fontSize:"16px",border:"1px solid rgb(230,230,230)",borderRadius:"8px",backgroundColor:"rgb(250,250,250)",color:"rgb(100,100,100)",fontSize:"14px",padding:"10px"}}>
                                  {this.state.retweet.retweet_username}荐语：{this.state.retweet?this.state.retweet.retweet_content:''}
                                </div>
                                <div style={{height:"10px"}}></div>
                                <div style={{textAlign:"left",fontSize:"16px"}}>{this.state.retweet?this.state.retweet.content:''}</div>
                                <div>{imgList}</div>
                                <div style={{textAlign:"right"}}>评论{this.state.retweet?this.state.retweet.comments:''}</div>
                              </td></tr>
                          </tbody></table>
                      </td>
                  </tr>
        		  </tbody>
            </table>
            <div>{ListItems}</div>
          </div>
          <div style={{display:this.state.showRetweetListDiv,position:"fixed",zIndex:"100000",position:"fixed",bottom:"40px",left:"0px",textAlign:"center",padding:"0px",width:"100%",backgroundColor:"#ccc"}}>
            <div style={{textAlign:"left",fontSize:"16px",border:"1px solid rgb(230,230,230)",backgroundColor:"rgb(250,250,250)",color:"rgb(100,100,100)",fontSize:"14px",padding:"10px"}}>
              {this.state.retweet.retweet_username}荐语：{this.state.retweet?this.state.retweet.retweet_content:''}
            </div>
            <div>{RetweetListItems}</div>
          </div>  
        </td></tr>
        <tr style={{borderTop:"1px #eee solid",backgroundColor:"white"}}><td style={{height:"30px"}}>
          <table id="club-nav" style={{bottom:"0px", zIndex:"10000000", width:'100%'}}>
            <tbody>
              <tr style={{height:'35px', lineHeight:'35px'}}>
                <td style={{width: "120px", textAlign:"center"}} onTouchEnd={this.showPostComments}>
                  <span style={{marginLeft:"5px",width:"100px",height:"30px",lineHeight:"30px",display:"inline-block",textAlign:"center",borderRadius:"15px",backgroundColor: 'rgb(245,245,245)'}}>写评论...</span>
                </td>
                <td onTouchEnd={this.showRetweetListDiv}>
                  评论{this.state.retweet?this.state.retweet.retweet_comments:''}
                </td>
                <td>收藏</td>
                <td>点赞</td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </td></tr></tbody>
        </table>


        <Postcomment 
          showPostCommentsDiv={this.state.showPostCommentsDiv} 
          title={this.state.title} 
          content={this.state.content}
          handleChangeTitle={this.handleChangeTitle}
          handleChangeContent={this.handleChangeContent}
          hidePostComments={this.showPostComments}
          sendComment={this.sendComment} 
        />

      </div>
    );
  }
}