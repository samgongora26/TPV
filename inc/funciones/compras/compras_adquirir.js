const btn_agregar = document.querySelector("#btn_agregar");
document.addEventListener("DOMContentLoaded", () => {
  btn_agregar.addEventListener("click", obtener_datos);
});

function obtener_datos(e) {
  e.preventDefault();
  //Se obtienen los datos de los input de la interfaz
  //const proveedor = document.getElementById("contenido_proveedores").value; 
  const codigo = document.querySelector("#codigo_envio").value;
  const cantidad = document.querySelector("#cantidad").value;
  const usuario = document.querySelector("#usuario").value;
  
 //Validación de campos vacios
  if(codigo != "" & cantidad != "" & usuario != ""){
  /*console.log(
    proveedor,
    codigo,
    cantidad
  )*/

    if(cantidad <= 0){
      //En caso de que se intente agregar numeros negativos
      //Mensaje de error
      const mensajes = document.querySelector("#mensaje");
      mensajes.innerHTML += `  
        <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <strong>¡ERROR! </strong> La cantidad no puede ser menor o igual a 0
        </div>
        `;
    }
    else{
      //encapsulamiento de los datos para envio
      const datos = new FormData(); 
      //datos.append("proveedor", proveedor);
      datos.append("codigo", codigo);
      datos.append("cantidad", cantidad);
      datos.append("usuario", usuario);
      datos.append("accion", "registrar");

      enviar_async(datos); //enviar a una funcion
    }
  
  }
  else{
    //En caso de que el formulario este vacio
    //Mensaje de Formulario vacio 
    const mensajes = document.querySelector("#mensaje");
      mensajes.innerHTML += `  
        <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <strong>¡ERROR! </strong> Está intentando guardar un registro vacio
        </div>
        `;
  }
}

//Respuesta del servidor
async function enviar_async(cliente) {
  try {
    const res = await fetch(
      "../../../inc/peticiones/compras/funciones.php",
      {
        //envio del fetch con los datos a php
        method: "POST",
        body: cliente,
      }
    );
    const data = await res.json();
    //console.log(data);

    //EN CASO DE QUE NO SE ENCUENTRE EL PROODUCTO
    if(data.mensaje == 1){
      //mesaje de fracaso
      const mensajes = document.querySelector("#mensaje");
      mensajes.innerHTML += `  
        <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <strong>El PRODUCTO NO ESTÁ EN LA BD. REVISAR EL CODIGO O AGREGAR UN NUEVO PRODUCTO DANDO <a href="../inventario/inventario_agregar_producto.php">CLICK AQUI </a></strong>
        </div>
        `;
    }
    //EN CASO DE QUE SE ENCUENTRE EL PRODUCTO
    else{
      /*mesaje de exito
        const mensajes = document.querySelector("#mensaje");
        mensajes.innerHTML += `  
          <div class="alert alert-danger alert-dismissible bg-success text-white border-0 fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>
              <strong>El producto ha sido a gregado a la lista</strong>
          </div>
          `;
      */
      //Se vacia el contenido de la tabla
      document.getElementById("contenido_tabla").innerHTML="";
      //Llamada a la funcion para llenar la tabla 
      mostrarServicios(); 
    }    
  } catch (error) {
    console.log(error);
  }
}

//----------------------OBTENER MONTO. TERMINO DEL PEDIDO--------------
function obtener_monto() {
  //Se obtienen los datos de los input de la interfaz
  const monto = document.querySelector("#monto").value;
  const usuario = document.querySelector("#usuario").value;
  const por_pagar = document.getElementById("por_pagar2").value;
  console.log(
    monto,
    usuario,
    por_pagar
  );
  //Validación de campos vacios
  if(monto != "" ){
    //encapsulamiento de los datos para envio
    const datos1 = new FormData(); 
    //datos.append("proveedor", proveedor);
    datos1.append("total", por_pagar);
    datos1.append("pagado", monto);
    datos1.append("id", usuario);
    datos1.append("accion", "completar_compra");
    
    //SI EL MONTO ES MENOR A LO DEBIDO
    if(monto < por_pagar){
      console.log("monto menor a lo debido");
      //Mensaje de adeudo
      const mensajes = document.querySelector("#mensaje2");
      mensajes.innerHTML += `  
        <div class="alert alert-warning alert-dismissible bg-warning text-white border-0 fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <strong>¡Alerta! </strong> El monto es menor a lo debido, se generará un adeudo.
        </div>
        `;
    }
    
    completar_compra(datos1); //enviar a una funcion
  }
  else if(monto < 0){
    //Mensaje de el monto es menor o igual a 0
    const mensajes = document.querySelector("#mensaje2");
    mensajes.innerHTML += `  
      <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
          </button>
          <strong>¡ERROR! </strong> El monto es menor o igual a 0.
      </div>
      `;
  }
  else{
      //En caso de que el formulario este vacio
      //Mensaje de Formulario vacio 
      const mensajes = document.querySelector("#mensaje2");
        mensajes.innerHTML += `  
          <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>
              <strong>¡ERROR! </strong> Está intentando guardar un registro vacio
          </div>
          `;
  }
}

//Respuesta del servidor
async function completar_compra(compra) {
  try {
    const res = await fetch(
      "../../../inc/peticiones/compras/funciones.php",
      {
        //envio del fetch con los datos a php
        method: "POST",
        body: compra,
      }
    );
    const data = await res.json();
    console.log(data);

    //EN CASO DE QUE NO SE ENCUENTRE EL PROODUCTO
    if(data.pedido != 0 ){
      //mesaje de exito
        const mensajes = document.querySelector("#mensaje2");
        mensajes.innerHTML += `  
          <div class="alert alert-danger alert-dismissible bg-success text-white border-0 fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>
              <strong>La compra ha sido registrado con exito</strong>
          </div>
          `;
      //Se vacia el contenido de la tabla
      document.getElementById("contenido_tabla").innerHTML="";
      //Llamada a la funcion para llenar la tabla 
      mostrarServicios(); 
    }
    else{
     //mesaje de fracaso
      const mensajes = document.querySelector("#mensaje2");
      mensajes.innerHTML += `  
        <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <strong>Error.</strong>
        </div>
        `;
    }    
  } catch (error) {
    console.log(error);
  }
}

//obtener_datos();