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
                    
                        <!-- Historial de compras-->
                            <div class="card">
                                <div class="card-header bg-white">
                                    <h3 class="card-tittle ">Historial de compras de hoy</h3>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                            <thead>
                                                
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Usuario</th>
                                                    <th>Fecha</th>
                                                    <th>Total</th>
                                                    <th>Pagado</th>
                                                    <th>Debido</th>
                                                    <th>Estado</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody id="contenido_tabla">
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        <!-- Historial de compras-->
                            <div class="card">
                                <div class="card-header bg-white">
                                    <h3 class="card-tittle ">Compras de ayer</h3>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                            <thead>
                                                
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Usuario</th>
                                                    <th>Fecha</th>
                                                    <th>Total</th>
                                                    <th>Pagado</th>
                                                    <th>Debido</th>
                                                    <th>Estado</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody id="contenido_ayer">

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        <!-- Historial de compras-->
                            <div class="card">
                                <div class="card-header bg-white">
                                    <h3 class="card-tittle ">Buscar una fecha en especifico</h3>
                                    <div class="input-group">
                                            
                                        <label for="" class="mr-3">Elige una fecha</label>
                                    
                                        <input type="date" id="fecha_elegida" value="" class="form-control">
                                        <button class="btn btn-sm btn-success float left" onclick="compras_dia_especifico()">Buscar</button>
                                        
                                  

                                       
                                    </div>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                            <thead>
                                                <div id="mensaje2"></div>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Usuario</th>
                                                    <th>Fecha</th>
                                                    <th>Total</th>
                                                    <th>Pagado</th>
                                                    <th>Debido</th>
                                                    <th>Estado</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody id="contenido_fecha">

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <!-- Historial de compras. Debidos-->
                            <div class="card">
                                <div class="card-header bg-warning text-white">
                                    <h3 class="card-tittle ">Cuentas por pagar. Total <strong id="debido_total"></strong></h3>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                            <thead>
                                                <div id="mensaje2"></div>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Usuario</th>
                                                    <th>Fecha</th>
                                                    <th>Total</th>
                                                    <th>Pagado</th>
                                                    <th>Debido</th>
                                                    <th>Estado</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody id="contenido_debido">

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                    
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
        <script src="../../../inc/funciones/compras/app_historial_compras.js"></script>
    </body>

</html>