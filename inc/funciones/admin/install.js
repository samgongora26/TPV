
navigator.serviceWorker.register("../../../sw.js");
//console.log("entro en instalar");
//document.getElementById('boton_instalar').hidden = false;

var boton_instalar = document.querySelector('#boton_instalar');
let promptEvent = null;

window.addEventListener("beforeinstallprompt", function(e) {
    // log the platforms provided as options in an install prompt
    console.log(e.platforms); // e.g., ["web", "android", "windows"]
    console.log("listo para instalar");
    promptEvent = e;
    document.getElementById('boton_instalar').hidden = false;
  });

boton_instalar.addEventListener("click",(e)=>{
    promptEvent.prompt();
});

