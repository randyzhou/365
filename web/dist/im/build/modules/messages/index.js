!function(e,t){if("object"==typeof exports&&"object"==typeof module)module.exports=t();else if("function"==typeof define&&define.amd)define([],t);else{var r=t();for(var n in r)("object"==typeof exports?exports:e)[n]=r[n]}}(self,(function(){return(()=>{"use strict";var e={356:(e,t,r)=>{r.d(t,{Z:()=>i});var n=r(81),a=r.n(n),o=r(645),l=r.n(o)()(a());l.push([e.id,".axdWEmgc0GtfkTqFBM4a .msg {\n  border-radius: 5px;\n  padding: 5px;\n  display: inline-block;\n  text-align: left;\n  border: 1px #ddd solid;\n  word-break: break-all;\n  color: #444;\n  font-size: 15px;\n}\n.axdWEmgc0GtfkTqFBM4a .msgLeft {\n  background-color: #fefefe;\n}\n.axdWEmgc0GtfkTqFBM4a .msgRight {\n  background-color: #98ea70;\n}\n.axdWEmgc0GtfkTqFBM4a .chatUserPic {\n  width: 35px;\n  height: 35px;\n  margin-left: 0px;\n  margin-top: 0px;\n  border-radius: 3px;\n}\n.axdWEmgc0GtfkTqFBM4a .dtimeLeft {\n  position: absolute;\n  left: 10px;\n}\n.axdWEmgc0GtfkTqFBM4a .dtimeRight {\n  position: absolute;\n  right: 10px;\n}\n.axdWEmgc0GtfkTqFBM4a #chatDiv {\n  height: 70%;\n}\n",""]),l.locals={message:"axdWEmgc0GtfkTqFBM4a"};const i=l},871:(e,t,r)=>{r.d(t,{Z:()=>i});var n=r(81),a=r.n(n),o=r(645),l=r.n(o)()(a());l.push([e.id,".uBEi9DxyectKuuOL6AUl {\n  width: 100%;\n  height: 30px;\n}\n.footer {\n  background-color: red;\n}\n",""]),l.locals={msgInput:"uBEi9DxyectKuuOL6AUl"};const i=l},645:e=>{e.exports=function(e){var t=[];return t.toString=function(){return this.map((function(t){var r="",n=void 0!==t[5];return t[4]&&(r+="@supports (".concat(t[4],") {")),t[2]&&(r+="@media ".concat(t[2]," {")),n&&(r+="@layer".concat(t[5].length>0?" ".concat(t[5]):""," {")),r+=e(t),n&&(r+="}"),t[2]&&(r+="}"),t[4]&&(r+="}"),r})).join("")},t.i=function(e,r,n,a,o){"string"==typeof e&&(e=[[null,e,void 0]]);var l={};if(n)for(var i=0;i<this.length;i++){var s=this[i][0];null!=s&&(l[s]=!0)}for(var c=0;c<e.length;c++){var u=[].concat(e[c]);n&&l[u[0]]||(void 0!==o&&(void 0===u[5]||(u[1]="@layer".concat(u[5].length>0?" ".concat(u[5]):""," {").concat(u[1],"}")),u[5]=o),r&&(u[2]?(u[1]="@media ".concat(u[2]," {").concat(u[1],"}"),u[2]=r):u[2]=r),a&&(u[4]?(u[1]="@supports (".concat(u[4],") {").concat(u[1],"}"),u[4]=a):u[4]="".concat(a)),t.push(u))}},t}},81:e=>{e.exports=function(e){return e[1]}},379:e=>{var t=[];function r(e){for(var r=-1,n=0;n<t.length;n++)if(t[n].identifier===e){r=n;break}return r}function n(e,n){for(var o={},l=[],i=0;i<e.length;i++){var s=e[i],c=n.base?s[0]+n.base:s[0],u=o[c]||0,d="".concat(c," ").concat(u);o[c]=u+1;var m=r(d),p={css:s[1],media:s[2],sourceMap:s[3],supports:s[4],layer:s[5]};if(-1!==m)t[m].references++,t[m].updater(p);else{var g=a(p,n);n.byIndex=i,t.splice(i,0,{identifier:d,updater:g,references:1})}l.push(d)}return l}function a(e,t){var r=t.domAPI(t);return r.update(e),function(t){if(t){if(t.css===e.css&&t.media===e.media&&t.sourceMap===e.sourceMap&&t.supports===e.supports&&t.layer===e.layer)return;r.update(e=t)}else r.remove()}}e.exports=function(e,a){var o=n(e=e||[],a=a||{});return function(e){e=e||[];for(var l=0;l<o.length;l++){var i=r(o[l]);t[i].references--}for(var s=n(e,a),c=0;c<o.length;c++){var u=r(o[c]);0===t[u].references&&(t[u].updater(),t.splice(u,1))}o=s}}},569:e=>{var t={};e.exports=function(e,r){var n=function(e){if(void 0===t[e]){var r=document.querySelector(e);if(window.HTMLIFrameElement&&r instanceof window.HTMLIFrameElement)try{r=r.contentDocument.head}catch(e){r=null}t[e]=r}return t[e]}(e);if(!n)throw new Error("Couldn't find a style target. This probably means that the value for the 'insert' parameter is invalid.");n.appendChild(r)}},216:e=>{e.exports=function(e){var t=document.createElement("style");return e.setAttributes(t,e.attributes),e.insert(t,e.options),t}},565:(e,t,r)=>{e.exports=function(e){var t=r.nc;t&&e.setAttribute("nonce",t)}},795:e=>{e.exports=function(e){var t=e.insertStyleElement(e);return{update:function(r){!function(e,t,r){var n="";r.supports&&(n+="@supports (".concat(r.supports,") {")),r.media&&(n+="@media ".concat(r.media," {"));var a=void 0!==r.layer;a&&(n+="@layer".concat(r.layer.length>0?" ".concat(r.layer):""," {")),n+=r.css,a&&(n+="}"),r.media&&(n+="}"),r.supports&&(n+="}");var o=r.sourceMap;o&&"undefined"!=typeof btoa&&(n+="\n/*# sourceMappingURL=data:application/json;base64,".concat(btoa(unescape(encodeURIComponent(JSON.stringify(o))))," */")),t.styleTagTransform(n,e,t.options)}(t,e,r)},remove:function(){!function(e){if(null===e.parentNode)return!1;e.parentNode.removeChild(e)}(t)}}}},589:e=>{e.exports=function(e,t){if(t.styleSheet)t.styleSheet.cssText=e;else{for(;t.firstChild;)t.removeChild(t.firstChild);t.appendChild(document.createTextNode(e))}}}},t={};function r(n){var a=t[n];if(void 0!==a)return a.exports;var o=t[n]={id:n,exports:{}};return e[n](o,o.exports,r),o.exports}r.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return r.d(t,{a:t}),t},r.d=(e,t)=>{for(var n in t)r.o(t,n)&&!r.o(e,n)&&Object.defineProperty(e,n,{enumerable:!0,get:t[n]})},r.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),r.r=e=>{"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})};var n={};return(()=>{function e(e,t){(null==t||t>e.length)&&(t=e.length);for(var r=0,n=new Array(t);r<t;r++)n[r]=e[r];return n}r.r(n),r.d(n,{default:()=>B});const t=React.memo((function(t){var r,n,a=(r=React.useState(0),n=2,function(e){if(Array.isArray(e))return e}(r)||function(e,t){var r=null==e?null:"undefined"!=typeof Symbol&&e[Symbol.iterator]||e["@@iterator"];if(null!=r){var n,a,o=[],l=!0,i=!1;try{for(r=r.call(e);!(l=(n=r.next()).done)&&(o.push(n.value),!t||o.length!==t);l=!0);}catch(e){i=!0,a=e}finally{try{l||null==r.return||r.return()}finally{if(i)throw a}}return o}}(r,n)||function(t,r){if(t){if("string"==typeof t)return e(t,r);var n=Object.prototype.toString.call(t).slice(8,-1);return"Object"===n&&t.constructor&&(n=t.constructor.name),"Map"===n||"Set"===n?Array.from(t):"Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)?e(t,r):void 0}}(r,n)||function(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()),o=a[0],l=a[1];return React.createElement("div",{style:{padding:"0px",width:"100%",height:"100%"},onTouchStart:function(e){e.stopPropagation(),e.touches.length&&l(e.touches[0].pageX)},onTouchMove:function(e){if(e.stopPropagation(),e.touches.length){var t=e.touches[0].pageX-o;t<-100&&(location.href="#/groups"),t>100&&(location.href="#/me/admin")}}},t.children)}));var a=0;const o=function(e){if(!e.item)return null;var t=e.item,r=t.roomtype?t.roomtype.toLowerCase():"";"personal"==r&&(r="user");var n=t.toid;return React.createElement("tr",{style:{height:"60px"}},React.createElement("td",{style:{width:"60px",textAlign:"center",verticalAlign:"middle"},userid:t.toid},React.createElement(Img,{src:thumbUrl+"/top"+r+"photos/"+n+".jpg",style:{width:"50px",height:"50px",borderRadius:"6px"}})),React.createElement("td",{style:{borderTop:"1px #f1f1f1 solid",cursor:"pointer",lineHeight:"15px"}},React.createElement("table",{style:{width:"100%"},onClick:function(r){return function(t,r,n){e.showChatDiv(t,r,n)}(t.toid,t.roomtype,r)}},React.createElement("tbody",null,React.createElement("tr",null,React.createElement("td",null,React.createElement("div",{style:{dispay:"block",whiteSpace:"nowrap",textOverflow:"ellipsis",overflow:"hidden",width:"200px",fontSize:"16px",color:1!=t.tousersex&&"Personal"==t.roomtype?"red":"black"}},React.createElement("span",null,t.tousername)))))),React.createElement("table",{style:{width:"100%"}},React.createElement("tbody",null,React.createElement("tr",null,React.createElement("td",null,React.createElement("div",{style:{dispay:"block",whiteSpace:"nowrap",textOverflow:"ellipsis",overflow:"hidden",width:"200px",fontSize:"12px",color:"#aaa"}},t.msgNums>0?"["+t.msgNums+"条]":"","Personal"!=t.roomtype?t.username+"："+t.msg:t.msg))))),React.createElement("table",{style:{width:"100%"}},React.createElement("tbody",null,React.createElement("tr",null,React.createElement("td",null,React.createElement("div",{style:{dispay:"block",whiteSpace:"nowrap",textOverflow:"ellipsis",overflow:"hidden",width:"200px",fontSize:"12px",color:"darkgreen"}},t.newestmsg)))))),React.createElement("td",{style:{borderTop:"1px #f1f1f1 solid",width:"40px",verticalAlign:"middle",fontSize:"12px",color:"#999"},onClick:function(t){return a+=1,void setTimeout((function(){2===a&&e.deleteMsg(e.index),a=0}),300)}},new Date(t.sendtime).getHours(),":",new Date(t.sendtime).getMinutes()))},l=function(e){console.log("searchlist");var t=!!e.groupMsgs&&e.groupMsgs.map((function(t,r){return React.createElement(o,{key:t.roomtype+t.toid,index:r,item:t,showChatDiv:e.showChatDiv,deleteMsg:e.deleteMsg})}));return React.createElement("table",{style:{width:"100%",backgroundColor:"white"}},React.createElement("tbody",null,t))};function i(e,t){(null==t||t>e.length)&&(t=e.length);for(var r=0,n=new Array(t);r<t;r++)n[r]=e[r];return n}const s=function(e){var t,r,n=(t=React.useState(30),r=2,function(e){if(Array.isArray(e))return e}(t)||function(e,t){var r=null==e?null:"undefined"!=typeof Symbol&&e[Symbol.iterator]||e["@@iterator"];if(null!=r){var n,a,o=[],l=!0,i=!1;try{for(r=r.call(e);!(l=(n=r.next()).done)&&(o.push(n.value),!t||o.length!==t);l=!0);}catch(e){i=!0,a=e}finally{try{l||null==r.return||r.return()}finally{if(i)throw a}}return o}}(t,r)||function(e,t){if(e){if("string"==typeof e)return i(e,t);var r=Object.prototype.toString.call(e).slice(8,-1);return"Object"===r&&e.constructor&&(r=e.constructor.name),"Map"===r||"Set"===r?Array.from(e):"Arguments"===r||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r)?i(e,t):void 0}}(t,r)||function(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()),a=n[0],l=n[1];return React.createElement("div",{id:"groupList",style:{width:"100%",height:"100%",position:"relative",overflowY:"scroll",border:"0px"},onScroll:function(t){return function(t){a<e.groupMsgs.length&&t.target.clientHeight+t.target.scrollTop+1>t.target.scrollHeight&&setTimeout((function(){l(a+30)}),1e3)}(t)}},React.createElement("table",{style:{width:"100%",backgroundColor:"white"}},React.createElement("tbody",null,!!e.groupMsgs&&e.groupMsgs.map((function(t,r){return r>a?null:React.createElement(o,{key:t.roomtype+t.toid,index:r,item:t,showChatDiv:e.showChatDiv,deleteMsg:e.deleteMsg})})))))},c=function(e){var t=function(){backurl_store="#/messages",touchEnd("#/stores/members/"+e.item.id)},r=e.item,n=r.id,a="",o=r.latitude||r.shop_latitude,l=r.longitude||r.shop_longitude;latitude_reg&&longitude_reg&&o&&l&&(a=getGreatCircleDistance(latitude_reg,longitude_reg,o,l)+"米");var i=r.city?r.city:r.shop_city,s=r.disctrict?r.disctrict:r.shop_district,c=r.town||r.shop_town,u=r.building||r.shop_building,d=.9*e.phoneWidth;return React.createElement("table",{style:{width:"100%",height:"50px"}},React.createElement("tbody",null,React.createElement("tr",{style:{borderTop:"1px #eee solid",lineHeight:"20px"}},React.createElement("td",{style:{width:"80px",verticalAlign:"top",textAlign:"center"}},React.createElement("div",{style:{position:"relative",marginTop:"8px"}},React.createElement(Img,{src:thumbUrl+"/topstoreactphotos/"+n+".jpg",style:{width:"80px",height:"80px"},onTouchEnd:t}),React.createElement("div",{style:{position:"absolute",bottom:"5px",width:"80px",backgroundColor:"black",color:"white",opacity:"0.8",fontSize:"14px",fontWeight:"bolder",margin:"0 auto",letterSpacing:"-1px"}},r.act_date))),React.createElement("td",{style:{verticalAlign:"top",padding:"5px"}},React.createElement("table",null,React.createElement("tbody",null,React.createElement("tr",null,React.createElement("td",null,React.createElement("div",{style:{dispay:"block",whiteSpace:"nowrap",fontSize:"14px",fontWeight:"bold"}},React.createElement("span",{style:{color:"#000",fontWeight:"bold",fontSize:"16px"},onTouchEnd:t},r.name," ",React.createElement(Img,{src:thumbUrl+"/topstorephotos/"+n+".jpg",style:{width:"14px",height:"14px",borderRadius:"7px"}})),React.createElement("span",{style:{float:"right",color:"white",fontSize:"10px",paddingLeft:"5px",paddingRight:"5px",backgroundColor:"burlywood",borderRadius:"5px"},onClick:t},"加入")))),React.createElement("tr",null,React.createElement("td",{style:{dispay:"block",whiteSpace:"nowrap",textOverflow:"ellipsis",overflow:"hidden",width:"200px",maxWidth:"200px"}},React.createElement("span",{style:{color:"darkolivegreen",fontWeight:"bold"},onTouchEnd:t},r.act_title))),React.createElement("tr",null,React.createElement("td",null,React.createElement("span",{style:{dispay:"inline-block",lineHeight:"20px",whiteSpace:"nowrap",textOverflow:"ellipsis",overflow:"hidden",width:"150px",maxWidth:d+"px",textAlign:"left",fontSize:"12px",color:"#333"}},i,s,c,null,u))),React.createElement("tr",null,React.createElement("td",{style:{dispay:"block",whiteSpace:"nowrap",textOverflow:"ellipsis",overflow:"hidden",width:"200px",maxWidth:"200px"}},React.createElement("span",{style:{color:"darkred",fontWeight:"bold"},onTouchEnd:t},r.ownername),React.createElement("span",{style:{float:"right",color:"#999"}},a)))))))))};function u(e,t){(null==t||t>e.length)&&(t=e.length);for(var r=0,n=new Array(t);r<t;r++)n[r]=e[r];return n}const d=function(e){var t,r,n=(t=React.useState(""),r=2,function(e){if(Array.isArray(e))return e}(t)||function(e,t){var r=null==e?null:"undefined"!=typeof Symbol&&e[Symbol.iterator]||e["@@iterator"];if(null!=r){var n,a,o=[],l=!0,i=!1;try{for(r=r.call(e);!(l=(n=r.next()).done)&&(o.push(n.value),!t||o.length!==t);l=!0);}catch(e){i=!0,a=e}finally{try{l||null==r.return||r.return()}finally{if(i)throw a}}return o}}(t,r)||function(e,t){if(e){if("string"==typeof e)return u(e,t);var r=Object.prototype.toString.call(e).slice(8,-1);return"Object"===r&&e.constructor&&(r=e.constructor.name),"Map"===r||"Set"===r?Array.from(e):"Arguments"===r||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r)?u(e,t):void 0}}(t,r)||function(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()),a=n[0],o=n[1];return React.createElement("table",{style:{width:"100%",height:"30px"}},React.createElement("tbody",null,React.createElement("tr",null,React.createElement("td",{style:{width:"50px",textAlign:"center"}},React.createElement("span",{onTouchEnd:function(t){return e.showSendAll(0)}},"群发")),React.createElement("td",{style:{textAlign:"left",backgroundColor:"white",borderRadius:"5px"}},React.createElement("table",{style:{width:"100%"}},React.createElement("tbody",null,React.createElement("tr",null,React.createElement("td",null,React.createElement("input",{style:{width:"90%"},placeholder:"关键词",value:a||"",onChange:function(e){o(e.target.value)}})),React.createElement("td",{style:{width:"30px"}},React.createElement("span",{style:{float:"right",width:"14px",height:"14px",lineHeight:"14px",fontSize:"12px",color:"white",backgroundColor:"#bbb",borderRadius:"7px",textAlign:"center",display:e.searchGroupMsgs.length>0?"inline":"none"},onTouchEnd:function(){o(""),e.clearSearch()}},"x")))))),React.createElement("td",{style:{width:"50px",textAlign:"center"},onTouchEnd:function(){console.log(a),a.length>0&&e.handleSearch(a)}},"搜索"))))};var m=r(379),p=r.n(m),g=r(795),h=r.n(g),f=r(569),y=r.n(f),v=r(565),x=r.n(v),b=r(216),E=r.n(b),R=r(589),w=r.n(R),S=r(356),A={};A.styleTagTransform=w(),A.setAttributes=x(),A.insert=y().bind(null,"head"),A.domAPI=h(),A.insertStyleElement=E(),p()(S.Z,A),S.Z&&S.Z.locals&&S.Z.locals;const M=React.memo((function(e){var t=e.item,r=function(e){var t=new Date(e.sendtime);gTime||(gTime=t);var r,n=t.getMonth()+1+"月"+t.getDate()+"日 "+t.getHours()+":"+t.getMinutes(),a=t.getHours()+":"+t.getMinutes(),o=Date.parse(t)-Date.parse(gTime),l=new Date,i=Date.parse(l)-Date.parse(gTime),s=t.getMonth()+1+"年"+(t.getMonth()+1)+"月"+t.getDate()+"日",c=l.getMonth()+1+"年"+(l.getMonth()+1)+"月"+l.getDate()+"日";return i>864e4&&(n=t.getFullYear()+"年"+n),o>6e4&&(r=s!=c?React.createElement("table",{style:{width:"100%"}},React.createElement("tbody",null,React.createElement("tr",null,React.createElement("td",{colSpan:"3",style:{textAlign:"center",color:"#999",height:"40px",verticalAlign:"bottom",fontSize:"12px"}},n)))):React.createElement("table",{style:{width:"100%"}},React.createElement("tbody",null,React.createElement("tr",null,React.createElement("td",{colSpan:"3",style:{textAlign:"center",color:"#999",height:"40px",verticalAlign:"bottom",fontSize:"12px"}},a)))),gTime=t),r}(t),n="#999";return 1!=t.usersex&&(n="red"),React.createElement("table",{style:{width:"100%",margin:"3px"}},React.createElement("tbody",null,React.createElement("tr",null,React.createElement("td",null,r,React.createElement("table",{style:{width:"100%",display:t.userid==userid?"none":"table"}},React.createElement("tbody",null,React.createElement("tr",null,React.createElement("td",{style:{width:"45px",verticalAlign:"top"}},React.createElement(Img,{src:thumbUrl+"/topuserphotos/"+t.userid+".jpg",className:"chatUserPicLeft"})),React.createElement("td",{style:{textAlign:"left"}},React.createElement("div",{className:"message"},React.createElement("div",{className:"user"},React.createElement("span",{onClick:touchEnd.bind(void 0,"#/users/detail/"+t.userid),style:{color:n,fontSize:"12px"}},t.username)),React.createElement("div",{className:"msg msgLeft",style:{marginTop:"3px",padding:"5px"}},t.msg))),React.createElement("td",{className:"picTd"})))),React.createElement("table",{style:{width:"100%",display:t.userid==userid?"table":"none"}},React.createElement("tbody",null,React.createElement("tr",null,React.createElement("td",{className:"picTd"}),React.createElement("td",{style:{textAlign:"right",verticalAlign:"top"}},React.createElement("div",{className:"message"},React.createElement("div",{className:"msg msgRight",style:{padding:"5px"}},t.msg))),React.createElement("td",{style:{width:"50px",textAlign:"center",verticalAlign:"top"}},React.createElement(Img,{src:thumbUrl+"/topuserphotos/"+t.userid+".jpg",className:"chatUserPicRight"})))))))))}));var T=r(871),k={};k.styleTagTransform=w(),k.setAttributes=x(),k.insert=y().bind(null,"head"),k.domAPI=h(),k.insertStyleElement=E(),p()(T.Z,k);const C=T.Z&&T.Z.locals?T.Z.locals:void 0;function j(e,t){(null==t||t>e.length)&&(t=e.length);for(var r=0,n=new Array(t);r<t;r++)n[r]=e[r];return n}const O=React.memo((function(e){var t,r,n=(t=React.useState(""),r=2,function(e){if(Array.isArray(e))return e}(t)||function(e,t){var r=null==e?null:"undefined"!=typeof Symbol&&e[Symbol.iterator]||e["@@iterator"];if(null!=r){var n,a,o=[],l=!0,i=!1;try{for(r=r.call(e);!(l=(n=r.next()).done)&&(o.push(n.value),!t||o.length!==t);l=!0);}catch(e){i=!0,a=e}finally{try{l||null==r.return||r.return()}finally{if(i)throw a}}return o}}(t,r)||function(e,t){if(e){if("string"==typeof e)return j(e,t);var r=Object.prototype.toString.call(e).slice(8,-1);return"Object"===r&&e.constructor&&(r=e.constructor.name),"Map"===r||"Set"===r?Array.from(e):"Arguments"===r||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r)?j(e,t):void 0}}(t,r)||function(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()),a=n[0],o=n[1],l=function(t){if(t.stopPropagation(),""==a)return!1;var r,n=e.chatObj;n.readState=1,n.msg=a,socket.emit("message",n),r="Personal"==n.roomtype?Config.api+"chat/sendprivatechatdata":Config.api+"chat/sendpublicchatdata",fetchApi({url:r,method:"POST",body:n},(function(e){e.results})),o("")};return React.createElement("table",{className:C.msgInput},React.createElement("tbody",null,React.createElement("tr",null,React.createElement("td",{style:{width:"30px",textAlign:"center"}},React.createElement("img",{src:"image/v.jpg",style:{width:"22px"}})),React.createElement("td",{style:{textAlign:"center"}},React.createElement("input",{type:"text",style:{width:"99%",maxWidth:"99%",height:"27px",borderRadius:"5px",backgroundColor:"#fff",border:"0px"},value:a,onChange:function(e){e.stopPropagation();var t=e.target.value;e.target.value.indexOf("\n")>=0&&(t=""),o(t)},onKeyDown:function(e){if(e.stopPropagation(),13==(e.charCode||e.keyCode))return l(e),e.stopPropagation(),!1}})),React.createElement("td",{style:{width:"28px",textAlign:"center"}},React.createElement("img",{src:"image/smile.jpg",style:{width:"28px"}})),React.createElement("td",{style:{width:"28px",textAlign:"center",display:a.length>0?"none":"table-cell"}},React.createElement("img",{src:"image/plus.jpg",style:{width:"28px"}})),React.createElement("td",{style:{width:"60px",textAlign:"center",display:a.length>0?"table-cell":"none"}},React.createElement("div",{style:{border:"1px solid #ccc",backgroundColor:"#11a111",color:"white",textAlign:"center",width:"40px",padding:"5px",margin:"0 auto",borderRadius:"3px"},onTouchEnd:l},"发送")))))}));function I(e,t){return function(e){if(Array.isArray(e))return e}(e)||function(e,t){var r=null==e?null:"undefined"!=typeof Symbol&&e[Symbol.iterator]||e["@@iterator"];if(null!=r){var n,a,o=[],l=!0,i=!1;try{for(r=r.call(e);!(l=(n=r.next()).done)&&(o.push(n.value),!t||o.length!==t);l=!0);}catch(e){i=!0,a=e}finally{try{l||null==r.return||r.return()}finally{if(i)throw a}}return o}}(e,t)||function(e,t){if(e){if("string"==typeof e)return P(e,t);var r=Object.prototype.toString.call(e).slice(8,-1);return"Object"===r&&e.constructor&&(r=e.constructor.name),"Map"===r||"Set"===r?Array.from(e):"Arguments"===r||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r)?P(e,t):void 0}}(e,t)||function(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}function P(e,t){(null==t||t>e.length)&&(t=e.length);for(var r=0,n=new Array(t);r<t;r++)n[r]=e[r];return n}const D=React.memo((function(e){var t=I(React.useState(30),2),r=t[0],n=t[1],a=I(React.useState(0),2),o=a[0],l=a[1];return React.useEffect((function(){$("#msglog").scrollTop($("#msg")[0].scrollHeight)}),[e]),React.createElement("table",{style:{width:"100%",height:"100%"}},React.createElement("tbody",null,React.createElement("tr",null,React.createElement("td",{style:{height:"40px",backgroundColor:"#ededed",color:"#333",fontSize:"16px"}},React.createElement("table",{style:{width:"100%",textAlign:"center",marginTop:"0px"}},React.createElement("tbody",null,React.createElement("tr",{style:{height:"35px",lineHeight:"35px",textAlign:"center"}},React.createElement("td",{style:{textAlign:"left"}},React.createElement("table",null,React.createElement("tbody",null,React.createElement("tr",null,React.createElement("td",{style:{width:"45px"},onTouchEnd:e.hideDetailDiv},React.createElement(Icon,{type:"left",style:{width:"40px",height:"30px",float:"left",marginTop:"2px"}})),React.createElement("td",null,React.createElement("div",{style:{maxWidth:"250px",textAlign:"left",overflow:"hidden",whiteSpace:"nowrap",textOverflow:"ellipsis"}},React.createElement("div",{style:{height:"30px",fontSize:"16px"}},React.createElement("span",null,e.chatObj.tousername),"Personal"!=e.chatObj.roomtype?React.createElement("span",{onTouchEnd:function(t){return e.showSendAll(parseInt(e.chatObj.toid))}},React.createElement(Icon,{type:"down",style:{height:"15px"}})):null),e.chatObj.newestmsg?React.createElement("div",{style:{height:"15px",lineHeight:"15px",fontSize:"12px",color:"darkgreen"}},e.chatObj.newestmsg):null)))))),React.createElement("td",{style:{width:"36px",textAlign:"center"},onTouchEnd:function(){var t={};if(e.chatObj.roomtype){var r=e.chatObj.roomtype.toLowerCase()+"s";"personals"==r&&(r="users"),t={roomtype:r,toid:e.chatObj.toid}}if("users"==t.roomtype||"stores"==t.roomtype){"users"==t.roomtype&&(backurl_user="#/messages/list?toid="+t.toid+"&roomtype=Personal"),"stores"==t.roomtype&&(backurl_store="#/messages/list?toid="+t.toid+"&roomtype=Store");var n="#/"+t.roomtype+"/main/"+t.toid;touchEnd(n)}}},React.createElement(Icon,{type:"ellipsis",style:{width:"35px",fontSize:"12px",marginTop:"3px"}}))))))),React.createElement("tr",null,React.createElement("td",{style:{verticalAlign:"top",backgroundColor:"#ededed"}},React.createElement("div",{id:"msglog",style:{width:"100%",height:"100%",overflowY:"auto"},onScroll:function(t){return function(t){if(r<=e.msgLists.length&&0===t.target.scrollTop){var a=t.target.scrollHeight,i=a-o;setTimeout((function(){n(r+30),l(a),$("#msglog").scrollTop(i+10)}),1e3)}}(t)}},React.createElement("div",{id:"msg",style:{height:"100%"}},!!e.msgLists&&e.msgLists.map((function(t,n){return n<e.msgLists.length-r?null:React.createElement(M,{key:n,item:t||{}})})),!!e.msgListsNew&&e.msgListsNew.map((function(e,t){return React.createElement(M,{key:t,item:e||{}})})))))),React.createElement("tr",null,React.createElement("td",{style:{height:"45px",verticalAlign:"middle",borderTop:"1px solid #ececec",backgroundColor:"#f6f6f6"}},React.createElement(O,{chatObj:e.chatObj})))))}));function G(e,t){return function(e){if(Array.isArray(e))return e}(e)||function(e,t){var r=null==e?null:"undefined"!=typeof Symbol&&e[Symbol.iterator]||e["@@iterator"];if(null!=r){var n,a,o=[],l=!0,i=!1;try{for(r=r.call(e);!(l=(n=r.next()).done)&&(o.push(n.value),!t||o.length!==t);l=!0);}catch(e){i=!0,a=e}finally{try{l||null==r.return||r.return()}finally{if(i)throw a}}return o}}(e,t)||function(e,t){if(e){if("string"==typeof e)return L(e,t);var r=Object.prototype.toString.call(e).slice(8,-1);return"Object"===r&&e.constructor&&(r=e.constructor.name),"Map"===r||"Set"===r?Array.from(e):"Arguments"===r||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r)?L(e,t):void 0}}(e,t)||function(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}function L(e,t){(null==t||t>e.length)&&(t=e.length);for(var r=0,n=new Array(t);r<t;r++)n[r]=e[r];return n}const N=React.memo((function(e){var t=G(React.useState(0),2),r=t[0],n=t[1],a=G(React.useState(0),2),o=a[0],l=a[1];return React.useEffect((function(){n(e.pert)}),[e.pert]),React.createElement("div",{style:{backgroundColor:"gray",width:"100%",height:"100%",zIndex:"1000",position:"fixed",top:"0",transform:"translateX("+r+"%)"},onTouchStart:function(e){e.stopPropagation(),e.touches.length&&l(e.touches[0].pageX)},onTouchMove:function(e){if(e.stopPropagation(),e.touches.length){var t=e.touches[0].pageX-o;t>40&&n(t/2)}},onTouchEnd:function(t){t.stopPropagation();var a=0;r>50&&(a=100,e.hideDetailDiv(t)),n(a)}},e.children)}));function U(e,t){(null==t||t>e.length)&&(t=e.length);for(var r=0,n=new Array(t);r<t;r++)n[r]=e[r];return n}const _=function(e){var t,r,n=(t=React.useState(""),r=2,function(e){if(Array.isArray(e))return e}(t)||function(e,t){var r=null==e?null:"undefined"!=typeof Symbol&&e[Symbol.iterator]||e["@@iterator"];if(null!=r){var n,a,o=[],l=!0,i=!1;try{for(r=r.call(e);!(l=(n=r.next()).done)&&(o.push(n.value),!t||o.length!==t);l=!0);}catch(e){i=!0,a=e}finally{try{l||null==r.return||r.return()}finally{if(i)throw a}}return o}}(t,r)||function(e,t){if(e){if("string"==typeof e)return U(e,t);var r=Object.prototype.toString.call(e).slice(8,-1);return"Object"===r&&e.constructor&&(r=e.constructor.name),"Map"===r||"Set"===r?Array.from(e):"Arguments"===r||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r)?U(e,t):void 0}}(t,r)||function(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()),a=n[0],o=n[1];return React.createElement("div",{style:{display:e.show.show?"block":"none",zIndex:"100000",position:"fixed",bottom:"0px",left:"0px",textAlign:"center",padding:"0px",width:"100%",backgroundColor:"#ccc"}},React.createElement("table",null,React.createElement("tbody",null,React.createElement("tr",null,React.createElement("td",null,React.createElement("input",{maxLength:"20",style:{width:"100%",height:"35px"},placeholder:"群发消息(不超过20个汉字)",value:a,onChange:function(e){o(e.target.value)}}))),React.createElement("tr",null,React.createElement("td",{style:{width:"100%",height:"30px",lineHeight:"30px",textAlign:"center"}},React.createElement("table",null,React.createElement("tbody",null,React.createElement("tr",null,React.createElement("td",null),React.createElement("td",{style:{width:"40px"}},React.createElement("span",{style:{color:"darkgreen"},onClick:function(){o(""),e.showSendAll()}},"取消")),React.createElement("td",{style:{width:"40px"}},React.createElement("span",{style:{color:"darkgreen"},onClick:function(){if(!a)return!1;if(a.length>20)return alert("字数超过20个汉字"),!1;var t=Config.api+"user/updatenewestmsg";e.show.toid&&"number"==typeof e.show.toid&&(t=Config.api+"shop/updatenewestmsg?id="+e.show.toid),fetchApi({url:t,method:"POST",body:{newestmsg:a}},(function(e){resultAlert(e),e.result})),o(""),e.showSendAll()}},"群发"))))))))))};function z(e){return function(e){if(Array.isArray(e))return F(e)}(e)||function(e){if("undefined"!=typeof Symbol&&null!=e[Symbol.iterator]||null!=e["@@iterator"])return Array.from(e)}(e)||W(e)||function(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}function H(e,t){return function(e){if(Array.isArray(e))return e}(e)||function(e,t){var r=null==e?null:"undefined"!=typeof Symbol&&e[Symbol.iterator]||e["@@iterator"];if(null!=r){var n,a,o=[],l=!0,i=!1;try{for(r=r.call(e);!(l=(n=r.next()).done)&&(o.push(n.value),!t||o.length!==t);l=!0);}catch(e){i=!0,a=e}finally{try{l||null==r.return||r.return()}finally{if(i)throw a}}return o}}(e,t)||W(e,t)||function(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}function W(e,t){if(e){if("string"==typeof e)return F(e,t);var r=Object.prototype.toString.call(e).slice(8,-1);return"Object"===r&&e.constructor&&(r=e.constructor.name),"Map"===r||"Set"===r?Array.from(e):"Arguments"===r||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r)?F(e,t):void 0}}function F(e,t){(null==t||t>e.length)&&(t=e.length);for(var r=0,n=new Array(t);r<t;r++)n[r]=e[r];return n}const B={List:function(e){var r=H(React.useState([]),2),n=r[0],a=r[1],o=H(React.useState(100),2),i=o[0],u=o[1],m=H(React.useState([]),2),p=m[0],g=m[1],h=H(React.useState([]),2),f=h[0],y=h[1],v=H(React.useState({msg:""}),2),x=v[0],b=v[1],E=H(React.useState({}),2),R=E[0],w=E[1],S=H(React.useState(""),2),A=S[0],M=S[1],T=H(React.useState([]),2),k=T[0],C=T[1],j=H(React.useState({show:!1,toid:""}),2),O=j[0],I=j[1];React.useLayoutEffect((function(){P((function(){G((function(){userGroupMsgs.length<5&&L()}))}))}),[]),React.useLayoutEffect((function(){U(e)}),[e.msg]);var P=function(e){var t=Config.api+"shop/mygroups";fetchApi({url:t},(function(t){if(1==t.unlogin&&location.reload(),200==t.status){var r=t.stores?z(t.stores):[],n=t.myFriends?z(t.myFriends):[],a=t.user,o=[];if((r.length>0||n.length>0)&&(o=[].concat(r).concat(n)),0==o.length)return e&&e(),!1;var l=userGroupMsgs.length>0?z(userGroupMsgs):[];o.map((function(e,t){if("Group"!=e.roomtype){var r={};r.sendtime=Date.now()-99999999999,e.storeid&&""!=e.store_name?(r.roomid="Store"+e.storeid,r.msg="",r.roomtype="Store",r.userid="",r.username="",r.usersex="",r.toid=e.storeid,r.tousername=e.store_name,r.tousersex=1,r.readStatus=1,r.avatar=e.avatar,r.newestmsg=e.newestmsg):""!=e.username&&(e.userid==userid||(r.roomid="Personal"+e.userid,r.msg="",r.roomtype="Personal",r.userid="",r.username="",r.usersex="",r.toid=e.userid,r.tousername=e.username,r.tousersex=e.usersex,r.readStatus=1,r.avatar=e.avatar,r.newestmsg=e.newestmsg));for(var n=1,a=0,o=l.length;a<o;a++)if(l[a].roomid==r.roomid){n=2,l[a].newestmsg=r.newestmsg;break}1==n&&l.push(r)}}));var i={};i.sendtime=Date.now()-99999999900,i.roomid="Personal"+a.userid,i.msg="",i.roomtype="Personal",i.userid="",i.username="",i.usersex="",i.toid=a.userid,i.tousername=a.username,i.tousersex=a.usersex,i.readStatus=1,i.avatar=a.avatar,i.newestmsg=a.newestmsg;for(var s=1,c=0,u=l.length;c<u;c++)if(l[c].roomid==i.roomid){s=2,l[c].userid=i.userid,l[c].username=i.username,l[c].usersex=i.usersex,l[c].avatar=i.avatar,l[c].newestmsg=i.newestmsg;break}1==s&&l.push(i),l.sort((function(e,t){return t.sendtime-e.sendtime})),M(l),userGroupMsgs=z(l),localStorage[userid+"groupMsgs"]=JSON.stringify(l),e()}else errMessage(t)}))},G=function(e){var t=userid+"time",r=localStorage[t];r||(r=0);var n=Config.api+"chat/newmsgs?lastTime="+r;localStorage[t]=(new Date).getTime(),fetchApi({url:n},(function(t){if(!isJson(t))return errMessage("","服务器文件错误！"),!1;if(200==t.status){var r=t.storeMsgs?z(t.storeMsgs):[],n=t.personalMsgs?z(t.personalMsgs):[],a=[].concat(r).concat(n);if(0==a.length)return e&&e(),!1;var o=[];a.map((function(e,t){if("Group"!=e.roomtype){e.sendtime=new Date(e.sendtime.replace(/-/g,"/")).getTime(),chatMessages.push(e),localStorage[userid]=JSON.stringify(chatMessages);var r={};r.sendtime=e.sendtime,r.roomid="Store"+e.toid,r.msg=e.msg,r.roomtype="Store",r.userid=e.userid,r.username=e.username,r.usersex=e.usersex,r.toid=e.toid,r.tousername=e.tousername,r.tousersex=1,r.readStatus=1,"Personal"==e.roomtype&&(r.roomtype="Personal",e.toid==userid?(r.roomid="Personal"+e.userid,r.userid=e.toid,r.username=e.tousername,r.usersex=e.tousersex,r.toid=e.userid,r.tousername=e.username,r.tousersex=e.usersex):(r.roomid="Personal"+e.toid,r.userid=e.userid,r.username=e.username,r.usersex=e.usersex,r.toid=e.toid,r.tousername=e.tousername,r.tousersex=e.tousersex)),o.push(r)}}));var l=userGroupMsgs?z(userGroupMsgs):[];o.map((function(e,t){if(e.toid&&""!=e.tousername){for(var r=-1,n=0,a=l.length;n<a;n++)if(l[n].roomid==e.roomid){l[n].sendtime=e.sendtime,l[n].msg=e.msg,l[n].userid=e.userid,l[n].username=e.username,l[n].usersex=e.usersex,r=n;break}-1==r&&l.push(e)}})),l.sort((function(e,t){return t.sendtime-e.sendtime})),M(l),userGroupMsgs=l?z(l):[],localStorage[userid+"groupMsgs"]=JSON.stringify(l),e&&e()}else errMessage(t)}))},L=function(){var e=Config.api+"shop/newgroups";fetchApi({url:e},(function(e){if(200==e.status){var t=e.data;C(t)}else errMessage(e)}))},U=function(e){if(!e.msg||0==Object.keys(e.msg).length)return!1;var t=e.msg;if(t.sendtime===R.sendtime)return!1;if(t.sendtime&&t.msg&&(t.userid!=userid||t.toid!=userid||"Personal"!=t.roomtype)&&"Group"!=t.roomtype&&"number"!=typeof t.sendtime){var r=t.sendtime;r=r.replace(/-/g,"/"),t.sendtime=new Date(r).getTime(),chatMessages.push(t),localStorage[userid]=JSON.stringify(chatMessages);var n={};n.sendtime=t.sendtime,n.msg=t.msg,n.readStatus=1,n.roomid="Store"+t.toid,n.roomtype="Store",n.userid=t.id,n.username=t.username,n.usersex=t.usersex,n.toid=t.toid,n.tousername=t.tousername,n.tousersex=1,n.readStatus=1,"Personal"==t.roomtype&&(n.roomtype="Personal",t.toid==userid?(n.roomid="Personal"+t.userid,n.userid=t.toid,n.username=t.tousername,n.usersex=t.tousersex,n.toid=t.userid,n.tousername=t.username,n.tousersex=t.usersex):(n.roomid="Personal"+t.toid,n.userid=t.userid,n.username=t.username,n.usersex=t.usersex,n.toid=t.toid,n.tousername=t.tousername,n.tousersex=t.tousersex));for(var a=userGroupMsgs?z(userGroupMsgs):[],o=-1,l=0,i=a.length;l<i;l++)if(a[l].roomid==n.roomid){a[l].sendtime=n.sendtime,a[l].msg=n.msg,a[l].userid=n.userid,a[l].username=n.username,a[l].usersex=n.usersex,o=l;break}-1==o&&a.push(n),a.sort((function(e,t){return t.sendtime-e.sendtime})),M(a),w(n),userGroupMsgs=a?z(a):[],localStorage[userid+"groupMsgs"]=JSON.stringify(a);var s=n.sendtime;if(localStorage[userid+"time"]=s,n.toid&&n.toid==x.toid){var c=z(f);c.push(t),y(c)}}},W=function(e){var t=z(A);t.remove(e),M(t),userGroupMsgs=t?z(t):[],localStorage[userid+"groupMsgs"]=JSON.stringify(t)},F=usePersistFn((function(e,t,r){if(!e||!t)return!1;var n=getMsgsFromLocal(e,t),a=getFromUserGroupMsgs(e,t);if(!a)return!1;var o={msg:"",toid:a.toid,tousername:a.tousername,tousersex:a.tousersex,roomtype:a.roomtype,roomid:a.roomid,newestmsg:a.newestmsg};g(n),y([]),b(o),u(0),gTime=0,$("#msglog").scrollTop($("#msg")[0].scrollHeight)})),B=function(e){e.stopPropagation(),b(""),u(100)},Z=function(e){var t=!O.show;I({show:t,toid:e})};return React.createElement(t,null,React.createElement("div",{style:{padding:"0px",width:"100%",height:"100%"}},React.createElement("table",{style:{width:"100%",height:"100%"}},React.createElement("tbody",null,React.createElement("tr",null,React.createElement("td",{style:{height:"40px"}},React.createElement(Maintop,null))),React.createElement("tr",{style:{height:"40px",verticalAlign:"middle"}},React.createElement("td",null,React.createElement(d,{searchGroupMsgs:n,clearSearch:function(){a([])},showSendAll:Z,handleSearch:function(e){var t=[];if(e.length>0){for(var r=0,n=A.length;r<n;r++)A[r].tousername.indexOf(e)>=0&&t.push(A[r]);t.sort((function(e,t){return t.sendtime-e.sendtime})),a(t)}}}))),React.createElement("tr",null,React.createElement("td",{style:{overflowY:"scroll",verticalAlign:"top",backgroundColor:"#eeeeee"}},!!n&&n.length>0&&React.createElement(l,{groupMsgs:n,showChatDiv:F,deleteMsg:W}),!!A&&A.length>0&&React.createElement(s,{groupMsgs:A,showChatDiv:F,deleteMsg:W,msg:e}),!!A&&A.length<1&&React.createElement("table",{style:{width:"100%",backgroundColor:"white"}},React.createElement("tbody",null,React.createElement("tr",null,React.createElement("td",{style:{textAlign:"center",height:"50px",lineHeight:"50px"}},"新会员，暂无组织朋友，请点击加入！")))),k.length>0&&React.createElement("div",{style:{width:"100%",height:"100%",position:"relative",overflowY:"scroll",border:"0px"}},React.createElement("div",{style:{width:"100%",backgroundColor:"white",borderTop:"1px solid darkgray"}},React.createElement("div",{style:{textAlign:"center",height:"50px",lineHeight:"50px"}},"这是给新朋友推荐的有趣的门店和社团"),k.map((function(e,t){return React.createElement(c,{key:e.id,index:t,item:e})})))))),React.createElement("tr",{style:{height:"30px"}},React.createElement("td",null,React.createElement(Mainbottom,null))))),React.createElement(N,{pert:i,hideDetailDiv:B},React.createElement(D,{msgLists:p,msgListsNew:f,chatObj:x,hideDetailDiv:B,showSendAll:Z})),React.createElement(_,{show:O,showSendAll:Z})))}}})(),n})()}));