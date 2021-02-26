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
            <td><a href="proveedor_ver.php?id=${id}"><i class="fas fa-edit"></i> </a></td>
            <td><i data-cliente="${id}" class="fas fa-trash eliminar"></i></td>
        </tr>
        `;
    });
  } catch (error) {
    console.log(error);
  }
}
const listado_clientes = document.querySelector("#contenido_tabla");

document.addEventListener("DOMContentLoaded", () => {
  mostrarServicios();

  listado_clientes.addEventListener("click", eliminar_registro);
});

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
