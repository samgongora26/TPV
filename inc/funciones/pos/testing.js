let contenedor_tickets = document.querySelector("#contenedor_tickets");
const tickets_activos = [];

const agregar_array_tickets = () =>{
    let ultimo = tickets_activos[tickets_activos.length - 1];
     ultimo = ultimo + 1;
     isNaN(ultimo) ? ultimo = 1 : false;
    tickets_activos.push(ultimo);
return ultimo;
}

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

const crear_contenedor_productos  = (nuevo_id) => {
  console.log("que pasa");
  let node = document.createElement("DIV");
  node.classList.add("tab-pane");
  node.setAttribute("ID",`pre_ticket${nuevo_id}`);
  let textnode =
   `<table class="table table-sm mb-0">
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
  <tbody>
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
console.log(node);
const padre = document.querySelector("#contenedor_padre_tickets");
console.log(padre.childNodes);
padre.appendChild(node);                                 
};



const comprobar_si_es_nuevo = (e) => {
  const clase = e.target.classList[0];
  let codigo = e.target.dataset.cliente;
  const esnuevo = codigo ?? "nuevo";

  if(esnuevo === "nuevo"){
    const resultado = agregar_array_tickets();
    crear_ticket_html(resultado);
    crear_contenedor_productos(resultado);
  }
  // console.log(codigo ?? "nuevo"); // si encuentra el valor como null o undefined se le asinga nuevo
  // console.log(codigo && "nuevo"); // si encuentra cualquier valor diferente de null o undefined se le asigna nuevo
};

contenedor_tickets.addEventListener("click", comprobar_si_es_nuevo);

console.log(contenedor_tickets.parentNode);
