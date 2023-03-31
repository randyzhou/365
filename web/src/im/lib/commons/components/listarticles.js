export default class Listarticles extends React.Component {
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

  detail = ($article,event) => {
    backurl_store = this.props.backurl;
    backurl_user = this.props.backurl;
    if(this.props.detailurl) touchEnd(this.props.detailurl+$article.retweetid);
    else touchEnd("#/stores/article/"+$article.id);
  }

  render(){
    let params = this.props.params || {};
    let rcs = "none";
    if(gHash && gHash.indexOf("retweet") >= 0) rcs = "block";
    const row = (rowData, sectionID, rowID) => {
      let $article = rowData;
      let $update_time = $article.update_time
      let $avatars = [];
      let avatar = $article.avatar;
      if(avatar && avatar.indexOf("[") > -1 && avatar.length > 15){
        $avatars = JSON.parse(avatar);
        if($avatars.length >= 3){
          var imgList = !$avatars?null:$avatars.map(function(avatar,index){
            if(index > 2) return;
            return(
              <td key={avatar}><img src={thumbUrl+"/articlephotos/"+avatar[1]+".jpg"} style={{width:"99%",height:"100px",marginRight:"10px"}}/></td>
            )
          }.bind(this))
          return (
            <table key={rowID} style={{borderBottom:"1px #eee solid",width:"100%"}}>
              <tbody>
                  <tr style={{verticalAlign:"top", backgroundColor:"#ffffff"}}>
                      <td style={{padding:"0px"}}>
                          <table style={{width:"100%"}}>
                              <tbody>
                              <tr><td style={{paddingTop:"0px",textAlign:"center"}}>
                                <div style={{width:"100%",height:"30px",lineHeight:"30px",textAlign:"left",paddingLeft:"5px",fontSize:"16px"}}>
                                    <span onTouchEnd={this.detail.bind(this,$article)}>{$article.title}</span>
                                </div>
                                <div style={{display:rcs,height:"20px",textAlign:"left",paddingLeft:"5px",fontSize:"14px",color:"rgb(200,200,200)"}}>
                                  <span onTouchEnd={this.detail.bind(this,$article)}>[推荐评论：{$article.content}]</span>
                                </div>
                                <table style={{width:"100%"}}><tbody><tr>{imgList}</tr></tbody></table>
                                <table style={{width:"100%"}}><tbody>
                                  <tr>
                                      <td style={{height:"35px",verticalAlign:"top"}}>
                                          <span style={{color:"#aaa",fontSize:"13px"}}>
                                              <span style={{textAlign:"center",margin:"5px"}} onTouchEnd={this.detail.bind(this,$article)}>{$article.owner_name} <span style={{color:$article.usersex==1?"#406599":"red"}}>{$article.username}</span></span>
                                              <span style={{textAlign:"center",margin:"5px"}}>{$article.comments}评论</span>
                                              <span style={{display:"inline-block",color:"#999999",float:"right"}}>{$update_time}</span>
                                          </span>
                                      </td>
                                  </tr>
                                </tbody></table>
                              </td></tr>
                          </tbody></table>
                      </td>
                  </tr>
              </tbody>
            </table>
          );
        }else if($avatars.length == 2 && typeof($avatars[1]) == "object"){
          let $avatar = $avatars[1][1];
          return (
            <table key={rowID} style={{borderBottom:"1px #eee solid",width:"100%"}}>
              <tbody>
                  <tr style={{verticalAlign:"top", backgroundColor:"#ffffff"}}>
                      <td style={{padding:"0px"}}>
                          <table style={{height:"100%"}}><tbody>
                              <tr><td style={{paddingTop:"0px",textAlign:"center"}}>
                                <table style={{height:"100%"}}><tbody>
                                  <tr>
                                    <td style={{textAlign:"left",verticalAlign:"top",height:"100%"}}>
                                      <table style={{height:"100%"}}><tbody>
                                        <tr>
                                          <td style={{fontSize:"16px"}}>
                                            <div style={{width:"100%",textAlign:"left",paddingLeft:"5px",fontSize:"16px"}}>
                                                <span onTouchEnd={this.detail.bind(this,$article)}>{$article.title}</span>
                                            </div>
                                            <div style={{display:rcs,height:"20px",textAlign:"left",paddingLeft:"5px",fontSize:"14px",color:"rgb(200,200,200)"}}>
                                              <span onTouchEnd={this.detail.bind(this,$article)}>[推荐评论：{$article.content}]</span>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr><td style={{verticalAlign:"bottom"}}>  
                                          <span style={{color:"#aaa",fontSize:"13px"}}>
                                            <span style={{textAlign:"center",margin:"5px"}} onTouchEnd={this.detail.bind(this,$article)}>{$article.owner_name} <span style={{color:$article.usersex==1?"#406599":"red"}}>{$article.username}</span></span>
                                            <span style={{textAlign:"center",margin:"5px"}}>{$article.comments}评论</span><br/>
                                            <span style={{display:"inline-block",color:"#999999",margin:"5px"}}>{$update_time}</span>
                                          </span>
                                        </td></tr>
                                      </tbody></table>  
                                    </td>
                                    <td style={{width:"110px",textAlign:"center",padding:"5px"}}>
                                      <img src={thumbUrl+"/articlephotos/"+$avatar+".jpg"} style={{width:"100%",height:"70px"}}/>
                                    </td>
                                  </tr>
                                </tbody></table>
                              </td></tr>
                          </tbody></table>
                      </td>
                  </tr>
              </tbody>
            </table>      
          );
        }else if($avatars.length == 1 && typeof($avatars[0] == "object")){
          let $avatar = $avatars[0][1];
          return (
            <table key={rowID} style={{borderBottom:"1px #eee solid",width:"100%"}}>
              <tbody>
                  <tr style={{verticalAlign:"top", backgroundColor:"#ffffff"}}>
                      <td style={{padding:"0px"}}>
                          <table style={{width:"100%"}}><tbody>
                              <tr><td style={{paddingTop:"0px",textAlign:"center"}}>
                                <table style={{width:"100%"}}><tbody>
                                  <tr>
                                      <td style={{fontSize:"16px"}}>
                                          <div style={{width:"100%",height:"30px",lineHeight:"30px",textAlign:"left",paddingLeft:"5px",fontSize:"16px"}}>
                                            <span onTouchEnd={this.detail.bind(this,$article)}>{$article.title}</span>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td style={{fontSize:"16px"}}>
                                          <div style={{display:rcs,height:"20px",textAlign:"left",paddingLeft:"5px",fontSize:"14px",color:"rgb(200,200,200)"}}>
                                            <span onTouchEnd={this.detail.bind(this,$article)}>[推荐评论：{$article.content}]</span>
                                          </div>
                                      </td>
                                  </tr>
                                </tbody></table>
                                <table style={{width:"100%"}}><tbody>
                                  <tr>
                                    <td style={{textAlign:"center"}}>
                                      <img src={thumbUrl+"/articlephotos/"+$avatar+".jpg"} style={{width:"100%"}}/>
                                    </td>
                                  </tr>
                                </tbody></table>
                                <table style={{width:"100%"}}><tbody>
                                  <tr>
                                      <td style={{height:"35px",verticalAlign:"top"}}>
                                          <span style={{color:"#aaa",fontSize:"13px"}}>
                                              <span style={{textAlign:"center",margin:"5px"}} onTouchEnd={this.detail.bind(this,$article)}>{$article.owner_name} <span style={{color:$article.usersex==1?"#406599":"red"}}>{$article.username}</span></span>
                                              <span style={{textAlign:"center",margin:"5px"}}>{$article.comments}评论</span>
                                              <span style={{display:"inline-block",color:"#999999",float:"right"}}>{$update_time}</span>
                                          </span>
                                      </td>
                                  </tr>
                                </tbody></table>
                              </td></tr>
                          </tbody></table>
                      </td>
                  </tr>
              </tbody>
            </table>      
          );
        }
      }else if(avatar.length < 3){
        return (
          <table key={rowID} style={{borderBottom:"1px #eee solid",width:"100%"}}>
                  <tbody>
                  <tr style={{verticalAlign:"top", backgroundColor:"#ffffff"}}>
                      <td style={{padding:"0px"}}>
                          <table style={{width:"100%"}}>
                              <tbody>
                              <tr><td style={{paddingTop:"0px",textAlign:"center"}}>
                              <table style={{width:"100%"}}><tbody>
                                  <tr>
                                      <td style={{fontSize:"16px"}}>
                                          <div style={{width:"100%",height:"30px",lineHeight:"30px",textAlign:"left",paddingLeft:"5px",fontSize:"16px"}}>
                                              <span onTouchEnd={this.detail.bind(this,$article)}>{$article.title}</span>
                                          </div>
                                          <div style={{display:rcs,height:"20px",textAlign:"left",paddingLeft:"5px",fontSize:"14px",color:"rgb(200,200,200)"}}>
                                            <span onTouchEnd={this.detail.bind(this,$article)}>[推荐评论：{$article.content}]</span>
                                          </div>
                                      </td>
                                  </tr>
                              </tbody></table>
                              <table style={{width:"100%"}}><tbody>
                                  <tr>
                                      <td style={{height:"25px",lineHeight:"25px",fontSize:"13px"}}>
                                          <span style={{color:"#aaa"}}>
                                              <span style={{textAlign:"center",margin:"5px"}} onTouchEnd={this.detail.bind(this,$article)}>{$article.owner_name} <span style={{color:$article.usersex==1?"#406599":"red"}}>{$article.username}</span></span>
                                              <span style={{textAlign:"center",margin:"5px"}}>{$article.comments}评论</span>
                                              <span style={{display:"inline-block",color:"#999999",float:"right"}}>{$update_time}</span>
                                          </span>
                                      </td>
                                  </tr>
                              </tbody></table>
                              </td></tr>
                          </tbody></table>
                      </td>
                  </tr>
              </tbody>
          </table>      
        );
      }else{
        return <div></div>
      }
    };

    let pullToRefresh = <PullToRefresh refreshing={this.state.refreshing} onRefresh={this.onRefresh}/>;
    if(this.props.pullFlag == 1) pullToRefresh = null;
    
    return (
      <ListView
        ref = {el => this.lv = el}
        dataSource = {this.state.dataSource}
        renderFooter = {()=>(<div style={{padding:30,textAlign:'center'}}>{!this.state.hasMore?'没有更多了！':this.state.isLoading?'加载中...':'已加载'}</div>)}
        renderRow = {row}
        style = {{height:"100%",border:'0px',margin:'0'}}
        pullToRefresh = {pullToRefresh}
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