import Img from "../../../lib/commons/img";
var ListItem = React.createClass({
  displayName: 'ListItem',
  render: function() {
    var $item = this.props.item;
    var $orderContent = JSON.parse($item.order_content);
    var $order = $orderContent.map(function(item,index){
      return(
        <tr><td style={{borderRight:"1px #ccc solid",textAlign:"center"}}>{item.product_name}<br/><span style={{fontSize:"12px",color:"#ccc"}}>{item.intro}</span></td><td style={{width:"50px",borderRight:"1px #ccc solid",textAlign:"center"}}>{item.number}份</td><td style={{width:"60px",textAlign:"center"}}>{item.price}元</td></tr>
      )
    });
    var Style = {
    	divRow:{height:"60px", borderBottom:"1px #eee solid", color:"#999"}
    };
    return (
            <tr style={Style.divRow}>
              <td style={{textAlign:"center",borderRight:"1px #eee solid"}}>
                {$item.createdate}
              </td>
              <td style={{textAlign:"center",padding:"10px",borderRight:"1px #eee solid"}}>
                <table style={{width:"100%",align:"center",border:"1px #ddd solid"}}><tbody>
                  {$order}
                  <tr style={{borderTop:"1px #ccc solid"}}><td colSpan="2" style={{textAlign:"center",borderRight:"1px #ccc solid"}}>总价</td><td style={{textAlign:"center"}}>{$item.order_price}元</td></tr>
                </tbody></table>
              </td>
              <td style={{textAlign:"center"}} onTouchEnd={this.props.handleStatusShow.bind(this,$item)}>
                桌号{$item.order_table}<br/>
                {$item.order_status}
              </td>
            </tr>
    )
  }
});

export default ListItem;

