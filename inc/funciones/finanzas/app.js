const listado1 = document.querySelector("#contenido_tabla");
const btn_buscar = document.querySelector("#buscar");
let id_necesario = 0;

document.addEventListener("DOMContentLoaded", () => {
  mostrarServicios();
  //listado_proveedores.addEventListener("click", obtener_datos_unitarios);
});



async function llamado(datos) {
  try {
    const res = await fetch(
      "../../../inc/peticiones/finanzas/funciones.php",
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
      const {id, nombre, apellido, contador} = datos;

      const listado1 = document.querySelector("#contenido_tabla");

      listado1.innerHTML += `  
        <tr>
            <td>${id}</td>
            <td>${nombre}</td>
            <td>${apellido}</td>
            <td>${contador}</td>
        </tr>
        `;
    });
  });
}

