<?php
$accion = $_POST['accion'];
require 'consultas.php';

switch ($accion) {
    case "registrar":
        $resultado = registrar_compra();
        break;
    case "mostrar":
        $resultado = todos_proveedores();
        break;
    case "select_proveedores":
        $resultado =select_proveedores();
        break;
    case "eliminar":
        $resultado =eliminar_proveedor();
        break;
}

echo json_encode(($resultado));// envio el retorno del array a donde se me pide