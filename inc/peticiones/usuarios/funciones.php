<?php
$accion = $_POST['accion'];
require 'consultas.php';

switch ($accion) {
    //--------------USUARIOS--------------
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

    //---------------Puestos-------------------
    case "registraPuesto":
        $resultado = registrar_puesto();
        break;
    case "puestosLista":
        $resultado = mostrar_puestos();
        break;
    case 'actualizar_puesto':
        $resultado =actualizar_puesto();
        break;
    case "eliminar_puesto":
        $resultado =eliminar_puesto();
        break;

    //---------------------HORARIOS------------
    case "horariosLista":
        $resultado = mostrar_horarios();
        break;
    case "regsitraHorario":
        $resultado = registrar_horario();
        break;
     case "eliminar_horario":
        $resultado =eliminar_horario();
        break;
    case 'actualizar_horario':
        $resultado =actualizar_horario();
        break;
    //-------------------EMPLEADOS------------
    case "mostrar_empleados":
        $resultado = mostrar_empleados();
        break;
    case "select_usuarios":
        $resultado = select_usuarios();
        break;
    case "select_puestos":
        $resultado = select_puestos();
        break;
    case "select_horarios":
        $resultado = select_horarios();
        break; 
    case "registrarEmpleado":
        $resultado = registrarEmpleado();
        break;   
    
    case "buscar_empleado":
        $resultado = buscar_empleado();
        break;   
    
    
}

echo json_encode(($resultado));// envio el retorno del array a donde se me pide