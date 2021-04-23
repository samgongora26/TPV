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
        

        <!------CONSULTAS DE LAS ESTADISTICAS--------->
        <?php

        try {
            require '../../../conexion.php';
            $fecha_actual = date('Y-m-d');

            //ARTICULOS VENDIDOS EN UN DIA
            //SELECT SUM(`detalle_venta`.`cantidad`) as total FROM `ventas` INNER JOIN `detalle_venta` on `ventas`.`id_venta` = `detalle_venta`.`id_venta` and `fecha` = '2021-04-01' 
            $sql = "SELECT SUM(`detalle_venta`.`cantidad`) as total FROM `ventas` INNER JOIN `detalle_venta` on `ventas`.`id_venta` = `detalle_venta`.`id_venta` and `fecha` = '$fecha_actual' ";
            $consulta = mysqli_query($conexion, $sql);
            $articulos = mysqli_fetch_assoc($consulta); //usar cuando se espera varios resultadosS
            $articulos_dia = $articulos["total"];

            //VENTAS DE HOY
            $sql = "SELECT sum(`monto_final_ventas`) as venta_hoy FROM `cajas` WHERE `fecha_cierre`= '$fecha_actual' ";
            $consulta = mysqli_query($conexion, $sql);
            $ventas = mysqli_fetch_assoc($consulta); //usar cuando se espera varios resultadosS
            $ventas_hoy = $ventas["venta_hoy"]; 

            //PROMEDIO DE VENTAS DE HOY
            //SELECT AVG(`importe`) as total FROM `ventas` WHERE `fecha` = '2021-04-23' 
            $sql = "SELECT AVG(`importe`) as promedio FROM `ventas` WHERE `fecha` = '$fecha_actual' ";
            $consulta = mysqli_query($conexion, $sql);
            $promedio = mysqli_fetch_assoc($consulta); //usar cuando se espera varios resultadosS
            $promedio_hoy = $promedio["promedio"]; 
            $promedio_hoy = floor(($promedio_hoy*1000))/1000;

            //TICKETS VENDIDOS HOY
            //SELECT COUNT(`id_venta`) as total FROM `ventas` WHERE `fecha` = '2021-04-23' 
            $sql = "SELECT COUNT(`id_venta`) as total FROM `ventas` WHERE `fecha` =  '$fecha_actual' ";
            $consulta = mysqli_query($conexion, $sql);
            $tickets = mysqli_fetch_assoc($consulta); //usar cuando se espera varios resultadosS
            $tickets_hoy = $tickets["total"]; 

            //VENTAS DE LA SEMANA
            $sql = "SELECT sum(`monto_final_ventas`) as venta_semana FROM `cajas` WHERE `fecha_cierre` BETWEEN CURRENT_DATE()-7 AND CURRENT_DATE() ORDER by `fecha_cierre` DESC ";
            $consulta = mysqli_query($conexion, $sql);
            $ventas = mysqli_fetch_assoc($consulta); //usar cuando se espera varios resultadosS
            $ventas_semana = $ventas["venta_semana"]; 
            
            //VENTAS DENTRO DE 15 DIAS
            $sql = "SELECT sum(`monto_final_ventas`) as venta_semana FROM `cajas` WHERE `fecha_cierre` BETWEEN CURRENT_DATE()-15 AND CURRENT_DATE() ORDER by `fecha_cierre` DESC ";
            $consulta = mysqli_query($conexion, $sql);
            $ventas = mysqli_fetch_assoc($consulta); //usar cuando se espera varios resultadosS
            $ventas_quincena = $ventas["venta_semana"]; 
            
            //EL MEJOR VENDEDOR DE LA SEMANA
            //SELECT CONCAT(`usuarios`.`nombres`, ' ', `usuarios`.`apellidos`) as usuario FROM  `cajas`,`usuarios`  WHERE `fecha_cierre` BETWEEN CURRENT_DATE()-7 AND CURRENT_DATE() and `cajas`.`id_usuario` = `usuarios`.`id_usuario` ORDER by `monto_final_ventas` DESC limit 1
            $sql = "SELECT CONCAT(`usuarios`.`nombres`, ' ', `usuarios`.`apellidos`) as usuario FROM  `cajas`,`usuarios`  WHERE `fecha_cierre` BETWEEN CURRENT_DATE()-7 AND CURRENT_DATE() and `cajas`.`id_usuario` = `usuarios`.`id_usuario` ORDER by `monto_final_ventas` DESC limit 1";
            $consulta = mysqli_query($conexion, $sql);
            $vendedores = mysqli_fetch_assoc($consulta); //usar cuando se espera varios resultadosS
            $vendedor_semana = $vendedores["usuario"]; 

            //TICKETS VENDIDOS EN LA SEMANA
            //SELECT COUNT(`id_venta`) as tickets_semana FROM  `ventas`  WHERE `fecha` BETWEEN CURRENT_DATE()-7 AND CURRENT_DATE() ORDER by `fecha`
            $sql = "SELECT COUNT(`id_venta`) as tickets_semana FROM  `ventas`  WHERE `fecha` BETWEEN CURRENT_DATE()-7 AND CURRENT_DATE() ORDER by `fecha`";
            $consulta = mysqli_query($conexion, $sql);
            $tickets = mysqli_fetch_assoc($consulta); //usar cuando se espera varios resultadosS
            $tickets_semana = $tickets["tickets_semana"]; 

            //TOTAL DE COMPRAS EN LA SEMANA
            //SELECT sum(`pedidos`.`pagado`) as compras FROM `pedidos` WHERE `fecha` BETWEEN CURRENT_DATE()-7 AND CURRENT_DATE() ORDER by `fecha` 
            $sql = "SELECT sum(`pedidos`.`pagado`) as compras FROM `pedidos` WHERE `fecha` BETWEEN CURRENT_DATE()-7 AND CURRENT_DATE() ORDER by `fecha` ";
            $consulta = mysqli_query($conexion, $sql);
            $compras = mysqli_fetch_assoc($consulta); //usar cuando se espera varios resultadosS
            $compras_semana = $compras["compras"]; 

            //TOTAL DE COMPRAS EN EL DIA
            //SELECT sum(`pedidos`.`pagado`) as compras FROM `pedidos` WHERE `fecha` BETWEEN CURRENT_DATE()-7 AND CURRENT_DATE() ORDER by `fecha` 
            $sql = "SELECT sum(`pedidos`.`pagado`) as compras FROM `pedidos` WHERE `fecha` = '$fecha_actual' ";
            $consulta = mysqli_query($conexion, $sql);
            $compras = mysqli_fetch_assoc($consulta); //usar cuando se espera varios resultadosS
            $compras_hoy = $compras["compras"]; 
            
            //CONSULTAS QUE HICE PERO QUE NO HICIERON LO QUE QUERIA, PERO PUEDEN RESULTAR UTILES DESPUÉS....
            
            
            //NUMERO DE COMPRAS EN LA SEMANA
            //SELECT count(`pedidos`.`id_pedido`) as compras FROM `pedidos` WHERE `fecha` BETWEEN CURRENT_DATE()-7 AND CURRENT_DATE() ORDER by `fecha` 
            /*$sql = "SELECT count(`pedidos`.`id_pedido`) as compras FROM `pedidos` WHERE `fecha` BETWEEN CURRENT_DATE()-7 AND CURRENT_DATE() ORDER by `fecha`";
            $consulta = mysqli_query($conexion, $sql);
            $compras = mysqli_fetch_assoc($consulta); //usar cuando se espera varios resultadosS
            $compras_semana = $compras["compras"]; 
            */
            //El MEJOR VENDEDOR DEL DIA
            /*$sql = "SELECT CONCAT(`usuarios`.`nombres`, ' ', `usuarios`.`apellidos`) as usuario, COUNT( `cajas`.`id_usuario` ) AS total
                FROM  `cajas`, `usuarios` WHERE `cajas`.`id_usuario` = `usuarios`.`id_usuario`AND `fecha_cierre` = '$fecha_actual'
                GROUP BY usuario
                ORDER BY total DESC LIMIT 1";
            $consulta = mysqli_query($conexion, $sql);
            $productos = mysqli_fetch_assoc($consulta); //usar cuando se espera varios resultadosS
            $productos = $productos["productos"]; 

            //PRODUCTO MAS VENDIDO
            $sql = "SELECT `detalle_venta`.`id_producto` as producto, COUNT( `detalle_venta`.`id_producto` ) AS total FROM `ventas` INNER JOIN `detalle_venta` on `ventas`.`id_venta` = `detalle_venta`.`id_venta` GROUP BY producto ORDER by total DESC LIMIT 1  ";
            $consulta = mysqli_query($conexion, $sql);
            $productos = mysqli_fetch_assoc($consulta); //usar cuando se espera varios resultadosS
            $productos = $productos["productos"]; */
            
            //Cantidad de productos vendidos en un ticket
            //SELECT SUM(`detalle_venta`.`cantidad`) as total FROM `ventas` INNER JOIN `detalle_venta` on `ventas`.`id_venta` = `detalle_venta`.`id_venta` AND `ventas`.`id_venta`= 188
            
        } catch (\Throwable $th) {
            var_dump($th);
        }

        mysqli_close($conexion);

        ?>

        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- CONTENEDOR -->
        <div class="page-wrapper">
            <div class="container-fluid">
                <!-- AQUI EMPEZAMOS A AGREGAR DISEÑO DEL CENTRO -->
                <!-- EMPIEZA -->
                <h2>Estadísticas del día</h2>
                <div class="card-group col-md-11 mx-auto     " style="background-image: linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%); border-radius: 15px;" >
                        <div class=" ml-3">
                            <div class="card-body">
                                <div class="d-flex d-lg-flex d-md-block align-items-center">
                                    <div>
                                        <div class="d-inline-flex align-items-center">
                                            <h2 class="text-dark mb-1 font-weight-medium" ><?php echo $articulos_dia; ?></h2>
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
                                        <h2 class="text-dark mb-1 w-100 text-truncate font-weight-medium"><sup class="set-doller">$</sup><?php echo $ventas_hoy; ?></h2>
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
                                            <h2 class="text-dark mb-1 font-weight-medium"><sup class="set-doller">$</sup><?php echo $promedio_hoy; ?></h2>
                                            
                                        </div>
                                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Promedio por venta</h6>
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
                                            <h2 class="text-dark mb-1 font-weight-medium"><?php echo $tickets_hoy; ?></h2>
                                            
                                        </div>
                                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Tickets vendidos</h6>
                                    </div>
                                    <div class="ml-auto mt-md-3 mt-lg-0">
                                        <span class="opacity-7 text-muted"><i class="fas fa-clone"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                        
                    </div>
                <h2>Estadísticas de la semana</h2>
                <div class="card-group">
                    <div class="card border-right">
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <div class="d-inline-flex align-items-center">
                                        <h2 class="text-dark mb-1 font-weight-medium"><sup class="set-doller">$</sup><?php echo $ventas_semana; ?></h2>
                                    </div>
                                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Ventas durante la semana</h6>
                                </div>
                                <div class="ml-auto mt-md-3 mt-lg-0">
                                    <span class="opacity-7 text-muted fas fa-calendar-check"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-right">
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <h2 class="text-dark mb-1 w-100 text-truncate font-weight-medium"><sup class="set-doller">$</sup><?php echo $ventas_quincena; ?></h2>
                                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Ventas durante 15 días
                                    </h6>
                                </div>
                                <div class="ml-auto mt-md-3 mt-lg-0">
                                    <span class="opacity-7 text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-right">
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <div class="d-inline-flex align-items-center">
                                        <h2 class="text-dark mb-1 font-weight-medium"><?php echo $vendedor_semana; ?></h2>
                                        
                                    </div>
                                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Mejor vendedor de la semana</h6>
                                </div>
                                <div class="ml-auto mt-md-3 mt-lg-0">
                                    <span class="opacity-7 text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-plus"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="12" y1="18" x2="12" y2="12"></line><line x1="9" y1="15" x2="15" y2="15"></line></svg></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <h2 class="text-dark mb-1 font-weight-medium"><?php echo $tickets_semana; ?></h2>
                                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Tickets vendidos</h6>
                                </div>
                                <div class="ml-auto mt-md-3 mt-lg-0">
                                    <span class="opacity-7 text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg></span>
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
                                <h3 class="card-title text-white"> $ <?php echo $ventas_hoy; ?></h3>
                                <p class="card-text">Total de ventas de hoy</p>
                                <p class="text-white"> <i>Entradas</i> </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card text-white">
                            <div class="card-body bg-danger">
                                <h3 class="card-title text-white">- $<?php echo $compras_hoy; ?></h3>
                                <p class="card-text">Total de compras de hoy</p>
                                <p class="text-white"> <i>Salidas</i> </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-------BALANCE  SEMANAL------------>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card text-white">
                            <div class="card-body bg-success">
                                <h3 class="card-title text-white"> $ <?php echo $ventas_semana; ?></h3>
                                <p class="card-text">Total de ventas de la semana</p>
                                <p class="text-white"> <i>Entradas</i> </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card text-white">
                            <div class="card-body bg-danger">
                                <h3 class="card-title text-white">- $<?php echo $compras_semana; ?></h3>
                                <p class="card-text">Total de compras de la semana</p>
                                <p class="text-white"> <i>Salidas</i> </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!--ESTADISTICAS DE ARTICULOS---------------->
                <div class="row">
                    <div class="col-md-6 mx-auto ">
                            
                            <div class="card ">
                                <div class="card-body">
                                    <h2>Estadísticas de la semana</h2>
                                    <hr>    
                                    <div class="row">
                                        <div class="col-md-2">
                                            <i  class=" fas fa-chart-line fa-3x"  ></i>
                                        </div>
                                        <div class="col-md-10">
                                            <h3>Articulos más vendidos</h3>
                                            <ul style="list-style: none;">
                                                <li>1: coca </li>
                                                <li>2: si<li>
                                                <li>3: no</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-2">
                                            <i  class="fas fa-chevron-down fa-3x"  ></i>
                                        </div>
                                        <div class="col-md-10">
                                        <h3>Articulos menos vendidos</h3>
                                            <ul style="list-style: none;">
                                                <li>1: coca </li>
                                                <li>2: si<li>
                                                <li>3: no</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                
                    </div>

                    <div class="col-md-6 mx-auto ">
                            
                            <div class="card ">
                                <div class="card-body">
                                    <h2>Sobre el inventario</h2>
                                    <hr>    
                                    <div class="row">
                                        <div class="col-md-2">
                                            <i  class="fas fa-battery-quarter  fa-3x"  ></i>
                                        </div>
                                        <div class="col-md-10">
                                            <h3>Articulos que están en stock minimo</h3>
                                            <ul style="list-style: none;">
                                                <li>1: coca </li>
                                                <li>2: si<li>
                                                <li>3: no</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-2">
                                            <i  class="fas fa-battery-empty fa-3x"  ></i>
                                        </div>
                                        <div class="col-md-10">
                                        <h3>Productos agotados</h3>
                                            <ul style="list-style: none;">
                                                <li>1: coca </li>
                                                <li>2: si<li>
                                                <li>3: no</li>
                                            </ul>
                                        </div>
                                    </div>
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