eventListeners();
function eventListeners() {
  document
    .querySelector("#formulario")
    .addEventListener("submit", obtener_datos);
}
function obtener_datos(e) {
  e.preventDefault();
  const nombres = document.getElementById("nombres").value; 
  const apellidos = document.querySelector("#apellidos").value;
  const telefono = document.querySelector("#telefono").value;
  const correo = document.querySelector("#correo").value;
  const usuario = document.querySelector("#usuario").value;
  const contrasenia = document.querySelector("#contrasenia").value;
  const fotografia = document.querySelector("#fotografia").value;
  
  //Validación de campos vacios
  if(nombres != "" & apellidos != "" & telefono != "" & correo != "" & usuario != "" & contrasenia != "" & fotografia != ""){
    console.log(
      nombres,
      apellidos,
      telefono,
      correo,
      usuario,
      contrasenia,
      fotografia
    );
    const datos = new FormData(); //encapsulamiento de los datos para envio
    datos.append("nombres", nombres);
    datos.append("apellidos", apellidos);
    datos.append("telefono", telefono);
    datos.append("correo", correo);
    datos.append("usuario", usuario);
    datos.append("contrasenia", contrasenia);
    datos.append("fotografia", fotografia);
    datos.append("accion", "registrar");

    enviar_async(datos); //enviar a una funcion
  }
  else{
    //alert("Formulario vacio");
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

async function enviar_async(cliente) {
  try {
    const res = await fetch(
      "../../../inc/peticiones/usuarios/funciones.php",
      {
        //envio del fetch con los datos a php
        method: "POST",
        body: cliente,
      }
    );
    const data = await res.json();
    console.log(data);
    //console.log(data.repetido);
    if(data.repetido){
      alert("usuario repetido")
      //mesaje de exito
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
      document.getElementById("nombres").value = ""; 
      document.querySelector("#apellidos").value = "";
      document.querySelector("#telefono").value = "";
      document.querySelector("#correo").value = "";
      document.querySelector("#usuario").value = "";
      document.querySelector("#contrasenia").value = "";
    }    
  } catch (error) {
    console.log(error);
  }
}