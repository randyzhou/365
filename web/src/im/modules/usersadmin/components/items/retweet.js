export default class RetweetItem extends React.Component{
  detail = (event) => {
    backurl_user = this.props.backurl;
    touchEnd("#/users/retweet/"+this.props.item.retweetid);
  }
  render(){
    var $retweet = this.props.item;
    return (
      <table style={{borderBottom:"1px #eee solid",width:"100%"}}>
  			<tbody>
          <tr style={{verticalAlign:"top", backgroundColor:"#ffffff"}}>
            <td style={{padding:"0px"}}>
              <table style={{width:"100%"}}><tbody>
                <tr><td style={{paddingTop:"0px",textAlign:"center"}}>
                  <table style={{width:"100%"}}><tbody>
                    <tr>
                      <td>
                        <div style={{width:"100%",height:"30px",lineHeight:"30px",textAlign:"left",paddingLeft:"5px",fontSize:"16px"}}>
                          <span onTouchEnd={this.detail}>{$retweet.title}</span>
                        </div>
                        <div style={{height:"20px",textAlign:"left",paddingLeft:"5px",fontSize:"14px",color:"rgb(200,200,200)"}}>
                          <span onTouchEnd={this.detail}>[推荐评论：{$retweet.content}]</span>
                        </div>
                      </td>
                    </tr>
                  </tbody></table>
                  <table style={{width:"100%"}}><tbody>
                    <tr>
                      <td style={{height:"25px",lineHeight:"25px"}}>
                        <span style={{color:"#aaa"}} onTouchEnd={this.detail}>
                          <span style={{textAlign:"center",margin:"5px"}}>{$retweet.owner_name}</span>
                          <span style={{textAlign:"center",margin:"5px"}}>{$retweet.comments}评论</span>
                        </span>
                      </td>
                    </tr>
                  </tbody></table>
                  <table style={{width:"100%"}}><tbody>
                    <tr>
                      <td style={{verticalAlign:"middle", fontSize:"12px", color:"#999", textAlign:"center"}} onTouchEnd={this.props.methods.handleDelete.bind(this,$retweet.retweetid,this.props.index)}>
                        <span style={{background:"url(image/icon_new.jpg) no-repeat -195px -111px",display:"inline-block",width:"20px",height:"20px"}}></span>
                      </td>
                      <td style={{height:"25px",lineHeight:"25px",textAlign:"right"}}>
                        <span style={{color:"#aaa"}}>
                          <span>{$retweet.retweet_create_time}</span>
                        </span>
                      </td>
                    </tr>
                  </tbody></table>
                </td></tr>
              </tbody></table>
            </td>
          </tr>
  		  </tbody>
      </table>      
    )
  }
}