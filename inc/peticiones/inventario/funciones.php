<?php
$accion = $_POST['accion'];
require 'consultas.php';

switch ($accion) {
    case "registrar":
        $resultado = registrar_producto();
        break;
    case "registrarc":
        $resultado = registrar_categoria();
        break;
    case "mostrar":
        $resultado = todo_inventario();
        break;
    case "mostrarc":
        $resultado = todo_categorias();
        break;
    case "buscar":
        $resultado = buscar_producto();
        break;
    case "eliminar":
        $resultado = eliminar_producto();
        break;
    case "eliminarc":
        $resultado = eliminar_categoria();
        break;
    case 'actualizar':
        $resultado = actualizar_producto();
        break;
    
}

echo json_encode(($resultado));// envio el retorno del array a donde se me pide 