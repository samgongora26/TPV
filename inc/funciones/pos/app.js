const listado_productos = document.querySelector("#contenido_tabla");
const texto_venta_actual = document.querySelector("#texto_venta_actual");
const foto = document.querySelector("#actual_foto");
const precio = document.querySelector("#actual_precio");
const r_total = document.querySelector("#monto_total");
const id_usuario = document.querySelector("#id_usuario").value;
let texto_total_compra = document.querySelector("#total_compra");

let carrito = [];
//let suma = 0;
let id_venta_actual = 0;

document.addEventListener("DOMContentLoaded", () => {
  mostrar_ticket();
  document.querySelector("#formulario").addEventListener("click", existente_codigo);
  document.querySelector("#cobrar").addEventListener("click", cobrar_productos);
  document.querySelector("#eliminar").addEventListener("click", eliminar_ticket);
  document.querySelector("#btn_crear_ticket").addEventListener("click", crear_nuevo_ticket);
  listado_productos.addEventListener("click", opciones);
  const enter = document.querySelector("#codigo_envio");
  enter.addEventListener("keyup", (e) => {
    if (e.keyCode === 13) {
      e.preventDefault();
      existente_codigo(e);
    }
  });
  //sacar el cambio del cierre de venta
  const r_recibo = document.querySelector("#monto_recibido").addEventListener("keyup", (e) => {
      if (e.keyCode === 13) {
        e.preventDefault();
        console.log("envio para el cambio");

        const recibido = document.querySelector("#monto_recibido").value;
        const monto = parseFloat(recibido);
        const total = parseFloat(texto_total_compra.innerHTML);
        const operacion = monto - total;
        if (operacion < 0) {
          document.getElementById("cobrar").disabled = true;
        } else {
          document.getElementById("cobrar").disabled = false;
        }
        console.log(
          `total a pagar : ${total} y cantidad pagada ${recibido}, el resultado de esta operacion es ${operacion}`
        );
        const r_cambio = (document.querySelector(
          "#monto_devuelto"
        ).value = operacion);
        console.log(operacion);
      }
    });
});


async function mostrar_ticket() {
  carrito = JSON.parse(localStorage.getItem("productos_carrito")) || [];

  const datos = new FormData();
  datos.append("id_usuario", id_usuario);
  datos.append("accion", "venta_actual");
  enviar_datos(datos).then((res) => pintar_inicio(res));
}

function pintar_inicio(data) {
  let valor_int = 0;
  console.log(data);
  texto_venta_actual.innerHTML = `id de la venta actual ${data[0].id_venta}`;
  id_venta_actual = data[0].id_venta;

  data.forEach((datos) => {
    const {
      cantidad,
      id_producto,
      codigo,
      descripcion,
      id_detalle_venta,
      id_venta,
      importe,
      precio_venta,
      nombre,
    } = datos;

    let importe_producto = parseInt(cantidad) * precio_venta;
    producto = {
      id: id_producto,
      nombre,
      codigo: codigo,
      precio_v: precio_venta,
      cantidad: parseInt(cantidad),
      importe: importe_producto,
    };
    if (id_producto === null) {
      console.log(`el ingreso de un nuevo producto al carrito${producto}`);
      carrito.push(producto);
      articulos_html();
    }
    articulos_html();
   // suma = suma + valor_int; //suma cada importe
    texto_venta_actual.innerHTML = `id de la venta actual ${id_venta}`;
    id_venta_actual = id_venta;
  });
}


function existente_codigo(e) {
  const codigo = document.querySelector("#codigo_envio").value;
  let id = 0;

  const itemEnCarritoIndex = carrito.findIndex(
    (producto) => producto.codigo === codigo
  );
  if (itemEnCarritoIndex >= 0) {
    actualizar_carrito(codigo, +1);
  } else {
    buscar_producto(e);
  }
}

function buscar_producto(e) {
  e.preventDefault();
  const codigo = document.querySelector("#codigo_envio").value;
  if (codigo != "") {
    const datos = new FormData();
    datos.append("codigo", codigo);
    datos.append("id_usuario", id_usuario);
    datos.append("accion", "buscar_producto");
    console.log("entro a buscar los productos");
    enviar_datos(datos).then((res) => pintar(res));
  } else {
    console.log("error envio de campos vacios");
  }
}

function pintar(data) {
  console.log(data);
  const {
    id_producto,
    nombre,
    descripcion,
    //foto,
    codigo,
    precio_venta,
    cantidad,
    id_insertado,
  } = data;

  if (!(id_producto === null)) {
    let importe_producto = parseInt(cantidad) * precio_venta;
    producto = {
      id: id_producto,
      nombre,
      codigo: codigo,
      precio_v: precio_venta,
      cantidad: parseInt(cantidad),
      importe: importe_producto,
    };
    console.log(`se agrego un nuevo producto al carrito${producto}`);
    carrito.push(producto);
    foto.innerHTML = `nombre del codigo :${codigo}`;
    precio.innerHTML = precio_venta;
    articulos_html();

  } else {
    alert("no existe el producto");
  }
}

///////////////////////////////////funciones de inicio ------------


function opciones(e) {
  if (e.target.classList.contains("aumentar")) {
    let codigo = e.target.dataset.cliente;
    const operador = +1;
    actualizar_carrito(codigo, operador);
  }
  if (e.target.classList.contains("disminuir")) {
    let codigo = e.target.dataset.cliente;
    const operador = -1;
    actualizar_carrito(codigo, operador);
  }
}
function actualizar_carrito(codigo, operador) {
  let index = 0;
  index = carrito.findIndex((producto) => producto.codigo === codigo);
  carrito[index].cantidad = carrito[index].cantidad + operador;
  let cantidad = carrito[index].cantidad;
  let precio = parseInt(carrito[index].precio_v);
  let total = cantidad * precio;
  carrito[index].importe = total;
  articulos_html();
}

function ver_cobro() {
  const r_recibo = document.querySelector("#monto_recibido");
  const r_cambio = (document.querySelector("#monto_devuelto").value ="el cambio se muestra aqui");
  // cobrar_productos();
}
function cobrar_productos() {
  const total = parseFloat(texto_total_compra.innerHTML);
  const datos = new FormData();
  const array = JSON.stringify(carrito);

  datos.append("someData", array);
  datos.append("id_venta", id_venta_actual);
  datos.append("id_usuario", id_usuario);
  datos.append("total_venta", total);
  datos.append("accion", "registrar_venta");
  envio_array(datos).then((res) => {
    texto_venta_actual.innerHTML = `id de la venta actual : ${res.id}`;
    id_venta_actual = res.id;
    const r_id = (document.querySelector("#modal_id").innerHTML = `Cobrar el ticket ${res.id}`);
  });

  reinicio();

  alert("se ha registrado el cobro correctamente");
}

function eliminar_ticket() {
  console.log("desde eliminar ticket");
  console.log(id_venta_actual);
  const datos = new FormData();
  datos.append("id", id_venta_actual);
  datos.append("accion", "eliminar_venta");
  enviar_datos(datos).then((res) => {
    texto_venta_actual.innerHTML = `id de la venta actual : ${res.id_nueva_venta}`;
    id_venta_actual = res.id_nueva_venta;
  });
  reinicio();
  alert("se ha eliminado correctamente");
}

//funciones globales
async function enviar_datos(datos) {
  try {
    const res = await fetch("../../../inc/peticiones/pos/funciones.php", {
      method: "POST",
      body: datos,
    });
    const data = await res.json();
    return data;
  } catch (error) {
    console.log(error);
  }
}

function reinicio() {
  carrito = [];
  //suma = 0;
  texto_total_compra.innerHTML = "";
  listado_productos.innerHTML = "";
  const r_total = (document.querySelector("#monto_total").innerHTML = ` `);
  const r_id = (document.querySelector("#modal_id").innerHTML = ``);
  sincronizar_storage();

}

async function envio_array(datos) {
  //enviar una petcion a php con un conjunto de datos
  try {
    const res = await fetch("../../../inc/peticiones/pos/funciones.php", {
      method: "POST",
      body: datos,
    });
    const data = await res.json();
    return data;
  } catch (error) {
    console.log(error);
  }
}

function articulos_html() {
  limpiar_html();
  let suma = 0;
  carrito.forEach((articulo) => {
    const { id, nombre, codigo, cantidad, precio_v, importe } = articulo;
    listado_productos.innerHTML += `  
    <tr>
        <th scope="row">${cantidad}</th>
        <td id="codigo">${codigo}</td>
        <input type="hidden" value="${codigo}" id="codigo${id}">
        <td>${nombre}</td>
        <td>${precio_v}</td>
        <td>0</td>
        <td>${importe}</td>
        <td>
        <button data-cliente="${codigo}" type="button" class="btn btn-sm btn-light disminuir"><i data-cliente="${codigo}" class="fa fa-minus disminuir"></i></button>
        <button data-cliente="${codigo}" type="button" class="btn btn-sm btn-dark aumentar">  <i data-cliente="${codigo}" class="fa fa-plus aumentar"></i></button>  
        </td>
    </tr>
    `;

    suma = suma + importe;
  });
    //parte del modal
    if(suma => 0){
      const r_id = (document.querySelector("#modal_id").innerHTML = `Cobrar el ticket ${id_venta_actual}`);
      const r_total = (document.querySelector("#monto_total").innerHTML = `Total : ${suma}`);
    texto_total_compra.innerHTML = suma;
    }else{
      const r_id = (document.querySelector("#modal_id").innerHTML = `Cobrar el ticket ${id_venta_actual}`);
      const r_total = (document.querySelector("#monto_total").innerHTML = `Total : 0`);
    texto_total_compra.innerHTML = 0;
    }

  sincronizar_storage();
}

function sincronizar_storage() {
  localStorage.setItem("productos_carrito", JSON.stringify(carrito));
}
function limpiar_html() {
  listado_productos.innerHTML = "";
}

/////////////////////generacio de tickets dentro de un mismmo dom

function crear_nuevo_ticket() {
  console.log("estas en nuevo ticket");
  const ids = [...document.querySelectorAll('.ticket')].map(el => el.id);
  console.log(ids)
}