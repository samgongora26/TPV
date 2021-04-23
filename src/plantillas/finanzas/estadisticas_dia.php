<?php 
    //Se hace llamado a la sesion
    include("../../../inc/funciones/admin/sesion.php");
    include("../../../inc/funciones/admin/rol_admin.php");
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <?php
    include '../../../componentes/head.php';
    ?>
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>


    <!-- DIV PRINCIPAL DE BODY     
    SELECT usuarios.nombres FROM usuarios,ventas,empleados WHERE empleados.id_usuario = usuarios.id_usuario AND ventas.id_empleado = empleados.id_empleado; -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">

        <!-- ============================================================== -->
        <!-- HEADER -->
        <?php
        include '../../../componentes/header.php';
        ?>
        <!-- FIN HEADER -->
        <!-- ============================================================== -->


        <!-- ============================================================== -->
        <!-- BARRA IZQUIERDA  -->
        <?php
        include '../../../componentes/barra_izquierda.php';
        ?>
        <!-- FON BARRA IZQUIERDA  -->
        <!-- ============================================================== -->


        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- CONTENEDOR -->
        <div class="page-wrapper">
            <div class="container-fluid">
                <!-- AQUI EMPEZAMOS A AGREGAR DISEÑO DEL CENTRO -->
                <!-- EMPIEZA -->
                <h2>Estadísticas del día</h2>
                            <div class="card">
                                <div class="card-header bg-white">
                                    <div class="input-group">
                                            
                                        <label for="" class="mr-3">Búsca un día</label>
                                    
                                        <input type="date" id="codigo_elegido" value="" class="form-control">
                                        <button class="btn btn-sm btn-success float left" onclick="venta_folio_especifico()">Buscar</button>
                                    </div>
                                    <div id="mensaje2"></div> 
                                </div>
                            </div>
                <div class="card-group col-md-11 mx-auto     " style="background-image: linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%); border-radius: 15px;" >
                        <div class=" ml-3">
                            <div class="card-body">
                                <div class="d-flex d-lg-flex d-md-block align-items-center">
                                    <div>
                                        <div class="d-inline-flex align-items-center">
                                            <h2 class="text-dark mb-1 font-weight-medium">000</h2>
                                        </div>
                                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Articulos vendidos</h6>
                                    </div>
                                    <div class="ml-auto mt-md-3 mt-lg-0">
                                        <span class="opacity-7 text-muted"><i class="fas fa-calendar-check"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" ml-3">
                            <div class="card-body">
                                <div class="d-flex d-lg-flex d-md-block align-items-center">
                                    <div>
                                        <h2 class="text-dark mb-1 w-100 text-truncate font-weight-medium"><sup class="set-doller">$</sup>000</h2>
                                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Ventas
                                        </h6>
                                    </div>
                                    <div class="ml-auto mt-md-3 mt-lg-0">
                                        <span class="opacity-7 text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" ml-3">
                            <div class="card-body">
                                <div class="d-flex d-lg-flex d-md-block align-items-center">
                                    <div>
                                        <div class="d-inline-flex align-items-center">
                                            <h2 class="text-dark mb-1 font-weight-medium"><sup class="set-doller">$</sup>000</h2>
                                            
                                        </div>
                                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Promedio de ventas</h6>
                                    </div>
                                    <div class="ml-auto mt-md-3 mt-lg-0">
                                        <span class="opacity-7 text-muted"><i class="fas fa-boxes"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" ml-3">
                            <div class="card-body">
                                <div class="d-flex d-lg-flex d-md-block align-items-center">
                                    <div>
                                        <div class="d-inline-flex align-items-center">
                                            <h2 class="text-dark mb-1 font-weight-medium">000</h2>
                                            
                                        </div>
                                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Tickets vendidos</h6>
                                    </div>
                                    <div class="ml-auto mt-md-3 mt-lg-0">
                                        <span class="opacity-7 text-muted"><i class="fas fa-boxes"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                        
                    </div>
                <!-------BALANCE------------>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card text-white">
                            <div class="card-body bg-success">
                                <h3 class="card-title text-white"> $ 0000</h3>
                                <p class="card-text">Total de ventas de hoy</p>
                                <p class="text-white"> <i>Entradas</i> </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card text-white">
                            <div class="card-body bg-danger">
                                <h3 class="card-title text-white">- $0000</h3>
                                <p class="card-text">Total de compras de hoy</p>
                                <p class="text-white"> <i>Salidas</i> </p>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- TERMINA -->

            </div>
        </div>
        <!--FIN CONTENEDOR -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    </div>

    <!-- TODOS LOS ENLACES DE SCRIPTS -->
    <?php
    include '../../../componentes/scripts.php';
    ?>
    <script src="../../../inc/funciones/finanzas/app.js"></script>

</body>

</html>