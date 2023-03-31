import ListItem from "./items/group";
export default class Groups extends React.Component{
  constructor(props){
    super(props);
    if(!this.props.id){
      alertMsg("参数错误，点击确定返回！",0,function(){
        window.history.back();
      })
    }
    this.state = {
      searchData: {},
      searchFlag: 0,
      shop: {}
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
              apiurl={Config.api+'shop/storegroups?ownerid='+this.props.id+'&typeid=1'} 
              hashurl={"#/stores/groups/"+this.props.id}
              backurl={"#/stores/groups/"+this.props.id} 
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