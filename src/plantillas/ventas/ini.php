<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <?php
    include '../../../componentes/head.php';
    ?>
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>

<body>
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- CONTENEDOR -->
        <div class="page-wrapper">
            <div class="container-fluid">
                <!-- AQUI EMPEZAMOS A AGREGAR DISEÑO DEL CENTRO -->
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4>Abrir Caja</h4>
                            <form action="" method="POST">
                            <input name="usuario" type="text" placeholder="Usuario">
                            <input name="contra" type="password" placeholder="Contraseña">
                            <input name="dinero" type="text" placeholder="Dinero en Caja">
                            <button type="submit" class="btn btn-info">Abrir Caja</button>
                            <button type="submit" class="btn btn-danger">Cancelar</button>
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
</body>

</html>