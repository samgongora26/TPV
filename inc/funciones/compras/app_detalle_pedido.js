// ------------SE CARGA AL INICIAR--------
const listado_usuario = document.querySelector("#contenido_tabla");
document.addEventListener("DOMContentLoaded", () => {
  const parametrosURL = new URLSearchParams(window.location.search);
  id_pedido = parametrosURL.get("id");
  if (id_pedido) {
    mostrar_detalle(id_pedido);
    obtener_pedido(id_pedido);
  }
});


//------LLENADO DE LA TABLA
async function mostrar_detalle(id_pedido) {
  const datos = new FormData();

  datos.append("id_pedido", id_pedido);
  datos.append("accion", "buscar_pedido");

  try {
    const URL = "../../../inc/peticiones/compras/funciones.php";
    const resultado = await fetch(URL, {
      method: "POST",
      body: datos,
    });
    const db = await resultado.json();
    let suma = 0;
    db.forEach((servicio) => {
      //console.log(servicio);
      const { id_producto,nombre_producto, stock, cantidad, precio_compra, importe, id_detalle_pedido,codigo} = servicio;
      suma += parseInt(importe);
      const listado_clientes = document.querySelector("#contenido_tabla");
      
      listado_clientes.innerHTML += `  
        <tr>
            <td scope="row">${codigo}</td>
            <td scope="row">${nombre_producto}</td>
            <td scope="row">${stock}</td>
            <td>${cantidad} </td>  
            <td>${precio_compra} </td>  
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

//-------LLENADO DE DATOS DEL PEDIDO
async function obtener_pedido(id_pedido) {
  const datos = new FormData();
  datos.append("id_pedido", id_pedido);
  datos.append("accion", "datos_pedido");

  try {
    direccion = "../../../inc/peticiones/compras/funciones.php";
    const peticion = await fetch(direccion, {
      method: "POST",
      body: datos,
    });
    const resultado = await peticion.json();
    console.log(resultado);
    llenar_formulario(resultado);
  } catch (error) {
    console.log(error);
  }
}

function llenar_formulario(pedido) {
  const pedido_texto = document.querySelector("#pedido");
  //const total = document.querySelector("#por_pagar");
  const pagado_texto = document.querySelector("#pagado");
  const debido_texto = document.querySelector("#debido");
  

  const { id_pedido, fecha , total, pagado, estado } = pedido;
  
  pedido_texto.innerHTML = 'Pedido numero: '+id_pedido;
  pagado_texto.value ='$'+pagado;
  let debido = 0;
  debido = total-pagado;
  if(debido<=0){
    debido = "saldado";
    debido_texto.setAttribute("class", "form-control  bg-success");
    debido_texto.value = debido; 
  }
  else{
    debido_texto.setAttribute("class", "form-control  bg-danger");
    debido_texto.value = '$'+debido; 
  }
   
}


