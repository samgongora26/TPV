<?php
function registrar_producto(): array
{
    try {
        require '../../../conexion.php';

        $codigo = $_POST['codigo'];
        $id_venta = 4; //obtener el id de venta pra ingresar los registros ventas

        $sql = "select * from productos_inventario where codigo=$codigo;";
        $consulta = mysqli_query($conexion, $sql);

        $estado = false;
        while ($row = mysqli_fetch_assoc($consulta)) { //usar cuando se espera varios resultadosS
            $id_producto = $row['id_producto'];
            $codigo = $row['codigo'];
            $descripcion = $row['descripcion'];
            $precio_venta = $row['precio_venta'];
            $estado = true;
        }

        if ($estado === true) {
            $sql_ingreso =  "INSERT INTO detalle_venta (id_venta, id_producto, cantidad, importe)
        VALUES('$id_venta','$id_producto',1,' $precio_venta')";
            $consulta_ingreso = mysqli_query($conexion, $sql_ingreso);

            $respuesta = array(
                'id_insertado' => mysqli_insert_id($conexion),
                'id_producto' => 22,
                'codigo' => $codigo,
                'descripcion' => $descripcion,
                'precio_venta' => $precio_venta,
                'cantidad' => 1
            );
        }

        return $respuesta;


        //  return $arreglo;

    } catch (\Throwable $th) {
        if (var_dump($th)) {
            $row = "error, no se encontro";
            return $row;
        }
    }
    mysqli_close($conexion);
}
function venta_actual(): array
{ {
        try {
            $id_venta = $_POST['id_venta'];

            require '../../../conexion.php';
            $sql = "SELECT detalle_venta.cantidad,detalle_venta.id_detalle_venta,productos_inventario.codigo,productos_inventario.descripcion,detalle_venta.id_venta,productos_inventario.precio_venta,detalle_venta.importe from detalle_venta, productos_inventario, ventas WHERE detalle_venta.id_venta = ventas.id_venta AND detalle_venta.id_venta = $id_venta and productos_inventario.id_producto = detalle_venta.id_producto;";
            $consulta = mysqli_query($conexion, $sql);
            $datos = [];
            $i = 0;
            while ($row = mysqli_fetch_assoc($consulta)) { //usar cuando se espera varios resultadosS
                $datos[$i]['cantidad'] = $row['cantidad'];
                $datos[$i]['id_detalle_venta'] = $row['id_detalle_venta'];
                $datos[$i]['codigo'] = $row['codigo'];
                $datos[$i]['descripcion'] = $row['descripcion'];
                $datos[$i]['id_venta'] = $row['id_venta'];
                $datos[$i]['precio_venta'] = $row['precio_venta'];
                $datos[$i]['importe'] = $row['importe'];
                $i++;
            }
            return $datos;
        } catch (\Throwable $th) {
            var_dump($th);
        }
        mysqli_close($conexion);
    }
}

function aumentar(): array
{ {
        try {

            $id = $_POST['id'];
            require '../../../conexion.php';
            $sql = "SELECT productos_inventario.precio_venta, detalle_venta.cantidad from productos_inventario, detalle_venta WHERE detalle_venta.id_detalle_venta = $id AND productos_inventario.id_producto = detalle_venta.id_producto ;";
            $consulta = mysqli_query($conexion, $sql);

            while ($row = mysqli_fetch_assoc($consulta)) { //usar cuando se espera varios resultadosS
                $cantidad_var = (int) $row['cantidad'];
                $precio_venta = (int) $row['precio_venta'];
            }


            $id = $_POST['id'];
            $cantidad = (int)$cantidad_var;
            $cantidad = $cantidad + 1;
            $importe = $precio_venta * $cantidad;
            $sql1 = "update detalle_venta set cantidad = $cantidad, importe = $importe where detalle_venta.id_detalle_venta = $id";
            $consulta1 = mysqli_query($conexion, $sql1);
            $datos = [];

            $datos = array(
                'estado' => "correcto",
                'valor' => "si cambio",
                'nueva_cantidad' => $cantidad,
                'nuevo_importe' => $importe,
                'precio_venta' => $precio_venta
            );
            return $datos;
        } catch (\Throwable $th) {
            var_dump($th);
        }
        mysqli_close($conexion);
    }
}

function disminuir(): array
{ {
        try {

            $id = $_POST['id'];
            require '../../../conexion.php';
            $sql = "SELECT productos_inventario.precio_venta, detalle_venta.cantidad from productos_inventario, detalle_venta WHERE detalle_venta.id_detalle_venta = $id AND productos_inventario.id_producto = detalle_venta.id_producto ;";
            $consulta = mysqli_query($conexion, $sql);

            while ($row = mysqli_fetch_assoc($consulta)) { //usar cuando se espera varios resultadosS
                $cantidad_var = (int) $row['cantidad'];
                $precio_venta = (int) $row['precio_venta'];
            }


            $id = $_POST['id'];
            $cantidad = (int)$cantidad_var;
            $cantidad = $cantidad - 1;
            $importe = $precio_venta * $cantidad;
            $sql1 = "update detalle_venta set cantidad = $cantidad, importe = $importe where detalle_venta.id_detalle_venta = $id";
            $consulta1 = mysqli_query($conexion, $sql1);
            $datos = [];

            $datos = array(
                'estado' => "correcto",
                'valor' => "si cambio",
                'nueva_cantidad' => $cantidad,
                'nuevo_importe' => $importe,
                'precio_venta' => $precio_venta
            );
            return $datos;
        } catch (\Throwable $th) {
            var_dump($th);
        }
        mysqli_close($conexion);
    }
}


function cerrar_venta(): array
{ {
        try {
            $total_venta = $_POST['total_venta'];
            require '../../../conexion.php';
            $sql = "SELECT * FROM ventas ORDER BY id_venta DESC LIMIT 1;";
            $consulta = mysqli_query($conexion, $sql);

            while ($row = mysqli_fetch_assoc($consulta)) { //usar cuando se espera varios resultadosS
                $id_venta = (int) $row['id_venta'];
            }
            $sql1 = "update ventas set importe = $total_venta where ventas.id_venta = $id_venta";
            $consulta1 = mysqli_query($conexion, $sql1);

            $sql = " INSERT INTO ventas (id_venta, id_cliente, id_empleado, importe) VALUES (NULL, '1', '1', '1');";
            $consulta = mysqli_query($conexion, $sql);
            $datos = array(
                'id' => mysqli_insert_id($conexion),
                'estado' => "correcto",
                'mensaje' => "se ha actualizado el total de la venta"
            );
            return $datos;
        } catch (\Throwable $th) {
            var_dump($th);
        }
        mysqli_close($conexion);
    }
}




function otro()
{
    $id = 1;
    $codigo = " mundo";
    comprobar_registro($id, $codigo);
}

function comprobar_registro($valor, $valor2)
{
    echo "<br>";
    echo $valor;
    echo "<br>";
    echo $valor2;

    echo "hola desde comprobar";
}
