import MsgItem from "./msgItem";
import SendMsg from "./sendMsg";

export default React.memo(props => {
  const [nums,setNums] = React.useState(30)
  const [scrollHeight,setScrollHeight] = React.useState(0)

  React.useEffect(()=>{
    $("#msglog").scrollTop($("#msg")[0].scrollHeight);
  },[props])

  const detail = () => {
    let obj = {};
    if(props.chatObj.roomtype){
      let roomtype = props.chatObj.roomtype.toLowerCase()+"s";
      if(roomtype == "personals") roomtype = "users";
      let toid = props.chatObj.toid
      obj = {roomtype,toid};
    }

    if(obj.roomtype == "users" || obj.roomtype == "stores"){
      if(obj.roomtype == "users") backurl_user = "#/messages/list?toid="+obj.toid+"&roomtype=Personal";
      if(obj.roomtype == "stores") backurl_store = "#/messages/list?toid="+obj.toid+"&roomtype=Store";
      let src = "#/"+obj.roomtype+"/main/"+obj.toid
      touchEnd(src);
    }
  }

  const handleScroll = (e) => {
    if (nums <= props.msgLists.length && e.target.scrollTop === 0) {

      let scrollHeight1 = e.target.scrollHeight;
      let scrollTop = scrollHeight1 - scrollHeight

      setTimeout(()=>{
        setNums(nums + 30)
        setScrollHeight(scrollHeight1)
        $("#msglog").scrollTop(scrollTop+10)
      },1000)
    }
  }

  return(
    <table style={{width:"100%",height:"100%"}}>
    <tbody>
      <tr><td style={{height:"40px",backgroundColor:"#ededed",color:"#333",fontSize:"16px"}}>
        <table style={{width:'100%',textAlign:'center',marginTop:'0px'}}><tbody>
          <tr style={{height:'35px',lineHeight:'35px',textAlign:"center"}}>
            <td style={{textAlign:"left"}}>
                <table><tbody><tr>
                  <td style={{width:"45px"}} onTouchEnd={props.hideDetailDiv}><Icon type={'left'} style={{width:"40px",height:"30px",float:"left",marginTop:"2px"}}/></td>
                  <td>
                    <div style={{maxWidth:"250px",textAlign:"left",overflow:"hidden",whiteSpace:"nowrap",textOverflow:"ellipsis"}}>
                      <div style={{height:"30px",fontSize:"16px"}}>
                        <span>{props.chatObj.tousername}</span>
                        {props.chatObj.roomtype != "Personal"?<span onTouchEnd={e=>props.showSendAll(parseInt(props.chatObj.toid))}><Icon type={'down'} style={{height:"15px"}}/></span>:null}
                      </div>
                      {props.chatObj.newestmsg?<div style={{height:"15px",lineHeight:"15px",fontSize:"12px",color:"darkgreen"}}>{props.chatObj.newestmsg}</div>:null}
                    </div>  
                  </td>
                </tr></tbody></table>  
            </td>
            <td style={{width:"36px",textAlign:"center"}} onTouchEnd={detail}>
              <Icon type={'ellipsis'} style={{width:"35px",fontSize:"12px",marginTop:"3px"}}/>
            </td>
          </tr>
        </tbody></table>
      </td></tr>
      <tr><td style={{verticalAlign:"top",backgroundColor:"#ededed"}}>
        <div id="msglog" style={{width:"100%",height:"100%",overflowY:"auto"}} onScroll={e=>handleScroll(e)}>
          <div id="msg" style={{height:"100%"}}>
            {!!props.msgLists && props.msgLists.map(function (item,index) {
              if(index < props.msgLists.length - nums) return null
              return (
                <MsgItem key={index} item={item||{}}/>
              );
            })}
            {!!props.msgListsNew && props.msgListsNew.map(function (item,index) {
              return (
                <MsgItem key={index} item={item||{}}/>
              );
            })}
          </div>
        </div>
      </td></tr>
      <tr><td style={{height:"45px",verticalAlign:"middle",borderTop:"1px solid #ececec",backgroundColor:"#f6f6f6"}}>
        <SendMsg  
          chatObj={props.chatObj}
        />
      </td></tr>
    </tbody></table>
  )

})
