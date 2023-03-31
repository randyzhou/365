import StoreListItem from "./items/list";
export default class List extends React.Component{
  constructor(props){
    super(props);
    this.pageNo = 0;
    const dataSource = new ListView.DataSource({
      rowHasChanged: (row1, row2) => row1 !== row2,
    });
    this.state ={
      dataSource,
      keywords: null,
      searchData: {},
      searchDivShow: "none",
      detailDivShow: "none",
      selectedStoreIndex: 0,
      slides: {pert:100, startX:0, moveX:0},
      selectedStore: {}
    }
  }

  showSearchDiv = () => {
    var searchDivShow = this.state.searchDivShow == "table-row"?"none":"table-row";
    let searchData = this.state.searchData;
    if(searchDivShow == "table-row") searchData = {};
    this.setState({searchDivShow,searchData});
  }

  handleSearch = (type,event) => {
    this.setState({
      p: 0,
      searchDivShow: "none",
      searchFlag: 1
    },()=>this.setState({searchFlag:0}));
  }

  handleChange = (name,event) => {
    let searchData = Object.assign({}, this.state.searchData);
    searchData[name] = event.target.value || '';
    if(name == "distance"){
      searchData.latitude = latitude_reg;
      searchData.longitude = longitude_reg;
    }
    this.setState({searchData});
  }

  showDetailDiv=(item,index)=>{
    event.stopPropagation();
    let $this = this;
    this.setState({selectedStoreIndex:index,selectedStore:item});
    let slides = Object.assign({},this.state.slides);
    let p = 100;
    let pc = setInterval(function(){
      p = p - 4;
      slides.pert = p;
      slides.startX = 0;
      slides.moveX = 0;
      $this.setState({slides});
      if(p <= 0){
        clearInterval(pc);
        p = 100;
      }
    },1);
  }

  hideDetailDiv=(event)=>{
    event.stopPropagation();
    let $this = this;
    let slides = Object.assign({},this.state.slides);
    let p = 0;
    let pc = setInterval(function(){
      p = p + 4;
      slides.pert = p;
      slides.startX = 0;
      slides.moveX = 0;
      $this.setState({slides});
      if(p >= 100){
        clearInterval(pc);
        p = 0;
      }
    },1);
  }

  detailStart = (event)=>{
    event.stopPropagation();
    if(!event.touches.length) return;
    let slides = Object.assign({},this.state.slides);
    slides.startX = event.touches[0].pageX;
    slides.moveX = 0;
    slides.pert = 0;
    this.setState({slides});
  }

  detailMove = (event)=>{
    event.stopPropagation();
    if(!event.touches.length) return;
    let slides = Object.assign({},this.state.slides);
    let moveX = event.touches[0].pageX - slides.startX;
    slides.moveX = moveX;
    if(moveX > 40){
      slides.pert = moveX/2;
      this.setState({slides});
    }
  }

  detailEnd = (event)=>{
    event.stopPropagation();
    let slides = Object.assign({},this.state.slides);
    if(slides.pert > 50) slides.pert = 100;
    else slides.pert = 0;
    slides.moveX = 0;
    this.setState({slides});  
  }

  touchStart = (event)=>{
    event.stopPropagation();
    if(!event.touches.length) return;
    let slides = Object.assign({},this.state.slides);
    slides.startX = event.touches[0].pageX;
    slides.moveX = 0;
    this.setState({slides});
  }

  touchMove = (event)=>{
    event.stopPropagation();
    if(!event.touches.length) return;
    let slides = Object.assign({},this.state.slides);
    let moveX = event.touches[0].pageX - slides.startX;
    slides.moveX = moveX;
    if(moveX < -100){
      location.href = '#/stores';
    }
    if(moveX > 100){
      location.href = '#/messages';
    }
  }

  clearSearch = () => {
    let searchData = this.state.searchData;
    searchData.keywords = '';
    this.setState({searchData,searchFlag:1},()=>this.setState({searchFlag:0}));
  }

  render(){
    setTitle("社团列表");
    let selectedStore = this.state.selectedStore;
    let $photoname = selectedStore.id;
    return (
      <div ref="main" style={{padding:"0px",width:"100%",height:"100%"}} onTouchStart={this.touchStart} onTouchMove={this.touchMove}>
        <table style={{width:"100%",height:"100%"}}><tbody>
        <tr><td style={{height:"30px"}}>
          <Maintop />
        </td></tr>
        <tr style={{height:"43px"}}><td>  
          <table style={{width:"100%",height:"100%",backgroundColor:"white",margin:"0 auto"}}><tbody>
              <tr><td style={{borderBottom:"1px #ccc solid",padding:"5px",textAlign:"center",backgroundColor:"darkseagreen",height:"40px"}}>
                  <table className="searchTable" style={{width:"100%",height:"30px"}}><tbody>
                  <tr>
                    <td style={{width:"65px",textAlign:"center",color:"white"}}>
                      <select style={{color:"white",backgroundColor:"darkseagreen",border:"0px"}} value={this.state.searchData.distance} onChange={this.handleChange.bind(this,"distance")}>
                        <option value="">不限距离</option>
                        <option value="1000">1000米</option>
                        <option value="2000">2000米</option>
                        <option value="3000">3000米</option>
                        <option value="4000">4000米</option>
                        <option value="5000">5000米</option>
                        <option value="6000">6000米</option>
                        <option value="7000">7000米</option>
                        <option value="8000">8000米</option>
                        <option value="9000">9000米</option>
                        <option value="10000">10000米</option>
                        <option value="11000">11000米</option>
                        <option value="12000">12000米</option>
                        <option value="13000">13000米</option>
                        <option value="14000">14000米</option>
                        <option value="15000">15000米</option>
                        <option value="16000">16000米</option>
                      </select>
                    </td>
                    <td style={{textAlign:"left",backgroundColor:"white",borderRadius:"5px"}}>
                      <table style={{width:"100%"}}><tbody><tr>
                        <td>                      
                          <input style={{width:"90%"}} placeholder="关键词" value={this.state.searchData.keywords ||''} onChange={this.handleChange.bind(this,"keywords")}/>
                        </td><td style={{width:"30px"}}>  
                          <span style={{float:"right",width:"14px",height:"14px",lineHeight:"14px",fontSize:"12px",color:"white",backgroundColor:"#bbb",borderRadius:"7px",textAlign:"center",display:this.state.searchData.keywords?"inline":"none"}} onTouchEnd={this.clearSearch}>x</span>
                        </td>
                      </tr></tbody></table>    
                    </td>
                    <td style={{width:"50px",color:"white",textAlign:"center"}} onTouchEnd={this.handleSearch.bind(this,1)}>搜索</td>
                  </tr>
                  </tbody></table>
              </td></tr>
            </tbody></table>          
        </td></tr>
        <tr><td style={{overflowY:"scroll",verticalAlign:"top"}}>  
          <Listall 
            apiurl={Config.api+'shop/list?typeid=2'} 
            hashurl="#/groups"
            backurl={"#/groups"} 
            searchData={this.state.searchData}
            item={StoreListItem}
            searchFlag={this.state.searchFlag}
            methods={{showDetailDiv: this.showDetailDiv}}
          />
        </td></tr>
        <tr><td style={{height:"30px"}}>
          <Mainbottom />
        </td></tr>
        </tbody></table>

        <div style={{height:"98%", position: "fixed", top: "0px", transform:"translateX("+this.state.slides.pert+"%)", backgroundColor: "white", zIndex: "10000000", margin: "0 auto", width: "100%"}} onTouchStart={this.detailStart} onTouchEnd={this.detailEnd} onTouchMove={this.detailMove}>
            <span style={{display:"inline-block", position: "absolute", right: "2px", top: "2px", background: "white", borderRadius: "15px", width: "30px", height: "30px", lineHeight:"30px", textAlign: "center"}} onTouchEnd={this.hideDetailDiv}>X</span>
            <div style={{height:"20px"}}></div>
            <table style={{width: "100%", height: "98%"}}>
              <tbody>
                <tr>
                  <td style={{width:"5px"}}></td>
                  <td style={{textAlign:"left",verticalAlign:"top"}}>
                    <div style={{color:"333",overflowY:"auto",width:"90%",height:"99%",margin:"0 auto",textAlign:"center"}}>
                      <div style={{textAlign:"center", color:"firebrick", fontSize:"20px"}} onTouchEnd={touchEnd.bind(this,"#/stores/detail/"+selectedStore.id+"?token="+token)}>{selectedStore.store_name}{selectedStore.promote_title}</div>
                      <div style={{textAlign:"center", color:"firebrick", fontSize:"14px", marginTop: "20px"}}><span onTouchEnd={touchEnd.bind(this,"#/stores/main/"+selectedStore.id)} style={{marginLeft:"10px",padding:"7px",color:"white",backgroundColor:"crimson",borderRadius:"5px",fontSize:"16px",fontFamily:"sans_serif"}}>进入社团主页</span></div>
                      <br/><img src={photoUrl+"/topstorephotos/"+$photoname+".jpg"} style={{width:"99%"}}/>
                      <br/><div style={{textAlign:"left"}}>{selectedStore.promote_detail}</div>
                      <div style={{height:"20px"}}></div>
                    </div>
                  </td>
                  <td style={{width:"5px"}}></td>
                </tr>
              </tbody>
            </table>
          </div>

      </div>
    );

  }
}