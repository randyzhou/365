export default class PhotoItem extends React.Component{
  constructor(props){
    super(props);
  }

  deletePhoto=()=>{
    this.props.methods.deletePhoto(this.props.item.id);
  }

  showPostDiv=()=>{
    let photo = this.props.item;
    this.props.methods.showPostDiv(photo);
  }

  render(){
    var $photo = this.props.item;
    var $phototime = !$photo.phototime?null:$photo.phototime.replace(/\-/g, "/");
    let photoname = $photo.avatar;
    return (
      <table style={{width:"100%",border:"0px",marginTop:"0px",borderBottom:"1px solid #ccc"}}>
        <tbody>
        	<tr>
        		<td style={{position:"relative"}} userid={$photo.id}>
              <img src={thumbUrl+"/storephotos/"+photoname+".jpg"} style={{width:"100%", maxWidth:"400px"}} />
              <div style={{opacity:"0.8",width:"100%",height:"25px",lineHeight:"25px",position:"absolute",bottom:"0px",backgroundColor:"black"}}>
                <span style={{width:"60px",color:"white",marginLeft:"5px",float:"left"}} onTouchEnd={this.deletePhoto}>删除</span>
                <span style={{width:"60px",color:"white",marginRight:"5px",float:"right",textAlign:"right"}} onTouchEnd={this.showPostDiv}>修改</span>
              </div>
            </td>
        	</tr>
        	<tr>
        		<td>
              <table style={{width:"100%"}}><tbody>
                <tr>
                  <td style={{height:"30px"}}>
                    <span style={{fontWeight:"bold",fontSize:"16px"}}>{$photo.photoname}</span>
                    <br/>
                    <span style={{color:"#999"}}>{(new Date($phototime)).getFullYear()}年{(new Date($phototime)).getMonth()}月{(new Date($phototime)).getDay()}日</span>
                  </td>
                </tr>
              </tbody></table>
            </td>
        	</tr>
        </tbody>
      </table>
    )
  }
}