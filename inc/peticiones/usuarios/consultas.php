<?php
function registrar_usuario(): array
{           //recibe los datos correctamente
    try {
        require '../../../conexion.php';

        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $telefono = $_POST['telefono'];
        $correo =  $_POST['correo'];
        $usuario = $_POST['usuario'];
        $contrasenia = $_POST['contrasenia'];

         

        $sql =  "INSERT INTO `usuarios`( `nombres`, `apellidos`, `telefono`, `correo`, `usuario`, `contrasenia`, `fotografia`, `estado`)
        VALUES ('$nombres','$apellidos','$telefono','$correo','$usuario','$contrasenia','1.jpg',1)";
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

function mostrar_usuarios(): array
{
    try {
        require '../../../conexion.php';

        $sql = "SELECT `id_usuario`,`nombres`,`apellidos`,`telefono`,`correo`,`usuario`,`fotografia`,`estado` FROM `usuarios`;";
        $consulta = mysqli_query($conexion, $sql);
        $usuarios = [];
        $i = 0;
        while ($row = mysqli_fetch_assoc($consulta)) { //usar cuando se espera varios resultadosS
            $usuarios[$i]['id'] = $row['id_usuario'];
            $usuarios[$i]['nombres'] = $row['nombres'];
            $usuarios[$i]['apellidos'] = $row['apellidos'];
            $usuarios[$i]['telefono'] = $row['telefono'];
            $usuarios[$i]['correo'] = $row['correo'];
            $usuarios[$i]['usuario'] = $row['usuario'];
            $usuarios[$i]['fotografia'] = $row['fotografia'];
            $usuarios[$i]['estado'] = $row['estado'];
            $i++;
        }
        //var_dump($usuarios);
        return $usuarios;
    } catch (\Throwable $th) {
        var_dump($th);
    }
    mysqli_close($conexion);
}

function buscar_proveedor(): array
{
    try {
        require '../../../conexion.php';

        $id = $_POST['id'];
        $sql = " select * from proveedores where id_proveedor=$id;";
        $consulta = mysqli_query($conexion, $sql);

        $row = mysqli_fetch_assoc($consulta); //recibir el resultado de la consulta cuando solo es 1

        return $row;
    } catch (\Throwable $th) {
        var_dump($th);
    }
    mysqli_close($conexion);
}

function eliminar_proveedor(): array
{
    try {
        require '../../../conexion.php';
        
        $id = $_POST['id'];
        $sql = " DELETE FROM `proveedores` WHERE `proveedores`.`id_proveedor`= $id";
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