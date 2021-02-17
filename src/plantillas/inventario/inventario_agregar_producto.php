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


                            <!-- Input de Crear Nuevo producto -->
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Agregar Nuevo Producto</h4>
                                    <h6 class="card-subtitle">Rellena los campos para agregar un nuevo producto</h6>
                                    <form id="formulario" class="mt-4">
                                        <div class="form-group">
                                            <label>Imagen</label>
                                            <input id="clave" name="clave" type="file" class="form-control">
                                            <label>Nombre</label>
                                            <input id="nombre" name="nombre" type="text" class="form-control">
                                            <label>Codigo de Barras</label>
                                            <input id="razon_social" name="razon_social" type="text" class="form-control">

                                            <form>
                                                <div class="form-group mb-4">
                                                    <label class="mr-sm-2" for="inlineFormCustomSelect">Tipo producto</label>
                                                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                                        <option selected>Elegir...</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                            </form>

                                            <form>
                                                <div class="form-group mb-4">
                                                    <label class="mr-sm-2" for="inlineFormCustomSelect">Categoria</label>
                                                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                                        <option selected>Elegir...</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                            </form>

                                            <form>
                                                <div class="form-group mb-4">
                                                    <label class="mr-sm-2" for="inlineFormCustomSelect">Proveedor</label>
                                                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                                        <option selected>Elegir...</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                            </form>

                                            <form>
                                                <div class="form-group mb-4">
                                                    <label class="mr-sm-2" for="inlineFormCustomSelect">Unidad</label>
                                                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                                        <option selected>Elegir...</option>
                                                        <option value="1">Piezas</option>
                                                        <option value="2">Kilogramos</option>
                                                        <option value="3">nose</option>
                                                    </select>
                                                </div>
                                            </form>

                                            <label>Precio Producto</label>
                                            <input id="correo" name="correo" type="text" class="form-control">
                                            <label>Impuesto Producto</label>
                                            <input id="pais" name="pais" type="text" class="form-control">
                                            <form>
                                                <div class="form-group mb-4">
                                                    <label class="mr-sm-2" for="inlineFormCustomSelect">Estado</label>
                                                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
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