export default class Upload extends React.Component{
  constructor(props){
    super(props);
    this.state = {}
  }

  handleUploadChange=(event)=>{
    if (!event.target.files.length) return;
    let file = event.target.files[0];
    if (!/\/(?:jpeg|jpg|png|gif)/i.test(file.type)) return;
    let reader = new FileReader();
    reader.readAsDataURL(file);
    let that = this;
    reader.onload = function() {
      let result = this.result;
      let img = new Image();
      img.src = result;
      
      if (result.length <= UploadSize.photoMin || result.length >= UploadSize.photoMax) {
        img = null;
        let photoMax = Upload.photoMax/1000000;
        let photoMin = Upload.photoMin/1000;
        alert("图片小于"+photoMin+"k或大于"+photoMax+"M")
        return;
      }

      if (img.complete) callback();
      else img.onload = callback;
      function callback() {
        let filetype = file.type;
        let imagefile = compress(img);
        let url = that.props.uploadurl;
        upload(imagefile,filetype,url,function(res){
          resultAlert(res);
          if(res.status == 200){
            let avatar = res.avatar;
            that.props.updateSubmit("avatar",avatar);
            that.props.handleUploadChange(avatar)
            // let shop = this.state.shop;
            // shop.avatar = avatar;
            // this.setState({shop});

          }
        }.bind(this));
        img = null;
      }
    };
  }

  render() {
    return (
      <span style={this.props.style}>
        <span>{this.props.title}</span>
        <input id="userpic" ref="userpic" type="file" accept="image/*" style={{position:"absolute",opacity:"0",zIndex:"10000",width:this.props.style.width?this.props.style.width:"72px",right:"5px"}} onChange={this.handleUploadChange}/>
      </span>
    );

  }
}