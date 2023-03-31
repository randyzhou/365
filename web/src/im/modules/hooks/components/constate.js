import constate from "constate";
const { useState } = React;

function useCounter() {
  const [count, setCount] = useState(0);
  const increment = () => setCount(prevCount => prevCount + 1);
  return { count, increment };
}

const [CounterProvider, useCounterContext] = constate(useCounter);

function Button() {
  const { increment } = useCounterContext();
  return <button onClick={increment}>+</button>;
}

function Count() {
  const { count } = useCounterContext();
  return <span>{count}</span>;
}

export default function App() {
  return (
    <CounterProvider>
      <Count />
      <Button />
    </CounterProvider>
  );
}