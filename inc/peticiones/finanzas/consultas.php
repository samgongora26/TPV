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