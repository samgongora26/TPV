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
                                    <h4 class="card-title">Agregar Nuevo Producto</h4>
                                    <h6 class="card-subtitle">Rellena los campos para agregar un nuevo producto</h6>
                                    <form id="formulario" class="mt-4">
                                        <div class="form-group">

                                            <label>Imagen</label>
                                            <input id="imagen" name="imagen" type="file" class="form-control">
                                            <label>Nombre</label>
                                            <input id="nombre" name="nombre" placeholder="Nombre de Producto" type="text" class="form-control" required>
                                            <label>Codigo de Barras</label>
                                            <input id="codigobarras" name="codigobarras" placeholder="Número de Codigo de Barras" type="text" class="form-control" required>
                                            <br>
                                            
                                                <!--<div class="form-group mb-4">
                                                    <label class="mr-sm-2" for="inlineFormCustomSelect">Tipo producto</label>
                                                    <select class="custom-select mr-sm-2" id="select_tipo" onchange="show_tipo();">
                                                        <option selected>Elegir...</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>-->

                                                <div class="form-group mb-4">
                                                    <label class="mr-sm-2" for="inlineFormCustomSelect">Categoria</label>
                                                    <select class="custom-select mr-sm-2" id="select_categoria" onchange="show_categoria();" required>
                                                        <option selected value="1">Categoria 1</option>
                                                        <option value="2">Categoria 2</option>
                                                        <option value="3">Categoria 3</option>
                                                    </select>
                                                </div>

                                                <div class="form-group mb-4">
                                                    <label class="mr-sm-2" for="inlineFormCustomSelect">Marca</label>
                                                    <select class="custom-select mr-sm-2" id="select_marca" onchange="show_marca();" required>
                                                        <option selected value="1">Marca1</option>
                                                        <option value="2">Marca2</option>
                                                        <option value="3">Marca3</option>
                                                    </select>
                                                </div>

                                                

                                            <div class="form-group mb-4">
                                                <label class="mr-sm-2" for="inlineFormCustomSelect">Unidad</label>
                                                <select class="custom-select mr-sm-2" id="select_unidad" name="select_unidad" onchange="show_unidad();" required>
                                                    <option selected value="1">Piezas</option>
                                                    <option value="2">Kilogramos</option>
                                                    <option value="3">nose</option>
                                                </select>
                                            </div>


                                            <!--<label>Fecha de Caducidad</label>
                                            <input id="caducidad" name="caducidad" placeholder="aa-mm-dd   ó NF" type="text" class="form-control">
                                            <br>-->

                                            <div class="form-group row">
                                                <label for="example-date-input" class="col-2 col-form-label">Fecha de Caducidad</label>
                                                <div class="col-10">
                                                    <input class="form-control" type="date"  id="caducidad" name="caducidad">
                                                </div>
                                            </div>

                                            <label>Precio Producto</label>
                                            <input id="precio" name="precio" placeholder="Precio del Producto" type="text" class="form-control" required>
                                            <br>
                                            <label>Costo del Producto</label>
                                            <input id="costo" name="costo" placeholder="Costo del Producto" type="text" class="form-control" required>
                                            <br>
                                            <label>Precio de Mayoreo</label>
                                            <input id="mayoreo" name="mayoreo" placeholder="Precio a Mayoreo" type="text" class="form-control" required>
                                            <br>
                                            <label>Cantidad en stock</label>
                                            <input id="stock" name="stock" placeholder="Cantidad de stock" type="text" class="form-control" required>
                                            <br>
                                            <!--<label>Impuesto Producto</label>-->
                                            <!--<input id="pais" name="pais" type="text" class="form-control">-->

                                                <div class="form-group mb-4">
                                                    <label class="mr-sm-2" for="inlineFormCustomSelect">Estado</label>
                                                    <select class="custom-select mr-sm-2" id="select_estado" onchange="show_estado();" required>
                                                        <option selected value="1">Activo</option>
                                                        <option value="0">Inactivo</option>
                                                    </select>
                                                </div>
                                            <br>
                                            <h4 class="card-title">Descripción</h4>
                                            <form class="mt-3">
                                                <div class="form-group">
                                                    <textarea id="descripcion" name="descripcion" class="form-control" rows="3" placeholder="Descripción del producto..."></textarea>
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
    <script src="../../../inc/funciones/inventario/inventario_agregar.js"></script>
    <!-- FIN DE SCRIPTS -->
</body>

</html>