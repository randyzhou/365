import ListItem from "./items/myRecommendsItem.js";
export default class Recommends extends React.Component{
  constructor(props){
    super(props);
    var storeid = "";
    if(this.props.params && this.props.params.storeid)
      storeid = this.props.params.storeid;
    this.state = {
      p: 0,
      limit: 10,
      userName: null,
      noDataShow: 0,
      storeid: storeid,
      lastPage: false,
      paycertified: 1,
      intro: "",
      adminUserid: null,
      adminUserIntroShowTable: "none",
      adminUserShowTable: "none",
      itemIndex:null,
      users: []
    }
  }

  loadData=(params,direction)=>{
      var url,loadShow = false;

      if(direction == "up")
        loadShow = true;
      else if(this.state.p >= 1)
        loadShow = true;

      var searchCondition = "";

      if(this.state.userName){
        if(!(/^\d*$/.test(this.state.userName))) searchCondition = "userName="+this.state.userName+"&";
        else searchCondition = "userid="+this.state.userName+"&";
      }

      url = Config.api+"user/myrecommends?"+searchCondition+"p="+this.state.p+"&limit="+this.state.limit;
      fetchApi({
        url
      },function(res){     
          if(!isJson(res)){
              alertMsg("","服务器文件错误！");
              return false;
          }
        
          if(res.status == 200){
            var arr;

            if(res.users && res.users.length < 1){
              if(this.state.p >= 1){
                this.setState({
                  lastPage: true
                });
              }else{
                this.setState({
                  lastPage: false
                });
              }
            }

            if(this.state.p >= 1) arr = this.state.users.concat(res.users);
            else arr = res.users;

            this.setState({
              p: this.state.p+1,
              users: arr
            });

            if(this.state.users && this.state.users.length < 1){
              this.setState({
                noDataShow: 1
              });
            }else{
              this.setState({
                noDataShow: 0
              });
            }

          }else{
            alertMsg(res);
          }
        
      }.bind(this));

  }

  componentDidMount(){
      this.loadData();
  }

  handleScroll=(event)=>{
    wait(500).done(function(){
      if(scroll2Bottom(this)){
        if(this.state.p == 0){
          this.setState({
              p: 1
          })
        }
        if(this.state.lastPage){
          return false;
        }
        this.loadData();
      }
    }.bind(this));
  }

  handleSearch=(event)=>{
      this.setState({
          p: 0
      }, function(){
          if(this.state.userName && this.state.userName.length > 0){
            this.loadData({username: this.state.userName},"search");
          }
      });
      return false;
  }

  handleChange=(event)=>{
    this.setState({
      userName: event.target.value
    });
  }

  render(){
    if(!this.state.users) return null;
    setTitle("我推荐的会员");

    var ListItems = !this.state.users?null:this.state.users.map(function (item,index) {
      return (
        <ListItem key={index} itemIndex={index} item={item} />
      );
    }.bind(this));

    return (
      <div ref="main" onTouchMove={this.handleScroll.bind(this)}>
          <div className="searchBlock" style={{width:"100%",marginTop:"5px"}}>
            <table className="searchIconShow" style={{width:"100%"}}><tbody><tr>
              <td className="searchShowDiv" style={{paddingLeft:"5px"}}>
                <input name="username" ref="search" placeholder="输入会员ID号或会员名搜索" value={this.state.userName} onChange={this.handleChange} style={{width:"98%",height:"30px"}}/>
              </td>
              <td style={{width:"60px",textAlign:"center"}} onTouchEnd={this.handleSearch}>
                <button className="btn-info" style={{width:"60px",height:"35px"}}>搜索</button>
              </td>
            </tr></tbody></table>
          </div>
          <div id="wrapper" style={{overflowY:"auto",paddingLeft:"5px"}}>
            <table style={{width:"100%", border:"0px",  marginTop:"3px"}}>
              <tbody>
                <tr style={{height:"30px",lineHeight:"30px"}}><td>ID</td><td>头像</td><td>会员名</td><td style={{width:"57px"}}>所在地</td><td style={{width:"30px"}}>下级</td><td style={{width:"90px",textAlign:"center"}}>加入日期</td></tr>
                {ListItems}
              </tbody>
            </table>
            <table style={{zIndex:"10000",position:"fixed",bottom:"0px",width:"100%",backgroundColor:"darkgreen"}}><tbody><tr><td style={{textAlign:"center",height:"35px",lineHeight:"35px"}}>
              <span style={{padding:"3px",color:"white"}} onTouchEnd={touchEnd.bind(this,"#/me/refuser")}>关闭</span>
            </td></tr></tbody></table>
          </div>

          <div ref="bottom" style={{height:"30px"}}></div>
          <div className={this.state.noDataShow?"show":"hide"} style={{position:"relative",height:"100%",backgroundColor:"white",border:"1px solid white"}}>
              <div className="orderLst" style={{border:"0px",marginTop:"100px"}}>
                  <div style={{textAlign:"center",height:"100%"}}>
                    <label>暂无数据！</label>
                  </div>
              </div>
          </div>
          <div className={this.state.lastPage?"show":"hide"}  style={{position:"relative",top:"2px"}}>
              <div className="orderLst" style={{border:"0px"}}>
                  <div style={{textAlign:"center"}}>
                    <label>已到最后一页！</label>
                  </div>
              </div>
          </div>
      </div>
    );

  }
}