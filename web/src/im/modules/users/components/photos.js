import ListItem from "./items/photo";
export default class Userphotos extends React.Component{
  constructor(props){
    super(props);
    if(!this.props.id){
      alertMsg("参数错误，点击确定返回！",0,function(){
        window.history.back();
      })
    }    
    this.state = {
      user: {},
      searchData: {},
      searchFlag: 0
    }
  }

  componentDidMount(){
  }  

  receiveChildData=(obj)=>{
    this.setState({user: obj.owner,searchFlag:0});
  }

  render(){
    setTitle(this.state.user.username);
    return (
      <div ref="main" style={{width:"100%",height:"100%"}}>
        <table style={{width:"100%",height:"100%"}}><tbody>
          <tr><td style={{height:"30px"}}>
            <Usernav user={this.state.user}/>
          </td></tr>
          <tr><td style={{overflowY:"scroll",verticalAlign:"top"}}>  
            <Listall 
              apiurl={Config.api+'photo/list?ownerid='+this.props.id+'&typeid=3'} 
              hashurl={"#/users/photos/"+this.props.id}
              backurl={"#/users/photos/"+this.props.id} 
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