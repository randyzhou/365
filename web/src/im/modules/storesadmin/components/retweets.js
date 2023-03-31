import ListItem from "./items/retweet";
export default class Adminretweets extends React.Component{
  constructor(props){
    super(props);
	   var phoneWidth =  parseInt(window.screen.width)>450?450:parseInt(window.screen.width);
     this.state = {
      shop: {},
      phoneWidth,
      searchData: {}
    }
  }

  componentDidMount(){
  }  

  deleteRetweet=(obj)=>{
    let id = obj.retweetid;
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
      method: "POST",
      body: {id:id, ownerid:this.state.shop.id, typeid:1}
    },function(res){
      resultAlert(res);
      if(res.result == 1){
        this.setState({searchFlag:1})
      }
    }.bind(this));
  }
  
  receiveChildData=(obj)=>{
    this.setState({shop: obj.owner,searchFlag:0});
  }

  render(){
    setTitle('推品管理');
    if(!this.state.shop) return null;

    return (
      <div ref="main" style={{width:"100%",height:"100%"}}>
        <table style={{height:"100%"}}><tbody>
          <tr style={{height:"30px"}}><td>
            <Storenavadmin shop={this.state.shop}/>
          </td></tr>
          <tr><td style={{overflowY:"scroll",verticalAlign:"top"}}>  
            <Listall 
              apiurl={Config.api+'retweet/productlist?ownerid='+this.props.id} 
              hashurl={"#/storesadmin/retweets/"+this.props.id}
              backurl={"#/storesadmin/retweetts/"+this.props.id} 
              searchData={this.state.searchData}
              item={ListItem}
              searchFlag={this.state.searchFlag}
              receiveChildData={this.receiveChildData}
              methods={{deleteRetweet:this.deleteRetweet}}
            />
          </td></tr>
        </tbody></table>
      </div>
    );
  }
}