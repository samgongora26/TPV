async function mostrarServicios() {
  const datos = new FormData();
  datos.append("accion", "mostrar");

  try {
    const URL = "../../../inc/peticiones/usuarios/funciones.php";
    const resultado = await fetch(URL, {
      method: "POST",
      body: datos,
    });
    const db = await resultado.json();

    db.forEach((servicio) => {
      console.log(servicio);
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
