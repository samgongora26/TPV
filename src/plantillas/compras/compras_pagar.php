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
                                    <li class="breadcrumb-item active">Pedido</li>
                                </ol>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="card-body bg-lighr">
                            <h4 class="card-title">Detalle de la compra</h4>
                            <div class="card-text">
                                <table class="table">
                                    <thead>
                                        <div id="mensaje2"></div>
                                        <tr>
                                            <th scope="col">foto</th>
                                            <th scope="col">codigo</th>
                                            <th scope="col">producto</th>
                                            <th scope="col">stock</th>
                                            <th scope="col">cantidad</th>
                                            <th scope="col">precio compra</th>
                                            <th scope="col">total compra</th>
                                            <th scope="col"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash2-fill" viewBox="0 0 16 16">
                                                <path d="M2.037 3.225A.703.703 0 0 1 2 3c0-1.105 2.686-2 6-2s6 .895 6 2a.702.702 0 0 1-.037.225l-1.684 10.104A2 2 0 0 1 10.305 15H5.694a2 2 0 0 1-1.973-1.671L2.037 3.225zm9.89-.69C10.966 2.214 9.578 2 8 2c-1.58 0-2.968.215-3.926.534-.477.16-.795.327-.975.466.18.14.498.307.975.466C5.032 3.786 6.42 4 8 4s2.967-.215 3.926-.534c.477-.16.795-.327.975-.466-.18-.14-.498-.307-.975-.466z" /></svg>
                                            </th>
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
                            <h5>Completar la compra</h5>
                            <div class="input-group mb-3">
                            <div id="mensaje2"></div>
                                            <ul class="list-group mx-auto">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="inputGroupSelect01">monto de pago</label>
                                                    <input id="monto" name="monto" type="text"  class="form-control text-white bg-dark" aria-label="Username" placeholder="$" aria-describedby="basic-addon1" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
                                                    
                                                </div>
                                                
                                            </ul>
                                            <ul class="list-group ">
                                                <div class="input-group-prepend mx-auto ">
                                                    <label class="input-group-text" for="inputGroupSelect01">Por pagar:</label>
                                                    <input id="por_pagar" name="por_pagar" disabled type="text" class="form-control  bg-dark text-white" aria-label="Username" aria-describedby="basic-addon1" value="$">
                                                </div>
                                                
                                            </ul>
                                            <input type="text" id="por_pagar2" value="" hidden>
                                            <button class="btn btn-sm btn-success mx-auto" onclick="obtener_monto()"> Comprar <label class="fa fa-check"></label></button>
                                        </div>
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
            <script src="../../../inc/funciones/compras/app_pagar_pedido.js"></script>
        <!-- FIN DE SCRIPTS -->
    </body>
    
</html>