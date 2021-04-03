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
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <!-- Input de Crear Nuevo Usuario -->
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Agregar Nuevo Usuario</h4>
                                        <h6 class="card-subtitle">Rellena los campos para agregar un nuevo usuario</h6>
                                        <div class="mensaje" id="mensaje"></div>
                                        <form id="formulario" class="mt-4">
                                            <div class="form-group">
                                                <!--label>Clave Usuario</label>
                                                <input id="clave" type="text" placeholder="Ingresa el numero clave del usuario" class="form-control"-->
                                                <label>Nombres</label>
                                                <input id="nombres" type="text" placeholder="Ingresa nombre(s) del usuario" minlength="2" class="form-control" required="">
                                                <label>apellidos</label>
                                                <input id="apellidos" type="text" placeholder="Ingresa apellidos del usuario" minlength="2" class="form-control" required="">
                                                <label>Telefono</label>
                                                <input id="telefono" type="text" placeholder="Ingresa numero de telefono de usuario" minlength="10"  maxlength="12"  class="form-control" required="">
                                                <label>Correo</label>
                                                <input id="correo" type="email" placeholder="Ingresa correo del cliente" minlength="5" class="form-control" required="">
                                                <label>Usuario</label>
                                                <input id="usuario" type="text" placeholder="Usuario" minlength="5" class="form-control" required="">
                                                <label>Contraseña</label>
                                                <input id="contrasenia" type="password" placeholder="Contraseña" minlength="5" class="form-control" required="">
                                                <label>Fotografia</label>
                                                <input type="file" class="form-control-file" name="fotografia" id="fotografia" required="">
                                                <div class="text-right mt-3">
                                                    <button type="submit" class="btn btn-success">Guardar</button>
                                                    <button type="reset" class="btn btn-dark">reiniciar formulario</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Fin Input de Crear Nuevo Cliente -->
                            <!--Tabla de usuarios-->
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Tabla de Usuarios</h4>
                                        <h6 class="card-subtitle">Resultado de Usuarios...</h6>
                                        <div id="mensaje2"></div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Foto</th>
                                                    <th scope="col">Nombres</th>
                                                    <th scope="col">Telefono</th>
                                                    <th scope="col">Correo</th>
                                                    <th scope="col">Usuario</th>
                                                    <th scope="col">Estado</th>
                                                    <th scope="col">Editar o eliminar</th>
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
            <script src="../../../inc/funciones/usuarios/usuarios_agregar.js"></script>
            <script src="../../../inc/funciones/usuarios/app.js"></script>
        <!-- FIN DE SCRIPTS -->
    </body>

</html>