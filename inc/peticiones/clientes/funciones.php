<?php
$accion = $_POST['accion'];
require 'consultas.php';

switch ($accion) {
    case "registrar":
        $resultado = registrar_cliente();
        break;
    case "mostrar":
        $resultado = todos_clientes();
        break;
    case "buscar":
        $resultado = buscar_cliente();
        break;
    case "eliminar":
        $resultado = eliminar_cliente();
        break;
    case 'actualizar':
        $resultado = actualizar_cliente();
        break;
    case 'busqueda_filtro':
        $resultado = filtrado_nombres();
        break;
}

echo json_encode(($resultado));// envio el retorno del array a donde se me pide