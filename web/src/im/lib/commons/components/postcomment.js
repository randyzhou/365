export default class Postcomment extends React.Component{
  constructor(props){
    super(props);
    this.state = {
      
    }
  }

  render() {
    return (
        <div style={{display:this.props.showPostCommentsDiv,zIndex:"100000",position:"fixed",bottom:"0px",left:"0px",textAlign:"center",padding:"0px",width:"100%",backgroundColor:"#ccc"}}>
            <table style={{width:"100%"}}><tbody>
                <tr style={{height:"35px",backgroundColor:"white",border:"1px #ccc solid",borderBottom:"none"}}><td>
                    <input maxlength="20" style={{width:"98%",height:"35px",border:"0px"}} placeholder="标题" value={this.props.title} onChange={this.props.handleChangeTitle}/>
                </td></tr>
                <tr style={{height:"150px",backgroundColor:"white",border:"1px #ccc solid"}}><td>
                    <textarea style={{width:"98%",height:"150px",border:"0px"}} placeholder="评论内容" value={this.props.content} onChange={this.props.handleChangeContent}></textarea>
                </td></tr>
                <tr><td>
                <table><tbody><tr><td></td>
                    <td style={{width:"40px"}}>
                        <span style={{display:"inline-block",color:"darkgreen",height:"30px",lineHeight:"30px",textAlign:"center",width:"100%"}} onTouchEnd={this.props.hidePostComments}>取消</span>
                    </td>
                    <td style={{width:"40px"}}>
                        <span style={{display:"inline-block",color:"darkgreen",height:"30px",lineHeight:"30px",textAlign:"center",width:"100%"}} onTouchEnd={this.props.sendComment}>提交</span>
                    </td>
                </tr></tbody></table>
            </td>
            </tr></tbody></table>
        </div>
    );

  }
}