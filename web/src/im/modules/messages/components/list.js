import Wraper from "./items/wraper";
import SearchList from "./items/searchList";
import GroupList from "./items/groupList";
import NewGroupItem from "./items/newGroupItem";
import Search from "./items/search";
import ChatMessageList from "./items/chatMessageList";
import ChatMessageListWrap from "./items/chatMessageListWrap";
import SendGroupMsg from "./items/sendGroupMsg";

export default (props) => {
  const [searchGroupMsgs,setSearchGroupMsgs] = React.useState([])
  const [pert,setPert] = React.useState(100)
  const [msgLists, setMsgLists] = React.useState([])
  const [msgListsNew, setMsgListsNew] = React.useState([])
  const [chatObj, setChatObj] = React.useState({msg:''})
  const [group,setGroup] = React.useState({})
  const [groupMsgs,setGroupMsgs] = React.useState('')
  const [newgroups,setNewgroups] = React.useState([])
  const [sendAllShow,setSendAllShow] = React.useState({show:false,toid:''})

  React.useLayoutEffect(()=>{
    loadData(()=>{
      loadServerMsg(()=>{
        if(userGroupMsgs.length < 5) loadNewGroups()
      })
    })
  },[])

  React.useLayoutEffect(()=>{
    componentWillReceiveProps(props)
  },[props.msg])  

  const loadData = (cb) => {
    let url = Config.api+"shop/mygroups";
      fetchApi({
        url
      },function(res){
        if(res.unlogin == 1){
          location.reload();
        }
        if(res.status == 200){
          let myStores = res.stores?[...res.stores]:[];
          let myFriends = res.myFriends?[...res.myFriends]:[];
          let mySelf = res.user;
  
          let groupMsgArray = [];
          if(myStores.length > 0 || myFriends.length > 0){
            groupMsgArray = [].concat(myStores).concat(myFriends);
          }
          if(groupMsgArray.length == 0){
            if(cb) cb();
            return false;      
          }
  
          let groupMsgs1 = userGroupMsgs.length>0?[...userGroupMsgs]:[];
  
          groupMsgArray.map(function(item,index){
            if(item.roomtype == "Group") return;
            let group1 = {};
            group1.sendtime = Date.now()-99999999999;
            if(item.storeid && item.store_name != ''){
              group1.roomid = "Store"+item.storeid;
              group1.msg = "";
              group1.roomtype = "Store";
              group1.userid = "";
              group1.username = "";
              group1.usersex = "";
              group1.toid = item.storeid;
              group1.tousername = item.store_name;
              group1.tousersex = 1;
              group1.readStatus = 1;
              group1.avatar = item.avatar;
              group1.newestmsg = item.newestmsg;
            }else if(item.username != ''){
              if(item.userid == userid){
              }else{
                group1.roomid = "Personal"+item.userid;
                group1.msg = "";
                group1.roomtype = "Personal";
                group1.userid = "";
                group1.username = "";
                group1.usersex = "";
                group1.toid = item.userid;
                group1.tousername = item.username;
                group1.tousersex = item.usersex;
                group1.readStatus = 1;
                group1.avatar = item.avatar;
                group1.newestmsg = item.newestmsg;
              }
            }
            
            let i = 1;
            for(let j = 0,len = groupMsgs1.length; j < len; j++){
              if(groupMsgs1[j].roomid == group1.roomid){
                i = 2;
                groupMsgs1[j].newestmsg = group1.newestmsg;
                break;
              }
            }
            if(i == 1){
              groupMsgs1.push(group1);
            }
          });
  
          let myself = {};
          myself.sendtime = Date.now()-99999999900;
          myself.roomid = "Personal"+mySelf.userid;
          myself.msg = "";
          myself.roomtype = "Personal";
          myself.userid = "";
          myself.username = "";
          myself.usersex = "";
          myself.toid = mySelf.userid;
          myself.tousername = mySelf.username;
          myself.tousersex = mySelf.usersex;
          myself.readStatus = 1;
          myself.avatar = mySelf.avatar;
          myself.newestmsg = mySelf.newestmsg;
          let ii = 1;
          for(let j = 0,len = groupMsgs1.length; j < len; j++){
            if(groupMsgs1[j].roomid == myself.roomid){
              ii = 2;
              groupMsgs1[j].userid = myself.userid;
              groupMsgs1[j].username = myself.username;
              groupMsgs1[j].usersex = myself.usersex;
              groupMsgs1[j].avatar = myself.avatar;
              groupMsgs1[j].newestmsg = myself.newestmsg;
              break;
            }
          }
  
          if(ii == 1) groupMsgs1.push(myself);
          groupMsgs1.sort(function(a,b){
            return b.sendtime - a.sendtime;
          });
          
          setGroupMsgs(groupMsgs1)
          userGroupMsgs = [...groupMsgs1]
          localStorage[userid+"groupMsgs"] = JSON.stringify(groupMsgs1)
          cb()
        }else{
          errMessage(res);
        }
  
    })
  }
  
  const loadServerMsg = (cb) => {
    let useridtime = userid+"time";
    let lastTime = localStorage[useridtime];
    if(!lastTime) lastTime = 0;
    let url = Config.api+"chat/newmsgs?lastTime="+lastTime;
    localStorage[useridtime] = (new Date).getTime();
    
    fetchApi({
      url
    },function(res){
      if(!isJson(res)){
          errMessage("","服务器文件错误！");
          return false;
      }
      if(res.status == 200){
        let resStoreMsgs = res.storeMsgs?[...res.storeMsgs]:[];
        let personalMsgs = res.personalMsgs?[...res.personalMsgs]:[];
        let msgsArray = [].concat(resStoreMsgs).concat(personalMsgs);
  
        if(msgsArray.length == 0){
          if(cb) cb();
          return false;
        }
  
        let groupMsgsArray = [];
        
        msgsArray.map(function(item,index){
          if(item.roomtype == "Group") return;
          item.sendtime = (new Date(item.sendtime.replace(/-/g, '/'))).getTime();
          chatMessages.push(item);
          localStorage[userid] = JSON.stringify(chatMessages);  
          let group1 = {};
          group1.sendtime = item.sendtime;
          group1.roomid = "Store"+item.toid;
          group1.msg = item.msg;
          group1.roomtype = "Store";
          group1.userid = item.userid;
          group1.username = item.username;
          group1.usersex = item.usersex;
          group1.toid = item.toid;
          group1.tousername = item.tousername;
          group1.tousersex = 1;
          group1.readStatus = 1;
  
          if(item.roomtype == "Personal"){
            group1.roomtype = "Personal";
            if(item.toid == userid){
              group1.roomid = "Personal"+item.userid;
              group1.userid = item.toid;
              group1.username = item.tousername;
              group1.usersex = item.tousersex;
              group1.toid = item.userid;
              group1.tousername = item.username;
              group1.tousersex = item.usersex;
            }else{
              group1.roomid = "Personal"+item.toid;
              group1.userid = item.userid;
              group1.username = item.username;
              group1.usersex = item.usersex;
              group1.toid = item.toid;
              group1.tousername = item.tousername;
              group1.tousersex = item.tousersex;
            }
          }
          groupMsgsArray.push(group1);
        });
  
        let groupMsgs1 = userGroupMsgs?[...userGroupMsgs]:[];
        groupMsgsArray.map(function(item,index){
          if(!item.toid) return;
          if(item.tousername == '') return;
          let i = -1;
          for(let j = 0,len = groupMsgs1.length; j < len; j++){
            if(groupMsgs1[j].roomid == item.roomid){
              groupMsgs1[j].sendtime = item.sendtime;
              groupMsgs1[j].msg = item.msg;
              groupMsgs1[j].userid = item.userid;
              groupMsgs1[j].username = item.username;
              groupMsgs1[j].usersex = item.usersex;
              i = j;
              break;
            }
          }
          if(i == -1){
            groupMsgs1.push(item);
          }
        })
  
        groupMsgs1.sort(function(a,b){
          return b.sendtime - a.sendtime;
        });
  
        setGroupMsgs(groupMsgs1)
        userGroupMsgs = groupMsgs1?[...groupMsgs1]:[];
        localStorage[userid+"groupMsgs"] = JSON.stringify(groupMsgs1);
        if(cb) cb();
      }else{
        errMessage(res);
      }
    })
  }
  
  const loadNewGroups = () => {
    let url = Config.api+"shop/newgroups";
    fetchApi({
      url
    },function(res){
      if(res.status == 200){
        let newgroups1 = res.data;
        setNewgroups(newgroups1);
      }else{
        errMessage(res);
      }
    });
  }

  const componentWillReceiveProps = (nextProps) => {
    if(!nextProps.msg || Object.keys(nextProps.msg).length == 0) return false
    let item = nextProps.msg;
    if(item.sendtime === group.sendtime) return false
    if(!item.sendtime || !item.msg) return;
    if(item.userid == userid && item.toid == userid && item.roomtype == "Personal") return;
    if(item.roomtype == "Group") return;
    if(typeof item.sendtime === 'number') return
    let sendTime = item.sendtime
    sendTime = sendTime.replace(/-/g, '/');
    item.sendtime = (new Date(sendTime)).getTime();
    chatMessages.push(item);    
    localStorage[userid] = JSON.stringify(chatMessages);  
    let group1 = {};
    group1.sendtime = item.sendtime;
    group1.msg = item.msg;
    group1.readStatus = 1;
    group1.roomid = "Store"+item.toid;
    group1.roomtype = "Store";
    group1.userid = item.id;
    group1.username = item.username;
    group1.usersex = item.usersex;
    group1.toid = item.toid;
    group1.tousername = item.tousername;
    group1.tousersex = 1;
    group1.readStatus = 1;
    
    if(item.roomtype == "Personal"){
      group1.roomtype = "Personal";
      if(item.toid == userid){
        group1.roomid = "Personal"+item.userid;
        group1.userid = item.toid;
        group1.username = item.tousername;
        group1.usersex = item.tousersex;
        group1.toid = item.userid;
        group1.tousername = item.username;
        group1.tousersex = item.usersex;
      }else{
        group1.roomid = "Personal"+item.toid;
        group1.userid = item.userid;
        group1.username = item.username;
        group1.usersex = item.usersex;
        group1.toid = item.toid;
        group1.tousername = item.tousername;
        group1.tousersex = item.tousersex;
      }
    }
  
    let groupMsgs1 = userGroupMsgs?[...userGroupMsgs]:[];
    let i = -1;
    for(let j = 0,len = groupMsgs1.length; j < len; j++){
      if(groupMsgs1[j].roomid == group1.roomid){
        groupMsgs1[j].sendtime = group1.sendtime;
        groupMsgs1[j].msg = group1.msg;
        groupMsgs1[j].userid = group1.userid;
        groupMsgs1[j].username = group1.username;
        groupMsgs1[j].usersex = group1.usersex;
        i = j;
        break;
      }
    }
    if(i == -1) groupMsgs1.push(group1);
    groupMsgs1.sort(function(a,b){
      return b.sendtime - a.sendtime;
    });
  
    setGroupMsgs(groupMsgs1)
    setGroup(group1)
    userGroupMsgs = groupMsgs1?[...groupMsgs1]:[];
    localStorage[userid+"groupMsgs"] = JSON.stringify(groupMsgs1);
  
    let lastTime = group1.sendtime;
    localStorage[userid+"time"] = lastTime;

    if(group1.toid && group1.toid == chatObj.toid){
      let msgListsNew1 = [...msgListsNew];
      msgListsNew1.push(item);
      setMsgListsNew(msgListsNew1)
    }
  }

  const handleSearch = (keywords) => {
    let searchGroupMsgs1 = [];
    if(keywords.length > 0){
      let i = -1;
      for(let j = 0,len = groupMsgs.length; j < len; j++){
        if(groupMsgs[j].tousername.indexOf(keywords) >= 0){
          searchGroupMsgs1.push(groupMsgs[j]);
        }
      }
      searchGroupMsgs1.sort(function(a,b){
        return b.sendtime - a.sendtime;
      });
      setSearchGroupMsgs(searchGroupMsgs1);
    }
  }

  const clearSearch = () => {
    setSearchGroupMsgs([]);
  }

  const deleteMsg = (index) => {
    let groupMsgs1 = [...groupMsgs];
    groupMsgs1.remove(index);
    setGroupMsgs(groupMsgs1);
    userGroupMsgs = groupMsgs1?[...groupMsgs1]:[];
    localStorage[userid+"groupMsgs"] = JSON.stringify(groupMsgs1);
  }

  const showChatDiv = usePersistFn((toid,roomtype,e) => {
    if(!toid || !roomtype) return false;
    let msgLists1 = getMsgsFromLocal(toid,roomtype);
    let room = getFromUserGroupMsgs(toid,roomtype);
    if(!room) return false;
    let chatObj1 = {msg:"",toid:room.toid,tousername:room.tousername,tousersex:room.tousersex,roomtype:room.roomtype,roomid:room.roomid,newestmsg:room.newestmsg};
    
    setMsgLists(msgLists1)
    setMsgListsNew([])
    setChatObj(chatObj1)
    setPert(0)      
    gTime = 0
    $("#msglog").scrollTop($("#msg")[0].scrollHeight)
  })

  const hideDetailDiv = (event) => {
    event.stopPropagation();
    setChatObj('')
    setPert(100)
  }

  const showSendAll = (toid) => {
    let sendAllShow1 = sendAllShow.show?false:true
    setSendAllShow({show:sendAllShow1,toid})
  }

  return (
    <Wraper>
      <div style={{padding:"0px",width:"100%",height:"100%"}}>
        <table style={{width:"100%",height:"100%"}}><tbody>    
            <tr><td style={{height:"40px"}}>
              <Maintop />
            </td></tr>
            <tr style={{height:"40px",verticalAlign:"middle"}}><td>
              <Search 
                searchGroupMsgs={searchGroupMsgs}
                clearSearch={clearSearch}
                showSendAll={showSendAll}
                handleSearch={handleSearch}
              />
            </td></tr>
            <tr><td style={{overflowY:"scroll",verticalAlign:"top",backgroundColor:"#eeeeee"}}>

              {(!!searchGroupMsgs && searchGroupMsgs.length > 0) && <SearchList groupMsgs={searchGroupMsgs} showChatDiv={showChatDiv} deleteMsg={deleteMsg}/>}

              {(!!groupMsgs && groupMsgs.length > 0) && <GroupList groupMsgs={groupMsgs} showChatDiv={showChatDiv} deleteMsg={deleteMsg} msg={props}/>}

              {(!!groupMsgs && groupMsgs.length < 1) && 
                <table style={{width:"100%", backgroundColor:"white"}}>
                  <tbody>
                    <tr><td style={{textAlign:"center",height:"50px",lineHeight:"50px"}}>新会员，暂无组织朋友，请点击加入！</td></tr>
                  </tbody>
                </table>
              }

              {newgroups.length>0 && 
                <div style={{width:"100%",height:"100%",position:"relative",overflowY:"scroll",border:"0px"}}>
                  <div style={{width:"100%",backgroundColor:"white",borderTop:"1px solid darkgray"}}><div style={{textAlign:"center",height:"50px",lineHeight:"50px"}}>这是给新朋友推荐的有趣的门店和社团</div>
                    {newgroups.map((item,index) => <NewGroupItem key={item.id} index={index} item={item}/>)}
                  </div>
                </div>
              }

            </td></tr>
            <tr style={{height:"30px"}}><td>
              <Mainbottom />
            </td></tr>
        </tbody></table>
    
        <ChatMessageListWrap pert={pert} hideDetailDiv={hideDetailDiv}>
          <ChatMessageList
            msgLists={msgLists}
            msgListsNew={msgListsNew}
            chatObj={chatObj}
            hideDetailDiv={hideDetailDiv}
            showSendAll={showSendAll}
          />
        </ChatMessageListWrap>

        <SendGroupMsg show={sendAllShow} showSendAll={showSendAll} />

      </div>
    </Wraper>
  );

}