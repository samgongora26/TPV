// ------------SE CARGA AL INICIAR--------
const listado_usuario = document.querySelector("#contenido_tabla");
document.addEventListener("DOMContentLoaded", () => {
  mostrarServicios();
  listado_usuario.addEventListener("click", eliminar_registro);
});

//FUNCIONES QUE SE DEBEN DE CARGAR AL INICIO
function mostrarServicios(){
  //llenado de los select
  select_proveedores();

  //llenado de la tabla
  //mostrar_empleados();
  
}

//---------SELECT DE USUARIOS----------
async function select_proveedores() {
  const datos = new FormData();
  const usuario = document.querySelector("#usuario").value;

  datos.append("usuario", usuario);
  datos.append("accion", "select_proveedores");

  try {
    const URL = "../../../inc/peticiones/compras/funciones.php";
    const resultado = await fetch(URL, {
      method: "POST",
      body: datos,
    });
    const db = await resultado.json();

    db.forEach((servicio) => {
      //console.log(servicio);
      const { id_proveedor, nombre} = servicio;

      const select_p = document.querySelector("#contenido_proveedores");
      select_p.innerHTML += `  
      <option value="${id_proveedor}"> ${nombre}</option>
        `;
    });
  } catch (error) {
    console.log(error);
  }
}

//------LLENADO DE LA TABLA
async function mostrar_detalle() {
  const datos = new FormData();
  datos.append("accion", "mostrar_detalle");

  try {
    const URL = "../../../inc/peticiones/compras/funciones.php";
    const resultado = await fetch(URL, {
      method: "POST",
      body: datos,
    });
    const db = await resultado.json();
    db.forEach((servicio) => {
      //console.log(servicio);
      const {id_producto, producto,stock, cantidad, precio_venta, importe, fotografia,total} = servicio;

      const listado_clientes = document.querySelector("#contenido_tabla");
      listado_clientes.innerHTML += `  
        <tr>
            <td> <img src="../../assets/images/users/${fotografia}" alt="user" class="rounded-circle"
            width="40"> </td>
            <td scope="row">${id_producto}</td>
            <td scope="row">${producto}</td>
            <td scope="row">${stock}</td>
            <td>${cantidad} </td>  
            <td>${precio_venta} </td>  
            <td>${importe} </td>  
            <td>
                <button type="button" class="btn editar" data-usuario="${id_empleado}" data-toggle="modal" data-target="#edit-modal${id_empleado}"> <i  class="fas fa-edit"></i></button>
                <button type="button" class="btn eliminar" data-usuario="${id_empleado}"><i class="fas fa-trash"></i></button>
            </td>      
        </tr>
        `;
    });
  } catch (error) {
    console.log(error);
  }
}

async function eliminar_registro(e) {
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
}

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