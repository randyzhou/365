import ListItem from "./items/myRecommendStoreItem.js";
export default class Recommendstore extends React.Component{
  constructor(props){
    super(props);
    var storeId = "";
    if(this.props.params && this.props.params.storeId)
      storeId = this.props.params.storeId;
    this.state = {
      p: 0,
      limit: 10,
      groupName: null,
      noDataShow: 0,
      storeId: storeId,
      lastPage: false,
      searchDivShow: "none"
    }
  }

  loadData=(params,direction)=>{
      var url,loadShow = false;

      if(direction == "up")
        loadShow = true;
      else if(this.state.p >= 1)
        loadShow = true;

      var searchCondition = "";

      if(this.state.groupName){
        if(!(/^\d*$/.test(this.state.groupName))) searchCondition = "groupName="+this.state.groupName+"&";
        else searchCondition = "id="+this.state.groupName+"&";
      }

      url = Config.api+"store/MyRecommendsList?"+searchCondition+"p="+this.state.p+"&limit="+this.state.limit;
      fetchApi({
        url
      },function(res){     
          if(!isJson(res)){
              errMessage("","服务器文件错误！");
              return false;
          }
          if (this.isMounted()) {
            if(res.status == 1){
              resultAlert("没有数据记录！");
            }
            if(res.status == 200){
              var arr;

              if(res.stores.length < 1){
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

              if(this.state.p >= 1) arr = this.state.stores.concat(res.stores);
              else arr = res.stores;

              this.setState({
                p: this.state.p+1,
                stores: arr
              });

              if(this.state.stores.length < 1){
                this.setState({
                  noDataShow: 1
                });
              }else{
                this.setState({
                  noDataShow: 0
                });
              }

            }else{
              errMessage(res);
            }
          }
      }.bind(this))
      .error(function(xhr, status, err) {
          errMessage("网络或服务器文件错误！");
      }.bind(this));

  }

  componentDidMount(){
    var phoneWidth =  parseInt(window.screen.width)>450?450:parseInt(window.screen.width)*0.99;
    this.setState({phoneWidth:phoneWidth});
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
          this.loadData({groupName: this.state.groupName},"search");
      });
      return false;
  }

  showSearchDiv=()=>{
    var searchDivShow = this.state.searchDivShow == "none"?"table":"none";
    this.setState({searchDivShow:searchDivShow});
  }

  handleChange=(event)=>{
    this.setState({
      groupName: event.target.value
    });
  }

  render(){
    setTitle("我的业务店家列表");

    if(!this.state.stores){
      return false;
    }

    var ListItems = this.state.stores.map(function (item,index) {
        return (
          <ListItem key={index} item={item} phoneWidth={this.state.phoneWidth} />
        );
    }.bind(this));

    return (
      <div ref="main" onTouchMove={this.handleScroll.bind(this)}>
          <div className="searchBlock" style={{width:"100%",height:"10px",backgroundColor:"#eee"}}></div>
          <div id="wrapper" style={{backgroundColor:"#eee"}}>
              <table style={{width:"100%", marginTop:"5px", backgroundColor:"white"}}>
                <tbody>
                  {ListItems}
                </tbody>
              </table>
          </div>
          <div ref="bottom" style={{height:"70px"}}></div>
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