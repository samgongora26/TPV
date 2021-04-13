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


