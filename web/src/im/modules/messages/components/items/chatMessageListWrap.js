export default React.memo(props => {
  const [pert,setPert] = React.useState(0)
  const [startX,setStartX] = React.useState(0)
  React.useEffect(()=>{
    setPert(props.pert)
  },[props.pert])

  const detailStart = (e)=>{
    e.stopPropagation();
    if(!e.touches.length) return;
    setStartX(e.touches[0].pageX);
  }

  const detailMove = (e)=>{
    e.stopPropagation();
    if(!e.touches.length) return;
    let moveX = e.touches[0].pageX - startX;
    if(moveX > 40){
      setPert(moveX/2);
    }
  }

  const detailEnd = (e)=>{
    e.stopPropagation();
    let pert1 = 0
    if(pert > 50) {
      pert1 = 100
      props.hideDetailDiv(e)
    }
    setPert(pert1)
  }

  return(
    <div style={{backgroundColor:"gray",width:"100%",height:"100%",zIndex:"1000",position:"fixed",top:"0",transform:"translateX("+pert+"%)"}} onTouchStart={detailStart} onTouchMove={detailMove} onTouchEnd={detailEnd}>
      {props.children}
    </div>
  )

})
