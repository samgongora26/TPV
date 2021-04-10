// ------------SE CARGA AL INICIAR--------
const listado_usuario = document.querySelector("#contenido_tabla");
document.addEventListener("DOMContentLoaded", () => {
  const parametrosURL = new URLSearchParams(window.location.search);
  id_pedido = parametrosURL.get("id");
  if (id_pedido) {
    mostrarServicios();
  }
});

function mostrarServicios(){
    mostrar_detalle(id_pedido);
    obtener_pedido(id_pedido);
}

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
      const {foto, id_producto,nombre_producto, stock, cantidad, precio_compra, importe, id_detalle_pedido,codigo} = servicio;
      suma += parseInt(importe);
      const listado_clientes = document.querySelector("#contenido_tabla");
      
      listado_clientes.innerHTML += `  
        <tr>
            <td> <img src="../../imagenes/productos/${foto}" alt="user" class="rounded-circle"
            width="40"> </td>
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
    document.getElementById("por_pagar2").value= suma;

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
  
  document.getElementById("id_pedido").value= id_pedido;
  document.getElementById("debido2").value= debido;

  
}


//----------------------OBTENER MONTO. TERMINO DEL PEDIDO--------------
function obtener_monto() {
  //Se obtienen los datos de los input de la interfaz
  let monto = document.querySelector("#monto").value;
  const usuario = document.querySelector("#usuario").value;   
  const por_pagar = parseInt(document.getElementById("por_pagar2").value);
  const id_pedido = document.getElementById("id_pedido").value;
  const debido = document.getElementById("debido2").value;
  
  monto = parseInt(monto) + parseInt(debido);
  console.log(
    monto,
    usuario,
    por_pagar,
    "id_pedido " +id_pedido
  );
  //Validación de campos vacios
  if(monto != "" ){
    //encapsulamiento de los datos para envio
    const datos1 = new FormData(); 
    //datos.append("proveedor", proveedor);
    datos1.append("total", por_pagar);
    datos1.append("pagado", monto);
    datos1.append("id_usuario", usuario);
    datos1.append("id_pedido", id_pedido);
    datos1.append("accion", "saldar_compra");
    
    //SI EL MONTO ES MENOR A LO DEBIDO
    if(monto < por_pagar){
      console.log("monto menor a lo debido");
      //Mensaje de adeudo
      const mensajes = document.querySelector("#mensaje2");
      mensajes.innerHTML += `  
        <div class="alert alert-warning alert-dismissible bg-warning text-white border-0 fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <strong>¡Alerta! </strong> El monto es menor a lo debido, se generará un adeudo.
        </div>
        `;
    }
    
    completar_compra(datos1); //enviar a una funcion
  }
  else if(monto < 0){
    //Mensaje de el monto es menor o igual a 0
    const mensajes = document.querySelector("#mensaje2");
    mensajes.innerHTML += `  
      <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
          </button>
          <strong>¡ERROR! </strong> El monto es menor o igual a 0.
      </div>
      `;
  }
  else{
      //En caso de que el formulario este vacio
      //Mensaje de Formulario vacio 
      const mensajes = document.querySelector("#mensaje2");
        mensajes.innerHTML += `  
          <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>
              <strong>¡ERROR! </strong> Está intentando guardar un registro vacio
          </div>
          `;
  }
}


//Respuesta del servidor
async function completar_compra(compra) {
  try {
    const res = await fetch(
      "../../../inc/peticiones/compras/funciones.php",
      {
        //envio del fetch con los datos a php
        method: "POST",
        body: compra,
      }
    );
    const data = await res.json();
    console.log(data);

    //EN CASO DE QUE NO SE ENCUENTRE EL PROODUCTO
    if(data.pedido != 0 ){
      //mesaje de exito
        const mensajes = document.querySelector("#mensaje2");
        mensajes.innerHTML += `  
          <div class="alert alert-danger alert-dismissible bg-success text-white border-0 fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>
              <strong>La compra ha sido registrado con exito</strong>
          </div>
          `;
      //Se vacia el contenido de la tabla
      document.getElementById("contenido_tabla").innerHTML="";
      //Llamada a la funcion para llenar la tabla 
      mostrarServicios(); 
    }
    else{
     //mesaje de fracaso
      const mensajes = document.querySelector("#mensaje2");
      mensajes.innerHTML += `  
        <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <strong>Error.</strong>
        </div>
        `;
    }    
  } catch (error) {
    console.log(error);
  }
}