<?php
function registrar_producto(): array
{           //recibe los datos correctamente
    try {
        require '../../../conexion.php';

        $codigobarras = $_POST['codigobarras'];
        $nombre = $_POST['nombre'];
        //$caducidad = $_POST['caducidad'];
        //$unidad =  $_POST['form_unidad'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];

        $sql =  "INSERT INTO productos_inventario (nombre_producto, descripcion, codigo, precio_venta)
        VALUES('$nombre','$descripcion','$codigobarras','$precio')";


        $consulta = mysqli_query($conexion, $sql);

        $respuesta = array( //envia los datos correctamente
            'respuesta' => 'correcto',
            //'id_ingresado' => mysqli_insert_id($conexion),
            'nombre' => $nombre,
            'codigo' => $codigobarras,
            'descripcion' => $descripcion,
            'precio' => $precio
            //'unidad_recibido' => $unidad,
        );

        return $respuesta;
    } catch (\Throwable $th) {
        var_dump($th);
    }
    mysqli_close($conexion);
}
/*
function todo_inventario(): array
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

function buscar_producto(): array
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

function eliminar_producto(): array
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


function actualizar_producto(): array
{
    try {
        require '../../../conexion.php';
        $id = $_POST['id'];
        $clave = $_POST['clave'];
        $nombre = $_POST['nombre'];
        $direccion = $_POST['direccion'];
        $telefono = (int) $_POST['telefono'];

              $sql = "UPDATE `proveedores` SET `folio` = '$clave', `nombre` = '$nombre', `direccion` = '$direccion', `telefono` = '$telefono' WHERE `proveedores`.`id_proveedor` = $id;";
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
}*/