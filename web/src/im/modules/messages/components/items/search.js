export default props => {
  const [keywords,setKeywords] = React.useState('')

  const handleChangeSearch = (event) => {
    setKeywords(event.target.value)
  }  

  const handleSearch = () => {
    console.log(keywords)
    if(keywords.length > 0){
      props.handleSearch(keywords)
    }
  }

  const clearSearch = () => {
    setKeywords('')
    props.clearSearch()
  }

  return(
    <table style={{width:"100%",height:"30px"}}><tbody><tr>
      <td style={{width:"50px",textAlign:"center"}}><span onTouchEnd={e=>props.showSendAll(0)}>群发</span></td>
      <td style={{textAlign:"left",backgroundColor:"white",borderRadius:"5px"}}>
        <table style={{width:"100%"}}><tbody><tr>
          <td>
            <input style={{width:"90%"}} placeholder="关键词" value={keywords ||''} onChange={handleChangeSearch}/>  
          </td><td style={{width:"30px"}}>  
            <span style={{float:"right",width:"14px",height:"14px",lineHeight:"14px",fontSize:"12px",color:"white",backgroundColor:"#bbb",borderRadius:"7px",textAlign:"center",display:props.searchGroupMsgs.length > 0?"inline":"none"}} onTouchEnd={clearSearch}>x</span>
          </td>
        </tr></tbody></table>    
      </td>
      <td style={{width:"50px",textAlign:"center"}} onTouchEnd={handleSearch}>搜索</td>
    </tr></tbody></table>
  )
}
