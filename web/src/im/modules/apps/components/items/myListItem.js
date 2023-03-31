class MyListItem extends React.Component{
  toggleAppDivShow(weburl){
    this.props.toggleAppDivShow(weburl);
  }

  render() {
    var $app = this.props.item;
    var width = this.props.Width+"px";
    return (
  		<div style={{display:"inherit",float:"left",textAlign:"center",width:width,height:"100px"}} onTouchStart={this.props.longTouchstart.bind(this,$app)} onTouchEnd={this.props.longTouchend} onTouchMove={this.props.longTouchmove}>
        <Img src={thumbUrl+"/topappphotos/"+$app.webid+".jpg"} style={{width:"50px",height:"50px",borderRadius:"15px"}} onClick={this.toggleAppDivShow.bind(this,$app.weburl)}/>
        <br/>
        <div style={{width:"57px",margin:"auto",textAlign:"center",overflow:"hidden",whiteSpace:"nowrap",color:"white",fontSize:"14px"}}>{$app.webname}</div>
      </div>
    )
  }
}

export default MyListItem;

