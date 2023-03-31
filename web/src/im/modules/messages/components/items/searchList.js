import GroupItem from "./groupItem";
export default props => {
  console.log('searchlist')

  let groupListItems = !!props.groupMsgs && props.groupMsgs.map((item,index) => {
    return (
      <GroupItem key={item.roomtype+item.toid} index={index} item={item} showChatDiv={props.showChatDiv} deleteMsg={props.deleteMsg}/>
    );
  })

  return (
    <table style={{width:"100%", backgroundColor:"white"}}>
        <tbody>
          {groupListItems}
        </tbody>
      </table> 
  );
}