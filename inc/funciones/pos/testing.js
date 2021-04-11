const contenedor_tickets = document.querySelector("#contenedor_tickets");
const padre = document.querySelector("#contenedor_padre_tickets");
let ticket_en_uso = 0;

/*document.addEventListener("DOMContentLoaded", () => {
  contenedor_tickets.addEventListener("click", recuperar_ticket_o_crear_nuevo);
  //document.querySelector("#formulario").addEventListener("click", existente_codigo);
  const enter = document.querySelector("#codigo_envio");
  enter.addEventListener("keyup", (e) => {
    if (e.keyCode === 13) {
      existente_codigo();
    }
  })
});*/
function recuperar_ticket_o_crear_nuevo(e) {
  const clase = e.target.classList[0];
  let id_del_ticket_seleccionado = e.target.dataset.cliente;
  const esnuevo = id_del_ticket_seleccionado ?? "nuevo";

  if (esnuevo === "nuevo" && clase ==="ticket") {
    const resultado = agregar_array_tickets();
    creacion_de_nuevo_contenedor(resultado);
  } else {
    ticket_en_uso = id_del_ticket_seleccionado;
    mostrar_articulos_de_un_carrito();
  }
};

function existente_codigo(e)  {
  const codigo_recuperado = document.querySelector("#codigo_envio").value;
  const si_existe = carritos[ticket_en_uso].findIndex((producto) => producto.codigo === codigo_recuperado);
  console.log(si_existe);
  if (si_existe >= 0) {
    actualizar_carrito(codigo_recuperado, +1);
  }else{
    if(carritos[ticket_en_uso][0] === -10)carritos[ticket_en_uso].shift(); //primer articulo agregado
    console.log("nuevo producto agregado");
    agregar_nuevo_articulo(e);
  }
};

 function agregar_nuevo_articulo(e) {
   console.log("si aqui entro");
buscar_producto(e);

}

function limpiar_contenido_del_carrito() {
  const listado_productos = document.querySelector(`#contenido_tabla_${ticket_en_uso}`);
  listado_productos.innerHTML = "";
} 

  function mostrar_articulos_de_un_carrito() {
    limpiar_contenido_del_carrito();
    let suma = 0;
    const listado_productos = document.querySelector(`#contenido_tabla_${ticket_en_uso}`);
    carritos[ticket_en_uso].forEach(carrito => {
      const { id, nombre, codigo, cantidad, precio_v, importe, descuento} = carrito;
      listado_productos.innerHTML += `  
      <tr>
          <th scope="row">${cantidad}</th>
          <td id="codigo">${codigo}</td>
          <input type="hidden" value="${codigo}" id="codigo${id}">
          <td>${nombre}</td>
          <td>${precio_v}</td>
          <td>${descuento}%</td>
          <td>${importe}</td>
          <td>
          <button data-cliente="${codigo}" type="button" class="btn btn-sm btn-light disminuir"><i data-cliente="${codigo}" class="fa fa-minus disminuir"></i></button>
          <button data-cliente="${codigo}" type="button" class="btn btn-sm btn-dark aumentar">  <i data-cliente="${codigo}" class="fa fa-plus aumentar"></i></button>  
          </td>
      </tr>
      `;
  
      suma = suma + importe;
    });
    mostrar_total_modal(suma, id_venta_actual);
    sincronizar_storage();
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
          <th scope="col">cantidad</th>
          <th scope="col">Codigo</th>
          <th scope="col">nombre</th>
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