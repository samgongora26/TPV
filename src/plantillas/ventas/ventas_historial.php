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
                    <!--div class="row">
                        <div class="col-md-8">
                            <div class="row">
                                    <div class="card ">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <i  class="fas fa-address-book fa-5x"  ></i>
                                                </div>
                                                <div class="col-md-10">
                                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis corporis omnis nemo, numquam, vel autem harum dolor non, consequuntur architecto molestias velit voluptatibus tempore ratione officia? Doloribus repellat obcaecati error.</p>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-md-2">
                                                    <i  class="fas fa-address-book fa-5x"  ></i>
                                                </div>
                                                <div class="col-md-10">
                                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis corporis omnis nemo, numquam, vel autem harum dolor non, consequuntur architecto molestias velit voluptatibus tempore ratione officia? Doloribus repellat obcaecati error.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div-->
                             <!-- Historial de compras-->
                             <div class="card">
                                <div class="card-header bg-white">
                                    <h3 class="card-tittle ">Buscar por folio de ticket</h3>
                                    <div class="input-group">
                                            
                                        <label for="" class="mr-3">Escribe el ticket</label>
                                    
                                        <input type="text" id="codigo_elegido" value="" class="form-control">
                                        <button class="btn btn-sm btn-success float left" onclick="venta_folio_especifico()">Buscar</button>
                                    </div>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                            <thead>
                                                <div id="mensaje2"></div>
                                                <tr>
                                                    <th>Folio</th>
                                                    <th>Cajero</th>
                                                    <th>Cliente</th>
                                                    <th>Fecha</th>
                                                    <th>Total</th>
                                                    <th>Corte</th>
                                                    <th>Detalle</th>
                                                </tr>
                                            </thead>
                                            <tbody id="contenido_folio">

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
                                        <button class="btn btn-sm btn-success float left" onclick="venta_fecha_especifico()">Buscar</button>

                                    </div>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                            <thead>
                                                <div id="mensaje"></div>
                                                <tr>
                                                    <th>Folio</th>
                                                    <th>Cajero</th>
                                                    <th>Cliente</th>
                                                    <th>Fecha</th>
                                                    <th>Total</th>
                                                    <th>Corte</th>
                                                    <th>Detalle</th>
                                                </tr>
                                            </thead>
                                            <tbody id="contenido_fecha">

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
        <script src="../../../inc/funciones/pos/app_historial_ventas.js"></script>
    </body>

</html>