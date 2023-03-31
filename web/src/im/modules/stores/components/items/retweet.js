export default class RetweetItem extends React.Component{
  detail = (event) => {
    backurl_store = this.props.backurl;
    touchEnd("#/stores/retweet/"+this.props.item.retweetid);
  }
  render(){
    var $retweet = this.props.item;
    let photoname = $retweet.id;
    // if($retweet.avatar){
    //   let $avatar = JSON.parse($retweet.avatar);
    //   photoname = $avatar[0];
    //   if(typeof(photoname) == "object") photoname = photoname[1];
    // }
    var img = thumbUrl+"/topproductphotos/"+photoname+".jpg";
    return (
      <table style={{borderBottom:"1px #eee solid",width:"100%"}}>
  			<tbody>
            <tr style={{verticalAlign:"top", backgroundColor:"#ffffff"}}>
                <td style={{padding:"0px"}}>
                    <table style={{width:"100%"}}>
                        <tbody>
                        <tr><td style={{paddingTop:"0px",textAlign:"center"}}>
                          <table style={{width:"100%"}}><tbody>
                            <tr>
                                <td>
                                    <div style={{width:"100%",height:"30px",lineHeight:"30px",textAlign:"left",paddingLeft:"5px",fontSize:"16px"}}>
                                      <span onTouchEnd={this.detail}>{$retweet.title}</span>
                                      <span style={{color:'green',float:"right",marginRight:"10px"}}>{$retweet.price}元</span>
                                    </div>
                                    <div style={{height:"20px",textAlign:"left",paddingLeft:"5px",paddingBottom:"5px",fontSize:"14px",color:"rgb(200,200,200)"}}>
                                      <span>[<span style={{color:"#406599"}} onTouchEnd={this.detail}>{$retweet.username}</span> <span style={{color:"darkblue"}}>荐评：</span><span style={{display:"inline-block",color:"#666"}}>{$retweet.content}]</span></span>
                                    </div>
                                </td>
                            </tr>
                          </tbody></table>
                          <table style={{width:"100%"}}><tbody>
                            <tr>
                              <td style={{textAlign:"center"}}>
                                <img src={img} style={{width:"100%"}}/>
                              </td>
                            </tr>
                          </tbody></table>
                          <table style={{width:"100%"}}><tbody>
                            <tr>
                                <td style={{height:"25px",lineHeight:"25px"}}>
                                    <span style={{color:"#aaa"}} onTouchEnd={this.detail}>
                                        <span style={{textAlign:"center",marginLeft:"4px"}}>{$retweet.owner_name}</span>
                                        <span style={{textAlign:"center",margin:"5px"}}>{$retweet.comments}评论</span>
                                        <span>{$retweet.datetime}</span>
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