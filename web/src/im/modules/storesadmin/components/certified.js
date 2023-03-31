export default class Admincertified extends React.Component{
  constructor(props){
    super(props);
    this.state = {
      shop: {},
      cert_name: {}
    }
  }

  componentDidMount(){
    if(this.props.id){
      let url = Config.api+"shop/update?shopid="+this.props.id
      fetchApi({
        url
      },function(res){          
        if(!isJson(res)){
            errMessage("","服务器文件错误！");
            return false;
        }
        if(res.status == 200){
          var shop = res.shop;
          this.setState({
            shop,
            cert_name: shop.cert_name?JSON.parse(shop.cert_name):[]
          });
        }else{
          errMessage(res);
        }
      }.bind(this));
    }
    var phoneWidth =  parseInt(window.screen.width)>450?450:parseInt(window.screen.width);
    this.setState({phoneWidth:phoneWidth});
  }

  handleChangeShopCert=(name,event)=>{
    var value = event.target.value;
    var cert_name = this.state.cert_name;
    cert_name[name] = value;
    this.setState({cert_name});
  }

  handleSubmit=()=>{
    let cert_name = JSON.stringify(this.state.cert_name);
    let url = Config.api+"shop/updateone?shopid="+this.props.id
    fetchApi({
      url,
      method:"POST",
      body: {item_name: "cert_name", item_value: cert_name}
    },function(res){        
      if(res.status == 200){
        resultAlert(res);
      }
    });
  }

  updateSubmit=(name,value)=>{
    fetchApi({
      url: Config.api+'shop/updateone?shopid='+this.props.id,
      method: 'POST',
      body: {item_name:name,item_value:value}
    },function(res){
      resultAlert(res);
    }.bind(this));
  }

  handleSelectChange=(name,items,event)=>{
    let value = items[0];
    let shop = this.state.shop;
    shop[name] = value;
    this.setState({shop});
    this.updateSubmit(name,value);
  }

  render(){
    if(this.props.id) setTitle("设置会员级别");
    if(!this.state.shop) return null;
    console.log(this.state)
    return (
      <div style={{width:"100%",height:"100%",overflowY:"auto"}}>
        <Storenavadmin shop={this.state.shop}/>
        <table style={{borderBottom:"1px #ddd solid"}}><tbody><tr><td style={{textAlign:"right",height:"40px"}}>
          <span style={{color:"darkgreen"}} onTouchEnd={this.handleSubmit.bind(this)}>提交</span>
        </td>
        <td style={{width:"10px"}}></td></tr></tbody></table>
        <table style={{width:"95%",margin:"10px"}}><tbody>
          <tr style={{height:"45px"}}><td>
              
          <table style={{width:"95%",margin:"10px"}}><tbody>
            <tr style={{height:"45px"}}>
              <td style={{lineHeight:"30px",verticalAlign:"middle"}}>级别名称:</td>
              <td>
                <table><tbody>
                <tr><td style={{width:"35px",height:"35px",lineHeight:"35px"}}>1级</td><td><input maxLength="6" type="text" className="ipt" style={{width:"100%",lineHeight:"30px",verticalAlign:"middle"}} placeholder="学生" value={this.state.cert_name['1']||''} onChange={this.handleChangeShopCert.bind(this,'1')} /></td></tr>
                <tr><td style={{width:"35px",height:"35px",lineHeight:"35px"}}>2级</td><td><input maxLength="6" type="text" className="ipt" style={{width:"100%",lineHeight:"30px",verticalAlign:"middle"}} placeholder="初级" value={this.state.cert_name['2']||''} onChange={this.handleChangeShopCert.bind(this,'2')} /></td></tr>
                <tr><td style={{width:"35px",height:"35px",lineHeight:"35px"}}>3级</td><td><input maxLength="6" type="text" className="ipt" style={{width:"100%",lineHeight:"30px",verticalAlign:"middle"}} placeholder="中级" value={this.state.cert_name['3']||''} onChange={this.handleChangeShopCert.bind(this,'3')} /></td></tr>
                <tr><td style={{width:"35px",height:"35px",lineHeight:"35px"}}>4级</td><td><input maxLength="6" type="text" className="ipt" style={{width:"100%",lineHeight:"30px",verticalAlign:"middle"}} placeholder="高级" value={this.state.cert_name['4']||''} onChange={this.handleChangeShopCert.bind(this,'4')} /></td></tr>
                <tr><td style={{width:"35px",height:"35px",lineHeight:"35px"}}>5级</td><td><input maxLength="6" type="text" className="ipt" style={{width:"100%",lineHeight:"30px",verticalAlign:"middle"}} placeholder="专家" value={this.state.cert_name['5']||''} onChange={this.handleChangeShopCert.bind(this,'5')} /></td></tr>
                <tr><td style={{width:"35px",height:"35px",lineHeight:"35px"}}>6级</td><td><input maxLength="6" type="text" className="ipt" style={{width:"100%",lineHeight:"30px",verticalAlign:"middle"}} placeholder="管理" value={this.state.cert_name['6']||''} onChange={this.handleChangeShopCert.bind(this,'6')} /></td></tr>
                </tbody></table>
              </td>
            </tr>
          </tbody></table>  
          <table style={{width:"95%",margin:"10px"}}><tbody>
            <tr style={{height:"45px"}}>
              <td>
                <List style={{backgroundColor:'white'}} className="picker-list">
                  <Picker
                    data={[[{label:'1',value:'1'},{label:'2',value:'2'},{label:'3',value:'3'},{label:'4',value:'4'},{label:'5',value:'5'},{label:'6',value:'6'}]]}
                    title="聊天权限"
                    cascade={false}
                    extra="聊天权限"
                    value={[this.state.shop.chat_cert||'1']}
                    onChange={this.handleSelectChange.bind(this,"chat_cert")}
                  >
                    <List.Item arrow="horizontal">聊天权限</List.Item>
                  </Picker>
                </List>
              </td>
            </tr>
          </tbody></table>
          <table style={{width:"95%",margin:"10px"}}><tbody>
            <tr style={{height:"45px"}}>
              <td>
                <List style={{backgroundColor:'white'}} className="picker-list">
                  <Picker
                    data={[[{label:'1',value:'1'},{label:'2',value:'2'},{label:'3',value:'3'},{label:'4',value:'4'},{label:'5',value:'5'},{label:'6',value:'6'}]]}
                    title="发文权限"
                    cascade={false}
                    extra="发文权限"
                    value={[this.state.shop.post_cert||'1']}
                    onChange={this.handleSelectChange.bind(this,"post_cert")}
                  >
                    <List.Item arrow="horizontal">发文权限</List.Item>
                  </Picker>
                </List>
              </td>
            </tr>
          </tbody></table>

        </td></tr></tbody></table>  
        <div style={{height:"45px"}}></div>
      </div>
    );
  }
}