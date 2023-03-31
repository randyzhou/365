export default class Usernav extends React.Component{
  constructor(props){
    super(props);
    this.state = {
      down: 0,
      friend: props.friend
    }
  }

  toggle = ()=>{
    let down = this.state.down == 0?1:0;
    this.setState({
      down
    })
  }

  back = () => {
    let url = backurl_user == ''?"#/users":backurl_user;
    backurl_user = '';
    touchEnd(url);
  }

  render() {
    if(!this.props.user){
      alertMsg("组件错误，点击确定返回！",0,function(){
        window.history.back();
      })
      return false;
    }
    var user = this.props.user;

    return (
      <table id="club-nav" style={{width:'100%', backgroundColor: 'white', color:'#222', textAlign:'center'}}>
        <tbody>
          <tr style={{height:"40px",lineHeight:"40px",backgroundColor:"cornflowerblue",color:"white"}}><td>
              <table style={{width:"100%"}}><tbody>
                <tr>                    
                  <td style={{width:"60px",height:"40px",lineHeight:"40px",textAlign:"center",verticalAlign:"middle"}}>
                    <div style={{width:"33px",height:"33px"}}>
                      <Icon type={'left'} style={{width:"35px",height:"35px"}} onTouchEnd={this.back}/>
                    </div>
                  </td>
                  <td style={{textAlign:"center",fontSize:"18px"}}>
                    <span onTouchEnd={touchEnd.bind(this,"#/users/detail/"+user.userid)}>{user.username}</span>
                  </td>
                  <td style={{width:"60px",textAlign:"center",fontSize:"16px"}} onTouchEnd={touchEnd.bind(this,"#/messages/list?toid="+user.userid+"&roomtype=Personal")}>私聊</td>
                </tr>
              </tbody></table>
          </td></tr>            
          <tr style={{height:'35px',lineHeight:'35px'}}><td>
            <table style={{width:"100%"}}><tbody><tr>                    
              <td style={{textAlign:"center"}}><span onTouchEnd={touchEnd.bind(this,"#/users/main/"+user.userid)}>首页</span></td>
              <td style={{textAlign:"center"}}><span onTouchEnd={touchEnd.bind(this,"#/users/acts/"+user.userid)}>活动</span></td>
              <td style={{textAlign:"center"}}><span onTouchEnd={touchEnd.bind(this,"#/users/groups/"+user.userid)}>社团</span></td>
              <td style={{textAlign:"center"}}><span onTouchEnd={touchEnd.bind(this,"#/users/photos/"+user.userid)}>照片</span></td>
              <td style={{textAlign:"center"}}><span onTouchEnd={touchEnd.bind(this,"#/users/friends/"+user.userid)}>推友</span></td>
              <td style={{textAlign:"center"}}><span onTouchEnd={touchEnd.bind(this,"#/users/retweets/"+user.userid)}>推文</span></td>
              <td style={{textAlign:"center"}}><span onTouchEnd={touchEnd.bind(this,"#/users/detail/"+user.userid)}>资料</span></td>
            </tr></tbody></table>
          </td></tr>
        </tbody>
      </table>
    );

  }
}