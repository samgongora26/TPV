const listado_proveedores = document.querySelector("#contenido_tabla");
const modal = document.querySelector("#form-modal-edit");
const btn_buscar = document.querySelector("#buscar");
let id_necesario = 0;

document.addEventListener("DOMContentLoaded", () => {
  mostrarServicios();
  listado_proveedores.addEventListener("click", eliminar_registro);
  listado_proveedores.addEventListener("click", obtener_datos_unitarios);
  modal.addEventListener("submit", editar_registro);
  btn_buscar.addEventListener("click", busqueda_especifica);
});

function busqueda_especifica(e) {
  listado_proveedores.innerHTML = "";
  e.preventDefault();
  const texto_buscar = document.querySelector("#valor_busqueda").value;

  const datos = new FormData();
  datos.append("nombre", texto_buscar);
  datos.append("accion", "busqueda_filtro");

  llamado(datos).then((res) => {
    res.forEach((datos) => {
      console.log(datos);
      const { id, folio, nombre, direccion, telefono, rfc, razon } = datos;

      const listado_proveedores = document.querySelector("#contenido_tabla");

      listado_proveedores.innerHTML += `  
      <tr id="ver_registro_${id}">
          <th scope="row">${id}</th>
          <td>${folio}</td>
          <td>${nombre}</td>
          <td>${razon}</td>
          <td>${direccion}</td>
          <td>${telefono}</td>
          <td>${rfc}</td>
          <td><a href="google.com.mx"><i class="fas fa-check-circle"></i> </a></td>
          <td><a href="proveedor_ver.php?id=${id}"><i class="fas fa-eye"></i> </a></td>            
          <td>
          <button type="button" class="btn btn-primary" data-toggle="modal"
          data-target="#edit-modal"> <i data-cliente="${id}" class="fas fa-edit editar"></i></button>
          </td>
          <td><i data-cliente="${id}" class="fas fa-trash eliminar"></i></td>
      </tr>
      `;
    });
  });
}

async function llamado(datos) {
  try {
    const res = await fetch(
      "../../../inc/peticiones/proveedores/funciones.php",
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

function mostrarServicios() {
  const datos = new FormData();
  datos.append("accion", "mostrar");

  llamado(datos).then((res) => {
    res.forEach((datos) => {
      console.log(datos);
      const { id, folio, nombre, direccion, telefono, rfc, razon } = datos;

      const listado_proveedores = document.querySelector("#contenido_tabla");

      listado_proveedores.innerHTML += `  
        <tr id="ver_registro_${id}">
            <th scope="row">${id}</th>
            <td>${folio}</td>
            <td>${nombre}</td>
            <td>${razon}</td>
            <td>${direccion}</td>
            <td>${telefono}</td>
            <td>${rfc}</td>
            <td><a href="google.com.mx"><i class="fas fa-check-circle"></i> </a></td>
            <td><a href="proveedor_ver.php?id=${id}"><i class="fas fa-eye"></i> </a></td>            
            <td>
            <button type="button" class="btn btn-primary" data-toggle="modal"
            data-target="#edit-modal"> <i data-cliente="${id}" class="fas fa-edit editar"></i></button>
            </td>
            <td><i data-cliente="${id}" class="fas fa-trash eliminar"></i></td>
        </tr>
        `;
    });
  });
}

function eliminar_registro(e) {
  let idEliminar = null;
  if (e.target.classList.contains("eliminar")) {
    idEliminar = Number(e.target.dataset.cliente);
    const confirmar = confirm("Deseas eliminar este cliente?");
    if (confirmar) {
      //  console.log(idEliminar);
      const datos = new FormData();
      datos.append("id", idEliminar);
      datos.append("accion", "eliminar");
      llamado(datos).then((res) =>
        e.target.parentElement.parentElement.remove()
      );
    }
  }
}

function obtener_datos_unitarios(e) {
  let idEliminar = null;
  if (e.target.classList.contains("editar")) {
    idEliminar = Number(e.target.dataset.cliente);
    id_necesario = idEliminar;
    const datos = new FormData();
    datos.append("id", id_necesario);
    datos.append("accion", "buscar");
    llamado(datos).then((res) => {
      console.log(res);
      const edit_clave = (document.querySelector("#edit_clave").value =
        res.folio);
      const edit_nombre = (document.querySelector("#edit_nombre").value =
        res.nombre);
      const edit_razon = (document.querySelector("#edit_razon").value =
        res.razon_social);
      const edit_rfc = (document.querySelector("#edit_rfc").value = res.rfc);
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
  const edit_razon = document.querySelector("#edit_razon").value;
  const edit_rfc = document.querySelector("#edit_rfc").value;
  const edit_direccion = document.querySelector("#edit_direccion").value;
  const edit_telefono = document.querySelector("#edit_telefono").value;

  const datos = new FormData();
  datos.append("id", id_necesario);
  datos.append("clave", edit_clave);
  datos.append("nombre", edit_nombre);
  datos.append("direccion", edit_direccion);
  datos.append("telefono", edit_telefono);
  datos.append("razon", edit_razon);
  datos.append("rfc", edit_rfc);
  datos.append("accion", "actualizar");

  /*const peticion = await llamado(datos);
  console.log(peticion);
  alert("los datos se han cambiado correctamente");*/

  llamado(datos).then((res) => {
    console.log(res);
    const registro_contenido = document.querySelector(
      `#ver_registro_${id_necesario}`
    );

    const { id, clave, nombre, direccion, telefono, razon, rfc } = res;
    registro_contenido.innerHTML = `
    <th scope="row">${id}</th>
    <td>${clave}</td>
    <td>${nombre}</td>
    <td>${razon}</td>
    <td>${direccion}</td>
    <td>${telefono}</td>
    <td>${rfc}</td>
    <td><a href="google.com.mx"><i class="fas fa-check-circle"></i> </a></td>
    <td><a href="proveedor_ver.php?id=${id}"><i class="fas fa-eye"></i> </a></td>            
    <td>
    <button type="button" class="btn btn-primary" data-toggle="modal"
    data-target="#edit-modal"> <i data-cliente="${id}" class="fas fa-edit editar"></i></button>
    </td>
    <td><i data-cliente="${id}" class="fas fa-trash eliminar"></i></td>
    `;
    // console.log(registro_contenido);
  });
}
