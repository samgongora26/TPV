/*eventListeners();
function eventListeners() {
  document
    .querySelector("#formulario")
    .addEventListener("submit", obtener_datos);
}
function obtener_datos(e) {
  e.preventDefault();
  const nombre = document.getElementById("nombre").value;
  const nombre = document.getElementById("nombre").value; 

  
  //Validación de campos vacios
  if(nombre != ""){
    console.log(
      nombre
    );
    const datos = new FormData(); //encapsulamiento de los datos para envio
    datos.append("nombre", nombre);
    datos.append("accion", "registraPuesto");

    enviar_async(datos); //enviar a una funcion
  }
  else{
    //Mensaje de Formulario vacio 
    const mensajes = document.querySelector("#mensaje");
      mensajes.innerHTML += `  
        <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <strong>Error - </strong> ¡ERROR! EL FORMULARIO ESTÁ VACIO
        </div>
        `;
  }
}

async function enviar_async(puesto) {
  try {
    const res = await fetch(
      "../../../inc/peticiones/usuarios/funciones.php",
      {
        //envio del fetch con los datos a php
        method: "POST",
        body: puesto,
      }
    );
    const data = await res.json();
    console.log(data);
    console.log(data.repetido);
    if(data.repetido){
      //alert("usuario repetido")
      //mesaje de fracaso
      const mensajes = document.querySelector("#mensaje");
      mensajes.innerHTML += `  
        <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <strong>El usuario ya existe en la bd </strong>
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
              <strong>El usuario ha sido agregado exitosamente </strong>
          </div>
          `;
      //Se vacia el contenido de la tabla
      document.getElementById("contenido_tabla").innerHTML="";
      //Llamada a la funcion para llenar la tabla 
      mostrarServicios(); 
      //Se vacian los input 
      document.getElementById("nombre").value = ""; 
    }    
  } catch (error) {
    console.log(error);
  }
}


*/