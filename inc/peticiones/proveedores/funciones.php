<?php
$accion = $_POST['accion'];
require 'consultas.php';

switch ($accion) {
    case "registrar":
        $resultado = registrar_usuarios();
        break;/*
    case "registrar":
        $resultado = registrar_usuarios();
        break;*/
}

echo json_encode(($resultado));// envio el retorno del array a donde se me pide