<?php
$accion = $_POST['accion'];
require 'consultas.php';

switch ($accion) {
    case "registrar":
        $resultado = registrar_compra();
        break;
    case "mostrar_detalle":
        $resultado = mostrar_detalle();
        break;
    case "select_proveedores":
        $resultado =select_proveedores();
        break;
    case "remover_producto":
        $resultado =remover_producto();
        break;

    case "completar_compra":
        $resultado =completar_compra();
        break;

    //-------HISTORIAL DE COMPRAS
    case "compras_hoy":
        $resultado = compras_hoy();
        break;
    case "compras_ayer":
        $resultado = compras_ayer();
        break;
    case "compras_debidas":
        $resultado = compras_debidas();
        break;

    //--------DETALLE DE COMPRA ESPECIFICO
    case "buscar_pedido":
        $resultado = buscar_pedido();
        break;
    case "datos_pedido":
        $resultado = datos_pedido();
        break;
    case "buscar_fecha":
        $resultado = buscar_fecha();
        break;
    case "saldar_compra":
        $resultado = saldar_compra();
        break;
}

echo json_encode(($resultado));// envio el retorno del array a donde se me pide