import ListItem from "./items/act.js";

export default class Acts extends React.Component{
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
    setTitle(this.state.user.username);
    var $user = this.state.user;
    return (
        <table style={{width:"100%",height:"100%"}}>
        <tbody>
          <tr><td style={{height:"30px"}}>
            <Usernav user={$user}/>
          </td></tr>
          <tr><td style={{overflowY:"scroll",verticalAlign:"top"}}>  
            <Listall 
              apiurl={Config.api + "user/useracts?ownerid="+this.props.id} 
              hashurl={"#/users/acts/"+this.props.id}
              backurl={"#/users/acts/"+this.props.id} 
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


