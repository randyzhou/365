import * as React from "react";
//import { React } from 'react'

const {useCallback, useState, useLayoutEffect, useRef, useEffect} = React

function useBodyScrollPosition() {
  const [scrollPosition, setScrollPosition] = useState(null);

  useEffect(() => {
    const handleScroll = () => setScrollPosition(window.scrollY);
    document.addEventListener('scroll', handleScroll);
    return () =>
      document.removeEventListener('scroll', handleScroll);
  }, []);

  return scrollPosition;
}


export default () => {
  const [text, updateText] = useState('');
  const textRef = useRef();

  useLayoutEffect(() => {
    textRef.current = text; // 将 text 写入到 ref
  });

  const handleSubmit = useCallback(() => {
    const currentText = textRef.current; // 从 ref 中读取 text
    alert(currentText);
  }, [textRef]); // handleSubmit 只会依赖 textRef 的变化。不会在 text 改变时更新

  const handleSubmit12 = useCallback((props1) => {
    console.log(props1)
    alert(text)
  },[text])

  const handleSubmit1 = (props1) => {
    console.log(props1)
    alert(text)
  }

  console.log('aaa')
  return (
    <>
      <input value={text} onChange={e => updateText(e.target.value)} />
      <button onClick={e=>handleSubmit1()}>提交</button>
    </>
  );
}
