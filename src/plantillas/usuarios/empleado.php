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
                                            <img class="align-self-start w-40 mr-3" src="../../assets/images/users/<?php echo $usr["fotografia"];?> " alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="mt-0"><strong>Nombre apellido</strong></h5>
                                                <ul>
                                                    <li><p><label class="fa fa-phone"></label> 1234567890</p></li>
                                                    <li><p><label class="fa fa-envelope"></label> email@email.com</p></li>
                                                    <li><p><label class="fa fa-user"></label> Admin</p></li>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck4" disabled="" checked="">
                                                        <label class="custom-control-label" for="customCheck4">Activo</label>
                                                    </div>
                                                </ul>
                                                <hr>
                                               
                                                <p class="muted-text">Los usaurios no son modificables aqui. para cambiar los datos del usuario, <a href="usuarios_ver.php"> dar click aquí</a></p>
                                                
                                            </div>
                                        </div>
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
                                                    <hr>
                                                    <button type="submit" class="btn btn-block btn-danger"><label class="fa fa-trash"></label> Eliminar empleado</button>
                                                    <!--button type="reset" class="btn btn-dark">reiniciar formulario</button-->
                                                </div>
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
            <script src="../../../inc/funciones/usuarios/empleados_agregar.js"></script>
            <script src="../../../inc/funciones/usuarios/app_empleados.js"></script>
        <!-- FIN DE SCRIPTS -->
    </body>

</html>