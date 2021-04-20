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

                <!-- Row de tarjetas superiores -->
                <div class="row">
                    <!--Tarjeta de Producto-->
                    <div class="col-md-12">
                        <div class="card text-white bg-dark">
                            <div align="center" class="card-header">
                                <h4 class="mb-0 text-white">Nombre Producto (Papas sabritas 250gr)</h4>
                            </div>
                            <div class="card-body">
                                <div align="center"><img style="border-radius: 75px; color: black;" src="../../imagenes/proveedores/logosabritas.jpg" width="150" height="150" ></div><br>
                                <h5 class="card-title text-white">Nombre: Papas Sabritas 250gr</h5>
                                <h5 class="card-title text-white">Tipo Producto: nuse</h5>
                                <h5 class="card-title text-white">Codigo de Barra: 85120520 </h5>
                                <h5 class="card-title text-white">Categoria: Frituras</h5>
                                <h5 class="card-title text-white">Proveedor: Sabritas</h5>
                                <h5 class="card-title text-white">Unidad: Piezas</h5>
                                <h5 class="card-title text-white">Precio Producto: $12</h5>
                                <h5 class="card-title text-white">Impuesto Producto: $$</h5>
                                <h5 class="card-title text-white">Estado: Activo</h5>
                                <h5 class="card-title text-white">Stock: 75</h5>
                                <div class="row">
                                    <div class="col-md-4">
                                        <a href="javascript:void(0)" class="btn btn-primary">Editar Producto<i class="fas fa-edit"></i></a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="javascript:void(0)" class="btn btn-secondary">Cambiar Estado</a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="javascript:void(0)" class="btn btn-primary">Eliminar Producto </a>
                                    </div>                         
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <!--Fin Tarjeta de Producto-->
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
    <!-- FIN DE SCRIPTS -->
</body>

</html>