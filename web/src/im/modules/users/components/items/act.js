export default class ListItem extends React.Component{
  constructor(props){
    super(props);
  }

  showDetailDiv=(id)=>{
    backurl_user = "#/users/acts/"+this.props.item.enrolluserid;
    touchEnd("#/stores/main/"+id)
  }

  render(){
    var $store = this.props.item;
    let photoname = $store.id;

    let dist = "";
    if(latitude_reg && longitude_reg && $store.latitude && $store.longitude){
      let dist_reg = getGreatCircleDistance(latitude_reg,longitude_reg,$store.latitude,$store.longitude);
      dist = dist_reg+"米";
    }

    let phoneWidth = this.props.phoneWidth*0.90;

    return (
      <table style={{ width:"100%",height:"100%"}}><tbody><tr style={{borderBottom:"1px #eee solid"}}>
        <td style={{width: "80px", verticalAlign:"top", textAlign:"center"}}>
          <div style={{position:"relative"}}>
            <Img src={thumbUrl+"/topstoreactphotos/"+photoname+".jpg"} style={{width:"80px",height:"80px"}} onTouchEnd={this.showDetailDiv.bind(this,$store.id)}/>
            <div style={{position:"absolute",bottom:"5px",width:"100%",backgroundColor:"black",color:"white",opacity:"0.8",fontSize:"14px",fontWeight:"bolder",margin:"0 auto",letterSpacing:"-1px"}}>
              {$store.act_date}
            </div>
          </div>  
        </td>
        <td style={{verticalAlign:"top",padding:"5px",lineHeight:"15px"}}>
          <table><tbody>
            <tr>
              <td>
                <div style={{dispay:"block", whiteSpace:"nowrap", fontSize:"14px", fontWeight:"bold"}}>
                  <span style={{color:"#000",fontWeight:"bold",fontSize:"16px"}} onTouchEnd={this.showDetailDiv.bind(this,$store.id)}>
                    {$store.name}
                    &nbsp;
                    <Img src={thumbUrl+"/topstorephotos/"+photoname+".jpg"} style={{width:"14px",height:"14px",borderRadius:"7px"}}/>
                  </span>
                </div>
              </td>
            </tr>
            <tr><td style={{dispay:"block", whiteSpace:"nowrap", textOverflow:"ellipsis", overflow:"hidden", width:"200px",maxWidth:"200px"}}>
              <span style={{color:"darkolivegreen",fontWeight:"bold"}} onTouchEnd={this.showDetailDiv.bind(this,$store.id)}>{$store.act_title}</span>
            </td></tr>
            <tr>
              <td>
                <span style={{dispay:"inline-block", whiteSpace:"nowrap", textOverflow:"ellipsis", overflow:"hidden", width:"150px", maxWidth:phoneWidth+"px",textAlign:"left",fontSize:"12px",color:"#333"}} onTouchEnd={this.showDetailDiv}>{$store.city}{$store.district}{$store.town}{$store.street}{$store.building}</span>
              </td>
            </tr>
            <tr><td style={{dispay:"block", whiteSpace:"nowrap", textOverflow:"ellipsis", overflow:"hidden", width:"200px",maxWidth:"200px"}}>
              <span style={{color:"darkred",fontWeight:"bold"}} onTouchEnd={this.showDetailDiv.bind(this,$store.id)}>{$store.ownername}</span>
              <span style={{float:"right",color:"#999"}}>{dist}</span>
            </td></tr>
          </tbody></table>
        </td></tr>
      </tbody></table>  
    )
  }
}