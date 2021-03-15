<?php
function registrar_compra(): array
{           //recibe los datos correctamente
    try {
        require '../../../conexion.php';

        $id_producto = $_POST['codigo'];
        $codigo = $_POST['codigo'];
        $email = $_POST['email'];
        $ciudad =  $_POST['ciudad'];
        $direccion = $_POST['direccion'];
        $telefono = $_POST['telefono'];
        $rfc = $_POST['rfc'];
        $fecha_registro = $_POST['fecha_registro'];

        $sql =  "INSERT INTO proveedores (folio, nombre, localidad, direccion, telefono, fecha_registro, correo)
        VALUES('$folio','$nombre','$ciudad','$direccion','$telefono','$fecha_registro','$email')";
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
            $i++;
        }
        //var_dump($usuarios);
        return $usuarios;
    } catch (\Throwable $th) {
        var_dump($th);
    }
    mysqli_close($conexion);
}

function select_proveedores(): array
{
    try {
        require '../../../conexion.php';

        $sql = "SELECT `id_proveedor`,`nombre` FROM `proveedores` WHERE `estado_proveedor` = 1 ";
        $consulta = mysqli_query($conexion, $sql);
        $proveedores = [];
        $i = 0;
        while ($row = mysqli_fetch_assoc($consulta)) { //usar cuando se espera varios resultadosS
            $proveedores[$i]['id_proveedor'] = $row['id_proveedor'];
            $proveedores[$i]['nombre'] = $row['nombre'];
            $i++;
        }
        //var_dump($usuarios);
        return $proveedores;
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