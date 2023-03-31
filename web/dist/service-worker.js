const CACHE = '365'

self.addEventListener('install', event => {
  console.log('service worker: install');
  event.waitUntil(
    caches.open(CACHE).then(function(cache) {
      return cache.addAll([
        '/im/js/antd-mobile/dist/antd-mobile.min.css',
        '/im/js/base/socket.io.min.js',
        '/im/js/base/jquery-2.min.js',
        '/im/js/base/react.production.min.js',
        '/im/js/base/react-dom.production.min.js',
        '/im/js/antd-mobile/dist/antd-mobile.min.js'
      ]);
    })
  );
});

self.addEventListener('activate', event => {
  console.log('service worker: activate');
});

self.addEventListener('fetch', event => {
  event.respondWith(  
    caches.open(CACHE)
    .then(cache => {
        
      return cache.match(event.request)
              .then(response => {
                if(response && response.ok){
                  return caches.match(event.request)
                }
                //return fetch(event.request).catch(function(error){}) 
                return fetch(event.request)
                .then(res=>{
                  if(res.ok){
                    //cache.put(event.request, res.clone());
                    return res;
                  }else{
                    return Promise.reject("wrong!")
                  }
                })
                .catch(function(error){
                  console.log('error is', error)
                  //return caches.match(event.request);
                })
              })
    })    
  )
})