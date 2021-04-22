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
  mostrar_detalle();
  
}

//---------SELECT DE PROVEDORES----------
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

//------LLENADO DE LA TABLA
async function mostrar_detalle() {
  const datos = new FormData();
  const usuario = document.querySelector("#usuario").value;

  datos.append("usuario", usuario);
  datos.append("accion", "mostrar_detalle");

  try {
    const URL = "../../../inc/peticiones/compras/funciones.php";
    const resultado = await fetch(URL, {
      method: "POST",
      body: datos,
    });
    const db = await resultado.json();
    let suma = 0;
    db.forEach((servicio) => {
      //console.log(servicio);
      const { id_producto,nombre_producto, stock, cantidad, precio_compra, importe, id_detalle_pedido,codigo} = servicio;
      suma += parseInt(importe);
      const listado_clientes = document.querySelector("#contenido_tabla");
      
      listado_clientes.innerHTML += `  
        <tr>
            
            <td scope="row">${codigo}</td>
            <td scope="row">${nombre_producto}</td>
            <td scope="row">${stock}</td>
            <td>${cantidad} </td>  
            <td>${precio_compra} </td>  
            <td>${importe} </td>  
            <td>
                <button type="button" class="btn eliminar" data-usuario="${id_detalle_pedido}"><i class="fas fa-trash"></i></button>
            </td>      
        </tr>
        `;
    });

    //imprime el total
    //console.log(suma);
    document.getElementById("por_pagar").value="$" + suma;
    document.getElementById("por_pagar2").value= suma;

  } catch (error) {
    console.log(error);
  }
}

async function eliminar_registro(e) {
  let idEliminar = null;
  if (e.target.classList.contains("eliminar")) {
    idEliminar = Number(e.target.dataset.usuario);
    const confirmar = confirm('¿Deseas remover el producto? ');
    if(confirmar){
      try {
        console.log(idEliminar);
        const datos = new FormData();
        datos.append("id", idEliminar);
        datos.append("accion", "remover_producto");
  
        const res = await fetch("../../../inc/peticiones/compras/funciones.php", {
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

