export default class Img extends React.Component{
  constructor(props){
    super(props);
    let src = this.props.src;
    this.state = {src}
  }

  handleError=()=>{
    let src = webUrl+"/image/365logo.png";
    this.setState({src});
  }

  render(){
    let src = this.state.src;
    if(src.indexOf("undefined") == -1){
      return <img {...this.props} src={src} onError={this.handleError}/>
    }else{
      return <img />
    }
  }
}
