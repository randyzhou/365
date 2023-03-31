import Img from "../../../lib/commons/img";
var ListItem = React.createClass({
  displayName: 'ListItem',
  componentDidMount: function(){
  },
  showChatDiv: function(toid,type){
    showChatDiv(toid,type);
  },
  handletouchend: function(id){
    var url = "/group/leaveGroup?id="+id;
    fetchApi({
      url
    },function(res){     
      if(res.result == 1) resultAlert("退出成功！");
      else resultAlert("添加失败！");
    });
  },

  render: function () {
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
        					<table><tbody><tr><td onTouchEnd={this.showChatDiv.bind(this,$group.id,"Group")}>
                    {$group.group_name}
        					</td><td>
        					</td></tr></tbody></table>
        				</div>
        			</div>
        		</td>
            <td style={{widht:"40px",verticalAlign:"middle",textAlign:"right",paddingRight:"10px",cursor:"pointer"}} onTouchEnd={this.handletouchend.bind(this,$group.id)}>退出</td>
        	</tr>
        	<tr><td colSpan="3" style={{borderBottom:"1px solid deepskyblue"}}></td></tr>
        </tbody>
      </table>
    )
  }
});

export default ListItem;

