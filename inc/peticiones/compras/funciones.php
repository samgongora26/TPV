<?php
$accion = $_POST['accion'];
require 'consultas.php';

switch ($accion) {
    case "registrar":
        $resultado = registrar_compra();
        break;
    case "mostrar_detalle":
        $resultado = mostrar_detalle();
        break;
    case "select_proveedores":
        $resultado =select_proveedores();
        break;
    case "remover_producto":
        $resultado =remover_producto();
        break;

    case "completar_compra":
        $resultado =completar_compra();
        break;
}

echo json_encode(($resultado));// envio el retorno del array a donde se me pide