const btn_agregar = document.querySelector("#btn_agregar");
document.addEventListener("DOMContentLoaded", () => {
  btn_agregar.addEventListener("click", obtener_datos);
});

function obtener_datos(e) {
  e.preventDefault();
  //Se obtienen los datos de los input de la interfaz
  //const proveedor = document.getElementById("contenido_proveedores").value; 
  const codigo = document.querySelector("#codigo").value;
  const promocion = document.querySelector("#promociones").value;
  
 //Validación de campos vacios
  if(codigo != "" ){
  console.log(
    promocion,
    codigo
  )
      //encapsulamiento de los datos para envio
      const datos = new FormData(); 
      //datos.append("proveedor", proveedor);
      datos.append("codigo", codigo);
      datos.append("promocion", promocion);
      datos.append("accion", "registrar_promocion");

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
      "../../../inc/peticiones/promociones/funciones.php",
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
      //mesaje de exito
        const mensajes = document.querySelector("#mensaje");
        mensajes.innerHTML += `  
          <div class="alert alert-danger alert-dismissible bg-success text-white border-0 fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>
              <strong>Promoción guardada</strong>
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
