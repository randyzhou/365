export default class Article extends React.Component{
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

  receiveChildData=(obj)=>{
    this.setState({user: obj.owner});
  }

  render(){
    setTitle(this.state.user.username);

    return (
      <div style={{width:"100%",height:"100%"}}>
        <table style={{width:"100%",height:"100%"}}><tbody>
          <tr><td style={{height:"30px"}}>
            <Usernav user={this.state.user}/>
          </td></tr>
          <tr><td style={{overflowY:"scroll",verticalAlign:"top"}}>
            <Listarticles 
              apiurl={Config.api+'retweet/articlelist?userid1='+this.props.id} 
              hashurl={"#/users/retweets/"+this.props.id}
              backurl={"#/users/retweets/"+this.props.id} 
              searchData={this.state.searchData}
              searchFlag={this.state.searchFlag}
              item={[]}
              receiveChildData={this.receiveChildData}
              detailurl={"#/users/retweet/"}
              ownerid={this.props.id}
            />
          </td></tr>
        </tbody></table>
      </div>
    );
  }
}