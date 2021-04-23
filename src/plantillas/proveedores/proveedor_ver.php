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

        <div class="page-wrapper">
            <div class="container-fluid">
            <!-- AQUI EMPEZAMOS A AGREGAR DISEÑO DEL CENTRO -->
            <ol class="breadcrumb ">
                                    <li class="breadcrumb-item"><a href="proveedores_buscar.php">Proveedores</a></li>
                                    <li class="breadcrumb-item active" id="pedido">Proveedor</li>
                                </ol>
                <!-- Row de tarjetas superiores -->
                <div class="row">
                    <!--Tarjeta de proveedor-->
                    <div class="col-md-3">
                        <div class="card text-white bg-dark">
                            <div align="center" class="card-header">
                                <h2>Proveedor: </h2>
                                <h4 class="mb-0 text-white" id="nombre"><!-- se inyecta el nombre--></h4>
                            </div>
                            <!--div class="card-body">
                                <div id="img_proveedor"></div>
                                
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="javascript:void(0)" class="btn btn-primary">Facturas</a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="javascript:void(0)" class="btn btn-secondary">Productos</a>
                                    </div>
                                    <div class="col-md-5">
                                        <a href="javascript:void(0)" class="btn btn-primary">Editar Proveedor <i class="fas fa-edit"></i></a>
                                    </div>
                                </div>

                            </div-->
                        </div>
                    </div>
                    <!--Fin Tarjeta de proveedor-->

                    <!--Tarjeta de contacto-->
                    <div class="col-md-9">
                        <div class="card border-dark">
                            <div align="center" class="card-header bg-dark">
                                <h4 class="mb-0 text-white">Contacto</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h5>Folio: </h5>
                                            </div>
                                            <div class="col-md-6">
                                                <p id="folio"><!--se inyecta el telefono --></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h5>Estado y municipio: </h5>
                                            </div>
                                            <div class="col-md-6">
                                                <p id="estado"><!--se inyecta el telefono --></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h5>Localidad y dirección: </h5>
                                            </div>
                                            <div class="col-md-6">
                                                <p id="direccion"><!--se inyecta el telefono --></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h5>Telefono: </h5>
                                            </div>
                                            <div class="col-md-6">
                                                <p id="telefono"><!--se inyecta el telefono --></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h5>Correo: </h5>
                                            </div>
                                            <div class="col-md-6">
                                                <p id="email"><!--se inyecta el correo--></p>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h5>Fecha de registro </h5>
                                            </div>
                                            <div class="col-md-6">
                                                <p id="fecha_registro"><!-- se inyecta la direccion--></p>
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h5>RFC: </h5>
                                            </div>
                                            <div class="col-md-6">
                                                <p id="rfc"><!--se inyecta el telefono --></p>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h5>Razón social: </h5>
                                            </div>
                                            <div class="col-md-4">
                                                <p id="razon"><!--se inyecta el correo--></p>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <!--Fin Tarjeta de contacto-->
                </div>
                <!--Fin Row de tarjetas superiores -->

                <!--Tarjeta de Balance-->
                <!--div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="card border-success">
                            <div align="center" class="card-header bg-success">
                                    <h4 class="mb-0 text-white">Balance</h4>
                            </div>
                            <div align="center" class="card-body">
                                <h2 class="card-title"><i class="fas fa-dollar-sign"></i> 00.00</h2>
                                <a href="javascript:void(0)" class="btn btn-primary">Comprar producto <i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div-->
                <!-- Fin Tarjeta Balance-->

                <!--Tabla de facturas de compra-->
                <!--div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Lista de facturas de compra</h4>
                                <h6 class="card-subtitle">Resultado de facturas</h6>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr class="text-center">
                                            <th scope="col">#</th>
                                            <th scope="col">Pendiente...</th>
                                            <th scope="col">Editar</th>
                                            <th scope="col">Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>...</td>
                                            <td><i class="fas fa-edit"></i></td>
                                            <td><i class="fas fa-trash"></i></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>...</td>
                                            <td><i class="fas fa-edit"></i></td>
                                            <td><i class="fas fa-trash"></i></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div-->

                <!--Fin Tabla de facturas de compra-->



            </div>
        </div>


        <!--FIN CONTENEDOR -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    </div>

    <!-- TODOS LOS ENLACES DE SCRIPTS -->
    <?php
        include '../../../componentes/scripts.php';
    ?>
           <script src="../../../inc/funciones/proveedores/proveedor_ver.js"></script>
    <!-- FIN DE SCRIPTS -->
</body>

</html>
