eventListeners();
function eventListeners() {
  document
    .querySelector("#formulario")
    .addEventListener("submit", obtener_datos);
}
function obtener_datos(e) {
  e.preventDefault();
  const puesto = document.getElementById("contenido_puesto").value; 
  const horario = document.getElementById("contenido_horario").value; 
  const id = document.getElementById("id_empleado").value; 

    console.log(
      id,
      puesto,
      horario
    );

    //Validación de campos vacios
    if(puesto != "" & horario != ""){

    const datos = new FormData(); //encapsulamiento de los datos para envio
    
    datos.append("id", id);
    datos.append("puesto", puesto);
    datos.append("horario", horario);
    datos.append("accion", "actualizar_empleado");

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
              <strong>El empleado ha sido actualizaso exitosamente </strong>
          </div>
          `;
    const id = document.getElementById("id_empleado").value; 
    obtener_empleado(id);
      
     
  } catch (error) {
    console.log(error);
  }
}


