<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <?php
        include '../../componentes/head.php';
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
            include '../../componentes/header.php';
        ?>
        <!-- FIN HEADER -->
        <!-- ============================================================== -->


        <!-- ============================================================== -->
        <!-- BARRA IZQUIERDA  -->
        <?php
            include '../../componentes/barra_izquierda.php';
        ?>
        <!-- FON BARRA IZQUIERDA  -->
        <!-- ============================================================== -->

        
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- CONTENEDOR -->
        <div class="page-wrapper">
            <div class="conteiner-fluid">
            <!-- AQUI EMPEZAMOS A AGREGAR DISEÑO DEL CENTRO -->
            <button type="button" class="btn btn-primary" style='width:280px; height:230px; margin:10px'><i class="fas fa-tag"></i><p></p>Ventas</button>
   			<button type="button" class="btn btn-secondary" style='width:200px; height:150px; margin:10px'><i class="fas fa-gift"></i><p></p>Promociones</button>
			<button type="button" class="btn btn-success" style='width:200px; height:150px; margin:10px'><i class="fas fa-pallet"></i><p></p>Inventario</button>
			<button type="button" class="btn btn-info" style='width:200px; height:150px; margin:10px'><i class="fas fa-clipboard-list"></i><p></p>Reportes</button>
			<button type="button" class="btn btn-warning" style='width:200px; height:150px; margin:10px'><i class="fas fa-users"></i><p></p>Clientes</button>
			<button type="button" class="btn btn-danger" style='width:200px; height:150px; margin:10px'><i class="fas fa-donate"></i><p></p>Compras</button>
			<button type="button" class="btn btn-light" style='width:200px; height:150px; margin:10px'><i class="fas fa-truck-moving"></i><p></p>Proveedores</button>
			<button type="button" class="btn btn-dark" style='width:200px; height:150px; margin:10px'><i class="fas fa-chart-line"></i><p></p>Finanzas</button>
            </div>
        </div>


        <!--FIN CONTENEDOR -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    </div>

    <!-- TODOS LOS ENLACES DE SCRIPTS -->
    <?php
        include '../../componentes/scripts.php';
    ?>
    <!-- FIN DE SCRIPTS -->
</body>

</html>