export default props =>{

  const storeDetail = () => {
    backurl_store = "#/messages";
    touchEnd("#/stores/members/"+props.item.id)
  }

  var $store = props.item;
  let photoname = $store.id;

  let dist = "";
  let $store_latitude = $store.latitude || $store.shop_latitude;
  let $store_longitude = $store.longitude || $store.shop_longitude;
  if(latitude_reg && longitude_reg && $store_latitude && $store_longitude){
    let dist_reg = getGreatCircleDistance(latitude_reg,longitude_reg,$store_latitude,$store_longitude);
    dist = dist_reg+"米";
  }
  
  let $store_city = !$store.city?$store.shop_city:$store.city;
  let $store_district = $store.disctrict?$store.disctrict:$store.shop_district;
  let $store_town = $store.town || $store.shop_town;
  let $store_street = null;
  let $store_building = $store.building || $store.shop_building;

  let phoneWidth = props.phoneWidth*0.90;

  return (
    <table style={{ width:"100%",height:"50px"}}><tbody><tr style={{borderTop:"1px #eee solid",lineHeight:"20px"}}>
      <td style={{width: "80px", verticalAlign:"top", textAlign:"center"}}>
        <div style={{position:"relative",marginTop:"8px"}}>
          <Img src={thumbUrl+"/topstoreactphotos/"+photoname+".jpg"} style={{width:"80px",height:"80px"}} onTouchEnd={storeDetail}/>
          <div style={{position:"absolute",bottom:"5px",width:"80px",backgroundColor:"black",color:"white",opacity:"0.8",fontSize:"14px",fontWeight:"bolder",margin:"0 auto",letterSpacing:"-1px"}}>
            {$store.act_date}
          </div>
        </div>  
      </td>
      <td style={{verticalAlign:"top",padding:"5px"}}>
        <table><tbody>
          <tr>
            <td>
              <div style={{dispay:"block", whiteSpace:"nowrap", fontSize:"14px", fontWeight:"bold"}}>
                <span style={{color:"#000",fontWeight:"bold",fontSize:"16px"}} onTouchEnd={storeDetail}>
                  {$store.name}
                  &nbsp;
                  <Img src={thumbUrl+"/topstorephotos/"+photoname+".jpg"} style={{width:"14px",height:"14px",borderRadius:"7px"}}/>
                </span>
                <span style={{float:"right",color:"white",fontSize:"10px",paddingLeft:"5px",paddingRight:"5px",backgroundColor:"burlywood",borderRadius:"5px"}} onClick={storeDetail}>加入</span>
              </div>
            </td>
          </tr>
          <tr><td style={{dispay:"block", whiteSpace:"nowrap", textOverflow:"ellipsis", overflow:"hidden", width:"200px",maxWidth:"200px"}}>
            <span style={{color:"darkolivegreen",fontWeight:"bold"}} onTouchEnd={storeDetail}>{$store.act_title}</span>
          </td></tr>
          <tr>
            <td>
              <span style={{dispay:"inline-block", lineHeight:"20px", whiteSpace:"nowrap", textOverflow:"ellipsis", overflow:"hidden", width:"150px", maxWidth:phoneWidth+"px",textAlign:"left",fontSize:"12px",color:"#333"}}>{$store_city}{$store_district}{$store_town}{$store_street}{$store_building}</span>
            </td>
          </tr>
          <tr><td style={{dispay:"block", whiteSpace:"nowrap", textOverflow:"ellipsis", overflow:"hidden", width:"200px",maxWidth:"200px"}}>
            <span style={{color:"darkred",fontWeight:"bold"}} onTouchEnd={storeDetail}>{$store.ownername}</span>
            <span style={{float:"right",color:"#999"}}>{dist}</span>
          </td></tr>
        </tbody></table>
      </td></tr>
    </tbody></table>  
  )
}