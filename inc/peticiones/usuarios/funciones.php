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
    case 'actualizar':
        $resultado =actualizar_usuario();
        break;
    //Puestos
    case "puestosLista":
        $resultado = mostrar_puestos();
        break;
    case 'actualizar_puesto':
        $resultado =actualizar_puesto();
        break;
    case "eliminar_puesto":
        $resultado =eliminar_puesto();
        break;
}

echo json_encode(($resultado));// envio el retorno del array a donde se me pide