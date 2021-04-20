self.addEventListener("fetch", function (ev){
    ev.respondWith(fetch(ev.request));
}); 