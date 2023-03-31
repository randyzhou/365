export default class ProductBigItem extends React.Component{
  detail = (event) => {
    backurl_store = this.props.backurl;
    touchEnd("#/stores/product/"+this.props.item.id);
  }
  render(){
    var $product = this.props.item;
    let photoname = $product.id;
    // if($product.avatar){
    //   let $avatar = JSON.parse($product.avatar);
    //   photoname = $avatar[0];
    //   if(typeof(photoname) == "object") photoname = photoname[1];
    // }
    var img = thumbUrl+"/topproductphotos/"+photoname+".jpg";
    return (
      <table><tbody><tr style={{borderBottom:"1px solid #eee"}}>
        <td>
          <table style={{width:"100%",marginTop:"20px"}}><tbody><tr>
            <td style={{width:"5px"}}></td>
            <td>
              <div style={{textAlign:"center"}}>
                <Img name={$product.type} src={img} style={{width:"100%"}}/>
              </div>
              <table style={{width:"100%"}}><tbody><tr>
                <td><span onTouchEnd={this.detail} style={{color:"saddlebrown", fontSize:"14px"}}>{$product.title}</span></td>
                <td style={{color:"green",fontSize:"12px",width:"60px",textAlign:"center"}}>{parseFloat($product.price).toFixed(2)}元</td>
              </tr></tbody></table>
            </td>
            <td style={{width:"5px"}}></td>
          </tr></tbody></table>
          <div style={{width:"100%",height:"20px"}}></div>
        </td>
      </tr></tbody></table>
    )
  }
}