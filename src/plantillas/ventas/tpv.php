<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <?php
        include '../../../componentes/head.php';
    ?>
    <link href="../../assets/css/calculadora.css" rel="stylesheet">
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
                                    <div class="col-md-8">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="codigo_envio" aria-describedby="name" placeholder="Codigo">
                                            <button id="formulario" class="btn btn-secondary" data-toggle="modal" data-target="#bs-example-modal-lg">Agregar    
                                            </button>
                                        </div>
                                                
                                                <!--small id="name" class="form-text text-muted">Codigo</small-->
                                        
                                     
                                    </div>
                                    <div class="col-md-2 ml-auto float-right">
                                        <button id="" class="btn btn-outline-info btn-circle" data-toggle="modal" data-target="#busqueda_producto">
                                            <i class="fa fa-search"></i> 
                                        </button>
                                        <button type="button" class="btn btn-outline-info btn-circle" data-toggle="modal" data-target="#calculadora_modal">
                                            <i class="fas fa-calculator"></i> 
                                        </button>
                                    </div>
                                </div>
                                
                                <hr>
                                <div class="col-md-12">
                                    <h4>Detalle de la venta venta</h4>
                                    <ul class="nav nav-tabs mb-3" id="contenedor_tickets">
                                        <li class="nav-item " id="btn_crear_ticket">
                                            <a href="#settings" data-toggle="tab" aria-expanded="false" class="ticket nav-link">
                                                <i class="ticket mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                                                <span class="ticket fa fa-plus"></span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="contenedor_padre_tickets">
                 
                                            <!-- se imprimen aqui todos-->
                                    </div>
                                </div>
                                
                            </div>
                        </div> 
                    </div>
                    <!---------------------COLUMNA DERECHA-------------------->
                    <div class="col-md-3">
                        <!-----------------TARJETA DE DESCRIPCION DEL PRODUCTO--------->
                            <div class="card">
                                <img class="col-md-3 mx-auto mt-3" src="../../../src/../src/assets/images/product/ipad.png" alt="product">
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
                                                <small id="name" class="form-text text-muted">Monto</small>
                                                    <input type="text" class="form-control" id="monto_recibido" aria-describedby="name" placeholder="Name">
                                                </div>
                                                <div class="form-group">
                                                <small id="name" class="form-text text-muted">Cambio</small>
                                                    <input type="text" class="form-control" id="monto_devuelto" aria-describedby="name" placeholder="Name" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <small id="name" class="form-text text-muted">cliente</small>
                                                    <input type="text" class="form-control" id="cliente" aria-describedby="name" placeholder="numero cliente" >
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
                    
                            
                                <div class="modal fade" id="calculadora_modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">

                                                
                                           
                                            <div class="modal-body bg-dark">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <div id = "Principal">  
                                                    <div id= "Calculadora">         
                                                        <input id="Pantalla" type="textbox" class="textbox">
                                                        <div id= "Teclado" class="buttons">
                                                            <button class="button" value="AC">AC</button>
                                                            <button class="button" value="CE">CE</button>
                                                            <button class="button" value="%">%</button>
                                                            <button class="button" value="/">/</button><br>
                                                            <button class="button" value="7">7</button>
                                                            <button class="button" value="8">8</button>
                                                            <button class="button" value="9">9</button>
                                                            <button class="button" value="*">*</button><br>
                                                            <button class="button" value="4">4</button>
                                                            <button class="button" value="5">5</button>
                                                            <button class="button" value="6">6</button>
                                                            <button class="button" value="-">-</button><br>
                                                            <button class="button" value="1">1</button>
                                                            <button class="button" value="2">2</button>
                                                            <button class="button" value="3">3</button>
                                                            <button class="button" value="+">+</button><br>
                                                            <button class="button" value=".">.</button>
                                                            <button class="button" value="0">0</button>
                                                            <button class="button" value="Ans">Ans</button>
                                                            <button class="button" value="=">=</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div>
                        
                        <!----MODAL DE BUSQUEDA DE PRODUCTO---->
                        <?php include "../modal_productos/modal_productos.php"; ?>
                        
                    
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
     <script src = "../../../inc/funciones/pos/testing.js"> </script> 
     <script src = "../../../inc/funciones/pos/calculadora.js"> </script>
     <script src = "../../../inc/funciones/modal_productos/app_modal_productos.js"> </script> 

    <!-- FIN DE SCRIPTS -->
</body>

</html>