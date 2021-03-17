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
                <!-- EMPIEZA RESUMEN DE VENTAS-->
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Resumen de ventas</h4>

                            <div class="row">
                                <div class="col-sm-4 col-md-4 col-lg-4">

                                    <div class="card text-white bg-success">
                                        <div clas="card-header">
                                        <p></p>
                                            <h4 class="text-center text-white">Ingreso Del Dia</h4>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="text-center text-white">00.0</h4>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-4">

                                    <div class="card text-white bg-success">
                                        <div clas="card-header">
                                            <p></p>
                                            <h4 class="text-center text-white">Ingreso Del Mes</h4>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="text-center text-white">00.0</h4>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-4">

                                    <div class="card text-white bg-success">
                                        <div clas="card-header">
                                        <p></p>
                                            <h4 class="text-center text-white">Ingresos Totales</h4>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="text-center text-white">00.0</h4>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-sm-4 col-md-4 col-lg-4">

                                    <div class="card text-white bg-success">
                                        <div clas="card-header">
                                        <p></p>
                                            <h4 class="text-center text-white">Empleado con mas ventas</h4>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="text-center text-white">EMPLEADO</h4>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-sm-4 col-md-4 col-lg-4">

                                    <div class="card text-white bg-success">
                                        <div clas="card-header">
                                        <p></p>
                                            <h4 class="text-center text-white">Producto Mas Vendido</h4>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="text-center text-white">PRODUCTO</h4>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- TERMINA RESUMEN DE VENTAS -->

                <!-- EMPIEZA RESUMEN DE compras-->
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Resumen de compras</h4>
                            <div class="row">
                                <div class="col-sm-4 col-md-4 col-lg-4">

                                    <div class="card text-white bg-success">
                                        <div clas="card-header">
                                        <p></p>
                                            <h4 class="text-center text-white">Adeudos con Proveedores</h4>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="text-center text-white">00.0</h4>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-4">

                                    <div class="card text-white bg-success">
                                        <div clas="card-header">
                                            <p></p>
                                            <h4 class="text-center text-white">Sueldos Por Pagar</h4>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="text-center text-white">00.0</h4>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-4">

                                    <div class="card text-white bg-success">
                                        <div clas="card-header">
                                        <p></p>
                                            <h4 class="text-center text-white">Ingresos Totales</h4>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="text-center text-white">00.0</h4>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- TERMINA RESUMEN DE compras -->


                <!-- EMPIEZA -->
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Balance General</h4>
                            <div class="row">
                                <div class="form-group col-sm-5 col-md-5 col-lg-5">
                                    <h3 class="card-subtitle">Activos</h3>
                                    <label>Caja</label>
                                    <input placeholder="Producto" type="text" id="" class="form-control"><p></p>
                                    <label>Inventario</label>
                                    <input placeholder="Nombre" type="text" id="" class="form-control"><p></p>
                                    <label>Clientes</label>
                                    <input placeholder="Nombre" type="text" id="" class="form-control"><p></p>
                                    <label>Adeudos</label>
                                    <input placeholder="Nombre" type="text" id="" class="form-control"><p></p>
                                    
                                </div>

                                <div class="form-group col-sm-5 col-md-5 col-lg-5">
                                <h3 class="card-subtitle">Pasivos</h3>
                                    <label>Proveedores</label>
                                    <input placeholder="Nombre" type="text" id="" class="form-control"><p></p>
                                    <label>Impuestos por pagar</label>
                                    <input placeholder="Nombre" type="text" id="" class="form-control"><p></p>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-info">Obtener Balance</button>
                        </div>
                    </div>
                </div>
                <!-- TERMINA -->





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