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

                        <div class="col-sm-11 col-md-11 col-lg-11">


                            <!-- Input de Crear Nuevo producto -->
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Agregar Nueva Categoria</h4>
                                    <h6 class="card-subtitle">Rellena los campos para agregar una nueva categoria</h6>
                                    <form id="formulario_agregar_categoria" class="mt-4">
                                        <div class="form-group">
                                            <label>Imagen</label>
                                            <input id="imagen" name="imagen" type="file" class="form-control" required>
                                            <label>Nombre Categoria:</label>
                                            <input id="nombre_categoria" name="nombre_categoria" type="text" class="form-control" required>


                                            <form>
                                                <div class="form-group mb-4">
                                                    <label class="mr-sm-2" for="inlineFormCustomSelect">Estado</label>
                                                    <select id="estado" name="estado" class="custom-select mr-sm-2" id="inlineFormCustomSelect" required>
                                                        <option selected>Elegir...</option>
                                                        <option value="1">Activo</option>
                                                        <option value="2">Inactivo</option>
                                                    </select>
                                                </div>
                                            </form>
                                            <br>
                                            <h4 class="card-title">Detalles</h4>
                                            <form class="mt-3">
                                                <div class="form-group">
                                                    <textarea id="detalle" name="detalle" class="form-control" rows="3" placeholder="Detalles del producto..."></textarea>
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
                            <!-- Fin Input de Crear Nuevo producto -->


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
