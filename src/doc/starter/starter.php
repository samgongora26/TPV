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
                                                    <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages" aria-selected="false">Clientes</a>
                                                    <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages" aria-selected="false">Compras</a>
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
                                                            <li> <span class="fas fa-check"></span> Haber creado las marcas </li>
                                                            <li> <span class="fas fa-check"></span> Haber creado las categorias </li>
                                                            <li> <span class="fas fa-check"></span> Haber creado los productos con los datos necesarios</li>
                                                            
                                                        </ul>
                                                    </div>
                                                    <div class="tab-pane fade" id="list-inventario" >
                                                        <ul style="list-style: none;">
                                                            <li> <span class="fas fa-check"></span> Haber creado las marcas </li>
                                                            <li> <span class="fas fa-check"></span> Haber creado las categorias </li>
                                                            <li> <span class="fas fa-check"></span> Haber creado los productos con los datos necesarios</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                    </div>
                </div>
                <hr>
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
                                            <a class="nav-link active show" id="v-pills-home-tab" data-toggle="pill" href="#abrir" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                                <i class="mdi mdi-home-variant d-lg-none d-block mr-1"></i>
                                                <span class="d-none d-lg-block">Abrir caja</span>
                                            </a>
                                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#cerrar" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                                <i class="mdi mdi-account-circle d-lg-none d-block mr-1"></i>
                                                <span class="d-none d-lg-block">Cerrar caja</span>
                                            </a>
                                            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#historial" role="tab" aria-controls="v-pills-settings" aria-selected="false">
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
                                                        <p class="mb-0">Cillum ad ut irure tempor velit nostrud occaecat ullamco
                                                        aliqua anim Leggings sint. Veniam sint duis incididunt
                                                        do esse magna mollit excepteur laborum qui. Id id reprehenderit sit
                                                        est eu aliqua occaecat quis et velit
                                                        excepteur laborum mollit dolore eiusmod. Ipsum dolor in occaecat
                                                        commodo et voluptate minim reprehenderit
                                                        mollit pariatur. Deserunt non laborum enim et cillum eu deserunt
                                                        excepteur ea incididunt minim occaecat.</p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <img class="card-img-top img-fluid" src="../../assets/images/doc/doc2.png" alt="Card image cap">
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="tab-pane fade" id="cerrar" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                <p class="mb-0">Culpa dolor voluptate do laboris laboris irure
                                                    reprehenderit id incididunt duis pariatur mollit aute magna
                                                    pariatur consectetur. Eu veniam duis non ut dolor deserunt commodo
                                                    et minim in quis laboris ipsum velit
                                                    id veniam. Quis ut consectetur adipisicing officia excepteur non
                                                    sit. Ut et elit aliquip labore Leggings
                                                    enim eu. Ullamco mollit occaecat dolore ipsum id officia mollit qui
                                                    esse anim eiusmod do sint minim consectetur
                                                    qui.</p>
                                            </div>
                                            <div class="tab-pane fade" id="historial" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                                <p class="mb-0">Food truck quinoa dolor sit amet, consectetuer
                                                    adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum
                                                    sociis
                                                    natoque penatibus et magnis dis parturient montes, nascetur
                                                    ridiculus mus. Donec quam felis, ultricies nec, pellentesque
                                                    eu, pretium quis, sem. Nulla consequat massa quis enim. Cillum ad ut
                                                    irure tempor velit nostrud occaecat ullamco
                                                    aliqua anim Leggings sint. Veniam sint duis incididunt do esse magna
                                                    mollit excepteur laborum qui.</p>
                                                    
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
                                        <div class="tab-content" id="tickets">
                                            <div class="tab-pane fade active show" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <p class="mb-0">Cillum ad ut irure tempor velit nostrud occaecat ullamco
                                                        aliqua anim Leggings sint. Veniam sint duis incididunt
                                                        do esse magna mollit excepteur laborum qui. Id id reprehenderit sit
                                                        est eu aliqua occaecat quis et velit
                                                        excepteur laborum mollit dolore eiusmod. Ipsum dolor in occaecat
                                                        commodo et voluptate minim reprehenderit
                                                        mollit pariatur. Deserunt non laborum enim et cillum eu deserunt
                                                        excepteur ea incididunt minim occaecat.</p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <img class="card-img-top img-fluid" src="../../assets/images/doc/doc2.png" alt="Card image cap">
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                <p class="mb-0">Culpa dolor voluptate do laboris laboris irure
                                                    reprehenderit id incididunt duis pariatur mollit aute magna
                                                    pariatur consectetur. Eu veniam duis non ut dolor deserunt commodo
                                                    et minim in quis laboris ipsum velit
                                                    id veniam. Quis ut consectetur adipisicing officia excepteur non
                                                    sit. Ut et elit aliquip labore Leggings
                                                    enim eu. Ullamco mollit occaecat dolore ipsum id officia mollit qui
                                                    esse anim eiusmod do sint minim consectetur
                                                    qui.</p>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                                <p class="mb-0">Food truck quinoa dolor sit amet, consectetuer
                                                    adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum
                                                    sociis
                                                    natoque penatibus et magnis dis parturient montes, nascetur
                                                    ridiculus mus. Donec quam felis, ultricies nec, pellentesque
                                                    eu, pretium quis, sem. Nulla consequat massa quis enim. Cillum ad ut
                                                    irure tempor velit nostrud occaecat ullamco
                                                    aliqua anim Leggings sint. Veniam sint duis incididunt do esse magna
                                                    mollit excepteur laborum qui.</p>
                                                    
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