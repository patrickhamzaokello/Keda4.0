function addToCache() {
    caches.open('myCache').then((cache) => {
        cache.add('https://d1k24pix9cv4di.cloudfront.net/assets/music/Kwijikwiji.mp3').then(() => {
            console.log('cached');
        });
    });
  }