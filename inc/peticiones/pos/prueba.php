<?php
  require '../../../conexion.php';
  echo 'pruebas de las pruebas';

   /*
     $sql = " SELECT * FROM ventas";
     $consulta = mysqli_query($conexion, $sql);
     echo $consulta;


     $id_empleado = 999888;
     $sql = " SELECT * FROM ventas WHERE id_empleado= $id_empleado AND estado= 0 ORDER BY id_venta DESC LIMIT 1;";
     $consulta = mysqli_query($conexion, $sql);

     $si_existe  = mysqli_num_rows($consulta);

     $datos = [];

     $i = 0;
    // $sql = " INSERT INTO ventas (id_venta, id_cliente, id_empleado, importe,estado) VALUES (NULL, '1', '$id_empleado', '0',0);";
   //  $consulta = mysqli_query($conexion, $sql);
   //  $id_venta = mysqli_insert_id($conexion);

   //  echo 'veamos que pasa';
  //   echo $id_venta;
    
*/
    $valor = 5;
    $id = 1;
    
    $stmt = $conexion->prepare("UPDATE productos_inventario SET cantidad_stock =cantidad_stock - ? WHERE productos_inventario.id_producto = ?");
    $stmt->bind_param('ii', $valor, $id);
    $status = $stmt->execute();
    echo $status;

    echo'si jalo';
    
    
    echo $si_existe;