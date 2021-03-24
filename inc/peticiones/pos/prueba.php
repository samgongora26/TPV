<?php
function venta_actual()
{ {


            require '../../../conexion.php';
            //////////////////////
           // $id_empleado = (int) $_POST['id_usuario'];
            $sql1 = " SELECT * FROM `ventas` WHERE `id_empleado`= 29 AND `estado`= 0 ORDER BY id_venta DESC LIMIT 1;";
            $consulta1 = mysqli_query($conexion, $sql1);

            $si_existe  = mysqli_num_rows($consulta1);

            echo $consulta1;
/*
           $datos = [];
            $i = 0;

            if (!($si_existe == 0)) {

                while ($row1 = mysqli_fetch_assoc($consulta1)) { //usar cuando se espera varios resultadosS
                    $id_venta = (int) $row1['id_venta'];
                }

                $sql = "SELECT detalle_venta.cantidad,detalle_venta.id_detalle_venta,productos_inventario.nombre_producto,productos_inventario.codigo,productos_inventario.foto,productos_inventario.descripcion,detalle_venta.id_venta,productos_inventario.precio_venta,detalle_venta.importe from detalle_venta, productos_inventario, ventas WHERE detalle_venta.id_venta = ventas.id_venta AND detalle_venta.id_venta = $id_venta and productos_inventario.id_producto = detalle_venta.id_producto;";
                $consulta = mysqli_query($conexion, $sql);
                $sql = mysqli_num_rows($consulta);

                if (!($sql == 0)) {
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

            $respuesta = array(
                'error' => $th,
                'motivo' => "venta actual"
            );
            return $respuesta;
    
        mysqli_close($conexion);*/
    }
}