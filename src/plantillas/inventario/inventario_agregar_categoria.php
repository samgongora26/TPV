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
                                            <!--<label>Imagen</label>
                                            <input id="imagen" name="imagen" type="file" class="form-control">-->
                                            <label>Nombre Categoria:</label>
                                            <input id="nombre_categoria" name="nombre_categoria" type="text" class="form-control" required>

                                            <div class="form-group mb-4">
                                                <label class="mr-sm-2" for="inlineFormCustomSelect">Marca</label>
                                                <select id="select_marca_c"  class="custom-select mr-sm-2" onchange="show_marca_c();" required>
                                                    <option selected >Selecciona una Marca...</option>
                                                    <!--<option value="0">Marca 1</option>-->
                                                </select>
                                            </div>
                                            <br>
                                            <h4 class="card-title">Detalles</h4>
                                                <div class="form-group">
                                                    <textarea id="detalles" name="detalles" class="form-control" rows="3" placeholder="Detalles del producto..."></textarea>
                                                </div>
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
    <script src="../../../inc/funciones/inventario/categoria_agregar.js"></script>
    <!-- FIN DE SCRIPTS -->
</body>

</html>
