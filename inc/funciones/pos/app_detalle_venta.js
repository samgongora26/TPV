// ------------SE CARGA AL INICIAR--------
const listado_usuario = document.querySelector("#contenido_tabla");
document.addEventListener("DOMContentLoaded", () => {
  const parametrosURL = new URLSearchParams(window.location.search);
  id_venta = parametrosURL.get("id");
  if (id_venta) {
    mostrar_detalle(id_venta);
    //obtener_pedido(id_pedido);
  }
});


//------LLENADO DE LA TABLA
async function mostrar_detalle(id_venta) {
  const datos = new FormData();

  datos.append("id_venta", id_venta);
  datos.append("accion", "buscar_venta");

  try {
    const URL = "../../../inc/peticiones/pos/funciones.php";
    const resultado = await fetch(URL, {
      method: "POST",
      body: datos,
    });
    const db = await resultado.json();
    let suma = 0;
    db.forEach((servicio) => {
      //console.log(servicio);
      const {foto, id_detalle_venta,id_venta, id_producto, precio_venta, cantidad, importe,codigo, nombre_producto} = servicio;
      suma += parseInt(importe);
      const listado_clientes = document.querySelector("#contenido_tabla");
      
      listado_clientes.innerHTML += `  
        <tr>
            <td> <img src="../../imagenes/productos/${foto}" alt="user" class="rounded-circle"
            width="40"> </td>
            <td scope="row">${codigo}</td>
            <td scope="row">${nombre_producto}</td>
            <td>${cantidad} </td>  
            <td>${precio_venta} </td>  
            <td>${importe} </td>       
        </tr>
        `;
    });

    //imprime el total
    //console.log(suma);
    document.getElementById("por_pagar").value="$" + suma;
    //document.getElementById("por_pagar2").value= suma;

  } catch (error) {
    console.log(error);
  }
}

