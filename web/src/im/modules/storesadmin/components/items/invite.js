export default class AdmininviteItem extends React.Component{
  constructor(props){
    super(props);
  }

  joinStore=(id,join_amount)=>{
    this.props.methods.joinStore(id,join_amount,this.props.itemIndex);
  }

  render() {
    var $user = this.props.item;
    let $shop = this.props.methods.shop;
    var Style = {
    	divRow:{margin:"3px"},
    	userLogoTd: { width: "60px", verticalAlign:"middle" },
    	userLogo: {width:"60px", height:"60px",borderRadius:"6px"}
    };
    var userAgeColor = $user.usersex==1?"black":"red";
    var $date = !$user.userbirthday?null:$user.userbirthday.replace(/\-/g, "/");
    let photoname = $user.avatar?$user.avatar:$user.userid;

    let dist = "";
    if($shop.latitude && $shop.longitude && $user.latitude_reg && $user.longitude_reg){
      let dist_reg = getGreatCircleDistance($shop.latitude,$shop.longitude,$user.latitude_reg,$user.longitude_reg);
      dist = "距离店铺："+dist_reg+"米";
    }

    return (
      <table id={$user.userid} style={{width:"100%",border:"0px",marginTop:"3px",marginBottom:"10px",backgroundColor:"white"}}>
        <tbody>
        	<tr style={Style.divRow}>
        		<td className="userLogoTd" style={Style.userLogoTd} userid={$user.userid}>
              <Img onTouchEnd={touchEnd.bind(this,"#/users/detail/"+$user.userid)} src={thumbUrl+"/topuserphotos/"+photoname+".jpg"} style={Style.userLogo} />
            </td>
        		<td className="content" style={{border:"0px red solid",verticalAlign:"top"}}>
        					<table style={{width:"100%"}}><tbody>
                  <tr><td>
        						<span onTouchEnd={touchEnd.bind(this,"#/users/detail/"+$user.userid)} style={{color:userAgeColor,fontWeight:"bold",fontSize:"16px"}}>{$user.username}</span>
                  </td></tr></tbody></table>
      			    	<table style={{width:"100%"}}><tbody><tr><td style={{wordBreak:"break-all"}}>
                    <span style={{color:"#999"}}></span>{(new Date()).getFullYear() - (new Date($date)).getFullYear()+1}岁
                    {!$user.education||"-"}{$user.education}{!$user.occupation||"-"}{$user.occupation}{!$user.marry||"-"}{$user.marry}<span style={{color:"#999"}}></span>
                    {!$user.duty||","}{$user.duty}
      			    	</td></tr></tbody></table>
      			    	<table style={{width:"100%"}}><tbody><tr><td style={{wordBreak:"break-all"}}>
                    <span style={{color:"darkgreen",fontWeight:"borlder"}}>{$user.newestmsg}</span>
      			    	</td></tr></tbody></table>
                  <span>{dist}</span>
        		</td>
            <td style={{widht:"40px",verticalAlign:"middle",textAlign:"right",paddingRight:"10px",cursor:"pointer"}}>
              <div>({$user.join_amount}元)</div>
              <div><
                input type="radio" onTouchEnd={this.joinStore.bind(this,$user.userid,$user.join_amount)} style={{width:"20px",height:"20px"}}/>
              </div>
            </td>
        	</tr>
        </tbody>
      </table>
    )
  }
}