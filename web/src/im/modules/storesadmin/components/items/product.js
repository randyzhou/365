export default class AdminproductItem extends React.Component{
  constructor(props){
    super(props);
  }

  render(){
    var $product = this.props.item;
    let photoname = $product.id;
    var img = thumbUrl+"/topproductphotos/"+photoname+".jpg?rd="+this.props.rd;
    return (
      <table><tbody>
      <tr style={{height:"60px", borderBottom:"1px #eee solid"}}>
        <td style={{width:"5px"}}></td>
        <td style={{width:"50px"}} onTouchEnd={this.props.methods.showPostDiv.bind(this,$product)}>
          <img src={img} style={{width:"50px", height:"50px",borderRadius:"6px"}}/>
        </td>
        <td style={{border:"0px red solid"}}>
          <table style={{width:"100%"}}><tbody>
            <tr><td style={{dispay:"block", color:"saddlebrown!important", width:"180px", wordBreak:"break-all"}}>
              {$product.title}
            </td>
            <td>
              <span onTouchEnd={this.props.methods.deleteProduct.bind(this,$product)} style={{background:"url(image/icon_new.jpg) no-repeat -193px -114px",display:"inline-block",width:"20px",height:"20px"}}></span>
            </td>
            </tr>
          </tbody></table>
        </td>
        <td style={{verticalAlign:"middle", fontSize:"12px", color:"green"}}>
          {$product.price}元
        </td>
        <td style={{verticalAlign:"middle", fontSize:"12px", color:"#999"}}>
          <span onTouchEnd={this.props.methods.showPostDiv.bind(this,$product)} style={{background:"url(image/icon_new.jpg) no-repeat -215px -182px",display:"inline-block",width:"20px",height:"20px"}}></span>
        </td>
      </tr>
      </tbody></table>
    )
  }
}