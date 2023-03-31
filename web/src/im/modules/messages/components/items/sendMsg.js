import styles from './sendMsg.module.less';

export default React.memo(props => {
  const [msg, setMsg] = React.useState('')

  const handleMsgChange = (e) => {
    e.stopPropagation();
    let msg = e.target.value;
    let pos = e.target.value.indexOf("\n");
    if(pos>=0) msg = "";
    setMsg(msg);
  }

  const keyDown = (e) => {
    e.stopPropagation();
    let int_keycode = e.charCode || e.keyCode;
    if(int_keycode == 13){
      sendMsgMethod(e);
      e.stopPropagation();
      return false;
    }
  }
  
  const sendMsgMethod = (e) => {
    e.stopPropagation();
    if(msg == ""){
      return false;
    }
    let obj = props.chatObj;
    obj.readState = 1;
    obj.msg = msg;

    socket.emit('message',obj);
    let url;
    if(obj.roomtype == "Personal"){
      url = Config.api+'chat/sendprivatechatdata';
    }else{
      url = Config.api+'chat/sendpublicchatdata';
    }
    fetchApi({
      url,
      method: 'POST',
      body: obj
    },function(res){
      if (res.results == 1) {
      }
    });

    setMsg('');
  }

  return(
    <table className={styles.msgInput}><tbody><tr>
      <td style={{width:"30px",textAlign:"center"}}><img src="image/v.jpg" style={{width:"22px"}}/></td>
      <td style={{textAlign:"center"}}>
        <input type="text" style={{width:"99%",maxWidth:"99%",height:"27px",borderRadius:"5px",backgroundColor:"#fff",border:"0px"}} value={msg} onChange={handleMsgChange} onKeyDown={keyDown}/>
      </td>
      <td style={{width:"28px",textAlign:"center"}}>
        <img src="image/smile.jpg" style={{width:"28px"}}/>
      </td>
      <td style={{width:"28px",textAlign:"center",display:msg.length > 0?"none":"table-cell"}}>
        <img src="image/plus.jpg" style={{width:"28px"}}/>
      </td>
      <td style={{width:"60px",textAlign:"center",display:msg.length > 0?"table-cell":"none"}}>
        <div style={{border:"1px solid #ccc",backgroundColor:"#11a111",color:"white",textAlign:"center",width:"40px",padding:"5px",margin:"0 auto",borderRadius:"3px"}} onTouchEnd={sendMsgMethod}>发送</div>
      </td>
    </tr></tbody></table>
  )

})
