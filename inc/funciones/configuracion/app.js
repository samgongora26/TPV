const listado1 = document.querySelector("#contenidoconfig");
const btn_buscar = document.querySelector("#buscar");
let id_necesario = 0;

document.addEventListener("DOMContentLoaded", () => {
  mostrarTabla1();
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
  datos.append("accion", "busqueda");

  llamado(datos).then((res) => {
    res.forEach((datos) => {
      console.log(datos);
      const {} = datos;

      const listado1 = document.querySelector("#contenidoconfig");

      listado1.innerHTML += `  
        <div align="center"><img style="border-radius: 50px; color: black;" src="../../imagenes/proveedores/logosabritas.jpg" width="100" height="100" ></div><br>
        <div class="row" >
            <div class="col-md-5">
                <h3>Razón Social: </h3>
            </div>
            <div class="col-md-5">
                <h3>Nombre Fiscal: </h3>
            </div>
            <div class="col-md-5">
                <h3>Telefono de contacto: </h3>
            </div>
            <div class="col-md-5">
                <h3>E-mail: </h3>
            </div>
            <div class="col-md-5">
                <h3>Dirección: </h3>
            </div>
        </div>
        <br>
        <div class="row">
            
            <div class="col-md-5">
                <a href="javascript:void(0)" class="btn btn-primary">Editar información de la empresa <i class="fas fa-edit"></i></a>
            </div>
        </div>
        `;
    });
  });
}