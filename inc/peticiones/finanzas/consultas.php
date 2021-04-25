<?php

function mejores_empleados(): array
{
    try {
        require '../../../conexion.php';

        $sql = "SELECT COUNT(usuarios.nombres) AS contador, usuarios.id_usuario, usuarios.nombres, usuarios.apellidos FROM `usuarios`,`ventas`,`detalle_venta` WHERE usuarios.id_usuario = ventas.id_empleado AND detalle_venta.id_venta = ventas.id_venta GROUP BY usuarios.nombres ORDER BY contador DESC;";
        $consulta = mysqli_query($conexion, $sql);

        $usuarios = [];
        $i = 0;
        while ($row = mysqli_fetch_assoc($consulta)) { //usar cuando se espera varios resultadosS
            $usuarios[$i]['id'] = $row['id_usuario'];
            $usuarios[$i]['nombre'] = $row['nombres'];
            $usuarios[$i]['apellido'] = $row['apellidos'];
            $usuarios[$i]['contador'] = $row['contador'];
            $i++;
        }


        //var_dump($usuarios);
        return $usuarios;
    } catch (\Throwable $th) {
        var_dump($th);
    }
    mysqli_close($conexion);
}


function mejores_clientes(): array
{
    try {
        require '../../../conexion.php';

        $sql = "SELECT COUNT(clientes.nombres) AS contador,clientes.id_cliente, clientes.nombres FROM clientes, ventas WHERE clientes.id_cliente = ventas.id_cliente GROUP BY ventas.id_cliente ORDER BY contador DESC;";
        $consulta = mysqli_query($conexion, $sql);

        $usuarios = [];
        $i = 0;
        while ($row = mysqli_fetch_assoc($consulta)) { //usar cuando se espera varios resultadosS
            $usuarios[$i]['id'] = $row['id_cliente'];
            $usuarios[$i]['nombre'] = $row['nombres'];
            $usuarios[$i]['contador'] = $row['contador'];
            $i++;
        }


        //var_dump($usuarios);
        return $usuarios;
    } catch (\Throwable $th) {
        var_dump($th);
    }
    mysqli_close($conexion);
}

function mejores_productos(): array
{
    try {
        require '../../../conexion.php';

        $sql = "SELECT COUNT(productos_inventario.nombre_producto) AS contador, productos_inventario.id_producto, productos_inventario.codigo, productos_inventario.precio_venta, productos_inventario.nombre_producto FROM productos_inventario, detalle_venta WHERE productos_inventario.id_producto = detalle_venta.id_producto GROUP BY detalle_venta.id_producto ORDER BY contador DESC;";
        $consulta = mysqli_query($conexion, $sql);

        $usuarios = [];
        $i = 0;
        while ($row = mysqli_fetch_assoc($consulta)) { //usar cuando se espera varios resultadosS
            $usuarios[$i]['id'] = $row['id_producto'];
            $usuarios[$i]['nombre'] = $row['nombre_producto'];
            $usuarios[$i]['contador'] = $row['contador'];
            $usuarios[$i]['codigo'] = $row['codigo'];
            $usuarios[$i]['precio'] = $row['precio_venta'];
            $i++;
        }


        //var_dump($usuarios);
        return $usuarios;
    } catch (\Throwable $th) {
        var_dump($th);
    }
    mysqli_close($conexion);
}

function buscar_fecha(): array
{
    try {
        require '../../../conexion.php';

        //$fecha_actual = date('Y-m-d');
        $fecha_actual = $_POST["fecha"];
        $mensaje = "";

        //ARTICULOS VENDIDOS EN UN DIA
        //SELECT SUM(`detalle_venta`.`cantidad`) as total FROM `ventas` INNER JOIN `detalle_venta` on `ventas`.`id_venta` = `detalle_venta`.`id_venta` and `fecha` = '2021-04-01' 
        $sql = "SELECT SUM(`detalle_venta`.`cantidad`) as total FROM `ventas` INNER JOIN `detalle_venta` on `ventas`.`id_venta` = `detalle_venta`.`id_venta` and `fecha` = '$fecha_actual' ";
        $consulta = mysqli_query($conexion, $sql);
        $articulos = mysqli_fetch_assoc($consulta); //usar cuando se espera varios resultadosS
        $articulos_dia = $articulos["total"];

        //VENTAS DE HOY
        $sql = "SELECT sum(`monto_final_ventas`) as venta_hoy FROM `cajas` WHERE `fecha_cierre`= '$fecha_actual' ";
        $consulta = mysqli_query($conexion, $sql);
        $ventas = mysqli_fetch_assoc($consulta); //usar cuando se espera varios resultadosS
        $ventas_hoy = $ventas["venta_hoy"]; 

        //PROMEDIO DE VENTAS DE HOY
        //SELECT AVG(`importe`) as total FROM `ventas` WHERE `fecha` = '2021-04-23' 
        $sql = "SELECT AVG(`importe`) as promedio FROM `ventas` WHERE `fecha` = '$fecha_actual' ";
        $consulta = mysqli_query($conexion, $sql);
        $promedio = mysqli_fetch_assoc($consulta); //usar cuando se espera varios resultadosS
        $promedio_hoy = $promedio["promedio"]; 
        $promedio_hoy = floor(($promedio_hoy*1000))/1000;

        //TICKETS VENDIDOS HOY
        //SELECT COUNT(`id_venta`) as total FROM `ventas` WHERE `fecha` = '2021-04-23' 
        $sql = "SELECT COUNT(`id_venta`) as total FROM `ventas` WHERE `fecha` =  '$fecha_actual' ";
        $consulta = mysqli_query($conexion, $sql);
        $tickets = mysqli_fetch_assoc($consulta); //usar cuando se espera varios resultadosS
        $tickets_hoy = $tickets["total"]; 

        //TOTAL DE COMPRAS EN EL DIA
        //SELECT sum(`pedidos`.`pagado`) as compras FROM `pedidos` WHERE `fecha` BETWEEN CURRENT_DATE()-7 AND CURRENT_DATE() ORDER by `fecha` 
        $sql = "SELECT sum(`pedidos`.`pagado`) as compras FROM `pedidos` WHERE `fecha` = '$fecha_actual' ";
        $consulta = mysqli_query($conexion, $sql);
        $compras = mysqli_fetch_assoc($consulta); //usar cuando se espera varios resultadosS
        $compras_hoy = $compras["compras"]; 

        if($compras_hoy != "" || $tickets_hoy !=  "" || $promedio_hoy !=  "" || $ventas_hoy !=  "" || $articulos_dia !=  ""){
            $mensaje = "ok";
        }

        $respuesta = array(
            'fecha_actual' => $fecha_actual,
            'articulos_dia' => $articulos_dia,
            'ventas_hoy' => $ventas_hoy,
            'promedio_hoy' => $promedio_hoy,
            'tickets_hoy' => $tickets_hoy,
            'compras_hoy' => $compras_hoy,
            'mensaje' => $mensaje
        );
        return $respuesta;

    } catch (\Throwable $th) {
        var_dump($th);
    }
    mysqli_close($conexion);
}