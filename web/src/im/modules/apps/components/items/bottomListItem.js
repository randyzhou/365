class BottomListItem extends React.Component{
  toggleAppDivShow(weburl){
    this.props.toggleAppDivShow(weburl);
  }

  render(){
    var $app = this.props.item;
    return (
  		<td style={{textAlign:"center",width:"100px",height:"50px",lineHeight:"50px"}} onTouchStart={this.props.longTouchstart.bind(this,$app)} onTouchEnd={this.props.longTouchend} onTouchMove={this.props.longTouchmove}>
        <Img src={thumbUrl+"/topappphotos/"+$app.webid+".jpg"} style={{marginRight:"20px",width:"50px",height:"50px",borderRadius:"15px"}} onClick={this.toggleAppDivShow.bind(this,$app.weburl)}/>
      </td>
    )
  }
}

export default BottomListItem;

