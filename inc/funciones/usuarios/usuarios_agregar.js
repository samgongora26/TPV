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

  //si recibe correctamente todos los datos
  /*console.log(clave,nombre,razon_social,direccion,telefono,rfc,
    correo,pais,estado,ciudad,datelle);*/

    console.log(
      nombres,
      apellidos,
      telefono,
      correo,
      usuario,
      contrasenia
    );
  

  const datos = new FormData(); //encapsulamiento de los datos para envio
  datos.append("nombres", nombres);
  datos.append("apellidos", apellidos);
  datos.append("telefono", telefono);
  datos.append("correo", correo);
  datos.append("usuario", usuario);
  datos.append("contrasenia", contrasenia);
  datos.append("accion", "registrar");

  enviar_async(datos); //enviar a una funcion
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
    const data = await res.json(); //esperando la respeta de res y guardarlo en una variable

    console.log("respuesta enviada con el metodo async");
    console.log(data);
    alert("Usuario agregado");
  } catch (error) {
    console.log(error);
  }
}

//obtener_datos();
