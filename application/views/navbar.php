<body>

    <div class="container-fluid" id="principal"><!-- /.first container starts -->
        <nav class="navbar navbar-default navbar-fixed-top navbar-static-top opaque-navbar "><!-- Inicia la barra de menu -->
            <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<? $segments = array('principal'); echo site_url($segments)?>"><img alt="Brand" src="<?=base_url()?>images/brocha11.png" height="49px" width="35px"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">citycolor.com.mx <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Inicio</a></li>
                                <li><a href="#">Servicios</a></li>
                                <li><a href="#">Productos</a></li>
                                <li><a href="#">Galeria</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Nosotros</a></li>
                            </ul>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><? echo $NombreUsuario?> <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<? $segments = array('principal/usuario_panel'); echo site_url($segments)?>"><i class="fa fa-user"></i>  Perfil</a></li>
																<li><a href="<? $segments = array('contacto/contacto_visitante'); echo site_url($segments)?>"><i class="fa fa-envelope-o"></i> Contacto</a></li>
																<li><a href="#"><i class="fa fa-users"></i> Nosotros</a></li>
																<li><a href="#"><i class="fa fa-question-circle"></i> FAQs</a></li>
																<li><a href="#"> <i class="fa fa-list"></i> Terminos y condiciones</a></li>
                                <?if($permisos){ ?>
                                <li><a href="<? $segments = array('paneldecontrol/inicio'); echo site_url($segments)?>"><i class="fa fa-cogs"></i> Panel de control</a></li>
                                <?}?>
                                
                                <li class="divider"|></li>
                                <li data-toggle="modal" data-target="#loginModal"><a href="<? $segments = array('usuarios', 'logout'); echo site_url($segments)?>"><i class="fa fa-power-off"></i> Cerrar sesion</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav><!-- Termina la barra de menu -->
    </div><!-- /.first container ends -->
    <br><br>
