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

                <div class="col-sm-12 col-md-12 col-lg-12">
                    <!-- buscador de clientes-->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Buscar Cliente</h4>
                            <h6 class="card-subtitle">¿a quien quieres buscar?</h6>
                            <form class="mt-4">
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input id="valor_busqueda" type="text" class="form-control">
                                </div>
                                <div class="text-right">
                                    <button id="buscar" type="button" class="btn btn-info">Buscar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--Tabla de Clientes-->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Tabla de Clientes</h4>
                                <h6 class="card-subtitle">Resultado de clientes...</h6>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                <div id="mensaje"></div>
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Clave Cliente</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Dirección</th>
                                            <th scope="col">Telefono</th>
                                            <th scope="col">Editar</th>
                                            <th scope="col">Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody id="contenido_tabla">

                                    </tbody>
                                </table>


                                <!-- MODALS -->
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                <!-- Modal editar -->
                                <div id="edit-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <div class="modal-body">

                                                <form class="pl-3 pr-3" action="#" id="form-modal-edit" name="for-modal-edit">

                                                    <div class="form-group">
                                                        <label>Clave Cliente</label>
                                                        <input class="form-control" type="text" id="edit_clave" name="edit_clave" required="" placeholder="Clave de Cliente">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Nombre</label>
                                                        <input class="form-control" type="text" id="edit_nombre" name="edit_nombre" required="" placeholder="Nombre Cliente">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Dirección</label>
                                                        <input class="form-control" type="text" required="" id="edit_direccion" name="edit_direccion" placeholder="Dirección">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Telefono</label>
                                                        <input class="form-control" type="text" required="" id="edit_telefono" name="edit_telefono" placeholder="Numero de Telefono">
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
                                <!-- FIN MODALS -->


                            </div>
                        </div>
                    </div>
                    <!-- Fin Tabla de Clientes-->
                    <!-- Input de Busqueda de Clientes -->
                    <!--
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Busqueda de Clientes</h4>
                                <h6 class="card-subtitle">Ingresa Codigo de Cliente</h6>
                                <form class="mt-4">
                                    <div class="form-group">
                                        <label>Clave Cliente</label>
                                        <input type="text"  class="form-control">
                                        <label>Nombres</label>
                                        <input type="text" disabled="true" class="form-control">
                                        <label>Apellidos</label>
                                        <input type="text" disabled="true" class="form-control">
                                        <label>Dirección</label>
                                        <input type="text" disabled="true" class="form-control">
                                        <label>Telefono</label>
                                        <input type="text" disabled="true" class="form-control">
                                        <label>Correo</label>
                                        <input type="text" disabled="true" class="form-control">
                                    </div>
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-info">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div> -->
                    <!-- Fin Input de Busqueda de Clientes -->
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
    <script src="../../../inc/funciones/clientes/app.js"></script>
    <!-- FIN DE SCRIPTS -->
</body>

</html>