eventListeners();
function eventListeners() {
  document
    .querySelector("#formulario")
    .addEventListener("submit", obtener_datos);
}
function obtener_datos(e) {
  e.preventDefault();
  //Se obtienen los datos de los input de la interfaz
  //const proveedor = document.getElementById("contenido_proveedores").value; 
  const codigo = document.querySelector("#codigo").value;
  const cantidad = document.querySelector("#cantidad").value;
  const usuario = document.querySelector("#usuario").value;
  
 //Validación de campos vacios
 if(codigo != "" & cantidad != "" & usuario != ""){
  /*console.log(
    proveedor,
    codigo,
    cantidad
  )*/
  //encapsulamiento de los datos para envio
  const datos = new FormData(); 
  //datos.append("proveedor", proveedor);
  datos.append("codigo", codigo);
  datos.append("cantidad", cantidad);
  datos.append("usuario", usuario);
  datos.append("accion", "registrar");

  enviar_async(datos); //enviar a una funcion
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
    console.log(data);

    //EN CASO DE QUE NO SE ENCUENTRE EL PROODUCTO
    if(data.mensaje == 1){
      //alert("usuario repetido")
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
    else{
      //mesaje de exito
        const mensajes = document.querySelector("#mensaje");
        mensajes.innerHTML += `  
          <div class="alert alert-danger alert-dismissible bg-success text-white border-0 fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>
              <strong>El producto ha sido a gregado a la lista</strong>
          </div>
          `;
      //Se vacia el contenido de la tabla
      document.getElementById("contenido_tabla").innerHTML="";
      //Llamada a la funcion para llenar la tabla 
      mostrarServicios(); 
      
    }    
  } catch (error) {
    console.log(error);
  }
}

eventListeners();
function eventListeners() {
  document
    .querySelector("#formulario2")
    .addEventListener("submit", obtener_datos);
}

function obtener_monto(e) {
  e.preventDefault();
  //Se obtienen los datos de los input de la interfaz
  const monto = document.querySelector("#monto").value;
  const usuario = document.querySelector("#usuario").value;

 //Validación de campos vacios
 if(monto != "" ){

  //encapsulamiento de los datos para envio
  const datos = new FormData(); 
  //datos.append("proveedor", proveedor);
  datos.append("monto", monto);
  datos.append("usuario", usuario);
  datos.append("accion", "completar_compra");

  completar_compra(datos); //enviar a una funcion
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
async function completar_compra(cliente) {
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
    console.log(data);

    //EN CASO DE QUE NO SE ENCUENTRE EL PROODUCTO
    if(data.mensaje == 1){
      //alert("usuario repetido")
      //mesaje de fracaso
      const mensajes = document.querySelector("#mensaje");
      mensajes.innerHTML += `  
        <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <strong>Error.</strong>
        </div>
        `;
    }
    else{
      //mesaje de exito
        const mensajes = document.querySelector("#mensaje");
        mensajes.innerHTML += `  
          <div class="alert alert-danger alert-dismissible bg-success text-white border-0 fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>
              <strong>El producto ha sido a gregado a la lista</strong>
          </div>
          `;
      //Se vacia el contenido de la tabla
      document.getElementById("contenido_tabla").innerHTML="";
      //Llamada a la funcion para llenar la tabla 
      mostrarServicios(); 
      
    }    
  } catch (error) {
    console.log(error);
  }
}

//obtener_datos();