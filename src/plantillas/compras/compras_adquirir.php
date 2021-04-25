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
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <!-- TARJETA DE AGREGAR PRODUCTOS A LA COMPRA -->
                        <!--prueba de github-->
                        <div class="card">
                            <div id="mensaje"></div>
                            <div class="card-body">
                                <h4 class="card-title">Agregar producto a la lista  </h4>
                                <form class="mt-4" id="formulario">
                                    <div class="row">
                                            <div class="col-md-8">
                                            <label>Codigo del producto</label>
                                                <div class="input-group">
                                                    
                                                    <input type="text" id="codigo_envio" class="form-control" placeholder="codigo">
                                                    <label id="" class="btn btn-secondary" data-toggle="modal" data-target="#busqueda_producto">Buscar producto
                                                        <i class="fa fa-search"></i> 
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Cantidad</label>
                                                    <input type="text" id="cantidad" class="form-control" placeholder="" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
                                                </div>
                                            </div>
                                    </div>
                                    <input type="text" id="usuario" value="<?php echo $usr["id_usuario"] ?>" hidden>
                                    <button type="" id="btn_agregar" class="btn btn-success btn-block"> Agregar a la lista</button>
                                </form>
                            </div>
                        </div>
                        <!-- Fin Input de Busqueda de preveedores -->
                    </div>
                
                   
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="card-body bg-lighr">
                            <h4 class="card-title">Detalle de la compra</h4>
                            <div class="card-text">
                                <table class="table">
                                    <thead>
                                        <div id="mensaje2"></div>
                                        <tr>
                                            <th scope="col">codigo</th>
                                            <th scope="col">producto</th>
                                            <th scope="col">stock</th>
                                            <th scope="col">cantidad</th>
                                            <th scope="col">precio compra</th>
                                            <th scope="col">total compra</th>
                                            <th scope="col"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash2-fill" viewBox="0 0 16 16">
                                                <path d="M2.037 3.225A.703.703 0 0 1 2 3c0-1.105 2.686-2 6-2s6 .895 6 2a.702.702 0 0 1-.037.225l-1.684 10.104A2 2 0 0 1 10.305 15H5.694a2 2 0 0 1-1.973-1.671L2.037 3.225zm9.89-.69C10.966 2.214 9.578 2 8 2c-1.58 0-2.968.215-3.926.534-.477.16-.795.327-.975.466.18.14.498.307.975.466C5.032 3.786 6.42 4 8 4s2.967-.215 3.926-.534c.477-.16.795-.327.975-.466-.18-.14-.498-.307-.975-.466z" /></svg>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody id="contenido_tabla">
                                        <!--tr>
                                            <td> <img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle" width="40"> </td>
                                            <th scope="row">1</th>
                                            <th scope="row">computadora</th>
                                            <td>10</td>
                                            <td>2</td>
                                            <td>1000</td>
                                            <td>2000</td>
                                            <td><button type="button" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" /></svg></button>
                                            </td>
                                        </tr-->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer bg-lighr">
                            <h5>Completar la compra</h5>
                            <div class="input-group mb-3">
                            <div id="mensaje2"></div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputGroupSelect01">Proveedor</label>
                                        </div>
                                        <select class="custom-select" name="contenido_proveedores" id="contenido_proveedores">
                                            <!AQUI SON INSERTADOS LOS DATOS DE LOS PROVEEDORES>
                                        </select>
                                    </div>
                                            <ul class="list-group mx-auto">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="inputGroupSelect01">monto de pago</label>
                                                    <input id="monto" name="monto" type="text"  class="form-control text-white bg-dark" aria-label="Username" placeholder="$" aria-describedby="basic-addon1" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
                                                    
                                                </div>
                                                
                                            </ul>
                                            <ul class="list-group ">
                                                <div class="input-group-prepend mx-auto ">
                                                    <label class="input-group-text" for="inputGroupSelect01">Por pagar:</label>
                                                    <input id="por_pagar" name="por_pagar" disabled type="text" class="form-control  bg-dark text-white" aria-label="Username" aria-describedby="basic-addon1" value="$">
                                                </div>
                                                
                                            </ul>
                                            <input type="text" id="por_pagar2" value="" hidden>
                                            <button class="btn btn-sm btn-success mx-auto" onclick="obtener_monto()"> Comprar <label class="fa fa-check"></label></button>
                                        </div>
                            </div>
                    </div> 
                

            </div>
        </div>
        </div>
        <!--FIN CONTENEDOR -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
  <!----MODAL DE BUSQUEDA DE PRODUCTO---->
  <?php include "../modal_productos/modal_productos.php"; ?>
                        
        <!-- TODOS LOS ENLACES DE SCRIPTS -->
        <?php
            include '../../../componentes/scripts.php';
        ?>
            <script src="../../../inc/funciones/compras/app.js"></script>
            <script src="../../../inc/funciones/compras/compras_adquirir.js"></script>
            <script src="../../../inc/funciones/modal_productos/app_modal_productos.js"></script>

        <!-- FIN DE SCRIPTS -->
    </body>
    
</html>