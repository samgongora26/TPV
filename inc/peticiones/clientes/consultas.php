<?php
function registrar_cliente(): array
{           //recibe los datos correctamente
    try {
        require '../../../conexion.php';

        $folio = $_POST['folio'];
        $nombre = $_POST['nombre'];
        $email = $_POST['correo'];
        $direccion = $_POST['direccion'];
        $ciudad = $_POST['ciudad'];
        $colonia = $_POST['colonia'];
        $telefono = $_POST['telefono'];
        $fecha = $_POST['fecha_registro'];

        $sql =  "INSERT INTO `clientes` (`id_cliente`, `codigo`, `nombres`, `telefono`, `ciudad`, `colonia`, `direccion`, `correo`, `fecha_registro`)
        VALUES (NULL, '$folio', '$nombre', '$telefono', '$ciudad', '$colonia', '$direccion', '$email', '$fecha')";
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
        $respuesta = array(
            'respuesta' => "error",
            'detalle' => $th
        );
    }
    mysqli_close($conexion);
}

function todos_clientes(): array
{
    try {
        require '../../../conexion.php';

        $sql = "select * from clientes;";
        $consulta = mysqli_query($conexion, $sql);

        $usuarios = [];
        $i = 0;
        while ($row = mysqli_fetch_assoc($consulta)) { //usar cuando se espera varios resultadosS
            $usuarios[$i]['id'] = $row['id_cliente'];
            $usuarios[$i]['clave'] = $row['codigo'];
            $usuarios[$i]['nombre'] = $row['nombres'];
            $usuarios[$i]['direccion'] = $row['direccion'];
            $usuarios[$i]['telefono'] = $row['telefono'];
            $i++;
        }
        //var_dump($usuarios);
        return $usuarios;
    } catch (\Throwable $th) {
        var_dump($th);
    }
    mysqli_close($conexion);
}

function buscar_cliente(): array
{
    try {
        require '../../../conexion.php';

        $id = $_POST['id'];
        $sql = " select * from clientes where id_cliente=$id;";
        $consulta = mysqli_query($conexion, $sql);

        $row = mysqli_fetch_assoc($consulta); //recibir el resultado de la consulta cuando solo es 1

        return $row;
    } catch (\Throwable $th) {
        var_dump($th);
    }
    mysqli_close($conexion);
}

function eliminar_cliente(): array
{
    try {
        require '../../../conexion.php';

        $id = $_POST['id'];
        $sql = " DELETE FROM `clientes` WHERE `clientes`.`id_cliente`= $id";
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


function actualizar_cliente(): array
{
    try {
        require '../../../conexion.php';
        $id = $_POST['id'];
        $clave = $_POST['clave'];
        $nombre = $_POST['nombre'];
        $direccion = $_POST['direccion'];
        $telefono = (int) $_POST['telefono'];

        $sql = "UPDATE `clientes` SET `codigo` = '$clave', `nombres` = '$nombre', `direccion` = '$direccion',`telefono` = '$telefono' WHERE `clientes`.`id_cliente` = $id;";
        $consulta = mysqli_query($conexion, $sql);

        $respuesta = array(
            'respuesta' => 'correcto',
            'descripcion' => 'actualizacion de los datos del proveedor',
            'id' => $id,
            'clave' => $clave,
            'nombre' => $nombre,
            'direccion' => $direccion,
            'telefono' => $telefono
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

        $sql = "SELECT * FROM `clientes` WHERE nombres LIKE '%$nombre%';";
        $consulta = mysqli_query($conexion, $sql);

        $usuarios = [];
        $i = 0;
        while ($row = mysqli_fetch_assoc($consulta)) { //usar cuando se espera varios resultadosS
            $usuarios[$i]['id'] = $row['id_cliente'];
            $usuarios[$i]['codigo'] = $row['codigo'];
            $usuarios[$i]['nombre'] = $row['nombres'];
            $usuarios[$i]['direccion'] = $row['direccion'];
            $usuarios[$i]['telefono'] = $row['telefono'];
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
