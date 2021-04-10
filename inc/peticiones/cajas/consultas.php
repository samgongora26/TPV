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
