const nombre_text = document.querySelector("#nombre");
const telefono_text = document.querySelector("#telefono");
const email_text = document.querySelector("#email");
const usr = document.querySelector("#usuario");
const foto = document.querySelector("#fotografia");
const est = document.querySelector("#est");
const turn = document.querySelector("#turno");
const puest = document.querySelector("#puesto");
const id_empl = document.querySelector("#id_empleado");

const formulario = document.querySelector("#formulario");

document.addEventListener("DOMContentLoaded", () => {
  const parametrosURL = new URLSearchParams(window.location.search);
  id_empleado = parametrosURL.get("id");
  if (id_empleado) {
    id_empl.setAttribute("value", id_empleado);
    obtener_empleado(id_empleado);
    select_puestos();
    select_horarios();
  }
});
eventListeners();

function eventListeners() {
  document
    .querySelector("#formulario")
    .addEventListener("submit", actualizar_empleado);
}

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
    llenar_formulario(resultado);
  } catch (error) {
    console.log(error);
  }
}

function llenar_formulario(empleado) {
  const { nombre, telefono, correo, usuario, fotografia, estado, turno, puesto } = empleado;
  nombre_text.innerHTML = nombre;
  telefono_text.innerHTML = telefono; //asignar los valores del id correspondiente
  email_text.innerHTML = correo;
  usr.innerHTML = usuario;
  puest.innerHTML = puesto;
  turn.innerHTML = turno;
  //agrega el atributo de direccion a la foto 
  foto.setAttribute("src", "../../assets/images/users/" + fotografia);
  //si el estado es activo entonces mostrará 
  if(estado  == 1){
    est.innerHTML = ` <input type="checkbox" class="custom-control-input" id="customCheck4" disabled="" checked="">
                      <label class="custom-control-label" for="customCheck4">Activo</label> `;
  }
}


//----------SELECT DE PUESTOS
async function select_puestos() {
  const datos = new FormData();
  datos.append("accion", "select_puestos");

  try {
    const URL = "../../../inc/peticiones/usuarios/funciones.php";
    const resultado = await fetch(URL, {
      method: "POST",
      body: datos,
    });
    const db = await resultado.json();
    db.forEach((servicio) => {
      //console.log(servicio);
      const { id_puesto, nombre_puesto} = servicio;

      const listado_clientes = document.querySelector("#contenido_puesto");

      listado_clientes.innerHTML += `  
      <option value="${id_puesto}"> ${nombre_puesto}</option>
        `;
    });
  } catch (error) {
    console.log(error);
  }
}

//-------SELECT DE HORARIOS
async function select_horarios() {
  const datos = new FormData();
  datos.append("accion", "select_horarios");

  try {
    const URL = "../../../inc/peticiones/usuarios/funciones.php";
    const resultado = await fetch(URL, {
      method: "POST",
      body: datos,
    });
    const db = await resultado.json();
    db.forEach((servicio) => {
      //console.log(servicio);
      const {id_jornada, nombre_horario} = servicio;

      const listado_clientes = document.querySelector("#contenido_horario");

      listado_clientes.innerHTML += `  
      <option value="${id_jornada}"> ${nombre_horario}</option>
        `;
    });
  } catch (error) {
    console.log(error);
  }
}