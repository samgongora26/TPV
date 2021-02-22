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
                    
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <!-- Input de Crear Nuevo Cliente -->
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Agregar Nuevo Cliente</h4>
                                        <h6 class="card-subtitle">Rellena los campos para agregar un nuevo cliente</h6>
                                        <form id="formulario" class="mt-4">
                                            <div class="form-group">
                                                <label>Clave Cliente</label>
                                                <input id="clave" type="text" placeholder="Ingresa el numero clave del cliente" class="form-control">
                                                <label>Nombre</label>
                                                <input id="nombre" type="text" placeholder="Ingresa nombre del cliente" class="form-control">
                                                <label>Segundo Nombre</label>
                                                <input id="nombre_2" type="text" placeholder="Ingresa segundo nombre del cliente (opcional)" class="form-control">
                                                <label>Apellido Paterno</label>
                                                <input id="apellido_p" type="text" placeholder="Ingresa apellido paterno del cliente" class="form-control">
                                                <label>Apellido Materno</label>
                                                <input id="apellido_m" type="text" placeholder="Ingresa apellido materno del cliente" class="form-control">
                                                <label>Dirección</label>
                                                <input id="direccion" type="text" placeholder="Ingresa dirección del cliente (opcional)" class="form-control">
                                                <label>Telefono</label>
                                                <input id="telefono" type="text" placeholder="Ingresa numero de telefono de cliente" class="form-control">
                                                <label>Correo</label>
                                                <input id="correo" type="text" placeholder="Ingresa correo del cliente" class="form-control">
                                                <div class="text-right">
                                                    <button type="submit" class="btn btn-info">submit</button>
                                                    <button type="reset" class="btn btn-dark">Reset</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Fin Input de Crear Nuevo Cliente -->
                    
                </div>
            </div>
        </div>
            <!--FIN CONTENEDOR -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- TODOS LOS ENLACES DE SCRIPTS -->
        <?php
            include '../../../componentes/scripts.php';
        ?>
        <!-- FIN DE SCRIPTS -->
        <script src="../../../inc/funciones/clientes/clientes_agregar.js"></script>
    </body>

</html>