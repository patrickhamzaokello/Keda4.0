(function () {

    var lastclear = localStorage.getItem('lastclear'),
        time_now  = (new Date()).getTime();
  
    // .getTime() returns milliseconds so 1000 * 60 * 60 * 24 = 24 days
    if ((time_now - lastclear) > 1000 * 60 * 60 * 24) {
  
      localStorage.clear();
  
      localStorage.setItem('lastclear', time_now);
    }
  
  })();