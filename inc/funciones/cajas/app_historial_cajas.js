// ------------SE CARGA AL INICIAR--------
const listado_usuario = document.querySelector("#contenido_tabla");
document.addEventListener("DOMContentLoaded", () => {
  mostrarServicios();
  listado_usuario.addEventListener("click", eliminar_registro);
});

//FUNCIONES QUE SE DEBEN DE CARGAR AL INICIO
function mostrarServicios(){

  //llenado de la tabla
  cajas_hoy();
  cajas_ayer() ;
}


//------LLENADO DE LA TABLA COMPRAS DE HOY
async function cajas_hoy() {
  const datos = new FormData();
  datos.append("accion", "cajas_hoy");

  try {
    const URL = "../../../inc/peticiones/cajas/funciones.php";
    const resultado = await fetch(URL, {
      method: "POST",
      body: datos,
    });
    const db = await resultado.json();
    //console.log(db);
    let suma = 0;
    db.forEach((servicio) => {
      //console.log(servicio);
      const {id_caja,usuario,fecha_y_hora_abertura, fecha_y_hora_cierre, monto_inicial, monto_final , monto_final_ventas, corte } = servicio;
      
      const listado_pedidos = document.querySelector("#contenido_tabla");  

      if(corte == 1){
        listado_pedidos.innerHTML += `  
        <tr>
            <td>${usuario}</td>
            <td>${fecha_y_hora_abertura}</td>
            <td>$ ${monto_inicial}</td>
            <td>$ ${fecha_y_hora_cierre}</td>
            <td>$ ${monto_final}</td>
            <td>$ ${monto_final_ventas}</td>
            <td><div class="badge badge-success text-wrap">Caja cerrada</div></td>
        </tr>
        `
      }
      else if(corte == 0){ 
        listado_pedidos.innerHTML += `  
        <tr>
            <td>${usuario}</td>
            <td>${fecha_y_hora_abertura}</td>
            <td>$ ${monto_inicial}</td>
            <td>$ ${fecha_y_hora_cierre}</td>
            <td>$ ${monto_final}</td>
            <td>$ ${monto_final_ventas}</td>
            <td><div class="badge badge-danger text-wrap">Caja abierta</div></td>
        </tr>
        `
      }
    });

    //imprime el total
    //console.log(suma);

  } catch (error) {
    console.log(error);
  }
}

//------LLENADO DE LA TABLA COMPRAS DE HOY
async function cajas_ayer() {
  const datos = new FormData();
  datos.append("accion", "cajas_ayer");

  try {
    const URL = "../../../inc/peticiones/cajas/funciones.php";
    const resultado = await fetch(URL, {
      method: "POST",
      body: datos,
    });
    const db = await resultado.json();
    //console.log(db);
    let suma = 0;
    db.forEach((servicio) => {
      //console.log(servicio);
      const {id_caja,usuario,fecha_y_hora_abertura, fecha_y_hora_cierre, monto_inicial, monto_final , monto_final_ventas, corte } = servicio;
      const listado_pedidos = document.querySelector("#contenido_ayer");  

      if(corte == 1){
        listado_pedidos.innerHTML += `  
        <tr>
            <td>${usuario}</td>
            <td>${fecha_y_hora_abertura}</td>
            <td>$ ${monto_inicial}</td>
            <td>$ ${fecha_y_hora_cierre}</td>
            <td>$ ${monto_final}</td>
            <td>$ ${monto_final_ventas}</td>
            <td><div class="badge badge-success text-wrap">Caja cerrada</div></td>
        </tr>
        `
      }
      else if(corte == 0){ 
        listado_pedidos.innerHTML += `  
        <tr>
            <td>${usuario}</td>
            <td>${fecha_y_hora_abertura}</td>
            <td>$ ${monto_inicial}</td>
            <td>$ ${fecha_y_hora_cierre}</td>
            <td>$ ${monto_final}</td>
            <td>$ ${monto_final_ventas}</td>
            <td><div class="badge badge-danger text-wrap">Caja abierta</div></td>
        </tr>
        `
      }
    });

    //imprime el total
    //console.log(suma);

  } catch (error) {
    console.log(error);
  }
}

//------LLENADO DE LA TABLA COMPRAS DE FECHA ELEGIDA
async function cajas_dia_especifico() {
  const datos = new FormData();
  //Se obtiene el valor del dia
  const fecha = document.querySelector("#fecha_elegida").value;
  console.log("fecha "+fecha);
  if(fecha != 0){
    datos.append("fecha", fecha);
    datos.append("accion", "buscar_fecha");
    try {
      const URL = "../../../inc/peticiones/cajas/funciones.php";
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
        const {id_caja,usuario,fecha_y_hora_abertura, fecha_y_hora_cierre, monto_inicial, monto_final , monto_final_ventas, corte } = servicio;
        
        if(corte == 1){
          listado_pedidos.innerHTML += `  
          <tr>
              <td>${usuario}</td>
              <td>${fecha_y_hora_abertura}</td>
              <td>$ ${monto_inicial}</td>
              <td>$ ${fecha_y_hora_cierre}</td>
              <td>$ ${monto_final}</td>
              <td>$ ${monto_final_ventas}</td>
              <td><div class="badge badge-success text-wrap">Caja cerrada</div></td>
          </tr>
          `
        }
        else if(corte == 0){ 
          listado_pedidos.innerHTML += `  
          <tr>
              <td>${usuario}</td>
              <td>${fecha_y_hora_abertura}</td>
              <td>$ ${monto_inicial}</td>
              <td>$ ${fecha_y_hora_cierre}</td>
              <td>$ ${monto_final}</td>
              <td>$ ${monto_final_ventas}</td>
              <td><div class="badge badge-danger text-wrap">Caja abierta</div></td>
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
    const mensajes = document.querySelector("#mensaje2");
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

//------LLENADO DE LA TABLA COMPRAS DE HOY
async function compras_debidas() {
  const datos = new FormData();
  datos.append("accion", "compras_debidas");

  try {
    const URL = "../../../inc/peticiones/compras/funciones.php";
    const resultado = await fetch(URL, {
      method: "POST",
      body: datos,
    });
    const db = await resultado.json();
    //console.log(db);
    let suma = 0;
    db.forEach((servicio) => {
      //console.log(servicio);
      const {id_pedido,usuario,fecha, total, pagado , estado } = servicio;
      
      let debido = total-pagado;
      if (debido < 0){
        debido = 0;
      }
      const listado_pedidos = document.querySelector("#contenido_debido");  
      suma += debido;
      if(estado == 1){
        listado_pedidos.innerHTML += `  
        <tr>
            <td>${id_pedido}</td>
            <td>${usuario}</td>
            <td>${fecha}</td>
            <td>$ ${total}</td>
            <td>$ ${pagado}</td>
            <td>$ ${debido}</td>
            <td><div class="badge badge-success text-wrap">Pagado</div></td>
            <td>
              <a type="button" href="compras_ver.php?id=${id_pedido}" class="btn btn-sm btn-secondary">Ver</a>
            </td>
        </tr>
        `
      }
      else if(estado == 2){ 
        listado_pedidos.innerHTML += `  
        <tr>
            <td>${id_pedido}</td>
            <td>${usuario}</td>
            <td>${fecha}</td>
            <td>$ ${total}</td>
            <td>$ ${pagado}</td>
            <td>$ ${debido}</td>
            <td><div class="badge badge-danger text-wrap">Pago no completado</div></td>
            <td>
              <a type="button" href="compras_ver.php?id=${id_pedido}" class="btn btn-sm  btn-secondary">Ver</a>
              <a type="button" href="compras_pagar.php?id=${id_pedido}" class="btn btn-sm  btn-warning">Pagar</a>
            </td>
           
        </tr>
        `
      }
    });

    //imprime el total
    //console.log(suma); 
    document.getElementById("debido_total").innerHTML=suma;

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

