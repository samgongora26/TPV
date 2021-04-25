<?php
$accion = $_POST['accion'];
require 'consultas.php';

switch ($accion) {
    case "registrar_promocion":
        $resultado = registrar_promocion();
        break;
    case "mostrar_promociones":
        $resultado = mostrar_promociones();
        break;
    case "remover_promocion":
        $resultado = remover_promocion();
        break;
}

echo json_encode(($resultado));// envio el retorno del array a donde se me pide