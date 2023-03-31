class AdminListItem extends React.Component{
  toggleAppDivShow(weburl){
    this.props.toggleAppDivShow(weburl);
  }

  manageDivShow(web){
    this.props.manageDivShow(web);
  }

  render(){
    var $app = this.props.item;
    return (
      <tr>
        <td>
      		<table style={{textAlign:"center",width:"100%",height:"100px",marginBottom:"10px"}}><tbody><tr>
            <td style={{width:"65px"}}>
              <Img src={thumbUrl+"/topappphotos/"+$app.id+".jpg"} style={{width:"60px",height:"60px",borderRadius:"15px"}} onTouchEnd={this.toggleAppDivShow.bind(this,$app.weburl)}/>
            </td>
            <td style={{textAlign:"left"}}>
              {$app.webname} [{$app.hits}] [{$app.bids}] [{$app.certified}]级 <span style={{float:"right",marginRight:"5px"}} onTouchEnd={this.manageDivShow.bind(this,$app)}>[管理]</span><br/>
              {$app.regtime} [{$app.username}]<br/>
              {$app.webintro}<br/>
              {$app.keywords}<br/>
              <a href={$app.weburl} target="_blank">{$app.weburl}</a><br/>
            </td>
          </tr></tbody></table>
        </td>
      </tr>
    )
  }
}

export default AdminListItem;

