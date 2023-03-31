export default props => {
  const [newestmsg, setNewestmsg] = React.useState('')

  const sendAll = () => {
    if(!newestmsg){
      return false
    }    
    if(newestmsg.length > 20){
      alert("字数超过20个汉字")
      return false;
    }
    let url = Config.api + "user/updatenewestmsg";
    if(!!props.show.toid && typeof(props.show.toid) === "number"){
      url = Config.api + "shop/updatenewestmsg?id="+props.show.toid;
    }
    fetchApi({
      url,
      method: 'POST',
      body: {newestmsg}
    },function(res){
      resultAlert(res);
      if(res.result == "2"){
      }
    })
    setNewestmsg('')
    props.showSendAll()
  }

  const handleChangeNewestmsg = (event) => {
    setNewestmsg(event.target.value)
  }

  const showSendAll = () => {
    setNewestmsg('')
    props.showSendAll()
  }

  return(
    <div style={{display:props.show.show?'block':'none',zIndex:"100000",position:"fixed",bottom:"0px",left:"0px",textAlign:"center",padding:"0px",width:"100%",backgroundColor:"#ccc"}}>
      <table><tbody>
        <tr><td>
          <input maxLength="20" style={{width:"100%",height:"35px"}} placeholder="群发消息(不超过20个汉字)" value={newestmsg} onChange={handleChangeNewestmsg}/>
        </td></tr>
        <tr><td style={{width:"100%",height:"30px",lineHeight:"30px",textAlign:"center"}}>
          <table><tbody><tr>
            <td></td>
            <td style={{width:"40px"}}><span style={{color:"darkgreen"}} onClick={showSendAll}>取消</span></td>
            <td style={{width:"40px"}}><span style={{color:"darkgreen"}} onClick={sendAll}>群发</span></td>
          </tr></tbody></table>  
        </td></tr>
      </tbody></table>
    </div>  
  )

}
