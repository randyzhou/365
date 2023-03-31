export default React.memo(props => {
  const [startX,setStartX] = React.useState(0)

  const touchStart = (event)=>{
    event.stopPropagation()
    if(!event.touches.length) return
    setStartX(event.touches[0].pageX)
  }

  const touchMove = (event)=>{
    event.stopPropagation();
    if(!event.touches.length) return;
    let moveX = event.touches[0].pageX - startX
    if(moveX < -100) location.href = '#/groups';
    if(moveX > 100) location.href = '#/me/admin';
  }
  
  return (
    <div style={{padding:"0px",width:"100%",height:"100%"}} onTouchStart={touchStart} onTouchMove={touchMove}>
      {props.children}
    </div>
  );
})