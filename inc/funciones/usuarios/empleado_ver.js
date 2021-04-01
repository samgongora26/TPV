const nombre_text = document.querySelector("#nombre");
const telefono_text = document.querySelector("#telefono");
const email_text = document.querySelector("#email");
const usr = document.querySelector("#usuario");
const foto = document.querySelector("#fotografia");
const est = document.querySelector("#est");


const formulario = document.querySelector("#formulario");

document.addEventListener("DOMContentLoaded", () => {
  const parametrosURL = new URLSearchParams(window.location.search);
  id_empleado = parametrosURL.get("id");
  if (id_empleado) {
    obtener_empleado(id_empleado);
  }
});
eventListeners();

/*function eventListeners() {
  document
    .querySelector("#formulario")
    .addEventListener("submit", actualizar_empleado);
}*/

async function obtener_empleado(id) {
  const datos = new FormData();
  datos.append("id", id);
  datos.append("accion", "buscar_empleado");

  try {
    direccion = "../../../inc/peticiones/usuarios/funciones.php";
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

function llenar_formulario(empleado) {
  const { nombre, telefono, correo, usuario, fotografia, estado } = empleado;
  nombre_text.innerHTML = nombre;
  telefono_text.innerHTML = telefono; //asignar los valores del id correspondiente
  email_text.innerHTML = correo;
  usr.innerHTML = usuario;
  console.log(usuario);
  //agrega el atributo de direccion a la foto 
  foto.setAttribute("src", "../../assets/images/users/" + fotografia);
  //si el estado es activo entonces mostrará 
  if(estado  == 1){
    est.innerHTML = ` <input type="checkbox" class="custom-control-input" id="customCheck4" disabled="" checked="">
                      <label class="custom-control-label" for="customCheck4">Activo</label> `;
  }
}