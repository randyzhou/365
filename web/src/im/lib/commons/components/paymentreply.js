export default class Paymentreply extends React.Component{
  constructor(props){
    super(props);
    this.state = {
      
    }
  }

  render() {
    return (
          <div style={{zIndex:"10000000000", display:this.props.paymentShow,zIndex:"10000",position:"fixed",bottom:"0px",textAlign:"center",padding:"0px",width:"100%",backgroundColor:"#ccc"}}>
            <div style={{width:"100%",height:"40px",lineHeight:"40px",backgroundColor:"darkseagreen"}}>
              <span style={{marginRight:"10px"}}>奖励该建议</span>
              <input type="number"maxlength="5" style={{width:"60px",height:"20px"}} value={this.props.payment} onChange={this.props.handleChangePayment}/>
              元
            </div>  
            <div>
              <textarea style={{width:"97%",height:"150px"}} placeholder="回复该建议" value={this.props.paymentReply} onChange={this.props.handleChangePaymentReply}></textarea>
            </div>  
            <div style={{width:"100%",height:"30px",lineHeight:"30px",textAlign:"center"}}>
              <table><tbody><tr><td></td>
                <td style={{width:"40px"}}>
                  <span style={{display:"inline-block",color:"darkgreen",height:"30px",lineHeight:"30px",textAlign:"center",width:"100%"}} onTouchEnd={this.props.hidePayment}>取消</span>
                </td>
                <td style={{width:"40px"}}>
                  <span style={{display:"inline-block",color:"darkgreen",height:"30px",lineHeight:"30px",textAlign:"center",width:"100%"}} onTouchEnd={this.props.sendPayment}>提交</span>
                </td>
              </tr></tbody></table>
            </div>
          </div>
    );

  }
}