// Ver https://developer.mozilla.org/es/docs/Web/API/NavigatorOnLine/onLine
if(!navigator.onLine) {
    // el navegador está desconectado de la red
    //alert("sin conexion");
    window.location="../../../src/plantillas/pages/offline.php";
}