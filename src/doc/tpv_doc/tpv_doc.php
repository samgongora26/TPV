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
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,700;1,400&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        include '../../../componentes/nav_doc.php';
    ?>

    <div class="jumbotron jumbotron-fluid text-white" style="background-image: linear-gradient(to top, #1e3c72 0%, #1e3c72 1%, #2a5298 100%);">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="col-sm-10 col-md-6 col-lg-6 mx-auto ">
                        <div class="">
                            
                                <img src="../../assets/images/undraw_Cloud_docs_re_xjht.svg" style="height:180px;" alt="" >
                            
                        </div>        
                    </div>
                </div>
                <div class="col-md-8">
                    <h1 class="display-3" style="font-family: 'Roboto', sans-serif;">Guía de usuario TPV</h1>
                    <p class="lead">Esta es la documentación del sistema de punto de ventas junto con la guía de usuario y las preguntas frecuentes</p>
                </div>
            </div>
            
        </div>
    </div>

    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- CONTENEDOR -->

            <div class="container-fluid">
                <!-- AQUI EMPEZAMOS A AGREGAR DISEÑO DEL CENTRO -->

                        <div class="col-md-11 mx-auto">
                            <div class="col-12 mt-4">
                                <h2>Adaptable, confiable y seguro...</h2>
                                <div class="card-deck">
                                    <div class="card">
                                        <img class="card-img-top img-fluid" src="../../assets/images/big/storage.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">Control de inventario</h4>
                                            
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img class="card-img-top img-fluid" src="../../assets/images/big/cashier2.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">Gestión de turnos y horarios</h4>
                                            
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img class="card-img-top img-fluid" src="../../assets/images/big/pos.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">Multiticket y multi caja</h4>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!---INTRODUCCION ---->
                        <div class="col-md-11 mx-auto mt-3">
                        
                                    <div class="card mt-3">
                                        <div class="card-body">
                                            <h1>Introducción</h1>
                                            <hr>    
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <i  class="fas fa-book fa-3x"  ></i>
                                                </div>
                                                <div class="col-md-10">
                                                    <h3>¡Gracias!</h3>
                                                    <p>Gracias, por haber adquirido TPV, ahora nosotros te guiaremos para que tu punto de ventas esté preparado para comenzar.</p>
                                                    <p>TPV es un sistema de punto de ventas adaptable a las necesidades del cliente. Acontinuación, dentro de esta guía podrá explorar de manera guiada el funcionamiento correcto del sistema.</p>
                                                </div>
                                            </div>
                                            <!--div class="row mt-2">
                                                <div class="col-md-2">
                                                    <i  class="fas fa-address-book fa-5x"  ></i>
                                                </div>
                                                <div class="col-md-10">
                                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis corporis omnis nemo, numquam, vel autem harum dolor non, consequuntur architecto molestias velit voluptatibus tempore ratione officia? Doloribus repellat obcaecati error.</p>
                                                </div>
                                            </div-->
                                        </div>
                                    </div>
                                                         
                        </div>


                        <div class="row mt-3">
                        
                                <div class="col-md-6 mx-auto mt-3" >
                                    <div class="card "style="background-image: linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%);">
                                        <div class="card-body text-center">
                                            <h3 class="">Desarrolladores</h3>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <a class="" target="_blank" href="https://github.com/samgongora26" >
                                                        <img src="../../assets/images/saul.jpg" alt="user" class="rounded-circle" width="120">
                                                    </a>
                                                </div>
                                                <div class="col-md-3">
                                                    <a class="" target="_blank" href="https://github.com/satswere" >
                                                        <img src="../../assets/images/luis.jpeg" alt="user" class="rounded-circle" width="120">
                                                    </a>
                                                </div>
                                                <div class="col-md-3">
                                                    <a class="" target="_blank"  href="https://github.com/Feltydany" >
                                                        <img src="../../assets/images/daniel.jpg" alt="user" class="rounded-circle" width="120">
                                                    </a>
                                                </div>
                                                <div class="col-md-3">
                                                    <a class="" target="_blank"  href="https://github.com/silvercrow185" >
                                                        <img src="../../assets/images/osly.jpg" alt="user" class="rounded-circle" width="120">
                                                    </a>
                                                </div>
                                            </div>    
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mx-auto mt-3">
                                    <div class="card ">
                                        <div class="card-body">
                                            <h2>Contacto</h2>
                                            <hr>    
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <ul>
                                                        <li>
                                                            <span class="fas fas fa-at"  ></span> <a href="mailto:saul.santiago2426@gamail.com">Enviar correo</a>
                                                        </li>
                                                        <li>
                                                            <span class="fas fas fa-at"  ></span> <a href="mailto:oossllyy14@gmail.com">Enviar correo</a>
                                                        </li>
                                                        <li>
                                                            <span class="fas fas fa-at"  ></span> <a href="mailto:verjruhfukeufn@gmail.com">Enviar correo</a>
                                                        </li>
                                                        <li>
                                                            <span class="fas fas fa-at"  ></span> <a href="mailto:daniel.gm.1700@gmail.com">Enviar correo</a>
                                                        </li>
                                                    
                                                    </ul>

                                                </div>
                                            </div>
                                            <!--div class="row mt-2">
                                                <div class="col-md-2">
                                                    <i  class="fas fa-address-book fa-5x"  ></i>
                                                </div>
                                                <div class="col-md-10">
                                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis corporis omnis nemo, numquam, vel autem harum dolor non, consequuntur architecto molestias velit voluptatibus tempore ratione officia? Doloribus repellat obcaecati error.</p>
                                                </div>
                                            </div-->
                                        </div>
                                    </div>
                                </div>
                        </div>

                        <!---------------SOPORTE----------------------->
                        <div class="col-md-11 mx-auto">
                                <div class="p-4 border shadow-sm rounded">
									<h4 class="card-title">Soporte</h4>
									<hr>
									<div class="row">
										<div class="col-md-6 border-right">
											<ul class="list-style-none">
												<li class="my-2 border-bottom pb-3">
													<span class="font-weight-medium text-dark"><i class="icon-note mr-2 text-success"></i> Incluye:</span>
												</li>
												<li class="my-3">
													<span><i class="icon-pencil mr-2 text-success"></i> Resolver preguntas o incorformidades acerca del sistema.</span>
												</li>
												<li class="my-3">
													<span><i class="icon-pencil mr-2 text-success"></i> Dar soluciones a reportes de error durante el uso del sistema.</span>
												</li>	
											</ul>
										</div>
										<div class="col-md-6">
											<ul class="list-style-none">
												<li class="my-2 border-bottom pb-3">
													<span class="font-weight-medium text-dark"><i class="icon-note mr-2 text-danger"></i> No incluye (después de la entrega del mismo):</span>
												</li>
												<li class="my-3">
													<span><i class="icon-pencil mr-2 text-danger"></i> Personalización del trabajo</span>
												</li>
												<!--li class="my-3">
													<span><i class="icon-pencil mr-2 text-danger"></i> La instalación del tarabajo</span>
												</li-->	
												<li class="my-3">
													<span><i class="icon-pencil mr-2 text-danger"></i> Soporte por código realizado por terceros anexados al sistema</span>
												</li>
												<li class="my-3">
													<span><i class="icon-pencil mr-2 text-danger"></i> Soporte a integraciones no realizados por el equipo de desarrollo original</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
                        </div>
            </div>
           
            <footer class="footer text-center text-muted">
                All Rights Reserved. Designed and Developed by <a target="_blank"  href="https://github.com/samgongora26">  Saúl Góngora   </a>,<a target="_blank"  href="https://github.com/satswere">  Luis Tzun   </a>,<a target="_blank"  href="https://github.com/Feltydany">    Daniel Gónzalez </a> y <a target="_blank"  href="https://github.com/silvercrow185">  Osly Donovan    </a>
            </footer>
</body>
</html>