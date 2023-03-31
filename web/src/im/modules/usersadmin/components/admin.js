const nowTimeStamp = Date.now();
const now = new Date(nowTimeStamp);
const now1 = new Date();
let year = now1.getFullYear();
let month = now1.getMonth()+1;
let date = now1.getDate();
const today = year+'-'+month+'-'+date;
const utcOffset = new Date(now.getTime() - (now.getTimezoneOffset() * 60000));

let minDate = new Date(nowTimeStamp - 2489768017000);
const maxDate = new Date(nowTimeStamp - 489768017000);

class Admin extends React.Component{
  constructor(props){
    super(props);
    this.state = {
      errTag: "disabled",
      Errors: {},
      ErrorMsg: {},
      errShow: {},
      inputed: {},
      user: {},
      provinces: null,
      homecitys: null,
      workcitys: null,
      districts: null,
      sValue: 0,
      date: now,
      idt: utcOffset.toISOString().slice(0, 10),
      locations: [],
      workbuidingShow: "none",
      workbuilding: '',
      user: {},
      files: [{}]
    }

    this.validData = {
      "user_name": ["maxLength(28)","minLength(6)","notEmpty()"]
    }
  }

  componentDidMount(){
    let phoneWidth = parseInt(window.screen.width);
    let url = Config.api+"user/update";
    fetchApi({
      url
    },function(res){
      this.setState({
        user: res.user,
        provinces: res.provinces,
        homecitys: res.homecitys,
        workcitys: res.workcitys,
        districts: res.districts,
        phoneWidth,
        files:[{url: photoUrl+'/topuserphotos/'+res.user.avatar+'.jpg',id: res.user.userid,}]
      });
    }.bind(this));
  }

  updateSubmit=(name,value)=>{
    fetchApi({
      url: Config.api+'user/updateone',
      method: 'POST',
      body: {item_name:name,item_value:value}
    },function(res){
      resultAlert(res);
      if(res.status != 200){
        var user = this.state.user;
        user[name] = value;
        this.setState({user});
      }
    }.bind(this));
  }

  handleChange=(name,value)=>{
    var validNames = this.validData[name];
    validate(value,name,validNames,this,this.state.user);
    var user = this.state.user;
    user[name] = value;
    this.setState({user});
    wait(3000).done(function(){
      this.updateSubmit(name,value);
    }.bind(this));
  }

  showWorkbuildingSetDiv=()=>{
    this.setState({workbuidingShow:"block"})
  }

  hideLocations=()=>{
    this.setState({locations:[],workbuilding:"",workbuidingShow:"none"})
  }

  handleBuildingChange=(name,value)=>{
    this.setState({workbuilding:value})
    wait(3000).done(function(){
      if(this.state.user.workcity == ""){
        alert("请先填好所在城市！");
        return false;
      }
      let that = this;
      let url = Config.api + "site/getlocation?place="+value+"&city="+this.state.user.workcity;
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

  setWorkbuiding=(item)=>{
    let workbuilding = item.name;
    let latitude = item.location.lat;
    let longitude = item.location.lng;
    fetchApi({
      url: Config.api+'user/updatewblocations',
      method: 'POST',
      body: {workbuilding,latitude,longitude}
    },function(res){
      resultAlert(res);
      if(res.status != 200){
        let user = Object.assign({},this.state.user);
        user.workbuilding = res.workbuilding;
        user.latitude = res.latitude;
        user.longitude = res.longitude;
        this.setState({user});
      }else{
        let user = Object.assign({},this.state.user);
        user.workbuilding = workbuilding;
        user.latitude = latitude;
        user.longitude = longitude;
        this.setState({locations:[],user,workbuidingShow:"none"});
      }
    }.bind(this));
  }

  handleDateChange=(value)=>{
    let userbirthday = `${value.getFullYear()}-${value.getMonth()+1}-${value.getDate()}`;
    var user = this.state.user;
    user["userbirthday"] = userbirthday;
    this.setState({user});
    wait(3000).done(function(){
      this.updateSubmit("userbirthday",userbirthday);
    }.bind(this));
  }

  handleSelectChange=(name,v)=>{
    var user = this.state.user;
    let value = v[0];
    user[name] = value;
    this.setState({user});
    this.updateSubmit(name,value);
  }

  handleAreaSelectChange=(obj)=>{
    console.log(obj)
    let user = this.state.user;
    if(obj.homeprovince && obj.homeprovince != user.homeprovince){
      user.homeprovince = obj.homeprovince;
      this.updateSubmit("homeprovince",user.homeprovince);
    }
    if(obj.homecity && obj.homecity != user.homecity){
      user.homecity = obj.homecity;
      this.updateSubmit("homecity",user.homecity);
    }
    if(obj.workprovince && obj.workprovince != user.workprovince){
      user.workprovince = obj.workprovince;
      this.updateSubmit("workprovince",user.workprovince);
    }
    if(obj.workcity && obj.workcity != user.workcity){
      user.workcity = obj.workcity;
      this.updateSubmit("workcity",user.workcity);
    }
    if(obj.workdistrict && obj.workdistrict != user.workdistrict){
      user.workdistrict = obj.workdistrict;
      this.updateSubmit("workdistrict",user.workdistrict);
    }

    this.setState({user});
  }

  handleUploadChange=(picname)=>{
    let rd = Math.random();
    this.setState({rd});
  }

  render(){
    setTitle("修改个人资料");
    if(!this.state.user.userid) return null;

    const { files } = this.state;

    var errMsg = "错误提示";
    var errStyle = {textAlign:"left", color:"red", clear:"left", fontSize:"12px", margin:"3px", clear:"both"};

    let homeAreaValue = [this.state.user.homeprovince||"湖南省",this.state.user.homecity||"长沙市"];
    let workAreaValue = [this.state.user.workprovince||"湖南省",this.state.user.workcity||"长沙市",this.state.user.workdistrict||"岳麓区"];
    //const { getFieldProps, getFieldError } = this.props.form;

    var locationLists = !this.state.locations?null:this.state.locations.map(function(item,index){
      return(<div onTouchEnd={this.setWorkbuiding.bind(this,item)} style={{heihgt:"30px",lineHeight:"30px",padding:"5px",fontSize:"16px",color:"#666"}}>{item.province}{item.city}{item.district}{item.name}</div>);
    }.bind(this));

    return (
      <form style={{width:"100%",height:"100%",overflowY:"auto"}}>
        <Usernavadmin user={this.state.user}/>
        <table style={{width:"99%",height:"100%"}}><tbody>
          <tr><td>
              
            <table style={{width:"100%",marginTop:"0px"}}><tbody>
              <tr><td style={{textAlign:"center"}}>
                <table style={{width:"100%",position:"relative"}}><tbody><tr>
                  <td style={{backgroundColor:"#eee",width:"80px",height:"40px",textAlign:"center",verticalAlign:"middle"}}>
                  </td>
                  <td style={{backgroundColor:"#eee",textAlign:"center"}}></td>
                  <td style={{backgroundColor:"#eee",width:"80px",height:"40px",textAlign:"center",verticalAlign:"middle"}}>
                    <Upload 
                      style={{color:"darkgreen"}} 
                      title="个人照片"
                      uploadurl={photoApi + "/topuser/uploadpic?id="+this.state.user.userid}
                      handleUploadChange={this.handleUploadChange}
                      updateSubmit={this.updateSubmit}
                    />
                  </td>
                </tr></tbody></table>
                <img id="userImg" src={this.state.userpic?this.state.userpic:photoUrl+"/topuserphotos/"+this.state.user.userid+".jpg?rd="+this.state.rd} style={{width:this.state.phoneWidth}}/>
              </td></tr>
            </tbody></table>

            <table className={"user_admin_table"}><tbody>
              <tr><td colSpan="2" className={"info-top"}><b>基本资料</b></td></tr>
            </tbody></table>
            <List style={{backgroundColor:'white'}} className="picker-list">
              <Picker
                data={[[{label:'男',value:1},{label:'女',value:2}]]}
                title="选择性别"
                cascade={false}
                extra="请选择(可选)"
                value={[parseInt(this.state.user.usersex)||1]}
                onChange={this.handleSelectChange.bind(this,"usersex")}
              >
                <List.Item arrow="horizontal">性别</List.Item>
              </Picker>
            </List>
            <List className="date-picker-list">
              <DatePicker
                mode="date"
                title="选择日期"
                extra="Optional"
                minDate={minDate}
                maxDate={maxDate}
                value={new Date(this.state.user.userbirthday)}
                onChange={v=>this.handleDateChange(v)}
              >          
                <List.Item arrow="horizontal">生日</List.Item>
              </DatePicker>
            </List>

            <List style={{backgroundColor:'white'}} className="picker-list">
                  <Picker
                    data={[[
                      {label:'鼠',value:'鼠'},
                      {label:'牛',value:'牛'},
                      {label:'虎',value:'虎'},
                      {label:'兔',value:'兔'},
                      {label:'龙',value:'龙'},
                      {label:'蛇',value:'蛇'},
                      {label:'马',value:'马'},
                      {label:'羊',value:'羊'},
                      {label:'猴',value:'猴'},
                      {label:'鸡',value:'鸡'},
                      {label:'狗',value:'狗'},
                      {label:'猪',value:'猪'}
                    ]]}
                    title="选择生肖"
                    cascade={false}
                    extra="请选择(可选)"
                    value={[this.state.user.shengxiao||'龙']}
                    onChange={this.handleSelectChange.bind(this,"shengxiao")}
                  >
                    <List.Item arrow="horizontal">生肖</List.Item>
                  </Picker>
            </List>

            <List style={{backgroundColor:'white'}} className="picker-list">
                  <Picker
                    data={[[
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
                    title="选择星座"
                    cascade={false}
                    extra="请选择(可选)"
                    value={[this.state.user.constellation||'白羊座']}
                    onChange={this.handleSelectChange.bind(this,"constellation")}
                  >
                    <List.Item arrow="horizontal">星座</List.Item>
                  </Picker>
            </List>
            <List style={{backgroundColor:'white'}} className="picker-list">
                  <Picker
                    data={[[
                      {label:'A型',value:'A型'},
                      {label:'B型',value:'B型'},
                      {label:'AB型',value:'AB型'},
                      {label:'O型',value:'O型'}
                    ]]}
                    title="选择血型"
                    cascade={false}
                    extra="请选择(可选)"
                    value={[this.state.user.bloodtype||'A型']}
                    onChange={this.handleSelectChange.bind(this,"bloodtype")}
                  >
                    <List.Item arrow="horizontal">血型</List.Item>
                  </Picker>
            </List>
            <List style={{backgroundColor:'white'}} className="picker-list">
              <Picker
                  title="选择所在地区"
                  extra="请选择(可选)"
                  data={homeAntdDistrict}
                  value={homeAreaValue}
                  onOk={v => this.handleAreaSelectChange({"homeprovince":v[0],"homecity":v[1]})}
              >
                  <List.Item arrow="horizontal">籍贯</List.Item>
              </Picker>
            </List>  
            <List style={{backgroundColor:'white'}} className="picker-list">
                  <Picker
                    data={[[
                      {label:'保留',value:'保留'},
                      {label:'单身',value:'单身'},
                      {label:'离异',value:'离异'},
                      {label:'已婚',value:'已婚'},
                      {label:'非单身',value:'非单身'}
                    ]]}
                    title="选择感情状态"
                    cascade={false}
                    extra="请选择(可选)"
                    value={[this.state.user.marry||"保留"]}
                    onChange={this.handleSelectChange.bind(this,"marry")}
                  >
                    <List.Item arrow="horizontal">感情状态</List.Item>
                  </Picker>
            </List>

            <table className={"user_admin_table"}><tbody>
              <tr><td colSpan="2" className={"info-top"}><b>常住地址</b>(必填资料)</td></tr>
            </tbody></table>
            <List style={{backgroundColor:'white'}} className="picker-list">
              <Picker
                  title="选择省市区(必选)"
                  data={workAntdDistrict}
                  value={workAreaValue}
                  onOk={v => this.handleAreaSelectChange({"workprovince":v[0],"workcity":v[1],"workdistrict":v[2]})}
              >
                  <List.Item arrow="horizontal">常住市区</List.Item>
              </Picker>
            </List>  
            <List style={{backgroundColor:'white'}}>
              <InputItem 
                type="text" 
                placeholder="街道办或镇(必填)" 
                error={this.state.hasError} 
                onErrorClick={this.onErrorClick} 
                moneyKeyboardAlign="right"
                style={{textAlign:"right",color:"#888"}}
                onChange={this.handleChange.bind(this,"worktown")}
                value={this.state.user.worktown||""}>街道乡镇</InputItem>
            </List>
            <List style={{backgroundColor:'white'}}>
              <InputItem type="text" style={{textAlign:"right",color:"#888"}} placeholder="道路名称(必填)" error={this.state.hasError} onErrorClick={this.onErrorClick} onChange={this.handleChange.bind(this,"workstreet")} value={this.state.user.workstreet||""}>道路名称</InputItem>
            </List>
            <List style={{backgroundColor:'white'}}>
              <InputItem type="text" disabled={true} style={{textAlign:"right",color:"#888"}} placeholder="建筑名称(必填)" value={this.state.user.workbuilding||""} onTouchEnd={this.showWorkbuildingSetDiv}><span style={{color:"black"}}>建筑名称</span></InputItem>
            </List>           
            <List style={{position:"relative",backgroundColor:'white',top:"-45px",display:this.state.workbuidingShow}}>
              <InputItem type="text" style={{textAlign:"right",color:"#888"}} placeholder="建筑名称(必填)" error={this.state.hasError} onErrorClick={this.onErrorClick} onChange={this.handleBuildingChange.bind(this,"workbuilding")} value={this.state.workbuilding||""}>建筑名称</InputItem>
            </List>   

            <div style={{display:this.state.locations.length>0?"block":"none",marginTop:"-40px"}}>
                <table style={{width:"100%"}}><tbody><tr><td style={{heihgt:"30px",lineHeight:"30px",padding:"5px",fontSize:"20px",color:"black",fontWeight:"bold"}}>点击确定选择以下地址</td><td style={{textAlign:"center",width:"40px",padding:"5px",fontSize:"20px",fontWeight:"bold",color:"#666"}} onTouchEnd={this.hideLocations}>X</td></tr></tbody></table>
                {locationLists}
            </div>         

            <table className={"user_admin_table"}><tbody>
              <tr><td colSpan="2" className={"info-top"}><b>教育程度</b></td></tr>
            </tbody></table>
            <List style={{backgroundColor:'white'}}>
              <InputItem type="text" style={{textAlign:"right",color:"#888"}} placeholder="毕业院校" error={this.state.hasError} onErrorClick={this.onErrorClick} onChange={this.handleChange.bind(this,"school")} value={this.state.user.school||""}>毕业院校</InputItem>
            </List>
            <List style={{backgroundColor:'white'}}>
              <InputItem type="text" style={{textAlign:"right",color:"#888"}} placeholder="所学专业" error={this.state.hasError} onErrorClick={this.onErrorClick} onChange={this.handleChange.bind(this,"specialist")} value={this.state.user.specialist||""}>所学专业</InputItem>
            </List>    
            <List style={{backgroundColor:'white'}} className="picker-list">
                  <Picker
                    data={[[
                      {label:'保留',value:'保留'},
                      {label:'初中',value:'初中'},
                      {label:'高中',value:'高中'},
                      {label:'中专',value:'中专'},
                      {label:'大专',value:'大专'},
                      {label:'本科',value:'本科'},
                      {label:'硕士',value:'硕士'},
                      {label:'博士',value:'博士'}
                    ]]}
                    title="选择学历"
                    cascade={false}
                    extra="请选择(可选)"
                    value={[this.state.user.education||'保留']}
                    onChange={this.handleSelectChange.bind(this,"education")}
                  >
                    <List.Item arrow="horizontal">学历</List.Item>
                  </Picker>
            </List>            
            <table className={"user_admin_table"}><tbody>
              <tr><td colSpan="2" className={"info-top"}><b>工作状况</b></td></tr>
            </tbody></table>  
            <List style={{backgroundColor:'white'}}>
              <InputItem type="text" style={{textAlign:"right",color:"#888"}} placeholder="供职公司" error={this.state.hasError} onErrorClick={this.onErrorClick} onChange={this.handleChange.bind(this,"companyname")} value={this.state.user.companyname||""}>供职公司</InputItem>
            </List>
            <List style={{backgroundColor:'white'}}>
              <InputItem type="text" style={{textAlign:"right",color:"#888"}} placeholder="公司地址" error={this.state.hasError} onErrorClick={this.onErrorClick} onChange={this.handleChange.bind(this,"companyaddress")} value={this.state.user.companyaddress||""}>公司地址</InputItem>
            </List>
            <List style={{backgroundColor:'white'}}>
              <InputItem type="text" style={{textAlign:"right",color:"#888"}} placeholder="公司网址" error={this.state.hasError} onErrorClick={this.onErrorClick} onChange={this.handleChange.bind(this,"url")} value={this.state.user.url||""}>公司网址</InputItem>
            </List>   
            <List style={{backgroundColor:'white'}}>
              <InputItem type="text" style={{textAlign:"right",color:"#888"}} placeholder="公司简介" error={this.state.hasError} onErrorClick={this.onErrorClick} onChange={this.handleChange.bind(this,"companykeywords")} value={this.state.user.companykeywords||""}>公司简介</InputItem>
            </List>   
            <List style={{backgroundColor:'white'}}>
              <InputItem type="text" style={{textAlign:"right",color:"#888"}} placeholder="真实姓名" error={this.state.hasError} onErrorClick={this.onErrorClick} onChange={this.handleChange.bind(this,"realname")} value={this.state.user.realname||""}>真实姓名</InputItem>
            </List>   
            <List style={{backgroundColor:'white'}}>
              <InputItem type="text" style={{textAlign:"right",color:"#888"}} placeholder="公司简介" error={this.state.hasError} onErrorClick={this.onErrorClick} onChange={this.handleChange.bind(this,"duty")} value={this.state.user.duty||""}>公司简介</InputItem>
            </List>   
            <List style={{backgroundColor:'white'}}>
              <InputItem type="text" style={{textAlign:"right",color:"#888"}} placeholder="工作职务" error={this.state.hasError} onErrorClick={this.onErrorClick} onChange={this.handleChange.bind(this,"companykeywords")} value={this.state.user.companykeywords||""}>工作职务</InputItem>
            </List>   
            <List style={{backgroundColor:'white'}}>
              <InputItem type="text" style={{textAlign:"right",color:"#888"}} placeholder="职务级别" error={this.state.hasError} onErrorClick={this.onErrorClick} onChange={this.handleChange.bind(this,"jobtitle")} value={this.state.user.jobtitle||""}>职务级别</InputItem>
            </List>    
            <List style={{backgroundColor:'white'}}>
              <InputItem type="text" style={{textAlign:"right",color:"#888"}} placeholder="工作职责" error={this.state.hasError} onErrorClick={this.onErrorClick} onChange={this.handleChange.bind(this,"occupation")} value={this.state.user.occupation||""}>工作职责</InputItem>
            </List> 
            
            <table className={"user_admin_table"}><tbody>
              <tr><td colSpan="2" className={"info-top"}><b>事业发展</b></td></tr>
            </tbody></table>
            <List style={{backgroundColor:'white'}}>
              <InputItem type="text" style={{textAlign:"right",color:"#888"}} placeholder="职业技能" error={this.state.hasError} onErrorClick={this.onErrorClick} onChange={this.handleChange.bind(this,"advantage")} value={this.state.user.advantage||""}>职业技能</InputItem>
            </List> 
            <List style={{backgroundColor:'white'}}>
              <InputItem type="text" style={{textAlign:"right",color:"#888"}} placeholder="语言技能" error={this.state.hasError} onErrorClick={this.onErrorClick} onChange={this.handleChange.bind(this,"languages")} value={this.state.user.languages||""}>语言技能</InputItem>
            </List> 
            <List style={{backgroundColor:'white'}}>
              <InputItem type="text" style={{textAlign:"right",color:"#888"}} placeholder="工作职责" error={this.state.hasError} onErrorClick={this.onErrorClick} onChange={this.handleChange.bind(this,"occupation")} value={this.state.user.occupation||""}>工作职责</InputItem>
            </List> 
            <List style={{backgroundColor:'white'}}>
              <InputItem type="text" style={{textAlign:"right",color:"#888"}} placeholder="工作经历" error={this.state.hasError} onErrorClick={this.onErrorClick} onChange={this.handleChange.bind(this,"workexperience")} value={this.state.user.workexperience||""}>工作经历</InputItem>
            </List> 
            <List style={{backgroundColor:'white'}}>
              <InputItem type="text" style={{textAlign:"right",color:"#888"}} placeholder="行业方向" error={this.state.hasError} onErrorClick={this.onErrorClick} onChange={this.handleChange.bind(this,"likearea")} value={this.state.user.likearea||""}>行业方向</InputItem>
            </List> 
            <List style={{backgroundColor:'white'}}>
              <InputItem type="text" style={{textAlign:"right",color:"#888"}} placeholder="理想职业" error={this.state.hasError} onErrorClick={this.onErrorClick} onChange={this.handleChange.bind(this,"idealjob")} value={this.state.user.idealjob||""}>理想职业</InputItem>
            </List> 
            <List style={{backgroundColor:'white'}}>
              <InputItem type="text" style={{textAlign:"right",color:"#888"}} placeholder="进修技能" error={this.state.hasError} onErrorClick={this.onErrorClick} onChange={this.handleChange.bind(this,"needskills")} value={this.state.user.needskills||""}>进修技能</InputItem>
            </List> 

            <table className={"user_admin_table"}><tbody>
              <tr><td colSpan="2" className={"info-top"}><b>个性特征</b></td></tr>
            </tbody></table>
    
            <List style={{backgroundColor:'white'}}>
              <InputItem type="text" style={{textAlign:"right",color:"#888"}} placeholder="性格脾气" error={this.state.hasError} onErrorClick={this.onErrorClick} onChange={this.handleChange.bind(this,"character")} value={this.state.user.character||""}>性格脾气</InputItem>
            </List>  
            <List style={{backgroundColor:'white'}}>
              <InputItem type="text" style={{textAlign:"right",color:"#888"}} placeholder="饮食口味" error={this.state.hasError} onErrorClick={this.onErrorClick} onChange={this.handleChange.bind(this,"tasts")} value={this.state.user.tasts||""}>饮食口味</InputItem>
            </List>  
            <List style={{backgroundColor:'white'}}>
              <InputItem type="text" style={{textAlign:"right",color:"#888"}} placeholder="阅读偏好" error={this.state.hasError} onErrorClick={this.onErrorClick} onChange={this.handleChange.bind(this,"reading")} value={this.state.user.reading||""}>阅读偏好</InputItem>
            </List>  
            <List style={{backgroundColor:'white'}}>
              <InputItem type="text" style={{textAlign:"right",color:"#888"}} placeholder="爱好研究" error={this.state.hasError} onErrorClick={this.onErrorClick} onChange={this.handleChange.bind(this,"lovestudy")} value={this.state.user.lovestudy||""}>爱好研究</InputItem>
            </List>  
            <List style={{backgroundColor:'white'}}>
              <InputItem type="text" style={{textAlign:"right",color:"#888"}} placeholder="欣赏品质" error={this.state.hasError} onErrorClick={this.onErrorClick} onChange={this.handleChange.bind(this,"lovecharacter")} value={this.state.user.lovecharacter||""}>欣赏品质</InputItem>
            </List>  
            <List style={{backgroundColor:'white'}}>
              <InputItem type="text" style={{textAlign:"right",color:"#888"}} placeholder="不能忍受" error={this.state.hasError} onErrorClick={this.onErrorClick} onChange={this.handleChange.bind(this,"rejectcharacter")} value={this.state.user.rejectcharacter||""}>不能忍受</InputItem>
            </List>
            
            <table className={"user_admin_table"}><tbody>
              <tr><td colSpan="2" className={"info-top"}><b>思想状态</b></td></tr>
            </tbody></table>  
            <List style={{backgroundColor:'white'}}>
              <InputItem type="text" style={{textAlign:"right",color:"#888"}} placeholder="世界观" error={this.state.hasError} onErrorClick={this.onErrorClick} onChange={this.handleChange.bind(this,"believe")} value={this.state.user.believe||""}>世界观</InputItem>
            </List>  
            <List style={{backgroundColor:'white'}}>
              <InputItem type="text" style={{textAlign:"right",color:"#888"}} placeholder="人生观" error={this.state.hasError} onErrorClick={this.onErrorClick} onChange={this.handleChange.bind(this,"lifeview")} value={this.state.user.lifeview||""}>人生观</InputItem>
            </List>  
            <List style={{backgroundColor:'white'}}>
              <InputItem type="text" style={{textAlign:"right",color:"#888"}} placeholder="价值观" error={this.state.hasError} onErrorClick={this.onErrorClick} onChange={this.handleChange.bind(this,"valueview")} value={this.state.user.valueview||""}>价值观</InputItem>
            </List>  
            <List style={{backgroundColor:'white'}}>
              <InputItem type="text" style={{textAlign:"right",color:"#888"}} placeholder="金钱观" error={this.state.hasError} onErrorClick={this.onErrorClick} onChange={this.handleChange.bind(this,"moneyview")} value={this.state.user.moneyview||""}>金钱观</InputItem>
            </List>  
            <List style={{backgroundColor:'white'}}>
              <InputItem type="text" style={{textAlign:"right",color:"#888"}} placeholder="事业观" error={this.state.hasError} onErrorClick={this.onErrorClick} onChange={this.handleChange.bind(this,"workingview")} value={this.state.user.workingview||""}>事业观</InputItem>
            </List>  
            <List style={{backgroundColor:'white'}}>
              <InputItem type="text" style={{textAlign:"right",color:"#888"}} placeholder="朋友观" error={this.state.hasError} onErrorClick={this.onErrorClick} onChange={this.handleChange.bind(this,"friendview")} value={this.state.user.friendview||""}>朋友观</InputItem>
            </List>  
            <List style={{backgroundColor:'white'}}>
              <InputItem type="text" style={{textAlign:"right",color:"#888"}} placeholder="家庭观" error={this.state.hasError} onErrorClick={this.onErrorClick} onChange={this.handleChange.bind(this,"familyview")} value={this.state.user.familyview||""}>家庭观</InputItem>
            </List>

            <table className={"user_admin_table"}><tbody>
              <tr><td colSpan="2" className={"info-top"}><b>社交状态</b></td></tr>
            </tbody></table>  
            <List style={{backgroundColor:'white'}} className="picker-list">
                  <Picker
                    data={[[
                      {label:'',value:''},
                      {label:'找异性对象',value:'找异性对象'},
                      {label:'找兴趣伙伴',value:'找兴趣伙伴'},
                      {label:'找商业合作',value:'找商业合作'},
                      {label:'找创业同志',value:'找创业同志'},
                      {label:'找专业人才',value:'找专业人才'},
                      {label:'都行',value:'都行'}
                    ]]}
                    title="选择交友目的"
                    cascade={false}
                    extra="请选择(可选)"
                    value={[this.state.user.lookingfor||'']}
                    onChange={this.handleSelectChange.bind(this,"lookingfor")}
                  >
                    <List.Item arrow="horizontal">交友目的</List.Item>
                  </Picker>
            </List>

            <List style={{backgroundColor:'white'}}>
              <InputItem type="text" style={{textAlign:"right",color:"#888"}} placeholder="兴趣社团" error={this.state.hasError} onErrorClick={this.onErrorClick} onChange={this.handleChange.bind(this,"club")} value={this.state.user.club||""}>兴趣社团</InputItem>
            </List>  
            <List style={{backgroundColor:'white'}}>
              <InputItem type="text" style={{textAlign:"right",color:"#888"}} placeholder="兴趣活动" error={this.state.hasError} onErrorClick={this.onErrorClick} onChange={this.handleChange.bind(this,"act")} value={this.state.user.act||""}>兴趣活动</InputItem>
            </List>

            <table className={"user_admin_table"}><tbody>
              <tr><td colSpan="2" className={"info-top"}><b>个人简介</b></td></tr>
            </tbody></table>
            <List style={{backgroundColor:'white'}}>
            <TextareaItem
                placeholder="心语" 
                error={this.state.hasError} 
                onErrorClick={this.onErrorClick} 
                onChange={this.handleChange.bind(this,"intro")} 
                value={this.state.user.intro||""}
                autoHeight
                labelNumber={5}
                style={{textAlign:"left",color:"#888"}}
              />
            </List>
            
          </td></tr>
        </tbody></table>
        <div style={{height:"20px"}}></div>
      </form>
    );
  }
}

//const TestWrapper = createForm()(Admin);
//export default TestWrapper;

export default Admin