import StoreItem from "./items/store.js";
import ActItem from "./items/act.js";
import FriendItem from "./items/friend";
export default class Detail extends React.Component{
  constructor(props){
    super(props);
    this.state = {
      id: this.props.id,
      user: {},
      imgHeight: "272",
      photos: [],
      friends: [],
      searchData: {},
      searchFlag: 0,
      phoneWidth: parseInt(window.screen.width)>450?450:parseInt(window.screen.width)
    }
  }

  componentDidMount(){
    if(this.props.id){
      fetchApi({
        url:Config.api+"user/main?id="+this.props.id
      },function(res){
        if(!isJson(res)){
            errMessage("","服务器文件错误！");
            return false;
        }
        if(res.status == 200){
          var phoneWidth =  parseInt(window.screen.width)>450?450:parseInt(window.screen.width)-1;
          this.setState({
            phoneWidth,
            user: res.data,
            shops: res.shops,
            acts: res.acts,
            friends: res.friendretweets,
            photos: res.photos,
          });
        }else{
          errMessage(res);
        }
      }.bind(this));

    }
  }

  historyBack = ()=>{
    history.back();
  }

  render() {
    setTitle(this.state.user.username);
    let $user = this.state.user;
    let $this = this;

    var StoreItems = !this.state.shops?null:this.state.shops.map(function (item,index) {
      return (
        <StoreItem key={index} item={item} backurl={"#/users/main/"+$user.userid}/>
      );
    });

    var ActItems = !this.state.acts?null:this.state.acts.map(function (item,index) {
      return (
        <ActItem key={index} item={item} backurl={"#/users/main/"+$user.userid}/>
      );
    });

    var PhotoItems = !this.state.photos?null:this.state.photos.map(function (item,index) {
      return (
        <div style={{border:"1px #ccc solid",position:"relative"}}>
          <div style={{width:"100%",height:"30px",position:"absolute",top:"0px",backgroundColor:"black",color:"white",lineHeight:"30px",opacity:"0.7",textAlign:"center"}}>
            <span onTouchEnd={touchEnd.bind(this,"#/users/photos/"+$this.props.id)}>{item.photoname}</span>
          </div>
          <Img 
            src={thumbUrl+"/userphotos/"+item.avatar+".jpg"} 
            style={{width:$this.state.phoneWidth,height:"270px"}} 
            onLoad={() => {
              window.dispatchEvent(new Event('resize'));
              this.setState({ imgHeight: 'auto' });
            }}
          />
        </div>
      );
    }.bind(this));

    var PhotoDiv = null;
    if(this.state.photos[0]){
      PhotoDiv = <div style={{width:$this.state.phoneWidth,backgroundColor:"white"}}>
                    <Carousel autoplay={true} infinite>
                      {PhotoItems}
                    </Carousel>
                  </div>
    }

    var FriendItems = !this.state.friends?null:this.state.friends.map(function (item,index) {
      return (
        <FriendItem 
          key={item.id} 
          item={item} 
          phoneWidth={$this.state.phoneWidth}
          backurl={"#/users/main/"+$this.props.id}
          onLoad={() => {
              window.dispatchEvent(new Event('resize'));
              this.setState({ imgHeight: 'auto' });
            }}
      />
      );
    }.bind(this));   

    var FriendDiv = null;
    if(this.state.photos[0]){
      FriendDiv = <List renderHeader={() => '推荐朋友'} className="my-list" style={{width:this.state.phoneWidth}}>
                    <table><tbody><tr><td>
                      <Carousel autoplay={true} infinite style={{backgroundColor:"white"}}>
                        {FriendItems}
                      </Carousel>
                    </td></tr></tbody></table>
                  </List>
    }
 
    return (
      <table style={{width:"100%",height:"100%"}}>
      <tbody>
        <tr><td style={{height:"30px"}}>
          <Usernav user={$user}/>
        </td></tr>
        <tr><td>
          <div style={{width:"100%",height:"100%",overflowY:"auto"}}>
            <div style={{width:this.state.phoneWidth,backgroundColor:"white"}}>
              <Carousel autoplay={true} infinite>
                {PhotoItems}
              </Carousel>
            </div>

            <List renderHeader={() => <div style={{height:"20px",lineHeight:"20px"}}>报名活动<Icon type={'right'} style={{width:"20px",height:"20px",float:"right"}} onTouchEnd={touchEnd.bind(this,"#/users/acts/"+this.props.id)}/></div>} className="my-list">    
              <div style={{width:"100%",backgroundColor:"white"}}>
                {ActItems?ActItems:"无"}
              </div>
            </List>

            <List renderHeader={() => <div style={{height:"20px",lineHeight:"20px"}}>所在组织<Icon type={'right'} style={{width:"20px",height:"20px",float:"right"}} onTouchEnd={touchEnd.bind(this,"#/users/groups/"+this.props.id)}/></div>} className="my-list">
              <div style={{width:"100%",backgroundColor:"white"}}>
                {StoreItems?StoreItems:"无"}
              </div>  
            </List>

            <List renderHeader={() => '推荐朋友'} className="my-list" style={{width:this.state.phoneWidth}}>
              <div style={{width:this.state.phoneWidth,backgroundColor:"white"}}>
                <Carousel autoplay={true} infinite>
                  {FriendItems}
                </Carousel>
              </div>
            </List>

            <List renderHeader={() => <div style={{height:"20px",lineHeight:"20px"}}>推荐文章<Icon type={'right'} style={{width:"20px",height:"20px",float:"right"}} onTouchEnd={touchEnd.bind(this,"#/users/retweets/"+this.props.id)}/></div>} className="my-list" />
            <div style={{width:"100%",height:"100%",backgroundColor:"white"}}>
              <Listarticles 
                apiurl={Config.api+'retweet/articlelist?userid1='+this.props.id} 
                hashurl={"#/users/main/"+this.props.id}
                backurl={"#/users/main/"+this.props.id} 
                searchData={{}}
                searchFlag={this.state.searchFlag}
                item={[]}
                pullFlag = {1}
              />
            </div>

          </div>
        </td></tr>
      </tbody></table>
    );
  }
}


