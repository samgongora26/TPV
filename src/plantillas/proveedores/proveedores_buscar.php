<?php 
    //Se hace llamado a la sesion
    include("../../../inc/funciones/admin/sesion.php");
    include("../../../inc/funciones/admin/rol_admin.php");
?>
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
                
                <div class="row">
                
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <!-- Input de Busqueda de preveedores -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Buscar Proveedores</h4>
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
                        <!-- Fin Input de Busqueda de preveedores -->

                        
                        
                    </div>
                    <!--Tabla de proveedores-->
                    <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Tabla de Proveedores</h4>
                                    <h6 class="card-subtitle">Resultado de proveedores</h6>
                                </div>
                                <div class="table-responsive">
                                    <div id="mensaje"></div>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Clave</th>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Razón Social</th>
                                                <th scope="col">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody id="contenido_tabla" class="text-center">
                                        <!--   <tr>
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
                                                            <label>Clave</label>
                                                            <input class="form-control" type="text" id="edit_clave" name="edit_clave"
                                                                required="" placeholder="Clave">
                                                    

                                                    
                                                            <label>Nombre Proveedor</label>
                                                            <input class="form-control" type="text" id="edit_nombre" name="edit_nombre"
                                                                required="" placeholder="Nombre Proveedor">
                                                

                                                    
                                                            <label>Razón Social</label>
                                                            <input class="form-control" type="text" required=""
                                                                id="edit_razon" name="edit_razon" placeholder="Razon Social">
                                                

                                                    
                                                            <label>Dirección</label>
                                                            <input class="form-control" type="text" required=""
                                                                id="edit_direccion" name="edit_direccion" placeholder="Direccion">
            
                                
                                                            <label>Telefono</label>
                                                            <input class="form-control" type="text" required=""
                                                                id="edit_telefono" name="edit_telefono" placeholder="Telefono">
                                        

                                            
                                                            <label>RFC</label>
                                                            <input class="form-control" type="text" required=""
                                                                id="edit_rfc" name="edit_rfc" placeholder="RFC">
                                            

                                                    
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
                        <!-- Fin Tabla de proveedores-->
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
        <script src="../../../inc/funciones/proveedores/app.js"></script>
    <!-- FIN DE SCRIPTS -->
</body>

</html>