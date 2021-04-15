<?php
$accion = $_POST['accion'];
require 'consultas.php';

switch ($accion) {
    case "busqueda":
        $resultado = busqueda();
        break;
    case "actualizar":
        $resultado = actualizar();
        break;
}

echo json_encode(($resultado));// envio el retorno del array a donde se me pide