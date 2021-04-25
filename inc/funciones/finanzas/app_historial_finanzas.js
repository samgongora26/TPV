
//------LLENADO DE LA TABLA COMPRAS DE FECHA ELEGIDA
async function finanzas_dia() {
  const datos = new FormData();
  //Se obtiene el valor del dia
  const fecha = document.querySelector("#fecha_elegida").value;
  console.log("fecha "+fecha);
  if(fecha != 0){
    datos.append("fecha", fecha);
    datos.append("accion", "buscar_fecha");
    try {
      const URL = "../../../inc/peticiones/finanzas/funciones.php";
      const resultado = await fetch(URL, {
        method: "POST",
        body: datos,
      });
      const db = await resultado.json();
      //let mensaje =db.length;
      //console.log(mensaje);
      
      
      if (db.mensaje == "ok"){
        //console.log(db);
        document.querySelector("#articulos_vendidos").innerHTML = db.articulos_dia;
        document.querySelector("#ventas").innerHTML = `<sup class="set-doller">$</sup>` + db.ventas_hoy;
        document.querySelector("#promedio_ventas").innerHTML = `<sup class="set-doller">$</sup>` + db.promedio_hoy;
        document.querySelector("#tickets_vendidos").innerHTML = db.tickets_hoy;
        document.querySelector("#ventas_hoy2").innerHTML = "$" + db.ventas_hoy;
        document.querySelector("#compras_hoy").innerHTML = "$" + db.compras_hoy;
      }
      else{
        const mensajes = document.querySelector("#mensaje2");
    mensajes.innerHTML += `  
      <div class="alert alert-danger alert-dismissible bg-warning text-white border-0 fade show" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
          </button>
          <strong>¡ALERTA! </strong> No existen registros en la fecha seleccionada.
      </div>
      `;
      }
      
      //imprime el total
      //console.log(suma);
    } catch (error) {
      console.log(error);
    }
  }
  else{
    //Mensaje de alerta
    const mensajes = document.querySelector("#mensaje2");
    mensajes.innerHTML += `  
      <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
          </button>
          <strong>¡ERROR! </strong> No ha seleccionado una fecha.
      </div>
      `;
  }
  
}


