import ListItem from "./items/group";
export default class Admingroups extends React.Component{
  constructor(props){
    super(props);
    this.state = {
      shopname: null,
      shopid: null,
      createGroupShow: 0,
      shop: {},
      searchData: {},
      searchFlag: 0
    }
  }

  componentDidMount(){
  }

  handleStoreChange=(event)=>{
    this.setState({
      shopname: event.target.value
    });
  }

  showGroupAdmin=(id,groupname,groupuserid,groupusername)=>{
    this.setState({
      setGroupAdminShow: true,
      setGroupId: id,
      setGroupname: groupname,
      setGroupUserId: groupuserid,
      setGroupUsername: groupusername
    })
  }
  hideGroupAdminShow=()=>{
    this.setState({setGroupAdminShow:false});
  }

  setGroupAdmin=(shopid)=>{
    if(!this.state.groupUsername || this.state.groupUsername.length < 1){
      this.setState({setGroupAdminShow:false});
      return false;
    }
    var url = Config.api + "shop/setgroupcaptain?shopid="+shopid;
    fetchApi({
      url,
      method: "POST",
      body: {username: this.state.groupUsername}
    },function(res){
      if(res.status == 200) {
        resultAlert(res);
        this.setState({
          setGroupAdminShow: false,
          searchFlag: 1
        })
      }
      else resultAlert(res);
    }.bind(this));
  }

  handleGroupUsernameChange=(event)=>{
    this.setState({
      groupUsername: event.target.value
    });
  }

  handleGroupChange=(event)=>{
    this.setState({
      groupname: event.target.value
    });
  }

  createGroup=(shopid)=>{    
    if(!this.state.groupname || this.state.groupname.length < 1){
      this.setState({createGroupShow:0});
      return false;
    }
    var url = Config.api + "shop/creategroup";
    fetchApi({
      url,
      method: "POST",
      body: {shopname: this.state.groupname, shopid: shopid}
    },function(res){
      if(res.result == 1) resultAlert("没填群组名！");
      else if(res.result == 3) {
        resultAlert("添加群组成功！");
        this.setState({
          createGroupShow:0,
          searchFlag: 1
        });
      }
      else resultAlert("添加失败！");
    }.bind(this));
  }

  showCreateGroup=(id)=>{
    this.setState({
      createGroupShow: 1,
      shopid: id
    })
  }
  
  hideCreateGroup=(id)=>{
    this.setState({
      createGroupShow: 0
    })
  }

  receiveChildData=(obj)=>{
    this.setState({shop:obj.owner,searchFlag:0});
  }

  render(){
    setTitle("社团管理");
    let shop = this.state.shop;
    return (
      <div style={{width:"100%",height:"100%"}}>
        <table style={{width:"100%",height:"100%"}}><tbody>
          <tr><td style={{height:"30px"}}>
            <Storenavadmin shop={this.state.shop}/>
          </td></tr>
          <tr><td style={{overflowY:"scroll",verticalAlign:"top"}}>  
            <table style={{height:"20px"}}>
              <tr style={{borderBottom:"1px #ccc solid"}}>
                <td style={{fontSize:"15px",padding:"10px"}}><span style={{float:"left"}}>社团名称</span><span style={{float:"right"}}>{shop.clubs}社团</span></td>
                <td style={{fontSize:"15px",textAlign:"right",padding:"10px"}}>社长</td>
              </tr>
            </table>  
            <Listall
              apiurl={Config.api+"shop/storegroupsadmin?shopid="+this.props.id} 
              hashurl={"#/storesadmin/groups"}
              backurl={"#/storesadmin/groups"} 
              searchData={this.state.searchData}
              item={ListItem}
              searchFlag={this.state.searchFlag}
              receiveChildData={this.receiveChildData}
              methods={{handleDelete:this.handleDelete,showGroupAdmin:this.showGroupAdmin}}
            />
          </td></tr>
        </tbody></table>

        <table style={{zIndex:"1000000",display:this.state.createGroupShow?"table":"none",height:"70px",width:"100%",position:'fixed',bottom:'0px',left:"0px",backgroundColor:"white"}}><tbody>
          <tr><td style={{textAlign:"left",borderBottom:"1px solid #eee"}} colSpan="3">
            <input style={{width:"90%",height:"35px",marginLeft:"10px"}} value={this.state.groupname||''} onChange={this.handleGroupChange.bind(this)} placeholder="输入群组名"/>
          </td></tr>
          <tr style={{height:"40px"}}>
            <td style={{width:"60px",textAlign:"left"}}>
              <span style={{color:"darkgreen",marginLeft:"10px"}} onTouchEnd={this.hideCreateGroup}>取消</span>
            </td>
            <td style={{textAlign:"right"}}>
              <span style={{color:"darkgreen"}} onTouchEnd={this.createGroup.bind(this,this.state.shopid)}>创建</span>
            </td>
            <td style={{width:"10px"}}></td>
          </tr>
        </tbody></table>

        <table style={{display:this.state.setGroupAdminShow?"table":"none",width:"100%",height:'150px',padding:"10px",position:'fixed',backgroundColor:"white",bottom:'0px',zIndex:"100000",border:"1px solid darkseagreen"}}><tbody>
          <tr style={{borderBottom:"1px solid #eee"}}><td>
            <table style={{width:"98%"}}><tbody><tr>
              <td style={{textAlign:"left"}} colSpan="2">
                <span style={{paddingLeft:"5px"}}>{this.state.setGroupname}</span>
              </td>
              <td style={{textAlign:"right",width:"80px"}}>
                <span style={{paddingRight:"5px"}}>{this.state.setGroupUsername}</span>
              </td>
            </tr></tbody></table>
          </td></tr>  
          <tr><td style={{textAlign:"left",borderBottom:"lightgray solid 1px"}}>
            <input style={{width:"95%",height:"35px",paddingLeft:"7px"}} value={this.state.groupUsername||''} onChange={this.handleGroupUsernameChange.bind(this)} placeholder="输入新群主用户名"/>
          </td></tr>
          <tr><td>
            <table style={{width:"98%"}}><tbody><tr>
              <td style={{width:"60px",textAlign:"left"}}>
                <span style={{color:"darkgreen",marginLeft:"10px"}} onTouchEnd={this.hideGroupAdminShow}>取消</span>
              </td>
              <td style={{textAlign:"right"}}>
                <span style={{color:"darkgreen",marginRight:"10px"}} onTouchEnd={this.setGroupAdmin.bind(this,this.state.setGroupId)}>确定</span>
              </td>
              <td style={{width:"10px"}}></td>
            </tr></tbody></table>
          </td></tr>
        </tbody></table>

        <table style={{position:"fixed",bottom:"1px",width:"100%",height:"40px",borderTop:"1px solid #ccc"}}><tbody>
          <tr>
            <td style={{width:"60px",textAlign:"center"}}>
              <span style={{color:"darkgreen"}} onTouchEnd={touchEnd.bind(this,"#/me/admin")}>关闭</span>
            </td>
            <td style={{textAlign: "right"}}>
              <span style={{paddingLeft:"20px",color:"darkgreen"}} onTouchEnd={this.showCreateGroup.bind(this,shop.id)}>添加群组</span>
            </td>
            <td style={{width:"10px"}}></td>
          </tr>
        </tbody></table>
      </div>
    );
  }
}