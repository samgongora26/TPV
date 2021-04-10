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
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Agregar promoción</h4>

                                    <div class="form-group mb-4">
                                        <label class="mr-sm-2" for="inlineFormCustomSelect">Tipo de Promocion</label>
                                        <select class="custom-select mr-sm-2" id="promociones">
                                            <option selected value="5">5%</option>
                                            <option value="2">10%</option>
                                            <option value="2">15%</option>
                                            <option value="1">20%</option>
                                            <option value="2">30%</option>
                                            <option value="2">40%</option>
                                            <option value="2">50%</option>   
                                        </select><p></p>
                                        <label>Producto en Promocion</label>
                                        <input placeholder="codigo" type="text" class="form-control"><p></p>
                                        <!--label>Nombre de la Promocion</label>
                                        <input placeholder="Nombre" type="text" class="form-control"><p></p-->
                                    </div>
                                    <button type="submit" class="btn btn-block btn-success">Agregar Promocion</button>

                                </div>
                            </div>
                    </div>
                    <!-- AQUI EMPEZAMOS A AGREGAR DISEÑO DEL CENTRO -->
                    <div class="col-sm-12 col-md-8 col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Promociones</h4>
                            </div>
                            <div class="table-responsive">
                                <table class="table" id="contenido_tabla">
                                    <thead>
                                        <tr>
                                            <th>Foto</th>
                                            <th>Producto</th>
                                            <th>Codigo</th>
                                            <th>descuento</th>
                                            <th scope="col">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!--MODALS-->
                <!--MODAL EDITAR-->
               
                <!--MODAL ELIMINAR-->
                <!--div id="modal_eliminar" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel">Eliminar la promocion</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <h4>¿Está seguro de eliminar la promocion de este producto?</h4>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-warning" data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-success">Guardar cambios</button>
                                            </div>
                                        </div><
                                    </div>
                </div-->
                
                
            </div>
        </div>


        <!--FIN CONTENEDOR -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    </div>

    <!-- TODOS LOS ENLACES DE SCRIPTS -->
    <?php
    include '../../../componentes/scripts.php';
    ?>
    <script src="../../../inc/funciones/promociones/app.js"></script>
    <!--script src="../../../inc/funciones/promociones/guardar_promocion.js"></script-->
    <!-- FIN DE SCRIPTS -->
</body>

</html>