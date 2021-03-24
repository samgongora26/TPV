//Variables globales
let select_de_estado;

eventListeners();
function eventListeners() {
  document
    .querySelector("#formulario_agregar_marca")
    .addEventListener("submit", obtener_datos);
}


function obtener_datos(e) {
  e.preventDefault();
  //const imagen = document.querySelector("#imagen").value;
  const nombre = document.querySelector("#nombre_marca").value;

  //si recibe correctamente todos los datos
  console.log(nombre,select_de_estado);

  const datos = new FormData(); //encapsulamiento de los datos para envio
  datos.append("nombre", nombre);
  datos.append("estado", select_de_estado);
  datos.append("accion", "registrarm");

  enviar_async(datos); //enviar a una funcion
  alert('LA MARCA SE REGISTRÓ EXITOSAMENTE');
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
