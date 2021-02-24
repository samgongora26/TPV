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
            
           
                <div class="col-sm-11 col-md-11 col-lg-11">

                    
                    <!--Lista Categorias-->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Categorias</h4>
                                <h6 class="card-subtitle">Resultado de Categorias</h6>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="text-center">
                                        <tr>
                                            <th scope="col">Imagen</th>
                                            <th scope="col">Nombre Categoria</th>
                                            <th scope="col">Estado</th>
                                            <th scope="col">Detalles</th>
                                            <th scope="col">Editar</th>
                                            <th scope="col">Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#edit-modal"><i class="icon-pencil"></i></button>
                                            </td>
                                            <td><button type="button" class="btn btn-primary boton_eliminar"><i class="icon-trash"></i></button></td>
                                        </tr>
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
                                                        <label>Nombre Categoria</label>
                                                        <input class="form-control" type="text" id="edit_categoria" name="edit_categoria"
                                                            required="" placeholder="Codigo de barras">
                                                    </div>


                                                    <form id="submodal_estado" name="submodal_estado">
                                                        <div class="form-group mb-4">
                                                            <label class="mr-sm-2" for="inlineFormCustomSelect">Estado</label>
                                                            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                                                <option selected>Elegir...</option>
                                                                <option value="1">Activo</option>
                                                                <option value="2">Inactivo</option>
                                                            </select>
                                                        </div>
                                                    </form>

                                                    <div class="form-group">
                                                        <label>Detalles</label>
                                                        <input class="form-control" type="text" required=""
                                                            id="edit_detalles" name="edit_detalles" placeholder="Stock">
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

                            </div>
                        </div>
                    </div>
                    <!-- Fin Lista Categorias-->
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
    <!-- FIN DE SCRIPTS -->
</body>

</html>