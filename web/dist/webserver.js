const express = require('express');
const app = express();
const Config = require('./configs/config.js');
app.use('/', express.static('./'));

const server = app.listen(80, function () { 
  let host = server.address().address
  let port = server.address().port
  console.log(Config);
  console.log("应用实例，访问地址为 http://%s:%s", host, port)
})