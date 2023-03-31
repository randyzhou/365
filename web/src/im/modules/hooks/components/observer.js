const { observer } = mobxReact

const AppView = observer(props => (
  <div> 
    {props.user.name}
  </div>
))

export default () => <AppView />