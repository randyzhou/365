import ListItem from "./items/store.js";

export default class Detail extends React.Component{
  constructor(props){
    super(props);
    this.state = {
      user: {},
      searchData: {}
    }
  }

  componentDidMount(){
  }

  historyBack = ()=>{
    history.back();
  }

  receiveChildData=(obj)=>{
    this.setState({user: obj.owner});
  }

  render() {
    var $user = this.state.user;
    setTitle($user.username);

    return (
      <table style={{width:"100%",height:"100%"}}>
      <tbody>
        <tr><td style={{height:"30px"}}>
          <Usernav user={$user}/>
        </td></tr>
        <tr><td style={{overflowY:"scroll",verticalAlign:"top"}}>  
          <Listall 
            apiurl={Config.api + "user/usergroups?ownerid="+this.props.id} 
            hashurl={"#/users/groups/"+this.props.id}
            backurl={"#/users/groups/"+this.props.id} 
            searchData={this.state.searchData}
            item={ListItem}
            searchFlag={this.state.searchFlag}
            receiveChildData={this.receiveChildData}
          />
        </td></tr>
      </tbody></table>
    );
  }
}


