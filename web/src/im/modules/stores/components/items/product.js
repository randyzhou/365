export default class ProductItem extends React.Component{
  detail = (event) => {
    backurl = "#/stores/groups/"+this.props.item.ownerid;
    touchEnd("#/stores/detail/"+this.props.item.id);
  }
  render(){
    var $product = this.props.item;
    let photoname = $product.id;
    return (
      <table><tbody><tr>
        <td style={{width:"80px", verticalAlign:"middle", textAlign:"center" }}>
          <Img name={$product.product_type} src={thumbUrl+"/topproductphotos/"+photoname+".jpg"} style={{width:"80px", height:"80px",borderRadius:"6px"}} onTouchEnd={this.props.togglePic.bind(this,$product)}/>
        </td>
        <td style={{verticalAlign:"middle"}}>
          <div style={{dispay:"block", whiteSpace:"nowrap", textOverflow:"ellipsis", overflow:"hidden", width:"150px"}}>
            <span style={{color:"saddlebrown", fontSize:"14px"}}>{$product.title}</span>
          </div>
        </td>
        <td style={{color:"green",fontSize:"12px",width:"70px"}}>
          {parseFloat($product.price).toFixed(2)}元
        </td>
      </tr></tbody></table>
    )
  }
}