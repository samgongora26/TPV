eventListeners();
function eventListeners() {
  document
    .querySelector("#formulario")
    .addEventListener("submit", obtener_datos);
}
function obtener_datos(e) {
  e.preventDefault();
  const nombre = document.getElementById("contenido_usuario").value; 
  const puesto = document.getElementById("contenido_puesto").value; 
  const horario = document.getElementById("contenido_horario").value; 

    console.log(
      nombre,
      puesto,
      horario
    );

    //Validación de campos vacios
    if(nombre != "" & puesto != "" & horario != ""){

    const datos = new FormData(); //encapsulamiento de los datos para envio
    datos.append("nombre", nombre);
    datos.append("puesto", puesto);
    datos.append("horario", horario);
    datos.append("accion", "registrarEmpleado");

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
            <strong>¡ERROR! </strong> Estás intentando guardar un registro vacio
        </div>
        `;
  }
}

async function enviar_async(empleado) {
  try {
    const res = await fetch(
      "../../../inc/peticiones/usuarios/funciones.php",
      {
        //envio del fetch con los datos a php
        method: "POST",
        body: empleado,
      }
    );
    const data = await res.json();
    console.log(data);
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
    //se vacian los selects
    document.getElementById("contenido_horario").innerHTML="";
    document.getElementById("contenido_usuario").innerHTML="";
    document.getElementById("contenido_puesto").innerHTML="";
      //Llamada a la funcion para llenar la tabla 
      mostrarServicios(); 
      
     
  } catch (error) {
    console.log(error);
  }
}


