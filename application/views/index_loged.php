
  <body>

    <div class="container-fluid" id="principal"><!-- /.first container starts -->
        <br><br>
      <div class="row" ><!-- /.first row starts -->
        <div class="col-md-12" >

          <center><img src="<?=base_url()?>images/favicon.png" width="150px" alt="" class="img-responsive"/></center>
          <h1 class="text-center">City<font color="#3775be">ColorApp</font></h1>
          <h4 class="text-center">Servicio de mantenimiento de residencial y comercial </h4>

        </div>

      </div><!-- /.first row ends -->
      <br>
        <div class="row" id="icons"><!-- /.second row starts -->
        <div class="col-md-2 col-md-offset-1 iconos_modulos" >
        	<a href="#camaras1" class="liga">	
          	<h1 class="text-center "><span class="glyphicon glyphicon-facetime-video" aria-hidden="true"></span></h1>
         </a> 
          <h4 class="text-center ligas_modulos">Camaras ip</h4>
 		  </div>
       
        <div class="col-md-2 iconos_modulos ">
        	<a href="#electrico1">
          <h1 class="text-center"><span class="glyphicon glyphicon-flash" aria-hidden="true"></span></h1>
          </a>
          <h4 class="text-center ligas_modulos">Electricidad</h4>
          
        </div>
        <div class="col-md-2 iconos_modulos">
        	<a href="#hidraulico1">
          <h1 class="text-center"><span class="glyphicon glyphicon-tint" aria-hidden="true"></span></h1>
         </a> 
          <h4 class="text-center ligas_modulos">Hidraulica</h4>
        </div>
        <div class="col-md-2 iconos_modulos">
        	<a href="#mantenimiento1" >
          <h1 class="text-center"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></h1>
         </a>
          <h4 class="text-center ligas_modulos">Mantenimiento</h4>
        </div>
        <div class="col-md-2 iconos_modulos">
        	<a href="<? $segments = array('contacto/contacto_visitante'); echo site_url($segments)?>">
          <h1 class="text-center"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></h1>
         </a>
          <h4 class="text-center">Contacto </h4>
        </div>


      </div><!-- /.second row ends -->
      <br>
      

    </div><!-- /.first container ends -->
		
    <br><br><br>
    <div class="container-fluid">
    	<div clas="row">
    	
    	<div class="col-md-12" >
          <br><br>
          <h1 class="text-center">Bienvenido <? echo $NombreUsuario?></h1>
          <center>
          <img src="<?=base_url()?>images/usuario.jpg" width="200px" alt="" class="img-responsive img-circle areaImg" />
          </center>
          <h3 class="text-center">Inicia dando un vistazo a tus inmuebles, disfruta de la experiencia de nuestra aplicacion.</h3><br>
          <center>
          <a href="<? $segments = array('principal/usuario_panel'); echo site_url($segments)?>">
          <button type="button" class="btn btn-primary btn-lg" >
            Ver inmuebles
          </button>
          </a>
          </center>
          <br><br><br><br>
    	</div>
    </div>
    
    
    
    <div class="container-fluid"><!-- /.fourth container starts -->
      <div class="row"><!-- /.Second row starts -->
          <div class="col-md-4" id="camaras1" name="camaras1">
              <center><img src="<?=base_url()?>images/Foto-camaras.png" width="200px" alt="" class="img-responsive img-circle"/></center>
              <h2 class="text-center">Camaras</h2>
              <p class="text-center">
                  Monitorear la activdad de sus inmuebles  mediante camaras desde su computadora o dispisitivo movil
              </p>
          </div>
          <div class="col-md-4" id="electrico1" name="electrico1">
              <center><img src="<?=base_url()?>images/fluorescent.jpg" width="200px" alt="" class="img-responsive img-circle"/></center>
              <h2 class="text-center">Electrico</h2>
              <p class="text-center">
                  Mantente al tanto de el hambito electrico de tu inmueble, desde las luminarias, los aparatos electricos y los alimentadores de corriente.

              </p>
          </div>
          <div class="col-md-4" id="hidraulico1" name="hidraulico1">
              <center><img src="<?=base_url()?>images/drippy.jpg" width="200px" alt="" class="img-responsive img-circle"/></center>
              <h2 class="text-center" >Hidraulico</h2>
              <p class="text-center">
                  Un inventario completo sobre la parte hidraulica de tu edificio, desde albercas y siternas, hasta las tuberias y las llaves de servicio.

              </p>
          </div>


      </div>
    </div><!-- /.Second container ends -->
    <br>
    <div class="container-fluid"><!-- /.fourth container starts -->
      <div class="row"><!-- /.Second row starts -->
          <div class="col-md-6" id="mantenimiento1" name="mantenimiento1">
              <center><img src="<?=base_url()?>images/hammer-man.jpg" width="200px" alt="" class="img-responsive img-circle"/></center>
              <h2 class="text-center">Mantenimiento</h2>
              <p class="text-center">
                  Conoce el estado de cada elemento de tu inmueble, las paredes nececitan pintura, hay que impermeabilizar de nuevo, enterate.
              </p>
          </div>
          
          <div class="col-md-6">
              <center><img src="<?=base_url()?>images/movil.jpg" width="200px" alt="" class="img-responsive img-circle"/></center>
              <h2 class="text-center" >Contactanos</h2>
              <p class="text-center">
                  Ponte en contacto con nosotros en cualquier momento, siempre estamos listos para apoyarte, solo da click <a href="<? $segments = array('contacto/contacto_visitante'); echo site_url($segments)?>">aqui</a> y nos podremos en contacto con tigo

              </p>
          </div>


      </div>
    </div><!-- /.Second container ends -->
      <br><br><br>

