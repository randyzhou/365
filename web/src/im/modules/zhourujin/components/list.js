
export default class Main extends React.Component {
  constructor(props){
    super(props);
  }

  render() {
    setTitle("管理界面");
    return (
      <table style={{width:"100%",height:"100%",backgroundColor:"#eeeeee"}}><tbody>
        <tr><td style={{verticalAlign:"top"}}>
          <div style={{width:"100%",overflowY:"auto"}}>
              <div style={{width:"100%",height:"20px"}}></div>
              <List style={{backgroundColor:'white'}} className="picker-list">
                <List.Item arrow="horizontal" onTouchEnd={touchEnd.bind(this,"#/zhourujin/userlist")}>会员管理</List.Item>
              </List>     
              <List style={{backgroundColor:'white'}} className="picker-list">
                <List.Item arrow="horizontal" onTouchEnd={touchEnd.bind(this,"#/apps/adminlist")}>应用管理</List.Item>
              </List>     
              <List style={{backgroundColor:'white'}} className="picker-list">
                <List.Item arrow="horizontal" onTouchEnd={touchEnd.bind(this,"#/zhourujin/upgrade")}>升级通知</List.Item>
              </List>    
              <List style={{backgroundColor:'white'}} className="picker-list">
                <List.Item arrow="horizontal" onTouchEnd={touchEnd.bind(this,"#/usersadmin/adminpassword")}>修改密码</List.Item>
              </List>
          </div>      
          <div style={{width:"100%",height:"50px",position:"fixed",bottom:"1px"}}>
            <Button type="primary" onTouchEnd={touchEnd.bind(this,"#/messages")}>关闭</Button>
          </div>
        </td></tr>
      </tbody></table>
    );

  }
}
