export default class Product extends React.Component{
  constructor(props){
    super(props);
    var phoneWidth =  parseInt(window.screen.width)>450?450:parseInt(window.screen.width);
    this.state = {
      id: this.props.id,
      pic: 0,
      showPostCommentsDiv: "none",
      showRetweetDiv: "none",
      title: "",
      content: "",
      paymentShow: "none",
      payment: 0,
      paymentReply: "",
      phoneWidth: phoneWidth,
      store: {},
      shop: {},
      product: {}
    }
  }

  componentDidMount(){
    if(this.props.id){
      let url = Config.api + "product/view?id="+this.props.id;
      fetchApi({
        url
      },function(res){             
        if(!isJson(res)){
            errMessage("","服务器文件错误！");
            return false;
        }
        if(res.status == 200){
          this.setState({
            shop: res.owner,
            product: res.product,
            comments: res.comments
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
        body: {title: this.state.title, content: this.state.content, ownerid: this.props.id, typeid: 5}
      },function(res){
        if(!isJson(res)){
            errMessage("","服务器文件错误！");
            return false;
        }
        if(res.status == 200){
          this.setState({
            product: res.owner,
            comments: res.comments,
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

  showPostRetweet=()=>{
    if(this.state.product.userid == userid){
      resultAlert("不能转推自己的产品")
      return;
    }
    if(this.state.showRetweetDiv == "block"){
      this.setState({showRetweetDiv: "none"});
      return;
    }
    let url = Config.api+"retweet/checkretweet?ownerid="+this.props.id+"&typeid=5";
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

  sendRetweet=()=>{
    if(this.state.product.userid == userid){
      resultAlert("不能转推自己的产品")
      return;
    }
    this.setState({showRetweetDiv:"none"});
    if(this.state.retweetcontent){
      let url = Config.api+"retweet/create";
      fetchApi({
        url,
        method: "POST",
        body: {content: this.state.retweetcontent, ownerid: this.props.id, typeid: 5}
      },function(res){
        if(!isJson(res)){
            errMessage("","服务器文件错误！");
            return false;
        }
        resultAlert(res);
      }.bind(this));
    }
  }

  handleChangeRetweetContent=(event)=>{
    this.setState({
      retweetcontent: event.target.value
    })
  }

  shopDetail=(event)=>{
    let path = "stores";
    if(this.state.product && this.state.product.typeid == 2) path = "groups";
    let ownerid = '';
    if(this.state.product && this.state.product.ownerid) ownerid = this.state.product.ownerid;
    backurl_store = "#/stores/product/"+this.props.id;
    touchEnd("#/"+path+"/detail/"+ownerid);
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
      if(backurl_store) location.href = backurl_store;
      else history.back();
    }
    else slides.pert = 0;
    slides.moveX = 0;
    this.setState({slides});  
  }


  render(){
    setTitle(this.state.shop.name);

    let $this = this;
    var ListItems = !this.state.comments?null:this.state.comments.map(function (item,index) {
        return (
          <Comment key={item.id} item={item} backurl={"#/stores/product/"+$this.props.id}/>
        );
    }.bind(this));

    let $avatars = [];
    let avatar = this.state.product?this.state.product.avatar:'';
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
          <img src={thumbUrl+"/productphotos/"+avatar+".jpg"} style={{width:this.props.phoneWidth, width:"100%"}}/>
        </div>
      )
    }.bind(this))

    return (
      <div style={{width:"100%",height:"100%"}} onTouchStart={this.detailStart} onTouchEnd={this.detailEnd} onTouchMove={this.detailMove}>
        <table style={{width:"100%",height:"100%"}}>
        <tbody><tr><td style={{height:"30px"}}>
          <Storenav store={this.state.shop}/>
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
                                <div style={{textAlign:"left",fontSize:"18px",fontWeight:"bold"}}>
                                  {this.state.product?this.state.product.title:''}
                                  <span style={{color:'green',float:"right",marginRight:"10px"}}>{this.state.product.price}元</span>
                                </div>
                                <div style={{height:"10px"}}></div>
                                <div style={{textAlign:"left",color:"#999999"}}><span onTouchEnd={this.shopDetail}>{this.state.shop?this.state.shop.name:''}</span> <span style={{marginLeft:"10px"}}>{this.state.product?this.state.product.updatetime:''}</span></div>
                                <div style={{height:"10px"}}></div>
                                <div style={{textAlign:"left",fontSize:"16px"}}>{this.state.product?this.state.product.content:''}</div>
                                <div>{imgList}</div>
                                <div style={{textAlign:"right"}}>评论{this.state.product?this.state.product.comments:''}</div>
                              </td></tr>
                          </tbody></table>
                      </td>
                  </tr>
        		  </tbody>
            </table>
            <div>{ListItems}</div>
          </div>
        </td></tr>
        <tr style={{borderTop:"1px #eee solid",backgroundColor:"white"}}><td style={{height:"30px"}}>
          <table id="club-nav" style={{bottom:"0px", zIndex:"10000000", width:'100%'}}>
            <tbody>
              <tr style={{height:'35px', lineHeight:'35px'}}>
                <td style={{width: "120px", textAlign:"center"}} onTouchEnd={this.showPostComments}>
                  <span style={{marginLeft:"5px",width:"100px",height:"30px",lineHeight:"30px",display:"inline-block",textAlign:"center",borderRadius:"15px",backgroundColor: 'rgb(245,245,245)'}}>写评论...</span>
                </td>
                <td>
                  评论{this.state.product?this.state.product.comments:''}
                </td>
                <td>收藏</td>
                <td>点赞</td>
                <td onTouchEnd={this.showPostRetweet}>转推</td>
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

        <Postretweet 
          showRetweetDiv={this.state.showRetweetDiv} 
          retweetcontent={this.state.retweetcontent}
          handleChangeRetweetContent={this.handleChangeRetweetContent}
          hidePostRetweet={this.showPostRetweet}
          sendRetweet={this.sendRetweet} 
        />  

      </div>
    );
  }
}