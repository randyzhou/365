import StoreItem from "./storeItem.js";
import GroupItem from "./groupItem.js";
import ActItem from "./actItem.js";

export default class Detail extends React.Component{
  constructor(props){
    super(props);
    this.state = {
      id: this.props.id,
      user: null
    }
  }

  componentDidMount(){
    if(this.props.id){
      fetchApi({
        url:Config.api+"user/detail?id="+this.props.id
      },function(res){
        if(!isJson(res)){
            errMessage("","服务器文件错误！");
            return false;
        }
        if(res.status == 200){
          var phoneWidth =  parseInt(window.screen.width)>450?450:parseInt(window.screen.width)-1;
          this.setState({
            phoneWidth,
            user: res.data,
            stores: res.stores,
            groups: res.groups,
            acts: res.acts,
            friend: res.friend
          });
        }else{
          errMessage(res);
        }
      }.bind(this));

    }
  }

  historyBack = ()=>{
    history.back();
  }

  render() {
    if(!this.state.user) return null;

    var id = this.state.id;
    var $user = this.state.user;
    setTitle($user.username);

    var StoreItems = !this.state.stores?null:this.state.stores.map(function (item,index) {
        return (
          <StoreItem key={index} item={item} />
        );
    });

    var GroupItems = !this.state.groups?null:this.state.groups.map(function (item,index) {
        return (
          <GroupItem key={index} item={item} />
        );
    });

    var ActItems = !this.state.acts?null:this.state.acts.map(function (item,index) {
        return (
          <ActItem key={index} item={item} />
        );
    });

    let photoname = this.state.user.avatar?this.state.user.avatar:this.state.user.userid;

    return (
        <table style={{width:"100%",height:"100%"}}>
        <tbody>
          <tr><td style={{height:"30px"}}>
            <Usernav user={$user} friend={this.state.friend}/>
          </td></tr>
          <tr><td style={{width:"100%",height:"100%",overflowY:"auto"}}>
            <div style={{width:"100%",height:"100%",overflowY:"auto"}}>
      					<table style={{width:"100%"}}><tbody>
                  <tr><td style={{width:"100%"}}>
      							<Img id="userLogo" style={{width:this.state.phoneWidth}} src={photoUrl+"/topuserphotos/"+photoname+".jpg"} />
      					</td></tr></tbody></table>

                <List renderHeader={() => '基本资料'} className="my-list">
                  <table className="user_detail_table"><tbody><tr>
                    <td className="first_td"></td>
                    <td className="second_td">性别</td>
                    <td className="third_td"><div className="user_detail_div">{$user.usersex==1?"男":"女"}</div></td>
                    <td className="last_td"></td>
                  </tr></tbody></table>
                  <table className="user_detail_table"><tbody><tr>
                    <td className="first_td"></td>
                    <td className="second_td">出生</td>
                    <td className="third_td"><div className="user_detail_div">{$user.userbirthday}</div></td>
                    <td className="last_td"></td>
                  </tr></tbody></table>                  
                  <table className="user_detail_table"><tbody><tr>
                    <td className="first_td"></td>
                    <td className="second_td">血型</td>
                    <td className="third_td"><div className="user_detail_div">{$user.bloodtype}</div></td>
                    <td className="last_td"></td>
                  </tr></tbody></table>
                  <table className="user_detail_table"><tbody><tr>
                    <td className="first_td"></td>
                    <td className="second_td">星座</td>
                    <td className="third_td"><div className="user_detail_div">{$user.constellation}</div></td>
                    <td className="last_td"></td>
                  </tr></tbody></table>
                  <table className="user_detail_table"><tbody><tr>
                    <td className="first_td"></td>
                    <td className="second_td">感情状态</td>
                    <td className="third_td"><div className="user_detail_div">{$user.marry}</div></td>
                    <td className="last_td"></td>
                  </tr></tbody></table> 
                  <table className="user_detail_table"><tbody><tr>
                    <td className="first_td"></td>
                    <td className="second_td">籍贯</td>
                    <td className="third_td"><div className="user_detail_div">{$user.homeprovince + $user.homecity}</div></td>
                    <td className="last_td"></td>
                  </tr></tbody></table> 
                  <table className="user_detail_table"><tbody><tr>
                    <td className="first_td"></td>
                    <td className="second_td">居住地</td>
                    <td className="third_td"><div className="user_detail_div">{$user.workprovince + $user.workcity + $user.workdistrict + $user.worktown + $user.workstreet}</div></td>
                    <td className="last_td"></td>
                  </tr></tbody></table> 
                </List>

                <List renderHeader={() => '教育程度'} className="my-list">
                  <table className="user_detail_table"><tbody><tr>
                    <td className="first_td"></td>
                    <td className="second_td">毕业院校</td>
                    <td className="third_td"><div className="user_detail_div">{$user.school}</div></td>
                    <td className="last_td"></td>
                  </tr></tbody></table> 
                  <table className="user_detail_table"><tbody><tr>
                    <td className="first_td"></td>
                    <td className="second_td">最高学历</td>
                    <td className="third_td"><div className="user_detail_div">{$user.education}</div></td>
                    <td className="last_td"></td>
                  </tr></tbody></table> 
                  <table className="user_detail_table"><tbody><tr>
                    <td className="first_td"></td>
                    <td className="second_td">所学专业</td>
                    <td className="third_td"><div className="user_detail_div">{$user.specialist}</div></td>
                    <td className="last_td"></td>
                  </tr></tbody></table> 
                </List>

                <List renderHeader={() => '工作名片'} className="my-list">
                  <table className="user_detail_table"><tbody><tr>
                    <td className="first_td"></td>
                    <td className="second_td">公司名称</td>
                    <td className="third_td"><div className="user_detail_div">{$user.companyname}</div></td>
                    <td className="last_td"></td>
                  </tr></tbody></table> 
                  <table className="user_detail_table"><tbody><tr>
                    <td className="first_td"></td>
                    <td className="second_td">真名职务</td>
                    <td className="third_td"><div className="user_detail_div">{$user.realname+" "+$user.duty}</div></td>
                    <td className="last_td"></td>
                  </tr></tbody></table> 
                  <table className="user_detail_table"><tbody><tr>
                    <td className="first_td"></td>
                    <td className="second_td">联系地址</td>
                    <td className="third_td"><div className="user_detail_div">{$user.companyaddress}</div></td>
                    <td className="last_td"></td>
                  </tr></tbody></table> 
                  <table className="user_detail_table"><tbody><tr>
                    <td className="first_td"></td>
                    <td className="second_td">公司电话</td>
                    <td className="third_td"><div className="user_detail_div">{$user.companytel}</div></td>
                    <td className="last_td"></td>
                  </tr></tbody></table> 
                  <table className="user_detail_table"><tbody><tr>
                    <td className="first_td"></td>
                    <td className="second_td">公司网址</td>
                    <td className="third_td"><div className="user_detail_div" onTouchEnd={touchEnd.bind(this,"http://"+$user.url)}>{$user.url}</div></td>
                    <td className="last_td"></td>
                  </tr></tbody></table> 
                  <table className="user_detail_table"><tbody><tr>
                    <td className="first_td"></td>
                    <td className="second_td">公司简介</td>
                    <td className="third_td"><div className="user_detail_div">{$user.companykeywords}</div></td>
                    <td className="last_td"></td>
                  </tr></tbody></table> 
                  <table className="user_detail_table"><tbody><tr>
                    <td className="first_td"></td>
                    <td className="second_td">职务级别</td>
                    <td className="third_td"><div className="user_detail_div">{$user.jobtitle}</div></td>
                    <td className="last_td"></td>
                  </tr></tbody></table> 
                  <table className="user_detail_table"><tbody><tr>
                    <td className="first_td"></td>
                    <td className="second_td">工作职责</td>
                    <td className="third_td"><div className="user_detail_div">{$user.occupation}</div></td>
                    <td className="last_td"></td>
                  </tr></tbody></table> 
                </List>

                <List renderHeader={() => '事业发展'} className="my-list">
                  <table className="user_detail_table"><tbody><tr>
                    <td className="first_td"></td>
                    <td className="second_td">职业技能</td>
                    <td className="third_td"><div className="user_detail_div">{$user.advantage}</div></td>
                    <td className="last_td"></td>
                  </tr></tbody></table> 
                  <table className="user_detail_table"><tbody><tr>
                    <td className="first_td"></td>
                    <td className="second_td">语言技能</td>
                    <td className="third_td"><div className="user_detail_div">{$user.languages}</div></td>
                    <td className="last_td"></td>
                  </tr></tbody></table> 
                  <table className="user_detail_table"><tbody><tr>
                    <td className="first_td"></td>
                    <td className="second_td">工作经历</td>
                    <td className="third_td"><div className="user_detail_div">{$user.workexperience}</div></td>
                    <td className="last_td"></td>
                  </tr></tbody></table> 
                  <table className="user_detail_table"><tbody><tr>
                    <td className="first_td"></td>
                    <td className="second_td">行业方向</td>
                    <td className="third_td"><div className="user_detail_div">{$user.likearea}</div></td>
                    <td className="last_td"></td>
                  </tr></tbody></table> 
                  <table className="user_detail_table"><tbody><tr>
                    <td className="first_td"></td>
                    <td className="second_td">理想职务</td>
                    <td className="third_td"><div className="user_detail_div">{$user.idealjob}</div></td>
                    <td className="last_td"></td>
                  </tr></tbody></table> 
                  <table className="user_detail_table"><tbody><tr>
                    <td className="first_td"></td>
                    <td className="second_td">进修技能</td>
                    <td className="third_td"><div className="user_detail_div">{$user.needskills}</div></td>
                    <td className="last_td"></td>
                  </tr></tbody></table> 
                </List>

                <List renderHeader={() => '个性特征'} className="my-list">
                  <table className="user_detail_table"><tbody><tr>
                    <td className="first_td"></td>
                    <td className="second_td">性格脾气</td>
                    <td className="third_td"><div className="user_detail_div">{$user.character}</div></td>
                    <td className="last_td"></td>
                  </tr></tbody></table>  
                  <table className="user_detail_table"><tbody><tr>
                    <td className="first_td"></td>
                    <td className="second_td">饮食习惯</td>
                    <td className="third_td"><div className="user_detail_div">{$user.tasts}</div></td>
                    <td className="last_td"></td>
                  </tr></tbody></table>  
                  <table className="user_detail_table"><tbody><tr>
                    <td className="first_td"></td>
                    <td className="second_td">阅读偏好</td>
                    <td className="third_td"><div className="user_detail_div">{$user.reading}</div></td>
                    <td className="last_td"></td>
                  </tr></tbody></table>  
                  <table className="user_detail_table"><tbody><tr>
                    <td className="first_td"></td>
                    <td className="second_td">爱好研究</td>
                    <td className="third_td"><div className="user_detail_div">{$user.lovestudy}</div></td>
                    <td className="last_td"></td>
                  </tr></tbody></table>  
                  <table className="user_detail_table"><tbody><tr>
                    <td className="first_td"></td>
                    <td className="second_td">欣赏品质</td>
                    <td className="third_td"><div className="user_detail_div">{$user.lovecharacter}</div></td>
                    <td className="last_td"></td>
                  </tr></tbody></table>  
                  <table className="user_detail_table"><tbody><tr>
                    <td className="first_td"></td>
                    <td className="second_td">拒绝忍受</td>
                    <td className="third_td"><div className="user_detail_div">{$user.rejectcharacter}</div></td>
                    <td className="last_td"></td>
                  </tr></tbody></table>  
                </List>

                <List renderHeader={() => '思想观念'} className="my-list">
                  <table className="user_detail_table"><tbody><tr>
                    <td className="first_td"></td>
                    <td className="second_td">世界观</td>
                    <td className="third_td"><div className="user_detail_div">{$user.believe}</div></td>
                    <td className="last_td"></td>
                  </tr></tbody></table>  
                  <table className="user_detail_table"><tbody><tr>
                    <td className="first_td"></td>
                    <td className="second_td">人生观</td>
                    <td className="third_td"><div className="user_detail_div">{$user.lifeview}</div></td>
                    <td className="last_td"></td>
                  </tr></tbody></table>  
                  <table className="user_detail_table"><tbody><tr>
                    <td className="first_td"></td>
                    <td className="second_td">价值观</td>
                    <td className="third_td"><div className="user_detail_div">{$user.valueview}</div></td>
                    <td className="last_td"></td>
                  </tr></tbody></table>  
                  <table className="user_detail_table"><tbody><tr>
                    <td className="first_td"></td>
                    <td className="second_td">金钱观</td>
                    <td className="third_td"><div className="user_detail_div">{$user.moneyview}</div></td>
                    <td className="last_td"></td>
                  </tr></tbody></table>  
                  <table className="user_detail_table"><tbody><tr>
                    <td className="first_td"></td>
                    <td className="second_td">事业观</td>
                    <td className="third_td"><div className="user_detail_div">{$user.workingview}</div></td>
                    <td className="last_td"></td>
                  </tr></tbody></table>  
                  <table className="user_detail_table"><tbody><tr>
                    <td className="first_td"></td>
                    <td className="second_td">朋友观</td>
                    <td className="third_td"><div className="user_detail_div">{$user.friendview}</div></td>
                    <td className="last_td"></td>
                  </tr></tbody></table> 
                  <table className="user_detail_table"><tbody><tr>
                    <td className="first_td"></td>
                    <td className="second_td">家庭观</td>
                    <td className="third_td"><div className="user_detail_div">{$user.familyview}</div></td>
                    <td className="last_td"></td>
                  </tr></tbody></table>  
                </List>

                <List renderHeader={() => '社交倾向'} className="my-list">
                  <table className="user_detail_table"><tbody><tr>
                    <td className="first_td"></td>
                    <td className="second_td">交友目的</td>
                    <td className="third_td"><div className="user_detail_div">{$user.lookingfor}</div></td>
                    <td className="last_td"></td>
                  </tr></tbody></table> 
                  <table className="user_detail_table"><tbody><tr>
                    <td className="first_td"></td>
                    <td className="second_td">兴趣社团</td>
                    <td className="third_td"><div className="user_detail_div">{$user.club}</div></td>
                    <td className="last_td"></td>
                  </tr></tbody></table> 
                  <table className="user_detail_table"><tbody><tr>
                    <td className="first_td"></td>
                    <td className="second_td">兴趣活动</td>
                    <td className="third_td"><div className="user_detail_div">{$user.act}</div></td>
                    <td className="last_td"></td>
                  </tr></tbody></table> 
                </List>

                <List renderHeader={() => '个人介绍'} className="my-list">
                  <div style={{width:"95%",wordBreak:"break-all",fontSize:"17px",color:"#888",padding:"10px"}}>{$user.intro?$user.intro:"无"}</div>
                </List>

                <List renderHeader={() => '所在店家'} className="my-list">
                  <table><tbody><tr><td style={{width:"10px"}}></td><td>{StoreItems?StoreItems:"无"}</td></tr></tbody></table>
                </List>

                <List renderHeader={() => '所在社团'} className="my-list">
                  <table><tbody><tr><td style={{width:"10px"}}></td><td>{GroupItems?GroupItems:"无"}</td></tr></tbody></table>
                </List>

                <List renderHeader={() => '报名活动'} className="my-list">
                  <table><tbody><tr><td style={{width:"10px"}}></td><td>{ActItems?ActItems:"无"}</td></tr></tbody></table>
                </List>
                
            </div>
          </td></tr>
          <tr><td style={{height:"30px"}}>
              <table style={{width:"100%",backgroundColor:"#eee"}}><tbody><tr>
              <td style={{width:"80px"}}>
              </td>
              <td style={{textAlign:"center",height:"30px",lineHeight:"30px"}}>
              </td>
              <td style={{width:"80px",textAlign:"right"}}>
                <span style={{marginRight:"10px",marginTop:"10px",display:"block"}} onTouchEnd={this.historyBack}><Icon type="cross"/></span>
              </td></tr></tbody></table>
          </td></tr>
          </tbody></table>
    );
  }
}


