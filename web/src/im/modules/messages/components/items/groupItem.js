let count = 0;
export default props => {
  const showChatDiv = (toid,roomtype,e) => {
    props.showChatDiv(toid,roomtype,e);
  }

  const deleteMsg = (e) => { 
    count += 1;
    setTimeout(() => {
      if (count === 2) {
        props.deleteMsg(props.index)
      }
      count = 0;
    }, 300);
  }

  if(!props.item) return null;
  var $msg = props.item;
  var $msgType = $msg.roomtype?$msg.roomtype.toLowerCase():'';
  if($msgType == "personal") $msgType = "user";
  let $photoname = $msg.toid;

  return(
    <tr style={{height:"60px"}}>
      <td style={{width: "60px", textAlign:"center", verticalAlign:"middle"}} userid={$msg.toid}>
        <Img src={thumbUrl+"/top"+$msgType+"photos/"+$photoname+".jpg"} style={{width:"50px", height:"50px",borderRadius:"6px"}}/>
      </td>
      <td style={{borderTop:"1px #f1f1f1 solid",cursor:"pointer",lineHeight:"15px"}}>
        <table style={{width:"100%"}} onClick={e=>showChatDiv($msg.toid,$msg.roomtype,e)}><tbody>
          <tr><td><div style={{dispay:"block", whiteSpace:"nowrap", textOverflow:"ellipsis", overflow:"hidden", width:"200px", fontSize:"16px", color: $msg.tousersex!=1&&$msg.roomtype=="Personal"?"red":"black"}}><span>{$msg.tousername}</span></div></td></tr>
        </tbody></table>
        <table style={{width:"100%"}}><tbody>
          <tr><td><div style={{dispay:"block", whiteSpace:"nowrap", textOverflow:"ellipsis", overflow:"hidden", width:"200px", fontSize:"12px", color:"#aaa"}}>{$msg.msgNums>0?"["+$msg.msgNums+"条]":""}{$msg.roomtype != "Personal"?$msg.username+"："+$msg.msg:$msg.msg}</div></td></tr>
        </tbody></table>
        <table style={{width:"100%"}}><tbody>
          <tr><td><div style={{dispay:"block", whiteSpace:"nowrap", textOverflow:"ellipsis", overflow:"hidden", width:"200px", fontSize:"12px", color:"darkgreen"}}>{$msg.newestmsg}</div></td></tr>
        </tbody></table>
      </td>
      <td style={{borderTop:"1px #f1f1f1 solid",width:"40px",verticalAlign:"middle", fontSize:"12px", color:"#999"}} onClick={e=>deleteMsg(e)}>
        {(new Date($msg.sendtime)).getHours()}:{(new Date($msg.sendtime)).getMinutes()}
      </td>
    </tr>  
  )
}