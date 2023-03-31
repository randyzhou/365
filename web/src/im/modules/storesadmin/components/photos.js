import ListItem from "./items/photo";
export default class Adminphotos extends React.Component{
  constructor(props){
    super(props);
    var phoneWidth =  parseInt(window.screen.width)>450?450:parseInt(window.screen.width);
    this.state = {
      errTag: "disabled",
      Errors: {},
      ErrorMsg: {},
      errShow: {},
      inputed: {},
      showPostDiv: "none",
      photoid: '',
      shopname: null,
      shop: {},
      searchData: {},
      searchFlag: 0
    }
  }

  componentDidMount(){
  }

  handleSearch=(event)=>{
      this.setState({
          p: 0
      });
      return false;
  }

  handlePhotoNameChange=(name,event)=>{
    var value = "";
    if(!event) value = this.refs[name].value;
    else value = event.target.value;

    this.setState({photoname: value});
  }

  handleUploadSubmit=()=>{
    if(!this.state.photoname){
      alertMsg("信息没填完整！");
      return false;
    }
    var $this = this;
    let url = Config.api + "photo/create?typeid=1&ownerid="+this.props.id;
    fetchApi({
      url,
      method: "POST",
      body: {photoname:$this.state.photoname||'',avatar:$this.state.avatar}
    },function(res){        
      resultAlert(res);
      if(res.status == 200 && res.msg != "error"){
        $this.setState({avatar:'',searchFlag:1})
      }
    });
  }

  sendPost=()=>{
    if(!this.state.photoname){
      alertMsg("信息没填完整！");
      return false;
    }
    let queryStr = this.state.updateid?"&id="+this.state.updateid:"";
    let url = Config.api + "photo/update?typeid=1&ownerid="+this.props.id+queryStr;
    fetchApi({
      url,
      method: "POST",
      body: {photoname:this.state.photoname}
    },function(res){
      if(!isJson(res)){
          errMessage("","服务器文件错误！");
          return false;
      }
      resultAlert(res);
      if(res.status == 200 && res.msg != "error"){
        this.setState({
          searchFlag: 1,
          showPostDiv:"none"
        });
      }
    }.bind(this));
  }  

  deletePhoto=(id)=>{
    var url = Config.api + "photo/delete?typeid=1&ownerid="+this.props.id;
    fetchApi({
      url,
      method: 'POST',
      body: {id:id}
    },function(res){
      if(res.status == 200 && res.msg != "error"){
        this.setState({
          searchFlag: 1
        });
      }
      resultAlert(res);
    }.bind(this));
  }

  showPostDiv=(obj={})=>{
    var photoname = "";
    var updateid = 0;
    var avatar_up = "";

    if(obj.id!= null){
      photoname = obj.photoname;
      avatar_up = obj.avatar;
      updateid = obj.id;
    }
    var res = this.state.showPostDiv == "block"?"none":"block";
    this.setState({
      showPostDiv: res,
      photoname: photoname,
      updateid: updateid,
      avatar_up: avatar_up
    })
  }

  cancelPost=()=>{
    this.setState({showPostDiv:"none"});
  }

  handleChangephotoname=(event)=>{
    this.setState({
      photoname: event.target.value
    })
  }  

  uploadPicCancel=()=>{this.setState({avatar:null});}
  handleUploadChange=(avatar)=>{
    this.setState({avatar:avatar});
  }
  updateSubmit=()=>{
  }
  
  receiveChildData=(obj)=>{
    this.setState({shop: obj.owner,searchFlag:0});
  }

  render(){
    setTitle('照片管理');
    var errMsg = "错误提示";
    var errStyle = {textAlign:"left", color:"red", clear:"left", fontSize:"12px", margin:"3px", clear:"both"};

    return (
      <div ref="main" style={{width:"100%",height:"100%"}}>
        <table style={{width:"100%",height:"100%"}}><tbody>
          <tr><td style={{height:"30px"}}>
            <Storenavadmin shop={this.state.shop} />
          </td></tr>
          <tr><td style={{textAlign:"right",paddingRight:"5px",backgroundColor:"#eee",height:"40px",lineHeight:"40px"}}>
            <Upload 
              style={{color:"darkgreen"}} 
              title="上传图片"
              uploadurl={photoApi + "/store/uploadpic"}
              handleUploadChange={this.handleUploadChange}
              updateSubmit={this.updateSubmit}
            />       
          </td></tr>
          <tr><td style={{overflowY:"scroll",verticalAlign:"top"}}>  
            <Listall 
              apiurl={Config.api+'photo/listadmin?typeid=1&ownerid='+this.props.id} 
              hashurl={"#/storesadmin/photos"}
              backurl={"#/storesadmin/photos"} 
              searchData={this.state.searchData}
              item={ListItem}
              searchFlag={this.state.searchFlag}
              receiveChildData={this.receiveChildData}
              methods={{deletePhoto:this.deletePhoto,showPostDiv:this.showPostDiv}}
            />
          </td></tr>
        </tbody></table>
              
        <table id="imagefileTable" style={{display:this.state.avatar?"table":"none",position:"fixed",zIndex:"1000000000",top:"0px",left:"0px",width:"100%",height:"100%",backgroundColor:"black"}}><tbody>
        <tr>
          <td style={{color:"#111",height:"40px",textAlign:"center",verticalAlign:"top"}}>
            <table style={{width:"100%",position:"relative"}}><tbody><tr>
              <td></td>
              <td style={{color:"#111",width:"100px",height:"40px",textAlign:"center",verticalAlign:"middle"}}>
                  <span className="btn-info" onTouchEnd={this.handleUploadSubmit.bind(this)}>点击上传</span>
              </td>
              <td style={{color:"#111",width:"100px",height:"40px",textAlign:"center",verticalAlign:"middle"}}>
                  <span className="btn-info" onTouchEnd={this.uploadPicCancel.bind(this)}>取消上传</span>
              </td>
              <td></td>
            </tr></tbody></table>
          </td>
        </tr>
        <tr><td style={{height:"40px",padding:"10px"}}><input ref="photoname" style={{width:"100%"}} placeholder="输入照片标题" value={this.state.photoname||''} onChange={this.handlePhotoNameChange.bind(this,"photoname").bind(this)}/></td></tr>
        <tr><td style={{verticalAlign:"top"}}><img id="imagefile" src={photoUrl + "/storephotos/"+this.state.avatar+".jpg"} style={{width:'100%'}}/></td></tr>
        <tr><td></td></tr>
        </tbody></table>

        <div style={{display:this.state.showPostDiv,position:"fixed",top:"0px",zIndex:"1000000",textAlign:"center",width:"100%",height:"100%",backgroundColor:"white"}}>
          <table style={{width:"100%",height:"50px",lineHeight:"50px",backgroundColor:"slategray",marginTop:"1px"}}><tbody><tr>
            <td style={{textAlign:"left",paddingLeft:"5px"}}><span style={{padding:"3px",borderRadius:"3px",marginRight:"20px",color:"white"}} onTouchEnd={this.cancelPost}>取消</span></td>
            <td style={{textAlign:"right",paddingRight:"5px"}}><span style={{padding:"3px",borderRadius:"3px",color:"lime"}} onTouchEnd={this.sendPost}>修改</span></td>
          </tr></tbody></table>
          <div style={{height:"10px"}}></div>
          <table style={{width:"100%"}}><tbody><tr><td style={{width:"5px"}}></td><td style={{textAlign:"center"}}>
          	<input style={{width:"97%",height:"40px",border:"0px"}} placeholder="标题" value={this.state.photoname||''} onChange={this.handleChangephotoname}/>
          </td><td style={{width:"5px"}}></td></tr></tbody></table>
          <table style={{width:"100%"}}><tbody>
            <tr><td style={{textAlign:"center"}}>
              <img id="storeImg" src={photoUrl+"/storephotos/"+this.state.avatar_up+".jpg"} style={{width:'100%'}}/>
            </td></tr>
          </tbody></table>
        </div>          

      </div>
    );
  }

}