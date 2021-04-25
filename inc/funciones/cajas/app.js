// ------------SE CARGA AL INICIAR--------
document.addEventListener("DOMContentLoaded", () => {
  mostrarServicios();
});

//FUNCIONES QUE SE DEBEN DE CARGAR AL INICIO
function mostrarServicios(){
  //VALIDACION DE UN LOG ANTERIOR
  verificar_acceso();  
  console.log("se cargo");
}
eventListeners();
function eventListeners() {
  document
    .querySelector("#formulario")
    .addEventListener("submit", obtener_datos);
}
function obtener_datos(e) {
  e.preventDefault();
  const user = document.querySelector("#user").value; 
  const pass = document.querySelector("#pass").value;
  const user_actual = document.querySelector("#user_actual").value;
  const monto = document.querySelector("#monto").value;
  
    console.log(
      user,
      pass,
      user_actual,
      monto
    );
    const datos = new FormData(); //encapsulamiento de los datos para envio
    datos.append("user", user);
    datos.append("pass", pass);
    datos.append("user_actual", user_actual);
    datos.append("monto", monto);
    datos.append("accion", "abrir_caja");

    enviar_async(datos); //enviar a una funcion
}

async function enviar_async(cliente) {
  try {
    const res = await fetch(
      "../../../inc/peticiones/cajas/funciones.php",
      {
        //envio del fetch con los datos a php
        method: "POST",
        body: cliente,
      }
    );
    const data = await res.json();
    console.log(data);
    console.log("acceso "+data.accedio);
    if (data.accedio){
      window.location="tpv.php";
    }
    else{
      const mensajes = document.querySelector("#mensaje2");
        mensajes.innerHTML += `  
          <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>
              <strong>ERROR</strong> Usuario o contraseña incorrecto. Intente con el mismo usuario y contraseña con el que esta en el sistema
          </div>
          `;
    }
  } catch (error) {
    console.log(error);
  }
}

function verificar_acceso() {
    const user_actual = document.querySelector("#user_actual").value;
    const datos = new FormData(); //encapsulamiento de los datos para envio
    datos.append("user_actual", user_actual);
    datos.append("accion", "verificar_caja_abierta");
    respuesta(datos); //enviar a una funcion
}

async function respuesta(log) {
  try {
    const res = await fetch(
      "../../../inc/peticiones/cajas/funciones.php",
      {
        //envio del fetch con los datos a php
        method: "POST",
        body: log,
      }
    );
    const data = await res.json();
    console.log(data);
    console.log("acceso "+data.accedio);
    if (data.caja_abierta){
      window.location="tpv.php";
    }
    else{
      const mensajes = document.querySelector("#mensaje2");
        mensajes.innerHTML += `  
          <div class="alert alert-warning alert-dismissible bg-warning text-white border-0 fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>
              <strong>Debe de abrir la caja.</strong> Ingrese con su usuario y contrasenia
          </div>
          `;
    }
  } catch (error) {
    console.log(error);
  }
}