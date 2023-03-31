export default class Actjoin extends React.Component{
  constructor(props){
    super(props);
    this.state = {
      
    }
  }

  render() {
    return (
        <div style={{zIndex:"1000000000",display:this.props.showActJoinDiv,position:"fixed",bottom:"0px",left:"0px",textAlign:"center",padding:"0px",width:"100%",backgroundColor:"white",border:"1px #ccc solid"}}>
          <div style={{width:"100%",textAlign:"center",fontSize:"20px",height:"40px",lineHeight:"40px",backgroundColor:"darkseagreen",color:"white"}}>{this.props.act_title}</div>
          <div style={{width:"100%",textAlign:"left",height:"30px",lineHeight:"30px"}}><span style={{marginLeft:"5px"}}>报名人：{this.props.username}</span></div>
          <div style={{height:"40px",borderBottom:"#ccc 1px solid"}}>
            <input maxlength="20" style={{width:"97%",height:"30px"}} placeholder="报名留言(不超过20字)" value={this.props.msg} onChange={this.props.handleChangeMsg}/>
          </div>
          <div>
          <table><tbody><tr><td></td>
            <td style={{width:"40px"}}>
              <span style={{display:"inline-block",color:"darkgreen",height:"30px",lineHeight:"30px",textAlign:"center",width:"100%"}} onTouchEnd={this.props.showActJoin}>取消</span>
            </td>
            <td style={{width:"40px"}}>
              <span style={{display:"inline-block",color:"darkgreen",height:"30px",lineHeight:"30px",textAlign:"center",width:"100%"}} onTouchEnd={this.props.actJoin.bind(this,this.props.id)}>发送</span>
            </td>
          </tr></tbody></table>
          </div>  
        </div>
    );

  }
}