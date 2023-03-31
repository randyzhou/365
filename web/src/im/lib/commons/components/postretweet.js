export default class Postretweet extends React.Component{
  constructor(props){
    super(props);
    this.state = {
      
    }
  }

  render() {
    return (
        <div style={{display:this.props.showRetweetDiv,position:"fixed",zIndex:"100000",position:"fixed",bottom:"0px",left:"0px",textAlign:"center",padding:"0px",width:"100%",backgroundColor:"#ccc"}}>
          <div style={{height:"10px"}}></div>
          <table><tbody><tr>
          <td style={{width:"5px"}}></td>
          <td>
            <div style={{height:"10px"}}></div>
            <div>
              <textarea style={{width:"98%",height:"150px"}} placeholder="评论内容" value={this.props.retweetcontent} onChange={this.props.handleChangeRetweetContent}></textarea>
            </div>
            <table><tbody><tr><td></td>
                <td style={{width:"40px"}}>
                    <span style={{display:"inline-block",color:"darkgreen",height:"30px",lineHeight:"30px",textAlign:"center",width:"100%"}} onTouchEnd={this.props.hidePostRetweet}>取消</span>
                </td>
                <td style={{width:"40px"}}>
                    <span style={{display:"inline-block",color:"darkgreen",height:"30px",lineHeight:"30px",textAlign:"center",width:"100%"}} onTouchEnd={this.props.sendRetweet}>提交</span>
                </td>
            </tr></tbody></table>
          </td>
          <td style={{width:"5px"}}></td>
          </tr></tbody></table>
        </div>   
    );

  }
}