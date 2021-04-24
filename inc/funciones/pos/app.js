const texto_venta_actual = document.querySelector("#texto_venta_actual");
const foto = document.querySelector("#actual_foto");
const precio = document.querySelector("#actual_precio");
const r_total = document.querySelector("#monto_total");
const id_usuario = document.querySelector("#id_usuario").value;
let texto_total_compra = document.querySelector("#total_compra");
let id_venta_actual = 0;
let tickets = [];
let carritos = [];
let id_cliente = 0;

document.addEventListener("DOMContentLoaded", () => {
  mostrar_ticket();

  contenedor_tickets.addEventListener("click", recuperar_ticket_o_crear_nuevo);
  document.querySelector("#formulario").addEventListener("click", existente_codigo);
  document.querySelector("#cobrar").addEventListener("click", cobrar_productos);
  document.querySelector("#eliminar").addEventListener("click", eliminar_ticket);
  //document.querySelector("#btn_crear_ticket").addEventListener("click", crear_nuevo_ticket);
  padre.addEventListener("click", opciones);
   const enter = document.querySelector("#codigo_envio");
  enter.addEventListener("keyup", (e) => {
    if (e.keyCode === 13) {
      e.preventDefault();
      existente_codigo(e);    }
  });
  //sacar el cambio del cierre de venta
  const r_recibo = document.querySelector("#monto_recibido").addEventListener("keyup", (e) => {
      if (e.keyCode === 13) {
        e.preventDefault();

        const recibido = document.querySelector("#monto_recibido").value;
        const btn_cobrar = document.getElementById("cobrar").disabled;
        const monto = parseFloat(recibido);
        const total = parseFloat(texto_total_compra.innerHTML);
        const operacion = monto - total;
        const se_puede_pagar = operacion >= 0;
        document.getElementById("cobrar").disabled = !(se_puede_pagar);
       // btn_cobrar.disabled = se_puede_pagar; // indica si se bloquea o no el boton

        const r_cambio = (document.querySelector("#monto_devuelto").value = operacion);
      }
    });
    //obtener el cliente
    const cliente_recibido = document.querySelector("#cliente").addEventListener("keyup", (e) =>{
      if (e.keyCode === 13) {
        e.preventDefault();
        id_cliente = document.querySelector("#cliente").value;
        buscar_si_existe_el_cliente(id_cliente);
      }
    });
});


async function mostrar_ticket() {
  carritos = JSON.parse(localStorage.getItem("carritos")) || [];
  tickets =  JSON.parse(localStorage.getItem("tickets")) || [];

  const datos = new FormData();
  datos.append("id_usuario", id_usuario);
  datos.append("accion", "venta_actual");
  enviar_datos(datos).then((res) => pintar_inicio(res));
}

function pintar_inicio(data) {
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
      carritos.push(producto);
    }
    mostrar_todos_los_tickets();
    texto_venta_actual.innerHTML = `id de la venta actual ${id_venta}`;
    id_venta_actual = id_venta;
    if (tickets.length === 0) creacion_del_primer_ticket(); 
});
}


function buscar_producto(e) {
  e.preventDefault();
  const codigo = document.querySelector("#codigo_envio").value;
  if (codigo != "") {
    const datos = new FormData();
    datos.append("codigo", codigo);
    datos.append("id_usuario", id_usuario);
    datos.append("accion", "buscar_producto");
    enviar_datos(datos).then((res) =>{
      if(res.estado === true){
        pintar(res);
      }
    } );
  } else {
    console.log("error envio de campos vacios");
  }
}

function buscar_producto_sin_evento() {
  const codigo = document.querySelector("#codigo_envio").value;
  if (codigo != "") {
    const datos = new FormData();
    datos.append("codigo", codigo);
    datos.append("id_usuario", id_usuario);
    datos.append("accion", "buscar_producto");
    enviar_datos(datos).then((res) =>{
      if(res.estado === true){
        pintar(res);
      }
    } );
  } else {
    console.log("error envio de campos vacios");
  }
}

function descuento_en_producto(precio,cantidad,descuento) {
  const importe_total = parseInt(cantidad) * precio;
 const cantidad_con_descuento = parseFloat(importe_total - ((importe_total * parseFloat(descuento))/100));
 return cantidad_con_descuento;
}

function pintar(data) {
  const {
    id_producto,
    nombre,
    descripcion,
    //foto,
    codigo,
    precio_venta,
    cantidad,
    id_insertado,
    promocion_porcentaje
  } = data;

  if (!(id_producto === null)) {
    let importe_producto = parseFloat(cantidad) * precio_venta;
    if(promocion_porcentaje != 0){

      importe_producto = descuento_en_producto(precio_venta,cantidad,promocion_porcentaje);
      //importe_producto = parseFloat(importe_producto - ((importe_producto * parseFloat(promocion_porcentaje))/100));
    }
    producto = {
      id: id_producto,
      nombre,
      codigo: codigo,
      precio_v: precio_venta,
      cantidad: parseInt(cantidad),
      importe: importe_producto,
      descuento : promocion_porcentaje
    };
    carritos[ticket_en_uso].push(producto); 
    foto.innerHTML = `Nombre del producto :${nombre} `;
    precio.innerHTML = `Precio :${precio_venta}`;

  } else {
    alert("no existe el producto");
  }
  mostrar_articulos_de_un_carrito();
}

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
  index = carritos[ticket_en_uso].findIndex((producto) => producto.codigo === codigo);
  const nueva_cantidad = carritos[ticket_en_uso][index].cantidad + operador;
  if (nueva_cantidad > 0) {
    carritos[ticket_en_uso][index].cantidad = nueva_cantidad;
    let cantidad = carritos[ticket_en_uso][index].cantidad;
    let precio = parseFloat(carritos[ticket_en_uso][index].precio_v);
    let descuento = parseFloat(carritos[ticket_en_uso][index].descuento);
    let total = descuento_en_producto(precio,cantidad,descuento);
    carritos[ticket_en_uso][index].importe = total;
  }else{
    const remover_carrito = carritos[ticket_en_uso].splice(index, 1);
  }
  mostrar_articulos_de_un_carrito();
}

function cobrar_productos() {
  const total = parseFloat(texto_total_compra.innerHTML);
  const datos = new FormData();
  const array = JSON.stringify(carritos[ticket_en_uso]);
  datos.append("someData", array);
  datos.append("id_venta", id_venta_actual);
  datos.append("id_cliente", id_cliente);
  datos.append("id_usuario", id_usuario);
  datos.append("total_venta", total);
  datos.append("accion", "registrar_venta");
  envio_array(datos).then((res) => {
    texto_venta_actual.innerHTML = `id de la venta actual : ${res.id}`;
    id_venta_actual = res.id;
    const r_id = (document.querySelector("#modal_id").innerHTML = `Cobrar el ticket ${res.id}`);
  });
  tickets.forEach((ticket,index) => ticket = index);
pintado_inicial_todo();
cerrar_modal_venta();
  if (tickets.length === 0){
    creacion_del_primer_ticket();
   }
}

function buscar_si_existe_el_cliente(valor_recibido) {
  const datos = new FormData();
  datos.append("telefono_cliente",valor_recibido);
  datos.append("accion","buscar_cliente");
  enviar_datos(datos).then((resd) =>{

    if (resd.existe) alert("cliente encontrado");
    else document.querySelector("#cliente").value = 1;
    id_cliente = resd.id;
  });
}

 function pintado_inicial_todo() {
  limpiar_contenido_del_carrito();
  limpiar_campos_html();
  sincronizacion_de_tickets();
  sincronizar_storage();
  mostrar_todos_los_tickets();
}

function sincronizacion_de_tickets() {
  console.table(tickets);
  const reemplazo = tickets.map((val,index) => val = index);
  tickets = reemplazo;
  console.table(tickets);
}

function eliminar_ticket() {
  pintado_inicial_todo();
  if (tickets.length === 0) {
    creacion_del_primer_ticket();
  }
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

async function envio_array(datos) {
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

function limpiar_campos_html() {
  const remover_carrito = carritos.splice(ticket_en_uso, 1);
  const remover_ticket = tickets.splice(ticket_en_uso, 1);
  texto_total_compra.innerHTML = "";

  const r_id = (document.querySelector("#modal_id").innerHTML = ``);

  //secciones del modal
  document.getElementById("cobrar").disabled = true;
  document.querySelector("#monto_recibido").value = ` `;
  document.querySelector("#monto_devuelto").value = ` `;
  document.querySelector("#monto_total").innerHTML = ` `;

  sincronizar_storage();
}

function mostrar_total_modal(suma, id) {
  // la cantidad monetaria actual en el modal
  document.querySelector("#modal_id").innerHTML = `Cobrar el ticket ${id}`;
  document.querySelector("#monto_total").innerHTML = `Total : ${suma}`;
  texto_total_compra.innerHTML = suma;
}

function sincronizar_storage() {

  localStorage.setItem(`carritos`, JSON.stringify(carritos));
  localStorage.setItem(`tickets`, JSON.stringify(tickets));
}

function limpiar_lista_productos() {
  padre.innerHTML = "";
}

//cerrar modals
function cerrar_modal_venta(){
  $('#warning-header-modal').modal('hide');
}

function cerrar_modal_buscar() {
  $('#busqueda_producto').modal('hide');
}