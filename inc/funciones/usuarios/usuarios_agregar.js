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

    //const db = await resultado.json();

    data.forEach((servicio) => {
      const { id_usuario, nombres, apellidos, telefono, correo, usuario, estado } = servicio;

      const listado_clientes = document.querySelector("#contenido_tabla");
      listado_clientes.innerHTML += `  
        <tr>
            <td scope="row">${id_usuario}</td>
            <td>${nombres}</td>
            <td>${apellidos}</td>
            <td>${telefono}</td>
            <td>${correo}</td>
            <td>${usuario}</td>
            <td>${estado} <i class="fas fa-check-circle"></i></td>
            <td>
                <a href="usuario_editar.php?id="><i class="fas fa-edit"></i> </a>
                <a href="usuario_eliminar.php?id="><i class="fas fa-trash"></i></a>
            </td>
        </tr>
        `;
    });
    //Se vacian los input 
    document.getElementById("nombres").value = ""; 
    document.querySelector("#apellidos").value = "";
    document.querySelector("#telefono").value = "";
    document.querySelector("#correo").value = "";
    document.querySelector("#usuario").value = "";
    document.querySelector("#contrasenia").value = "";

    console.log("respuesta enviada con el metodo async");
    console.log(data);
    alert("Usuario agregado");
  } catch (error) {
    console.log(error);
  }
}

//obtener_datos();
