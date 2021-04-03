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
        
        //Nombre de la imagen
        $nombre_imagen = $_FILES['fotografia']['name'];

        //El archivo, es decir, la imagen
        $archivo = $_FILES['fotografia']['tmp_name'];

        $ruta = '';
        $ruta = $ruta."/".$nombre_imagen;

        move_uploaded_file($archivo,$ruta);


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
            VALUES ('$nombres','$apellidos','$telefono','$correo','$usuario','$contrasenia','$nombre_imagen',0)";
            $consulta = mysqli_query($conexion, $sql);
            
        }

        $respuesta = array(
            'repetido' => $usuario_repetido,
            'ruta' => $ruta,
            'nombre_imagen' => $nombre_imagen
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
        //Se elimina el empleado si existe
        $sql = "DELETE FROM `empleados` WHERE `empleados`.`id_usuario`= $id";
        //Se elimina el usuario
        $sql1 = " DELETE FROM `usuarios` WHERE `usuarios`.`id_usuario`= $id";
        $consulta = mysqli_query($conexion, $sql);
        $consulta1 = mysqli_query($conexion, $sql1);

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
            $sql =  "INSERT INTO `puestos`( `nombre_puesto`) VALUES ('$nombre')";
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
        
        $sql = "UPDATE `puestos` SET `nombre_puesto`='$nombres' WHERE `puestos`.`id_puesto` = $id;";
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

//-----------EMPLEADOS-----------

function registrarEmpleado(): array
{           //recibe los datos correctamente
    try {
        require '../../../conexion.php';
        $nombre = $_POST['nombre'];
        $puesto = $_POST['puesto'];
        $horario = $_POST['horario'];

        //AL AGREGAR UN EMPLEADO....
        //EL ESTADO DEL USUARIO CAMBIA A 1, ES DECIR QUE ESTA ACTIVO 
        $sql =  "UPDATE `usuarios` SET `estado`= 1 WHERE `id_usuario` = $nombre";
        //SE AGREGA EL EMPLEADO CON LOS VALORES DE USUARIO, PUESTO Y HORARIO
        $sql1 =  "INSERT INTO `empleados`(`id_usuario`, `id_puesto`, `id_jornada`) 
                    VALUES ($nombre, $puesto, $horario)";
            $consulta = mysqli_query($conexion, $sql);
            $consulta1 = mysqli_query($conexion, $sql1);
        
        $respuesta = array(
            'repetido' => false
        );
        return $respuesta;
    } catch (\Throwable $th) {
        var_dump($th);
    }
    mysqli_close($conexion);
}

function mostrar_empleados(): array
{
    try {
        require '../../../conexion.php';

        $sql = "SELECT empleados.`id_empleado`, concat(usuarios.nombres, ' ', usuarios.apellidos)as usuario, usuarios.fotografia,
        jornadas_trabajo.nombre_horario, puestos.nombre_puesto FROM `empleados`,usuarios, jornadas_trabajo, puestos 
        WHERE empleados.id_usuario = usuarios.id_usuario and empleados.id_puesto = puestos.id_puesto and jornadas_trabajo.id_jornada = empleados.id_jornada and usuarios.estado = 1";

        $consulta = mysqli_query($conexion, $sql);
        $empleados = [];
        $i = 0;
        while ($row = mysqli_fetch_assoc($consulta)) { //usar cuando se espera varios resultadosS
            $empleados[$i]['id_empleado'] = $row['id_empleado'];
            $empleados[$i]['fotografia'] = $row['fotografia'];
            $empleados[$i]['usuario'] = $row['usuario'];
            $empleados[$i]['nombre_horario'] = $row['nombre_horario'];
            $empleados[$i]['nombre_puesto'] = $row['nombre_puesto'];
            $i++;
        }
        //var_dump($usuarios);
        return $empleados;
    } catch (\Throwable $th) {
        var_dump($th);
    }
    mysqli_close($conexion);
}

function select_usuarios(): array
{
    try {
        require '../../../conexion.php';

        $sql = "SELECT `id_usuario`, concat(`usuarios`.`nombres`,' ',`usuarios`.`apellidos`) as usuario ,`estado` FROM `usuarios` WHERE `estado` = 0 ";
        $consulta = mysqli_query($conexion, $sql);
        $usuarios = [];
        $i = 0;
        while ($row = mysqli_fetch_assoc($consulta)) { //usar cuando se espera varios resultadosS
            $usuarios[$i]['id_usuario'] = $row['id_usuario'];
            $usuarios[$i]['usuario'] = $row['usuario'];
            $i++;
        }
        //var_dump($usuarios);
        return $usuarios;
    } catch (\Throwable $th) {
        var_dump($th);
    }
    mysqli_close($conexion);
}

function select_puestos(): array
{
    try {
        require '../../../conexion.php';

        $sql = "SELECT * FROM `puestos`";
        $consulta = mysqli_query($conexion, $sql);
        $puestos = [];
        $i = 0;
        while ($row = mysqli_fetch_assoc($consulta)) { //usar cuando se espera varios resultadosS
            $puestos[$i]['id_puesto'] = $row['id_puesto'];
            $puestos[$i]['nombre_puesto'] = $row['nombre_puesto'];
            $i++;
        }
        //var_dump($usuarios);
        return $puestos;
    } catch (\Throwable $th) {
        var_dump($th);
    }
    mysqli_close($conexion);
}

function select_horarios(): array
{
    try {
        require '../../../conexion.php';

        $sql = "SELECT * FROM `jornadas_trabajo`";
        $consulta = mysqli_query($conexion, $sql);
        $horarios = [];
        $i = 0;
        while ($row = mysqli_fetch_assoc($consulta)) { //usar cuando se espera varios resultadosS
            $horarios[$i]['id_jornada'] = $row['id_jornada'];
            $horarios[$i]['nombre_horario'] = $row['nombre_horario'];
            $i++;
        }
        //var_dump($usuarios);
        return $horarios;
    } catch (\Throwable $th) {
        var_dump($th);
    }
    mysqli_close($conexion);
}

function buscar_empleado(): array
{
    try {
        require '../../../conexion.php';

        $id = $_POST['id'];
        $sql = "SELECT `empleados`.`id_empleado`, `empleados`.`id_usuario`, `empleados`.`id_puesto`, `empleados`.`id_jornada`, CONCAT(`usuarios`.`nombres`, ' ' , `usuarios`.`apellidos`) as nombre, `usuarios`.`telefono`, `usuarios`.`correo` , `usuarios`.`usuario`, `usuarios`.`fotografia`, `usuarios`.`estado`, `puestos`.`nombre_puesto` as puesto, `jornadas_trabajo`.`nombre_horario` as turno FROM `usuarios` , `empleados`, `jornadas_trabajo`, `puestos` WHERE `usuarios`.`id_usuario` = `empleados`.`id_usuario` and `empleados`.`id_puesto` = `puestos`.`id_puesto` and `jornadas_trabajo`.`id_jornada` = `empleados`.`id_jornada` and `empleados`.`id_empleado` = $id";
        $consulta = mysqli_query($conexion, $sql);

        $row = mysqli_fetch_assoc($consulta); //recibir el resultado de la consulta cuando solo es 1

        return $row;
    } catch (\Throwable $th) {
        var_dump($th);
    }
    mysqli_close($conexion);
}

function actualizar_empleado(): array
{           //recibe los datos correctamente
    try {
        require '../../../conexion.php';
        $id = $_POST['id'];
        $puesto = $_POST['puesto'];
        $horario = $_POST['horario'];

        $sql1 =  "UPDATE `empleados` SET `id_puesto`='$puesto',`id_jornada`='$horario' WHERE `id_empleado`='$id'";
            $consulta1 = mysqli_query($conexion, $sql1);
        
        $respuesta = array(
            'repetido' => false
        );
        return $respuesta;
    } catch (\Throwable $th) {
        var_dump($th);
    }
    mysqli_close($conexion);
}