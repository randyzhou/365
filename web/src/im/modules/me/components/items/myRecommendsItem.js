export default class Recommendstore extends React.Component{
  constructor(props){
    super(props);
  }

  render(){
    var $user = this.props.item;
    let $photoname = $user.avatar?$user.avatar:$user.userid;
    return (
    	<tr style={{borderBottom:"1px solid #eee"}}>
    		<td>
          {$user.userid}
    		</td>
    		<td>
          <img src={thumbUrl + "/topuserphotos/"+$photoname+".jpg"} style={{width:"50px"}} />
        </td>
    		<td style={{color:$user.usersex==1?"#333":"red",wordBreak:"break-all"}}>
          {$user.username}
    		</td>
    		<td>
          {$user.workcity}
    		</td>
    		<td>
          {$user.totalref}
    		</td>
        <td style={{width:"90px",verticalAlign:"middle",textAlign:"center",paddingRight:"10px",cursor:"pointer"}}>
          {$user.joindate}
        </td>
    	</tr>
    );
  }
}