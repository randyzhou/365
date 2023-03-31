export default class AdminMemberItem extends React.Component{
  constructor(props){
    super(props);
  }

  handleDelete=(user)=>{
    this.props.methods.handleDelete(user.retweetid);
  }

  userDetail=()=>{
    backurl_user = "#/usersadmin/members";
    touchEnd("#/users/detail/"+this.props.item.userid)
  }

  render(){
    var $user = this.props.item;
    let photoname = $user.userid;
    return (
      <table style={{width:"100%",border:"0px",marginTop:"3px"}}>
        <tbody>
        	<tr style={{height:"100px",margin:"3px"}}>
        		<td style={{width:"50px",textAlign:"center",verticalAlign:"middle"}} userid={$user.userid}>
              	<img src={thumbUrl+"/topuserphotos/"+photoname+".jpg"} style={{width:"50px",height:"50px",borderRadius:"6px"}} />
            </td>
        		<td style={{border:"0px red solid"}}>
                <table style={{width:"100%"}}><tbody>
                <tr>
                  <td>
                    <table style={{width:"100%"}}><tbody>
                      <tr><td style={{textAlign:"left"}}>
                        <div onTouchEnd={this.userDetail} title="点击查看详情">{$user.username}</div>
                        <div style={{color:"#999",fontSize:"12px",paddingTop:"5px"}}>荐语：{$user.content}</div>
                      </td></tr>
                    </tbody></table>
                  </td>
                  <td style={{width:"50px",textAlign:"center"}}>
                    <span style={{border:"1px cadetblue solid",borderRadius:"5px",display:"inline-block",padding:"3px"}} onTouchEnd={this.handleDelete.bind(this,$user)}>删除</span>
                  </td>
                </tr>
                </tbody></table>
        		</td>
        	</tr>
        	<tr><td colSpan="3" style={{borderBottom:"1px solid #ccc"}}></td></tr>
        </tbody>
      </table>
    )
  }
}