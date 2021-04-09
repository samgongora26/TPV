const contenedor_tickets = document.querySelector("#contenedor_tickets");
const padre = document.querySelector("#contenedor_padre_tickets");
let ticket_en_uso = 0;
const tickets = [];
let carritos = [];

const existente_codigo = () => {
  const name = document.querySelector("#codigo_envio").value;
  const carro_actual = carritos[ticket_en_uso];
  const si_existe = carro_actual.findIndex((producto) => producto.nombre === name);
  if (si_existe >= 0) {
    console.log("ya existe");
  }else{
    if(carro_actual[0] === -10){ 
      carro_actual.shift();
      console.log("se ha eliminado el de creado");
    };
    console.log("nuevo producto agregado");
    let producto = {nombre:name,precio:ticket_en_uso *14};
    carro_actual.push(producto);
      nuevo_producto();
  }
};

function limpiar_contenido_del_carrito() {
  const listado_productos = document.querySelector(`#contenido_tabla_${ticket_en_uso}`);
  listado_productos.innerHTML = "";
}
  function nuevo_producto() {

    limpiar_contenido_del_carrito();
    const listado_productos = document.querySelector(`#contenido_tabla_${ticket_en_uso}`);
    carritos[ticket_en_uso].forEach(carrito =>{ 
      listado_productos.innerHTML += `
      <tr>
      <th scope="row">${carrito.nombre}</th>
      <td>vbrbrbrb</td>
      <td>0001</td>
      <td>5000</td>
      <td>-</td>
      <td>5000</td>
  </tr>           `;
    });
  }

document.querySelector("#formulario").addEventListener("click", existente_codigo);
const enter = document.querySelector("#codigo_envio");
enter.addEventListener("keyup", (e) => {
  if (e.keyCode === 13) {
    existente_codigo();
  }
});

const agregar_array_tickets = () => {
  let ultimo = tickets[tickets.length - 1];
  ultimo = ultimo + 1;
  isNaN(ultimo) ? (ultimo = 0) : false;
  tickets.push(ultimo);
  carritos.push([nombre = -10]); //posible cambio, creacion vacio
  return ultimo;
};

const crear_ticket_html = (nuevo_id) => {
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

const crear_contenedor_productos = (nuevo_id) => {
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

const obtener_ticket_html = (e) => {
  const clase = e.target.classList[0];
  let id_del_ticket_seleccionado = e.target.dataset.cliente;
  const esnuevo = id_del_ticket_seleccionado ?? "nuevo";

  if (esnuevo === "nuevo") {
    creacion_de_nuevo_contenedor();
  } else {
    ticket_en_uso = id_del_ticket_seleccionado;
  }
};

contenedor_tickets.addEventListener("click", obtener_ticket_html);

console.log(contenedor_tickets.parentNode);

function creacion_de_nuevo_contenedor() {
  const resultado = agregar_array_tickets();
    crear_ticket_html(resultado);
    crear_contenedor_productos(resultado);
}
