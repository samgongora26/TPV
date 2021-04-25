const listado_clientes = document.querySelector("#contenido_tabla");
const modal = document.querySelector("#form-modal-edit");
const btn_buscar = document.querySelector("#buscar");
let id_necesario = 0;

document.addEventListener("DOMContentLoaded", () => {
  //esperar a que cargue el contenido
  mostrarServicios(); //funcion inicial
  listado_clientes.addEventListener("click", eliminar_registro);
  listado_clientes.addEventListener("click", obtener_datos_unitarios);
  modal.addEventListener("submit", editar_registro);
  btn_buscar.addEventListener("click", busqueda_especifica);
});

async function peticion(datos) {
  //funcion de envio de datos a php
  try {
    const res = await fetch("../../../inc/peticiones/clientes/funciones.php", {
      method: "POST",
      body: datos,
    });
    const data = await res.json();
    return data;
  } catch (error) {
    console.log(error);
  }
}

async function mostrarServicios() {
  const datos = new FormData();
  datos.append("accion", "mostrar");
  peticion(datos).then((res) => {
    console.log(res);
    res.forEach((servicio) => {
      // console.log(servicio);
      const { id, clave, nombre, telefono, direccion } = servicio;
      if(nombre == "Cliente general"){
        listado_clientes.innerHTML += `  
        <tr id="ver_registro_${id}">
              <th scope="row">${id}</th>
              <td> ${clave}</td>
              <td>${nombre}</td>
              <td>${direccion}</td>
              <td>${telefono}</td>
              <td>
                <i> Este cliente no puede ser modificado </i>
              </td>
          </tr>
          `;
      }
      else{
        listado_clientes.innerHTML += `  
      <tr id="ver_registro_${id}">
              <th scope="row">${id}</th>
              <td> ${clave}</td>
              <td>${nombre}</td>
              <td>${direccion}</td>
              <td>${telefono}</td>
              <td>
              <button type="button" class="btn " data-toggle="modal"
              data-target="#edit-modal"> <i data-cliente="${id}" class="fas fa-edit editar"></i></button>
              </td>
              <td><i data-cliente="${id}" class="fas fa-trash eliminar"></i></td>
          </tr>
          `;  
      }
      
    });
  });
}

function eliminar_registro(e) {
  let idEliminar = null;
  if (e.target.classList.contains("eliminar")) {
    idEliminar = Number(e.target.dataset.cliente);
    const confirmar = confirm("Deseas eliminar este cliente?");
    if (confirmar) {
      const datos = new FormData();
      datos.append("id", idEliminar);
      datos.append("accion", "eliminar");
      const mensajes = document.querySelector("#mensaje");
      peticion(datos).then((res) =>
        e.target.parentElement.parentElement.remove()
      );
      mensajes.innerHTML += `  
          <div class="alert alert-success alert-dismissible bg-warning text-white border-0 fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>
              <strong>El cliente ha sido eliminado correctamente </strong>
          </div>
          `;
    }
  }
}

function obtener_datos_unitarios(e) {
  let idEliminar = null;
  if (e.target.classList.contains("editar")) {
    idEliminar = Number(e.target.dataset.cliente);
    id_necesario = idEliminar;
    console.log("obtener los datos a editar");
    console.log(id_necesario);
    const datos = new FormData();
    datos.append("id", id_necesario);
    datos.append("accion", "buscar");
    peticion(datos).then((res) => {
      console.log(res);
      const edit_clave = (document.querySelector("#edit_clave").value =
        res.codigo);
      const edit_nombre = (document.querySelector("#edit_nombre").value =
        res.nombres);
      const edit_direccion = (document.querySelector("#edit_direccion").value =
        res.direccion);
      const edit_telefono = (document.querySelector("#edit_telefono").value =
        res.telefono);
        
    });
  }
}

function editar_registro(e) {
  e.preventDefault();
  const edit_clave = document.querySelector("#edit_clave").value;
  const edit_nombre = document.querySelector("#edit_nombre").value;
  const edit_direccion = document.querySelector("#edit_direccion").value;
  const edit_telefono = document.querySelector("#edit_telefono").value;

  const datos = new FormData();
  datos.append("id", id_necesario);
  datos.append("clave", edit_clave);
  datos.append("nombre", edit_nombre);
  datos.append("direccion", edit_direccion);
  datos.append("telefono", edit_telefono);
  datos.append("accion", "actualizar");

  peticion(datos).then((res) => {
    console.log(res);
    const registro_contenido = document.querySelector(
      `#ver_registro_${id_necesario}`
    );

    const { id, clave, nombre, direccion, telefono } = res;
    registro_contenido.innerHTML = `
    <th scope="row">${id}</th>
    <td>${clave}</td>
    <td>${nombre}</td>  
    <td>${direccion}</td>
    <td>${telefono}</td>
    <td>
    <button type="button" class="btn" data-toggle="modal"
    data-target="#edit-modal"> <i data-cliente="${id}" class="fas fa-edit editar"></i></button>
    </td>
    <td><i data-cliente="${id}" class="fas fa-trash eliminar"></i></td>
    `;
    const mensajes = document.querySelector("#mensaje");
    mensajes.innerHTML += `  
          <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>
              <strong>El cliente ha sido editado correctamente </strong>
          </div>
          `;
  });
}

function busqueda_especifica(e) {
  listado_clientes.innerHTML = "";
  e.preventDefault();
  const texto_buscar = document.querySelector("#valor_busqueda").value;

  const datos = new FormData();
  datos.append("nombre", texto_buscar);
  datos.append("accion", "busqueda_filtro");

  peticion(datos).then((res) => {
    res.forEach((datos) => {
      console.log(datos);
      const { id, codigo, nombre, direccion, telefono } = datos;

      const listado_clientes = document.querySelector("#contenido_tabla");

      listado_clientes.innerHTML += `  
    <tr id="ver_registro_${id}">
            <th scope="row">${id}</th>
            <td> ${codigo}</td>
            <td>${nombre}</td>
            <td>${direccion}</td>
            <td>${telefono}</td>
            <td>
            <button type="button" class="btn btn-primary" data-toggle="modal"
            data-target="#edit-modal"> <i data-cliente="${id}" class="icon-pencil editar"></i></button>
            </td>
            <td><i data-cliente="${id}" class="fas fa-trash eliminar"></i></td>
        </tr>
        `;
    });
    const mensajes = document.querySelector("#mensaje");
    mensajes.innerHTML += `  
          <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>
              <strong>Esto es lo que he encontrado </strong>
          </div>
          `;
  });
}
