const { observer } = mobxReactLite
const { types } = mobxStateTree

const Todo = types.model({
  title: '',
  name: '',
  show: 1
})
.actions((self)=>{
  function toggle (name){
    self.show = self.show == 1?2:1
  }
  function setName (name) {
    self.name = name
  }
  return { toggle, setName }
})

const store = Todo.create({
  title: 'zzzzz'
})


const UserView = observer((props) => {
  console.log('userview')
  console.log(props.user)

  console.log(store.name)
  return (
    <div>
        <div onClick={e=>props.user.changeName('assssss')}>{props.user.name}</div>
        <div onClick={props.store.toggle}>{props.store.title}</div>
        <div>{props.store.show}</div>
        <div onClick={e => store.setName(props.user.name)}>{store.name}</div>
    </div>
  )
})

export default (props)=>{
  return <UserView user={props.user} store={store} />
}