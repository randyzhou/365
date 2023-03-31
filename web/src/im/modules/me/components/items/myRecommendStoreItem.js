export default class Recommendstore extends React.Component{
  constructor(props){
    super(props);
  }
  showChatDiv(toid,tousername,tousersex,type){
    showChatDiv(toid,tousername,tousersex,type);
  }

  render(){
    var $store = this.props.item;
    return (
      <tr style={{height:"60px", borderBottom:"1px #eee solid"}}>
        <td style={{ width: "60px", verticalAlign:"top", textAlign:"center" }}>
          <Img src={thumbUrl+"/topstorephotos/"+$store.id+".jpg"} style={{width:"50px", height:"50px",borderRadius:"6px"}}/>
        </td>
        <td>
          <table style={{width:"100%"}}><tbody>
            <tr><td><div style={{dispay:"block", whiteSpace:"nowrap", textOverflow:"ellipsis", overflow:"hidden", width:"230px", fontSize:"14px", fontWeight:"bold"}}>
              <span onTouchEnd={touchEnd.bind(this,"#/stores/detail/"+$store.id)} style={{color:"#000",fontWeight:"bold",fontSize:"14px"}}>{$store.store_name}</span>
            </div></td></tr>
          </tbody></table>
          <table style={{width:"100%"}}><tbody>
            <tr><td>
              <div style={{dispay:"block", whiteSpace:"nowrap", textOverflow:"ellipsis", overflow:"hidden", width:"250px",maxWidth:"250px"}}>
                <span>{$store.province}{$store.city}{$store.district}{$store.town}</span>
              </div>
            </td></tr>
          </tbody></table>
        </td>
        <td style={{width:"60px",verticalAlign:"middle", fontSize:"12px", color:"#999"}}>
          {$store.store_username}
        </td>
      </tr>
    )
  }
}