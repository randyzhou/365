export default class Adminpaycertified extends React.Component{
  constructor(props){
    super(props);
    this.state = {
      errTag: "disabled",
      Errors: {},
      ErrorMsg: {},
      errShow: {},
      inputed: {},
      shop: {},
      paycertified: [],
      pay_cert_name: []
    }
  }

  componentDidMount(){
    let url =  Config.api+"shop/updatepaycertified?ownerid="+this.props.id;
    fetchApi({
      url
    },function(res){
        if(!isJson(res)){
            alertMsg("服务器文件错误！");
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
          var pay_cert_name = [];
          var spcn = null;
          if(res.shop.pay_cert_name) spcn = JSON.parse(res.shop.pay_cert_name);
          if(spcn){      	
	        for(var i=0;i<spcn.length;i++){
	        	pay_cert_name.push(spcn[i]);
	        }
          }
          this.setState({
            shop: shop,
            pay_cert_name: pay_cert_name
          });
        }else{
          alertMsg(res);
        }
      }.bind(this));
  }

  handleChangePayCertified=(arr,event)=>{
    var value = event.target.value;
    var index = arr[0];
    var itemIndex = arr[1];
    var pay_cert_name = this.state.pay_cert_name.concat();
    pay_cert_name[index][itemIndex] = value;
    this.setState({pay_cert_name:pay_cert_name});
  }

  handleSubmit=()=>{
    var shop = this.state.shop;
    shop.pay_cert_name = JSON.stringify(this.state.pay_cert_name);
    if(shop.pay_cert_name.length>=250){
      alert("字数太多，请减少级数！");
      return false;
    }
    let url = Config.api+"shop/updatepaycertified?ownerid="+this.props.id;
    fetchApi({
      url,
      method: "POST",
      body: {shop: shop}
    },function(res){
      if(res.status == 200){
        resultAlert(res);
      }
    });
  }

  addItem=()=>{
    var pay_cert_name = this.state.pay_cert_name;
    pay_cert_name.push(["",""]);
    this.setState({
      pay_cert_name: pay_cert_name
    })
  }

  upItem=(index,preIndex)=>{
  	if(preIndex<1) return false;
    var pay_cert_name = this.state.pay_cert_name;
    var item = pay_cert_name[index];
    var preItem = pay_cert_name[preIndex];
    pay_cert_name[preIndex] = item;
    pay_cert_name[index] = preItem;
    this.setState({
      pay_cert_name: pay_cert_name
    })
  }

  deleteItem=(index)=>{
    alertMsg("确定删除"+index+"吗？",1,function(){
      var pay_cert_name = this.state.pay_cert_name.concat();
      pay_cert_name.remove(index);
      this.setState({
        pay_cert_name: pay_cert_name
      })
    }.bind(this));
  }

  render(){
    setTitle("级别管理");
    if(!this.state.shop || !this.state.pay_cert_name){
      return null;
    };
    var $this = this;
    var typeList = this.state.pay_cert_name.map(function(item,index){
//      if(index<1) return false;
      return (
        <tr key={index} style={{height:"35px"}}>
          <td style={{width:"70px",lineHeight:"35px"}}>{index}</td>
          <td><input type="number" maxLength="6" style={{width:"70px",lineHeight:"30px",verticalAlign:"middle"}} placeholder="数字" value={item[2]||''} onChange={$this.handleChangePayCertified.bind(this,[index,2])}/></td>
          <td><input maxLength="6" type="text" style={{width:"70px",lineHeight:"30px",verticalAlign:"middle"}} placeholder="级别名称" value={item[0]||''} onChange={$this.handleChangePayCertified.bind(this,[index,0])}/></td>
          <td><input type="number" maxLength="2" type="text" style={{maxWidth:"80px",lineHeight:"30px",verticalAlign:"middle"}} placeholder="85" value={item[1]||''} value={item[1]} onChange={$this.handleChangePayCertified.bind(this,[index,1])}/></td>
          <td style={{textAlign:"center"}}><span onTouchEnd={$this.deleteItem.bind(this,index)} style={{textAlign:"center",background:"url(image/icon_new.jpg) no-repeat -193px -113px",display:"inline-block",width:"20px",height:"20px"}}></span></td>
        </tr>
      )
    });

    var errMsg = "错误提示";
    var errStyle = {textAlign:"left", color:"red", clear:"left", fontSize:"12px", margin:"3px", clear:"both"};

    return (
      <div style={{width:"100%",height:"100%",overflowY:"auto"}}>
        <Storenavadmin shop={this.state.shop}/>
        <table style={{width:"100%",backgroundColor:"#eee"}}><tbody><tr><td style={{textAlign:"right",height:"40px"}}>
          <span style={{padding:"5px",borderRadius:"3px",color:"green"}} onTouchEnd={this.handleSubmit}>提交</span>
        </td></tr></tbody></table>
        <table style={{width:"99%"}}><tbody>
          <tr style={{height:"40px",lineHeight:"40px"}}><td style={{width:"70px"}}>级别</td><td style={{width:"80px"}}>消费金额</td><td style={{width:"80px"}}>级别名称</td><td>折扣%</td><td style={{width:"80px",textAlign:"center"}}>删除</td></tr>
          {typeList}
          </tbody></table>
          <table style={{marginTop:"10px",width:"100%"}}><tbody><tr><td style={{textAlign:"right"}}>
            <span onTouchEnd={this.addItem} style={{display:"inline-block",width:"75px",textAlign:"center",padding:"5px",borderRadius:"3px",color:"brown"}}>添加级别</span>
          </td>
          <td style={{width:"10px"}}></td></tr>
        </tbody></table>
      </div>
    );
  }
}