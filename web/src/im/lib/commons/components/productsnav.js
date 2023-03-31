export default class Productsnav extends React.Component{
  render(){
      return (
        <table style={{width:'100%', backgroundColor: 'white', textAlign:'center'}}>
          <tbody>
            <tr style={{height:'35px',lineHeight:'35px'}}>
                <td style={{textAlign:"center"}}><span style={{color:'#333'}} onTouchEnd={touchEnd.bind(this,"#/products/list")}>首页</span></td>
                <td style={{textAlign:"center"}}><span style={{color:'#333'}} onTouchEnd={touchEnd.bind(this,"#/products/list")}>活动</span></td>
                <td style={{textAlign:"center"}}><span style={{color:'#333'}} onTouchEnd={touchEnd.bind(this,"#/products/list")}>职场</span></td>
                <td style={{textAlign:"center"}}><span style={{color:'#333'}} onTouchEnd={touchEnd.bind(this,"#/products/list")}>照片</span></td>
                <td style={{textAlign:"center"}}><span style={{color:'#333'}} onTouchEnd={touchEnd.bind(this,"#/products/list")}>产品</span></td>
                <td style={{textAlign:"center"}}><span style={{color:'#333'}} onTouchEnd={touchEnd.bind(this,"#/products/list")}>关闭</span></td>
            </tr>
            <tr><td colSpan="6" style={{borderBottom:"1px #ccc solid"}}></td></tr>
          </tbody>
        </table>
      );
  }
}
