<?php
function registrar_usuarios(): array
{           //recibe los datos correctamente
    try {
        require '../../../conexion.php';

        $folio = $_POST['folio'];
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $ciudad =  $_POST['ciudad'];
        $direccion = $_POST['direccion'];
        $telefono = $_POST['telefono'];
        $rfc = $_POST['rfc'];
        $fecha_registro = $_POST['fecha_registro'];

        $sql =  "INSERT INTO proveedores (folio, nombre, localidad, direccion, telefono, fecha_registro)
        VALUES('$folio','$nombre','$ciudad','$direccion','$telefono','$fecha_registro')";
        $consulta = mysqli_query($conexion, $sql);

        $respuesta = array( //envia los datos correctamente
            'respuesta' => 'correcto',
            'id_ingresado' => mysqli_insert_id($conexion),
            'folio_recibido' => $folio,
            'nombre_recibido' => $nombre,
            'email_recibido' => $email,
        );
        return $respuesta;
    } catch (\Throwable $th) {
        var_dump($th);
    }
}
