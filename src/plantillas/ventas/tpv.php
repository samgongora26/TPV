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
    <div id="main-wrapper" data-theme="light" data-layout="horizontal" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">

        <!-- ============================================================== -->
        <!-- HEADER -->
        <?php
            include '../../../componentes/header.php';
        ?>
        <!-- FIN HEADER -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
       
        <!-- ============================================================== -->
        
        <div class="page-wrapper">
            <div class="conteiner mt-3">
                <div class="row mx-auto">
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-body">
                            <h2 id="texto_venta_actual">id de la venta actual</h2>
                                <div class="row">
                                    <div class="col-md-6">
                                                <input type="text" class="form-control" id="codigo_envio" aria-describedby="name" placeholder="Codigo">
                                                <!--small id="name" class="form-text text-muted">Codigo</small-->
                                        
                                     
                                    </div>
                                    <div class="col-md-3 float-right">
                                        <button id="formulario" class="btn btn-info btn-rounded">Buscar producto
                                            <i class="fa fa-search"></i> 
                                        </button>
                                    </div>
                                </div>
                                
                                <hr>
                                <div class="col-md-12">
                                    <h4>Detalle de la venta venta</h4>
                                    <ul class="nav nav-tabs mb-3" id="contenedor_tickets">
                                        <li class="nav-item ticket" id="1">
                                            <a href="#pre_ticket1" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                <i class="mdi mdi-pre_ticket1-variant d-lg-none d-block mr-1"></i>
                                                <span class="d-none d-lg-block">Ticket 1</span>
                                            </a>
                                        </li>
                                        <li class="nav-item ticket" id="2">
                                            <a href="#pre_ticket2" data-toggle="tab" aria-expanded="true" class="nav-link">
                                                <i class="mdi mdi-account-circle d-lg-none d-block mr-1"></i>
                                                <span class="d-none d-lg-block">Ticket 2</span>
                                            </a>
                                        </li>
                                        <li class="nav-item ticket" id="3">
                                            <a href="#pre_ticket3" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                                                <span class="d-none d-lg-block">ticket 3</span>
                                            </a>
                                        </li>
                                        <li class="nav-item ticket" id="btn_crear_ticket">
                                            <a href="#settings" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                                                <span class="fa fa-plus"></span>
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="tab-content">
                                        <div class="tab-pane active" id="pre_ticket1">

                                            <table class="table table-sm mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Cantidad</th>
                                                        <th scope="col">Codigo</th>
                                                        <th scope="col">Descripción</th>
                                                        <th scope="col">Precio unitario</th>
                                                        <th scope="col">Descuento %</th>
                                                        <th scope="col">Importe</th>
                                                        <th scope="col">acción</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="contenido_tabla" class="text-center">
                                        <!-- aqui se inyecta el contenido de la tabla desde el backend-->
                                    </tbody>
                                            </table>
                        
                                        </div>
                                        <div class="tab-pane show" id="pre_ticket2">
                                            
                                            <table class="table table-sm mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Cantidad</th>
                                                        <th scope="col">Codigo</th>
                                                        <th scope="col">Descripción</th>
                                                        <th scope="col">Precio unitario</th>
                                                        <th scope="col">Descuento %</th>
                                                        <th scope="col">Importe</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>zzzzzzzzzzzz</td>
                                                        <td>0001</td>
                                                        <td>5000</td>
                                                        <td>-</td>
                                                        <td>5000</td>
                                                    </tr>                
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="pre_ticket3">
                                            
                                            <table class="table table-sm mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Cantidad</th>
                                                        <th scope="col">Codigo</th>
                                                        <th scope="col">Descripción</th>
                                                        <th scope="col">Precio unitario</th>
                                                        <th scope="col">Descuento %</th>
                                                        <th scope="col">Importe</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>wewewe</td>
                                                        <td>0001</td>
                                                        <td>5000</td>
                                                        <td>-</td>
                                                        <td>5000</td>
                                                    </tr>                
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div> 
                    </div>
                    <!---------------------COLUMNA DERECHA-------------------->
                    <div class="col-md-3">
                        <!-----------------TARJETA DE DESCRIPCION DEL PRODUCTO--------->
                            <div class="card">
                                <img class="col-md-3 mx-auto mt-3" src="../../assets/images/product/iwatch.png" alt="product">
                                <div class="card-body text-center">
                                    <h4 class="card-title" id="actual_foto"></h4>
                                    <p class="card-text" id="actual_precio"></p>
                                    <!--p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p-->
                                </div>
                            </div>
                        <!---------------------TARJETA DE BOTONES DE LA COMPRA----------->
                            
                            <div class="card text-white bg-success">
                                <div class="card-header">
                                    <h4 class="mb-0 text-white">Venta</h4>
                                </div>
                                <div class="card-body text-center">
                                    <h3 id="total_compra" class="card-title text-white"></h3><!--
                                    <a id="" href="javascript:void(0)" class="btn btn-block btn-rounded btn-dark" data-toggle="modal" data-target="#warning-header-modal">Cobrar</a> -->
                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#warning-header-modal">cobrar</button>
                                    <hr>
                                    <div class="float-right">
                                        <a id="eliminar" href="javascript:void(0)" class="btn btn-sm btn-rounded btn-danger">Eliminar</a>
                                    </div>
                                </div>
                            </div>

                        <!----------------MODAL DE VENTA--------------------->
                        <!-- Warning Header Modal -->
                        <div id="warning-header-modal" class="modal fade" tabindex="-1" role="dialog"
                                    aria-labelledby="warning-header-modalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header modal-colored-header bg-success">
                                                <h4 class="modal-title" id="modal_id">Cobrar el ticket 1
                                                </h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <h3 id="monto_total" class="mx-auto">TOTAL: $500</h3>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="monto_recibido" aria-describedby="name" placeholder="Name">
                                                    <small id="name" class="form-text text-muted">Monto</small>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="monto_devuelto" aria-describedby="name" placeholder="Name" disabled>
                                                    <small id="name" class="form-text text-muted">Cambio</small>
                                                </div>
                                            </div>
                                            <div class="modal-footer"> 
                                                <button type="button" class="btn btn-light"
                                                    data-dismiss="modal">Cancelar</button>
                                                <button id="cobrar" type="button" class="btn btn-success" disabled>Cobrar</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                    
                            
                    </div>

                        
                    
                </div>

            </div>
        </div>



        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- CONTENEDOR -->
        


        <!--FIN CONTENEDOR -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    </div>

    <!-- TODOS LOS ENLACES DE SCRIPTS -->
    <?php
        include '../../../componentes/scripts.php';
    ?>
     <script src="../../../inc/funciones/pos/app.js"></script>
    <!-- FIN DE SCRIPTS -->
</body>

</html>