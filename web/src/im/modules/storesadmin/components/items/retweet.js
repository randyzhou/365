export default class AdminretweetItem extends React.Component{
  constructor(props){
    super(props);
  }

  render(){
    var $product = this.props.item;
    return (
      <table><tbody>
      <tr style={{height:"60px", borderBottom:"1px #eee solid"}}>
        <td style={{width:"5px"}}></td>
        <td style={{width:"50px", height:"50px"}} onTouchEnd={touchEnd.bind(this,"#/stores/product/"+$product.id)}>
          <img src={thumbUrl+"/topproductphotos/"+$product.id+".jpg"} style={{width:"50px", height:"50px",borderRadius:"6px"}}/>
        </td>
        <td style={{border:"0px red solid"}}>
          {$product.title}
        </td>
        <td style={{width:"50px",verticalAlign:"middle", fontSize:"12px", color:"green", textAlign:"right"}}>
          {$product.price}元
        </td>
        <td style={{width:"40px",verticalAlign:"middle", fontSize:"12px", color:"#999", textAlign:"center"}} onTouchEnd={this.props.methods.deleteRetweet.bind(this,$product)}>
          <span style={{background:"url(image/icon_new.jpg) no-repeat -194px -114px",display:"inline-block",width:"20px",height:"20px"}}></span>
        </td>
      </tr>
      </tbody></table>
    )
  }
}