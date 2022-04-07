console.log(track.path);
caches.open("likedsongs").then((cache) => {
  cache.add(track.path).then(() => {
    console.log("cached");
  });
});
