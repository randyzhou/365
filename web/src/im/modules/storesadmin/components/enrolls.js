export default class Adminenrolls extends React.Component{
  constructor(props){
    super(props);
    this.state = {
      id: this.props.id,
      shop: {}
    }
  }

  componentDidMount(){
      let url = Config.api+"enroll/listadmin?shopid="+this.props.id;
      fetchApi({
        url
      },function(res){  
        if(!isJson(res)){
            errMessage("","服务器文件错误！");
            return false;
        }
        if(res.status == 200){
          this.setState({
            shop: res.shop,
            enrolls: res.enrolls
          });
        }else{
          errMessage(res);
        }
      }.bind(this));
  }

  render(){
    setTitle('报名管理');
    if(!this.state.shop) return null;
    var cert_name = !this.state.shop.cert_name?[]:JSON.parse(this.state.shop.cert_name);
    var certified = {1:"新生",2:"助理",3:"中级",4:"高级",5:"专家",6:"管理"};
    if(Object.keys(cert_name).length>0){
      certified[1] = cert_name[1];
      certified[2] = cert_name[2];
      certified[3] = cert_name[3];
      certified[4] = cert_name[4];
      certified[5] = cert_name[5];
      certified[6] = cert_name[6];
    }
    var Style = {
    	userLogoTd: { width: "65px", height:"60px", verticalAlign:"top", padding:"3px" },
    	userLogo: {width:"55px", height:"55px", borderRadius:"6px"}
    };
    var Enrolls = !this.state.enrolls?null:this.state.enrolls.map(function($user,index){
      var $date = !$user.userbirthday?null:$user.userbirthday.replace(/\-/g, "/");
      let userphotoname = $user.avatar?$user.avatar:$user.userid;
      return (
        <table key={$user.userid} id={$user.userid} style={{width:"100%",border:"0px",backgroundColor:"white"}}>
          <tbody>
          	<tr>
          		<td className="userLogoTd" style={Style.userLogoTd} userid={$user.userid}>
                <Img src={photoUrl+"/topuserphotos/"+userphotoname+".jpg"} style={Style.userLogo} />
              </td>
          		<td className="content" style={{border:"0px red solid",verticalAlign:"top"}}>
      					<table style={{width:"100%"}}><tbody><tr><td>
                  <div style={{dispay:"block", whiteSpace:"nowrap", textOverflow:"ellipsis", overflow:"hidden", width:"185px"}}>
        						<span onTouchEnd={touchEnd.bind(this,"#/users/detail/"+$user.userid,$user.userid)} style={{color:$user.usersex=="1"?"black":"red",fontSize:"16px",fontWeight:"bold"}}>{$user.username}</span>
                    <span style={{fontSize:"12px",color:"#999"}}>-{(new Date()).getFullYear()-(new Date($date)).getFullYear()}岁{!$user.marry||"-"}{$user.marry}{!$user.jobtitle||"-"}{$user.jobtitle}{!$user.duty||"-"}{$user.duty}</span>
                  </div>
                </td><td>
      					</td></tr></tbody></table>
      					<table style={{width:"100%"}}><tbody>
                <tr><td style={{textAlign:"left",color:"#666"}}>{$user.msg}</td></tr>
                </tbody></table>
          		</td>
              <td style={{width:"40px",verticalAlign:"middle",textAlign:"right",paddingRight:"10px",fontSize:"12px",color:"#999"}}>{$user.baomingtime}</td>
          	</tr>
            <tr><td colSpan="3" style={{borderBottom:"1px #eee solid"}}></td></tr>
          </tbody>
        </table>
      );
    });

    return (
      <div style={{width:"100%",height:"100%"}}>
        <table style={{width:'100%',height:"100%",backgroundColor: '#fff'}}>
          <tbody>
            <tr><td style={{height:"35px"}}>
              <Storenavadmin shop={this.state.shop}/>
            </td></tr>
            <tr><td style={{textAlign:"center",verticalAlign:"middle",height:"40px",backgroundColor:"#f2f2f2"}}>活动报名</td></tr>
            <tr style={{height:"1px",backgroundColor:"white"}}><td></td></tr>
            <tr><td style={{padding:"3px",backgroundColor:"#f2f2f2"}}>
              <div ref="parentBlock" style={{width:"100%",height:"100%",overflowY:"auto"}}>
                <div ref="childBlock">
                  {Enrolls}
                </div>
              </div>
            </td></tr>
          </tbody>
        </table>
      </div>
    );
  }
}