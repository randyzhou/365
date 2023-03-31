export default class Storenav extends React.Component{
  constructor(props){
    super(props);
    this.state = {
      down: 0,
      su: props.su
    }
  }

  back = () => {
    let url = backurl_store == ''?"#/stores":backurl_store;
    backurl_store = '';
    touchEnd(url);
  }

  render(){
    if(!this.props.store){
      alertMsg("组件错误，点击确定返回！",0,function(){
        window.history.back();
      })
      return false;
    }

    let grouphide = '';
    if(this.props.store.typeid != 1) grouphide = 'none';
    let storehide = '';
    if(this.props.store.typeid == 1) storehide = 'none';

    return (
        <table style={{width:'100%', backgroundColor: 'white', textAlign:'center'}}>
          <tbody>
            <tr style={{height:"40px",lineHeight:"40px",backgroundColor:"cornflowerblue",color:"white"}}><td>
                <table style={{width:"100%"}}><tbody>
                  <tr>
                    <td style={{width:"40px",height:"40px",lineHeight:"40px",textAlign:"center",verticalAlign:"middle"}}>
                      <div style={{width:"33px",height:"33px"}}><Icon type={'left'} style={{width:"35px",height:"35px"}} onTouchEnd={this.back}/></div>
                    </td>
                    <td style={{textAlign:"center",fontSize:"18px"}} colSpan="7">
                      <span onTouchEnd={touchEnd.bind(this,"#/stores/detail/"+this.props.store.id)}>{this.props.store.name}・<span style={{color:"ghostwhite",fontSize:"16px"}}>论坛</span></span>
                    </td>
                    <td style={{textAlign:"center",width:"40px"}}>
                      <div style={{color:'#fff',fontSize:"16px",width:"40px"}} onTouchEnd={touchEnd.bind(this,"#/messages/list?toid="+this.props.store.id+"&roomtype=Store")}>群聊</div>
                    </td>
                  </tr>
                </tbody></table>
            </td></tr>
            <tr><td>
              <table style={{width:"100%"}}><tbody>
                <tr style={{height:'35px',lineHeight:'35px'}}>
                    <td style={{textAlign:"center",display:storehide}}><span style={{color:'#333'}} onTouchEnd={touchEnd.bind(this,"#/stores/detail/"+this.props.store.id)}>简介</span></td>
                    <td style={{textAlign:"center"}}><span style={{color:'#333'}} onTouchEnd={touchEnd.bind(this,"#/stores/main/"+this.props.store.id)}>首页</span></td>
                    <td style={{textAlign:"center",display:storehide}}><span style={{color:'#333'}} onTouchEnd={touchEnd.bind(this,"#/stores/act/"+this.props.store.id)}>活动</span></td>
                    <td style={{textAlign:"center",display:grouphide}}><span style={{color:'#333'}} onTouchEnd={touchEnd.bind(this,"#/stores/groups/"+this.props.store.id)}>社团</span></td>
                    <td style={{textAlign:"center"}}><span style={{color:'#333'}} onTouchEnd={touchEnd.bind(this,"#/stores/members/"+this.props.store.id)}>会员</span></td>
                    <td style={{textAlign:"center"}}><span style={{color:'#333'}} onTouchEnd={touchEnd.bind(this,"#/stores/photos/"+this.props.store.id)}>照片</span></td>
                    <td style={{textAlign:"center"}}><span style={{color:'#333'}} onTouchEnd={touchEnd.bind(this,"#/stores/articles/"+this.props.store.id)}>新文</span></td>
                    <td style={{textAlign:"center",display:grouphide}}><span style={{color:'#333'}} onTouchEnd={touchEnd.bind(this,"#/stores/products/"+this.props.store.id)}>产品</span></td>
                    <td style={{textAlign:"center",display:grouphide}}><span style={{color:'#333'}} onTouchEnd={touchEnd.bind(this,"#/stores/retweets/"+this.props.store.id)}>推品</span></td>
                </tr>
              </tbody></table>
            </td></tr>
            <tr><td style={{borderBottom:"1px #ccc solid"}}></td></tr>
          </tbody>
        </table>
    );
  }
}