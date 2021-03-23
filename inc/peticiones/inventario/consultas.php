<?php
function registrar_producto(): array
{           //recibe los datos correctamente
    try {
        require '../../../conexion.php';

        $codigobarras = $_POST['codigobarras'];
        $nombre = $_POST['nombre'];
        $caducidad = $_POST['caducidad'];
        $unidad =  $_POST['unidad'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $estado = $_POST['estado'];
        //$categoria = $_POST['categoria'];
        $costo = $_POST['costo'];
        $mayoreo = $_POST['mayoreo'];
        $stock = $_POST['stock'];
        $marca = $_POST['marca'];

        $sql =  "INSERT INTO productos_inventario (nombre_producto, descripcion, codigo, precio_costo, precio_venta, precio_mayoreo, unidad, cantidad_stock, fecha_caducidad, id_marca, estado)
        VALUES('$nombre','$descripcion','$codigobarras', '$costo','$precio','$mayoreo', '$unidad','$stock', '$caducidad', '$marca','$estado')";


        $consulta = mysqli_query($conexion, $sql);

        $respuesta = array( //envia los datos correctamente
            'respuesta' => 'correcto',
            //'id_ingresado' => mysqli_insert_id($conexion),
            'nombre' => $nombre,
            'codigo' => $codigobarras,
            'descripcion' => $descripcion,
            'precio' => $precio,
            'unidad' => $unidad,
            'estado' => $estado,
            'costo' => $costo,
            'mayoreo' => $mayoreo,
            'caducidad' => $categoria,
            'stock' => $stock,
            'marca' => $marca
        );

        return $respuesta;
    } catch (\Throwable $th) {
        var_dump($th);
    }
    mysqli_close($conexion);
}

function todo_inventario(): array
{
    try {
        require '../../../conexion.php';

        $sql = "select * from productos_inventario;";
        $consulta = mysqli_query($conexion, $sql);

        $usuarios = [];
        $i = 0;
        while ($row = mysqli_fetch_assoc($consulta)) { //usar cuando se espera varios resultadosS
            $usuarios[$i]['id'] = $row['id_producto'];
            $usuarios[$i]['nombre'] = $row['nombre_producto'];
            $usuarios[$i]['codigo'] = $row['codigo'];
            $usuarios[$i]['precio_costo'] = $row['precio_costo'];
            $usuarios[$i]['precio_venta'] = $row['precio_venta'];
            $usuarios[$i]['stock'] = $row['cantidad_stock'];
            $usuarios[$i]['marca'] = $row['id_marca'];
            $i++;
        }
        //var_dump($usuarios);
        return $usuarios;
    } catch (\Throwable $th) {
        var_dump($th);
    }
    mysqli_close($conexion);
}


function eliminar_producto(): array
{
    try {
        require '../../../conexion.php';
        
        $id = $_POST['id'];
        $sql = " DELETE FROM `productos_inventario` WHERE `productos_inventario`.`id_producto`= $id";
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


function actualizar_categoria(): array
{
    try {
        require '../../../conexion.php';
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $estado = $_POST['estado'];
        $detalles = $_POST['detalles'];

              $sql = "UPDATE `categorias` SET `nombre_categoria` = '$nombre', `estado` = '$estado', `detalles` = '$detalles' WHERE `categorias`.`id_categoria` = $id;";
        $consulta = mysqli_query($conexion, $sql);

        $respuesta = array(
            'respuesta' => 'correcto',
            'id' => $id
        );

        return $respuesta;
    } catch (\Throwable $th) {
        var_dump($th);
    }
    mysqli_close($conexion);
}


function buscar_producto(): array
{
    try {
        require '../../../conexion.php';

        $id = $_POST['id'];
        $sql = " select * from productos_inventario where id_producto=$id;";
        $consulta = mysqli_query($conexion, $sql);

        $row = mysqli_fetch_assoc($consulta); //recibir el resultado de la consulta cuando solo es 1

        return $row;
    } catch (\Throwable $th) {
        var_dump($th);
    }
    mysqli_close($conexion);
}

function registrar_categoria(): array
{
    
    try {
        require '../../../conexion.php';

        $detalles = $_POST['detalles'];
        $nombre = $_POST['nombre'];
        $estado = $_POST['estado'];

        $sql =  "INSERT INTO categorias (nombre_categoria, estado, detalles)
        VALUES('$nombre','$estado','$detalles')";


        $consulta = mysqli_query($conexion, $sql);

        $respuesta = array( //envia los datos correctamente
            'respuesta' => 'correcto',
            //'id_ingresado' => mysqli_insert_id($conexion),
            'nombre' => $nombre,
            'estado' => $estado,
            'detalles' => $detalles
        );

        return $respuesta;
    } catch (\Throwable $th) {
        var_dump($th);
    }
    mysqli_close($conexion);
    
}

function buscar_categoria(): array
{
    try {
        require '../../../conexion.php';

        $id = $_POST['id'];
        $sql = "SELECT * FROM categorias WHERE id_categoria = $id;";
        $consulta = mysqli_query($conexion, $sql);

        $row = mysqli_fetch_assoc($consulta); //recibir el resultado de la consulta cuando solo es 1

        return $row;
    } catch (\Throwable $th) {
        var_dump($th);
    }
    mysqli_close($conexion);
}

function eliminar_categoria(): array
{
    try {
        require '../../../conexion.php';
        
        $id = $_POST['id'];
        $sql = " DELETE FROM `categorias` WHERE `categorias`.`id_categoria`= $id";
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

function todo_categorias(): array
{
    try {
        require '../../../conexion.php';

        $sql = "select * from categorias;";
        $consulta = mysqli_query($conexion, $sql);

        $usuarios = [];
        $i = 0;
        while ($row = mysqli_fetch_assoc($consulta)) { //usar cuando se espera varios resultadosS
            $usuarios[$i]['id'] = $row['id_categoria'];
            $usuarios[$i]['nombre_categoria'] = $row['nombre_categoria'];
            $usuarios[$i]['estado'] = $row['estado'];
            $usuarios[$i]['detalles'] = $row['detalles'];
            $i++;
        }
        //var_dump($usuarios);
        return $usuarios;
    } catch (\Throwable $th) {
        var_dump($th);
    }
    mysqli_close($conexion);
}

function actualizar_producto(): array
{
    try {
        require '../../../conexion.php';
        $id = $_POST['id'];
        $barra = $_POST['barra'];
        $nombre = $_POST['nombre'];
        $venta = $_POST['precio_venta'];
        $stock = $_POST['stock'];
        $costo = $_POST['precio_compra'];

              $sql = "UPDATE `productos_inventario` SET `nombre_producto` = '$nombre', `codigo` = '$barra', `precio_costo` = '$costo', `precio_venta` = '$venta', `cantidad_stock` = '$stock' WHERE `productos_inventario`.`id_producto` = $id;";
        $consulta = mysqli_query($conexion, $sql);

        $respuesta = array(
            'respuesta' => 'correcto',
            'id' => $id
        );

        return $respuesta;
    } catch (\Throwable $th) {
        var_dump($th);
    }
    mysqli_close($conexion);
}

function registrar_marca(): array
{
    
    try {
        require '../../../conexion.php';

        
        $nombre = $_POST['nombre'];
        $categoria = $_POST['categoria'];

        $sql =  "INSERT INTO marcas (id_categoria, nombre)
        VALUES('$categoria','$nombre')";


        $consulta = mysqli_query($conexion, $sql);

        $respuesta = array( //envia los datos correctamente
            'respuesta' => 'correcto',
            //'id_ingresado' => mysqli_insert_id($conexion),
            'nombre' => $nombre,
            'id de categoria' => $categoria
        );

        return $respuesta;
    } catch (\Throwable $th) {
        var_dump($th);
    }
    mysqli_close($conexion);
    
}

function todo_marcas(): array
{
    try {
        require '../../../conexion.php';

        $sql = "select * from marcas;";
        $consulta = mysqli_query($conexion, $sql);

        $usuarios = [];
        $i = 0;
        while ($row = mysqli_fetch_assoc($consulta)) { //usar cuando se espera varios resultadosS
            $usuarios[$i]['id'] = $row['id_marcas'];
            $usuarios[$i]['id_categoria'] = $row['id_categoria'];
            $usuarios[$i]['nombre'] = $row['nombre'];
            $i++;
        }
        //var_dump($usuarios);
        return $usuarios;
    } catch (\Throwable $th) {
        var_dump($th);
    }
    mysqli_close($conexion);
}

function eliminar_marca(): array
{
    try {
        require '../../../conexion.php';
        
        $id = $_POST['id'];
        $sql = " DELETE FROM `marcas` WHERE `marcas`.`id_marcas`= $id";
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


function buscar_marca(): array
{
    try {
        require '../../../conexion.php';

        $id = $_POST['id'];
        $sql = "SELECT * FROM marcas WHERE id_marcas = $id;";
        $consulta = mysqli_query($conexion, $sql);

        $row = mysqli_fetch_assoc($consulta); //recibir el resultado de la consulta cuando solo es 1

        return $row;
    } catch (\Throwable $th) {
        var_dump($th);
    }
    mysqli_close($conexion);
}

function actualizar_marca(): array
{
    try {
        require '../../../conexion.php';
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $categoria = $_POST['categoria'];

        $sql = "UPDATE `marcas` SET `id_categoria` = '$categoria', `nombre` = '$nombre' WHERE `marcas`.`id_marcas` = $id;";
        $consulta = mysqli_query($conexion, $sql);

        $respuesta = array(
            'respuesta' => 'correcto',
            'id' => $id
        );

        return $respuesta;
    } catch (\Throwable $th) {
        var_dump($th);
    }
    mysqli_close($conexion);
}

function filtro_productos(): array
{
    try {
        require '../../../conexion.php';

        $nombre = $_POST['nombre'];

        $sql = "SELECT * FROM `productos_inventario` WHERE nombre_producto LIKE '%$nombre%';";
        $consulta = mysqli_query($conexion, $sql);

        $usuarios = [];
        $i = 0;
        while ($row = mysqli_fetch_assoc($consulta)) { //usar cuando se espera varios resultadosS
            $usuarios[$i]['id'] = $row['id_producto'];
            $usuarios[$i]['nombre'] = $row['nombre_producto'];
            $usuarios[$i]['codigo'] = $row['codigo'];
            $usuarios[$i]['precio_costo'] = $row['precio_costo'];
            $usuarios[$i]['precio_venta'] = $row['precio_venta'];
            $usuarios[$i]['stock'] = $row['cantidad_stock'];
            $usuarios[$i]['marca'] = $row['id_marca'];
            $i++;
        }
        //var_dump($usuarios);
        return $usuarios;
    } catch (\Throwable $th) {
        $respuesta = array(
            'error' => $th
        );
        return $respuesta;
    }
}

function filtro_marcas(): array
{
    try {
        require '../../../conexion.php';

        $nombre = $_POST['nombre'];

        $sql = "SELECT * FROM `marcas` WHERE nombre LIKE '%$nombre%';";
        $consulta = mysqli_query($conexion, $sql);

        $usuarios = [];
        $i = 0;
        while ($row = mysqli_fetch_assoc($consulta)) { //usar cuando se espera varios resultadosS
            $usuarios[$i]['id'] = $row['id_marcas'];
            $usuarios[$i]['id_categoria'] = $row['id_categoria'];
            $usuarios[$i]['nombre'] = $row['nombre'];
            $i++;
        }
        //var_dump($usuarios);
        return $usuarios;
    } catch (\Throwable $th) {
        $respuesta = array(
            'error' => $th
        );
        return $respuesta;
    }
}

function filtro_categorias(): array
{
    try {
        require '../../../conexion.php';

        $nombre = $_POST['nombre'];

        $sql = "SELECT * FROM `categorias` WHERE nombre_categoria LIKE '%$nombre%';";
        $consulta = mysqli_query($conexion, $sql);

        $usuarios = [];
        $i = 0;
        while ($row = mysqli_fetch_assoc($consulta)) { //usar cuando se espera varios resultadosS
            $usuarios[$i]['id'] = $row['id_categoria'];
            $usuarios[$i]['nombre_categoria'] = $row['nombre_categoria'];
            $usuarios[$i]['estado'] = $row['estado'];
            $usuarios[$i]['detalles'] = $row['detalles'];
            $i++;
        }
        //var_dump($usuarios);
        return $usuarios;
    } catch (\Throwable $th) {
        $respuesta = array(
            'error' => $th
        );
        return $respuesta;
    }
}




function select_marca_productos():array
{
    try{
        require '../../../conexion.php';

        $sql= "SELECT `id_marcas`, `nombre`  FROM `marcas`;";
        $consulta = mysqli_query($conexion, $sql);
        $usuarios = [];
        $i = 0;
        while ($row = mysqli_fetch_assoc($consulta)) { //usar cuando se espera varios resultadosS
            $usuarios[$i]['id'] = $row['id_marcas'];
            $usuarios[$i]['nombre'] = $row['nombre'];
            $i++;
        }
        //var_dump($usuarios);
        return $usuarios;
        
    }catch (\Throwable $th) {
        var_dump($th);
    }
    mysqli_close($conexion);

}


function select_unidad_productos():array
{
    try{
        require '../../../conexion.php';

        $sql= "SELECT `id_unidad`, `nombre`  FROM `unidades`;";
        $consulta = mysqli_query($conexion, $sql);
        $usuarios = [];
        $i = 0;
        while ($row = mysqli_fetch_assoc($consulta)) { //usar cuando se espera varios resultadosS
            $usuarios[$i]['id'] = $row['id_unidad'];
            $usuarios[$i]['nombre'] = $row['nombre'];
            $i++;
        }
        //var_dump($usuarios);
        return $usuarios;
        
    }catch (\Throwable $th) {
        var_dump($th);
    }
    mysqli_close($conexion);

}

function select_marca_categorias():array
{
    try{
        require '../../../conexion.php';

        $sql= "SELECT `id_marcas`, `nombre`  FROM `marcas`;";
        $consulta = mysqli_query($conexion, $sql);
        $usuarios = [];
        $i = 0;
        while ($row = mysqli_fetch_assoc($consulta)) { //usar cuando se espera varios resultadosS
            $usuarios[$i]['id'] = $row['id_marcas'];
            $usuarios[$i]['nombre'] = $row['nombre'];
            $i++;
        }
        //var_dump($usuarios);
        return $usuarios;
        
    }catch (\Throwable $th) {
        var_dump($th);
    }
    mysqli_close($conexion);

}
