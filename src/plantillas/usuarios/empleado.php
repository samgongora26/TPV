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
                                <ol class="breadcrumb ">
                                    <li class="breadcrumb-item"><a href="empleados_ver.php">Empleados</a></li>
                                    <li class="breadcrumb-item active">Empleado...</li>
                                </ol>
                        <div class="row">
                            <!--Acerca del usuario-->
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Acerca del usuario</h5>
                                        <div class="media">
                                            
                                            <img id="fotografia" class="align-self-start w-40 mr-3"  alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="mt-0"><strong id="nombre"></strong></h5>
                                                <ul>
                                                    <li><label class="fa fa-phone"></label> <label id="telefono"></label></li>
                                                    <li><label class="fa fa-envelope"></label> <label id="email"></label></li>
                                                    <li><label class="fa fa-user"></label> <label id="usuario"></label></li>
                                                    <div class="custom-control custom-checkbox" id="est"></div>
                                                </ul>
                                                <hr>
                                                <h5 class="mt-0">Datos empleado</h5>
                                                <ul>
                                                    <li><label> Puesto actual: </label> <label id="puesto"></label></li>
                                                    <li><label> Turno actual: </label> <label id="turno"></label></li>
                                                </ul>
                                                <hr>
                                               
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                    <p class="muted-text">Los usaurios no son modificables aqui. para cambiar los datos del usuario, <a href="usuarios_ver.php"> dar click aquí</a></p>
                                    </div>
                                </div>
                            </div>
                            <!---Acerca del usuario--/-->
                            <!--Editar empleado -->
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <!-- Input de Crear Nuevo Usuario -->
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Editar al empleado</h4>
                                        <div id="mensaje"></div>
                                        <form id="formulario" class="mt-4">
                                            <div class="form-group">
                                                
                                                <div class="form-group mb-4">
                                                    <label for="exampleFormControlSelect1">Puesto</label>
                                                    <select class="form-control" id="contenido_puesto">
                                                        <!--AQUI SE INSERTAN LOS DATOS DEL SELECT DE PUESTOS-->
                                                        
                                                    </select>
                                                </div>
                                                <div class="form-group mb-4">
                                                    <label for="exampleFormControlSelect1">Horario de trabajo</label>
                                                    <select class="form-control" id="contenido_horario">
                                                        <!--AQUE SE INSERTAN LOS DATOS DEL SELECT DE HORARIOS-->
                                                    </select>
                                                </div>
                                                
                                                <div class="text-right mt-3">
                                                    <button type="submit" class="btn btn-block btn-success">Guardar</button>
                                                    <!--hr>
                                                    <button type="submit" class="btn btn-block btn-danger"><label class="fa fa-trash"></label> Eliminar empleado</button-->
                                                    
                                                </div>
                                                <input type="text" hidden id="id_empleado" value="">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--Editar empleado /-->
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
            <script src="../../../inc/funciones/usuarios/empleado_ver.js"></script>
            <script src="../../../inc/funciones/usuarios/empleado_actualizar.js"></script>
        <!-- FIN DE SCRIPTS -->
    </body>

</html>