<?php

function mostrar_promociones(): array
{
    try {
        require '../../../conexion.php';
        $id_usuario =  $_POST['usuario'];
        //Selecciona todos los productos con estado 0 y del usuario dado
        //El estado 0 significa que aun no ha sido comprado, es decir que aun no se le agrega el id pedido
        $sql = "SELECT * FROM `productos_inventario` 
                WHERE `promocion_porcentaje` is not null
                    and (`promocion_porcentaje` != '' or `promocion_porcentaje` != 0 or `promocion_porcentaje` != NULL) ";
        $consulta = mysqli_query($conexion, $sql);
        $producto = [];
        $i = 0; 
        while ($row = mysqli_fetch_assoc($consulta)) { //usar cuando se espera varios resultadosS
            $producto[$i]['foto'] = $row['foto'];
            $producto[$i]['id_producto'] = $row['id_producto'];   
            $producto[$i]['nombre_producto'] = $row['nombre_producto'];
            $producto[$i]['codigo'] = $row['codigo'];
            $producto[$i]['promocion_porcentaje'] = $row['promocion_porcentaje'];
            $i++;
        }
        //var_dump($usuarios);
        return $producto;
    } catch (\Throwable $th) {
        var_dump($th);
    }
    mysqli_close($conexion);
}

function registrar_promocion(): array
{           //recibe los datos correctamente
    try {
        require '../../../conexion.php';
        //Datos que llegan del front 
        //$proveedor = $_POST['proveedor'];
        $codigo = $_POST['codigo'];
        $promocion = $_POST['promocion'];
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
        
        //3.  ACTUALIZAR PRODUCTO AGREGANDOLE EL DESCUENTO Y MANDAR MENSAJE DE EXITO
                $sql =  "UPDATE `productos_inventario` SET `promocion_porcentaje`= '$promocion' WHERE `id_producto` =  $id_producto";
                $consulta = mysqli_query($conexion, $sql);
        
            }
        //Salida del proceso, si algo sale mal aparecera en mensaje y lo demás estará vacio
        $respuesta = array( 
            'mensaje' => $mensaje,
            'id_producto' => $id_producto
        );        
        return $respuesta;
    } catch (\Throwable $th) {
        var_dump($th);
    }
    mysqli_close($conexion);
}

function A(): array
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
