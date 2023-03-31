import ListItem from "./items/article";
export default class Adminarticles extends React.Component{
  constructor(props){
    super(props);
	   let phoneWidth =  parseInt(window.screen.width)>450?450:parseInt(window.screen.width);
     this.state = {
      showPostDiv: "none",
      showPicDiv: "none",
      title: "",
      content: "",
      updateType: 0,
      updateid: 0,
      phoneWidth: phoneWidth,
      avatars: [],
      avatar_up: [],
      shop: {},
      searchData: {},
      searchFlag: 0
    }
  }

  componentDidMount(){
  }

  showPostDiv=(obj)=>{
    if(this.state.shop.typeid == 2){
      return false;
    }
    console.log(obj)
    let title = "";
    let content = "";
    let updateType = 0;
    let updateid = 0;
    let avatars = [];

    if(obj.id){
      title = obj.title;
      content = obj.content;
      let avatar = obj.avatar;
      if(avatar && avatar.indexOf("[") > -1) avatars = JSON.parse(avatar);
      else avatars.push(avatar);
      updateType = 1;
      updateid = obj.id;
    }

    let res = this.state.showPostDiv == "block"?"none":"block";
    this.setState({
      showPostDiv: res,
      title: title,
      content: content,
      updateType: updateType,
      updateid: updateid,
      avatars: avatars
    })
  }

  showPicDiv=(index)=>{
    if(this.state.shop.typeid == 2){
      return false;
    }
    let updateAvatarIndex = '';
    let avatar_title = '';
    let avatar_src = '';
    if(index != null){
      updateAvatarIndex = index;
      let avatar_title = this.state.avatars[index][0]||'';
      let avatar_src = this.state.avatars[index][1]||'';
    }

    let showPicDiv = this.state.showPicDiv == "block"?"none":"block";
    this.setState({
      showPicDiv: showPicDiv,
      updateAvatarIndex: updateAvatarIndex,
      avatar_up: [avatar_title,avatar_src]
    })
  }

  hidePicDiv=()=>{
    this.setState({showPicDiv:"none"});
  }  

  minusPic=(index)=>{
    let avatars = this.state.avatars;
    avatars.remove(index);
    this.setState({avatars});
  }

  deleteItem=(id)=>{
  	if(!id){
  	 alert("请选择ID！");
  	 return false;
    }
    let res = confirm("确认删除吗！");
    if(!res){
    	return false;
    };
    let url = Config.api+"article/delete";
    fetchApi({
      url,
      method: "POST",
      body: {id:id, ownerid:this.state.shop.id, typeid:1}
    },function(res){
      resultAlert(res);
      if(res.status == 200){
        this.setState({searchFlag:1});
      }
    }.bind(this));
  }

  cancelPost=()=>{
    this.setState({showPostDiv:"none"});
  }

  sendPost=()=>{
    if(this.state.shop.typeid == 2){
      return false;
    }
    if(!this.state.title || !this.state.content){
      alertMsg("信息没填完整！");
      return false;
    }

    this.setState({showPostDiv:"none"});
    
    let action = "create";
    if(this.state.updateType > 0){
      action = "update";
    }
    let url = Config.api+"article/"+action;
    let article = {
      avatar: JSON.stringify(this.state.avatars), 
      title: this.state.title, 
      content: this.state.content, 
      owner_id: this.state.shop.id, 
      owner_name: this.state.shop.name, 
      updateid: this.state.updateid, 
      typeid:1
    }

    fetchApi({
      url,
      method: "POST",
      body: article
    },function(res){
      if(!isJson(res)){
          errMessage("","服务器文件错误！");
          return false;
      }
      resultAlert(res);
      if(res.status == 200){        
        this.setState({searchFlag:1});
      }
    }.bind(this));
  }

  handleChangeTitle=(event)=>{
    this.setState({
      title: event.target.value
    })
  }

  handleChangeAvatar_title=(event)=>{
    let avatar_up = this.state.avatar_up;
    avatar_up[0] = event.target.value;
    this.setState({
      avatar_up
    })
  }

  handleChangeContent=(event)=>{
    this.setState({
      content: event.target.value
    })
  }

  handlePicUpdate=()=>{
    if(this.state.shop.typeid == 2){
      return false;
    }
    let index = this.state.updateAvatarIndex;
    let avatars = [...this.state.avatars];
    if(index != ''){
      avatars[index][0] = this.state.avatar_up[0];
      avatars[index][1] = this.state.avatar_up[1]
    }else{
      let avatar_up = [this.state.avatar_up];
      avatars = avatars.concat(avatar_up);
    }
    this.setState({
      avatars,
      showPicDiv:"none"
    })
  }

  handleUploadChange=(avatar)=>{
    let rd = Math.random();
    let avatar_up = this.state.avatar_up;
    avatar_up[1] = avatar;
    this.setState({avatar_up,rd});
  }

  updateSubmit=(avatar)=>{
    console.log("图片上传成功")
  }

  receiveChildData=(obj)=>{
    this.setState({shop: obj.owner,searchFlag:0});
  }

  render(){
    setTitle('文章管理');
    if(!this.state.shop) return null;

    let imgList = !this.state.avatars?null:this.state.avatars.map(function(avatar,index){
      let avatarArr = [];
      if(typeof(avatar) == "object"){
        avatarArr = avatar;
      }else{
        avatarArr[0] = "";
        avatarArr[1] = avatar;
      }
      return(
        <div style={{width:"98%",margin:"5px"}}>
          <div><span>{avatarArr[0]}</span></div>
          <div>
            <div style={{position:"relative",top:"5px",width:"100%",textAlign:"right"}}><span style={{display:"inline-block",borderRadius:"10px",fontSize:"10px",backgroundColor:"white",color:"black", marginTop:"0px",marginRight:"10px",width:"20px",height:"20px",lineHeight:"20px",textAlign:"center"}} onTouchEnd={this.minusPic.bind(this,index)}>X</span></div>
            <img key={index} src={thumbUrl+"/articlephotos/"+avatarArr[1]+".jpg"} style={{width:"98%",marginTop:"-15px"}}/>
          </div>
        </div>
      )
    }.bind(this))

    let photoname = this.state.avatar_up?this.state.avatar_up[1]:'';
    let show = "none";
    if(this.state.shop.typeid=="1") show="table-row";
    
    return (
      <div ref="main" style={{width:"100%",height:"100%"}} onScroll={this.handleScroll}>
        <table style={{height:"100%"}}><tbody>
          <tr style={{height:"30px"}}><td>
            <Storenavadmin shop={this.state.shop}/>
          </td></tr>
          <tr style={{height:"30px",display:show}}><td>
            <table id="club-nav" style={{width:'100%',backgroundColor: '#eeeeee'}}>
              <tbody>
                <tr style={{height:'35px', lineHeight:'35px', borderBottom:"1px #ddd solid"}}>
                  <td style={{textAlign:'right'}}>
                    <span style={{padding:"3px",borderRadius:"3px",color:"seagreen"}} onTouchEnd={this.showPostDiv.bind(this,{})}>发布</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </td></tr>
          <tr><td style={{overflowY:"scroll",verticalAlign:"top"}}>  
            <Listall 
              apiurl={Config.api+'article/listadmin?typeid=1&ownerid='+this.props.id} 
              hashurl={"#/storesadmin/articles/"+this.props.id}
              backurl={"#/storesadmin/articles/"+this.props.id} 
              searchData={this.state.searchData}
              item={ListItem}
              searchFlag={this.state.searchFlag}
              receiveChildData={this.receiveChildData}
              methods={{deleteItem:this.deleteItem,showPostDiv:this.showPostDiv,shop:this.state.shop}}
            />
          </td></tr>
        </tbody></table>

        <div style={{display:this.state.showPostDiv,position:"fixed",top:"0px",zIndex:"1000",textAlign:"center",width:"100%",height:"100%",backgroundColor:"white"}}>
          <table style={{height:"100%"}}><tbody>
            <tr style={{height:"50px"}}><td>
              <table style={{width:"100%",height:"50px",lineHeight:"50px",backgroundColor:"slategray",marginTop:"1px"}}><tbody><tr>
                <td style={{textAlign:"left",paddingLeft:"5px"}}><span style={{padding:"3px",borderRadius:"3px",marginRight:"20px",color:"white"}} onTouchEnd={this.cancelPost}>取消</span></td>
                <td style={{textAlign:"right",paddingRight:"5px"}}><span style={{padding:"3px",borderRadius:"3px",color:"lime"}} onTouchEnd={this.sendPost}>发表</span></td>
              </tr></tbody></table>
              <div style={{height:"10px"}}></div>
            </td></tr>
            <tr style={{height:"20px",borderBottom:"1px #ccc solid"}}><td>  
              <table style={{width:"100%"}}><tbody><tr><td style={{width:"5px"}}></td><td style={{textAlign:"center"}}>
                <input style={{width:"97%",height:"20px",border:"0px"}} placeholder="标题" value={this.state.title||''} onChange={this.handleChangeTitle}/>
              </td><td style={{width:"5px"}}></td></tr></tbody></table>
              <div style={{height:"10px"}}></div>
            </td></tr>
            <tr style={{height:"150px"}}><td>  
              <table style={{width:"100%"}}><tbody><tr><td style={{width:"5px"}}></td><td style={{textAlign:"center"}}>
                <textarea style={{width:"97%",height:"150px",border:"0px"}} placeholder="内容" value={this.state.content||''} onChange={this.handleChangeContent}></textarea>
              </td><td style={{width:"5px"}}></td></tr></tbody></table>
            </td></tr>
            <tr style={{height:"30px"}}><td>
              <table id="club-nav" style={{width:'100%',backgroundColor: '#eeeeee'}}>
                <tbody>
                  <tr style={{height:'35px', lineHeight:'35px', borderBottom:"1px #ddd solid"}}>
                    <td style={{textAlign:'right'}}>
                      <span style={{padding:"3px",borderRadius:"3px",color:"seagreen"}} onTouchEnd={this.showPicDiv.bind(this,null)}>添加图文</span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </td></tr>
            <tr><td>      
              <div style={{width:"100%",height:"100%",textAlign:"left",overflowY:"auto"}}>
                {imgList}
              </div>
            </td></tr>  
          </tbody></table>    
        </div>

        <div style={{display:this.state.showPicDiv,position:"fixed",top:"0px",zIndex:"1000000",textAlign:"center",width:"100%",height:"100%",backgroundColor:"white"}}>
          <table style={{width:"100%",height:"50px",lineHeight:"50px",backgroundColor:"slategray",marginTop:"1px"}}><tbody><tr>
            <td style={{textAlign:"left",paddingLeft:"5px"}}><span style={{padding:"3px",borderRadius:"3px",marginRight:"20px",color:"white"}} onTouchEnd={this.hidePicDiv}>取消</span></td>
            <td style={{textAlign:"right",paddingRight:"5px"}}><span style={{padding:"3px",borderRadius:"3px",color:"lime"}} onTouchEnd={this.handlePicUpdate}>修改</span></td>
          </tr></tbody></table>
          <div style={{height:"10px"}}></div>
          <table style={{width:"100%"}}><tbody><tr><td style={{width:"5px"}}></td><td style={{textAlign:"center"}}>
          	<input style={{width:"97%",height:"40px",border:"0px"}} placeholder="标题" value={this.state.avatar_up?this.state.avatar_up[0]:''} onChange={this.handleChangeAvatar_title}/>
          </td><td style={{width:"5px"}}></td></tr></tbody></table>
          <table style={{width:"100%"}}><tbody>
            <tr style={{height:"40px"}}>            
              <td style={{backgroundColor:"#eee",width:"80px"}}>
              </td>
              <td style={{backgroundColor:"#eee",textAlign:"center"}}></td>
              <td style={{backgroundColor:"#eee",width:"80px",height:"40px",textAlign:"center",verticalAlign:"middle"}}>
                <table style={{width:"100%"}}><tbody><tr>
                  <td style={{color:"#111",height:"40px",textAlign:"center",verticalAlign:"middle"}}>
                      <Upload 
                        style={{color:"darkgreen"}} 
                        title="选择图片"
                        uploadurl={photoApi + "/article/uploadpic"}
                        handleUploadChange={this.handleUploadChange}
                        updateSubmit={this.updateSubmit}
                      />
                  </td>
                </tr></tbody></table>
              </td>
            </tr>
          </tbody></table>

          <div style={{height:"10px"}}></div>
          <table style={{width:"100%"}}><tbody>
            <tr><td style={{textAlign:"center"}}>
              <img src={thumbUrl + "/articlephotos/"+photoname+".jpg"} style={{width:this.state.phoneWidth}}/>
            </td></tr>
          </tbody></table>

        </div>    

      </div>
    );
  }
}