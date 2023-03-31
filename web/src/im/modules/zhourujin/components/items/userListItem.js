export default class UserListItem extends React.Component {
  constructor(props) {
    super(props);
  }
  resetPassword(userid){
    this.props.methods.resetPassword(userid);
  }
  render(){
    if(!this.props.item) return null;
    let obj = this.props.item;
    var $date = !obj.userbirthday?null:obj.userbirthday.replace(/\-/g, "/");    
    let intro = obj.intro?obj.intro.replace(/<\/?.+?>/g,"").replace(/&nbsp;/ig,"").replace(/&lt;BR&gt;/ig,""):obj.intro;
    let color = obj.usersex == 1?'dimgray':"tomato";
    let occupation = obj.occupation?obj.occupation.replace(/<\/?.+?>/g,"").replace(/&nbsp;/ig,"").replace(/&lt;BR&gt;/ig,""):obj.occupation;  
    let duty = obj.duty?obj.duty.replace(/<\/?.+?>/g,"").replace(/&nbsp;/ig,"").replace(/&lt;BR&gt;/ig,""):obj.duty;  
    let photoname = obj.avatar?obj.avatar:obj.userid;
    return (
        <table style={{ width:"100%",height:"100%" }}><tbody>
          <tr style={{height:"40px"}}>
            <td colSpan="2" style={{paddingLeft:"5px", lineHeight: '40px', color: color, fontSize: 18, borderBottom: '1px solid #F6F6F6'}}>
              <table style={{width:"100%"}}><tbody><tr><td>
              <span onTouchEnd={touchEnd.bind(this,'#/users/detail/'+obj.userid)}>{obj.username}</span>
              <span style={{color:"#999",fontSize:"12px"}}>-{(new Date()).getFullYear() - (new Date($date)).getFullYear()+1}岁
              {!obj.education||"-"}{obj.education}{!occupation||"-"}{occupation}{!duty||"-"}{duty}{!obj.marry||"-"}{obj.marry}</span>            
            </td>
            <td style={{width:"60px"}} onTouchEnd={this.resetPassword.bind(this,obj.userid)}>恢复密码</td>
            </tr></tbody></table>
            </td>
          </tr>
          <tr>
            <td style={{width:'64px', padding:'5px', verticalAlign:"top"}}>
              <img style={{width: '64px', height: '64px'}} src={thumbUrl+'/topuserphotos/'+photoname+'.jpg'}/>
            </td>
            <td style={{verticalAlign:"top"}}>
              <table style={{width:"100%",height:"100%"}}><tbody>
                <tr>
                  <td style={{verticalAlign:"top"}}><div style={{wordBreak:"break-all",marginRight:"5px"}}>{intro}</div></td>
                </tr>
                <tr style={{height:"35px"}}><td>
                  <table style={{width:"100%",height:"35px"}}><tbody>
                    <tr style={{height:"35px"}}>
                      <td style={{textAlign:"left",color:"#999",fontSize:"12px"}}>{obj.workprovince}{obj.workcity}{obj.workdistrict}{obj.worktown}</td>
                      <td style={{textAlign:"right",color:"#999",fontSize:"12px"}}><span style={{marginRight:"14px"}}>{obj.lookingfor}</span></td>
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