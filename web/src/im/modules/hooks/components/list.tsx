/* eslint-disable react/jsx-filename-extension */
/* eslint-disable import/no-extraneous-dependencies */
import { isEqual } from 'lodash';
import axios from 'axios';
import React from 'react';

const {
  useState, useEffect, useRef, useCallback,
} = React;

const useServiceCallback = (service) => {
  const [loading, setLoading] = useState(false);
  const [error, setError] = useState(null);
  const [response, setResponse] = useState(null);

  // 使用 useCallback，来判断 service 是否改变
  const callback = useCallback(
    (params) => {
      setLoading(true);
      setError(null);
      service(params)
        .then((response) => {
          console.log(response);
          setLoading(false);
          setResponse(response);
        })
        .catch((error) => {
          setLoading(false);
          setError(error);
        });
    },
    [service],
  );

  return [callback, { loading, error, response }];
};

const useService = (service, params) => {
  const prevParams = useRef(null);
  const [callback, { loading, error, response }] = useServiceCallback(service);

  useEffect(() => {
    if (!isEqual(prevParams.current, params)) {
      prevParams.current = params;
      callback(params);
    }
  });

  return { loading, error, response };
};

const useTableData = (page) => {
  const [tableData, setTableData] = useState(2);

  useEffect(() => {
    setTableData(2 + page);
  }, [page]);

  return tableData;
};

const main = () => {
  const [page, setPage] = useState(0);
  const tableData = useTableData(page);

  console.log('list');

  const incPage = (prev) => setPage((prev) => prev + 1);
  const setTableData = () => useTableData(3);

  return (
    <div>
      <div>
        当前页数：
        {page}
      </div>
      <div>
        当前数据：
        {tableData}
      </div>
      <button onClick={incPage}>点我翻页</button>
      <button onClick={setTableData}>直接查看第三页</button>
    </div>
  );
};

const useData = (index) => {
  const [data, setData] = useState([]);

  useEffect((p) => {
    console.log(p);
    const url = './data.json';
    fetchApi({ url }, (res) => {
      let resData = res.data;
      if (!!index && index >= 0) {
        const data1 = resData[index];
        resData = [data1];
      }
      setData(resData);
    });
  }, [1]);
  return data;
};

const useData1 = (page) => {
  const [data, setData] = useState({ hits: [] });

  useEffect((p) => {
    console.log('aaaa');
    const fetchData = async () => {
      const result = await axios('./data.json');
      console.log(result.data.data);
      setData(result.data.data);
    };

    fetchData();

    return data;
  }, []);
};
function App() {
  const data = useData1();

  // console.log("aaa")
  // console.log(data)
  return (
    <ul>
      {data.hits.map((item) => (
        <li key={item.id}>
          <a href={item.url}>{item.title}</a>
        </li>
      ))}
    </ul>
  );
}

export default App;
