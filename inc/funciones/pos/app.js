const listado_productos = document.querySelector("#contenido_tabla");
let array_inicial = [];
let suma = 0;
let total_compra = document.querySelector("#total_compra");

document.addEventListener("DOMContentLoaded", () => {
  mostrar_ticket();
    document.querySelector("#formulario").addEventListener("click", existente_codigo);
    document.querySelector("#cobrar").addEventListener("click",cobrar_productos)
  listado_productos.addEventListener("click", opciones);
  const enter = document.querySelector("#codigo_envio");
  enter.addEventListener('keyup', (e) => {
    if(e.keyCode === 13){
      e.preventDefault();
    existente_codigo(e);
    }
  })
});

function existente_codigo(e){
  const codigo = document.querySelector("#codigo_envio").value;
  let bandera = false;
  let id = 0;
  let codigo_ver =0;
  if(array_inicial.length === 0){
    buscar_producto(e);
  }else{
    array_inicial.forEach(element => {
        if(codigo == element.codigo){
          id = element.id_detalle_venta;
          codigo_ver =element.codigo;
          bandera = true
        }else{
        }
      });
      if ( bandera === true){
        incrementar(id);
        console.log("se incrementa");
      }else{
        console.log("se crea uno nuevo");
        buscar_producto(e);
      }
  }
}

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
  array_inicial.push({codigo: codigo, id_detalle_venta: id_insertado});
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
  suma = suma + parseFloat(precio_venta);
  total_compra.innerHTML = suma;
}

async function mostrar_ticket() {
  console.log("desde mostrar los tickets");
  const datos = new FormData();
  datos.append("id_venta", 4 );
  datos.append("accion", "venta_actual");
  busqueda(datos)
  .then((res) => pintar_inicio(res))
}

function pintar_inicio(data) {
  console.log(data);
  console.log("entro pintar inicio");
  let valor_int = 0;
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

    array_inicial.push({codigo: codigo, id_detalle_venta: id_detalle_venta});

    //cont = cont +1;
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
     valor_int = parseFloat(importe);

    suma = suma + valor_int;
  });

  total_compra.innerHTML = suma;



}
//fin de seccion de busqueda inicial
function opciones(e){
  if (e.target.classList.contains("aumentar")) {
   // console.log("entro a aumentar");
    id = Number(e.target.dataset.cliente);
   incrementar(id);


  }if (e.target.classList.contains("disminuir")) {
   // console.log("entro a disminuir");
     id = Number(e.target.dataset.cliente);
disminuir(id);

    //let pruebaaa = document.querySelector('#codigo'+id).value;
   // console.log(pruebaaa);
  }
}

function incrementar(id){
  const datos = new FormData();
  datos.append("id", id );
  datos.append("accion", "aumentar");
  busqueda(datos)
  .then((res) => console.log(res))


}
function disminuir(id){
  const datos = new FormData();
  datos.append("id", id );
  datos.append("accion", "disminuir");
  busqueda(datos)
  .then((res) => console.log(res))
}

function cobrar_productos(){
  console.log( parseFloat(total_compra.innerHTML));
  const datos = new FormData();
 datos.append
}