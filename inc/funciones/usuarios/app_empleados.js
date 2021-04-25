// ------------SE CARGA AL INICIAR--------
const listado_usuario = document.querySelector("#contenido_tabla");
document.addEventListener("DOMContentLoaded", () => {
  mostrarServicios();
  listado_usuario.addEventListener("click", eliminar_registro);
});

//FUNCIONES QUE SE DEBEN DE CARGAR AL INICIO
function mostrarServicios(){
  //llenado de los select
  select_puestos();
  select_usuarios();
  select_horarios();
  //llenado de la tabla
  mostrar_empleados();
  
}

//---------SELECT DE USUARIOS----------
async function select_usuarios() {
  const datos = new FormData();
  datos.append("accion", "select_usuarios");

  try {
    const URL = "../../../inc/peticiones/usuarios/funciones.php";
    const resultado = await fetch(URL, {
      method: "POST",
      body: datos,
    });
    const db = await resultado.json();

    db.forEach((servicio) => {
      //console.log(servicio);
      const { id_usuario, usuario} = servicio;

      const listado_clientes = document.querySelector("#contenido_usuario");

      listado_clientes.innerHTML += `  
      <option value="${id_usuario}"> ${usuario}</option>
        `;
    });
  } catch (error) {
    console.log(error);
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

//-------LLENADO DE LA TABLA
async function mostrar_empleados() {
  const datos = new FormData();
  datos.append("accion", "mostrar_empleados");

  try {
    const URL = "../../../inc/peticiones/usuarios/funciones.php";
    const resultado = await fetch(URL, {
      method: "POST",
      body: datos,
    });
    const db = await resultado.json();
    db.forEach((servicio) => {
      //console.log(servicio);
      const {id_empleado,fotografia, usuario, nombre_horario, nombre_puesto} = servicio;

      const listado_clientes = document.querySelector("#contenido_tabla");

      listado_clientes.innerHTML += `  
        <tr>
            <td> <img src="../../assets/images/users/${fotografia}" alt="user" class="rounded-circle"
            width="40"> </td>
            <td scope="row">${id_empleado}</td>
            <td scope="row">${usuario}</td>
            <td>${nombre_puesto} </td>  
            <td>${nombre_horario} </td>  
            <td>
                <a type="button" href="empleado.php?id=${id_empleado}" class="btn editar" data-usuario="${id_empleado}"> <i  class="fas fa-edit"></i></a>
                <!--button type="button" class="btn eliminar" data-usuario="${id_empleado}"><i class="fas fa-trash"></i></button-->
            </td>      
        </tr>
        `;
    });
  } catch (error) {
    console.log(error);
  }
}

/*async function eliminar_registro(e) {
  let idEliminar = null;
  if (e.target.classList.contains("eliminar")) {
    idEliminar = Number(e.target.dataset.usuario);
    const confirmar = confirm('Deseas eliminar el puesto: '+idEliminar);
    if(confirmar){
      try {
        console.log(idEliminar);
        const datos = new FormData();
        datos.append("id", idEliminar);
        datos.append("accion", "eliminar_puesto");
  
        const res = await fetch("../../../inc/peticiones/usuarios/funciones.php", {
          method: "POST",
          body: datos,
        });

        //MENSAJE DE EXITO AL ELIMINAR
        const mensajes = document.querySelector("#mensaje2");
        mensajes.innerHTML += `  
          <div class="alert alert-danger alert-dismissible bg-success text-white border-0 fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>
              <strong>El usuario ha sido eliminado exitosamente </strong>
          </div>
          `;
          e.target.parentElement.parentElement.remove();
        
      } catch (error) {
        console.log(error);
      }
    }
  }
}*/

async function editar_puesto(id_necesario){
  var id_necesario;
  const edit_nombres = document.getElementById("edit_nombre"+id_necesario).value; 
  const edit_estado = document.querySelector("#edit_estado"+id_necesario).value;

  try {
    const datos = new FormData();
    datos.append("id", id_necesario);
    datos.append("nombres", edit_nombres);
    datos.append("estado", edit_estado);
    datos.append("accion", "actualizar_puesto");

    const res = await fetch("../../../inc/peticiones/usuarios/funciones.php", {
      method: "POST",
      body: datos,
    });
    const data = await res.json();
    //console.log(data);
    //mesaje de exito
    const mensajes = document.querySelector("#mensaje2");
    mensajes.innerHTML += `  
      <div class="alert alert-danger alert-dismissible bg-success text-white border-0 fade show" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
          </button>
          <strong>El usuario ha sido editado exitosamente </strong>
      </div>
      `;
    //Se vacia el contenido de la tabla
    document.getElementById("contenido_tabla").innerHTML="";
    //se vacian los selects
    document.getElementById("contenido_horario").innerHTML="";
    document.getElementById("contenido_usuario").innerHTML="";
    document.getElementById("contenido_puesto").innerHTML="";
    //Llamada a la funcion para llenar la tabla 
    mostrarServicios(); 

  } catch (error) {
    console.log(error);
  }
}