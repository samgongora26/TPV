<?php
$accion = $_POST['accion'];
require 'consultas.php';

switch ($accion) {
    case "registrar":
        $resultado = registrar_compra();
        break;
    case "mostrar_promociones":
        $resultado = mostrar_promociones();
        break;
}

echo json_encode(($resultado));// envio el retorno del array a donde se me pide