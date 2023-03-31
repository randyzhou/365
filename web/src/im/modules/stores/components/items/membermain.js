export default class MemberMainItem extends React.Component{
  handletouchend(id){
    var url = "/user/joinstore?userid="+id;
    fetchApi({
      url
    },function(res){     
      if(res.status == 200){
        socket.emit("sys",{command:"joinroom", type:"Store", toid:id, roomid:"Store"+res.storeid});
      }
      resultAlert(res);
    });
  }

  detail = (event) => {
    backurl_user = this.props.backurl;
    touchEnd("#/users/detail/"+this.props.item.userid);
  }

  render(){
    var $user = this.props.item;
    var userAgeColor = $user.usersex==1?"black":"red";
    var $date = !$user.userbirthday?null:$user.userbirthday.replace(/\-/g, "/");
    let photoname = $user.avatar?$user.avatar:$user.userid;

    return (
      <td>
        <table id={$user.userid} style={{width:"90px",border:"0px",marginTop:"0px",marginBottom:"1px",backgroundColor:"white"}}>
          <tbody>
            <tr style={{height:"100px", margin:"3px"}}>
              <td className="userLogoTd" style={{width: "85px", verticalAlign:"middle", paddingLeft:"5px"}} userid={$user.userid}>
                <Img onTouchEnd={this.detail} src={thumbUrl+"/topuserphotos/"+photoname+".jpg"} style={{width:"85px", height:"85px",borderRadius:"6px"}} />
              </td>
            </tr>
            <tr>  
              <td style={{textAlign:"center",verticalAlign:"top",height:"25px"}}>
                <span onTouchEnd={this.detail} style={{color:userAgeColor,fontWeight:"bold",fontSize:"16px"}}>{$user.username}</span>
              </td>
            </tr>
            <tr>  
              <td style={{textAlign:"center",verticalAlign:"top",height:"20px"}}>
                {this.props.certified[$user.certified]}{!$user.nickname||"-"}{$user.nickname}
              </td>
            </tr>
          </tbody>
        </table>
      </td>  
    )
  }
}