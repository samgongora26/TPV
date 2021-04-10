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
