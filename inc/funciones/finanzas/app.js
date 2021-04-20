const listado1 = document.querySelector("#contenido_tabla1");
const listado2 = document.querySelector("#contenido_tabla2");
const listado3 = document.querySelector("#contenido_tabla3");
const btn_buscar = document.querySelector("#buscar");
let id_necesario = 0;

const btn_ventas = document.querySelector("#pdf_empleado").addEventListener("click",generar_pdf_1);

function generar_pdf_1(e) {
  e.preventdefault();
  window.location("../peticiones/finanzas/pdf_empleado_ventas.php");
}


document.addEventListener("DOMContentLoaded", () => {
  mostrarTabla1();
  mostrarTabla2();
  mostrarTabla3();
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

function mostrarTabla3() {
  const datos = new FormData();
  datos.append("accion", "tabla3");

  llamado(datos).then((res) => {
    res.forEach((datos) => {
      console.log(datos);
      const {id, nombre, contador, codigo, precio} = datos;

      const listado3 = document.querySelector("#contenido_tabla3");

      listado3.innerHTML += `  
        <tr>
            <td>${id}</td>
            <td>${codigo}</td>
            <td>${nombre}</td>
            <td>${precio}</td>
            <td>${contador}</td>
        </tr>
        `;
    });
  });
}