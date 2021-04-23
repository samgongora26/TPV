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


document.addEventListener("DOMContentLoaded", () => {
  const parametrosURL = new URLSearchParams(window.location.search);
  idCliente = parametrosURL.get("id");
  if (idCliente) {
    obtener_cliente(idCliente);
  }
  tabla.addEventListener("submit", editar_registro);
});
eventListeners();

function eventListeners() {
  document
    .querySelector("#formulario")
    .addEventListener("submit", actualizarCliente);
}

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
} 


function editar_registro(cliente) {
  cliente.preventDefault();
  console.log("Haaaaaaaaaaaa");
  
  const nombre_edit = document.querySelector("#edit_nombre");
  const descripcion_edit = document.querySelector("#edit_descripcion");
  const codigo_edit = document.querySelector("#edit_codigo");
  const preciocosto_edit = document.querySelector("#edit_costo");
  const precioventa_edit = document.querySelector("#edit_venta");
  const preciomayoreo_edit = document.querySelector("#edit_mayoreo");
  //const unidad_text = document.querySelector("#unidad_edit");
  //const caducidad_text = document.querySelector("#caducidad_edit");
  const stockactual_edit = document.querySelector("#edit_stock");
  const stockmax_edit = document.querySelector("#edit_stockmax");
  const stockmin_edit = document.querySelector("#edit_stockmin");
  //const marca_text = document.querySelector("#marca_edit");
  //const estado_text = document.querySelector("#estado_edit");


  const datos = new FormData();
  datos.append("id", id);
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

/*
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
  }*/

}