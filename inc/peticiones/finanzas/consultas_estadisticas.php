<?php
try {
    require '../../../conexion.php';
    $fecha_actual = date('Y-m-d');

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

    //VENTAS DE LA SEMANA
    $sql = "SELECT sum(`monto_final_ventas`) as venta_semana FROM `cajas` WHERE `fecha_cierre` BETWEEN CURRENT_DATE()-7 AND CURRENT_DATE() ORDER by `fecha_cierre` DESC ";
    $consulta = mysqli_query($conexion, $sql);
    $ventas = mysqli_fetch_assoc($consulta); //usar cuando se espera varios resultadosS
    $ventas_semana = $ventas["venta_semana"]; 
    
    //VENTAS DENTRO DE 15 DIAS
    $sql = "SELECT sum(`monto_final_ventas`) as venta_semana FROM `cajas` WHERE `fecha_cierre` BETWEEN CURRENT_DATE()-15 AND CURRENT_DATE() ORDER by `fecha_cierre` DESC ";
    $consulta = mysqli_query($conexion, $sql);
    $ventas = mysqli_fetch_assoc($consulta); //usar cuando se espera varios resultadosS
    $ventas_quincena = $ventas["venta_semana"]; 
    
    //EL MEJOR VENDEDOR DE LA SEMANA
    //SELECT CONCAT(`usuarios`.`nombres`, ' ', `usuarios`.`apellidos`) as usuario FROM  `cajas`,`usuarios`  WHERE `fecha_cierre` BETWEEN CURRENT_DATE()-7 AND CURRENT_DATE() and `cajas`.`id_usuario` = `usuarios`.`id_usuario` ORDER by `monto_final_ventas` DESC limit 1
    $sql = "SELECT CONCAT(`usuarios`.`nombres`, ' ', `usuarios`.`apellidos`) as usuario FROM  `cajas`,`usuarios`  WHERE `fecha_cierre` BETWEEN CURRENT_DATE()-7 AND CURRENT_DATE() and `cajas`.`id_usuario` = `usuarios`.`id_usuario` ORDER by `monto_final_ventas` DESC limit 1";
    $consulta = mysqli_query($conexion, $sql);
    $vendedores = mysqli_fetch_assoc($consulta); //usar cuando se espera varios resultadosS
    $vendedor_semana = $vendedores["usuario"]; 

    //TICKETS VENDIDOS EN LA SEMANA
    //SELECT COUNT(`id_venta`) as tickets_semana FROM  `ventas`  WHERE `fecha` BETWEEN CURRENT_DATE()-7 AND CURRENT_DATE() ORDER by `fecha`
    $sql = "SELECT COUNT(`id_venta`) as tickets_semana FROM  `ventas`  WHERE `fecha` BETWEEN CURRENT_DATE()-7 AND CURRENT_DATE() ORDER by `fecha`";
    $consulta = mysqli_query($conexion, $sql);
    $tickets = mysqli_fetch_assoc($consulta); //usar cuando se espera varios resultadosS
    $tickets_semana = $tickets["tickets_semana"]; 

    //TOTAL DE COMPRAS EN LA SEMANA
    //SELECT sum(`pedidos`.`pagado`) as compras FROM `pedidos` WHERE `fecha` BETWEEN CURRENT_DATE()-7 AND CURRENT_DATE() ORDER by `fecha` 
    $sql = "SELECT sum(`pedidos`.`pagado`) as compras FROM `pedidos` WHERE `fecha` BETWEEN CURRENT_DATE()-7 AND CURRENT_DATE() ORDER by `fecha` ";
    $consulta = mysqli_query($conexion, $sql);
    $compras = mysqli_fetch_assoc($consulta); //usar cuando se espera varios resultadosS
    $compras_semana = $compras["compras"]; 

    //TOTAL DE COMPRAS EN EL DIA
    //SELECT sum(`pedidos`.`pagado`) as compras FROM `pedidos` WHERE `fecha` BETWEEN CURRENT_DATE()-7 AND CURRENT_DATE() ORDER by `fecha` 
    $sql = "SELECT sum(`pedidos`.`pagado`) as compras FROM `pedidos` WHERE `fecha` = '$fecha_actual' ";
    $consulta = mysqli_query($conexion, $sql);
    $compras = mysqli_fetch_assoc($consulta); //usar cuando se espera varios resultadosS
    $compras_hoy = $compras["compras"]; 
    
    //CONSULTAS QUE HICE PERO QUE NO HICIERON LO QUE QUERIA, PERO PUEDEN RESULTAR UTILES DESPUÉS....
    
    //NUMERO DE COMPRAS EN LA SEMANA
    //SELECT count(`pedidos`.`id_pedido`) as compras FROM `pedidos` WHERE `fecha` BETWEEN CURRENT_DATE()-7 AND CURRENT_DATE() ORDER by `fecha` 
    /*$sql = "SELECT count(`pedidos`.`id_pedido`) as compras FROM `pedidos` WHERE `fecha` BETWEEN CURRENT_DATE()-7 AND CURRENT_DATE() ORDER by `fecha`";
    $consulta = mysqli_query($conexion, $sql);
    $compras = mysqli_fetch_assoc($consulta); //usar cuando se espera varios resultadosS
    $compras_semana = $compras["compras"]; 
    */
    //El MEJOR VENDEDOR DEL DIA
    /*$sql = "SELECT CONCAT(`usuarios`.`nombres`, ' ', `usuarios`.`apellidos`) as usuario, COUNT( `cajas`.`id_usuario` ) AS total
        FROM  `cajas`, `usuarios` WHERE `cajas`.`id_usuario` = `usuarios`.`id_usuario`AND `fecha_cierre` = '$fecha_actual'
        GROUP BY usuario
        ORDER BY total DESC LIMIT 1";
    $consulta = mysqli_query($conexion, $sql);
    $productos = mysqli_fetch_assoc($consulta); //usar cuando se espera varios resultadosS
    $productos = $productos["productos"]; 

    //PRODUCTO MAS VENDIDO
    $sql = "SELECT `detalle_venta`.`id_producto` as producto, COUNT( `detalle_venta`.`id_producto` ) AS total FROM `ventas` INNER JOIN `detalle_venta` on `ventas`.`id_venta` = `detalle_venta`.`id_venta` GROUP BY producto ORDER by total DESC LIMIT 1  ";
    $consulta = mysqli_query($conexion, $sql);
    $productos = mysqli_fetch_assoc($consulta); //usar cuando se espera varios resultadosS
    $productos = $productos["productos"]; */
    
    //Cantidad de productos vendidos en un ticket
    //SELECT SUM(`detalle_venta`.`cantidad`) as total FROM `ventas` INNER JOIN `detalle_venta` on `ventas`.`id_venta` = `detalle_venta`.`id_venta` AND `ventas`.`id_venta`= 188
    
} catch (\Throwable $th) {
    var_dump($th);
}

mysqli_close($conexion);

//CREA UNA LISTA DE 5 ITEMS DE LOS ARTICULOS MAS VENDIDOS   
function articulos_mas_vendidos(): array
{
    try {
        require '../../../conexion.php';
        $dia = date('d')-1;
        $hoy = date('Y-m-').$dia; 
        $sql = "SELECT `productos_inventario`.`nombre_producto` as producto, count(`detalle_venta`.`id_producto`) as total FROM `detalle_venta`,`productos_inventario` WHERE `detalle_venta`.`id_producto` = `productos_inventario`.`id_producto` GROUP BY `detalle_venta`.`id_producto` ORDER BY total DESC limit 5  ";
        $consulta = mysqli_query($conexion, $sql);
        $articulos = [];
        $i = 0; 
        while ($row = mysqli_fetch_assoc($consulta)) { //usar cuando se espera varios resultadosS
            $articulos[$i]['producto'] = $row['producto'];
            $i++;
        }

        return $articulos;
    } catch (\Throwable $th) {
        var_dump($th);
    }
    mysqli_close($conexion);
}

?>