<?php

function busqueda(): array
{
    try {
        require '../../../conexion.php';

        $sql = "SELECT * FROM `configuracion` WHERE id_configuracion = 1 ";
        $consulta = mysqli_query($conexion, $sql);

        $usuarios = [];
        $i = 0;
        while ($row = mysqli_fetch_assoc($consulta)) { //usar cuando se espera varios resultados
            $usuarios[$i]['id'] = $row['id_configuracion'];
            $usuarios[$i]['direccion'] = $row['direccion'];
            $usuarios[$i]['razon'] = $row['razon_social'];
            $usuarios[$i]['nombre'] = $row['nombre_fiscal'];
            $usuarios[$i]['telefono'] = $row['telefono'];
            $usuarios[$i]['email'] = $row['email'];
            $i++;
        }


        //var_dump($usuarios);
        return $usuarios;
    } catch (\Throwable $th) {
        var_dump($th);
    }
    mysqli_close($conexion);
}

function actualizar(): array
{
    try {
        require '../../../conexion.php';
        //$id = $_POST['id'];
        $razon = $_POST['razon'];
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $direccion = $_POST['direccion'];
        $email = $_POST['email'];

        $sql = "UPDATE `configuracion` SET `direccion` = '$direccion', `razon_social` = '$razon', `nombre_fiscal` = '$nombre', `telefono` = '$telefono', `email` = '$email' WHERE `id_configuracion` = 1;";
        $consulta = mysqli_query($conexion, $sql);

        $respuesta = array(
            'respuesta' => 'correcto',
            'nombre' => $nombre
        );

        return $respuesta;
    } catch (\Throwable $th) {
        var_dump($th);
    }
    mysqli_close($conexion);
}

?>