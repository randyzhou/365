export default class ListItem extends React.Component{
  render(){
    var $group = this.props.item;
    return (
        <tr>
          <td style={{fontSize:"15px",padding:"10px"}}>
        		<span onTouchEnd={touchEnd.bind(this,"#/storesadmin/basic/"+$group.id)} style={{color:"#333333"}}>{$group.name}</span>
          </td>
          <td style={{width:"100px",verticalAlign:"middle",textAlign:"right",padding:"10px"}}>
            <span style={{color:"#555555"}}>{$group.username}</span>
          </td>
        </tr>
    )
  }
}


