export default class Listall extends React.Component {
  constructor(props) {
    super(props);
    this.pageNo = 0;
    const dataSource = new ListView.DataSource({
      rowHasChanged: (row1, row2) => row1 !== row2,
    });
    this.state = {
      dataSource,
      refreshing: true,
      isLoading: true,
      hasMore: true,
      scrollTop: 0,
      locFlat: false
    };
  }
  
  componentDidMount(){
    this.loadData();
  }
  
  componentWillReceiveProps(nextProps) {
    if(nextProps.searchFlag == 1){
      this.loadData();
    }
  }

  loadData=()=>{
    //这一段代码主要是做详情页回来列表页时的状态保持处理
    if(globalResult.length > 0 && this.props.params && (this.props.params.pageNo || this.props.params.scrolling == 1 || this.props.params.search == 1)){
      this.pageNo = parseInt(this.props.params.pageNo||0) + 1;  
      this.st = globalScrollTo;  
      this.rData = [...globalResult];
      let dataSource = this.state.dataSource.cloneWithRows(this.rData);
      let searchData = Object.assign({},globalSearch);
      this.setState({
        dataSource,
        refreshing: false,
        isLoading: false
      },function(){
        this.lv.scrollTo(0, this.st);
      });
    }else{
      this.genData(0,{},res=>{
        this.rData = [...res.data];
        let dataSource = this.state.dataSource.cloneWithRows(this.rData);
        globalResult = this.rData;
        this.setState({
          dataSource,
          refreshing: false,
          isLoading: false
        });
      });
    }
  }

  genData=(pageNo,obj={},fn)=>{     
    if(pageNo < 1) this.pageNo = 0;
    if(pageNo > 0) history.replaceState("pageNo="+this.pageNo,"",this.props.hashurl+"?pageNo="+this.pageNo);

    let searchCondition = "";
    if(this.props.searchData.keywords){
      if(!(/^\d*$/.test(this.props.searchData.keywords))) searchCondition = "username1="+this.props.searchData.keywords+"&keywords="+this.props.searchData.keywords+"&";
      else searchCondition = "userid1="+this.props.searchData.keywords+"&keywords="+this.props.searchData.keywords+"&";
    }else if(Object.keys(this.props.searchData).length != 0){
      let searchData = this.props.searchData;
      searchData.usersex1 = searchData.usersex||'';
      searchCondition = parseParam(this.props.searchData)+"&";
    }
    let qn = "?";
    if(this.props.apiurl.indexOf("?")>=0) qn = "&";
    let url = `${this.props.apiurl}${qn}${searchCondition}p=${this.pageNo}&limit=30`;
    fetchApi({
      url
    },function(res){
      if(this.props.receiveChildData){
        let resData = Object.assign({},res);
        resData.data = [];
        this.props.receiveChildData(resData);
      }
      if(res.data.length>0){
        this.pageNo++;
        fn(res);
      }else{
        if(this.pageNo == 0){
          globalResult = [];
          this.rData = [];
          let dataSource = this.state.dataSource.cloneWithRows(this.rData);
          this.setState({dataSource});
        }
        this.setState({
          hasMore: false
        })
      }
    }.bind(this));
  }
 
  onEndReached=(event)=>{
    if(this.state.isLoading || !this.state.hasMore) return;
    this.setState({isLoading: true});
    this.genData(1,{},res=>{
      this.rData = [...this.rData, ...res.data];
      globalResult = this.rData;
      this.setState({
        dataSource: this.state.dataSource.cloneWithRows(this.rData),
        isLoading: false,
      });
    })
  };

  onRefresh=()=>{
    this.setState({refreshing: true, isLoading: true, pageNo: 0});
    this.genData(0,{},res=>{
      this.rData = [...res.data];
      globalResult = this.rData;
      this.setState({
        dataSource: this.state.dataSource.cloneWithRows(this.rData),
        isLoading: false,
        refreshing: false
      });
    })
  }

  onScroll=(e)=>{
    wait(1000).done(()=>{    
      if(this.pageNo == 1 && Object.keys(this.props.searchData).length < 1) history.replaceState("scrolling=1","",this.props.hashurl+"?scrolling=1");
      this.st = e.target.scrollTop;
      globalScrollTo = this.st;
    });
  };

  render(){
    if(!this.state || !this.state.dataSource) return null;

    let params = this.props.params || {};

    let ListItem = this.props.item;
    const row = (rowData, sectionID, rowID) => {
      if(!rowData) return null;
      return (
        <ListItem key={rowID} item={rowData} backurl={this.props.backurl} methods={this.props.methods} params={params}/>
      );
    };

    return (
      <ListView
        ref = {el => this.lv = el}
        dataSource = {this.state.dataSource}
        renderFooter = {()=>(<div style={{padding:30,textAlign:'center'}}>{!this.state.hasMore?'没有更多了！':this.state.isLoading?'加载中...':'已加载'}</div>)}
        renderRow = {row}
        style = {{height:"100%",border:'0px',margin:'0'}}
        pullToRefresh = {<PullToRefresh refreshing={this.state.refreshing} onRefresh={this.onRefresh}/>}
        onEndReached = {this.onEndReached}
        onScroll = {this.onScroll}
        scrollEventThrottle = {400}
        pageSize = {60}
        onEndReachedThreshold = {10}
        initialListSize = {1000000}
      />
    );
  }
}