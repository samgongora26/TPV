<?php

function busqueda(): array
{
    try {
        require '../../../conexion.php';

        $sql = "";
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

?>