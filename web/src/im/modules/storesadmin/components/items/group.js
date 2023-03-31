export default class AdmingroupItem extends React.Component{
  constructor(props){
    super(props);
  }

  showGroupAdmin=(id,groupname,groupuserid,groupusername)=>{
      this.props.methods.showGroupAdmin(id,groupname,groupuserid,groupusername);
  }

  render () {
    var $group = this.props.item;
    return (
      <table><tbody>
      <tr>
        <td style={{padding:"10px"}}>
          <span onTouchEnd={touchEnd.bind(this,"#/stores/detail/"+$group.id)} style={{color:"#333333"}}>{$group.name}</span>
        </td>
        <td style={{width:"80px",verticalAlign:"middle",textAlign:"right",padding:"10px",color:"#555555"}} onTouchEnd={this.showGroupAdmin.bind(this,$group.id,$group.name,$group.userid,$group.username)}>{$group.username}</td>
      </tr>
      </tbody></table>
    )
  }
}
