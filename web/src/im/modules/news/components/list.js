export default class List extends React.Component{
  constructor(props){
    super(props);
    this.state = {
      searchData: {},
      searchFlag: 0
    }
  }

  componentDidMount(){
  }

  render() {
    setTitle("新文");
    return (
      <div style={{width:"100%",height:"100%"}}>
        <table style={{width:"100%",height:"100%"}}><tbody>
          <tr><td style={{height:"40px"}}>
            <Newsnav />
          </td></tr>
          <tr><td style={{overflowY:"scroll",verticalAlign:"top"}}>
            <Listarticles 
              apiurl={Config.api+'article/list'} 
              hashurl={"#/news"}
              backurl={"#/news"} 
              searchData={this.state.searchData}
              searchFlag={this.state.searchFlag}
            />
          </td></tr>
          <tr style={{height:"30px"}}><td>
            <Mainbottom />
          </td></tr>
        </tbody></table>
      </div>
    );
  }
}