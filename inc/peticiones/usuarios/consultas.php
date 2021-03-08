<?php
function registrar_usuario(): boolean
{           //recibe los datos correctamente
    try {
        require '../../../conexion.php';

        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $telefono = $_POST['telefono'];
        $correo =  $_POST['correo'];
        $usuario = $_POST['usuario'];
        $contrasenia = $_POST['contrasenia'];

        //COMPROBACIÓN DE USUARIOS REPETIDOS
        $sql = "SELECT * FROM `usuarios`;";
        $consulta = mysqli_query($conexion, $sql);
        $usuarios = [];
        $usuario_repetido = false;
        while ($row = mysqli_fetch_assoc($consulta)) { //usar cuando se espera varios resultadosS
            if($usuario ==  $row['usuario']){{
                $usuario_repetido = true;
            }}
        }
        
        if(!$usuario_repetido){
            $sql =  "INSERT INTO `usuarios`( `nombres`, `apellidos`, `telefono`, `correo`, `usuario`, `contrasenia`, `fotografia`, `estado`)
            VALUES ('$nombres','$apellidos','$telefono','$correo','$usuario','$contrasenia','1.jpg',1)";
            $consulta = mysqli_query($conexion, $sql);
            return false;
        }
        else{
            return true;
        }

    } catch (\Throwable $th) {
        var_dump($th);
    }
    mysqli_close($conexion);
}

function mostrar_usuarios(): array
{
    try {
        require '../../../conexion.php';

        $sql = "SELECT * FROM `usuarios`;";
        $consulta = mysqli_query($conexion, $sql);
        $usuarios = [];
        $i = 0;
        while ($row = mysqli_fetch_assoc($consulta)) { //usar cuando se espera varios resultadosS
            $usuarios[$i]['id_usuario'] = $row['id_usuario'];
            $usuarios[$i]['nombres'] = $row['nombres'];
            $usuarios[$i]['apellidos'] = $row['apellidos'];
            $usuarios[$i]['telefono'] = $row['telefono'];
            $usuarios[$i]['correo'] = $row['correo'];
            $usuarios[$i]['usuario'] = $row['usuario'];
            $usuarios[$i]['contrasenia'] = $row['contrasenia'];
            $usuarios[$i]['fotografia'] = $row['fotografia'];
            $usuarios[$i]['estado'] = $row['estado'];
            $i++;
        }
        //var_dump($usuarios);
        return $usuarios;
    } catch (\Throwable $th) {
        var_dump($th);
    }
    mysqli_close($conexion);
}

function actualizar_usuario(): array
{
    try {
        require '../../../conexion.php';
        $id = $_POST['id'];
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $telefono = $_POST['telefono'];
        $correo =  $_POST['correo'];
        $usuario = $_POST['usuario'];
        $contrasenia = $_POST['contrasenia'];
        $estado = $_POST['estado'];
        
        $sql = "UPDATE `usuarios` SET `nombres`= '$nombres',`apellidos`= '$apellidos',`telefono`=  '$telefono',`correo`= '$correo',`usuario`= '$usuario',`contrasenia`= '$contrasenia',`fotografia`= '1.jpg',`estado`= $estado WHERE `usuarios`.`id_usuario` = $id;";
        $consulta = mysqli_query($conexion, $sql);

        $respuesta = array(
            'respuesta' => 'correcto',
            'id' => $id
        );

        return $respuesta;
    } catch (\Throwable $th) {
        var_dump($th);
    }
    mysqli_close($conexion);
}

function eliminar_usuario(): array
{
    try {
        require '../../../conexion.php';
        
        $id = $_POST['id'];
        $sql = " DELETE FROM `usuarios` WHERE `usuarios`.`id_usuario`= $id";
        $consulta = mysqli_query($conexion, $sql);

        $respuesta = array(
            'respuesta' => 'eliminado',
            'id' => $id
        );

        return $respuesta;
    } catch (\Throwable $th) {
        var_dump($th);
    }
    mysqli_close($conexion);
}

//-------------------PUESTOS-----------------

function mostrar_puestos(): array
{
    try {
        require '../../../conexion.php';

        $sql = "SELECT * FROM `puestos`;";
        $consulta = mysqli_query($conexion, $sql);
        $usuarios = [];
        $i = 0;
        while ($row = mysqli_fetch_assoc($consulta)) { //usar cuando se espera varios resultadosS
            $usuarios[$i]['id_puesto'] = $row['id_puesto'];
            $usuarios[$i]['nombre_puesto'] = $row['nombre_puesto'];
            $usuarios[$i]['estado'] = $row['estado'];
            $i++;
        }
        //var_dump($usuarios);
        return $usuarios;
    } catch (\Throwable $th) {
        var_dump($th);
    }
    mysqli_close($conexion);
}