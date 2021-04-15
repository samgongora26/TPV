const folio_text = document.querySelector("#folio");
const estado_text = document.querySelector("#estado");
const nombre_text = document.querySelector("#nombre");
const email_text = document.querySelector("#email");
const telefono_text = document.querySelector("#telefono");
const direccion_text = document.querySelector("#direccion");
const fecha_registro_text = document.querySelector("#fecha_registro");
const rfc_text = document.querySelector("#rfc");
const razon_text = document.querySelector("#razon");
const img_proveedor = document.querySelector("#img_proveedor");

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
  const { folio, nombre, estado, municipio, localidad, direccion, telefono, correo, fecha_registro, rfc, razon_social, fotografia} = cliente;

  folio_text.innerHTML = folio;
  nombre_text.innerHTML = nombre;
  estado_text.innerHTML = estado + ' '+ municipio;
  direccion_text.innerHTML = localidad+ ' '+direccion;
  telefono_text.innerHTML = telefono; //asignar los valores del id correspondiente
  email_text.innerHTML = correo;
  fecha_registro_text.innerHTML = fecha_registro;
  rfc_text.innerHTML = rfc;
  razon_text.innerHTML = razon_social;
  img_proveedor.innerHTML = `
  <div align="center"><img style="border-radius: 50px; color: black;" src="../../imagenes/proveedores/${fotografia}" width="100" height="100" ></div><br></br>
  `;
}