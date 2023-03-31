export default class Life extends React.Component{
  constructor(props){
    super(props);
    this.state = {
      errTag: "disabled",
      Errors: {},
      ErrorMsg: {},
      errShow: {},
      inputed: {},
      user: {},
      userlife: {},
      life: []
    }
  }

  componentDidMount(){
      let url = Config.api+"user/updateuserlife";
      fetchApi({
        url
      },function(res){
        if(!isJson(res)){
            alertMsg("服务器文件错误！");
            return false;
        }
        if(res.status == 200){
          var user = res.user;
          let userlife = res.userlife;
          var life = [['','','','','','','']];
          if(userlife.life) life = JSON.parse(userlife.life);
          this.setState({
            user,
            userlife,
            life
          });
        }else{
          alertMsg(res);
        }
      }.bind(this));
  }

  handleChange=(index,i,event)=>{
    if(i == 1) return;
    var value = event.target.value;
    var life = this.state.life;
    
    if(i == 0 && value.length >= 4){
      let year = parseInt(this.state.user.userbirthday.split("-")[0]);
      let now = parseInt(value);
      let age = now-year+1;
      life[index][1] = age;
    }

    life[index][i] = value;
    this.setState({life});
  }

  handleSubmit=()=>{
    let userlife = {};
    let life = JSON.stringify(this.state.life);
    userlife.life = life;
    let url = Config.api+"user/updateuserlife";
    fetchApi({
      url,
      method: "POST",
      body: {userlife: userlife}
    },function(res){
      if(res.status == 200){
        resultAlert(res);
      }
    });
  }

  addItem=()=>{
    var life = [...this.state.life];
    life.push(['','','','','','','']);
    this.setState({
     life
    })
  }

  upItem=(index,preIndex)=>{
    var life = this.state.life;
    var item =life[index];
    var preItem =life[preIndex];
    life[preIndex] = item;
    life[index] = preItem;
    this.setState({
     life:life
    })
  }

  deleteItem=(index)=>{
    alertMsg("确定删除吗？",1,function(){
      var life = this.state.life;
      life.remove(index);
      this.setState({
        life:life
      })
    }.bind(this));
  }

  render(){
    setTitle("人生历程");
    var $this = this;
    var List = this.state.life.map(function(item,index){
      return (
        <tr key={index} style={{height:"50px"}}>
          <td><input maxLength="4" type="number" style={{lineHeight:"30px",verticalAlign:"middle",display:"inline",width:"80%"}} placeholder="" value={item[0]} onChange={$this.handleChange.bind(this,index,0)} /></td>
          <td>{item[1]}</td>
          <td><input type="text" style={{lineHeight:"30px",verticalAlign:"middle",width:"90%"}} placeholder="" value={item[2]} onChange={$this.handleChange.bind(this,index,2)} /></td>
          <td><input type="text" style={{lineHeight:"30px",verticalAlign:"middle",width:"90%"}} placeholder="" value={item[3]} onChange={$this.handleChange.bind(this,index,3)} /></td>
          <td><input type="text" style={{lineHeight:"30px",verticalAlign:"middle",width:"90%"}} placeholder="" value={item[4]} onChange={$this.handleChange.bind(this,index,4)} /></td>
          <td><input type="text" style={{lineHeight:"30px",verticalAlign:"middle",width:"90%"}} placeholder="" value={item[5]} onChange={$this.handleChange.bind(this,index,5)} /></td>
          <td style={{width:"30px"}}><div onClick={$this.upItem.bind(this,index,index-1<0?0:index-1)} className="btn-info">^</div></td>
          <td style={{width:"40px",textAlign:"center"}} onClick={$this.deleteItem.bind(this,index)}><span style={{background:"url(image/icon_new.jpg) no-repeat -193px -113px",display:"inline-block",width:"20px",height:"20px"}}></span></td>
        </tr>
      )
    });

    var errMsg = "错误提示";
    var errStyle = {textAlign:"left", color:"red", clear:"left", fontSize:"12px", margin:"3px", clear:"both"};

    return (
      <div style={{width:"100%",height:"100%",position:"fixed",top:"0",left:"0"}}>
        <table style={{width:"100%",backgroundColor:"#eee"}}><tbody><tr>
          <td style={{width:"60px",textAlign:"center",color:"green"}} onClick={touchEnd.bind(this,"#/usersadmin/admin/"+this.props.id)}>返回</td>
          <td></td>
        	<td style={{textAlign:"right",height:"40px"}}>
          	<span style={{padding:"5px",borderRadius:"3px",color:"green"}} onClick={this.handleSubmit}>提交</span>
        	</td>
        </tr></tbody></table>
        <table style={{width:"100%",margin:"10px"}}><tbody>
          <tr style={{height:"45px"}}>
            <td>
              <table style={{width:"100%"}}><tbody>
              <tr><td>年份</td><td style={{width:"30px"}}>年龄</td><td>学业</td><td>事业</td><td>大事</td><td>思想</td><td>排序</td><td style={{textAlign:"center"}}>删除</td></tr>
              {List}
              </tbody></table>
              <table style={{marginTop:"10px",width:"100%"}}><tbody><tr>
                <td></td>
                <td style={{width:"90px"}}>
                  <span onClick={this.addItem} style={{display:"inline-block",width:"75px",textAlign:"center",padding:"5px",borderRadius:"3px",color:"brown"}}>增加年份</span>
              </td></tr></tbody></table>
            </td>
          </tr>
        </tbody></table>
      </div>
    );
  }
}