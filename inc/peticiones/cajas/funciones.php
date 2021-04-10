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

}

echo json_encode(($resultado));// envio el retorno del array a donde se me pide