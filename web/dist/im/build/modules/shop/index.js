!function(t,e){if("object"==typeof exports&&"object"==typeof module)module.exports=e();else if("function"==typeof define&&define.amd)define([],e);else{var n=e();for(var o in n)("object"==typeof exports?exports:t)[o]=n[o]}}(window,function(){return function(t){var e={};function n(o){if(e[o])return e[o].exports;var r=e[o]={i:o,l:!1,exports:{}};return t[o].call(r.exports,r,r.exports,n),r.l=!0,r.exports}return n.m=t,n.c=e,n.d=function(t,e,o){n.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:o})},n.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},n.t=function(t,e){if(1&e&&(t=n(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var o=Object.create(null);if(n.r(o),Object.defineProperty(o,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var r in t)n.d(o,r,function(e){return t[e]}.bind(null,r));return o},n.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return n.d(e,"a",e),e},n.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},n.p="",n(n.s=0)}([function(t,e,n){t.exports=n(1)},function(t,e,n){"use strict";function o(t){return(o="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}function r(t,e){for(var n=0;n<e.length;n++){var o=e[n];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(t,o.key,o)}}function a(t,e){return!e||"object"!==o(e)&&"function"!=typeof e?function(t){if(void 0===t)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return t}(t):e}function i(t){return(i=Object.setPrototypeOf?Object.getPrototypeOf:function(t){return t.__proto__||Object.getPrototypeOf(t)})(t)}function c(t,e){return(c=Object.setPrototypeOf||function(t,e){return t.__proto__=e,t})(t,e)}n.r(e);var l=function(t){function e(){return function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,e),a(this,i(e).apply(this,arguments))}var n,o,l;return function(t,e){if("function"!=typeof e&&null!==e)throw new TypeError("Super expression must either be null or a function");t.prototype=Object.create(e&&e.prototype,{constructor:{value:t,writable:!0,configurable:!0}}),e&&c(t,e)}(e,React.Component),n=e,(o=[{key:"render",value:function(){var t=this.props.Item;return React.createElement("table",{style:{width:"100%"}},React.createElement("tbody",null,React.createElement("tr",{style:{borderBottom:"1px solid #eee"}},React.createElement("td",null,React.createElement("table",{style:{width:"100%",marginTop:"20px"}},React.createElement("tbody",null,React.createElement("tr",null,React.createElement("td",{style:{width:"5px"}}),React.createElement("td",null,React.createElement("div",{style:{textAlign:"center"}},React.createElement(Img,{name:t.type,src:thumbUrl+"/topproductphotos/"+t.avatar+".jpg",style:{width:.95*this.props.phoneWidth}}),React.createElement("div",{style:{marginTop:"-40px",backgroundColor:"black",color:"white",lineHeight:"40px",height:"40px",opacity:"0.6"}},React.createElement("span",{onTouchEnd:touchEnd.bind(this,"#/stores/detail/"+t.ownerid)},t.shopname))),React.createElement("table",{style:{width:"100%",height:"30px"}},React.createElement("tbody",null,React.createElement("tr",null,React.createElement("td",null,React.createElement("span",{onTouchEnd:this.props.togglePic.bind(this,t),style:{color:"saddlebrown",fontSize:"14px"}},t.name)),React.createElement("td",{style:{color:"green",fontSize:"12px",width:"60px",textAlign:"center"}},parseFloat(t.price).toFixed(2),"元"))))),React.createElement("td",{style:{width:"5px"}}))))))))}}])&&r(n.prototype,o),l&&r(n,l),e}();function s(t){return(s="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}function u(t,e){for(var n=0;n<e.length;n++){var o=e[n];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(t,o.key,o)}}function p(t){return(p=Object.setPrototypeOf?Object.getPrototypeOf:function(t){return t.__proto__||Object.getPrototypeOf(t)})(t)}function f(t){if(void 0===t)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return t}function d(t,e){return(d=Object.setPrototypeOf||function(t,e){return t.__proto__=e,t})(t,e)}function h(t,e,n){return e in t?Object.defineProperty(t,e,{value:n,enumerable:!0,configurable:!0,writable:!0}):t[e]=n,t}var y={List:function(t){function e(t){var n,o,r;return function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,e),o=this,r=p(e).call(this,t),n=!r||"object"!==s(r)&&"function"!=typeof r?f(o):r,h(f(n),"loadData",function(t,e){var o;if(!n.state.lastPage){"up"==e?!0:n.state.p>=1&&!0;var r="";n.state.username&&(r=/^\d*$/.test(n.state.username)?"userid="+n.state.username+"&":"username="+n.state.username+"&"),o=Config.api+"product/getallproducts?"+r+"p="+n.state.p+"&limit="+n.state.limit,fetchApi({url:o},function(t){if(!isJson(t))return errMessage("","服务器文件错误！"),!1;var e;(t.products&&t.products.length||(this.state.p>0?this.setState({lastPage:!0}):this.setState({lastPage:!1})),200==t.status)?(e=this.state.p>0?this.state.products.concat(t.products):t.products,this.setState({p:this.state.p+1,products:e}),this.state.products.length<1?this.setState({noDataShow:1}):this.setState({noDataShow:0})):errMessage(t)}.bind(f(n)))}}),h(f(n),"togglePic",function(t){n.setState({product:t,picShow:"none"==n.state.picShow?"table":"none"})}),h(f(n),"handleScroll",function(t){var e=n.refs.childBlock,o=n.refs.parentBlock;wait(500).done(function(){if(scroll2Bottom(e,o)){if(0==this.state.p&&this.setState({p:1}),this.state.lastPage)return!1;this.loadData()}}.bind(f(n)))}),n.state={p:0,limit:10,noDataShow:0,totalPrice:0,picShow:"none",productListShow:!1,introShow:"none",introIndex:0,product:{}},n}var n,o,r;return function(t,e){if("function"!=typeof e&&null!==e)throw new TypeError("Super expression must either be null or a function");t.prototype=Object.create(e&&e.prototype,{constructor:{value:t,writable:!0,configurable:!0}}),e&&d(t,e)}(e,React.Component),n=e,(o=[{key:"componentDidMount",value:function(){this.loadData();var t=parseInt(window.screen.width),e=parseInt(window.screen.height);this.setState({phoneWidth:t,phoneHeight:e})}},{key:"render",value:function(){if(setTitle("产品展示"),this.state||this.state.products){var t=this.state.products?this.state.products.map(function(t,e){return React.createElement(l,{key:e,index:e,phoneWidth:this.state.phoneWidth,Item:t,id:t.product_type,togglePic:this.togglePic})}.bind(this)):null;return React.createElement("div",{style:{width:"100%",height:"100%"},onScroll:this.handleScroll},React.createElement("table",{style:{width:"100%",height:"100%"}},React.createElement("tbody",null,React.createElement("tr",null,React.createElement("td",{style:{height:"40px"}},React.createElement(Productsnav,null))),React.createElement("tr",null,React.createElement("td",null,React.createElement("div",{ref:"parentBlock",style:{width:"100%",height:"100%",overflowY:"auto"}},React.createElement("div",{ref:"childBlock"},t)))),React.createElement("tr",{style:{height:"30px"}},React.createElement("td",null,React.createElement(Mainbottom,null))))),React.createElement("table",{style:{display:this.state.picShow,position:"absolute",zIndex:"1000000000",top:"0px",left:"0px",width:"100%",height:this.state.phoneHeight,backgroundColor:"black"}},React.createElement("tbody",null,React.createElement("tr",{style:{height:"45px",lineHeight:"45px"}},React.createElement("td",{style:{width:"40px"}}),React.createElement("td",null,React.createElement("div",{style:{width:"100%",textAlign:"center",color:"yellow",fontWeight:"bold",fontSize:"18px"}},this.state.product.name||"")),React.createElement("td",{style:{width:"40px"}},React.createElement("div",{onTouchEnd:this.togglePic,style:{top:"10px",right:"10px",width:"30px",height:"30px",textAlign:"center",lineHeight:"30px",borderRadius:"15px",backgroundColor:"white",opacity:"0.5",color:"#666"}},"X"))),React.createElement("tr",null,React.createElement("td",{colSpan:"3"},React.createElement("div",{style:{width:"100%",height:"99%",overflowY:"auto",textAlign:"center"}},React.createElement("img",{id:"imagefile",src:photoUrl+"/topproductphotos/"+this.state.product.avatar+".jpg",style:{width:.95*this.state.phoneWidth}}),React.createElement("div",{style:{textAlign:"left",color:"white",padding:"10px"}},this.state.product.intro||"")))))))}}}])&&u(n.prototype,o),r&&u(n,r),e}()};e.default=y}])});