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
  const direccion = document.querySelector("#direccion").value;
  const ciudad = document.querySelector("#ciudad").value;
  const colonia = document.querySelector("#colonia").value;
  const telefono = document.querySelector("#telefono").value;
  const correo = document.querySelector("#correo").value;
  const fecha = new Date();
  const año = fecha.getFullYear();
  const mes = fecha.getMonth();
  const dia = fecha.getDay();
  const formato_fecha = `${año}-${mes}-${dia}`; //checar la fecha, se envia diferente dia

  const datos = new FormData();
  datos.append("folio", clave);
  datos.append("nombre", nombre);
  datos.append("direccion", direccion);
  datos.append("ciudad", ciudad);
  datos.append("colonia", colonia);
  datos.append("telefono", telefono);
  datos.append("correo", correo);
  datos.append("fecha_registro", formato_fecha);
  datos.append("accion", "registrar");

  envio(datos);
  limpiar();
}

async function envio(datos) {
  try {
    const res = await fetch("../../../inc/peticiones/clientes/funciones.php", {
      method: "POST",
      body: datos,
    });
    const data = await res.json();
    //console.log(data);
    alert("se ha realizado correctamente");

  } catch (error) {
    alert("problemas al enviar los datos, vuelva a intentarlo");
    console.log(error);
  }
}

function limpiar() {
  document.querySelector("#clave").value = "";
  document.querySelector("#nombre").value = "";
  document.querySelector("#direccion").value = "";
  document.querySelector("#ciudad").value = "";
  document.querySelector("#colonia").value = "";
  document.querySelector("#telefono").value = "";
  document.querySelector("#correo").value = "";
}
