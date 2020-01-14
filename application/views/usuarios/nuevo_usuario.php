
  <body>

    <div class="container-fluid"><!-- /.first container starts -->
		  <div class="row">
				<div class="col-md-12">  
					<div class="page-header">
						<h1><i class="fa fa-cogs"></i> Panel de control <small>Usuarios/ver usuario</small></h1>
						
					</div>
				</div>
		  </div> 
		</div><!-- /.first container ends -->
		
    <div class="container-fluid principal"><!-- /.Administrador de cuentas de usuario container starts -->
		  <div class="row">
				<div class="col-md-12">	
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3 class="panel-title"><i class="fa fa-cog"></i> Administrador de cuentas de usuarios</h3>
							
						</div>
						<div class="panel-body">
							<div class="row"  id="icons">
								<div class="col-md-12">
									<ol class="breadcrumb">
										<li><a href="<? $segments = array('paneldecontrol/inicio'); echo site_url($segments)?>">Panel de control</a></li>
										<li><a href="<? $segments = array('usuarios', 'panel_control_usuario'); echo site_url($segments)?>">Usuarios</a></li>
										<li class="active">Nuevo usuario</li>
									</ol>
									<div class="row">
										<div class="col-md-6 col-md-offset-3">
										
											
									
											<?php echo validation_errors(); ?>
											<?php $attributes = array('id' => 'formNuevoUsuario','name' => 'formNuevoUsuario'); echo form_open('usuarios/login',$attributes); ?>
												<div class="form-group">
													<label for="recipient-name" class="control-label" id="MensajeUsuario" >Usuario:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
														    <input type="text" class="form-control input-lg" id="NombreUsuario" name="NombreUsuario" placeholder="Nombre de usuario">
													</div>
												</div>
												<div class="form-group">
													<label for="message-text" class="control-label" id="PassUsuario">Password:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
														    <input type="password" class="form-control input-lg" id="PasswordUsuario" name="PasswordUsuario" placeholder="Password">
													</div>
												</div>
												<div class="form-group">
													<label for="message-text" class="control-label" id="Confirma_PassUsuario">Confirma password:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
														    <input type="password" class="form-control input-lg" id="ConfirmaPassUsuario" name="ConfirmaPassUsuario" placeholder="Confirmacion">
													</div>
												</div>
												<div class="form-group">
													<label for="message-text" class="control-label" id="MailUsuario">Email:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope"></i></span>
														    <input type="email" class="form-control input-lg" id="EmailUsuario" name="EmailUsuario" placeholder="E-mail">
													</div>
												</div>
												<div class="form-group">
													<label for="message-text" class="control-label" id="IdRango">Rango:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-users"></i></span>
														    <select class="form-control" id="RangoUsuario" name="RangoUsuario">
																	<?foreach($rangos as $rango){ ?>
																	<option value="<?echo $rango->IdRango?>"><?echo $rango->NombreRango?></option>
																	<?}?>
																	
																</select>
													</div>
												</div>
											<div id="MesajeFormulario"></div>	
																			
											<button type="submit" class="btn btn-warning">Guardar</button>
									
										</div>
									</div>	
								</div>
								
							</div>
						</div>
					</div>
					
				</div> 
			</div>
    </div><!-- /.Administrador de cuentas de usuario container ends -->
    
    

      <br><br><br>

