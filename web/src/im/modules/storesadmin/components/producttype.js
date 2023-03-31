export default class Adminproducttype extends React.Component{
  constructor(props){
    super(props);
    this.state = {
      errTag: "disabled",
      Errors: {},
      ErrorMsg: {},
      errShow: {},
      inputed: {},
      shop: {},
      product_type: [],
      product_max_id: 0
    }
  }

  componentDidMount(){
      let url = Config.api+"shop/updateproducttype";
      fetchApi({
        url
      },function(res){
        if(!isJson(res)){
            alertMsg("服务器文件错误！");
            return false;
        }
        if(res.status == 200){
          var shop = res.shop;
          var product_type = [[0,"主菜"]];
          if(res.shop.product_type) product_type = JSON.parse(res.shop.product_type);
          this.setState({
          shop: shop,
           product_type:product_type,
           product_max_id: res.shop.product_max_id
          });
        }else{
          alertMsg(res);
        }
      }.bind(this));
  }

  handleChangeOrderType=(name,event)=>{
    var value = event.target.value;
    var product_type = this.state.product_type;
   product_type[name][1] = value;
    this.setState({product_type});
  }

  handleSubmit=()=>{
    var shop = this.state.shop;
    shop.product_type = JSON.stringify(this.state.product_type);
    shop.product_max_id = this.state.product_max_id;
    let url = Config.api+"shop/updateproducttype";
    fetchApi({
      url,
      method: "POST",
      body: {shop: shop}
    },function(res){
      if(res.status == 200){
        resultAlert(res);
      }
    });
  }

  addItem=()=>{
    var product_type = this.state.product_type;
    var id = parseInt(this.state.product_max_id)+1;
    product_type.push([id,""]);
    this.setState({
     product_type:product_type,
     product_max_id: id
    })
  }

  upItem=(index,preIndex)=>{
    var product_type = this.state.product_type;
    var item =product_type[index];
    var preItem =product_type[preIndex];
    product_type[preIndex] = item;
    product_type[index] = preItem;
    this.setState({
     product_type:product_type
    })
  }

  deleteItem=(index)=>{
    alertMsg("确定删除吗？",1,function(){
      var product_type = this.state.product_type;
      product_type.remove(index);
      this.setState({
        product_type:product_type
      })
    }.bind(this));
  }

  render(){
    setTitle("分类管理");
    if(!this.state.shop|| !this.state.product_type) return null;
    var $this = this;
    var typeList = this.state.product_type.map(function(item,index){
      return <tr key={index} style={{height:"50px"}}><td style={{width:"35px",height:"35px",lineHeight:"35px",textAlign:"center"}}>{index}</td><td><input maxLength="6" type="text" style={{width:"80%",lineHeight:"30px",verticalAlign:"middle"}} placeholder="新类别" value={item[1]} onChange={$this.handleChangeOrderType.bind(this,index)} /></td><td style={{width:"30px"}}><div onTouchEnd={$this.upItem.bind(this,index,index-1<0?0:index-1)} className="btn-info">^</div></td><td style={{width:"80px",textAlign:"center"}} onTouchEnd={$this.deleteItem.bind(this,index)}><span style={{background:"url(image/icon_new.jpg) no-repeat -193px -113px",display:"inline-block",width:"20px",height:"20px"}}></span></td></tr>
    });

    var errMsg = "错误提示";
    var errStyle = {textAlign:"left", color:"red", clear:"left", fontSize:"12px", margin:"3px", clear:"both"};

    return (
      <div style={{width:"100%",height:"100%",overflowY:"auto"}}>
      	<Storenavadmin shop={this.state.shop}/>
        <table style={{width:"100%",backgroundColor:"#eee"}}><tbody><tr>
          <td style={{width:"60px",textAlign:"center",color:"green"}} onTouchEnd={touchEnd.bind(this,"#/storesadmin/products/"+this.props.id)}>返回</td>
          <td></td>
        	<td style={{textAlign:"right",height:"40px"}}>
          		<span style={{padding:"5px",borderRadius:"3px",color:"green"}} onTouchEnd={this.handleSubmit}>提交</span>
        	</td>
        </tr></tbody></table>
        <table style={{width:"100%",margin:"10px"}}><tbody>
          <tr style={{height:"45px"}}>
            <td>
              <table style={{width:"100%"}}><tbody>
              <tr><td style={{textAlign:"center"}}>编号</td><td>类别名称</td><td>调序</td><td style={{textAlign:"center"}}>删除</td></tr>
              {typeList}
              </tbody></table>
              <table style={{marginTop:"10px",width:"100%"}}><tbody><tr>
                <td></td>
                <td style={{width:"90px"}}>
                  <span onTouchEnd={this.addItem} style={{display:"inline-block",width:"75px",textAlign:"center",padding:"5px",borderRadius:"3px",color:"brown"}}>添加分类</span>
              </td></tr></tbody></table>
            </td>
          </tr>
        </tbody></table>
      </div>
    );
  }
}