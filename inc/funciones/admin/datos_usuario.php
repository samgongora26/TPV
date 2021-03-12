<?php   //-------CONEXIÓN A LA BASE DE DATOS
    include '../../../conexion.php';
    $result = mysqli_query($conexion, "SELECT * FROM `usuarios` WHERE `id_usuario` = '$id_user'");
    $total = mysqli_num_rows($result);                                      
    $usr=mysqli_fetch_array($result);    
    //Ejemplos de como usar los datos:
    //echo $usr["nombres"];
    //echo $usr["apellidos"];
    //echo $usr["usuario"];
    //echo $usr["fotografia"]
    //echo $usr["estado"]
    mysqli_close($conexion);
    //La fecha tiene un dia de más, asi que se le resta 1
    $dia = date('d')-1;
    //Hoy es el dia/mes/año  $dia.'/'.
    $hoy = "$dia".date('/m/Y'); 

?>