//Variables globales
let select_de_categoria;

eventListeners();
function eventListeners() {
  document
    .querySelector("#formulario_agregar_marca")
    .addEventListener("submit", obtener_datos);
}

document.addEventListener("DOMContentLoaded", () => {
  select_cat();
});


function obtener_datos(e) {
  e.preventDefault();
  //const imagen = document.querySelector("#imagen").value;
  const nombre = document.querySelector("#nombre_marca").value;

  //si recibe correctamente todos los datos
  console.log(nombre,select_de_categoria);

  const datos = new FormData(); //encapsulamiento de los datos para envio
  datos.append("nombre", nombre);
  datos.append("categoria", select_de_categoria);
  datos.append("accion", "registrarm");

  enviar_async(datos); //enviar a una funcion
  alert('LA MARCA SE REGISTRÓ EXITOSAMENTE');
}

async function select_cat() {
  const datos = new FormData();
  datos.append("accion", "select_categoria");

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

      const select_categoria = document.querySelector("#select_categoria");

      select_categoria.innerHTML += `  
      <option value="${id}"> ${nombre}</option>
        `;
    });
  } catch (error) {
    console.log(error);
  }
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
 

//ESTADO
function show_categoria() 
{
    /* Para obtener el valor */
    var cod = document.getElementById("select_categoria").value; 
    /* Para obtener el texto */
    var combo = document.getElementById("select_categoria");
    var selected = combo.options[combo.selectedIndex].text;
    texto_check_estado = cod; //resivo value
    texto_nombre_estado = selected; //resivo texto

    select_de_categoria = texto_check_estado; //Variable global

    console.log(texto_check_estado);
    console.log(texto_nombre_estado);
    //La_obtencion_de_periodos();
}
