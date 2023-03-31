import MyListItem from "./items/myListItem";
import ListItem from "./items/listItem";
import BottomListItem from "./items/bottomListItem";

export default class Main extends React.Component{
  constructor(props) {
    super(props);
    var phoneWidth =  parseInt(window.screen.width)>450?450:parseInt(window.screen.width);
    this.state = {
      apps: [],
      myapps: [],
      webid: null,
      searchShow: "none",
      appdivshow: "none",
      webdivShow: "none",
      web: {},
      phoneWidth
    }
  }

  componentWillReceiveProps(nextProps){
    var appdivshow = nextProps.appdivshow;
    var weburl = nextProps.weburl;
    this.setState({appdivshow,weburl});
  }

  componentDidMount(){
    this.loadData();
  }

  loadData=()=>{
    let searchString = '';
    if(this.state.keywords) searchString = "?keywords="+this.state.keywords;
    var url = Config.api+"app/list"+searchString;
    fetchApi({
      url
    },function(res){  
      if(!isJson(res)){
        errMessage("","服务器文件错误！");
        return false;
      }
      var phoneWidth =  parseInt(window.screen.width)-20;
      var width = phoneWidth/4;
      this.setState({apps:res.apps,myapps:res.myapps,width,phoneWidth});
    }.bind(this));
  }

  handleSearch=(keywords)=>{
    let that = this;
    if(keywords){
      that.setState({keywords},function(){
        that.loadData();
      })
    }else{
      that.loadData();
    }
  }

  handleSearchChange=(event)=>{
    let value = event.target.value;
    let that = this;
    this.setState({keywords:value},function(){
      wait(1000).done(function(){
        that.handleSearch();
      })
    });
  }

  addApp=()=>{
    var webid = this.state.web.id;
    var url = Config.api+"app/addmyapp?webid="+webid;
    fetchApi({
      url
    },function(res){  
      if(!isJson(res)){
          errMessage("","服务器文件错误！");
          return false;
      }
      resultAlert(res);
      this.setState({webdivShow:"none"});
      this.loadData();
    }.bind(this));
  }

  deleteApp=()=>{
    var webid = this.state.web.webid;
    var url = Config.api+"app/deletemyapp?webid="+webid;
    fetchApi({
      url
    },function(res){  
      if(!isJson(res)){
          errMessage("","服务器文件错误！");
          return false;
      }
      resultAlert(res);
      this.setState({webdivShow:"none"});
      this.loadData();
    }.bind(this));
  }

  longTouchstart=(web)=>{
    var longPress = function(web){
      timeOutEvent = 0;
      this.touchShow(web);
    }.bind(this);
    timeOutEvent = setTimeout(longPress,800,web);
    //e.preventDefault();
    return false;
  }

  longTouchend=()=>{
    clearTimeout(timeOutEvent);
    timeOutEvent = 0;
    return false;
  }

  longTouchmove=()=>{
    clearTimeout(timeOutEvent);
    return false;
  }

  touchShow=(web)=>{
    var webdivShow ="table";
    this.setState({webdivShow,web});
  }

  webdivHide=()=>{
    var webdivShow ="none";
    this.setState({webdivShow});
  }

  toggleAppDivShow=(weburl)=>{
    var appdivshow = this.state.appdivshow=="block"?"none":"block";
    var weburl = appdivshow=="block"?weburl:"";
    this.setState({weburl,appdivshow});
  }

  handleScroll=()=>{
    var scrollTop = $("#applistTop").offset().top;
    if(scrollTop > 0){
      this.setState({searchShow:"block"});
    }
    if(scrollTop < 0){
      this.setState({searchShow:"none"});
    }
  }

  toggleSearchShow=()=>{
    var searchShow = this.state.searchShow == "block"?"none":"block";
    this.setState({searchShow});
  }

  showAll=()=>{
    let that = this;
    that.setState({keywords:''},function(){
      that.loadData();
    })
  }

  render(){
    setTitle("365程序");

    if(!this.state.apps){
      return false;
    }

    var bottomWidth = (this.state.phoneWidth-100)+"px";

    var MyAppList = !this.state.myapps?null:this.state.myapps.map(function(item,index){
      return(<MyListItem key={item.id} Type="myapp" item={item} Width={this.state.width} touchShow={this.touchShow} longTouchstart={this.longTouchstart} longTouchend={this.longTouchend} longTouchmove={this.longTouchmove} toggleAppDivShow={this.toggleAppDivShow}/>);
    }.bind(this));
    if(this.state.keywords){
      MyAppList = '';
    }

    var AppList = !this.state.apps?null:this.state.apps.map(function(item,index){
      return(<ListItem key={item.id} Type="app" item={item} Width={this.state.width} touchShow={this.touchShow} longTouchstart={this.longTouchstart} longTouchend={this.longTouchend} longTouchmove={this.longTouchmove} toggleAppDivShow={this.toggleAppDivShow}/>);
    }.bind(this));

    var BottomList = !this.state.myapps?null:this.state.myapps.map(function(item,index){
      if(index > 3) return false;
      return(<BottomListItem key={item.id} item={item} Width={this.state.width} touchShow={this.touchShow} longTouchstart={this.longTouchstart} longTouchend={this.longTouchend} longTouchmove={this.longTouchmove} toggleAppDivShow={this.toggleAppDivShow}/>);
    }.bind(this));

    return (
      <div ref="main" style={{textAlign:"center",width:"100%",height:"100%",backgroundImage:"url("+webUrl+"/image/appbg/bg.jpeg)",backgroundRepeat:"no-repeat",backgroundSize:"100% 100%"}}>
        <table style={{width:"100%",height:"100%",border:"0px"}}><tbody>
          <tr style={{height:"30px"}}><td style={{textAlign:"center"}}>
            <table style={{width:"100%",height:"40px"}}><tbody><tr>
              <td style={{width:"60px",color:"white",textAlign:"center",fontSize:"20px"}}>
                <span onTouchEnd={this.showAll}>所有</span>
              </td>
              <td style={{textAlign:"center"}}>
                <div style={{margin:"auto",fontSize:"20px",whiteSpace:"nowrap",color:"white"}}>
                  <div style={{display:this.state.searchShow == "block"?"none":"block" }}>
                    <input type="search" style={{width:"100%",height:"30px",borderRadius:"5px"}} placeholder="搜索关键词" value={this.state.keywords} onChange={this.handleSearchChange} />
                  </div>  
                  <div id="appsearchdiv" style={{display:this.state.searchShow,margin:"auto",width:this.state.phoneWidth*0.70+"px",fontSize:"20px",overflowX:"auto",whiteSpace:"nowrap",color:"white"}}>
                    <span onTouchEnd={this.handleSearch.bind(this,"新闻")}>新闻</span>
                    <span onTouchEnd={this.handleSearch.bind(this,"生活")}>生活</span>
                    <span onTouchEnd={this.handleSearch.bind(this,"购物")}>购物</span>
                    <span onTouchEnd={this.handleSearch.bind(this,"社交")}>社交</span>
                    <span onTouchEnd={this.handleSearch.bind(this,"游戏")}>游戏</span>
                    <span onTouchEnd={this.handleSearch.bind(this,"娱乐")}>娱乐</span>
                    <span onTouchEnd={this.handleSearch.bind(this,"直播")}>直播</span>
                    <span onTouchEnd={this.handleSearch.bind(this,"视频")}>视频</span>
                    <span onTouchEnd={this.handleSearch.bind(this,"区块链")}>区块链</span>
                  </div>
                </div>
              </td>
              <td style={{width:"60px",color:"white",fontSize:"20px",textAlign:"center"}}>
                <span onTouchEnd={this.toggleSearchShow}>{this.state.searchShow =='block'?'搜索':'分类'}</span>
              </td>
            </tr></tbody></table>
          </td></tr>
          <tr><td>
            <div style={{overflowY:"auto",marginLeft:"10px",textAlign:"center",border:"0px",height:"100%"}}>
              <div style={{width:"100%",height:"10px"}} id="applistTop"></div>
              {MyAppList}{AppList}
            </div>
          </td></tr>
          <tr style={{height:"30px"}}><td style={{textAlign:"center",verticalAlign:"top",color:"#ccc"}}>.....</td></tr>
          <tr style={{height:"65px"}}><td style={{verticalAlign:"top"}}>
            <table style={{bottom:"0px",width:"100%",height:"50px",borderTop:"0px solid #ccc"}}><tbody><tr>
                <td style={{width:"1px"}}></td>
                <td style={{textAlign:"center"}}>
                    <table style={{width:"100%"}}><tbody><tr>
                        <td style={{textAlign: "center",width:"100px",height:"50px"}} onTouchEnd={touchEnd.bind(this,"#/messages")}>
                          <div style={{width:"100px",height:"50px"}}>
                            <table style={{width:"100%",height:"50px"}}><tbody><tr>
                              <td style={{textAlign:"center",height:"50px",lineHeight:"50px"}}>
                                <img src={webUrl+"/image/logo.jpeg"} style={{marginTop:"-2px",width:"50px",height:"50px",borderRadius:"15px"}} />
                              </td>
                            </tr></tbody></table>
                          </div>
                        </td>
                        <td style={{textAlign:"left",height:"50px"}}>
                          <div style={{width:bottomWidth,height:"50px",overflowX:"auto"}}>
                            <table style={{width:"100%",height:"50px"}}><tbody><tr>
                              {BottomList}
                            </tr></tbody></table>
                          </div>
                        </td>
                    </tr></tbody></table>
                </td>
                <td style={{width:"10px"}}></td>
            </tr></tbody></table>
          </td></tr>
        </tbody></table>

        <table style={{zIndex:"1000",top:"0px",left:"0px",position:"fixed",margin:"auto 0",width:"100%",height:"100%",display:this.state.webdivShow}}>
        <tbody><tr><td style={{textAlign:"center",verticalAlign:"middle"}}>
          <div style={{borderRadius:"5px",margin:"auto",backgroundColor:"lightcyan",fontSize:"16px",width:"200px",height:"100px",textAlign:"center"}}>
            <table style={{width:"100%",height:"100px"}}>
            <tbody><tr><td style={{position:"relative",textAlign:"center",verticalAlign:"middle"}}>
              <span onTouchEnd={this.webdivHide} style={{width:"30px",height:"30px",lineHeight:"30px",borderRadius:"15px",position:"absolute",top:"0px",right:"0px",color:"#333",fontSize:"14px",textAlign:"center"}}>X</span>
              <div style={{height:"50px",lineHeight:"50px"}}>{this.state.web.webname}</div>
              <div style={{lineHeight:"32px",width:"100%",height:"32px",borderRadius:"3px",textAlign:"center",backgroundColor:"brown",color:"white"}}>
                <span onTouchEnd={this.addApp} style={{display:this.state.web.userid?"none":"block"}}>安装</span>
                <span onTouchEnd={this.deleteApp} style={{display:this.state.web.userid?"block":"none"}}>卸载</span>
              </div>
            </td></tr></tbody></table>
          </div>
        </td></tr></tbody>
        </table>

        <div style={{zIndex:"10000",position:"fixed",width:"40px",height:"40px",top:"200px",right:"-20px",borderRadius:"20px",backgroundColor:"chocolate",display:this.state.appdivshow}}>
          <iframe style={{width:"40px",height:"40px",border:"0px",padding:"0px"}} src={"./close.html"}/>
        </div>

        <div style={{zIndex:"10000",position:"fixed",width:"40px",height:"40px",top:"300px",right:"-20px",borderRadius:"20px",backgroundColor:"chocolate",display:this.state.appdivshow}}>
          <iframe style={{width:"40px",height:"40px",border:"0px",padding:"0px"}} src={"./back.html"}/>
        </div>

        <div style={{zIndex:"9990",position:"fixed",top:"0px",left:"0px",backgroundColor:"white",width:"100%",height:"100%",display:this.state.appdivshow}}>
          <iframe id="iframeweb" sandbox="allow-forms allow-scripts allow-same-origin" style={{width:"100%",height:"100%",border:"0px solid white"}} src={this.state.weburl} />
        </div>
      </div>
    );

  }
}


