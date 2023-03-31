import ListItem from "./items/groupItem.js";

export default class Groups extends React.Component{
  constructor(props) {
    super(props);
    this.state = {
      storeName: null,
      storeId: null,
      groups: []
    }
  }

  componentDidMount(){
    this.loadData();
  }

  loadData=(params,direction)=>{
      var url = Config.api+"shop/mygroupsadmin";
      fetchApi({
        url
      },function(res){     
          if(!isJson(res)){
              errMessage("","服务器文件错误！");
              return false;
          }
          if(res.status == 200){
            this.setState({
              groups: res.groups
            });
          }else if(res.status == 1){
            
          }else{
            errMessage(res);
          }
      }.bind(this));
  }

  handleGroupChange=(event)=>{
    this.setState({
      groupName: event.target.value
    });
  }

  render(){
    setTitle("群组管理");

    var ListItems = !this.state.groups?null:this.state.groups.map(function(item,index) {
      return (
        <ListItem key={index} item={item} />
      );
    });

    return (
      <div ref="main" style={{marginTop:"0px",width:"100%",height:"100%"}}>
        <table style={{width:"100%"}}><tbody>
          <tr style={{height:"50px"}}><td>
            <div style={{height:"50px",lineHeight:"50px",textAlign:"center",backgroundColor:"darkblue",color:"white",fontSize:"20px"}}>管理我的社团</div>  
          </td></tr>
          <tr><td style={{vertical:"top"}}>
            <div style={{width:"100%",height:"100%",overflowY:"scroll"}}>
              <table style={{width:"100%", height:"100%"}}><tbody>
                <tr style={{borderBottom:"1px #ccc solid",height:"30px",lineHeight:"30px"}}><td style={{fontSize:"15px",padding:"10px"}}>社团名称</td><td style={{fontSize:"15px",textAlign:"right",padding:"10px"}}>社长</td></tr>
                {ListItems}
              </tbody></table>
            </div>  
          </td></tr>
          <tr style={{height:"40px"}}><td>
          </td></tr>
        </tbody></table>
        <table style={{position:"fixed",bottom:"0px",width:"100%",height:"40px",backgroundColor:"darkgreen",color:"white",borderTop:"1px solid #ccc"}}>
            <tbody><tr>
              <td style={{width:"1px"}}></td>
              <td style={{textAlign:"center"}}>
                <table style={{width:"100%"}}>
                  <tbody><tr>
                    <td style={{textAlign: "center"}} onTouchEnd={touchEnd.bind(this,"#/me/admin")}>
                      <span>关闭</span>
                    </td>
                  </tr></tbody>
                </table>
              </td>
              <td style={{width:"10px"}}></td>
            </tr></tbody>
            </table>
      </div>
    );
  }
}


