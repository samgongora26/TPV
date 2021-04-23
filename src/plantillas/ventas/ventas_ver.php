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
                                <ol class="breadcrumb ">
                                    <li class="breadcrumb-item"><a href="ventas_historial.php">Historial de ventas</a></li>
                                    <li class="breadcrumb-item active" id="pedido">Venta</li>
                                </ol>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="card-body bg-lighr">
                            <h4 class="card-title">Detalle de la venta  </h4>
                            <div class="card-text">
                                <table class="table">
                                    <thead>
                                        <div id="mensaje2"></div>
                                        <tr>
                                            <th scope="col">codigo</th>
                                            <th scope="col">producto</th>
                                            <th scope="col">cantidad</th>
                                            <th scope="col">precio venta</th>
                                            <th scope="col">total compra</th>
                                        </tr>
                                    </thead>
                                    <tbody id="contenido_tabla">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer bg-lighr">
                            <h5>La venta</h5>
                            <div class="input-group mb-3">
                                <div id="mensaje2"></div>
                              
                                            <ul class="list-group col-md-3 mx-auto">
                                                <div class="input-group-prepend mx-auto ">
                                                    <label class="input-group-text" >Total</label>
                                                    <input id="por_pagar" name="por_pagar" disabled type="text" class="form-control ">
                                                </div>
                                                
                                            </ul>
                                        
                            </div>
                    </div> 
                

            </div>
        </div>
        </div>
        <!--FIN CONTENEDOR -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

        <!-- TODOS LOS ENLACES DE SCRIPTS -->
        <?php
            include '../../../componentes/scripts.php';
        ?>
            <script src="../../../inc/funciones/pos/app_detalle_venta.js"></script>
        <!-- FIN DE SCRIPTS -->
    </body>
    
</html>