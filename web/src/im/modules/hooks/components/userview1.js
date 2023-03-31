const { observer } = mobxReactLite
const { types } = mobxStateTree

const Todo = types.model({
  title: '',
  show: 1
})
.actions((self)=>{
  function toggle (name){
    self.show = self.show == 1?2:1
  }
  return { toggle }
})

const store = Todo.create({
  title: 'zzzzz'
})

export default observer(({ user }) => {
  console.log('userview1')
  console.log(user)
  return (
    <div>
        <div onClick={e=>user.changeName('assssss')}>{user.name}</div>
        <div onClick={e=>user.changeSex('女')}>{user.sex}</div>
        <div onClick={store.toggle}>{store.title}</div>
        <div>{store.show}</div>
    </div>
  )
})