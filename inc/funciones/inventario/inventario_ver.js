const nombre_text = document.querySelector("#nombre");
const descripcion_text = document.querySelector("#descripcion");
const codigo_text = document.querySelector("#codigo");
const preciocosto_text = document.querySelector("#preciocosto");
const precioventa_text = document.querySelector("#precioventa");
const preciomayoreo_text = document.querySelector("#preciomayoreo");
const unidad_text = document.querySelector("#unidad");
const caducidad_text = document.querySelector("#caducidad");
const stockactual_text = document.querySelector("#stockactual");
const stockmax_text = document.querySelector("#stockmax");
const stockmin_text = document.querySelector("#stockmin");
const marca_text = document.querySelector("#marca");
const estado_text = document.querySelector("#estado");
const formulario = document.querySelector("#formulario");

const tabla = document.querySelector("#tablaver");

let id_actual = 0;

const modal = document.querySelector("#form-modal-edit");
const boton = document.querySelector("#boton");

document.addEventListener("DOMContentLoaded", () => {
  const parametrosURL = new URLSearchParams(window.location.search);
  idCliente = parametrosURL.get("id");
  id_actual = idCliente;
  if (idCliente) {
    obtener_cliente(idCliente);
  }
  modal.addEventListener("submit", editar_registro);
  //boton.addEventListener("click", prueba);
  //tabla.addEventListener("submit", editar_registro);
});
//eventListeners();

/*
function eventListeners() {
  document
    .querySelector("#formulario")
    .addEventListener("submit", actualizarCliente);
}*/

async function obtener_cliente(id) {
  const datos = new FormData();

  datos.append("id", id);
  datos.append("accion", "buscarver");

  try {
    direccion = "../../../inc/peticiones/inventario/funciones.php";
    const peticion = await fetch(direccion, {
      method: "POST",
      body: datos,
    });
    const resultado = await peticion.json();
    console.log(resultado);
    llenar_formulario(resultado);
  } catch (error) {
    console.log(error);
  }
}

function llenar_formulario(cliente) {
  const {nombre_producto, descripcion,codigo ,precio_costo, precio_venta, precio_mayoreo, unidad, cantidad_stock, stock_min, stock_max, fecha_caducidad, marca, estado} = cliente;

  nombre_text.innerHTML = nombre_producto;
  descripcion_text.innerHTML = descripcion;
  codigo_text.innerHTML = codigo;
  preciocosto_text.innerHTML = precio_costo;
  precioventa_text.innerHTML = precio_venta;
  preciomayoreo_text.innerHTML = precio_mayoreo;
  unidad_text.innerHTML = unidad;
  stockactual_text.innerHTML = cantidad_stock;
  stockmin_text.innerHTML = stock_min;
  stockmax_text.innerHTML = stock_max;
  caducidad_text.innerHTML = fecha_caducidad;
  marca_text.innerHTML = marca;
  estado_text.innerHTML = estado;

  llenar_modal(cliente);



}


function llenar_modal(cliente){
  const {nombre_producto, descripcion,codigo ,precio_costo, precio_venta, precio_mayoreo, cantidad_stock, stock_min, stock_max,} = cliente;
  document.querySelector("#edit_nombre").value = nombre_producto;
  document.querySelector("#edit_descripcion").value = descripcion;
  document.querySelector("#edit_codigo").value = codigo;
  document.querySelector("#edit_costo").value = precio_costo;
  document.querySelector("#edit_venta").value = precio_venta;
  document.querySelector("#edit_mayoreo").value = precio_mayoreo;
  //const unidad_text = document.querySelector("#unidad_edit");
  //const caducidad_text = document.querySelector("#caducidad_edit");
  document.querySelector("#edit_stock").value = cantidad_stock;
  document.querySelector("#edit_stockmax").value = stock_max;
  document.querySelector("#edit_stockmin").value = stock_min;
  //const marca_text = document.querySelector("#marca_edit");
  //const estado_text = document.querySelector("#estado_edit");
}

 function actualizar(){location.reload(true);}

async function editar_registro(cliente) {

  cliente.preventDefault();
  console.log("Entro A Editar Registro");

  const nombre_edit = document.querySelector("#edit_nombre").value;
  const descripcion_edit = document.querySelector("#edit_descripcion").value;
  const codigo_edit = document.querySelector("#edit_codigo").value;
  const preciocosto_edit = document.querySelector("#edit_costo").value;
  const precioventa_edit = document.querySelector("#edit_venta").value;
  const preciomayoreo_edit = document.querySelector("#edit_mayoreo").value;
  //const unidad_text = document.querySelector("#unidad_edit");
  //const caducidad_text = document.querySelector("#caducidad_edit");
  const stockactual_edit = document.querySelector("#edit_stock").value;
  const stockmax_edit = document.querySelector("#edit_stockmax").value;
  const stockmin_edit = document.querySelector("#edit_stockmin").value;
  //const marca_text = document.querySelector("#marca_edit");
  //const estado_text = document.querySelector("#estado_edit");


  const datos = new FormData();
  datos.append("id", id_actual);
  datos.append("nombre", nombre_edit);
  datos.append("descripcion", descripcion_edit);
  datos.append("codigo", codigo_edit);
  datos.append("preciocosto", preciocosto_edit);
  datos.append("precioventa", precioventa_edit);
  datos.append("preciomayoreo", preciomayoreo_edit);
  //datos.append("unidad", unidad_text);
  datos.append("stockactual", stockactual_edit);
  datos.append("stockmin", stockmin_edit);
  datos.append("stockmax", stockmax_edit);
  //datos.append("caducidad", caducidad_text);
  //datos.append("marca", marca_text);
  //datos.append("estado", estado_text);
  datos.append("accion", "actualizar");

  alert('Articulo Actualizado')
  setInterval("actualizar()",1000);

  try {
    direccion = "../../../inc/peticiones/inventario/funciones.php";
    const peticion = await fetch(direccion, {
      method: "POST",
      body: datos,
    });
    const resultado = await peticion.json();
    console.log(resultado);
    editar_registro(resultado);
  } catch (error) {
    console.log(error);
  }

  //llenar_formulario(cliente);

}
