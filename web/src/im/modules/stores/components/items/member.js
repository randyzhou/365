export default class MemberItem extends React.Component{
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
    let $shop = this.props.params.shop;
    var userAgeColor = $user.usersex==1?"black":"red";
    var $date = !$user.userbirthday?null:$user.userbirthday.replace(/\-/g, "/");
    let photoname = $user.avatar?$user.avatar:$user.userid;
    let dist = "";
    if($shop.latitude && $shop.longitude && $user.latitude_reg && $user.longitude_reg){
      let dist_reg = getGreatCircleDistance($shop.latitude,$shop.longitude,$user.latitude_reg,$user.longitude_reg);
      dist = "距离店铺："+dist_reg+"米";
    }

    return (
      <table id={$user.userid} style={{width:"100%",border:"0px",marginTop:"0px",marginBottom:"1px",backgroundColor:"white"}}>
        <tbody>
        	<tr style={{height:"70px", margin:"3px"}}>
        		<td className="userLogoTd" style={{width: "65px", verticalAlign:"middle", paddingLeft:"5px"}} userid={$user.userid}>
              <div style={{height:"5px"}}></div>
              <Img onTouchEnd={touchEnd.bind(this,"#/users/detail/"+$user.userid)} src={thumbUrl+"/topuserphotos/"+photoname+".jpg"} style={{width:"65px", height:"65px",borderRadius:"6px"}} />
            </td>
        		<td className="content" style={{border:"0px red solid",verticalAlign:"top",lineHeight:"15px"}}>
              <div style={{height:"5px"}}></div>
              <table style={{width:"100%"}}><tbody>
              <tr><td>
                <span onTouchEnd={this.detail} style={{color:userAgeColor,fontWeight:"bold",fontSize:"16px"}}>{$user.username}</span>
                <span style={{fontSize:"12px"}}>-{this.props.params.certified[$user.certified||'1']}{!$user.nickname||"-"}{$user.nickname}</span>
              </td></tr></tbody></table>
              <table style={{width:"100%"}}><tbody><tr><td style={{wordBreak:"break-all"}}>
                <span style={{color:"#999"}}></span>{(new Date()).getFullYear() - (new Date($date)).getFullYear()+1}岁
                {!$user.education||"-"}{$user.education}{!$user.occupation||"-"}{$user.occupation}{!$user.duty||"-"}{$user.duty}{!$user.marry||"-"}{$user.marry}<span style={{color:"#999"}}></span>
              </td></tr></tbody></table>
              <table style={{width:"100%"}}><tbody><tr>
                <td style={{wordBreak:"break-all",color:"darkgreen",fontWeight:"bolder"}}>
                  {$user.newestmsg}
                </td>
              </tr></tbody></table>
              <span>{dist}</span>
        		</td>
            <td style={{widht:"4px",verticalAlign:"middle",textAlign:"right",paddingRight:"10px",cursor:"pointer"}}>
            </td>
        	</tr>
        </tbody>
      </table>
    )
  }
}