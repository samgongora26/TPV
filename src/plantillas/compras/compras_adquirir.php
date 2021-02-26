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
                        <!-- Input de Busqueda de preveedores -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Datos de nueva compra</h4>
                                <form class="mt-4" id="form_adquirir_compra">
                                    <!--div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputGroupSelect01">Fecha</label>
                                        </div>
                                        <input id="fecha" name="fecha" type="date" class="form-control" value="2018-05-13">
                                    </div-->

                                    <!--div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputGroupSelect01">referencia</label>
                                        </div>
                                        <input id="referencia" name="referencia" type="text" class="form-control" placeholder="10101010101" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                        </div>
                                    </div-->

                                    <!--div class="input-group mb-3">
                                        <textarea class="form-control" aria-label="With textarea" placeholder="notas"></textarea>
                                    </div-->

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputGroupSelect01">Proveedor</label>
                                        </div>
                                        <select class="custom-select" name="proveedor" id="proveedor">
                                            <option selected>Choose...</option>
                                            <option value="1">juan perez</option>
                                            <option value="2"> pedrito</option>
                                            <option value="3">apple</option>
                                        </select>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputGroupSelect01">Codigo Del Producto</label>
                                        </div>
                                        <input id="codigo" name="codigo" type="text" class="form-control" placeholder="C10101010" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    </div>

                                    <div class="input-group mb-3">
                                        <!--ul class="list-group">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputGroupSelect01">metodo de pago</label>
                                            </div>
                                            <select class="custom-select" id="inputGroupSelect01">
                                                <option selected>opciones</option>
                                                <option value="1">efectivo</option>
                                                <option value="2"> credito</option>
                                                <option value="3">tarjeta de regalo</option>
                                            </select>
                                        </ul-->
                                        <ul class="list-group mx-auto">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputGroupSelect01">cantidad</label>
                                            </div>
                                            <input id="cantidad" name="cantidad" type="text" class="form-control" aria-label="Username" placeholder="1" aria-describedby="basic-addon1">
                                        </ul>
                                        <ul class="list-group mx-auto">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputGroupSelect01">monto de pago</label>
                                            </div>
                                            <input id="monto" name="monto" type="text" class="form-control" aria-label="Username" placeholder="$" aria-describedby="basic-addon1">
                                        </ul>
                                        <ul class="list-group ">
                                            <div class="input-group-prepend mx-auto ">
                                                <label class="input-group-text bg-primary text-white" for="inputGroupSelect01">Por pagar:</label>
                                            </div>
                                            <input id="por_pagar" name="por_pagar" disabled type="text" class="form-control btn-rounded  bg-warning" aria-label="Username" aria-describedby="basic-addon1" value="$">
                                        </ul>
                                        <button type="submit" class="btn btn-success mx-auto"> Comprar <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
                                                <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z" /><path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z" /></svg>
                                        </button>
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                        <!-- Fin Input de Busqueda de preveedores -->
                    </div>
                
                   
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="card-body bg-white">
                            <h4 class="card-title">Productos comprados</h4>
                            <div class="card-text">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">producto</th>
                                            <th scope="col">stock</th>
                                            <th scope="col">cantidad</th>
                                            <th scope="col">precio compra</th>
                                            <th scope="col">precio venta</th>
                                            <th scope="col">total compra</th>
                                            <th scope="col"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash2-fill" viewBox="0 0 16 16">
                                                <path d="M2.037 3.225A.703.703 0 0 1 2 3c0-1.105 2.686-2 6-2s6 .895 6 2a.702.702 0 0 1-.037.225l-1.684 10.104A2 2 0 0 1 10.305 15H5.694a2 2 0 0 1-1.973-1.671L2.037 3.225zm9.89-.69C10.966 2.214 9.578 2 8 2c-1.58 0-2.968.215-3.926.534-.477.16-.795.327-.975.466.18.14.498.307.975.466C5.032 3.786 6.42 4 8 4s2.967-.215 3.926-.534c.477-.16.795-.327.975-.466-.18-.14-.498-.307-.975-.466z" /></svg>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">computadora</th>
                                            <td>10</td>
                                            <td>2</td>
                                            <td>1000</td>
                                            <td>1500</td>
                                            <td>2000</td>
                                            <td><button type="button" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" /></svg></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">computadora</th>
                                            <td>10</td>
                                            <td>2</td>
                                            <td>1000</td>
                                            <td>1500</td>
                                            <td>2000</td>
                                            <td><button type="button" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" /></svg></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">computadora</th>
                                            <td>10</td>
                                            <td>2</td>
                                            <td>1000</td>
                                            <td>1500</td>
                                            <td>2000</td>
                                            <td><button type="button" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" /></svg></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
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
            <script src="../../../inc/funciones/compras/compras_adquirir.js"></script>
        <!-- FIN DE SCRIPTS -->
    </body>

</html>