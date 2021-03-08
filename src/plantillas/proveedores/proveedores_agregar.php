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
            <div class="conteiner-fluid">
                <!-- AQUI EMPEZAMOS A AGREGAR DISEÑO DEL CENTRO -->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-1 col-md-1 col-lg-1"></div>
                        <div class="col-sm-11 col-md-11 col-lg-11">


                            <!-- Input de Crear Nuevo preveedor -->
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Agregar Nuevo Proveedor</h4>
                                    <h6 class="card-subtitle">Rellena los campos para agregar un nuevo proveedor</h6>
                                    <form id="formulario" class="mt-4">
                                        <div class="form-group">
                                            <label>Clave</label>
                                            <input id="clave" name="clave" type="text" class="form-control" required>
                                            <label>Nombre</label>
                                            <input id="nombre" name="nombre" type="text" class="form-control" required>
                                            <label>Razón Social</label>
                                            <input id="razon_social" name="razon_social" type="text" class="form-control" required>
                                            <label>Dirección</label>
                                            <input id="direccion" name="direccion" type="text" class="form-control" required>
                                            <label>Telefono</label>
                                            <input id="telefono" name="telefono" type="text" class="form-control" required>
                                            <br>

                                            <!--<label>Telefono</label>
                                            <br>
                                            <label>
                                                (<input name="tel1" type="tel" pattern="[0-9]{3}" placeholder="###" aria-label="3-digit area code" size="2"/>)-
                                                <input name="tel2" type="tel" pattern="[0-9]{3}" placeholder="###" aria-label="3-digit prefix" size="2"/> -
                                                <input name="tel3" type="tel" pattern="[0-9]{4}" placeholder="####" aria-label="4-digit number" size="3"/>
                                            </label>
                                            <br>-->


                                            <label>RFC</label>
                                            <input id="rfc" name="rfc" type="text" class="form-control" required>
                                            <label>Correo</label>
                                            <input id="correo" name="correo" type="text" class="form-control" required>
                                            <label>Estado</label>
                                            <input id="estado" name="estado" type="text" class="form-control" required>
                                            <label>Ciudad</label>
                                            <input id="ciudad" name="ciudad" type="text" class="form-control" required>
                                            <br>
                                            <h4 class="card-title">Detalles</h4>
                                            <form class="mt-3">
                                                <div class="form-group">
                                                    <textarea id="detalle" name="detalle" class="form-control" rows="3" placeholder="Detalles de proveedor..."></textarea>
                                                </div>
                                            </form>
                                            <div class="text-right">
                                                <button type="submit" class="btn btn-info">Guardar</button>
                                                <button type="reset" class="btn btn-dark">Reiniciar valores</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Fin Input de Crear Nuevo preveedor -->


                        </div>
                    </div>
                </div>



            </div>
        </div>





        <!--FIN CONTENEDOR -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    </div>

    <!-- TODOS LOS ENLACES DE SCRIPTS -->
    <?php
    include '../../../componentes/scripts.php';
    ?>
    <script src="../../../inc/funciones/proveedores/proveedor_agregar.js"></script>
    <!-- FIN DE SCRIPTS -->
</body>

</html>
