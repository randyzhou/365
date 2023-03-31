export default class Recommendstore extends React.Component{
  constructor(props){
    super(props);
  }
  handletouchend(id){
    var url = "/group/addGroup?id="+id;
    fetchApi({
      url
    },function(res){     
      if(res.result == 1) resultAlert("您已是该群组群员！");
      else if(res.result == 2) resultAlert("添加群组成功！");
      else resultAlert("添加失败！");
    });
  }

  render(){
    var $group = this.props.item;
    var Style = {
    	companyname:{
    		width:"200px",
    		color:"#0B0000",
    		padding:"3px",
    		overflow:"hidden"
    	},
    	content:{},
    	divRow:{height:"30px", margin:"3px"},
    	userLogoTd: { width: "30px" },
    	userLogo: {width:"85px", height:"85px",borderRadius:"6px"}
    };
    return (
      <table style={{width:"100%", border:"0px",  marginTop:"0px"}}>
        <tbody>
        	<tr style={Style.divRow}>
        		<td className="content" style={{border:"0px red solid"}}>
        			<div style={{height:"100%"}}>
        				<div className="acttime" style={{paddingBottom:"1px"}}>
        					<table style={{width:"100%"}}><tbody><tr><td style={{paddingLeft:"20px"}}>
        						<span onTouchEnd={touchEnd.bind(this,"#/stores/detail/"+$group.id)} style={{color:"#333333"}}>{$group.group_name}</span>
        					</td>
                  <td style={{width:"80px",verticalAlign:"middle",textAlign:"right",paddingRight:"10px"}}><span onTouchEnd={touchEnd.bind(this,"#/cards/joingroup")} style={{color:"#555555"}}>拉群</span></td>
                  </tr></tbody></table>
        				</div>
        			</div>
        		</td>
        	</tr>
        </tbody>
      </table>
    )
  }
}