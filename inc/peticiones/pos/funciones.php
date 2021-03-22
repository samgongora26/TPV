<?php
$accion = $_POST['accion'];
require 'consultas.php';
switch ($accion) {
    case "buscar_producto":
        $resultado = buscar_producto();
        break;
    case "venta_actual":
        $resultado = venta_actual();
        break;
    case "aumentar":
        $resultado = aumentar();
        break;
    case "disminuir":
        $resultado = disminuir();
        break;
    case "cerrar_venta":
        $resultado = cerrar_venta();
        break;
    case "eliminar_venta":
        $resultado = eliminar_venta();
        break;
        case "registrar_venta":
            $resultado = registrar_venta();
}
echo json_encode(($resultado));// envio el retorno del array a donde se me pide