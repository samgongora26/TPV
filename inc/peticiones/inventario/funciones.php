<?php
$accion = $_POST['accion'];
require 'consultas.php';

switch ($accion) {
    case "registrar":
        $resultado = registrar_producto();
        break;
    case "mostrar":
        $resultado = todo_inventario();
        break;
    case "buscar":
        $resultado = buscar_producto();
        break;
    case "eliminar":
        $resultado = eliminar_producto();
        break;
    case 'actualizar':
        $resultado = actualizar_producto();
        break;
}

echo json_encode(($resultado));// envio el retorno del array a donde se me pide 