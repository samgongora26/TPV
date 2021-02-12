eventListeners();
function eventListeners() {
  document
    .querySelector("#formulario")
    .addEventListener("submit", obtener_datos);
}
function obtener_datos(e) {
  e.preventDefault();
  const clave = document.querySelector("#clave").value;
  const nombre = document.querySelector("#nombre").value;
  const razon_social = document.querySelector("#razon_social").value;
  const direccion = document.querySelector("#direccion").value;
  const telefono = document.querySelector("#telefono").value;
  const rfc = document.querySelector("#rfc").value;
  const correo = document.querySelector("#correo").value;
  const pais = document.querySelector("#pais").value;
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
  datos.append("ciudad", ciudad);
  datos.append("direccion", direccion);
  datos.append("telefono", telefono);
  datos.append("rfc", rfc);
  datos.append("fecha_registro", "hoy 12 de febrero");
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
    const data = await res.json(); //esperando la respeta de res y guardarlo en una variable

    console.log("respuesta eenviada con el metodo async");
    console.log(data);
  } catch (error) {
    console.log(error);
  }
}

//obtener_datos();
