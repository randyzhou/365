import ListItem from "./items/productBig";

export default class Products extends React.Component{
  constructor(props){
    super(props);
    if(!this.props.id){
      alertMsg("参数错误，点击确定返回！",0,function(){
        window.history.back();
      })
    }
    
    this.state = {
      product: {},
      product_type:[],
      typeShow:1,
      picShow: 'none',
      shop: {},
      searchData: {},
      searchFlag: 0
    }
  }

  componentDidMount(){
  }

  toTypes=(typeid)=>{
    if(typeid == "all"){
      window.scrollTo(0,0);
      return false;
    }
    if(document.getElementsByName(typeid).length>0) $(window).scrollTop(document.getElementsByName(typeid)[0].y);
  }

  togglePic=(product)=>{
    this.setState({product:product,picShow:this.state.picShow=="none"?"table":"none"});
  }

  showType=()=>{
    this.setState({typeShow:!this.state.typeShow});
  }

  toggleListShow=()=>{
    this.setState({typeShow:this.state.productListShow?1:0,productListShow:this.state.productListShow?false:true});
  }

  receiveChildData=(obj)=>{
    let product_type = JSON.parse(obj.owner.product_type||"[]")
    this.setState({shop: obj.owner,product_type});
  }

  render(){
    setTitle(this.state.shop.name);
    var $this = this;
    var typeObj = {};
    var TypeListItems = !this.state.product_type?null:this.state.product_type.map(function (item,index) {
      typeObj[item[0]] = item[1];
      return (
        <tr key={index}><td style={{textAlign:"center",color:"#777",height:"30px",fontSize:"12px",verticalAlign:"middle",borderBottom:"1px #eee solid"}} onTouchEnd={$this.toTypes.bind(this,item[0])}>{item[1]}</td></tr>
      );
    });

    return (
      <div style={{width:"100%",height:"100%"}}>
        <table style={{width:"100%",height:"100%"}}><tbody>
          <tr><td style={{height:"30px"}}>
            <Storenav store={this.state.shop}/>
          </td></tr>
          <tr><td style={{verticalAlign:"top",height:"45px",borderBottom:"1px #ccc solid"}}>
            <table style={{width:'100%', backgroundColor:'white', textAlign:'center'}}>
              <tbody>
                <tr style={{lineHeight:"45px"}}>
                  <td style={{textAlign:"center",verticalAlign:"bottom",width:"50px"}}><span style={{color:'#333'}} onTouchEnd={this.showType}>分类</span></td>
                  <td style={{textAlign:"center",verticalAlign:"bottom"}}>电话：{this.state.shop.phone||"无"}</td>
                  <td style={{textAlign:"center",verticalAlign:"bottom",width:"50px"}}><span style={{color:'#333'}} onTouchEnd={this.toggleListShow}>{this.state.productListShow?"大图":"列表"}</span></td>
                </tr>
              </tbody>
            </table>
          </td></tr>
          <tr><td style={{overflowY:"scroll",verticalAlign:"top"}}>
            <div style={{display:this.state.typeShow==1?"none":"block",position:"absolute",zIndex:"100000",width:"60px",width:"62px",borderRight:"1px #eee solid",verticalAlign:"top",textAlign:"center"}}>
              <table style={{width:"60px",backgroundColor:"white",position:"fixed"}}>
                <tbody>
                <tr><td style={{textAlign:"center",color:"#ccc",height:"30px",verticalAlign:"middle",borderBottom:"1px #eee solid"}} onTouchEnd={this.toTypes.bind(this,"all")}>顶部</td></tr>
                {TypeListItems}
                </tbody>
              </table>
            </div>
            <Listall 
              apiurl={Config.api+'product/list?ownerid='+this.props.id} 
              hashurl={"#/stores/products/"+this.props.id}
              backurl={"#/stores/products/"+this.props.id} 
              searchData={this.state.searchData}
              item={ListItem}
              searchFlag={this.state.searchFlag}
              receiveChildData={this.receiveChildData}
            />
          </td></tr>
        </tbody></table>
        
        <table style={{display:this.state.picShow,position:"absolute",zIndex:"1000000000",top:"0px",left:"0px",width:"100%",height:this.state.phoneHeight,backgroundColor:"black"}}><tbody>
          <tr style={{height:"45px",lineHeight:"45px"}}>
            <td style={{width:"40px"}}></td>
            <td>
              <div style={{width:"100%",textAlign:"center",color:"yellow",fontWeight:"bold",fontSize:"18px"}}>{this.state.product.title||""}</div>
            </td>
            <td style={{width:"40px"}}>
              <div onTouchEnd={this.togglePic} style={{top:"10px",right:"10px",width:"30px",height:"30px",textAlign:"center",lineHeight:"30px",borderRadius:"15px",backgroundColor:"white",opacity:"0.5",color:"#666"}}>X</div>
            </td>
          </tr>
          <tr><td colSpan="3">
            <div style={{width:"100%",height:"99%",overflowY:"auto",textAlign:"center"}}>
            <img id="imagefile" src={photoUrl+"/topproductphotos/"+this.state.product.avatar+".jpg"} style={{width:this.state.phoneWidth*0.95}}/>
            <div style={{textAlign:"left",color:"white",padding:"10px"}}>{this.state.product.content||""}</div>
            </div>
          </td></tr>
        </tbody></table>
      </div>
    );
  }
}