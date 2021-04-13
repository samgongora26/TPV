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
      const {nombre} = datos;

      const listado1 = document.querySelector("#contenido_tabla");

      listado1.innerHTML += `  
        <tr>
            <td>1</td>
            <td>${nombre}</td>
            <td>LAST NAME</td>
            <td>##</td>
        </tr>
        `;
    });
  });
}

