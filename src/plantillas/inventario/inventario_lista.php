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
            <div class="conteiner-fluid">
            <!-- AQUI EMPEZAMOS A AGREGAR DISEÑO DEL CENTRO -->
            <div class="container">
            <div class="row">
            <div class="col-sm-1 col-md-1 col-lg-1"></div>
                <div class="col-sm-11 col-md-11 col-lg-11">
                    <!-- Input de Busqueda de productos -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Buscar Producto</h4>
                            <h6 class="card-subtitle">Ingresa Codigo de Barras o Nombre del Producto</h6>
                            <form class="mt-4">
                                <div class="form-group">
                                    <label>Codigo de Barras</label>
                                    <input type="text"  class="form-control">
                                    <label>Nombre</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-info">Buscar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Fin Input de Busqueda de productos -->

                    
                    <!--Tabla de productos-->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Productos de Tienda</h4>
                                <h6 class="card-subtitle">Resultado de Productos</h6>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Imagen</th>
                                            <th scope="col">Codigo de Barras</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Proveedor</th>
                                            <th scope="col">Stock</th>
                                            <th scope="col">Precio Compra</th>
                                            <th scope="col">Precio Venta</th>
                                            <th scope="col">Estado</th>
                                            <th scope="col">Ver</th>
                                            <th scope="col">Editar</th>
                                            <th scope="col">Imprimir codigo de Barras</th>
                                            <th scope="col">Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td><i class="fas fa-check-circle"></i></td>
                                            <td><i class="fas fa-eye"></i></td>
                                            <td><i class="fas fa-edit"></i></td>
                                            <td><i class="fas fa-print"></i></td>
                                            <td><i class="fas fa-trash"></i></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td><i class="fas fa-check-circle"></i></i></td>
                                            <td><i class="fas fa-eye"></i></td>
                                            <td><i class="fas fa-edit"></i></td>
                                            <td><i class="fas fa-print"></i></td>
                                            <td><i class="fas fa-trash"></i></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Fin Tabla de productos-->
                </div>
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
    <!-- FIN DE SCRIPTS -->
</body>

</html>