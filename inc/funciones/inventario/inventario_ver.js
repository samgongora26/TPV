const nombre_text = document.querySelector("#nombre");
const email_text = document.querySelector("#email");
const telefono_text = document.querySelector("#telefono");
const direccion_text = document.querySelector("#direccion");

const formulario = document.querySelector("#formulario");

document.addEventListener("DOMContentLoaded", () => {
  const parametrosURL = new URLSearchParams(window.location.search);
  idCliente = parametrosURL.get("id");
  if (idCliente) {
    obtener_cliente(idCliente);
  }
});
eventListeners();

function eventListeners() {
  document
    .querySelector("#formulario")
    .addEventListener("submit", actualizarCliente);
}

async function obtener_cliente(id) {
  const datos = new FormData();

  datos.append("id", id);
  datos.append("accion", "buscar");

  try {
    direccion = "../../../inc/peticiones/proveedores/funciones.php";
    const peticion = await fetch(direccion, {
      method: "POST",
      body: datos,
    });
    const resultado = await peticion.json();
    console.log(resultado);
    llenar_formulario(resultado);
  } catch (error) {
    console.log(error);
  }
}

function llenar_formulario(cliente) {
  const { nombre, correo, direccion, telefono } = cliente;
  nombre_text.innerHTML = nombre;
  telefono_text.innerHTML = telefono; //asignar los valores del id correspondiente
  email_text.innerHTML = correo;
  direccion_text.innerHTML = direccion;
}