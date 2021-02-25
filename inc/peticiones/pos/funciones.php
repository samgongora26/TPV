<?php
$accion = $_POST['accion'];
require 'consultas.php';
switch ($accion) {
    case "registar_producto":
        $resultado = registrar_producto();
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
}
echo json_encode(($resultado));// envio el retorno del array a donde se me pide