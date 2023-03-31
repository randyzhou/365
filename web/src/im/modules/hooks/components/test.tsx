import * as React from 'react';

const { useEffect } = React;

function Child() {
  useEffect(() => {
    console.log('child e');
  }, []);
  console.log('child');

  return <div>child</div>;
}

const Foo = ({children}) => {
  useEffect(() => {
    console.log("foo e");
  }, []);
  console.log("foo");
  return <div>{children}</div>;
};

export default () => {
  useEffect(()=>{
    console.log("life e");
  },[]);
  console.log("left");
  return; 
    <div>
      <Foo><Child/></Foo>
    </div>;
};