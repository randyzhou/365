export default React.createClass({
  displayName: 'Nav',
  showChatDiv: function(toid,tousername,tousersex,type){
    showChatDiv(toid,tousername,tousersex,type);
  },
  render: function() {
    if(!this.props.store){
      return false;
    }

    return (
      <table style={{width:'100%', backgroundColor: 'white', textAlign:'center'}}>
        <tbody>
          <tr style={{height:'35px',lineHeight:'35px'}}>
              <td style={{textAlign:"center"}}><span style={{color:'#333'}} onTouchEnd={touchEnd.bind(this,"#/stores/detail/"+this.props.store.id+"?token="+token)}>店铺首页</span></td>
              <td style={{textAlign:"center"}}><span style={{color:'#333'}} onTouchEnd={touchEnd.bind(this,"#/stores/space/"+this.props.store.id+"?token="+token)}>商家动态</span></td>
              <td style={{textAlign:"center"}}><span style={{color:'#333'}} onTouchEnd={touchEnd.bind(this,"#/stores/storeproducts/"+this.props.store.id+"?token="+token)}>产品服务</span></td>
              <td style={{textAlign:"center"}}><span style={{color:'#333'}} onTouchEnd={touchEnd.bind(this,"/wxpay.php?storeid="+this.props.store.id+"&token="+token)}>进入支付</span></td>
          </tr>
          <tr><td colSpan="4" style={{borderBottom:"1px #ccc solid"}}></td></tr>
        </tbody>
      </table>
    );

  }
});


