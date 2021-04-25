//const listado_productos = document.querySelector("#contenido_busqueda_producto");
const modal = document.querySelector("#form-modal-edit");
const btn_buscar = document.querySelector("#buscar");
const barra_buscar = document.querySelector("#valor_busqueda");
let id_necesario = 0;

document.addEventListener("DOMContentLoaded", () => {
  //btn_buscar.addEventListener("click", busqueda_especifica);
  barra_buscar.addEventListener("keyup", busqueda_especifica);
});

function busqueda_especifica(e) {
  //listado_productos.innerHTML = "";
  e.preventDefault();
  const texto_buscar = document.querySelector("#valor_busqueda").value;

  const datos = new FormData();
  datos.append("nombre", texto_buscar);
  datos.append("accion", "filtro");

  llamado(datos).then((res) => {
    res.forEach((datos) => {
      const { id, nombre, codigo, precio_costo, precio_venta, stock, marca } = datos;

      const listado_productos = document.querySelector("#contenido_busqueda_producto");

      listado_productos.innerHTML += `  
      <tr id="ver_productos_${id}">
          <th scope="row">${id}</th>
          <td>${nombre}</td>
          <td id="codigo_producto${id}">${codigo}</td>
          <td>${precio_venta}</td>
          <td>${stock}</td>
          <td>
          <button type="button" class="btn" onclick="copiar_codigo(${id})"> <i class="fas fa-clone"></i> </button>
          </td>
          <td>
          <a href="../inventario/inventario_ver.php?id=${id}"><i class="fas fa-eye"></i> </a>
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

function copiar_codigo(id){                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         
  let codigo = document.querySelector("#codigo_producto" +id).innerHTML;
  document.querySelector("#codigo_envio").value = codigo;

  const mensajes = document.querySelector("#mensaje2");
  mensajes.innerHTML += `  
    <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <strong>El producto ha sido copiado</strong>
    </div>
    `;
    existente_codigo_sin_evento();
    cerrar_modal_buscar();
}


