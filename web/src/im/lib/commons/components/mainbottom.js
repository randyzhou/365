export default class Mainbottom extends React.Component{
  render(){
    return (
      <table style={{bottom:"0px",width:"100%",height:"40px",backgroundColor:"white",borderTop:"1px solid #ccc"}}>
      <tbody><tr>
          <td style={{width:"1px"}}></td>
          <td style={{textAlign:"center"}}>
              <table style={{width:"100%"}}>
              <tbody><tr>
                  <td style={{textAlign: "center"}} onClick={touchEnd.bind(this,"#/messages")}>
                    <span>365</span>
                  </td>
                  <td style={{textAlign: "center"}} onClick={touchEnd.bind(this,"#/news")}>
              	    <span>新文</span>
                  </td>
                  <td style={{textAlign: "center"}} onClick={touchEnd.bind(this,"#/products")}>
              		  <span>拼购</span>
                  </td>
                  <td style={{textAlign: "center"}} onClick={touchEnd.bind(this,"#/apps")}>
              		  <span>应用</span>
                  </td>
              </tr></tbody></table>
          </td>
          <td style={{width:"10px"}}></td>
      </tr></tbody></table>
     )
   }
}