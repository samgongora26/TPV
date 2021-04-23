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

        <div class="page-wrapper">
            <div class="container-fluid">
            <!-- AQUI EMPEZAMOS A AGREGAR DISEÑO DEL CENTRO -->
            <ol class="breadcrumb ">
                <li class="breadcrumb-item"><a href="inventario_lista.php">Inventario</a></li>
                <li class="breadcrumb-item active" id="nombre">Producto</li>
            </ol>
                <!-- Row de tarjetas superiores -->
                <div class="row">
                    <!--Tarjeta de proveedor-->
                    
                    <!--
                    <div class="col-md-12">
                        <div class="card text-white bg-dark">
                            <div align="center" class="card-header">
                                <h4 class="mb-0 text-white" id="nombre">NAME</h4>
                            </div>
                            <div class="card-body">
                                <div align="center"><img style="border-radius: 50px; color: black;" src="../../imagenes/proveedores/logosabritas.jpg" width="100" height="100" ></div><br>
                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-4">
                                        <a href="javascript:void(0)" class="btn btn-secondary">Proovedor</a>
                                    </div>
                                    <div class="col-md-5">
                                        <a href="javascript:void(0)" class="btn btn-primary">Editar Producto <i class="fas fa-edit"></i></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    -->
                    <!--Fin Tarjeta de proveedor-->

                    <!--Tarjeta de contacto-->
                    <div class="col-md-12" id="tablaver">
                        <div class="card border-dark">
                            <div align="center" class="card-header bg-dark">
                                <h4 class="mb-0 text-white">INFORMACIÓN DE PRODUCTO</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <h3>Descripción: </h3>
                                    </div>
                                    <div class="col-md-4">
                                        <p id="descripcion"><!--se inyecta el telefono --></p>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <h3>Codigo de barras: </h3>
                                    </div>
                                    <div class="col-md-4">
                                        <p id="codigo"><!--se inyecta el correo--></p>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <h3>Precio Costo: </h3>
                                    </div>
                                    <div class="col-md-7">
                                        <p id="preciocosto"><!-- se inyecta la direccion--></p>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <h3>Precio Venta: </h3>
                                    </div>
                                    <div class="col-md-7">
                                        <p id="precioventa"><!-- se inyecta la direccion--></p>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <h3>Precio Mayoreo: </h3>
                                    </div>
                                    <div class="col-md-7">
                                        <p id="preciomayoreo"><!-- se inyecta la direccion--></p>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <h3>Unidad: </h3>
                                    </div>
                                    <div class="col-md-7">
                                        <p id="unidad"><!-- se inyecta la direccion--></p>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <h3>Fecha de caducidad: </h3>
                                    </div>
                                    <div class="col-md-7">
                                        <p id="caducidad"><!-- se inyecta la direccion--></p>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <h3>Stock en almacen: </h3>
                                    </div>
                                    <div class="col-md-7">
                                        <p id="stockactual"><!-- se inyecta la direccion--></p>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <h3>Stock mínimo: </h3>
                                    </div>
                                    <div class="col-md-7">
                                        <p id="stockmin"><!-- se inyecta la direccion--></p>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <h3>Stock máximo: </h3>
                                    </div>
                                    <div class="col-md-7">
                                        <p id="stockmax"><!-- se inyecta la direccion--></p>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <h3>Marca: </h3>
                                    </div>
                                    <div class="col-md-7">
                                        <p id="marca"><!-- se inyecta la direccion--></p>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <h3>Estado: </h3>
                                    </div>
                                    <div class="col-md-7">
                                        <p id="estado"><!-- se inyecta la direccion--></p>
                                    </div>
                                </div>



                                <div class="card border-dark">
                                    <div align="center" class="card-header bg-dark">
                                        <div class="col-md-5">
                                            <button  class="btn btn-light">Editar Información del Producto <i class="fas fa-edit"></i></button>
                                        </div>
                                    </div>
                                </div>
                                

                                <!-- Modal editar -->
                                <div id="edit-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <div class="modal-body">

                                                <form class="pl-3 pr-3" action="#" id="form-modal-edit" name="for-modal-edit">

                                                    <div class="form-group">
                                                        <label>Codigo de Barras</label>
                                                        <input class="form-control" type="text" id="edit_codigo" name="edit_codigo"
                                                            required="" placeholder="Codigo de barras">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Nombre Producto</label>
                                                        <input class="form-control" type="text" id="edit_nombre" name="edit_nombre"
                                                            required="" placeholder="Nombre Producto">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Descripción</label>
                                                        <input class="form-control" type="text" required=""
                                                            id="edit_descripcion" name="edit_descripcion" placeholder="Stock">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Precio de Venta</label>
                                                        <input class="form-control" type="text" required=""
                                                            id="edit_precioventa" name="edit_venta">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Precio Costo</label>
                                                        <input class="form-control" type="text" required=""
                                                            id="edit_costo" name="edit_costo" placeholder="Precio de Venta">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Precio de Mayoreo</label>
                                                        <input class="form-control" type="text" required=""
                                                            id="edit_mayoreo" name="edit_mayoreo">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Stock en Almacen</label>
                                                        <input class="form-control" type="text" required=""
                                                            id="edit_stock" name="edit_stock" placeholder="Precio de Venta">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Stock Mínimo</label>
                                                        <input class="form-control" type="text" required=""
                                                            id="edit_stockmin" name="edit_stockmin" placeholder="Precio de Venta">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Stock Máximo</label>
                                                        <input class="form-control" type="text" required=""
                                                            id="edit_stockmax" name="edit_stockmax" placeholder="Precio de Venta">
                                                    </div>

                                                    <div class="form-group text-center">
                                                        <button class="btn btn-primary" type="submit">Guardar Cambios</button>
                                                    </div>

                                                </form>

                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div>
                                <!-- Fin modal editar -->

                            </div>
                            
                        </div>
                        
                    </div>
                    <!--Fin Tarjeta de contacto-->
                </div>
                <!--Fin Row de tarjetas superiores -->

                <!--Tarjeta de Balance-->
                <!--
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-12">
                        <div class="card border-success">
                            <div align="center" class="card-header bg-success">
                                    <h4 class="mb-0 text-white">Balance</h4>
                            </div>
                            <div align="center" class="card-body">
                                <h2 class="card-title"><i class="fas fa-dollar-sign"></i> 00.00</h2>
                                <a href="javascript:void(0)" class="btn btn-primary">Comprar producto <i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>-->
                <!-- Fin Tarjeta Balance-->


            </div>
        </div>


        <!--FIN CONTENEDOR -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    </div>

    <!-- TODOS LOS ENLACES DE SCRIPTS -->
    <?php
        include '../../../componentes/scripts.php';
    ?>
           <script src="../../../inc/funciones/inventario/inventario_ver.js"></script>
    <!-- FIN DE SCRIPTS -->
</body>

</html>
