const version = '1.0.0'
const CACHE = version + '::PWAsite'
const installFilesEssential = []
const installFilesDesirable = []
const offlineURL = '/im/image/365logo.png'

self.addEventListener('install', event => {
  console.log('service worker: install');
  //event.waitUntil(installStaticFiles().then(() => self.skipWaiting()));
});

self.addEventListener('activate', event => {
  console.log('service worker: activate');
  //event.waitUntil(clearOldCaches().then(() => self.clients.claim()));
//  let cacheName = 'a_cache_name'
  //event.waitUntil(promiseChain);
  event.waitUntil(caches.keys()
  .then(keys => {
    keys.forEach(key => {
      if(key !== CACHE){
        //caches.delete(key);
      }
    })
  }));
});

self.addEventListener('notificationclick', event => {
  // let clickedNotification = event.notification;
  // clickedNotification.close();
  // // 执行某些异步操作，等待它完成
  // let promiseChain = doSomething();
  // event.waitUntil(promiseChain);
});

self.addEventListener('fetch', event => {
  if (event.request.method !== 'GET') return;
  let url = event.request.url;
  event.respondWith(
    fetch(event.request).catch(function(err){
    console.log("aaa")
    console.log(err)
    return caches.match(event.request);
    })
//     caches.open(CACHE)
//       .then(cache => {
//         return cache.match(event.request)
//           .then(response => {
//             return fetch(event.request)
//               .then(res => {
//                 if (res.ok) {
//                   cache.put(event.request, res.clone());
//                   if(url.indexOf('index.html') != '-1' || url.indexOf('sw-register.js') != '-1'){
//                     return res
//                   }
//                   console.log('net fetch:' + url)
//                   return res;
//                 } else {
//                   // if (response) {
//                   //   console.log('cache fetch: ' + url);
//                   //   return response;
//                   // }
//                   return Promise.reject('something went wrong!')
//                 }
//               })
//               .catch(function(error){
//                 console.log('error is', error)
//               });
// //            .catch(() => offlineAsset(url));
//           });
//       })
   );
});

let iExt = ['png', 'jpg', 'jpeg', 'gif', 'webp', 'bmp'].map(f => '.' + f);
function isImage(url) {
  return iExt.reduce((ret, ext) => ret || url.endsWith(ext), false);
}

function offlineAsset(url) {
  if(isImage(url)){
    return new Response(
      '<svg role="img" viewBox="0 0 400 300" xmlns="http://www.w3.org/2000/svg"><title>offline</title><path d="M0 0h400v300H0z" fill="#eee" /><text x="200" y="150" text-anchor="middle" dominant-baseline="middle" font-family="sans-serif" font-size="50" fill="#ccc">offline</text></svg>',
      { headers: {
        'Content-Type': 'image/svg+xml',
        'Cache-Control': 'no-store'
      }}
    );
  }else{
    return caches.match(offlineURL);
  }
}

function isClientFocused() {
  return clients.matchAll({
      type: 'window',
      includeUncontrolled: true
  })
  .then(windowClients => {
      let clientIsFocused = false;
      for (let i = 0, max = windowClients.length; i < max; i++) {
          if (windowClients[i].focused) {
              clientIsFocused = true;
              break;
          }
      }
      return {clientIsFocused, windowClients};
  });
}

const promiseChain = isClientFocused()
.then(({clientIsFocused, windowClients}) => {
    if (clientIsFocused) {
        windowClients.forEach(windowClient => {
            // windowClient.postMessage({
            //     message: 'Received a push message123.',
            //     time: new Date().toString()
            // });
        });
    }
    else {
        // return self.registration.showNotification('No focused windows', {
        //   body: 'Had to show a notification instead of messaging each page.'
        // });
    }
});

function clearOldCaches() {
  return caches.keys()
    .then(keylist => {
      console.log(keylist)
      return Promise.all(
        keylist
          .filter(key => key !== CACHE)
          .map(key => caches.delete(key))
      );
    });
}


// caches.open(cacheName)
// .then(function(cache){
//   console.log(caches)
// })
// .then(function(cache){
//   return self.clients.matchAll()
//           .then(function(clients){
//             if(clients && clients.length){
//               clients.forEach(function(client){
//                 client.postMessage('sw.update')
//               })
//             }
//           });
// })

function installStaticFiles() {
  let res = caches.open(CACHE).then(cache => {
    cache.addAll(installFilesDesirable);
    let cs = cache.addAll(installFilesEssential);
    return cs;
  });
  return res;  
}