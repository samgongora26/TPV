/*eventListeners();
function eventListeners() {
  document
    .querySelector("#formulario")
    .addEventListener("submit", obtener_datos);
}
function obtener_datos(e) {
  e.preventDefault();
  const proveedor = document.getElementById("proveedor").value; 
  const codigo = document.querySelector("#codigo").value;
  const cantidad = document.querySelector("#razon_social").value;
  const monto = document.querySelector("#monto").value;

  //si recibe correctamente todos los datos
  /*console.log(clave,nombre,razon_social,direccion,telefono,rfc,
    correo,pais,estado,ciudad,datelle);

  const datos = new FormData(); //encapsulamiento de los datos para envio
  datos.append("proveedor", proveedor);
  datos.append("codigo", codigo);
  datos.append("cantidad", cantidad);
  datos.append("monto", monto);
  datos.append("accion", "registrar");

  enviar_async(datos); //enviar a una funcion
}

async function enviar_async(cliente) {
  try {
    const res = await fetch(
      "../../../inc/peticiones/compras/funciones.php",
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
*/
//obtener_datos();