<?php
    session_start();
    require '../../../conexion.php';

    $user = $_POST["user"];
    $pass = $_POST["pass"];

    $result = mysqli_query($conexion, "SELECT * FROM `usuarios` WHERE `usuario` = '$user' and `contrasenia` = '$pass' ");
    $total = mysqli_num_rows($result);                                      
    $row=mysqli_fetch_array($result);
    //$promedio = mysqli_fetch_array($res_p)[0];

    if($row["id_usuario"] != 0){
        //La sesión es el id del usuario que ingresó
        $_SESSION["id_user"] = $row["id_usuario"];
        header("location: ../../../src/plantillas/home/home.php");
        //echo 'id '.$_SESSION["id_user"];
        //echo 'nombre '.$row["nombre"];
    }
    else{
        header("location: ../../../index.html");
        echo "datos incorrectos";
    }
    mysqli_close($conexion);
?>