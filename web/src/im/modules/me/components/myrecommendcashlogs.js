import ListItem from "./items/myRecommendCashlogItem.js";

export default class Recommendcash extends React.Component{
  constructor(props){
    super(props);
    this.state = {
      id: this.props.id,
      cash_logs:[]
    }
  }

  componentDidMount(){
    this.selectType();
  }

  selectType=()=>{
    let url = Config.api + "cashlog/myrefincomes";
    fetchApi({
      url
    },function(res){
      if(!isJson(res)){
        alertMsg("服务器文件错误！");
        return false;
      }
      if(res.result == 2){
        this.setState({
          cash_logs: res.cash_logs
        });
      }else{
        resultAlert(res);
      }
    }.bind(this));
  }

  render(){
    if(!this.state.cash_logs) return null;
    setTitle("收入记录");

    var $this = this;
    var OrderListItems = null;
    OrderListItems = !this.state.cash_logs?null:this.state.cash_logs.map(function (item,index) {
      return (
        <ListItem key={index} item={item} id={item.id}/>
      );
    });

    return (
      <div>
        <table style={{width:"100%", marginTop:"5px", backgroundColor:"white"}}>
          <tbody>
            <tr style={{border:"1px #eee solid",height:"30px"}}>
              <td style={{width:"80px",textAlign:"center",borderRight:"1px #eee solid"}}>日期</td>
              <td style={{width:"80px",textAlign:"center",borderRight:"1px #eee solid"}}>支付用户</td>
              <td style={{width:"80px",textAlign:"center"}}>金额(元)</td>
              <td style={{textAlign:"center",borderRight:"1px #eee solid"}}>收入分配</td>
            </tr>
            {OrderListItems}
          </tbody>
        </table>
        <table style={{zIndex:"10000",position:"fixed",bottom:"0px",width:"100%",backgroundColor:"darkgreen"}}><tbody><tr><td style={{textAlign:"center",height:"35px",lineHeight:"35px"}}>
          <span style={{padding:"3px",color:"white"}} onTouchEnd={touchEnd.bind(this,"#/me/refuser")}>关闭</span>
        </td></tr></tbody></table>
      </div>
    );
  }
}