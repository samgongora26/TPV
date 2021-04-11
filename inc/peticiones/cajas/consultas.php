<?php

function abrir_caja(): array
{           //recibe los datos correctamente
    try {
        require '../../../conexion.php';

        $user = $_POST["user"];
        $user_actual = $_POST["user_actual"];
        $pass = $_POST["pass"];
        $monto = $_POST["monto"];
        $fecha_hora_actual = date('Y-m-d H:i:s');
        $accedio = false;
        
        $sql = "SELECT * FROM `usuarios` WHERE `usuario` = '$user' and `contrasenia` = '$pass' and `estado` = 1 ";
        $consulta = mysqli_query($conexion, $sql);
        $usuario_consulta = mysqli_fetch_assoc($consulta); //usar cuando se espera varios resultadosS
        $id_usuario = $usuario_consulta["id_usuario"];
        if($id_usuario == $user_actual){
            $mensaje = "son el mismo usuario ";
            //SI EL USUARIO EXISTE Y SON LOS MISMOS
            if($id_usuario > 0){
                $mensaje = $mensaje . " el id es mayor a 0";
                $sql = "INSERT INTO `cajas`(`id_usuario`, `fecha_abertura`, `fecha_cierre`, `monto_inicial`, `monto_final`, `corte`) 
                        VALUES ($id_usuario, '$fecha_hora_actual' , '', '$monto', '', 0)";
                $consulta = mysqli_query($conexion, $sql);
                //header("location: ../../../src/plantillas/ventas/tpv.php");
                $accedio = true;
            }

        }
        else{
            $mensaje = "son usuarios distintos ";
            //header("location: ../../../src/plantillas/ventas/ini.php");
            $accedio = false;
        }

        $respuesta = array(
            'mensaje' => $mensaje,
            'accedio' => $accedio,
            'user' => $user,
            'id_usaurio' => $id_usuario,
            'user_actual' => $user_actual,
            'pass' => $pass,
            'monto' => $monto,
            'fecha y hora' => $fecha_hora_actual
        );
        return $respuesta;

    } catch (\Throwable $th) {
        var_dump($th);
    }
    mysqli_close($conexion);
}

function verificar_caja_abierta(): array
{           //recibe los datos correctamente
    try {
        require '../../../conexion.php';
        $user_actual = $_POST["user_actual"];
        $caja_abierta = false;
        $accedio = false;
        $sql = "SELECT * FROM `cajas` WHERE `id_usuario` = $user_actual AND `corte` = 0";
        $consulta = mysqli_query($conexion, $sql);
        $corte = mysqli_fetch_assoc($consulta); //usar cuando se espera varios resultadosS
        $id_caja = $corte["id_caja"];
        if($id_caja > 0){
            $mensaje = "";
            $caja_abierta = true;
        }
        else{
            $mensaje = "";
        }

        $respuesta = array(
            'mensaje' => $mensaje,
            'user actual' => $user_actual,
            'caja_abierta' => $caja_abierta,
        );
        return $respuesta;

    } catch (\Throwable $th) {
        var_dump($th);
    }
    mysqli_close($conexion);
}

function cerrar_caja(): array
{           //recibe los datos correctamente
    try {
        require '../../../conexion.php';

        $user = $_POST["user"];
        $user_actual = $_POST["user_actual"];
        $pass = $_POST["pass"];
        $monto = $_POST["monto"];
        $fecha_hora_actual = date('Y-m-d H:i:s');
        $accedio = false;
        $caja_abierta = false;
        //VALIDACION DE QUE EL USUARIO QUE ESTA CERRANDO CAJA SEA EL MISMO QUE ESTÁ LOGGUEADO
        $sql = "SELECT * FROM `usuarios` WHERE `usuario` = '$user' and `contrasenia` = '$pass' and `estado` = 1 ";
        $consulta = mysqli_query($conexion, $sql);
        $usuario_consulta = mysqli_fetch_assoc($consulta); //usar cuando se espera varios resultadosS
        $id_usuario = $usuario_consulta["id_usuario"]; 
        if($id_usuario == $user_actual){ //SI SSON EL MISMO USUARIO
            $mensaje = "son el mismo usuario ";
            //SI EL USUARIO EXISTE Y SON LOS MISMOS
            if($id_usuario > 0){
                $mensaje = $mensaje . " el id es mayor a 0";
                //VALIDACION DE QUE EL USAURIO TIENE UNA CAJA ABIERTA
                $sql = "SELECT * FROM `cajas` WHERE `id_usuario` = $id_usuario AND `corte` = 0";
                $consulta = mysqli_query($conexion, $sql);
                $corte = mysqli_fetch_assoc($consulta); //usar cuando se espera varios resultados
                $id_caja = $corte["id_caja"];
                if($id_caja > 0){ //SI HAY UNA CAJA ABIERTA
                    $mensaje = " hay una caja abierta del usuario";
                    $caja_abierta = true;
                    //PARA CAMBIAR A CERRAR LA CAJA
                    //1. SE DEBE DE OBTENER EL MONTO REAL DE LAS VENTAS CON CORTE 0
                        $sql = "SELECT sum(`importe`) as total_ventas FROM `ventas` WHERE `corte` = 0 and `id_empleado` =  $id_usuario";
                        $consulta = mysqli_query($conexion, $sql);
                        $consulta_ventas = mysqli_fetch_assoc($consulta);
                        $total_ventas = $consulta_ventas["total_ventas"]; //ESTE ES TOTAL REAL DE LAS VENTAS 
                    
                    //2. ACTUALIZAR EL CORTE DE LAS VENTAS A 1 
                        $sql = "UPDATE `ventas` SET `corte`= 1 WHERE  `corte` = 0 and `id_empleado` = $id_usuario";
                        $consulta = mysqli_query($conexion, $sql);
                        
                    //3. ACTUALIZAR LA CAJA A ESTADO 1 DE CERRADO Y AGREGAR EL MONTO REAL Y EL DEL CAJERO
                        $sql = "UPDATE `cajas` SET `fecha_cierre`= '$fecha_hora_actual',`monto_final`='$monto',`monto_final_ventas`='$total_ventas',`corte`=1 WHERE `id_caja` =  $id_caja";
                        $consulta = mysqli_query($conexion, $sql);
                }
                else{
                    $mensaje = " no hay una caja abierta del usuario";
                }
                
                $accedio = true;
            }

        }
        else{
            $mensaje = "son usuarios distintos ";
            $accedio = false;
        }

        $respuesta = array(
            'mensaje' => $mensaje,
            'accedio' => $accedio,
            'caja_abierta' => $caja_abierta,
            'total_ventas' => $total_ventas,
            'user' => $user,
            'id_usaurio' => $id_usuario,
            'user_actual' => $user_actual,
            'pass' => $pass,
            'monto' => $monto,
            'fecha y hora' => $fecha_hora_actual
        );
        return $respuesta;

    } catch (\Throwable $th) {
        var_dump($th);
    }
    mysqli_close($conexion);
}
