export default class Maintop extends React.Component{
  render(){
    let hash = getHashes();
    let colors = {};
    if(hash == null) hash = "messages";
    colors[hash] = 'red';
    return (
      <table style={{top:"1px",width:"100%",height:"40px",backgroundColor:"white",borderBottom:"1px solid #ccc"}}>
      <tbody><tr>
          <td style={{width:"1px"}}></td>
          <td style={{textAlign:"center"}}>
              <table style={{width:"100%"}}><tbody><tr>
                  <td style={{width:"60px",textAlign:"left"}} onTouchEnd={touchEnd.bind(this,"#/me/admin")}>
                    <Img src={thumbUrl+"/topuserphotos/"+userid+".jpg"} style={{display:"block",width:"24px",height:"24px",borderRadius:"12px"}}/>
                  </td>
                  <td style={{textAlign: "center",fontSize:"16px"}} onTouchEnd={touchEnd.bind(this,"#/messages")}>
                    <span style={{color:colors['messages']||colors['messages/list']||'black'}}>聊天</span>
                  </td>
                  <td style={{textAlign: "center",fontSize:"16px"}} onTouchEnd={touchEnd.bind(this,"#/groups?typeid=2")}>
              	    <span style={{color:colors['groups']||colors['groups/list']||'black'}}>活动</span>
                  </td>
                  <td style={{textAlign: "center",fontSize:"16px"}} onTouchEnd={touchEnd.bind(this,"#/stores")}>
              		  <span style={{color:colors['stores']||'black'}}>实体</span>
                  </td>
                  <td style={{textAlign: "center",fontSize:"16px"}} onTouchEnd={touchEnd.bind(this,"#/users")}>
              		  <span style={{color:colors['users']||colors['users/list']||'black'}}>交友</span>
                  </td>
                  <td style={{width:"60px",fontSize:"25px",textAlign:"right"}}>
                    <span style={{display:"block",marginTop:"-2px",fontSize:"18px",width:"18px",height:"18px",lineHeight:"16px",textAlign:"center",border:"1px #333 solid",borderRadius:"9px",float:"right"}}>+</span>
                  </td>
              </tr></tbody></table>
          </td>
          <td style={{width:"1px"}}></td>
      </tr></tbody></table>
    );
  }
  
}