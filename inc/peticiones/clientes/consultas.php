<?php
function registrar_usuarios(): array
{           //recibe los datos correctamente
    try {
        require '../../../conexion.php';

        $nombre = $_POST['nombre'];
        $nombre_2 = $_POST['nombre_2'];
        $nombres = $nombre . ' ' . $nombre_2; //concatenacion de los 2 nombres
        $apellido_p = $_POST['apellido_p'];
        $apellido_m = $_POST['apellido_m'];
        $apellidos = $apellido_p . ' ' . $apellido_m; //concatenacion de los 2 apellidos
        $telefono =  $_POST['telefono'];
        $correo = $_POST['correo'];
        $direccion = $_POST['direccion'];
        $fecha_registro = $_POST['fecha_registro'];
        $colonia = "hola_colonia";

        $sql =  "INSERT INTO clientes (nombres, apellidos, telefono, correo, fecha_registro, colonia, direccion)
        VALUES('$nombres','$apellidos','$telefono','$correo','$fecha_registro','$colonia','$direccion')";
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
    mysqli_close($conexion);
}

function todos_usuarios(): array
{
    try {
        require '../../../conexion.php';

        $sql = "select * from clientes;";
        $consulta = mysqli_query($conexion, $sql);

        $usuarios = [];
        $i = 0;
        while ($row = mysqli_fetch_assoc($consulta)) { //usar cuando se espera varios resultadosS
            $usuarios[$i]['id'] = $row['id_cliente'];
            $usuarios[$i]['nombre'] = $row['nombres'];
            $usuarios[$i]['telefono'] = $row['telefono'];
            $usuarios[$i]['direccion'] = $row['direccion'];
            $i++;
        }
        //var_dump($usuarios);
        return $usuarios;
    } catch (\Throwable $th) {
        var_dump($th);
    }
    mysqli_close($conexion);
}
