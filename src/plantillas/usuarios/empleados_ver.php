<?php 
    //Se hace llamado a la sesion
    include("../../../inc/funciones/admin/sesion.php");
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
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <!-- Input de Crear Nuevo Usuario -->
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Agregar Nuevo empleado</h4>
                                        <h6 class="card-subtitle">Rellena los campos para crear un empleado</h6>
                                        <div class="mensaje" id="mensaje"></div>
                                        <form id="formulario" class="mt-4">
                                            <div class="form-group">
                                                <!--label>Clave Usuario</label>
                                                <input id="clave" type="text" placeholder="Ingresa el numero clave del usuario" class="form-control"-->
                                                <div class="form-group mb-4">
                                                    <label for="exampleFormControlSelect1">Usuario</label>
                                                    <select class="form-control" id="contenido_usuario" >
                                                        <!--AQUI SE INSERTAN LOS DATOS DEL SELECT DE USUARIOS-->
                                                    </select>
                                                </div>
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
                                                    <button type="submit" class="btn btn-success">Guardar</button>
                                                    <!--button type="reset" class="btn btn-dark">reiniciar formulario</button-->
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Fin Input de Crear Nuevo Cliente -->
                            <!--Tabla de usuarios-->
                            <div class="col-8">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Empleados</h4>
                                        <div id="mensaje2"></div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Foto</th>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Usuario</th>
                                                    <th scope="col">Puesto</th>
                                                    <th scope="col">Horario</th>
                                                    <th scope="col">Editar</th>
                                                </tr>
                                            </thead>
                                            <tbody id="contenido_tabla">
                                                <!--inyeccion de los datos -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Fin Tabla de Usuarios-->
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
            <script src="../../../inc/funciones/usuarios/empleados_agregar.js"></script>
            <script src="../../../inc/funciones/usuarios/app_empleados.js"></script>
        <!-- FIN DE SCRIPTS -->
    </body>

</html>