//Variables globales
let select_de_marca;

eventListeners();
function eventListeners() {
  document
    .querySelector("#formulario_agregar_categoria")
    .addEventListener("submit", obtener_datos);
}

document.addEventListener("DOMContentLoaded", () => {
  select_mar();
});

function obtener_datos(e) {
  e.preventDefault();
  //const imagen = document.querySelector("#imagen").value;
  const nombre = document.querySelector("#nombre_categoria").value;
  //const marca = document.querySelector("#nombre_categoria").value;
  const detalles = document.querySelector("#detalles").value;

  //si recibe correctamente todos los datos
  console.log(nombre,detalles,select_de_marca);

  const datos = new FormData(); //encapsulamiento de los datos para envio
  datos.append("nombre", nombre);
  datos.append("detalles", detalles);
  datos.append("marca", select_de_marca);
  datos.append("accion", "registrarc");

  enviar_async(datos); //enviar a una funcion
  alert('LA CATEGORIA SE REGISTRÓ EXITOSAMENTE');
}

async function select_mar() {
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

      const select_estado = document.querySelector("#select_marca_c");

      select_estado.innerHTML += `  
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
 

//marca
function show_marca_c() 
{
    /* Para obtener el valor */
    var cod = document.getElementById("select_marca_c").value; 
    /* Para obtener el texto */
    var combo = document.getElementById("select_marca_c");
    var selected = combo.options[combo.selectedIndex].text;
    texto_check_marca = cod; //resivo value
    texto_nombre_marca = selected; //resivo texto

    select_de_marca = texto_check_marca; //Variable global

    console.log(texto_check_marca);
    console.log(texto_nombre_marca);
    //La_obtencion_de_periodos();
}
