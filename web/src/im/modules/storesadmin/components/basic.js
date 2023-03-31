export default class Adminbasic extends React.Component{
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
      createStoreShow: "none",
      createDetailShow: "block",
      qrShow: "none",
      uploadType:1,
      building: "",
      buidingShow: true,
      locations: [],
      shop: {},
      owner: {},
      provinces: []
    }
  }

  componentDidMount(){
    this.loadData();
    var phoneWidth =  parseInt(window.screen.width)>450?450:parseInt(window.screen.width)*98/100;
    this.setState({phoneWidth:phoneWidth});
  }

  loadData=()=>{
    let id = "";
    if(this.props.id) id = "?shopid="+this.props.id;
    let url = Config.api + "shop/update"+id;
    fetchApi({
      url
    },function(res){     
      if(!isJson(res)){
          errMessage("","服务器文件错误！");
          return false;
      }
      if(res.status == 1){
        this.setState({
          createStoreShow: "table",
          createDetailShow: "none",
          provinces: res.provinces,
          citys: res.citys,
          districts: res.districts,
        });
      }else if(res.status == 200){
        var shop = res.shop;
        this.setState({
          shop: shop,
          owner: res.owner,
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
    var url = Config.api+"shop/createstore";
    fetchApi({
      url,
      method: "POST",
      body: {shopname: this.state.shopname}
    },function(res){
      if(res.result == 0) resultAlert("您没登录！");
      if(res.result == 5) resultAlert("没有创建成功！");
      if(res.result == 1) resultAlert("没填门店名！");
      if(res.result == 2) resultAlert("您已有门店！");
      if(res.result == 3) {
        resultAlert("创建门店成功！");
        this.loadData();
      }
      //else resultAlert("添加失败！");
    }.bind(this));
  }

  handleChange=(name,value,event)=>{
//    var value = "";
    // if(!event) value = this.refs[name].value;
    // else value = event.target.value;
    var validNames = this.validData[name];
    validate(value,name,validNames,this,this.state.shop);
    var shop = this.state.shop;
    shop[name] = value;
    this.setState({shop});
    wait(3000).done(function(){
      this.updateSubmit(name,value);
    }.bind(this));
  }

  handleBuildingChange=(name,value,event)=>{
    this.setState({building:value})
    wait(3000).done(function(){
      if(this.state.shop.city == ""){
        alert("请先填好城市！");
        return false;
      }
      let that = this;
      let url = Config.api + "site/getlocation?place="+value+"&city="+this.state.shop.city;
      fetchApi({
        url
      },function(res){
        if(res.message == "ok"){
          if(res.result.length > 0){
            that.setState({locations:res.result})
          }
        }
      })
    }.bind(this));
  }  

  hanldeBuildingBlur=()=>{
    this.setState({locations:[],buidingShow:"none"});
  }

  handleSelectChange=(name,items,event)=>{
    let value = items[0];
    var shop = this.state.shop;
    shop[name] = value;

    this.setState({shop});
    this.updateSubmit(name,value);

    if(name == "province"){
      let url = Config.api+"site/getCitys?ProvinceName="+value;
      fetchApi({url},function(res){
        let shop = this.state.shop;
        shop.city = '';
        shop.district = '';
        this.setState({
          shop,
          citys: res.citys
        });
      }.bind(this));
    }

    if(name == "city"){
      let url = Config.api+"site/getDistricts?CityName="+value;
      fetchApi({url},function(res){        
        let shop = this.state.shop;
        shop.town = '';
        this.setState({
          shop,
          districts: res.districts
        });
      }.bind(this));
    }
  }

  validData = {
    "name": ["maxLength(30)","minLength(3)","notEmpty()"],
    "town": ["maxLength(30)","minLength(3)","notEmpty()"],
    "road": ["maxLength(30)","minLength(3)","notEmpty()"],
    "building": ["maxLength(30)","minLength(3)","notEmpty()"],
    "phone": ["maxLength(30)","minLength(3)","notEmpty()"],
    "intro": ["maxLength(400)"]
  }

  updateSubmit=(name,value)=>{
    fetchApi({
      url: Config.api+'shop/updateone?shopid='+this.state.shop.id,
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

  showBuildingSetDiv=()=>{
    this.setState({buidingShow:false})
  }

  hideLocations=()=>{
    this.setState({locations:[],building:"",buidingShow:true})
  }

  getCode=()=>{
    var url = "http://www.laoyouji365.com/wxpay.php?shopid="+this.state.shop.id;
    //url = encodeURIComponent(url);
    var cliurl = "http://qr.topscan.com/api.php?text="+url;
    this.setState({qrShow:"block",qrcode:cliurl});
  }

  hideCreateDetailShow=()=>{
  	this.setState({createDetailShow:"none"});
  }

  hideQrShow=()=>{
  	this.setState({qrShow:"none"});
  }

  downloadqr=()=>{
  	alert("点击图片，然后长按图片，即可出现保存到手机的选项！");
  }

  setBuiding=(item)=>{  
    let building = item.name;
    let latitude = item.location.lat;
    let longitude = item.location.lng;
    fetchApi({
      url: Config.api+'shop/updatewblocations?shopid='+this.state.shop.id,
      method: 'POST',
      body: {building,latitude,longitude}
    },function(res){
      resultAlert(res);
      if(res.status != 200){
        let shop = Object.assign({},this.state.shop);
        shop.workbuilding = res.building;
        shop.latitude = res.latitude;
        shop.longitude = res.longitude;
        this.setState({shop});
      }else{
        let shop = Object.assign({},this.state.shop);
        shop.building = building;
        shop.latitude = latitude;
        shop.longitude = longitude;
        this.setState({shop,locations:[],buidingShow:"none"});
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

  ownerDetail=()=>{
    backurl_store = "#/storesadmin/basic/"+this.state.shop.id;
    touchEnd("#/stores/detail/"+this.state.owner.id);
  }

  render(){
    let type = this.state.shop.typeid == 2?"社团":"门店";
    let showFlag = this.state.shop.typeid == 1?"table-row":"none";
    setTitle("编辑"+type+"资料");

    var errMsg = "错误提示";
    var errStyle = {textAlign:"left", color:"red", clear:"left", fontSize:"12px", margin:"3px", clear:"both"};

    let provinceArr = [{label:'',value:''}];
    if(this.state.provinces){
      this.state.provinces.map(function(item,index){
        provinceArr.push({label:item.ProvinceName||'',value:item.ProvinceName||''});
      });
    }

    let cityArr = [{label:'',value:''}];
    if(this.state.citys&&this.state.citys.length>0){
      this.state.citys.map(function(item,index){
        cityArr.push({label:item.CityName||'',value:item.CityName||''});
      });
    }

    let districtArr = [{label:'',value:''}];
    if(this.state.districts&&this.state.districts.length>0){
      this.state.districts.map(function(item,index){
        districtArr.push({label:item.DistrictName||'',value:item.DistrictName||''});
      });
    }
    
    let photoname = this.state.shop.id;

    var locationLists = !this.state.locations?null:this.state.locations.map(function(item,index){
      return(<div onTouchEnd={this.setBuiding.bind(this,item)} style={{heihgt:"30px",lineHeight:"30px",padding:"5px",fontSize:"16px",color:"#666"}}>{item.province}{item.city}{item.district}{item.name}</div>);
    }.bind(this));

    let province = this.state.shop.province?[this.state.shop.province]:[];
    let city = this.state.shop.city?[this.state.shop.city]:[];
    let district = this.state.shop.district?[this.state.shop.district]:[];

    return (
      <div style={{height:"100%",overflowY:"auto"}}>
        <div style={{display:this.state.createDetailShow}}>
          <Storenavadmin shop={this.state.shop}/>
          <table style={{width:"100%"}}><tbody>
            <tr><td style={{textAlign:"center"}}>
              <table style={{width:"100%",position:"relative"}}><tbody><tr>
                <td style={{display:"none",backgroundColor:"#eee",color:"#111",height:"40px",textAlign:"center",verticalAlign:"middle"}} onTouchEnd={this.getCode}>
                	<span style={{color:"maroon",padding:"5px",borderRadius:"3px"}}>收账二维码</span>
                </td>
                <td style={{display:this.state.shop.typeid==1?"table-cell":"none",backgroundColor:"#eee",color:"#111",height:"40px",textAlign:"center",verticalAlign:"middle"}} onTouchEnd={touchEnd.bind(this,"#/storesadmin/paycertified/"+this.state.shop.id)}>
                	<span style={{color:"maroon",padding:"5px",borderRadius:"3px"}}>级别管理</span>
                </td>
                <td style={{display:this.state.shop.typeid==1?"table-cell":"none",backgroundColor:"#eee",color:"#111",height:"40px",textAlign:"center",verticalAlign:"middle"}} onTouchEnd={touchEnd.bind(this,"#/storesadmin/promotion/"+this.state.shop.id)}>
                	<span style={{color:"maroon",padding:"5px",borderRadius:"3px"}}>优惠设置</span>
                </td>
                <td style={{backgroundColor:"#eee",color:"#111",height:"40px",textAlign:"center",verticalAlign:"middle"}} onTouchEnd={touchEnd.bind(this,"#/storesadmin/act/"+this.state.shop.id)}>
                	<span style={{color:"maroon",padding:"5px",borderRadius:"3px"}}>活动管理</span>
                </td>
                <td style={{backgroundColor:"#eee",color:"#111",height:"40px",textAlign:"center",verticalAlign:"middle"}}>
                  <Upload 
                      style={{color:"maroon",width:"65px"}} 
                      title={type+"图片"}
                      uploadurl={photoApi + "/topstore/uploadpic?id="+this.state.shop.id}
                      handleUploadChange={this.handleUploadChange}
                      updateSubmit={this.refreshphotos}
                    />
                </td>
              </tr></tbody></table>
              <img id="userImg" src={photoUrl+"/topstorephotos/"+photoname+".jpg?rd="+this.state.rd} style={{width:this.state.phoneWidth}}/>
            </td></tr>
          </tbody></table>

          <table style={{display:this.state.shop.typeid == 2?"table":"none"}}><tbody><tr><td style={{textAlign:"center",height:"30px"}}>
            <span onTouchEnd={this.ownerDetail}>所属门店：{this.state.owner.name}</span>
          </td></tr></tbody></table>

          <table style={{width:"100%"}}><tbody>
          <tr>
            <td style={{width:"3px"}}></td>
            <td>
              <table style={{width:"99%"}}><tbody>
                <tr><td colSpan="2">
                  <List style={{backgroundColor:'white'}}>
                    <InputItem type="text" style={{textAlign:"right",color:"#888"}} placeholder={type+"名称"} error={this.state.hasError} onErrorClick={this.onErrorClick} onChange={this.handleChange.bind(this,"name")} value={this.state.shop.name||""}>{type}名称</InputItem>
                  </List>   
                </td></tr>
                <tr><td colSpan="2">
                  <List style={{backgroundColor:'white'}}>
                    <TextareaItem
                      placeholder={type+"介绍"}
                      error={this.state.hasError} 
                      onErrorClick={this.onErrorClick} 
                      onChange={this.handleChange.bind(this,"intro")} 
                      value={this.state.shop.intro||""}
                      autoHeight
                      labelNumber={5}
                      style={{textAlign:"left",color:"#888"}}
                    />
                  </List>
                </td></tr>  
                <tr style={{display:showFlag}}><td colSpan="2">
                    <List style={{backgroundColor:'white'}} className="picker-list">
                      <Picker
                        data={[provinceArr]}
                        title="所在省份"
                        cascade={false}
                        extra="所在省份"
                        value={province}
                        onChange={this.handleSelectChange.bind(this,"province")}
                      >
                        <List.Item arrow="horizontal">所在省份</List.Item>
                      </Picker>
                    </List>
                </td></tr> 
                <tr style={{display:showFlag}}><td colSpan="2">
                    <List style={{backgroundColor:'white'}} className="picker-list">
                      <Picker
                        data={[cityArr]}
                        title="所在城市"
                        cascade={false}
                        extra="所在城市"
                        value={city}
                        onChange={this.handleSelectChange.bind(this,"city")}
                      >
                        <List.Item arrow="horizontal">所在城市</List.Item>
                      </Picker>
                    </List>
                </td></tr> 
                <tr style={{display:showFlag}}><td colSpan="2">
                    <List style={{backgroundColor:'white'}} className="picker-list">
                      <Picker
                        data={[districtArr]}
                        title="所在区县"
                        cascade={false}
                        extra="所在区县"
                        value={district}
                        onChange={this.handleSelectChange.bind(this,"district")}
                      >
                        <List.Item arrow="horizontal">所在区县</List.Item>
                      </Picker>
                    </List>
                </td></tr>  
                <tr style={{display:showFlag}}><td colSpan="2">
                  <List style={{backgroundColor:'white'}}>
                    <InputItem type="text" style={{textAlign:"right",color:"#888"}} placeholder="社区村镇" error={this.state.hasError} onErrorClick={this.onErrorClick} onChange={this.handleChange.bind(this,"town")} value={this.state.shop.town||""}>社区村镇</InputItem>
                  </List>   
                </td></tr>
                <tr style={{display:showFlag}}><td colSpan="2">
                  <List style={{backgroundColor:'white'}}>
                    <InputItem type="text" style={{textAlign:"right",color:"#888"}} placeholder="所在道路" error={this.state.hasError} onErrorClick={this.onErrorClick} onChange={this.handleChange.bind(this,"road")} value={this.state.shop.road||""}>所在道路</InputItem>
                  </List>   
                </td></tr>              
                <tr style={{display:showFlag}}><td colSpan="2">
                  <List style={{backgroundColor:'white',display:this.state.buidingShow?"block":"none"}}>
                    <InputItem type="text" disabled={true} style={{textAlign:"right",color:"#888"}} placeholder="建筑名称(必填)" value={this.state.shop.building||""} onTouchEnd={this.showBuildingSetDiv}><span style={{color:"black"}}>建筑名称</span></InputItem>
                  </List>           
                  <List style={{backgroundColor:'white',display:this.state.buidingShow?"none":"block"}}>
                    <InputItem type="text" style={{textAlign:"right",color:"#888"}} placeholder="建筑名称(必填)" error={this.state.hasError} onErrorClick={this.onErrorClick} onBlur={this.hanldeBuildingBlur} onChange={this.handleBuildingChange.bind(this,"building")} value={this.state.building||""}>建筑名称</InputItem>
                  </List>               

                  <div style={{display:this.state.locations.length>0?"block":"none",marginTop:"0px"}}>
                    <table style={{width:"100%"}}><tbody><tr><td style={{heihgt:"30px",lineHeight:"30px",padding:"5px",fontSize:"20px",color:"black",fontWeight:"bold"}}>点击确定选择以下地址</td><td style={{textAlign:"center",width:"40px",padding:"5px",fontSize:"20px",fontWeight:"bold",color:"#666"}} onTouchEnd={this.hideLocations}>X</td></tr></tbody></table>
                    {locationLists}
                  </div>  
                </td></tr>
                <tr style={{display:showFlag}}><td colSpan="2">
                  <List style={{backgroundColor:'white'}}>
                    <InputItem type="text" style={{textAlign:"right",color:"#888"}} placeholder="电话" error={this.state.hasError} onErrorClick={this.onErrorClick} onChange={this.handleChange.bind(this,"phone")} value={this.state.shop.phone||""}>{type}电话</InputItem>
                  </List>   
                </td></tr>  
              </tbody></table>

            </td>
            <td style={{width:"3px"}}></td>
          </tr>
          <tr><td colSpan="3" style={{height:"80px"}}></td></tr>
          </tbody></table>

          <div style={{display:this.state.qrShow,position:"fixed",top:"83px",textAlign:"center",width:"100%",height:"100%",backgroundColor:"white",zIndex:"10000000"}}>
              <div style={{position:"absolute",right:"5px"}} onTouchEnd={this.hideQrShow}>X</div>
            <a href={this.state.qrcode}><img src={this.state.qrcode||"images/loading.gif"}/></a>
              <div className="btn-info" onTouchEnd={this.downloadqr}>点击下载</div>
          </div>

        </div>

        <table style={{display:this.state.createStoreShow,width:"100%",top:"100px"}}>
          <tbody><tr><td style={{padding:"5px",textAlign:"center"}}>
            <input style={{width:"99%",height:"35px",paddingLeft:"5px"}} maxLength="30" value={this.state.shopname||''} onChange={this.handleStoreChange} placeholder={"输入"+type+"名"}/>
            <div style={{height:"10px"}}></div>
            <div style={{width:"100%",height:"40px",lineHeight:"40px",backgroundColor:"#eee"}}>
              <span style={{padding:"5px",color:"darkgreen"}} onTouchEnd={this.handleCreateStore.bind(this,null)}>提交</span>
            </div>  
          </td></tr></tbody>
        </table>
        
        <table style={{zIndex:"10000",position:"fixed",bottom:"0px",width:"100%",backgroundColor:"darkgreen"}}><tbody><tr><td style={{textAlign:"center",height:"35px",lineHeight:"35px"}}>
          <span style={{padding:"3px",color:"white"}} onTouchEnd={touchEnd.bind(this,"#/me/admin")}>关闭</span>
        </td></tr></tbody></table>

      </div>
    );
  }
}