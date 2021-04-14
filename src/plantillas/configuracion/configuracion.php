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
            
                <!-- Row de tarjetas superiores -->
                <div class="row">
                    <!--Tarjeta de proveedor-->
                    <div class="col-md-12">
                    <div class="p-3 mb-2 bg-dark text-white" align="center">INFORMACIÓN DEL NEGOCIO</div>
                        <div class="card text-white bg-dark">
                            <div align="center" class="card-header bg-secondary">
                                <h4 class="mb-0 text-withe" id="nombre">Empresa Chida</h4>
                            </div>
                            <div class="card-body" id="contenidoconfig">
                                <!--<div align="center"><img style="border-radius: 50px; color: black;" src="../../imagenes/proveedores/logosabritas.jpg" width="100" height="100" ></div><br>
                                <div class="row" >
                                    <div class="col-md-5">
                                        <h3 id="razon">Razón Social: </h3>
                                    </div>
                                    <div class="col-md-5">
                                        <h3 id="nombref">Nombre Fiscal: </h3>
                                    </div>
                                    <div class="col-md-5">
                                        <h3 id="telefono">Telefono de contacto: </h3>
                                    </div>
                                    <div class="col-md-5">
                                        <h3 id="email">E-mail: </h3>
                                    </div>
                                    <div class="col-md-5">
                                        <h3 id="direccion">Dirección: </h3>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    
                                    <div class="col-md-5">
                                        <a href="javascript:void(0)" class="btn btn-primary">Editar información de la empresa <i class="fas fa-edit"></i></a>
                                    </div>
                                </div>
                                -->
                            </div>
                        </div>
                    </div>
                    <!--Fin Tarjeta de proveedor-->

                </div>
                <!--Fin Row de tarjetas superiores -->


            </div>
        </div>


        <!--FIN CONTENEDOR -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    </div>

    <!-- TODOS LOS ENLACES DE SCRIPTS -->
    <?php
        include '../../../componentes/scripts.php';
    ?>
    <script src="../../../inc/funciones/configuracion/app.js"></script>
    <!-- FIN DE SCRIPTS -->
</body>

</html>
