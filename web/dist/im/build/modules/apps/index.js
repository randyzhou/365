!function(e,t){if("object"==typeof exports&&"object"==typeof module)module.exports=t();else if("function"==typeof define&&define.amd)define([],t);else{var n=t();for(var o in n)("object"==typeof exports?exports:e)[o]=n[o]}}(window,function(){return function(e){var t={};function n(o){if(t[o])return t[o].exports;var r=t[o]={i:o,l:!1,exports:{}};return e[o].call(r.exports,r,r.exports,n),r.l=!0,r.exports}return n.m=e,n.c=t,n.d=function(e,t,o){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:o})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var o=Object.create(null);if(n.r(o),Object.defineProperty(o,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var r in e)n.d(o,r,function(t){return e[t]}.bind(null,r));return o},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="",n(n.s=0)}([function(e,t,n){e.exports=n(1)},function(e,t,n){"use strict";function o(e){return(o="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e})(e)}function r(e,t){for(var n=0;n<t.length;n++){var o=t[n];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(e,o.key,o)}}function i(e,t){return!t||"object"!==o(t)&&"function"!=typeof t?function(e){if(void 0===e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return e}(e):t}function a(e){return(a=Object.setPrototypeOf?Object.getPrototypeOf:function(e){return e.__proto__||Object.getPrototypeOf(e)})(e)}function l(e,t){return(l=Object.setPrototypeOf||function(e,t){return e.__proto__=t,e})(e,t)}n.r(t);var c=function(e){function t(){return function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,t),i(this,a(t).apply(this,arguments))}var n,o,c;return function(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function");e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,writable:!0,configurable:!0}}),t&&l(e,t)}(t,React.Component),n=t,(o=[{key:"toggleAppDivShow",value:function(e){this.props.toggleAppDivShow(e)}},{key:"render",value:function(){var e=this.props.item,t=this.props.Width+"px";return React.createElement("div",{style:{display:"inherit",float:"left",textAlign:"center",width:t,height:"100px"},onTouchStart:this.props.longTouchstart.bind(this,e),onTouchEnd:this.props.longTouchend,onTouchMove:this.props.longTouchmove},React.createElement(Img,{src:thumbUrl+"/topappphotos/"+e.webid+".jpg",style:{width:"50px",height:"50px",borderRadius:"15px"},onClick:this.toggleAppDivShow.bind(this,e.weburl)}),React.createElement("br",null),React.createElement("div",{style:{width:"57px",margin:"auto",textAlign:"center",overflow:"hidden",whiteSpace:"nowrap",color:"white",fontSize:"14px"}},e.webname))}}])&&r(n.prototype,o),c&&r(n,c),t}();function s(e){return(s="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e})(e)}function h(e,t){for(var n=0;n<t.length;n++){var o=t[n];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(e,o.key,o)}}function p(e,t){return!t||"object"!==s(t)&&"function"!=typeof t?function(e){if(void 0===e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return e}(e):t}function u(e){return(u=Object.setPrototypeOf?Object.getPrototypeOf:function(e){return e.__proto__||Object.getPrototypeOf(e)})(e)}function d(e,t){return(d=Object.setPrototypeOf||function(e,t){return e.__proto__=t,e})(e,t)}var f=function(e){function t(){return function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,t),p(this,u(t).apply(this,arguments))}var n,o,r;return function(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function");e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,writable:!0,configurable:!0}}),t&&d(e,t)}(t,React.Component),n=t,(o=[{key:"toggleAppDivShow",value:function(e){this.props.toggleAppDivShow(e)}},{key:"render",value:function(){var e=this.props.item,t=this.props.Width+"px";return React.createElement("div",{style:{display:"inherit",float:"left",textAlign:"center",width:t,height:"100px"},onTouchStart:this.props.longTouchstart.bind(this,e),onTouchEnd:this.props.longTouchend,onTouchMove:this.props.longTouchmove},React.createElement(Img,{src:thumbUrl+"/topappphotos/"+e.id+".jpg",style:{width:"50px",height:"50px",borderRadius:"15px"},onClick:this.toggleAppDivShow.bind(this,e.weburl)}),React.createElement("br",null),React.createElement("div",{style:{width:"57px",margin:"auto",textAlign:"center",overflow:"hidden",whiteSpace:"nowrap",color:"white",fontSize:"14px"}},e.webname))}}])&&h(n.prototype,o),r&&h(n,r),t}();function b(e){return(b="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e})(e)}function m(e,t){for(var n=0;n<t.length;n++){var o=t[n];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(e,o.key,o)}}function y(e,t){return!t||"object"!==b(t)&&"function"!=typeof t?function(e){if(void 0===e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return e}(e):t}function w(e){return(w=Object.setPrototypeOf?Object.getPrototypeOf:function(e){return e.__proto__||Object.getPrototypeOf(e)})(e)}function g(e,t){return(g=Object.setPrototypeOf||function(e,t){return e.__proto__=t,e})(e,t)}var x=function(e){function t(){return function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,t),y(this,w(t).apply(this,arguments))}var n,o,r;return function(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function");e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,writable:!0,configurable:!0}}),t&&g(e,t)}(t,React.Component),n=t,(o=[{key:"toggleAppDivShow",value:function(e){this.props.toggleAppDivShow(e)}},{key:"render",value:function(){var e=this.props.item;return React.createElement("td",{style:{textAlign:"center",width:"100px",height:"50px",lineHeight:"50px"},onTouchStart:this.props.longTouchstart.bind(this,e),onTouchEnd:this.props.longTouchend,onTouchMove:this.props.longTouchmove},React.createElement(Img,{src:thumbUrl+"/topappphotos/"+e.webid+".jpg",style:{marginRight:"20px",width:"50px",height:"50px",borderRadius:"15px"},onClick:this.toggleAppDivShow.bind(this,e.weburl)}))}}])&&m(n.prototype,o),r&&m(n,r),t}();function v(e){return(v="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e})(e)}function E(e,t){for(var n=0;n<t.length;n++){var o=t[n];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(e,o.key,o)}}function R(e){return(R=Object.setPrototypeOf?Object.getPrototypeOf:function(e){return e.__proto__||Object.getPrototypeOf(e)})(e)}function S(e){if(void 0===e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return e}function A(e,t){return(A=Object.setPrototypeOf||function(e,t){return e.__proto__=t,e})(e,t)}function T(e,t,n){return t in e?Object.defineProperty(e,t,{value:n,enumerable:!0,configurable:!0,writable:!0}):e[t]=n,e}var k=function(e){function t(e){var n,o,r;!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,t),o=this,r=R(t).call(this,e),n=!r||"object"!==v(r)&&"function"!=typeof r?S(o):r,T(S(n),"loadData",function(){var e="";n.state.keywords&&(e="?keywords="+n.state.keywords);var t=Config.api+"app/list"+e;fetchApi({url:t},function(e){if(!isJson(e))return errMessage("","服务器文件错误！"),!1;var t=parseInt(window.screen.width)-20,n=t/4;this.setState({apps:e.apps,myapps:e.myapps,width:n,phoneWidth:t})}.bind(S(n)))}),T(S(n),"handleSearch",function(e){var t=S(n);e?t.setState({keywords:e},function(){t.loadData()}):t.loadData()}),T(S(n),"handleSearchChange",function(e){var t=e.target.value,o=S(n);n.setState({keywords:t},function(){wait(1e3).done(function(){o.handleSearch()})})}),T(S(n),"addApp",function(){var e=n.state.web.id,t=Config.api+"app/addmyapp?webid="+e;fetchApi({url:t},function(e){if(!isJson(e))return errMessage("","服务器文件错误！"),!1;resultAlert(e),this.setState({webdivShow:"none"}),this.loadData()}.bind(S(n)))}),T(S(n),"deleteApp",function(){var e=n.state.web.webid,t=Config.api+"app/deletemyapp?webid="+e;fetchApi({url:t},function(e){if(!isJson(e))return errMessage("","服务器文件错误！"),!1;resultAlert(e),this.setState({webdivShow:"none"}),this.loadData()}.bind(S(n)))}),T(S(n),"longTouchstart",function(e){var t=function(e){timeOutEvent=0,this.touchShow(e)}.bind(S(n));return timeOutEvent=setTimeout(t,800,e),!1}),T(S(n),"longTouchend",function(){return clearTimeout(timeOutEvent),timeOutEvent=0,!1}),T(S(n),"longTouchmove",function(){return clearTimeout(timeOutEvent),!1}),T(S(n),"touchShow",function(e){n.setState({webdivShow:"table",web:e})}),T(S(n),"webdivHide",function(){n.setState({webdivShow:"none"})}),T(S(n),"toggleAppDivShow",function(e){var t="block"==n.state.appdivshow?"none":"block";e="block"==t?e:"";n.setState({weburl:e,appdivshow:t})}),T(S(n),"handleScroll",function(){var e=$("#applistTop").offset().top;e>0&&n.setState({searchShow:"block"}),e<0&&n.setState({searchShow:"none"})}),T(S(n),"toggleSearchShow",function(){var e="block"==n.state.searchShow?"none":"block";n.setState({searchShow:e})}),T(S(n),"showAll",function(){var e=S(n);e.setState({keywords:""},function(){e.loadData()})});var i=parseInt(window.screen.width)>450?450:parseInt(window.screen.width);return n.state={apps:[],myapps:[],webid:null,searchShow:"none",appdivshow:"none",webdivShow:"none",web:{},phoneWidth:i},n}var n,o,r;return function(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function");e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,writable:!0,configurable:!0}}),t&&A(e,t)}(t,React.Component),n=t,(o=[{key:"componentWillReceiveProps",value:function(e){var t=e.appdivshow,n=e.weburl;this.setState({appdivshow:t,weburl:n})}},{key:"componentDidMount",value:function(){this.loadData()}},{key:"render",value:function(){if(setTitle("365程序"),!this.state.apps)return!1;var e=this.state.phoneWidth-100+"px",t=this.state.myapps?this.state.myapps.map(function(e,t){return React.createElement(c,{key:e.id,Type:"myapp",item:e,Width:this.state.width,touchShow:this.touchShow,longTouchstart:this.longTouchstart,longTouchend:this.longTouchend,longTouchmove:this.longTouchmove,toggleAppDivShow:this.toggleAppDivShow})}.bind(this)):null;this.state.keywords&&(t="");var n=this.state.apps?this.state.apps.map(function(e,t){return React.createElement(f,{key:e.id,Type:"app",item:e,Width:this.state.width,touchShow:this.touchShow,longTouchstart:this.longTouchstart,longTouchend:this.longTouchend,longTouchmove:this.longTouchmove,toggleAppDivShow:this.toggleAppDivShow})}.bind(this)):null,o=this.state.myapps?this.state.myapps.map(function(e,t){return!(t>3)&&React.createElement(x,{key:e.id,item:e,Width:this.state.width,touchShow:this.touchShow,longTouchstart:this.longTouchstart,longTouchend:this.longTouchend,longTouchmove:this.longTouchmove,toggleAppDivShow:this.toggleAppDivShow})}.bind(this)):null;return React.createElement("div",{ref:"main",style:{textAlign:"center",width:"100%",height:"100%",backgroundImage:"url("+webUrl+"/image/appbg/bg.jpeg)",backgroundRepeat:"no-repeat",backgroundSize:"100% 100%"}},React.createElement("table",{style:{width:"100%",height:"100%",border:"0px"}},React.createElement("tbody",null,React.createElement("tr",{style:{height:"30px"}},React.createElement("td",{style:{textAlign:"center"}},React.createElement("table",{style:{width:"100%",height:"40px"}},React.createElement("tbody",null,React.createElement("tr",null,React.createElement("td",{style:{width:"60px",color:"white",textAlign:"center",fontSize:"20px"}},React.createElement("span",{onTouchEnd:this.showAll},"所有")),React.createElement("td",{style:{textAlign:"center"}},React.createElement("div",{style:{margin:"auto",fontSize:"20px",whiteSpace:"nowrap",color:"white"}},React.createElement("div",{style:{display:"block"==this.state.searchShow?"none":"block"}},React.createElement("input",{type:"search",style:{width:"100%",height:"30px",borderRadius:"5px"},placeholder:"搜索关键词",value:this.state.keywords,onChange:this.handleSearchChange})),React.createElement("div",{id:"appsearchdiv",style:{display:this.state.searchShow,margin:"auto",width:.7*this.state.phoneWidth+"px",fontSize:"20px",overflowX:"auto",whiteSpace:"nowrap",color:"white"}},React.createElement("span",{onTouchEnd:this.handleSearch.bind(this,"新闻")},"新闻"),React.createElement("span",{onTouchEnd:this.handleSearch.bind(this,"生活")},"生活"),React.createElement("span",{onTouchEnd:this.handleSearch.bind(this,"购物")},"购物"),React.createElement("span",{onTouchEnd:this.handleSearch.bind(this,"社交")},"社交"),React.createElement("span",{onTouchEnd:this.handleSearch.bind(this,"游戏")},"游戏"),React.createElement("span",{onTouchEnd:this.handleSearch.bind(this,"娱乐")},"娱乐"),React.createElement("span",{onTouchEnd:this.handleSearch.bind(this,"直播")},"直播"),React.createElement("span",{onTouchEnd:this.handleSearch.bind(this,"视频")},"视频"),React.createElement("span",{onTouchEnd:this.handleSearch.bind(this,"区块链")},"区块链")))),React.createElement("td",{style:{width:"60px",color:"white",fontSize:"20px",textAlign:"center"}},React.createElement("span",{onTouchEnd:this.toggleSearchShow},"block"==this.state.searchShow?"搜索":"分类"))))))),React.createElement("tr",null,React.createElement("td",null,React.createElement("div",{style:{overflowY:"auto",marginLeft:"10px",textAlign:"center",border:"0px",height:"100%"}},React.createElement("div",{style:{width:"100%",height:"10px"},id:"applistTop"}),t,n))),React.createElement("tr",{style:{height:"30px"}},React.createElement("td",{style:{textAlign:"center",verticalAlign:"top",color:"#ccc"}},".....")),React.createElement("tr",{style:{height:"65px"}},React.createElement("td",{style:{verticalAlign:"top"}},React.createElement("table",{style:{bottom:"0px",width:"100%",height:"50px",borderTop:"0px solid #ccc"}},React.createElement("tbody",null,React.createElement("tr",null,React.createElement("td",{style:{width:"1px"}}),React.createElement("td",{style:{textAlign:"center"}},React.createElement("table",{style:{width:"100%"}},React.createElement("tbody",null,React.createElement("tr",null,React.createElement("td",{style:{textAlign:"center",width:"100px",height:"50px"},onTouchEnd:touchEnd.bind(this,"#/messages")},React.createElement("div",{style:{width:"100px",height:"50px"}},React.createElement("table",{style:{width:"100%",height:"50px"}},React.createElement("tbody",null,React.createElement("tr",null,React.createElement("td",{style:{textAlign:"center",height:"50px",lineHeight:"50px"}},React.createElement("img",{src:webUrl+"/image/logo.jpeg",style:{marginTop:"-2px",width:"50px",height:"50px",borderRadius:"15px"}}))))))),React.createElement("td",{style:{textAlign:"left",height:"50px"}},React.createElement("div",{style:{width:e,height:"50px",overflowX:"auto"}},React.createElement("table",{style:{width:"100%",height:"50px"}},React.createElement("tbody",null,React.createElement("tr",null,o))))))))),React.createElement("td",{style:{width:"10px"}})))))))),React.createElement("table",{style:{zIndex:"1000",top:"0px",left:"0px",position:"fixed",margin:"auto 0",width:"100%",height:"100%",display:this.state.webdivShow}},React.createElement("tbody",null,React.createElement("tr",null,React.createElement("td",{style:{textAlign:"center",verticalAlign:"middle"}},React.createElement("div",{style:{borderRadius:"5px",margin:"auto",backgroundColor:"lightcyan",fontSize:"16px",width:"200px",height:"100px",textAlign:"center"}},React.createElement("table",{style:{width:"100%",height:"100px"}},React.createElement("tbody",null,React.createElement("tr",null,React.createElement("td",{style:{position:"relative",textAlign:"center",verticalAlign:"middle"}},React.createElement("span",{onTouchEnd:this.webdivHide,style:{width:"30px",height:"30px",lineHeight:"30px",borderRadius:"15px",position:"absolute",top:"0px",right:"0px",color:"#333",fontSize:"14px",textAlign:"center"}},"X"),React.createElement("div",{style:{height:"50px",lineHeight:"50px"}},this.state.web.webname),React.createElement("div",{style:{lineHeight:"32px",width:"100%",height:"32px",borderRadius:"3px",textAlign:"center",backgroundColor:"brown",color:"white"}},React.createElement("span",{onTouchEnd:this.addApp,style:{display:this.state.web.userid?"none":"block"}},"安装"),React.createElement("span",{onTouchEnd:this.deleteApp,style:{display:this.state.web.userid?"block":"none"}},"卸载"))))))))))),React.createElement("div",{style:{zIndex:"10000",position:"fixed",width:"40px",height:"40px",top:"200px",right:"-20px",borderRadius:"20px",backgroundColor:"chocolate",display:this.state.appdivshow}},React.createElement("iframe",{style:{width:"40px",height:"40px",border:"0px",padding:"0px"},src:"./close.html"})),React.createElement("div",{style:{zIndex:"10000",position:"fixed",width:"40px",height:"40px",top:"300px",right:"-20px",borderRadius:"20px",backgroundColor:"chocolate",display:this.state.appdivshow}},React.createElement("iframe",{style:{width:"40px",height:"40px",border:"0px",padding:"0px"},src:"./back.html"})),React.createElement("div",{style:{zIndex:"9990",position:"fixed",top:"0px",left:"0px",backgroundColor:"white",width:"100%",height:"100%",display:this.state.appdivshow}},React.createElement("iframe",{id:"iframeweb",sandbox:"allow-forms allow-scripts allow-same-origin",style:{width:"100%",height:"100%",border:"0px solid white"},src:this.state.weburl})))}}])&&E(n.prototype,o),r&&E(n,r),t}();function O(e){return(O="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e})(e)}function j(e,t){for(var n=0;n<t.length;n++){var o=t[n];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(e,o.key,o)}}function _(e,t){return!t||"object"!==O(t)&&"function"!=typeof t?function(e){if(void 0===e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return e}(e):t}function C(e){return(C=Object.setPrototypeOf?Object.getPrototypeOf:function(e){return e.__proto__||Object.getPrototypeOf(e)})(e)}function D(e,t){return(D=Object.setPrototypeOf||function(e,t){return e.__proto__=t,e})(e,t)}var P=function(e){function t(){return function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,t),_(this,C(t).apply(this,arguments))}var n,o,r;return function(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function");e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,writable:!0,configurable:!0}}),t&&D(e,t)}(t,React.Component),n=t,(o=[{key:"toggleAppDivShow",value:function(e){this.props.toggleAppDivShow(e)}},{key:"manageDivShow",value:function(e){this.props.manageDivShow(e)}},{key:"render",value:function(){var e=this.props.item;return React.createElement("tr",null,React.createElement("td",null,React.createElement("table",{style:{textAlign:"center",width:"100%",height:"100px",marginBottom:"10px"}},React.createElement("tbody",null,React.createElement("tr",null,React.createElement("td",{style:{width:"65px"}},React.createElement(Img,{src:thumbUrl+"/topappphotos/"+e.id+".jpg",style:{width:"60px",height:"60px",borderRadius:"15px"},onTouchEnd:this.toggleAppDivShow.bind(this,e.weburl)})),React.createElement("td",{style:{textAlign:"left"}},e.webname," [",e.hits,"] [",e.bids,"] [",e.certified,"]级 ",React.createElement("span",{style:{float:"right",marginRight:"5px"},onTouchEnd:this.manageDivShow.bind(this,e)},"[管理]"),React.createElement("br",null),e.regtime," [",e.username,"]",React.createElement("br",null),e.webintro,React.createElement("br",null),e.keywords,React.createElement("br",null),React.createElement("a",{href:e.weburl,target:"_blank"},e.weburl),React.createElement("br",null)))))))}}])&&j(n.prototype,o),r&&j(n,r),t}();function z(e){return(z="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e})(e)}function M(e,t){for(var n=0;n<t.length;n++){var o=t[n];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(e,o.key,o)}}function I(e){return(I=Object.setPrototypeOf?Object.getPrototypeOf:function(e){return e.__proto__||Object.getPrototypeOf(e)})(e)}function H(e){if(void 0===e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return e}function U(e,t){return(U=Object.setPrototypeOf||function(e,t){return e.__proto__=t,e})(e,t)}function W(e,t,n){return t in e?Object.defineProperty(e,t,{value:n,enumerable:!0,configurable:!0,writable:!0}):e[t]=n,e}var J={List:k,Adminlist:function(e){function t(e){var n,o,r;return function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,t),o=this,r=I(t).call(this,e),n=!r||"object"!==z(r)&&"function"!=typeof r?H(o):r,W(H(n),"loadData",function(){var e=Config.api+"app/listadmin";fetchApi({url:e},function(e){if(!isJson(e))return errMessage("","服务器文件错误！"),!1;this.setState({apps:e.apps,myapps:e.myapps})}.bind(H(n)))}),W(H(n),"addApp",function(){var e=n.state.web,t=Config.api+"app/create";fetchApi({url:t,method:"POST",body:{web:{webname:e.webname,webintro:e.webintro,keywords:e.keywords,certified:e.certified,weburl:e.weburl,avatar:e.avatar}}},function(e){if(!isJson(e))return errMessage("","服务器文件错误！"),!1;resultAlert(e),1==e.result&&(this.setState({webdivShow:"none"}),this.loadData())}.bind(H(n)))}),W(H(n),"updateApp",function(){var e=n.state.web,t=Config.api+"app/update";fetchApi({url:t,method:"POST",body:{web:{id:e.id,webname:e.webname,webintro:e.webintro,keywords:e.keywords,certified:e.certified,weburl:e.weburl}}},function(e){if(!isJson(e))return errMessage("","服务器文件错误！"),!1;resultAlert(e),1==e.result&&this.setState({webdivShow:"none"},function(){this.loadData()})}.bind(H(n)))}),W(H(n),"deleteApp",function(e){var t=e,o=Config.api+"app/delete?webid="+t;fetchApi({url:o},function(e){if(!isJson(e))return errMessage("","服务器文件错误！"),!1;resultAlert(e),1==e.result&&(this.setState({webdivShow:"none"}),this.loadData())}.bind(H(n)))}),W(H(n),"manageDivShow",function(e){n.setState({webdivShow:"table",web:e})}),W(H(n),"manageDivHide",function(){n.setState({webdivShow:"none",web:{}})}),W(H(n),"toggleAppDivShow",function(e){var t="block"==n.state.appdivshow?"none":"block";e="block"==t?e:"";n.setState({weburl:e,appdivshow:t})}),W(H(n),"handleChange",function(e,t){var o="";o=t?t.target.value:n.refs[e].value;var r=n.state.web;r[e]=o,n.setState({web:r})}),W(H(n),"handleSearchChange",function(e){var t=e.target.value;n.setState({searchValue:t})}),W(H(n),"searchShow",function(){var e="table-row"==n.state.searchShow?"none":"table-row";n.setState({searchShow:e})}),W(H(n),"handleUploadChange",function(e){var t=Math.random();n.setState({rd:t})}),W(H(n),"updateSubmit",function(){console.log("logo上传成功")}),n.state={apps:[],myapps:[],webid:null,searchShow:"none",searchValue:null,appdivshow:"none",webdivShow:"none",web:{},phoneWidth:370},n}var n,o,r;return function(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function");e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,writable:!0,configurable:!0}}),t&&U(e,t)}(t,React.Component),n=t,(o=[{key:"componentDidMount",value:function(){this.loadData()}},{key:"render",value:function(){if(setTitle("365程序"),!this.state.apps)return!1;var e=this.state.apps?this.state.apps.map(function(e,t){return React.createElement(P,{key:e.id,item:e,manageDivShow:this.manageDivShow,toggleAppDivShow:this.toggleAppDivShow})}.bind(this)):null;return React.createElement("div",{ref:"main",style:{textAlign:"center",backgroundColor:"#f2f2f2",width:"100%",height:"100%"}},React.createElement("table",{style:{width:"100%",height:"100%",border:"0px"}},React.createElement("tbody",null,React.createElement("tr",null,React.createElement("td",{style:{height:"40px"}},React.createElement("table",{style:{width:"100%",height:"40px"}},React.createElement("tbody",null,React.createElement("tr",null,React.createElement("td",{style:{width:"50px",textAlign:"center"}},React.createElement(Button,{type:"primary",style:{fontSize:"14px",height:"30px",lineHeight:"30px"},onTouchEnd:this.manageDivShow.bind(this,{})},"添加")),React.createElement("td",{style:{textAlign:"center"}},React.createElement("div",{style:{margin:"auto",width:"210px",fontSize:"20px",overflowX:"auto",whiteSpace:"nowrap"}},"新闻 生活 购物 社交 游戏 娱乐 直播 视频 区块链")),React.createElement("td",{style:{width:"50px",fontSize:"20px",textAlign:"center"}},React.createElement(Button,{type:"primary",style:{fontSize:"14px",height:"30px",lineHeight:"30px"},onTouchEnd:this.searchShow},"搜索"))))))),React.createElement("tr",{style:{display:this.state.searchShow,height:"30px"}},React.createElement("td",{style:{textAlign:"center"}},React.createElement("input",{type:"search",style:{width:"98%",height:"30px"},value:this.state.searchValue||"",onChange:this.handleSearchChange.bind(this)}))),React.createElement("tr",null,React.createElement("td",null,React.createElement("div",{style:{overflowY:"auto",marginLeft:"10px",textAlign:"center",border:"0px",height:"100%"}},React.createElement("table",{style:{width:"100%"}},React.createElement("tbody",null,e))))))),React.createElement("table",{style:{zIndex:"100000",backgroundColor:"azure",bottom:"0px",left:"0px",position:"fixed",margin:"auto 0",width:"100%",display:this.state.webdivShow}},React.createElement("tbody",null,React.createElement("tr",null,React.createElement("td",{style:{textAlign:"center",verticalAlign:"middle"}},React.createElement("table",{style:{width:"100%",height:"100px"}},React.createElement("tbody",null,React.createElement("tr",null,React.createElement("td",{style:{width:"10px"}}),React.createElement("td",{style:{position:"relative",textAlign:"center",verticalAlign:"middle"}},React.createElement("table",{style:{width:"100%"}},React.createElement("tbody",null,React.createElement("tr",{style:{display:this.state.web.id?"table-row":"none"}},React.createElement("td",{style:{width:"50px",height:"50px"}},"LOGO："),React.createElement("td",{style:{textAlign:"left"}},React.createElement("table",null,React.createElement("tbody",null,React.createElement("tr",null,React.createElement("td",{style:{width:"100px"}},React.createElement("img",{id:"userImg",src:thumbUrl+"/topappphotos/"+this.state.web.id+".jpg?rd="+this.state.rd,style:{width:"60px",height:"60px",borderRadius:"15px"}})),React.createElement("td",{style:{textAlign:"right"}},React.createElement(Upload,{style:{color:"darkgreen"},title:"更换",uploadurl:photoApi+"/topapp/uploadpic?id="+this.state.web.id,handleUploadChange:this.handleUploadChange,updateSubmit:this.updateSubmit}))))))),React.createElement("tr",null,React.createElement("td",{style:{width:"50px",height:"50px"}},"名称："),React.createElement("td",{style:{textAlign:"left"}},React.createElement("input",{max:"4",style:{width:"95%",border:"1px #ccc solid"},value:this.state.web.webname||"",onChange:this.handleChange.bind(this,"webname")}))),React.createElement("tr",null,React.createElement("td",{style:{width:"50px",verticalAlign:"top"}},"简介："),React.createElement("td",{style:{textAlign:"left"}},React.createElement("textarea",{max:"100",style:{width:"95%",height:"100px",border:"1px #ccc solid"},value:this.state.web.webintro,onChange:this.handleChange.bind(this,"webintro")}))),React.createElement("tr",null,React.createElement("td",{style:{width:"50px",height:"50px"}},"网址："),React.createElement("td",{style:{textAlign:"left"}},React.createElement("input",{style:{width:"95%",border:"1px #ccc solid"},value:this.state.web.weburl||"",onChange:this.handleChange.bind(this,"weburl")}))),React.createElement("tr",null,React.createElement("td",{style:{width:"50px",height:"50px"}},"标签："),React.createElement("td",{style:{textAlign:"left"}},React.createElement("input",{style:{width:"95%",border:"1px #ccc solid"},value:this.state.web.keywords||"",onChange:this.handleChange.bind(this,"keywords")}))),React.createElement("tr",null,React.createElement("td",{style:{width:"50px",height:"50px"}},"级别："),React.createElement("td",{style:{textAlign:"left"}},React.createElement("input",{style:{width:"95%",border:"1px #ccc solid"},value:this.state.web.certified||"",onChange:this.handleChange.bind(this,"certified")}))))),React.createElement("table",{style:{height:"40px",borderTop:"1px solid #aaa"}},React.createElement("tbody",null,React.createElement("tr",null,React.createElement("td",{style:{textAlign:"left",color:"darkgreen"}},React.createElement("span",{style:{float:"left"},onTouchEnd:this.manageDivHide},"取消")),React.createElement("td",{style:{textAlign:"center",color:"darkgreen"}},React.createElement("span",{style:{display:this.state.web.id?"inline-block":"none"},onTouchEnd:this.deleteApp.bind(this,this.state.web.id)},"删除")),React.createElement("td",{style:{textAlign:"right",color:"darkgreen"}},React.createElement("span",{style:{display:this.state.web.id?"inline-block":"none"},onTouchEnd:this.updateApp},"修改"),React.createElement("span",{style:{display:this.state.web.id?"none":"inline-block"},onTouchEnd:this.addApp},"添加")))))),React.createElement("td",{style:{width:"10px"}})))))))),React.createElement("div",{style:{zIndex:"10000",position:"fixed",top:"200px",right:"-15px",color:"white",backgroundColor:"black",fontSize:"16px",lineHeight:"32px",width:"32px",height:"32px",borderRadius:"16px",textAlign:"center",display:this.state.appdivshow},onTouchEnd:this.toggleAppDivShow.bind(this,"")},"X"),React.createElement("div",{style:{position:"fixed",top:"0px",left:"0px",backgroundColor:"white",width:"100%",height:"100%",display:this.state.appdivshow}},React.createElement("iframe",{sandbox:"allow-forms allow-scripts allow-same-origin allow-popups",style:{width:"100%",height:"100%",border:"10px solid white"},src:this.state.weburl})))}}])&&M(n.prototype,o),r&&M(n,r),t}()};t.default=J}])});