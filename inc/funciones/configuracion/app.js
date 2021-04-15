const listado1 = document.querySelector("#contenidoconfig");
const modal = document.querySelector("#form-modal-edit");

let id_necesario = 0;

document.addEventListener("DOMContentLoaded", () => {
  mostrarTabla1();
  modal.addEventListener("submit", editar_registro);
  listado_productos.addEventListener("click", obtener_datos_unitarios);
});



async function llamado(datos) {
  try {
    const res = await fetch(
      "../../../inc/peticiones/configuracion/funciones.php",
      {
        method: "POST",
        body: datos,
      }
    );
    const data = await res.json();
    return data;
  } catch (error) {
    console.log(error);
  }
}

function mostrarTabla1() {
  const datos = new FormData();
  datos.append("accion", "busqueda");

  llamado(datos).then((res) => {
    res.forEach((datos) => {
      console.log(datos);
      const {id, direccion, razon, nombre, telefono, email} = datos;

      const listado1 = document.querySelector("#contenidoconfig");

      listado1.innerHTML += `  
        <!--<div align="center"><img style="border-radius: 50px; color: black;" src="../../imagenes/proveedores/logosabritas.jpg" width="100" height="100" ></div><br>-->
        <div class="row" >
            <div class="col-md-5">
                <h3>Razón Social: ${razon} </h3>
            </div>
            <div class="col-md-5">
                <h3>Nombre Fiscal: ${nombre} </h3>
            </div>
            <div class="col-md-5">
                <h3>Telefono de contacto: ${telefono}</h3>
            </div>
            <div class="col-md-5">
                <h3>E-mail: ${email}</h3>
            </div>
            <div class="col-md-5">
                <h3>Dirección: ${direccion}</h3>
            </div>
        </div>
        <br>
        <div class="row">
            
            <div class="col-md-5">
              <button type="button" class="btn btn-primary editar" data-toggle="modal"
              data-target="#edit-modal">Editar Informacion de la Empresa <i data-cliente="${id}" class="fas fa-edit editar"></i></button>
            </div>
        </div>
        `;
    });
  });
}

function obtener_datos_unitarios(e) {
  //let idEliminar = null;
  if (e.target.classList.contains("editar")) {
    console.log("Entro a editar");
    /*idEliminar = Number(e.target.dataset.cliente);
    id_necesario = idEliminar;
    console.log(id_necesario);*/
    const datos = new FormData();
    //datos.append("id", id_necesario);
    datos.append("accion", "busqueda");
    llamado(datos).then((res) => {
      console.log(res);
      const edit_razon = (document.querySelector("#edit_razon").value =
        res.razon_social);
      const edit_nombre = (document.querySelector("#edit_nombre").value =
        res.nombre_fiscal);
      const edit_telefono = (document.querySelector("#edit_telefono").value =
        res.telefonok);
      const edit_email = (document.querySelector("#edit_email").value = 
      res.email);
      const edit_direccion = (document.querySelector("#edit_direccion").value =
        res.direccion);
    });
  }
}


 function editar_registro(e) {
  e.preventDefault();
  console.log("Haaaaaaaaaaaa");
  const edit_razon = document.querySelector("#edit_razon").value;
  const edit_nombre = document.querySelector("#edit_nombre").value;
  const edit_telefono = document.querySelector("#edit_telefono").value;
  const edit_email = document.querySelector("#edit_email").value;
  const edit_direccion = document.querySelector("#edit_direccion").value;

  const datos = new FormData();
  datos.append("id", id_necesario);
  datos.append("razon", edit_razon);
  datos.append("nombre", edit_nombre);
  datos.append("telefono", edit_telefono);
  datos.append("email", edit_email);
  datos.append("direccion", edit_direccion);
  datos.append("accion", "actualizar");

  /*const peticion = await llamado(datos);
  console.log(peticion);
  alert("los datos se han cambiado correctamente");*/

  llamado(datos).then((res) => {
    console.log(res);
    const registro_contenido = document.querySelector("#contendoconfig");

    const {nombre, razon, telefono, direccion} = res;
    registro_contenido.innerHTML = `
      <!--<div align="center"><img style="border-radius: 50px; color: black;" src="../../imagenes/proveedores/logosabritas.jpg" width="100" height="100" ></div><br>-->
      <div class="row" >
          <div class="col-md-5">
              <h3>Razón Social: ${razon} </h3>
          </div>
          <div class="col-md-5">
              <h3>Nombre Fiscal: ${nombre} </h3>
          </div>
          <div class="col-md-5">
              <h3>Telefono de contacto: ${telefono}</h3>
          </div>
          <div class="col-md-5">
              <h3>E-mail: ${email}</h3>
          </div>
          <div class="col-md-5">
              <h3>Dirección: ${direccion}</h3>
          </div>
      </div>
      <br>
      <div class="row">
          
          <div class="col-md-5">
            <button type="button" class="btn btn-primary editar" data-toggle="modal"
            data-target="#edit-modal">Editar Informacion de la Empresa <i data-cliente="${id}" class="fas fa-edit editar"></i></button>
          </div>
      </div>
    `;
    // console.log(registro_contenido);
  });
}
