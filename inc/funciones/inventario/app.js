const listado_productos = document.querySelector("#contenido_tabla");
const modal = document.querySelector("#form-modal-edit");
const btn_buscar = document.querySelector("#buscar");
let id_necesario = 0;

document.addEventListener("DOMContentLoaded", () => {
  mostrarServicios();
  listado_productos.addEventListener("click", eliminar_registro);
  listado_productos.addEventListener("click", obtener_datos_unitarios);
  modal.addEventListener("submit", editar_registro);
  btn_buscar.addEventListener("click", busqueda_especifica);
});

function busqueda_especifica(e) {
  listado_productos.innerHTML = "";
  e.preventDefault();
  const texto_buscar = document.querySelector("#valor_busqueda").value;

  const datos = new FormData();
  datos.append("nombre", texto_buscar);
  datos.append("accion", "filtro");

  llamado(datos).then((res) => {
    res.forEach((datos) => {
      console.log(datos);
      const { id, nombre, codigo, precio_costo, precio_venta, stock, marca } = datos;

      const listado_productos = document.querySelector("#contenido_tabla");

      listado_productos.innerHTML += `  
      <tr id="ver_productos_${id}">
          <th scope="row">${id}</th>
          <td>${nombre}</td>
          <td>${codigo}</td>
          <td>${precio_costo}</td>
          <td>${precio_venta}</td>
          <td>${stock}</td>
          <td>${marca}</td>
          <td>
          <button type="button" class="btn btn-primary" data-toggle="modal"
              data-target="#estado-modal"><i data-cliente="${id}" class="icon-note"></i></button>    
          </td>
          <td>
              <button type="button" class="btn btn-primary boton_ver"><i href="inventario_producto_ver.php?id=${id}" class="icon-eye"></i></button>
          </td>
          <td>
            <button type="button" class="btn btn-primary editar" data-toggle="modal"
            data-target="#edit-modal"><i data-cliente="${id}" class="icon-pencil editar"></i></button>
          </td>
          <td>
              <button type="button" class="btn btn-primary boton_imprimir"><i data-cliente="${id}" class="icon-printer"></i></button>    
          </td>
          <td>
              <button type="button" class="btn btn-primary"><i data-cliente="${id}" class="icon-trash eliminar"></i></button>
          </td>
      </tr>
      `;
    });
  });
}

async function llamado(datos) {
  try {
    const res = await fetch(
      "../../../inc/peticiones/inventario/funciones.php",
      {
        method: "POST",
        body: datos,
      }
    );
    const data = await res.json();
    return data;
  } catch (error) {
    console.log(error);
  }
}

 function mostrarServicios() {
  const datos = new FormData();
  datos.append("accion", "mostrar");

  llamado(datos).then((res) => {
    res.forEach((datos) => {
      console.log(datos);
      const { id, nombre, codigo, precio_costo, precio_venta, stock, marca } = datos;

      const listado_productos = document.querySelector("#contenido_tabla");



      listado_productos.innerHTML +=`
          <tr id="ver_productos_${id}">
          <th scope="row">${id}</th>
          <td>${nombre}</td>
          <td>${codigo}</td>
          <td>${precio_costo}</td>
          <td>${precio_venta}</td>
          <td>${stock}</td>
          <td>${marca}</td>
          <td>
          <button type="button" class="btn btn-primary" data-toggle="modal"
              data-target="#estado-modal"><i data-cliente="${id}" class="icon-note"></i></button>    
          </td>
          <td>
              <button type="button" class="btn btn-primary boton_ver"><i href="inventario_producto_ver.php?id=${id}" class="icon-eye"></i></button>
          </td>
          <td>
            <button type="button" class="btn btn-primary editar" data-toggle="modal"
            data-target="#edit-modal"><i data-cliente="${id}" class="icon-pencil editar"></i></button>
          </td>
          <td>
              <button type="button" class="btn btn-primary boton_imprimir"><i data-cliente="${id}" class="icon-printer"></i></button>    
          </td>
          <td>
              <button type="button" class="btn btn-primary"><i data-cliente="${id}" class="icon-trash eliminar"></i></button>
          </td>
      </tr>
      `;
    });
  });
}

function eliminar_registro(e) {
  let idEliminar = null;
  if (e.target.classList.contains("eliminar")) {
    idEliminar = Number(e.target.dataset.cliente);
    const confirmar = confirm("¿Deseas eliminar este cliente?");
    if (confirmar) {
      //  console.log(idEliminar);
      const datos = new FormData();
      datos.append("id", idEliminar);
      datos.append("accion", "eliminar");
      llamado(datos).then((res) =>
        e.target.parentElement.parentElement.remove()
      );
    }
  }
}


function obtener_datos_unitarios(e) {
  let idEliminar = null;
  if (e.target.classList.contains("editar")) {
    console.log("Entro a editar");
    idEliminar = Number(e.target.dataset.cliente);
    id_necesario = idEliminar;
    console.log(id_necesario);
    const datos = new FormData();
    datos.append("id", id_necesario);
    datos.append("accion", "buscar");
    llamado(datos).then((res) => {
      console.log(res);
      const edit_barras = (document.querySelector("#edit_barras").value =
        res.codigo);
      const edit_nombre = (document.querySelector("#edit_nombre").value =
        res.nombre_producto);
      const edit_stock = (document.querySelector("#edit_stock").value =
        res.cantidad_stock);
      const edit_precio_compra = (document.querySelector("#edit_precio_compra").value = 
      res.precio_costo);
      const edit_precio_venta = (document.querySelector("#edit_precio_venta").value =
        res.precio_venta);
    });
  }
}

 function editar_registro(e) {
  e.preventDefault();
  //console.log("Haaaaaaaaaaaa");
  const edit_barra = document.querySelector("#edit_barras").value;
  const edit_nombre = document.querySelector("#edit_nombre").value;
  const edit_stock = document.querySelector("#edit_stock").value;
  const edit_precio_compra = document.querySelector("#edit_precio_compra").value;
  const edit_precio_venta = document.querySelector("#edit_precio_venta").value;

  const datos = new FormData();
  datos.append("id", id_necesario);
  datos.append("barra", edit_barra);
  datos.append("nombre", edit_nombre);
  datos.append("precio_venta", edit_precio_venta);
  datos.append("stock", edit_stock);
  datos.append("precio_compra", edit_precio_compra);
  datos.append("accion", "actualizar");

  /*const peticion = await llamado(datos);
  console.log(peticion);
  alert("los datos se han cambiado correctamente");*/

  llamado(datos).then((res) => {
    console.log(res);
    const registro_contenido = document.querySelector(
      `#ver_producto_${id_necesario}`
    );

    const { id, nombre, codigo, precio_costo, precio_venta, stock, marca } = res;
    registro_contenido.innerHTML = `
    <th scope="row">${id}</th>
    <td>${nombre}</td>
    <td>${codigo}</td>
    <td>${precio_costo}</td>
    <td>${precio_venta}</td>
    <td>${stock}</td>
    <td>${marca}</td>
    <td><a href="google.com.mx"><i class="fas fa-check-circle"></i> </a></td>
    <td><a href="inventario_lista.php?id=${id}"><i class="fas fa-eye"></i> </a></td>            
    <td>
      <button type="button" class="btn btn-primary editar" data-toggle="modal"
      data-target="#edit-modal"><i data-cliente="${id}" class="icon-pencil editar"></i></button>
    </td>
    <td>
      <button type="button" class="btn btn-primary"><i data-cliente="${id}" class="icon-trash eliminar"></i></button>
    </td>
    `;
    // console.log(registro_contenido);
  });
}
