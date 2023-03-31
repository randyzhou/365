export default class ListItem extends React.Component{
  constructor(props){
    super(props);
    this.showDetailDiv = this.showDetailDiv.bind(this);
  }

  showDetailDiv(){
    this.props.methods['showDetailDiv'](this.props.item,this.props.index);
  }

  render(){
    var $store = this.props.item;
    let photoname = $store.id;

    let dist = "";
    if(latitude_reg && longitude_reg && $store.latitude && $store.longitude){
      let dist_reg = getGreatCircleDistance(latitude_reg,longitude_reg,$store.latitude,$store.longitude);
      dist = "("+dist_reg+"米)";
    }

    return (
      <table style={{ width:"100%",height:"100%"}}><tbody><tr style={{lineHeight:"20px"}}>
        <td style={{width:"2px"}}></td>
        <td style={{width: "40px", verticalAlign:"top", textAlign:"center"}}>
          <Img src={thumbUrl+"/topstorephotos/"+photoname+".jpg"} style={{marginTop:"5px",width:"40px", height:"40px",borderRadius:"20px"}} onTouchEnd={this.showDetailDiv}/>
        </td>
        <td style={{verticalAlign:"top",padding:"5px"}}>
          <table><tbody>
            <tr>
              <td>
                <div style={{dispay:"block", whiteSpace:"nowrap", textOverflow:"ellipsis", overflow:"hidden", width:"180px",textAlign:"left",fontSize:"14px"}}>
                  <span style={{color:"#000",fontWeight:"bold",fontSize:"16px"}} onTouchEnd={this.showDetailDiv}>{$store.name}</span>
                </div>
              </td>
              <td style={{textAlign:"right",color:"#999"}}>
                {$store.clubs}个社团    
              </td>
            </tr>
            <tr>
              <td>
                <div style={{dispay:"block", whiteSpace:"nowrap", textOverflow:"ellipsis", overflow:"hidden", width:"180px",textAlign:"left",fontSize:"12px",color:"999"}}>{$store.city}{$store.district}{$store.town}{$store.street}{$store.building}</div>
              </td>
              <td>
                <span style={{float:"right",color:"#999",fontSize:"12px"}}>{dist}</span>
              </td>
            </tr>
            <tr><td colSpan="2" style={{dispay:"block", whiteSpace:"nowrap", textOverflow:"ellipsis", overflow:"hidden", width:"200px",maxWidth:"200px"}}>
              <span style={{color:"darkred",fontWeight:"bold"}} onTouchEnd={this.showDetailDiv}>{$store.act_title}</span>
            </td></tr>
          </tbody></table>
        </td></tr>
      </tbody></table>  
    )
  }
}