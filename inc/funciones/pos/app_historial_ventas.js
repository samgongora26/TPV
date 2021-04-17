// ------------SE CARGA AL INICIAR--------
const listado_usuario = document.querySelector("#contenido_tabla");
document.addEventListener("DOMContentLoaded", () => {
  mostrarServicios();
  listado_usuario.addEventListener("click", eliminar_registro);
});

//FUNCIONES QUE SE DEBEN DE CARGAR AL INICIO
function mostrarServicios(){

  //llenado de la tabla
}

//------LLENADO DE LA TABLA VENTAS DE FECHA ELEGIDA
async function venta_fecha_especifico() {
  const datos = new FormData();
  //Se obtiene el valor del dia
  const fecha = document.querySelector("#fecha_elegida").value;
  console.log("fecha "+fecha);
  if(fecha != 0){
    datos.append("fecha", fecha);
    datos.append("accion", "buscar_fecha");
    try {
      const URL = "../../../inc/peticiones/pos/funciones.php";
      const resultado = await fetch(URL, {
        method: "POST",
        body: datos,
      });
      const db = await resultado.json();
      let mensaje =db.length;
      console.log(mensaje);
      
      const listado_pedidos = document.querySelector("#contenido_fecha");  
      listado_pedidos.innerHTML = "";
      if (mensaje >= 1){
        db.forEach((servicio) => {
        console.log(servicio);
        const {id_venta,cliente,usuario, importe,estado,corte ,fecha, hora } = servicio;
        
        if(corte == 1){
          listado_pedidos.innerHTML += `  
          <tr>
              <td>${id_venta}</td>
              <td>${usuario}</td>
              <td>${cliente}</td>
              <td>${hora}</td>
              <td>$ ${importe}</td>
              <td><div class="badge badge-success text-wrap">Caja cerrada</div></td>
              <td>
                <a type="button" href="ventas_ver.php?id=${id_venta}" class="btn btn-sm btn-secondary">Ver</a>
              </td>
          </tr>
          `
        }
        else if(corte == 0){ 
          listado_pedidos.innerHTML += `  
          <tr>
            <td>${id_venta}</td>
            <td>${usuario}</td>
            <td>${cliente}</td>
            <td>${hora}</td>
            <td>$ ${importe}</td>
              <td><div class="badge badge-danger text-wrap">Caja abierta</div></td>
              <td>
                <a type="button" href="ventas_ver.php?id=${id_venta}" class="btn btn-sm btn-secondary">Ver</a>
              </td>
          </tr>
          `
        }
        });
      }
      else{
        const mensajes = document.querySelector("#mensaje");
    mensajes.innerHTML += `  
      <div class="alert alert-danger alert-dismissible bg-warning text-white border-0 fade show" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
          </button>
          <strong>¡ALERTA! </strong> No existen registros en la fecha seleccionada.
      </div>
      `;
      }
      
      //imprime el total
      //console.log(suma);
    } catch (error) {
      console.log(error);
    }
  }
  else{
    //Mensaje de alerta
    const mensajes = document.querySelector("#mensaje");
    mensajes.innerHTML += `  
      <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
          </button>
          <strong>¡ERROR! </strong> No ha seleccionado una fecha.
      </div>
      `;
  }
  
}

//------LLENADO DE LA TABLA VENTAS DE FOLIO ELEGIDA
async function venta_folio_especifico() {
  const datos = new FormData();
  //Se obtiene el valor del dia
  const folio = document.querySelector("#codigo_elegido").value;
  console.log("folio "+folio);
  if(folio != 0){
    datos.append("folio", folio);
    datos.append("accion", "buscar_folio");
    try {
      const URL = "../../../inc/peticiones/pos/funciones.php";
      const resultado = await fetch(URL, {
        method: "POST",
        body: datos,
      });
      const db = await resultado.json();
      let mensaje =db.length;
      console.log(mensaje);
      
      const listado_pedidos = document.querySelector("#contenido_folio");  
      listado_pedidos.innerHTML = "";
      if (mensaje >= 1){
        db.forEach((servicio) => {
        console.log(servicio);
        const {id_venta,cliente,usuario, importe,estado,corte ,fecha, hora } = servicio;
        
        if(corte == 1){
          listado_pedidos.innerHTML += `  
          <tr>
              <td>${id_venta}</td>
              <td>${usuario}</td>
              <td>${cliente}</td>
              <td>${hora}</td>
              <td>$ ${importe}</td>
              <td><div class="badge badge-success text-wrap">Caja cerrada</div></td>
              <td>
                <a type="button" href="ventas_ver.php?id=${id_venta}" class="btn btn-sm btn-secondary">Ver</a>
              </td>
          </tr>
          `
        }
        else if(corte == 0){ 
          listado_pedidos.innerHTML += `  
          <tr>
            <td>${id_venta}</td>
            <td>${usuario}</td>
            <td>${cliente}</td>
            <td>${hora}</td>
            <td>$ ${importe}</td>
              <td><div class="badge badge-danger text-wrap">Caja abierta</div></td>
              <td>
                <a type="button" href="ventas_ver.php?id=${id_venta}" class="btn btn-sm btn-secondary">Ver</a>
              </td>
          </tr>
          `
        }
        });
      }
      else{
        const mensajes = document.querySelector("#mensaje2");
    mensajes.innerHTML += `  
      <div class="alert alert-danger alert-dismissible bg-warning text-white border-0 fade show" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
          </button>
          <strong>¡ALERTA! </strong> No existen registros de el folio seleccionado.
      </div>
      `;
      }
      
      //imprime el total
      //console.log(suma);
    } catch (error) {
      console.log(error);
    }
  }
  else{
    //Mensaje de alerta
    const mensajes = document.querySelector("#mensaje2");
    mensajes.innerHTML += `  
      <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
          </button>
          <strong>¡ERROR! </strong> No ha seleccionado un folio.
      </div>
      `;
  }
  
}
