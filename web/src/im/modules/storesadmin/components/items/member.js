export default class AdminmemberItem extends React.Component{
  constructor(props){
    super(props);
  }

  handleUserShow=()=>{
    this.props.methods.adminUserShow(this.props.item,this.props.itemIndex);
  }

  handleDelete=(obj)=>{
    this.props.methods.handleDelete(obj);
  }

  render(){
    var shop = this.props.methods.shop||{};
    var pay_cert_name = JSON.parse(shop.pay_cert_name||'[]');
    var $user = this.props.item;
    var spcn = pay_cert_name[$user.paycertified]||[];
    let cert_name = JSON.parse(shop.cert_name||'{}');
    let certified = cert_name[$user.certified];
    if(certified) certified = "-"+certified;
    let nickname = '';
    if($user.nickname) nickname = "-"+$user.nickname;
    
    return (
      <table style={{width:"100%",border:"0px",marginTop:"3px"}}>
        <tbody>
        	<tr style={{height:"100px",margin:"3px"}}>
        		<td style={{width:"85px",textAlign:"center",verticalAlign:"middle"}} userid={$user.userid}>
              <div style={{position:"relative"}}>
              	<img src={thumbUrl+"/topuserphotos/"+$user.userid+".jpg"} style={{width:"85px",height:"85px",borderRadius:"6px"}} />
                <div style={{position:"absolute",bottom:"2px",width:"100%",textAlign:"center"}} onTouchEnd={this.handleUserShow.bind(this,$user.id,$user.left_money,$user.paycertified,$user.intro)}>
                  <span style={{border:"1px cadetblue solid",borderRadius:"5px",display:"inline-block",padding:"3px",backgroundColor:"azure"}}>管理</span>
                </div>
              </div>  
            </td>
        		<td style={{border:"0px red solid"}}>
              <table style={{width:"100%"}}><tbody>
                <tr>
                  <td>
                    <table style={{width:"100%"}}><tbody>
                      <tr><td style={{textAlign:"left"}}><span style={{color:$user.usersex==1?"black":"red"}} onTouchEnd={touchEnd.bind(this,"#/users/detail/"+$user.userid)}>{$user.username}</span>{certified}{nickname}</td></tr>
                      <tr><td style={{textAlign:"left"}}>消费：{$user.consume_money}元 &nbsp;余额：{$user.left_money}元</td></tr>
                      <tr><td style={{textAlign:"left"}}>消费级别：{spcn[0]||"普通会员"}，{spcn[1]||100}折</td></tr>
                      <tr><td style={{textAlign:"left"}}>会员备注：{$user.intro}</td></tr>
                    </tbody></table>
                  </td>
                  <td style={{width:"40px",textAlign:"center"}}>
                    <span onTouchEnd={this.handleDelete.bind(this,$user)} style={{background:"url(image/icon_new.jpg) no-repeat -193px -114px",display:"inline-block",width:"20px",height:"20px"}}></span>
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