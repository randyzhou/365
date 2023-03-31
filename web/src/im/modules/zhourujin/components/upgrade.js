export default class Upgrade extends React.Component{
  constructor(props){
    super(props);
    this.state = {
      sendMsg: {}
    }
  }

  componentDidMount(){
  }

  componentWillReceiveProps=(nextProps)=>{
  }

  sendMsg=()=>{
    if(this.state.sendMsg.msg == ""){
      return false;
    }
    var obj = this.state.sendMsg;
    obj.readState = 1;
    console.log(obj)
    socket.emit('upgrade',obj);
    // var url;
    // if(obj.roomtype == "Personal"){
    //     url = Config.api+'chat/sendprivatechatdata';
    // }else{
    //     url = Config.api+'chat/sendpublicchatdata';
    // }
    // fetchApi({
    //   url,
    //   method: 'POST',
    //   body: obj
    // },function(res){
    //   if (res.results == 1) {
    //   }
    // });

    obj.msg = "";
    this.setState({
      sendMsg: obj
    });
  }

  handleMsgChange=(event)=>{
    var sendMsg = this.state.sendMsg;
    sendMsg.msg = event.target.value;
    var pos = event.target.value.indexOf("\n");
    if(pos>=0) sendMsg.msg = "";
    this.setState({sendMsg});
  }

  render(){
    setTitle("升级信息");

    return (
      <div ref="main" style={{padding:"0px",width:"100%",height:"100%"}}>
        <div style={{height:"20px"}}></div>
        <table style={{width:"100%"}}><tbody><tr>
          <td style={{width:"5px"}}></td>
          <td style={{textAlign:"center"}}>
            <input id="upgrademsg" type="text" style={{width:"99%",maxWidth:"99%",height:"30px",backgroundColor:"#fff",border:"0px"}} value={this.state.sendMsg.msg} onChange={this.handleMsgChange}/>
          </td>
          <td style={{width:"80px",textAlign:"center"}}>
            <div style={{border:"1px solid #ccc",textAlign:"center",width:"50px",height:"30px",lineHeight:"30px",margin:"0 auto",borderRadius:"20px",marginRight:"10px"}} onTouchEnd={this.sendMsg}>发送</div>
          </td>
        </tr></tbody></table>
      </div>
    );

  }
}


