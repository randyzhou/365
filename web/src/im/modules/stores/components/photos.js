import ListItem from "./items/photo";
export default class Photos extends React.Component{
  constructor(props){
    super(props);
    if(!this.props.id){
      alertMsg("参数错误，点击确定返回！",0,function(){
        window.history.back();
      })
    }    
    this.state = {
      shop: {},
      searchData: {},
      searchFlag: 0
    }
  }

  componentDidMount(){
  }

  receiveChildData=(obj)=>{
    this.setState({shop: obj.owner,searchFlag:0});
  }

  render(){
    setTitle(this.state.shop.name);

    return (
      <div ref="main" style={{width:"100%",height:"100%"}}>
        <table style={{width:"100%",height:"100%"}}><tbody>
          <tr><td style={{height:"30px"}}>
            <Storenav store={this.state.shop}/>
          </td></tr>
          <tr><td style={{overflowY:"scroll",verticalAlign:"top"}}>  
            <Listall 
              apiurl={Config.api+'photo/list?ownerid='+this.props.id+'&typeid=1'} 
              hashurl={"#/stores/photos/"+this.props.id}
              backurl={"#/stores/photos/"+this.props.id} 
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