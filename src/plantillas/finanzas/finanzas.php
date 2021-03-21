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
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Reportes y Finanzas</h4>
                            
                            <div class="row">
                                
                                <!-- tabla -->
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Empleados con más Ventas</h4>
                                            <div class="table-responsive">
                                                <table class="table table-success">
                                                    <thead class="bg-success text-white">
                                                        <tr>
                                                            <th>#</th>
                                                            <th>First Name</th>
                                                            <th>Last Name</th>
                                                            <th>Ventas</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Nigam</td>
                                                            <td>Eichmann</td>
                                                            <td>58</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Deshmukh</td>
                                                            <td>Prohaska</td>
                                                            <td>39</td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>Roshan</td>
                                                            <td>Rogahn</td>
                                                            <td>19</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- tabla -->
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Cliente con más Compras</h4>
                                            <div class="table-responsive">
                                                <table class="table table-success">
                                                    <thead class="bg-success text-white">
                                                        <tr>
                                                            <th>#</th>
                                                            <th>First Name</th>
                                                            <th>Last Name</th>
                                                            <th>Compras</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Nigam</td>
                                                            <td>Eichmann</td>
                                                            <td>58</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Deshmukh</td>
                                                            <td>Prohaska</td>
                                                            <td>39</td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>Roshan</td>
                                                            <td>Rogahn</td>
                                                            <td>19</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- tabla -->
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Producto más Vendido</h4>
                                            <div class="table-responsive">
                                                <table class="table table-success">
                                                    <thead class="bg-success text-white">
                                                        <tr>
                                                            <th>#</th>
                                                            <th>First Name</th>
                                                            <th>Last Name</th>
                                                            <th>Ventas</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Nigam</td>
                                                            <td>Eichmann</td>
                                                            <td>58</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Deshmukh</td>
                                                            <td>Prohaska</td>
                                                            <td>39</td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>Roshan</td>
                                                            <td>Rogahn</td>
                                                            <td>19</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- tabla -->
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Adeudos con Proveedores</h4>
                                            <div class="table-responsive">
                                                <table class="table table-success">
                                                    <thead class="bg-success text-white">
                                                        <tr>
                                                            <th>#</th>
                                                            <th>First Name</th>
                                                            <th>Last Name</th>
                                                            <th>Compras</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Nigam</td>
                                                            <td>Eichmann</td>
                                                            <td>58</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Deshmukh</td>
                                                            <td>Prohaska</td>
                                                            <td>39</td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>Roshan</td>
                                                            <td>Rogahn</td>
                                                            <td>19</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- column -->
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">No. de Clientes al Dia</h4>
                                            <div>
                                                <canvas id="bar-chart" height="250"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- column -->
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">No. de Clientes al Mes</h4>
                                            <div>
                                                <canvas id="bar-chart-1" height="250"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- column -->
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Ganancias y Gastos</h4>
                                            <div>
                                                <canvas id="line-chart-1" height="250"></canvas>
                                            </div>
                                        </div>
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
    <!-- FIN DE SCRIPTS -->
</body>

</html>