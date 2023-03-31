import ListItem from "./items/retweet";
export default class Retweets extends React.Component{
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

    let $this = this;
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

  receiveChildData=(obj)=>{
    this.setState({user:obj.owner,searchFlag:0});
  }

  render(){
    setTitle(this.state.user.username);

    let $user = this.state.user;

    let ListItems = !this.state.retweets?null:this.state.retweets.map(function(item,index) {
      return (
        <ArticleItem key={item.id} index={index} item={item} phoneWidth={this.state.phoneWidth} deleteRetweet={this.deleteRetweet} backurl={"#/users/retweets/"+$user.userid}/>
      );
    }.bind(this));

    return (
      <div style={{width:"100%",height:"100%"}}>
        <table style={{width:"100%",height:"100%"}}><tbody>
          <tr><td style={{height:"30px"}}>
            <Usernavadmin user={this.state.user}/>
          </td></tr>
          <tr><td style={{overflowY:"scroll",verticalAlign:"top"}}>  
            <Listall
              apiurl={Config.api+'retweet/articlelist'} 
              hashurl={"#/usersadmin/retweets"}
              backurl={"#/usersadmin/retweets"} 
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