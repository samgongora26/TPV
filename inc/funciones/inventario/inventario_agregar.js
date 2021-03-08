eventListeners();
function eventListeners() {
  document
    .querySelector("#formulario")
    .addEventListener("submit", obtener_datos);
}
function obtener_datos(e) {
  e.preventDefault();
  //const imagen = document.querySelector("#imagen").value;
  const nombre = document.querySelector("#nombre").value;
  const codigobarras = document.querySelector("#codigobarras").value;
  const precio = document.querySelector("#precio").value;
  const descripcion = document.querySelector("#descripcion").value;
  //const form_tipo_producto = document.querySelector("#form_tipo_producto").value;
  //const form_categoria = document.querySelector("#form_categoria").value;
  //const form_proveedor = document.querySelector("#form_proveedor").value;
  //const form_unidad = document.querySelector("#form_unidad").value;
  //const caducidad = document.querySelector("#caducidad").value;
  //const form_estado = document.querySelector("#form_estado").value;

  //si recibe correctamente todos los datos
  console.log(nombre,codigobarras,precio,descripcion);

  const datos = new FormData(); //encapsulamiento de los datos para envio
  datos.append("nombre", nombre);
  datos.append("codigobarras", codigobarras);
  datos.append("precio", precio);
  datos.append("descripcion", descripcion);
  //datos.append("unidad", form_unidad);
  //datos.append("fecha_caducidad", caducidad);
  datos.append("accion", "registrar");

  enviar_async(datos); //enviar a una funcion
}

async function enviar_async(cliente) {
  try {
    const res = await fetch(
      "../../../inc/peticiones/inventario/funciones.php",
      {
        //envio del fetch con los datos a php
        method: "POST",
        body: cliente,
      }
    );
    const data = await res.json(); //esperando la respeta de res y guardarlo en una variable

    console.log("respuesta enviada con el metodo async");
    console.log(data);
  } catch (error) {
    console.log(error);
  }
}

//obtener_datos();
