
  <body>

    <div class="container-fluid"><!-- /.first container starts -->
        <br><br>
      <div class="row" ><!-- /.first row starts -->
        <div class="col-md-5 col-md-offset-1" >
        <ol class="breadcrumb">
					<li><a href="<? $segments = array('principal'); echo site_url($segments)?>"><i class="fa fa-home"></i>  inicio</a></li>
					<li class="active"><i class="fa fa-envelope"></i> Contacto</li>
				</ol>
        <div class="page-header">
					<h1>Envianos un mensaje</h1>
				</div>

          <?php echo validation_errors(); ?>
					<?php $attributes = array('id' => 'formContactoVisitante','name' => 'formContactoVisitante'); echo form_open('contacto/enviar_mensaje_visitante',$attributes); ?>
						<div class="form-group">
							<label for="recipient-name" class="control-label" id="MensajeNombre" >Nombre:<div > </div></label>
							<div class="input-group">
								    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
								    <input type="text" class="form-control input-lg" id="NombreContacto" name="NombreContacto" placeholder="Nombre">
							</div>
						</div>
						<div class="form-group">
							<label for="message-text" class="control-label" id="MensajeTelefono">Telefono:<div > </div></label>
							<div class="input-group">
									  <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span></span>
									  <input type="text" class="form-control input-lg" id="TelefonoContacto" name="TelefonoContacto" placeholder="Telefono con 10 digitos">
							</div>
						</div>
						<div class="form-group">
							<label for="message-text" class="control-label" id="MensajeCorreo">Correo:<div > </div></label>
							<div class="input-group">
								    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-at"></i></span>
								    <input type="text" class="form-control input-lg" id="CorreoContacto" name="CorreoContacto" placeholder="Correo electronico">
							</div>
						</div>
						
						<div class="form-group">
							<label for="message-text" class="control-label" id="MensajeMensaje">Mensaje:<div > </div></label>
							<div class="input-group">
								    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope"></i></span>
								    <textarea class="form-control" id="MensajeContacto" name="MensajeContacto" placeholder="Escribe tu mensaje" rows="3"></textarea>
							</div>
						</div>
						
						<div id="MesajeFormulario"></div>	
																			
											<button type="submit" class="btn btn-warning btn-lg btn-block">Enviar mensaje</button>

        	</div>
			<div class="col-md-5" >
				<div class="well well-lg">
					<center><img src="<?=base_url()?>images/favicon.png" width="100px" alt="" class="img-responsive"/></center>
          <h1 class="text-center">City<font color="#3775be">Colorapp</font></h1>
            
          
					<h4 class="text-center">Mandanos tus comentarios y sugenerencias a:</h4>
					<p class="text-center"> <i class="fa fa-envelope"></i> proyectos@citycolor.com.mx</p>
					<p class="text-center">Central CityColor<br> <i class="fa fa-phone"></i> 01 800 890 77 24</p>
					
					<div>

						<!-- Nav tabs -->
						<ul class="nav nav-tabs nav-justified" role="tablist">
							<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Cuernavaca Mor.</a></li>
							<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Zapopan Jal.</a></li>
							<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Mexico DF</a></li>
							
						</ul>

						<!-- Tab panes -->
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active" id="home">
								<p class="text-center"> <i class="fa fa-home"></i> Blv. Benito Juarez No. 78, Col. Las Palmas, C.P. 60050</p>
								<p class="text-center"><i class="fa fa-phone"></i>(045) 777.211.42.91</p>
								<p class="text-center">Next (01) 777.2.61.34.39</p>
								<p class="text-center">Id 92*11*65264</p>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="profile">
								<p class="text-center"> <i class="fa fa-home"> </i>Santa Teresa de Jesús No.425, int. 1, Col Camino Real, , C.P. 45040 	</p>
								<p class="text-center"><i class="fa fa-phone"></i>(33) 17.26.07.75</p>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="messages">
								<p class="text-center"> <i class="fa fa-home"> </i>Huitzilihuistl No.112, Col. Azcapotzalco, </p>
								<p class="text-center"><i class="fa fa-phone"></i>(55) 63.50.28.50</p>
							</div>
							
						</div>
					
					<br>
					<h4 class="text-center">Redes sociales</h4>
          <p class="text-center">Tambien nos encontramos en las redes sociales </hp>
          <p class="text-center">
            <a href="https://www.facebook.com/citycolor.ciudaddelcolor"><i class="fa fa-facebook-square fa-4x"></i></a>
            <a href="https://twitter.com/citycolor1"><i class="fa fa-twitter-square fa-4x"></i></a>
            <a href="https://youtu.be/_vQ2XftvHlM"><i class="fa fa-youtube-square fa-4x"></i></a>
            <a href="#"><i class="fa fa-instagram fa-4x"></i></a>
          </p>
          
          

					</div>
				</div>
			</div>
      </div><!-- /.first row ends -->
      <br>
       
      <br><br><br>

