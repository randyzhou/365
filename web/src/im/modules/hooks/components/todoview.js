const { observable, computed, autorun, action, configure, values } = mobx
const { observer, useObserver, useLocalStore, Provider } = mobxReact
const { types, onSnapshot, getSnapshot } = mobxStateTree

const TodoView = ({todo}) => {
  return (
    <li>
        <input
            style={{appearance:"auto"}}
            type="checkbox"
            checked={todo.finished}
            onChange={e=>todo.finished = true}
        />{todo.title}
    </li>
  )
}

export default () => <TodoView />