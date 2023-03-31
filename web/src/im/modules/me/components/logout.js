export default class Logout extends React.Component {
  constructor(props){
    super(props);
  }

  componentDidMount(){
    var url = Config.api+"site/logout";
    fetchApi({
      url
    },function(res){
      console.log(res)
      if(!isJson(res)){
          errMessage("","服务器文件错误！");
          return false;
      }
      resultAlert(res);
      if(res.result == 200){
          token = null;
          clearCookie('token');
          socket.emit("leave");
          location.href = "/im";
      }
    }.bind(this))
  }

  render() {
    setTitle("管理界面");
    return null;

  }
}
