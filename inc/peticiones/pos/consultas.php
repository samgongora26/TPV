<?php
function buscar_producto(): array
{
    try {
        require '../../../conexion.php';

        $codigo = $_POST['codigo'];

        $sql = "select * from productos_inventario where codigo=$codigo;";
        $consulta = mysqli_query($conexion, $sql);

        $estado = false;
        while ($row = mysqli_fetch_assoc($consulta)) { //usar cuando se espera varios resultadosS
            $id_producto = $row['id_producto'];
            $codigo = $row['codigo'];
            $foto = $row['foto'];
            $descripcion = $row['descripcion'];
            $precio_venta = $row['precio_venta'];
            $nombre = $row['nombre_producto'];
            $estado = true;
            $promocion_porcentaje = $row["promocion_porcentaje"];
        }

        $respuesta = array(
            'id_producto' => $id_producto,
            'codigo' => $codigo,
            'nombre' => $nombre,
            'descripcion' => $descripcion,
            'precio_venta' => $precio_venta,
            'foto' => $foto,
            'cantidad' => 1,
            'promocion_porcentaje' => $promocion_porcentaje
        );

        return $respuesta;

        //  return $arreglo;

    } catch (\Throwable $th) {
        if (var_dump($th)) {
            $respuesta = array(
                'error' => $th,
                'motivo' =>"buscar producto"
            );
            return $respuesta;
        }
    }
    mysqli_close($conexion);
}
function venta_actual(): array
{ {
        try {
            //   $id_venta = $_POST['id_venta'];
            require '../../../conexion.php';
            //////////////////////
            $id_empleado = (int) $_POST['id_usuario'];
            $sql1 = "SELECT * FROM ventas WHERE id_empleado= $id_empleado AND estado= 0 ORDER BY id_venta DESC LIMIT 1;";
            $consulta1 = mysqli_query($conexion, $sql1);

            $si_existe  = mysqli_num_rows($consulta1);

            $datos = [];
            $i = 0;

            if ($si_existe> 0) { //comprueba que exista una venta libre con ese id

                while ($row1 = mysqli_fetch_assoc($consulta1)) { //usar cuando se espera varios resultadosS
                    $id_venta = (int) $row1['id_venta'];
                }

                $sql = "SELECT detalle_venta.cantidad,detalle_venta.id_detalle_venta,productos_inventario.nombre_producto,productos_inventario.codigo,productos_inventario.foto,productos_inventario.descripcion,detalle_venta.id_venta,productos_inventario.precio_venta,detalle_venta.importe from detalle_venta, productos_inventario, ventas WHERE detalle_venta.id_venta = ventas.id_venta AND detalle_venta.id_venta = $id_venta and productos_inventario.id_producto = detalle_venta.id_producto;";
                $consulta = mysqli_query($conexion, $sql);
                $sql = mysqli_num_rows($consulta);

                if ($sql > 0) { //comprueba si existe articulo en ese id
                    while ($row = mysqli_fetch_assoc($consulta)) { //usar cuando se espera varios resultadosS
                        $datos[$i]['cantidad'] = $row['cantidad'];
                        $datos[$i]['nombre'] = $row['nombre_producto'];
                        $datos[$i]['id_producto'] = $row['id_producto'];
                        $datos[$i]['id_detalle_venta'] = $row['id_detalle_venta'];
                        $datos[$i]['codigo'] = $row['codigo'];
                        $datos[$i]['foto'] = $row['foto'];
                        $datos[$i]['descripcion'] = $row['descripcion'];
                        $datos[$i]['id_venta'] = $id_venta;
                        $datos[$i]['precio_venta'] = $row['precio_venta'];
                        $datos[$i]['importe'] = $row['importe'];
                        $i++;
                    }
                } else {
                    for ($i = 0; $i < 1; $i = +1) {
                        $datos[$i]['respuesta'] = 'no existe productos en este id';
                        $datos[$i]['id_venta'] = $id_venta;
                    }
                }
            } else {

                $sql = " INSERT INTO ventas (id_venta, id_cliente, id_empleado, importe,estado) VALUES (NULL, '1', '$id_empleado', '0',0);";
                $consulta = mysqli_query($conexion, $sql);
                $id_venta = mysqli_insert_id($conexion);

                for ($i = 0; $i < 1; $i = +1) {
                    $datos[$i]['respuesta'] = 'se creo una nueva venta';
                    $datos[$i]['id_venta'] = $id_venta;
                }
            }

            return $datos;
        } catch (\Throwable $th) {
            $respuesta = array(
                'error' => $th,
                'motivo' => "venta actual"
            );
            return $respuesta;
        }
        mysqli_close($conexion);
    }
}

function eliminar_venta(): array
{
    try {
        $id = $_POST['id'];
        require '../../../conexion.php';
        //eliminar los productos en la venta 
        $sql = "DELETE FROM `detalle_venta` WHERE `detalle_venta`.`id_venta` = $id";
        $consulta = mysqli_query($conexion, $sql);

        //eliminar la venta
        $sql = "DELETE FROM `ventas` WHERE `ventas`.`id_venta` = $id";
        $consulta = mysqli_query($conexion, $sql);

        //crear nueva venta
        $sql = " INSERT INTO ventas (id_venta, id_cliente, id_empleado, importe) VALUES (NULL, '1', '1', '1');";
        $consulta = mysqli_query($conexion, $sql);

        $resultado = array(
            'respuesta' => 'desde eliminar venta',
            'id_recibido' => $id,
            'id_nueva_venta' => mysqli_insert_id($conexion)
        );
        return $resultado;
    } catch (\Throwable $th) {
        $respuesta = array(
            'error' => $th
        );
        return $respuesta;
    }
}

function registrar_venta(): array
{
    try {
        require '../../../conexion.php';

        $id_venta = $_POST['id_venta'];
        $total = $_POST['total_venta'];
        $id_empleado = $_POST['id_usuario'];
        $id_cliente = $_POST['id_cliente'];

        $sql1 = "update ventas set importe = $total, id_cliente = $id_cliente, id_empleado = $id_empleado,estado = 1 where ventas.id_venta = $id_venta";
        $consulta1 = mysqli_query($conexion, $sql1);

        $stmt = $conexion->prepare("INSERT INTO detalle_venta (id_venta, id_producto, precio_venta, cantidad, importe) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("iiiii", $venta, $producto, $precio, $cantidad, $importe);
        $contador = 0;

        if (isset($_POST['someData'])) {
            $array = json_decode($_POST['someData']);
            foreach ($array as $key => $value) {
                $venta = $id_venta;
                $producto = (int) $value->id;
                $cantidad = $value->cantidad;
                $precio = $value->precio_v;
                $importe = $value->importe;
                $contador++;
                $stmt->execute();
            }
        }
        $sql = " INSERT INTO ventas (id_venta, id_cliente, id_empleado, importe,estado) VALUES (NULL, '1', '$id_empleado', '0',0);";
        $consulta = mysqli_query($conexion, $sql);
        $id_venta = mysqli_insert_id($conexion);

        $respuesta = array(
            'respuesta' => "correcto",
            'id' => $id_venta,
            'contador' => $contador
        );
        return $respuesta;
    } catch (\Throwable $th) {
       $respuesta = array(
           'error' => $th
       );
       return $respuesta;
    }
}
