<?php 
    //Se hace llamado a la sesion
    include("../../../inc/funciones/admin/sesion.php");
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <?php
    include '../../../componentes/head.php';
    //se hace llamado a la sesión
    include("../../../inc/funciones/admin/sesion.php");
    //Se obtienen los datos del usuario si existe la sesión
    include("../../../inc/funciones/admin/datos_usuario.php")
    ?>
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>

<body class="bg-dark" >
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- CONTENEDOR -->
        <div class="page-wrapper " >
            <div class="container-fluid bg-dark "style=" height: 100vh;">
                <!-- AQUI EMPEZAMOS A AGREGAR DISEÑO DEL CENTRO -->
                <div class="col-sm-10 col-md-6 col-lg-6 mx-auto ">
                    <div class="card ">
                        <div class="card-body">
                        <div id="mensaje2"></div>
                            <img class="d-flex rounded mx-auto" src="../../assets/images/users/<?php echo $usr["fotografia"];?>" alt="Generic placeholder image" width="60">
                            <hr>
                            <form action="" id="formulario" method="POST">
                            <h4>Cerrar Caja</h4>
                            <input id="user" name="user" type="text" placeholder="Usuario" required>
                            <input id="pass" name="pass" type="password" placeholder="Contraseña" required>
                            <input type="text" id="user_actual" value="<?php echo $usr["id_usuario"]?>" hidden>
                            <input id="monto" name="monto" type="text" placeholder="Monto final de la caja" required onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
                            <button type="submit" class="btn btn-info">Cerrar caja</button>
                            <a href="../home/home.php" class="btn btn-danger">Cancelar</a>
                            
                            </form>
                        </div>
                    </div>        
                </div>
            </div>
        </div>


        <!--FIN CONTENEDOR -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

    <!-- TODOS LOS ENLACES DE SCRIPTS -->
    <?php
    include '../../../componentes/scripts.php';
    ?>
    <!-- FIN DE SCRIPTS -->
    <script src="../../../inc/funciones/cajas/app_cerrar.js"></script>
</body>

</html>