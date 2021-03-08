eventListeners();
function eventListeners() {
  document.querySelector("#formulario").addEventListener("submit", obtener_datos);
  document.querySelector("#formulario").addEventListener("reset", limpia);
}
function obtener_datos(e) {
  e.preventDefault();

  //fecha
  const fecha = new Date();
  const año = fecha.getFullYear();
  const mes = fecha.getMonth();
  const dia = fecha.getDay();
  const formato_fecha = `${año}-${mes}-${dia}`;

  const clave = document.querySelector("#clave").value;
  const nombre = document.querySelector("#nombre").value;
  const razon_social = document.querySelector("#razon_social").value;
  const direccion = document.querySelector("#direccion").value;
  const telefono = document.querySelector("#telefono").value;
  const rfc = document.querySelector("#rfc").value;
  const correo = document.querySelector("#correo").value;
  const estado = document.querySelector("#estado").value;
  const ciudad = document.querySelector("#ciudad").value;
  const datelle = document.querySelector("#detalle").value;
  //si recibe correctamente todos los datos
  /*console.log(clave,nombre,razon_social,direccion,telefono,rfc,
    correo,pais,estado,ciudad,datelle);*/

  const datos = new FormData(); //encapsulamiento de los datos para envio
  datos.append("folio", clave);
  datos.append("nombre", nombre);
  datos.append("email", correo);
  datos.append("estado", estado);
  datos.append("ciudad", ciudad);
  datos.append("direccion", direccion);
  datos.append("telefono", telefono);
  datos.append("rfc", rfc);
  datos.append("razon_social", razon_social);
  datos.append("fecha_registro", formato_fecha);
  datos.append("accion", "registrar");

  enviar_async(datos); //enviar a una funcion
}

async function enviar_async(cliente) {
  try {
    const res = await fetch(
      "../../../inc/peticiones/proveedores/funciones.php",
      {
        //envio del fetch con los datos a php
        method: "POST",
        body: cliente,
      }
    );
    const data = await res.json();
alert("correcto, datos ingresados");
    console.log(data);
    limpiar();
  } catch (error) {
    console.log(error);
  }
}


function limpia(e){
  e.preventDefault();
 clave = document.querySelector("#clave").value = "";
 nombre = document.querySelector("#nombre").value = "";
 razon_social = document.querySelector("#razon_social").value = "";
 direccion = document.querySelector("#direccion").value = "";
 telefono = document.querySelector("#telefono").value = "";
 rfc = document.querySelector("#rfc").value = "";
 correo = document.querySelector("#correo").value = "";
 estado = document.querySelector("#estado").value = "";
 ciudad = document.querySelector("#ciudad").value = "";
 datelle = document.querySelector("#detalle").value = "";
}

function limpiar(){
  clave = document.querySelector("#clave").value = "";
  nombre = document.querySelector("#nombre").value = "";
  razon_social = document.querySelector("#razon_social").value = "";
  direccion = document.querySelector("#direccion").value = "";
  telefono = document.querySelector("#telefono").value = "";
  rfc = document.querySelector("#rfc").value = "";
  correo = document.querySelector("#correo").value = "";
  estado = document.querySelector("#estado").value = "";
  ciudad = document.querySelector("#ciudad").value = "";
  datelle = document.querySelector("#detalle").value = "";
}
