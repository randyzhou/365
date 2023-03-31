if(('serviceWorker' in navigator) && ('PushManager' in window)){
  function registerServiceWorker() {
    return navigator.serviceWorker.register('/service-worker.js?v=201905211805')
    .then(registration => {
        console.log('Service worker successfully registered.');
        return registration;
    })
    .catch(err => {
        console.error('Unable to register service worker.', err);
    });
  }
  
  function execute() {
    registerServiceWorker().then(registration => {
      // registration.showNotification('Simple Title', {
      //   body: 'Simple piece of body text.\nSecond line of body text :)'
      // });
    });
  }
  
  let promiseChain = new Promise((resolve, reject) => {
      const permissionPromise = Notification.requestPermission(result => {
          resolve(result);
      });

      if (permissionPromise) {
          permissionPromise.then(resolve);
      }
  })
  .then(result => {
      if (result === 'granted') {
          execute();
      }
      else {
          console.log('no permission');
      }
  });

  navigator.serviceWorker.addEventListener('message', event => {
    if(e.data && e.data == 'sw.update'){
      //window.location.reload()
    }
    console.log('Received a message from service worker: ', event.data);
  });  
}