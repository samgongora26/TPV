document.addEventListener("DOMContentLoaded", () => {
    mostrarServicios();
  });
  

async function mostrarServicios() {
    const datos = new FormData();
    datos.append("accion", "mostrar");
  
    try {
      const URL = "../../../inc/peticiones/clientes/funciones.php";
      const resultado = await fetch(URL, {
        method: "POST",
        body: datos,
      });
      const db = await resultado.json();
  
      db.forEach((servicio) => {
        console.log(servicio);
        const { id, nombre, telefono, direccion} = servicio;
  
        const listado_clientes = document.querySelector("#contenido_tabla");
  
        listado_clientes.innerHTML += `  
          <tr>
              <th scope="row">${id}</th>
              <td> fol_1</td>
              <td>${nombre}</td>
              <td>${direccion}</td>
              <td>${telefono}</td>
          </tr>
          `;
      });
    } catch (error) {
      console.log(error);
    }
  }