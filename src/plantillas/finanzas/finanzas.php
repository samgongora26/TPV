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
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Reportes y Finanzas</h4>
                            
                            <div class="row">
                                
                                <!-- tabla -->
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <a href="../../../inc/peticiones/finanzas/pdf_empleado_ventas.php" target="_blank">
                                                <button id="pdf_producto" class="btn bg-light">
                                                    <i class="far fa-file-pdf"></i>        
                                                </button>
                                            <a/>
                                            <p></p>
                                            <h4 class="card-title">Empleados con más Ventas</h4>
                                            <div class="table-responsive">
                                                <table class="table table-success">
                                                    <thead class="bg-success text-white text-center">
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Nombre</th>
                                                            <th>Apellido</th>
                                                            <th>N° Ventas</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="contenido_tabla1" class="text-center">
                                                        <!--
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Nigam</td>
                                                            <td>Eichmann</td>
                                                            <td>###</td>
                                                        </tr>
                                                        -->
                                                        
                                                        
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
                                            <a href="../../../inc/peticiones/finanzas/pdf_cliente_compra.php" target="_blank">
                                                <button id="pdf_producto" class="btn bg-light">
                                                    <i class="far fa-file-pdf"></i>        
                                                </button>
                                            <a/>
                                            <p></p>
                                            <h4 class="card-title">Cliente con más Compras</h4>
                                            <div class="table-responsive">
                                                <table class="table table-success">
                                                    <thead class="bg-success text-white text-center">
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Nombre</th>
                                                            <th>Nº de Compras</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="contenido_tabla2" class="text-center">
                                                        <!--<tr>
                                                            <td>1</td>
                                                            <td>Nigam</td>
                                                            <td>Eichmann</td>
                                                            <td>58</td>
                                                        </tr>-->
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- tabla -->
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <a href="../../../inc/peticiones/finanzas/pdf_producto_vendido.php" target="_blank">
                                                <button id="pdf_producto" class="btn bg-light">
                                                    <i class="far fa-file-pdf"></i>        
                                                </button>
                                            <a/>
                                            <p></p>
                                            <h4 class="card-title">Producto más Vendido</h4>
                                            <div class="table-responsive">
                                                <table class="table table-success">
                                                    <thead class="bg-success text-white text-center">
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Codigo</th>
                                                            <th>Producto</th>
                                                            <th>Precio Venta</th>
                                                            <th>Nº de Ventas</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="contenido_tabla3" class="text-center">
                                                        <!--<tr>
                                                            <td>1</td>
                                                            <td>Nigam</td>
                                                            <td>Eichmann</td>
                                                            <td>58</td>
                                                        </tr>-->
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- tabla -->
                                <!--
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
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                -->


                                <!-- column 
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">No. de Clientes al Dia</h4>
                                            <div>
                                                <canvas id="bar-chart-dia" height="250"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>-->

                                <!-- column 
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">No. de Clientes al Mes</h4>
                                            <div>
                                                <canvas id="bar-chart-mes" height="250"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>-->
                                
                                <!-- column 
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Ganancias y Gastos</h4>
                                            <div>
                                                <canvas id="line-chart-gg" height="250"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>-->

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