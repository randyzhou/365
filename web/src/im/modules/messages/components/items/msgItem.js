import styles from './msgItem.module.less'

const getSendTime = (msg) => {
  var Dt = new Date(msg.sendtime);
  if(!gTime) gTime = Dt;
  var DFullTime = (Dt.getMonth()+1)+'月'+Dt.getDate()+'日 '+Dt.getHours()+':'+Dt.getMinutes();
  var Dtime = Dt.getHours()+':'+Dt.getMinutes();
  var SendTime;
  var diffTime = Date.parse(Dt) - Date.parse(gTime);
  var nowTime = new Date();
  var diffNowTime = Date.parse(nowTime) - Date.parse(gTime);

  var dDate = (Dt.getMonth()+1)+'年'+(Dt.getMonth()+1)+'月'+Dt.getDate()+'日';
  var nowDate = (nowTime.getMonth()+1)+'年'+(nowTime.getMonth()+1)+'月'+nowTime.getDate()+'日';

  if(diffNowTime>8640000) DFullTime = Dt.getFullYear()+'年'+DFullTime;

  if(diffTime > 60000){
    if(dDate != nowDate){
      SendTime = <table style={{width:"100%"}}><tbody><tr><td colSpan="3" style={{textAlign:"center",color:"#999",height:"40px",verticalAlign:"bottom",fontSize:"12px"}}>{DFullTime}</td></tr></tbody></table>;
    }else{
      SendTime = <table style={{width:"100%"}}><tbody><tr><td colSpan="3" style={{textAlign:"center",color:"#999",height:"40px",verticalAlign:"bottom",fontSize:"12px"}}>{Dtime}</td></tr></tbody></table>;
    }
    gTime = Dt;
  }

  return SendTime
}

export default React.memo(props => {
  var msg = props.item;
  let SendTime = getSendTime(msg)
  let userColor = "#999";
  if(msg.usersex != 1) userColor = "red";

  return (
    <table style={{width:"100%",margin:"3px"}}><tbody><tr><td>
        {SendTime}
        <table style={{width:"100%",display:msg.userid == userid?"none":"table"}}><tbody><tr>
          <td style={{width:"45px",verticalAlign:"top"}}><Img src = {thumbUrl+"/topuserphotos/"+msg.userid+".jpg"} className="chatUserPicLeft" /></td>
          <td style={{textAlign:"left"}}>
            <div className="message">
              <div className="user"><span onClick={touchEnd.bind(this,"#/users/detail/"+msg.userid)} style={{color:userColor,fontSize:"12px"}}>{msg.username}</span></div>
              <div className="msg msgLeft" style={{marginTop:"3px",padding:"5px"}}>{msg.msg}</div>
            </div>
          </td>
          <td className="picTd"></td>
        </tr></tbody></table>

        <table style={{width:"100%",display:msg.userid == userid?"table":"none"}}><tbody><tr>
        <td className="picTd"></td>
        <td style={{textAlign:"right",verticalAlign:"top"}}>
          <div className="message">
            <div className="msg msgRight" style={{padding:"5px"}}>{msg.msg}</div>
          </div>
        </td>
        <td style={{width:"50px",textAlign:"center",verticalAlign:"top"}}><Img src = {thumbUrl+"/topuserphotos/"+msg.userid+".jpg"} className="chatUserPicRight" /></td>
        </tr></tbody></table>
    </td></tr></tbody></table>
  )
})