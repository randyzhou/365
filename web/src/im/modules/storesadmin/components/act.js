export default class Adminact extends React.Component{
  constructor(props){
    super(props);

    this.state = {
      shop: {},
      shopname: null,
      shopid: ''
    }
  }

  componentDidMount(){
    this.loadData();
    var phoneWidth =  parseInt(window.screen.width)>450?450:parseInt(window.screen.width);
    this.setState({phoneWidth:phoneWidth});
  }

  loadData=()=>{
    let url = Config.api + "shop/update?shopid="+this.props.id;
    fetchApi({
      url
    },function(res){     
      if(!isJson(res)){
          errMessage("","服务器文件错误！");
          return false;
      }
      if(res.status == 1){
        this.setState({
          createStoreShow: "table"
        });
      }else if(res.status == 200){
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

  handleChange=(name,value,event)=>{
    var shop = this.state.shop;
    shop[name] = value;
    this.setState({shop});
    wait(3000).done(function(){
      this.updateSubmit(name,value);
    }.bind(this));
  }

  handleDateChange=(value)=>{
    let act_date = `${value.getFullYear()}-${value.getMonth()+1}-${value.getDate()}`;
    var shop = this.state.shop;
    shop["act_date"] = act_date;
    this.setState({shop});
    wait(3000).done(function(){
      this.updateSubmit("act_date",act_date);
    }.bind(this));
  }

  updateSubmit=(name,value)=>{
    fetchApi({
      url: Config.api+'shop/updateone?shopid='+this.props.id,
      method: 'POST',
      body: {item_name:name,item_value:value}
    },function(res){
      resultAlert(res);
      if(res.status == 200){
        var shop = this.state.shop;
        shop[name] = value;
        this.setState({shop});
      }
    }.bind(this));
  }  

  handleUploadChange=(picname)=>{
    let rd = Math.random();
    this.setState({rd});
  }

  refreshphotos=()=>{
    console.log("success")
  }

  render(){
    setTitle("活动管理");
    if(!this.state.shop) return null;

    var errMsg = "错误提示";
    var errStyle = {textAlign:"left", color:"red", clear:"left", fontSize:"12px", margin:"3px", clear:"both"};
    let act_date = new Date();
    if(this.state.shop.act_date){
      act_date = new Date(this.state.shop.act_date);
    }
    
    return (
      <div style={{height:"100%",overflowY:"auto"}}>
        <Storenavadmin shop={this.state.shop}/>
        <div>
          <table style={{width:"100%"}}><tbody>
            <tr><td style={{textAlign:"center"}}>
              <table style={{width:"100%",position:"relative"}}><tbody><tr>
                <td style={{backgroundColor:"#eee",color:"#111",height:"40px",textAlign:"center",verticalAlign:"middle"}}>
                </td>
                <td style={{backgroundColor:"#eee",color:"#111",height:"40px",textAlign:"center",verticalAlign:"middle"}}>
                  <span style={{color:"maroon",padding:"5px",borderRadius:"3px"}} onTouchEnd={touchEnd.bind(this,"#/storesadmin/enrolls/"+this.state.shop.id)}>报名管理</span>
                </td>
                <td style={{backgroundColor:"#eee",color:"#111",height:"40px",textAlign:"center",verticalAlign:"middle"}}>
                </td>
                <td style={{backgroundColor:"#eee",color:"#111",height:"40px",textAlign:"center",verticalAlign:"middle"}}>
                  <Upload 
                    style={{color:"maroon",width:"100px"}} 
                    title={"活动图片"}
                    uploadurl={photoApi + "/topstoreact/uploadpic?id="+this.state.shop.id}
                    handleUploadChange={this.handleUploadChange}
                    updateSubmit={this.refreshphotos}
                  />
                </td>
              </tr></tbody></table>
              <img id="userImg" src={photoUrl+"/topstoreactphotos/"+this.state.shop.id+".jpg?rd="+this.state.rd} style={{width:this.state.phoneWidth}}/>
            </td></tr>
          </tbody></table>

          <table style={{width:"100%"}}><tbody>
          <tr>
          <td style={{width:"3px"}}></td>
          <td>
            <table style={{width:"99%"}}><tbody>
              <tr><td colSpan="2">
                <List style={{backgroundColor:'white'}}>
                  <InputItem type="text" style={{textAlign:"right",color:"#888"}} placeholder="活动名称" error={this.state.hasError} onErrorClick={this.onErrorClick} onChange={this.handleChange.bind(this,"act_title")} value={this.state.shop.act_title||""}>活动名称</InputItem>
                </List>   
              </td></tr>
              <tr><td colSpan="2">
                <List style={{backgroundColor:'white'}}>
                  <InputItem type="text" style={{textAlign:"right",color:"#888"}} placeholder="活动地点" error={this.state.hasError} onErrorClick={this.onErrorClick} onChange={this.handleChange.bind(this,"act_place")} value={this.state.shop.act_place||""}>活动地点</InputItem>
                </List>   
              </td></tr>
              <tr><td colSpan="2">
                <List className="date-picker-list">
                  <DatePicker
                    mode="date"
                    title="选择日期"
                    extra="选择日期"
                    value={act_date}
                    onChange={v=>this.handleDateChange(v)}
                  >          
                    <List.Item arrow="horizontal">活动日期</List.Item>
                  </DatePicker>
                </List>
              </td></tr>
              <tr><td colSpan="2">
                <List style={{backgroundColor:'white'}}>
                  <InputItem type="text" style={{textAlign:"right",color:"#888"}} placeholder="开始时间" error={this.state.hasError} onErrorClick={this.onErrorClick} onChange={this.handleChange.bind(this,"act_time")} value={this.state.shop.act_time||""}>开始时间</InputItem>
                </List>   
              </td></tr>  
              <tr><td colSpan="2">
                <List style={{backgroundColor:'white'}}>
                  <InputItem type="text" style={{textAlign:"right",color:"#888"}} placeholder="活动人数" error={this.state.hasError} onErrorClick={this.onErrorClick} onChange={this.handleChange.bind(this,"act_person")} value={this.state.shop.act_person||""}>活动人数</InputItem>
                </List>   
              </td></tr>  
              <tr><td colSpan="2">
                <List style={{backgroundColor:'white'}}>
                  <InputItem type="text" style={{textAlign:"right",color:"#888"}} placeholder="人员要求" error={this.state.hasError} onErrorClick={this.onErrorClick} onChange={this.handleChange.bind(this,"act_invite")} value={this.state.shop.act_invite||""}>人员要求</InputItem>
                </List>   
              </td></tr>  
              <tr><td colSpan="2">
                <List style={{backgroundColor:'white'}}>
                  <InputItem type="text" style={{textAlign:"right",color:"#888"}} placeholder="活动费用" error={this.state.hasError} onErrorClick={this.onErrorClick} onChange={this.handleChange.bind(this,"act_cost")} value={this.state.shop.act_cost||""}>活动费用</InputItem>
                </List>   
              </td></tr>  
              <tr><td colSpan="2">
                <List style={{backgroundColor:'white'}}>
                  <InputItem type="text" style={{textAlign:"right",color:"#888"}} placeholder="联系方式" error={this.state.hasError} onErrorClick={this.onErrorClick} onChange={this.handleChange.bind(this,"act_contact")} value={this.state.shop.act_contact||""}>联系方式</InputItem>
                </List>   
              </td></tr> 
              <tr><td colSpan="2">
                <List style={{backgroundColor:'white'}}>
                  <TextareaItem
                      placeholder="活动详情" 
                      error={this.state.hasError} 
                      onErrorClick={this.onErrorClick} 
                      onChange={this.handleChange.bind(this,"act_detail")} 
                      value={this.state.shop.act_detail||""}
                      autoHeight
                      labelNumber={5}
                      style={{textAlign:"left",color:"#888"}}
                  />
                </List>
              </td></tr>
            </tbody></table>

            <table style={{width:"100%",marginTop:"10px",backgroundColor:"darkgreen"}}><tbody><tr><td style={{textAlign:"center",height:"35px",lineHeight:"35px"}}>
              <span style={{padding:"3px",color:"white"}} onTouchEnd={touchEnd.bind(this,"#/me/admin")}>关闭</span>
            </td></tr></tbody></table>

          </td>
          <td style={{width:"3px"}}></td>
          </tr>
          </tbody></table>

        </div>

      </div>
    );
  }
}