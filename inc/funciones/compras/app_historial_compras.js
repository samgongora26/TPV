// ------------SE CARGA AL INICIAR--------
const listado_usuario = document.querySelector("#contenido_tabla");
document.addEventListener("DOMContentLoaded", () => {
  mostrarServicios();
  listado_usuario.addEventListener("click", eliminar_registro);
});

//FUNCIONES QUE SE DEBEN DE CARGAR AL INICIO
function mostrarServicios(){

  //llenado de la tabla
  compras_hoy();
  compras_ayer() ;
  
}


//------LLENADO DE LA TABLA COMPRAS DE HOY
async function compras_hoy() {
  const datos = new FormData();
  datos.append("accion", "compras_hoy");

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
      console.log(servicio);
      const {id_pedido,usuario,fecha, total, pagado , estado } = servicio;
      
      let debido = total-pagado;
      if (debido < 0){
        debido = 0;
      }
      const listado_pedidos = document.querySelector("#contenido_tabla");  

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
              <a type="button" href="compras_ver.php?id=${id_pedido}" class="btn btn-sm  btn-secondary">Ver</a>
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
              <button type="button" class="btn btn-warning btn-sm "> Pagar </button>
            </td>
           
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
async function compras_ayer() {
  const datos = new FormData();
  datos.append("accion", "compras_ayer");

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
      console.log(servicio);
      const {id_pedido,usuario,fecha, total, pagado , estado } = servicio;
      
      let debido = total-pagado;
      if (debido < 0){
        debido = 0;
      }
      const listado_pedidos = document.querySelector("#contenido_ayer");  

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
              <button type="button" class="btn btn-warning btn-sm "> Pagar </button>
            </td>
           
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
async function compras_dia_especifico() {
  const datos = new FormData();
  //Se obtiene el valor del dia
  const dia = document.getElementById("#dia").value;
  if(dia != 0){

  }
  datos.append("accion", "compras_ayer");
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
      console.log(servicio);
      const {id_pedido,usuario,fecha, total, pagado , estado } = servicio;
      
      let debido = total-pagado;
      if (debido < 0){
        debido = 0;
      }
      const listado_pedidos = document.querySelector("#contenido_ayer");  

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
              <button type="button" class="btn btn-warning btn-sm "> Pagar </button>
            </td>
           
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

