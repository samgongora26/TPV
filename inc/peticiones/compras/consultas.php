<?php
function registrar_compra(): array
{           //recibe los datos correctamente
    try {
        require '../../../conexion.php';
        //Datos que llegan del front 
        //$proveedor = $_POST['proveedor'];
        $codigo = $_POST['codigo'];
        $cantidad = $_POST['cantidad'];
        $id_usuario =  $_POST['usuario'];
        //PARA PODER AGREGAR UNA COLUMNA EN DETALLE_COMPRA SE DEBE
        //1. BUSCAR EL CODIGO EN LOS PRODUCTOS
            //COMPROBACIÓN DE LA EXISTENCIA DEL PRODUCTO
            $sql = "SELECT * FROM `productos_inventario` WHERE `codigo` = $codigo;";
            $consulta = mysqli_query($conexion, $sql);
            $total = mysqli_num_rows($consulta); //Guarda el numero de filas de la consulta
            $mensaje = 0;
            //codigo de mensajes de salida
            //1 = no existe el producto
            //10 = todo bien
            $producto = mysqli_fetch_assoc($consulta);//usar cuando se espera varios resultados
            if($total == 0){
                $mensaje = 1;
            }
        //2. SI EXISTE EL PRODUCTO ENTONCES SE TIENE QUE OBTENER LOS DATOS DE ESE PRODUCTO
            if($total > 0){
                $mensaje = 10;
                $id_producto = $producto["id_producto"];
                $nombre_producto = $producto["nombre_producto"];
                $precio_compra = $producto["precio_costo"];
                $cantidad_stock = $producto["cantidad_stock"];
                $importe = $precio_compra * $cantidad;
        
        //3.  REGISTRAR LOS DATOS DE PRODUCTO Y LA COMPRA EN DETALLE_COMPRA Y MANDAR MENSAJE DE EXITO
                $sql =  "INSERT INTO `detalle_pedido`(`id_usuario`, `id_producto`, `nombre_producto`, `cantidad`, `precio_compra`, `importe`) 
                        VALUES ('$id_usuario', '$id_producto', '$nombre_producto','$cantidad','$precio_compra','$importe')";
                $consulta = mysqli_query($conexion, $sql);
        
            }
        //Salida del proceso, si algo sale mal aparecera en mensaje y lo demás estará vacio
        $respuesta = array( 
            'mensaje' => $mensaje,
            'id_producto' => $id_producto,
            'nombre_producto' => $nombre_producto,
            'cantidad_stock'  => $cantidad_stock,
            'cantidad' => $cantidad,
            'precio_compra' => $precio_compra,
            'importe'  => $importe
        );        
        return $respuesta;
    } catch (\Throwable $th) {
        var_dump($th);
    }
    mysqli_close($conexion);
}

function mostrar_detalle(): array
{
    try {
        require '../../../conexion.php';
        $id_usuario =  $_POST['usuario'];
        //Selecciona todos los productos con estado 0 y del usuario dado
        //El estado 0 significa que aun no ha sido comprado, es decir que aun no se le agrega el id pedido
        $sql = "SELECT `detalle_pedido`.`id_detalle_pedido`,`detalle_pedido`.`id_pedido`, 
                `detalle_pedido`.`id_usuario` , `detalle_pedido`.`id_producto`, 
                `detalle_pedido`.`nombre_producto` as producto, 
                `detalle_pedido`.`cantidad`, `detalle_pedido`.`precio_compra`,`detalle_pedido`.
                `importe`, `detalle_pedido`.`estado`, `productos_inventario`.`cantidad_stock`, `productos_inventario`.`foto`,`productos_inventario`.`codigo` 
                FROM `detalle_pedido` , `productos_inventario` 
                WHERE `productos_inventario`.`id_producto` = `detalle_pedido`.`id_producto` 
                    and `productos_inventario`.`nombre_producto` = `detalle_pedido`.`nombre_producto` 
                    and `detalle_pedido`.`id_usuario` = $id_usuario 
                    and `detalle_pedido`.`estado` = 0 ";
        $consulta = mysqli_query($conexion, $sql);
        $detalle_pedido = [];
        $i = 0; 
        while ($row = mysqli_fetch_assoc($consulta)) { //usar cuando se espera varios resultadosS
            $detalle_pedido[$i]['foto'] = $row['foto'];
            $detalle_pedido[$i]['id_producto'] = $row['id_producto'];   
            $detalle_pedido[$i]['nombre_producto'] = $row['producto'];
            $detalle_pedido[$i]['stock'] = $row['cantidad_stock'];
            $detalle_pedido[$i]['cantidad'] = $row['cantidad'];
            $detalle_pedido[$i]['precio_compra'] = $row['precio_compra'];
            $detalle_pedido[$i]['importe'] = $row['importe'];
            $detalle_pedido[$i]['codigo'] = $row['codigo'];
            $detalle_pedido[$i]['id_detalle_pedido'] = $row['id_detalle_pedido'];
            $i++;
        }
        //var_dump($usuarios);
        return $detalle_pedido;
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


function remover_producto(): array
{
    try {
        require '../../../conexion.php';
        
        $id = $_POST['id'];
        $sql = "DELETE FROM `detalle_pedido` WHERE `id_detalle_pedido` = $id";
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

function completar_compra(): array
{
    try {
        require '../../../conexion.php';
        $hoy = date('Y-m-d'); 
        $id = $_POST['id'];
        $total = $_POST['total'];
        $pagado = $_POST['pagado'];
        //AL TERMINAR LA COMPRA
        //1. REGISTRO DE UN ID PEDIDO vacio con estado 0
            $sql = "INSERT INTO `pedidos`(`id_usuario`, `fecha`,`total`, `pagado`, `estado`) VALUES ($id,'$hoy', $total, $pagado, '0')";
            $consulta = mysqli_query($conexion, $sql);

        //2. BUSCAR EL ID DE VENTA NUEVO
            //OBTIENE EL ULTIMO ID PEDIDO
            $sql = "SELECT * FROM `pedidos` WHERE `id_usuario` = $id AND `estado` = 0 ORDER BY (`id_pedido`) DESC LIMIT 1";
            $consulta = mysqli_query($conexion, $sql);
            $total = mysqli_num_rows($consulta); //Guarda el numero de filas de la consulta
            $ultimo_pedido = mysqli_fetch_assoc($consulta);//usar cuando se espera varios resultados
            $id_pedido = $ultimo_pedido['id_pedido'];

        //3. ACTUALIZAR EL INVENTARIO DEL PRODUCTO INGRESADO
            //OBTENIE LOS PRODUCTOS PARA CAMBIAR EL STOCK UNO POR UNO
            $sql = "SELECT * FROM `detalle_pedido` WHERE `id_usuario` = $id AND `estado` = 0;";
            $productos_pedido = mysqli_query($conexion, $sql);
            //CONSULTA DE LOS PRODUCTOS EN DETALLE PEDIDO
            while ($detalle_pedido = mysqli_fetch_assoc($productos_pedido)) { //usar cuando se espera varios resultadosS

                $id_producto = $detalle_pedido['id_producto'];
                $cantidad = $detalle_pedido['cantidad'];
                //actualizar_stock($id_producto, $cantidad);
                //CONSULTA PARA OBTENER EL STOCK DEL PRODUCTO
                $sql = "SELECT * FROM `productos_inventario` WHERE `id_producto` = $id_producto;";
                $producto = mysqli_query($conexion, $sql);
                $ultimo_producto = mysqli_fetch_assoc($producto);//usar cuando se espera varios resultados

                $stock = $ultimo_producto['cantidad_stock']; //Stock del producto
                $cantidad_nueva  = $cantidad + $stock;

                $consulta_stock =  "UPDATE `productos_inventario` SET `cantidad_stock`= $cantidad_nueva WHERE `id_producto` = $id_producto";
                $consulta = mysqli_query($conexion, $consulta_stock);
                
            }
        
        //4. LA LISTA DE DETALLE PEDIDO DEBE DE CAMBIAR DE ESTADO A 1
            $sql = "UPDATE `detalle_pedido` SET `id_pedido`= $id_pedido, `estado`= 1 WHERE `id_usuario` = $id AND `estado` = 0";
            $consulta = mysqli_query($conexion, $sql);
        
        //5. ACTUALIZAR EL ID DE LA VENTA. NO SE HACE HASTA AHORA POR SI HAY UN ERROR ANTERIOR
            $sql = "UPDATE `pedidos` SET `estado`= 1 WHERE `id_pedido` =  $id_pedido";
            $consulta = mysqli_query($conexion, $sql);
        
        $respuesta = array(
            'respuesta' => 'correcto',
            'id_usuario' => $id,
            'id_pedido' => $id_pedido
        );

        return $respuesta;
    } catch (\Throwable $th) {
        var_dump($th);
    }
    mysqli_close($conexion);
}

function actualizar_stock($id,$stockAsumar){
    //CONSULTA PARA OBTENER EL STOCK DEL PRODUCTO
    $sql = "SELECT * FROM `productos_inventario` WHERE `id_producto` = $id;";
    $producto = mysqli_query($conexion, $sql);
    $ultimo_producto = mysqli_fetch_assoc($producto);//usar cuando se espera varios resultados

    $stock = $ultimo_producto['cantidad_stock']; //Stock del producto
    $cantidad_nueva  = $stock + $stockAsumar;

    $consulta_stock =  "UPDATE `productos_inventario` SET `cantidad_stock`= $cantidad_nueva WHERE `id_producto` = $id_producto";
    $consulta = mysqli_query($conexion, $consulta_stock);
} 
/*
TRIGGER PARA ACTUALIZAR STOCK
CREATE TRIGGER `actualiza_stock` AFTER UPDATE ON `detalle_pedido` FOR EACH ROW UPDATE `productos_inventario` SET `cantidad_stock`= `cantidad_stock` + new.`cantidad` WHERE `id_producto` = new.`id_producto`
*/