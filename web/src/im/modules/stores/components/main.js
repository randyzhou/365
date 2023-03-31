import GroupItem from "./items/group";
import MemberItem from "./items/membermain";
import ProductItem from "./items/productmain";

export default class Main extends React.Component{
  constructor(props){
    super(props);
    if(!this.props.id){
      alertMsg("参数错误，点击确定返回！",0,function(){
        window.history.back();
      })
    }
    this.state = {
      id: this.props.id,
      pic: 0,
      showPostCommentsDiv: "none",
      title: "",
      content: "",
      paymentShow: "none",
      payment: 0,
      paymentReply: "",
      appdivshow: "none",
      store: {},
      shop: {},
      data: [],
      imgHeight: 291
    }
  }

  componentDidMount(){
    if(this.props.id){
      let url = Config.api+"shop/main?shopid="+this.props.id;
      fetchApi({
        url
      },function(res){
        if(!isJson(res)){
            errMessage("","服务器文件错误！");
            return false;
        }
        if(res.status == 200){
	      var phoneWidth =  parseInt(window.screen.width)>450?450:parseInt(window.screen.width);
          this.setState({
            phoneWidth:phoneWidth,
            store: res.store,
            storeUsername: res.username,
            totals: res.totals,
            groups: res.groups,
            members: res.members,
            photos: res.photos,
            products: res.products,
            data: ['AiyWuByWklrrUDlFignR', 'TekJlZRVCjLFexlOCuWn', 'IJOtIlfsYdTyaDTRVrLI']
          });
        }else{
          errMessage(res);
        }
      }.bind(this));

    }
  }

  render() {
    setTitle(this.state.store.name);
    let $this = this;

    var cert_name = JSON.parse(this.state.store.cert_name||'[]');
    var certified = {1:"新生",2:"助理",3:"中级",4:"高级",5:"专家",6:"管理"};
    if(Object.keys(cert_name).length>0){
      certified[1] = cert_name[1];
      certified[2] = cert_name[2];
      certified[3] = cert_name[3];
      certified[4] = cert_name[4];
      certified[5] = cert_name[5];
      certified[6] = cert_name[6];
    }

    var GroupItems = !this.state.groups?null:this.state.groups.map(function (item,index) {
        return (
          <GroupItem key={item.id} item={item} backurl={"#/stores/main/"+$this.props.id}/>
        );
    }.bind(this));

    var MemberItems = !this.state.members?null:this.state.members.map(function (item,index) {
      return (
        <MemberItem key={item.id} item={item} certified={certified} backurl={"#/stores/main/"+$this.props.id}/>
      );
    }.bind(this)); 

    var PhotoItems = !this.state.photos?null:this.state.photos.map(function (item,index) {
      return (
        <div key={item.id} style={{border:"1px #ccc solid",position:"relative"}}>
          <div style={{width:"100%",height:"30px",position:"absolute",top:"0px",backgroundColor:"black",color:"white",lineHeight:"30px",opacity:"0.7",textAlign:"center"}}>
            <span onTouchEnd={touchEnd.bind(this,"#/stores/photos/"+$this.props.id)}>{item.photoname}</span>
          </div>
          <Img 
            src={thumbUrl+"/storephotos/"+item.avatar+".jpg"} 
            style={{width:$this.state.phoneWidth,height:"270px"}} 
            onLoad={() => {
              window.dispatchEvent(new Event('resize'));
              this.setState({ imgHeight: 'auto' });
            }}
          />
        </div>
      );
    }.bind(this));

    var ProductItems = !this.state.products?null:this.state.products.map(function (item,index) {
        return (
          <ProductItem key={item.id} item={item} phoneWidth={this.state.phoneWidth} togglePic={this.togglePic} backurl={"#/stores/main/"+$this.props.id}/>
        );
    }.bind(this));

    let img = null;
    if(this.state.store.id){
      img = <Img src={thumbUrl+"/topstoreactphotos/"+this.state.store.id+".jpg"} style={{maxWidth:"100%"}}/>;
    }

    return (
      <div style={{backgroundColor:"#f2f2f2",width:"100%",height:"100%"}}>
        <table style={{width:"100%",height:"100%"}}><tbody>
          <tr><td style={{height:"30px"}}>
            <Storenav store={this.state.store}/>
          </td></tr>
          <tr><td>
            <div style={{width:"100%",height:"100%",overflowY:"auto"}}>
              <table id="counts" style={{width:"100%",backgroundColor:"#ffffff"}}><tbody>
              <tr>
                <td style={{height:"35px",textAlign:"center",verticalAlign:"middle"}}>
                  昨增:{this.state.store.yesterday}人&nbsp;&nbsp;&nbsp;
                  今增:{this.state.store.today}人&nbsp;&nbsp;&nbsp;
                  总会员:{this.state.totals}人&nbsp;&nbsp;&nbsp;
                  <span onTouchEnd={touchEnd.bind(this,"#/stores/detail/"+this.state.store.id)}>详情</span>
                </td>
              </tr>
              </tbody></table>

              <table style={{width:'100%',backgroundColor: '#eeeeee'}}>
                <tbody>
                  <tr style={{height:'35px', lineHeight:'35px'}}>
                    <td style={{textAlign:"center"}}>1:{certified[1]}</td>
                    <td style={{textAlign:"center"}}>2:{certified[2]}</td>
                    <td style={{textAlign:"center"}}>3:{certified[3]}</td>
                    <td style={{textAlign:"center"}}>4:{certified[4]}</td>
                    <td style={{textAlign:"center"}}>5:{certified[5]}</td>
                    <td style={{textAlign:"center"}}>6:{certified[6]}</td>
                  </tr>
                </tbody>
              </table>
              <div style={{width: "100%",maxWidth:this.state.phoneWidth,backgroundColor:"white",overflowX:"auto"}}>
                <table><tbody><tr>{MemberItems}</tr></tbody></table>
              </div> 

              <table style={{width:'100%',backgroundColor: '#eeeeee'}}>
                <tbody>
                  <tr style={{height:'35px', lineHeight:'35px'}}>
                    <td style={{textAlign:"center"}}><span onTouchEnd={touchEnd.bind(this,"#/stores/act/"+this.state.store.id)}>{this.state.store.act_title+"[详情]"||"暂无活动"}</span></td>
                  </tr>
                </tbody>
              </table>
              <table style={{width:'100%',backgroundColor: '#fff',minHeight:"60px"}}>
                <tbody>
                  <tr><td style={{position:"relative",textAlign:"center"}}>
                    {img}
                  </td></tr>
                </tbody>
              </table>
              <table style={{width:'100%',height:"40px",borderBottom:"1px #f2f2f2 solid"}}>
                <tbody>
                  <tr>
                  <td></td>
                  <td style={{width:"60px",textAlign:"center",verticalAlign:"middle"}}>
                    报名
                  </td>
                  <td style={{width:"60px",textAlign:"center",verticalAlign:"middle"}}>
                    转发
                  </td>
                  <td style={{width:"60px",textAlign:"center",verticalAlign:"middle"}}>
                    分享
                  </td>
                  <td></td>
                  </tr>
                </tbody>
              </table>
              
              <div style={{width:"100%",backgroundColor:"white"}}>
                {GroupItems}
              </div>

              <div style={{width:$this.state.phoneWidth,backgroundColor:"white"}}>
                <Carousel autoplay={true} infinite>
                  {PhotoItems}
                </Carousel>
              </div>

              <div style={{width:"100%",backgroundColor:"white"}}>
                {ProductItems}
              </div>  

              <div style={{width:"100%",height:"100%",backgroundColor:"white"}}>
                <Listarticles 
                  apiurl={Config.api+'article/list?ownerid='+this.props.id} 
                  hashurl={"#/stores/main/"+this.props.id}
                  backurl={"#/stores/main/"+this.props.id} 
                  searchData={{}}
                  searchFlag={this.state.searchFlag}
                  item={[]}
                  pullFlag = {1}
                />
              </div>
              
            </div>
          </td></tr>
        </tbody></table>

        <div style={{zIndex:"10000",position:"fixed",top:"200px",right:"-20px",display:this.state.appdivshow}}>
          <iframe style={{width:"40px",height:"40px",border:"0px",borderRadius:"20px",padding:"0px",marginLeft:"40px",marginTop:"40px"}} src={"./close.html"}/>
        </div>

        <div style={{zIndex:"10000",position:"fixed",top:"300px",right:"-20px",display:this.state.appdivshow}}>
          <iframe style={{width:"40px",height:"40px",border:"0px",borderRadius:"20px",padding:"0px",marginLeft:"40px",marginTop:"40px"}} src={"./back.html"}/>
        </div>

        <div style={{zIndex:"9990",position:"fixed",top:"0px",left:"0px",backgroundColor:"white",width:"100%",height:"100%",display:this.state.appdivshow}}>
          <iframe id="iframeweb" sandbox="allow-forms allow-scripts allow-same-origin" style={{width:"100%",height:"100%",border:"0px solid white"}} src={this.state.weburl} />
        </div>

      </div>
    );
  }
}