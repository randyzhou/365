export default class Usernavadmin extends React.Component{
  render(){
      if(!this.props.user){
        alertMsg("组件错误，点击确定返回！",0,function(){
          window.history.back();
        })
        return false;
      }
  
      return(
        <table style={{width:'100%', backgroundColor: 'white', textAlign:'center'}}>
          <tbody>
            <tr style={{height:"40px",lineHeight:"40px",backgroundColor:"cornflowerblue",color:"white"}}><td>
              <table style={{width:"100%"}}><tbody>
                <tr>
                  <td style={{width:"40px",height:"40px",lineHeight:"40px",textAlign:"center",verticalAlign:"middle"}}>
                    <div style={{width:"33px",height:"33px"}}><Icon type={'left'} style={{width:"35px",height:"35px"}} onTouchEnd={touchEnd.bind(this,"#/me/admin")}/></div>
                  </td>
                  <td style={{textAlign:"center",fontSize:"18px"}} colSpan="7">
                    <span onTouchEnd={touchEnd.bind(this,"#/users/main/"+this.props.user.userid)}>{this.props.user.username}</span>
                  </td>
                  <td style={{width:"40px",textAlign:"center"}} onTouchEnd={touchEnd.bind(this,"#/me/admin")}>关闭</td>
                </tr>
              </tbody></table>
            </td></tr>
            <tr><td>
              <table style={{width:"100%"}}><tbody>
                <tr style={{height:'35px',lineHeight:'35px'}}>
                    <td style={{textAlign:"center"}}><span style={{color:'#333'}} onTouchEnd={touchEnd.bind(this,"#/usersadmin/admin")}>资料</span></td>
                    <td style={{textAlign:"center"}}><span style={{color:'#333'}} onTouchEnd={touchEnd.bind(this,"#/usersadmin/amount")}>费用</span></td>
                    <td style={{textAlign:"center"}}><span style={{color:'#333'}} onTouchEnd={touchEnd.bind(this,"#/usersadmin/photos")}>照片</span></td>
                    <td style={{textAlign:"center"}}><span style={{color:'#333'}} onTouchEnd={touchEnd.bind(this,"#/usersadmin/members")}>推友</span></td>
                    <td style={{textAlign:"center"}}><span style={{color:'#333'}} onTouchEnd={touchEnd.bind(this,"#/usersadmin/articles")}>文章</span></td>
                    <td style={{textAlign:"center"}}><span style={{color:'#333'}} onTouchEnd={touchEnd.bind(this,"#/usersadmin/retweets")}>推文</span></td>
                </tr>
              </tbody></table>
            </td></tr>
            <tr><td style={{borderBottom:"1px #ccc solid"}}></td></tr>
          </tbody>
        </table>
      );
  }
}