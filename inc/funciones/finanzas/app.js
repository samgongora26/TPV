const listado1 = document.querySelector("#contenido_tabla1");
const listado2 = document.querySelector("#contenido_tabla2");
const btn_buscar = document.querySelector("#buscar");
let id_necesario = 0;

document.addEventListener("DOMContentLoaded", () => {
  mostrarTabla1();
  mostrarTabla2();
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

function mostrarTabla1() {
  const datos = new FormData();
  datos.append("accion", "tabla1");

  llamado(datos).then((res) => {
    res.forEach((datos) => {
      console.log(datos);
      const {id, nombre, apellido, contador} = datos;

      const listado1 = document.querySelector("#contenido_tabla1");

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

function mostrarTabla2() {
  const datos = new FormData();
  datos.append("accion", "tabla2");

  llamado(datos).then((res) => {
    res.forEach((datos) => {
      console.log(datos);
      const {id, nombre, contador} = datos;

      const listado2 = document.querySelector("#contenido_tabla2");

      listado2.innerHTML += `  
        <tr>
            <td>${id}</td>
            <td>${nombre}</td>
            <td>${contador}</td>
        </tr>
        `;
    });
  });
}

