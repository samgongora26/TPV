<?php
$accion = $_POST['accion'];
require 'consultas.php';

switch ($accion) {
    
    case "abrir_caja":
        $resultado = abrir_caja();
        break;

    case "verificar_caja_abierta":
        $resultado = verificar_caja_abierta();
        break;
    
    case "cerrar_caja":
        $resultado = cerrar_caja();
        break;

    //-----HISTORIAL DE CAJAS------
    case "cajas_hoy":
        $resultado = cajas_hoy();
        break;
    case "cajas_ayer":
        $resultado = cajas_ayer();
        break;
    case "buscar_fecha":
        $resultado = buscar_fecha();
        break;

}

echo json_encode(($resultado));// envio el retorno del array a donde se me pide