import GroupItem from "./groupItem";
export default props => {
  const [nums,setNums] = React.useState(30)

  const handleScroll = (e) => {
    if (nums < props.groupMsgs.length && (e.target.clientHeight + e.target.scrollTop + 1 > e.target.scrollHeight)) {
      setTimeout(()=>{
        setNums(nums + 30)
      },1000)
    }
  }

  return (
    <div id="groupList" style={{width:"100%",height:"100%",position:"relative",overflowY:"scroll",border:"0px"}} onScroll={e=>handleScroll(e)}>
      <table style={{width:"100%", backgroundColor:"white"}}>
        <tbody>
          {!!props.groupMsgs && props.groupMsgs.map((item,index) => {
            if(index > nums) return null
            return (
              <GroupItem key={item.roomtype+item.toid} index={index} item={item} showChatDiv={props.showChatDiv} deleteMsg={props.deleteMsg}/>
            );
          })}
        </tbody>
      </table>    
    </div>
  );
}