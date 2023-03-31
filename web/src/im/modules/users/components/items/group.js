export default class Groupitem extends React.Component{
  detail=(event)=>{
    backurl_store = this.props.backurl;
    touchEnd("#/stores/detail/"+this.props.item.id);
  }
  render(){
    var $group = this.props.item;
    return (
      <table><tbody>
        <tr style={{height:"50px", margin:"3px"}}>
          <td style={{width:"5px"}}></td>
          <td style={{textAlign:"left"}}>
              <span onTouchEnd={this.detail}>{$group.name}</span>
          </td>
        </tr>
      </tbody></table>
    )
  }
}


