<?php
$accion = $_POST['accion'];
require 'consultas.php';

switch ($accion) {
    case "mostrar":
        $resultado = mejores_empleados();
        break;
}

echo json_encode(($resultado));// envio el retorno del array a donde se me pide