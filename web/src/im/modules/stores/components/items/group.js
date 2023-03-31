export default class GroupItem extends React.Component{
  act = (event) => {
    backurl_store = this.props.backurl;
    touchEnd("#/stores/act/"+this.props.item.id);
  }
  detail = (event) => {
    backurl_store = this.props.backurl;
    touchEnd("#/stores/main/"+this.props.item.id);
  }
  render(){
    var $group = this.props.item;
    return (
      <table><tbody><tr style={{height:"60px", borderBottom:"1px #eee solid"}}>
        <td style={{width:"60px", verticalAlign:"top", textAlign:"center"}}>
          <Img src={thumbUrl+"/topstorephotos/"+$group.id+".jpg"} style={{width:"50px", height:"50px",borderRadius:"6px"}}/>
        </td>
        <td style={{border:"0px red solid",lineHeight:"15px",verticalAlign:"top"}}>
          <table style={{width:"100%"}}><tbody>
            <tr><td><div style={{dispay:"block", whiteSpace:"nowrap", textOverflow:"ellipsis", overflow:"hidden", width:"230px", fontSize:"14px", fontWeight:"bold"}}>
              <span onTouchEnd={this.act} style={{color:"#000",fontWeight:"bold",fontSize:"14px"}}>{$group.act_title}</span>
            </div></td></tr>
          </tbody></table>
          <table style={{width:"100%"}}><tbody>
            <tr><td>
              <div style={{dispay:"block", whiteSpace:"nowrap", textOverflow:"ellipsis", overflow:"hidden", width:"230px", fontSize:"12px", color:"#999"}}>
                <span onTouchEnd={this.detail} style={{color:"lavendar"}}>{$group.name}</span>
              </div>
            </td></tr>
          </tbody></table>
        </td>
        <td style={{width:"40px",verticalAlign:"middle", fontSize:"12px", color:"#999"}}>
          {$group.act_date}
        </td>
      </tr></tbody></table>
    )
  }
}