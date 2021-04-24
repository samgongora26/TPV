<?php 
    //Se hace llamado a la sesion
    include("../../../inc/funciones/admin/sesion.php");
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <?php
    include '../../../componentes/head.php';
    ?>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,700;1,400&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        include '../../../componentes/nav_doc.php';
    ?>

    <div class="jumbotron jumbotron-fluid text-white" style="background-image: linear-gradient(to top, #1e3c72 0%, #1e3c72 1%, #2a5298 100%);">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="col-sm-10 col-md-6 col-lg-6 mx-auto ">
                        <div class="">
                            
                                <img src="../../assets/images/undraw_Cloud_docs_re_xjht.svg" style="height:180px;" alt="" >
                            
                        </div>        
                    </div>
                </div>
                <div class="col-md-8">
                    <h1 class="display-3" style="font-family: 'Roboto', sans-serif;">Guía de usuario TPV</h1>
                    <p class="lead">Esta es la documentación del sistema de punto de ventas junto con la guía de usuario y las preguntas frecuentes</p>
                </div>
            </div>
            
        </div>
    </div>

    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- CONTENEDOR -->

            <div class="container-fluid">
                <!-- AQUI EMPEZAMOS A AGREGAR DISEÑO DEL CENTRO -->
                <div class="alert alert-light bg-info text-white border-0" role="alert">
                    <strong>Nota. </strong> Esta es la configuración que se debe de contar para comenzar con el sistema. A continuación, exploraremos cada uno de los modulos, más importantes para entender su funcionamiento
                </div>
                <!--------DASHBOARD-->
                        <div class="col-md-11 mx-auto">
                            <div class="col-12 mt-4">
                                <h2>Dashboard</h2>
                                <div class="card-deck">
                                    <div class="card">
                                        <img class="card-img-top img-fluid" src="../../assets/images/doc/doc1.png" alt="Card image cap">
                                    </div>
                                    <div class="card">
                                        <img class="card-img-top img-fluid" src="../../assets/images/doc/doc2.png" alt="Card image cap">
                                    </div>
                                </div>
                                <div class="alert alert-info  text-dark border-0 mt-2" role="alert">
                                    <strong>Nota. </strong> Al ingresar las estadisticas serán mostrado a los usuarios administradores y ocultos a las demás usuarios
                                </div>
                            </div>
                        </div>
                        <hr>
                <!---LISTA DE LOS REQUERIMIENTOS NECESARIOS -->
                <div class="row mt-4">
                    
                    <div class="col-md-8 mx-auto">
                        <div class="alert alert-danger bg-danger text-white border-0" role="alert">
                            <strong>Nota. </strong> Para comenzar a usar el sistema debe de cumplir con lo siguiente:
                        </div>
                        <h4 class="card-title">Requerimientos iniciales</h4>
                        <div class="row">
                                            <div class="col-4">
                                                <div class="list-group" id="list-tab" role="tablist">
                                                    <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-usuario" role="tab" aria-controls="home" aria-selected="true">Usuarios</a>
                                                    <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-proveedores" role="tab" aria-controls="profile" aria-selected="false">Proveedores</a>
                                                    <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-inventario" role="tab" aria-controls="messages" aria-selected="false">Inventario</a>
                                                    <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-compras" role="tab" aria-controls="messages" aria-selected="false">Compras</a>
                                                    <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-clientes" role="tab" aria-controls="messages" aria-selected="false">Cientes</a>
                                                    <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-ventas" role="tab" aria-controls="messages" aria-selected="false">Ventas</a>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="tab-content" id="nav-tabContent">
                                                    <div class="tab-pane fade active show" id="list-usuario">
                                                        <ul style="list-style: none;">
                                                            <li> <span class="fas fa-check"></span> Haber creado un usuario</li>
                                                            <li> <span class="fas fa-check"></span> Haber creado los puestos </li>
                                                            <li> <span class="fas fa-check"></span> Haber creado los horarios </li>
                                                            <li> <span class="fas fa-check"></span> Haber creado los empleados </li>
                                                        </ul>
                                                    </div>
                                                    <div class="tab-pane fade" id="list-proveedores">
                                                        <ul style="list-style: none;">
                                                            <li> <span class="fas fa-check"></span> Haber creado los proveedores </li>
                                                        </ul>
                                                    </div>
                                                    <div class="tab-pane fade" id="list-inventario" >
                                                        <ul style="list-style: none;">
                                                            <li> <span class="fas fa-check"></span> Haber creado las marcas </li>
                                                            <li> <span class="fas fa-check"></span> Haber creado las categorias </li>
                                                            <li> <span class="fas fa-check"></span> Haber creado los productos con los datos necesarios</li>
                                                        </ul>
                                                    </div>
                                                    <div class="tab-pane fade" id="list-compras" >
                                                        <ul style="list-style: none;">
                                                            <li> <span class="fas fa-check"></span> Haber creado los productos en inventario </li>
                                                            <li> <span class="fas fa-check"></span> Haber creado alguna compra para ingresar productos al inventario </li>
                                                        </ul>
                                                    </div>
                                                    <div class="tab-pane fade" id="list-clientes" >
                                                        <ul style="list-style: none;">
                                                            <li> <span class="fas fa-check"></span> Haber creado los clientes </li>
                                                        </ul>
                                                    </div>
                                                    <div class="tab-pane fade" id="list-ventas" >
                                                        <ul style="list-style: none;">
                                                            <li> <span class="fas fa-check"></span> Haber concluido todo lo anterior </li>
                                                        </ul>
                                                        <ul style="list-style: none;">
                                                            <li> <span class="fas fa-check"></span> Abrir una caja con un empleado que esté activo </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                    </div>
                </div>
                <hr>

                <h1>Cómo usar los modulos</h1>
                <!--USUARIOS-->
                <div class="row mt-4">  
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header bg-light">
                                <h4 class="card-title mb-3">Usuarios</h4>
                            </div>
                            <div class="card-body ">

                                

                                <div class="row">
                                    <div class="col-md-2 col-sm-3 mb-2 mb-sm-0">
                                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <a class="nav-link active show" id="v-pills-home-tab" data-toggle="pill" href="#usuarios" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                                <i class="mdi mdi-home-variant d-lg-none d-block mr-1"></i>
                                                <span class="d-none d-lg-block">Usuarios</span>
                                            </a>
                                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#puestos" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                                <i class="mdi mdi-account-circle d-lg-none d-block mr-1"></i>
                                                <span class="d-none d-lg-block">Puestos</span>
                                            </a>
                                            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#horarios" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                                                <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                                                <span class="d-none d-lg-block">horarios</span>
                                            </a>
                                            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#empleados" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                                                <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                                                <span class="d-none d-lg-block">Empleados</span>
                                            </a>
                                        </div>
                                    </div> <!-- end col-->

                                    <div class="col-sm-9 md-9">
                                        <div class="tab-content" id="v-pills-tabContent">
                                            <div class="tab-pane fade active show" id="usuarios" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <p class="mb-0">Después de llenar el formulario, justo debajo estará almacenado el usuario
                                                        con un estado inactivo, no te preocupes, después será cambiado. Por ahora es el primer 
                                                        paso para poder ingresar los usuarios que sean necesarios, para despues asignarle un 
                                                        horario, puesto, etc.</p>
                                                        <div class="alert alert alert-secondary  border-0" role="alert">
                                                            <strong>Nota. </strong> Los usuarios en estado inactivo no pueden ingresar al sistema
                                                        </div>
                                                        <div class="alert alert alert-warning bg-warning text-dark border-0" role="alert">
                                                            <strong>Precaución. </strong> Eliminar usuarios puede causar diversos errores, lo recomendable es solo darles de baja cambiando su estado a de baja o inactivo, de las dos formas el usuario no puede
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <img class="card-img-top img-fluid" src="../../assets/images/doc/usuarios1.png" alt="Card image cap">
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="tab-pane fade" id="puestos" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <p class="mb-0">Después de llenar el formulario, justo al lado estará almacenado el puesto,
                                                        ahí mismo están los demás horarios y los botones de acción para cada uno de los horarios, para
                                                        editarlos o eliminarlos.
                                                        </p>
                                                        <div class="alert alert-light bg-light text-dark border-0" role="alert">
                                                            <strong>Nota. </strong> El único puesto inmodificable es el de administrador
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <img class="card-img-top img-fluid" src="../../assets/images/doc/usuarios2.png" alt="Card image cap">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="horarios" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <p class="mb-0">Después de llenar el formulario, justo al lado estará almacenado el horario,
                                                        ahí mismo están los demás puestos y los botones de acción para cada uno de los puestos, para
                                                        editarlos o eliminarlos.
                                                        </p>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <img class="card-img-top img-fluid" src="../../assets/images/doc/usuarios3.png" alt="Card image cap">
                                                    </div>
                                                </div> 
                                            </div>
                                            <div class="tab-pane fade" id="empleados" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <p class="mb-0">Después de haber hecho los usuarios, haber definido los horarios, los puestos
                                                        lo que sigue es crear los empleados, usando estos datos anteriores, con ello se elige un usuario,
                                                        un puesto y un horario y se da a guardar. Seguidamente aparecerán al lado, al agregar los Empleados
                                                        si es un usuario administrador contará con todos los privilegios
                                                        </p>
                                                        <div class="alert alert-light bg-light text-dark border-0" role="alert">
                                                            <strong>Nota. </strong> Al agregar un empleado este ya está preparado para vender y para acceder al sistema
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <img class="card-img-top img-fluid" src="../../assets/images/doc/usuarios4.png" alt="Card image cap">
                                                    </div>
                                                </div> 
                                            </div>
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end col-->
                                    
                                </div>
                                <!-- end row-->
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                </div>
                
                <!---CAJAS-->
                <hr>
                <div class="row mt-3">  
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header bg-light">
                            <h4 class="card-title mb-3">Cajas</h4>
                            </div>
                            <div class="card-body ">
                            
                                <div class="row">
                                    <div class="col-md-2 col-sm-3 mb-2 mb-sm-0">
                                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <a class="nav-link active show" id="v-pills-home-tab" data-toggle="pill" href="#abrir" role="tab" aria-controls="v-pills-abrir" aria-selected="true">
                                                <i class="mdi mdi-home-variant d-lg-none d-block mr-1"></i>
                                                <span class="d-none d-lg-block">Abrir caja</span>
                                            </a>
                                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#cerrar" role="tab" aria-controls="v-pills-cerrar" aria-selected="false">
                                                <i class="mdi mdi-account-circle d-lg-none d-block mr-1"></i>
                                                <span class="d-none d-lg-block">Cerrar caja</span>
                                            </a>
                                            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#historial" role="tab" aria-controls="v-pills-historial" aria-selected="false">
                                                <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                                                <span class="d-none d-lg-block">Historial</span>
                                            </a>
                                        </div>
                                    </div> <!-- end col-->

                                    <div class="col-sm-9 md-9">
                                        <div class="tab-content" id="">
                                            <div class="tab-pane fade active show" id="abrir" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <p class="mb-0">Para comenzar a vender es necesario 
                                                        que haya registrado productos, clientes y a el empleado 
                                                        que será el cajero, este empleado debe de tener un 
                                                        estado <i>"activo" </i> en la lista de usuarios. Después de todo ello
                                                        se puede ingresar al la caja con el usuario y contraseña</p>
                                                        <div class="alert alert-light bg-light text-dark border-0" role="alert">
                                                            <strong>Nota. </strong> Es necesario ingresar con el mismo usuario y contraseña del usuaio que ingresó al sistema
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <img class="card-img-top img-fluid" src="../../assets/images/doc/cajas1.png" alt="Card image cap">
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="tab-pane fade" id="cerrar" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <p class="mb-0">Para poder cerrar la caja es necesario hacer el registro 
                                                        con el mismo usuario y contraseña y el monto final que hay en la caja</p>
                                                        <div class="alert alert-light bg-light text-dark border-0" role="alert">
                                                            <strong>Nota. </strong> Es necesario ingresar con el mismo usuario y contraseña del usuaio que ingresó al sistema
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <img class="card-img-top img-fluid" src="../../assets/images/doc/cajas1.png" alt="Card image cap">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="historial" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <p class="mb-0">En el historial de cajas se encuentran el registro de las
                                                        cajas abiertas y cerradas con el monto inicial del cajero, junto con el monto final del cajero
                                                        y el monto final de las ventas. Este modulo se divide en el historial de cajas de hoy, de ayer y de la fecha 
                                                        que se desee saber haciendo una busqueda en el apartado de busqueda por fecha</p>
                                                        <div class="alert alert-light bg-warning text-dark border-0" role="alert">
                                                            <strong>Precaución. </strong> El sistema no toma en cuenta el monto inicial para el monto final real, solo toma en cuenta las ventas totales 
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <img class="card-img-top img-fluid" src="../../assets/images/doc/cajas3.png" alt="Card image cap">
                                                    </div>
                                                </div>  
                                            </div>
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end col-->
                                    
                                </div>
                                <!-- end row-->
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                </div>

                <!---CLIENTES-->
                <hr>
                <div class="row mt-3">  
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header bg-light">
                            <h4 class="card-title mb-3">Clientes</h4>
                            </div>
                            <div class="card-body ">

                                

                                <div class="row">
                                    <div class="col-md-2 col-sm-3 mb-2 mb-sm-0">
                                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <a class="nav-link active show" id="v-pills-home-tab" data-toggle="pill" href="#clientes" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                                <i class="mdi mdi-home-variant d-lg-none d-block mr-1"></i>
                                                <span class="d-none d-lg-block">Clientes</span>
                                            </a>
                                        </div>
                                    </div> <!-- end col-->

                                    <div class="col-sm-9 md-9">
                                        <div class="tab-content" id="clientes">
                                            <div class="tab-pane fade active show" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <p class="mb-0">Después de haber completado el formulario de agregar cliente
                                                        en el apartado de ver clientes ahí está disponible las acciones para los clientes,
                                                        acciones como de editar, eliminar y ver</p>
                                                        <div class="alert alert-light bg-warning text-dark border-0" role="alert">
                                                            <strong>Precaución. </strong> Es importante tener clientes y no modificar el primer cliente que es el cliente general para las ventas futuras 
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <img class="card-img-top img-fluid" src="../../assets/images/doc/clientes1.png" alt="Card image cap">
                                                    </div>
                                                </div>  
                                                
                                            </div>
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end col-->
                                    
                                </div>
                                <!-- end row-->
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                </div>

                <!---VENTAS-->
                <hr>
                <div class="row mt-3">  
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header bg-light">
                            <h4 class="card-title mb-3">Ventas</h4>
                            </div>
                            <div class="card-body ">

                                

                                <div class="row">
                                    <div class="col-md-2 col-sm-3 mb-2 mb-sm-0">
                                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <a class="nav-link active show" id="v-pills-home-tab" data-toggle="pill" href="#tickets" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                                <i class="mdi mdi-home-variant d-lg-none d-block mr-1"></i>
                                                <span class="d-none d-lg-block">Tickets</span>
                                            </a>
                                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#agregar" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                                <i class="mdi mdi-account-circle d-lg-none d-block mr-1"></i>
                                                <span class="d-none d-lg-block">Agregar productos</span>
                                            </a>
                                            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#cobrar" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                                                <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                                                <span class="d-none d-lg-block">Cobrar</span>
                                            </a>
                                            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#historial_tickets" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                                                <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                                                <span class="d-none d-lg-block">Historial de tickets</span>
                                            </a>
                                        </div>
                                    </div> <!-- end col-->

                                    <div class="col-sm-9 md-9">
                                        <div class="tab-content" id="">
                                            <div class="tab-pane fade active show" id="tickets" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <p class="mb-0">El sistema es multi tickets, lo que quiere decir que se puede
                                                        tener un ticket en pausa mientras se cobra con otros tickets, los necesarios, pues no hay límite.
                                                        Al iniciar lo primero que se debe de hacer es crear un ticket o seleccionar el ticket 0, cuando se habilite
                                                        se pueden empezar a ingresar los productos</p>
                                                        <div class="alert alert-light bg-light text-dark border-0" role="alert">
                                                            <strong>Nota. </strong> Si no se agregan productos, intente agregando un ticket primero
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <img class="card-img-top img-fluid" src="../../assets/images/doc/ventas1.png" alt="Card image cap">
                                                        
                                                        <div class="alert alert-light bg-light text-dark border-0" role="alert">
                                                            <strong>Nota. </strong> Para agregar tickets se da click al simbolo de "+"
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="tab-pane fade" id="agregar" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <p class="mb-0">Hay dos formas de agregar productos, con el 
                                                            codigo (usando un escaner o el teclado) o con el boton de buscar productos,
                                                            en el primero es necesario ingresar el codigo del producto y con el boton 
                                                            de ayuda despliega una ventana de busqueda de productos, ahi mismo se puede seleccionar
                                                            un producto y será agregado al ticket automaticamente</p>
                                                        <div class="alert alert-light bg-light text-dark border-0" role="alert">
                                                            <strong>Nota. </strong> Si no se agregan productos, intente agregando un ticket primero
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        Por código
                                                        <img class="card-img-top img-fluid" src="../../assets/images/doc/ventas2.png" alt="Card image cap">
                                                        Por ventana de búsqueda
                                                        <img class="card-img-top img-fluid" src="../../assets/images/doc/ventas3.png" alt="Card image cap">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="cobrar" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <p class="mb-0">La forma en la que se debe de cerrar la venta para cobrar es ubicar 
                                                        el cuadro verde en el cual está el total y un botón de "cobrar" al dar click en el 
                                                        despliega una ventana en el cual muestra el total y tiene un entrada en el cual va 
                                                        la cantidad con la que pagarán, al dar enter muestra cuanto dar de cambio.</p>
                                                        <p>Otro aspecto importante es el cliente, ahí se introduce el número telefonico del cliente
                                                        si este está registrado, si no, solo lo guardará en cliente general</p>
                                                        <div class="alert alert-light bg-light text-dark border-0" role="alert">
                                                            <strong>Nota. </strong> Si no es ingresado un cliente la venta es guardada en <i>"Cliente general"</i>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">

                                                        <img class="card-img-top img-fluid" src="../../assets/images/doc/ventas4.png" style="width: 200px;" alt="Card image cap">
                                                    
                                                        <img class="card-img-top img-fluid" src="../../assets/images/doc/ventas5.png" style="width: 200px;" alt="Card image cap">
                                                    </div>
                                                </div>
                                                    
                                            </div>
                                            <div class="tab-pane fade" id="historial_tickets" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <p class="mb-0">Es muy común después de haber hecho una venta buscarla, por si 
                                                        surgió un error, o por alguna otra razón, es por ello, que en el apartado de historial 
                                                        de tickets se tiene cubierto esa parte. Se tiene que situar en el apartado de <i>Historial de tickets</i>
                                                        después se puede hacer una búesqueda por el folio del ticket o por la fecha en la que se realizó la venta.</p>
                                                        <p>Si se desea ver el detalle de esa venta al encontrarla, darle click al botón de ver detalle venta</p>
                                                    </div>
                                                    <div class="col-md-6">

                                                        <img class="card-img-top img-fluid" src="../../assets/images/doc/ventas6.png" alt="Card image cap">
                                                    
                                                    </div>
                                                </div>
                                                    
                                            </div>
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end col-->
                                    
                                </div>
                                <!-- end row-->
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                </div>

            </div>

            <footer class="footer text-center text-muted">
                All Rights Reserved. Designed and Developed by <a target="_blank"  href="https://github.com/samgongora26">  Saúl Góngora   </a>,<a target="_blank"  href="https://github.com/satswere">  Luis Tzun   </a>,<a target="_blank"  href="https://github.com/Feltydany">    Daniel Gónzalez </a> y <a target="_blank"  href="https://github.com/silvercrow185">  Osly Donovan    </a>
            </footer>

            <!-- TODOS LOS ENLACES DE SCRIPTS -->
    <?php
        include '../../../componentes/scripts.php';
    ?>
    <!-- FIN DE SCRIPTS -->
</body>
</html>