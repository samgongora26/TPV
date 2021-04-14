<?php
$accion = $_POST['accion'];
require 'consultas.php';

switch ($accion) {
    case "tabla1":
        $resultado = mejores_empleados();
        break;
    case "tabla2":
        $resultado = mejores_clientes();
        break;
}

echo json_encode(($resultado));// envio el retorno del array a donde se me pide