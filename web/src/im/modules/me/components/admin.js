export default class Admin extends React.Component {
  constructor(props){
    super(props);
  }

  logout=()=>{
    var url = Config.api+"site/logout";
    fetchApi({
      url
    },function(res){
      console.log(res)
       if(!isJson(res)){
           errMessage("","服务器文件错误！");
           return false;
       }
       resultAlert(res);
       if(res.result == 200){
          token = null;
          clearCookie('token');
          document.cookie = '';
          socket.emit("leave");
          location.href = "/im";
          
       }
     }.bind(this))
  }

  clear=()=>{
    localStorage.clear();
    document.cookie = '';
    jsonshow(localStorage)
  }  

  upgrade=()=>{
    localStorage.clear();
    location.href = "/im"
  }

  render() {
    setTitle("管理界面");
    return (
      <table style={{width:"100%",height:"100%",backgroundColor:"#eeeeee"}}><tbody>
        <tr><td style={{verticalAlign:"top"}}>
          <div style={{width:"100%",overflowY:"auto"}}>
              <table style={{width:"100%",height:"80px",backgroundColor:"white"}}>
                <tbody>
                  <tr>
                    <td style={{textAlign:"center",verticalAlign:"middle",width:"70px"}}>
                      <Img onTouchEnd={touchEnd.bind(this,"#/usersadmin/admin")} src={thumbUrl+"/topuserphotos/"+userid+".jpg"} style={{width:"50px",height:"50px",borderRadius:"25px"}}/>
                    </td>
                    <td style={{textAlign:"left",width:"100px"}}>
                      <div style={{dispay:"block"}}>
                        <span>{username}</span>
                        <br/>
                        <span>{userid}</span>
                      </div>
                    </td>
                    <td style={{textAlign:"right"}}>
                      <span onTouchEnd={touchEnd.bind(this,"#/usersadmin/admin")}>修改资料</span>
                    </td>
                    <td style={{width:"10px"}}></td>
                  </tr>
                </tbody>
              </table>
              <div style={{width:"100%",height:"20px"}}></div>
              <List style={{backgroundColor:'white'}} className="picker-list">
                <List.Item arrow="horizontal" onTouchEnd={touchEnd.bind(this,"#/storesadmin/basic")}>店家管理</List.Item>
              </List>     
              <List style={{backgroundColor:'white'}} className="picker-list">
                <List.Item arrow="horizontal" onTouchEnd={touchEnd.bind(this,"#/me/groups")}>社团管理</List.Item>
              </List>
              <List style={{backgroundColor:'white'}} className="picker-list">
                <List.Item arrow="horizontal" onTouchEnd={touchEnd.bind(this,"#/me/refuser")}>查看收入</List.Item>
              </List>     
              <List style={{backgroundColor:'white'}} className="picker-list">
                <List.Item arrow="horizontal" onTouchEnd={touchEnd.bind(this,"#/me/addmobile")}>关联手机</List.Item>
              </List>    
              <List style={{backgroundColor:'white'}} className="picker-list">
                <List.Item arrow="horizontal" onTouchEnd={touchEnd.bind(this,"#/usersadmin/adminpassword")}>修改密码</List.Item>
              </List>  
              <List style={{backgroundColor:'white'}} className="picker-list">
                <List.Item arrow="horizontal" onTouchEnd={this.upgrade}>系统升级</List.Item>
              </List>     
              <List style={{backgroundColor:'white'}} className="picker-list">
                <List.Item arrow="horizontal" onTouchEnd={this.logout}>退出登录</List.Item>
              </List>
          </div>      
        </td></tr>
        <tr style={{height:"30px"}}><td>
          <Mainbottom />
        </td></tr>
      </tbody></table>
    );

  }
}
