import UserView from "./userview"
import UserView1 from "./userview1"
const { types } = mobxStateTree


export default props => {

  const User = types.model({
    name: types.optional(types.string, ""),
    sex: '男'

  })
  .actions((self)=>{
    function changeName(name){
      self.name = name
    }
    function changeSex(sexname){
      self.sex = sexname
    }
    return { changeName, changeSex }
  })

  let user = User.create({
    name: 'zrj'
  })
  
  return(
    <div>
      <UserView user={user} />
      <UserView1 user={user} />
    </div>
  )
}
