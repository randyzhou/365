export default class ProductMainItem extends React.Component{
  detail = (event) => {
    backurl_store = this.props.backurl;
    touchEnd("#/stores/products/"+this.props.item.ownerid);
  }
  render(){
    var $product = this.props.item;
    return (
      <table style={{width:"100%",borderBottom:"1px solid #ccc"}}><tbody><tr>
        <td>
          <div style={{textAlign:"center"}}>
            <Img name={$product.type} src={thumbUrl+"/topproductphotos/"+$product.id+".jpg"} style={{width:"100%"}}/>
          </div>
          <div style={{width:"100%",height:"30px",lineHeight:"30px",color:"maroon"}}>
              <span style={{color:"saddlebrown", fontSize:"14px",float:"left"}} onTouchEnd={this.detail}>{$product.title}</span>
              <span style={{float:"right"}}>{parseFloat($product.price).toFixed(2)}元</span>
          </div>
        </td>
      </tr></tbody></table>
    )
  }
}