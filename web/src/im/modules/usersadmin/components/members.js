import ListItem from "./items/member";
export default class Adminmembers extends React.Component{
  constructor(props){
    super(props);
    this.state = {
      user: {},
      searchData: {},
      searchFlag: 0
    }
  }

  componentDidMount(){
  }

  handleDelete=(id)=>{
  	if(!id){
  	 alert("请选择ID！");
  	 return false;
    }
    let res = confirm("确认删除吗！");
    if(!res){
    	return false;
    };
    let url = Config.api+"retweet/delete";
    fetchApi({
      url,
      method:"POST",
      body:{id}
    },function(res){
      resultAlert(res);
      if(res.result == 1){
        this.setState({searchFlag:1});
      }
    }.bind(this));
  }  

  handleSearch=(event)=>{
    this.setState({
      searchFlag: 1
    });
  }

  handleChange=(event)=>{
    let searchData = this.state.searchData;
    searchData.username1 = event.target.value;
    this.setState({searchData});
  }

  receiveChildData=(obj)=>{
    this.setState({user:obj.owner,searchFlag:0});
  }

  render(){
    setTitle('推友管理');
    return (
      <div ref="main" style={{width:"100%",height:"100%"}}>
        <table style={{height:"100%"}}><tbody>
          <tr style={{height:"30px"}}><td>
            <Usernavadmin user={this.state.user}/>
          </td></tr>
          <tr style={{height:"30px"}}><td>
            <table className="searchIconShow" style={{width:"100%"}}><tbody><tr>
              <td className="searchShowDiv" style={{paddingLeft:"5px"}}>
                <input name="username" ref="search" placeholder="输入会员ID号或会员名搜索" value={this.state.searchData.username1||''} onChange={this.handleChange} style={{width:"100%",height:"20px",borderRadius:"5px"}}/>
              </td>
              <td style={{width:"40px",textAlign:"center"}} onTouchEnd={this.handleSearch}>
                <span className="btn-info" style={{margin:"1px"}}>搜索</span>
              </td>
            </tr></tbody></table>
          </td></tr>
          <tr><td style={{overflowY:"scroll",verticalAlign:"top"}}>  
            <Listall 
              apiurl={Config.api+'retweet/friendlist'} 
              hashurl={"#/usersadmin/photos"}
              backurl={"#/usersadmin/photos"} 
              searchData={this.state.searchData}
              item={ListItem}
              searchFlag={this.state.searchFlag}
              receiveChildData={this.receiveChildData}
              methods={{handleDelete:this.handleDelete}}
            />
          </td></tr>
        </tbody></table>
      </div>
    );
  }
}