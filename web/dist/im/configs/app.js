//  const apiUrl = location.origin+':8001';
const webname = "192.168.0.2";

let gstore;
const webroot = "http://"+webname;
const webUrl = webroot+"/im";
const apiUrl = webroot+':8001';
const Config = { api: apiUrl+"/", module: webUrl+"/" };
const sockUrl = 'ws://'+webname+':3000';
const photoUrl = webroot+':8003/photos';
const thumbUrl = webroot+':8003/thumbs';
const photoApi = webroot+':8004';
const UploadSize = {photoMin:"10000",photoMax:"12000000"}

let app = {};
let Com = {};

let districtdata;
let ldjs = {};
let lm = 1;
let baseUrl = '';
let includeArray = [];
let loadPath = "messages"; //全局路径值
let Routes = {};

let uid,loginToken,appType;
let globalResult=[],globalSearch={},globalProvinces=[],globalGroup=[],globalStore=[],globalScrollTo=0;
let userid,username,usersex,toid,unionid,openid,nickname;
let username1 = '';
let chatObj = {};
let gTime,gMinutes;
let gHash = ''; //全局hash值
let phpsid = null;
let cook = null;
let chatMessages = [];
let userGroupMsgs = [];
let timeOutEvent = 0;
let maxtime = 60;
let timer;
let token = '';
let uptime = '';

let version = 1;
let socket;
let latitude,longitude,latitude_reg,longitude_reg;
let setLocationTime;

let backurl_maintop = '';
let backurl_store = '';
let backurl_group = '';
let backurl_user = '';
let backurl_news = '';
let backurl_product = '';