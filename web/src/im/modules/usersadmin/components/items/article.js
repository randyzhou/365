export default class AdminarticleItem extends React.Component{
  constructor(props){
    super(props);
  }

  deleteItem(id){
    this.props.methods.deleteItem(id);
  }

  showPostDiv(obj){
    this.props.methods.showPostDiv(obj);
  }

  render(){
    var $article = this.props.item;
    var title = null;
    if($article.title){
      title = <div style={{fontWeight:"bolder",fontSize:"14px"}}>{$article.title}</div>;
    }

    let $avatars = [];
    let avatar = $article.avatar;
    if(avatar && avatar.indexOf("[") > -1){
      $avatars = JSON.parse(avatar);
    }else{
      $avatars.push(avatar);
    }

    var imgList = !$avatars?null:$avatars.map(function(Avatar,index){
      let avatar_title = '';
      if(typeof(Avatar) == "object" && Avatar != null){
        avatar_title = Avatar[0];
        avatar = Avatar[1];
      }else{
        avatar = Avatar;
      }
      return(
        <div style={{width:"100%"}}>
          <div style={{textAlign:"left",paddingLeft:"5px"}}>{avatar_title}</div>
          <img id="userImg" src={photoUrl+"/articlephotos/"+avatar+".jpg"} style={{width:this.props.phoneWidth, width:"100%"}}/>
        </div>
      )
    }.bind(this))

    return (
      <table style={{marginBottom:"10px",border:"1px #eee solid",borderRadius:"5px",width:"100%"}}>
  			<tbody>
            <tr style={{verticalAlign:"top", backgroundColor:"#ffffff"}}>
                <td style={{padding:"0px"}}>
                    <table style={{width:"100%"}}>
                        <tbody>
                        <tr><td style={{paddingTop:"0px",textAlign:"center"}}>
                          <div>{title}</div>
                          <div>[{$article.owner_name} {$article.username}]</div>
                          <div style={{color:"#999999"}}>创建日期：{$article.create_time}</div>
                          <div style={{padding:"5px",textAlign:"left"}}>{$article.content}</div>
                          <div style={{width:"100%",textAlign:"left"}}>{imgList}</div>
                          <div style={{padding:"5px",paddingTop:"0px"}}>
                            <span style={{float:"left"}}>修改日期：{$article.update_time}</span>
                            <span style={{float:"right"}}>
                              <span onTouchEnd={this.deleteItem.bind(this,$article.id)} style={{background:"url(image/icon_new.jpg) no-repeat -195px -111px",display:"inline-block",width:"20px",height:"20px"}}></span>
                                &nbsp;&nbsp;
                              <span onTouchEnd={this.showPostDiv.bind(this,$article)} style={{background:"url(image/icon_new.jpg) no-repeat -217px -178px",display:"inline-block",width:"20px",height:"20px"}}></span>
                            </span>
                          </div>
                        </td></tr>
                    </tbody></table>
                </td>
            </tr>
  		  </tbody>
      </table>
    )
  }
}