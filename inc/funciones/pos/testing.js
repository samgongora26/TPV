const contenedor_tickets = document.querySelector("#contenedor_tickets");
const padre = document.querySelector("#contenedor_padre_tickets");
let ticket_en_uso = 0;
const tickets = [];
const carrito_test = [`melon`,`sandia`, `papaya`,`cereal`,`leche`,`galletas`,`jugo`,`sabritas`,`silla`,`mesa`]

document.querySelector("#formulario").addEventListener("click", existente_codigo);
const enter = document.querySelector("#codigo_envio");
enter.addEventListener("keyup", (e) => {
  if (e.keyCode === 13) {
    existente_codigo();
  }
})

const existente_codigo = () => alert("hola mundo");

const agregar_array_tickets = () => {
  let ultimo = tickets[tickets.length - 1];
  ultimo = ultimo + 1;
  isNaN(ultimo) ? (ultimo = 0) : false;
  tickets.push(ultimo);
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
      <tr>
          <th scope="row">desde el numero ${nuevo_id} xd</th>
          <td>vbrbrbrb</td>
          <td>0001</td>
          <td>5000</td>
          <td>-</td>
          <td>5000</td>
      </tr>                
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
    const resultado = agregar_array_tickets();
    crear_ticket_html(resultado);
    crear_contenedor_productos(resultado);
  }else{
    ticket_en_uso = id_del_ticket_seleccionado;
  }
};

contenedor_tickets.addEventListener("click", obtener_ticket_html);

console.log(contenedor_tickets.parentNode);
