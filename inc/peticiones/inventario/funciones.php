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
    case "registrarm":
        $resultado = registrar_marca();
        break;
    case "mostrar":
        $resultado = todo_inventario();
        break;
    case "mostrarc":
        $resultado = todo_categorias();
        break;
    case "mostrarm":
        $resultado = todo_marcas();
        break;
    case "buscar":
        $resultado = buscar_producto();
        break;
    case "buscarc":
        $resultado = buscar_categoria();
        break;
    case "buscarm":
        $resultado = buscar_marca();
        break;
    case "eliminar":
        $resultado = eliminar_producto();
        break;
    case "eliminarc":
        $resultado = eliminar_categoria();
        break;
    case "eliminarm":
        $resultado = eliminar_marca();
        break;
    case "actualizar":
        $resultado = actualizar_producto();
        break;
    case 'actualizarc':
        $resultado = actualizar_categoria();
        break;
    case "actualizarm":
        $resultado = actualizar_marca();
        break;
    case "filtro":
        $resultado = filtro_productos();
        break;
    case "filtrom":
        $resultado = filtro_marcas();
        break;
    case "filtroc":
        $resultado = filtro_categorias();
        break;
    case "select_marca":
        $resultado = select_marca_productos();
        break;
    case "select_unidad":
        $resultado = select_unidad_productos();
        break;
    case "select_marca_cat":
        $resultado = select_marca_categorias();
        break;
}

echo json_encode(($resultado));// envio el retorno del array a donde se me pide 