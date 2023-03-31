export default class Adminpromotion extends React.Component{
  constructor(props){
    super(props);
    this.state = {
      errTag: "disabled",
      Errors: {},
      ErrorMsg: {},
      errShow: {},
      inputed: {},
      shop: {},
      shopname: null,
      shopid: null,
      createStoreShow: 0,
      createDetailShow: 0,
      uploadType:1
    }
  }

  componentDidMount(){
    this.loadData();
    var phoneWidth = parseInt(window.screen.width)>450?450:parseInt(window.screen.width);
    this.setState({phoneWidth:phoneWidth});
  }

  loadData=()=>{
    let url = Config.api+"shop/update";
    fetchApi({
      url
    },function(res){
      if(!isJson(res)){
          errMessage("","服务器文件错误！");
          return false;
      }
      if(res.status == 1){
        alert("您还没有建立门店");
        location.href = "#/storesadmin/basic";
        return null;
      }
      if(res.status == 200){
        if(!res.shop){
          alert("您还没有建立门店");
          location.href = "#/storesadmin/basic";
          return null;
        }
        var shop = res.shop;
        this.setState({
          shop: shop,
          provinces: res.provinces,
          citys: res.citys,
          districts: res.districts,
          createDetailShow: "block",
          createStoreShow: "none"
        });
      }else{
        errMessage(res);
      }
    }.bind(this));
  }

  handleStoreChange=(event)=>{
    this.setState({
      shopname: event.target.value
    });
  }

  handleCreateStore=()=>{
    var url = "/store/createStore";
    fetchApi({
      url,
      method: "POST",
      body: {shopname: this.state.shopname}
    },function(res){
      if(res.result == 0) resultAlert("您没登录！");
      if(res.result == 5) resultAlert("没有创建成功！");
      if(res.result == 1) resultAlert("没填店铺名！");
      if(res.result == 2) resultAlert("您已有店铺！");
      if(res.result == 3) {
        resultAlert("创建店铺成功！");
        this.loadData();
      }
      //else resultAlert("添加失败！");
    }.bind(this));
  }

  handleChange=(name,event)=>{
    var value = "";
    if(!event) value = this.refs[name].value;
    else value = event.target.value;

    var validNames = this.validData[name];

    validate(value,name,validNames,this,this.state.shop);
    var shop = this.state.shop;
    shop[name] = value;

    this.setState({
      shop: shop
    });
  }

  validData = {
    "promote_title": ["maxLength(50)","minLength(3)","notEmpty()"],
    "promote_detail": ["maxLength(2000)"]
  }

  handleSubmit=()=>{
    var $this = this;
    let url = Config.api+"shop/updatepromotion";
    fetchApi({
      url,
      method: "POST",
      body: {shop:this.state.shop}
    },function(res){
      if(res.status == 200){
        resultAlert(res);
      }
    });
  }

  handleUploadChange=(picname)=>{
    let rd = Math.random();
    this.setState({rd});
  }

  refreshphotos=()=>{
    console.log("success")
  }

  render(){
    setTitle("促销管理");
    if(!this.state.shop) return null;

    var errMsg = "错误提示";
    var errStyle = {width:"100%", textAlign:"right", color:"red", clear:"left", fontSize:"12px", margin:"3px", clear:"both"};

    return (
      <div style={{width:"100%",height:"100%",overflowY:"auto"}}>
        <Storenavadmin shop={this.state.shop}/>
        <div style={{display:this.state.createDetailShow,width:"100%"}}>
          <table style={{width:"100%"}}><tbody><tr><td style={{padding:"10px",backgroundColor:"#eee",textAlign:"right",height:"3px",lineHeight:"30px"}}>
            <span style={{padding:"10px",color:"green"}} onTouchEnd={this.handleSubmit}>提交</span>
          </td></tr></tbody></table>
          
          <table style={{width:"100%"}}><tbody>
            <tr>
              <td>
                <input type="text" className="ipt" maxLength="50" style={{width:"95%",padding:"5px",lineHeight:"30px",verticalAlign:"middle"}} placeholder="标题必填,3~50个字符" value={this.state.shop.promote_title||''} onChange={this.handleChange.bind(this,"promote_title")} onBlur={this.handleBlur} />
                <em className={this.state.errShow.promote_title?'show':'hide'} style={errStyle}>{this.state.inputed.promote_title || 0}/50  {this.state.ErrorMsg.promote_title}</em>
              </td>
            </tr>
            <tr>
              <td>
                <textarea className="ipt" maxLength="2000" style={{textAlign:"left",width:"95%",padding:"5px",height:"250px",border:"0px",borderTop:"1px #ccc solid"}} placeholder="促销详情，不超过2000个字符" maxLength="2000" value={this.state.shop.promote_detail||''} onChange={this.handleChange.bind(this,"promote_detail")}></textarea>
                <em className={this.state.errShow.promote_detail?'show':'hide'} style={errStyle}>{this.state.inputed.promote_detail || 0}/2000  {this.state.ErrorMsg.promote_detail}</em>
              </td>
            </tr>
          </tbody></table>
          <table style={{width:"100%",marginTop:"10px"}}><tbody>
            <tr><td style={{textAlign:"center"}}>
              <table style={{width:"100%",position:"relative"}}><tbody><tr>
                <td style={{backgroundColor:"#eee",color:"#111",height:"40px",textAlign:"right",verticalAlign:"middle"}}>
                  <Upload 
                    style={{color:"maroon"}} 
                    title={"优惠图片"}
                    uploadurl={photoApi + "/topstorepromote/uploadpic?id="+this.state.shop.id}
                    handleUploadChange={this.handleUploadChange}
                    updateSubmit={this.refreshphotos}
                  />
                </td>
              </tr></tbody></table>
              <img id="userImg" src={photoUrl+"/topstorepromotephotos/"+this.state.shop.id+".jpg?rd="+this.state.rd} style={{width:this.state.phoneWidth}}/>
            </td></tr>
          </tbody></table>
        </div>
        <div style={{height:"20px"}}></div>
      </div>
    );
  }
}