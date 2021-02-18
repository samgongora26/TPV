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
  const nombre_2 = document.querySelector("#nombre_2").value;
  const apellido_p = document.querySelector("#apellido_p").value;
  const apellido_m = document.querySelector("#apellido_m").value;
  const direccion = document.querySelector("#direccion").value;
  const telefono = document.querySelector("#telefono").value;
  const correo = document.querySelector("#correo").value;

  console.log(
    clave,
    nombre,
    nombre_2,
    apellido_p,
    apellido_m,
    direccion,
    telefono,
    correo
  );

  const datos = new FormData();
  datos.append("folio", clave);
  datos.append("nombre", nombre);
  datos.append("nombre_2", nombre_2);
  datos.append("apellido_p", apellido_p);
  datos.append("apellido_m", apellido_m);
  datos.append("direccion", direccion);
  datos.append("telefono", telefono);
  datos.append("correo", correo);
  datos.append("fecha_registro", "hoy 12 de febrero");
  datos.append("accion", "registrar");

  envio(datos);
}

async function envio(datos) {
  try {
    const res = await fetch("../../../inc/peticiones/clientes/funciones.php", {
      method: "POST",
      body: datos,
    });
    const data = await res.json();
    console.log(data);
    alert("se ha realizado correctamente");
  } catch (error) {
    console.log(error);
  }
}
