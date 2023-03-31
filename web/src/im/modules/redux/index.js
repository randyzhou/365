const createStore = Redux.createStore
const Provider = ReactRedux.Provider

import todoReducers from './reducers/Index'
import App from './containers/App'

let store = createStore(todoReducers)

const List=()=><Provider store={store}><App /></Provider>

const Index={List}
export default Index;