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
                
                <!-- Links de los botones-->
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            
                            
                            <div class="row">
                                
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="card btn bg-primary">
                                        <a href="../ventas/ini.php">
                                            <div class="text-white">
                                                <i class="fas fa-tag"></i><p></p>
                                                <h4>Ventas</h4>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-sm-4 col-md-4 col-lg-4">
                                    <div class="card btn bg-secondary">
                                        <a href="../promociones/promociones.php">
                                            <div class="text-white">
                                                <i class="fas fa-gift"></i><p></p>
                                                <h4>Promociones</h4>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-sm-4 col-md-4 col-lg-4">
                                    <div class="card btn bg-success">
                                        <a href="../inventario/inventario.php">
                                            <div class="text-white">
                                                <i class="fas fa-pallet"></i><p></p>
                                                <h4>Inventario</h4>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="col-sm-4 col-md-4 col-lg-4">
                                    <div class="card btn bg-info">
                                        <a href="../reportes/reportes.php">
                                            <div class="text-white">
                                                <i class="fas fa-clipboard-list"></i><p></p>
                                                <h4>Reportes</h4>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-sm-4 col-md-4 col-lg-4">
                                    <div class="card btn bg-warning">
                                        <a href="../clientes/clientes.php">
                                            <div class="text-white">
                                                <i class="fas fa-users"></i><p></p>
                                                <h4>Clientes</h4>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="col-sm-4 col-md-4 col-lg-4">
                                    <div class="card btn bg-danger">
                                        <a href="../compras/compras_adquirir.php">
                                            <div class="text-white">
                                                <i class="fas fa-donate"></i><p></p>
                                                <h4>Compras</h4>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="col-sm-4 col-md-4 col-lg-4">
                                    <div class="card btn bg-light">
                                        <a href="../proveedores/proveedores_buscar.php">
                                            <div class="text-white">
                                                <i class="fas fa-truck-moving"></i><p></p>
                                                <h4>Proveedores</h4>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="col-sm-4 col-md-4 col-lg-4">
                                    <div class="card btn bg-dark">
                                        <a href="../finanzas.php">
                                            <div class="text-white">
                                                <i class="fas fa-chart-line"></i><p></p>
                                                <h4>Finanzas</h4>
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