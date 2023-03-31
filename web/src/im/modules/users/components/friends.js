import ListItem from "./items/friend";
export default class Friends extends React.Component{
  constructor(props){
    super(props);
    this.state = {
      user: {},
      searchData: {}
    }
  }

  componentDidMount(){
  }

  receiveChildData=(obj)=>{
    this.setState({user: obj.owner});
  }

  render(){
    let $user = this.state.user;
    return (
      <div style={{width:"100%",height:"100%"}}>
        <table style={{width:"100%",height:"100%"}}><tbody>
          <tr><td style={{height:"30px"}}>
            <Usernav user={this.state.user}/>
          </td></tr>
          <tr><td style={{overflowY:"scroll",verticalAlign:"top"}}>  
            <Listall 
              apiurl={Config.api+'retweet/friendlist?userid1='+this.props.id+'&typeid=5'} 
              hashurl={"#/users/friends/"+this.props.id}
              backurl={"#/users/friends/"+this.props.id} 
              searchData={this.state.searchData}
              item={ListItem}
              searchFlag={this.state.searchFlag}
              receiveChildData={this.receiveChildData}
            />
          </td></tr>
        </tbody></table>
      </div>
    );
  }
}