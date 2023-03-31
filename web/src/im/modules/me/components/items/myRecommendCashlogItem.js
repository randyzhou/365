export default class Recommendcash extends React.Component{
  constructor(props){
    super(props);
  }
  render(){
    var $item = this.props.item;
    return (
            <tr style={{height:"60px", borderBottom:"1px #eee solid", color:"#999"}}>
              <td style={{textAlign:"center",borderRight:"1px #eee solid",width:"80px"}}>
                {$item.create_time}
              </td>
              <td style={{textAlign:"center",borderRight:"1px #eee solid",width:"80px"}}>
                {$item.payer_username}<br/>
                ->{$item.pay_type}<br/>
                {$item.username}
              </td>
              <td style={{textAlign:"center",borderRight:"1px #eee solid"}}>
                {$item.amount}
              </td>
              <td style={{textAlign:"left",padding:"10px",borderRight:"1px #eee solid"}}>
                <span>{$item.username}</span>
                <span>{$item.user_amount}元</span><br/>
                <span>{$item.ref1_username}</span>
                <span>{$item.ref1_amount}元</span><br/>
                <span>{$item.ref2_username}</span>
                <span>{$item.ref2_amount}元</span>
              </td>
            </tr>
    )
  }
}