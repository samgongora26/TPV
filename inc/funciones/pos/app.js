const listado_productos = document.querySelector("#contenido_tabla");

document.addEventListener("DOMContentLoaded", () => {
  mostrar_ticket();
  document.querySelector("#formulario").addEventListener("click", buscar_producto);
  listado_productos.addEventListener("click", opciones);
});

function buscar_producto(e) {
  e.preventDefault();
  const codigo = document.querySelector("#codigo_envio").value;
  if (codigo != "") {
    const datos = new FormData();
    datos.append("codigo", codigo);
    datos.append("id_venta", 1 );
    datos.append("accion", "registar_producto");
    console.log("entro a buscar los productos");
    busqueda(datos)
    .then((res) => pintar(res))
   // busqueda(datos);
  } else {
    console.log("error envio de campos vacios");
  }
}

async function busqueda(datos) {
  try {
    const res = await fetch("../../../inc/peticiones/pos/funciones.php", {
      method: "POST",
      body: datos,
    });
    const data = await res.json();
    return data;
  // pintar(data);
  } catch (error) {
    console.log(error);
  }
}

function pintar(data) {
  console.log(data);
  const {
    id_producto,
    nombre_producto,
    descripcion,
    codigo,
    precio_venta,
    cantidad,
    id_insertado,
  } = data;
  
  listado_productos.innerHTML += `  
  <tr>
      <th scope="row">${cantidad}</th>
      <td id="codigo">${codigo}</td>
      <input type="hidden" value="${codigo}" id="codigo${id_insertado}">
      <td>${descripcion}</td>
      <td>${precio_venta}</td>
      <td>0</td>
      <td>${precio_venta}</td>
      <td>
      <button data-cliente="${id_insertado}" type="button" class="btn btn-sm btn-light disminuir"><i data-cliente="${id_insertado}" class="fa fa-minus disminuir"></i></button>
      <button data-cliente="${id_insertado}" type="button" class="btn btn-sm btn-dark aumentar">  <i data-cliente="${id_insertado}" class="fa fa-plus aumentar"></i></button>  
      </td>
  </tr>
  `;
}
/// seccion de busqeda inicial
async function mostrar_ticket() {
  console.log("desde mostrar los tickets");
  const datos = new FormData();
  datos.append("id_venta", 2 );
  datos.append("accion", "venta_actual");
  busqueda(datos)
  .then((res) => pintar_inicio(res))
}

function pintar_inicio(data) {
  console.log(data);
  console.log("entro pintar inicio");
  data.forEach((datos) => {
    const {
      cantidad,
      codigo,
      descripcion,
      id_detalle_venta,
      id_venta,
      importe,
      precio_venta,
  
    } = datos;

    listado_productos.innerHTML += `  
    <tr>
        <th scope="row">${cantidad}</th>
        <td id="codigo">${codigo}</td>
        <input type="hidden" value="${codigo}" id="codigo${id_detalle_venta}">
        <td>${descripcion}</td>
        <td>${precio_venta}</td>
        <td>0</td>
        <td>${importe}</td>
        <td>
        <button data-cliente="${id_detalle_venta}" type="button" class="btn btn-sm btn-light disminuir"><i data-cliente="${id_detalle_venta}" class="fa fa-minus disminuir"></i></button>
        <button data-cliente="${id_detalle_venta}" type="button" class="btn btn-sm btn-dark aumentar">  <i data-cliente="${id_detalle_venta}" class="fa fa-plus aumentar"></i></button>  
        </td>
    </tr>
    `;
  });


}
//fin de seccion de busqueda inicial
function opciones(e){
  if (e.target.classList.contains("aumentar")) {
   // console.log("entro a aumentar");
    id = Number(e.target.dataset.cliente);
   
    const datos = new FormData();
    datos.append("id", id );
    datos.append("accion", "aumentar");
    busqueda(datos)
    .then((res) => console.log(res))



  }if (e.target.classList.contains("disminuir")) {
   // console.log("entro a disminuir");
     id = Number(e.target.dataset.cliente);

     const datos = new FormData();
     datos.append("id", id );
     datos.append("accion", "disminuir");
     busqueda(datos)
     .then((res) => console.log(res))

    //let pruebaaa = document.querySelector('#codigo'+id).value;
   // console.log(pruebaaa);
  }
}