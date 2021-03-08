  
async function mostrarServicios() {
  const datos = new FormData();
  datos.append("accion", "puestosLista");

  try {
    const URL = "../../../inc/peticiones/usuarios/funciones.php";
    const resultado = await fetch(URL, {
      method: "POST",
      body: datos,
    });
    const db = await resultado.json();

    db.forEach((servicio) => {
      //console.log(servicio);
      const { id_puesto, nombre_puesto, estado} = servicio;

      const listado_clientes = document.querySelector("#contenido_tabla");

     
      listado_clientes.innerHTML += `  
      <tr>
          <td scope="row">${id_puesto}</td>
          <td scope="row">${nombre_puesto}</td>
          <td>${estado} <i class="fas fa-check-circle"></i></td>  
          <td>
              <button type="button" class="btn editar" data-usuario="${id_puesto}" data-toggle="modal" data-target="#edit-modal${id_puesto}"> <i  class="fas fa-edit"></i></button>
              <button type="button" class="btn eliminar" data-usuario="${id_puesto}"><i class="fas fa-trash"></i></button>
          </td>      
      </tr>

      <!-- Modal editar -->
                          <div id="edit-modal${id_puesto}" class="modal fade" tabindex="${id_puesto}" role="dialog"
                              aria-hidden="true">
                              <div class="modal-dialog">
                                  <div class="modal-content">
                                      <h4 class="mt-3 mx-auto"> Editar usuario <strong>${nombre_puesto}</strong> </h4>
                                      
                                      <div class="modal-body">
                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                                          <form class="pl-3 pr-3" action="#" id="form-modal-edit" name="for-modal-edit">
                                            
                                            <p>ID: ${id_puesto}</p>
                                            <label>Nombres</label>
                                            <input id="edit_nombre${id_puesto}" type="text" value="${nombre_puesto}" placeholder="Ingresa nombre(s) del usuario" minlength="2" class="form-control" required="">
                                            <label>Estado</label>
                                            <input id="edit_estado${id_puesto}" type="text" value="${estado}"  placeholder="Contraseña" class="form-control" required="">
                                            <div class="text-right mt-3">
                                                <button type="submit" onclick="editar_puesto(${id_puesto})" class="btn btn-success" data-dismiss="modal" aria-hidden="true">Guardar</button>
                                                <button type="reset" class="btn btn-dark" data-dismiss="modal" aria-hidden="true"> Cancelar</button>
                                            </div>

                                          </form>

                                      </div>
                                  </div><!-- /.modal-content -->
                              </div><!-- /.modal-dialog -->
                          </div>
                          <!-- Fin modal editar -->
                        
        `;
    });
  } catch (error) {
    console.log(error);
  }
}

const listado_usuario = document.querySelector("#contenido_tabla");
document.addEventListener("DOMContentLoaded", () => {
  mostrarServicios();
  listado_usuario.addEventListener("click", eliminar_registro);
});

async function eliminar_registro(e) {
  let idEliminar = null;
  if (e.target.classList.contains("eliminar")) {
    idEliminar = Number(e.target.dataset.usuario);
    const confirmar = confirm('Deseas eliminar al usuario: '+idEliminar);
    if(confirmar){
      try {
        console.log(idEliminar);
        const datos = new FormData();
        datos.append("id", idEliminar);
        datos.append("accion", "eliminar");
  
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
    //Llamada a la funcion para llenar la tabla 
    mostrarServicios(); 
  } catch (error) {
    console.log(error);
  }
}