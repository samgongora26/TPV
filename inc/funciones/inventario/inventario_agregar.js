//Variables globales
let select_de_estado;
let select_de_unidad;
let select_de_marca;
//alert('heeey');

eventListeners();
function eventListeners() {
  document
    .querySelector("#formulario")
    .addEventListener("submit", obtener_datos);
}

document.addEventListener("DOMContentLoaded", () => {
  select_marca();
  select_unidad();
});

async function select_marca() {
  const datos = new FormData();
  datos.append("accion", "select_marca");

  try {
    const URL = "../../../inc/peticiones/inventario/funciones.php";
    const resultado = await fetch(URL, {
      method: "POST",
      body: datos,
    });
    const db = await resultado.json();
    db.forEach((servicio) => {
      //console.log(servicio);
      const { id, nombre} = servicio;

      const select_marca = document.querySelector("#select_marca");

      select_marca.innerHTML += `  
      <option value="${id}"> ${nombre}</option>
        `;
    });
  } catch (error) {
    console.log(error);
  }
}

async function select_unidad() {
  const datos = new FormData();
  datos.append("accion", "select_unidad");

  try {
    const URL = "../../../inc/peticiones/inventario/funciones.php";
    const resultado = await fetch(URL, {
      method: "POST",
      body: datos,
    });
    const db = await resultado.json();
    db.forEach((servicio) => {
      //console.log(servicio);
      const { id, nombre} = servicio;

      const select_unidad = document.querySelector("#select_unidad");

      select_unidad.innerHTML += `  
      <option value="${id}"> ${nombre}</option>
        `;
    });
  } catch (error) {
    console.log(error);
  }
}



function obtener_datos(e) {
  e.preventDefault();
  //const imagen = document.querySelector("#imagen").value;
  const nombre = document.querySelector("#nombre").value;
  const codigobarras = document.querySelector("#codigobarras").value;
  const precio = document.querySelector("#precio").value;
  const descripcion = document.querySelector("#descripcion").value;
  const costo = document.querySelector("#costo").value;
  const mayoreo = document.querySelector("#mayoreo").value;
  const caducidad = document.querySelector("#caducidad").value;
  const stock = document.querySelector("#stock").value;

  //si recibe correctamente todos los datos
  //console.log(nombre,codigobarras,precio,descripcion,select_de_unidad,select_de_categoria,select_de_estado,costo,mayoreo,caducidad, stock);

  const datos = new FormData(); //encapsulamiento de los datos para envio
  datos.append("nombre", nombre);
  datos.append("codigobarras", codigobarras);
  datos.append("precio", precio);
  datos.append("descripcion", descripcion);
  datos.append("unidad", select_de_unidad);
  datos.append("estado", select_de_estado);
  //datos.append("categoria", select_de_categoria);
  datos.append("costo", costo);
  datos.append("mayoreo", mayoreo);
  datos.append("caducidad", caducidad);
  datos.append("stock", stock);
  datos.append("marca", select_de_marca);
  datos.append("accion", "registrar");

  enviar_async(datos); //enviar a una funcion
  alert('EL PRODUCTO FUE GUARDADO EXITOSAMENTE');
}




async function enviar_async(cliente) {
  try {
    const res = await fetch(
      "../../../inc/peticiones/inventario/funciones.php",
      {
        //envio del fetch con los datos a php
        method: "POST",
        body: cliente,
      }
    );
    const data = await res.json(); //esperando la respeta de res y guardarlo en una variable

    console.log("respuesta enviada con el metodo async");
    console.log(data);
  } catch (error) {
    console.log(error);
  }
}
//obtener_datos();




//Funciones para extraer datos de los select
      
//UNIDAD
function show_unidad() 
{
    /* Para obtener el valor */
    var cod = document.getElementById("select_unidad").value; 
    /* Para obtener el texto */
    var combo = document.getElementById("select_unidad");
    var selected = combo.options[combo.selectedIndex].text;
    texto_check_unidad = cod; //resivo value
    texto_nombre_unidad = selected; //resivo texto

    select_de_unidad = texto_nombre_unidad; //Variable global
    console.log(texto_check_unidad);
    console.log(texto_nombre_unidad);
    //La_obtencion_de_periodos();
}

//ESTADO
function show_estado() 
{
    /* Para obtener el valor */
    var cod = document.getElementById("select_estado").value; 
    /* Para obtener el texto */
    var combo = document.getElementById("select_estado");
    var selected = combo.options[combo.selectedIndex].text;
    texto_check_estado = cod; //resivo value
    texto_nombre_estado = selected; //resivo texto

    select_de_estado = texto_check_estado; //Variable global
    console.log(texto_check_estado);
    console.log(texto_nombre_estado);
    //La_obtencion_de_periodos();
}


//MARCA
function show_marca() 
{
    /* Para obtener el valor */
    var cod = document.getElementById("select_marca").value; 
    /* Para obtener el texto */
    var combo = document.getElementById("select_marca");
    var selected = combo.options[combo.selectedIndex].text;
    texto_check_marca = cod; //resivo value
    texto_nombre_marca = selected; //resivo texto

    select_de_marca = texto_check_marca; //Variable global
    console.log(texto_check_marca);
    console.log(texto_nombre_marca);
    //La_obtencion_de_periodos();
}

