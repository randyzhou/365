export default class Comment extends React.Component{
  constructor(props){
    super(props);
  }

  showPayment(id){
    this.props.showPayment(id);
  }

  detail=(userid)=>{
    backurl_user = this.props.backurl;
    touchEnd("#/users/detail/"+userid)
  }

  render(){
    var $comment = this.props.item;

    var title = null;
    if($comment.title){
      title = <div style={{fontWeight:"bolder",fontSize:"14px"}}>{$comment.title}</div>;
    }
    let photoname = $comment.avatar?$comment.avatar:$comment.userid;

    var payment = null;
    if(this.props.adminid == userid){
      payment = <div style={{textAlign:"center"}}><span style={{color:"darkgreen"}} onTouchEnd={this.showPayment.bind(this,$comment.id)}>奖</span></div>;
    }
    var paymentshow = "";
    if($comment.payment > 0){
      paymentshow = <div style={{marginTop:"10px",backgroundColor:"#eee",padding:"10px"}}><div style={{fontWeight:"bolder",color:"red"}}><span onTouchEnd={this.detail.bind(this,$comment.payuserid)}>{$comment.payusername}</span>【{$comment.payment}元】&nbsp;<span style={{float:"right",fontWeight:"normal",color:"#999999",paddingRight:"10px"}}>{(new Date($comment.paydatetime)).getFullYear()}-{(new Date($comment.paydatetime)).getMonth()+1}-{(new Date($comment.paydatetime)).getDate()}</span></div><div>{$comment.paymentreply}</div></div>;
    }

    return (
      <table style={{width:"100%",backgroundColor:"white"}}>
  			<tbody>
            <tr style={{height:"10px"}}><td colSpan="2"></td></tr>
            <tr style={{verticalAlign:"top", backgroundColor:"#ffffff"}}>
              <td userid={$comment.userid} style={{width:"50px",textAlign:"center",verticalAlign:"top"}}>
                <Img style={{width:"40px",height:"40px",borderRadius:"20px"}} src={thumbUrl+"/topuserphotos/"+photoname+".jpg"}/>
                {payment}
              </td>
              <td style={{padding:"0px"}}>
                  <table style={{width:"100%"}}><tbody>
                    <tr>
                      <td>
                        <span onTouchEnd={this.detail.bind(this,$comment.userid)} style={{color:$comment.usersex==1?"#406599":"#d46161"}}>{$comment.username}</span>
                      </td>
                      <td style={{textAlign:"right",paddingRight:"17px"}}>
                        <span style={{display:"inline-block",color:"#999999"}}>{(new Date($comment.datetime)).getFullYear()}-{(new Date($comment.datetime)).getMonth()+1}-{(new Date($comment.datetime)).getDate()}</span>
                      </td>
                    </tr>
                    <tr>
                      <td colSpan="2" style={{paddingTop:"0px",paddingRight:"5px"}}>
                        {title}
                        <span style={{color:"#222",fontSize:"14px"}}>{$comment.content}</span>
                        {paymentshow}
                      </td>
                    </tr>
                  </tbody></table>
              </td>
            </tr>
            <tr style={{height:"10px",borderBottom:"1px solid #eee"}}><td colSpan="2"></td></tr>
  		  </tbody>
      </table>
    )
  }
}