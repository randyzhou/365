import ListItem from "./items/member";
export default class Adminmembers extends React.Component{
  constructor(props){
    super(props);

    this.state = {
      shopid: this.props.id,
      paycertified: 0,
      intro: "",
      adminuserid: null,
      adminUserIntroShowTable: "none",
      adminUserPaycertifiedShowTable: "none",
      adminUserCertifiedShowTable: "none",
      adminUserNicknameShowTable: "none",
      adminUserLeftMoneyShowTable: "none",
      adminUserShowTable: "none",
      adminUserPayPriceShowTable: "none",
      offPrice:0,
      itemIndex:null,
      shop: {},
      user: {},
      searchData: {}
    }
  }

  componentDidMount(){
  }  

  handleSearch=(event)=>{
    this.setState({
      p: 0
    }, function(){
      if(this.state.searchData.keywords && this.state.searchData.keywords.length > 0){
        this.setState({searchFlag:1});
      }
    });
    return false;
  }

  handleChange=(event)=>{
    let searchData = this.state.searchData;
    searchData.keywords = event.target.value;
    this.setState({
      searchData
    });
  }  

  adminUserCertifiedShow=()=>{
  	var adminUserIntroShowTable = "none";
  	var adminUserLeftMoneyShowTable = "none";
  	var adminUserPaycertifiedShowTable = "none";
  	var adminUserCertifiedShowTable = "table";
  	var adminUserNicknameTable = "none";
  	var adminUserPayPriceShowTable = "none";
    this.setState({adminUserCertifiedShowTable,adminUserNicknameTable,adminUserPaycertifiedShowTable,adminUserLeftMoneyShowTable,adminUserIntroShowTable,adminUserPayPriceShowTable});
  }

  adminUserNicknameShow=()=>{
  	var adminUserIntroShowTable = "none";
  	var adminUserLeftMoneyShowTable = "none";
  	var adminUserPaycertifiedShowTable = "none";
  	var adminUserCertifiedShowTable = "none";
  	var adminUserNicknameTable = "table";
  	var adminUserPayPriceShowTable = "none";
    this.setState({adminUserCertifiedShowTable,adminUserNicknameTable,adminUserPaycertifiedShowTable,adminUserLeftMoneyShowTable,adminUserIntroShowTable,adminUserPayPriceShowTable});
  }

  adminUserPaycertifiedShow=()=>{
  	var adminUserIntroShowTable = "none";
  	var adminUserLeftMoneyShowTable = "none";
  	var adminUserPaycertifiedShowTable = "table";
  	var adminUserCertifiedShowTable = "none";
  	var adminUserNicknameTable = "none";
  	var adminUserPayPriceShowTable = "none";
    this.setState({adminUserCertifiedShowTable,adminUserNicknameTable,adminUserPaycertifiedShowTable,adminUserLeftMoneyShowTable,adminUserIntroShowTable,adminUserPayPriceShowTable});
  }

  adminUserIntroShow=()=>{
  	var adminUserIntroShowTable = "table";
  	var adminUserLeftMoneyShowTable = "none";
  	var adminUserPaycertifiedShowTable = "none";
  	var adminUserCertifiedShowTable = "none";
  	var adminUserNicknameTable = "none";
  	var adminUserPayPriceShowTable = "none";
    this.setState({adminUserCertifiedShowTable,adminUserNicknameTable,adminUserPaycertifiedShowTable,adminUserLeftMoneyShowTable,adminUserIntroShowTable,adminUserPayPriceShowTable});
  }
  
  adminUserLeftMoneyShow=()=>{
  	var adminUserIntroShowTable = "none";
  	var adminUserLeftMoneyShowTable = "table";
  	var adminUserPaycertifiedShowTable = "none";
  	var adminUserCertifiedShowTable = "none";
  	var adminUserNicknameTable = "none";
  	var adminUserPayPriceShowTable = "none";
    this.setState({adminUserCertifiedShowTable,adminUserNicknameTable,adminUserPaycertifiedShowTable,adminUserLeftMoneyShowTable,adminUserIntroShowTable,adminUserPayPriceShowTable});
  }

  adminUserShow=(user,itemIndex)=>{
  	var paycertified = user.paycertified;
  	var intro = user.intro;
  	var left_money = "";
  	var payPrice = "";
  	var offPrice = 0;
    var pay_cert_name = this.state.shop.pay_cert_name?JSON.parse(this.state.shop.pay_cert_name):[];
    var spcn = pay_cert_name[user.paycertified]||["普通会员","100","1"];
  	var payoff = spcn[1]||100;
    var paycertified = user.paycertified;
    let certified = user.certified;
    let photoname = user.avatar||user.userid;
    this.setState({photoname,adminUserShowTable:"table",adminuserid:user.userid,itemIndex,paycertified,certified,left_money,intro,payPrice,offPrice,payoff,user});
  }  

  hideUserPaycertifiedShow=()=>{
    this.setState({adminUserPaycertifiedShowTable:"none"});
  }

  hideUserCertifiedShow=()=>{
    this.setState({adminUserCertifiedShowTable:"none"});
  }

  hideUserIntroShow=()=>{
    this.setState({adminUserIntroShowTable:"none"});
  }

  hideUserLeftMoneyShow=()=>{
    this.setState({adminUserLeftMoneyShowTable:"none"});
  }
  
  hideUserShow=(id,itemIndex)=>{
    this.setState({adminUserShowTable:"none",adminuserid:id,itemIndex});
  }    
  
  hideUserPayPriceShow=(id,itemIndex)=>{
    this.setState({adminUserPayPriceShowTable:"none"});
  } 
    
  submitUserPayCertified=()=>{
    var url = Config.api + "member/adminuserpaycertified?id="+this.state.adminuserid+"&ownerid="+this.state.shop.id;
    fetchApi({
      url,
      method: "POST",
      body: {paycertified:this.state.paycertified}
    },function(res){
      resultAlert(res);
      if(res.status == 200){
        let user = this.state.user;
        user.paycertified = res.user.paycertified;
        this.setState({user,searchFlag:1});
      }
    }.bind(this));
  }

  submitUserCertified=()=>{
    var url = Config.api + "member/adminusercertified?id="+this.state.adminuserid+"&ownerid="+this.state.shop.id;
    fetchApi({
      url,
      method: "POST",
      body: {certified:this.state.certified}
    },function(res){
      resultAlert(res);
      if(res.status == 200){
        let user = this.state.user;
        user.certified = res.user.certified;
        this.setState({user,searchFlag:1});
      }
    }.bind(this));
  }

  submitUserLeftMoney=()=>{
    var url = Config.api + "member/adminuserleftmoney?id="+this.state.adminuserid+"&ownerid="+this.state.shop.id;
    fetchApi({
      url,
      method: "POST",
      body: {left_money:this.state.left_money}
    },function(res){
      resultAlert(res);
      if(res.result == 2){
        let user = this.state.user;
        user.left_money = res.user.left_money;
        this.setState({user,searchFlag:1});
      }
    }.bind(this));
  }

  submitUserNickname=()=>{
    var url = Config.api + "member/adminusernickname?id="+this.state.adminuserid+"&ownerid="+this.state.shop.id;
    fetchApi({
      url,
      method: "POST",
      body: {nickname:this.state.nickname}
    },function(res){
      resultAlert(res);
      if(res.status == 200){
        let user = this.state.user;
        user.nickname = res.user.nickname;
        this.setState({user,searchFlag:1});
      }
    }.bind(this));
  }

  submitUserIntro=()=>{
    var url = Config.api + "member/adminuserintro?id="+this.state.adminuserid+"&ownerid="+this.state.shop.id;
    fetchApi({
      url,
      method: "POST",
      body: {intro:this.state.intro}
    },function(res){
      resultAlert(res);
      if(res.status == 200){
        let user = this.state.user;
        user.intro = res.user.intro;
        this.setState({user,searchFlag:1});
      }
    }.bind(this));
  }

  submitUserPayPrice=()=>{
    var url = Config.api + "member/adminuserpayprice?id="+this.state.adminuserid+"&ownerid="+this.state.shop.id;
    var postData = {offPrice:this.state.offPrice, payPrice:this.state.payPrice, payoff:this.state.payoff, order_name:this.state.shop.name};
    fetchApi({
      url,
      method: "POST",
      body: postData
    },function(res){
      resultAlert(res);
      if(res.status == 200){
        let user = this.state.user;
        user.payprice = res.user.payprice;
        this.setState({user,searchFlag:1});
      }
    }.bind(this));
  }

  handlePayCertifiedChange=(event)=>{
      this.setState({paycertified:event.target.value});
  }

  handleCertifiedChange=(event)=>{
    this.setState({certified:event.target.value});
  }

  handleUserLeftMoneyChange=(event)=>{
      this.setState({left_money:event.target.value});
  }
  
  handleNicknameChange=(event)=>{
    this.setState({nickname:event.target.value});
  }

  handleIntroChange=(event)=>{
      this.setState({intro:event.target.value});
  }

  handlePayPriceChange=(event)=>{
  	  var value = parseInt(event.target.value);
  	  var payPrice = value;
  	  var offPrice1 = 0;
  	  if(payPrice>0) offPrice1 = value*this.state.payoff;
  	  var offPrice = parseFloat(offPrice1/100).toFixed(2);
      this.setState({payPrice,offPrice});
  }

  handleDelete=(obj)=>{
    let id = obj.userid;
    let url = Config.api + "member/deletefromstore?userid1="+id+"&ownerid="+this.state.shop.id;
    fetchApi({
      url
    },function(res){
      resultAlert(res);
      if(res.status == 200){
        this.setState({searchFlag:1})
        socket.emit("sys",{command:"leaveroom", type:"store", toid:id, roomid:"store"+res.shopid});
      }
    }.bind(this));
  }  
 
  receiveChildData=(obj)=>{
    this.setState({shop: obj.shop,searchFlag:0});
  }

  render(){
    setTitle('会员管理');
    if(!this.state.shop) return null;
    var paycertified = this.state.shop.pay_cert_name?JSON.parse(this.state.shop.pay_cert_name):[];
    var certified = this.state.shop.cert_name?JSON.parse(this.state.shop.cert_name):[];
    var $user = this.state.user || {};
    var spcn = paycertified[$user.paycertified||0]||[];
    
    var PayCertifiedList = paycertified.map(function (item,index) {
      return (
        <option key={index} value={index}>{item[0]}</option>
      );
    }.bind(this));

    var cert_name = JSON.parse(this.state.shop.cert_name||'{}');
    var certified = {1:"新生",2:"助理",3:"中级",4:"高级",5:"专家",6:"管理"};
    if(Object.keys(cert_name).length>0){
      if(cert_name[1]) certified[1] = cert_name[1];
      if(cert_name[2]) certified[2] = cert_name[2];
      if(cert_name[3]) certified[3] = cert_name[3];
      if(cert_name[4]) certified[4] = cert_name[4];
      if(cert_name[5]) certified[5] = cert_name[5];
      if(cert_name[6]) certified[6] = cert_name[6];
    }
    
    return (
      <div ref="main" style={{width:"100%",height:"100%"}}>
        <table style={{height:"100%"}}><tbody>
          <tr style={{height:"30px"}}><td>
            <Storenavadmin shop={this.state.shop}/>
          </td></tr>
          <tr style={{height:"30px"}}><td>
            <table className="searchIconShow" style={{width:"100%"}}><tbody><tr>
              <td className="searchShowDiv" style={{paddingLeft:"5px"}}>
                <input name="keywords" ref="search" placeholder="输入会员ID号或会员名搜索" value={this.state.searchData.keywords||''} onChange={this.handleChange} style={{width:"99%",height:"22px",borderRadius:"5px"}}/>
              </td>
              <td style={{width:"40px",textAlign:"center"}} onTouchEnd={this.handleSearch}>
                <span className="btn-info" style={{display:"inline-block",margin:"1px"}}>搜索</span>
              </td>
            </tr></tbody></table>
          </td></tr>
          <tr style={{height:"30px",lineHeight:"30px"}}><td>
              <table style={{width:"100%",height:"30px",lineHeight:"30px",backgroundColor:"#eee"}}><tbody><tr>
                <td style={{textAlign:"left"}}>
                  <span style={{padding:"3px",color:"darkgreen"}} onTouchEnd={touchEnd.bind(this,"#/storesadmin/certified/"+this.state.shop.id)}>设置级别</span>
                </td>
                <td style={{textAlign:"right"}}>
                  <span style={{padding:"3px",color:"darkgreen"}} onTouchEnd={touchEnd.bind(this,"#/storesadmin/invite/"+this.state.shop.id)}>拉人入群</span>
                </td>
              </tr></tbody></table>
          </td></tr>
          <tr><td style={{overflowY:"scroll",verticalAlign:"top"}}>  
            <Listall 
              apiurl={Config.api + "member/storemembersadmin?ownerid="+this.state.shopid} 
              hashurl={"#/storesadmin/members/"+this.props.id}
              backurl={"#/storesadmin/members/"+this.props.id} 
              searchData={this.state.searchData}
              item={ListItem}
              searchFlag={this.state.searchFlag}
              methods={{'adminUserShow':this.adminUserShow,'handleDelete':this.handleDelete,shop:this.state.shop}}
              receiveChildData={this.receiveChildData}
            />
          </td></tr>
        </tbody></table>

        <table style={{display:this.state.adminUserShowTable,width:"100%",height:"100%",position:"fixed",top:"0px",backgroundColor:"white",zIndex:"1"}}>
          <tbody><tr><td style={{textAlign:"center",verticalAlign:"top"}}>
          
            <table style={{width:"100%",fontSize:"14px",height:"35px"}}><tbody><tr style={{borderBottom:"1px solid darkgray"}}>
            <td style={{textAlign:"center"}} onTouchEnd={this.adminUserPaycertifiedShow}>消费级别</td>
            <td style={{textAlign:"center"}} onTouchEnd={this.adminUserCertifiedShow}>群员级别</td>
            <td style={{textAlign:"center"}} onTouchEnd={this.adminUserNicknameShow}>群员昵称</td>
            <td style={{textAlign:"center"}} onTouchEnd={this.adminUserIntroShow}>设置备注</td>
            <td style={{textAlign:"center"}} onTouchEnd={this.adminUserLeftMoneyShow}>会员充值</td>
            <td style={{textAlign:"center",width:"50px"}} onTouchEnd={this.hideUserShow}>退出</td>
            </tr></tbody></table>

            <table style={{width:"100%", border:"0px",  marginTop:"3px"}}><tbody><tr>
              <td style={{width:"100px",textAlign:"center",verticalAlign:"top"}}>
                  <img src={thumbUrl+"/topuserphotos/"+this.state.photoname+".jpg"} style={{width:"80px",paddingTop:"8px"}} />
              </td>
              <td style={{textAlign:"left"}}>
                <table style={{width:"100%"}}><tbody><tr><td style={{textAlign:"left"}}>
                    {$user.username||$user.username}<br/>
                    {$user.nickname}<br/>
                    消费：{$user.consume_money}元 &nbsp;余额：{$user.left_money}元<br/>
                    消费级别：{spcn[0]||"普通会员"}，{spcn[1]||"100"}折<br/>
                    群员级别：{certified[$user.certified]||"访客"}<br/>
                    会员备注：{$user.intro}<br/>
                    加入日期：{$user.join_time}<br/>
                </td>
                </tr></tbody></table>
              </td>
            </tr></tbody></table>      

            <table style={{display:this.state.adminUserPaycertifiedShowTable,width:"100%"}}>
              <tbody><tr><td style={{textAlign:"center",padding:"10px"}}>
                <div style={{backgroundColor:"white",padding:"10px",border:"1px solid #aaa",margin:"0 auto"}}>
                  <select value={this.state.paycertified||0} onChange={this.handlePayCertifiedChange} style={{borderBottom:"1px #ccc solid",width:"100px",height:"30px"}}>
                  {PayCertifiedList}
                  </select>级
                  <div style={{height:"10px"}}></div>
                  <span className="btn-info" style={{marginRight:"20px"}} onTouchEnd={this.hideUserPaycertifiedShow}>取消</span>
                  <span className="btn-info" onTouchEnd={this.submitUserPayCertified}>确定</span>
                </div>
              </td></tr></tbody>
            </table>

            <table style={{display:this.state.adminUserCertifiedShowTable,width:"100%"}}>
              <tbody><tr><td style={{textAlign:"center",padding:"10px"}}>
                <div style={{backgroundColor:"white",padding:"10px",border:"1px solid #aaa",margin:"0 auto"}}>
                  <select value={this.state.certified||0} onChange={this.handleCertifiedChange} style={{borderBottom:"1px #ccc solid",width:"100px",height:"30px"}}>
                    <option value="1">{certified[1]}</option>
                    <option value="2">{certified[2]}</option>
                    <option value="3">{certified[3]}</option>
                    <option value="4">{certified[4]}</option>
                    <option value="5">{certified[5]}</option>
                    <option value="6">{certified[6]}</option>
                  </select>级
                  <div style={{height:"10px"}}></div>
                  <span className="btn-info" style={{marginRight:"20px"}} onTouchEnd={this.hideUserCertifiedShow}>取消</span>
                  <span className="btn-info" onTouchEnd={this.submitUserCertified}>确定</span>
                </div>
              </td></tr></tbody>
            </table>

            <table style={{display:this.state.adminUserNicknameTable,width:"100%"}}>
              <tbody><tr><td style={{textAlign:"center",padding:"10px"}}>
                <div style={{backgroundColor:"white",padding:"10px",border:"1px solid #aaa",margin:"0 auto"}}>
                  <input value={this.state.nickname||''} onChange={this.handleNicknameChange} style={{borderBottom:"1px #ccc solid",width:"200px",height:"30px"}}/>
                  <div style={{height:"10px"}}></div>
                  <span className="btn-info" style={{marginRight:"20px"}} onTouchEnd={this.hideUserNicknameShow}>取消</span>
                  <span className="btn-info" onTouchEnd={this.submitUserNickname}>确定</span>
                </div>
              </td></tr></tbody>
            </table>

            <table style={{display:this.state.adminUserIntroShowTable,width:"100%"}}>
              <tbody><tr><td style={{textAlign:"center",padding:"10px"}}>
                <div style={{backgroundColor:"white",padding:"10px",border:"1px solid #aaa",margin:"0 auto"}}>
                  <input value={this.state.intro||''} onChange={this.handleIntroChange} style={{borderBottom:"1px #ccc solid",width:"200px",height:"30px"}}/>
                  <div style={{height:"10px"}}></div>
                  <span className="btn-info" style={{marginRight:"20px"}} onTouchEnd={this.hideUserIntroShow}>取消</span>
                  <span className="btn-info" onTouchEnd={this.submitUserIntro}>确定</span>
                </div>
              </td></tr></tbody>
            </table>

            <table style={{display:this.state.adminUserLeftMoneyShowTable,width:"100%"}}>
              <tbody><tr><td style={{textAlign:"center",padding:"10px"}}>
                <div style={{backgroundColor:"white",padding:"10px",border:"1px solid #aaa",margin:"0 auto"}}>
                  充值：<input type="text" value={this.state.left_money||''} onChange={this.handleUserLeftMoneyChange} style={{borderBottom:"1px #ccc solid",width:"100px",height:"30px",marginRight:"5px"}} />元
                  <div style={{height:"10px"}}></div>
                  <span className="btn-info" style={{marginRight:"20px"}} onTouchEnd={this.hideUserLeftMoneyShow}>取消</span>
                  <span className="btn-info" onTouchEnd={this.submitUserLeftMoney}>确定</span>
                </div>
              </td></tr></tbody>
            </table>
                                
          </td></tr></tbody>
          </table>
      </div>
    );
  }
}