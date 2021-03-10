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

                <div class="col-sm-12 col-md-12 col-lg-12 mx-auto">
                    <!-- Input de Busqueda de productos -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Buscar Producto</h4>
                            <h6 class="card-subtitle">Ingresa Codigo de Barras o Nombre del Producto</h6>
                            <form class="mt-4">
                                <div class="form-group">
                                    <label>Codigo de Barras</label>
                                    <input type="text"  class="form-control">
                                    <label>Nombre</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-info">Buscar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Fin Input de Busqueda de productos -->
                </div>
                 <!--Tabla de productos-->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Productos de Tienda</h4>
                                <h6 class="card-subtitle">Resultado de Productos</h6>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="text-center">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Codigo de Barras</th>
                                            <th scope="col">Precio Costo</th>
                                            <th scope="col">Precio Venta</th>
                                            <th scope="col">Stock</th>
                                            <th scope="col">Marca</th>
                                            <th scope="col">Estado</th>
                                            <th scope="col">Ver</th>
                                            <th scope="col">Editar</th>
                                            <th scope="col">Imprimir codigo de Barras</th>
                                            <th scope="col">Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody id="contenido_tabla" class="text-center">
                                        <!--<tr id="ver_productos_">
                                            <th scope="row">1</th>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>
                                             <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#estado-modal"><i class="icon-note"></i></button>    
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-primary boton_ver"><i class="icon-eye"></i></button>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#edit-modal"><i class="icon-pencil"></i></button>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-primary boton_imprimir"><i class="icon-printer"></i></button>    
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-primary"><i class="icon-trash"></i></button>
                                            </td>
                                        </tr>-->
                                    </tbody>
                                </table>

                                <!-- MODALS -->
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                <!-- Modal editar -->
                                <div id="edit-modal" class="modal fade" tabindex="-1" role="dialog"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <div class="modal-body">

                                                <form class="pl-3 pr-3" action="#" id="form-modal-edit" name="for-modal-edit">

                                                    <div class="form-group">
                                                        <label>Codigo de Barras</label>
                                                        <input class="form-control" type="text" id="edit_barras" name="edit_barras"
                                                            required="" placeholder="Codigo de barras">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Nombre Producto</label>
                                                        <input class="form-control" type="text" id="edit_nombre" name="edit_nombre"
                                                            required="" placeholder="Nombre Producto">
                                                    </div>

                                                        <div class="form-group mb-4">
                                                            <label class="mr-sm-2" for="inlineFormCustomSelect">Marca</label>
                                                            <select class="custom-select mr-sm-2" id="select_proveedor">
                                                                <option selected value="1">Marca1</option>
                                                                <option value="2">Marca2</option>
                                                            </select>
                                                        </div>

                                                    <div class="form-group">
                                                        <label>Stock en Inventario</label>
                                                        <input class="form-control" type="text" required=""
                                                            id="edit_stock" name="edit_stock" placeholder="Stock">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Precio de Compra</label>
                                                        <input class="form-control" type="text" required=""
                                                            id="edit_precio_compra" name="edit_precio_compra" placeholder="Precio de Compra">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Precio Costo</label>
                                                        <input class="form-control" type="text" required=""
                                                            id="edit_precio_venta" name="edit_precio_venta" placeholder="Precio de Venta">
                                                    </div>

                                                    <div class="form-group text-center">
                                                        <button class="btn btn-primary" type="submit">Guardar Cambios</button>
                                                    </div>

                                                </form>

                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div>
                                <!-- Fin modal editar -->
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                <!-- Modal de estado-->
                                <div id="estado-modal" class="modal fade" tabindex="-1" role="dialog"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <div class="modal-body">

                                                <form class="pl-3 pr-3" action="#" id="form-modal-estado" name="for-modal-estado">

                                                    <form id="submodal_estado" name="submodal_estado">
                                                        <div class="form-group mb-4">
                                                            <label class="mr-sm-2" for="inlineFormCustomSelect">Cambiar Estado</label>
                                                            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                                                <option selected>Elegir...</option>
                                                                <option value="1">Activo</option>
                                                                <option value="2">Inactivo</option>
                                                            </select>
                                                        </div>
                                                    </form>

                                                    <div class="form-group text-center">
                                                        <button class="btn btn-primary" type="submit">Guardar Cambios</button>
                                                    </div>

                                                </form>

                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div>
                                <!-- Fin modal estado -->
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                <!-- FIN MODALS -->


                            </div>
                        </div>
                    </div>
                    <!-- Fin Tabla de productos-->
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
    <script src="../../../inc/funciones/inventario/app.js"></script>
    <!-- FIN DE SCRIPTS -->
</body>

</html>