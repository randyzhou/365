const useState = React.useState;
const useEffect = React.useEffect;
const useRef = React.useRef;
const useCallback = React.useCallback;

import { isEqual } from 'lodash'

const useServiceCallback = service => {
  const [loading, setLoading] = useState(false)
  const [error, setError] = useState(null)
  const [response, setResponse] = useState(null)

  // 使用 useCallback，来判断 service 是否改变
  const callback = useCallback(
    params => {
      setLoading(true);
      setError(null);
      service(params)
        .then(response => {
          console.log(response)
          setLoading(false)
          setResponse(response)
        })
        .catch(error => {
          setLoading(false)
          setError(error)
        })
    },
    [service]
  )

  return [callback, { loading, error, response }]
}

const useService = (service, params) => {
  const prevParams = useRef(null)
  const [callback, { loading, error, response }] = useServiceCallback(service)

  useEffect(() => {
    if (!isEqual(prevParams.current, params)) {
      prevParams.current = params
      callback(params)
    }
  })

  return { loading, error, response }
}

const useTableData = (page) => {
  const [tableData, setTableData] = useState(2)

  useEffect(() => {
    setTableData(2+page)
  },[page])

  return tableData
}

const list=()=>{
  const [page, setPage] = useState(0)
  const tableData = useTableData(page)


  const incPage = (prev) => {setPage(prev => prev + 1)}
  const setTableData = () => {useTableData(3)}

  return (
    <div>
      <div>当前页数：{page}</div>
      <div>当前数据：{tableData}</div>
      <button onClick={incPage}>点我翻页</button>
      <button onClick={setTableData}>直接查看第三页</button>
    </div>
  )
}

class Toggle extends React.Component {
  state = {
      on:false,
  }

  toggle = () => {
      this.setState({
          on:!this.state.on
      })
  }
  render(){
    const { children } = this.props;
    return children({
        on:this.state.on,
        qq:this.toggle
    })
  }
}

export default class Main extends React.Component {
  render(){
    return(
      <div>
        <Toggle>
           { ({on,qq}) => (
                <div>123
                    {on && <h1>Zidea React</h1>}
                    <button onClick={qq}>显示/隐藏</button>
                </div>
            )}
        </Toggle>
      </div>
    );
  }  
}