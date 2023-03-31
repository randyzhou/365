export default class Storenavadmin extends React.Component{
  constructor(props){
    super(props);
  }

  render(){
    let store = this.props.shop;
    let typeidshow = '';
    if(store.typeid != 1) typeidshow = 'none';
    let shopid = "/"+store.id;

    return (
      <table style={{width:'100%', backgroundColor: 'white', textAlign:'center'}}>
        <tbody>
          <tr><td style={{textAlign:"center",height:"40px",lineHeight:"40px",backgroundColor:"cornflowerblue",color:"white"}}>
            <table><tbody><tr>
              <td style={{width:"40px"}}> </td>
              <td style={{textAlign:"center"}}><span onTouchEnd={touchEnd.bind(this,"#/stores")}>{store.name}</span></td>
              <td style={{width:"40px",textAlign:"center"}} onTouchEnd={touchEnd.bind(this,"#/me/admin")}>关闭</td>
            </tr></tbody></table>  
          </td></tr>
          <tr style={{height:'35px',lineHeight:'35px',borderBottom:"1px #ccc solid"}}><td>
            <table><tbody><tr>
              <td style={{textAlign:"center"}}><span style={{color:'#333',fontSize:"14px"}} onTouchEnd={touchEnd.bind(this,"#/storesadmin/basic"+shopid)}>首页</span></td>
              <td style={{textAlign:"center",display:typeidshow}}><span style={{color:'#333',fontSize:"14px"}} onTouchEnd={touchEnd.bind(this,"#/storesadmin/groups"+shopid)}>社团</span></td>
              <td style={{textAlign:"center"}}><span style={{color:'#333',fontSize:"14px"}} onTouchEnd={touchEnd.bind(this,"#/storesadmin/members"+shopid)}>会员</span></td>
              <td style={{textAlign:"center"}}><span style={{color:'#333',fontSize:"14px"}} onTouchEnd={touchEnd.bind(this,"#/storesadmin/photos"+shopid)}>照片</span></td>
              <td style={{textAlign:"center"}}><span style={{color:'#333',fontSize:"14px"}} onTouchEnd={touchEnd.bind(this,"#/storesadmin/articles"+shopid)}>新文</span></td>
              <td style={{textAlign:"center",display:typeidshow}}><span style={{color:'#333',fontSize:"14px"}} onTouchEnd={touchEnd.bind(this,"#/storesadmin/products"+shopid)}>产品</span></td>
              <td style={{textAlign:"center",display:typeidshow}}><span style={{color:'#333',fontSize:"14px"}} onTouchEnd={touchEnd.bind(this,"#/storesadmin/retweets"+shopid)}>推品</span></td>
            </tr></tbody></table>

          </td></tr>
        </tbody>
      </table>
    );
  }
}