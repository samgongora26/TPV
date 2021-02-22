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
           
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <!-- Input de Busqueda con Codigo de Barras -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Buscar Producto con Codigo de Barras</h4>
                            <h6 class="card-subtitle">Ingresa Codigo de Barras</h6>
                            <form class="mt-4">
                                <div class="form-group">
                                    <label>Codigo de Barras</label>
                                    <input type="text"  class="form-control">
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-info">Buscar</button>
                                </div>
                            </form>
                        </div>
                        <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Producto</th>
                                            <th scope="col">Stock</th>
                                            <th scope="col">Cantidad a imprimir</th>
                                            <th scope="col">Imagen</th>
                                            <th scope="col">Proveedor</th>
                                            <th scope="col">Precio</th>
                                            <th scope="col">Categoria</th>
                                            <th scope="col">Descripción</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td><i class="fas fa-check-circle"></i></td>
                                            <td><i class="fas fa-check-circle"></i></td>
                                            <td><i class="fas fa-check-circle"></i></td>
                                            <td><i class="fas fa-check-circle"></i></td>
                                            <td><i class="fas fa-check-circle"></i></td>
                                        </tr>
                                    </tbody>
                                </table>
                        </div>
                        <div class="row">
                            <div class="col-md-9">
                                <div class="text-right">
                                    <button type="submit" class="btn btn-info">Otro Producto</button>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="text-right">
                                    <button type="submit" class="btn btn-info">Previsualizar  <i class="fas fa-eye"></i></button>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                    <!-- Fin Input de Busqueda con Codigo de Barras -->


                    <!--Inicio de card Visualizar Codigo de Barras-->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-4">
                                        <h4 class="card-title">Visualización de Codigo de Barras</h4>
                                    </div>

                                    <!--Aqui se programa lo de para ver los codigos de barras-->
                                    Codigos de barras chidos ;v
                                    <img src="../../imagenes/inventario/barrasejemplo.jpeg" alt="">
                                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

                                    <div class="text-right">
                                        <button type="submit" class="btn btn-info">Imprimir</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Fin de card Visualizar Codigo de Barras-->


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