import AdminListItem from "./items/adminListItem.js";

export default class Adminlist extends React.Component{
  constructor(props){
    super(props);
    this.state = {
      apps: [],
      myapps: [],
      webid: null,
      searchShow: "none",
      searchValue: null,
      appdivshow: "none",
      webdivShow: "none",
      web: {},
      phoneWidth: 370
    }
  }

  componentDidMount(){
    this.loadData();
  }

  loadData=()=>{
    var url = Config.api+"app/listadmin";
    fetchApi({
      url
    },function(res){  
      if(!isJson(res)){
          errMessage("","服务器文件错误！");
          return false;
      }
      this.setState({apps:res.apps,myapps:res.myapps});
    }.bind(this));
  }

  addApp=()=>{
    let web = this.state.web;
    var url = Config.api+"app/create";
    fetchApi({
      url,
      method:"POST",
      body:{web:{webname:web.webname,webintro:web.webintro,keywords:web.keywords,certified:web.certified,weburl:web.weburl,avatar:web.avatar}}
    },function(res){  
      if(!isJson(res)){
          errMessage("","服务器文件错误！");
          return false;
      }
      resultAlert(res);
      if(res.result == 1){
        this.setState({webdivShow:"none"});
        this.loadData();
      }
    }.bind(this));
  }

  updateApp=()=>{
    let web = this.state.web;
    var url = Config.api+"app/update";
    fetchApi({
      url,
      method:"POST",
      body:{web:{id:web.id,webname:web.webname,webintro:web.webintro,keywords:web.keywords,certified:web.certified,weburl:web.weburl}}
    },function(res){  
      if(!isJson(res)){
          errMessage("","服务器文件错误！");
          return false;
      }
      resultAlert(res);
      if(res.result == 1){
        this.setState({webdivShow:"none"},function(){
          this.loadData();
        });
      }
    }.bind(this));
  }

  deleteApp=(id)=>{
    var webid = id;
    var url = Config.api+"app/delete?webid="+webid;
    fetchApi({
      url
    },function(res){  
      if(!isJson(res)){
          errMessage("","服务器文件错误！");
          return false;
      }
      resultAlert(res);
      if(res.result == 1){
        this.setState({webdivShow:"none"});
        this.loadData();
      }
    }.bind(this));
  }

  manageDivShow=(web)=>{
    var webdivShow ="table";
    this.setState({webdivShow,web});
  }

  manageDivHide=()=>{
    var webdivShow ="none";
    this.setState({webdivShow,web:{}});
  }

  toggleAppDivShow=(weburl)=>{
    var appdivshow = this.state.appdivshow=="block"?"none":"block";
    var weburl = appdivshow=="block"?weburl:"";
    this.setState({weburl,appdivshow});
  }

  handleChange=(name,event)=>{
    var value = "";
    if(!event) value = this.refs[name].value;
    else value = event.target.value;
    var web = this.state.web;
    web[name] = value;
    this.setState({web});
  }

  handleSearchChange=(event)=>{
    var searchValue = event.target.value;
    this.setState({searchValue});
  }

  searchShow=()=>{
    var searchShow = this.state.searchShow == "table-row"?"none":"table-row";
    this.setState({searchShow});
  }

  handleUploadChange=(picname)=>{
    let rd = Math.random();
    this.setState({rd});
  }

  updateSubmit=()=>{
    console.log("logo上传成功");
  }
  
  render(){
    setTitle("365程序");

    if(!this.state.apps){
      return false;
    }

    var AppList = !this.state.apps?null:this.state.apps.map(function(item,index){
      return(<AdminListItem key={item.id} item={item} manageDivShow={this.manageDivShow} toggleAppDivShow={this.toggleAppDivShow}/>);
    }.bind(this));
    
    return (
      <div ref="main" style={{textAlign:"center",backgroundColor:"#f2f2f2",width:"100%",height:"100%"}}>
        <table style={{width:"100%",height:"100%",border:"0px"}}><tbody>
          <tr><td style={{height:"40px"}}>
          <table style={{width:"100%",height:"40px"}}><tbody><tr>
          <td style={{width:"50px",textAlign:"center"}}>
            <Button type="primary" style={{fontSize:"14px",height:"30px",lineHeight:"30px"}} onTouchEnd={this.manageDivShow.bind(this,{})}>添加</Button>
          </td><td style={{textAlign:"center"}}>
            <div style={{margin:"auto",width:"210px",fontSize:"20px",overflowX:"auto",whiteSpace:"nowrap"}}>
              新闻 生活 购物 社交 游戏 娱乐 直播 视频 区块链
            </div>
          </td><td style={{width:"50px",fontSize:"20px",textAlign:"center"}}>
            <Button type="primary" style={{fontSize:"14px",height:"30px",lineHeight:"30px"}} onTouchEnd={this.searchShow}>搜索</Button>
          </td></tr></tbody></table>
        </td></tr>
        <tr style={{display:this.state.searchShow,height:"30px"}}><td style={{textAlign:"center"}}>
          <input type="search" style={{width:"98%",height:"30px"}} value={this.state.searchValue||''} onChange={this.handleSearchChange.bind(this)}/>
        </td></tr>
        <tr><td>
          <div style={{overflowY:"auto",marginLeft:"10px",textAlign:"center",border:"0px",height:"100%"}}>
            <table style={{width:"100%"}}><tbody>
            {AppList}
            </tbody></table>
          </div>
        </td></tr>
        </tbody></table>

        <table style={{zIndex:"100000",backgroundColor:"azure",bottom:"0px",left:"0px",position:"fixed",margin:"auto 0",width:"100%",display:this.state.webdivShow}}>
        <tbody><tr><td style={{textAlign:"center",verticalAlign:"middle"}}>
          <table style={{width:"100%",height:"100px"}}><tbody><tr>
            <td style={{width:"10px"}}></td>
            <td style={{position:"relative",textAlign:"center",verticalAlign:"middle"}}>
              <table style={{width:"100%"}}><tbody>
              <tr style={{display:this.state.web.id?"table-row":"none"}}>
                <td style={{width:"50px",height:"50px"}}>LOGO：</td>
                <td style={{textAlign:"left"}}>
                  <table><tbody><tr>
                    <td style={{width:"100px"}}>
                      <img id="userImg" src={thumbUrl+"/topappphotos/"+this.state.web.id+".jpg?rd="+this.state.rd} style={{width:"60px",height:"60px",borderRadius:"15px"}}/>
                    </td>
                    <td style={{textAlign:"right"}}>
                      <Upload 
                        style={{color:"darkgreen"}} 
                        title="更换"
                        uploadurl={photoApi + "/topapp/uploadpic?id="+this.state.web.id}
                        handleUploadChange={this.handleUploadChange}
                        updateSubmit={this.updateSubmit}
                      />
                    </td>
                  </tr></tbody></table>
                </td>
              </tr>
              <tr><td style={{width:"50px",height:"50px"}}>名称：</td><td style={{textAlign:"left"}}><input max="4" style={{width:"95%",border:"1px #ccc solid"}} value={this.state.web.webname||''} onChange={this.handleChange.bind(this,"webname")}/></td></tr>
              <tr><td style={{width:"50px",verticalAlign:"top"}}>简介：</td><td style={{textAlign:"left"}}><textarea max="100" style={{width:"95%",height:"100px",border:"1px #ccc solid"}} value={this.state.web.webintro} onChange={this.handleChange.bind(this,"webintro")}/></td></tr>
              <tr><td style={{width:"50px",height:"50px"}}>网址：</td><td style={{textAlign:"left"}}><input style={{width:"95%",border:"1px #ccc solid"}} value={this.state.web.weburl||''} onChange={this.handleChange.bind(this,"weburl")}/></td></tr>
              <tr><td style={{width:"50px",height:"50px"}}>标签：</td><td style={{textAlign:"left"}}><input style={{width:"95%",border:"1px #ccc solid"}} value={this.state.web.keywords||''} onChange={this.handleChange.bind(this,"keywords")}/></td></tr>
              <tr><td style={{width:"50px",height:"50px"}}>级别：</td><td style={{textAlign:"left"}}><input style={{width:"95%",border:"1px #ccc solid"}} value={this.state.web.certified||''} onChange={this.handleChange.bind(this,"certified")}/></td></tr>
              </tbody></table>
              <table style={{height:"40px",borderTop:"1px solid #aaa"}}><tbody><tr>
                <td style={{textAlign:"left",color:"darkgreen"}}>
                  <span style={{float:"left"}} onTouchEnd={this.manageDivHide}>取消</span>
                </td>
                <td style={{textAlign:"center",color:"darkgreen"}}>
                  <span style={{display:this.state.web.id?"inline-block":"none"}} onTouchEnd={this.deleteApp.bind(this,this.state.web.id)}>删除</span>
                </td>
                <td style={{textAlign:"right",color:"darkgreen"}}>  
                  <span style={{display:this.state.web.id?"inline-block":"none"}} onTouchEnd={this.updateApp}>修改</span>
                  <span style={{display:this.state.web.id?"none":"inline-block"}} onTouchEnd={this.addApp}>添加</span>
                </td>
              </tr></tbody></table>  

            </td>
            <td style={{width:"10px"}}></td>
          </tr></tbody></table>
        </td></tr></tbody>
        </table>

        <div style={{zIndex:"10000",position:"fixed",top:"200px",right:"-15px",color:"white",backgroundColor:"black",fontSize:"16px",lineHeight:"32px",width:"32px",height:"32px",borderRadius:"16px",textAlign:"center",display:this.state.appdivshow}} onTouchEnd={this.toggleAppDivShow.bind(this,"")}>X</div>

        <div style={{position:"fixed",top:"0px",left:"0px",backgroundColor:"white",width:"100%",height:"100%",display:this.state.appdivshow}}>
          <iframe sandbox="allow-forms allow-scripts allow-same-origin allow-popups" style={{width:"100%",height:"100%",border:"10px solid white"}} src={this.state.weburl} />
        </div>
      </div>
    );

  }

}