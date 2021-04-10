const contenedor_tickets = document.querySelector("#contenedor_tickets");
const padre = document.querySelector("#contenedor_padre_tickets");
let ticket_en_uso = 0;
let tickets = [];
let carritos = [];
tickets = [0,1,2];
carritos = [
  [
    {nombre:"melon",codigo:"323232",precio:"100",cantidad:"200"},
    {nombre:"sandia",codigo:"222",precio:"80",cantidad:10},
    {nombre:"papaya",codigo:"4",precio:"3",cantidad:"200"},
    {nombre:"fresa",codigo:"123",precio:"20",cantidad:32},
    {nombre:"uva",codigo:"4323",precio:"50",cantidad:"200"},
  ],
  [
    {nombre:"estereo",codigo:"2323ddd",precio:"100",cantidad:"200"},
    {nombre:"sandia",codigo:"333dtg5",precio:"80",cantidad:10},
    {nombre:"papaya",codigo:"4",precio:"3",cantidad:"200"},
    {nombre:"fresa",codigo:"123",precio:"20",cantidad:32},
    {nombre:"uva",codigo:"4323",precio:"50",cantidad:"200"},
  ],
  [
    {nombre:"melon",codigo:"323232",precio:"100",cantidad:"200"},
    {nombre:"sandia",codigo:"222",precio:"80",cantidad:10},
    {nombre:"papaya",codigo:"4",precio:"3",cantidad:"200"},
    {nombre:"fresa",codigo:"123",precio:"20",cantidad:32},
    {nombre:"uva",codigo:"4323",precio:"50",cantidad:"200"},
  ]
]
document.addEventListener("DOMContentLoaded", () => {
  mostrar_todos_los_tickets();
  contenedor_tickets.addEventListener("click", recuperar_ticket_o_crear_nuevo);
  document.querySelector("#formulario").addEventListener("click", existente_codigo);
  const enter = document.querySelector("#codigo_envio");
  enter.addEventListener("keyup", (e) => {
    if (e.keyCode === 13) {
      existente_codigo();
    }
  });
});
function recuperar_ticket_o_crear_nuevo(e) {
  const clase = e.target.classList[0];
  let id_del_ticket_seleccionado = e.target.dataset.cliente;
  const esnuevo = id_del_ticket_seleccionado ?? "nuevo";

  if (esnuevo === "nuevo" && clase ==="ticket") {
    const resultado = agregar_array_tickets();
    creacion_de_nuevo_contenedor(resultado);
  } else {
    ticket_en_uso = id_del_ticket_seleccionado;
  }
};

function existente_codigo()  {
  const codigo_recuperado = document.querySelector("#codigo_envio").value;
  const carro_actual = carritos[ticket_en_uso];
  const si_existe = carritos[ticket_en_uso].findIndex((producto) => producto.codigo === codigo_recuperado);
  if (si_existe >= 0) {
    console.log("ya existe");
  }else{
    if(carritos[ticket_en_uso][0] === -10)carritos[ticket_en_uso].shift(); //primer articulo agregado
    console.log("nuevo producto agregado");
    agregar_nuevo_articulo(codigo_recuperado);
  }
};

function agregar_nuevo_articulo(codigo) {
  let producto = {codigo:codigo,precio:ticket_en_uso *14};
  carritos[ticket_en_uso].push(producto);
      mostrar_articulos_de_un_carrito();
}

function limpiar_contenido_del_carrito() {
  const listado_productos = document.querySelector(`#contenido_tabla_${ticket_en_uso}`);
  listado_productos.innerHTML = "";
} 

  function mostrar_articulos_de_un_carrito() {
    limpiar_contenido_del_carrito();
    const listado_productos = document.querySelector(`#contenido_tabla_${ticket_en_uso}`);
    carritos[ticket_en_uso].forEach(carrito =>{ 
      listado_productos.innerHTML += `
      <tr>
      <th scope="row">${carrito.nombre}</th>
      <td>${carrito.codigo}</td>
      <td>${carrito.precio}</td>
      <td>${carrito.cantidad}</td>
      <td>-</td>
      <td>5000</td>
  </tr>           `;
    });
  }
function agregar_array_tickets() {
  let ultimo = tickets[tickets.length - 1];
  ultimo = ultimo + 1;
  isNaN(ultimo) ? (ultimo = 0) : false;
  tickets.push(ultimo);
  carritos.push([codigo = -10]); //posible cambio, creacion vacio
  return ultimo;
};
function crear_ticket_html(nuevo_id)  ///
  {
    let node = document.createElement("LI");
    node.classList.add("nav-item");
    node.classList.add("ticket");
    let textnode = `
  <a href="#pre_ticket${nuevo_id}" data-toggle="tab" aria-expanded="true" class="ticket nav-link" data-cliente="${nuevo_id}">
          <i class="mdi mdi-account-circle d-lg-none d-block mr-1"></i>
          <span class="ticket d-none d-lg-block" data-cliente="${nuevo_id}">Ticket ${nuevo_id}</span>
      </a>
  `;
    node.innerHTML = textnode;
    contenedor_tickets.appendChild(node);
  };

function crear_contenedor_productos(nuevo_id) { ///
  let node = document.createElement("DIV");
  node.classList.add("tab-pane");
  if (nuevo_id === 0) node.classList.add(`active`);
  node.setAttribute("ID", `pre_ticket${nuevo_id}`);
  let textnode = `<table class="table table-sm mb-0">
  <thead>
      <tr>
          <th scope="col">sds</th>
          <th scope="col">Codigo</th>
          <th scope="col">Descripción</th>
          <th scope="col">Precio unitario</th>
          <th scope="col">Descuento %</th>
          <th scope="col">Importe</th>
      </tr>
  </thead>
<tbody id="contenido_tabla_${nuevo_id}" class="text-center">     
  </tbody>
</table> `;
  node.innerHTML = textnode;
  padre.appendChild(node);
};

function creacion_de_nuevo_contenedor(resultado) { ///
    crear_ticket_html(resultado);
    crear_contenedor_productos(resultado);
}

function limpiar_contenedor_padre() { ///
  padre.innerHTML = "";
  contenedor_tickets.innerHTML ="";
  let node = document.createElement("LI");
  node.classList.add("nav-item");
  node.setAttribute("id", "btn_crear_ticket");
  let textnode = `
  <a href="#settings" data-toggle="tab" aria-expanded="false" class="ticket nav-link">
  <i class="ticket mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
  <span class="ticket fa fa-plus"></span>
</a
`;
  node.innerHTML = textnode;
  contenedor_tickets.appendChild(node);
}


function mostrar_todos_los_tickets() { ///
  limpiar_contenedor_padre();
  tickets.forEach(ticket =>{
    ticket_en_uso = ticket;
    creacion_de_nuevo_contenedor(ticket_en_uso);
    mostrar_articulos_de_un_carrito();
  });
}