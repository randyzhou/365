import ListItem from "./items/product";
export default class Adminproducts extends React.Component{
  constructor(props){
    super(props);
	   var phoneWidth =  parseInt(window.screen.width)>450?450:parseInt(window.screen.width);
     this.state = {      
      errTag: "disabled",
      Errors: {},
      ErrorMsg: {},
      errShow: {},
      inputed: {},
      pic: 0,
      showPostDiv: "none",
      showPicDiv: "none",
      title: "",
      content: "",
      paymentShow: "none",
      payment: 0,
      paymentReply: "",
      updateType: 0,
      updateid: 0,
      phoneWidth: phoneWidth,
      avatars: [],
      avatar_up: [],
      shop: {},
      toppicdiv: "none",
      searchData: {}
    }
  }

  componentDidMount(){
  }

  loadData=(params,direction,id)=>{
    var url,loadShow = false;

    if(this.state.lastPage){
      return;
    }

    if(direction == "up")
      loadShow = true;
    else if(this.state.p >= 1)
      loadShow = true;

    var searchCondition = "";

    if(this.state.username){
      if(!(/^\d*$/.test(this.state.username))) searchCondition = "username="+this.state.username+"&";
      else searchCondition = "userid="+this.state.username+"&";
    }

    let type = '';
    if(id) type = "&type="+id;
    url = Config.api + "product/listadmin?"+searchCondition+"p="+this.state.p+"&limit="+this.state.limit+type;
    fetchApi({
      url
    },function(res){
        if(!isJson(res)){
            errMessage("","服务器文件错误！");
            return false;
        }
        
        if(!res.owner){
          alert("您还没有建立门店");
          location.href = "#/storesadmin/basic";
          return null;
        }

        if(!res.products||!res.products.length){
          this.state.p>0?this.setState({lastPage: true}):this.setState({lastPage: false});
        }

        if(res.result == 1){
          var arr;
          if(this.state.p>0) arr = this.state.products.concat(res.products);
          else arr = res.products;
          var productType = JSON.parse(res.owner.product_type);
          this.setState({
            p: this.state.p+1,
            shop: res.owner,
            products: res.products,
            productType: productType
          });
          this.state.products.length<1?this.setState({noDataShow: 1}):this.setState({noDataShow: 0});
        }else{
          errMessage(res);
        }
    }.bind(this));

  }

  showPostDiv=(obj)=>{
    var title = "";
    var content = "";
    var updateType = 0;
    var updateid = 0;
    var updateIndex = null;
    var avatars = [];
    let product_type = '';
    let price = 0.00;
    let toppicdiv = 'none';

    if(obj.id){
      toppicdiv = "table-row";
      title = obj.title;
      content = obj.content;
      product_type = obj.type;
      price = obj.price;
      let avatar = obj.avatar;
      if(avatar && avatar.indexOf("[") > -1) avatars = JSON.parse(avatar);
      else avatars.push(avatar);
      updateType = obj.type;
      updateid = obj.id;
    }

    var res = this.state.showPostDiv == "block"?"none":"block";
    this.setState({
      toppicdiv,
      showPostDiv: res,
      title: title,
      content: content,
      type: product_type,
      price: price,
      updateType: updateType,
      updateid: updateid,
      avatars: avatars
    })
  }

  showPicDiv=(index)=>{
    let updateAvatarIndex = '';
    let avatar_title = '';
    let avatar_src = '';
    if(index != null){
      updateAvatarIndex = index;
      let avatar_title = this.state.avatars[index][0]||'';
      let avatar_src = this.state.avatars[index][1]||'';
    }

    var showPicDiv = this.state.showPicDiv == "block"?"none":"block";
    this.setState({
      showPicDiv: showPicDiv,
      updateAvatarIndex: updateAvatarIndex,
      avatar_up: [avatar_title,avatar_src]
    })
  }

  hidePicDiv=()=>{
    this.setState({showPicDiv:"none"});
  }  

  minusPic=(index)=>{
    let avatars = this.state.avatars;
    avatars.remove(index);
    this.setState({avatars});
  }

  deleteProduct=(obj)=>{
  	if(!obj.id){
  	 alert("请选择ID！");
  	 return false;
    }
    let id = obj.id;
    var res = confirm("确认删除吗！");
    if(!res){
    	return false;
    };
    var url = Config.api+"product/delete";
    fetchApi({
      url,
      method: "POST",
      body: {id:id, ownerid:this.state.shop.id, typeid:1}
    },function(res){
      resultAlert(res);
      if(res.status == 200){
        this.setState({searchFlag:1});
      }
    }.bind(this));
  }

  cancelPost=()=>{
    this.setState({showPostDiv:"none"});
  }

  sendPost=()=>{
    if(!this.state.title || !this.state.content){
      alertMsg("信息没填完整！");
      return false;
    }

    let id = this.state.updateid>0?"?id="+this.state.updateid:"";
    let url = Config.api + "product/update"+id;

    this.setState({showPostDiv:"none"});

    let product = {
      avatar: JSON.stringify(this.state.avatars), 
      title: this.state.title, 
      content: this.state.content, 
      owner_id: this.state.shop.id, 
      owner_name: this.state.shop.name, 
      updateid: this.state.updateid, 
      typeid: 1,
      price: this.state.price,
      type: this.state.type
    };

    fetchApi({
      url,
      method: "POST",
      body: product
    },function(res){
      if(!isJson(res)){
          errMessage("","服务器文件错误！");
          return false;
      }
      resultAlert(res);
      if(res.status == 200){
        this.setState({searchFlag:1});
      }
    }.bind(this));
  }

  handleChangeTitle=(event)=>{
    this.setState({
      title: event.target.value
    })
  }

  handleChangeAvatar_title=(event)=>{
    let avatar_up = this.state.avatar_up;
    avatar_up[0] = event.target.value;
    this.setState({
      avatar_up
    })
  }

  handleChangeContent=(event)=>{
    this.setState({
      content: event.target.value
    })
  }

  handleChangeType=(event)=>{
    this.setState({
      type: event.target.value
    })
  }

  handleChangePrice=(event)=>{
    this.setState({
      price: event.target.value
    })
  }

  handlePicUpdate=()=>{
    let index = this.state.updateAvatarIndex;
    let avatars = [...this.state.avatars];
    console.log(index)
    if(index != ''){
      avatars[index][0] = this.state.avatar_up[0];
      avatars[index][1] = this.state.avatar_up[1]
    }else{
      let avatar_up = [this.state.avatar_up];
      avatars = avatars.concat(avatar_up);
      console.log(avatars)
    }
    this.setState({
      avatars,
      showPicDiv:"none"
    })
  }

  handleUploadChange=(avatar)=>{
    let rd = Math.random();
    let avatar_up = this.state.avatar_up;
    avatar_up[1] = avatar;
    this.setState({avatar_up,rd});
  }

  updateSubmit=(avatar)=>{
    console.log("图片上传成功")
  }  

  receiveChildData=(obj)=>{
    let productType = JSON.parse(obj.owner.product_type);
    this.setState({shop: obj.owner,searchFlag:0,productType});
  }

  render(){
    setTitle('产品管理');
    if(!this.state.shop) return null;

    var imgList = !this.state.avatars?null:this.state.avatars.map(function(avatar,index){
      let avatarArr = [];
      if(typeof(avatar) == "object"){
        avatarArr = avatar;
      }else{
        avatarArr[0] = "";
        avatarArr[1] = avatar;
      }
      return(
        <div style={{width:"98%",margin:"5px"}}>
          <span>{avatarArr[0]}</span>
          <div style={{position:"relative",top:"10px",width:"100%",textAlign:"right"}}><span style={{display:"inline-block",borderRadius:"10px",fontSize:"10px",backgroundColor:"white",color:"black", marginTop:"0px",marginRight:"10px",width:"20px",height:"20px",lineHeight:"20px",textAlign:"center"}} onTouchEnd={this.minusPic.bind(this,index)}>X</span></div>
          <img key={index} src={thumbUrl+"/productphotos/"+avatarArr[1]+".jpg"} style={{width:"98%",marginTop:"-15px"}}/>
        </div>
      )
    }.bind(this))

    var errMsg = "错误提示";
    var errStyle = {textAlign:"left", color:"red", clear:"left", fontSize:"12px", margin:"3px", clear:"both"};

    var productTypes = !this.state.productType?null:this.state.productType.map(function(item,index){
      return(<option key={index} value={item[0]}>{item[1]}</option>);
    }.bind(this));    

    let photoname = this.state.avatar_up?this.state.avatar_up[1]:'';
    let topproductphotoname = this.state.updateid?this.state.updateid:'';

    return (
      <div ref="main" style={{width:"100%",height:"100%"}} onScroll={this.handleScroll}>
        <table style={{height:"100%"}}><tbody>
          <tr style={{height:"30px"}}><td>
            <Storenavadmin shop={this.state.shop}/>
          </td></tr>
          <tr style={{height:"30px"}}><td>
            <table id="club-nav" style={{width:'100%',backgroundColor: '#eeeeee'}}>
              <tbody>
                <tr style={{height:'35px', lineHeight:'35px', borderBottom:"1px #ddd solid"}}>
                  <td style={{width:"80px",color:"seagreen",textAlign:"center"}} onTouchEnd={touchEnd.bind(this,"#/storesadmin/producttype/"+this.props.id)}>产品类型</td>
                  <td style={{textAlign:'right'}}>
                    <span style={{padding:"3px",borderRadius:"3px",color:"seagreen"}} onTouchEnd={this.showPostDiv.bind(this,{})}>发布</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </td></tr>
          <tr><td style={{overflowY:"scroll",verticalAlign:"top"}}>  
            <Listall 
              apiurl={Config.api+'product/listadmin?typeid=1&ownerid='+this.props.id} 
              hashurl={"#/storesadmin/products/"+this.props.id}
              backurl={"#/storesadmin/products/"+this.props.id} 
              searchData={this.state.searchData}
              item={ListItem}
              searchFlag={this.state.searchFlag}
              receiveChildData={this.receiveChildData}
              methods={{deleteProduct:this.deleteProduct,showPostDiv:this.showPostDiv}}
            />
          </td></tr>
        </tbody></table>

        <div style={{display:this.state.showPostDiv,position:"fixed",top:"0px",zIndex:"1000",textAlign:"center",width:"100%",height:"100%",overflowY:"auto",backgroundColor:"white"}}>
          <table style={{height:"100%"}}><tbody>
              <tr style={{height:"50px"}}><td>
                <table style={{width:"100%",height:"50px",lineHeight:"50px",backgroundColor:"slategray",marginTop:"1px"}}><tbody><tr>
                  <td style={{textAlign:"left",paddingLeft:"5px"}}><span style={{padding:"3px",borderRadius:"3px",marginRight:"20px",color:"white"}} onTouchEnd={this.cancelPost}>取消</span></td>
                  <td style={{textAlign:"right",paddingRight:"5px"}}><span style={{padding:"3px",borderRadius:"3px",color:"lime"}} onTouchEnd={this.sendPost}>发表</span></td>
                </tr></tbody></table>
                <div style={{height:"10px"}}></div>
              </td></tr>
              <tr style={{height:"45px",borderBottom:"1px #ccc solid"}}>
                <td style={{textAlign:"center"}}>
                  <input type="text" className="ipt" style={{margin:"3px",width:"95%",lineHeight:"30px",verticalAlign:"middle"}} placeholder="商品名称：请输入3~30个字符，必填" maxLength="30" value={this.state.title||''} onChange={this.handleChangeTitle} onBlur={this.handleBlur} />
                  <em className={this.state.errShow.title?'show':'hide'} style={errStyle}>{this.state.inputed.title || 0}/30  {this.state.ErrorMsg.title}</em>
                </td>
              </tr>
              <tr style={{height:"40px",backgroundColor:"#eee",borderBottom:"1px #ccc solid",display:this.state.toppicdiv}}><td>
                <table style={{width:"100%",position:"relative"}}><tbody><tr>
                  <td style={{color:"#111",height:"40px",textAlign:"right",verticalAlign:"middle"}}>
                        <Upload 
                          style={{color:"darkgreen"}} 
                          title="封面图片"
                          uploadurl={photoApi + "/topproduct/uploadpic?id="+this.state.updateid}
                          handleUploadChange={this.handleUploadChange}
                          updateSubmit={this.updateSubmit}
                        />
                  </td>
                </tr></tbody></table>
              </td></tr>
              <tr style={{display:this.state.toppicdiv,borderBottom:"1px #ccc solid"}}><td style={{textAlign:"center"}}>
                <img src={thumbUrl + "/topproductphotos/"+topproductphotoname+".jpg?td="+this.state.rd} style={{width:this.state.phoneWidth}}/>
              </td></tr>
              <tr style={{height:"45px",borderBottom:"1px #ccc solid"}}>
                <td>
                  <table><tbody><tr><td>
                    类别：<select ref="product" name="product" id="product" style={{marginLeft:"5px",height:"20px"}} value={this.state.type||''} onChange={this.handleChangeType}>
                      <option value="">请选择</option>
                      {productTypes}
                    </select>
                  </td><td style={{textAlign:"right",paddingRight:"10px"}}>
                    价格：<input className="ipt" type="number" style={{textAlign:"right",margin:"3px",width:"30px",height:"20px"}} placeholder="商品价格：请输入数字" maxLength="10" value={this.state.price||''} onChange={this.handleChangePrice}/>元
                    <em className={this.state.errShow.price?'show':'hide'} style={errStyle}>{this.state.inputed.price || 0}/400  {this.state.ErrorMsg.price}</em>
                  </td></tr></tbody></table>
                </td>
              </tr>
              <tr style={{height:"45px",borderBottom:"1px #ccc solid"}}>
                <td style={{textAlign:"center"}}>
                  <textarea className="ipt" style={{width:"99%",height:"100px",border:"0px"}} placeholder="商品介绍：请输入不超过400个字符" maxLength="400" value={this.state.content||''} onChange={this.handleChangeContent}></textarea>
                  <em className={this.state.errShow.content?'show':'hide'} style={errStyle}>{this.state.inputed.content || 0}/400  {this.state.ErrorMsg.content}</em>
                </td>
              </tr>
              <tr style={{height:"40px",backgroundColor:"#eee",borderBottom:"1px #ccc solid"}}><td>
                <table style={{width:"100%",position:"relative"}}><tbody><tr>
                  <td style={{color:"#111",height:"40px",textAlign:"right",verticalAlign:"middle"}}>
                    <span style={{padding:"5px",borderRadius:"3px",color:"chocolate"}} onTouchEnd={this.showPicDiv.bind(this,null)}>添加图文</span>
                  </td>
                </tr></tbody></table>
              </td></tr>
              <tr><td>      
                <div style={{width:"100%",height:"100%",textAlign:"left"}}>
                  {imgList}
                </div>
              </td></tr>  
            </tbody></table>
        </div>

        <div style={{display:this.state.showPicDiv,position:"fixed",top:"0px",zIndex:"1000000",textAlign:"center",width:"100%",height:"100%",backgroundColor:"white"}}>
          <table style={{width:"100%",height:"50px",lineHeight:"50px",backgroundColor:"slategray",marginTop:"1px"}}><tbody><tr>
            <td style={{textAlign:"left",paddingLeft:"5px"}}><span style={{padding:"3px",borderRadius:"3px",marginRight:"20px",color:"white"}} onTouchEnd={this.hidePicDiv}>取消</span></td>
            <td style={{textAlign:"right",paddingRight:"5px"}}><span style={{padding:"3px",borderRadius:"3px",color:"lime"}} onTouchEnd={this.handlePicUpdate}>修改</span></td>
          </tr></tbody></table>
          <div style={{height:"10px"}}></div>
          <table style={{width:"100%"}}><tbody><tr><td style={{width:"5px"}}></td><td style={{textAlign:"center"}}>
          	<input style={{width:"97%",height:"40px",border:"0px"}} placeholder="标题" value={this.state.avatar_up?this.state.avatar_up[0]:''} onChange={this.handleChangeAvatar_title}/>
          </td><td style={{width:"5px"}}></td></tr></tbody></table>
          <table style={{width:"100%"}}><tbody>
            <tr style={{height:"40px"}}><td>
              <table style={{width:"100%",position:"relative"}}><tbody><tr>
                <td style={{color:"#111",height:"40px",textAlign:"right",verticalAlign:"middle"}}>
                  <Upload 
                    style={{color:"darkgreen"}} 
                    title="上传图片"
                    uploadurl={photoApi + "/product/uploadpic"}
                    handleUploadChange={this.handleUploadChange}
                    updateSubmit={this.updateSubmit}
                  />
                </td>
              </tr></tbody></table>
            </td></tr>
          </tbody></table>
          <div style={{height:"10px"}}></div>
          <table style={{width:"100%"}}><tbody>
            <tr><td style={{textAlign:"center"}}>
              <img src={thumbUrl + "/productphotos/"+photoname+".jpg?td="+this.state.rd} style={{width:this.state.phoneWidth}}/>
            </td></tr>
          </tbody></table>
        </div>    

      </div>
    );
  }
}