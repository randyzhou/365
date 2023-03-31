export default class FriendItem extends React.Component {
  constructor(props) {
    super(props);
  }
  detail = (event) => {
    backurl_user = this.props.backurl;
    touchEnd("#/users/detail/"+this.props.item.userid);
  }
  render(){
    if(!this.props.item) return null;
    let obj = this.props.item;
    var $date = !obj.userbirthday?null:obj.userbirthday.replace(/\-/g, "/");    
    let intro = obj.intro?obj.intro.replace(/<\/?.+?>/g,"").replace(/&nbsp;/ig,"").replace(/&lt;BR&gt;/ig,""):obj.intro;
    let content = obj.content?obj.content.replace(/<\/?.+?>/g,"").replace(/&nbsp;/ig,"").replace(/&lt;BR&gt;/ig,""):obj.content;
    let color = obj.usersex == 1?'dimgray':"tomato";
    let occupation = obj.occupation?obj.occupation.replace(/<\/?.+?>/g,"").replace(/&nbsp;/ig,"").replace(/&lt;BR&gt;/ig,""):obj.occupation;  
    let duty = obj.duty?obj.duty.replace(/<\/?.+?>/g,"").replace(/&nbsp;/ig,"").replace(/&lt;BR&gt;/ig,""):obj.duty;  
    let photoname = obj.avatar?obj.avatar:obj.userid;

    let dist = "";
    if(latitude_reg && longitude_reg && obj.latitude_reg && obj.longitude_reg){
      let dist_reg = getGreatCircleDistance(latitude_reg,longitude_reg,obj.latitude_reg,obj.longitude_reg);
      dist = "（距离"+dist_reg+"米）";
    }

    return (
        <table style={{ width:this.props.phoneWidth }}><tbody>
          <tr>
            <td style={{paddingLeft:"5px", paddingTop:"5px", paddingBottom:"0px", color: color, fontSize: 18, borderBottom: '1px solid #F6F6F6'}}>
              <table style={{width:"100%"}}><tbody><tr>  
              <td style={{width:'50px', verticalAlign:"top"}}>
                <img style={{width: '40px', height: '40px', borderRadius:"20px"}} src={thumbUrl+'/topuserphotos/'+photoname+'.jpg'}/>
              </td>
              <td style={{verticalAlign:"top"}}>
                <div style={{maxWidth:"350px", whiteSpace:"nowrap", textOverflow:"ellipsis", overflow:"hidden"}}>
                  <span onTouchEnd={this.detail} style={{fontSize:"16px"}}>{obj.username.slice(0,5)}</span>
                  <br/>
                  <span style={{color:"#999",fontSize:"12px"}}>{(new Date()).getFullYear() - (new Date($date)).getFullYear()+1}岁
                  {!obj.education||"-"}{obj.education}{!occupation||"-"}{occupation}{!duty||"-"}{duty?duty.slice(0,6):''}{!obj.marry||"-"}{obj.marry}{!obj.lookingfor||"-"}{obj.lookingfor}-{obj.friend_amount}元</span>   
                </div>
              </td></tr></tbody></table>
            </td>
          </tr>
          <tr>
            <td style={{verticalAlign:"top"}}>
              <table style={{width:"100%",height:"100%"}}><tbody>
                <tr>
                  <td style={{verticalAlign:"top",padding:"5px"}}>
                    <div style={{wordBreak:"break-all",fontSize:"16px",maxWidth:"100%"}}>{intro}</div>
                    <div style={{wordBreak:"break-all",color:"#666"}}>{obj.retweet_username}推荐：{content}</div>
                  </td>
                </tr>
                <tr style={{height:"35px"}}><td>
                  <table style={{width:"100%",height:"35px"}}><tbody>
                    <tr style={{height:"35px"}}>
                      <td style={{textAlign:"left",color:"#999",fontSize:"12px"}}>
                        <span style={{marginLeft:"5px"}}>{obj.workprovince}{obj.workcity}{obj.workdistrict}{obj.worktown}{obj.workstreet}</span>
                        <span>{dist}</span>
                      </td>
                    </tr>
                  </tbody></table>
                </td></tr>
              </tbody></table>
            </td>
          </tr>
          <tr style={{backgroundColor: '#F5F5F9',height: 8,borderTop: '1px solid #ECECED',borderBottom: '1px solid #ECECED',}}><td colSpan="2"></td></tr>
        </tbody></table>
    )
  }
}