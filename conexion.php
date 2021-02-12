<?php
$conexion = mysqli_connect("localhost", "root", "adminadmin", "new_tpv");
   /* if(!$conexion){
        echo "conexion fallida";    
    }else{
        echo "conexion correcta";
    }
    
    //descomentarlo te ayuda para comprobar si esta entrando al archivo
    //descomentarlo te ayuda para comprobar si esta entro a la base de datos
    
    // ******comentarlo siempre que sea posible ****
    //   de no hacerlo genere un error de json de surgir puede que sea que no este comentado.