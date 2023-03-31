import ListItem from "./items/product.js";

export default class List extends React.Component{
  constructor(props){
    super(props);
    this.state = {
      p: 0,
      limit: 10,
      noDataShow: 0,
      totalPrice:0,
      picShow:"none",
      productListShow: false,
      introShow: "none",
      introIndex: 0,
      product:{},
      searchData:{}
    };
  }

  componentDidMount(){
  }

  togglePic=(product)=>{
    this.setState({product,picShow:this.state.picShow=="none"?"table":"none"});
  }

  render() {
    setTitle("产品展示");
    return (
      <div style={{width:"100%",height:"100%"}}>
        <table style={{width:"100%",height:"100%"}}><tbody>
          <tr><td style={{height:"40px"}}>
            <Productsnav />
          </td></tr>
          <tr><td style={{overflowY:"scroll",verticalAlign:"top"}}>  
            <Listall 
              apiurl={Config.api+'product/list'} 
              hashurl="#/products"
              backurl={"#/products"} 
              searchData={this.state.searchData}
              item={ListItem}
              searchFlag={this.state.searchFlag}
            />
          </td></tr>
          <tr style={{height:"30px"}}><td>
            <Mainbottom />
          </td></tr>
        </tbody></table>

        <table style={{display:this.state.picShow,position:"absolute",zIndex:"1000000000",top:"0px",left:"0px",width:"100%",height:this.state.phoneHeight,backgroundColor:"black"}}><tbody>
          <tr style={{height:"45px",lineHeight:"45px"}}>
            <td style={{width:"40px"}}></td>
            <td>
              <div style={{width:"100%",textAlign:"center",color:"yellow",fontWeight:"bold",fontSize:"18px"}}>{this.state.product.name||""}</div>
            </td>
            <td style={{width:"40px"}}>
              <div onTouchEnd={this.togglePic} style={{top:"10px",right:"10px",width:"30px",height:"30px",textAlign:"center",lineHeight:"30px",borderRadius:"15px",backgroundColor:"white",opacity:"0.5",color:"#666"}}>X</div>
            </td>
          </tr>
          <tr><td colSpan="3">
            <div style={{width:"100%",height:"99%",overflowY:"auto",textAlign:"center"}}>
            <img id="imagefile" src={photoUrl+"/topproductphotos/"+this.state.product.avatar+".jpg"} style={{width:this.state.phoneWidth*0.95}}/>
            <div style={{textAlign:"left",color:"white",padding:"10px"}}>{this.state.product.intro||""}</div>
            </div>
          </td></tr>
        </tbody></table>
      </div>
    );
  }
}