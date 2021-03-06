<?php
$accion = $_POST['accion'];
require 'consultas.php';

switch ($accion) {
    case "registrar":
        $resultado = registrar_usuario();
        break;
    case "mostrar":
        $resultado = mostrar_usuarios();
        break;
    case "buscar":
        $resultado =buscar_usuario();
        break;
    case "eliminar":
        $resultado =eliminar_usuario();
        break;
}

echo json_encode(($resultado));// envio el retorno del array a donde se me pide