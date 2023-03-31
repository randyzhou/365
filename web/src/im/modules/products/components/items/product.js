export default class ProductItem extends React.Component{
  detail=()=>{
    backurl_store = this.props.backurl;
    touchEnd("#/stores/product/"+this.props.item.id)
  }
  storeDetail=()=>{
    backurl_store = this.props.backurl;
    touchEnd("#/stores/detail/"+this.props.item.shopid)
  }
  render(){
    var $product = this.props.item;
    let photoname = $product.id;
    var img = thumbUrl+"/topproductphotos/"+photoname+".jpg";
    return (
      <table><tbody><tr style={{borderBottom:"1px solid #eee"}}>
        <td>
          <table style={{width:"100%",marginTop:"20px"}}><tbody><tr>
            <td style={{width:"5px"}}></td>
            <td>
              <div style={{textAlign:"center",position:"relative"}}>
                <Img name={$product.type} src={img} style={{width:"100%"}}/>
                <div style={{position:"absolute",bottom:"5px",width:"100%",backgroundColor:"black",color:"white",opacity:"0.8",fontSize:"14px",fontWeight:"bolder",margin:"0 auto"}}>
                {$product.province}{$product.city} <span onTouchEnd={this.storeDetail}>{$product.shopname}</span>
                </div>
              </div>
              <table style={{width:"100%"}}><tbody><tr>
                <td>
                  <span onTouchEnd={this.detail} style={{color:"saddlebrown", fontSize:"14px"}}>{$product.title}</span></td>
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