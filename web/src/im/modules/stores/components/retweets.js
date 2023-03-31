import ListItem from "./items/retweet";
export default class Retweets extends React.Component{
  constructor(props){
    super(props);
    this.state = {
      shop: {},
      searchData: {},
      searchFlag: 0
    }
  }

  componentDidMount(){
  }

  receiveChildData=(obj)=>{
    this.setState({shop: obj.owner});
  }

  render(){
    setTitle(this.state.shop.name);

    return (
      <div style={{width:"100%",height:"100%"}}>
        <table style={{width:"100%",height:"100%"}}><tbody>
          <tr><td style={{height:"30px"}}>
            <Storenav store={this.state.shop}/>
          </td></tr>
          <tr><td style={{overflowY:"scroll",verticalAlign:"top"}}>
            <Listall 
              apiurl={Config.api+'retweet/productlist?ownerid='+this.props.id} 
              hashurl={"#/stores/retweets/"+this.props.id}
              backurl={"#/stores/retweets/"+this.props.id} 
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