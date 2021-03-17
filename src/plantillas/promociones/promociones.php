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
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Promociones</h4><p></p>
                            <button type="submit" class="btn btn-info">Agregar Promocion</button>
                        </div>
                        <p></p>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Promocion</th>
                                        <th>Codigo</th>
                                        <th>Nombre</th>
                                        <th scope="col">Editar</th>
                                        <th scope="col">Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#edit-modal"><i class="icon-pencil"></i></button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-primary"><i class="icon-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#edit-modal"><i class="icon-pencil"></i></button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-primary"><i class="icon-trash"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <!-- EMPIEZA -->
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Boton de Agregar</h4>

                                <div class="form-group mb-4">
                                    <label class="mr-sm-2" for="inlineFormCustomSelect">Tipo de Promocion</label>
                                    <select class="custom-select mr-sm-2">
                                        <option selected value="1">2x1</option>
                                        <option value="2">3x2</option>
                                    </select><p></p>
                                    <label>Porcentaje de descuento</label>
                                    <input placeholder="%" type="text" class="form-control"><p></p>
                                    <label>Producto en Promocion</label>
                                    <input placeholder="Producto" type="text" class="form-control"><p></p>
                                    <label>Nombre de la Promocion</label>
                                    <input placeholder="Nombre" type="text" class="form-control"><p></p>
                                </div>
                                <button type="submit" class="btn btn-info">Agregar Promocion</button>

                            </div>
                        </div>
                    </div>
                    <!-- TERMINA -->
                    <!-- EMPIEZA -->
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Boton de editar</h4>
                                <div class="form-group mb-4">
                                    <label class="mr-sm-2" for="inlineFormCustomSelect">Tipo de Promocion</label>
                                    <select class="custom-select mr-sm-2">
                                        <option selected value="1">2x1</option>
                                        <option value="2">3x2</option>
                                    </select><p></p>
                                    <label>Porcentaje de descuento</label>
                                    <input placeholder="%" type="text" class="form-control"><p></p>
                                    <label>Nombre de la Promocion</label>
                                    <input placeholder="Nombre" type="text" class="form-control"><p></p>
                                </div>
                                <button type="submit" class="btn btn-info">Editar Promocion</button>
                            </div>
                        </div>
                    </div>
                    <!-- TERMINA -->
                    <!-- EMPIEZA -->
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div>
                                    <h4 class="card-title">Boton de Eliminar</h4>
                                    <label>Nombre de la Promocion</label>
                                </div>
                                <button type="submit" class="btn btn-info">Eliminar Promocion</button>
                            </div>
                        </div>
                    </div>
                    <!-- TERMINA -->
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