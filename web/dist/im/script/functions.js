function compareDatetime(val,args,obj){
  let result = 1;
  let arr = args;
  let op = arr[0];
  let v1 = (new Date(val)).valueOf();
  let v2;
  let formData = obj.state.formData;

  if(obj.state.ErrorMsg && obj.state.ErrorMsg[arr[1]]){
    obj.state.Errors[arr[1]].splice(arr[2],1);
    let strError = obj.state.ErrorMsg[arr[1]].replace(arr[2],"");
    let ErrorMsg = obj.state.ErrorMsg;
    ErrorMsg[arr[1]] = strError;
    obj.setState({
      ErrorMsg: ErrorMsg
    });
  }

  if(!arr[3]) v2 = (new Date(formData[arr[1]])).valueOf();
  else v2 = arr[3];
  if((op == "<" && v1 < v2) || (op == ">" && v1 > v2) || (op == "<=" && v1 <= v2) || (op == ">=" && v1 >= v2) || (op == "=" && v1 != v2)) result = 0;

  return {res: result, msg: arr[2]};
}

function compareValue(val,args,obj){
  let result = 1;
  let v1 = val;

  let arr = args;
  let op = arr[0];
  let name = arr[1];
  let v2 = obj.state[name];
  let msg = arr[2];
  if((op == "<" && v1 < v2) || (op == ">" && v1 > v2) || (op == "<=" && v1 <= v2) || (op == ">=" && v1 >= v2) || (op == "==" && v1 != v2)) result = 0;
  return {res: result, msg: msg};
}

function isSame(val,args){
  let result = 1;
  if(val != args[0]) result = 0;
  return {res: result,msg: args[1]+"和"+args[2]+"不相同！"};
}

function maxLength(val,args){
  let result = 1;
  if(val && strWidth(val) > parseInt(args[0])) result = 0;
  let reObj = {res: result,msg: "最多"+args[0]+"个字符，一个汉字占两个字符！"};
  return reObj;
}

function minLength(val,args){
  let result = 1;
  if(val && strWidth(val) < parseInt(args[0])) result = 0;
  let reObj = {res: result,msg: "最少"+args[0]+"个字符，一个汉字占两个字符！"};
  return reObj;
}

function notZereo(val){
  let result = 1;
  if(val == "0") result = 0;
  return {res: result, msg: "不能为零！"};
}

function notEmpty(val){
  let result = 1;
  if(!val || val.length < 1) result = 0;
  return {res: result, msg: "必填项！"};
}

function isChinese(val){
  let result = 1;
  if(val && !/^[\u0391-\uFFE5]+$/.test(val)) result = 0;
  return {res: result, msg: "必须输入中文！"};
}

function isMoneyNumber(val){
  let result = 1;
  if(val && ((!/^[-\+]?\d+(\.\d{2})?$/.test(val) && !/^[-\+]?\d+(\.\d{1})?$/.test(val) ) || val <= 0 )) result = 0;
  return {res: result, msg: "不能为0或负数，小数位必须是1-2位！"};
}

function isNumber(val){
  let result = 1;
  if(val && !/^[-\+]?\d+$/.test(val)) result = 0;
  return {res: result, msg: "必须是数字！"};
}

function isDigits(val){
  let result = 1;
  if(val && !/^\d+$/.test(val)) result = 0;
  return {res: result, msg: "必须是整数！"};
}

function charAndDigits(val){
  let result = 1;
  if(val && !/^[a-zA-Z][a-zA-Z0-9_]*$/.test(val)) result = 0;
  return {res: result, msg: "只能包含字母和数字，且须以字母开头！"};
}

//单条验证函数，val：验证值；name：变量名；validNames：验证函数集合；obj：react component对象。
function validate(val,name,validNames,obj,formData){
    if(!obj.state.Errors[name]) obj.state.Errors[name] = [];
    if(!validNames) return;

    for(let i = 0; i < validNames.length; i++){
        let validArr = validNames[i].split("(");
        let fn = validArr[0];
        let args = validArr[1].split(")")[0].split(",");
        let resObj = window[fn](val,args,obj);
        if(resObj.res && obj.state.Errors[name].indexOf(resObj.msg) >= 0){
          obj.state.Errors[name].splice(obj.state.Errors[name].indexOf(resObj.msg), 1);
        }
        if(!resObj.res && obj.state.Errors[name].indexOf(resObj.msg) < 0){
          obj.state.Errors[name].push(resObj.msg);
        }
    }

    let errorsArr = obj.state.Errors[name];
    let msg = "";
    for(let i = 0; i < errorsArr.length; i++){
        msg = msg+" "+errorsArr[i]
    }

    let ErrorMsg = obj.state.ErrorMsg;
    ErrorMsg[name] = msg;
    obj.setState({ErrorMsg: ErrorMsg});

    let errShow = obj.state.errShow;
    if(obj.state.ErrorMsg[name].length > 0){
      errShow[name] = 1;
    }else{
      errShow[name] = 0;
    }
    obj.setState({errShow: errShow});

    let errTag = [];
    for(let o in obj.state.ErrorMsg){
      if(obj.state.ErrorMsg[o].length>0) {
        errTag.push(1);
      }
    }

    if(errTag.length > 0){
      obj.state.errTag = "disabled";
    }else{
      obj.state.errTag = "";
    }

    obj.state.inputed[name] = strWidth(val);
}

//验证所有
function validates(validData,obj){
  for(let name in validData){
    let validNames = validData[name];
    let value = obj.state.formData[name];
    validate(value, name, validNames, obj, obj.state.formData);
  }
}



//通用函数

//计算两点之间的经纬度距离
function getGreatCircleDistance(lat1,lng1,lat2,lng2){
  function getRad(d){
    return d*Math.PI/180.0;
  }
  let radLat1 = getRad(lat1);
  let radLat2 = getRad(lat2);        
  let a = radLat1 - radLat2;
  let b = getRad(lng1) - getRad(lng2);
  let s = 2*Math.asin(Math.sqrt(Math.pow(Math.sin(a/2),2) + Math.cos(radLat1)*Math.cos(radLat2)*Math.pow(Math.sin(b/2),2)));
  s = s*6378137.0;
  s = Math.round(s*10000)/10000.0;
  s = parseInt(s);
  return s;
}

//    图片上传，将base64的图片转成二进制对象，塞进formdata上传
function upload(basestr, type, url, cb) {
  let text = window.atob(basestr.split(",")[1]);
  let buffer = new Uint8Array(text.length);
  let objurl = url;
  
  for (let i = 0; i < text.length; i++) {
    buffer[i] = text.charCodeAt(i);
  }

  let blob = getBlob([buffer], type);
  let formData = getFormData();
  formData.append('imgfile', blob);

  if(token){
    if(objurl.indexOf('?') > 0){
      objurl = objurl + '&token=' + token + "&uptime=" + uptime;
    }else{
      objurl = objurl + '?token=' + token + "&uptime=" + uptime;
    }
  }

  fetch(objurl, {
    method: 'POST',
    body: formData
    }).then(response => response.json())
    .then((data) => {
      cb(data);
    });
}

//    图片上传，将base64的图片转成二进制对象，塞进formdata上传
function upload123(basestr, type, $li, url, cb) {
  let text = window.atob(basestr.split(",")[1]);
  let buffer = new Uint8Array(text.length);
  let pecent = 0, loop = null;
  for (let i = 0; i < text.length; i++) {
    buffer[i] = text.charCodeAt(i);
  }
  let blob = getBlob([buffer], type);
  let xhr = new XMLHttpRequest();
  let formdata = getFormData();

  if(token){
    if(url.indexOf("?") > 0){
      url = url + "&token="+token
    }else{
      url = url + "?token="+token
    }
  }

  formdata.append('imagefile', blob);
  xhr.open('post', url);
  xhr.onreadystatechange = function() {
    if (xhr.readyState == 4 && xhr.status == 200) {
      let jsonData = JSON.parse(xhr.responseText);
      cb(jsonData);
      clearInterval(loop);
      //当收到该消息时上传完毕
      $li.find(".progress span").animate({'width': "100%"}, pecent < 95 ? 200 : 0, function() {
        $(this).html(text);
      });

    }
  };
  //数据发送进度，前50%展示该进度
  xhr.upload.addEventListener('progress', function(e) {
    if (loop) return;
    pecent = ~~(100 * e.loaded / e.total) / 2;
    $li.find(".progress span").css('width', pecent + "%");
    if (pecent == 50) {
      mockProgress();
    }
  }, false);
  //数据后50%用模拟进度
  function mockProgress() {
    if (loop) return;
    loop = setInterval(function() {
      pecent++;
      $li.find(".progress span").css('width', pecent + "%");
      if (pecent == 99) {
        clearInterval(loop);
      }
    }, 100)
  }
  xhr.send(formdata);
}

function uploadWithData(basestr, type, $li, url, data, cb) {
  let text = window.atob(basestr.split(",")[1]);
  let buffer = new Uint8Array(text.length);
  let pecent = 0, loop = null;
  for (let i = 0; i < text.length; i++) {
    buffer[i] = text.charCodeAt(i);
  }
  let blob = getBlob([buffer], type);
  let xhr = new XMLHttpRequest();
  let formdata = getFormData();
  formdata.append('imagefile', blob);
  formdata.append('photoname',data.photoname);

  xhr.open('post', url);
  xhr.onreadystatechange = function() {
    if (xhr.readyState == 4 && xhr.status == 200) {
      let jsonData = JSON.parse(xhr.responseText);
      cb(jsonData);
      clearInterval(loop);
      //当收到该消息时上传完毕
      $li.find(".progress span").animate({'width': "100%"}, pecent < 95 ? 200 : 0, function() {
        $(this).html(text);
      });

    }
  };
  //数据发送进度，前50%展示该进度
  xhr.upload.addEventListener('progress', function(e) {
    if (loop) return;
    pecent = ~~(100 * e.loaded / e.total) / 2;
    $li.find(".progress span").css('width', pecent + "%");
    if (pecent == 50) {
      mockProgress();
    }
  }, false);
  //数据后50%用模拟进度
  function mockProgress() {
    if (loop) return;
    loop = setInterval(function() {
      pecent++;
      $li.find(".progress span").css('width', pecent + "%");
      if (pecent == 99) {
        clearInterval(loop);
      }
    }, 100)
  }

  xhr.send(formdata);
}

//    使用canvas对大图片进行压缩
function compress(img) {
  //    用于压缩图片的canvas
  let canvas = document.createElement("canvas");
  let ctx = canvas.getContext('2d');
  //    瓦片canvas
  let tCanvas = document.createElement("canvas");
  let tctx = tCanvas.getContext("2d");

  let initSize = img.src.length;
  let width = img.width;
  let height = img.height;

  //如果图片大于一百万像素，计算压缩比并将大小压至100万以下
  let ratio;
  if ((ratio = width * height / 1000000) > 1) {
    ratio = Math.sqrt(ratio);
    width /= ratio;
    height /= ratio;
  } else {
    ratio = 1;
  }

  canvas.width = width;
  canvas.height = height;
  //铺底色
  ctx.fillStyle = "#fff";
  ctx.fillRect(0, 0, canvas.width, canvas.height);
  //如果图片像素大于100万则使用瓦片绘制
  let count;
  if ((count = width * height / 1000000) > 1) {
    count = ~~(Math.sqrt(count) + 1); //计算要分成多少块瓦片
    //计算每块瓦片的宽和高
    let nw = ~~(width / count);
    let nh = ~~(height / count);
    tCanvas.width = nw;
    tCanvas.height = nh;
    for (let i = 0; i < count; i++) {
      for (let j = 0; j < count; j++) {
        tctx.drawImage(img, i * nw * ratio, j * nh * ratio, nw * ratio, nh * ratio, 0, 0, nw, nh);
        ctx.drawImage(tCanvas, i * nw, j * nh, nw, nh);
      }
    }
  } else {
    ctx.drawImage(img, 0, 0, width, height);
  }
  //进行最小压缩
  let ndata = canvas.toDataURL('image/jpeg', 0.5);
  console.log('压缩前：' + initSize);
  console.log('压缩后：' + ndata.length);
  console.log('压缩率：' + ~~(100 * (initSize - ndata.length) / initSize) + "%");
  tCanvas.width = tCanvas.height = canvas.width = canvas.height = 0;
  return ndata;
}

/**
 * 获取blob对象的兼容性写法
 * @param buffer
 * @param format
 * @returns {*}
 */
function getBlob(buffer, format) {
  try {
    return new Blob(buffer, {type: format});
  } catch (e) {
    let bb = new (window.BlobBuilder || window.WebKitBlobBuilder || window.MSBlobBuilder);
    buffer.forEach(function(buf) {
      bb.append(buf);
    });
    return bb.getBlob(format);
  }
}
/**
 * 获取formdata
 */
function getFormData() {
  let isNeedShim = ~navigator.userAgent.indexOf('Android')
      && ~navigator.vendor.indexOf('Google')
      && !~navigator.userAgent.indexOf('Chrome')
      && navigator.userAgent.match(/AppleWebKit\/(\d+)/).pop() <= 534;
  return isNeedShim ? new FormDataShim() : new FormData()
}
/**
 * formdata 补丁, 给不支持formdata上传blob的android机打补丁
 * @constructor
 */
function FormDataShim() {
  console.warn('using formdata shim');
  let o = this,
      parts = [],
      boundary = Array(21).join('-') + (+new Date() * (1e16 * Math.random())).toString(36),
      oldSend = XMLHttpRequest.prototype.send;
  this.append = function(name, value, filename) {
    parts.push('--' + boundary + '\r\nContent-Disposition: form-data; name="' + name + '"');
    if (value instanceof Blob) {
      parts.push('; filename="' + (filename || 'blob') + '"\r\nContent-Type: ' + value.type + '\r\n\r\n');
      parts.push(value);
    }
    else {
      parts.push('\r\n\r\n' + value);
    }
    parts.push('\r\n');
  };
}

function dateFormat(date){
  return date.getFullYear()+"/"+date.getMonth()+"/"+date.getDay()+"T"+date.getHours()+":"+date.getMinutes()+":"+date.getSeconds();
}

//哈希函数
function hash(str){
  let hash = 1315423913;
  for(let i = 0; i < str.length; i++){
    hash ^= (hash << 5) + str.charAt(i) + (hash >> 2);
  }
  hash = "a"+hash;
  return hash;
}

function classNames() {
  let classes = '';
  for (let i = 0; i < arguments.length; i++) {
    let arg = arguments[i];
    if (!arg) continue;
    let argType = typeof arg;
    if ('string' === argType || 'number' === argType) {
      classes += ' ' + arg;
    } else if (Array.isArray(arg)) {
      classes += ' ' + classNames.apply(null, arg);
    } else if ('object' === argType) {
      for (let key in arg) {
        if (arg.hasOwnProperty(key) && arg[key]) {
          classes += ' ' + key;
        }
      }
    }
  }

  return classes.substr(1);
}


//上传文件或图片后的回调函数
function imageCallback(md5,node,fn){
  Com.changePicState(md5);
}
function defaultcallback(index, code, msg, name, url, input_name, node, count, fn) {
  if(code == 3 || code ==404 ) {
    let msg = msg?msg:"上传图片失败！";
    resultAlert(msg);
  }else{
    //reduxStore.dispatch({type:"IMAGE_SHOW",name:{name:name,imgType:input_name}});
  }
}
function filesuploads_js_callback(index, code, msg, name, url, input_name, node, count, fn) {
  if(code == 3 || code ==404) {
    let msg = msg?msg:"上传文件不符合要求！";
    resultAlert(msg);
  }else{
    //reduxStore.dispatch({type:"IMAGE_SHOW",name:{name:name,imgType:input_name}});
  }
}
function samplecallback(index, code, msg, name, url, input_name, node, count, fn) {
  defaultcallback(index, code, msg, name, url, input_name, node, count, fn);
}

function waitt(time){
    let now = new Date().getTime();
    wait.lastSearchSt = wait.lastSearchSt || 0;
    return {
        done : function (cb){
            clearTimeout(timer);
            let timer = setTimeout(function() {
                if(now > (wait.lastSearchSt + time)) cb();
                wait.lastSearchSt = now;
                return;
            }, time);
        }
    }
}

//根据字节数截取字符数
function subStringByWidth(str,num){
  function check(str) {
    if (/[\x00-\xFF]/.test(str)) {
      return false;
    } else {
      if (str.indexOf('“') >= 0 || str.indexOf('”') >= 0) {
        return false;
      }
      return true;
    }
  };

  if (!str) {
        return 0;
    }

    let len = str.length,
      width = 0;

    for (i = 0; i < len; i++) {
        width += check(str.charAt(i)) ? 2 : 1;
        if(width > num)
          break
    }
    return str.substring(0,i);
}

//获得字符串长度，一个汉字等于两个字符。
function strWidth(str){
  function check(str) {
    if (/[\x00-\xFF]/.test(str)) {
      return false;
    } else {
      if (str.indexOf('“') >= 0 || str.indexOf('”') >= 0) {
        return false;
      }
      return true;
    }
    };

  let width = 0;
    let i;

  if (!str) {
        return 0;
    }
    for (i = 0; i < str.length; i++) {
        width += (check(str.charAt(i)) ? 2 : 1);
    }
    return width;
}

//判断是否滚动到底部,true：是,false：否
function scroll2Bottom(child,parent){
  let childHeight = $(child).height();
  let parentScrollTop = $(parent).scrollTop();
  let parentHeight = $(parent).height();
  let res = childHeight - parentScrollTop <= parentHeight;
  return res;
};

function scroll2Bottom123(child,parent){
  let childHeight = $(child).height();
  let eventScrollTop = $(parent).scrollTop();
  let eventHeight = $(parent).height();
  let res = childHeight - eventScrollTop <= eventHeight;
  console.log(res)
  return res;
};

//判断是否滚动到顶部, true：是,false：否
function scroll2Up(obj){
  let scrollTop = $(window).scrollTop();
  return scrollTop <= 2;
};

//设置html的title值
function setTitle(name){
  if(name){
    $("title").html(name);
    $("#nav_title").html(name);
  }
}

function alertCallback(message,mod,callback) {
  $('#alertMsg, #shadowDiv').remove();
  let msg = message || '';
  let mode = mod || 0;
  let top = document.body.scrollTop || document.documentElement.scrollTop;
  let sTop = document.documentElement.scrollTop || document.body.scrollTop;
  let sLeft = document.documentElement.scrollLeft || document.body.scrollLeft;
  let winSize = function(){
      let xScroll, yScroll, windowWidth, windowHeight, pageWidth, pageHeight;
      // innerHeight获取的是可视窗口的高度，IE不支持此属性
      if (window.innerHeight && window.scrollMaxY) {
          xScroll = document.body.scrollWidth;
          yScroll = window.innerHeight + window.scrollMaxY;
      } else if (document.body.scrollHeight > document.body.offsetHeight) { // all but Explorer Mac
          xScroll = document.body.scrollWidth;
          yScroll = document.body.scrollHeight;
      } else { // Explorer Mac...would also work in Explorer 6 Strict, Mozilla and Safari
          xScroll = document.body.offsetWidth;
          yScroll = document.body.offsetHeight;
      }

      if (self.innerHeight) {    // all except Explorer
          windowWidth = self.innerWidth;
          windowHeight = self.innerHeight;
      } else if (document.documentElement && document.documentElement.clientHeight) { // Explorer 6 Strict Mode
          windowWidth = document.documentElement.clientWidth;
          windowHeight = document.documentElement.clientHeight;
      } else if (document.body) { // other Explorers
          windowWidth = document.body.clientWidth;
          windowHeight = document.body.clientHeight;
      }

      // for small pages with total height less then height of the viewport
      if (yScroll < windowHeight) {
          pageHeight = windowHeight;
      } else {
          pageHeight = yScroll;
      }

      // for small pages with total width less then width of the viewport
      if (xScroll < windowWidth) {
          pageWidth = windowWidth;
      } else {
          pageWidth = xScroll;
      }

      return{
          'pageWidth':pageWidth,
          'pageHeight':pageHeight,
          'windowWidth':windowWidth,
          'windowHeight':windowHeight
      }
  }();
  //resultAlert(winSize.pageWidth);
  //遮罩层
  let styleStr = 'top:0;left:0;position:absolute;z-index:10000;background:#666;width:' + winSize.pageWidth + 'px;height:' +  (winSize.pageHeight + 30) + 'px;';
  styleStr += "opacity:0.8;"; //遮罩层DIV
  let shadowDiv = document.createElement('div'); //添加阴影DIV
  shadowDiv.style.cssText = styleStr; //添加样式
  shadowDiv.id = "shadowDiv";

  document.body.insertBefore(shadowDiv, document.body.firstChild); //遮罩层加入文档
  //弹出框
  let styleStr1111 = 'display:block;position:fixed;_position:absolute;left:' + (winSize.windowWidth / 2 - 200) + 'px;top:' + (winSize.windowHeight / 2 - 150) + 'px;_top:' + (winSize.windowHeight / 2 + top - 150)+ 'px;'; //弹出框的位置
  let styleStr1 = 'display:block;position:fixed;_position:absolute;left:0px;top:0px;font-size: 15px;padding: 0; padding-bottom:0; min-width:250px; max-width: '+(winSize.pageWidth-80)+'px'; //弹出框的位置
  let alertBox = document.createElement('div');
  alertBox.id = 'alertMsg';
  alertBox.style.cssText = styleStr1;
  //创建弹出框里面的内容P标签
  let alertMsg_info = document.createElement('P');
  alertMsg_info.id = 'alertMsg_info';
  alertMsg_info.innerHTML = msg;
  alertMsg_info.style.cssText = 'text-align:center;border-bottom: 1px solid #ccc;padding: 12px;font-size: 15px;font-weight: bold; margin-bottom: 0;';
  alertBox.appendChild(alertMsg_info);
  //创建按钮
  let btn1 = document.createElement('a');
  btn1.id = 'alertMsg_btn1';
  btn1.href = 'javas' + 'cript:void(0)';
  btn1.innerHTML = '<cite>确定</cite>';
  btn1.style.cssText = 'padding-left:0;padding: 5px 0;margin-right: 0;font-size: 14px; color:#004EFF;float: left;'+((mode === 1)?'width: 50%;':'width: 100%;');
  btn1.onclick = function () {
      document.body.removeChild(alertBox);
      document.body.removeChild(shadowDiv);
      if(callback) {callback();}
      return true;
  };
  alertBox.appendChild(btn1);
  document.body.appendChild(alertBox);
  btn1.click();
  $(alertBox).position({my:"center",at:"center",of:window});
}

function alertMsg(message, mod, callback) { //mode为空，即只有一个确认按钮，mode为1时有确认和取消两个按钮, callback点击确定后的回调
    $('#alertMsg, #shadowDiv').remove();
    let msg = message || '';
    if(typeof msg == "object"){
      let response = msg;
      let errMsg = "";
      if(response.message) errMsg = response.message;
      else if(response.msg) errMsg = response.msg;
      else if(response.info) errMsg = response.info;
      else if(response.data) {
          if(response.data.message) errMsg = response.data.message;
          else if(response.data.msg) errMsg = response.data.msg;
          else if(response.data.info) errMsg = response.data.info;
          //else if(defaultMsg) errMsg = defaultMsg;
      } //else if(defaultMsg) errMsg = defaultMsg;
      msg = errMsg;
    }
    let mode = mod || 0;
    let top = document.body.scrollTop || document.documentElement.scrollTop;
    let isIe = (document.all) ? true : false;
    let isIE6 = isIe && !window.XMLHttpRequest;
    let sTop = document.documentElement.scrollTop || document.body.scrollTop;
    let sLeft = document.documentElement.scrollLeft || document.body.scrollLeft;
    let winSize = function(){
        let xScroll, yScroll, windowWidth, windowHeight, pageWidth, pageHeight;
        // innerHeight获取的是可视窗口的高度，IE不支持此属性
        if (window.innerHeight && window.scrollMaxY) {
            xScroll = document.body.scrollWidth;
            yScroll = window.innerHeight + window.scrollMaxY;
        } else if (document.body.scrollHeight > document.body.offsetHeight) { // all but Explorer Mac
            xScroll = document.body.scrollWidth;
            yScroll = document.body.scrollHeight;
        } else { // Explorer Mac...would also work in Explorer 6 Strict, Mozilla and Safari
            xScroll = document.body.offsetWidth;
            yScroll = document.body.offsetHeight;
        }

        if (self.innerHeight) {    // all except Explorer
            windowWidth = self.innerWidth;
            windowHeight = self.innerHeight;
        } else if (document.documentElement && document.documentElement.clientHeight) { // Explorer 6 Strict Mode
            windowWidth = document.documentElement.clientWidth;
            windowHeight = document.documentElement.clientHeight;
        } else if (document.body) { // other Explorers
            windowWidth = document.body.clientWidth;
            windowHeight = document.body.clientHeight;
        }

        // for small pages with total height less then height of the viewport
        if (yScroll < windowHeight) {
            pageHeight = windowHeight;
        } else {
            pageHeight = yScroll;
        }

        // for small pages with total width less then width of the viewport
        if (xScroll < windowWidth) {
            pageWidth = windowWidth;
        } else {
            pageWidth = xScroll;
        }

        return{
            'pageWidth':pageWidth,
            'pageHeight':pageHeight,
            'windowWidth':windowWidth,
            'windowHeight':windowHeight
        }
    }();
    //resultAlert(winSize.pageWidth);
    //遮罩层
    let styleStr = 'top:0;left:0;position:absolute;z-index:10000;background:#666;width:' + winSize.pageWidth + 'px;height:' +  (winSize.pageHeight + 30) + 'px;';
    styleStr += (isIe) ? "filter:alpha(opacity=80);" : "opacity:0.8;"; //遮罩层DIV
    let shadowDiv = document.createElement('div'); //添加阴影DIV
    shadowDiv.style.cssText = styleStr; //添加样式
    shadowDiv.id = "shadowDiv";
    //如果是IE6则创建IFRAME遮罩SELECT
    if (isIE6) {
        let maskIframe = document.createElement('iframe');
        maskIframe.style.cssText = 'width:' + winSize.pageWidth + 'px;height:' + (winSize.pageHeight + 30) + 'px;position:absolute;visibility:inherit;z-index:-1;filter:alpha(opacity=0);';
        maskIframe.frameborder = 0;
        maskIframe.src = "about:blank";
        shadowDiv.appendChild(maskIframe);
    }
    document.body.insertBefore(shadowDiv, document.body.firstChild); //遮罩层加入文档
    //弹出框
    let styleStr1111 = 'display:block;position:fixed;_position:absolute;left:' + (winSize.windowWidth / 2 - 200) + 'px;top:' + (winSize.windowHeight / 2 - 150) + 'px;_top:' + (winSize.windowHeight / 2 + top - 150)+ 'px;'; //弹出框的位置
    let styleStr1 = 'display:block;position:fixed;_position:absolute;left:0px;top:0px;font-size: 15px;padding: 0; padding-bottom:0; min-width:250px; max-width: '+(winSize.pageWidth-80)+'px'; //弹出框的位置
    let alertBox = document.createElement('div');
    alertBox.id = 'alertMsg';
    alertBox.style.cssText = styleStr1;
    //创建弹出框里面的内容P标签
    let alertMsg_info = document.createElement('P');
    alertMsg_info.id = 'alertMsg_info';
    alertMsg_info.innerHTML = msg;
    alertMsg_info.style.cssText = 'text-align:center;border-bottom: 1px solid #ccc;padding: 12px;font-size: 15px;font-weight: bold; margin-bottom: 0;';
    alertBox.appendChild(alertMsg_info);
    //创建按钮
    let btn1 = document.createElement('a');
    btn1.id = 'alertMsg_btn1';
    btn1.href = 'javas' + 'cript:void(0)';
    btn1.innerHTML = '<cite>确定</cite>';
    btn1.style.cssText = 'padding-left:0;padding: 5px 0;margin-right: 0;font-size: 14px; color:#004EFF;float: left;'+((mode === 1)?'width: 49%;':'width: 100%;');
    btn1.onclick = function () {
        document.body.removeChild(alertBox);
        document.body.removeChild(shadowDiv);
        if(callback) {callback();}
        return true;
    };
    alertBox.appendChild(btn1);
    if (mode === 1) {
        let btn2 = document.createElement('a');
        btn2.id = 'alertMsg_btn2';
        btn2.href = 'javas' + 'cript:void(0)';
        btn2.innerHTML = '<cite>取消</cite>';
        btn2.style.cssText = 'padding-left:0;padding: 5px 0;margin-right: 0;font-size: 14px; color:#004EFF;float: left;width: 49%;border-left: 1px solid #ccc;';
        btn2.onclick = function () {
            document.body.removeChild(alertBox);
            document.body.removeChild(shadowDiv);
            return false;
        };
        alertBox.appendChild(btn2);
    }

    document.body.appendChild(alertBox);

    $(alertBox).position({my:"center",at:"center",of:window});
    let winHeight = $(window).height()/2;
    let resHeight = $(alertBox).height()/2;
    let resTop = winHeight - resHeight;
    let winWidth = $(window).width()/2;
    let resWidth = $(alertBox).width()/2;
    let resLeft = winWidth - resWidth;
    $(alertBox).css({"top":resTop,"left":resLeft});
}

function resultAlert(message,defaultMsg){
  let errMsg = "操作结果返回错误信息！";
  let msg = message || '';
  if(typeof msg == "object"){
    let response = msg;
    if(response.message) errMsg = response.message;
    else if(response.msg) errMsg = response.msg;
    else if(response.info) errMsg = response.info;
    else if(response.data) {
        if(response.data.message) errMsg = response.data.message;
        else if(response.data.msg) errMsg = response.data.msg;
        else if(response.data.info) errMsg = response.data.info;
        else if(defaultMsg) errMsg = defaultMsg;
    } else if(defaultMsg) errMsg = defaultMsg;
    msg = errMsg;
  }
  $("#resultMsg span").html(msg);
  $("#resultMsg").fadeIn().fadeOut(1500);
}

//埋点函数，event_id为埋点ID，具体内容见埋点文档。
function ffanH5Log(event_id){
  wait(1000).done(function(){
    let EventDate = new Date();
    let event_time = EventDate.getFullYear()+"-"+EventDate.getMonth()+"-"+EventDate.getDay()+" "+EventDate.getHours()+":"+EventDate.getMinutes()+":"+EventDate.getSeconds();
    let content = {'app_version':'','os_version':'','appkey':'','device_id':'','event_log':[{'event_id':event_id,'user_id':uid,'event_time': event_time}]};
    content = JSON.stringify(content);
    $.ajax({
      type: "GET",
      url: globalConfig.xapiv+"appstatlog?type=20&content="+content,
      beforeSend: function(xhr){}
    });
  });
}

/**
*删除数组指定下标或指定对象
*/
Array.prototype.remove = function(obj){
  for(let i =0;i <this.length;i++){
    let temp = this[i];
    if(!isNaN(obj)){
      temp=i;
    }
    if(temp == obj){
      for(let j = i;j <this.length;j++){
        this[j]=this[j+1];
      }
      this.length = this.length-1;
    }
  }
}
/**
*数组查重
*/
Array.prototype.unique = function(str)
{
  for(let i = 0; i < this.length; i++)
  {
    if (this.indexOf(str) >= 0) return true;
  }
  return false;
}
/**
*数组查找对象键值
*/
Array.prototype.findObjKey = function(key,value)
{
  for(let i = 0; i < this.length; i++)
  {
    if (this[i][key] == value) return i;
  }
  return "-1";
}

function sendUpgrade(data){
  socket.emit('upgrade',data);
  //socket.send(data);
}

function getMsgsFromLocal(toid,roomtype){
  if(!chatMessages) return [];
  let msgs = [...chatMessages];
  let nmsgs = [];
  for(i=0;i<msgs.length;i++){
    if(msgs[i].roomtype == roomtype){
      if(roomtype == "Personal"){
        if((msgs[i].toid == toid && msgs[i].userid == userid) || (msgs[i].toid == userid && msgs[i].userid == toid)){
          nmsgs.push(msgs[i]);
          msgs[i].readStatus = 2;
        }
      }else{
        if(msgs[i].toid == toid){
          nmsgs.push(msgs[i]);
          msgs[i].readStatus = 2;
        }
      }
    }
  }
  chatMessages = msgs;
  localStorage[userid] = JSON.stringify(chatMessages);
  return nmsgs;
}

function getFromUserGroupMsgs(toid,roomtype){
  if(!toid || !roomtype) return false;
  let roomid = roomtype+toid;
  let i = -1;
  i = userGroupMsgs.findObjKey("roomid",roomid);
  if(i > -1){
    return userGroupMsgs[i];
  }
  return false;
}

function getData(obj){
  socket.emit(obj.url,obj);
}

function touchStart(el){
  $(event.target).fadeOut(100).fadeIn(100);
  $(el).parent().find("td").css({color:"black"});
  $(el).css({color:"forestgreen"});
}

function touchEnd(url,e){
  if(e) e.preventDefault();
  location.href = url;
}

function showUserDetail(url,type){
  // $("#main").show();
  // $("#msgStoreContentDiv,#msgGroupContentDiv,#msgPersonalContentDiv").attr({toid:0}).hide();
  // location.href = url;
}

function playOrderNew(){
  let audio = document.getElementById("orderwav");
  console.log(audio)
  audio.currentTime=0;
  audio.play();
}

function useWhyDidYouUpdate(name, props) {
  const previousProps = React.useRef();

  React.useEffect(() => {
    if (previousProps.current) {
      const allKeys = Object.keys({ ...previousProps.current, ...props });
      const changesObj = {};
      allKeys.forEach(key => {
        if (previousProps.current[key] !== props[key]) {
          changesObj[key] = {
            from: previousProps.current[key],
            to: props[key]
          };
        }
      });

      if (Object.keys(changesObj).length) {
        console.log('[why-did-you-update]', name, changesObj);
      }
    }
    previousProps.current = props;
  });
}

function usePersistFn(fn) {
  const ref = React.useRef(() => {
    throw new Error('Cannot call function while rendering.');
  });
  ref.current = fn;
  return React.useCallback(ref.current, [ref]);
}

function usePrevious(value) {
  const ref = React.useRef();
  React.useEffect(() => {
    ref.current = value;
  });
  return ref.current;
}