export default class PhotoItem extends React.Component{
  render(){
    var $photo = this.props.item;
    var $phototime = !$photo.phototime?null:$photo.phototime.replace(/\-/g, "/");
    let $photoname = $photo.avatar?$photo.avatar:$photo.id;
    return (
      <table style={{width:"100%", height:"291px", border:"0px",  marginTop:"0px"}}>
        <tbody>
        	<tr style={{height:"100px", margin:"3px"}}>
        		<td className="userLogoTd" style={{textAlign:"center"}} userid={$photo.id}>
              <Img src={thumbUrl+"/storephotos/"+$photoname+".jpg"} style={{width:"98%",height:"270px"}} />
            </td>
        	</tr>
        	<tr>
        		<td style={{height:"50px",verticalAlign:"top"}}>
              <table style={{width:"100%"}}><tbody>
                <tr>
                  <td>
                    {$photo.photoname}
                  </td>
                  <td style={{width:"120px"}}>
                    ({(new Date($phototime)).getFullYear()}年
                    {(new Date($phototime)).getMonth()+1}月
                    {(new Date($phototime)).getDate()}日)
                  </td>
                </tr>
              </tbody></table>
            </td>
        	</tr>
        	<tr><td style={{borderBottom:"1px solid #ccc"}}></td></tr>
        </tbody>
      </table>
    )
  }
}