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
                                    <li class="breadcrumb-item"><a href="compras_historial.php">Historial de pedidos</a></li>
                                    <li class="breadcrumb-item active" id="pedido">Pedido</li>
                                </ol>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="card-body bg-lighr">
                            <h4 class="card-title">Detalle de la compra</h4>
                            <div class="card-text">
                                <table class="table">
                                    <thead>
                                        <div id="mensaje2"></div>
                                        <tr>
                                            <th scope="col">codigo</th>
                                            <th scope="col">producto</th>
                                            <th scope="col">stock</th>
                                            <th scope="col">cantidad</th>
                                            <th scope="col">precio compra</th>
                                            <th scope="col">total compra</th>
                                        </tr>
                                    </thead>
                                    <tbody id="contenido_tabla">
                                        <!--tr>
                                            <td> <img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle" width="40"> </td>
                                            <th scope="row">1</th>
                                            <th scope="row">computadora</th>
                                            <td>10</td>
                                            <td>2</td>
                                            <td>1000</td>
                                            <td>2000</td>
                                            <td><button type="button" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" /></svg></button>
                                            </td>
                                        </tr-->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer bg-lighr">
                            <h5>La compra</h5>
                            <div class="input-group mb-3">
                                <div id="mensaje2"></div>
                              
                                            <ul class="list-group col-md-3 mx-auto">
                                                <div class="input-group-prepend mx-auto ">
                                                    <label class="input-group-text" >Total</label>
                                                    <input id="por_pagar" name="por_pagar" disabled type="text" class="form-control ">
                                                </div>
                                                
                                            </ul>
                                            <ul class="list-group col-md-3 mx-auto">
                                            <div class="input-group-prepend mx-auto ">
                                                    <label class="input-group-text">Pagado</label>
                                                    <input id="pagado" name="pagado"  disabled type="text" class="form-control " >
                                                </div>
                                                
                                            </ul>
                                            <ul class="list-group col-md-3 mx-auto">
                                            <div class="input-group-prepend mx-auto ">
                                                    <label class="input-group-text">Debido</label>
                                                    <input id="debido" name="debido" disabled type="text" class="form-control " >
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
            <script src="../../../inc/funciones/compras/app_detalle_pedido.js"></script>
        <!-- FIN DE SCRIPTS -->
    </body>
    
</html>