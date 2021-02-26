const listado_clientes = document.querySelector("#contenido_tabla");
const modal = document.querySelector("#form-modal-edit");
let id_necesario = 0;

document.addEventListener("DOMContentLoaded", () => {
  mostrarServicios();
  listado_clientes.addEventListener("click", eliminar_registro);
  listado_clientes.addEventListener("click", pruebasss);
  modal.addEventListener("submit", otra_pruebaaxd);
});


async function mostrarServicios() {
  const datos = new FormData();
  datos.append("accion", "mostrar");

  try {
    const URL = "../../../inc/peticiones/proveedores/funciones.php";
    const resultado = await fetch(URL, {
      method: "POST",
      body: datos,
    });
    const db = await resultado.json();

    db.forEach((servicio) => {
      console.log(servicio);
      const { id, folio, nombre, direccion, telefono } = servicio;

      const listado_clientes = document.querySelector("#contenido_tabla");

      listado_clientes.innerHTML += `  
        <tr>
            <th scope="row">${id}</th>
            <td>${folio}</td>
            <td>${nombre}</td>
            <td>Cell</td>
            <td>${direccion}</td>
            <td>${telefono}</td>
            <td>Cell</td>
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
  } catch (error) {
    console.log(error);
  }
}
async function eliminar_registro(e) {
  let idEliminar = null;
  if (e.target.classList.contains("eliminar")) {
    idEliminar = Number(e.target.dataset.cliente);
    const confirmar = confirm('Deseas eliminar este cliente?');
    if(confirmar){
      try {
        console.log(idEliminar);
        const datos = new FormData();
        datos.append("id", idEliminar);
        datos.append("accion", "eliminar");
  
        const res = await fetch("../../../inc/peticiones/proveedores/funciones.php", {
          method: "POST",
          body: datos,
        });
  
        const data = await res.json();
        console.log(data);
        e.target.parentElement.parentElement.remove();
      } catch (error) {
        console.log(error);
      }
    }
  }
}

 function pruebasss(e) {
  let idEliminar = null;
  if (e.target.classList.contains("editar")) {

    idEliminar = Number(e.target.dataset.cliente);
   id_necesario = idEliminar;
  }
}

async function otra_pruebaaxd(e){
  e.preventDefault();
  const edit_clave = document.querySelector("#edit_clave").value;
  const edit_nombre =document.querySelector("#edit_nombre").value;
  const edit_direccion =document.querySelector("#edit_direccion").value;
  const edit_telefono =document.querySelector("#edit_telefono").value;

  try {
    const datos = new FormData();
    datos.append("id", id_necesario);
    datos.append("clave", edit_clave);
    datos.append("nombre", edit_nombre);
    datos.append("direccion", edit_direccion);
    datos.append("telefono", edit_telefono);
    datos.append("accion", "actualizar");

    const res = await fetch("../../../inc/peticiones/proveedores/funciones.php", {
      method: "POST",
      body: datos,
    });

    const data = await res.json();
    console.log(data);
    e.target.parentElement.parentElement.remove();
  } catch (error) {
    console.log(error);
  }
}
