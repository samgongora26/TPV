        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!--HOME-->
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="../home/home.php"
                                aria-expanded="false"><i class="fas fa-home"></i><span
                                    class="hide-menu">Mi punto de ventas</span></a></li>
                        <li class="list-divider"></li>
                        
                        
                        <!--VENTAS-->
                        <li class="sidebar-item"> <a class="sidebar-link" href="../ventas/ini.php"
                                aria-expanded="false"><i class="fas fa-tag"></i><span
                                    class="hide-menu">Ventas
                                </span></a>
                        </li>

                        
                        <li class="sidebar-item"> 
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <i class="fas fa-chart-line"></i>
                                <span class="hide-menu">Reportes y Finanzas</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item">
                                    <a href="../finanzas/estadisticas_generales.php" class="sidebar-link">
                                        <span class="hide-menu">
                                        <i class="fas fa-chart-line"></i>Estadísticas</span>
                                    </a>
                                </li>
                                <li class="sidebar-item"><a href="../finanzas/estadisticas_dia.php" class="sidebar-link"><span
                                            class="hide-menu"><i class="fas fa-calendar"></i>Estadísticas día</span></a>
                                </li>
                                <li class="sidebar-item"><a href="../finanzas/finanzas.php" class="sidebar-link"><span
                                            class="hide-menu"><i class="fas fa-file-alt"></i>Reportes</span></a>
                                </li>
                            </ul>
                        </li>

                        <!--INVENTARIO-->
                        <li class="sidebar-item"> 
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <i class="fas fa-pallet"></i>
                                <span class="hide-menu">Inventario</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item">
                                    <a href="../inventario/inventario_lista.php" class="sidebar-link">
                                        <span class="hide-menu">
                                        <i class="fas fa-boxes"></i>Buscar Producto</span>
                                    </a>
                                </li>
                                <li class="sidebar-item"><a href="../inventario/inventario_agregar_producto.php" class="sidebar-link"><span
                                            class="hide-menu"><i class="fas fa-dolly"></i>Agregar Producto</span></a>
                                </li>
                                <!--<li class="sidebar-item"><a href="../inventario/inventario_cbarras.php" class="sidebar-link"><span
                                            class="hide-menu"><i class="fas fa-barcode"></i>Codigo de Barras</span></a>
                                </li>-->
                                <li class="sidebar-item"><a href="../inventario/inventario_agregar_categoria.php" class="sidebar-link"><span
                                            class="hide-menu"><i class="fas fa-clone"></i>Agregar Categoria</span></a>
                                </li>
                                <li class="sidebar-item"><a href="../inventario/inventario_lista_categoria.php" class="sidebar-link"><span
                                            class="hide-menu"><i class="fas fa-list-alt"></i>Lista de Categorias</span></a>
                                </li>
                                <li class="sidebar-item"><a href="../inventario/inventario_agregar_marcas.php" class="sidebar-link"><span
                                            class="hide-menu"><i class="fas fa-cart-plus"></i>Agregar Marca</span></a>
                                </li>
                                <li class="sidebar-item"><a href="../inventario/inventario_lista_marcas.php" class="sidebar-link"><span
                                            class="hide-menu"><i class="fas fa-list"></i>Lista de Marcas</span></a>
                                </li>
                            </ul>
                        </li>

                        <!--PROMOCIONES-->
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="../promociones/promociones.php"
                                aria-expanded="false"><i class="fas fa-gift"></i><span
                                    class="hide-menu">Promociones</span></a>
                        </li>

                        <!--PROVEEDORES-->
                        <li class="sidebar-item"> 
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <i class="fas fa-people-carry"></i>
                                <span class="hide-menu">Proveedores</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item">
                                    <a href="../proveedores/proveedores_buscar.php" class="sidebar-link">
                                        <span class="hide-menu">
                                        <i class="fas fa-users"></i>Ver Proveedores</span>
                                    </a>
                                </li>
                                <li class="sidebar-item"><a href="../proveedores/proveedores_agregar.php" class="sidebar-link"><span
                                            class="hide-menu"><i class="fas fa-truck-loading"></i> Agregar Proveedor
                                        </span></a>
                                </li>
                            </ul>
                        </li>


                        <!--COMPRAS-->
                        <li class="sidebar-item"> 
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <i class="fas fa-donate"></i><span class="hide-menu">Compras</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item">
                                    <a href="../compras/compras_adquirir.php" class="sidebar-link">
                                        <span class="hide-menu"><i class="fas fa-dollar-sign"></i>Comprar Productos</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../compras/compras_historial.php" class="sidebar-link">
                                        <spanclass="hide-menu"><i class="fas fa-tasks"></i> Historial de Compras</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!--CLIENTES-->
                        <li class="sidebar-item"> 
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <i class="fas fa-users"></i>
                                <span class="hide-menu">Clientes</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item">
                                    <a href="../clientes/clientes_agregar.php" class="sidebar-link">
                                        <span class="hide-menu">
                                        <i class="fas fa-id-card-alt"></i>Agregar Cliente</span>
                                    </a>
                                </li>
                                <li class="sidebar-item"><a href="../clientes/clientes_lista.php" class="sidebar-link"><span
                                            class="hide-menu"><i class="fas fa-id-card"></i>Lista de Clientes</span></a>
                                </li>
                                <!--li class="sidebar-item"><a href="../clientes/clientes_historial.php" class="sidebar-link"><span
                                            class="hide-menu"><i class="fas fa-id-badge"></i>Historial de Clientes</span></a>
                                </li-->
                            </ul>
                        </li>

                        
                        <!--fin de links a compras del menu -->
                        <!--REPORTES
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="../carpeta/plantilla.php"
                                aria-expanded="false"><i class="fas fa-clipboard-list"></i><span
                                    class="hide-menu">Reportes
                                </span></a>
                        </li>-->
                        
                        
                        <!--Historial de venttas-->
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="../ventas/ventas_historial.php"
                                aria-expanded="false"><i class="fas fa-copy"></i><span
                                    class="hide-menu">Historial de tickets
                                </span></a>
                        </li>
                        <!--Historial de cajas-->
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="../cajas/cajas_historial.php"
                                aria-expanded="false"><i class="fas fa-shopping-basket"></i><span
                                    class="hide-menu">Historial de cajas
                                </span></a>
                        </li>

                        <!--USUARIOS-->
                        <li class="sidebar-item"> 
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <i class="icon icon-people"></i>
                                <span class="hide-menu">Usuarios</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                
                                <li class="sidebar-item"><a href="../usuarios/usuarios_ver.php" class="sidebar-link"><span
                                            class="hide-menu"><i class="fas fa-user"></i>Usuarios
                                        </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../usuarios/puestos_ver.php" class="sidebar-link">
                                        <span class="hide-menu">
                                        <i class="fas fa-users"></i>Puestos</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../usuarios/horarios_ver.php" class="sidebar-link">
                                        <span class="hide-menu">
                                        <i class="fas fa-clock"></i>Horarios</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../usuarios/empleados_ver.php" class="sidebar-link">
                                        <span class="hide-menu">
                                        <i class="fas fa-address-card"></i>Empleados</span>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        
                        

						<!--EXTRAS-->
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Extra</span></li>

                        <!--CONFIGURACION
                       <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="../configuracion/configuracion.php"
                                aria-expanded="false"><i class="fas fa-cog"></i><span
                                    class="hide-menu">Configuración
                                </span></a>
                        </li>-->

                        <!--DOCUMENTACION-->
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="../../doc/tpv_doc/tpv_doc.php"
                                aria-expanded="false"><i class="fas fa-pencil-alt"></i><span
                                    class="hide-menu">Guía de usuario</span></a></li>
                       
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>