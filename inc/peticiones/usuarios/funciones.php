<?php
$accion = $_POST['accion'];
require 'consultas.php';

switch ($accion) {
    case "registrar":
        $resultado = registrar_usuario();
        break;
    case "mostrar":
        $resultado = todos_proveedores();
        break;
    case "buscar":
        $resultado =buscar_proveedor();
        break;
    case "eliminar":
        $resultado =eliminar_proveedor();
        break;
}

echo json_encode(($resultado));// envio el retorno del array a donde se me pide