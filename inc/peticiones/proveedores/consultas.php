<?php
function registrar_proveedor(): array
{           //recibe los datos correctamente
    try {
        require '../../../conexion.php';

        $folio = $_POST['folio'];
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $estado = $_POST['estado'];
        $ciudad =  $_POST['ciudad'];
        $direccion = $_POST['direccion'];
        $telefono = $_POST['telefono'];
        $rfc = $_POST['rfc'];
        $razon = $_POST['razon_social'];
        $fecha_registro = $_POST['fecha_registro'];

        $sql =  "INSERT INTO proveedores (folio, nombre, localidad, direccion, telefono, fecha_registro, correo, rfc, razon_social, estado, estado_proveedor )
        VALUES('$folio','$nombre','$ciudad','$direccion','$telefono','$fecha_registro','$email','$rfc','$razon','$estado','1')";
        $consulta = mysqli_query($conexion, $sql);

        $respuesta = array( //envia los datos correctamente
            'respuesta' => 'correcto',
            'id_ingresado' => mysqli_insert_id($conexion),
            'folio_recibido' => $folio,
            'nombre_recibido' => $nombre,
            'email_recibido' => $email,
        );
        return $respuesta;
    } catch (\Throwable $th) {
        var_dump($th);
    }
    mysqli_close($conexion);
}

function todos_proveedores(): array
{
    try {
        require '../../../conexion.php';

        $sql = "select * from proveedores;";
        $consulta = mysqli_query($conexion, $sql);

        $usuarios = [];
        $i = 0;
        while ($row = mysqli_fetch_assoc($consulta)) { //usar cuando se espera varios resultadosS
            $usuarios[$i]['id'] = $row['id_proveedor'];
            $usuarios[$i]['folio'] = $row['folio'];
            $usuarios[$i]['nombre'] = $row['nombre'];
            $usuarios[$i]['direccion'] = $row['direccion'];
            $usuarios[$i]['telefono'] = $row['telefono'];
            $usuarios[$i]['rfc'] = $row['rfc'];
            $usuarios[$i]['razon'] = $row['razon_social'];
            $i++;
        }
        //var_dump($usuarios);
        return $usuarios;
    } catch (\Throwable $th) {
        var_dump($th);
    }
    mysqli_close($conexion);
}

function buscar_proveedor(): array
{
    try {
        require '../../../conexion.php';

        $id = $_POST['id'];
        $sql = " select * from proveedores where id_proveedor=$id;";
        $consulta = mysqli_query($conexion, $sql);

        $row = mysqli_fetch_assoc($consulta); //recibir el resultado de la consulta cuando solo es 1

        return $row;
    } catch (\Throwable $th) {
        var_dump($th);
    }
    mysqli_close($conexion);
}

function eliminar_proveedor(): array
{
    try {
        require '../../../conexion.php';

        $id = $_POST['id'];
        $sql = " DELETE FROM `proveedores` WHERE `proveedores`.`id_proveedor`= $id";
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


function actualizar_proveedor(): array
{
    try {
        require '../../../conexion.php';
        $id = $_POST['id'];
        $clave = $_POST['clave'];
        $nombre = $_POST['nombre'];
        $direccion = $_POST['direccion'];
        $telefono = (int) $_POST['telefono'];
        $razon = $_POST['razon'];
        $rfc = $_POST['rfc'];

        $sql = "UPDATE `proveedores` SET `folio` = '$clave', `nombre` = '$nombre', `direccion` = '$direccion', `telefono` = '$telefono', `rfc` = '$rfc', `razon_social` = '$razon' WHERE `proveedores`.`id_proveedor` = $id;";
        $consulta = mysqli_query($conexion, $sql);

        $respuesta = array(
            'respuesta' => 'correcto',
            'descripcion' => 'actualizacion de los datos del proveedor',
            'id' => $id,
            'clave' => $clave,
            'nombre' => $nombre,
            'direccion' => $direccion,
            'telefono' => $telefono,
            'razon' => $razon,
            'rfc' => $rfc
        );

        return $respuesta;
    } catch (\Throwable $th) {
        var_dump($th);
    }
    mysqli_close($conexion);
}

function filtrado_nombres(): array
{
    try {
        require '../../../conexion.php';

        $nombre = $_POST['nombre'];

        $sql = "SELECT * FROM `proveedores` WHERE nombre LIKE '%$nombre%';";
        $consulta = mysqli_query($conexion, $sql);

        $usuarios = [];
        $i = 0;
        while ($row = mysqli_fetch_assoc($consulta)) { //usar cuando se espera varios resultadosS
            $usuarios[$i]['id'] = $row['id_proveedor'];
            $usuarios[$i]['folio'] = $row['folio'];
            $usuarios[$i]['nombre'] = $row['nombre'];
            $usuarios[$i]['direccion'] = $row['direccion'];
            $usuarios[$i]['telefono'] = $row['telefono'];
            $usuarios[$i]['rfc'] = $row['rfc'];
            $usuarios[$i]['razon'] = $row['razon_social'];
            $i++;
        }
        //var_dump($usuarios);
        return $usuarios;
    } catch (\Throwable $th) {
        $respuesta = array(
            'error' => $th
        );
        return $respuesta;
    }
}
