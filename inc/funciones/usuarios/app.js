async function mostrarServicios() {
  const datos = new FormData();
  datos.append("accion", "mostrar");

  try {
    const URL = "../../../inc/peticiones/usuarios/funciones.php";
    const resultado = await fetch(URL, {
      method: "POST",
      body: datos,
    });
    const db = await resultado.json();

    db.forEach((servicio) => {
      //console.log(servicio);
      const { id_usuario, nombres, apellidos, telefono, correo, usuario, contrasenia, estado } = servicio;

      const listado_clientes = document.querySelector("#contenido_tabla");

     
      listado_clientes.innerHTML += `  
      <tr>
          <td scope="row">${id_usuario}</td>
          <td>${nombres}</td>
          <td>${apellidos}</td>
          <td>${telefono}</td>
          <td>${correo}</td>
          <td>${usuario}</td>
          <td>${estado} <i class="fas fa-check-circle"></i></td>
          <td>
              <button type="button" class="btn " data-toggle="modal" data-target="#edit-modal${id_usuario}"> <i data-usuario="${id_usuario}" class="fas fa-edit"></i></button>
              <button type="button" class="btn"><i class="fas fa-trash eliminar" data-usuario="${id_usuario}"></i></button>
          </td>
      </tr>
                        <!-- Modal editar -->
                          <div id="edit-modal${id_usuario}" class="modal fade" tabindex="${id_usuario}" role="dialog"
                              aria-hidden="true">
                              <div class="modal-dialog">
                                  <div class="modal-content">
                                      <h4 class="mt-3 mx-auto"> Editar usuario <strong>${nombres} ${apellidos}</strong> </h4>
                                      <div class="modal-body">
                                          <form class="pl-3 pr-3" action="#" id="form-modal-edit" name="for-modal-edit">
                                            
                                            <p>ID: ${id_usuario}</p>
                                            <label>Nombres</label>
                                            <input id="nombres${id_usuario}" type="text" value="${nombres}" placeholder="Ingresa nombre(s) del usuario" minlength="2" class="form-control" required="">
                                            <label>apellidos</label>
                                            <input id="apellidos${id_usuario}" type="text" value="${apellidos}"  placeholder="Ingresa apellidos del usuario" minlength="2" class="form-control" required="">
                                            <label>Telefono</label>
                                            <input id="telefono${id_usuario}" type="text" value="${telefono}"  placeholder="Ingresa numero de telefono de usuario" minlength="10"  maxlength="12"  class="form-control" required="">
                                            <label>Correo</label>
                                            <input id="correo${id_usuario}" type="email" value="${correo}"  placeholder="Ingresa correo del cliente" minlength="5" class="form-control" required="">
                                            <label>Usuario</label>
                                            <input id="usuario${id_usuario}" type="text" value="${usuario}"  placeholder="Usuario" minlength="5" class="form-control" required="">
                                            <label>Contraseña</label>
                                            <input id="contrasenia${id_usuario}" type="password" value="${contrasenia}"  placeholder="Contraseña" minlength="5" class="form-control" required="">
                                            <label>Estado</label>
                                            <input id="contrasenia${id_usuario}" type="text" value="${estado}"  placeholder="Contraseña" minlength="5" class="form-control" required="">
                                            <div class="text-right mt-3">
                                                <button type="submit" class="btn btn-success">Guardar</button>
                                                <button type="reset" class="btn btn-dark"> Cancelar</button>
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
        //Se vacia el contenido de la tabla
        document.getElementById("contenido_tabla").innerHTML="";
        //Llamada a la funcion para llenar la tabla 
        mostrarServicios(); 
        
      } catch (error) {
        console.log(error);
      }
    }
  }
}
