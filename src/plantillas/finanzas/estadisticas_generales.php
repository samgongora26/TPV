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
            include '../../../inc/peticiones/finanzas/consultas_estadisticas.php';
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
                                                <?php 
                                                    try {
                                                        require '../../../conexion.php'; 
                                                        $sql = "SELECT `productos_inventario`.`nombre_producto` as producto, count(`detalle_venta`.`id_producto`) as total FROM `detalle_venta`,`productos_inventario` WHERE `detalle_venta`.`id_producto` = `productos_inventario`.`id_producto` GROUP BY `detalle_venta`.`id_producto` ORDER BY total DESC limit 5  ";
                                                        $consulta = mysqli_query($conexion, $sql);
                                                        
                                                        $i = 1; 
                                                        while ($row = mysqli_fetch_assoc($consulta)) { //usar cuando se espera varios resultadosS
                                                            echo '<li>'.$i.': '.$row['producto'].' </li>' ;
                                                            $i++;
                                                        }
                                                
                                                        
                                                    } catch (\Throwable $th) {
                                                        var_dump($th);
                                                    }
                                                ?>
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
                                                <?php 
                                                    try {
                                                        require '../../../conexion.php'; 
                                                        $sql = "SELECT `productos_inventario`.`nombre_producto` as producto, count(`detalle_venta`.`id_producto`) as total FROM `detalle_venta`,`productos_inventario` WHERE `detalle_venta`.`id_producto` = `productos_inventario`.`id_producto` GROUP BY `detalle_venta`.`id_producto` ORDER BY total ASC limit 5  ";
                                                        $consulta = mysqli_query($conexion, $sql);
                                                        
                                                        $i = 1; 
                                                        while ($row = mysqli_fetch_assoc($consulta)) { //usar cuando se espera varios resultadosS
                                                            echo '<li>'.$i.': '.$row['producto'].' </li>' ;
                                                            $i++;
                                                        }
                                                
                                                        
                                                    } catch (\Throwable $th) {
                                                        var_dump($th);
                                                    }
                                                ?>
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
                                                <?php 
                                                    try {
                                                        require '../../../conexion.php'; 
                                                        $sql = "SELECT `nombre_producto` FROM `productos_inventario` WHERE `cantidad_stock` <= `stock_min` ";
                                                        $consulta = mysqli_query($conexion, $sql);
                                                        
                                                        $i = 1; 
                                                        while ($row = mysqli_fetch_assoc($consulta)) { //usar cuando se espera varios resultadosS
                                                            echo '<li>'.$i.': '.$row['nombre_producto'].' </li>' ;
                                                            $i++;
                                                        }
                                                
                                                        
                                                    } catch (\Throwable $th) {
                                                        var_dump($th);
                                                    }
                                                ?>
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
                                                <?php 
                                                    try {
                                                        require '../../../conexion.php'; 
                                                        $sql = "SELECT `nombre_producto` FROM `productos_inventario` WHERE `cantidad_stock` <= 0 ";
                                                        $consulta = mysqli_query($conexion, $sql);
                                                        
                                                        $i = 1; 
                                                        while ($row = mysqli_fetch_assoc($consulta)) { //usar cuando se espera varios resultadosS
                                                            echo '<li>'.$i.': '.$row['nombre_producto'].' </li>' ;
                                                            $i++;
                                                        }
                                                
                                                        
                                                    } catch (\Throwable $th) {
                                                        var_dump($th);
                                                    }
                                                ?>
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