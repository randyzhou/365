import ListItem from "./items/invite";
export default class Admininvite extends React.Component{
  constructor(props){
    super(props);
    this.state = {
      searchData: {},
      searchDivShow: "none",
      scrollTop: 0,
      slides: {startX:0, moveX:0},
      locFlat: false,
      shop: {},
      searchFlag: 0
    };
  }
  
  showAll = () => {
    this.setState({searchData:{}});
  }  

  handleSearch = (type,event) => {
    this.setState({searchFlag:1,searchDivShow: "none"})

  }

  showSearchDiv = () => {
    var searchDivShow = this.state.searchDivShow == "table-row"?"none":"table-row";
    let searchData = this.state.searchData;
    if(searchDivShow == "table-row") searchData = {};
    this.setState({searchDivShow,searchData});
  }

  handleChange = (name,value,event) => {
    let searchData = Object.assign({}, this.state.searchData);
    searchData[name] = value || '';
    if(name == "distance"){
      searchData.latitude_reg = latitude_reg;
      searchData.longitude_reg = longitude_reg;
    }
    
    this.setState({searchData});
  }

  handleSelectChange=(name,v)=>{
    var searchData = this.state.searchData;
    let value = v[0];
    searchData[name] = value;
    if(name == "distance"){
      searchData.latitude_reg = latitude_reg;
      searchData.longitude_reg = longitude_reg;
    }    
    this.setState({searchData});
  }  

  handleAgeSelectChange(obj){
    let searchData = this.state.searchData;
    if(obj.minage && obj.minage != searchData.minage){
      searchData.minage = obj.minage;
    }
    if(obj.maxage && obj.maxage != searchData.maxage){
      searchData.maxage = obj.maxage;
    }
    
    this.setState({searchData});
  }

  handleAreaSelectChange(obj){
    let searchData = this.state.searchData;
    if(obj.homeprovince && obj.homeprovince != searchData.homeprovince){
      searchData.homeprovince = obj.homeprovince;
    }
    if(obj.homecity && obj.homecity != searchData.homecity){
      searchData.homecity = obj.homecity;
    }
    if(obj.workprovince && obj.workprovince != searchData.workprovince){
      searchData.workprovince = obj.workprovince;
    }
    if(obj.workcity && obj.workcity != searchData.workcity){
      searchData.workcity = obj.workcity;
    }
    if(obj.workdistrict && obj.workdistrict != searchData.workdistrict){
      searchData.workdistrict = obj.workdistrict;
    }
    
    this.setState({searchData});
  }

  handleLocationSearch = () => {
    let $this = this;
    let searchData = {};
    searchData.latitude_reg = latitude_reg;
    searchData.longitude_reg = longitude_reg;
    searchData.distance = '1000';
    
    this.setState({searchData},function(){
      $this.handleSearch()
    });
  }  

  joinStore=(userid,join_amount,index)=>{
    alertMsg("您将支付"+join_amount+"元加好友费给对方<br/>同意点确定，不同意点取消。",1,function(){
      var url =  Config.api + "member/joinstorefromusers?userid1="+userid+"&ownerid="+this.props.id;
      fetchApi({
        url
      },function(res){
        if(res.result == 1){
          this.setState({
            searchFlag:1
          });
          socket.emit("sys",{command:"joinroom", type:"Store", toid:userid, roomid:"Store"+this.props.id});
          resultAlert(res);
        }else{
          alertMsg(res);
        }
      }.bind(this));
    }.bind(this));
  }  

  receiveChildData=(obj)=>{
    this.setState({shop: obj.shop,searchFlag:0});
  }  

  render(){
    setTitle("拉人入群");
    if(!this.state.shop){
      return false;
    }

    const row = (rowData, sectionID, rowID) => {
      if(!rowData) return null;
      return (
        <ListItem key={rowData.userid} item={rowData} itemIndex={rowID} joinStore={this.joinStore} shop={this.state.shop}/>
      );
    };


    let minAge = [{label:'最小年龄',value:''}];
    for(let i = 15; i < 66; i++){
      minAge.push({label:i,value:i});
    }
    let maxAge = [{label:'最大年龄',value:''}];
    for(let i = 15; i < 66; i++){
      maxAge.push({label:i,value:i});
    }
    let ageOptions = [minAge,maxAge];
    let homeAreaValue = [this.state.searchData.homeprovince,this.state.searchData.homecity];
    let workAreaValue = [this.state.searchData.workprovince,this.state.searchData.workcity,this.state.searchData.workdistrict];
    let $distanceshow = typeof(this.state.searchData.distance)=="undefined"?true:false;

    return (
      <div ref="main" style={{width:"100%",height:"100%"}}>
        <table style={{width:"100%",height:"100%",marginTop:"0px"}}><tbody>
        <tr style={{height:"30px"}}><td>
            <Storenavadmin shop={this.state.shop}/>  
        </td></tr>
        <tr style={{height:"43px"}}><td>  
          <table style={{width:"100%",backgroundColor:"white"}}><tbody>
          <tr>
            <td style={{width:"80px",textAlign:"center"}}>
              <span style={{marginRight:"5px"}} onTouchEnd={this.showAll}>所有  </span>
            </td>          
            <td style={{textAlign:"center"}} onTouchEnd={this.showSearchDiv}>
              <div style={{borderRadius:"3px",width:"100%",height:"40px",lineHeight:"40px"}}>搜索</div>
            </td>
            <td style={{width:"80px",textAlign:"center"}}>
              <span style={{marginRight:"5px"}} onTouchEnd={this.handleLocationSearch}>附近</span>
            </td>
          </tr>
          </tbody></table>
        </td></tr>
        <tr style={{height:"1px"}}><td></td></tr>
        <tr><td style={{overflowY:"scroll",verticalAlign:"top"}}>  
          <Listall 
            apiurl={Config.api + "member/joinstorelist?ownerid="+this.props.id} 
            hashurl={"#/storesadmin/invite/"+this.props.id}
            backurl={"#/usersadmin/invite/"+this.props.id} 
            searchData={this.state.searchData}
            item={ListItem}
            searchFlag={this.state.searchFlag}
            methods={{'joinStore':this.joinStore,'shop':this.state.shop}}
            receiveChildData={this.receiveChildData}
            shop={this.state.shop}
          />
        </td></tr>
        </tbody></table>   

        <div style={{position:"fixed",zIndex:"1",top:"0px",width:"100%",height:"95%",backgroundColor:"white",margin:"0 auto",display:this.state.searchDivShow}} onTouchStart={this.handleStart} onTouchMove={this.handleMove}>
            <table style={{width:"100%",height:"100%",backgroundColor:"white",margin:"0 auto"}}><tbody>
              <tr><td style={{borderBottom:"1px #ccc solid",padding:"5px",textAlign:"center",backgroundColor:"darkseagreen",height:"40px"}}>
                  <table className="searchTable" style={{width:"100%",height:"40px"}}><tbody>
                  <tr>
                    <td style={{textAlign:"left",backgroundColor:"white",borderRadius:"5px"}}>
                      <InputItem type="text" style={{textAlign:"left",color:"#888"}} placeholder="会员id或会员名" error={this.state.hasError} onErrorClick={this.onErrorClick} onChange={this.handleChange.bind(this,"keywords")} value={this.state.searchData.keywords||""}>
                        <span style={{marginRight:"30px"}}><Icon type={'left'} onTouchEnd={this.showSearchDiv}/></span>
                      </InputItem>
                    </td>
                    <td style={{width:"60px",color:"white",textAlign:"center"}} onTouchEnd={this.handleSearch.bind(this,1)}>搜索</td>
                  </tr>
                  </tbody></table>
              </td></tr>
              <tr><td>
                <div style={{height:"100%",overflowY:"auto"}}>
                  <List style={{backgroundColor:'white'}} className="picker-list">
                    <Picker
                      data={[[{label:'',value:''},{label:'男',value:1},{label:'女',value:2}]]}
                      title="选择性别"
                      cascade={false}
                      extra="请选择"
                      value={[this.state.searchData.usersex||'']}
                      onChange={this.handleSelectChange.bind(this,"usersex")}
                    >
                      <List.Item arrow="horizontal">性别</List.Item>
                    </Picker>
                  </List>
                  <List style={{backgroundColor:'white'}} className="picker-list">
                    <Picker
                        title="年龄范围"
                        data={ageOptions}
                        value={[this.state.searchData.minage||'',this.state.searchData.maxage||'']}
                        cascade={false}
                        onOk={v => this.handleAgeSelectChange({"minage":v[0],"maxage":v[1]})}
                    >
                      <List.Item arrow="horizontal">年龄范围</List.Item>
                    </Picker>
                  </List>
                  <List style={{backgroundColor:'white'}} className="picker-list">
                    <Picker
                      data={[[
                        {label:'',value:''},
                        {label:'级别排序',value:'certified'},
                        {label:'注册顺排',value:'joinfirst'},
                        {label:'注册倒排',value:'joinlast'}
                      ]]}
                      title="级别排序"
                      cascade={false}
                      extra="请选择"
                      value={[this.state.searchData.order||'']}
                      onChange={this.handleSelectChange.bind(this,"order")}
                    >
                      <List.Item arrow="horizontal">显示排序</List.Item>
                    </Picker>
                  </List>
                  <List style={{backgroundColor:'white'}} className="picker-list">
                    <Picker
                        title="家乡籍贯"
                        data={homeAntdDistrict}
                        value={homeAreaValue}
                        onOk={v => this.handleAreaSelectChange({"homeprovince":v[0],"homecity":v[1]})}
                    >
                      <List.Item arrow="horizontal">家乡籍贯</List.Item>
                    </Picker>
                  </List>
                  <List style={{backgroundColor:'white'}} className="picker-list">
                    <Picker
                        title="常住市区"
                        data={workAntdDistrict}
                        value={workAreaValue}
                        onOk={v => this.handleAreaSelectChange({"workprovince":v[0],"workcity":v[1],"workdistrict":v[2]})}
                    >
                      <List.Item arrow="horizontal">常住市区</List.Item>
                    </Picker>
                  </List>
                  <List style={{backgroundColor:'white'}} className="picker-list">
                    <InputItem type="text" style={{textAlign:"right",color:"#888"}} placeholder="街道社区" error={this.state.hasError} onErrorClick={this.onErrorClick} onChange={this.handleChange.bind(this,"town")} value={this.state.searchData.town||""}>
                      街道办镇
                    </InputItem>
                  </List>
                  <List style={{backgroundColor:'white'}} className="picker-list">
                    <Picker
                      data={[[
                        {label:'',value:''},
                        {label:'保留',value:'保留'},
                        {label:'单身',value:'单身'},
                        {label:'已婚',value:'已婚'},
                        {label:'离异',value:'离异'},
                        {label:'非单身',value:'非单身'}
                      ]]}
                      title="感情状态"
                      cascade={false}
                      extra="请选择"
                      value={[this.state.searchData.marry||'']}
                      onChange={this.handleSelectChange.bind(this,"marry")}
                    >
                      <List.Item arrow="horizontal">感情状态</List.Item>
                    </Picker>
                  </List>
   
                  <List style={{backgroundColor:'white'}} className="picker-list">
                    <Picker
                      data={[[
                        {label:'',value:''},
                        {label:'白羊座',value:'白羊座'},
                        {label:'金牛座',value:'金牛座'},
                        {label:'双子座',value:'双子座'},
                        {label:'巨蟹座',value:'巨蟹座'},
                        {label:'狮子座',value:'狮子座'},
                        {label:'处女座',value:'处女座'},
                        {label:'天秤座',value:'天秤座'},
                        {label:'天蝎座',value:'天蝎座'},
                        {label:'射手座',value:'射手座'},
                        {label:'摩羯座',value:'摩羯座'},
                        {label:'水瓶座',value:'水瓶座'},
                        {label:'双鱼座',value:'双鱼座'}
                      ]]}
                      title="星座"
                      cascade={false}
                      extra="请选择"
                      value={[this.state.searchData.constellation||'']}
                      onChange={this.handleSelectChange.bind(this,"constellation")}
                    >
                      <List.Item arrow="horizontal">星座</List.Item>
                    </Picker>
                  </List>
                  <List style={{backgroundColor:'white'}} className="picker-list">
                    <Picker
                      data={[[
                        {label:'',value:''},
                        {label:'共产主义',value:'共产主义'},
                        {label:'基督教',value:'基督教'},
                        {label:'伊斯兰教',value:'伊斯兰教'},
                        {label:'道教',value:'道教'},
                        {label:'佛教',value:'佛教'},
                        {label:'儒教',value:'儒教'},
                        {label:'其它',value:'其它'}
                      ]]}
                      title="宗教信仰"
                      cascade={false}
                      extra="请选择"
                      value={[this.state.searchData.believe||'']}
                      onChange={this.handleSelectChange.bind(this,"believe")}
                    >
                      <List.Item arrow="horizontal">宗教信仰</List.Item>
                    </Picker>
                  </List>
                  <List style={{backgroundColor:'white'}} className="picker-list">
                    <Picker
                      data={[[
                        {label:'',value:''},
                        {label:'找异性对象',value:'找异性对象'},
                        {label:'找兴趣伙伴',value:'找兴趣伙伴'},
                        {label:'找商业合作',value:'找商业合作'},
                        {label:'找创业同志',value:'找创业同志'},
                        {label:'找专业人才',value:'找专业人才'}
                      ]]}
                      title="请选择"
                      cascade={false}
                      extra="请选择"
                      value={[this.state.searchData.lookingfor||'']}
                      onChange={this.handleSelectChange.bind(this,"lookingfor")}
                    >
                      <List.Item arrow="horizontal">交友目的</List.Item>
                    </Picker>
                  </List>
                  <List style={{backgroundColor:'white'}} className="picker-list">
                    <Picker
                      data={[[
                        {label:'',value:''},
                        {label:'初中',value:'初中'},
                        {label:'高中',value:'高中'},
                        {label:'中专',value:'中专'},
                        {label:'大专',value:'大专'},
                        {label:'本科',value:'本科'},
                        {label:'硕士',value:'硕士'},
                        {label:'博士',value:'博士'}
                      ]]}
                      title="学历"
                      cascade={false}
                      extra="请选择"
                      value={[this.state.searchData.education||'']}
                      onChange={this.handleSelectChange.bind(this,"education")}
                    >
                      <List.Item arrow="horizontal">最高学历</List.Item>
                    </Picker>
                  </List>
                  <List style={{backgroundColor:'white'}} className="picker-list">
                    <InputItem type="text" style={{textAlign:"right",color:"#888"}} placeholder="毕业院校" error={this.state.hasError} onErrorClick={this.onErrorClick} onChange={this.handleChange.bind(this,"school")} value={this.state.searchData.school||""}>
                      毕业院校
                    </InputItem>
                  </List>
                  <List style={{backgroundColor:'white'}} className="picker-list">
                    <InputItem type="text" style={{textAlign:"right",color:"#888"}} placeholder="职业" error={this.state.hasError} onErrorClick={this.onErrorClick} onChange={this.handleChange.bind(this,"occupation")} value={this.state.searchData.occupation||""}>
                      从事行业
                    </InputItem>
                  </List>
                  <List style={{backgroundColor:'white'}} className="picker-list">
                    <InputItem type="text" style={{textAlign:"right",color:"#888"}} placeholder="头衔" error={this.state.hasError} onErrorClick={this.onErrorClick} onChange={this.handleChange.bind(this,"jobtitle")} value={this.state.searchData.jobtitle||""}>
                      工作职务
                    </InputItem>
                  </List>
                  <List style={{backgroundColor:'white'}} className="picker-list">
                    <InputItem type="text" style={{textAlign:"right",color:"#888"}} placeholder="期望行业" error={this.state.hasError} onErrorClick={this.onErrorClick} onChange={this.handleChange.bind(this,"likearea")} value={this.state.searchData.likearea||""}>
                      期望行业
                    </InputItem>
                  </List>
                  <List style={{backgroundColor:'white'}} className="picker-list">
                    <InputItem type="text" style={{textAlign:"right",color:"#888"}} placeholder="兴趣社团" error={this.state.hasError} onErrorClick={this.onErrorClick} onChange={this.handleChange.bind(this,"club")} value={this.state.searchData.club||""}>
                      兴趣社团
                    </InputItem>
                  </List>
                  <List style={{backgroundColor:'white'}} className="picker-list">
                    <InputItem type="text" style={{textAlign:"right",color:"#888"}} placeholder="兴趣活动" error={this.state.hasError} onErrorClick={this.onErrorClick} onChange={this.handleChange.bind(this,"act")} value={this.state.searchData.act||""}>
                      兴趣活动
                    </InputItem>
                  </List>
                  <List style={{backgroundColor:'white'}} className="picker-list">
                    <Picker
                      data={[[
                        {label:'',value:''},
                        {label:'1000',value:'1000'},
                        {label:'2000',value:'2000'},
                        {label:'3000',value:'3000'},
                        {label:'4000',value:'4000'},
                        {label:'5000',value:'5000'},
                        {label:'6000',value:'6000'},
                        {label:'7000',value:'7000'},
                        {label:'8000',value:'8000'},
                        {label:'9000',value:'9000'},
                        {label:'10000',value:'10000'},
                        {label:'11000',value:'11000'},
                        {label:'12000',value:'12000'}
                      ]]}
                      title="附近距离"
                      cascade={false}
                      extra="请选择"
                      value={[this.state.searchData.distance||'']}
                      onChange={this.handleSelectChange.bind(this,"distance")}
                    >
                      <List.Item arrow="horizontal">附近距离</List.Item>
                    </Picker>
                  </List>
                </div>  
              </td></tr>  
              <tr><td style={{height:"30px"}}>
                <Button type="primary" style={{width:"100%",position:"fixed",bottom:"0px",borderRadius:"0px"}} onTouchEnd={this.handleSearch}>搜索</Button> 
              </td></tr>
            </tbody></table>
        </div>

      </div>
    );

  }
}