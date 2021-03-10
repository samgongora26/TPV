<?php
function registrar_usuario(): array
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
            
        }

        $respuesta = array(
            'repetido' => $usuario_repetido
        );
        return $respuesta;

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

function registrar_puesto(): array
{           //recibe los datos correctamente
    try {
        require '../../../conexion.php';

        $nombre = $_POST['nombre'];

        //COMPROBACIÓN DE USUARIOS REPETIDOS
        $sql = "SELECT * FROM `puestos`;";
        $consulta = mysqli_query($conexion, $sql);
        $puesto_repetido = false;
        while ($row = mysqli_fetch_assoc($consulta)) { //usar cuando se espera varios resultadosS
            if($nombre ==  $row['nombre_puesto']){{
                $puesto_repetido = true;
            }}
        }
        
        if(!$puesto_repetido){
            $sql =  "INSERT INTO `puestos`( `nombre_puesto`, `estado`) VALUES ('$nombre',1)";
            $consulta = mysqli_query($conexion, $sql);
        }
        
        $respuesta = array(
            'repetido' => $puesto_repetido
        );
        return $respuesta;
    } catch (\Throwable $th) {
        var_dump($th);
    }
    mysqli_close($conexion);
}

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

function actualizar_puesto(): array
{
    try {
        require '../../../conexion.php';
        $id = $_POST['id'];
        $nombres = $_POST['nombres'];
        $estado = $_POST['estado'];
        
        $sql = "UPDATE `puestos` SET `nombre_puesto`='$nombres',`estado`='$estado' WHERE `puestos`.`id_puesto` = $id;";
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

function eliminar_puesto(): array
{
    try {
        require '../../../conexion.php';
        
        $id = $_POST['id'];
        $sql = " DELETE FROM `puestos` WHERE `puestos`.`id_puesto`= $id";
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

//----------------HORARIOS

function registrar_horario(): array
{           //recibe los datos correctamente
    try {
        require '../../../conexion.php';

        $nombre = $_POST['nombre'];
        $entrada = $_POST['entrada'];
        $salida = $_POST['salida'];

        //COMPROBACIÓN DE USUARIOS REPETIDOS
        $sql = "SELECT * FROM `jornadas_trabajo`;";
        $consulta = mysqli_query($conexion, $sql);
        $nombre_repetido = false;
        while ($row = mysqli_fetch_assoc($consulta)) { //usar cuando se espera varios resultadosS
            if($nombre ==  $row['nombre_horario']){{
                $nombre_repetido = true;
            }}
        }
        
        if(!$nombre_repetido){
            $sql =  "INSERT INTO `jornadas_trabajo`(`nombre_horario`, `h_entrada`, `h_salida`) 
            VALUES ('$nombre','$entrada','$salida')";
            $consulta = mysqli_query($conexion, $sql);
        }
        
        $respuesta = array(
            'repetido' => $nombre_repetido
        );
        return $respuesta;
    } catch (\Throwable $th) {
        var_dump($th);
    }
    mysqli_close($conexion);
}

function mostrar_horarios(): array
{
    try {
        require '../../../conexion.php';

        $sql = "SELECT * FROM `jornadas_trabajo`;";
        $consulta = mysqli_query($conexion, $sql);
        $horarios = [];
        $i = 0;
        while ($row = mysqli_fetch_assoc($consulta)) { //usar cuando se espera varios resultadosS
            $horarios[$i]['id_jornada'] = $row['id_jornada'];
            $horarios[$i]['nombre_horario'] = $row['nombre_horario'];
            $horarios[$i]['h_entrada'] = $row['h_entrada'];
            $horarios[$i]['h_salida'] = $row['h_salida'];
            $i++;
        }
        //var_dump($usuarios);
        return $horarios;
    } catch (\Throwable $th) {
        var_dump($th);
    }
    mysqli_close($conexion);
}

function actualizar_horario(): array
{
    try {
        require '../../../conexion.php';
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $entrada = $_POST['entrada'];
        $salida = $_POST['salida'];
        
        $sql = "UPDATE `jornadas_trabajo` SET `nombre_horario`='$nombre',`h_entrada`='$entrada',`h_salida`='$salida' WHERE  `jornadas_trabajo`.`id_jornada` = $id;";
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

function eliminar_horario(): array
{
    try {
        require '../../../conexion.php';
        
        $id = $_POST['id'];
        $sql = " DELETE FROM `jornadas_trabajo` WHERE `jornadas_trabajo`.`id_jornada`= $id";
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
