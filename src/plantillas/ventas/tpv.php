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
                                    <ul class="nav nav-tabs mb-3">
                                        <li class="nav-item">
                                            <a href="#home" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                <i class="mdi mdi-home-variant d-lg-none d-block mr-1"></i>
                                                <span class="d-none d-lg-block">Ticket 1</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#profile" data-toggle="tab" aria-expanded="true" class="nav-link">
                                                <i class="mdi mdi-account-circle d-lg-none d-block mr-1"></i>
                                                <span class="d-none d-lg-block">Ticket 2</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#settings" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                                                <span class="d-none d-lg-block">ticket 3</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#settings" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                                                <span class="fa fa-plus"></span>
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="tab-content">
                                        <div class="tab-pane active" id="home">

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
                                        <div class="tab-pane show" id="profile">
                                            
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
                                                        <td>Reloj</td>
                                                        <td>0001</td>
                                                        <td>5000</td>
                                                        <td>-</td>
                                                        <td>5000</td>
                                                    </tr>                
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="settings">
                                            
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
                                                        <td>Reloj</td>
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
                                    <h4 class="card-title">Titulo del producto</h4>
                                    <p class="card-text">$5000</p>
                                    <button type="button" class="btn btn-light btn-circle"><i class="fa fa-minus"></i></button>
                                    <button type="button" class="btn btn-dark btn-circle"><i class="fa fa-plus"></i></button>  
                                    <!--p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p-->
                                </div>
                            </div>
                        <!---------------------TARJETA DE BOTONES DE LA COMPRA----------->
                            
                            <div class="card text-white bg-success">
                                <div class="card-header">
                                    <h4 class="mb-0 text-white">Venta</h4>
                                </div>
                                <div class="card-body text-center">
                                    <h3 class="card-title text-white">$5000</h3>
                                    <a href="javascript:void(0)" class="btn btn-block btn-rounded btn-dark">Cobrar</a>
                                    <hr>
                                    <div class="float-right">
                                        <a href="javascript:void(0)" class="btn btn-sm btn-rounded btn-danger">Eliminar</a>
                                    </div>
                                </div>
                            </div>
                    
                            
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