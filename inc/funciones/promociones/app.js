// ------------SE CARGA AL INICIAR--------
const listado_usuario = document.querySelector("#contenido_tabla");
document.addEventListener("DOMContentLoaded", () => {
  mostrarServicios();
  listado_usuario.addEventListener("click", eliminar_registro);
});

//FUNCIONES QUE SE DEBEN DE CARGAR AL INICIO
function mostrarServicios(){
  //llenado de los select
  //select_proveedores();
  //llenado de la tabla
  mostrar_promociones();
  
}

/*---------SELECT DE PROVEDORES----------
async function select_proveedores() {
  const datos = new FormData();
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
*/

//------LLENADO DE LA TABLA
async function mostrar_promociones() {
  const datos = new FormData();
  
  datos.append("accion", "mostrar_promociones");

  try {
    const URL = "../../../inc/peticiones/promociones/funciones.php";
    const resultado = await fetch(URL, {
      method: "POST",
      body: datos,
    });
    const db = await resultado.json();
    db.forEach((servicio) => {
      //console.log(servicio);
      const {id_producto,nombre_producto,codigo, promocion_porcentaje} = servicio;
      const listado_clientes = document.querySelector("#contenido_tabla");
      listado_clientes.innerHTML += `  
        <tr>
            
            <td scope="row">${nombre_producto}</td>
            <td scope="row">${codigo}</td>
            <td>%${promocion_porcentaje} </td>  
            <td>
                <!--button type="button" class="btn btn-sm" data-toggle="modal" data-target="#modal_editar${id_producto}"><i class="icon-pencil"></i></button-->
                <button type="button" class="btn  btn-sm" ><i class="fas fa-trash eliminar" data-usuario="${id_producto}"></i></button>

            </td>      
        </tr>

        <!--MODAL EDITAR -->
        <div id="modal_editar${id_producto}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Modal Heading</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="form-group mb-4">
                        <label class="mr-sm-2" for="inlineFormCustomSelect">Tipo de Promocion</label>
                          <select class="custom-select mr-sm-2" id="promociones_editar${id_producto}">
                                <option selected value="5">5%</option>
                                <option value="10">10%</option>
                                <option value="15">15%</option>
                                <option value="20">20%</option>
                                <option value="30">30%</option>
                                <option value="40">40%</option>
                                <option value="50">50%</option>   
                            </select><p></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-success">Guardar cambios</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
</div>
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
    const confirmar = confirm('¿Deseas eliminar la promoción? ');
    if(confirmar){
      try {
        console.log(idEliminar);
        const datos = new FormData();
        datos.append("id", idEliminar);
        datos.append("accion", "remover_promocion");
  
        const res = await fetch("../../../inc/peticiones/promociones/funciones.php", {
          method: "POST",
          body: datos,
        });

        //MENSAJE DE EXITO AL ELIMINAR
        const mensajes = document.querySelector("#mensaje2");
        mensajes.innerHTML += `  
          <div class="alert alert-warning alert-dismissible bg-warning text-white border-0 fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>
              <strong>El producto ha sido removido</strong>
          </div>
          `;
          //e.target.parentElement.parentElement.remove();
          document.getElementById("contenido_tabla").innerHTML="";
          mostrarServicios();
        
      } catch (error) {
        console.log(error);
      }
    }
  }
}

