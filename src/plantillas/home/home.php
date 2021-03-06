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


    <!-- DIV PRINCIPAL DE BODY -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">

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
                <h4 class=" pl-2 mt-3 ">Me alegra que estés aquí de nuevo <b><?php echo $usr["nombres"] .'  '.$usr["apellidos"]?></b> veamos que sucede por aquí...</h4>
                <?php
                if(!$id_user == ""){ //si la variable de sesión no está vacia entonces entra a verificacion
                    //header("location: ../../../index.html");
                    try {
                        require '../../../conexion.php';
                        $sql = "SELECT `puestos`.`nombre_puesto` 
                                FROM `empleados`,`puestos` 
                                WHERE `puestos`.`nombre_puesto` = 'administrador' 
                                    and `puestos`.`id_puesto` = `empleados`.`id_puesto`
                                    and `empleados`.`id_usuario` = $id_user";
                        $consulta = mysqli_query($conexion, $sql);
                        $puestos = mysqli_fetch_assoc($consulta); //usar cuando se espera varios resultadosS
                        $puesto = $puestos["nombre_puesto"]; 
                        $acceso = false;
                        if($puesto == 'administrador'){
                            $acceso = true;
                        }
                        
                
                    } catch (\Throwable $th) {
                        var_dump($th);
                    }
                    
                    mysqli_close($conexion);
                }
                
                if($acceso){
                    try {
                        require '../../../conexion.php';
                
                        //VENTAS DE LA SEMANA
                        $sql = "SELECT sum(`monto_final_ventas`) as venta_semana FROM `cajas` WHERE `fecha_cierre` BETWEEN CURRENT_DATE()-7 AND CURRENT_DATE() ORDER by `fecha_cierre` DESC ";
                        $consulta = mysqli_query($conexion, $sql);
                        $ventas = mysqli_fetch_assoc($consulta); //usar cuando se espera varios resultadosS
                        $ventas_semana = $ventas["venta_semana"]; 
                        $ventas_semana = floor(($ventas_semana*1000))/1000;

                        //VENTAS DE AYER
                        $fecha_actual = date('Y-m-d');
                        $sql = "SELECT sum(`monto_final_ventas`) as venta_hoy FROM `cajas` WHERE `fecha_cierre`= '$fecha_actual' ";
                        $consulta = mysqli_query($conexion, $sql);
                        $ventas = mysqli_fetch_assoc($consulta); //usar cuando se espera varios resultadosS
                        $ventas_hoy = $ventas["venta_hoy"]; 
                        $ventas_hoy = floor(($ventas_hoy*1000))/1000;

                        $sql = "SELECT COUNT(`id_producto`) as productos FROM `productos_inventario` ";
                        $consulta = mysqli_query($conexion, $sql);
                        $productos = mysqli_fetch_assoc($consulta); //usar cuando se espera varios resultadosS
                        $productos = $productos["productos"]; 


                
                    } catch (\Throwable $th) {
                        var_dump($th);
                    }
                    
                    mysqli_close($conexion);
                    echo '
                    <div class="card-group col-md-12 " style="background-image: linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%); border-radius: 15px;" >
                        <div class=" ml-3">
                            <div class="card-body">
                                <div class="d-flex d-lg-flex d-md-block align-items-center">
                                    <div>
                                        <div class="d-inline-flex align-items-center">
                                            <h2 class="text-dark mb-1 font-weight-medium"><sup class="set-doller">$</sup>'.$ventas_semana.'</h2>
                                        </div>
                                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Ventas de la semana</h6>
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
                                        <h2 class="text-dark mb-1 w-100 text-truncate font-weight-medium"><sup class="set-doller">$</sup>'.$ventas_hoy.'</h2>
                                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Ventas de hoy
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
                                            <h2 class="text-dark mb-1 font-weight-medium">'.$productos.'</h2>
                                            
                                        </div>
                                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Productos en inventario</h6>
                                    </div>
                                    <div class="ml-auto mt-md-3 mt-lg-0">
                                        <span class="opacity-7 text-muted"><i class="fas fa-boxes"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                        <div class=" col-md-3 mt-3 mb-3" >
                        
                                <img class="card-img-top img-fluid" src="../../../src/assets/images/dashboard1.svg" alt="Card image cap">
                        
                        </div>
                    </div>';   
                }
                ?>
                <!-- Card -->
                
                <!-- Card -->
                <!-- Links de los botones-->
                <div class="col-sm-12 col-md-12 col-lg-12" >
                    <div class="card" style="background-image: linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%); border-radius: 15px;">
                        <div class="card-body">
                            
                            
                            <div class="row">
                                
                                <div class="col-sm-6 col-md-6 col-lg-7">
                                    <div class="card btn btn-lg bg-primary">
                                        <a href="../ventas/ini.php">
                                            <div class="text-white">
                                                <p></p>
                                                <i class="fas fa-tag fa-2x"></i>
                                                <p></p>
                                                <h4>Ventas</h4>
                                                <p></p>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-sm-4 col-md-3 col-lg-5">
                                    <div class="card btn bg-secondary">
                                        <a href="../finanzas/finanzas.php">
                                            <div class="text-white">
                                                <p></p><i class="fas fa-clipboard-list fa-3x"></i><p></p>
                                                <h4>Reportes</h4>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-sm-4 col-md-3 col-lg-4">
                                    <div class="card btn bg-success">
                                        <a href="../finanzas/estadisticas_generales.php">
                                            <div class="text-white">
                                                <p></p><i class="fas fa-chart-line fa-3x"></i><p></p>
                                                <h4>Finanzas</h4>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-sm-4 col-md-3 col-lg-4">
                                    <div class="card btn bg-info">
                                        <a href="../inventario/inventario_lista.php">
                                            <div class="text-white">
                                                <p></p><i class="fas fa-pallet fa-3x"></i><p></p>
                                                <h4>Inventario</h4>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-sm-4 col-md-4 col-lg-4">
                                    <div class="card btn bg-warning">
                                        <a href="../promociones/promociones.php">
                                            <div class="text-white">
                                                <p></p><i class="fas fa-gift fa-3x"></i><p></p>
                                                <h4>Promociones</h4>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-sm-4 col-md-4 col-lg-4">
                                    <div class="card btn bg-danger">
                                        <a href="../proveedores/proveedores_buscar.php">
                                            <div class="text-white">
                                                <p></p><i class="fas fa-truck-moving fa-2x"></i><p></p>
                                                <h4>Proveedores</h4>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-sm-4 col-md-4 col-lg-4">
                                    <div class="card btn bg-light">
                                        <a href="../clientes/clientes_lista.php">
                                            <div class="text-dark">
                                                <p></p><i class="fas fa-users fa-2x"></i><p></p>
                                                <h4>Clientes</h4>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="col-sm-4 col-md-4 col-lg-4">
                                    <div class="card btn bg-dark">
                                        <a href="../compras/compras_adquirir.php">
                                            <div class="text-white">
                                                <p></p><i class="fas fa-donate"></i><p></p>
                                                <h4>Compras</h4>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Final de los -->
            </div>

            <footer class="footer text-center text-muted">
                All Rights Reserved. Designed and Developed by <a target="_blank"  href="https://github.com/samgongora26">  Saúl Góngora   </a>,<a target="_blank"  href="https://github.com/satswere">  Luis Tzun   </a>,<a target="_blank"  href="https://github.com/Feltydany">    Daniel Gónzalez </a> y <a target="_blank"  href="https://github.com/silvercrow185">  Osly Donovan    </a>
            </footer>
        </div>
        <!--FIN CONTENEDOR -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    </div>

    <!-- TODOS LOS ENLACES DE SCRIPTS -->
    <?php
        include '../../../componentes/scripts.php';
    ?>
    <!-- FIN DE SCRIPTS -->
</body>

</html>